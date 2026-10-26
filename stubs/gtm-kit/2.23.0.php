<?php
/**
 * Generated stub declarations for gtm-kit 2.23.0.
 * @see https://github.com/woocommerce/php-stubs
 */

namespace Google\GoogleTagGatewayLibrary\Proxy {
    /** Runner class to execute the proxy request. */
    final class Runner
    {
        /**
         * Request helper functions.
         *
         * @var \Google\GoogleTagGatewayLibrary\Http\RequestHelper
         */
        private \Google\GoogleTagGatewayLibrary\Http\RequestHelper $helper;
        /**
         * Measurement request helper.
         *
         * @var Measurement
         */
        private \Google\GoogleTagGatewayLibrary\Proxy\Measurement $measurement;
        /**
         * Constructor.
         *
         * @param \Google\GoogleTagGatewayLibrary\Http\RequestHelper $helper
         */
        public function __construct(\Google\GoogleTagGatewayLibrary\Http\RequestHelper $helper, \Google\GoogleTagGatewayLibrary\Proxy\Measurement $measurement)
        {
        }
        /** Run the core logic for forwarding traffic. */
        public function run(): void
        {
        }
        /** Create an instance of the runner with the system defaults. */
        public static function create()
        {
        }
    }
}
namespace Google\GoogleTagGatewayLibrary\Http {
    /**
     * Isolates network requests and other methods like exit to inject into classes.
     */
    class RequestHelper
    {
        /**
         * Helper method to exit the script early and send back a status code.
         *
         * @param int $statusCode
         */
        public function invalidRequest(int $statusCode): void
        {
        }
        /* Start of GTM Kit modified code. */
        /**
         * Seconds allowed for opening the connection to the gateway service.
         *
         * Without a limit, curl waits up to five minutes on a host that silently
         * drops outbound traffic, and every visitor request holds a PHP worker for
         * that long. A pool full of waiting workers takes the whole site down, not
         * only the tag.
         *
         * @var int
         */
        protected int $connectTimeout = 5;
        /**
         * Seconds allowed for the whole exchange with the gateway service.
         *
         * @var int
         */
        protected int $timeout = 10;
        /**
         * Cookies the gateway service is allowed to receive.
         *
         * The proxy lives under the plugins directory, which is the path WordPress
         * scopes its admin authentication cookie to, so a logged-in administrator's
         * request here carries a working admin session. Only the measurement
         * cookies Google's tags use are passed on; every other cookie on the site's
         * domain, login and shop sessions included, stays on the site.
         *
         * @var string
         */
        private const FORWARDED_COOKIE_PATTERN = '/^(_ga|_gid|_gcl|FP[A-Z])/';
        /**
         * Response headers that describe the exchange with the gateway service
         * rather than the content, and are wrong once the response is re-sent.
         *
         * The HTTP client has already undone the transfer encoding and the body
         * may have been rewritten, so a forwarded encoding or length describes a
         * body that is no longer the one being sent.
         *
         * @var string[]
         */
        private const UNFORWARDED_RESPONSE_HEADERS = ['alt-svc', 'connection', 'content-length', 'keep-alive', 'proxy-authenticate', 'proxy-authorization', 'te', 'trailer', 'transfer-encoding', 'upgrade'];
        /**
         * Drop every cookie the gateway service has no use for from the request headers.
         *
         * @param string[] $headers Request headers as `name: value` strings.
         * @return string[]
         */
        public static function filterRequestHeaders(array $headers): array
        {
        }
        /**
         * Whether a response header from the gateway service may be re-sent to the visitor.
         *
         * @param string $header A response header as a `name: value` string.
         */
        public static function isForwardableResponseHeader(string $header): bool
        {
        }
        /* End of GTM Kit modified code. */
        /**
         * Set the headers from a headers array.
         *
         * @param string[] $headers
         */
        public function setHeaders(array $headers): void
        {
        }
        /**
         * Sanitizes a path to a URL path.
         *
         * This function performs two critical actions:
         * 1. Extract ONLY the path component, discarding any scheme, host, port,
         *    user, pass, query, or fragment.
         *    Primary defense against Server-Side Request Forgery (SSRF).
         * 2. Normalize the path to resolve directory traversal segments like
         *    '.' and '..'.
         *    Prevents path traversal attacks.
         *
         * @param string $pathInput The raw path string.
         * @return string|false The sanitized and normalized URL path.
         */
        public static function sanitizePathForUrl(string $pathInput): string
        {
        }
        /**
         * Helper method to send requests depending on the PHP environment.
         *
         * @param string $method
         * @param string $url
         * @param array $headers
         * @param string $body
         *
         * @return array{
         *      body: string,
         *      headers: string[],
         *      statusCode: int,
         * }
         */
        public function sendRequest(string $method, string $url, array $headers = [], ?string $body = null): array
        {
        }
        /**
         * Send a request using curl.
         *
         * @param string $method
         * @param string $url
         * @param array $headers
         * @param string $body
         *
         * @return array{
         *      body: string,
         *      headers: string[],
         *      statusCode: int,
         * }
         */
        protected function sendCurlRequest(string $method, string $url, array $headers = [], ?string $body = null): array
        {
        }
        /**
         * Send a request using file_get_contents.
         *
         * @param string $method
         * @param string $url
         * @param array $headers
         * @param string $body
         *
         * @return array{
         *      body: string,
         *      headers: string[],
         *      statusCode: int,
         * }
         */
        protected function sendFileGetContents(string $method, string $url, array $headers = [], ?string $body = null): array
        {
        }
        protected function isCurlInstalled(): bool
        {
        }
        /** @param string[] $headers */
        protected function normalizeHeaders(array $headers): array
        {
        }
        /**
         * Takes a single URL query parameter which has not been encoded and
         * ensures its key & value are encoded.
         *
         * @param string $parameter Query parameter to encode.
         * @return string The new query parameter encoded.
         */
        public static function encodeQueryParameter(string $parameter): string
        {
        }
    }
    /** Request context populated with common server set values. */
    final class ServerRequestContext
    {
        /**
         * Server set associative array. Normally the same as $_SERVER.
         *
         * @var array
         */
        private $serverParams;
        /**
         * Associative array of query parameters. Normally the same as $_GET
         *
         * @var array
         */
        private $queryParams;
        /**
         * The current server request's body.
         *
         * @var string
         */
        private $requestBody;
        /**
         * Constructor
         *
         * @param array $serverParams
         * @param array $queryParams
         * @param string $requestBody
         */
        public function __construct(array $serverParams, array $queryParams, string $requestBody)
        {
        }
        /** Create an instance with the system defaults. */
        public static function create()
        {
        }
        /**
         * Fetch the current request's request body.
         *
         * @return string The current request body.
         */
        public function getBody(): string
        {
        }
        public function getRedirectorFile()
        {
        }
        /**
         * Get headers from the current request as an array of strings.
         * Similar to how you set headers using the `headers` function.
         *
         * @param array $filterHeaders Filter out headers from the return value.
         */
        public function getHeaders(array $filterHeaders = []): array
        {
        }
        /**
         * Get the request method made for the current request.
         *
         * @return string
         */
        public function getMethod()
        {
        }
        /** Get and validate the geo parameter from the request. */
        public function getGeoParam()
        {
        }
        /** Get the tag id query parameter from the request.  */
        public function getTagId()
        {
        }
        /** Get the destination query parameter from the request.  */
        public function getDestination()
        {
        }
        /**Get the measurement path query parameter from the request.  */
        public function getMeasurementPath()
        {
        }
    }
}
namespace Google\GoogleTagGatewayLibrary\Proxy {
    /** Core measurement.php logic. */
    final class Measurement
    {
        private const TAG_ID_QUERY = '?id=';
        private const GEO_QUERY = '&geo=';
        private const PATH_QUERY = '&s=';
        private const FPS_PATH = 'PHP_GTG_REPLACE_PATH';
        /**
         * Reserved request headers that should not be sent as part of the
         * measurement request.
         *
         * @var array<string, bool>
         */
        private const RESERVED_HEADERS = [
            # PHP managed headers which will be auto populated by curl or file_get_contents.
            'HTTP_ACCEPT_ENCODING' => true,
            'HTTP_CONNECTION' => true,
            'HTTP_CONTENT_LENGTH' => true,
            'CONTENT_LENGTH' => true,
            'HTTP_EXPECT' => true,
            'HTTP_HOST' => true,
            'HTTP_TRANSFER_ENCODING' => true,
            # Sensitive headers to exclude from all requests.
            'HTTP_AUTHORIZATION' => true,
            'HTTP_PROXY_AUTHORIZATION' => true,
            'HTTP_X_API_KEY' => true,
        ];
        /**
         * Request helper.
         *
         * @var \Google\GoogleTagGatewayLibrary\Http\RequestHelper
         */
        private \Google\GoogleTagGatewayLibrary\Http\RequestHelper $helper;
        /**
         * Server request context.
         *
         * @var \Google\GoogleTagGatewayLibrary\Http\ServerRequestContext
         */
        private \Google\GoogleTagGatewayLibrary\Http\ServerRequestContext $serverRequest;
        /**
         * Create the measurement request handler.
         *
         * @param \Google\GoogleTagGatewayLibrary\Http\RequestHelper $helper
         * @param \Google\GoogleTagGatewayLibrary\Http\ServerRequestContext $serverReqeust
         */
        public function __construct(\Google\GoogleTagGatewayLibrary\Http\RequestHelper $helper, \Google\GoogleTagGatewayLibrary\Http\ServerRequestContext $serverRequest)
        {
        }
        /** Run the measurement logic. */
        public function run()
        {
        }
        /**
         * @param string[] $headers
         */
        private static function isScriptResponse(array $headers): bool
        {
        }
        /**
         * Checks if the response is a redirect response.
         * @param int $statusCode
         */
        private static function isRedirectResponse(int $statusCode): bool
        {
        }
    }
}
namespace TLA_Media\GTM_Kit\Abilities {
    /**
     * Describes GTM Kit's setup to AI assistants through the WordPress Abilities API.
     *
     * Three abilities answer three questions: how the container is loaded, what
     * consent GTM Kit sets, and whether tracking is healthy. Each answer comes
     * from the class the settings screen, Site Health or the admin notices
     * already ask, so an assistant and the site owner can never be told
     * different things about the same site.
     *
     * Every ability is read-only and limited to users who can manage options.
     * None of them makes an HTTP request: health checks that depend on one are
     * reported from the result the scheduled check stored, and a check that
     * stores nothing is left out. Container environment values and licence data
     * never appear in an answer.
     */
    final class Abilities
    {
        /**
         * The ability category slug.
         *
         * @var string
         */
        public const CATEGORY = 'gtm-kit';
        /**
         * The ability reporting how the container is loaded.
         *
         * @var string
         */
        public const GET_CONFIGURATION = 'gtm-kit/get-configuration';
        /**
         * The ability reporting the consent setup.
         *
         * @var string
         */
        public const GET_CONSENT_STATUS = 'gtm-kit/get-consent-status';
        /**
         * The ability reporting tracking health.
         *
         * @var string
         */
        public const GET_TRACKING_HEALTH = 'gtm-kit/get-tracking-health';
        /**
         * The Google tag gateway states.
         *
         * @var array<int, string>
         */
        private const GATEWAY_STATES = ['off', 'active', 'falling_back', 'blocked_by_custom_domain'];
        /**
         * Plugin options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        private \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options)
        {
        }
        /**
         * Hook the registration into the Abilities API.
         *
         * The registry fires its hooks the first time something asks for it, on
         * any kind of request, so the callbacks are attached unconditionally and
         * cost nothing until an ability is listed or run.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         *
         * @return void
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options): void
        {
        }
        /**
         * Whether GTM Kit registers its abilities on this site.
         *
         * @return bool
         */
        private static function is_enabled(): bool
        {
        }
        /**
         * Register the GTM Kit ability category.
         *
         * @return void
         */
        public function register_category(): void
        {
        }
        /**
         * Register the abilities.
         *
         * @return void
         */
        public function register_abilities(): void
        {
        }
        /**
         * Whether the current user may run the abilities.
         *
         * @return bool
         */
        public function can_read(): bool
        {
        }
        /**
         * Report how GTM Kit loads Google Tag Manager.
         *
         * @return array<string, mixed>
         */
        public function get_configuration(): array
        {
        }
        /**
         * Report the consent setup.
         *
         * @return array<string, mixed>
         */
        public function get_consent_status(): array
        {
        }
        /**
         * Report tracking health from the checks the site owner sees.
         *
         * The settings API test is not included: it works by sending a request
         * from the server to itself, and stores no result to read instead.
         *
         * @return array<string, mixed>
         */
        public function get_tracking_health(): array
        {
        }
        /**
         * Build the arguments shared by every ability.
         *
         * @param string               $label The ability label.
         * @param string               $description The ability description.
         * @param array<string, mixed> $output_schema The output schema.
         * @param callable             $execute_callback The callback building the answer.
         *
         * @return array<string, mixed>
         */
        private function ability_args(string $label, string $description, array $output_schema, callable $execute_callback): array
        {
        }
        /**
         * The Google tag gateway state, as the gateway itself resolves it.
         *
         * @return string One of GATEWAY_STATES.
         */
        private function get_gateway_state(): string
        {
        }
        /**
         * The names of the integrations that are switched on and whose plugin is active.
         *
         * Read from the same lists the Integrations settings page shows.
         *
         * @return array<int, string>
         */
        private function get_active_integrations(): array
        {
        }
        /**
         * The stored result of the sample page check.
         *
         * The answers stay three-valued: null means the last check could not
         * settle the question, which is not the same as no.
         *
         * @param \TLA_Media\GTM_Kit\Common\SnippetScan $snippet_scan The scan engine.
         *
         * @return array<string, mixed>|null The result, or null when no check is stored.
         */
        private function get_snippet_scan(\TLA_Media\GTM_Kit\Common\SnippetScan $snippet_scan): ?array
        {
        }
        /**
         * Reduce a Site Health result to plain text an assistant can read.
         *
         * @param array<string, mixed> $result A result built by SiteHealth::build_result().
         *
         * @return array<string, string>
         */
        private static function to_check(array $result): array
        {
        }
        /**
         * Strip markup from Site Health copy, keeping paragraphs apart.
         *
         * @param string $html The HTML.
         *
         * @return string
         */
        private static function to_plain_text(string $html): string
        {
        }
        /**
         * The output schema of the configuration ability.
         *
         * @return array<string, mixed>
         */
        private static function configuration_schema(): array
        {
        }
        /**
         * The output schema of the consent ability.
         *
         * @return array<string, mixed>
         */
        private static function consent_schema(): array
        {
        }
        /**
         * The output schema of the tracking health ability.
         *
         * @return array<string, mixed>
         */
        private static function tracking_health_schema(): array
        {
        }
    }
}
namespace TLA_Media\GTM_Kit\Admin {
    trait AssetsTrait
    {
        /**
         * Enqueue assets.
         *
         * @param string $page_slug The page slug.
         * @param string $script_handle The script handle.
         * @param string $path The plugin path.
         * @param string $url The plugin URL.
         * @param string $domain The translation domain.
         * @param bool   $localize Localize the script.
         * @param bool   $settings_dependency Is it depending on the settings script.
         */
        protected function enqueue_assets(string $page_slug, string $script_handle, string $path = '', string $url = '', string $domain = 'gtm-kit', bool $localize = true, bool $settings_dependency = false): void
        {
        }
    }
    /**
     * AbstractOptionsPage
     */
    abstract class AbstractOptionsPage
    {
        use \TLA_Media\GTM_Kit\Admin\AssetsTrait;
        /**
         * That's where plugin options are saved in wp_options table.
         *
         * @var string
         */
        protected string $option_name = 'gtmkit';
        /**
         * Plugin options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        protected \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Utilities
         *
         * @var \TLA_Media\GTM_Kit\Common\Util
         */
        protected \TLA_Media\GTM_Kit\Common\Util $util;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util An instance of Util.
         */
        final public function __construct(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util)
        {
        }
        /**
         * Register frontend
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options The Options instance.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util The Util instance.
         * @throws \RuntimeException If called on the abstract class directly.
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util): void
        {
        }
        /**
         * Create an instance of the options page.
         * This method should be implemented by concrete classes.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options The Options instance.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util The Util instance.
         * @return AbstractOptionsPage
         */
        abstract protected static function create_instance(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util): \TLA_Media\GTM_Kit\Admin\AbstractOptionsPage;
        /**
         * Adds the admin page to the menu.
         *
         * The settings shell owns in-app navigation, so the concrete top-level page
         * overrides this to register a single menu entry. The default submenu
         * registration is kept concrete so add-ons that subclass this base against
         * an older core (and do not override it) keep loading without a fatal.
         */
        public function add_admin_page(): void
        {
        }
        /**
         * Renders the admin page.
         */
        public function render(): void
        {
        }
        /**
         * Configure the admin page using the settings API.
         */
        abstract public function configure(): void;
        /**
         * Get the capability required to view the admin pages.
         *
         * @return string
         */
        protected function get_capability(): string
        {
        }
        /**
         * Get the admin page menu title.
         *
         * @return string
         */
        protected function get_menu_title(): string
        {
        }
        /**
         * Get the admin page menu slug.
         *
         * This slug must be unique.
         *
         * @return string
         */
        abstract protected function get_menu_slug(): string;
        /**
         * Get the admin page title.
         *
         * @return string
         */
        abstract protected function get_page_title(): string;
        /**
         * Get the parent slug of the admin page.
         *
         * @return string
         */
        abstract protected function get_parent_slug(): string;
        /**
         * The position in the menu order this item should appear.
         *
         * @return int|null
         */
        protected function get_position(): ?int
        {
        }
        /**
         * Enqueue admin page scripts and styles.
         *
         * @param mixed $hook Current hook.
         */
        abstract public function enqueue_page_assets($hook): void;
        /**
         * Localize script.
         *
         * @param string $page_slug The page slug.
         * @param string $script_handle The script handle.
         */
        abstract public function localize_script(string $page_slug, string $script_handle): void;
        /**
         * Add body class.
         *
         * @param string|null $classes The body classes.
         *
         * @return string
         */
        public function admin_body_class(?string $classes): string
        {
        }
        /**
         * Error page HTML
         *
         * @param string $id The HTML ID attribute of the main container div.
         * @param string $footer The centered footer content.
         */
        public function settings_error_page(string $id = 'gtmkit-settings', string $footer = ''): void
        {
        }
        /**
         * Clear the script settings cache.
         *
         * @return void
         */
        public function clear_script_settings_cache(): void
        {
        }
        /**
         * Get upgrade opportunities for the upsell surfaces.
         *
         * @return object
         */
        protected function get_upgrade_opportunities(): object
        {
        }
    }
    /**
     * Class for the admin REST API.
     */
    final class AdminAPI
    {
        /**
         * An instance of Options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        private \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * An instance of Util.
         *
         * @var \TLA_Media\GTM_Kit\Common\Util
         */
        private \TLA_Media\GTM_Kit\Common\Util $util;
        /**
         * Constructor
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util An instance of Util.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util)
        {
        }
        /**
         * Initialize REST
         *
         * @return void
         */
        public function rest_init()
        {
        }
        /**
         * Register REST routes
         *
         * @return void
         */
        public function register_rest_routes(): void
        {
        }
        /**
         * Ask Stape for the loader it issues, on the site owner's request.
         *
         * @return \WP_REST_Response
         */
        public function refresh_sgtm_loader(): \WP_REST_Response
        {
        }
        /**
         * Store a loader from the code the site owner copied out of Stape.
         *
         * The code goes through the same parser as an API response and is never
         * stored or printed as it is.
         *
         * @param \WP_REST_Request $request The request.
         *
         * @return \WP_REST_Response
         */
        public function paste_sgtm_loader(\WP_REST_Request $request): \WP_REST_Response
        {
        }
        /**
         * Answer the Site Health reachability check.
         *
         * Deliberately does nothing: the check only needs proof that a request
         * through the same method, namespace and permission check as a settings
         * save reached this code.
         *
         * @return array{reachable: bool}
         */
        public function health(): array
        {
        }
        /**
         * Refuse a save that switches the Google tag gateway on when it cannot serve.
         *
         * The checks run afresh here rather than from a stored result, because
         * the site owner may have just fixed what failed last time. A refusal
         * rejects the whole save and says why, rather than letting the rest land
         * while the toggle quietly flips back off.
         *
         * @param mixed $submitted The decoded request body.
         *
         * @return \WP_Error|null
         */
        private function refuse_gateway_switch_on($submitted): ?\WP_Error
        {
        }
        /**
         * Explain why the Google tag gateway could not be switched on.
         *
         * @param string $reason One of the gateway processor's refusal reasons.
         *
         * @return string
         */
        public static function get_gateway_refusal_message(string $reason): string
        {
        }
        /**
         * Set options
         *
         * The settings app adopts the response as the new saved state. If the
         * save was rejected by validation, or the values read back after the
         * write are not the values written, adopting them would quietly undo the
         * change on screen, so both cases are answered with an error instead. A
         * save that switches on a Google tag gateway that cannot serve is refused
         * the same way, for the same reason.
         *
         * A save that changes the settings a Stape-issued loader is issued for asks
         * Stape for a new one. That request never refuses the save, because a
         * failure leaves the standard loader working, so the save lands and the
         * response says what became of the loader.
         *
         * @param \WP_REST_Request $request The request.
         *
         * @return \WP_REST_Response|\WP_Error
         */
        public function set_options(\WP_REST_Request $request)
        {
        }
        /**
         * Explain a save that validation rejected, naming each setting and why.
         *
         * The message is for the user. `params` follows WordPress's convention
         * for invalid REST parameters and carries the validator's own detail per
         * setting, for support and debugging.
         *
         * @param array<mixed> $errors Validation results keyed by `group.key`.
         *
         * @return \WP_Error
         */
        private static function reject_invalid_options(array $errors): \WP_Error
        {
        }
        /**
         * Find the submitted options whose written value did not survive the read-back.
         *
         * Only keys the request carried and the save actually wrote are compared,
         * and strictly: both sides went through the same serialisation, so any
         * difference is a real one.
         *
         * @param array<string, mixed> $submitted The options the request carried.
         * @param array<string, mixed> $written The options WordPress stored.
         * @param array<string, mixed> $persisted The options as read back.
         *
         * @return array<int, string> The `group.key` of each option not kept.
         */
        public static function find_options_not_kept(array $submitted, array $written, array $persisted): array
        {
        }
        /**
         * Explain a save that did not stick, naming the likely cause.
         *
         * @param int $count The number of settings not kept.
         *
         * @return string
         */
        private function get_not_kept_message(int $count): string
        {
        }
        /**
         * Send Support Data
         *
         * A successful share also starts the live sync session, so later
         * settings saves keep the shared data current while the ticket stays
         * open.
         *
         * @param \WP_REST_Request $request The request.
         *
         * @return \WP_REST_Response
         */
        public function send_support_data(\WP_REST_Request $request): \WP_REST_Response
        {
        }
        /**
         * Wrap a result in the `{ success, data }` body the settings app reads.
         *
         * @param bool  $success Whether the action succeeded.
         * @param mixed $data The result, or the error message or details.
         *
         * @return \WP_REST_Response
         */
        private static function envelope(bool $success, $data): \WP_REST_Response
        {
        }
        /**
         * Stop the live support sync session.
         *
         * @return void
         */
        public function stop_support_sync(): void
        {
        }
        /**
         * Set notification status
         *
         * @return void
         */
        public function set_notification_status(): void
        {
        }
        /**
         * Generate GTM template based on user selections
         *
         * @return \WP_REST_Response
         */
        public function generate_template(): \WP_REST_Response
        {
        }
        /**
         * Validate notification input
         *
         * @param array<string, string>|null $input The input.
         * @return bool
         */
        private function validate_notification_input(?array $input): bool
        {
        }
        /**
         * Get JSON input
         *
         * @return array<string, string>|null
         */
        private function get_json_input(): ?array
        {
        }
    }
    /**
     * Analytics
     */
    final class Analytics
    {
        /**
         * Instance of this class
         *
         * @var Analytics
         */
        public static \TLA_Media\GTM_Kit\Admin\Analytics $instance;
        /**
         * Plugin options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        protected \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Utility
         *
         * @var \TLA_Media\GTM_Kit\Common\Util
         */
        private \TLA_Media\GTM_Kit\Common\Util $util;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util An instance of Util.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util)
        {
        }
        /**
         * Register analytics
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util An instance of Util.
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util): void
        {
        }
        /**
         * Get the singleton instance of this class.
         *
         * @return Analytics
         */
        public static function get_instance(): \TLA_Media\GTM_Kit\Admin\Analytics
        {
        }
        /**
         * Schedule daily event
         *
         * @return void
         */
        public function schedule_daily_event(): void
        {
        }
        /**
         * Send anonymous data
         *
         * @return void
         */
        public function send_anonymous_data(): void
        {
        }
    }
    /**
     * Whether GTM Kit's Consent Mode defaults have anything that can lift them.
     *
     * The defaults are a starting point that a consent platform is expected to
     * update once the visitor answers. With no platform, the defaults are all
     * the visitor ever gets: when they deny analytics storage, Google's tags run
     * without cookies for every visit, which looks healthy because data keeps
     * arriving.
     *
     * "No platform" is read from two places. The consent signal registry says
     * whether anything above GTM Kit's own defaults owns consent, such as an
     * integration with the WP Consent API. Plugin detection covers the consent
     * platforms GTM Kit knows by name. Neither can see a platform loaded by the
     * theme or inside the container, which is why the wording built on this
     * asks the site owner to check rather than asserting the site is broken.
     */
    final class ConsentDefaultsCheck
    {
        /**
         * The id of the badge on the Consent settings page.
         *
         * @var string
         */
        public const BADGE_ID = 'gtmkit_consent_defaults_without_platform';
        /**
         * Plugin options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        private \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * The consent signal registry.
         *
         * @var \TLA_Media\GTM_Kit\Frontend\ConsentSignalSourceRegistry
         */
        private \TLA_Media\GTM_Kit\Frontend\ConsentSignalSourceRegistry $registry;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options                          $options  An instance of Options.
         * @param \TLA_Media\GTM_Kit\Frontend\ConsentSignalSourceRegistry|null $registry The consent signal registry, built from the options when omitted.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options, ?\TLA_Media\GTM_Kit\Frontend\ConsentSignalSourceRegistry $registry = null)
        {
        }
        /**
         * Register the Consent settings page badge.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         *
         * @return void
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options): void
        {
        }
        /**
         * Whether the Consent Mode defaults are switched on.
         *
         * @return bool
         */
        public function are_defaults_on(): bool
        {
        }
        /**
         * Whether GTM Kit's defaults are the only thing on the site that owns consent.
         *
         * @return bool
         */
        public function is_only_source(): bool
        {
        }
        /**
         * Whether a consent source other than GTM Kit's own defaults owns consent.
         *
         * True when the consent signal registry resolves to a source registered
         * by an integration, such as one reading the WP Consent API.
         *
         * @return bool
         */
        public function has_integration_source(): bool
        {
        }
        /**
         * Whether the defaults grant analytics storage before the visitor answers.
         *
         * @return bool
         */
        public function grants_analytics(): bool
        {
        }
        /**
         * Whether the defaults are on, deny analytics storage, and nothing can lift them.
         *
         * @return bool
         */
        public function is_nothing_to_lift(): bool
        {
        }
        /**
         * Add the warning badge to the Consent settings page while the defaults have nothing to lift them.
         *
         * @param mixed $badges The badges collected so far.
         *
         * @return array<int|string, mixed>
         */
        public function add_badge($badges): array
        {
        }
    }
    /**
     * GeneralOptionsPage
     */
    final class GeneralOptionsPage extends \TLA_Media\GTM_Kit\Admin\AbstractOptionsPage
    {
        /**
         * The settings registration contract version exposed to the shell and to
         * add-ons through the `gtmkit_settings_registry` filter. Bump only with a
         * compatibility story; a field-schema or condition-grammar change is
         * breaking.
         *
         * @var int
         */
        public const SETTINGS_REGISTRY_SCHEMA_VERSION = 1;
        /**
         * The option group.
         *
         * @var string
         */
        protected string $option_group = 'general';
        /**
         * The notifications
         *
         * @var array<string, array<string, int|array<string>>|int>
         */
        protected array $notifications = [];
        /**
         * Create an instance of the options page.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options The Options instance.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util The Util instance.
         *
         * @return AbstractOptionsPage
         */
        protected static function create_instance(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util): \TLA_Media\GTM_Kit\Admin\AbstractOptionsPage
        {
        }
        /**
         * Adds the admin page to the menu.
         */
        public function add_admin_page(): void
        {
        }
        /**
         * Configure the options page.
         */
        public function configure(): void
        {
        }
        /**
         * Get the options page menu slug.
         *
         * @return string
         */
        protected function get_menu_slug(): string
        {
        }
        /**
         * Get the main admin page menu title.
         *
         * @return string
         */
        protected function get_main_menu_title(): string
        {
        }
        /**
         * Get the admin page menu title.
         *
         * @return string
         */
        protected function get_menu_title(): string
        {
        }
        /**
         * Get the options page title.
         *
         * @return string
         */
        protected function get_page_title(): string
        {
        }
        /**
         * Get the parent slug of the options page.
         *
         * @return string
         */
        protected function get_parent_slug(): string
        {
        }
        /**
         * Enqueue admin page scripts and styles.
         *
         * @param mixed $hook Current hook.
         */
        public function enqueue_page_assets($hook): void
        {
        }
        /**
         * Localize script.
         *
         * @param string $page_slug The page slug.
         * @param string $script_handle The script handle.
         */
        public function localize_script(string $page_slug, string $script_handle): void
        {
        }
        /**
         * Build the settings registration payload add-ons contribute their
         * capability/section/field schema to.
         *
         * Add-ons hook `gtmkit_settings_registry`, receiving the accumulating
         * payload and the contract version, and append entries to `fields` and
         * `sections`. Each field/section mirrors the shell's registry schema
         * (`key`, `capability`, `section`, `order`, `control`, `label`, `tier`, and
         * the declarative `visibleWhen`/`enabledWhen` conditions). Core stamps the
         * `schemaVersion`, so an add-on cannot forge a version it does not target;
         * the shell ignores a payload whose version it does not understand.
         *
         * A registered field supersedes the core upsell stub of the same `key`, so
         * add-on field UI lives in the add-on, not in core.
         *
         * @return array<string, mixed>
         */
        private function get_settings_registry(): array
        {
        }
        /**
         * What the site reports about itself, for the readout on the container settings.
         *
         * Resolved through {@see SiteEnvironment}, the same code the runtime gate
         * calls, so the readout can never claim something the frontend does not do.
         *
         * @return array{type: string, isProduction: bool, suppressesContainer: bool}
         */
        private function get_site_environment_state(): array
        {
        }
        /**
         * Resolve the admin status badges rendered above the Consent settings
         * page sections.
         *
         * Add-ons (e.g. the Premium WP Consent API integration) hook
         * `gtmkit_consent_admin_badges` to push entries shaped as
         * `[ 'id' => string, 'message' => string, 'severity' => 'info'|'warning'|'success'|'error' ]`.
         * The React app renders each entry as a Notice at the top of the
         * Consent page, so users see immediately when a higher-priority
         * consent source has taken over from the standard admin defaults.
         *
         * @return array<int, array<string, string>>
         */
        private function get_consent_admin_badges(): array
        {
        }
        /**
         * Build the list of public, UI-visible custom taxonomies offered as
         * options for taxonomy-backed settings such as the WooCommerce brand
         * source. Built-in taxonomies are excluded so the list stays focused on
         * the taxonomies a store actually uses to classify products.
         *
         * @return array<int, array<string, string>>
         */
        private function get_taxonomy_options(): array
        {
        }
        /**
         * Build the list of published pages offered as options for page-backed
         * settings.
         *
         * @return array<int, array<string, string>>
         */
        private function get_page_options(): array
        {
        }
        /**
         * Get the tutorials
         *
         * @return array<string, mixed>
         */
        private function get_tutorials(): array
        {
        }
        /**
         * Get user roles
         *
         * @return array<array<string, string>>
         */
        private function get_user_roles(): array
        {
        }
        /**
         * Get the notifications array
         *
         * @return array<string, array<string, int|array<string>>|int>
         */
        private function get_notifications_array(): array
        {
        }
        /**
         * Returns the notification count in HTML format.
         *
         * @return string The notification count in HTML format.
         */
        private function get_notification_counter(): string
        {
        }
        /**
         * Returns the notifications.
         *
         * @return object The notifications.
         */
        protected function get_notifications(): object
        {
        }
    }
    /**
     * Tells the site owner when the Google tag gateway asked for is not the one running.
     *
     * The gateway falls back to the standard loader rather than stopping when its
     * checks fail, so tracking keeps working. That is the right behaviour and it is
     * also the dangerous one: nothing on the site looks different, so without this
     * notice the setting would read as on while the container was being served the
     * old way, possibly for months.
     *
     * The notice exists only while that mismatch does, which is why it carries its
     * own dismissal rather than leaving it to the notifications system. That record
     * covers notifications currently in the set, and a notice held back by its own
     * dismissal is not one of them. The dismissal is cleared as soon as the gateway
     * recovers, so a later outage is reported again instead of being silently
     * covered by a dismissal from the previous one.
     *
     * A gateway switched on alongside a custom sGTM domain is reported by a second
     * notice. Nothing is failing in that case, so the fallback copy about checks
     * and hosts would send the owner looking for a fault that does not exist; the
     * second notice names the conflict and the two ways out instead, and keeps a
     * dismissal of its own.
     */
    final class GoogleTagGatewayNotice
    {
        /**
         * The notification id.
         *
         * @var string
         */
        public const NOTIFICATION_ID = 'gtmkit-google-tag-gateway-fallback';
        /**
         * The notification id for a gateway ruled out by a custom sGTM domain.
         *
         * @var string
         */
        public const BLOCKED_NOTIFICATION_ID = 'gtmkit-google-tag-gateway-blocked';
        /**
         * An instance of GoogleTagGateway.
         *
         * @var \TLA_Media\GTM_Kit\Common\GoogleTagGateway
         */
        private \TLA_Media\GTM_Kit\Common\GoogleTagGateway $gateway;
        /**
         * An instance of NotificationsHandler.
         *
         * @var NotificationsHandler
         */
        private \TLA_Media\GTM_Kit\Admin\NotificationsHandler $notifications_handler;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Common\GoogleTagGateway     $gateway An instance of GoogleTagGateway.
         * @param NotificationsHandler $notifications_handler An instance of NotificationsHandler.
         */
        public function __construct(\TLA_Media\GTM_Kit\Common\GoogleTagGateway $gateway, \TLA_Media\GTM_Kit\Admin\NotificationsHandler $notifications_handler)
        {
        }
        /**
         * Register the notice.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         *
         * @return void
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options): void
        {
        }
        /**
         * Add or withdraw the notices to match the current state.
         *
         * @return void
         */
        public function evaluate(): void
        {
        }
        /**
         * Add or withdraw the notice for a gateway whose checks are not passing.
         *
         * @return void
         */
        private function evaluate_fallback(): void
        {
        }
        /**
         * Add or withdraw the notice for a gateway ruled out by a custom sGTM domain.
         *
         * @return void
         */
        private function evaluate_blocked(): void
        {
        }
        /**
         * Build the notice.
         *
         * @return Notification
         */
        private function build(): \TLA_Media\GTM_Kit\Admin\Notification
        {
        }
        /**
         * Build the notice for a gateway ruled out by a custom sGTM domain.
         *
         * @return Notification
         */
        private function build_blocked(): \TLA_Media\GTM_Kit\Admin\Notification
        {
        }
    }
    /**
     * Reports the two conditions the Google tag gateway depends on, in Site Health.
     *
     * Both conditions are properties of the hosting rather than of the settings,
     * which is why they are reported here rather than left to the settings screen:
     * a site owner cannot fix either one by changing a setting, and the person who
     * can fix them is usually the host.
     *
     * The tests read the stored result and perform no request of their own, so
     * they stay fast direct tests. The requests behind them run once a day on a
     * schedule and once when the setting is switched on.
     *
     * Nothing is registered on a site that has the gateway switched off. A test
     * reporting on a feature nobody enabled is noise, and the settings screen
     * already explains why the option is unavailable when it is.
     */
    final class GoogleTagGatewaySiteHealth
    {
        /**
         * The Site Health test id for the outbound service check.
         *
         * @var string
         */
        private const SERVICE_TEST_ID = 'gtmkit_gateway_service';
        /**
         * The Site Health test id for the proxy reachability check.
         *
         * @var string
         */
        private const SCRIPT_TEST_ID = 'gtmkit_gateway_script';
        /**
         * Register the tests.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         *
         * @return void
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options): void
        {
        }
        /**
         * Add the tests to GTM Kit's Site Health group.
         *
         * @param array<string, array<string, mixed>> $tests The GTM Kit tests.
         * @param SiteHealth                          $site_health The Site Health integration.
         *
         * @return array<string, array<string, mixed>>
         */
        public function add_tests(array $tests, \TLA_Media\GTM_Kit\Admin\SiteHealth $site_health): array
        {
        }
        /**
         * Report whether the server can reach the gateway service.
         *
         * @param SiteHealth $site_health The Site Health integration.
         *
         * @return array<string, mixed> The Site Health result.
         */
        public function service_result(\TLA_Media\GTM_Kit\Admin\SiteHealth $site_health): array
        {
        }
        /**
         * Report whether the gateway address answers over the web.
         *
         * @param SiteHealth $site_health The Site Health integration.
         *
         * @return array<string, mixed> The Site Health result.
         */
        public function script_result(\TLA_Media\GTM_Kit\Admin\SiteHealth $site_health): array
        {
        }
        /**
         * Report that the checks have not run on this site yet.
         *
         * @param SiteHealth $site_health The Site Health integration.
         * @param string     $test_id The test id to report under.
         *
         * @return array<string, mixed> The Site Health result.
         */
        private function not_checked_yet(\TLA_Media\GTM_Kit\Admin\SiteHealth $site_health, string $test_id): array
        {
        }
    }
    /**
     * Class for common integrations.
     */
    final class Integrations
    {
        /**
         * Get the integrations
         *
         * @return array<string, array<string, string>>
         */
        public static function get_integrations(): array
        {
        }
        /**
         * Get the active state of the integration plugins.
         *
         * Routed through the Conditional classes so detection survives
         * renamed plugin files and mu-plugin installs.
         *
         * @return array<string, bool>
         */
        public static function get_plugins(): array
        {
        }
    }
}
namespace TLA_Media\GTM_Kit\Admin\Introductions\Application {
    /**
     * Page-detection helpers used to suppress introductions during onboarding surfaces. The
     * integration class calls these before enqueueing the bundle so users are not interrupted while
     * completing the setup wizard.
     */
    trait Current_Page_Trait
    {
        /**
         * Whether the current admin request is the setup wizard page.
         *
         * @return bool
         */
        protected function is_on_setup_wizard(): bool
        {
        }
        /**
         * Whether the current admin request is an installation-success screen.
         *
         * The GTM Kit wizard handles its own terminal "Getting started" state inside the wizard page,
         * so this returns false for the current codebase. Kept as a distinct surface so a future
         * dedicated success page can be added without touching every caller.
         *
         * @return bool
         */
        protected function is_on_installation_success(): bool
        {
        }
        /**
         * Whether the given admin hook belongs to a GTM Kit settings page.
         *
         * @param mixed $hook The current admin page hook suffix.
         *
         * @return bool
         */
        protected function is_on_gtmkit_admin_page($hook): bool
        {
        }
    }
    /**
     * Builds the ordered list of introductions a given user is eligible to see right now.
     *
     * Merge order: bundled intros, then anything plugged in via the `gtmkit_introductions` filter.
     * Non-conforming filter entries are silently dropped. `should_show()` runs first, then the seen
     * filter, then sort by priority ascending.
     */
    final class Introductions_Collector
    {
        /**
         * Seen-state repository.
         *
         * @var \TLA_Media\GTM_Kit\Admin\Introductions\Infrastructure\Introductions_Seen_Repository
         */
        private \TLA_Media\GTM_Kit\Admin\Introductions\Infrastructure\Introductions_Seen_Repository $seen;
        /**
         * Bundled intros registered in core. Sibling plugins use the filter.
         *
         * @var \TLA_Media\GTM_Kit\Admin\Introductions\Domain\Introduction_Interface[]
         */
        private array $bundled;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Admin\Introductions\Infrastructure\Introductions_Seen_Repository $seen The seen-state repository.
         * @param \TLA_Media\GTM_Kit\Admin\Introductions\Domain\Introduction_Interface[]      $bundled The bundled introductions.
         */
        public function __construct(\TLA_Media\GTM_Kit\Admin\Introductions\Infrastructure\Introductions_Seen_Repository $seen, array $bundled = [])
        {
        }
        /**
         * Return the ordered list of Introduction_Item DTOs the user is currently eligible to see.
         *
         * @param int $user_id The user id.
         *
         * @return \TLA_Media\GTM_Kit\Admin\Introductions\Domain\Introduction_Item[]
         */
        public function get_for(int $user_id): array
        {
        }
        /**
         * Return the ids of every registered introduction, regardless of eligibility or seen state.
         * Used by the REST seen route to validate incoming ids.
         *
         * @return string[]
         */
        public function get_registered_ids(): array
        {
        }
        /**
         * Merge bundled intros with anything plugged in via the filter.
         *
         * @return \TLA_Media\GTM_Kit\Admin\Introductions\Domain\Introduction_Interface[]
         */
        private function collect_intros(): array
        {
        }
    }
}
namespace TLA_Media\GTM_Kit\Admin\Introductions\Domain {
    /**
     * Contract for a registrable introduction (one announcement modal).
     *
     * Implementations live in `gtm-kit` core for bundled intros and in sibling plugins
     * (`gtm-kit-premium`, `gtm-kit-woo`) for feature-launch intros they own. Remote intros are
     * wrapped in an adapter that also implements this interface.
     */
    interface Introduction_Interface
    {
        /**
         * Stable, kebab-case identifier. Must be unique across every registered introduction. The id
         * is the React component lookup key for bundled intros and the seen-state key for every intro.
         *
         * @return string
         */
        public function get_id(): string;
        /**
         * Priority used to order eligible intros. Lower wins. Suggested ranges: bundled welcome around
         * 100, version-bump intros around 200, marketing intros around 500.
         *
         * @return int
         */
        public function get_priority(): int;
        /**
         * Eligibility check. Returning false drops the intro before the seen filter runs.
         *
         * @return bool
         */
        public function should_show(): bool;
        /**
         * 'component' selects an id-matched React component bundled with a plugin. 'blocks' selects
         * the generic-blocks renderer driven by `get_blocks()`.
         *
         * @return string Either 'component' or 'blocks'.
         */
        public function get_render_mode(): string;
        /**
         * Structured content blocks for the generic-blocks renderer. Returns an empty array for
         * component-render intros.
         *
         * @return array<int, array<string, mixed>>
         */
        public function get_blocks(): array;
    }
}
namespace TLA_Media\GTM_Kit\Admin\Introductions\Application {
    /**
     * Adapter that wraps a validated remote intro payload so the rest of the framework can treat it
     * like a regular Introduction_Interface.
     *
     * Targeting is decided server-side: the GTM Kit app filters intros by audience predicate before
     * sending them, so this adapter trusts the response and always reports as eligible. The seen
     * filter still applies at the collector layer.
     */
    final class Remote_Introduction implements \TLA_Media\GTM_Kit\Admin\Introductions\Domain\Introduction_Interface
    {
        /**
         * Stable id.
         *
         * @var string
         */
        private string $id;
        /**
         * Sort priority.
         *
         * @var int
         */
        private int $priority;
        /**
         * Validated content blocks.
         *
         * @var array<int, array<string, mixed>>
         */
        private array $blocks;
        /**
         * Constructor.
         *
         * @param string                           $id Stable id.
         * @param int                              $priority Sort priority.
         * @param array<int, array<string, mixed>> $blocks Validated blocks.
         */
        public function __construct(string $id, int $priority, array $blocks)
        {
        }
        /**
         * The intro id.
         *
         * @return string
         */
        public function get_id(): string
        {
        }
        /**
         * The intro priority.
         *
         * @return int
         */
        public function get_priority(): int
        {
        }
        /**
         * Eligibility check. Always true: the server already filtered by audience predicate before
         * sending this intro.
         *
         * @return bool
         */
        public function should_show(): bool
        {
        }
        /**
         * Render mode is the generic-blocks renderer.
         *
         * @return string
         */
        public function get_render_mode(): string
        {
        }
        /**
         * The validated content blocks.
         *
         * @return array<int, array<string, mixed>>
         */
        public function get_blocks(): array
        {
        }
    }
    /**
     * Helpers for version-gated introductions.
     *
     * The plugin records `gtmkit_initial_version` once on first activation and never updates it. That
     * gives a stable "the user has been on the plugin since this version" marker that lets a
     * version-bump intro target every upgrader exactly once per intro id, while a fresh install at the
     * new version stays silent.
     */
    trait Version_Trait
    {
        /**
         * Whether the user has crossed a version threshold: the plugin was first installed below the
         * threshold and the running version is at or above it.
         *
         * @param string $threshold A semver string to compare against, for example '3.0.0'.
         *
         * @return bool
         */
        protected function version_crossed(string $threshold): bool
        {
        }
        /**
         * Whether the plugin was first installed at or above the given version. Useful for
         * "fresh install only" gating where an upgrader-targeted intro takes the upgrade case.
         *
         * @param string $threshold A semver string to compare against.
         *
         * @return bool
         */
        protected function version_installed_at_or_above(string $threshold): bool
        {
        }
        /**
         * Read the stored initial-install version. Returns an empty string when the option is missing
         * so callers can decide how to treat the unknown-history case (the default is to refuse, not
         * to assume a fresh install).
         *
         * @return string
         */
        private function get_initial_version(): string
        {
        }
    }
    /**
     * First-run welcome introduction shown once to users who freshly installed GTM Kit at the version
     * the introductions framework first shipped in or later.
     *
     * The wizard is the first-run welcome surface; this modal greets the user on the first non-wizard
     * GTM Kit admin page they visit. The integration class handles the wizard-page suppression. Users
     * who installed before the threshold are upgraders and never see this modal, even if they later
     * upgrade past the threshold.
     */
    final class Welcome_Introduction implements \TLA_Media\GTM_Kit\Admin\Introductions\Domain\Introduction_Interface
    {
        use \TLA_Media\GTM_Kit\Admin\Introductions\Application\Version_Trait;
        /**
         * Stable id used for component lookup and seen-state.
         *
         * @var string
         */
        public const ID = 'welcome';
        /**
         * Minimum initial-install version that makes a user eligible. Anyone who first installed below
         * this version is considered an upgrader and never sees the welcome.
         *
         * @var string
         */
        private const MIN_INITIAL_VERSION = '2.12.0';
        /**
         * The intro id.
         *
         * @return string
         */
        public function get_id(): string
        {
        }
        /**
         * Sort priority. Bundled welcome ranks ahead of remote launch intros so a brand-new user sees
         * the welcome first.
         *
         * @return int
         */
        public function get_priority(): int
        {
        }
        /**
         * Eligibility check: the user first installed at or after the introductions-framework release.
         * Existing users who installed earlier are upgraders and do not see this modal.
         *
         * @return bool
         */
        public function should_show(): bool
        {
        }
        /**
         * Render mode is the bundled React component keyed by id.
         *
         * @return string
         */
        public function get_render_mode(): string
        {
        }
        /**
         * No content blocks: the matching React component owns its content.
         *
         * @return array<int, array<string, mixed>>
         */
        public function get_blocks(): array
        {
        }
    }
}
namespace TLA_Media\GTM_Kit\Admin\Introductions\Domain {
    /**
     * Immutable value object the collector returns. Built from an Introduction_Interface and the data
     * the JS renderer needs.
     */
    final class Introduction_Item
    {
        /**
         * Stable id.
         *
         * @var string
         */
        private string $id;
        /**
         * Sort priority. Lower wins.
         *
         * @var int
         */
        private int $priority;
        /**
         * Render mode ('component' or 'blocks').
         *
         * @var string
         */
        private string $render_mode;
        /**
         * Blocks payload for the generic-blocks renderer (empty for component render mode).
         *
         * @var array<int, array<string, mixed>>
         */
        private array $blocks;
        /**
         * Constructor.
         *
         * @param string                           $id Stable id.
         * @param int                              $priority Sort priority.
         * @param string                           $render_mode 'component' or 'blocks'.
         * @param array<int, array<string, mixed>> $blocks Blocks payload.
         */
        public function __construct(string $id, int $priority, string $render_mode, array $blocks = [])
        {
        }
        /**
         * Build an Introduction_Item from a source Introduction_Interface.
         *
         * @param Introduction_Interface $intro The source intro.
         *
         * @return self
         */
        public static function from_interface(\TLA_Media\GTM_Kit\Admin\Introductions\Domain\Introduction_Interface $intro): self
        {
        }
        /**
         * The intro id.
         *
         * @return string
         */
        public function get_id(): string
        {
        }
        /**
         * The intro priority.
         *
         * @return int
         */
        public function get_priority(): int
        {
        }
        /**
         * The render mode.
         *
         * @return string
         */
        public function get_render_mode(): string
        {
        }
        /**
         * The blocks payload.
         *
         * @return array<int, array<string, mixed>>
         */
        public function get_blocks(): array
        {
        }
        /**
         * Serialize for the JS-localised payload.
         *
         * @return array<string, mixed>
         */
        public function to_array(): array
        {
        }
    }
    /**
     * Sortable collection of Introduction_Interface instances. Kept minimal on purpose: add,
     * drop-by-id, sort by priority, iterate.
     */
    final class Introductions_Bucket
    {
        /**
         * Items in the bucket.
         *
         * @var Introduction_Interface[]
         */
        private array $items = [];
        /**
         * Add an introduction to the bucket.
         *
         * @param Introduction_Interface $intro The introduction.
         *
         * @return void
         */
        public function add(\TLA_Media\GTM_Kit\Admin\Introductions\Domain\Introduction_Interface $intro): void
        {
        }
        /**
         * Remove introductions whose id matches the given list.
         *
         * @param string[] $ids The ids to drop.
         *
         * @return void
         */
        public function drop(array $ids): void
        {
        }
        /**
         * Return all items, sorted by priority ascending. Ties keep insertion order.
         *
         * @return Introduction_Interface[]
         */
        public function sorted(): array
        {
        }
        /**
         * Return all ids currently in the bucket.
         *
         * @return string[]
         */
        public function ids(): array
        {
        }
    }
}
namespace TLA_Media\GTM_Kit\Admin\Introductions\Infrastructure {
    /**
     * Per-user seen-state for introductions, persisted in user meta.
     *
     * Each entry is keyed by intro id and stores whether the user has seen the intro plus a unix
     * timestamp of when it was first marked seen.
     */
    final class Introductions_Seen_Repository
    {
        /**
         * User-meta key used to store the seen map for a single user.
         *
         * @var string
         */
        public const META_KEY = '_gtmkit_introductions';
        /**
         * Whether the user has seen the given introduction.
         *
         * @param int    $user_id The user id.
         * @param string $intro_id The introduction id.
         *
         * @return bool
         */
        public function is_seen(int $user_id, string $intro_id): bool
        {
        }
        /**
         * Mark an introduction as seen (or explicitly unseen) for the user. Returns false on save
         * failure, true otherwise.
         *
         * @param int    $user_id The user id.
         * @param string $intro_id The introduction id.
         * @param bool   $seen Whether to set seen (true) or clear seen (false).
         *
         * @return bool
         */
        public function mark_seen(int $user_id, string $intro_id, bool $seen = true): bool
        {
        }
        /**
         * Return the entire seen map for the user.
         *
         * @param int $user_id The user id.
         *
         * @return array<string, array{is_seen: bool, seen_on: int}>
         */
        public function get_all(int $user_id): array
        {
        }
    }
    /**
     * Fetches and validates remote introductions from the GTM Kit app endpoint. Reuses the 12h
     * transient pattern in `Util::get_data()` so a site does not call the endpoint on every admin
     * page load.
     *
     * The endpoint is responsible for audience targeting; this source trusts the response shape and
     * validates the block schema only. Anything that does not match the schema is dropped with a
     * debug log line so a misbehaving endpoint cannot break the admin page.
     */
    final class Remote_Introductions_Source
    {
        /**
         * REST endpoint path on the GTM Kit app, relative to the API host.
         *
         * @var string
         */
        public const ENDPOINT = '/get-introductions';
        /**
         * Transient key used to cache the response for 12 hours.
         *
         * @var string
         */
        public const TRANSIENT = 'gtmkit_introductions';
        /**
         * Block types accepted by the v1 schema. Anything outside this set is dropped during
         * validation.
         *
         * @var string[]
         */
        private const VALID_BLOCK_TYPES = ['heading', 'body', 'image', 'video', 'cta'];
        /**
         * Valid CTA variants.
         *
         * @var string[]
         */
        private const VALID_CTA_VARIANTS = ['primary', 'secondary', 'dismiss'];
        /**
         * Utilities used to make the cached remote call.
         *
         * @var \TLA_Media\GTM_Kit\Common\Util
         */
        private \TLA_Media\GTM_Kit\Common\Util $util;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Common\Util $util The Util instance.
         */
        public function __construct(\TLA_Media\GTM_Kit\Common\Util $util)
        {
        }
        /**
         * Hook the source onto the `gtmkit_introductions` filter so remote intros merge with the
         * bundled and sibling-plugin intros in the collector.
         *
         * @return void
         */
        public function register(): void
        {
        }
        /**
         * Filter callback: append validated remote intros to the list.
         *
         * @param mixed $intros The current list of registered intros.
         *
         * @return \TLA_Media\GTM_Kit\Admin\Introductions\Domain\Introduction_Interface[]
         */
        public function add_remote_intros($intros): array
        {
        }
        /**
         * Fetch the remote intros, validate, and return as Introduction_Interface instances.
         *
         * @return \TLA_Media\GTM_Kit\Admin\Introductions\Domain\Introduction_Interface[]
         */
        public function get(): array
        {
        }
        /**
         * Validate a single response item and return a Remote_Introduction if it conforms. Returns
         * null otherwise so the caller can skip it.
         *
         * @param mixed $entry The decoded response entry.
         *
         * @return \TLA_Media\GTM_Kit\Admin\Introductions\Application\Remote_Introduction|null
         */
        private function validate_intro($entry): ?\TLA_Media\GTM_Kit\Admin\Introductions\Application\Remote_Introduction
        {
        }
        /**
         * Validate a single block against the v1 schema.
         *
         * @param mixed $block The decoded block.
         *
         * @return array<string, mixed>|null The validated block or null.
         */
        private function validate_block($block): ?array
        {
        }
        /**
         * Log a dropped entry when WP_DEBUG is on. No telemetry leaves the site; this is a
         * developer-only aid.
         *
         * @param string $reason Short human-readable reason.
         * @param mixed  $entry The dropped entry, for context.
         *
         * @return void
         */
        private function log_dropped(string $reason, $entry): void
        {
        }
    }
}
namespace TLA_Media\GTM_Kit\Admin\Introductions\UI {
    /**
     * Boots the introductions module: builds the collector with bundled intros, registers the REST
     * seen route, and hooks `admin_enqueue_scripts` to surface the eligible intro on GTM Kit admin
     * pages.
     */
    final class Introductions_Integration
    {
        use \TLA_Media\GTM_Kit\Admin\AssetsTrait;
        use \TLA_Media\GTM_Kit\Admin\Introductions\Application\Current_Page_Trait;
        /**
         * Script handle for the introductions bundle.
         *
         * @var string
         */
        public const SCRIPT_HANDLE = 'introductions';
        /**
         * DOM mount id the React bundle attaches to.
         *
         * @var string
         */
        public const MOUNT_ID = 'gtmkit-introductions-root';
        /**
         * Collector for eligible intros.
         *
         * @var \TLA_Media\GTM_Kit\Admin\Introductions\Application\Introductions_Collector
         */
        private \TLA_Media\GTM_Kit\Admin\Introductions\Application\Introductions_Collector $collector;
        /**
         * Seen-state repository.
         *
         * @var \TLA_Media\GTM_Kit\Admin\Introductions\Infrastructure\Introductions_Seen_Repository
         */
        private \TLA_Media\GTM_Kit\Admin\Introductions\Infrastructure\Introductions_Seen_Repository $seen;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Admin\Introductions\Application\Introductions_Collector       $collector The collector.
         * @param \TLA_Media\GTM_Kit\Admin\Introductions\Infrastructure\Introductions_Seen_Repository $seen The repository.
         */
        public function __construct(\TLA_Media\GTM_Kit\Admin\Introductions\Application\Introductions_Collector $collector, \TLA_Media\GTM_Kit\Admin\Introductions\Infrastructure\Introductions_Seen_Repository $seen)
        {
        }
        /**
         * Register the integration: wire the REST route and hook `admin_enqueue_scripts`.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options The Options instance.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util The Util instance.
         *
         * @return void
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util): void
        {
        }
        /**
         * Localize the script payload used by the JS bundle.
         *
         * Required by AssetsTrait. The actual payload is built in `enqueue()` because the
         * eligible-intro list is computed there.
         *
         * @param string $page_slug The page slug.
         * @param string $script_handle The script handle.
         *
         * @return void
         */
        public function localize_script(string $page_slug, string $script_handle): void
        {
        }
        /**
         * Enqueue the bundle if the current admin page is eligible and the user has unseen intros.
         *
         * @param mixed $hook The current admin page hook suffix.
         *
         * @return void
         */
        public function enqueue($hook): void
        {
        }
        /**
         * Print the mount point in the admin footer when the bundle is enqueued.
         *
         * @return void
         */
        public function render_mount_point(): void
        {
        }
    }
    /**
     * Registers the introductions REST routes inside the existing `gtmkit/v1` namespace. Capability
     * matches the surface Yoast uses for the same kind of route so editors can dismiss their own
     * intros without elevated permissions.
     */
    final class Introductions_REST_Controller
    {
        /**
         * Shared REST server wrapper. Registers routes under `gtmkit/v1`.
         *
         * @var \TLA_Media\GTM_Kit\Common\RestAPIServer
         */
        private \TLA_Media\GTM_Kit\Common\RestAPIServer $rest_api_server;
        /**
         * Seen-route handler.
         *
         * @var Introductions_Seen_Route
         */
        private \TLA_Media\GTM_Kit\Admin\Introductions\UI\Introductions_Seen_Route $seen_route;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Common\RestAPIServer            $rest_api_server The REST server wrapper.
         * @param Introductions_Seen_Route $seen_route The seen-route handler.
         */
        public function __construct(\TLA_Media\GTM_Kit\Common\RestAPIServer $rest_api_server, \TLA_Media\GTM_Kit\Admin\Introductions\UI\Introductions_Seen_Route $seen_route)
        {
        }
        /**
         * Hook the route registration onto `rest_api_init`.
         *
         * @return void
         */
        public function register(): void
        {
        }
        /**
         * Register the route.
         *
         * @return void
         */
        public function register_routes(): void
        {
        }
        /**
         * Permission callback. Matches the surface used by Yoast: editors and up can dismiss their
         * own intros without needing the elevated `manage_options` capability used by the default
         * REST surface.
         *
         * @return bool
         */
        public function permission_callback(): bool
        {
        }
    }
    /**
     * Request handler for the seen-state route. The controller class wires this into the existing
     * `gtmkit/v1` REST namespace.
     */
    final class Introductions_Seen_Route
    {
        /**
         * Seen-state repository.
         *
         * @var \TLA_Media\GTM_Kit\Admin\Introductions\Infrastructure\Introductions_Seen_Repository
         */
        private \TLA_Media\GTM_Kit\Admin\Introductions\Infrastructure\Introductions_Seen_Repository $seen;
        /**
         * Collector used to look up known intro ids for validation.
         *
         * @var \TLA_Media\GTM_Kit\Admin\Introductions\Application\Introductions_Collector
         */
        private \TLA_Media\GTM_Kit\Admin\Introductions\Application\Introductions_Collector $collector;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Admin\Introductions\Infrastructure\Introductions_Seen_Repository $seen The repository.
         * @param \TLA_Media\GTM_Kit\Admin\Introductions\Application\Introductions_Collector       $collector The collector.
         */
        public function __construct(\TLA_Media\GTM_Kit\Admin\Introductions\Infrastructure\Introductions_Seen_Repository $seen, \TLA_Media\GTM_Kit\Admin\Introductions\Application\Introductions_Collector $collector)
        {
        }
        /**
         * Handle a seen-state POST. Returns 400 for unknown intro ids and 200 with `{ success: bool }`
         * otherwise.
         *
         * @param \WP_REST_Request $request The REST request.
         *
         * @return \WP_REST_Response|\WP_Error
         */
        public function handle(\WP_REST_Request $request)
        {
        }
    }
}
namespace TLA_Media\GTM_Kit\Admin {
    /**
     * MetaBox
     */
    final class MetaBox
    {
        /**
         * Plugin options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        protected \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options The Options instance.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options)
        {
        }
        /**
         * Register meta box
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options The Options instance.
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options): void
        {
        }
        /**
         * Add "GTM Kit" meta box
         */
        public function add_meta_boxes(): void
        {
        }
        /**
         * Displays some checkbox to de/activate some cache options
         */
        public function display_meta_boxes(): void
        {
        }
        /**
         * Manage the cache options from the meta box.
         */
        public function save_meta_box_options(): void
        {
        }
    }
    /**
     * Notification.
     */
    class Notification
    {
        /**
         * Notification type.
         *
         * @var string
         */
        public const PROBLEM = 'problem';
        /**
         * Notification type.
         *
         * @var string
         */
        public const NOTICE = 'notice';
        /**
         * Options of this Notification.
         *
         * @var array<string, mixed>
         */
        private array $options;
        /**
         * The default values for the optional arguments.
         *
         * @var array<string, mixed>
         */
        private array $defaults = ['id' => '', 'user_id' => null, 'type' => self::NOTICE, 'priority' => 0.5];
        /**
         * The header for the notification.
         *
         * @var string
         */
        private string $header;
        /**
         * The message for the notification.
         *
         * @var string
         */
        private string $message;
        /**
         * Notification class constructor.
         *
         * @param string               $message Message string.
         * @param string               $header The header.
         * @param array<string, mixed> $options Set of options.
         */
        public function __construct(string $message, string $header = '', array $options = [])
        {
        }
        /**
         * Get the notification ID.
         *
         * @return string
         */
        public function get_id(): string
        {
        }
        /**
         * Get the id of the user to show the notification for.
         *
         * @return int The user id
         */
        public function get_user_id(): int
        {
        }
        /**
         * Get the type of the notification.
         *
         * @return string
         */
        public function get_type(): string
        {
        }
        /**
         * Get the priority of the notification.
         *
         * @return float Returns the priority between 0 and 1.
         */
        public function get_priority(): float
        {
        }
        /**
         * Check if the notification is relevant for the current user.
         *
         * @return bool True if a user needs to see this notification, false if not.
         */
        public function display_for_current_user(): bool
        {
        }
        /**
         * Array filter function to find matched capabilities.
         *
         * @param string $capability Capability to test.
         *
         * @return bool
         */
        private function has_capability(string $capability): bool
        {
        }
        /**
         * Return the object properties as an array.
         *
         * @return array<string, mixed>
         */
        public function to_array(): array
        {
        }
        /**
         * Adds string (view) behaviour to the notification.
         *
         * @return string
         */
        public function __toString(): string
        {
        }
        /**
         * Renders the notification as an array for use in the settings.
         *
         * @return array<string, string> The rendered notification.
         */
        public function render(): array
        {
        }
        /**
         * Make sure we only have values that we can work with.
         *
         * @param array<string, mixed> $options Options to normalize.
         *
         * @return array<string, mixed>
         */
        private function normalize_options(array $options): array
        {
        }
    }
    /**
     * Notifications  Handler
     */
    final class NotificationsHandler
    {
        /**
         * Option name to store notifications.
         *
         * @var string
         */
        public const STORAGE_KEY = 'gtmkit_notifications';
        /**
         * Singleton instance.
         *
         * @var NotificationsHandler|null
         */
        private static ?\TLA_Media\GTM_Kit\Admin\NotificationsHandler $instance = null;
        /**
         * Notifications array.
         *
         * @var Notification[][]
         */
        private array $notifications = [];
        /**
         * Queued transactions before notifications retrieval.
         *
         * @var array<int, array{0: callable, 1: array<int, mixed>}>
         */
        private array $queued_transactions = [];
        /**
         * Flag whether notifications have been retrieved.
         *
         * @var bool
         */
        private bool $notifications_retrieved = false;
        /**
         * Flag whether notifications need to be updated.
         *
         * @var bool
         */
        private bool $notifications_need_storage = false;
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get singleton instance.
         *
         * @return NotificationsHandler
         */
        public static function get(): \TLA_Media\GTM_Kit\Admin\NotificationsHandler
        {
        }
        /**
         * Check if the user has dismissed a notification.
         *
         * @param Notification $notification The notification to check for dismissal.
         * @param int|null     $user_id      User ID to check on.
         *
         * @return bool
         */
        public static function is_notification_dismissed(\TLA_Media\GTM_Kit\Admin\Notification $notification, ?int $user_id = null): bool
        {
        }
        /**
         * Check if the notification is being dismissed.
         *
         * @param Notification $notification Notification to check dismissal of.
         *
         * @return bool True if dismissed.
         */
        public static function maybe_dismiss_notification(\TLA_Media\GTM_Kit\Admin\Notification $notification): bool
        {
        }
        /**
         * Dismiss a notification.
         *
         * @param Notification $notification Notification to dismiss.
         *
         * @return bool True if dismissed, false otherwise.
         */
        public static function dismiss_notification(\TLA_Media\GTM_Kit\Admin\Notification $notification): bool
        {
        }
        /**
         * Restores a notification.
         *
         * @param Notification $notification Notification to restore.
         *
         * @return bool True if restored, false otherwise.
         */
        public static function restore_notification(\TLA_Media\GTM_Kit\Admin\Notification $notification): bool
        {
        }
        /**
         * Clear dismissal information for the specified Notification.
         *
         * @param string|Notification $notification Notification to clear the dismissal of.
         *
         * @return bool True if successfully cleared, false otherwise.
         */
        public function clear_dismissal($notification): bool
        {
        }
        /**
         * Set up current notifications.
         *
         * Retrieves notifications from the storage and merges in previous notification changes.
         *
         * @return void
         */
        public function setup_current_notifications(): void
        {
        }
        /**
         * Add notification.
         *
         * @param Notification $notification Notification object instance.
         *
         * @return void
         */
        public function add_notification(\TLA_Media\GTM_Kit\Admin\Notification $notification): void
        {
        }
        /**
         * Get the notification by ID and user ID.
         *
         * @param string   $notification_id Notification ID.
         * @param int|null $user_id         User ID.
         *
         * @return Notification|null
         */
        public function get_notification_by_id(string $notification_id, ?int $user_id = null): ?\TLA_Media\GTM_Kit\Admin\Notification
        {
        }
        /**
         * The default notifications array
         *
         * @return array<string, array<string, mixed>>
         */
        private function default_notifications_array(): array
        {
        }
        /**
         * Get the notifications for the settings.
         *
         * @return array<string, array{total: int, active: array<string>, dismissed: array<string>}|int>
         */
        public function get_notifications_array(): array
        {
        }
        /**
         * Remove notification.
         *
         * @param Notification $notification Notification to remove.
         * @param bool         $resolve      Resolve as fixed.
         *
         * @return void
         */
        public function remove_notification(\TLA_Media\GTM_Kit\Admin\Notification $notification, bool $resolve = true): void
        {
        }
        /**
         * Removes a notification by its ID.
         *
         * @param string $notification_id The notification id.
         * @param bool   $resolve         Resolve as fixed.
         *
         * @return void
         */
        public function remove_notification_by_id(string $notification_id, bool $resolve = true): void
        {
        }
        /**
         * Return the notifications sorted on type and priority.
         *
         * @return array|Notification[] Sorted Notifications
         */
        public function get_sorted_notifications(): array
        {
        }
        /**
         * Remove storage when the plugin is deactivated.
         *
         * @return void
         */
        public function deactivate_hook(): void
        {
        }
        /**
         * Get the user ID
         *
         * @param int|null $user_id The user ID to check.
         *
         * @return int The user ID to use.
         */
        private static function get_user_id(?int $user_id): int
        {
        }
        /**
         * Splits the notifications on user ID.
         *
         * In other terms, it returns an associative array,
         * mapping user ID to a list of notifications for this user.
         *
         * @param array|Notification[] $notifications The notifications to split.
         *
         * @return array<int, Notification[]> The notifications, split on user ID.
         */
        private function split_on_user_id(array $notifications): array
        {
        }
        /**
         * Save persistent notifications to storage.
         *
         * @return void
         */
        public function update_storage(): void
        {
        }
        /**
         * Stores the notifications to its respective user's storage.
         *
         * @param array|Notification[] $notifications The notifications to store.
         * @param int                  $user_id       The ID of the user for which to store the notifications.
         *
         * @return void
         */
        private function store_notifications_for_user(array $notifications, int $user_id): void
        {
        }
        /**
         * Provide a way to verify present notifications.
         *
         * @return array|Notification[] Registered notifications.
         */
        public function get_notifications(): array
        {
        }
        /**
         * Returns the notifications for the given user.
         *
         * @param int $user_id The id of the user to check.
         *
         * @return Notification[] The notifications for the user with the given ID.
         */
        public function get_notifications_for_user(int $user_id): array
        {
        }
        /**
         * Retrieve the notifications from storage and fill the relevant property.
         *
         * @param int $user_id The ID of the user to retrieve notifications for.
         *
         * @return void
         */
        private function retrieve_notifications_from_storage(int $user_id): void
        {
        }
        /**
         * Sort on type then priority.
         *
         * @param Notification $a Compare with B.
         * @param Notification $b Compare with A.
         *
         * @return int 1, 0 or -1 for sorting offset.
         */
        private function sort_notifications(\TLA_Media\GTM_Kit\Admin\Notification $a, \TLA_Media\GTM_Kit\Admin\Notification $b): int
        {
        }
        /**
         * Clear local stored notifications.
         *
         * @return void
         */
        private function clear_notifications(): void
        {
        }
        /**
         * Convert Notification to array representation.
         *
         * @since 3.2
         *
         * @param Notification $notification Notification to convert.
         *
         * @return array<string, mixed>
         */
        private function notification_to_array(\TLA_Media\GTM_Kit\Admin\Notification $notification): array
        {
        }
        /**
         * Convert stored array to Notification.
         *
         * @param array<string, mixed> $notification_data Array to convert to Notification.
         *
         * @return Notification
         */
        private function array_to_notification(array $notification_data): \TLA_Media\GTM_Kit\Admin\Notification
        {
        }
        /**
         * Filter notifications that should not be displayed for the current user.
         *
         * @param Notification $notification Notification to test.
         *
         * @return bool
         */
        private function filter_notification_current_user(\TLA_Media\GTM_Kit\Admin\Notification $notification): bool
        {
        }
        /**
         * Queues a notification transaction for later execution if notifications are not yet set up.
         *
         * @param callable          $callback Callback that performs the transaction.
         * @param array<int, mixed> $args     Arguments to pass to the callback.
         *
         * @return bool True if transaction was queued, false if it can be performed immediately.
         */
        private function queue_transaction(callable $callback, array $args): bool
        {
        }
        /**
         * Adds a notification transaction to the queue for later execution.
         *
         * @param callable          $callback Callback that performs the transaction.
         * @param array<int, mixed> $args     Arguments to pass to the callback.
         *
         * @return void
         */
        private function add_transaction_to_queue(callable $callback, array $args): void
        {
        }
        /**
         * Removes all notifications from storage.
         *
         * @return bool True when notifications got removed.
         */
        protected function remove_storage(): bool
        {
        }
        /**
         * Checks if there are stored notifications.
         *
         * @return bool True when there are stored notifications.
         */
        protected function has_stored_notifications(): bool
        {
        }
        /**
         * Retrieves the stored notifications.
         *
         * @codeCoverageIgnore
         *
         * @return array<int, array<int, mixed>>|false Array with notifications or false when not set.
         */
        protected function get_stored_notifications()
        {
        }
    }
    /**
     * PluginAvailability
     */
    final class PluginAvailability
    {
        /**
         * Holds the plugins.
         *
         * @var array<string, array<string, array<string, mixed>>>
         */
        protected array $plugins = [];
        /**
         * Registers the plugins so we can access them.
         *
         * @return void
         */
        public function register()
        {
        }
        /**
         * Supported SEO plugins.
         *
         * @return void
         */
        protected function seo_plugins()
        {
        }
        /**
         * Plugins likely to cause conflicts.
         *
         * @return void
         */
        protected function conflicting_plugins()
        {
        }
        /**
         * Wishlist plugins.
         *
         * @return void
         */
        protected function wishlist_plugins()
        {
        }
        /**
         * Registers the plugins status.
         *
         * @return void
         */
        protected function register_plugins(): void
        {
        }
        /**
         * Normalize plugin
         *
         * @param array<string, mixed> $plugin The plugin.
         * @param string               $id The plugin ID.
         *
         * @return array<string, mixed> Normalized plugin.
         */
        private function normalize_plugin(array $plugin, string $id): array
        {
        }
        /**
         * Gets all the possibly available plugins.
         *
         * @param string $category Limit the plugins to a category.
         *
         * @return array<string, array<string, mixed>> Array containing the information about the plugins.
         */
        public function get_plugins(string $category = ''): array
        {
        }
        /**
         * Determines whether a plugin is active.
         *
         * @param array<string, mixed> $plugin The plugin to check.
         *
         * @return bool Whether the plugin is active.
         */
        public function is_active(array $plugin): bool
        {
        }
        /**
         * Determines whether a grandfathered polyfill is available.
         *
         * @param array<string, mixed> $plugin The plugin to check.
         *
         * @return bool Whether the plugin is active.
         */
        public function gf_polyfill_available(array $plugin): bool
        {
        }
    }
    /**
     * Remembers when a contextual upgrade notice was dismissed, and for how long
     * that dismissal keeps it away.
     *
     * The notifications system tracks dismissals of its own, but only for
     * notifications present in the set it currently holds: one that is never
     * created is never bucketed as dismissed either. These notices are created
     * conditionally, so their own dismissal is exactly the case that bucket cannot
     * answer. The timestamp therefore lives in a small option of its own, and a
     * notice still inside its cooldown is simply never created.
     *
     * At most one entry per notice id is ever stored, so the option stays a handful
     * of integers and needs no pruning. An entry whose cooldown has run out reads
     * as expired, which is the same answer as having no entry at all.
     */
    final class PremiumTriggerCooldown
    {
        /**
         * The option holding one dismissal timestamp per notice id.
         *
         * @var string
         */
        public const OPTION = 'gtmkit_upgrade_notice_dismissals';
        /**
         * How long a dismissal keeps its notice away, in days.
         *
         * Long enough that dismissing is worth doing, short enough that a site
         * whose situation has not changed a season later is asked once more.
         *
         * @var int
         */
        public const COOLDOWN_DAYS = 90;
        /**
         * Record that a notice was dismissed now.
         *
         * @param string $notification_id The id of the dismissed notification.
         *
         * @return void
         */
        public static function record(string $notification_id): void
        {
        }
        /**
         * Whether a notice was dismissed recently enough to stay away.
         *
         * @param string $notification_id The id of the notification to check.
         *
         * @return bool True while the notice is still inside its cooldown.
         */
        public static function is_within_cooldown(string $notification_id): bool
        {
        }
        /**
         * Read the stored dismissals.
         *
         * Anything the option holds that is not a notice id mapped to a timestamp
         * is dropped, so a hand-edited or partially written option degrades to "not
         * dismissed" rather than to a fatal.
         *
         * @return array<string, int> Dismissal timestamps keyed by notice id.
         */
        private static function get_dismissals(): array
        {
        }
    }
    /**
     * Class for the plugin's Setup Wizard.
     */
    final class SetupWizard
    {
        /**
         * Slug of the setup wizard page.
         *
         * @var string
         */
        const SLUG = 'gtmkit_setup_wizard';
        /**
         * Plugin options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        protected \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Utilities
         *
         * @var \TLA_Media\GTM_Kit\Common\Util
         */
        protected \TLA_Media\GTM_Kit\Common\Util $util;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util An instance of Util.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util)
        {
        }
        /**
         * Register frontend
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options The Options instance.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util The Util instance.
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util): void
        {
        }
        /**
         * Get the URL of the Setup Wizard page.
         *
         * @return string
         */
        public static function get_site_url(): string
        {
        }
        /**
         * Maybe redirect to the setup wizard after plugin activation.
         */
        public function maybe_redirect_after_activation(): void
        {
        }
        /**
         * Add Dashboard Page
         */
        public function add_dashboard_page(): void
        {
        }
        /**
         * Load the assets needed for the Setup Wizard.
         *
         * @param mixed $hook The asset hook.
         */
        public function enqueue_assets($hook): void
        {
        }
        /**
         * Get the store's base country code.
         *
         * WooCommerce stores its base location as `COUNTRY:STATE`, so only the
         * country segment is returned. Empty when WooCommerce is not active or has
         * no base country configured.
         *
         * @return string A two-letter country code, or an empty string.
         */
        private function get_store_country(): string
        {
        }
        /**
         * Setup Wizard Content
         */
        public function setup_wizard_content(): void
        {
        }
        /**
         * Error page HTML
         *
         * @param string $id The HTML ID attribute of the main container div.
         * @param string $footer The centered footer content.
         */
        private function settings_error_page(string $id = 'gtmkit-react-site-settings', string $footer = ''): void
        {
        }
        /**
         * Render page
         *
         * @return void
         */
        public function render_page()
        {
        }
    }
    /**
     * Reports GTM Kit's configuration in the WordPress Site Health screens.
     *
     * Two direct tests under Site Health → Status and one section under
     * Site Health → Info. Everything is resolved from options already loaded
     * for the request: no test performs an HTTP request, and nothing here
     * sends data anywhere.
     */
    final class SiteHealth
    {
        /**
         * The badge colour shared by every GTM Kit test.
         *
         * WordPress reserves blue for performance and purple for security, so
         * GTM Kit's tests carry their own colour and group together in the
         * Status list.
         *
         * @var string
         */
        public const BADGE_COLOR = 'orange';
        /**
         * Where the Tracking Health Check link lands.
         *
         * Calls to action go through one jump.gtmkit.com short link per surface,
         * so each is individually attributable and its destination can be
         * repointed without a plugin release. This surface has its own code; the
         * URL it redirects to is set on the short link itself, not here.
         *
         * @var string
         */
        private const HEALTH_CHECK_URL = 'https://jump.gtmkit.com/link/18-8E808';
        /**
         * The Site Health test id for the settings API check.
         *
         * @var string
         */
        public const REST_API_TEST_ID = 'gtmkit_rest_api';
        /**
         * The admin-ajax action suffix the Status screen calls for the settings API check.
         *
         * Core builds the action as `health-check-` plus this value with only its
         * first underscore turned into a hyphen, so the value carries none.
         *
         * @var string
         */
        public const REST_API_TEST_ACTION = 'gtmkit-rest-api';
        /**
         * Seconds the settings API check waits for an answer.
         *
         * The same allowance WordPress gives its own loopback check.
         *
         * @var int
         */
        private const REST_API_TIMEOUT = 10;
        /**
         * GTM Kit add-ons reported in the debug section.
         *
         * @var array<string, string>
         */
        private const ADD_ON_PLUGINS = ['gtm-kit-woo/gtm-kit-woo.php' => 'GTM Kit Woo Add-On', 'gtm-kit-premium/gtm-kit-premium.php' => 'GTM Kit Premium'];
        /**
         * Ecommerce plugins GTM Kit integrates with.
         *
         * @var array<string, string>
         */
        private const ECOMMERCE_PLUGINS = ['woocommerce/woocommerce.php' => 'WooCommerce', 'easy-digital-downloads/easy-digital-downloads.php' => 'Easy Digital Downloads', 'easy-digital-downloads-pro/easy-digital-downloads.php' => 'Easy Digital Downloads Pro'];
        /**
         * Form plugins GTM Kit integrates with.
         *
         * @var array<string, string>
         */
        private const FORM_PLUGINS = ['contact-form-7/wp-contact-form-7.php' => 'Contact Form 7', 'gravityforms/gravityforms.php' => 'Gravity Forms'];
        /**
         * Plugin options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        private \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Utility.
         *
         * @var \TLA_Media\GTM_Kit\Common\Util
         */
        private \TLA_Media\GTM_Kit\Common\Util $util;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util An instance of Util.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util)
        {
        }
        /**
         * Register the Site Health integration.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util An instance of Util.
         *
         * @return void
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util): void
        {
        }
        /**
         * Add GTM Kit's tests to the Site Health status screen.
         *
         * Every test is `direct`: they read options and the active-plugin list,
         * so none of them needs the asynchronous queue.
         *
         * @param array<string, array<string, mixed>> $tests The registered Site Health tests.
         *
         * @return array<string, array<string, mixed>>
         */
        public function add_status_tests(array $tests): array
        {
        }
        /**
         * Run the settings API check for the Status screen's asynchronous queue.
         *
         * @return void
         */
        public function ajax_test_rest_api(): void
        {
        }
        /**
         * Test that the plugin's own REST API answers.
         *
         * The settings screen saves, and the Support screen shares system data,
         * through the same namespace and permission check. The request here is
         * the same kind of POST, signed in as the current user the way the
         * settings screen signs in, but it travels from the server to itself.
         * A browser takes a different route, through whatever firewall or proxy
         * sits in front of the site, so every result says what was tested.
         *
         * @return array<string, mixed> The Site Health result.
         */
        public function test_rest_api(): array
        {
        }
        /**
         * Send the check's request to the plugin's REST API.
         *
         * Built like WordPress's own loopback check: the current request's
         * cookies and any Basic auth credentials are passed on, and local SSL
         * verification follows the same filter. The REST nonce is what makes
         * WordPress accept the cookies as a signed-in user, exactly as it does
         * for the settings screen.
         *
         * @return array<string, mixed>|\WP_Error The response, or the transport error.
         */
        private function request_rest_api()
        {
        }
        /**
         * Describe the server container loader in use.
         *
         * @param array{source: string, region: string, fetchedAt: int} $state The loader state.
         *
         * @return string
         */
        private static function describe_sgtm_loader(array $state): string
        {
        }
        /**
         * Add the GTM Kit section to the Site Health info screen.
         *
         * @param array<string, array<string, mixed>> $info The debug information sections.
         *
         * @return array<string, array<string, mixed>>
         */
        public function add_debug_information(array $info): array
        {
        }
        /**
         * Assemble the fields of the debug information section.
         *
         * Everything is read from options and the active-plugin list, and
         * rendered locally. The container environment values are marked private
         * so they stay out of the copied report.
         *
         * @return array<string, array<string, mixed>> The Site Health fields.
         */
        private function get_debug_fields(): array
        {
        }
        /**
         * Describe whether GTM Kit adds the container to the site's pages.
         *
         * @return string The value for the debug field.
         */
        private function get_container_output_label(): string
        {
        }
        /**
         * Describe how the container script is loaded.
         *
         * @return string The value for the debug field.
         */
        private function get_script_implementation_label(): string
        {
        }
        /**
         * Describe where the noscript container code is placed.
         *
         * @return string The value for the debug field.
         */
        private function get_noscript_implementation_label(): string
        {
        }
        /**
         * Describe the consent gating mode.
         *
         * @return string The value for the debug field.
         */
        private function get_gating_mode_label(): string
        {
        }
        /**
         * Resolve the active plugins of a group to `Name version` strings.
         *
         * Versions come from the same lookup the shared site data uses, so a
         * version reported here matches the one support already sees.
         *
         * @param array<string, string> $plugins Plugin file path => display name.
         *
         * @return array<int, string> One entry per active plugin.
         */
        private function get_plugin_versions(array $plugins): array
        {
        }
        /**
         * Test the container configuration.
         *
         * Reports what GTM Kit itself does with the container: whether an ID is
         * saved and whether GTM Kit outputs the container snippet. Whether a
         * container actually loads in the browser is a wider question than this
         * test answers, since another component can load it instead.
         *
         * @return array<string, mixed> The Site Health result.
         */
        public function test_container(): array
        {
        }
        /**
         * Test the consent configuration.
         *
         * Consent belongs to whoever owns it on the site: GTM Kit's own Consent
         * Mode defaults, or a consent platform running alongside it. The test
         * reports which of the two is in place and never treats the answer as an
         * error, because how a site handles consent is the site owner's decision.
         *
         * @return array<string, mixed> The Site Health result.
         */
        public function test_consent(): array
        {
        }
        /**
         * Build a Site Health result carrying the GTM Kit badge.
         *
         * @param string $test_id The test id, returned to Site Health as `test`.
         * @param string $label The one-line result headline.
         * @param string $status One of `good`, `recommended` or `critical`.
         * @param string $description The result body, as one or more HTML paragraphs.
         * @param string $actions The result's links, as HTML, or an empty string.
         *
         * @return array<string, mixed> The Site Health result.
         */
        public function build_result(string $test_id, string $label, string $status, string $description, string $actions = ''): array
        {
        }
        /**
         * Build a link to a documentation page.
         *
         * Documentation is cited as evidence rather than used as a conversion
         * target, so these are direct URLs carrying the plugin's campaign
         * fragment, not short links.
         *
         * @param string $slug The documentation page slug.
         * @param string $term The campaign term identifying the topic.
         * @param string $label The link text.
         *
         * @return string The paragraph-wrapped anchor markup.
         */
        public function documentation_link(string $slug, string $term, string $label): string
        {
        }
        /**
         * Build a result's action link.
         *
         * @param string $url The link target.
         * @param string $label The link text.
         * @param bool   $external Whether the link leaves the admin.
         *
         * @return string The paragraph-wrapped anchor markup.
         */
        public function action_link(string $url, string $label, bool $external = false): string
        {
        }
    }
    /**
     * Reports what a scan of the site's own pages found, in Site Health.
     *
     * The other two GTM Kit tests report configuration: what the plugin is set up
     * to do. This one reports what a request to the site actually returned, which
     * is the only place in the admin where the two can disagree and be seen to.
     *
     * It reads the stored scan result and performs no request of its own, so it
     * stays a fast direct test. Its wording never claims more than a server-side
     * fetch can support: a container absent from the HTML may still be loaded in
     * the browser by a consent platform, and the result says so.
     */
    final class SnippetScanSiteHealth
    {
        /**
         * The Site Health test id.
         *
         * @var string
         */
        private const TEST_ID = 'gtmkit_tracking_scan';
        /**
         * An instance of SnippetScan.
         *
         * @var \TLA_Media\GTM_Kit\Common\SnippetScan
         */
        private \TLA_Media\GTM_Kit\Common\SnippetScan $snippet_scan;
        /**
         * An instance of Options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        private \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Common\SnippetScan $snippet_scan An instance of SnippetScan.
         * @param \TLA_Media\GTM_Kit\Options\Options     $options An instance of Options.
         */
        public function __construct(\TLA_Media\GTM_Kit\Common\SnippetScan $snippet_scan, \TLA_Media\GTM_Kit\Options\Options $options)
        {
        }
        /**
         * Register the test.
         *
         * @param \TLA_Media\GTM_Kit\Common\SnippetScan $snippet_scan An instance of SnippetScan.
         * @param \TLA_Media\GTM_Kit\Options\Options     $options An instance of Options.
         *
         * @return void
         */
        public static function register(\TLA_Media\GTM_Kit\Common\SnippetScan $snippet_scan, \TLA_Media\GTM_Kit\Options\Options $options): void
        {
        }
        /**
         * Add the test to GTM Kit's Site Health group.
         *
         * @param array<string, array<string, mixed>> $tests The GTM Kit tests.
         * @param SiteHealth                          $site_health The Site Health integration.
         *
         * @return array<string, array<string, mixed>>
         */
        public function add_test(array $tests, \TLA_Media\GTM_Kit\Admin\SiteHealth $site_health): array
        {
        }
        /**
         * Build the test result from the stored scan.
         *
         * @param SiteHealth $site_health The Site Health integration, for its result and link builders.
         *
         * @return array<string, mixed> The Site Health result.
         */
        public function run_test(\TLA_Media\GTM_Kit\Admin\SiteHealth $site_health): array
        {
        }
        /**
         * Report a page that carries tracking.
         *
         * @param SiteHealth           $site_health The Site Health integration.
         * @param array<string, mixed> $result The stored scan result.
         *
         * @return array<string, mixed> The Site Health result.
         */
        private function found_result(\TLA_Media\GTM_Kit\Admin\SiteHealth $site_health, array $result): array
        {
        }
        /**
         * Report a page that carries no tracking.
         *
         * Two cases turn this from a finding into a statement of fact. A site
         * that reports itself as somewhere the container does not belong has no
         * container to find, by design. A consent platform legitimately gets one
         * to the browser without it ever appearing in the server's HTML.
         *
         * @param SiteHealth           $site_health The Site Health integration.
         * @param array<string, mixed> $result The stored scan result.
         *
         * @return array<string, mixed> The Site Health result.
         */
        private function not_found_result(\TLA_Media\GTM_Kit\Admin\SiteHealth $site_health, array $result): array
        {
        }
        /**
         * Report a scan that could not answer the question.
         *
         * @param SiteHealth           $site_health The Site Health integration.
         * @param array<string, mixed> $result The stored scan result.
         *
         * @return array<string, mixed> The Site Health result.
         */
        private function inconclusive_result(\TLA_Media\GTM_Kit\Admin\SiteHealth $site_health, array $result): array
        {
        }
        /**
         * List what the scan identified, so the finding can be checked by hand.
         *
         * @param array<string, mixed> $result The stored scan result.
         *
         * @return string The list markup, or an empty string.
         */
        private function implementation_list(array $result): string
        {
        }
        /**
         * Build the link to the page that was scanned.
         *
         * @param array<string, mixed> $result The stored scan result.
         *
         * @return string The anchor markup.
         */
        private function scanned_url_link(array $result): string
        {
        }
        /**
         * Assemble the result, with the scan's age and a rescan action.
         *
         * @param SiteHealth                $site_health The Site Health integration.
         * @param string                    $label The one-line result headline.
         * @param string                    $status One of `good`, `recommended` or `critical`.
         * @param string                    $description The result body.
         * @param array<string, mixed>|null $result The stored scan result, when one exists.
         *
         * @return array<string, mixed> The Site Health result.
         */
        private function build(\TLA_Media\GTM_Kit\Admin\SiteHealth $site_health, string $label, string $status, string $description, ?array $result = null): array
        {
        }
    }
    /**
     * Tells the site owner when the loader Stape issues is switched on but none is stored.
     *
     * Without a stored loader the pages load Google Tag Manager the standard way,
     * which keeps tracking running and looks exactly like a working setup. The
     * setting reads as on, so an owner who never opens the Server-side Tagging
     * screen has no way to know, which is why this is a notice across the admin
     * rather than a readout on that screen.
     *
     * The condition is read from the current state rather than from a record of
     * how the site got there, so it covers a loader that was removed because it
     * could not be trusted, an upgrade that removed it, and a first switch-on
     * before any loader was fetched, all the same way.
     *
     * The notice exists only while that state does, so it carries its own
     * dismissal rather than leaving it to the notifications system, whose record
     * covers only notifications currently in the set. The dismissal is cleared as
     * soon as the state ends, so if it returns later the owner is told again.
     */
    final class StapeLoaderNotice
    {
        /**
         * The notification id.
         *
         * @var string
         */
        public const NOTIFICATION_ID = 'gtmkit-sgtm-loader-missing';
        /**
         * The option recording that the notice was dismissed while the state lasts.
         *
         * @var string
         */
        public const DISMISSED_OPTION = 'gtmkit_sgtm_loader_notice_dismissed';
        /**
         * An instance of StapeLoader.
         *
         * @var \TLA_Media\GTM_Kit\Common\StapeLoader
         */
        private \TLA_Media\GTM_Kit\Common\StapeLoader $loader;
        /**
         * An instance of NotificationsHandler.
         *
         * @var NotificationsHandler
         */
        private \TLA_Media\GTM_Kit\Admin\NotificationsHandler $notifications_handler;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Common\StapeLoader          $loader An instance of StapeLoader.
         * @param NotificationsHandler $notifications_handler An instance of NotificationsHandler.
         */
        public function __construct(\TLA_Media\GTM_Kit\Common\StapeLoader $loader, \TLA_Media\GTM_Kit\Admin\NotificationsHandler $notifications_handler)
        {
        }
        /**
         * Register the notice.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         *
         * @return void
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options): void
        {
        }
        /**
         * Whether the loader is switched on and set up, but none is stored.
         *
         * @return bool
         */
        public function is_due(): bool
        {
        }
        /**
         * Add or withdraw the notice to match the current state.
         *
         * @return void
         */
        public function evaluate(): void
        {
        }
        /**
         * Remember that the notice was dismissed.
         *
         * @return void
         */
        public static function dismiss(): void
        {
        }
        /**
         * Whether the notice has been dismissed while the current state lasts.
         *
         * @return bool
         */
        public static function is_dismissed(): bool
        {
        }
        /**
         * Build the notice.
         *
         * @return Notification
         */
        private function build(): \TLA_Media\GTM_Kit\Admin\Notification
        {
        }
    }
    /**
     * Suggestions
     */
    final class Suggestions
    {
        /**
         * The importer source each conflicting plugin's settings can be read from.
         *
         * Conflicting plugins with no importer are absent, so they get the plain
         * notice without an import offer.
         *
         * @var array<string, string>
         */
        private const CONFLICTING_PLUGIN_IMPORT_SOURCES = ['gtm4wp' => 'gtm4wp', 'gtm-ecommerce-woo' => 'gtm_for_woocommerce', 'gtm-ecommerce-woo-pro' => 'gtm_for_woocommerce', 'wk-google-analytics' => 'google_analytics_and_google_tag_manager', 'google-tag-manager' => 'google_tag_manager'];
        /**
         * Notice for a WooCommerce store that is not reporting its ecommerce events.
         *
         * @var string
         */
        private const UPGRADE_NOTICE_WOO_ECOMMERCE = 'gtmkit-upgrade-woo-ecommerce';
        /**
         * Notice for a site tagging server-side without server-side purchases.
         *
         * @var string
         */
        private const UPGRADE_NOTICE_SERVER_SIDE = 'gtmkit-upgrade-server-side';
        /**
         * Notice for a site that only lets GTM Kit output the container.
         *
         * @var string
         */
        private const UPGRADE_NOTICE_CONTAINER_ONLY = 'gtmkit-upgrade-container-only';
        /**
         * The contextual upgrade notices, most to least worth showing.
         *
         * Only ever one of these is raised at a time. A site can match more than
         * one of them, and answering the same suggestion three times over is how a
         * useful notice turns into noise, so the first match wins and the rest stay
         * silent until the site no longer matches it.
         *
         * @var array<int, string>
         */
        private const UPGRADE_NOTICE_ORDER = [self::UPGRADE_NOTICE_WOO_ECOMMERCE, self::UPGRADE_NOTICE_SERVER_SIDE, self::UPGRADE_NOTICE_CONTAINER_ONLY];
        /**
         * Where each contextual upgrade notice's call to action goes.
         *
         * One short link per notice, so each is attributable on its own rather than
         * sharing a link with another surface: which of these three a reader acted
         * on is answerable from the link alone. Where a link lands is set on the
         * link itself, so a call to action can be repointed without shipping a
         * release, and this file never needs to know the destination.
         *
         * @var array<string, string>
         */
        private const UPGRADE_NOTICE_LINKS = [self::UPGRADE_NOTICE_WOO_ECOMMERCE => 'https://jump.gtmkit.com/link/21-D190B', self::UPGRADE_NOTICE_SERVER_SIDE => 'https://jump.gtmkit.com/link/22-62FD8', self::UPGRADE_NOTICE_CONTAINER_ONLY => 'https://jump.gtmkit.com/link/23-F490A'];
        /**
         * The contextual upgrade notice this request raises, if any.
         *
         * Resolved once and reused: each notice asks for the winner, and the
         * question costs an option read and a product count.
         *
         * @var string|null
         */
        private ?string $active_upgrade_notice = null;
        /**
         * Whether the active contextual upgrade notice has been resolved yet.
         *
         * Separate from the value itself because "no notice applies" is a real
         * answer worth caching.
         *
         * @var bool
         */
        private bool $upgrade_notice_resolved = false;
        /**
         * An instance of PluginAvailability.
         *
         * @var PluginAvailability
         */
        protected \TLA_Media\GTM_Kit\Admin\PluginAvailability $plugin_availability;
        /**
         * An instance of NotificationsHandler.
         *
         * @var NotificationsHandler
         */
        private \TLA_Media\GTM_Kit\Admin\NotificationsHandler $notifications_handler;
        /**
         * An instance of Options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        private \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * An instance of Util.
         *
         * @var \TLA_Media\GTM_Kit\Common\Util
         */
        private \TLA_Media\GTM_Kit\Common\Util $util;
        /**
         * An instance of SnippetScan.
         *
         * @var \TLA_Media\GTM_Kit\Common\SnippetScan
         */
        private \TLA_Media\GTM_Kit\Common\SnippetScan $snippet_scan;
        /**
         * Constructor.
         *
         * @param NotificationsHandler $notifications_handler The notifications handler to add notifications to.
         * @param PluginAvailability   $plugin_availability Plugin Availability.
         * @param \TLA_Media\GTM_Kit\Options\Options              $options Options.
         * @param \TLA_Media\GTM_Kit\Common\Util                 $util Util.
         * @param \TLA_Media\GTM_Kit\Common\SnippetScan          $snippet_scan The tracking scan, read for evidence about the rendered page.
         */
        public function __construct(\TLA_Media\GTM_Kit\Admin\NotificationsHandler $notifications_handler, \TLA_Media\GTM_Kit\Admin\PluginAvailability $plugin_availability, \TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util, \TLA_Media\GTM_Kit\Common\SnippetScan $snippet_scan)
        {
        }
        /**
         * Register
         *
         * @param NotificationsHandler $notifications_handler The notifications handler to add notifications to.
         * @param PluginAvailability   $plugin_availability Plugin Availability.
         * @param \TLA_Media\GTM_Kit\Options\Options              $options Options.
         * @param \TLA_Media\GTM_Kit\Common\Util                 $util Util.
         * @param \TLA_Media\GTM_Kit\Common\SnippetScan          $snippet_scan The tracking scan, read for evidence about the rendered page.
         *
         * @return void
         */
        public static function register(\TLA_Media\GTM_Kit\Admin\NotificationsHandler $notifications_handler, \TLA_Media\GTM_Kit\Admin\PluginAvailability $plugin_availability, \TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util, \TLA_Media\GTM_Kit\Common\SnippetScan $snippet_scan): void
        {
        }
        /**
         * Suggest Auto-update.
         *
         * @return void
         */
        public function suggest_auto_update(): void
        {
        }
        /**
         * Report that the container is withheld because of what the site reports.
         *
         * A site that declared itself as staging, development or local and used
         * to track anyway stops tracking after this update. That is the intended
         * correction, but it must never look like a malfunction, so the reason is
         * stated where the site owner works and the setting that reverses it is
         * one click away.
         *
         * @return void
         */
        public function report_suppressed_container(): void
        {
        }
        /**
         * Suggest that a site whose address reads like a copy says so.
         *
         * Informational only: a guess about the address never changes what GTM
         * Kit outputs, and a site that explicitly declared what it is has already
         * answered the question, so it is never asked again.
         *
         * @return void
         */
        public function suggest_declaring_a_copy(): void
        {
        }
        /**
         * Suggest container injection
         *
         * @return void
         */
        public function suggest_container_injection(): void
        {
        }
        /**
         * Report that the site loads tracking more than once.
         *
         * Raised only from a scan that positively identified more than one
         * implementation in the page the server sends. A scan that could not be
         * completed proves nothing and raises nothing.
         *
         * @return void
         */
        public function suggest_duplicate_tracking(): void
        {
        }
        /**
         * Suggest container injection
         *
         * @return void
         */
        public function suggest_log_deactivation(): void
        {
        }
        /**
         * Suggest GTM Kit Woo Add-On.
         *
         * @return void
         */
        public function suggest_premium(): void
        {
        }
        /**
         * Suggest a supported SEO plugin.
         *
         * @return void
         */
        public function suggest_seo_plugin(): void
        {
        }
        /**
         * Detect conflicting plugins.
         *
         * @return void
         */
        public function detect_conflicting_plugins(): void
        {
        }
        /**
         * Suggest a supported SEO plugin.
         *
         * @return void
         */
        public function suggest_grandfathered_wishlist(): void
        {
        }
        /**
         * Point out that a store's ecommerce events are not being reported.
         *
         * @return void
         */
        public function suggest_woo_ecommerce_upgrade(): void
        {
        }
        /**
         * Point out what a server-side setup still leaves to the browser.
         *
         * @return void
         */
        public function suggest_server_side_upgrade(): void
        {
        }
        /**
         * Point out what a container-only setup gives up.
         *
         * @return void
         */
        public function suggest_container_only_upgrade(): void
        {
        }
        /**
         * Raise one contextual upgrade notice, or take it away again.
         *
         * @param string $notification_id The notice to raise.
         *
         * @return void
         */
        private function raise_upgrade_notice(string $notification_id): void
        {
        }
        /**
         * Decide which contextual upgrade notice this site should see, if any.
         *
         * The site is matched against the notices in order and the first match
         * wins, so a site that matches several is told the most useful thing once
         * rather than three things at once. A win that was dismissed recently is
         * not passed on to the next notice either: the answer to "not now" is
         * silence, not a different suggestion on the same subject.
         *
         * @return string|null The notice to show, or null when none applies.
         */
        private function get_active_upgrade_notice(): ?string
        {
        }
        /**
         * Whether a site is in the situation one contextual upgrade notice is about.
         *
         * @param string $notification_id The notice to test the site against.
         *
         * @return bool True when the notice describes this site.
         */
        private function upgrade_notice_applies(string $notification_id): bool
        {
        }
        /**
         * The domain this site sends its tagging through, when it is its own.
         *
         * An empty setting and Google's own domain both mean the same thing: the
         * site is not tagging server-side, so there is nothing for the notice to
         * be true about.
         *
         * @return string The tagging server domain, or an empty string.
         */
        private function get_tagging_server_domain(): string
        {
        }
        /**
         * Count the products a store has published.
         *
         * Counted at the moment the notice is written rather than stored, so the
         * number a site owner reads is the number the site has. WordPress caches
         * the count itself, so asking on each admin request is a cache read on a
         * site with an object cache and a single counting query without one.
         *
         * @return int The number of published products.
         */
        private function get_published_product_count(): int
        {
        }
        /**
         * Where a contextual upgrade notice's call to action goes.
         *
         * @param string $notification_id The notice the link belongs to.
         *
         * @return string The notice's destination.
         */
        private function upgrade_notice_link(string $notification_id): string
        {
        }
        /**
         * Build one contextual upgrade notification.
         *
         * @param string $notification_id The notice to build.
         *
         * @return Notification The notification.
         */
        private function get_upgrade_notification(string $notification_id): \TLA_Media\GTM_Kit\Admin\Notification
        {
        }
        /**
         * Build the notification for a store whose ecommerce events are switched off.
         *
         * @param string $notification_id The id of the notification to be created.
         *
         * @return Notification The notification.
         */
        protected function get_woo_ecommerce_upgrade_notification(string $notification_id): \TLA_Media\GTM_Kit\Admin\Notification
        {
        }
        /**
         * Build the notification for a site tagging server-side.
         *
         * @param string $notification_id The id of the notification to be created.
         *
         * @return Notification The notification.
         */
        protected function get_server_side_upgrade_notification(string $notification_id): \TLA_Media\GTM_Kit\Admin\Notification
        {
        }
        /**
         * Build the notification for a site that loads the container only.
         *
         * @param string $notification_id The id of the notification to be created.
         *
         * @return Notification The notification.
         */
        protected function get_container_only_upgrade_notification(string $notification_id): \TLA_Media\GTM_Kit\Admin\Notification
        {
        }
        /**
         * Whether a notification is one of the contextual upgrade notices.
         *
         * Their dismissals are kept outside the notifications system, so the
         * dismissal route has to be able to tell them apart from the rest.
         *
         * @param string $notification_id The id of the dismissed notification.
         *
         * @return bool True when the notice keeps its own dismissal record.
         */
        public static function is_upgrade_notice(string $notification_id): bool
        {
        }
        /**
         * Build premium plugin notification.
         *
         * @param string                $notification_id The id of the notification to be created.
         * @param array<string, string> $extensions The plugin data.
         *
         * @return Notification The notification containing the suggested plugin.
         */
        protected function get_premium_notification(string $notification_id, array $extensions): \TLA_Media\GTM_Kit\Admin\Notification
        {
        }
        /**
         * Build a notification's action link.
         *
         * Links belong at the end of a message, after a sentence that reads
         * correctly without them: the dashboard lifts every link out of the message
         * and renders it as an action button beside the notification, so a link left
         * mid-sentence leaves a hole in the text it was part of.
         *
         * @param string $url The link target.
         * @param string $label The link text.
         *
         * @return string The anchor markup.
         */
        private function action_link(string $url, string $label): string
        {
        }
        /**
         * Build suggestion of SEO plugin notification.
         *
         * @param string $notification_id The id of the notification to be created.
         *
         * @return Notification The notification containing the suggested plugin.
         */
        protected function get_suggest_seo_plugin_notification(string $notification_id): \TLA_Media\GTM_Kit\Admin\Notification
        {
        }
        /**
         * Build conflicting plugin notification.
         *
         * @param string                $notification_id The id of the notification to be created.
         * @param array<string, string> $plugin The plugin data.
         *
         * @return Notification The notification containing the suggested plugin.
         */
        protected function get_conflicting_plugin_notification(string $notification_id, array $plugin): \TLA_Media\GTM_Kit\Admin\Notification
        {
        }
        /**
         * Build the import offer appended to a conflicting plugin's notification.
         *
         * Returns an empty string when the plugin has no importer, or has one but
         * stored nothing worth importing, so the notice never links to an import
         * that would find no settings.
         *
         * @param array<string, string> $plugin The plugin data.
         *
         * @return string The sentence offering the import, or an empty string.
         */
        private function get_conflicting_plugin_import_offer(array $plugin): string
        {
        }
        /**
         * Build GF wishlist notification.
         *
         * @param string $notification_id The id of the notification to be created.
         *
         * @return Notification The notification containing the suggested plugin.
         */
        protected function get_gf_wishlist_plugin_notification(string $notification_id): \TLA_Media\GTM_Kit\Admin\Notification
        {
        }
        /**
         * Build suggestion of auto-update notification.
         *
         * @param string $notification_id The id of the notification to be created.
         *
         * @return Notification The notification containing the suggested plugin.
         */
        protected function get_suggest_auto_update_notification(string $notification_id): \TLA_Media\GTM_Kit\Admin\Notification
        {
        }
        /**
         * Build the notification for a container withheld because of what the site reports.
         *
         * @param string $notification_id The id of the notification to be created.
         *
         * @return Notification The notification.
         */
        protected function get_suppressed_container_notification(string $notification_id): \TLA_Media\GTM_Kit\Admin\Notification
        {
        }
        /**
         * Build the notification suggesting an undeclared copy says what it is.
         *
         * @param string $notification_id The id of the notification to be created.
         *
         * @return Notification The notification.
         */
        protected function get_declare_a_copy_notification(string $notification_id): \TLA_Media\GTM_Kit\Admin\Notification
        {
        }
        /**
         * Build suggestion of container injection notification.
         *
         * @param string $notification_id The id of the notification to be created.
         * @param bool   $container_active The container activation status.
         * @param string $gtm_id The GTM Container ID.
         *
         * @return Notification The notification containing the suggested plugin.
         */
        protected function get_suggest_container_injection_notification(string $notification_id, bool $container_active, string $gtm_id): \TLA_Media\GTM_Kit\Admin\Notification
        {
        }
        /**
         * Build the notification for a page that loads tracking more than once.
         *
         * A second container and a repeated container are established double
         * counting, so they are problems. A Google tag beside the container is
         * only a duplicate when the same tag also fires inside the container,
         * which the scan cannot see, so it is raised as a notice that does not
         * claim duplication.
         *
         * @param string               $notification_id The id of the notification to be created.
         * @param array<string, mixed> $duplicate The duplicate finding from the scan.
         *
         * @return Notification The notification.
         */
        protected function get_duplicate_tracking_notification(string $notification_id, array $duplicate): \TLA_Media\GTM_Kit\Admin\Notification
        {
        }
        /**
         * State what a scan of the site's own page found, when it found nothing.
         *
         * The daily scan requests a sample page the way a visitor receives it, so
         * it can say something the settings screen cannot: whether anything at
         * all is loading a container. It can only report on the HTML the server
         * sends, so the wording stops there and never claims that nothing loads
         * in the browser. A consent platform is exactly the case where the two
         * differ, so its presence is stated alongside the finding. A site that
         * reports itself as somewhere the container does not belong is the other
         * expected absence, and is answered first because it explains the empty
         * page outright.
         *
         * Returns an empty string unless a stored scan positively found no
         * implementation: a failed, blocked or never-run scan is evidence of
         * nothing and must add nothing.
         *
         * A consent platform only explains the absence on a site that has a
         * container for it to load. With no ID saved there is nothing to load,
         * so the finding is reported plainly instead.
         *
         * @param string $gtm_id The saved Google Tag Manager container ID.
         *
         * @return string The evidence sentence, or an empty string.
         */
        private function get_empty_page_evidence(string $gtm_id): string
        {
        }
        /**
         * Build suggestion of container injection notification.
         *
         * @param string $notification_id The id of the notification to be created.
         * @param bool   $console_log Console log activation status.
         * @param bool   $debug_log Debug log activation status.
         *
         * @return Notification The notification containing the suggested plugin.
         */
        protected function get_suggest_log_deactivation_notification(string $notification_id, bool $console_log, bool $debug_log): \TLA_Media\GTM_Kit\Admin\Notification
        {
        }
        /**
         * New notification.
         *
         * @param string $notification_id The id of the notification to be created.
         * @param string $message The message in the notification.
         * @param string $header The header in the notification.
         * @param string $type The notification type.
         *
         * @return Notification The notification containing the suggested plugin.
         */
        protected function new_notification(string $notification_id, string $message, string $header, string $type = \TLA_Media\GTM_Kit\Admin\Notification::NOTICE): \TLA_Media\GTM_Kit\Admin\Notification
        {
        }
    }
}
namespace TLA_Media\GTM_Kit\Common {
    /**
     * Plugin-level consent management platform detection.
     *
     * Used to pre-select the matching CMP toggle on fresh installs so a
     * site that already runs Cookiebot, Iubenda, or CookieYes ships with
     * the right script attribute the moment GTM Kit is activated. Detection
     * is plugin-only in this release: walking the active-plugins list is
     * fast, deterministic, and covers the most common deployments. CMPs
     * loaded via themes or GTM tags are not detected; surface in support
     * tickets if that gap matters.
     */
    final class CMPDetection
    {
        /**
         * CMP slug → list of plugin file paths that indicate the CMP is
         * active. Multiple entries per CMP cover historical/alternate slugs.
         *
         * @var array<string, array<int, string>>
         */
        private const PLUGIN_FILES = ['cookiebot' => ['cookiebot/cookiebot.php', 'cookiebot-by-cybot/cookiebot.php'], 'iubenda' => ['iubenda-cookie-law-solution/iubenda_cookie_solution.php'], 'cookieyes' => ['cookie-law-info/cookie-law-info.php']];
        /**
         * Display names for the consent platforms this class recognises.
         *
         * @var array<string, string>
         */
        private const DISPLAY_NAMES = ['cookiebot' => 'Cookiebot', 'iubenda' => 'Iubenda', 'cookieyes' => 'CookieYes'];
        /**
         * Resolve a detected CMP to the name its users know it by.
         *
         * @param string|null $slug A slug returned by {@see self::detect_active_cmp()}.
         *
         * @return string The display name, or an empty string when nothing was detected.
         */
        public static function get_display_name(?string $slug): string
        {
        }
        /**
         * Detect the first matching active CMP plugin, if any.
         *
         * Iteration follows the canonical order Cookiebot → Iubenda →
         * CookieYes; sites running more than one CMP plugin (rare and
         * misconfigured) get the first match for a deterministic fallback.
         *
         * @return string|null One of `cookiebot`, `iubenda`, `cookieyes`, a slug
         *     declared through the `gtmkit_active_cmp` filter, or null when no
         *     consent platform is active.
         */
        public static function detect_active_cmp(): ?string
        {
        }
    }
}
namespace TLA_Media\GTM_Kit\Common\Conditionals {
    /**
     * Conditional interface.
     */
    interface Conditional
    {
        /**
         * Returns whether this conditional is met.
         *
         * @return bool Whether the conditional is met.
         */
        public function is_met(): bool;
    }
    /**
     * Conditional that is only met when the Bricks theme is active.
     */
    class BricksConditional implements \TLA_Media\GTM_Kit\Common\Conditionals\Conditional
    {
        /**
         * Returns `true` when the Bricks theme is installed and activated.
         *
         * @return bool `true` when the Bricks theme is installed and activated.
         */
        public function is_met(): bool
        {
        }
    }
    /**
     * Conditional that is only met when Easy Digital Downloads is active.
     */
    class ContactForm7Conditional implements \TLA_Media\GTM_Kit\Common\Conditionals\Conditional
    {
        /**
         * Returns `true` when the Contact Form 7 plugin is installed and activated.
         *
         * @return bool `true` when the Contact Form 7 plugin is installed and activated.
         */
        public function is_met(): bool
        {
        }
    }
    /**
     * Conditional that is only met when Easy Digital Downloads is active.
     */
    class EasyDigitalDownloadsConditional implements \TLA_Media\GTM_Kit\Common\Conditionals\Conditional
    {
        /**
         * Returns `true` when the Easy Digital Downloads plugin is installed and activated.
         *
         * @return bool `true` when the Easy Digital Downloads plugin is installed and activated.
         */
        public function is_met(): bool
        {
        }
    }
    /**
     * Conditional that is only met when GTM Kit Premium is active.
     */
    class PremiumConditional implements \TLA_Media\GTM_Kit\Common\Conditionals\Conditional
    {
        /**
         * Returns `true` when the GTM Kit Premium plugin is installed and activated.
         *
         * This checks if the plugin's inc/main.php file has actually loaded, not just
         * if the main plugin file is present. This prevents false positives when a
         * plugin is "active" but its functionality hasn't loaded due to version checks.
         *
         * @return bool `true` when the Premium plugin is installed and activated.
         */
        public function is_met(): bool
        {
        }
    }
    /**
     * Conditional that is only met when the GTM Kit Premium plugin is active.
     *
     * Unlike PremiumConditional, which is met by any paid add-on (Woo or Premium),
     * this conditional is met exclusively by GTM Kit Premium. The admin app uses it
     * to tell the Premium tier apart from the Woo tier when deciding what to gate.
     */
    class PremiumPluginConditional implements \TLA_Media\GTM_Kit\Common\Conditionals\Conditional
    {
        /**
         * Returns `true` when the GTM Kit Premium plugin is installed and activated.
         *
         * Mirrors PremiumConditional by checking that the plugin's functionality has
         * actually loaded (its text-domain loader is defined), not merely that the
         * plugin file is present, to avoid false positives when a plugin is "active"
         * but short-circuited by its own version checks.
         *
         * @return bool `true` when the Premium plugin is installed and activated.
         */
        public function is_met(): bool
        {
        }
    }
    /**
     * Conditional that is only met when WooCommerce is active.
     */
    class WooCommerceConditional implements \TLA_Media\GTM_Kit\Common\Conditionals\Conditional
    {
        /**
         * Returns `true` when the WooCommerce plugin is installed and activated.
         *
         * @return bool `true` when the WooCommerce plugin is installed and activated.
         */
        public function is_met(): bool
        {
        }
    }
}
namespace TLA_Media\GTM_Kit\Common {
    /**
     * Resolves whether the Google tag gateway serves this request, and from where.
     *
     * The gateway serves the container from the site's own origin through a small
     * proxy file, so the request for the tag, and Google's second-stage script,
     * are same-origin. The measurement hits the tag later makes are not: they
     * still go to Google, because Google routes them through the site's domain
     * only for domains behind a CDN or load balancer it integrates with, on a
     * flag it sets in the config it serves. Nothing served from this proxy can
     * set that flag. Everything that needs to know whether the gateway is
     * serving asks this class, so the snippet, the resource hints, the admin
     * copy and the health checks cannot disagree about the answer.
     *
     * Three states matter and they are deliberately distinct:
     *
     * - available: nothing about the configuration rules the gateway out.
     * - enabled: the site owner has switched it on.
     * - active: it is switched on and currently safe to serve from.
     *
     * The gap between enabled and active is the whole point. A proxy that stops
     * answering must not become a silent tracking outage, so an enabled gateway
     * whose checks are failing falls back to the standard loader and says so.
     */
    final class GoogleTagGateway
    {
        /**
         * The path of the proxy file, relative to the plugin root.
         *
         * @var string
         */
        public const PROXY_RELATIVE_PATH = 'gtg/measurement.php';
        /**
         * An instance of Options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        private \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options)
        {
        }
        /**
         * The public URL of the proxy file.
         *
         * @return string
         */
        public static function proxy_url(): string
        {
        }
        /**
         * The filesystem path of the proxy file.
         *
         * @return string
         */
        public static function proxy_file(): string
        {
        }
        /**
         * Whether a custom server-side tagging domain rules the gateway out.
         *
         * A custom sGTM domain already serves the container from a domain the site
         * owner controls. That is a different first-party mechanism with its own
         * infrastructure, and pointing the loader at both at once would mean
         * choosing one and silently ignoring the other. Rather than pick for the
         * site owner, the gateway stands down and the admin says which one is
         * serving the container.
         *
         * @return bool
         */
        public function is_blocked_by_sgtm_domain(): bool
        {
        }
        /**
         * Whether the gateway can be offered on this site at all.
         *
         * @return bool
         */
        public function is_available(): bool
        {
        }
        /**
         * Whether the site owner has switched the gateway on.
         *
         * @return bool
         */
        public function is_enabled(): bool
        {
        }
        /**
         * Whether this request's container should be served through the gateway.
         *
         * @return bool
         */
        public function is_active(): bool
        {
        }
        /**
         * Whether the gateway is switched on and could be used, but its checks are not passing.
         *
         * The state the fallback notice reports: the site owner asked for the
         * gateway and is not getting it because it is not working on this site.
         * A gateway ruled out by a custom sGTM domain is a different answer with
         * a different way out, reported by is_blocked_by_configuration().
         *
         * @return bool
         */
        public function is_falling_back(): bool
        {
        }
        /**
         * Whether the gateway is switched on, but a custom sGTM domain rules it out.
         *
         * Nothing is failing here: the two settings cannot be used together, and
         * the container loads from the custom domain. The site owner has to choose
         * one of them.
         *
         * @return bool
         */
        public function is_blocked_by_configuration(): bool
        {
        }
    }
    /**
     * Runs and stores the two checks the Google tag gateway depends on.
     *
     * Serving the container from this site's own origin needs two things that are
     * true on most hosts and absent on some, and neither of them fails loudly:
     *
     * - the server can open an outbound HTTPS connection to the gateway service,
     *   which locked-down hosts block;
     * - the proxy serves the tag over the web, which hosts that forbid direct PHP
     *   execution inside the plugin directory, and firewalls that filter it, block.
     *
     * When either is missing the gateway cannot serve the tag, and a site owner
     * who was not told would see tracking simply stop. So the checks run before
     * the setting can be switched on and once a day afterwards, and their stored
     * result is what decides whether the gateway serves a given request.
     *
     * The requests go through the proxy's own transport rather than the WordPress
     * HTTP API on purpose: the question is not whether some HTTP client can reach
     * the endpoint, it is whether the client the proxy itself will use can.
     *
     * Nothing here runs on a site that has not switched the gateway on. The daily
     * event is scheduled when the setting is enabled and cleared when it is not,
     * so the feature costs a site that ignores it no requests at all.
     */
    final class GoogleTagGatewayHealth
    {
        /**
         * The option holding the last result.
         *
         * @var string
         */
        public const OPTION = 'gtmkit_gtg_health';
        /**
         * The scheduled event that re-runs the checks.
         *
         * @var string
         */
        public const CHECK_HOOK = 'gtmkit_gtg_health_check';
        /**
         * The Action Scheduler group scheduled checks belong to.
         *
         * @var string
         */
        private const SCHEDULER_GROUP = 'gtmkit';
        /**
         * The stored result's schema version.
         *
         * @var int
         */
        public const SCHEMA_VERSION = 1;
        /**
         * The gateway service endpoint that answers a reachability probe.
         *
         * A fixed sentinel published by the service for this purpose. It carries
         * no identifier of this site, so the probe reports only whether outbound
         * HTTPS works, not that this site exists.
         *
         * @var string
         */
        private const SERVICE_ENDPOINT = 'https://g-1234.fps.goog/mpath/healthy';
        /**
         * The body a healthy endpoint returns.
         *
         * @var string
         */
        private const HEALTHY_BODY = 'ok';
        /**
         * How long a stored result stands before the enable gate re-runs it.
         *
         * @var int
         */
        private const MAX_AGE = 3600;
        /**
         * The option remembering that the fallback notice was dismissed.
         *
         * @var string
         */
        public const NOTICE_DISMISSED_OPTION = 'gtmkit_gtg_notice_dismissed';
        /**
         * The option remembering that the notice about a custom sGTM domain was dismissed.
         *
         * Kept apart from the fallback dismissal, so dismissing one notice never
         * silences the other.
         *
         * @var string
         */
        public const BLOCKED_NOTICE_DISMISSED_OPTION = 'gtmkit_gtg_blocked_notice_dismissed';
        /**
         * The fallback notice, for the dismissal methods.
         *
         * @var string
         */
        public const NOTICE_FALLBACK = 'fallback';
        /**
         * The notice about a custom sGTM domain, for the dismissal methods.
         *
         * @var string
         */
        public const NOTICE_BLOCKED = 'blocked';
        /**
         * An instance of Options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        private \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options)
        {
        }
        /**
         * Register the scheduling.
         *
         * The checks perform blocking HTTP requests, but only when their event
         * fires. No hook here performs a request on a page render.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         *
         * @return void
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options): void
        {
        }
        /**
         * Keep the daily check scheduled while the gateway is switched on.
         *
         * Runs on every admin page load, so it restores a schedule that has gone
         * missing. It does not tear one down when the gateway is off: switching
         * off clears the schedule, and a check that fires while the gateway is off
         * clears it too, so an admin page load never has to ask the scheduler.
         *
         * @return void
         */
        public function schedule_daily_event(): void
        {
        }
        /**
         * Schedule the daily check unless it already is.
         *
         * @return void
         */
        public static function schedule(): void
        {
        }
        /**
         * Cancel every scheduled check.
         *
         * Called on deactivation, so a deactivated plugin leaves no scheduled
         * request behind on either scheduler.
         *
         * @return void
         */
        public static function clear_scheduled_event(): void
        {
        }
        /**
         * Perform the scheduled check.
         *
         * A check that fires after the gateway was switched off, from a schedule
         * nothing cleared, clears the schedule instead of making requests for a
         * feature nobody is using.
         *
         * @return void
         */
        public function run_scheduled_check(): void
        {
        }
        /**
         * Run both checks and store the result.
         *
         * @param string|null $gtm_id The container to request, when the caller knows it better than the stored
         *                            settings do. A save that sets the ID and switches the gateway on together is
         *                            judged on the ID it sets; null reads the stored one.
         *
         * @return array<string, mixed> The stored result.
         */
        public static function run_checks(?string $gtm_id = null): array
        {
        }
        /**
         * Remember that a gateway notice was dismissed.
         *
         * @param string $notice One of the NOTICE_* constants.
         *
         * @return void
         */
        public static function dismiss_notice(string $notice = self::NOTICE_FALLBACK): void
        {
        }
        /**
         * Whether a gateway notice has been dismissed while its state lasts.
         *
         * @param string $notice One of the NOTICE_* constants.
         *
         * @return bool
         */
        public static function is_notice_dismissed(string $notice = self::NOTICE_FALLBACK): bool
        {
        }
        /**
         * Forget that a gateway notice was dismissed, so it is shown the next time its state returns.
         *
         * @param string $notice One of the NOTICE_* constants.
         *
         * @return void
         */
        public static function clear_notice_dismissal(string $notice): void
        {
        }
        /**
         * The option holding a notice's dismissal.
         *
         * @param string $notice One of the NOTICE_* constants.
         *
         * @return string
         */
        private static function dismissal_option(string $notice): string
        {
        }
        /**
         * The last stored result, if the checks have ever run.
         *
         * @return array<string, mixed>|null
         */
        public static function get_result(): ?array
        {
        }
        /**
         * Re-run the checks when no result stands or the last one has aged out.
         *
         * @param string|null $gtm_id The container to request if the checks run; null reads the stored one.
         *
         * @return array<string, mixed> The result now standing.
         */
        public static function ensure_fresh(?string $gtm_id = null): array
        {
        }
        /**
         * Whether both checks passed the last time they ran.
         *
         * A site whose checks have never run is not passing. The gateway is not
         * served on a maybe: until something has confirmed the proxy answers,
         * the standard loader is the safe answer.
         *
         * @return bool
         */
        public static function is_passing(): bool
        {
        }
        /**
         * The address the page's loader requests the container from.
         *
         * @param string $gtm_id The container ID.
         *
         * @return string
         */
        public static function tag_request_url(string $gtm_id): string
        {
        }
        /**
         * Whether a proxy response is the tag being served.
         *
         * A reply the proxy writes on its own, such as the plain `ok` of its
         * health endpoint, is not the tag and does not count.
         *
         * @param array<string, mixed> $response The response, as the proxy's transport returns it.
         *
         * @return bool
         */
        public static function response_serves_tag(array $response): bool
        {
        }
        /**
         * Whether the proxy serves the container to a request made the way the page makes it.
         *
         * The request is the one the page's loader makes, so it passes through
         * everything that stands between a visitor and the tag: the web server,
         * any firewall or security rule in front of the plugin directory, the
         * proxy itself and the gateway service behind it. A probe that stopped
         * short of that would pass on a site where the tag never loads.
         *
         * Without a container ID there is nothing to request, so only the proxy's
         * own reply is checked. The gateway serves nothing on such a site anyway.
         *
         * @param string|null $gtm_id The container to request; null reads the stored one.
         *
         * @return bool
         */
        private static function is_tag_served(?string $gtm_id): bool
        {
        }
        /**
         * Whether an endpoint answers the health probe with the healthy body.
         *
         * @param string $endpoint The endpoint to check.
         *
         * @return bool
         */
        private static function answers_ok(string $endpoint): bool
        {
        }
        /**
         * Request an endpoint through the proxy's own transport.
         *
         * @param string $endpoint The endpoint to request.
         *
         * @return array<string, mixed>|null The response, or null when the proxy file cannot be loaded.
         */
        private static function fetch(string $endpoint): ?array
        {
        }
    }
    /**
     * Class for REST API
     */
    final class RestAPIServer
    {
        /**
         * Route namespace.
         *
         * @var string
         */
        private string $route_namespace = 'gtmkit/v1';
        /**
         * Permission callback
         *
         * @return true|\WP_Error
         */
        public function permission_callback()
        {
        }
        /**
         * Register REST route
         *
         * @param string               $route The route.
         * @param array<string, mixed> $args The arguments.
         *
         * @return void
         */
        public function register_rest_route(string $route, array $args): void
        {
        }
        /**
         * Get the full URL of a route in the plugin's namespace.
         *
         * @param string $route The route, with its leading slash.
         *
         * @return string
         */
        public function get_route_url(string $route): string
        {
        }
    }
    /**
     * What kind of site WordPress reports this install to be.
     *
     * The single place GTM Kit asks WordPress about the site's environment
     * type, so the runtime gate, the settings readout, Site Health, the
     * scan and the admin notices can never reach different answers. Every
     * consumer goes through here rather than reading the
     * `WP_ENVIRONMENT_TYPE` constant, which misses WordPress's own
     * resolution: the environment variable of the same name, the rejection
     * of values outside the known set, and the fallback to production.
     *
     * Not to be confused with a Google Tag Manager environment, which is
     * the `gtm_auth`/`gtm_preview` pair on the container settings.
     */
    final class SiteEnvironment
    {
        /**
         * The environment type WordPress reports for a site that has not said otherwise.
         *
         * @var string
         */
        public const PRODUCTION = 'production';
        /**
         * Environment types on which container output is withheld by default.
         *
         * @var array<int, string>
         */
        public const NON_PRODUCTION_TYPES = ['staging', 'development', 'local'];
        /**
         * The environment type WordPress reports for this site.
         *
         * Always one of `production`, `staging`, `development` or `local`:
         * WordPress falls back to production for an undeclared site and for a
         * declared value it does not recognise.
         *
         * @return string
         */
        public static function get_type(): string
        {
        }
        /**
         * Whether WordPress reports this site as production.
         *
         * @return bool
         */
        public static function is_production(): bool
        {
        }
        /**
         * Whether the site itself declared its environment type.
         *
         * A site that says nothing is reported as production by WordPress, so
         * the two cases are worth telling apart: only a declared value is a
         * deliberate statement by the site, and only an undeclared site is
         * worth suggesting a declaration to.
         *
         * @return bool
         */
        public static function is_declared(): bool
        {
        }
        /**
         * Address fragments that commonly belong to a copy of a site rather than the real one.
         *
         * Matched against whole labels of the host, so `dev.example.com` and
         * `example-staging.com` match while `devon-bakery.com` does not. Kept
         * short and obvious on purpose: this list only ever produces a
         * suggestion, never a change in output, so breadth would cost more in
         * wrong guesses than it buys.
         *
         * @var array<int, string>
         */
        private const COPY_HOST_LABELS = ['staging', 'stage', 'dev', 'development', 'test', 'testing', 'qa', 'uat', 'preview', 'sandbox', 'local', 'localhost'];
        /**
         * Whether the site's own address reads like a copy rather than the real site.
         *
         * A guess, and treated as one: it is only ever used to suggest that the
         * site declare what it is, and never to change what GTM Kit outputs.
         *
         * @param string $url The address to inspect. Defaults to the site's home URL.
         *
         * @return bool
         */
        public static function url_looks_like_a_copy(string $url = ''): bool
        {
        }
        /**
         * Whether GTM Kit withholds container output because of what the site reports.
         *
         * True when WordPress reports anything other than production and the
         * site has not asked GTM Kit to load the container there anyway. A
         * non-production value is by definition a declaration by the site, so
         * acting on it is acting on what the site said about itself.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         *
         * @return bool
         */
        public static function suppresses_container(\TLA_Media\GTM_Kit\Options\Options $options): bool
        {
        }
    }
    /**
     * Server-side scan of a sample page for tracking implementations.
     *
     * One scheduled request per day fetches a sample page the way an anonymous
     * visitor would receive it, identifies every tracking implementation in the
     * response, and stores the finding. Every consumer, the notices and the Site
     * Health test alike, reads that stored finding: nothing performs the fetch
     * inline, and nothing runs on a visitor request.
     *
     * A server-side fetch sees the HTML the server sends. It cannot see a
     * container that a consent platform or another loader injects later in the
     * browser, so an absent container is reported as "not found in the response",
     * never as "not loading". That distinction is what the third result state,
     * `inconclusive`, and the deliberately narrow wording exist for.
     */
    final class SnippetScan
    {
        /**
         * The standalone option holding the last scan result.
         *
         * Stored outside the `gtmkit` options array, and never autoloaded: the
         * result is evidence about the site rather than configuration of it, and
         * only the admin surfaces that report it ever read it.
         *
         * @var string
         */
        public const OPTION = 'gtmkit_snippet_scan';
        /**
         * The scheduled event that performs the scan.
         *
         * @var string
         */
        public const SCAN_HOOK = 'gtmkit_snippet_scan';
        /**
         * The Action Scheduler group scheduled scans belong to.
         *
         * @var string
         */
        private const SCHEDULER_GROUP = 'gtmkit';
        /**
         * The shape of the stored result.
         *
         * A stored result carrying any other version is ignored, so a future
         * change to the shape never has to migrate old data.
         *
         * @var int
         */
        public const SCHEMA_VERSION = 1;
        /**
         * At least one tracking implementation was identified in the response.
         *
         * @var string
         */
        public const STATE_FOUND = 'found';
        /**
         * The fetch succeeded, the response looked like a complete page, and no
         * implementation was identified.
         *
         * @var string
         */
        public const STATE_NOT_FOUND = 'not_found';
        /**
         * Nothing can be concluded from this scan. See the `reason` field.
         *
         * @var string
         */
        public const STATE_INCONCLUSIVE = 'inconclusive';
        /**
         * The request to the site's own URL did not complete.
         *
         * @var string
         */
        public const REASON_LOOPBACK_BLOCKED = 'loopback_blocked';
        /**
         * The request failed for a reason other than a blocked loopback.
         *
         * @var string
         */
        public const REASON_REQUEST_FAILED = 'request_failed';
        /**
         * The response carried a status outside the 2xx range.
         *
         * @var string
         */
        public const REASON_HTTP_STATUS = 'http_status';
        /**
         * The response body was empty.
         *
         * @var string
         */
        public const REASON_EMPTY_RESPONSE = 'empty_response';
        /**
         * The response was not HTML.
         *
         * @var string
         */
        public const REASON_NOT_HTML = 'not_html';
        /**
         * The response looked like a truncated document.
         *
         * @var string
         */
        public const REASON_INCOMPLETE_RESPONSE = 'incomplete_response';
        /**
         * The scan URL matches an active exclusion pattern, so GTM Kit outputs
         * nothing there by design.
         *
         * @var string
         */
        public const REASON_URL_EXCLUDED = 'url_excluded';
        /**
         * More than one distinct container is present.
         *
         * @var string
         */
        public const DUPLICATE_CONTAINERS = 'multiple_containers';
        /**
         * The same container is loaded by more than one script.
         *
         * @var string
         */
        public const DUPLICATE_REPEATED = 'repeated_container';
        /**
         * A Google tag is loaded directly alongside the container.
         *
         * @var string
         */
        public const DUPLICATE_GTAG = 'gtag_alongside_gtm';
        /**
         * Markers left in the page by tools that add tracking code but are not
         * plugins GTM Kit already checks for by name.
         *
         * Used only to name a culprit once a duplicate has been established, and
         * only after the active-plugin check has come up empty: a plugin that is
         * demonstrably active beats a string in the HTML every time.
         *
         * @var array<int, array<string, string>>
         */
        private const SIGNATURES = [['pattern' => '~Google Tag Manager for WordPress by gtm4wp~i', 'name' => 'Google Tag Manager for WordPress'], ['pattern' => '~(?:added|snippet) by Site Kit|google-site-kit~i', 'name' => 'Site Kit by Google'], ['pattern' => '~MonsterInsights~i', 'name' => 'MonsterInsights'], ['pattern' => '~ExactMetrics~i', 'name' => 'ExactMetrics'], ['pattern' => '~snippet added by WPCode|wpcode-~i', 'name' => 'WPCode'], ['pattern' => '~Header Footer Code Manager|\bhfcm[-_]~i', 'name' => 'Header Footer Code Manager']];
        /**
         * Plugins that load a Google tag of their own, keyed by plugin file.
         *
         * These are not Tag Manager conflicts, so they stay out of the conflicting
         * plugins list. They are consulted only to name the source of a Google tag
         * found beside the container, where the tag may be injected inline without
         * leaving the plugin's name anywhere in the page.
         *
         * Being active is not enough: a plugin can be active without outputting
         * its tag, for example before it is connected to an account. Each entry
         * therefore also carries a marker its own tag output always contains, and
         * the plugin is named only when both hold.
         *
         * @var array<string, array<string, string>>
         */
        private const GTAG_SOURCES = ['google-listings-and-ads/google-listings-and-ads.php' => ['pattern' => '~["\']groups["\']\s*:\s*["\']GLA["\']~', 'name' => 'Google for WooCommerce']];
        /**
         * Seconds to wait for the sample page.
         *
         * @var int
         */
        private const REQUEST_TIMEOUT = 10;
        /**
         * The query argument carrying a manual rescan request.
         *
         * @var string
         */
        private const RESCAN_ARG = 'gtmkit-snippet-rescan';
        /**
         * The nonce action guarding a manual rescan.
         *
         * @var string
         */
        private const RESCAN_NONCE = 'gtmkit-snippet-rescan';
        /**
         * An instance of Options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        private \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options)
        {
        }
        /**
         * Register the scan engine.
         *
         * The scan performs a blocking HTTP request, so it is attached in the
         * admin and on cron requests only. A visitor request never reaches it:
         * there is no hook here that a page render fires.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         *
         * @return void
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options): void
        {
        }
        /**
         * Schedule the daily scan.
         *
         * Action Scheduler when the site has it, WP-Cron otherwise, matching how
         * the plugin schedules its other daily work.
         *
         * @return void
         */
        public function schedule_daily_event(): void
        {
        }
        /**
         * Cancel every scheduled scan.
         *
         * Called on deactivation, so a deactivated plugin leaves no scheduled
         * request behind on either scheduler.
         *
         * @return void
         */
        public static function clear_scheduled_event(): void
        {
        }
        /**
         * Perform the scheduled scan.
         *
         * @return void
         */
        public function run_scheduled_scan(): void
        {
        }
        /**
         * Perform a scan and store its result.
         *
         * @return array<string, mixed> The stored result.
         */
        public function run_scan(): array
        {
        }
        /**
         * Resolve the URL the scan requests.
         *
         * @return string
         */
        public function get_scan_url(): string
        {
        }
        /**
         * Fetch the sample page and interpret the response.
         *
         * @param string $url The URL to scan.
         *
         * @return array<string, mixed> The result.
         */
        private function scan(string $url): array
        {
        }
        /**
         * Whether the scan URL is one GTM Kit deliberately outputs nothing on.
         *
         * Scanning an excluded URL would find no container and prove nothing, so
         * the result is inconclusive rather than a finding.
         *
         * @param string $url The URL to scan.
         *
         * @return bool
         */
        private function is_excluded(string $url): bool
        {
        }
        /**
         * Map a transport error to a result reason.
         *
         * A request to the site's own URL that never completes is, in practice,
         * a site whose server cannot reach itself: loopback requests are blocked
         * by a firewall, a hosting rule or a DNS split. Anything else is reported
         * as a plain request failure so the wording never overstates the cause.
         *
         * @param \WP_Error $error The transport error.
         *
         * @return string
         */
        private function reason_for_error(\WP_Error $error): string
        {
        }
        /**
         * Resolve the URL the response was finally served from.
         *
         * @param array<string, mixed> $response The response.
         * @param string               $fallback The requested URL.
         *
         * @return string
         */
        private function get_final_url(array $response, string $fallback): string
        {
        }
        /**
         * Whether the response is HTML.
         *
         * @param string $body The response body.
         * @param string $content_type The response content type header.
         *
         * @return bool
         */
        private function looks_like_html(string $body, string $content_type): bool
        {
        }
        /**
         * Whether the response looks like a whole document rather than a truncated one.
         *
         * @param string $body The response body.
         *
         * @return bool
         */
        private function looks_complete(string $body): bool
        {
        }
        /**
         * Describe GTM Kit's own output, so implementations can be told apart.
         *
         * @return array<string, string> Keys: `container`, `domain`, `loader`.
         */
        public function get_own_output_fingerprint(): array
        {
        }
        /**
         * Assemble a result.
         *
         * @param string                           $url The URL that was scanned.
         * @param string                           $state One of the STATE_* constants.
         * @param string                           $reason One of the REASON_* constants, or an empty string.
         * @param int                              $status The HTTP status code, or 0.
         * @param string                           $final_url The URL after redirects.
         * @param array<int, array<string, mixed>> $implementations The identified implementations.
         * @param array<string, mixed>|null        $duplicate The duplicate finding, or null for none.
         *
         * @return array<string, mixed>
         */
        private function build_result(string $url, string $state, string $reason, int $status = 0, string $final_url = '', array $implementations = [], ?array $duplicate = null): array
        {
        }
        /**
         * The duplicate finding of a page that loads tracking at most once.
         *
         * @return array<string, mixed>
         */
        private static function no_duplicate(): array
        {
        }
        /**
         * Decide whether the page loads tracking more than once, and how.
         *
         * The three cases are kept apart because the fix differs for each: a
         * second container is somebody else's measurement running alongside
         * yours, the same container twice is one measurement counted twice, and a
         * Google tag beside a container is a tag that may also be firing from
         * inside it.
         *
         * Only script elements and inline bootstraps count as loads. The noscript
         * iframe is the fallback of an implementation that is already counted,
         * and a bare container ID is not loaded by anything.
         *
         * @param array<int, array<string, mixed>> $implementations The identified implementations.
         * @param string                           $body The response body, for naming a culprit.
         *
         * @return array<string, mixed>
         */
        private function analyse_duplicates(array $implementations, string $body): array
        {
        }
        /**
         * Name what is adding the second implementation, if it can be named.
         *
         * Active plugins come first: a plugin that is demonstrably running is a
         * stronger answer than a string that happens to appear in the HTML. For a
         * Google tag beside the container, plugins known to load a Google tag of
         * their own are checked next, and named only when their own tag is in the
         * page; they never add a container, so they cannot explain the other two
         * findings. The shipped signature list then covers
         * the tools that add tracking code without being plugins GTM Kit tracks by
         * name, above all theme hardcodes and code-snippet plugins. When nothing
         * answers, the finding is reported without a name rather than with a guess.
         *
         * @param string $body The response body.
         * @param string $type The duplicate finding, one of the DUPLICATE_* constants.
         *
         * @return string The name, or an empty string.
         */
        private function identify_culprit(string $body, string $type): string
        {
        }
        /**
         * Whether GTM Kit intends to output the container.
         *
         * A site that reports itself as somewhere the container does not belong
         * is answered first: GTM Kit intends no container there, so a page
         * without one is the intended result rather than evidence that something
         * stripped it out.
         *
         * @return bool
         */
        private function container_output_is_on(): bool
        {
        }
        /**
         * Get the stored result of the last scan.
         *
         * @return array<string, mixed>|null The result, or null when no usable result is stored.
         */
        public function get_result(): ?array
        {
        }
        /**
         * Whether the scanned page carried a tracking implementation.
         *
         * Three-valued on purpose. `null` means the question is open: no scan has
         * run, or the last one could not answer it. A caller that treats `null`
         * as `false` turns "we do not know" into "your site is not measured",
         * which is the one mistake this whole engine exists to avoid.
         *
         * @return bool|null True or false when the last scan settled it, null otherwise.
         */
        public function has_container(): ?bool
        {
        }
        /**
         * Whether the scanned page loaded tracking more than once.
         *
         * Three-valued for the same reason as {@see self::has_container()}: a
         * scan that found nothing, or could not be completed, has not established
         * that the page is free of duplicates.
         *
         * @return bool|null True or false when the last scan settled it, null otherwise.
         */
        public function has_duplicate_tracking(): ?bool
        {
        }
        /**
         * Handle a manual rescan requested from an admin screen.
         *
         * @return void
         */
        public function handle_rescan_request(): void
        {
        }
        /**
         * Build the URL that triggers a manual rescan of the current screen.
         *
         * @return string
         */
        public function get_rescan_url(): string
        {
        }
    }
    /**
     * Identifies tracking implementations in a page's HTML.
     *
     * A pure parser: it is handed a response body and a description of what GTM
     * Kit itself would have written, and it returns one entry per implementation
     * it can identify. It makes no decisions about what the finding means; that
     * belongs to {@see SnippetScan} and the surfaces that report it.
     *
     * Matching is deliberately host-agnostic. A server-side container moves the
     * loader to the site's own domain under a name the site owner chooses, so a
     * detector anchored to `googletagmanager.com` would miss precisely the setups
     * that are hardest to debug by hand. Where a loader carries no container ID at
     * all, the inline bootstrap that pushes `gtm.start` and creates the script
     * element is the signal, and the loader URL is corroboration.
     */
    final class SnippetScanDetector
    {
        /**
         * A Google Tag Manager container.
         *
         * @var string
         */
        public const TYPE_GTM = 'gtm';
        /**
         * A gtag.js implementation, i.e. a Google tag loaded directly.
         *
         * @var string
         */
        public const TYPE_GTAG = 'gtag';
        /**
         * Identified from a script element with a `src`.
         *
         * @var string
         */
        public const SOURCE_SCRIPT = 'script';
        /**
         * Identified from an inline bootstrap script.
         *
         * @var string
         */
        public const SOURCE_INLINE = 'inline';
        /**
         * Identified from the noscript iframe. Never a second load: it is the
         * fallback of an implementation, not an implementation of its own.
         *
         * @var string
         */
        public const SOURCE_NOSCRIPT = 'noscript';
        /**
         * A bare container ID somewhere in the document, with nothing loading it.
         *
         * @var string
         */
        public const SOURCE_LITERAL = 'literal';
        /**
         * The implementation carries GTM Kit's own container or loader.
         *
         * @var string
         */
        public const OWNER_GTMKIT = 'gtmkit';
        /**
         * The implementation is something other than GTM Kit's own output.
         *
         * @var string
         */
        public const OWNER_FOREIGN = 'foreign';
        /**
         * The implementation carries nothing that identifies it either way.
         *
         * @var string
         */
        public const OWNER_UNKNOWN = 'unknown';
        /**
         * Identify every tracking implementation in a page's HTML.
         *
         * @param string                $html The response body.
         * @param array<string, string> $own Description of GTM Kit's own output: `container`, `domain`, `loader`.
         *
         * @return array<int, array<string, mixed>> One entry per identified implementation.
         */
        public static function detect(string $html, array $own = []): array
        {
        }
        /**
         * Whether an implementation counts as a separate load of tracking.
         *
         * The noscript iframe belongs to an implementation that is already
         * counted, and a bare container ID is not loaded by anything, so neither
         * can make a page load tracking twice.
         *
         * @param array<string, mixed> $implementation An entry from {@see self::detect()}.
         *
         * @return bool
         */
        public static function counts_as_load(array $implementation): bool
        {
        }
        /**
         * Identify loader scripts, on any host.
         *
         * @param string                $html The response body.
         * @param array<string, string> $own Description of GTM Kit's own output.
         *
         * @return array<int, array<string, mixed>>
         */
        private static function detect_loader_scripts(string $html, array $own): array
        {
        }
        /**
         * Decide whether a script URL is a tracking loader, and of which kind.
         *
         * @param string                $src The script URL.
         * @param array<string, string> $own Description of GTM Kit's own output.
         *
         * @return string One of the TYPE_* constants, or an empty string.
         */
        private static function loader_type(string $src, array $own): string
        {
        }
        /**
         * Whether a script URL is this site's configured server-side loader.
         *
         * @param string                $src The script URL.
         * @param array<string, string> $own Description of GTM Kit's own output.
         *
         * @return bool
         */
        private static function is_own_sgtm_loader(string $src, array $own): bool
        {
        }
        /**
         * Identify inline bootstrap scripts.
         *
         * The bootstrap is the primary presence signal: whatever the loader is
         * called and wherever it is served from, something in the page has to
         * push `gtm.start` and create the script element.
         *
         * @param string $html The response body.
         *
         * @return array<int, array<string, mixed>>
         */
        private static function detect_inline_bootstraps(string $html): array
        {
        }
        /**
         * Whether an inline script is a container bootstrap.
         *
         * @param string $code The script contents.
         *
         * @return bool
         */
        private static function is_bootstrap(string $code): bool
        {
        }
        /**
         * Identify noscript fallback iframes.
         *
         * @param string $html The response body.
         *
         * @return array<int, array<string, mixed>>
         */
        private static function detect_noscript_frames(string $html): array
        {
        }
        /**
         * Identify container IDs that appear in the document with nothing loading them.
         *
         * Recorded as a weak signal: a container ID in the page is evidence that
         * something intends to load tracking, but not evidence that anything does.
         *
         * @param string                           $html The response body.
         * @param array<int, array<string, mixed>> $identified Implementations identified so far.
         *
         * @return array<int, array<string, mixed>>
         */
        private static function detect_bare_containers(string $html, array $identified): array
        {
        }
        /**
         * Decide whether an implementation is GTM Kit's own tracking or something else.
         *
         * The question answered here is whose tracking this is, not which piece
         * of code printed it: an implementation carrying this site's container or
         * its configured server-side loader is GTM Kit's, however it reached the
         * page.
         *
         * @param array<string, mixed>  $implementation An identified implementation.
         * @param array<string, string> $own Description of GTM Kit's own output.
         *
         * @return string One of the OWNER_* constants.
         */
        private static function classify_owner(array $implementation, array $own): string
        {
        }
        /**
         * Extract the container or measurement ID a loader URL carries.
         *
         * @param string $url The script or iframe URL.
         *
         * @return string The ID, or an empty string.
         */
        private static function container_from_url(string $url): string
        {
        }
        /**
         * Extract the container ID an inline bootstrap carries.
         *
         * @param string $code The script contents.
         *
         * @return string The container ID, or an empty string.
         */
        private static function container_from_text(string $code): string
        {
        }
        /**
         * Extract the host an inline bootstrap loads its script from.
         *
         * @param string $code The script contents.
         *
         * @return string The host, or an empty string.
         */
        private static function host_from_text(string $code): string
        {
        }
        /**
         * Extract the host of a URL.
         *
         * @param string $url The URL.
         *
         * @return string The host, or an empty string.
         */
        private static function host_from_url(string $url): string
        {
        }
    }
    /**
     * The loader Stape issues for a server-side container.
     *
     * Stape answers a request for a container's loader with a ready-made snippet.
     * GTM Kit never prints that snippet. It keeps only the three values that make
     * up the loader address, each checked against a strict pattern, and builds its
     * own snippet around them. Everything GTM Kit's snippet does therefore still
     * applies, and a bad response has no way to put script on the page.
     *
     * A stored loader belongs to the settings it was issued for. The frontend uses
     * it only while those settings are unchanged and falls back to the standard
     * loader otherwise, so an import, a constant or a restored backup stays correct
     * without anyone asking Stape again.
     */
    final class StapeLoader
    {
        /**
         * The option holding the stored loader.
         *
         * Kept apart from the settings array so that nothing a user submits, imports
         * or syncs can write it.
         *
         * @var string
         */
        const OPTION = 'gtmkit_sgtm_loader';
        /**
         * The transient that spaces out manual refreshes.
         *
         * @var string
         */
        const THROTTLE_TRANSIENT = 'gtmkit_sgtm_loader_refresh';
        /**
         * Seconds between two manual refreshes.
         *
         * @var int
         */
        const THROTTLE_SECONDS = 60;
        /**
         * A loader fetched from Stape.
         *
         * @var string
         */
        const SOURCE_API = 'api';
        /**
         * A loader pasted by the site owner.
         *
         * @var string
         */
        const SOURCE_PASTED = 'pasted';
        /**
         * The loader file name, without `.js`.
         *
         * @var string
         */
        const PATH_PATTERN = '[a-z0-9]{1,64}';
        /**
         * The name of the loader's query parameter.
         *
         * @var string
         */
        const PARAM_PATTERN = '[A-Za-z0-9_]{1,32}';
        /**
         * The value of the loader's query parameter: URL-encoded base64.
         *
         * @var string
         */
        const VALUE_PATTERN = '(?:[A-Za-z0-9]|%[0-9A-Fa-f]{2}){1,512}';
        /**
         * The longest snippet the parser reads. Stape's are under 2 KB.
         *
         * @var int
         */
        const MAX_CODE_LENGTH = 20000;
        /**
         * Plugin options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        private \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options)
        {
        }
        /**
         * Read the loader address out of a snippet issued by Stape.
         *
         * Stape writes the address in one of two shapes: in full, as
         * `https://{domain}/{path}.js?` with the query pair passed separately, or,
         * with Cookie Keeper, as an origin, a path and a query pair in three
         * adjacent string literals. Anything that does not yield exactly one path
         * and one query pair on the configured domain is refused.
         *
         * @param string $code   The snippet.
         * @param string $domain The configured server-side container domain.
         *
         * @return array{path: string, param: string, value: string}|null Null when the snippet cannot be trusted.
         */
        public static function parse(string $code, string $domain): ?array
        {
        }
        /**
         * Read the data layer name a snippet issued by Stape was made for.
         *
         * Stape writes the name as the string literal right after the `script`
         * literal: as the next argument without Cookie Keeper, and as the next
         * variable in the declaration list with it. Stape also encodes the name
         * into the loader's query value, so a loader only works with the name it
         * was issued for.
         *
         * @param string $code The snippet.
         *
         * @return string|null Null unless the snippet names exactly one valid data layer.
         */
        public static function read_datalayer_name(string $code): ?string
        {
        }
        /**
         * Whether the site owner has asked for the loader Stape issues.
         *
         * @return bool
         */
        public function is_switched_on(): bool
        {
        }
        /**
         * Whether switched on and every setting Stape needs is filled in.
         *
         * @return bool
         */
        public function is_enabled(): bool
        {
        }
        /**
         * The settings a loader is issued for.
         *
         * @return array{identifier: string, gtm_id: string, domain: string, cookie_keeper: bool, datalayer_name: string}
         */
        public function get_inputs(): array
        {
        }
        /**
         * A fingerprint of the settings a loader is issued for.
         *
         * @return string
         */
        public function fingerprint(): string
        {
        }
        /**
         * The stored loader, if it is well formed.
         *
         * The values are checked again on the way out, so a loader written to the
         * database by anything other than this class is never printed. A loader
         * without the `datalayer_checked` flag was stored without being checked
         * against the data layer name, and may listen to a data layer GTM Kit never
         * pushes to, so it is treated as absent.
         *
         * @return array{path: string, param: string, value: string, inputs: string, source: string, region: string, fetched_at: int}|null
         */
        public function get_stored(): ?array
        {
        }
        /**
         * Whether a stored option value was checked against the data layer name before it was stored.
         *
         * @param mixed $stored The stored option value.
         *
         * @return bool
         * @phpstan-assert-if-true array<string, mixed> $stored
         */
        public static function is_checked($stored): bool
        {
        }
        /**
         * The stored loader, when it belongs to the current settings.
         *
         * @return array{path: string, param: string, value: string, inputs: string, source: string, region: string, fetched_at: int}|null
         */
        public function get_active(): ?array
        {
        }
        /**
         * Store a loader for the current settings.
         *
         * Every caller has checked the loader against the data layer name first,
         * which the stored entry records.
         *
         * @param array{path: string, param: string, value: string} $loader The parsed loader.
         * @param string                                            $source One of the SOURCE_* constants.
         * @param string                                            $region The Stape region that issued it, or an empty string.
         *
         * @return void
         */
        public function store(array $loader, string $source, string $region): void
        {
        }
        /**
         * Forget the stored loader.
         *
         * @return void
         */
        public function delete(): void
        {
        }
        /**
         * The settings a save must change before Stape is asked again.
         *
         * Read before the save and handed to sync_after_save(). Empty while the
         * loader is off or incomplete, so the save that switches it on always asks.
         *
         * @return string
         */
        public function get_save_baseline(): string
        {
        }
        /**
         * Bring the stored loader in line with settings that were just saved.
         *
         * Asks Stape only when the save switched the loader on or changed the
         * settings it is issued for. A save that left them alone never asks, even
         * when nothing is stored because the last request failed: every save would
         * otherwise wait on Stape again. Refresh is how the site owner retries. A
         * loader that no longer matches is removed whether or not a new one
         * arrives, because it belongs to the old settings.
         *
         * @param StapeLoaderClient $client   The Stape API client.
         * @param string            $baseline What get_save_baseline() returned before the save.
         *
         * @return array{status: string, reason: string}
         */
        public function sync_after_save(\TLA_Media\GTM_Kit\Common\StapeLoaderClient $client, string $baseline): array
        {
        }
        /**
         * Ask Stape for the loader again, on the site owner's request.
         *
         * A failure keeps the stored loader, which still belongs to the current
         * settings when there is one.
         *
         * @param StapeLoaderClient $client The Stape API client.
         *
         * @return array{status: string, reason: string}
         */
        public function refresh(\TLA_Media\GTM_Kit\Common\StapeLoaderClient $client): array
        {
        }
        /**
         * Store a loader from the snippet the site owner copied out of Stape.
         *
         * @param string $code The pasted snippet.
         *
         * @return array{status: string, reason: string}
         */
        public function paste(string $code): array
        {
        }
        /**
         * What the settings screen shows about the loader in use.
         *
         * @return array{source: string, region: string, fetchedAt: int}
         */
        public function get_client_state(): array
        {
        }
        /**
         * Fetch and store a loader.
         *
         * @param StapeLoaderClient $client            The Stape API client.
         * @param bool              $delete_on_failure Whether a failure removes the stored loader.
         *
         * @return array{status: string, reason: string}
         */
        private function fetch(\TLA_Media\GTM_Kit\Common\StapeLoaderClient $client, bool $delete_on_failure): array
        {
        }
        /**
         * Assemble an outcome.
         *
         * @param string $status What happened.
         * @param string $reason Why a request failed, or an empty string.
         *
         * @return array{status: string, reason: string}
         */
        private static function outcome(string $status, string $reason = ''): array
        {
        }
    }
    /**
     * Ask Stape's API for the loader it issues for a server-side container.
     *
     * Called only when an administrator saves settings or asks for a refresh, never
     * on a schedule or on a page view.
     */
    final class StapeLoaderClient
    {
        /**
         * The endpoint of the global region.
         *
         * @var string
         */
        const ENDPOINT_GLOBAL = 'https://api.app.stape.io/api/v2/container/%s/custom-loader';
        /**
         * The endpoint of the EU region, asked when the global region does not know the container.
         *
         * @var string
         */
        const ENDPOINT_EU = 'https://api.app.eu.stape.io/api/v2/container/%s/custom-loader';
        /**
         * Seconds to wait for each request.
         *
         * Stape's own plugin waits 20 seconds, but it asks from a shutdown hook
         * where nobody is waiting. Here an administrator is watching a save, and an
         * unanswered request only leaves the standard loader in place, so a shorter
         * wait is the better trade.
         *
         * @var int
         */
        const TIMEOUT = 10;
        /**
         * The request did not complete.
         *
         * @var string
         */
        const REASON_NETWORK = 'network';
        /**
         * The response was not JSON.
         *
         * @var string
         */
        const REASON_INVALID_JSON = 'invalid_json';
        /**
         * The response carried no loader.
         *
         * @var string
         */
        const REASON_NO_LOADER = 'no_loader';
        /**
         * The loader could not be read safely.
         *
         * @var string
         */
        const REASON_UNPARSEABLE = 'unparseable';
        /**
         * The loader was issued for a data layer name GTM Kit does not use.
         *
         * @var string
         */
        const REASON_DATALAYER_MISMATCH = 'datalayer_mismatch';
        /**
         * Plugin options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        private \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options)
        {
        }
        /**
         * The request body Stape expects.
         *
         * The container ID goes as stored, with its `GTM-` prefix, which Stape
         * requires. The configured data layer name goes too, because Stape encodes
         * it into the loader address.
         *
         * @param array{identifier: string, gtm_id: string, domain: string, cookie_keeper: bool, datalayer_name: string} $inputs The settings the loader is issued for.
         *
         * @return array<string, string>
         */
        public static function request_body(array $inputs): array
        {
        }
        /**
         * Fetch and parse the loader.
         *
         * @param array{identifier: string, gtm_id: string, domain: string, cookie_keeper: bool, datalayer_name: string} $inputs The settings the loader is issued for.
         *
         * @return array{loader: array{path: string, param: string, value: string}|null, reason: string, region: string}
         */
        public function fetch(array $inputs): array
        {
        }
        /**
         * Send one request.
         *
         * @param string $url  The endpoint.
         * @param string $body The JSON request body.
         *
         * @return array<string, mixed>|\WP_Error
         */
        private function post(string $url, string $body)
        {
        }
        /**
         * Report a failed fetch.
         *
         * @param string $reason Why it failed.
         * @param int    $status The HTTP status, or 0.
         * @param string $region The region asked last.
         *
         * @return array{loader: null, reason: string, region: string}
         */
        private function failure(string $reason, int $status, string $region): array
        {
        }
        /**
         * Record the outcome in the debug log, when it is switched on.
         *
         * Only the status and the reason are written. Neither body is, since the
         * request carries the container ID and the response carries the loader.
         *
         * @param int    $status The HTTP status, or 0.
         * @param string $reason The outcome.
         * @param string $region The region asked last.
         *
         * @return void
         */
        private function log(int $status, string $reason, string $region): void
        {
        }
    }
    /**
     * Live support system-data sync.
     *
     * While a customer has shared system data with the support team, this class
     * keeps that data current: every completed settings save schedules a single
     * coalesced push of the same payload the manual share sends. The sync is
     * strictly session-scoped and fail-closed: it only ever runs against a
     * ticket the customer shared, it re-confirms the ticket is still open
     * before transmitting, it stops on any error, and it stops unconditionally
     * a fixed number of days after the first share. The customer can see the
     * active sync on the Support page and stop it with one click.
     */
    final class SupportSync
    {
        /**
         * The standalone option holding the sync session marker.
         *
         * Deliberately stored outside the `gtmkit` options array so the marker
         * never appears in shared snapshots and never re-triggers the option
         * update hook that schedules pushes.
         *
         * @var string
         */
        public const OPTION = 'gtmkit_support_sync';
        /**
         * The single-event cron hook that performs a coalesced push.
         *
         * @var string
         */
        public const PUSH_HOOK = 'gtmkit_support_sync_push';
        /**
         * Source label for pushes triggered by the customer on the Support page.
         *
         * @var string
         */
        public const SOURCE_MANUAL = 'manual';
        /**
         * Source label for automatic pushes triggered by settings saves.
         *
         * @var string
         */
        public const SOURCE_AUTO = 'auto';
        /**
         * Source label for the copy the customer copies or downloads from the Support page.
         *
         * @var string
         */
        public const SOURCE_EXPORT = 'export';
        /**
         * Seconds to wait before pushing, so bursts of saves coalesce into one push.
         *
         * @var int
         */
        private const COALESCE_DELAY = 60;
        /**
         * Hard stop: seconds after the first share when the sync ends unconditionally (7 days).
         *
         * @var int
         */
        private const SESSION_CAP = 604800;
        /**
         * Seconds a confirmed-open status check stays valid before the next push re-checks (15 minutes).
         *
         * @var int
         */
        private const STATUS_CHECK_INTERVAL = 900;
        /**
         * Base URL of the support endpoint that receives system data.
         *
         * @var string
         */
        private const ENDPOINT_BASE = 'https://support.gtmkit.com/api/wporg/support/';
        /**
         * Timeout in seconds for the status check and push requests.
         *
         * @var int
         */
        private const REQUEST_TIMEOUT = 10;
        /**
         * An instance of Options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        private \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * An instance of Util.
         *
         * @var Util
         */
        private \TLA_Media\GTM_Kit\Common\Util $util;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         * @param Util    $util An instance of Util.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util)
        {
        }
        /**
         * Register the push-engine hooks.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         * @param Util    $util An instance of Util.
         *
         * @return void
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util): void
        {
        }
        /**
         * Get the support endpoint URL for a ticket.
         *
         * @param string $ticket The support ticket reference.
         * @param string $suffix Optional path suffix, e.g. '/status'.
         *
         * @return string
         */
        public static function get_endpoint(string $ticket, string $suffix = ''): string
        {
        }
        /**
         * Get the sync configuration.
         *
         * @return array<string, int> Keys: coalesce_delay, session_cap, status_check_interval (all seconds).
         */
        public function get_config(): array
        {
        }
        /**
         * Get the active sync session marker.
         *
         * @return array{ticket: string, first_shared_at: int, last_push_at: int, last_status_check_at: int}|null The marker, or null when no valid marker is stored.
         */
        public function get_marker(): ?array
        {
        }
        /**
         * Start a sync session for a ticket.
         *
         * Called after a successful manual share, which doubles as the open
         * confirmation: the endpoint only accepts data for open tickets. A new
         * share overwrites any previous session (latest ticket wins).
         *
         * @param string $ticket The support ticket reference.
         *
         * @return void
         */
        public function activate(string $ticket): void
        {
        }
        /**
         * End the sync session and unschedule any pending push.
         *
         * @return void
         */
        public function clear_marker(): void
        {
        }
        /**
         * End the sync session only when it belongs to the given ticket.
         *
         * Used when a share attempt learns that a specific ticket is closed; a
         * session for a different ticket is left untouched.
         *
         * @param string $ticket The support ticket reference.
         *
         * @return void
         */
        public function clear_marker_for_ticket(string $ticket): void
        {
        }
        /**
         * Schedule a coalesced push after a completed settings save.
         *
         * No-op without an active session or when a push is already scheduled,
         * so any burst of saves results in exactly one push.
         *
         * @return void
         */
        public function schedule_push(): void
        {
        }
        /**
         * Perform the scheduled push, fail-closed at every step.
         *
         * The session ends (and nothing is transmitted) unless the marker is
         * valid and within the session cap, and the ticket is confirmed open.
         * Any error response ends the session; the customer can always start a
         * new one by sharing again.
         *
         * @return void
         */
        public function run_push(): void
        {
        }
        /**
         * Build the request body shared by the manual share and the automatic push.
         *
         * Both paths transmit the identical system-data payload; only the source
         * label differs.
         *
         * @param string $source One of the SOURCE_* constants.
         *
         * @return array<string, mixed>
         */
        public function build_request_body(string $source): array
        {
        }
        /**
         * Get the system data as a file the customer can hand to support themselves.
         *
         * The manual route for when sharing fails: the settings app receives
         * this with the page, so it needs no request of its own. The JSON is the
         * exact request body a share sends, with the export source label.
         *
         * @return array{json: string, filename: string}
         */
        public function get_export(): array
        {
        }
        /**
         * Get the sync state exposed to the settings app.
         *
         * @return array<string, mixed> `active` (bool), plus `ticket` and the
         *                              localized `until` end date while a session
         *                              is running.
         */
        public function get_client_state(): array
        {
        }
        /**
         * Whether a marker is past the unconditional session cap.
         *
         * @param array{ticket: string, first_shared_at: int, last_push_at: int, last_status_check_at: int} $marker The marker.
         *
         * @return bool
         */
        private function is_expired(array $marker): bool
        {
        }
        /**
         * Confirm with the support endpoint that a ticket is still open.
         *
         * Anything other than an explicit `open` confirmation (closed, an
         * unexpected status code, a transport error) reports the ticket as not
         * open, so data is never transmitted on uncertainty.
         *
         * @param string $ticket The support ticket reference.
         *
         * @return bool
         */
        private function ticket_is_open(string $ticket): bool
        {
        }
        /**
         * Persist the session marker without autoloading it on every request.
         *
         * @param array{ticket: string, first_shared_at: int, last_push_at: int, last_status_check_at: int} $marker The marker.
         *
         * @return void
         */
        private function save_marker(array $marker): void
        {
        }
    }
    /**
     * Class for common utilities.
     */
    final class Util
    {
        /**
         * Instance of Options
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        public \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Instance of RestAPIServer
         *
         * @var RestAPIServer
         */
        public \TLA_Media\GTM_Kit\Common\RestAPIServer $rest_api_server;
        /**
         * Asset path
         *
         * @var string
         */
        public string $asset_path;
        /**
         * Asset URL
         *
         * @var string
         */
        public string $asset_url;
        /**
         * API namespace.
         *
         * @var string
         */
        private string $api_namespace = '/api/v1';
        /**
         * API host.
         *
         * @var string
         */
        private string $api_host;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options       $options Instance of Options.
         * @param RestAPIServer $rest_api_server Instance of RestAPIServer.
         * @param string        $path The plugin path.
         * @param string        $url The plugin URL.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\RestAPIServer $rest_api_server, string $path = '', string $url = '')
        {
        }
        /**
         * Get the site data
         *
         * @param array<string, mixed> $options The options.
         * @param bool                 $anonymize Anonymize the data.
         *
         * @return array<string, mixed>
         */
        public function get_site_data(array $options, bool $anonymize = true): array
        {
        }
        /**
         * Set the site data
         *
         * @param array<string, mixed> $data Current data.
         * @param array<string, mixed> $options The options.
         * @param string               $wp_version The WordPress version.
         * @param bool                 $anonymize Anonymize the data.
         *
         * @return array<string, mixed>
         */
        private function set_site_data(array $data, array $options, string $wp_version, bool $anonymize): array
        {
        }
        /**
         * Add shared data
         *
         * @param array<string, mixed> $data Current data.
         * @param string               $wp_version The WordPress version.
         *
         * @return array<string, mixed>
         */
        private function add_shared_data(array $data, string $wp_version): array
        {
        }
        /**
         * Gets names of all active plugins.
         *
         * @return array<int, string> An array of active plugins names.
         */
        public function get_active_plugins(): array
        {
        }
        /**
         * Add plugin to array if active.
         *
         * @param string               $plugin The plugin slug.
         * @param string               $key The key.
         * @param array<string, mixed> $data The data.
         * @param bool                 $shorten Shorten the version number or not.
         * @param bool                 $is_ecommerce Whether this is an ecommerce plugin.
         *
         * @return array<string, mixed> An array of active plugins names.
         */
        public function add_active_plugin_and_version(string $plugin, string $key, array $data, bool $shorten = true, bool $is_ecommerce = false): array
        {
        }
        /**
         * Anonymize options
         *
         * @param array<string, mixed> $options The options.
         *
         * @return array<string, mixed>
         */
        public function anonymize_options(array $options): array
        {
        }
        /**
         * Shorten version number
         *
         * @param string $version The version number.
         *
         * @return string
         */
        public function shorten_version(string $version): string
        {
        }
        /**
         * Get web server
         *
         * @return string
         */
        public function get_web_server(): string
        {
        }
        /**
         * Get the plugin version
         *
         * @return string
         */
        public function get_plugin_version(): string
        {
        }
        /**
         * Enqueue script in build
         *
         * @param string                      $handle The script handle.
         * @param string                      $script The script name.
         * @param bool                        $has_asset_file If the script has an asset file or not.
         * @param array<int, string>          $deps The script dependencies.
         * @param array<string, string|false> $args The loading strategy.
         *
         * @return void
         */
        public function enqueue_script(string $handle, string $script, bool $has_asset_file = false, array $deps = [], array $args = ['strategy' => 'defer', 'in_footer' => false]): void
        {
        }
        /**
         * Get API data
         *
         * @param string                $endpoint The API endpoint.
         * @param string                $transient The transient.
         * @param array<string, scalar> $extra_args Optional. Additional query args appended to this
         *                                          request only. Used by callers that need to send
         *                                          per-endpoint metadata (e.g. plugin version) without
         *                                          changing the contract for other callers.
         *
         * @return array<string, mixed>
         */
        public function get_data(string $endpoint, string $transient, array $extra_args = []): array
        {
        }
        /**
         * Map of plugin slugs that the GTM Kit API surfaces use to decide which content is relevant
         * for the current site.
         *
         * Returns booleans for every plugin the API knows about, including the GTM Kit add-ons
         * themselves so endpoints can target Woo or Premium users without bundling that copy in the
         * marketplace plugin.
         *
         * @return array<string, bool>
         */
        public function get_active_plugin_flags(): array
        {
        }
        /**
         * Get API Url
         *
         * @param string $endpoint The endpoint.
         *
         * @return string The API Url.
         */
        public function get_api_url(string $endpoint): string
        {
        }
        /**
         * Normalize and hash a string.
         *
         * @link https://developers.google.com/google-ads/api/docs/conversions/enhanced-conversions/web#php
         *
         * @param string $hash_algorithm The hash algorithm.
         * @param string $value The string to normalize and hash.
         * @param bool   $trim_intermediate_spaces Removes leading, trailing, and intermediate spaces.
         *
         * @return string The normalized and hashed string.
         */
        public function normalize_and_hash(string $hash_algorithm, string $value, bool $trim_intermediate_spaces): string
        {
        }
        /**
         * Returns the result of normalizing and hashing an email address. For this use case, Google
         * Ads requires removal of any '.' characters preceding "gmail.com" or "googlemail.com".
         *
         * @param string $hash_algorithm The hash algorithm to use.
         * @param string $email_address The email address to normalize and hash.
         * @return string The normalized and hashed email address.
         */
        public function normalize_and_hash_email_address(string $hash_algorithm, string $email_address): string
        {
        }
        /**
         * Get admin page base URL
         *
         * @return string
         */
        public function get_admin_page_url(): string
        {
        }
        /**
         * Get the plugin install URL
         *
         * @return string
         */
        public function get_plugin_install_url(): string
        {
        }
        /**
         * Get admin url
         *
         * @return string
         */
        private function get_admin_url(): string
        {
        }
        /**
         * Describe the site's object cache for support.
         *
         * A persistent object cache can serve stale option values, which is easy
         * to miss in a plain list of active plugins. Both parts are reported
         * because they can disagree: a drop-in can be installed while its cache
         * server is unavailable and WordPress has fallen back to its own cache.
         *
         * @return array{persistent: bool, drop_in: string|null} Whether a persistent object cache is in use, and the name and version of the drop-in installed for it.
         */
        private function get_object_cache_data(): array
        {
        }
        /**
         * Ensure WordPress' admin-side plugin API (`is_plugin_active()`, `get_plugins()`, etc.)
         * is loaded.
         *
         * WordPress loads `wp-admin/includes/plugin.php` automatically on admin requests but not
         * on the frontend, REST, or AJAX. Any non-admin code path that calls `is_plugin_active()`
         * or `get_plugins()` must require the file first. Centralised here so the single
         * `requireOnce.fileNotFound` suppression lives in one place rather than being duplicated
         * at every call site.
         *
         * @return void
         */
        public static function load_plugin_api(): void
        {
        }
    }
}
namespace TLA_Media\GTM_Kit\Frontend {
    /**
     * BasicDatalayerData
     */
    final class BasicDatalayerData
    {
        /**
         * Plugin options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        protected \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Set datalayer post type.
         *
         * @var bool
         */
        protected bool $set_datalayer_post_type;
        /**
         * Set datalayer page type.
         *
         * @var bool
         */
        protected bool $set_datalayer_page_type;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options)
        {
        }
        /**
         * Register frontend
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options): void
        {
        }
        /**
         * Get the basic dataLayer data
         *
         * @param array<string, mixed> $datalayer The datalayer.
         *
         * @return array<string, mixed>
         */
        public function get_datalayer_content(array $datalayer): array
        {
        }
        /**
         * Set post and page types in the datalayer
         *
         * @param array<string, mixed> $datalayer The datalayer.
         * @param string               $post_type The post type.
         * @param string               $page_type The page type.
         *
         * @return array<string, mixed>
         */
        private function set_post_and_page_types(array $datalayer, string $post_type, string $page_type = ''): array
        {
        }
        /**
         * Get priority dataLayer data
         *
         * @param array<string, mixed> $datalayer The datalayer.
         *
         * @return array<string, mixed>
         */
        public function get_priority_datalayer_content(array $datalayer): array
        {
        }
        /**
         * Get the dataLayer data for singular post types
         *
         * @param array<string, mixed> $datalayer The datalayer.
         *
         * @return array<string, mixed>
         */
        private function get_singular_datalayer_content(array $datalayer): array
        {
        }
        /**
         * Get the dataLayer data for site search
         *
         * @param array<string, mixed> $datalayer The datalayer.
         *
         * @return array<string, mixed>
         */
        private function get_site_search_datalayer_content(array $datalayer): array
        {
        }
    }
    /**
     * Separates the buyer's contact details from the purchase event.
     *
     * Contact details, hashed or plain, follow the visitor's advertising consent:
     * where the page sets a Consent Mode state for `ad_storage` or `ad_user_data`,
     * they are sent only once both are granted. The page is built before that is
     * known and may be cached, so the decision is made in the browser: the
     * details are printed apart from the event, and the event is pushed with them
     * only when consent allows it.
     *
     * The split happens where the event is printed, after every filter has run,
     * so an integration or filter that adds the standard fields is covered too.
     * The customer id, order count and total spent are not contact details and
     * stay on the event.
     */
    final class ConsentGatedData
    {
        /**
         * Top-level keys held back whole.
         *
         * @var array<int, string>
         */
        private const HELD_KEYS = ['user_data'];
        /**
         * Keys under `ecommerce.customer` that hold contact details.
         *
         * @var array<int, string>
         */
        private const HELD_CUSTOMER_KEYS = ['name', 'first_name', 'last_name', 'billing_first_name', 'billing_last_name', 'billing_company', 'billing_address_1', 'billing_address_2', 'billing_city', 'billing_postcode', 'billing_country', 'billing_state', 'billing_email', 'billing_email_hash', 'billing_phone', 'shipping_firstName', 'shipping_lastName', 'shipping_company', 'shipping_address_1', 'shipping_address_2', 'shipping_city', 'shipping_postcode', 'shipping_country', 'shipping_state'];
        /**
         * Split the contact details off a purchase event.
         *
         * Any other payload is returned unchanged with nothing held.
         *
         * @param array<string, mixed> $data The data layer payload.
         *
         * @return array{0: array<string, mixed>, 1: array<string, mixed>} The payload without the details, and the details shaped like the payload.
         */
        public static function split(array $data): array
        {
        }
    }
    /**
     * Consent signal source registry.
     *
     * Encapsulates registration and resolution of consent signal sources.
     * The registry exposes a single filter (`gtmkit_consent_signal_sources`)
     * that lets Premium add-ons and third-party code plug in alternative
     * consent state providers (e.g., wp-consent-api, CMPs) without
     * modifying core. The highest-priority active source wins; the
     * default source falls back to the Consent Mode v2 settings emitted
     * by the existing admin toggles.
     *
     * Priority registry (documented for ecosystem coordination):
     *
     *  - `gtmkit_default`  priority  10 (this class, core fallback)
     *  - CMPs              priority  80 (reserved for CMP integrations)
     *  - `wp_consent_api`  priority 100 (reserved for WP Consent API integration)
     *
     * Source descriptor shape (the array returned through the filter):
     *
     *     [
     *         'gtmkit_default' => [
     *             'id'        => 'gtmkit_default',
     *             'priority'  => 10,
     *             'is_active' => callable(): bool,
     *             'read'      => callable(): array<string, 'granted'|'denied'>,
     *         ],
     *     ]
     */
    final class ConsentSignalSourceRegistry
    {
        /**
         * Default-source identifier.
         *
         * @var string
         */
        public const DEFAULT_SOURCE_ID = 'gtmkit_default';
        /**
         * Default-source priority. Documented in `docs/filters.md` so
         * third parties can decide whether to override (priority > 10)
         * or sit below (priority < 10).
         *
         * @var int
         */
        public const DEFAULT_SOURCE_PRIORITY = 10;
        /**
         * The seven Consent Mode v2 categories, in the canonical order
         * used by the rest of GTM Kit (see Frontend::enqueue_settings_and_data_script()).
         *
         * @var array<int, string>
         */
        private const CATEGORIES = ['ad_personalization', 'ad_storage', 'ad_user_data', 'analytics_storage', 'personalization_storage', 'functionality_storage', 'security_storage'];
        /**
         * Plugin options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        private \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Constructor.
         *
         * Registers the default `gtmkit_default` signal source on the
         * `gtmkit_consent_signal_sources` filter at priority 1, so user
         * code at the default WordPress filter priority (10) can override
         * or remove it via the same filter.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options)
        {
        }
        /**
         * Hook callback: register the default signal source.
         *
         * Wraps the existing legacy filters so the legacy path keeps working
         * when no override source is registered:
         *
         *  - `is_active` returns the result of `gtmkit_consent_default_settings_enabled`.
         *  - `read`      returns the result of `gtmkit_consent_default_state`.
         *
         * @param mixed $sources Registry passed through the filter chain.
         *
         * @return array<string, array<string, mixed>>
         */
        public function register_default_source($sources): array
        {
        }
        /**
         * Resolve the currently-active signal source.
         *
         * Iterates registered sources, filters by `is_active() === true`,
         * sorts by `priority` descending, returns the first descriptor.
         * Returns null if no source claims active.
         *
         * @return array<string, mixed>|null Active source descriptor or null.
         */
        public function resolve(): ?array
        {
        }
        /**
         * Read consent state from the active source.
         *
         * @return array<string, string>|null
         *     Current state, or null if no source is active.
         */
        public function read_state(): ?array
        {
        }
        /**
         * Validate that an entry returned through the filter is shaped like a
         * source descriptor. Silently drops malformed entries instead of fataling.
         *
         * @param mixed $descriptor The candidate descriptor.
         */
        private static function is_valid_descriptor($descriptor): bool
        {
        }
        /**
         * Coerce a state array to the canonical seven-category shape with
         * `granted`/`denied` values. Missing keys default to `denied`,
         * unknown values fall back to `denied`. Keeps the consent emission
         * resilient when a misbehaving source returns a partial array.
         *
         * @param array<string, mixed> $state Raw state from a source.
         *
         * @return array<string, string>
         */
        private static function normalize_state(array $state): array
        {
        }
    }
    /**
     * GA4 engagement events.
     *
     * Emits the four GA4 standard engagement events: `login`, `sign_up`,
     * `search`, and `generate_lead`. The server-triggered events
     * (`login`, `sign_up`) hand off via a short-lived cookie so the
     * decision stays out of cached HTML; the search event is detected in
     * PHP but emitted from JS so the cache key (which already varies on
     * the query string) is the only per-request state involved. The
     * `generate_lead` event ships from the existing CF7 integration's
     * client-side hook.
     */
    class EngagementEvents
    {
        /**
         * Cookie name used to hand off server-triggered events to the
         * frontend JS module. JS-readable, host-only, short-lived. See
         * {@see self::write_cookie()} for the full attribute contract.
         *
         * @var string
         */
        public const COOKIE_NAME = 'gtmkit_engagement_event';
        /**
         * Cookie max-age in seconds. Long enough to survive redirects and
         * the WooCommerce "Order received" detour, short enough to avoid
         * stale events from earlier sessions.
         *
         * @var int
         */
        public const COOKIE_MAX_AGE = 300;
        /**
         * Optional cookie writer. When null, the module writes through
         * PHP's `setcookie()`. Tests substitute a callable so no real
         * cookies are written during the suite.
         *
         * @var callable|null
         */
        private $cookie_writer;
        /**
         * Construct.
         *
         * `Options` is required by {@see self::register()} to decide which
         * hooks to attach but is not used directly by the instance methods,
         * which is why the constructor only stores the cookie writer. The
         * `Options` argument is kept on the constructor signature so the
         * register-vs-construct API mirrors the rest of the Frontend
         * namespace and reads consistently for future maintainers.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options       $options       An instance of Options (used by `register()`; retained for API symmetry).
         * @param callable|null $cookie_writer Optional cookie writer used by tests. Signature: `fn( string $name, string $value, array $attributes ): void`.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options, ?callable $cookie_writer = null)
        {
        }
        /**
         * Register the module's hooks.
         *
         * Per-event toggles gate hook registration so disabled events do
         * not even add a no-op handler; `did_action()` stays clean for
         * customers debugging GTM containers.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options       $options       An instance of Options.
         * @param callable|null $cookie_writer Optional cookie writer used by tests.
         * @return self
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options, ?callable $cookie_writer = null): self
        {
        }
        /**
         * Handle `wp_login` and queue a `login` event.
         *
         * @param string  $user_login The login name of the user (unused, signature requirement).
         * @param \WP_User $user       The logged-in user.
         */
        public function on_login(string $user_login, \WP_User $user): void
        {
        }
        /**
         * Handle `user_register` and queue a `sign_up` event.
         *
         * Suppresses emission when the registration originates from an
         * admin context (bulk import, programmatic user creation in the
         * dashboard). The late `woocommerce_created_customer` hook
         * upgrades the method to `woocommerce` when the registration was
         * part of a Woo checkout or My Account flow.
         *
         * @param int $user_id Newly created user ID.
         */
        public function on_user_register(int $user_id): void
        {
        }
        /**
         * Handle `woocommerce_created_customer` and upgrade the queued
         * `sign_up` method to `woocommerce`. Runs at priority 99 so it
         * lands after `user_register`.
         *
         * @param int $user_id Newly created customer user ID.
         */
        public function on_woocommerce_created_customer(int $user_id): void
        {
        }
        /**
         * Add the `gtmkit-search-results` body class on search results
         * pages with a non-empty query. The class is the only reliable
         * frontend signal because some themes manually emit the `<body>`
         * tag and skip the `body_class()` template tag, but every theme
         * that wants block compatibility includes the class list.
         *
         * Cache-safe: the class is a pure function of the query string,
         * which the cache already keys on.
         *
         * @param array<int, string> $classes Existing body classes.
         * @return array<int, string>
         */
        public function filter_body_class(array $classes): array
        {
        }
        /**
         * Echo a `<script>` setting `document.body.dataset.gtmkitSearchTerm`
         * on `wp_body_open`. The frontend module reads the dataset rather
         * than re-parsing the URL so URL-rewriting plugins do not throw
         * the matcher off.
         *
         * Setting via JS (rather than directly on the `<body>` tag) keeps
         * the surface compatible with themes that strip unknown body
         * attributes via filter, and avoids needing a custom
         * `body_attributes` hook that WordPress does not provide.
         *
         * Term is JSON-encoded so quotes and special characters survive
         * intact. Cache-safe: the term is part of the URL query string,
         * which the cache already keys on.
         */
        public function echo_search_term_marker(): void
        {
        }
        /**
         * Whether the current request is a search results page.
         *
         * Defaults to `is_search()` AND non-empty query. The
         * `gtmkit_is_search_results_page` filter lets sites with custom
         * search templates that bypass `is_search()` opt in.
         *
         * @return bool
         */
        public function is_search_results_page(): bool
        {
        }
        /**
         * Resolve and filter the current search term.
         *
         * @return string Trimmed, decoded search term; empty string when
         *                the query is empty.
         */
        public function current_search_term(): string
        {
        }
        /**
         * Write the engagement-event cookie if the final-veto filter
         * permits and headers have not yet been sent.
         *
         * @param string               $event_name Event name (used by filters and logging only).
         * @param array<string, mixed> $payload    Cookie payload.
         */
        private function maybe_write_event(string $event_name, array $payload): void
        {
        }
        /**
         * Test seam around PHP's native `headers_sent()`.
         *
         * Patchwork (used by the BrainMonkey unit harness) cannot redefine
         * PHP internals without an opt-in `patchwork.json`. Wrapping the
         * call in a protected method lets the unit tests override it via a
         * subclass without needing the JSON file or special test
         * configuration.
         *
         * @return bool
         */
        protected function headers_already_sent(): bool
        {
        }
        /**
         * Write the engagement-event cookie.
         *
         * The raw JSON payload is handed to `setcookie()` unmodified.
         * `setcookie()` URL-encodes the value on the way out, so the
         * frontend module only needs a single `decodeURIComponent` to
         * recover the JSON. Adding our own `rawurlencode()` here would
         * double-encode and break the JS-side `JSON.parse`.
         *
         * @param array<string, mixed> $payload Payload encoded as JSON.
         */
        private function write_cookie(array $payload): void
        {
        }
        /**
         * Filterable cookie name.
         *
         * @return string
         */
        public static function cookie_name(): string
        {
        }
        /**
         * Site-relative cookie path so subdirectory installs scope the
         * cookie correctly.
         *
         * @return string
         */
        public static function cookie_path(): string
        {
        }
    }
    /**
     * Event deferral gate.
     *
     * Wraps the `gtmkit_event_should_defer` filter so the dataLayer push
     * helpers in {@see Frontend} have a single, testable seam through which
     * to ask "should I defer this event?". The default decision is false
     * (events fire); a Premium-only event deferral queue can register on
     * the filter and return true when consent is missing.
     */
    final class EventDeferralGate
    {
        /**
         * The signal source registry used to read the active consent state.
         *
         * @var ConsentSignalSourceRegistry
         */
        private \TLA_Media\GTM_Kit\Frontend\ConsentSignalSourceRegistry $registry;
        /**
         * Constructor.
         *
         * @param ConsentSignalSourceRegistry $registry The signal source registry.
         */
        public function __construct(\TLA_Media\GTM_Kit\Frontend\ConsentSignalSourceRegistry $registry)
        {
        }
        /**
         * Decide whether to defer an event.
         *
         * Reads the current consent state from the active signal source
         * (or an empty array when no source is active) and runs the
         * `gtmkit_event_should_defer` filter. Returning true skips the
         * push at the call site.
         *
         * @param string               $event_name    e.g. 'view_item', 'add_to_cart', 'purchase'.
         * @param array<string, mixed> $event_payload Event data.
         */
        public function should_defer(string $event_name, array $event_payload): bool
        {
        }
    }
    /**
     * Frontend
     */
    final class Frontend
    {
        /**
         * Plugin options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        protected \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Datalayer name.
         *
         * @var string
         */
        protected string $datalayer_name;
        /**
         * Consent signal source registry.
         *
         * @var ConsentSignalSourceRegistry
         */
        protected \TLA_Media\GTM_Kit\Frontend\ConsentSignalSourceRegistry $signal_source_registry;
        /**
         * Event deferral gate.
         *
         * @var EventDeferralGate
         */
        protected \TLA_Media\GTM_Kit\Frontend\EventDeferralGate $event_deferral_gate;
        /**
         * The output gate this instance was registered with.
         *
         * Null until {@see Frontend::register()} resolves it, so a console
         * message never has to re-run the gate and risk a different answer.
         *
         * @var array{url_excluded: bool, container_active: bool, environment_suppressed?: bool}|null
         */
        protected ?array $output_gate = null;
        /**
         * Whether this instance has already written the noscript iframe.
         *
         * A theme that fires its footer hook more than once would otherwise run
         * the callback again and put a second iframe on the page, which Google
         * Tag Manager counts as a second container load.
         *
         * @var bool
         */
        protected bool $body_script_printed = false;
        /**
         * Whether the Google tag gateway serves the container.
         *
         * @var \TLA_Media\GTM_Kit\Common\GoogleTagGateway
         */
        protected \TLA_Media\GTM_Kit\Common\GoogleTagGateway $google_tag_gateway;
        /**
         * Constructor.
         *
         * The registry and deferral gate default to fresh instances when
         * not supplied so existing call sites (`new Frontend( $options )`)
         * keep working; the bootstrap in `inc/main.php` wires explicit
         * services for the production request lifecycle.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options                          $options An instance of Options.
         * @param ConsentSignalSourceRegistry|null $signal_source_registry Optional pre-built registry.
         * @param EventDeferralGate|null           $event_deferral_gate    Optional pre-built deferral gate.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options, ?\TLA_Media\GTM_Kit\Frontend\ConsentSignalSourceRegistry $signal_source_registry = null, ?\TLA_Media\GTM_Kit\Frontend\EventDeferralGate $event_deferral_gate = null)
        {
        }
        /**
         * Resolve the per-request output gate.
         *
         * Computes the URL-exclusion state, whether the site reports itself as
         * somewhere the container should not load, and the resulting
         * container-active value, applying the `gtmkit_container_active` filter
         * exactly once so the same decision can gate both the core runtime here
         * and the integration enqueues in `gtmkit_frontend_init()`.
         *
         * The site's own report is folded into the base value before the filter
         * runs, so a site that deliberately measures a non-production install
         * can still force output back on from code.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         * @return array{url_excluded: bool, container_active: bool, environment_suppressed: bool}
         */
        public static function resolve_output_gate(\TLA_Media\GTM_Kit\Options\Options $options): array
        {
        }
        /**
         * Whether all GTM Kit frontend output is withheld for this request.
         *
         * True only when the URL matches an exclusion pattern and no
         * `gtmkit_container_active` filter forced the container back on. When
         * true, the core runtime and every integration enqueue must be skipped
         * so dependent scripts never reference a runtime that was never loaded.
         *
         * @param array{url_excluded: bool, container_active: bool, environment_suppressed?: bool} $gate Resolved output gate.
         * @return bool
         */
        public static function is_output_suppressed(array $gate): bool
        {
        }
        /**
         * Register frontend
         *
         * @param \TLA_Media\GTM_Kit\Options\Options                                                                               $options An instance of Options.
         * @param array{url_excluded: bool, container_active: bool, environment_suppressed?: bool}|null $gate    Pre-resolved output gate; resolved here when null.
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options, ?array $gate = null): void
        {
        }
        /**
         * The inline script for settings and data use by other GTM Kit scripts.
         */
        public function enqueue_settings_and_data_script(): void
        {
        }
        /**
         * The dataLayer content included before the GTM container script
         */
        public function enqueue_datalayer_content(): void
        {
        }
        /**
         * How the purchase's contact details are treated when consent is unknown.
         *
         * Consent is unknown when the page holds no Consent Mode state for
         * advertising storage or advertising user data at all, which is the case
         * on a site that does not use Consent Mode. Where a consent state exists,
         * this setting has no effect: the details follow the visitor's answer.
         *
         * @return string `allow` to send the details, or `deny` to withhold them.
         */
        public static function get_unknown_consent(): string
        {
        }
        /**
         * The script that holds an event until advertising consent is known.
         *
         * Printed inline rather than enqueued as a file, so script-delaying
         * optimizers that leave GTM Kit's inline scripts alone cannot hold it back
         * while the call that needs it runs. When the built file is missing the
         * details are simply not sent.
         *
         * @return string The script, or an empty string when it is unavailable.
         */
        private function get_consent_gate_script(): string
        {
        }
        /**
         * The Google Tag Manager container script
         */
        public function enqueue_header_script(): void
        {
        }
        /**
         * Enqueue the consent-gating shim when the gating mode is strong_block.
         *
         * The shim is a small vanilla-JS file that listens for
         * `gtmkit:consent:updated` and re-injects the masked GTM container as
         * text/javascript once the required consent categories are granted.
         * Loaded in <head> after gtmkit-container so the masked <script> element
         * is in the DOM by the time the shim runs its initial check.
         */
        private function maybe_enqueue_consent_gating_shim(): void
        {
        }
        /**
         * This script fires the 'delay_js' event in Google Tag Manager
         */
        public function enqueue_delay_js_script(): void
        {
        }
        /**
         * Get GTM script
         *
         * @param string $gtm_id The GTM container ID.
         */
        public function get_gtm_script(string $gtm_id): void
        {
        }
        /**
         * Emit the loader Stape issued for this site's server-side container.
         *
         * The address is built from values that were checked when they were stored
         * and again when they were read, never from the code Stape returned. The
         * data layer name is not appended, because Stape encodes it into the query
         * value. The environment parameters are appended as in the standard
         * snippet, and Stape passes them on to Google.
         *
         * @param array{path: string, param: string, value: string} $loader The stored loader.
         */
        private function get_stape_issued_script(array $loader): void
        {
        }
        /**
         * Assemble the Cookie Keeper loader script.
         *
         * On Safari 16.4 and later the script asks for the `kp` form of the loader
         * file and appends the Cookie Keeper identifier as `bi`. The same script
         * serves the standard loader, which carries the container ID, and the
         * loader Stape issues, which carries its own query pair instead.
         *
         * @param string $domain          The server-side container domain.
         * @param string $loader          The loader file name, without `.js`.
         * @param string $container_value The value the script names `o`: the container ID, or the issued query pair.
         * @param string $query           The JavaScript expression that follows the file name in the address.
         *
         * @return string
         */
        private function get_cookie_keeper_script(string $domain, string $loader, string $container_value, string $query): string
        {
        }
        /**
         * The container environment parameters, as a JavaScript string concatenation.
         *
         * @return string An empty string when no environment is configured.
         */
        private function get_environment_query(): string
        {
        }
        /**
         * Emit the container loader served from this site's own origin.
         *
         * The published Google tag gateway snippet for a Tag Manager container is
         * the standard snippet with one change: the loader source points at a path
         * on this site instead of at Google. Everything else about it, including
         * how the data layer name and the environment parameters are appended, is
         * unchanged, so the container receives exactly what it does today and only
         * the origin serving it differs.
         *
         * The environment parameters are appended the same way as in the standard
         * snippet because the proxy forwards every query parameter it does not
         * reserve for itself, so a container bound to an environment still
         * resolves through the gateway.
         *
         * @param string $gtm_id The GTM container ID.
         */
        private function get_gateway_script(string $gtm_id): void
        {
        }
        /**
         * Set inline script attributes
         *
         * @param array<string, mixed> $attributes The script attributes.
         * @param string               $script The script.
         *
         * @return array<string, mixed> The script attributes.
         */
        public function set_inline_script_attributes(array $attributes, string $script): array
        {
        }
        /**
         * The Google Tag Manager noscript
         */
        public function get_body_script(): void
        {
        }
        /**
         * Console warning naming why the container was left out of this page.
         *
         * A developer looking at a page with no container needs the reason, not
         * only the fact, so the message says which of the three applies: the site
         * reports itself as somewhere the container does not belong, the current
         * user's role is excluded, or container output is simply switched off.
         */
        public function container_disabled(): void
        {
        }
        /**
         * Whether this request's container was withheld because of what the site reports.
         *
         * Reads the gate `register()` resolved so the message cannot contradict
         * the decision that produced it. A directly constructed instance has no
         * gate, so it asks the same resolver the gate itself calls.
         *
         * @return bool
         */
        private function is_environment_suppressed(): bool
        {
        }
        /**
         * Exclude GTM Kit in WP Rocket
         *
         * @param array<int, string> $pattern The exclude list.
         *
         * @return array<int, string>
         */
        public function wp_rocket_exclude_javascript(array $pattern): array
        {
        }
        /**
         * Adds Google Tag Manager domain DNS Prefetch printed by wp_resource_hints
         *
         * @param array<int, string> $hints URLs to print for resource hints.
         * @param string             $relation_type The relation type the URL are printed for.
         *
         * @return array<int, string> URL to print
         */
        public function dns_prefetch(array $hints, string $relation_type): array
        {
        }
        /**
         * Is user allowed
         *
         * @return bool
         */
        public function is_user_allowed(): bool
        {
        }
        /**
         * Whether the current user's role is allowed to receive GTM Kit scripts.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         */
        public static function is_user_allowed_for(\TLA_Media\GTM_Kit\Options\Options $options): bool
        {
        }
        /**
         * Whether the gtmkit-container script will be registered during this request.
         *
         * Mirrors the gates inside {@see Frontend::register()} and
         * {@see Frontend::enqueue_header_script()} so dependent scripts only list
         * 'gtmkit-container' when it will actually be registered.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         */
        public static function will_register_container(\TLA_Media\GTM_Kit\Options\Options $options): bool
        {
        }
    }
    /**
     * Stape
     */
    final class Stape
    {
        /**
         * The Cookie Keeper name.
         *
         * @var string
         */
        const COOKIE_KEEPER_NAME = '_sbp';
        /**
         * Plugin options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        protected \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options)
        {
        }
        /**
         * The loader file name Cookie Keeper requests on Safari 16.4 and later.
         *
         * Stape splices `kp` in front of the last eight characters of the loader
         * identifier, not in front of the whole identifier. The two forms only
         * agree for an identifier of eight characters or fewer, and Stape answers
         * the wrong form with HTTP 400.
         *
         * @param string $loader The custom loader identifier.
         *
         * @return string
         */
        public static function cookie_keeper_loader(string $loader): string
        {
        }
        /**
         * Register
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options): void
        {
        }
        /**
         * Add cookie keeper.
         *
         * @return void
         */
        public function add_cookie_keeper()
        {
        }
        /**
         * Delete cookie.
         *
         * @return void
         */
        private function delete_cookie(): void
        {
        }
        /**
         * Set cookie.
         *
         * @param  array<string, mixed> $args Parameters.
         * @return void
         */
        private function set_cookie(array $args): void
        {
        }
    }
    /**
     * URL exclusion matcher.
     *
     * Decides whether a request path matches any of the admin-managed
     * patterns that suppress GTM Kit output for the current URL. The
     * decision is a pure function of the request path and the stored
     * patterns so it stays correct under full-page caching.
     */
    final class UrlExclusion
    {
        /**
         * Decide whether the given request path is excluded.
         *
         * @param string                                                $path     Full request path (no query string).
         * @param array<int, array{pattern: string, mode: string}>|null $patterns Stored pattern list.
         * @return bool
         */
        public static function is_excluded(string $path, $patterns): bool
        {
        }
        /**
         * Normalize the request path to the form used by the matcher.
         *
         * - decodes percent-encoded characters once;
         * - lower-cases for case-insensitive matching;
         * - reduces multiple trailing slashes to none (a single trailing
         *   slash is stripped so `/checkout/` and `/checkout` are treated
         *   the same).
         *
         * @param string $path Raw path.
         * @return string Normalized path.
         */
        public static function normalize_path(string $path): string
        {
        }
        /**
         * Match the normalized path against the configured patterns.
         *
         * @param string                                           $normalized_path Path after normalisation.
         * @param array<int, array{pattern: string, mode: string}> $patterns        Stored pattern list.
         * @return bool
         */
        private static function matches_any(string $normalized_path, array $patterns): bool
        {
        }
        /**
         * Translate a glob pattern into an anchored PCRE.
         *
         * `*` matches any run of characters including `/`. `?` matches a
         * single character. Every other regex metacharacter is escaped. The
         * pattern is anchored at the start of the path; the user adds `*`
         * to allow a suffix, mirroring how they would write the pattern in
         * the admin UI.
         *
         * The trailing slash of the user-supplied pattern is normalized the
         * same way the path is, so `/checkout/` and `/checkout` produce the
         * same regex.
         *
         * @param string $glob Glob expression.
         * @return string Compiled regex including delimiters and flags.
         */
        private static function glob_to_regex(string $glob): string
        {
        }
        /**
         * Wrap a raw regex pattern with the delimiters and flags the
         * matcher uses. `~` is the delimiter because it rarely appears in
         * URL paths; literal `~` inside the pattern is escaped.
         *
         * @param string $pattern Raw regex pattern entered by the admin.
         * @return string Compiled regex including delimiters and flags.
         */
        private static function regex_pattern_for_match(string $pattern): string
        {
        }
        /**
         * Resolve the request path the matcher should evaluate.
         *
         * Pulled from `$_SERVER['REQUEST_URI']`, with query string and
         * fragment discarded. Returns `/` when no path is available so
         * callers can pass the result through unchanged.
         *
         * @return string
         */
        public static function current_request_path(): string
        {
        }
    }
    /**
     * UserData
     */
    final class UserData
    {
        /**
         * Plugin options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        protected \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options)
        {
        }
        /**
         * Register frontend
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options): void
        {
        }
        /**
         * Get the dataLayer content
         *
         * @param array<string, mixed> $datalayer The datalayer.
         *
         * @return array<string, mixed>
         */
        public function get_datalayer_content(array $datalayer): array
        {
        }
    }
}
namespace TLA_Media\GTM_Kit\Installation {
    /**
     * Activation
     */
    final class Activation
    {
        /**
         * Plugin options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        protected \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Checks if GTM Kit is installed for the first time.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options)
        {
        }
        /**
         * When the option doesn't exist, it should be a new installation.
         *
         * @return bool
         */
        private function is_first_install(): bool
        {
        }
        /**
         * Sets the options on first install for showing the installation notice and disabling of the settings pages.
         */
        public function set_first_install_options(): void
        {
        }
        /**
         * Set autoload on options.
         */
        public function set_autoload_on_options(): void
        {
        }
    }
    /**
     * Activation
     */
    final class AutomaticUpdates
    {
        /**
         * Instance of this class
         *
         * @var null|self
         */
        public static ?self $instance = null;
        /**
         * Plugin options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        protected \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Constructor
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         */
        private function __construct(\TLA_Media\GTM_Kit\Options\Options $options)
        {
        }
        /**
         * Register analytics
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options): void
        {
        }
        /**
         * Get the singleton instance of this class.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options|null $options An instance of Options (required on first call).
         *
         * @throws \RuntimeException If Options instance is not provided on first call.
         * @return self
         */
        public static function instance(?\TLA_Media\GTM_Kit\Options\Options $options = null): self
        {
        }
        /**
         * Updates the GTM Kit setting when the WordPress auto_update_plugins option is updated.
         *
         * @param string             $option    The name of the option.
         * @param array<int, string> $value     The current value of the option.
         * @param array<int, string> $old_value The previous value of the option.
         */
        public function wp_option_updated($option, $value, $old_value = []): void
        {
        }
        /**
         * Updates the GTM Kit auto-update setting when the WordPress auto_update_plugins option is deleted.
         */
        public function wp_option_deleted(): void
        {
        }
        /**
         * Updates the GTM Kit option.
         *
         * @param bool $is_enabled Indicates if auto-updates are enabled.
         *
         * @return void
         */
        public function update_gtmkit_option(bool $is_enabled): void
        {
        }
        /**
         * Activate auto-update of GTM Kit.
         *
         * Updates the WordPress auto_update_plugins option to enable or disable automatic updates for GTM Kit.
         *
         * @param bool $activate Activate or deactivate auto-updates.
         */
        public function activate_auto_update(bool $activate): void
        {
        }
        /**
         * Adds the action hooks for the auto_update_plugins option.
         *
         * @return void
         */
        public function add_wp_hooks(): void
        {
        }
        /**
         * Removes the action hooks for the auto_update_plugins option.
         * @return void
         */
        public function remove_wp_hooks(): void
        {
        }
        /**
         * Updates the WordPress auto_update_plugins option to match the GTM Kit setting.
         *
         * @return void
         */
        public function activation_sync(): void
        {
        }
    }
    /**
     * Class for preparing import data from other GTM plugins.
     */
    class PluginDataImport
    {
        /**
         * Get the data for all plugins.
         *
         * Reading import data has no side effects, so the settings screen and
         * repeated wizard runs can both offer an import. An import is offered
         * whenever another plugin's settings are present, not only on a fresh
         * install.
         *
         * @return array<string, mixed>
         */
        public function get_all(): array
        {
        }
        /**
         * Get the data for the current plugin slug.
         *
         * @param string $slug The plugin slug.
         *
         * @return array<string, mixed>
         */
        public function get(string $slug): array
        {
        }
        /**
         * Extract the container ID from the container script
         *
         * @param string $container_script The GTM container script.
         *
         * @return string
         */
        private function extract_container_id(string $container_script): string
        {
        }
        /**
         * Extract the configured GTM4WP containers as a normalized list.
         *
         * Newer GTM4WP releases store one row per container under `gtm-containers`
         * and keep the flat `gtm-*` keys as derived mirrors. Older releases only
         * have the flat keys, where `gtm-code` holds every container ID joined by
         * commas or semicolons. Both shapes are reduced to the same row structure
         * so callers never have to care which release wrote the settings.
         *
         * The custom loader path is kept so the caller can tell when the domain
         * only works together with a path GTM Kit has no setting for.
         *
         * @param array<string, mixed> $options The stored GTM4WP options.
         *
         * @return array<int, array<string, string>>
         */
        private function get_gtm4wp_containers(array $options): array
        {
        }
        /**
         * Check if GTM4WP plugin settings are present and extract them.
         *
         * @return array<string, mixed>
         */
        private function get_gtm4wp(): array
        {
        }
        /**
         * Copy the source options a map names onto their GTM Kit keys.
         *
         * A source key that is absent is skipped rather than imported as an empty
         * value, so an import only overwrites settings the other plugin actually
         * stored and the confirmation step can list exactly what will change.
         *
         * @param array<string, mixed>  $options The source plugin's options.
         * @param array<string, string> $map GTM Kit key => source option key.
         *
         * @return array<string, mixed>
         */
        private function pick(array $options, array $map): array
        {
        }
        /**
         * Convert GTM4WP's comma separated user role list into an array of role slugs.
         *
         * @param mixed $roles The stored role list.
         *
         * @return string[]
         */
        private function split_role_list($roles): array
        {
        }
        /**
         * Check if GTM for WooCommerce plugin settings are present and extract them.
         *
         * @return array<string, mixed>
         */
        private function get_gtm_for_woocommerce(): array
        {
        }
        /**
         * Check if Metronet Tag Manager plugin settings are present and extract them.
         *
         * @return array<string, mixed>
         */
        private function get_metronet_tag_manager(): array
        {
        }
        /**
         * Check if Google Analytics and Google Tag Manager plugin settings are present and extract them.
         *
         * @return array<string, mixed>
         */
        private function get_google_analytics_and_google_tag_manager(): array
        {
        }
        /**
         * Check if Google Tag Manager plugin settings are present and extract them.
         *
         * @return array<string, mixed>
         */
        private function get_google_tag_manager(): array
        {
        }
        /**
         * Is plugin active
         *
         * @param string $plugin Path to the plugin file relative to the plugins directory.
         *
         * @return bool
         */
        private function is_plugin_active(string $plugin): bool
        {
        }
    }
    /**
     * Upgrade
     */
    final class Upgrade
    {
        /**
         * Plugin options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        protected \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Constructor
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options)
        {
        }
        /**
         * Get upgrades if applicable.
         *
         * @return array<string>
         */
        protected function get_upgrades(): array
        {
        }
        /**
         * Upgrade routine for v1.11
         */
        protected function v111_upgrade(): void
        {
        }
        /**
         * Upgrade routine for v1.14
         */
        protected function v114_upgrade(): void
        {
        }
        /**
         * Upgrade routine for v1.15
         */
        protected function v115_upgrade(): void
        {
        }
        /**
         * Upgrade routine for v1.20
         */
        protected function v120_upgrade(): void
        {
        }
        /**
         * Upgrade routine for v1.22
         */
        protected function v122_upgrade(): void
        {
        }
        /**
         * Upgrade routine for v2.2
         */
        protected function v22_upgrade(): void
        {
        }
        /**
         * Upgrade routine for v2.4
         */
        protected function v24_upgrade(): void
        {
        }
        /**
         * Upgrade routine for v2.7
         */
        protected function v27_upgrade(): void
        {
        }
        /**
         * Upgrade routine for v2.8.0
         *
         * Convert legacy string 'on' values to proper boolean true or integer 1.
         * Legacy data from earlier versions stored toggle values as 'on' strings
         * instead of proper booleans, causing integration settings to appear disabled.
         */
        protected function v280_upgrade(): void
        {
        }
        /**
         * Upgrade routine for v2.10
         *
         * Seed the new `cmp_script_attributes` option for upgraders. Earlier
         * releases hardcoded `data-cookieconsent="ignore"` on every install,
         * so to preserve current behavior the Cookiebot toggle defaults true
         * here regardless of which CMP plugin is active. Users who do not
         * want the attribute can turn it off explicitly in Settings → Consent
         * → CMP script attributes. Skipped if the option is already stored
         * (already-migrated install or admin save before this routine ran).
         */
        protected function v210_upgrade(): void
        {
        }
        /**
         * Upgrade routine for v2.18.1
         *
         * 2.18.0 armed the daily scan as a one-shot Action Scheduler action, which
         * fires once and leaves no successor. The scheduler only arms a recurrence
         * when nothing is pending, so a site still carrying that one-shot would run
         * one more cycle of the old behaviour before the fix took hold.
         *
         * Upgrades run on `plugins_loaded`, before Action Scheduler has set up its
         * data store, so the cancel waits for `init`. That still lands before the
         * scan schedules itself on `admin_init`, which lets the recurrence arm on
         * this same request.
         */
        protected function v2181_upgrade(): void
        {
        }
        /**
         * Upgrade routine for v2.20.2
         *
         * A stored loader without the `datalayer_checked` flag may have been issued
         * for another data layer name, and would then listen to a data layer GTM Kit
         * never pushes to. Such a loader is already ignored when read. It is deleted
         * here so the option does not linger. A flagged loader is kept.
         */
        protected function v2202_upgrade(): void
        {
        }
    }
}
namespace TLA_Media\GTM_Kit\Integration {
    /**
     * AbstractIntegration
     */
    abstract class AbstractIntegration
    {
        /**
         * Plugin options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        protected \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Utilities
         *
         * @var \TLA_Media\GTM_Kit\Common\Util
         */
        protected \TLA_Media\GTM_Kit\Common\Util $util;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util An instance of Util.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util)
        {
        }
        /**
         * Get instance
         */
        abstract public static function instance(): self;
        /**
         * Register frontend
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util An instance of Util.
         */
        abstract public static function register(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util): void;
    }
    /**
     * AbstractEcommerce
     */
    abstract class AbstractEcommerce extends \TLA_Media\GTM_Kit\Integration\AbstractIntegration
    {
        /**
         * Store currency.
         *
         * @var string
         */
        protected string $store_currency;
        /**
         * Grouped product list position.
         *
         * @var int
         */
        protected int $grouped_product_position;
        /**
         * Global data.
         *
         * @var array<string, mixed>
         */
        protected array $global_data;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options The Options instance.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util The Util instance.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util)
        {
        }
        /**
         * Get instance
         */
        abstract public static function instance(): self;
        /**
         * Register frontend
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options The Options instance.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util The Util instance.
         */
        abstract public static function register(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util): void;
        /**
         * Get the primary product category of a product. If the  primary category is not available the first assigned category will be returned.
         *
         * @param int    $product_id The product ID.
         * @param string $taxonomy The taxonomy slug.
         *
         * @return array<int|string, mixed> The category breadcrumb for the given product ID.
         */
        public function get_primary_product_category(int $product_id, string $taxonomy): array
        {
        }
        /**
         * Get the product category breadcrumb elements as an array.
         *
         * @param int    $category_id The ID of the product category.
         * @param string $taxonomy The taxonomy slug.
         *
         * @return array<int, string> The category path elements as an array.
         */
        public function get_category_breadcrumb(int $category_id, string $taxonomy): array
        {
        }
        /**
         * Get product term value.
         *
         * @param int    $product_id A product ID.
         * @param string $taxonomy The taxonomy slug.
         *
         * @return string Returns the first assigned taxonomy value.
         */
        public function get_product_term(int $product_id, string $taxonomy): string
        {
        }
        /**
         * Prefix an item ID
         *
         * @param string $item_id The item ID.
         *
         * @return string
         */
        abstract public function prefix_item_id(string $item_id): string;
    }
    /**
     * Contact Form 7 integration
     */
    final class ContactForm7 extends \TLA_Media\GTM_Kit\Integration\AbstractIntegration
    {
        /**
         * "Load JavaScript" setting value for the "on all pages" mode.
         * The recommended mode is `1` and falls through any non-`2`
         * value, so only the all-pages path needs a named constant.
         *
         * @var int
         */
        private const LOAD_JS_ALL_PAGES = 2;
        /**
         * Instance.
         *
         * @var null|ContactForm7 An instance of ContactForm7.
         */
        protected static ?\TLA_Media\GTM_Kit\Integration\ContactForm7 $instance = null;
        /**
         * Get instance
         */
        public static function instance(): \TLA_Media\GTM_Kit\Integration\ContactForm7
        {
        }
        /**
         * Register frontend
         *
         * The recommended "only on pages where CF7 is registered" mode
         * hooks into the `wpcf7_enqueue_scripts` action that Contact Form
         * 7 fires from inside its own enqueue path. That action is
         * invoked from both the standard `wp_enqueue_scripts` flow and
         * the late shortcode-time enqueue used by performance plugins
         * (e.g. WP Rocket sets `wpcf7_load_js` to false so CF7 only loads
         * during shortcode render). Using the action means our integration
         * script lands on every page where CF7's own script lands, with
         * no false negatives from `wp_script_is()` running before CF7 has
         * decided to enqueue. The "on all pages" mode keeps the direct
         * `wp_enqueue_scripts` hook so the integration loads unconditionally.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util An instance of Util.
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util): void
        {
        }
        /**
         * Enqueue scripts.
         *
         * Runs from one of two hooks depending on the "Load JavaScript"
         * setting; both reach the same handle + localized config. The
         * hook-level gating in {@see self::register()} replaces the old
         * inline `wp_script_is()` check, which produced false negatives on
         * pages where CF7 enqueues later than `wp_enqueue_scripts` priority 10.
         */
        public function enqueue_scripts(): void
        {
        }
    }
    /**
     * Easy Digital Downloads integration
     */
    final class EasyDigitalDownloads extends \TLA_Media\GTM_Kit\Integration\AbstractEcommerce
    {
        /**
         * Instance.
         *
         * @var null|EasyDigitalDownloads
         */
        protected static ?\TLA_Media\GTM_Kit\Integration\EasyDigitalDownloads $instance = null;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options The Options instance.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util The Util Instance.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util)
        {
        }
        /**
         * Get instance
         */
        public static function instance(): \TLA_Media\GTM_Kit\Integration\EasyDigitalDownloads
        {
        }
        /**
         * Register frontend
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options The Options instance.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util The Util Instance.
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util): void
        {
        }
        /**
         * Enqueue scripts
         */
        public function enqueue_scripts(): void
        {
        }
        /**
         * Get the global script settings
         *
         * @param array<string, mixed> $global_settings Script settings.
         *
         * @return array<string, mixed>
         */
        public function get_global_settings(array $global_settings): array
        {
        }
        /**
         * Get the global script data
         *
         * @param array<string, mixed> $global_data Script data.
         *
         * @return array<string, mixed>
         */
        public function get_global_data(array $global_data): array
        {
        }
        /**
         * Get the dataLayer content
         *
         * @param array<string, mixed> $data_layer The datalayer content.
         *
         * @return array<string, mixed> The datalayer content
         */
        public function get_datalayer_content(array $data_layer): array
        {
        }
        /**
         * Get the dataLayer data for product pages
         *
         * @param array<string, mixed> $data_layer The datalayer content.
         *
         * @return array<string, mixed> The datalayer content
         */
        public function get_datalayer_content_product_page(array $data_layer): array
        {
        }
        /**
         * Get the dataLayer data for category pages
         *
         * @param array<string, mixed> $data_layer The datalayer content.
         *
         * @return array<string, mixed> The datalayer content
         */
        public function get_datalayer_content_product_category(array $data_layer): array
        {
        }
        /**
         * Get the dataLayer data for product tag pages
         *
         * @param array<string, mixed> $data_layer The datalayer content.
         *
         * @return array<string, mixed> The datalayer content
         */
        public function get_datalayer_content_product_tag(array $data_layer): array
        {
        }
        /**
         * Get the dataLayer data for checkout page
         *
         * @param array<string, mixed> $data_layer The datalayer content.
         *
         * @return array<string, mixed> The datalayer content
         */
        public function get_datalayer_content_checkout(array $data_layer): array
        {
        }
        /**
         * Get the dataLayer data for order_received page
         *
         * @param array<string, mixed> $data_layer The datalayer content.
         *
         * @return array<string, mixed> The datalayer content
         */
        public function get_datalayer_content_order_received(array $data_layer): array
        {
        }
        /**
         * Whether Easy Digital Downloads would show this receipt to the visitor.
         *
         * Defers to the store's own rule, so a store that relaxes or tightens who
         * may see a receipt gets the matching tracking behaviour with nothing to
         * configure here.
         *
         * The payment key is what the rule is given, not the order object: every
         * Easy Digital Downloads 3.x release accepts the key, while the order
         * object is only understood from 3.1.1 on and is refused, silently, by
         * the releases before it.
         *
         * @param string $payment_key The payment key the visitor arrived with.
         *
         * @return bool
         */
        private function visitor_may_view_receipt(string $payment_key): bool
        {
        }
        /**
         * Get cart items.
         *
         * @param string $event_context The event context of the item data.
         *
         * @return array<int, mixed> The cart items.
         */
        public function get_cart_items(string $event_context): array
        {
        }
        /**
         * Get item data.
         *
         * @param \EDD_Download         $download An instance of EDD_Download.
         * @param array<string, mixed> $options Optional options.
         * @param array<string, mixed> $additional_item_attributes Any key-value pair that needs to be added to the item data.
         * @param string               $event_context The event context of the item data.
         *
         * @return array<string, mixed> The item data.
         */
        public function get_item_data(\EDD_Download $download, array $options = [], array $additional_item_attributes = [], string $event_context = ''): array
        {
        }
        /**
         * Include customer data
         *
         * @param array<string, mixed> $data_layer The datalayer content.
         * @param \EDD\Orders\Order|false          $order Order.
         *
         * @return array<string, mixed> The datalayer.
         */
        public function include_customer_data(array $data_layer, $order): array
        {
        }
        /**
         * Add-to-cart tracing on single product.
         *
         * @hook woocommerce_after_add_to_cart_button
         *
         * @param int $download_id The download ID.
         *
         * @return void
         */
        public function add_to_cart_tracking(int $download_id): void
        {
        }
        /**
         * Prefix an item ID
         *
         * @param string $item_id The item ID.
         *
         * @return string
         */
        public function prefix_item_id(string $item_id): string
        {
        }
        /**
         * Get price to display
         *
         * @param int         $download_id The download ID.
         * @param string|null $price_index The price index.
         *
         * @return float
         */
        public function get_price_to_display(int $download_id, ?string $price_index = null): float
        {
        }
        /**
         * Get payment key
         *
         * @return false|mixed|string
         */
        public function get_payment_key()
        {
        }
    }
}
namespace TLA_Media\GTM_Kit\Integration\Tax {
    /**
     * Resolves tax-aware totals and prices for the WooCommerce data layer.
     *
     * Reads {@see Options} once via {@see self::resolve_tax_mode()} and exposes
     * resolver methods for product prices, cart totals, and order totals. The
     * resolved boolean (`$exclude_tax`) is the canonical input to every
     * resolver so a single payload only consults the option once.
     *
     * @since 1.x
     */
    final class TaxResolver
    {
        /**
         * Options instance.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        private \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options)
        {
        }
        /**
         * Resolve the tax mode for the current payload.
         *
         * Reads `integrations.woocommerce_exclude_tax` once and applies the
         * `gtmkit_resolve_tax_mode` filter so advanced integrations can
         * override the toggle programmatically (per-event or per-context).
         *
         * @return bool True when totals/prices must be reported excluding tax.
         */
        public function resolve_tax_mode(): bool
        {
        }
        /**
         * Resolve a product price for the data layer.
         *
         * Always uses WooCommerce's tax-conversion helpers so the returned
         * value reflects the toggle, not the store's "Display prices in cart"
         * setting.
         *
         * @param \WC_Product $product     The product (or variation).
         * @param bool       $exclude_tax Tax mode resolved by {@see self::resolve_tax_mode()}.
         *
         * @return float Rounded to the store's currency precision.
         */
        public function resolve_product_price(\WC_Product $product, bool $exclude_tax): float
        {
        }
        /**
         * Resolve a cart total for the data layer.
         *
         * Uses `WC_Cart::get_cart_contents_total()` (always net of tax) plus
         * `get_cart_contents_tax()` for the inc-tax case. Independent of the
         * "Prices entered with tax" Woo setting.
         *
         * @param \WC_Cart $cart        The cart.
         * @param bool    $exclude_tax Tax mode resolved by {@see self::resolve_tax_mode()}.
         *
         * @return float Rounded to the store's currency precision.
         */
        public function resolve_cart_total(\WC_Cart $cart, bool $exclude_tax): float
        {
        }
        /**
         * Resolve an order total for the data layer.
         *
         * Accepts {@see WC_Abstract_Order} so refunds (which extend it as a
         * sibling of {@see \WC_Order}) reuse the same helper. Negative inputs
         * round symmetrically.
         *
         * @param \WC_Abstract_Order $order       The order or refund.
         * @param bool              $exclude_tax Tax mode resolved by {@see self::resolve_tax_mode()}.
         *
         * @return float Rounded to the store's currency precision.
         */
        public function resolve_order_total(\WC_Abstract_Order $order, bool $exclude_tax): float
        {
        }
        /**
         * Resolve the per-item price for an order line item.
         *
         * Uses `WC_Abstract_Order::get_item_total()` with the boolean toggle
         * so the returned price obeys `$exclude_tax` regardless of the
         * `woocommerce_tax_display_shop` setting. Refund items are stored
         * negative and round sign-symmetrically.
         *
         * @param \WC_Abstract_Order     $order       The order or refund.
         * @param \WC_Order_Item_Product $item        The order line item.
         * @param bool                  $exclude_tax Tax mode resolved by {@see self::resolve_tax_mode()}.
         *
         * @return float Rounded to the store's currency precision.
         */
        public function resolve_order_item_price(\WC_Abstract_Order $order, \WC_Order_Item_Product $item, bool $exclude_tax): float
        {
        }
        /**
         * Resolve the per-unit coupon discount for an item.
         *
         * The cart-item / order-item array carries `subtotal` and `total` (both
         * net of tax) plus `subtotal_tax` and `total_tax`. When `$exclude_tax`
         * is false the helper folds the tax delta back in so the returned
         * discount uses the same tax convention as the surrounding `price`
         * field.
         *
         * @param array<string, mixed> $item        Cart- or order-item array.
         *                                          Required keys: `subtotal`,
         *                                          `total`, `subtotal_tax`,
         *                                          `total_tax`, `quantity`.
         * @param bool                 $exclude_tax Tax mode resolved by {@see self::resolve_tax_mode()}.
         *
         * @return float Per-unit discount, rounded to the store's currency precision.
         */
        public function resolve_item_discount(array $item, bool $exclude_tax): float
        {
        }
        /**
         * Round a value to the store's currency precision.
         *
         * Falls back to two decimals when WooCommerce is not loaded (mostly
         * relevant for unit tests). Negative inputs round symmetrically, so
         * the helper is safe for refund payloads where values are negative.
         *
         * @param float $value Value to round.
         *
         * @return float
         */
        private function round(float $value): float
        {
        }
    }
}
namespace TLA_Media\GTM_Kit\Integration {
    /**
     * WooCommerce integration
     */
    final class WooCommerce extends \TLA_Media\GTM_Kit\Integration\AbstractEcommerce
    {
        /**
         * Instance.
         *
         * @var null|WooCommerce
         */
        protected static ?\TLA_Media\GTM_Kit\Integration\WooCommerce $instance = null;
        /**
         * Tax resolver. Canonical price/total path for the data layer.
         *
         * @var \TLA_Media\GTM_Kit\Integration\Tax\TaxResolver
         */
        private \TLA_Media\GTM_Kit\Integration\Tax\TaxResolver $tax_resolver;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util An instance of Util.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util)
        {
        }
        /**
         * Get instance
         */
        public static function instance(): \TLA_Media\GTM_Kit\Integration\WooCommerce
        {
        }
        /**
         * Register the filters an AJAX request needs.
         *
         * Variation data returned to the browser over AJAX carries the
         * tax-resolved price the frontend events report. Nothing is enqueued and
         * no data layer hook is attached: this runs on admin-ajax requests, which
         * the frontend bootstrap skips.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util An instance of Util.
         */
        public static function register_ajax(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util): void
        {
        }
        /**
         * Register frontend
         *
         * @param \TLA_Media\GTM_Kit\Options\Options $options An instance of Options.
         * @param \TLA_Media\GTM_Kit\Common\Util    $util An instance of Util.
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Common\Util $util): void
        {
        }
        /**
         * Enqueue scripts
         *
         * Classic-template path only. The block tracking bundle is enqueued by
         * {@see WooCommerceBlocks::enqueue_block_assets()} on a later priority,
         * which also dequeues `gtmkit-woocommerce` on a block-built Cart or
         * Checkout page where the block bundle takes over tracking.
         */
        public function enqueue_scripts(): void
        {
        }
        /**
         * Get the Util instance.
         *
         * Exposed so the block integration can share the same configured Util.
         */
        public function get_util(): \TLA_Media\GTM_Kit\Common\Util
        {
        }
        /**
         * Get the global script settings
         *
         * @param array<string, mixed> $global_settings Script settings.
         *
         * @return array<string, mixed>
         */
        public function get_global_settings(array $global_settings): array
        {
        }
        /**
         * Get CSS Selectors
         *
         * @return array{product_list_select_item: string, product_list_element: string, product_list_exclude: string, product_list_add_to_cart: string}
         */
        private function get_css_selectors(): array
        {
        }
        /**
         * Get the global script data
         *
         * @param array<string, mixed> $global_data Script data.
         *
         * @return array<string, mixed>
         */
        public function get_global_data(array $global_data): array
        {
        }
        /**
         * Get the  payment method
         *
         * @return string|null
         */
        private function get_payment_method(): ?string
        {
        }
        /**
         * Get the WooCommerce dataLayer content
         *
         * @param array<string, mixed> $data_layer The datalayer content.
         *
         * @return array<string, mixed> The datalayer content
         */
        public function get_datalayer_content(array $data_layer): array
        {
        }
        /**
         * Get the dataLayer data for product pages
         *
         * @param array<string, mixed> $data_layer The datalayer content.
         *
         * @return array<string, mixed> The datalayer content
         */
        public function get_datalayer_content_product_page(array $data_layer): array
        {
        }
        /**
         * Get the dataLayer data for category pages
         *
         * @param array<string, mixed> $data_layer The datalayer content.
         *
         * @return array<string, mixed> The datalayer content
         */
        public function get_datalayer_content_product_category(array $data_layer): array
        {
        }
        /**
         * Get the dataLayer data for product tag pages
         *
         * @param array<string, mixed> $data_layer The datalayer content.
         *
         * @return array<string, mixed> The datalayer content
         */
        public function get_datalayer_content_product_tag(array $data_layer): array
        {
        }
        /**
         * Get the dataLayer data for cart page
         *
         * @param array<string, mixed> $data_layer The datalayer content.
         *
         * @return array<string, mixed> The datalayer content
         */
        public function get_datalayer_content_cart(array $data_layer): array
        {
        }
        /**
         * Get the dataLayer data for checkout page
         *
         * @param array<string, mixed> $data_layer The datalayer content.
         *
         * @return array<string, mixed> The datalayer content
         */
        public function get_datalayer_content_checkout(array $data_layer): array
        {
        }
        /**
         * Get the dataLayer data for order_received page
         *
         * @param array<string, mixed> $data_layer The datalayer content.
         *
         * @return array<string, mixed> The datalayer content
         */
        public function get_datalayer_content_order_received(array $data_layer): array
        {
        }
        /**
         * Whether WooCommerce would show this order to whoever is viewing the page.
         *
         * Mirrors the two checks WooCommerce applies on the order-received endpoint
         * after the order key matches, in the order it applies them: a registered
         * customer's order is only shown to that customer, and a guest order is only
         * shown to a visitor the store can identify. Reading WooCommerce's own
         * filter rather than hardcoding the rule means a store that deliberately
         * relaxes the requirement keeps its tracking, with nothing to configure.
         *
         * @param \WC_Order $order The order being viewed.
         *
         * @return bool
         */
        private function visitor_may_view_order(\WC_Order $order): bool
        {
        }
        /**
         * Whether WooCommerce would ask this visitor to verify the order's email.
         *
         * WooCommerce's own wrapper for this is private, so the nonce handling it
         * performs on a submitted verification form is repeated here before the
         * shared helper is consulted.
         *
         * @param \WC_Order $order The order being viewed.
         *
         * @return bool
         */
        private function guest_should_verify_email(\WC_Order $order): bool
        {
        }
        /**
         * Retrieves purchase event data for the data layer.
         *
         * @param \WC_Order             $order The order.
         * @param array<string, mixed> $data_layer The datalayer content.
         *
         * @return array<string, mixed> The datalayer content.
         */
        public function get_purchase_event(\WC_Order $order, array $data_layer = []): array
        {
        }
        /**
         * Get the permalinkStructure property for the dataLayer
         *
         * @param array<string, mixed> $data_layer The datalayer content.
         *
         * @return array<string, mixed> The datalayer content
         */
        private function get_permalink_structure_property(array $data_layer): array
        {
        }
        /**
         * Get the pages property for the dataLayer
         *
         * @param array<string, mixed> $data_layer The datalayer content.
         *
         * @return array<string, mixed> The datalayer content
         */
        public function get_pages_property(array $data_layer): array
        {
        }
        /**
         * Get cart items.
         *
         * @param string $event_context The event context of the item data.
         *
         * @return array<int, mixed> The cart items.
         */
        public function get_cart_items(string $event_context): array
        {
        }
        /**
         * Get item data.
         *
         * @param \WC_Product           $product An instance of WP_Product.
         * @param array<string, mixed> $additional_item_attributes Any key-value pair that needs to be added to the item data.
         * @param string               $event_context The event context of the item data.
         *
         * @return array<string, mixed> The item data.
         */
        public function get_item_data($product, array $additional_item_attributes = [], string $event_context = ''): array
        {
        }
        /**
         * Get the coupons and discount for an item
         *
         * @param array<int, mixed>    $coupons The coupons.
         * @param array<string, mixed> $item The item.
         *
         * @return array<string, mixed>
         */
        public function get_coupon_discount(array $coupons, array $item): array
        {
        }
        /**
         * Inject the TaxResolver-resolved price into the variations data.
         *
         * WooCommerce ships `display_price` based on `woocommerce_tax_display_shop`.
         * The data layer follows the `integrations.woocommerce_exclude_tax`
         * toggle instead, so the JS variation handler reads `gtmkit_price`.
         *
         * @hook woocommerce_available_variation
         *
         * @param array<string, mixed> $variation_data Variation data passed to JS.
         * @param \WC_Product           $product        The parent variable product.
         * @param \WC_Product           $variation      The variation product object.
         *
         * @return array<string, mixed>
         */
        public function add_variation_tax_resolved_price(array $variation_data, \WC_Product $product, \WC_Product $variation): array
        {
        }
        /**
         * Add-to-cart tracing on single product.
         *
         * The payload rides a hidden span rather than a form field. WooCommerce's
         * Add to Cart + Options block scans everything third parties print into
         * the add-to-cart hooks and, on finding an input, select, textarea, button
         * or form tag, falls back to a plain HTML POST form. That costs the
         * shopper the in-place add and a full page reload, so this markup must
         * stay clear of those five tags.
         *
         * The class is deliberately distinct from the product-list carrier so the
         * page-wide list sweep cannot fold a product page into an impression.
         *
         * @hook woocommerce_after_add_to_cart_button
         *
         * @return void
         */
        public function single_product_add_to_cart_tracking(): void
        {
        }
        /**
         * Add-to-cart tracking on grouped product.
         *
         * @hook woocommerce_grouped_product_list_column_label
         *
         * @param string     $label_value Product label.
         * @param \WC_Product $product The product.
         *
         * @return string The product label string.
         */
        public function grouped_product_add_to_cart_tracking(string $label_value, \WC_Product $product): string
        {
        }
        /**
         * Add-to-cart tracking on product blocks
         *
         * @hook woocommerce_blocks_product_grid_item_html.
         *
         * @param string     $html Product grid item HTML.
         * @param object     $data Product data passed to the template.
         * @param \WC_Product $product Product object.
         *
         * @return string Updated product grid item HTML.
         */
        public function product_block_add_to_cart_tracking(string $html, object $data, \WC_Product $product): string
        {
        }
        /**
         * Generates a hidden <span> element that contains the item data.
         *
         * @param \WC_Product $product Product object.
         * @param string     $item_list_name Name of the list associated with the event.
         * @param int        $index The index of the product in the product list. The first product should have the index no. 1.
         *
         * @return string A hidden <span> element that contains the item data.
         */
        public function get_item_data_tag(\WC_Product $product, string $item_list_name, int $index): string
        {
        }
        /**
         * Add-to-cart tracking in product list loop
         *
         * @hook woocommerce_after_shop_loop_item.
         *
         * @return void
         */
        public function product_list_loop_add_to_cart_tracking(): void
        {
        }
        /**
         * Set list name in WooCommerce loop
         *
         * @hook woocommerce_after_shop_loop_item.
         *
         * @return void
         */
        public function set_list_name_in_woocommerce_loop(): void
        {
        }
        /**
         * Set list name in WooCommerce loop
         *
         * @hook woocommerce_after_shop_loop_item.
         *
         * @param mixed $columns The columns.
         *
         * @return mixed
         */
        public function set_list_name_in_woocommerce_loop_filter($columns)
        {
        }
        /**
         * Set the list name on categories and tags
         *
         * @param mixed $value The product loop start.
         *
         * @return mixed
         */
        public function set_list_name_on_category_and_tag($value)
        {
        }
        /**
         * Add product data to cart item remove link
         *
         * @hook woocommerce_cart_item_remove_link.
         *
         * @param string $woocommerce_cart_item_remove_link The cart item remove link.
         * @param string $cart_item_key The cart item key.
         *
         * @return string The updated cart item remove link containing product data.
         */
        public function cart_item_remove_link(string $woocommerce_cart_item_remove_link, string $cart_item_key): string
        {
        }
        /**
         * Prefix an item ID
         *
         * @param string $item_id The item ID.
         *
         * @return string
         */
        public function prefix_item_id(string $item_id = ''): string
        {
        }
        /**
         * Include customer data
         *
         * Every field describes the shopper who placed the order and is read off
         * the order itself. The browsing session is not consulted: on the
         * order-received page it belongs to whoever opened the link, who is not
         * necessarily the purchaser.
         *
         * @param array<string, mixed> $data_layer The datalayer content.
         * @param \WC_Order             $order The order.
         * @param mixed                $order_value Order value.
         *
         * @return array<string, mixed>
         */
        public function include_customer_data(array $data_layer, \WC_Order $order, $order_value): array
        {
        }
        /**
         * Get order items
         *
         * @param \WC_Order $order The order.
         *
         * @return array<int, mixed>
         */
        private function get_order_items(\WC_Order $order): array
        {
        }
        /**
         * I the current page the custom order received page
         *
         * @param bool $is_order_received_page True when viewing the order received page.
         *
         * @return bool
         */
        public function is_custom_order_received_page(bool $is_order_received_page): bool
        {
        }
    }
    /**
     * WooCommerce block integration.
     */
    final class WooCommerceBlocks
    {
        /**
         * The canonical block names whose presence enqueues the tracking bundle.
         * The filter-block family is matched by prefix separately.
         */
        private const SUPPORTED_BLOCKS = ['woocommerce/cart', 'woocommerce/checkout', 'woocommerce/mini-cart', 'woocommerce/all-products', 'woocommerce/product-collection', 'woocommerce/single-product', 'woocommerce/related-products'];
        /**
         * Prefix that identifies the WooCommerce product-filter block family
         * (Filter by Price, Attribute, Rating, Stock, Active Filters, the
         * filter wrapper, etc.).
         */
        private const FILTER_BLOCK_PREFIX = 'woocommerce/product-filter';
        /**
         * Instance.
         *
         * @var null|WooCommerceBlocks
         */
        private static ?\TLA_Media\GTM_Kit\Integration\WooCommerceBlocks $instance = null;
        /**
         * Plugin options.
         *
         * @var \TLA_Media\GTM_Kit\Options\Options
         */
        private \TLA_Media\GTM_Kit\Options\Options $options;
        /**
         * The WooCommerce integration. Canonical source of the item-data shape.
         *
         * @var WooCommerce
         */
        private \TLA_Media\GTM_Kit\Integration\WooCommerce $woocommerce;
        /**
         * Resolved header/footer template-part contents, memoized per request.
         *
         * Null until the first template-part scan resolves them.
         *
         * @var array<int, string>|null
         */
        private ?array $template_part_contents = null;
        /**
         * Whether a supported block has rendered during this request.
         *
         * @var bool
         */
        private bool $supported_block_rendered = false;
        /**
         * Constructor.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options     $options An instance of Options.
         * @param WooCommerce $woocommerce The WooCommerce integration, used to shape item data.
         */
        public function __construct(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Integration\WooCommerce $woocommerce)
        {
        }
        /**
         * Get instance.
         */
        public static function instance(): \TLA_Media\GTM_Kit\Integration\WooCommerceBlocks
        {
        }
        /**
         * Register the block integration.
         *
         * @param \TLA_Media\GTM_Kit\Options\Options     $options An instance of Options.
         * @param WooCommerce $woocommerce The WooCommerce integration.
         */
        public static function register(\TLA_Media\GTM_Kit\Options\Options $options, \TLA_Media\GTM_Kit\Integration\WooCommerce $woocommerce): void
        {
        }
        /**
         * The list name stamped onto items for each server-rendered block grid.
         *
         * @var array<string, string>
         */
        private const LIST_BLOCKS = ['woocommerce/product-collection' => 'Product Collection', 'woocommerce/related-products' => 'Related products'];
        /**
         * The block names whose presence on a page enqueues the tracking bundle.
         *
         * Third parties can extend the trigger list (e.g. a custom block wrapping
         * Product Collection) via the `gtmkit_blocks_supported` filter.
         *
         * @return array<int, string>
         */
        public function get_supported_blocks(): array
        {
        }
        /**
         * Enqueue the block tracking bundle when a supported block renders.
         *
         * Detection is page-content driven, never visitor driven, so the emitted
         * markup is identical for every visitor on a given page (full-page-cache
         * safe). The bundle itself decides at runtime which subscribers to mount.
         */
        public function enqueue_block_assets(): void
        {
        }
        /**
         * Note a supported block as it renders, and load the bundle for it when
         * the page scan in {@see self::enqueue_block_assets()} has already run
         * without finding it.
         *
         * The scan reads post content and, on block themes, the WooCommerce routes
         * and header/footer template parts. A block placed anywhere else, such as
         * a classic theme's widget area or a template that renders blocks from
         * PHP, only shows up here. A script enqueued after the page head is
         * printed in the footer. Block themes render the template before the
         * head, so there the flag reaches the scan instead.
         *
         * Detection still depends only on what the page renders, never on the
         * visitor, so the markup stays full-page-cache safe.
         *
         * @hook render_block
         *
         * @param string               $block_content The rendered block HTML.
         * @param array<string, mixed> $block         The parsed block.
         *
         * @return string The block HTML, unchanged.
         */
        public function track_rendered_block(string $block_content, array $block): string
        {
        }
        /**
         * Whether a block name triggers the tracking bundle.
         *
         * @param string $block_name The block name.
         */
        private function is_supported_block_name(string $block_name): bool
        {
        }
        /**
         * Enqueue the block tracking bundle and its Store API settings.
         */
        private function enqueue_bundle(): void
        {
        }
        /**
         * Whether the current page renders any supported block.
         *
         * On block (FSE) themes WooCommerce renders Cart, Checkout, Mini Cart,
         * Product Collection and Related Products from block templates and
         * template parts rather than post content, so a post-content-only check
         * misses them. Detection is therefore layered, cheapest-first with
         * short-circuit:
         *
         * 1. Post content: `has_block()` (also matches blocks nested in
         *    Group/Columns/Query wrappers) plus the product-filter family.
         * 2. WooCommerce route safety net (block themes only): the canonical
         *    Cart/Checkout/shop/product/taxonomy routes, which is what reliably
         *    covers FSE storefronts including archives that have no post ID. A
         *    classic theme renders those routes from PHP templates, so the route
         *    alone says nothing about blocks there.
         * 3. Site-wide header/footer template parts (block themes only), where
         *    the Mini Cart (and any supported block) is typically placed.
         *
         * Blocks outside all three, such as a Mini Cart in a classic theme's
         * widget area, are caught as they render by {@see self::track_rendered_block()}.
         */
        public function page_has_supported_blocks(): bool
        {
        }
        /**
         * Whether the current page renders the Cart or Checkout block.
         *
         * Block-built (FSE) Cart/Checkout must be distinguished from the classic
         * shortcode/legacy variants: only on the former should the block bundle
         * take over and the classic scripts step aside. The route conditionals
         * (`is_cart()`/`is_checkout()`) are true for both, so they cannot tell
         * them apart. Instead, read the configured Cart/Checkout page's content:
         * on a block-built store WooCommerce stores the Cart/Checkout block there
         * (regardless of theme), while a classic store stores the shortcode. This
         * stays correct even when the global post is not the resolved page.
         */
        public function has_cart_or_checkout_block(): bool
        {
        }
        /**
         * Whether the current request is a WooCommerce route whose configured page
         * stores the given block in its content.
         *
         * The route conditional confirms we are on that page; `has_block()` reads
         * the configured page's content by ID, which holds the Cart/Checkout block
         * on block-built stores and the shortcode on classic stores. Both are
         * `function_exists()`-guarded so the helper is safe without WooCommerce.
         *
         * @param string $conditional The WooCommerce route conditional (e.g. `is_checkout`).
         * @param string $page_slug   The WooCommerce page slug (e.g. `checkout`).
         * @param string $block_name  The block to look for on that page.
         */
        private function route_renders_block(string $conditional, string $page_slug, string $block_name): bool
        {
        }
        /**
         * Resolve a WooCommerce page ID by slug, guarded for when WooCommerce is
         * not booted.
         *
         * @param string $resolver  The WooCommerce page-id resolver function name.
         * @param string $page_slug The WooCommerce page slug (e.g. `cart`, `checkout`).
         */
        private function wc_page_id(string $resolver, string $page_slug): int
        {
        }
        /**
         * Whether the current request is a canonical WooCommerce route.
         *
         * Theme-independent and reliable for the canonical WC routes, including
         * archives (shop, product category/tag) that have no post ID for a
         * content scan to read. Each conditional is guarded with
         * `function_exists()` so the helper is safe when WooCommerce is not
         * booted (the unit tests run without it).
         */
        private function is_woocommerce_route(): bool
        {
        }
        /**
         * Whether a WooCommerce route conditional is defined and currently true.
         *
         * Guarded with `function_exists()` so the helper is safe when WooCommerce
         * is not booted (the conditionals only exist once WC has loaded).
         *
         * @param string $conditional The WooCommerce conditional function name.
         */
        private function wc_route_matches(string $conditional): bool
        {
        }
        /**
         * Whether a supported block lives in the site-wide header/footer parts.
         *
         * Block themes commonly place site-wide WooCommerce blocks (overwhelmingly
         * the Mini Cart) in the `header` and `footer` template parts, which the
         * post-content scan never sees. Resolved through stable WP core only
         * (`wp_is_block_theme()`, `get_stylesheet()`, `get_block_template()`,
         * `has_block()`); no dependency on WooCommerce internals. Blocks injected
         * via the Block Hooks API are folded in by {@see self::get_template_part_contents()}.
         *
         * @param array<int, string> $supported The supported block names to match.
         */
        private function has_supported_block_in_template_parts(array $supported): bool
        {
        }
        /**
         * Resolve the header/footer template-part contents once per request.
         *
         * @return array<int, string>
         */
        private function get_template_part_contents(): array
        {
        }
        /**
         * Whether the current post's content renders any product-filter block.
         *
         * Matches the product-filter family by prefix across the full block tree,
         * so filter blocks nested inside Group/Columns/Query wrappers are found,
         * not just top-level ones.
         */
        public function has_filter_block(): bool
        {
        }
        /**
         * Whether a content string renders any product-filter block.
         *
         * @param string $content Serialized block content.
         */
        private function content_has_filter_block(string $content): bool
        {
        }
        /**
         * Flatten a parsed block tree to a list of block names.
         *
         * @param array<int, array<string, mixed>> $blocks Parsed blocks.
         *
         * @return array<int, string>
         */
        private function flatten_block_names(array $blocks): array
        {
        }
        /**
         * The current post's content, or an empty string when there is no post.
         */
        private function get_post_content(): string
        {
        }
        /**
         * Parse the WooCommerce blocks present in a post's content.
         *
         * @param int|null $post_id The post ID.
         *
         * @return array<int, string> The WooCommerce block names with the `woocommerce/` prefix stripped.
         */
        public function has_woocommerce_blocks(?int $post_id): array
        {
        }
        /**
         * The WooCommerce blocks present in the current post's content.
         *
         * @return array<int, string>
         */
        public function get_woocommerce_blocks(): array
        {
        }
        /**
         * Register the GTM Kit item payload into the Store API product and cart endpoints.
         */
        public function extend_store(): void
        {
        }
        /**
         * GTM Kit data for the Store API product endpoint.
         *
         * @param \WC_Product $product Current product.
         *
         * @return array<string, mixed>
         */
        public function extend_product_data($product): array
        {
        }
        /**
         * GTM Kit data for the Store API cart-item endpoint.
         *
         * @param array<string, mixed> $cart_item Cart item data.
         *
         * @return array<string, mixed>
         */
        public function extend_cart_data(array $cart_item): array
        {
        }
        /**
         * GTM Kit schema registered into the Store API product and cart-item endpoints.
         *
         * @return array<string, mixed>
         */
        public function extend_product_schema(): array
        {
        }
        /**
         * Inject the GTM Kit item payload into server-rendered block product grids.
         *
         * Product Collection and Related Products render each product as a list
         * item carrying a `post-{ID}` body class; the Single Product block stores
         * its product id in the block attributes. A hidden `gtmkit_block_product_data`
         * span is injected per product so the block bundle can read GA4 item data.
         *
         * WooCommerce re-fires the classic archive loop hooks inside these blocks
         * (see its ArchiveProductTemplatesCompatibility), which is how plugins with
         * only classic hooks keep working on block themes. GTM Kit has both paths,
         * so it would otherwise stamp every product twice and report every list
         * view and add-to-cart twice. The block path owns anything a block
         * rendered, because it is the only one that re-fires when a collection is
         * paginated or filtered without a page load, so the classic carrier is
         * stripped from the content this method claims.
         *
         * @hook render_block
         *
         * @param string               $block_content The rendered block HTML.
         * @param array<string, mixed> $block         The parsed block.
         *
         * @return string
         */
        public function inject_block_product_data(string $block_content, array $block): string
        {
        }
        /**
         * Remove the classic loop's carrier spans from block-rendered content.
         *
         * Matches the classic carrier class exactly, so the block carrier
         * (`gtmkit_block_product_data`, which contains the classic class name as a
         * substring) is never touched.
         *
         * @param string $block_content The rendered block HTML.
         *
         * @return string
         */
        private function strip_classic_product_data(string $block_content): string
        {
        }
        /**
         * Resolve the list name for a server-rendered block grid.
         *
         * A Product Collection that inherits the template query *is* the shop,
         * category or tag archive, so it reports the same list names the classic
         * loop reports on those routes. Curated collections keep the block's own
         * name. Without this, moving a store to a block theme would silently
         * rename its archive lists in GA4.
         *
         * @param string               $block_name The block name.
         * @param array<string, mixed> $block      The parsed block.
         *
         * @return string
         */
        private function resolve_list_name(string $block_name, array $block): string
        {
        }
        /**
         * Inject the item payload into a Single Product block.
         *
         * @param string               $block_content The rendered block HTML.
         * @param array<string, mixed> $block         The parsed block.
         *
         * @return string
         */
        private function inject_single_product_data(string $block_content, array $block): string
        {
        }
        /**
         * Build the hidden span that carries a product's GA4 item data.
         *
         * @param \WC_Product $product   The product.
         * @param string     $list_name The list name to stamp on the item (empty for single product).
         *
         * @return string
         */
        private function build_block_product_span(\WC_Product $product, string $list_name): string
        {
        }
        /**
         * Resolve the Store API schema extender on demand.
         *
         * Resolved lazily (rather than in the constructor) so the block
         * detection helpers can be exercised without booting the full Store
         * API container.
         */
        private function extend(): \Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema
        {
        }
        /**
         * The shared Util instance, borrowed from the WooCommerce integration.
         */
        private function util(): \TLA_Media\GTM_Kit\Common\Util
        {
        }
    }
}
namespace TLA_Media\GTM_Kit\Options {
    /**
     * Option Keys - Centralized definition of all GTM Kit options
     *
     * Replaces magic strings throughout the codebase.
     * Provides IDE autocomplete and refactoring support.
     */
    final class OptionKeys
    {
        // General Options.
        public const GENERAL_GTM_ID = 'general.gtm_id';
        public const GENERAL_SCRIPT_IMPLEMENTATION = 'general.script_implementation';
        public const GENERAL_NOSCRIPT_IMPLEMENTATION = 'general.noscript_implementation';
        public const GENERAL_CONTAINER_ACTIVE = 'general.container_active';
        public const GENERAL_LOAD_ON_NON_PRODUCTION = 'general.load_on_non_production';
        public const GENERAL_EXCLUDED_URL_PATTERNS = 'general.excluded_url_patterns';
        public const GENERAL_SGTM_DOMAIN = 'general.sgtm_domain';
        public const GENERAL_SGTM_STAPE_ISSUED_LOADER = 'general.sgtm_stape_issued_loader';
        public const GENERAL_GOOGLE_TAG_GATEWAY = 'general.google_tag_gateway';
        public const GENERAL_CONSOLE_LOG = 'general.console_log';
        public const GENERAL_DEBUG_LOG = 'general.debug_log';
        public const GENERAL_GTM_AUTH = 'general.gtm_auth';
        public const GENERAL_GTM_PREVIEW = 'general.gtm_preview';
        public const GENERAL_DATALAYER_PAGE_TYPE = 'general.datalayer_page_type';
        public const GENERAL_EXCLUDE_USER_ROLES = 'general.exclude_user_roles';
        // Google Consent Mode v2 options.
        public const GENERAL_GCM_DEFAULT_SETTINGS = 'general.gcm_default_settings';
        public const GENERAL_GCM_AD_PERSONALIZATION = 'general.gcm_ad_personalization';
        public const GENERAL_GCM_AD_STORAGE = 'general.gcm_ad_storage';
        public const GENERAL_GCM_AD_USER_DATA = 'general.gcm_ad_user_data';
        public const GENERAL_GCM_ANALYTICS_STORAGE = 'general.gcm_analytics_storage';
        public const GENERAL_GCM_PERSONALIZATION_STORAGE = 'general.gcm_personalization_storage';
        public const GENERAL_GCM_FUNCTIONALITY_STORAGE = 'general.gcm_functionality_storage';
        public const GENERAL_GCM_SECURITY_STORAGE = 'general.gcm_security_storage';
        public const GENERAL_GCM_ADS_DATA_REDACTION = 'general.gcm_ads_data_redaction';
        public const GENERAL_GCM_URL_PASSTHROUGH = 'general.gcm_url_passthrough';
        public const GENERAL_GCM_WAIT_FOR_UPDATE = 'general.gcm_wait_for_update';
        public const GENERAL_GCM_REGION = 'general.gcm_region';
        // Script gating.
        public const GENERAL_CONSENT_GATING_MODE = 'general.consent_gating_mode';
        // Engagement events.
        public const GENERAL_ENGAGEMENT_EVENT_LOGIN_ENABLED = 'general.engagement_event_login_enabled';
        public const GENERAL_ENGAGEMENT_EVENT_SIGNUP_ENABLED = 'general.engagement_event_signup_enabled';
        public const GENERAL_ENGAGEMENT_EVENT_SEARCH_ENABLED = 'general.engagement_event_search_enabled';
        public const GENERAL_ENGAGEMENT_EVENT_GENERATE_LEAD_ENABLED = 'general.engagement_event_generate_lead_enabled';
        // CMP script attribute support.
        public const GENERAL_CMP_SCRIPT_ATTRIBUTES = 'general.cmp_script_attributes';
        // Integration Options.
        public const INTEGRATIONS_WOOCOMMERCE_INTEGRATION = 'integrations.woocommerce_integration';
        public const INTEGRATIONS_WOOCOMMERCE_SHIPPING_INFO = 'integrations.woocommerce_shipping_info';
        public const INTEGRATIONS_WOOCOMMERCE_PAYMENT_INFO = 'integrations.woocommerce_payment_info';
        public const INTEGRATIONS_WOOCOMMERCE_VARIABLE_PRODUCT_TRACKING = 'integrations.woocommerce_variable_product_tracking';
        public const INTEGRATIONS_WOOCOMMERCE_VIEW_ITEM_LIST_LIMIT = 'integrations.woocommerce_view_item_list_limit';
        public const INTEGRATIONS_WOOCOMMERCE_DEBUG_TRACK_PURCHASE = 'integrations.woocommerce_debug_track_purchase';
        public const INTEGRATIONS_WOOCOMMERCE_EXCLUDE_TAX = 'integrations.woocommerce_exclude_tax';
        public const INTEGRATIONS_CF7_LOAD_JS = 'integrations.cf7_load_js';
        public const INTEGRATIONS_CF7_INTEGRATION = 'integrations.cf7_integration';
        public const INTEGRATIONS_EDD_DEBUG_TRACK_PURCHASE = 'integrations.edd_debug_track_purchase';
        public const INTEGRATIONS_EDD_INTEGRATION = 'integrations.edd_integration';
        // Premium Options.
        public const PREMIUM_ADDON_INSTALLED = 'premium.addon_installed';
        public const PREMIUM_PREMIUM_INSTALLED = 'premium.premium_installed';
        public const PREMIUM_WOO_ADDON_INSTALLED = 'premium.woo_addon_installed';
        // Misc Options.
        public const MISC_AUTO_UPDATE = 'misc.auto_update';
        /**
         * Parse option key into group and key parts
         *
         * @param string $option_key Full option key (e.g., 'general.gtm_id').
         * @return array{group: string, key: string}
         */
        public static function parse(string $option_key): array
        {
        }
        /**
         * Get all option keys
         *
         * @return array<string>
         */
        public static function get_all(): array
        {
        }
        /**
         * Check if an option key exists
         *
         * @param string $option_key Full option key to check.
         * @return bool
         */
        public static function exists(string $option_key): bool
        {
        }
    }
    /**
     * Option Schema - Defines validation rules, types, and defaults
     *
     * Single source of truth for all option metadata.
     */
    final class OptionSchema
    {
        /**
         * Script gating mode: GTM loads on every page (current behavior).
         *
         * @var string
         */
        public const GATING_MODE_ALWAYS_LOAD = 'always_load';
        /**
         * Script gating mode: GTM loads but starts in denied state via Consent Mode.
         * Same on-page emission as always_load; future event-deferral features may
         * change runtime behavior under this mode.
         *
         * @var string
         */
        public const GATING_MODE_WEAK_BLOCK = 'weak_block';
        /**
         * Script gating mode: GTM is masked as text/plain and only executes after
         * consent for the required categories has been granted.
         *
         * @var string
         */
        public const GATING_MODE_STRONG_BLOCK = 'strong_block';
        /**
         * All valid values for the script gating mode option, in canonical order.
         *
         * @var array<int, string>
         */
        public const GATING_MODES = [self::GATING_MODE_ALWAYS_LOAD, self::GATING_MODE_WEAK_BLOCK, self::GATING_MODE_STRONG_BLOCK];
        /**
         * Allowed-character class for the custom CMP attribute name. HTML5
         * permits a wider set, but real-world CMP-blocking attributes use
         * `data-*` patterns with this safe subset; staying restrictive avoids
         * escaping bugs.
         *
         * @var string
         */
        public const CMP_CUSTOM_NAME_PATTERN = '/[^a-zA-Z0-9_-]/';
        /**
         * URL-exclusion pattern mode: shell-style wildcards. `*` matches any
         * run of characters including `/`; `?` matches a single character;
         * all other regex metacharacters are escaped.
         *
         * @var string
         */
        public const URL_EXCLUSION_MODE_GLOB = 'glob';
        /**
         * URL-exclusion pattern mode: raw PCRE regular expression. Run with a
         * `~` delimiter and the `i` flag; bad patterns fail open (no match).
         *
         * @var string
         */
        public const URL_EXCLUSION_MODE_REGEX = 'regex';
        /**
         * Hard cap on the number of URL-exclusion patterns stored. Caps the
         * worst-case per-request matching cost.
         *
         * @var int
         */
        public const URL_EXCLUSION_MAX_PATTERNS = 100;
        /**
         * Hard cap on the length of a single URL-exclusion pattern. Long
         * patterns are a poor signal and amplify the ReDoS surface even with
         * PHP's backtrack limit in place.
         *
         * @var int
         */
        public const URL_EXCLUSION_MAX_PATTERN_LENGTH = 500;
        /**
         * Default value for the cmp_script_attributes option on fresh installs
         * with no detected CMP. Activation overrides for fresh installs where
         * a CMP plugin is detected; the upgrade routine overrides to keep
         * Cookiebot on for upgraders to preserve the previously hardcoded
         * behavior.
         *
         * @var array<string, mixed>
         */
        public const CMP_SCRIPT_ATTRIBUTES_DEFAULT = ['cookiebot' => false, 'iubenda' => false, 'cookieyes' => false, 'custom' => ['name' => '', 'value' => '']];
        /**
         * Get schema for all options
         *
         * @return array<string, array<string, mixed>>
         */
        public static function get_schema(): array
        {
        }
        /**
         * Get schema for a specific option
         *
         * @param string $group Option group.
         * @param string $key Option key.
         * @return array<string, mixed>|null
         */
        public static function get_option_schema(string $group, string $key): ?array
        {
        }
        /**
         * General options schema
         *
         * @return array<string, array<string, mixed>>
         */
        private static function get_general_schema(): array
        {
        }
        /**
         * Integration options schema
         *
         * @return array<string, array<string, mixed>>
         */
        private static function get_integrations_schema(): array
        {
        }
        /**
         * Premium options schema
         *
         * @return array<string, array<string, mixed>>
         */
        private static function get_premium_schema(): array
        {
        }
        /**
         * Misc options schema
         *
         * @return array<string, array<string, mixed>>
         */
        private static function get_misc_schema(): array
        {
        }
        // === Validation Methods ===
        /**
         * Validate GTM ID format
         *
         * @param mixed $value Value to validate.
         * @return bool
         */
        public static function validate_gtm_id($value): bool
        {
        }
        /**
         * Validate domain format
         *
         * @param mixed $value Value to validate.
         * @return bool
         */
        public static function validate_domain($value): bool
        {
        }
        /**
         * Validate value is in range
         *
         * @param mixed $value Value to validate.
         * @param int   $min Minimum value.
         * @param int   $max Maximum value.
         * @return bool
         */
        public static function validate_in_range($value, int $min, int $max): bool
        {
        }
        /**
         * Validate value is one of an allowed set.
         *
         * @param mixed         $value          Value to validate.
         * @param array<string> $allowed_values Allowed values for the option.
         * @return bool
         */
        public static function validate_enum($value, array $allowed_values): bool
        {
        }
        /**
         * Regular expression for Consent Mode v2 region codes.
         *
         * ISO 3166-1 alpha-2 with optional ISO 3166-2 subdivision, per Google's
         * spec. Examples: `DK`, `DE-BY`, `US-CA`.
         */
        public const REGION_CODE_PATTERN = '/^[A-Z]{2}(-[A-Z0-9]{1,3})?$/';
        /**
         * Sanitize an array of region codes.
         *
         * Trims, uppercases, and drops any entry that is not a valid
         * ISO 3166-1 alpha-2 code with an optional ISO 3166-2 subdivision.
         *
         * @param mixed $value Raw value from the request.
         * @return array<int, string> Sanitized, de-duplicated, zero-indexed list.
         */
        public static function sanitize_region_codes($value): array
        {
        }
        /**
         * Validate an array of region codes.
         *
         * Accepts any array; invalid entries are dropped by
         * {@see self::sanitize_region_codes()}. Rejects non-array values so the
         * save pipeline fails fast rather than silently storing garbage.
         *
         * @param mixed $value Value to validate.
         * @return bool
         */
        public static function validate_region_codes($value): bool
        {
        }
        /**
         * Sanitize the cmp_script_attributes value to the canonical structure.
         *
         * Normalizes the toggles to bools, the custom slot to an array with
         * `name` and `value` strings, and strips disallowed characters from
         * the custom name so a malformed payload from the admin REST endpoint
         * cannot leak unsafe attributes into the rendered <script> tag.
         *
         * @param mixed $value Raw value from the request.
         * @return array<string, mixed>
         */
        public static function sanitize_cmp_script_attributes($value): array
        {
        }
        /**
         * Validate the cmp_script_attributes value.
         *
         * Accepts any array; structure is normalized by
         * {@see self::sanitize_cmp_script_attributes()}. Rejects non-array
         * values so the save pipeline fails fast.
         *
         * @param mixed $value Value to validate.
         * @return bool
         */
        public static function validate_cmp_script_attributes($value): bool
        {
        }
        /**
         * Sanitize the excluded_url_patterns option to a list of
         * `{pattern, mode}` records.
         *
         * Drops entries with an empty pattern, trims each pattern, coerces
         * the mode to `glob` unless explicitly `regex`, and caps both the
         * list length and per-pattern length to bound the worst-case match
         * cost per request.
         *
         * @param mixed $value Raw value from the request.
         * @return array<int, array{pattern: string, mode: string}>
         */
        public static function sanitize_excluded_url_patterns($value): array
        {
        }
        /**
         * Reduce a glob pattern pasted as a full URL to just its path.
         *
         * `https://example.test/foo/*`, `http://example.test/foo/*`, and
         * `//example.test/foo/*` all collapse to `/foo/*`. Inputs that do
         * not carry a host (`/foo/*`, `foo/*`, `*`) are returned unchanged.
         *
         * @param string $pattern Raw glob pattern as entered by the admin.
         * @return string
         */
        private static function extract_path_from_url_pattern(string $pattern): string
        {
        }
        /**
         * Validate the excluded_url_patterns option.
         *
         * Rejects non-array values so the save pipeline fails fast. Rejects
         * regex entries whose pattern cannot be compiled, surfacing the
         * problem to the admin rather than silently dropping the row.
         *
         * @param mixed $value Value to validate.
         * @return bool
         */
        public static function validate_excluded_url_patterns($value): bool
        {
        }
        /**
         * Check that a regex pattern compiles under the runtime delimiter
         * and flags used by the URL-exclusion matcher.
         *
         * Suppresses the compile warning because the goal here is to detect
         * a bad pattern at save time, not to log it.
         *
         * @param string $pattern Raw pattern as entered by the admin.
         * @return bool True when the pattern compiles cleanly.
         */
        public static function is_valid_regex_pattern(string $pattern): bool
        {
        }
    }
    /**
     * Option Validator
     *
     * Validates option values against schema rules.
     */
    final class OptionValidator
    {
        /**
         * Validate option value
         *
         * @param string $group Option group.
         * @param string $key Option key.
         * @param mixed  $value Value to validate.
         * @return ValidationResult
         */
        public function validate(string $group, string $key, $value): \TLA_Media\GTM_Kit\Options\ValidationResult
        {
        }
        /**
         * Validate type
         *
         * @param mixed  $value Value to validate.
         * @param string $expected_type Expected type.
         * @param string $key Option key (for error message).
         * @return ValidationResult
         */
        private function validate_type($value, string $expected_type, string $key): \TLA_Media\GTM_Kit\Options\ValidationResult
        {
        }
        /**
         * Validate all options in a group
         *
         * @param array<string, mixed> $options Options by group.
         * @return array<string, ValidationResult> Results keyed by "group.key".
         */
        public function validate_all(array $options): array
        {
        }
    }
    /**
     * Options
     */
    final class Options
    {
        /**
         * The option_name in wp_options table.
         *
         * @var string
         */
        const OPTION_NAME = 'gtmkit';
        /**
         * All the options.
         *
         * @var array<string, mixed>
         */
        private array $options;
        /**
         * Processor registry
         *
         * @var \TLA_Media\GTM_Kit\Options\Processor\OptionProcessorRegistry
         */
        private \TLA_Media\GTM_Kit\Options\Processor\OptionProcessorRegistry $processor_registry;
        /**
         * Validator
         *
         * @var OptionValidator
         */
        private \TLA_Media\GTM_Kit\Options\OptionValidator $validator;
        /**
        
        	/**
        * Construct
        */
        public function __construct()
        {
        }
        /**
         * Initialize options
         *
         * @deprecated Use OptionsFactory::get_instance() instead
         * @return Options
         * @example Options::init()->get('general', 'gtm_id');
         */
        public static function init(): self
        {
        }
        /**
         * Create new instance (for DI)
         *
         * @return Options
         */
        public static function create(): self
        {
        }
        /**
         * Pre update option
         *
         * @param mixed $new_value The new value.
         * @param mixed $old_value The old value.
         *
         * @return array<string, mixed>|null
         */
        public function pre_update_option($new_value, $old_value): ?array
        {
        }
        /**
         * The default options.
         *
         * @deprecated Use OptionSchema::get_schema() instead
         * @return array<string, mixed>
         */
        public static function get_defaults(): array
        {
        }
        /**
         * Get options by a group and a key.
         *
         * @param string $group The option group.
         * @param string $key The option key.
         * @param bool   $strip_slashes If the slashes should be stripped from string values.
         *
         * @return mixed|null Null if value doesn't exist anywhere: in constants, in DB, in a map. So it's completely custom or a typo.
         * @example Options::init()->get( 'general', 'gtm_id' ).
         */
        public function get(string $group, string $key, bool $strip_slashes = true)
        {
        }
        /**
         * Is overriding options with constants enabled or not.
         *
         * @return bool
         */
        public function is_const_enabled(): bool
        {
        }
        /**
         * Get default value for a key
         *
         * @param string $group The option group.
         * @param string $key The option key.
         *
         * @return array<string, mixed>|null
         */
        protected function get_default_key_value(string $group, string $key): ?array
        {
        }
        /**
         * Is constant defined.
         *
         * @param string $group The option group.
         * @param string $key The option key.
         *
         * @return bool
         */
        public function is_const_defined(string $group, string $key): bool
        {
        }
        /**
         * Set plugin options.
         *
         * @param array<string, mixed> $options Plugin options.
         * @param bool                 $first_install Add option on first install.
         * @param bool                 $overwrite_existing Overwrite existing settings or merge.
         */
        public function set(array $options, bool $first_install = false, bool $overwrite_existing = true): void
        {
        }
        /**
         * Set single option.
         *
         * @param string $group Option group.
         * @param string $key Option key.
         * @param mixed  $value Option value.
         */
        public function set_option(string $group, string $key, $value): void
        {
        }
        /**
         * Clear the cache
         *
         * @return void
         */
        private function clear_cache(): void
        {
        }
        /**
         * Process the plugin options.
         *
         * @param array<string, mixed> $options The options array.
         *
         * @return array<string, mixed>
         */
        private function process_options(array $options): array
        {
        }
        /**
         * Run after_save hooks for changed options
         *
         * @param array<string, mixed> $new_options New options.
         * @param array<string, mixed> $old_options Old options.
         * @return void
         */
        private function run_after_save_hooks(array $new_options, array $old_options): void
        {
        }
        /**
         * Coerce value to expected type
         *
         * @param mixed  $value Value to coerce.
         * @param string $type Expected type.
         * @return mixed Coerced value.
         */
        private function coerce_type($value, string $type)
        {
        }
        /**
         * Merge recursively, including a proper substitution of values in sub-arrays when keys are the same.
         *
         * @return array<string, mixed>
         */
        public static function array_merge_recursive(): array
        {
        }
        /**
         * Read the stored options the way the next request will find them.
         *
         * With a persistent object cache, this request's own copy can hold values
         * the cache server never received, so the read is forced from the cache
         * server. The options are autoloaded, so they live in its `alloptions`
         * entry. An option the cache does not hold at all is no sign of a stale
         * copy, since the next request will load it from the database. Without a
         * persistent cache the next request reads the database, and the copy
         * re-read after the last save already shows whether the database kept it.
         *
         * @return array<string, mixed> The stored options, unfiltered by constants or read filters.
         */
        public function get_persisted(): array
        {
        }
        /**
         * Get all the options, but without stripping the slashes.
         *
         * @return array<string, mixed>
         */
        public function get_all_raw(): array
        {
        }
    }
    /**
     * Options Factory
     *
     * Manages Options instance creation and singleton.
     */
    final class OptionsFactory
    {
        /**
         * Singleton instance
         *
         * @var Options|null
         */
        private static ?\TLA_Media\GTM_Kit\Options\Options $instance = null;
        /**
         * Get a singleton instance
         *
         * @return Options
         */
        public static function get_instance(): \TLA_Media\GTM_Kit\Options\Options
        {
        }
        /**
         * Create a new instance (for testing)
         *
         * @return Options
         */
        public static function create(): \TLA_Media\GTM_Kit\Options\Options
        {
        }
        /**
         * Reset singleton (for testing)
         *
         * @return void
         */
        public static function reset(): void
        {
        }
    }
}
namespace TLA_Media\GTM_Kit\Options\Processor {
    /**
     * Option Processor Interface
     *
     * Processors handle business logic for specific options.
     */
    interface OptionProcessorInterface
    {
        /**
         * Process option value before storage
         *
         * @param mixed $value New value.
         * @param mixed $old_value Previous value (if any).
         * @return mixed Processed value.
         */
        public function process($value, $old_value);
        /**
         * Handle side effects after the option is stored
         *
         * @param mixed $value New value.
         * @param mixed $old_value Previous value.
         * @return void
         */
        public function after_save($value, $old_value): void;
    }
    /**
     * Auto Update Processor
     *
     * Handles WordPress auto-update side effects.
     */
    final class AutoUpdateProcessor implements \TLA_Media\GTM_Kit\Options\Processor\OptionProcessorInterface
    {
        /**
         * Process auto update value
         *
         * @param mixed $value New value.
         * @param mixed $old_value Previous value.
         * @return bool Processed value.
         */
        public function process($value, $old_value): bool
        {
        }
        /**
         * Handle side effects after save
         *
         * @param mixed $value New value.
         * @param mixed $old_value Previous value.
         * @return void
         */
        public function after_save($value, $old_value): void
        {
        }
    }
    /**
     * Domain Processor
     *
     * Extracts and normalizes domain from URLs.
     */
    final class DomainProcessor implements \TLA_Media\GTM_Kit\Options\Processor\OptionProcessorInterface
    {
        /**
         * Process domain value
         *
         * @param mixed $value New value.
         * @param mixed $old_value Previous value.
         * @return string Processed value.
         */
        public function process($value, $old_value): string
        {
        }
        /**
         * Handle side effects after save
         *
         * @param mixed $value New value.
         * @param mixed $old_value Previous value.
         * @return void
         */
        public function after_save($value, $old_value): void
        {
        }
    }
    /**
     * Excluded URL Patterns Processor
     *
     * Normalizes the `excluded_url_patterns` array before storage by
     * delegating to {@see OptionSchema::sanitize_excluded_url_patterns()}.
     */
    final class ExcludedUrlPatternsProcessor implements \TLA_Media\GTM_Kit\Options\Processor\OptionProcessorInterface
    {
        /**
         * Process the excluded URL patterns value.
         *
         * @param mixed $value New value.
         * @param mixed $old_value Previous value.
         * @return array<int, array{pattern: string, mode: string}>
         */
        public function process($value, $old_value): array
        {
        }
        /**
         * No-op after_save hook.
         *
         * @param mixed $value New value.
         * @param mixed $old_value Previous value.
         * @return void
         */
        public function after_save($value, $old_value): void
        {
        }
    }
    /**
     * GTM ID Processor
     *
     * Sanitizes and validates GTM Container ID.
     */
    final class GTMIdProcessor implements \TLA_Media\GTM_Kit\Options\Processor\OptionProcessorInterface
    {
        /**
         * Process GTM ID value
         *
         * @param mixed $value New value.
         * @param mixed $old_value Previous value.
         * @return string Processed value.
         */
        public function process($value, $old_value): string
        {
        }
        /**
         * Handle side effects after save
         *
         * @param mixed $value New value.
         * @param mixed $old_value Previous value.
         * @return void
         */
        public function after_save($value, $old_value): void
        {
        }
    }
    /**
     * A processor whose outcome depends on other options in the same save.
     *
     * The registry hands such a processor the whole set of options being saved, so
     * it judges a value against the save it belongs to rather than against the
     * stored options that save is about to replace.
     */
    interface OptionsAwareProcessorInterface extends \TLA_Media\GTM_Kit\Options\Processor\OptionProcessorInterface
    {
        /**
         * Process a value in the context of the options being saved with it.
         *
         * @param mixed                $value New value.
         * @param mixed                $old_value Previous value.
         * @param array<string, mixed> $options The options being saved.
         *
         * @return mixed Processed value.
         */
        public function process_with_options($value, $old_value, array $options);
    }
    /**
     * Google tag gateway processor.
     *
     * Guards the moment the gateway is switched on. Serving the container from
     * this site's own origin only works when the proxy is reachable and the
     * server can reach the gateway service, so switching it on without those
     * being true would replace working tracking with none.
     *
     * The check runs on the transition only. An already-enabled setting is left
     * alone, because a later failure is handled at serving time by falling back
     * to the standard loader and telling the site owner, which keeps tracking up.
     * Re-checking on every save would instead let an unrelated settings change
     * switch the gateway off during a passing network blip.
     *
     * The settings screen asks {@see self::refusal()} before it saves, and tells
     * the site owner why a switch-on was refused without writing anything. Here a
     * refusal coerces the value instead, so a save that reaches this point by
     * another route, such as an import, still lands its other settings.
     */
    final class GoogleTagGatewayProcessor implements \TLA_Media\GTM_Kit\Options\Processor\OptionsAwareProcessorInterface
    {
        /**
         * Refused because a custom server-side tagging domain is set.
         *
         * @var string
         */
        public const REFUSED_SGTM_DOMAIN = 'sgtm_domain';
        /**
         * Refused because the server cannot reach the gateway service.
         *
         * @var string
         */
        public const REFUSED_SERVICE = 'service';
        /**
         * Refused because the proxy on this site does not serve the tag.
         *
         * @var string
         */
        public const REFUSED_SCRIPT = 'script';
        /**
         * Process the gateway setting.
         *
         * @param mixed $value New value.
         * @param mixed $old_value Previous value.
         *
         * @return bool Processed value.
         */
        public function process($value, $old_value): bool
        {
        }
        /**
         * Process the gateway setting against the save it belongs to.
         *
         * @param mixed                $value New value.
         * @param mixed                $old_value Previous value.
         * @param array<string, mixed> $options The options being saved.
         *
         * @return bool Processed value.
         */
        public function process_with_options($value, $old_value, array $options): bool
        {
        }
        /**
         * Why switching the gateway on would be refused, if it would.
         *
         * The server-side tagging domain is read from the options being saved
         * when they carry one, so clearing the domain and switching the gateway on
         * in the same save is judged on the outcome of that save, not on the
         * stored domain it replaces.
         *
         * @param array<string, mixed> $options The options being saved.
         * @param bool                 $fresh Run the checks now rather than reuse a recent result.
         *
         * @return string|null One of the REFUSED_* reasons, or null when the gateway can be switched on.
         */
        public static function refusal(array $options, bool $fresh = false): ?string
        {
        }
        /**
         * The container ID a save will leave in place.
         *
         * Normalised the way the save normalises it, so the check requests the
         * container the page will request. Falls back to the stored ID when the
         * save does not carry one.
         *
         * @param array<string, mixed> $options The options being saved.
         *
         * @return string
         */
        public static function container_id(array $options): string
        {
        }
        /**
         * Handle side effects after save.
         *
         * Switching the gateway on or off changes whether the daily check should
         * be running at all, and the answer should not wait for the next admin
         * page load to take effect. A gateway that starts serving with no daily
         * check behind it would keep serving on its switch-on result however long
         * ago that was, so the check is scheduled the moment the switch lands.
         *
         * @param mixed $value New value.
         * @param mixed $old_value Previous value.
         *
         * @return void
         */
        public function after_save($value, $old_value): void
        {
        }
    }
    /**
     * Option Processor Registry
     *
     * Manages registered processors for options.
     */
    final class OptionProcessorRegistry
    {
        /**
         * Registered processors
         *
         * @var array<string, OptionProcessorInterface>
         */
        private array $processors = [];
        /**
         * Constructor - Register default processors
         */
        public function __construct()
        {
        }
        /**
         * Register default processors
         *
         * @return void
         */
        private function register_defaults(): void
        {
        }
        /**
         * Register processor for an option
         *
         * @param string                   $option_key Full option key (e.g., 'general.gtm_id').
         * @param OptionProcessorInterface $processor Processor instance.
         * @return void
         */
        public function register(string $option_key, \TLA_Media\GTM_Kit\Options\Processor\OptionProcessorInterface $processor): void
        {
        }
        /**
         * Get processor for an option
         *
         * @param string $option_key Full option key.
         * @return OptionProcessorInterface|null
         */
        public function get(string $option_key): ?\TLA_Media\GTM_Kit\Options\Processor\OptionProcessorInterface
        {
        }
        /**
         * Process value if processor exists
         *
         * @param string               $option_key Full option key.
         * @param mixed                $value New value.
         * @param mixed                $old_value Previous value.
         * @param array<string, mixed> $options The options being saved, for processors that judge a value against them.
         * @return mixed Processed value.
         */
        public function process(string $option_key, $value, $old_value, array $options = [])
        {
        }
        /**
         * Run after_save hooks if the processor exists
         *
         * @param string $option_key Full option key.
         * @param mixed  $value New value.
         * @param mixed  $old_value Previous value.
         * @return void
         */
        public function after_save(string $option_key, $value, $old_value): void
        {
        }
    }
    /**
     * Region Codes Processor
     *
     * Normalizes the `gcm_region` array before storage by delegating to
     * {@see OptionSchema::sanitize_region_codes()}.
     */
    final class RegionCodesProcessor implements \TLA_Media\GTM_Kit\Options\Processor\OptionProcessorInterface
    {
        /**
         * Process region codes value.
         *
         * @param mixed $value New value.
         * @param mixed $old_value Previous value.
         * @return array<int, string> Sanitized list of region codes.
         */
        public function process($value, $old_value): array
        {
        }
        /**
         * No-op after_save hook.
         *
         * @param mixed $value New value.
         * @param mixed $old_value Previous value.
         * @return void
         */
        public function after_save($value, $old_value): void
        {
        }
    }
}
namespace TLA_Media\GTM_Kit\Options {
    /**
     * Validation Result
     *
     * Represents the result of a validation operation.
     */
    final class ValidationResult
    {
        /**
         * Is the validation successful
         *
         * @var bool
         */
        private bool $valid;
        /**
         * Error message
         *
         * @var string
         */
        private string $error_message;
        /**
         * Error code
         *
         * @var string
         */
        private string $error_code;
        /**
         * Constructor
         *
         * @param bool   $valid Is valid.
         * @param string $error_message Error message.
         * @param string $error_code Error code.
         */
        private function __construct(bool $valid, string $error_message = '', string $error_code = '')
        {
        }
        /**
         * Create valid result
         *
         * @return self
         */
        public static function valid(): self
        {
        }
        /**
         * Create error result
         *
         * @param string $message Error message.
         * @param string $code Error code.
         * @return self
         */
        public static function error(string $message, string $code = 'invalid_value'): self
        {
        }
        /**
         * Is the result valid
         *
         * @return bool
         */
        public function is_valid(): bool
        {
        }
        /**
         * Get error message
         *
         * @return string
         */
        public function get_error_message(): string
        {
        }
        /**
         * Get error code
         *
         * @return string
         */
        public function get_error_code(): string
        {
        }
    }
}
/**
 * GTM Kit plugin file.
 *
 * @package GTM Kit
 */
