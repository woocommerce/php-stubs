<?php
/**
 * Generated stub declarations for snapchat-for-woocommerce 1.0.7.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

namespace SnapchatForWooCommerce\API\AdPartner {
    /**
     * Central service class for Ad Partner API interactions.
     *
     * Designed as a singleton to ensure a consistent WCS client instance is shared
     * across all subcomponents.
     *
     * @since 0.1.0
     */
    class AdPartnerApi
    {
        /**
         * Singleton instance of the API service.
         *
         * Ensures only one instance of this class exists per request lifecycle.
         *
         * @since 0.1.0
         * @var self|null
         */
        private static ?self $instance = null;
        /**
         * Handles product catalog operations.
         *
         * @since 0.1.0
         * @var CatalogApi
         */
        public \SnapchatForWooCommerce\API\AdPartner\CatalogApi $catalog;
        /**
         * Handles product feed operations.
         *
         * @since 0.1.0
         * @var FeedApi
         */
        public \SnapchatForWooCommerce\API\AdPartner\FeedApi $feed;
        /**
         * Private constructor to enforce singleton pattern.
         *
         * Initializes all API submodules with the shared {@see WcsClient} instance,
         * ensuring consistent communication with WooCommerce Connect Server.
         *
         * @since 0.1.0
         *
         * @param \SnapchatForWooCommerce\Connection\WcsClient $wcs WCS client used for authenticated proxy API requests.
         */
        private function __construct(\SnapchatForWooCommerce\Connection\WcsClient $wcs)
        {
        }
        /**
         * Returns the singleton instance of the API service.
         *
         * Creates a new instance on the first call and reuses it for subsequent requests.
         * Ensures that all API modules use the same underlying {@see WcsClient}.
         *
         * @since 0.1.0
         *
         * @param \SnapchatForWooCommerce\Connection\WcsClient $wcs WCS client used for authenticated proxy API requests.
         * @return self Singleton instance of this class.
         */
        public static function get_instance(\SnapchatForWooCommerce\Connection\WcsClient $wcs): self
        {
        }
    }
}
namespace SnapchatForWooCommerce\Api\AdPartner {
    /**
     * Base class for API modules that communicate with the Ad Partner via WCS.
     *
     * Encapsulates the shared WCS client and provides foundational setup
     * for subclasses handling specific API concerns (catalogs, feeds, etc).
     *
     * @since 0.1.0
     */
    class BaseAdPartnerApi
    {
        /**
         * WCS client used to proxy API requests to the Ad Partner.
         *
         * This instance provides authentication and routing logic for sending
         * HTTP requests to the correct WooCommerce Connect Server endpoint.
         *
         * @since 0.1.0
         * @var \SnapchatForWooCommerce\Connection\WcsClient
         */
        protected \SnapchatForWooCommerce\Connection\WcsClient $wcs;
        /**
         * Constructor.
         *
         * Accepts a {@see WcsClient} instance used for all outgoing API calls
         * made by this module or its subclasses.
         *
         * @since 0.1.0
         *
         * @param \SnapchatForWooCommerce\Connection\WcsClient $wcs WCS client instance.
         */
        public function __construct(\SnapchatForWooCommerce\Connection\WcsClient $wcs)
        {
        }
    }
}
namespace SnapchatForWooCommerce\API\AdPartner {
    /**
     * API module for managing product catalogs.
     *
     * This class provides the ability to create a new catalog under the merchant's
     * Ad Partner account, associating it with an existing Pixel.
     *
     * @since 0.1.0
     */
    class CatalogApi extends \SnapchatForWooCommerce\API\AdPartner\BaseAdPartnerApi
    {
        /**
         * Creates a product catalog for the current merchant organization.
         *
         * This method builds and submits the catalog creation request using the
         * organization ID and Pixel ID configured in the plugin settings.
         *
         * It returns a {@see WP_REST_Response} on success or a {@see WP_Error}
         * on failure, depending on whether the required prerequisites are met.
         *
         * Requirements:
         * - Organization ID must be saved in plugin options.
         * - Pixel ID must be saved in plugin options.
         *
         * @since 0.1.0
         *
         * @return \WP_REST_Response|\WP_Error REST response from WCS or error if inputs are missing.
         */
        public function create()
        {
        }
        /**
         * Retrieves a single catalog by ID.
         *
         * Used to verify that a locally-stored catalog ID still corresponds to an
         * existing catalog on the Ad Partner side before deciding whether to create
         * a new one.
         *
         * @since 1.0.3
         *
         * @param string $catalog_id Catalog ID to look up.
         *
         * @return \WP_REST_Response|\WP_Error REST response from WCS, or error on invalid
         *                                    input or remote failure (including HTTP 404).
         */
        public function get_catalog(string $catalog_id)
        {
        }
        /**
         * Returns an existing catalog when the stored catalog ID is still valid on
         * the Ad Partner side AND matches the currently-connected organization and
         * pixel, otherwise creates a new one.
         *
         * Prevents duplicate catalog creation on disconnect + reconnect cycles by
         * verifying the previously stored `CATALOG_ID` option against the Ad
         * Partner before falling back to {@see self::create()}.
         *
         * Reuse is rejected (and a fresh catalog is created) in any of these cases:
         *  - no `CATALOG_ID` is stored (first-time connect);
         *  - `get_catalog()` returns a WP_Error (e.g. HTTP 404 for a deleted catalog);
         *  - the GET response is 2xx but the body is not shaped as Snap's catalog
         *    envelope (malformed upstream);
         *  - the stored catalog belongs to a different organization than the one
         *    currently in `ORGANIZATION_ID` (user reconnected against a different
         *    Snapchat org);
         *  - the stored catalog is not attached to the current `PIXEL_ID` (user
         *    reconnected with a different pixel selected).
         *
         * Snap's `GET /v1/catalogs/{id}` returns the same "bulk" envelope as its
         * `POST /v1/organizations/{org_id}/catalogs`, so the response from
         * {@see self::get_catalog()} can be passed straight back to the caller
         * without re-wrapping: `{ request_status, request_id, catalogs: [ {
         * sub_request_status, catalog: {...} } ] }`.
         *
         * Every rejection branch emits a warning to the WooCommerce log (source
         * `snapchat-for-woocommerce`, gated on `SNAPCHAT_FOR_WOOCOMMERCE_DEBUG`)
         * explaining why the stored catalog was discarded — useful for diagnosing
         * "a new catalog was created after reconnect" support reports.
         *
         * @since 1.0.3
         *
         * @return \WP_REST_Response|\WP_Error REST response wrapping the catalog,
         *                                    or a WP_Error if create() fails.
         */
        public function find_or_create()
        {
        }
        /**
         * Logs a warning that the stored `CATALOG_ID` is unusable and a new catalog
         * will be created in its place. Gated on the plugin's debug flag so it is a
         * no-op in normal production use.
         *
         * @since 1.0.3
         *
         * @param string $catalog_id The stored catalog ID that was rejected.
         * @param string $reason     Human-readable reason for rejection.
         *
         * @return void
         */
        private function log_stale_catalog(string $catalog_id, string $reason): void
        {
        }
        /**
         * Renders a value safely for log output. Empty strings, nulls and booleans
         * are stringified explicitly so log entries read "local=(empty)" rather
         * than the ambiguous "local=".
         *
         * @since 1.0.3
         *
         * @param mixed $value Value to render.
         *
         * @return string
         */
        private static function format($value): string
        {
        }
    }
    /**
     * API module for managing product feeds.
     *
     * This class provides the ability to create a new product feed within an
     * existing catalog under the merchant's Ad Partner account.
     *
     * @since 0.1.0
     */
    class FeedApi extends \SnapchatForWooCommerce\API\AdPartner\BaseAdPartnerApi
    {
        /**
         * Creates a product feed for the current catalog.
         *
         * This method submits the feed creation request using the
         * catalog ID configured in the plugin options.
         *
         * It returns a {@see WP_REST_Response} on success or a {@see WP_Error}
         * on failure, depending on whether the required prerequisites are met.
         *
         * Requirements:
         * - Catalog ID must be saved in plugin options.
         * - Feed URL must be available via {@see OptionDefaults::EXPORT_FILE_URL}.
         *
         * @since 0.1.0
         *
         * @return \WP_REST_Response|\WP_Error REST response from WCS or error if inputs are missing.
         */
        public function create()
        {
        }
    }
}
namespace SnapchatForWooCommerce\API {
    /**
     * Provides permission-checking logic for admin-restricted REST endpoints.
     *
     * Controllers using this trait can perform consistent capability checks by
     * invoking the `permissions_check()` method, ensuring that only users
     * with the `manage_woocommerce` capability can proceed.
     *
     * @since 0.1.0
     */
    trait AdminPermissionsTrait
    {
        /**
         * Checks whether the current user has permission to access the settings endpoint.
         *
         * By default, this returns true for users with the `manage_woocommerce` capability.
         * This ensures that only store admins and authorized roles can modify settings
         * via the API.
         *
         * @since 0.1.0
         *
         * @return bool True if the user has permission; false otherwise.
         */
        public function permissions_check(): bool
        {
        }
    }
    /**
     * Bootstrap class for registering REST API routes related to plugin settings.
     *
     * Instantiates individual controllers and registers their routes.
     *
     * @since 0.1.0
     */
    class SetupService
    {
        /**
         * Registers all REST API routes used in the plugin settings.
         *
         * This method is typically called during the `rest_api_init` hook.
         *
         * Example:
         * ```php
         * add_action( 'rest_api_init', array( new Setup(), 'register_routes' ) );
         * ```
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function register_routes(): void
        {
        }
    }
}
namespace SnapchatForWooCommerce\API\Site\Controllers {
    /**
     * Abstract base controller for Ad Partner Settings REST API.
     *
     * Provides standardized permission checks and response wrapping for all
     * settings-related endpoints in the plugin.
     *
     * @since 0.1.0
     */
    class RESTBaseController extends \WC_REST_Controller
    {
        use \SnapchatForWooCommerce\API\AdminPermissionsTrait;
    }
    /**
     * Controller for the Jetpack connection REST endpoints.
     *
     * @since 0.1.0
     */
    class JetpackAccountController extends \SnapchatForWooCommerce\API\Site\Controllers\RESTBaseController
    {
        /**
         * WCS proxy request client.
         *
         * @var \SnapchatForWooCommerce\Connection\WcsClient
         */
        protected \SnapchatForWooCommerce\Connection\WcsClient $wcs;
        /**
         * Jetpack connection manager.
         *
         * @var \Automattic\Jetpack\Connection\Manager
         */
        protected $manager;
        /**
         * Cached connection state.
         *
         * @var bool
         */
        private $jetpack_connected_state;
        /**
         * Mapping of logical page names to redirect paths.
         *
         * @var string[]
         */
        private const NEXT_PATH_MAPPING = array('setup-snapchat' => '/snapchat/setup', 'reconnect' => '/snapchat/settings&subpath=/reconnect-wpcom-account');
        /**
         * Constructor.
         *
         * @param \SnapchatForWooCommerce\Connection\WcsClient $wcs    WCS proxy request client.
         * @param \Automattic\Jetpack\Connection\Manager   $manager Jetpack connection manager.
         */
        public function __construct(\SnapchatForWooCommerce\Connection\WcsClient $wcs, \Automattic\Jetpack\Connection\Manager $manager)
        {
        }
        /**
         * Registers REST API routes.
         */
        public function register_routes(): void
        {
        }
        /**
         * Returns callback to initiate Jetpack connection.
         *
         * @return callable
         */
        protected function get_connect_callback(): callable
        {
        }
        /**
         * Returns schema for the connect endpoint.
         *
         * @return array
         */
        public function connect_callback_schema(): array
        {
        }
        /**
         * Returns allowed query parameters for the connect request.
         *
         * @return array
         */
        protected function get_connect_params(): array
        {
        }
        /**
         * Returns callback to disconnect from Jetpack.
         *
         * @return callable
         */
        protected function get_disconnect_callback(): callable
        {
        }
        /**
         * Returns callback to check Jetpack connection status.
         *
         * @return callable
         */
        protected function get_connected_callback(): callable
        {
        }
        /**
         * Determines if Jetpack is connected and token is valid.
         *
         * @return bool
         */
        protected function is_jetpack_connected(): bool
        {
        }
        /**
         * Determines if the current user is the Jetpack connection owner.
         *
         * @return bool
         */
        protected function is_jetpack_connection_owner()
        {
        }
        /**
         * Converts boolean to a string.
         *
         * @param bool $value Boolean value.
         * @return string 'yes' or 'no'
         */
        protected function display_boolean(bool $value): string
        {
        }
        /**
         * Returns Jetpack user data for the connected account.
         *
         * @return array
         */
        protected function get_jetpack_user_data(): array
        {
        }
        /**
         * Logs TOS acceptance to WCS and stores local option.
         */
        protected function log_wp_tos_accepted(): void
        {
        }
        /**
         * Sends a request to WCS to log TOS acceptance.
         *
         * @param string $email Email address.
         * @return mixed
         */
        public function mark_tos_accepted(string $email)
        {
        }
    }
    /**
     * Controller for the `/onboarding/setup` endpoint.
     *
     * @since 0.1.0
     */
    class OnboardingController extends \SnapchatForWooCommerce\API\Site\Controllers\RESTBaseController
    {
        /**
         * Registers REST API routes.
         *
         * Provides GET and POST methods for onboarding state:
         * - GET  /setup
         * - POST /setup
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function register_routes(): void
        {
        }
        /**
         * Returns the current onboarding setup state.
         *
         * @since 0.1.0
         *
         * @return \WP_REST_Response
         */
        public function get_setup_state(): \WP_REST_Response
        {
        }
        /**
         * Returns the JSON schema for the `/onboarding/setup` endpoint.
         *
         * This schema defines the expected structure of the onboarding state,
         * including the `status` and `step` fields, both of which are strings.
         *
         * @since 0.1.0
         *
         * @return array JSON Schema for onboarding setup state.
         */
        public function setup_state_schema(): array
        {
        }
    }
    /**
     * Controller for the `/settings` endpoint.
     *
     * @since 0.1.0
     */
    class SettingsController extends \SnapchatForWooCommerce\API\Site\Controllers\RESTBaseController
    {
        /**
         * Registers REST API routes.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function register_routes(): void
        {
        }
        /**
         * Returns the Site settings.
         *
         * @since 0.1.0
         *
         * @return \WP_REST_Response
         */
        public function get_settings()
        {
        }
        /**
         * Sets the Site settings.
         *
         * @since 0.1.0
         *
         * @param WP_REST_Request $request REST request object.
         *
         * @return \WP_REST_Response
         */
        public function set_settings($request)
        {
        }
        /**
         * Returns the settings response structure.
         *
         * This method encapsulates the logic to build the response for the settings endpoint.
         *
         * @since 0.1.0
         *
         * @return \WP_REST_Response
         */
        private function get_settings_response()
        {
        }
    }
    /**
     * Controller for the `/organizations` endpoint.
     *
     * @since 0.1.0
     */
    class SnapchatAccountController extends \SnapchatForWooCommerce\API\Site\Controllers\RESTBaseController
    {
        /**
         * Registers REST API routes.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function register_routes(): void
        {
        }
        /**
         * Returns an array of Merchant Account details.
         *
         * @since 0.1.0
         *
         * @return \WP_REST_Response
         */
        public function get_account_details()
        {
        }
        /**
         * Returns the JSON schema for the `/account` REST endpoint.
         *
         * This schema defines a single object with details about the merchant
         * account.
         *
         * @since 0.1.0
         *
         * @return array JSON Schema for a selected organization.
         */
        public function organization_schema(): array
        {
        }
    }
    /**
     * Controller for setting up and managing the Snapchat account connection.
     *
     * @since 0.1.0
     */
    class SnapchatBusinessExtensionController extends \SnapchatForWooCommerce\API\Site\Controllers\RESTBaseController
    {
        /**
         * WCS proxy request client.
         *
         * @var \SnapchatForWooCommerce\Connection\WcsClient
         */
        protected \SnapchatForWooCommerce\Connection\WcsClient $wcs;
        /**
         * Instance of the Ad Partner API.
         *
         * @var \SnapchatForWooCommerce\API\AdPartner\AdPartnerApi
         */
        protected \SnapchatForWooCommerce\API\AdPartner\AdPartnerApi $ad_partner_api;
        /**
         * Constructor.
         *
         * @param \SnapchatForWooCommerce\Connection\WcsClient    $wcs            WCS proxy request client.
         * @param \SnapchatForWooCommerce\API\AdPartner\AdPartnerApi $ad_partner_api Ad Partner API.
         */
        public function __construct(\SnapchatForWooCommerce\Connection\WcsClient $wcs, \SnapchatForWooCommerce\API\AdPartner\AdPartnerApi $ad_partner_api)
        {
        }
        /**
         * Register REST routes.
         */
        public function register_routes(): void
        {
        }
        /**
         * Sends a GET request to the WCS `/connection/status` endpoint.
         *
         * @since 0.1.0
         *
         * @return \WP_REST_Response|\WP_Error Connection status or error.
         */
        public function get_connection_status()
        {
        }
        /**
         * Sends a POST request to the WCS `/connection/connect` endpoint to initiate a connection.
         *
         * @since 0.1.0
         *
         * @param string $return_url    URL to redirect the user to after authorization.
         *
         * @return \WP_REST_Response|\WP_Error Connection initiation response or error.
         */
        public function start_connection(string $return_url)
        {
        }
        /**
         * Sends a GET request to the WCS `/connection` endpoint to disconnect the Ad Partner.
         *
         * @since 0.1.0
         *
         * @return \WP_REST_Response|\WP_Error Disconnection response or error.
         */
        public function stop_connection()
        {
        }
        /**
         * Saves the selected Snapchat Business Extension configuration.
         *
         * Fetches the configuration details using the provided config ID and stores
         * the related Organization ID, Ad Account ID, Pixel ID, and Conversion API token.
         *
         * @since 0.1.0
         *
         * @param WP_REST_Request $request REST request object.
         *
         * @return \WP_REST_Response|\WP_Error
         */
        public function set_config($request)
        {
        }
        /**
         * Starts the OAuth flow.
         *
         * @return \WP_REST_Response
         */
        public function initiate_oauth()
        {
        }
        /**
         * Checks connection status.
         *
         * @return \WP_REST_Response
         */
        public function check_connection()
        {
        }
        /**
         * Disconnects the merchant account.
         *
         * @return \WP_REST_Response
         */
        public function delete_connection()
        {
        }
        /**
         * Returns the JSON Schema for the `/config` endpoint.
         *
         * @since 0.1.0
         *
         * @return array JSON Schema definition.
         */
        public function config_schema()
        {
        }
    }
}
namespace SnapchatForWooCommerce\Admin {
    /**
     * Handles admin script and style enqueues.
     *
     * Registers the `admin_enqueue_scripts` action to load plugin-specific
     * admin assets such as JavaScript for UI components or custom styles
     * for Gutenberg integrations or settings pages.
     *
     * @since 0.1.0
     */
    class Assets
    {
        /**
         * Registers WordPress admin-side hooks.
         *
         * Hooks into `admin_enqueue_scripts` to enqueue plugin-specific admin scripts and styles.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function register_hooks(): void
        {
        }
        /**
         * Enqueues plugin admin assets (JS/CSS).
         *
         * Uses the shared {@see AssetLoader} utility to enqueue assets registered with
         * handles prefixed as `admin`. These assets must be defined in the plugin’s
         * asset manifest or registered via `wp_register_script()` / `wp_register_style()`.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function enqueue_assets(): void
        {
        }
    }
}
namespace SnapchatForWooCommerce\Admin\Export {
    /**
     * Executes a single export batch for any entity type.
     *
     * This class encapsulates the logic for processing one offset-based chunk of exportable data,
     * including file creation (for the first batch), header row writing, and entity resolution.
     * It returns metadata including the generated file path, file URL, and a flag indicating
     * whether the export is complete.
     *
     * Can be composed into multi-batch workflows via tools like Action Scheduler.
     *
     * @since 0.1.0
     */
    class BatchExportJob
    {
        /**
         * Number of entities to export in each batch.
         *
         * Adjust this constant to control memory usage and execution time per batch.
         *
         * @since 0.1.0
         */
        const BATCH_SIZE = 50;
        /**
         * Cache builder used to prepare the exportable product ID list.
         *
         * @var \SnapchatForWooCommerce\Admin\Export\Contract\CacheBuilderInterface
         */
        public \SnapchatForWooCommerce\Admin\Export\Contract\CacheBuilderInterface $cache_builder;
        /**
         * Supplies entity IDs and objects to be exported.
         *
         * @var \SnapchatForWooCommerce\Admin\Export\Contract\ExportableEntityProviderInterface
         */
        protected \SnapchatForWooCommerce\Admin\Export\Contract\ExportableEntityProviderInterface $provider;
        /**
         * Converts each entity into an array of exportable row data.
         *
         * @var \SnapchatForWooCommerce\Admin\Export\Contract\ExportRowBuilderInterface
         */
        protected \SnapchatForWooCommerce\Admin\Export\Contract\ExportRowBuilderInterface $row_builder;
        /**
         * Writes row data to the final export file (e.g., CSV).
         *
         * @var \SnapchatForWooCommerce\Admin\Export\Contract\ExportWriterInterface
         */
        public \SnapchatForWooCommerce\Admin\Export\Contract\ExportWriterInterface $writer;
        /**
         * Provides access to the Ad Partner APIs.
         *
         * @var \SnapchatForWooCommerce\API\AdPartner\AdPartnerApi
         */
        public \SnapchatForWooCommerce\API\AdPartner\AdPartnerApi $ad_partner_api;
        /**
         * Constructor.
         *
         * @since 0.1.0
         *
         * @param \SnapchatForWooCommerce\Admin\Export\Contract\CacheBuilderInterface             $cache_builder  Prepares and caches exportable entity IDs ahead of export.
         * @param \SnapchatForWooCommerce\Admin\Export\Contract\ExportableEntityProviderInterface $provider       Supplies exportable entity IDs and objects.
         * @param \SnapchatForWooCommerce\Admin\Export\Contract\ExportRowBuilderInterface         $row_builder    Builds CSV-compatible row data from entities.
         * @param \SnapchatForWooCommerce\Admin\Export\Contract\ExportWriterInterface             $writer         Writes data to file and manages file output.
         * @param \SnapchatForWooCommerce\API\AdPartner\AdPartnerApi                      $ad_partner_api Exposes Ad Partner APIs.
         */
        public function __construct(\SnapchatForWooCommerce\Admin\Export\Contract\CacheBuilderInterface $cache_builder, \SnapchatForWooCommerce\Admin\Export\Contract\ExportableEntityProviderInterface $provider, \SnapchatForWooCommerce\Admin\Export\Contract\ExportRowBuilderInterface $row_builder, \SnapchatForWooCommerce\Admin\Export\Contract\ExportWriterInterface $writer, \SnapchatForWooCommerce\API\AdPartner\AdPartnerApi $ad_partner_api)
        {
        }
        /**
         * Executes a single export batch at the given offset.
         *
         * This method performs one step in the export pipeline by processing
         * a page of entities. If it's the first batch, it creates a new export file
         * and writes the header. Otherwise, it appends data to the given file.
         *
         * It returns information about the file and whether additional batches are required.
         *
         * @since 0.1.0
         *
         * @param int         $offset          Zero-based batch offset (i.e., page number).
         * @param bool        $is_first_batch  Whether this is the first batch (triggering file creation).
         * @param string|null $existing_file   Path to existing file if continuing a previous export.
         * @return array{
         *     file_path: string,
         *     file_url: string,
         *     complete: bool
         * } Metadata about the file and batch completion status.
         */
        public function run(int $offset, bool $is_first_batch = false, ?string $existing_file = null): array
        {
        }
        /**
         * Determines whether any export-related Action Scheduler jobs are currently pending.
         *
         * This method checks if there are any queued or running async jobs associated with
         * the export process. It looks for:
         * - Scanning jobs triggered by the cache builder (e.g., scan_exportable_product_ids_page)
         * - Export writing jobs triggered by this service (e.g., export_product_catalog)
         *
         * Useful to prevent duplicate job scheduling or overlapping exports.
         *
         * @since 0.1.0
         *
         * @param string $entity_export_id Unique export hook name (e.g., export_product_catalog).
         * @return bool True if any export or cache jobs are in progress, false otherwise.
         */
        public function is_job_in_progress(string $entity_export_id): bool
        {
        }
        /**
         * Updates the last export timestamp in plugin options.
         *
         * This is stored for audit or display purposes after a successful export run.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function set_timestamp(): void
        {
        }
        /**
         * Finalizes the export batch and triggers post-export actions.
         *
         * This method is called when a batch export process has completed. It performs
         * post-export tasks.
         *
         * This is typically invoked by the export orchestration layer after all entities
         * in the batch have been successfully exported.
         *
         * @since 0.1.0
         *
         * @param callable $callback A user-defined function or method to be executed after export completion.
         * @return void
         */
        public function on_complete(callable $callback): void
        {
        }
    }
}
namespace SnapchatForWooCommerce\Admin\Export\Contract {
    /**
     * Interface for cache builders that prepare exportable entity ID lists.
     *
     * Used to decouple the logic for scanning exportable entities from the actual
     * export job execution. By populating the export list in advance, the system
     * ensures that exports remain consistent even if new entities are added or removed
     * after the export begins.
     *
     * Implementers should:
     * - Define logic for identifying exportable entities (e.g., via meta keys).
     * - Store entity IDs in a persistent cache.
     * - Break work into small, schedulable units for large catalogs.
     *
     * @since 0.1.0
     */
    interface CacheBuilderInterface
    {
        /**
         * Starts the scanning and caching process.
         *
         * Clears any previously stored entity ID cache and queues the first
         * batch of asynchronous scan jobs. Called before the export begins.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function build_and_cache(): void;
        /**
         * Registers the Action Scheduler hook used to process batch jobs.
         *
         * This method must associate a hook name with a callback handler for
         * scanning one page of entities. Called during plugin initialization.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function register(): void;
    }
    /**
     * Interface for building a row from an exportable entity.
     *
     * Implementations convert an entity object into an array of scalar values,
     * with each key representing a column in the final output (CSV, JSON, etc).
     *
     * @since 0.1.0
     */
    interface ExportRowBuilderInterface
    {
        /**
         * Builds an exportable row from the given entity.
         *
         * @since 0.1.0
         *
         * @param mixed $entity The entity object (e.g., WC_Product, WP_Term).
         * @return array<string, scalar>|null Associative array for one row, or null to skip.
         */
        public function build_row($entity): ?array;
    }
    /**
     * Interface for writing export rows to disk or a streaming destination.
     *
     * This allows pluggable output formats (CSV, JSON, etc.) and supports
     * writing rows incrementally across multiple batches.
     *
     * @since 0.1.0
     */
    interface ExportWriterInterface
    {
        /**
         * Creates a new export file and returns its absolute file path.
         *
         * This is typically called during the first batch.
         *
         * @since 0.1.0
         *
         * @return string Absolute file path to the new export file.
         */
        public function create_file(): string;
        /**
         * Writes the header row (column names) to the file.
         *
         * Should only be called once, immediately after file creation.
         *
         * @since 0.1.0
         *
         * @param string $file_path The export file path to write into.
         * @return void
         */
        public function write_header(string $file_path): void;
        /**
         * Appends a single row of data to the export file.
         *
         * @since 0.1.0
         *
         * @param string                $file_path The export file path to write into.
         * @param array<string, scalar> $row Associative row data to write.
         * @return void
         */
        public function append_row(string $file_path, array $row): void;
        /**
         * Returns a publicly accessible URL for the generated file.
         *
         * @since 0.1.0
         *
         * @param string $file_path Full file path on disk.
         * @return string Public URL to access the file.
         */
        public function generate_url(string $file_path): string;
    }
    /**
     * Interface for providing exportable entities in paginated batches.
     *
     * Implementations of this interface must:
     * - Return a total count of entities to be exported.
     * - Provide a paginated slice of entity IDs (offset + limit).
     * - Resolve those IDs into entity objects (e.g., WC_Product, WP_Term).
     *
     * This design supports large data sets without requiring the full list
     * of IDs to be loaded into memory.
     *
     * @since 0.1.0
     */
    interface ExportableEntityProviderInterface
    {
        /**
         * Returns the total number of entities that match export criteria.
         *
         * This is used to calculate how many batches will be needed.
         *
         * @since 0.1.0
         *
         * @return int Number of exportable entities.
         */
        public function get_total(): int;
        /**
         * Returns a page of exportable entity IDs for a given offset and limit.
         *
         * Each batch export job will call this method to get the IDs it
         * should process during that specific batch run.
         *
         * @since 0.1.0
         *
         * @param int $offset Zero-based offset into the full exportable list.
         * @param int $limit Maximum number of entity IDs to return.
         * @return array<int> Ordered list of entity IDs to process in this batch.
         */
        public function get_ids(int $offset, int $limit): array;
        /**
         * Returns resolved entity objects for the given list of IDs.
         *
         * These entity objects (e.g., WC_Product, WP_Term) will be passed
         * to the row builder to convert into exportable data.
         *
         * @since 0.1.0
         *
         * @param array<int> $ids List of entity IDs.
         * @return array<int, mixed> List of resolved entity objects.
         */
        public function get_entities(array $ids): array;
    }
    /**
     * Contract for providers that contribute additional export row fields.
     *
     * Implementations should return an associative array of scalar values keyed
     * by the target feed's expected field names. If no data is available, return
     * an empty array. Entity-specific sub-interfaces may provide stronger typing
     * (e.g., {@see ProductRowBuilderAdditionalData}).
     *
     * @since 0.1.0
     */
    interface RowBuilderAdditionalData
    {
        /**
         * Provide additional data for an export row.
         *
         * Implementations are expected to extract relevant metadata from the entity
         * (e.g., taxonomy, attributes, or custom meta) and return it in a format
         * suitable for merging into the export row.
         *
         * @since 0.1.0
         *
         * @param mixed $entity The exportable entity (e.g., WC_Product, WC_Order).
         * @return array<string,scalar> Associative data to merge into the row.
         */
        public function get_additional_data($entity): array;
    }
}
namespace SnapchatForWooCommerce\Admin\Export\EntityProvider {
    /**
     * Entity provider for exportable WooCommerce products.
     *
     * This class implements the {@see ExportableEntityProviderInterface} to supply
     * product data in a batch-safe format for the export pipeline.
     *
     * It fetches product IDs from the cached list stored in WordPress options
     * (populated by {@see ProductIdCacheBuilder}) and converts them into `WC_Product`
     * objects for use in exporters like {@see BatchExportJob}.
     *
     * @since 0.1.0
     */
    class ProductEntityProvider implements \SnapchatForWooCommerce\Admin\Export\Contract\ExportableEntityProviderInterface
    {
        /**
         * Returns the total number of products eligible for export.
         *
         * Products are considered eligible if they are included in the cached ID list,
         * which is built ahead of time by the cache builder. This avoids re-querying
         * the database during export and ensures consistency across batches.
         *
         * @since 0.1.0
         *
         * @return int Total number of exportable products.
         */
        public function get_total(): int
        {
        }
        /**
         * Returns a paginated list of exportable WooCommerce product IDs.
         *
         * Uses array slicing on the cached product ID list to simulate
         * offset-based pagination, ensuring efficient memory use.
         *
         * @since 0.1.0
         *
         * @param int $offset Zero-based offset into the cached list.
         * @param int $limit  Maximum number of product IDs to return.
         * @return array<int> List of product IDs for the current batch.
         */
        public function get_ids(int $offset, int $limit): array
        {
        }
        /**
         * Resolves the given product IDs into `WC_Product` instances.
         *
         * Skips IDs that do not resolve to valid product objects. Results are ordered
         * to match the given `$ids` list, since `wc_get_products()` otherwise falls
         * back to its default ordering (by date), which can differ from batch order.
         *
         * @since 0.1.0
         *
         * @param array<int> $ids List of WooCommerce product post IDs.
         * @return array<int, \WC_Product> List of valid product entities.
         */
        public function get_entities(array $ids): array
        {
        }
    }
}
namespace SnapchatForWooCommerce\Admin\Export\RowBuilder {
    /**
     * Converts WooCommerce products into catalog-compatible row arrays.
     *
     * Implements {@see ExportRowBuilderInterface} to define how a WooCommerce product
     * should be exported into a format suitable for Snapchat’s product feed.
     * Handles common fields such as title, price, and availability, and attempts
     * to extract optional fields like brand, GTIN, and MPN from product attributes or meta.
     *
     * This class is intended to be reused across batch exporters or file writers.
     *
     * @since 0.1.0
     */
    class ProductRowBuilder implements \SnapchatForWooCommerce\Admin\Export\Contract\ExportRowBuilderInterface
    {
        /**
         * Additional data providers that can enrich the export row.
         *
         * @var \SnapchatForWooCommerce\Admin\Export\Contract\RowBuilderAdditionalData[]
         */
        protected $additional_data_providers = array();
        /**
         * Constructor.
         *
         * Accepts an array of {@see RowBuilderAdditionalData} providers which will
         * contribute extra fields to the final row. This allows for a clean
         * separation between core attributes and optional enrichments.
         *
         * @since 0.1.0
         *
         * @param \SnapchatForWooCommerce\Admin\Export\Contract\RowBuilderAdditionalData[] $additional_data_providers One or more providers.
         */
        public function __construct(array $additional_data_providers = array())
        {
        }
        /**
         * Builds a single exportable row from a product entity.
         *
         * Validates that the input is a `WC_Product`, then extracts relevant product data
         * into an associative array with Snapchat catalog keys. If the input is not a product,
         * returns `null` to skip the row.
         *
         * The resulting row includes:
         * - Core attributes like ID, title, description, image, and price
         * - Inventory status
         * - Optional metadata: brand, GTIN, and MPN
         *
         * @since 0.1.0
         *
         * @param mixed $product A `WC_Product` instance expected.
         * @return array<string,scalar>|null Associative export row or null to skip.
         */
        public function build_row($product): ?array
        {
        }
    }
}
namespace SnapchatForWooCommerce\Admin\Export\Service {
    /**
     * Handles batch-based product export via Action Scheduler.
     *
     * This service controls the full export pipeline. It begins by clearing any previous
     * export results, then invokes the cache builder to compute eligible product IDs.
     * Once the caching is completed (signaled via a custom hook), it initiates a sequence
     * of export batches using the {@see BatchExportJob} class.
     *
     * Each batch is offset-based and runs as an independent async job.
     *
     * @since 0.1.0
     */
    class ProductExportService
    {
        /**
         * Action Scheduler hook name for individual export batches.
         *
         * @since 0.1.0
         */
        public const ACTION_HOOK = 'export_product_catalog';
        /**
         * Encapsulates the logic for scanning product IDs, building export rows, and writing to file.
         *
         * This reusable job runner handles each export batch, and is invoked
         * during both cache completion and asynchronous Action Scheduler execution.
         *
         * @since 0.1.0
         *
         * @var \SnapchatForWooCommerce\Admin\Export\BatchExportJob
         */
        public \SnapchatForWooCommerce\Admin\Export\BatchExportJob $job;
        /**
         * Constructor.
         *
         * @since 0.1.0
         *
         * @param \SnapchatForWooCommerce\Admin\Export\BatchExportJob $job Export job instance that handles caching, entity export, and file generation.
         */
        public function __construct(\SnapchatForWooCommerce\Admin\Export\BatchExportJob $job)
        {
        }
        /**
         * Registers Action Scheduler hooks for the export process.
         *
         * - Hook to begin export after product caching is complete.
         * - Hook to handle each export batch.
         * - Delegates cache hook registration to the cache builder.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function register_hooks(): void
        {
        }
        /**
         * Initiates the export process immediately after onboarding and schedules daily recurring exports.
         *
         * This method is triggered via the {@see Helper::with_prefix( 'onboarding_complete' )} hook.
         * It performs the following:
         * - Initiates a one-time product catalog export by calling {@see self::start_export()}.
         * - Schedules a daily recurring export job using Action Scheduler if not already scheduled.
         *
         * This ensures that merchants begin with a fresh export and that exports continue automatically.
         *
         * @since 0.2.0
         *
         * @return void
         */
        public function start_export_after_onboarding(): void
        {
        }
        /**
         * Schedules the recurring catalog export job if not already scheduled.
         *
         * This method registers a daily recurring job via Action Scheduler using the hook:
         * {@see Helper::with_prefix( 'recurring_catalog_export' )}.
         *
         * The job is set to begin one day after the current time and repeats every 24 hours.
         *
         * @since 0.2.0
         *
         * @return void
         */
        public function maybe_schedule_recurring_export(): void
        {
        }
        /**
         * Unschedules all export-related Action Scheduler jobs.
         *
         * This method clears any scheduled export actions, including:
         * - The main export job.
         * - Recurring export jobs.
         *
         * It is typically called when the Snapchat connection is removed or during plugin deactivation.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function maybe_unschedule_export_jobs(): void
        {
        }
        /**
         * Validates that the export writer can create and delete a file.
         *
         * This method ensures the filesystem is writable before any export jobs begin.
         * It creates a temporary file using the export writer and removes it using
         * the WordPress filesystem API.
         *
         * @since 0.1.0
         *
         * @return void
         *
         * @throws \RuntimeException If the filesystem is not writable or cleanup fails.
         */
        protected function validate_export_environment(): void
        {
        }
        /**
         * Initiates the product export by clearing previous state and triggering product scanning.
         *
         * This method:
         * - Deletes previously saved file path and URL options.
         * - Triggers the cache builder to compute exportable products.
         * - Does not immediately begin file writing — that is triggered once caching completes.
         *
         * @since 0.1.0
         *
         * @return bool|null
         */
        public function start_export()
        {
        }
        /**
         * Starts writing the export file from offset 0.
         *
         * This method is hooked to run after exportable product IDs have been fully cached.
         * It schedules the first export batch asynchronously.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function start_writing(): void
        {
        }
        /**
         * Handles a single export batch.
         *
         * Each call creates and executes one instance of {@see BatchExportJob}.
         * If this is the first batch, it creates a new file and stores its path.
         * If additional batches are needed, this method schedules the next offset.
         *
         * @since 0.1.0
         *
         * @param int         $offset Offset into the cached product ID list.
         * @param string|null $existing_file Optional existing file path to continue writing to.
         * @return void
         */
        public function handle_batch(int $offset = 0, ?string $existing_file = null): void
        {
        }
        /**
         * Handles the AJAX request to initiate the product catalog export.
         *
         * This method:
         * - Verifies the security nonce.
         * - Attempts to start the export process.
         * - Sends a JSON success or error response.
         *
         * @since 0.1.0
         */
        public function trigger_export_callback(): void
        {
        }
        /**
         * Responds to Heartbeat API requests to report the current export status.
         *
         * This is used by the frontend to check if an export is idle, in progress,
         * or completed, and to return the file URL if available.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function check_export_status()
        {
        }
        /**
         * Invokes the Ad Partner API to create a product feed after export completes.
         *
         * This method is hooked to {@see Helper::with_prefix( 'batch_export_job_complete' )}.
         * It is triggered automatically after the final export batch has finished and the
         * CSV feed file has been successfully written.
         *
         * - Calls {@see FeedApi::create()} to register the feed with the Ad Partner.
         * - Logs an alert if feed creation fails with a WP_Error.
         *
         * This final step ensures that the exported product catalog is registered
         * as a feed with the Ad Partner for ingestion and use in Dynamic Ads.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function create_feed()
        {
        }
    }
    /**
     * Queues product ID scanning in pages and stores results in a shared WordPress option.
     *
     * This class is responsible for building a list of exportable product IDs. It executes
     * one Action Scheduler job per page of results, filtering only those products marked
     * with the custom meta key indicating export eligibility.
     *
     * The full list is cached in {@see OptionDefaults::EXPORT_PRODUCT_IDS} for later use by
     * export workers like {@see ProductExportService}.
     *
     * Caching the list of exportable product IDs before the actual export ensures consistency,
     * even if new products are added or existing ones are removed during the export process.
     * This avoids potential inconsistencies in batch boundaries caused by a changing product catalog.
     *
     * @since 0.1.0
     */
    class ProductIdCacheBuilder implements \SnapchatForWooCommerce\Admin\Export\Contract\CacheBuilderInterface
    {
        /**
         * Action Scheduler hook name for scanning each page of product IDs.
         *
         * This hook is scheduled once per page in the exportable product list.
         *
         * @since 0.1.0
         */
        public const ACTION_HOOK = 'scan_exportable_product_ids_page';
        /**
         * Number of products to query per page.
         *
         * Increasing this may reduce the number of jobs at the cost of memory usage.
         *
         * @since 0.1.0
         */
        const BATCH_SIZE = 50;
        /**
         * The constructor function.
         *
         * @since 0.1.0
         */
        public function __construct()
        {
        }
        /**
         * Registers the Action Scheduler hook for scanning product IDs.
         *
         * This method is typically called during plugin initialization.
         * It binds the asynchronous hook name to the `handle_batch()` method.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function register(): void
        {
        }
        /**
         * Starts the product scanning process.
         *
         * Clears any previously cached product IDs and enqueues the first page for processing.
         * This method is typically triggered manually before export starts.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function build_and_cache(): void
        {
        }
        /**
         * Processes a single page of exportable products and schedules the next page.
         *
         * This method is invoked via Action Scheduler. It retrieves one page of product
         * IDs that match the export eligibility meta key, appends them to the cached list,
         * and enqueues the next page.
         *
         * If the current page is empty and not the first, it fires a custom action to
         * indicate that the caching process has completed.
         *
         * @since 0.1.0
         *
         * @param int $page The current page to process (starts at 1).
         * @return void
         */
        public function handle_batch(int $page): void
        {
        }
        /**
         * Filters product query to only return the product if they
         * don't contain the `product_catalog_item` meta key OR
         * if they contain the meta key `product_catalog_item` with
         * a value of '1'.
         *
         * @since 0.1.0
         *
         * @param array $query      WooCommerce Products query args.
         * @param array $query_vars Query vars.
         *
         * @return array
         */
        public function query_products_by_meta($query, $query_vars)
        {
        }
    }
}
namespace SnapchatForWooCommerce\Admin\Export\Writer {
    /**
     * Concrete export writer that generates a CSV file.
     *
     * Uses WP_Filesystem to support environments with different filesystem access layers.
     * Supports creating a new file, writing header rows, appending data rows,
     * and resolving a public download URL.
     *
     * @since 0.1.0
     */
    class CsvExportWriter implements \SnapchatForWooCommerce\Admin\Export\Contract\ExportWriterInterface
    {
        /**
         * Name of the subdirectory inside uploads/ to store exports.
         *
         * @since 0.1.0
         */
        const EXPORT_FOLDER = 'snapchat';
        /**
         * Filesystem handler.
         *
         * @var \WP_Filesystem_Direct
         */
        protected $fs;
        /**
         * Constructor.
         *
         * @since 0.1.0
         */
        public function __construct()
        {
        }
        /**
         * Creates a new CSV file in the uploads directory.
         *
         * @since 0.1.0
         *
         * @todo Move the Filesystem checks to a base class.
         *
         * @return string Absolute path to the newly created file.
         * @throws \RuntimeException If upload directory is missing, export folder can't be created, or file creation fails.
         */
        public function create_file(): string
        {
        }
        /**
         * Writes the header row to a CSV file.
         *
         * Default implementation does nothing because headers
         * are written during the first append call.
         *
         * @since 0.1.0
         *
         * @param string $file_path Absolute path to the file.
         */
        public function write_header(string $file_path): void
        {
        }
        /**
         * Appends a data row to the CSV file.
         *
         * If the file is empty, writes a header row using array keys.
         *
         * @since 0.1.0
         *
         * @param string   $file_path Absolute file path.
         * @param string[] $row       Associative array representing a CSV row.
         */
        public function append_row(string $file_path, array $row): void
        {
        }
        /**
         * Generates a public URL to download the given file.
         *
         * @since 0.1.0
         *
         * @param string $file_path Absolute file path.
         * @return string Download URL.
         */
        public function generate_url(string $file_path): string
        {
        }
    }
}
namespace SnapchatForWooCommerce\Admin {
    /**
     * Trait MenuFixesTrait
     *
     * Adds Woo Admin React-powered submenu under Marketing with proper ordering and slug fix.
     *
     * @package SnapchatForWooCommerce\Admin
     */
    trait MenuFixesTrait
    {
        /**
         * Registers a React-powered page using classic `add_submenu_page` for compatibility.
         *
         * @param array $options {
         *   @type string $id          ID for the page.
         *   @type string $title       Title shown in menu.
         *   @type string $parent      Slug of the parent menu.
         *   @type string $path        URL path after wc-admin.
         *   @type string $capability  User capability. Default: manage_woocommerce.
         *   @type int|null $position  Position in submenu.
         * }
         */
        protected function register_classic_submenu_page(array $options): void
        {
        }
    }
    /**
     * Registers the WooCommerce Marketing submenu entry for the Ad Partner.
     *
     * This class integrates a React-powered admin page under the "Marketing" menu
     * using the `register_classic_submenu_page()` helper in {@see MenuFixesTrait}.
     * The page renders via Woo Admin’s routing system (`/wp-admin/admin.php?page=wc-admin&path=/snapchat/start`)
     * while appearing natively within the classic admin UI.
     *
     * @since 0.1.0
     */
    class Menu
    {
        use \SnapchatForWooCommerce\Admin\MenuFixesTrait;
        /**
         * Hooks the menu registration callback into the `admin_menu` action.
         *
         * Called by the admin setup bootstrap class during plugin initialization.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function register_hooks(): void
        {
        }
        /**
         * Registers the Snapchat submenu under WooCommerce > Marketing.
         *
         * Uses `MenuFixesTrait` to ensure proper submenu behavior, React page path resolution,
         * and position ordering. The linked page should be registered with Woo Admin JS routing
         * (e.g., via `PageController::connect_page()` on the server and JS `addFilter()`).
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function register_menu(): void
        {
        }
    }
    /**
     * Handles admin notices for Snapchat for WooCommerce.
     *
     * Registers the `admin_notices` action to display admin notices for the plugin.
     *
     * @since x.x.x
     */
    class Notices
    {
        /**
         * Registers WordPress admin-side hooks.
         *
         * Hooks into `admin_notices` to display admin notices for the plugin.
         *
         * @since x.x.x
         *
         * @return void
         */
        public function register_hooks(): void
        {
        }
        /**
         * Displays a notice for the uninstall the legacy Snapchat plugin.
         *
         * @since x.x.x
         *
         * @return void
         */
        public function maybe_display_notice_about_legacy_snapchat_plugin(): void
        {
        }
    }
    /**
     * Registers the WooCommerce Admin onboarding page for Snapchat.
     *
     * This class adds a Woo Admin-powered page without a parent menu item.
     * The page is expected to be registered on the JS side via `addFilter( 'woocommerce_admin_pages_list' )`
     * and rendered using a React component.
     *
     * @since 0.1.0
     */
    class Onboarding
    {
        /**
         * Hooks the onboarding page registration into WooCommerce Admin.
         *
         * Registers the onboarding route using `wc_admin_register_page()` and assigns it a
         * unique ID using the plugin prefix. This page is accessible via direct URL only and
         * does not appear in the admin menu.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function register_hooks(): void
        {
        }
    }
}
namespace SnapchatForWooCommerce\Admin\ProductMeta {
    /**
     * Registers the "Snapchat" tab and checkbox in the WooCommerce product editor.
     *
     * This allows merchants to designate which products should be included
     * in the Snapchat product catalog via a simple checkbox UI.
     *
     * @since 0.1.0
     */
    class ProductMetaFields
    {
        /**
         * Meta key used to determine if a product is eligible for export.
         *
         * When this custom post meta is set to true (or a truthy value), the corresponding
         * product is considered exportable and will be included in catalog generation logic.
         * If this flag is missing or set to false, the product will be skipped.
         *
         * Used by:
         * - {@see ProductEntityProvider} to filter exportable product IDs.
         * - Admin UI or automation logic to toggle export eligibility.
         *
         * @since 0.1.0
         */
        public const CATALOG_ITEM = 'product_catalog_item';
        /**
         * Registers all WooCommerce hooks.
         *
         * @since 0.1.0
         * @return void
         */
        public function register_hooks(): void
        {
        }
        /**
         * Adds the Snapchat tab to the product data panel.
         *
         * @since 0.1.0
         *
         * @param array $tabs Existing WooCommerce product data tabs.
         * @return array Modified tabs.
         */
        public function add_tab(array $tabs): array
        {
        }
        /**
         * Renders the Snapchat product data panel.
         *
         * Displays a checkbox allowing the merchant to mark the product as eligible
         * for inclusion in the Snapchat product catalog.
         *
         * @since 0.1.0
         * @return void
         */
        public function render_panel(): void
        {
        }
        /**
         * Saves the Snapchat exportable flag when the product is saved.
         *
         * @since 0.1.0
         *
         * @param int $post_id The ID of the current product.
         * @return void
         */
        public function save_meta(int $post_id): void
        {
        }
    }
}
namespace SnapchatForWooCommerce\Admin {
    /**
     * Coordinates admin-side service initialization for the plugin.
     *
     * This class accepts any number of service objects that support the
     * `register_hooks()` method, and invokes them during admin bootstrap.
     * It allows granular registration of features such as product metadata,
     * script assets, and admin UI components without hardcoding dependencies.
     *
     * @since 0.1.0
     */
    class Setup
    {
        /**
         * List of admin service instances.
         *
         * Each service must implement a `register_hooks()` method.
         *
         * @var array<int,object>
         */
        protected array $services = array();
        /**
         * Constructor.
         *
         * Accepts an arbitrary number of services that will be stored for later initialization.
         *
         * @since 0.1.0
         *
         * @param object ...$services Services that expose a `register_hooks()` method.
         */
        public function __construct(...$services)
        {
        }
        /**
         * Calls `register_hooks()` on each injected service.
         *
         * This method is intended to be invoked during plugin bootstrap.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function init(): void
        {
        }
    }
}
namespace SnapchatForWooCommerce {
    /**
     * Manages frontend asset loading for plugin features.
     *
     * While currently responsible for tracking-related assets (e.g., Snapchat Pixel
     * and Conversion API), this class serves as a centralized entry point to
     * enqueue and localize JavaScript required by any frontend feature.
     *
     * This allows modular services (such as Tracking, Dynamic Ads, etc.) to share
     * a common mechanism for script management, versioning, and localization.
     *
     * Uses {@see AssetLoader} for registering and localizing scripts.
     *
     * @since 0.1.0
     */
    class Assets
    {
        /**
         * Registers hooks used for enqueuing frontend scripts.
         *
         * Hooks into `wp_enqueue_scripts` to conditionally load tracking assets.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function register_hooks()
        {
        }
        /**
         * Enqueues frontend scripts and localizes runtime configuration.
         *
         * Currently enqueues tracking-related assets if Pixel or Conversion API
         * tracking is enabled. In the future, this method may coordinate loading
         * for additional features (e.g., product feeds, analytics).
         *
         * Scripts are registered and localized using the {@see AssetLoader}.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function enqueue_scripts()
        {
        }
    }
    /**
     * Declares compatibility with specific WooCommerce features.
     *
     * This class is primarily used to inform WooCommerce that this plugin is
     * compatible with features such as Custom Order Tables, enabling better performance
     * or integration when those features are enabled.
     *
     * @since 0.1.0
     */
    class Compatibility
    {
        /**
         * Registers WordPress hooks required for declaring WooCommerce compatibility.
         *
         * Hooks into `before_woocommerce_init` to ensure compatibility declarations
         * are registered before WooCommerce initializes its features.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public static function register_hooks(): void
        {
        }
        /**
         * Declares plugin compatibility with WooCommerce features.
         *
         * Currently declares support for:
         * - `custom_order_tables`: An experimental WooCommerce feature that stores
         *   orders in custom database tables for improved performance.
         *
         * This method uses {@see FeaturesUtil::declare_compatibility()} to safely
         * register compatibility and prevent admin notices about unsupported features.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public static function declare_compatibility(): void
        {
        }
    }
    /**
     * Defines global constants used throughout the Ad Partner integration plugin.
     *
     * This final class acts as a container for static configuration constants.
     * It is not intended to be instantiated or extended.
     *
     * @since 0.1.0
     */
    final class Config
    {
        /**
         * Unique slug identifier for the Ad Partner plugin.
         *
         * Used for naming purposes such as Action Scheduler groups, admin page slugs,
         * and internal prefixing of action/filter hooks.
         * Example: `snapchat_for_woocommerce`
         *
         * @since 0.1.0
         */
        const PLUGIN_SLUG = 'snapchat_for_woocommerce';
        /**
         * The namespace used for all REST API endpoints exposed by this plugin.
         *
         * This value is appended to `/wp-json/` to form the full route base.
         * Example: `/wp-json/wc/sfw/snapchat/config`
         *
         * @since 0.1.0
         *
         * @todo: Change this to the actual WCS endpoint.
         */
        const REST_NAMESPACE = 'wc/sfw';
        /**
         * Prefix used for all WordPress storage keys managed by this plugin.
         *
         * This prefix is prepended to all storage names (options or transients) to group
         * them under a consistent namespace.
         * Example: `snapchat_pixel_enabled`, `snapchat_access_token`
         *
         * @since 0.1.0
         */
        const STORE_PREFIX = 'snapchat_';
        /**
         * Prefix used for all asset handles registered or enqueued by this plugin.
         *
         * Used in `wp_enqueue_script`, `wp_register_style`, etc., to avoid name collisions.
         * Example: `snapchat_pixel-tracking`, `snapchat_admin-settings`
         *
         * @since 0.1.0
         */
        const ASSET_HANDLE_PREFIX = 'snapchat_';
        /**
         * JavaScript global variable prefix used for frontend data localization.
         *
         * This constant defines the prefix applied to all global variables created via `AssetLoader::localize_script()`.
         * For example, when localizing with object name `TrackingData`, the resulting JS global will be:
         * `window.snapchatAdsTrackingData`.
         *
         * This is used by Ad Partner scripts to access configuration, product metadata, or event identifiers
         * injected into the page from the server.
         *
         * @since 0.1.0
         *
         * @see \SnapchatForWooCommerce\Utils\AssetLoader::localize_script()
         */
        const AD_PARTNER_JS_VAR_PREFIX = 'snapchatAds';
    }
}
namespace SnapchatForWooCommerce\Connection {
    /**
     * Provides Jetpack authentication headers for use with Ad Partner connection services.
     *
     * This class uses Jetpack's connection manager to retrieve access tokens, from which it derives
     * a secure signature using HMAC-SHA1 to comply with WCS authentication requirements.
     */
    class JetpackAuthenticator
    {
        /**
         * Jetpack Connection Manager instance.
         *
         * @var \Automattic\Jetpack\Connection\Manager
         */
        private \Automattic\Jetpack\Connection\Manager $manager;
        /**
         * Constructor.
         *
         * Initializes the Jetpack connection manager used to retrieve access tokens.
         */
        public function __construct()
        {
        }
        /**
         * Returns the Jetpack authentication header string for use in HTTP requests to WCS.
         *
         * Attempts to retrieve a token via the `ad_partner_jetpack_auth_token` filter, falling back
         * to Jetpack’s internal token mechanism if the filter returns nothing.
         *
         * If token retrieval or structure validation fails, returns a `WP_Error`.
         *
         * @since 0.1.0
         *
         * @return string|\WP_Error Authentication header string (e.g., "X_JP_Auth ...") or error.
         */
        public function get_auth_header()
        {
        }
    }
    /**
     * Provides a wrapper for Jetpack's remote_request method.
     *
     * This class is used to perform authenticated requests to the
     * WooCommerce Services (WCS) backend using Jetpack's connection system.
     * It encapsulates Jetpack's static method behind a class-based interface
     * for clean separation of concerns.
     *
     * @since 0.1.0
     */
    class JetpackClient
    {
        /**
         * Sends a remote HTTP request using Jetpack's connection client.
         *
         * Delegates to Automattic\Jetpack\Connection\Client::remote_request().
         * Used for communicating with the WCS backend over a secure, authenticated channel.
         *
         * @since 0.1.0
         *
         * @param array             $args Arguments for the HTTP request.
         * @param array|string|null $body The request body.
         *
         * @return array|WP_Error Response array on success, or WP_Error on failure.
         */
        public function remote_request(array $args, $body = null)
        {
        }
    }
    /**
     * Handles encoding and decoding of state information used during OAuth authorization for Ad Partner services.
     *
     * The OAuth `state` parameter is a critical component in redirect flows to protect against CSRF attacks
     * and to persist context (e.g., return URL, service name) across redirects.
     *
     * This class safely serializes state data to a URL-safe format for inclusion in query strings and decodes it
     * back into structured arrays.
     */
    final class OAuthState
    {
        /**
         * Encodes an associative array into a URL-safe base64 string for use as an OAuth `state` parameter.
         *
         * The input array is serialized to JSON, base64 encoded, and then URL encoded.
         *
         * @since 0.1.0
         *
         * @param array $data Associative array of state data (e.g., return URL, service name).
         *
         * @return string URL-safe encoded state string.
         */
        public static function encode(array $data): string
        {
        }
        /**
         * Decodes a URL-safe encoded OAuth `state` string back into an associative array.
         *
         * Performs raw URL decoding, base64 decoding, and JSON deserialization. If decoding fails,
         * returns a `WP_Error` indicating the issue.
         *
         * @since 0.1.0
         *
         * @param string $state Encoded state string from the OAuth redirect.
         *
         * @return array|\WP_Error Decoded state data array or error if decoding fails.
         */
        public static function decode(string $state)
        {
        }
    }
    /**
     * Performs authenticated API calls to the Ad Partner's WCS backend.
     *
     * The WCS backend is a Jetpack-authenticated service that supports
     * OAuth-secured endpoints such as `/connection/status` and `/connection/connect`.
     *
     * This class includes helpers to send GET and POST requests using Jetpack tokens.
     * It is designed to centralize all HTTP communication between the plugin and the remote WCS service.
     */
    final class WcsClient
    {
        /**
         * Authenticator used to generate secure auth headers for API requests.
         *
         * @var JetpackAuthenticator
         */
        private \SnapchatForWooCommerce\Connection\JetpackAuthenticator $authenticator;
        /**
         * Jetpack client wrapper.
         *
         * @var JetpackClient
         */
        private \SnapchatForWooCommerce\Connection\JetpackClient $jetpack_client;
        /**
         * Class construnctor.
         *
         * @param JetpackAuthenticator $authenticator  Authenticator for API access.
         * @param JetpackClient        $jetpack_client Jetpack client wrapper.
         */
        public function __construct(\SnapchatForWooCommerce\Connection\JetpackAuthenticator $authenticator, \SnapchatForWooCommerce\Connection\JetpackClient $jetpack_client)
        {
        }
        /**
         * Sends a proxy GET request to an arbitrary WCS endpoint.
         *
         * @since 0.1.0
         *
         * @param string $path          Path within the WCS API (relative to service base).
         * @param array  $query_params  Optional query parameters to append to the URL.
         * @param bool   $requires_auth Whether to include the Jetpack auth header.
         *
         * @return \WP_REST_Response|\WP_Error API response or error.
         */
        public function proxy_get(string $path, array $query_params = array(), bool $requires_auth = true)
        {
        }
        /**
         * Sends a proxy POST request to an arbitrary WCS endpoint.
         *
         * @since 0.1.0
         *
         * @param string $path           Path within the WCS API (relative to service base).
         * @param mixed  $body           Body payload to send in JSON format.
         * @param bool   $requires_auth  Whether to include the Jetpack auth header.
         *
         * @return \WP_REST_Response|\WP_Error API response or error.
         */
        public function proxy_post(string $path, $body, bool $requires_auth = true)
        {
        }
        /**
         * Sends a proxy DELETE request to an arbitrary WCS endpoint.
         *
         * @since 0.1.0
         *
         * @param string $path           Path within the WCS API (relative to service base).
         * @param bool   $requires_auth  Whether to include the Jetpack auth header.
         *
         * @return \WP_REST_Response|\WP_Error API response or error.
         */
        public function proxy_delete(string $path, bool $requires_auth = true)
        {
        }
        /**
         * Returns the base URL for the WCS endpoint.
         *
         * @return string
         */
        public function get_wcs_url(): string
        {
        }
        /**
         * The service name under which the Ad Partner integration is
         * registered with WCS.
         *
         * @return string
         */
        private function get_wcs_service_name(): string
        {
        }
        /**
         * Internal method for executing a proxy request to the WCS API.
         *
         * Assembles the full URL, sets headers including the Jetpack token,
         * and sends the request using `wp_remote_request()`.
         *
         * @since 0.1.0
         *
         * @param string     $method         HTTP method (`GET` or `POST`).
         * @param string     $path           Endpoint path relative to the service root.
         * @param array|null $body           Optional request body (for POST) or query parameters (for GET).
         * @param bool       $requires_auth  Whether to include the Jetpack auth header.
         *
         * @return \WP_REST_Response|\WP_Error Parsed response or error.
         */
        public function proxy_request(string $method, string $path, $body = null, $requires_auth = true)
        {
        }
        /**
         * Parses a WCS API response and returns a formatted result or error.
         *
         * If the response is a valid 2xx response, returns a `WP_REST_Response`.
         * Otherwise, wraps the raw response inside a `WP_Error` object.
         *
         * @since 0.1.0
         *
         * @param mixed $response The result from `wp_remote_request()`.
         *
         * @return \WP_REST_Response|\WP_Error REST response object or error.
         */
        private function handle_response($response)
        {
        }
    }
}
namespace SnapchatForWooCommerce\MultichannelMarketing {
    /**
     * Class Marketing
     *
     * Registers the Snapchat marketing channel with WooCommerce's Marketing UI.
     * Acts as an integration point between WooCommerce's core marketing infrastructure
     * and the Snapchat channel defined in this plugin.
     *
     * @package SnapchatForWooCommerce\MultichannelMarketing
     *
     * @since 0.1.0
     */
    class Marketing
    {
        /**
         * Registers necessary WordPress/WooCommerce hooks to enable the Snapchat marketing channel.
         *
         * This function should be called during the plugin initialization phase.
         * It hooks into the `woocommerce_marketing_channels` filter to register the Snapchat channel
         * so it can be displayed in the WooCommerce marketing interface.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public static function register_hooks()
        {
        }
        /**
         * Adds the Snapchat marketing channel to the list of WooCommerce marketing channels.
         *
         * This method is hooked into the `woocommerce_marketing_channels` filter and appends
         * a new instance of the `SnapchatChannel` class to the array of available channels.
         *
         * @since 0.1.0
         *
         * @param \Automattic\WooCommerce\Admin\Marketing\MarketingChannelInterface[] $channels Associative array of registered marketing channels, keyed by their slug.
         *
         * @return \Automattic\WooCommerce\Admin\Marketing\MarketingChannelInterface[] Modified array of marketing channels including the Snapchat channel.
         */
        public static function add_snapchat_channel($channels)
        {
        }
    }
    /**
     * Class SnapchatChannel
     *
     * @package SnapchatForWooCommerce\MultichannelMarketing
     *
     * @since 0.1.0
     */
    class SnapchatChannel implements \Automattic\WooCommerce\Admin\Marketing\MarketingChannelInterface
    {
        /**
         * Returns the unique identifier string for the marketing channel extension, also known as the plugin slug.
         *
         * @since 0.1.0
         *
         * @return string
         */
        public function get_slug(): string
        {
        }
        /**
         * Returns the name of the marketing channel.
         *
         * @since 0.1.0
         *
         * @return string
         */
        public function get_name(): string
        {
        }
        /**
         * Returns the description of the marketing channel.
         *
         * @since 0.1.0
         *
         * @return string
         */
        public function get_description(): string
        {
        }
        /**
         * Returns the path to the channel icon.
         *
         * @since 0.1.0
         *
         * @return string
         */
        public function get_icon_url(): string
        {
        }
        /**
         * Returns the setup status of the marketing channel.
         *
         * @since 0.1.0
         *
         * @return bool
         */
        public function is_setup_completed(): bool
        {
        }
        /**
         * Returns the URL to the settings page, or the link to complete the setup/onboarding if the channel has not been set up yet.
         *
         * @since 0.1.0
         *
         * @return string
         */
        public function get_setup_url(): string
        {
        }
        /**
         * Returns the status of the marketing channel's product listings.
         *
         * @since 0.1.0
         *
         * @return string
         */
        public function get_product_listings_status(): string
        {
        }
        /**
         * Returns the number of channel issues/errors (e.g. account-related errors, product synchronization issues, etc.).
         *
         * @since 0.1.0
         *
         * @return int The number of issues to resolve, or 0 if there are no issues with the channel.
         */
        public function get_errors_count(): int
        {
        }
        /**
         * Returns an array of marketing campaign types that the channel supports.
         *
         * @since 0.1.0
         *
         * @return \Automattic\WooCommerce\Admin\Marketing\MarketingCampaignType[] Array of marketing campaign type objects.
         */
        public function get_supported_campaign_types(): array
        {
        }
        /**
         * Returns an array of the channel's marketing campaigns.
         *
         * @since 0.1.0
         *
         * @return \Automattic\WooCommerce\Admin\Marketing\MarketingCampaign[]
         */
        public function get_campaigns(): array
        {
        }
    }
}
namespace SnapchatForWooCommerce {
    /**
     * Initializes and wires up core components of the Ad Partner for WooCommerce plugin.
     *
     * This class is responsible for:
     * - Loading translations.
     * - Registering core WordPress hooks.
     * - Initializing and routing service handlers (e.g., connection and tracking).
     */
    final class Plugin
    {
        /**
         * Entry point for plugin initialization.
         *
         * Loads text domain and registers plugin-level hooks.
         */
        public static function init(): void
        {
        }
        /**
         * Registers WordPress hooks used by the plugin.
         *
         * Hooks registered:
         * - `rest_api_init` to load REST routes.
         * - `init` to initialize plugin features.
         *
         * @since 0.1.0
         */
        private static function register(): void
        {
        }
        /**
         * Registers REST API routes for plugin features.
         *
         * Delegates route registration to the appropriate service handlers:
         * - Connection service
         * - Pixel tracking service
         *
         * @since 0.1.0
         *
         * @return void
         */
        public static function register_rest_routes(): void
        {
        }
        /**
         * Initializes feature hooks during the `init` action.
         *
         * @since 0.1.0
         */
        public static function bootstrap_features(): void
        {
        }
        /**
         * Initializes admin feature hooks during the `admin_init` action.
         *
         * @since 0.1.0
         */
        public static function bootstrap_admin_features(): void
        {
        }
    }
    /**
     * Projects dummy connected-account data while preventing remote side effects.
     */
    final class SandboxMode
    {
        /**
         * The manually managed WordPress option that enables sandbox mode.
         *
         * Matches {@see Options::get_key( OptionDefaults::SANDBOX_MODE )} — kept as a
         * literal here so it can be read directly via WP-CLI without loading the plugin.
         */
        public const OPTION_NAME = 'snapchat_sandbox_mode';
        /**
         * Isolated storage for settings changed while sandbox mode is active.
         *
         * Matches {@see Options::get_key( OptionDefaults::SANDBOX_SETTINGS )}.
         */
        public const SETTINGS_OPTION_NAME = 'snapchat_sandbox_settings';
        /**
         * Registers the sandbox hooks.
         */
        public function register_hooks(): void
        {
        }
        /**
         * Removes the sandbox hooks. Primarily useful for isolated tests.
         */
        public function unregister_hooks(): void
        {
        }
        /**
         * Returns whether sandbox mode is enabled by its database option.
         */
        public static function is_enabled(): bool
        {
        }
        /**
         * Makes the channel appear onboarded without changing the live option.
         *
         * @param mixed $value Existing short-circuit value.
         * @return mixed
         */
        public function filter_onboarding_status($value)
        {
        }
        /**
         * Keeps the simulated setup on the accounts step.
         *
         * @param mixed $value Existing short-circuit value.
         * @return mixed
         */
        public function filter_onboarding_step($value)
        {
        }
        /**
         * Disables storefront tracking while sandbox mode is active.
         *
         * @param mixed $value Existing short-circuit value.
         * @return mixed
         */
        public function disable_tracking($value)
        {
        }
        /**
         * Returns the isolated conversions setting in admin/REST contexts.
         *
         * Tracking remains disabled for storefront and asynchronous requests.
         *
         * @param mixed $value Existing short-circuit value.
         * @return mixed
         */
        public function filter_conversion_setting($value)
        {
        }
        /**
         * Returns the isolated PII setting while sandbox mode is active.
         *
         * @param mixed $value Existing short-circuit value.
         * @return mixed
         */
        public function filter_collect_pii_setting($value)
        {
        }
        /**
         * Saves the sandbox conversions setting without updating its live counterpart.
         *
         * @param mixed $new_value Proposed setting value.
         * @param mixed $old_value Current live setting value.
         * @return mixed
         */
        public function save_conversion_setting($new_value, $old_value)
        {
        }
        /**
         * Saves the sandbox PII setting without updating its live counterpart.
         *
         * @param mixed $new_value Proposed setting value.
         * @param mixed $old_value Current live setting value.
         * @return mixed
         */
        public function save_collect_pii_setting($new_value, $old_value)
        {
        }
        /**
         * Returns simulated account data after normal REST permission checks pass.
         *
         * @param \WP_REST_Response|\WP_Error|null $response Existing dispatch result.
         * @param \WP_REST_Request                $request  REST request.
         * @return \WP_REST_Response|\WP_Error|null
         */
        public function intercept_rest_request($response, $request)
        {
        }
        /**
         * Removes callbacks that would register or synchronize remote product feeds.
         */
        public function disable_remote_product_hooks(): void
        {
        }
        /**
         * Whether settings should be visible instead of forced off for runtime safety.
         */
        private function is_settings_context(): bool
        {
        }
        /**
         * Reads one setting from the isolated sandbox option.
         *
         * @param string $key     Setting key.
         * @param mixed  $fallback Default value.
         * @return mixed
         */
        private function get_sandbox_setting(string $key, $fallback)
        {
        }
        /**
         * Writes one setting to the isolated sandbox option.
         *
         * @param string $key   Setting key.
         * @param mixed  $value Setting value.
         */
        private function set_sandbox_setting(string $key, $value): void
        {
        }
    }
    /**
     * Static service container for resolving shared instances across the Ad Partner plugin.
     *
     * This container lazily initializes services the first time they are requested and stores
     * them for subsequent use. Services are identified by string keys (e.g., 'connection', 'wcs_client').
     *
     * It simplifies dependency injection and ensures consistency across the plugin’s components.
     */
    final class ServiceContainer
    {
        /**
         * Stores resolved service instances.
         *
         * @var array<string,object>
         */
        private static $instances = array();
        /**
         * Retrieves a shared instance of a requested service.
         *
         * If the service has not yet been created, it is resolved and cached internally.
         *
         * @since 0.1.0
         *
         * @param string $service Name of the service to retrieve (e.g., 'connection').
         *
         * @return object The resolved service instance.
         */
        public static function get(string $service)
        {
        }
        /**
         * Resolves and instantiates a service based on its string identifier.
         *
         * This acts as the internal factory for all supported services.
         *
         * @since 0.1.0
         *
         * @param string $service The service name.
         *
         * @return object The newly instantiated service.
         *
         * @throws \InvalidArgumentException If the requested service is unknown.
         */
        private static function resolve(string $service)
        {
        }
    }
    /**
     * Enum-like container for service identifiers.
     *
     * These constants represent the valid service keys that can be requested from the ServiceContainer.
     * Using constants avoids typos and ensures consistent service resolution throughout the plugin.
     *
     * This approach also provides a smoother upgrade path to PHP 8.1 native enums in the future.
     *
     * @since 0.1.0
     */
    final class ServiceKey
    {
        /**
         * Identifier for the Jetpack authenticator service.
         *
         * @since 0.1.0
         */
        public const JETPACK_AUTHENTICATOR = 'jetpack_authenticator';
        /**
         * Identifier for the WCS API client service.
         *
         * @since 0.1.0
         */
        public const WCS_CLIENT = 'wcs_client';
        /**
         * Identifier for the Global Site Tag service.
         *
         * @since 0.1.0
         */
        public const GLOBAL_SITE_TAG = 'global_site_tag';
        /**
         * Identifier for the pixel tracking service.
         *
         * @since 0.1.0
         */
        public const PIXEL_TRACKING = 'pixel_tracking';
        /**
         * Identifier for the conversion tracking service.
         *
         * @since 0.1.0
         */
        public const CONVERSION_TRACKING = 'conversion_tracking';
        /**
         * Identifier for the Admin related services and features.
         *
         * @since 0.1.0
         */
        public const ADMIN_SETUP = 'admin_setup';
        public const PRODUCT_EXPORT_SERVICE = 'product_export_service';
        /**
         * Identifier for the Settings REST Controller Setup
         *
         * @since 0.1.0
         */
        public const SETTINGS_REST_CONTROLLER_SETUP = 'settings_rest_controller_setup';
    }
}
namespace SnapchatForWooCommerce\Tracking {
    /**
     * Static interface for checking marketing consent.
     *
     * Checks whether the current visitor has granted consent for marketing tracking,
     * using the WordPress Consent API. Fails open by returning `true` if the API
     * is not present (e.g., no consent management plugin is installed).
     *
     * Designed to be used in tracking logic and script enqueuing conditions.
     *
     * @since 0.1.0
     */
    final class Consent
    {
        /**
         * Determines whether the visitor has granted marketing consent.
         *
         * Uses the WordPress Consent API to verify if the visitor has opted into
         * marketing tracking. If the API is not available (e.g., no Consent plugin
         * installed), the method defaults to assuming consent is granted (fail-open).
         *
         * @since 0.1.0
         *
         * @return bool True if consent is granted or undetermined; false if explicitly denied.
         */
        public static function has_marketing_consent(): bool
        {
        }
    }
}
namespace SnapchatForWooCommerce\Tracking\ConversionEvent {
    /**
     * Represents a server-side Ad Partner conversion event.
     *
     * All conversion events must be able to generate a payload compatible
     * with the Ad Partner Conversions API.
     *
     * @since 0.1.0
     */
    interface ConversionEventInterface
    {
        /**
         * Builds the payload to send to the Ad Partner Conversions API.
         *
         * @since 0.1.0
         *
         * @return array<string,mixed> Raw event payload.
         */
        public function build_payload(): array;
    }
    /**
     * Defines common payload fields used by all Conversion events.
     *
     * Child classes (e.g., PurchaseEvent) should call {@see EventPayloadBase::build_payload()}
     * and then merge in their own event-specific fields and any overrides:
     *
     * `$base = parent::build_payload();`
     * `return array_merge( $base, $event_specific, $overrides );`
     *
     * @since 0.1.0
     */
    class EventPayloadBase
    {
        /**
         * Source describing where the event was observed.
         * Common values include: WEB, APP, OFFLINE.
         *
         * @since 0.1.0
         */
        public const ACTION_SOURCE = 'WEB';
        /**
         * Build the base payload for an Ad Partner conversion event.
         *
         * This provides the common fields expected by Ads Conversions
         * (and other Ad Partners) for all WooCommerce-triggered events.
         * Child event classes should call this method and merge in their
         * event-specific fields.
         *
         * The returned array includes:
         * - `event_time`       — Epoch timestamp (ms preferred) of when the event occurred.
         * - `integration`      — Identifier string for this integration (eg: `woocommerce-v1-0-0`).
         * - `event_source_url` — The URL where the event originated (from {@see wc_get_raw_referer()}).
         * - `action_source`    — The source channel describing where the event was observed.
         *
         * @since 0.1.0
         *
         * @return array Associative array of base payload fields.
         */
        public function build_payload(): array
        {
        }
    }
    /**
     * Constructs a Conversion request payload for the ADD_CART event type.
     *
     * This class captures minimal cart data for tracking add-to-cart conversions.
     *
     * @since 0.1.0
     */
    final class AddToCartEvent extends \SnapchatForWooCommerce\Tracking\ConversionEvent\EventPayloadBase implements \SnapchatForWooCommerce\Tracking\ConversionEvent\ConversionEventInterface
    {
        /**
         * Unique identifier for this event type.
         *
         * Used to register and identify the event in the system.
         *
         * @since 0.1.0
         */
        public const ID = 'ADD_CART';
        /**
         * Product ID being added to the cart.
         *
         * @since 0.1.0
         * @var int
         */
        private $product_id;
        /**
         * Quantity of the product added.
         *
         * @since 0.1.0
         * @var int
         */
        private $quantity;
        /**
         * Constructor.
         *
         * @since 0.1.0
         *
         * @param int $product_id Product ID.
         * @param int $quantity   Quantity added.
         */
        public function __construct(int $product_id, int $quantity)
        {
        }
        /**
         * Builds the raw Conversion payload for the Ad Partner.
         *
         * @since 0.1.0
         *
         * @param array $args Overrideable payload args.
         *
         * @return array<string,mixed> Conversion event payload.
         */
        public function build_payload(array $args = array()): array
        {
        }
    }
    /**
     * Constructs a Conversion request payload for the PAGE_VIEW event type.
     *
     * This class captures minimal single product page data for tracking
     * view content conversions.
     *
     * @since 0.1.0
     */
    final class PageViewEvent extends \SnapchatForWooCommerce\Tracking\ConversionEvent\EventPayloadBase implements \SnapchatForWooCommerce\Tracking\ConversionEvent\ConversionEventInterface
    {
        /**
         * Unique identifier for this event type.
         *
         * Used to register and identify the event in the system.
         *
         * @since 0.1.0
         */
        public const ID = 'PAGE_VIEW';
        /**
         * Builds the raw Conversion payload for the Ad Partner.
         *
         * @since 0.1.0
         *
         * @param array $args Overrideable payload args.
         *
         * @return array<string,mixed> Conversion event payload.
         */
        public function build_payload(array $args = array()): array
        {
        }
    }
    /**
     * Constructs a Conversion request payload for the PURCHASE event type.
     *
     * Extracts item details, order totals, and identifiers from
     * the WooCommerce order object to track conversions accurately.
     *
     * @since 0.1.0
     */
    final class PurchaseEvent extends \SnapchatForWooCommerce\Tracking\ConversionEvent\EventPayloadBase implements \SnapchatForWooCommerce\Tracking\ConversionEvent\ConversionEventInterface
    {
        /**
         * Unique identifier for this event type.
         *
         * Used to register and identify the event in the system.
         *
         * @since 0.1.0
         */
        public const ID = 'PURCHASE';
        /**
         * WooCommerce order object.
         *
         * @since 0.1.0
         * @var \WC_Order|null
         */
        private $order;
        /**
         * Constructor.
         *
         * @since 0.1.0
         *
         * @param int $order_id WooCommerce order ID.
         */
        public function __construct(int $order_id)
        {
        }
        /**
         * Builds the raw Conversion payload for the Ad Partner.
         *
         * Includes order totals, currency, line items, and metadata.
         *
         * @since 0.1.0
         *
         * @param array $args Overrideable payload args.
         *
         * @return array<string,mixed> Conversion event payload.
         */
        public function build_payload(array $args = array()): array
        {
        }
    }
    /**
     * Constructs a Conversion request payload for the START_CHECKOUT event type.
     *
     * This class captures minimal single product page data for tracking
     * start checkout conversions.
     *
     * @since 0.1.0
     */
    final class StartCheckoutEvent extends \SnapchatForWooCommerce\Tracking\ConversionEvent\EventPayloadBase implements \SnapchatForWooCommerce\Tracking\ConversionEvent\ConversionEventInterface
    {
        /**
         * Unique identifier for this event type.
         *
         * Used to register and identify the event in the system.
         *
         * @since 0.1.0
         */
        public const ID = 'START_CHECKOUT';
        /**
         * WooCommerce Cart object.
         *
         * @since 0.1.0
         * @var \WC_Cart
         */
        private $cart;
        /**
         * Constructor.
         *
         * @since 0.1.0
         *
         * @param \WC_Cart $cart WooCommerce Cart object.
         */
        public function __construct(\WC_Cart $cart)
        {
        }
        /**
         * Builds the raw Conversion payload for the Ad Partner.
         *
         * Includes order totals, currency, line items, and metadata.
         *
         * @since 0.1.0
         *
         * @param array $args Overrideable payload args.
         *
         * @return array<string,mixed> Conversion event payload.
         */
        public function build_payload(array $args = array()): array
        {
        }
    }
    /**
     * Constructs a Conversion request payload for the VIEW_CONTENT event type.
     *
     * This class captures minimal single product page data for tracking
     * view content conversions.
     *
     * @since 0.1.0
     */
    final class ViewContentEvent extends \SnapchatForWooCommerce\Tracking\ConversionEvent\EventPayloadBase implements \SnapchatForWooCommerce\Tracking\ConversionEvent\ConversionEventInterface
    {
        /**
         * Unique identifier for this event type.
         *
         * Used to register and identify the event in the system.
         *
         * @since 0.1.0
         */
        public const ID = 'VIEW_CONTENT';
        /**
         * Product ID being viewed.
         *
         * @since 0.1.0
         * @var int
         */
        private $product_id;
        /**
         * Constructor.
         *
         * @since 0.1.0
         *
         * @param int $product_id Product ID.
         */
        public function __construct(int $product_id)
        {
        }
        /**
         * Builds the raw Conversion payload for the Ad Partner.
         *
         * @since 0.1.0
         *
         * @param array $args Overrideable payload args.
         *
         * @return array<string,mixed> Conversion event payload.
         */
        public function build_payload(array $args = array()): array
        {
        }
    }
}
namespace SnapchatForWooCommerce\Tracking {
    /**
     * Service class for logging failed or significant conversion tracking events.
     *
     * Logs are directed to the WooCommerce logger system using impact-sensitive levels:
     * - `critical` for purchases
     * - `high` for add-to-cart, start-checkout, and view-content
     * - `info` fallback for less critical events
     *
     * The logger can be used to monitor integration health and troubleshoot failed API calls.
     *
     * @since 0.1.0
     */
    class ConversionEventLogger
    {
        /**
         * WooCommerce logger instance.
         *
         * @var \WC_Logger_Interface
         */
        protected $logger;
        /**
         * Constructor.
         *
         * @param \WC_Logger_Interface $logger WooCommerce logger instance.
         */
        public function __construct(\WC_Logger_Interface $logger)
        {
        }
        /**
         * Logs the outcome of a conversion event based on HTTP status code.
         *
         * - If the status code is in the 2xx range, logs at `info` level as success.
         * - Otherwise, logs at an appropriate severity based on event type.
         *
         * @since 0.1.0
         *
         * @param string $event_name  Event identifier (e.g. 'PURCHASE', 'ADD_CART').
         * @param ?int   $status_code HTTP status code returned from the API.
         * @param array  $context     Optional structured context.
         * @return void
         */
        public function log_event(string $event_name, ?int $status_code, array $context = array()): void
        {
        }
        /**
         * Determine the appropriate log level based on event name.
         *
         * @param string $event_name The name of the conversion event (e.g., 'PURCHASE', 'ADD_CART').
         */
        protected function determine_log_level(string $event_name): string
        {
        }
    }
    /**
     * Interface for sending server-side conversion events to an Ad Partner API.
     *
     * Implementers of this interface are responsible for preparing and dispatching
     * conversion payloads that correspond to WooCommerce user actions — such as
     * product additions to cart or completed purchases.
     *
     * These events are typically sent through an API endpoint provided by the Ad Partner,
     * and may be transmitted immediately or via background job processors such as Action Scheduler.
     *
     * A matching client-side event (e.g. tracking pixel) is often sent in parallel to improve
     * measurement accuracy. Deduplication identifiers (e.g., `event_id`) are used to avoid double attribution.
     *
     * ---
     * 🎯 Tracking Event Priority Reference
     *
     * | Impact Level | Description                                                | Recommended Delivery Strategy       |
     * |--------------|------------------------------------------------------------|-------------------------------------|
     * | 🔴 Critical  | Missing this breaks ROAS, attribution, and ad optimization | Use Action Scheduler or job queue   |
     * | 🟠 High      | Important for funnels and retargeting                      | Use Action Scheduler where feasible |
     * | 🟡 Medium    | Useful for remarketing and behavior signals                | Use async request (AJAX)            |
     * | 🟢 Low       | Low impact analytics or audience seeding                   | Use async request (AJAX)            |
     * ---
     *
     * @since 0.1.0
     */
    interface ConversionTrackerInterface
    {
        /**
         * Tracks a completed purchase event via the Ad Partner’s Conversions API.
         *
         * This method should be called when a WooCommerce order is completed or reaches a defined status.
         * The implementing class is expected to extract relevant order metadata (e.g., total amount, item list, currency),
         * contextual information (e.g., user agent, IP), and deduplication identifiers (e.g., event ID or transaction ID).
         * It should construct a payload compatible with the Ad Partner’s API and dispatch it accordingly.
         *
         * To ensure reliable delivery — even if the customer closes the browser or loses connectivity —
         * this method must enqueue the event for asynchronous processing using a background job system
         * such as Action Scheduler or a custom job queue.
         *
         * @since 0.1.0
         * @impact 🔴 critical — Required for accurate revenue attribution and ad spend optimization.
         *
         * @param int $order WooCommerce order ID to track.
         * @return void
         */
        public function track_purchase(int $order): void;
        /**
         * Tracks a checkout initiation event via the Ad Partner’s Conversions API.
         *
         * This method should be called when a user first reaches the Checkout page from a previous step
         * in the funnel (e.g., cart or mini-cart). The implementing class is expected to extract contextual
         * user data (e.g., session ID, IP address, user agent) and any available cart metadata at that point.
         * A deduplication identifier (e.g., `event_id`) should be included to reconcile this event with a matching
         * client-side pixel signal, if present.
         *
         * ⚠️ This event should **not** be triggered on simple page reloads to avoid inflating analytics.
         * However, if the user navigates away from the Checkout and later returns (e.g., using back/forward
         * buttons or repeating the funnel), it **should** be considered a new and unique `start_checkout` event.
         *
         * As a high-priority funnel milestone, this event is critical for tracking drop-off rates,
         * powering retargeting campaigns, and improving checkout conversion strategies.
         *
         * To ensure reliable delivery — even if the user exits the session or disconnects mid-checkout —
         * this event should be enqueued using a background job processor such as Action Scheduler.
         *
         * @since 0.1.0
         * @impact 🟠 high — Key funnel milestone; essential for retargeting and conversion tracking.
         *
         * @param \WC_Cart $cart     The WooCommerce cart object containing current session data.
         * @param string  $event_id The unique event ID used for deduplication.
         * @return void
         */
        public function track_start_checkout(\WC_Cart $cart, string $event_id = ''): void;
        /**
         * Tracks a product add-to-cart event via the Ad Partner’s Conversions API.
         *
         * This method should be called when a product is added to the cart server-side
         * (e.g., during AJAX handlers or custom logic). The implementing class is expected
         * to extract product details (e.g., ID, price, quantity), contextual metadata
         * (e.g., session, IP, user agent), and deduplication keys (e.g., event ID) to build
         * a compatible payload for the Ad Partner’s Conversions API.
         *
         * To ensure reliable delivery — even if the customer closes the browser or loses connectivity —
         * this method must enqueue the event for asynchronous processing using a background job system
         * such as Action Scheduler or a custom job queue.
         *
         * @since 0.1.0
         * @impact 🟠 high — Valuable for retargeting and funnel analytics.
         *
         * @param int    $product_id WooCommerce product ID being added.
         * @param int    $quantity   Quantity of the product added to cart.
         * @param string $event_id   The unique event ID.
         * @return void
         */
        public function track_add_to_cart(int $product_id, int $quantity, string $event_id = ''): void;
        /**
         * Tracks a product view (ViewContent) event via the Ad Partner’s Conversions API.
         *
         * This method should be called when a user views a single product page. The implementing class
         * is expected to extract relevant product metadata (e.g., product ID). along with contextual
         * user data (e.g., IP address, user agent, session ID), and deduplication identifiers such as
         * an `event_id`. The constructed payload should comply with the Ad Partner’s Conversions API
         * specification and be dispatched either immediately or queued for asynchronous processing.
         *
         * ⚠️ Important: This event is triggered with high frequency on high-traffic sites. Therefore, it
         * should **not** be enqueued using Action Scheduler or background job queues, as those tables
         * would grow rapidly and impact performance. Instead, dispatch the event immediately via a
         * lightweight async mechanism such as `navigator.sendBeacon()` or a fire-and-forget AJAX request.
         *
         * 🧠 For high-quality signal generation, avoid firing this event on simple page reloads. Instead,
         * treat direct URL visits, redirections, and backward/forward browser navigation as meaningful
         * product views worthy of triggering this event.
         *
         * @since 0.1.0
         * @impact 🟠 high — Valuable for retargeting and funnel analytics.
         *
         * @param int    $product_id WooCommerce product ID being viewed.
         * @param string $event_id   The unique event ID used for deduplication.
         * @return void
         */
        public function track_view_content(int $product_id, string $event_id = ''): void;
        /**
         * Tracks a page view event via the Ad Partner’s Conversions API.
         *
         * This method should be called when a user views a non-product page (e.g., homepage, category page, blog).
         * The implementing class is expected to gather contextual metadata such as the current URL,
         * referrer, session ID, user agent, and IP address. A deduplication identifier (e.g., `event_id`)
         * should be included if possible to match client-side tracking.
         *
         * To avoid performance bottlenecks, this event should be dispatched using a lightweight async method
         * such as an AJAX call. Avoid queuing it in background job systems like Action Scheduler.
         *
         * @since 0.1.0
         * @impact 🟢 low — General analytics or audience seeding.
         *
         * @param string $event_id  The unique event ID used for deduplication.
         * @return void
         */
        public function track_page_view(string $event_id = ''): void;
        /**
         * Sends a previously constructed conversion event payload to the Ad Partner’s Conversions API.
         *
         * This method is typically triggered asynchronously by background job processors such as
         * Action Scheduler. The implementing class is expected to retrieve necessary authentication
         * credentials (e.g., access token), contextual data (e.g., user identifiers), and construct
         * the full API request to the appropriate Ad Partner endpoint.
         *
         * The payload may represent events such as purchases or add-to-cart actions and should be
         * formatted according to the Ad Partner’s specification. This method should also handle
         * response parsing, error handling, and optionally trigger related WordPress hooks for
         * extensibility.
         *
         * @since 0.1.0
         *
         * @param array<string,mixed> $event_payload The event payload to transmit, including metadata and user data.
         * @param array               $args          Additional arguments passed alongside the payload (e.g., order ID).
         * @return void
         */
        public function send(array $event_payload, array $args): void;
    }
    /**
     * Declares a common method for checking if a tracking or integration
     * service is currently enabled.
     *
     * Implementing classes must define a static `is_enabled()` method
     * to report their operational status.
     *
     * @since 0.1.0
     */
    interface ServiceStatusInterface
    {
        /**
         * Indicates whether the service is enabled.
         *
         * Typically this involves checking a plugin option or runtime condition.
         *
         * @since 0.1.0
         *
         * @return bool True if the service is active; false otherwise.
         */
        public static function is_enabled(): bool;
    }
    /**
     * Service class for registering WooCommerce conversion tracking hooks.
     *
     * This class listens to WooCommerce events and triggers corresponding
     * server-side conversion tracking via the provided {@see ConversionTrackerInterface}.
     *
     * - `woocommerce_thankyou` - triggers purchase event tracking
     * - `woocommerce_add_to_cart` - triggers add-to-cart tracking
     * - Custom async action (e.g., Action Scheduler) can be used via `send_conversion_event`
     *
     * @since 0.1.0
     */
    class ConversionTrackingService implements \SnapchatForWooCommerce\Tracking\ServiceStatusInterface
    {
        /**
         * Instance of a class implementing conversion tracking logic.
         *
         * @var ConversionTrackerInterface
         */
        protected \SnapchatForWooCommerce\Tracking\ConversionTrackerInterface $tracker;
        /**
         * Constructor.
         *
         * Accepts a concrete implementation of the {@see ConversionTrackerInterface},
         * which is responsible for sending the actual tracking payloads to the Ad Partner API.
         *
         * @since 0.1.0
         *
         * @param ConversionTrackerInterface $tracker Tracker implementation instance.
         */
        public function __construct(\SnapchatForWooCommerce\Tracking\ConversionTrackerInterface $tracker)
        {
        }
        /**
         * Registers WooCommerce hooks for conversion event tracking.
         *
         * It attaches conversion tracking to:
         * - Purchase events (`woocommerce_thankyou`)
         * - Add to Cart events (`woocommerce_add_to_cart`)
         * - Asynchronous tracking hook via Action Scheduler
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function register_hooks(): void
        {
        }
        /**
         * Determines whether Snapchat Conversion tracking is currently enabled.
         *
         * This checks the persisted plugin option configured via the admin interface or defaults.
         *
         * @since 0.1.0
         *
         * @return bool True if pixel tracking is enabled; false otherwise.
         */
        public static function is_enabled(): bool
        {
        }
        /**
         * Callback for WooCommerce purchase completion events.
         *
         * Invoked after a customer completes checkout. Delegates to the tracker
         * to send the order data to the Ad Partner's Conversions API.
         *
         * @since 0.1.0
         *
         * @param int $order_id WooCommerce order ID.
         * @return void
         */
        public function handle_purchase(int $order_id): void
        {
        }
        /**
         * Callback for WooCommerce add-to-cart actions.
         *
         * Triggered when a product is added to the cart.
         * Passes product ID and quantity to the tracker for building the tracking payload.
         *
         * @since 0.1.0
         *
         * @param string $cart_item_key Unique key for the cart item.
         * @param int    $product_id    WooCommerce product ID added to the cart.
         * @param int    $quantity      Quantity of product added.
         * @param int    $variation_id  WooCommerce product variation ID added to the cart.
         * @return void
         */
        public function handle_single_product_add_to_cart(string $cart_item_key, int $product_id, int $quantity, int $variation_id): void
        {
        }
        /**
         * Handles AJAX-based Add to Cart requests for server-side tracking.
         *
         * This endpoint is called when a product is added to the cart synchronously
         * via JavaScript.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function handle_async_add_to_cart(): void
        {
        }
        /**
         * Handles asynchronous View Content tracking requests.
         *
         * This method is called via AJAX when a single product page is viewed.
         * It extracts the product ID and event ID from the request and triggers
         * the tracker.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function handle_async_view_content(): void
        {
        }
        /**
         * Handles asynchronous Start Checkout tracking requests.
         *
         * This method is called via AJAX when the checkout page is visited.
         * It extracts the event ID from the request and triggers the tracker.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function handle_async_start_checkout(): void
        {
        }
        /**
         * Handles asynchronous Page View tracking requests.
         *
         * This method is called via AJAX when any page view event is triggered by frontend JavaScript.
         * It extracts the `event_id` from the request and delegates tracking to the configured
         * {@see ConversionTrackerInterface} implementation.
         *
         * This handler is used in low-priority tracking scenarios (e.g., audience seeding, general analytics)
         * where page views are recorded. It is intended for broad usage across all site pages,
         * including product and content pages, in an MVP setup.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function handle_async_page_view(): void
        {
        }
        /**
         * Marks the given order as tracked to prevent duplicate conversion reporting.
         *
         * This should be called after a successful conversion event has been sent
         * to the Ad Partner. It updates the order meta with a flag to indicate
         * that the conversion has already been tracked.
         *
         * @since 0.1.0
         *
         * @param array $event_payload The payload that was sent to the Ad Partner.
         * @param array $args {
         *     Additional arguments passed to the tracking action.
         *
         *     @type int $order_id The ID of the WooCommerce order to mark as tracked.
         * }
         */
        public function mark_as_tracked($event_payload, $args)
        {
        }
    }
    /**
     * Provides default constants for pixel tracking behavior.
     *
     * This final class contains static values that define expected defaults used
     * in validating and handling the Ad Partner’s pixel. By isolating these values,
     * the system remains adaptable to future changes.
     *
     * @since 0.1.0
     */
    final class PixelDefaults
    {
        /**
         * Expected CDN URL for the Ad Partner’s pixel tracking script.
         *
         * This constant defines the exact URL from which the official tracking script
         * is expected to load. It is used primarily in validation routines to ensure
         * that cached or injected pixel scripts have not been altered or replaced.
         *
         * Changing this value requires coordination with the Ad Partner, and it should
         * never be exposed to end-users for editing.
         *
         * Used in:
         * - {@see \SnapchatForWooCommerce\Tracking\RemotePixelTracker::is_valid_pixel_script}
         *
         * @since 0.1.0
         */
        const EXPECTED_SCRIPT_URL = 'https://sc-static.net/scevent.min.js';
    }
    /**
     * Interface for tracking pixel injectors used in Snapchat for WooCommerce integration.
     *
     * Implementers of this interface should determine if and when a tracking pixel should be
     * rendered into the HTML output. This is commonly used to track user behavior for ad platforms.
     *
     * Example implementations might inject JavaScript pixels on product or checkout pages
     * depending on configuration and user consent.
     *
     * @since 0.1.0
     */
    interface PixelTrackerInterface
    {
        /**
         * Conditionally injects the tracking pixel into the page output.
         *
         * This method is expected to be hooked into WordPress actions (e.g., `wp_head`)
         * or called during template rendering. It should determine internally whether the
         * pixel should be output based on plugin settings, page context, or filters.
         *
         * @since 0.1.0
         */
        public function maybe_inject_pixel(): void;
    }
    /**
     * Handles the registration of pixel-related hooks and provides access to tracking status.
     *
     * This service registers frontend and REST API hooks to support pixel injection behavior.
     * Pixel rendering is delegated to a {@see PixelTrackerInterface} implementation. It also provides
     * a utility method to check whether tracking is currently enabled via plugin settings.
     *
     * Dependencies:
     * - {@see PixelTrackerInterface}: Determines if and how the pixel should be injected.
     * - {@see OptionsStore} and {@see OptionDefaults}: Used to read tracking settings.
     *
     * @since 0.1.0
     */
    final class PixelTrackingService implements \SnapchatForWooCommerce\Tracking\ServiceStatusInterface
    {
        /**
         * Collected product data for localization.
         *
         * @var array
         */
        protected array $products = array();
        /**
         * Instance of the pixel tracker responsible for rendering the pixel.
         *
         * @var PixelTrackerInterface
         */
        private \SnapchatForWooCommerce\Tracking\PixelTrackerInterface $tracker;
        /**
         * Constructor.
         *
         * @since 0.1.0
         *
         * @param PixelTrackerInterface $tracker Instance implementing the logic to inject the tracking pixel.
         */
        public function __construct(\SnapchatForWooCommerce\Tracking\PixelTrackerInterface $tracker)
        {
        }
        /**
         * Registers WordPress hooks used for pixel injection and WooCommerce event hooks.
         *
         * - Hooks into `wp_head` to optionally inject the pixel.
         * - Enqueues inline pixel data in `wp_footer`.
         * - Hooks into WooCommerce templates to collect product data for pixel events.
         *
         * @since 0.1.0
         */
        public function register_hooks(): void
        {
        }
        /**
         * Checks whether Pixel tracking is enabled in plugin settings.
         *
         * @since 0.1.0
         *
         * @return bool True if tracking is enabled; false otherwise.
         */
        public static function is_enabled(): bool
        {
        }
        /**
         * Returns pixel-specific metadata to be localized to the frontend.
         *
         * Includes currency settings and collected product pricing info.
         *
         * @since 0.1.0
         *
         * @return array Associative array of pixel metadata.
         */
        public function get_pixel_data(): array
        {
        }
        /**
         * Injects inline tracking data into the page footer.
         *
         * Conditionally populates tracking data with relevant event payloads
         * such as `VIEW_CONTENT`, `START_CHECKOUT`, and `PAGE_VIEW`, then
         * localizes it to the frontend as a global JS variable.
         *
         * @since 0.1.0
         */
        public function populate_tracking_data(): void
        {
        }
        /**
         * Collects product pricing data for use in pixel tracking.
         *
         * Used during loop and single-product rendering to build a list of products
         * and their display prices for later localization.
         *
         * @since 0.1.0
         *
         * @param \WC_Product $product Product instance being rendered.
         */
        protected function add_product_data(\WC_Product $product): void
        {
        }
        /**
         * Adds `VIEW_CONTENT` tracking event to the data structure.
         *
         * Called when rendering a single product page, appending the price,
         * currency, and item ID for frontend tracking. Modifies $tracking_data in-place.
         *
         * @since 0.1.0
         *
         * @param array $tracking_data Reference to tracking data array being localized.
         */
        public function filter_view_content_event_data(&$tracking_data): void
        {
        }
        /**
         * Adds `START_CHECKOUT` tracking event to the data structure.
         *
         * Called when the customer lands on the checkout page. Adds
         * cart totals, currency, item count, and product IDs to $tracking_data.
         *
         * @since 0.1.0
         *
         * @param array $tracking_data Reference to tracking data array being localized.
         */
        public function filter_start_checkout_event_data(&$tracking_data): void
        {
        }
        /**
         * Adds `PAGE_VIEW` tracking flag to the data structure.
         *
         * Only applies on general site pages (excluding product and checkout pages).
         *
         * @since 0.1.0
         *
         * @param array $tracking_data Reference to tracking data array being localized.
         */
        public function filter_page_view_event_data(&$tracking_data): void
        {
        }
        /**
         * Outputs a hidden input field for the Event ID on single product pages.
         *
         * This is used to inject a unique UUID per Add to Cart action, enabling
         * deduplication between Pixel and CAPI events.
         *
         * Also injects inline JavaScript that generates a `window.crypto.randomUUID()` and
         * assigns it to the hidden field.
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function render_event_id_field(): void
        {
        }
    }
    /**
     * Handles conversion tracking by sending server-side events to the Ad Partner Conversions API.
     *
     * This class is the concrete implementation of {@see ConversionTrackerInterface} responsible
     * for building and queuing tracking events (such as purchase and add-to-cart) and delivering them
     * to the Ad Partner's API through the WCS proxy endpoint.
     *
     * Events are queued asynchronously using Action Scheduler to avoid slowing down frontend or checkout flows.
     *
     * @since 0.1.0
     */
    class RemoteConversionTracker implements \SnapchatForWooCommerce\Tracking\ConversionTrackerInterface
    {
        /**
         * Meta key used to mark orders that have already been tracked.
         */
        public const ORDER_CONVERSION_TRACKED_META_KEY = '_snapchat_conversion_tracked';
        /**
         * WCS client used to proxy API requests to the Ad Partner.
         *
         * @var \SnapchatForWooCommerce\Connection\WcsClient
         */
        protected \SnapchatForWooCommerce\Connection\WcsClient $client;
        /**
         * Logger instance for tracking conversion events.
         *
         * This logger is used to log successful and failed event transmissions,
         * as well as debug information about the payloads being sent.
         *
         * @var ConversionEventLogger
         */
        protected \SnapchatForWooCommerce\Tracking\ConversionEventLogger $logger;
        /**
         * Constructor.
         *
         * @since 0.1.0
         *
         * @param \SnapchatForWooCommerce\Connection\WcsClient             $client WCS API proxy client.
         * @param ConversionEventLogger $logger Logger instance for tracking conversion events.
         */
        public function __construct(\SnapchatForWooCommerce\Connection\WcsClient $client, \SnapchatForWooCommerce\Tracking\ConversionEventLogger $logger)
        {
        }
        /**
         * Tracks a WooCommerce purchase event.
         *
         * Instantiates a {@see PurchaseEvent} object using the given order ID,
         * generates a valid API payload, and schedules it for dispatch to the Ad Partner
         * via Action Scheduler. The payload includes product, revenue, user, and deduplication data.
         *
         * @since 0.1.0
         *
         * @param int $order_id WooCommerce order ID.
         * @return void
         */
        public function track_purchase(int $order_id): void
        {
        }
        /**
         * Tracks a WooCommerce checkout initiation event.
         *
         * This method should be called when a user first reaches the Checkout page
         * (i.e., transitions from Cart or Mini-Cart to Checkout). It instantiates a
         * {@see StartCheckoutEvent} object using the active cart, generates a structured
         * conversion payload, and schedules it for asynchronous dispatch to the Ad Partner
         * using Action Scheduler.
         *
         * ⚠️ This event should not be triggered on simple page reloads. However, if a user
         * navigates away and later returns to the Checkout page, it should be treated as a
         * new `start_checkout` event.
         *
         * The payload includes cart contents, currency, value, and contextual identifiers
         * such as IP and user agent to support deduplication and targeting.
         *
         * @since 0.1.0
         *
         * @param \WC_Cart $cart     WooCommerce cart object representing the current session.
         * @param string  $event_id The unique event ID used for deduplication (optional).
         * @return void
         */
        public function track_start_checkout(\WC_Cart $cart, string $event_id = ''): void
        {
        }
        /**
         * Tracks a WooCommerce add-to-cart event.
         *
         * Instantiates an {@see AddToCartEvent} using the given product ID and quantity,
         * builds a conversion payload, and schedules it for asynchronous dispatch.
         *
         * @since 0.1.0
         *
         * @param int    $product_id WooCommerce product ID.
         * @param int    $quantity   Quantity added to cart.
         * @param string $event_id The unique event ID.
         *
         * @return void
         */
        public function track_add_to_cart(int $product_id, int $quantity, string $event_id = ''): void
        {
        }
        /**
         * Tracks a view content event.
         *
         * This method should be called when a Single Product page is viewed.
         * It extracts the product ID and event ID from the request body, builds a ViewContentEvent
         * payload, and send the event immediately via the Conversions API using the internal
         * `send()` method.
         *
         * The payload includes basic product information, deduplication ID, and user identifiers
         * for improved event matching and attribution.
         *
         * Unlike critical events such as purchases or checkout starts, view content are considered
         * low-impact and are dispatched directly without enqueuing in Action Scheduler.
         *
         * @since 0.1.0
         *
         * @param int    $product_id WooCommerce product ID being viewed.
         * @param string $event_id   The unique event ID used for deduplication.
         *
         * @return void
         */
        public function track_view_content(int $product_id, string $event_id = ''): void
        {
        }
        /**
         * Tracks a generic page view event.
         *
         * This method should be called when any frontend page (e.g., homepage, category,
         * blog post) is viewed by a user. It instantiates a {@see PageViewEvent} object,
         * constructs the event payload, and sends it immediately via the Conversions API
         * using the internal `send()` method.
         *
         * The payload includes contextual user metadata and an optional deduplication identifier
         * (`event_id`) to align with a corresponding client-side pixel event.
         *
         * Unlike critical events such as purchases or checkout starts, page view events are considered
         * low-impact and are dispatched directly without enqueuing in Action Scheduler.
         *
         * @since 0.1.0
         *
         * @param string $event_id Optional unique event ID for deduplication.
         * @return void
         */
        public function track_page_view(string $event_id = ''): void
        {
        }
        /**
         * Sends a previously built payload to the Ad Partner Conversions API via WCS.
         *
         * This method is intended to be triggered asynchronously by Action Scheduler
         * using the `send_conversion_event` hook. It retrieves the required pixel ID and
         * access token from plugin options, adds user-level metadata (e.g. IP and user agent),
         * and sends the payload to the Conversions API through the WCS proxy.
         *
         * @since 0.1.0
         *
         * @param array<string,mixed> $event_payload Single event payload.
         * @param array               $args          Additional args.
         * @return void
         */
        public function send(array $event_payload, array $args = array()): void
        {
        }
    }
    /**
     * Fetches and injects Snapchat pixel tracking code into WooCommerce frontend pages.
     *
     * Responsibilities:
     * - Checks plugin option to determine if pixel tracking is enabled.
     * - Retrieves pixel script from local cache or Snapchat Ads API.
     * - Injects sanitized pixel JavaScript into the frontend via `wp_head`.
     * - Optionally personalizes the script using the logged-in user's email.
     *
     * Dependencies:
     * - {@see WcsClient} for making remote API calls to fetch the pixel script.
     * - {@see JetpackAuthenticator} for securely authenticating requests.
     * - {@see OptionsStore} and {@see OptionDefaults} for managing plugin settings and cache.
     *
     * @see \SnapchatForWooCommerce\Tracking\PixelTrackerInterface
     * @since 0.1.0
     */
    final class RemotePixelTracker implements \SnapchatForWooCommerce\Tracking\PixelTrackerInterface
    {
        /**
         * Meta key used to mark orders that have already been tracked.
         */
        protected const ORDER_PIXEL_TRACKED_META_KEY = '_snapchat_pixel_tracked';
        /**
         * Client for making authenticated proxy requests to Snapchat Ads API.
         *
         * @var \SnapchatForWooCommerce\Connection\WcsClient
         */
        private \SnapchatForWooCommerce\Connection\WcsClient $wcs_client;
        /**
         * Constructor.
         *
         * @param \SnapchatForWooCommerce\Connection\WcsClient $wcs_client WCS API client.
         */
        public function __construct(\SnapchatForWooCommerce\Connection\WcsClient $wcs_client)
        {
        }
        /**
         * Injects the Snapchat Pixel script into the footer.
         * Personalized if possible, and sanitized using `wp_kses`.
         *
         * @since 0.1.0
         */
        public function maybe_inject_pixel(): void
        {
        }
        /**
         * Adds personalization to the pixel script based on the current user.
         *
         * If the user is logged in, injects their email address into the script for
         * more accurate audience tracking. If not logged in, removes placeholder elements.
         *
         * @since 0.1.0
         *
         * @param string $script Raw pixel JavaScript with placeholders.
         * @return string Personalized pixel script.
         */
        protected static function personalize_tracking_script(string $script): string
        {
        }
        /**
         * Validates that the pixel script includes the expected Ad Partner URL.
         *
         * This ensures the cached script hasn't been tampered with.
         *
         * @since 0.1.0
         *
         * @param string $script The script HTML string.
         *
         * @return bool True if valid, false if tampered.
         */
        private static function is_valid_pixel_script(string $script): bool
        {
        }
        /**
         * Retrieves the Snapchat Pixel script, either from cache or the remote API.
         *
         * If not cached, it authenticates with Jetpack and queries the Snapchat Ads API for pixel script.
         * The result is cached in the options store and sanitized before being returned.
         *
         * @since 0.1.0
         *
         * @return string The sanitized pixel script, or empty string on failure.
         */
        private function get_pixel_script()
        {
        }
        /**
         * Emits the Snapchat `PURCHASE` tracking event after a successful order.
         *
         * Hooked into `wp_footer`. Avoids duplicate firing via meta key.
         *
         * The order is only tracked when the request is allowed to see it, i.e. when it carries a
         * valid order key. Requests without it get WooCommerce's generic confirmation page, so no
         * order data must be sent to Snapchat either, and the tracked flag has to stay untouched
         * so the event still fires once the customer opens their own confirmation URL.
         *
         * @since 0.1.0
         */
        public function track_purchase_event()
        {
        }
    }
}
namespace SnapchatForWooCommerce\Utils {
    /**
     * Class AssetLoader
     *
     * A utility class for registering and enqueuing assets (scripts and styles)
     * in a WordPress plugin or theme, with support for asset metadata files.
     */
    class AssetLoader
    {
        /**
         * Enqueue a script using a script path and its asset metadata.
         *
         * @since 0.1.0
         *
         * @param string $handle    The handle for the script.
         * @param string $file_name The script file name.
         */
        public static function enqueue_script($handle, $file_name)
        {
        }
        /**
         * Enqueue a style using a style path and its asset metadata.
         *
         * @since 0.1.0
         *
         * @param string $handle    The handle for the style.
         * @param string $file_name The script file name.
         */
        public static function enqueue_style($handle, $file_name)
        {
        }
        /**
         * Localize data for an enqueued script.
         *
         * This method allows passing PHP data to JavaScript using `wp_localize_script()`.
         * It must be called after the script has been enqueued using `enqueue_script()`.
         *
         * @since 0.1.0
         *
         * @param string $handle     The script handle used in `enqueue_script()` (without prefix).
         * @param string $object_name The name of the JavaScript object to contain the data.
         * @param array  $data        The data to localize.
         */
        public static function localize_script($handle, $object_name, array $data)
        {
        }
    }
    /**
     * Class Helper
     *
     * Provides utility methods used across the plugin.
     *
     * @since 0.1.0
     */
    class Helper
    {
        /**
         * Returns a plugin-prefixed identifier string.
         *
         * This helps standardize internal action/filter names or option keys
         * to avoid conflicts with other plugins or themes.
         *
         * Example usage:
         * Helper::with_prefix( 'send_conversion_event' );
         * // Returns: 'snapchat_for_woocommerce_send_conversion_event'
         *
         * @since 0.1.0
         *
         * @param string $suffix Identifier to append to the plugin slug.
         * @return string Fully qualified identifier with plugin prefix.
         */
        public static function with_prefix(string $suffix): string
        {
        }
        /**
         * Check if the current request is asynchronous.
         *
         * Determines whether the current request is being made via AJAX or through a
         * REST API endpoint — both are considered asynchronous in the context of tracking
         * and background processing.
         *
         * @since 0.1.0
         *
         * @return bool True if the request is asynchronous (AJAX or REST), false otherwise.
         */
        public static function is_request_async()
        {
        }
        /**
         * Returns the order of the current `order-received` request, but only when the visitor is
         * allowed to see it.
         *
         * WooCommerce renders a generic confirmation page — without any order details — when the
         * request does not carry the order key, and it also keeps orders that belong to a registered
         * customer hidden from everybody but that customer. Tracking code must apply the same checks
         * before loading an order from the `order-received` endpoint, otherwise order and customer
         * data would be exposed to anyone able to guess an order ID.
         *
         * @see \WC_Shortcode_Checkout::order_received()
         * @see \Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation\AbstractOrderConfirmationBlock::get_view_order_permissions()
         * @see self::order_requires_email_verification()
         *
         * @since 1.0.5
         *
         * @return \WC_Order|null The order when the request is authorized to view it, null otherwise.
         */
        public static function get_verified_order_received_order(): ?\WC_Order
        {
        }
        /**
         * Register an AJAX action for both logged-in and non-logged-in users (frontend).
         *
         * @since 0.1.0
         *
         * @param string   $action    Action name (will be prefixed automatically).
         * @param callable $callback  Callback function to handle the AJAX request.
         */
        public static function register_ajax_action(string $action, callable $callback): void
        {
        }
        /**
         * Returns true if the plugin debugging mode is enabled.
         *
         * @since 0.1.0
         *
         * @return bool True if debugging is enabled, false otherwise.
         */
        public static function is_logging_enabled(): bool
        {
        }
        /**
         * Formats a timestamp into a human-readable date and time string.
         *
         * Uses the site's date and time format settings to display the timestamp
         * in a localized format.
         *
         * @since 0.1.0
         *
         * @param int $timestamp Unix timestamp to format.
         * @return string Formatted date and time string, or empty if no timestamp is provided.
         */
        public static function get_formatted_timestamp($timestamp = 0): string
        {
        }
        /**
         * Checks if the site has products.
         *
         * This method checks if there are any published products in the WooCommerce store.
         *
         * @since 0.1.0
         *
         * @return bool True if there are published products, false otherwise.
         */
        public static function has_products(): bool
        {
        }
        /**
         * Generates a unique store name based on the site's home URL and the current timestamp.
         *
         * This function removes the protocol (http:// or https://) from the home URL
         * and appends the current Unix timestamp to ensure uniqueness.
         *
         * @param string $suffix Suffix to be appended to the store name.
         *
         * @return string A string composed of the cleaned home URL and the current timestamp.
         */
        public static function get_store_name(string $suffix = ''): string
        {
        }
        /**
         * Get the current epoch timestamp.
         *
         * - On 64-bit PHP: returns milliseconds (int).
         * - On 32-bit PHP: returns seconds (int), since ms won't fit in 32-bit integer.
         *
         * This design ensures:
         * - On 64-bit platforms (most modern servers), you get millisecond-level
         *   precision.
         * - On 32-bit platforms, current epoch time in milliseconds would exceed the
         *   maximum 32-bit signed integer value (~2.1 billion). Since epoch in ms is
         *   already in the trillions (≈1.7e12), it would overflow. To prevent this,
         *   we fall back to returning the epoch in seconds, which safely fits within
         *   a 32-bit int.
         *
         * This guarantees the function always returns a safe integer appropriate for
         * the platform, even if it means sacrificing ms precision on 32-bit PHP.
         *
         * @since 0.1.0
         *
         * @return int Epoch timestamp (ms on 64-bit, sec on 32-bit).
         */
        public static function get_event_time()
        {
        }
        /**
         * Recursively replaces double quotes with single quotes in strings within an array or object.
         *
         * Sometimes Reddit API responses contain JSON strings that contain encoded double quotes,
         * that breaks WooCommerce logger, resulting to uglified output instead of pretty print.
         * This function helps sanitize such data before logging.
         *
         * @since 0.1.0
         *
         * @param array $data Response array that is recursively processed.
         * @return array Sanitized array with double quotes replaced by single quotes.
         */
        public static function deep_replace_double_quotes($data)
        {
        }
        /**
         * Checks if the legacy Snapchat plugin is active.
         *
         * @return bool True if the legacy Snapchat plugin is active, false otherwise.
         */
        public static function is_legacy_snapchat_plugin_active()
        {
        }
        /**
         * Returns the integration identifier to send in Pixel and CAPI event payload.
         *
         * @return string The integration identifier (eg: `woocommerce-v1-0-0`).
         */
        public static function get_integration_identifier(): string
        {
        }
        /**
         * Returns true when WooCommerce would ask the visitor to verify their email address before
         * showing order details, i.e. when it would render `checkout/form-verify-email.php` in place
         * of the order. Mirrors `WC_Shortcode_Checkout::guest_should_verify_email()`, including the
         * nonce-checked, POSTed email from a submitted verification form.
         *
         * `Users::should_user_verify_order_email()` already returns false once the order has no
         * billing email, or once the current user is logged in as its owner, so this check is safe to
         * run unconditionally rather than only for guest orders.
         *
         * @see \WC_Shortcode_Checkout::guest_should_verify_email()
         * @see \Automattic\WooCommerce\Internal\Utilities\Users::should_user_verify_order_email()
         *
         * @since 1.0.5
         *
         * @param int $order_id Order to check.
         * @return bool True when the visitor must verify their email before WooCommerce shows the order.
         */
        private static function order_requires_email_verification(int $order_id): bool
        {
        }
    }
}
namespace SnapchatForWooCommerce\Utils\ProductData {
    /**
     * Derives the google_product_category field from WooCommerce product categories.
     *
     * The provider walks the term hierarchy to build a breadcrumb-style path,
     * ensuring that deeper category context is captured. The final string is
     * truncated to 250 characters, in accordance with Google’s product data
     * specification.
     *
     * @since 0.1.0
     */
    class ProductCategoryProvider implements \SnapchatForWooCommerce\Admin\Export\Contract\RowBuilderAdditionalData
    {
        /**
         * Build the google_product_category value for a given product.
         *
         * Returns an associative array with a single key 'google_product_category'.
         * If the product has no categories, an empty array is returned to avoid
         * polluting the export row with invalid data.
         *
         * Example:
         * [
         *   'google_product_category' => 'Apparel & Accessories > Clothing > Activewear'
         * ]
         *
         * @since 0.1.0
         *
         * @param \WC_Product $product Product instance.
         * @return array<string,string> Associative array with GPC field or empty if unavailable.
         */
        public function get_additional_data($product): array
        {
        }
    }
}
namespace SnapchatForWooCommerce\Utils\Storage {
    /**
     * Static utility methods for option handling.
     *
     * Contains reusable helper functions that operate on WordPress options
     * defined in {@see OptionDefaults}. These methods simplify checking
     * and interpreting stored values.
     *
     * @since 0.1.0
     */
    final class Helper
    {
        /**
         * Determines whether Personally Identifiable Information (PII) collection is enabled.
         *
         * Checks the {@see OptionDefaults::COLLECT_PII} option to verify if PII
         * collection is currently allowed. Returns `true` if enabled, `false` otherwise.
         *
         * @since 0.1.0
         *
         * @return bool Whether PII collection is enabled.
         */
        public static function is_collect_pii_enabled(): bool
        {
        }
    }
    /**
     * Central registry of option keys and default values for the Ad Partner plugin.
     *
     * Defines the list of valid WordPress option keys used by the plugin,
     * along with their default values. This class ensures consistent key usage
     * across the codebase and provides safe fallbacks for unset options.
     *
     * Used by {@see Options} to populate defaults and resolve missing values.
     *
     * @since 0.1.0
     */
    final class OptionDefaults
    {
        /**
         * Option key for storing the current onboarding status.
         *
         * Can be values like 'disconnected', 'connected', or 'in_progress'.
         *
         * @since 0.1.0
         */
        public const ONBOARDING_STATUS = 'onboarding_status';
        /**
         * Option key for storing the current onboarding step.
         *
         * Represents the plugin setup progress step, e.g., 'setup', 'connect', 'configure'.
         *
         * @since 0.1.0
         */
        public const ONBOARDING_STEP = 'onboarding_step';
        /**
         * Option key for storing the status of Jetpack's connection.
         *
         * @since 0.1.0
         */
        public const IS_JETPACK_CONNECTED = 'is_jetpack_connected';
        /**
         * Option key for storing the status of the acceptance
         * of WordPress's Terms & Conditions.
         *
         * @since 0.1.0
         */
        public const WP_TOS_ACCEPTED = 'wp_tos_accepted';
        /**
         * Option key for storing the generated Snapchat config ID.
         *
         * This ID identifies configuration the merchant created for
         * their Snapchat Ads Account.
         *
         * @since 0.1.0
         */
        public const CONFIG_ID = 'config_id';
        /**
         * Option key for the Ad Partner ad account ID.
         *
         * @since 0.1.0
         */
        public const AD_ACCOUNT_ID = 'ad_account_id';
        /**
         * Option key for the Ad Partner ad account name.
         *
         * @since 0.1.0
         */
        public const AD_ACCOUNT_NAME = 'ad_account_name';
        /**
         * Option key for the Snapchat organization ID.
         *
         * @since 0.1.0
         */
        public const ORGANIZATION_ID = 'organization_id';
        /**
         * Option key for storing the name of the selected Snapchat organization.
         *
         * Stored locally after fetching the organization from the Snapchat API.
         *
         * @since 0.1.0
         */
        public const ORGANIZATION_NAME = 'organization_name';
        /**
         * Option key that toggles whether pixel tracking is enabled.
         *
         * @since 0.1.0
         */
        public const PIXEL_ENABLED = 'ads_pixel_enabled';
        /**
         * Option key for the Ad Partner's Pixel ID.
         *
         * @since 0.1.0
         */
        public const PIXEL_ID = 'pixel_id';
        /**
         * Option key that toggles whether Conversion tracking is enabled.
         *
         * @since 0.1.0
         */
        public const CONVERSIONS_ENABLED = 'conversion_enabled';
        /**
         * Option key for the Ad Partner's Conversion Token.
         *
         * @since 0.1.0
         */
        public const CONVERSION_ACCESS_TOKEN = 'conversion_access_token';
        /**
         * Option key that toggles whether Personally Identifiable Information (PII) is collected.
         *
         * @since 0.1.0
         */
        public const COLLECT_PII = 'collect_pii';
        /**
         * Option key for the Ad Partner's Catalog ID.
         *
         * @since 0.1.0
         */
        public const CATALOG_ID = 'catalog_id';
        /**
         * Option key for the Ad Partner's Product Feed ID.
         *
         * @since 0.1.0
         */
        public const PRODUCT_FEED_ID = 'product_feed_id';
        /**
         * Option key indicating whether the feed has been created.
         *
         * @since 0.1.0
         */
        public const FEED_STATUS = 'feed_status';
        /**
         * Option key to store the full file system path of the most recent export file.
         *
         * This value is written during the first export batch and reused across
         * subsequent batches to avoid recreating the file. It is cleared when a new
         * export is initiated.
         *
         * @since 0.1.0
         */
        public const EXPORT_FILE_PATH = 'catalog_export_path';
        /**
         * Option key to store the public download URL of the most recent export file.
         *
         * This value is generated once the first batch creates the CSV file,
         * and is shown to the user as a downloadable link once the export completes.
         *
         * @since 0.1.0
         */
        public const EXPORT_FILE_URL = 'catalog_export_url';
        /**
         * Option key to store the list of product IDs to be exported.
         *
         * Cached once at export start to support consistent batch processing.
         *
         * @since 0.1.0
         */
        public const EXPORT_PRODUCT_IDS = 'catalog_export_product_ids';
        /**
         * Option key to store a human-readable export timestamp.
         *
         * @since 0.1.0
         */
        public const LAST_EXPORT_TIMESTAMP = 'last_export_timestamp';
        /**
         * Option key to store the WCS token to create file name for
         * generating catalog CSV filename.
         *
         * @since 0.1.0
         */
        public const WCS_PRODUCTS_TOKEN = 'wcs_products_token';
        /**
         * Option key for the manually managed flag that enables sandbox mode.
         *
         * @since 1.0.6
         */
        public const SANDBOX_MODE = 'sandbox_mode';
        /**
         * Option key for isolated settings changed while sandbox mode is active.
         *
         * @since 1.0.6
         */
        public const SANDBOX_SETTINGS = 'sandbox_settings';
        /**
         * Returns default values for all known Ad Partner options.
         *
         * Used by {@see Options} to provide fallbacks when option values
         * are not yet persisted in the database.
         *
         * @since 0.1.0
         *
         * @return array<string,mixed> Map of option keys to their default values.
         */
        public static function get_all(): array
        {
        }
    }
    /**
     * Defines a contract for interacting with a key-value storage backend.
     *
     * This interface is used by the Ad Partner plugin to abstract how settings
     * are persisted—whether via WordPress options, transients, or another mechanism.
     * It allows a generic {@see Store} class to delegate all reads and writes
     * without being tied to a specific storage type.
     *
     * Implementations must ensure all keys are prefixed consistently and that
     * data is stored and retrieved using WordPress APIs or equivalents.
     *
     * @package SnapchatForWooCommerce\Utils\Storage
     * @since 0.1.0
     */
    interface StorageStrategyInterface
    {
        /**
         * Retrieves a value from the storage backend.
         *
         * @since 0.1.0
         *
         * @param string $key The storage key (without prefix).
         * @return mixed The stored value, or false if not found.
         */
        public function get(string $key);
        /**
         * Writes a value to the storage backend.
         *
         * @since 0.1.0
         *
         * @param string $key   The storage key (without prefix).
         * @param mixed  $value The value to store.
         * @return bool True on success, false on failure.
         */
        public function set(string $key, $value): bool;
        /**
         * Deletes a value from the storage backend.
         *
         * @since 0.1.0
         *
         * @param string $key The storage key (without prefix).
         * @return bool True on success, false on failure.
         */
        public function delete(string $key): bool;
    }
    /**
     * Stores Ad Partner plugin settings using the WordPress options API.
     *
     * This class implements {@see StorageStrategyInterface} and persists values
     * in the `wp_options` table. All keys are automatically prefixed using
     * {@see Config::STORE_PREFIX} to avoid collisions.
     *
     * Intended to be used with the {@see Store} abstraction to support consistent
     * read/write operations across different storage backends.
     *
     * @since 0.1.0
     */
    final class OptionStorage implements \SnapchatForWooCommerce\Utils\Storage\StorageStrategyInterface
    {
        /**
         * Retrieves a value from the WordPress options table.
         *
         * @since 0.1.0
         *
         * @param string $key The option key (without prefix).
         * @return mixed The stored value, or false if not found.
         */
        public function get(string $key)
        {
        }
        /**
         * Stores a value in the WordPress options table.
         *
         * @since 0.1.0
         *
         * @param string $key   The option key (without prefix).
         * @param mixed  $value The value to store.
         * @return bool True on success, false on failure.
         */
        public function set(string $key, $value): bool
        {
        }
        /**
         * Deletes a value from the WordPress options table.
         *
         * @since 0.1.0
         *
         * @param string $key The option key (without prefix).
         * @return bool True on success, false on failure.
         */
        public function delete(string $key): bool
        {
        }
    }
    /**
     * Static interface for accessing Ad Partner plugin options.
     *
     * This class serves as a centralized facade for reading, writing,
     * and initializing WordPress options tied to the Ad Partner integration.
     * Internally, it wraps a {@see Store} configured with {@see OptionStorage}
     * and default values from {@see OptionDefaults}.
     *
     * Useful in procedural code and hooks where dependency injection is not practical.
     *
     * @since 0.1.0
     */
    final class Options
    {
        /**
         * Singleton instance of the Store using OptionStorage.
         *
         * @var Store|null
         */
        private static ?\SnapchatForWooCommerce\Utils\Storage\Store $instance = null;
        /**
         * Lazily instantiates the store with the OptionStorage strategy.
         *
         * @since 0.1.0
         *
         * @return Store The configured store instance.
         */
        private static function get_instance(): \SnapchatForWooCommerce\Utils\Storage\Store
        {
        }
        /**
         * Retrieves the value of an Ad Partner plugin option.
         *
         * Falls back to the default defined in {@see OptionDefaults}
         * if the value is not stored in the database.
         *
         * @since 0.1.0
         *
         * @param string $key The option key (without prefix).
         * @return mixed The option value or default.
         */
        public static function get(string $key)
        {
        }
        /**
         * Sets the value of an Ad Partner plugin option.
         *
         * @since 0.1.0
         *
         * @param string $key   The option key (without prefix).
         * @param mixed  $value The value to store.
         * @return bool True on success, false on failure.
         */
        public static function set(string $key, $value): bool
        {
        }
        /**
         * Deletes an Ad Partner plugin option.
         *
         * @since 0.1.0
         *
         * @param string $key The option key (without prefix).
         * @return bool True on success, false on failure.
         */
        public static function delete(string $key): bool
        {
        }
        /**
         * Returns the full option key with the plugin prefix.
         *
         * This is used to ensure consistent key formatting across the plugin.
         *
         * @since 0.1.0
         *
         * @param string $key The option key (without prefix).
         * @return string The full option key with prefix.
         */
        public static function get_key(string $key): string
        {
        }
        /**
         * Initializes all defined option keys with default values, if not already set.
         *
         * Should be called during plugin activation to ensure consistent defaults.
         * This bypasses fallback logic to check raw database state directly.
         *
         * @since 0.1.0
         */
        public static function preload_defaults(): void
        {
        }
    }
    /**
     * Storage abstraction layer for Ad Partner plugin configuration.
     *
     * Uses a {@see StorageStrategyInterface} to handle interaction with the underlying
     * persistence mechanism, such as options or transients. Also provides
     * fallback behavior by consulting a static map of default values.
     *
     * Used by static facades such as {@see Options} and {@see Transients}.
     *
     * @since 0.1.0
     */
    final class Store
    {
        /**
         * Strategy used to interact with the underlying storage backend.
         *
         * @var StorageStrategyInterface
         */
        private \SnapchatForWooCommerce\Utils\Storage\StorageStrategyInterface $strategy;
        /**
         * Map of default values for supported keys.
         *
         * @var array<string,mixed>
         */
        private array $defaults;
        /**
         * Constructor.
         *
         * @since 0.1.0
         *
         * @param StorageStrategyInterface $strategy Storage backend implementation.
         * @param array<string,mixed>      $defaults Map of default values keyed by storage keys.
         */
        public function __construct(\SnapchatForWooCommerce\Utils\Storage\StorageStrategyInterface $strategy, array $defaults)
        {
        }
        /**
         * Retrieves a value from the underlying storage.
         *
         * Falls back to the corresponding default value if the storage
         * returns false (e.g., key not set).
         *
         * @since 0.1.0
         *
         * @param string $key The storage key (without prefix).
         * @return mixed The stored value or the default.
         */
        public function get(string $key)
        {
        }
        /**
         * Stores a value using the configured strategy.
         *
         * @since 0.1.0
         *
         * @param string $key   The storage key (without prefix).
         * @param mixed  $value The value to store.
         * @return bool True on success, false on failure.
         */
        public function set(string $key, $value): bool
        {
        }
        /**
         * Deletes a value using the configured strategy.
         *
         * @since 0.1.0
         *
         * @param string $key The storage key (without prefix).
         * @return bool True on success, false on failure.
         */
        public function delete(string $key): bool
        {
        }
    }
    /**
     * Central registry of transient keys and TTLs for the Ad Partner plugin.
     *
     * Defines the list of valid WordPress transient keys used by the plugin,
     * along with their default expiration times (in seconds). This class ensures
     * consistent caching behavior and avoids hardcoding TTLs throughout the codebase.
     *
     * Used by {@see TransientStorage} to control expiration when storing transient values.
     *
     * @since 0.1.0
     */
    final class TransientDefaults
    {
        /**
         * Transient key for storing the remote pixel tracking script.
         *
         * @since 0.1.0
         */
        public const PIXEL_SCRIPT = 'ads_pixel_script';
        /**
         * Returns defaults for all known Ad Partner transients.
         *
         * Used by {@see TransientStorage} when saving values.
         *
         * @since 0.1.0
         *
         * @return array<string,int> Map of transient keys to their defaults.
         */
        public static function get_all(): array
        {
        }
        /**
         * Returns TTLs for all known Ad Partner transients.
         *
         * @since 0.1.0
         *
         * @return array<string,int> Map of transient keys to TTL in seconds.
         */
        private static function get_ttls(): array
        {
        }
        /**
         * Returns the TTL for a specific transient key, or a default fallback.
         *
         * @since 0.1.0
         *
         * @param string $key The transient key (without prefix).
         * @return int TTL in seconds.
         */
        public static function get_ttl(string $key): int
        {
        }
    }
    /**
     * Stores Ad Partner plugin data using the WordPress transients API.
     *
     * This class implements {@see StorageStrategyInterface} and caches values
     * in the transient system with automatic expiration. TTLs are resolved
     * via {@see TransientDefaults}, and all keys are prefixed consistently
     * to avoid collisions.
     *
     * Intended to be used with the {@see Store} abstraction to support
     * time-sensitive or performance-critical storage needs.
     *
     * @since 0.1.0
     */
    final class TransientStorage implements \SnapchatForWooCommerce\Utils\Storage\StorageStrategyInterface
    {
        /**
         * Retrieves a value from the WordPress transients API.
         *
         * @since 0.1.0
         *
         * @param string $key The transient key (without prefix).
         * @return mixed The cached value, or false if not found or expired.
         */
        public function get(string $key)
        {
        }
        /**
         * Stores a value in the WordPress transients API with a TTL.
         *
         * @since 0.1.0
         *
         * @param string $key   The transient key (without prefix).
         * @param mixed  $value The value to cache.
         * @return bool True on success, false on failure.
         */
        public function set(string $key, $value): bool
        {
        }
        /**
         * Deletes a value from the WordPress transients API.
         *
         * @since 0.1.0
         *
         * @param string $key The transient key (without prefix).
         * @return bool True on success, false on failure.
         */
        public function delete(string $key): bool
        {
        }
    }
    /**
     * Static interface for accessing Ad Partner plugin transients.
     *
     * This class serves as a centralized facade for reading, writing,
     * and deleting WordPress transients tied to the Ad Partner integration.
     * Internally, it wraps a {@see Store} configured with {@see TransientStorage}
     * and expiration values from {@see TransientDefaults}.
     *
     * Useful in procedural code and hooks where dependency injection is not practical.
     *
     * @since 0.1.0
     */
    final class Transients
    {
        /**
         * Singleton instance of the Store using TransientStorage.
         *
         * @var \SnapchatForWooCommerce\Utils\Storage\Store|null
         */
        private static ?\SnapchatForWooCommerce\Utils\Storage\Store $instance = null;
        /**
         * Lazily instantiates the store with the TransientStorage strategy.
         *
         * @since 0.1.0
         *
         * @return \SnapchatForWooCommerce\Utils\Storage\Store The configured store instance.
         */
        private static function get_instance(): \SnapchatForWooCommerce\Utils\Storage\Store
        {
        }
        /**
         * Retrieves the value of an Ad Partner plugin transient.
         *
         * Falls back to the default defined in {@see TransientDefaults}
         * if the value is not cached or has expired.
         *
         * @since 0.1.0
         *
         * @param string $key The transient key (without prefix).
         * @return mixed The transient value or default.
         */
        public static function get(string $key)
        {
        }
        /**
         * Sets the value of an Ad Partner plugin transient.
         *
         * Expiration is automatically determined using {@see TransientDefaults}.
         *
         * @since 0.1.0
         *
         * @param string $key   The transient key (without prefix).
         * @param mixed  $value The value to store.
         * @return bool True on success, false on failure.
         */
        public static function set(string $key, $value): bool
        {
        }
        /**
         * Deletes an Ad Partner plugin transient.
         *
         * @since 0.1.0
         *
         * @param string $key The transient key (without prefix).
         * @return bool True on success, false on failure.
         */
        public static function delete(string $key): bool
        {
        }
    }
}
namespace SnapchatForWooCommerce\Utils {
    /**
     * Builds the user_data structure for CAPI event payloads.
     *
     * This includes device metadata (IP, UA), Snapchat cookies, and click ID data.
     * Intended to improve event match rate and attribution accuracy.
     *
     * @since 0.1.0
     */
    final class UserIdentifier
    {
        /**
         * Generates the complete `user_data` array used in event payloads.
         *
         * Combines IP address, user agent, Snap cookies/click IDs into a
         * single associative array.
         *
         * @since 0.1.0
         *
         * @return array<string,mixed> Associative array of user identifiers.
         */
        public static function get_user_data(): array
        {
        }
        /**
         * Adds the Snapchat click ID (sc_click_id) if present.
         *
         * Extracted from the `ScCid` cookie set when a user clicks on a Snapchat ad.
         * Used for click-through attribution.
         *
         * @since 0.1.0
         *
         * @param array<string,mixed> $data Reference to the user_data array.
         * @return void
         */
        private static function add_click_id(array &$data): void
        {
        }
        /**
         * Adds the Snapchat cookie (sc_cookie1) if present.
         *
         * The `_scid` cookie is set by the Snapchat Pixel on the client side.
         *
         * @since 0.1.0
         *
         * @param array<string,mixed> $data Reference to the user_data array.
         * @return void
         */
        private static function add_sc_cookie(array &$data): void
        {
        }
        /**
         * Adds the client user agent string.
         *
         * Extracted from the current HTTP request. Passed as-is (not hashed).
         *
         * @since 0.1.0
         *
         * @param array<string,mixed> $data Reference to the user_data array.
         * @return void
         */
        private static function add_user_agent(array &$data): void
        {
        }
        /**
         * Adds the client IP address.
         *
         * Respects proxy/CDN headers (Cloudflare, X-Forwarded-For)
         * and falls back to REMOTE_ADDR. Passed as-is (not hashed).
         *
         * @since 0.1.0
         *
         * @param array<string,mixed>|null $data Optional. Reference to the user_data array.
         * @return ?string
         */
        public static function add_ip_address(?array &$data = null): ?string
        {
        }
        /**
         * Extracts and normalizes customer billing details for CAPI matching.
         *
         * Supported identifiers:
         * - em      > Email address (lowercased, trimmed, SHA-256 hashed).
         * - ph      > Phone number (digits only, SHA-256 hashed).
         * - fn      > First name (lowercase UTF-8, punctuation removed, SHA-256 hashed).
         * - ln      > Last name (lowercase UTF-8, punctuation removed, SHA-256 hashed).
         * - ct      > City (lowercase, punctuation/spaces removed, SHA-256 hashed).
         * - zp      > Postal code (normalized by country rules, SHA-256 hashed).
         *              - US: first 5 digits.
         *              - GB: area + district + sector (excludes unit).
         * - country > ISO-2 country code (lowercase, SHA-256 hashed).
         *
         * Billing details are only ever read from an `order-received` request that WooCommerce would
         * grant access to, i.e. one carrying a valid order key. Without that check, hashed customer
         * identifiers would end up in tracking payloads for anyone guessing an order ID.
         *
         * @since 0.1.0
         *
         * @param array<string,mixed> $data  Reference to the user_data array.
         * @param \WC_Order|null       $order Optional. Order to read the billing details from. Defaults to
         *                                   the order of the current `order-received` request, when the
         *                                   request is authorized to view it.
         */
        public static function add_user_details(array &$data, ?\WC_Order $order = null): void
        {
        }
    }
}
namespace {
    \define('SNAPCHAT_FOR_WOOCOMMERCE_VERSION', '1.0.7');
    \define('SNAPCHAT_FOR_WOOCOMMERCE_FILE', __FILE__);
    \define('SNAPCHAT_FOR_WOOCOMMERCE_PLUGIN_DIR', \plugin_dir_path(__FILE__));
    \define('SNAPCHAT_FOR_WOOCOMMERCE_PLUGIN_URL', \plugin_dir_url(__FILE__));
    \define('SNAPCHAT_FOR_WOOCOMMERCE_PLUGIN_BUILD_PATH', \SNAPCHAT_FOR_WOOCOMMERCE_PLUGIN_DIR . 'js/build/');
    \define('SNAPCHAT_FOR_WOOCOMMERCE_BUILD_URL', \SNAPCHAT_FOR_WOOCOMMERCE_PLUGIN_URL . 'js/build/');
    \define('SNAPCHAT_FOR_WOOCOMMERCE_DEBUG', \false);
}