namespace TLA_Media\GTM_Kit {
    /**
     * Plugin activation hook.
     */
    function gtmkit_plugin_activation(): void
    {
    }
    /**
     * Plugin activation hook.
     */
    function gtmkit_plugin_deactivation(): void
    {
    }
    /**
     * Add plugin action links on Plugins page.
     *
     * @param array<string, string> $links Existing plugin action links.
     *
     * @return array<string, string>
     */
    function gtmkit_add_plugin_action_link(array $links): array
    {
    }
    /**
     * Remove deactivation link.
     *
     * @param array<string, string> $links Existing plugin action links.
     *
     * @return array<string, string>
     */
    function gtmkit_remove_deactivation_link(array $links): array
    {
    }
    /**
     * Load text domain for translation.
     */
    function gtmkit_load_text_domain(): void
    {
    }
    /**
     * Register the engagement-event hooks for any non-admin request.
     *
     * Runs on the frontend, AJAX, and REST contexts so the `wp_login`,
     * `user_register`, and `woocommerce_created_customer` actions still
     * write their handoff cookie when the login or registration flow
     * lives outside a normal frontend page render (e.g. JSON login
     * plugins, Woo Store API checkout).
     */
    function gtmkit_engagement_events_init(): void
    {
    }
    /**
     * Register GTM Kit's abilities with the WordPress Abilities API.
     *
     * Runs on every kind of request: the Abilities API is reached over REST,
     * from the admin and through AI assistant connectors alike, and only builds
     * its registry when something asks for it.
     */
    function gtmkit_abilities_init(): void
    {
    }
    /**
     * Load frontend.
     */
    function gtmkit_frontend_init(): void
    {
    }
    /**
     * Attach the WooCommerce filters an AJAX request still needs.
     *
     * `woocommerce_available_variation` runs inside AJAX handlers that return
     * variation data to the browser, and the price GTM Kit adds there is what the
     * variation `view_item` and `add_to_cart` events report.
     */
    function gtmkit_ajax_init(): void
    {
    }
    /**
     * Load backend.
     */
    function gtmkit_admin_init(): void
    {
    }
}
namespace {
    const GTMKIT_VERSION = '2.23.0';
    \define('GTMKIT_FILE', __FILE__);
    \define('GTMKIT_PATH', \plugin_dir_path(\GTMKIT_FILE));
    \define('GTMKIT_BASENAME', \plugin_basename(\GTMKIT_FILE));
    \define('GTMKIT_URL', \plugin_dir_url(__FILE__));
    \define('GTMKIT_ADMIN_SLUG', 'gtmkit_');
    /**
     * The noscript tag
     *
     * @return void
     */
    function gtmkit_the_noscript_tag(): void
    {
    }
}