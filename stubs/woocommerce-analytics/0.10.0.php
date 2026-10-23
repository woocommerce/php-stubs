<?php
/**
 * Generated stub declarations for woocommerce-analytics 0.10.0.
 * @see https://github.com/woocommerce/php-stubs
 */

namespace Automattic\WooCommerce\Analytics\Internal\DI {
    /**
     * Interface RegistrableInterface
     *
     * @package Automattic\WooCommerce\Analytics\Internal
     */
    interface RegistrableInterface
    {
        /**
         * Register the hooks.
         *
         * @return void
         */
        public function register(): void;
    }
}
namespace Automattic\WooCommerce\Analytics\HelperTraits {
    /**
     * Trait LoggerTrait
     */
    trait LoggerTrait
    {
        /** @var \Automattic\WooCommerce\Analytics\Logging\LoggerInterface */
        private \Automattic\WooCommerce\Analytics\Logging\LoggerInterface $logger;
        /**
         * Set the logger object.
         *
         * @param \Automattic\WooCommerce\Analytics\Logging\LoggerInterface $logger The logger object.
         *
         * @return void
         */
        public function set_logger(\Automattic\WooCommerce\Analytics\Logging\LoggerInterface $logger): void
        {
        }
        /**
         * Get the logger object.
         *
         * @return \Automattic\WooCommerce\Analytics\Logging\LoggerInterface
         */
        public function get_logger(): \Automattic\WooCommerce\Analytics\Logging\LoggerInterface
        {
        }
    }
    /**
     * Trait Utilities.
     */
    trait Utilities
    {
        use \Automattic\WooCommerce\Internal\Traits\OrderAttributionMeta;
        /**
         * Get plugin name.
         *
         * @return string
         */
        protected function get_plugin_name(): string
        {
        }
        /**
         * Get plugin base name.
         *
         * @return string
         */
        protected function get_plugin_base_name(): string
        {
        }
        /**
         * Get plugin slug.
         *
         * @return string
         */
        public function get_plugin_slug(): string
        {
        }
        /**
         * Gets the plugin's path.
         *
         * E.g. /path/to/wp-content/plugins/plugin-directory/
         *
         * @return string
         */
        protected function get_plugin_path(): string
        {
        }
        /**
         * Gets the plugin's URL.
         *
         * @return string
         */
        protected function get_plugin_url(): string
        {
        }
        /**
         * Gets the CDN URL for the assets.
         *
         * @param string $version The assets version in the CDN.
         *
         * @return string
         */
        protected function get_cdn_url(string $version): string
        {
        }
        /**
         * Get local build path
         *
         * @return string The local build path.
         */
        protected function get_local_build_path(): string
        {
        }
        /**
         * Get build meta information from the CDN.
         *
         * @param string $build_dir The CDN build directory URL.
         * @return array Returns an array with two keys:
         *               - 'dependencies': (string[]) An array of dependency strings.
         *               - 'version': (string|null) The version string or null if not available.
         */
        protected function get_assets_data(string $build_dir): array
        {
        }
        /**
         * Check if the asset is being loaded locally.
         *
         * @param string $asset_file_name The asset file name to check.
         *
         * @return bool True if the asset is local, false otherwise.
         */
        protected function is_asset_local(string $asset_file_name): bool
        {
        }
        /**
         * Can site sync orders to WPCOM infrastructure.
         *
         * @return boolean
         */
        protected function can_site_sync_orders(): bool
        {
        }
        /**
         * Check if the order attribution feature is enabled.
         *
         * @return bool
         */
        protected function is_order_attribution_enabled(): bool
        {
        }
        /**
         * Checks whether HPOS is enabled.
         *
         * @return bool
         */
        public function custom_orders_table_usage_is_enabled()
        {
        }
        /**
         * Get the fields to be added to the Jetpack sync whitelist.
         *
         * @return array
         */
        protected function get_order_attribution_fields(): array
        {
        }
        /**
         * Check if Jetpack is connected.
         *
         * @return bool
         */
        protected function is_jetpack_connected(): bool
        {
        }
        /**
         * Run full sync for HPOS orders.
         * This will sync all the orders together with the order attribution data.
         *
         * @return void
         */
        protected function run_full_sync(): void
        {
        }
        /**
         * Run full sync for HPOS orders, reporting whether Jetpack started it.
         *
         * @return bool Whether Jetpack started the full sync. It refuses, for example, in safe mode.
         */
        protected function try_full_sync(): bool
        {
        }
        /**
         * Stop full sync of hpos orders.
         * To stop full sync of hpos orders we send a full sync request with only the options flag set.
         *
         * @return void
         */
        protected function stop_full_sync(): void
        {
        }
        /**
         * Gets the order_stats table name.
         *
         * @return string
         */
        protected function get_order_stats_table_name(): string
        {
        }
        /**
         * Maps order status provided by the user to the one used in the database.
         *
         * @param string $status Order status.
         * @return string
         */
        protected static function normalize_order_status($status)
        {
        }
        /**
         * Convert the WC_DateTime objects to stdClass objects to ensure they are properly encoded.
         *
         * @param \WC_DateTime|mixed $wc_datetime The datetime object.
         * @param bool              $utc         Whether to convert to UTC.
         * @return object|null
         */
        protected static function datetime_to_object($wc_datetime, $utc = false)
        {
        }
    }
}
namespace Automattic\WooCommerce\Analytics\API {
    /**
     * Class ApiProxy
     *
     * @package Automattic\WooCommerce\Analytics\API
     */
    class ApiProxy extends \WC_REST_Controller implements \Automattic\WooCommerce\Analytics\Internal\DI\RegistrableInterface
    {
        use \Automattic\WooCommerce\Analytics\HelperTraits\LoggerTrait;
        use \Automattic\WooCommerce\Analytics\HelperTraits\Utilities;
        /** @var string */
        private const NAMESPACE = 'wc/v3';
        /** @var string */
        private const REST_BASE_SUFFIX = '/proxy';
        /** @var int */
        private const CACHE_TTL = 5 * MINUTE_IN_SECONDS;
        /**
         * The base of the REST API route.
         *
         * @var string
         */
        protected $rest_base;
        /**
         * Timeout for the external API request.
         *
         * @var int
         */
        protected int $api_timeout = 20;
        /**
         * @var \Automattic\Jetpack\Connection\Manager
         */
        protected \Automattic\Jetpack\Connection\Manager $manager;
        /**
         * ApiProxy constructor.
         *
         * @param \Automattic\Jetpack\Connection\Manager  $manager The Jetpack manager.
         * @param \Automattic\WooCommerce\Analytics\Logging\LoggerInterface $logger The logger.
         */
        public function __construct(\Automattic\Jetpack\Connection\Manager $manager, \Automattic\WooCommerce\Analytics\Logging\LoggerInterface $logger)
        {
        }
        /**
         * Register the hooks.
         *
         * @return void
         */
        public function register(): void
        {
        }
        /**
         * Register the routes for the objects of the controller.
         */
        public function register_routes(): void
        {
        }
        /**
         * Check if a given request has permission to read the external API.
         *
         * @param \WP_REST_Request $request Request object.
         *
         * @return bool
         */
        public function check_permission(\WP_REST_Request $request): bool
        {
        }
        /**
         * Handle a proxy request to a third-party API.
         *
         * @param \WP_REST_Request $request Request object.
         *
         * @return \WP_REST_Response|\WP_Error Response object or WP_Error.
         */
        public function handle_proxy_request(\WP_REST_Request $request)
        {
        }
        /**
         * Build the full URL for the external API endpoint.
         *
         * @param \WP_REST_Request $request The request object.
         *
         * @return string The full URL for the external API endpoint.
         */
        protected function build_endpoint_url(\WP_REST_Request $request): string
        {
        }
        /**
         * Get the schema for the proxy endpoint.
         *
         * @return array
         */
        public function get_item_schema(): array
        {
        }
        /**
         * Get the REST API path for the proxy endpoint.
         *
         * @return string The REST API path.
         */
        public function get_proxy_path(): string
        {
        }
        /**
         * Get the response from the external API, possibly cached.
         *
         * @param array           $jetpack_client_http_response Jetpack Client HTTP response.
         * @param \WP_REST_Request $request The request object.
         *
         * @return \WP_REST_Response The response object.
         */
        protected function get_response_maybe_cached(array $jetpack_client_http_response, \WP_REST_Request $request): \WP_REST_Response
        {
        }
        /**
         * Determine the appropriate cache time based on the response and request data.
         *
         * @param string          $body The response body.
         * @param int             $status The response status code.
         * @param \WP_REST_Request $request The request object.
         *
         * @return int The cache time in seconds.
         */
        private function determine_cache_time(string $body, int $status, \WP_REST_Request $request): int
        {
        }
    }
    /**
     * Class SyncStatus.
     * Returns information about the Jetpack sync status.
     * Note that Automattic\Jetpack\Sync\REST_Endpoints has a similar /jetpack/v4/sync-status endpoint,
     * but it doesn't return the progress percentage.
     *
     * @package Automattic\WooCommerce\Analytics\API
     */
    class SyncStatus extends \WC_REST_Controller implements \Automattic\WooCommerce\Analytics\Internal\DI\RegistrableInterface
    {
        use \Automattic\WooCommerce\Analytics\HelperTraits\LoggerTrait;
        use \Automattic\WooCommerce\Analytics\HelperTraits\Utilities;
        /** @var string */
        private const NAMESPACE = 'wc/v3';
        /** @var string */
        private const REST_BASE_SUFFIX = '/sync-status';
        /** @var string */
        private const INITIAL_FULL_SYNC_OPTION = 'woocommerce_analytics_initial_full_sync_finished';
        /** @var string */
        private const EMAIL_NOTIFICATION_SENT_OPTION = 'woocommerce_analytics_email_notification_sent';
        /**
         * The base of the REST API route.
         *
         * @var string
         */
        protected $rest_base;
        /**
         * @var \Automattic\Jetpack\Connection\Manager
         */
        protected \Automattic\Jetpack\Connection\Manager $manager;
        /**
         * @var \Automattic\WooCommerce\Analytics\Internal\Jetpack\SyncModules
         */
        protected \Automattic\WooCommerce\Analytics\Internal\Jetpack\SyncModules $sync_modules;
        /**
         * JetpackSyncStatus constructor.
         *
         * @param \Automattic\WooCommerce\Analytics\Internal\Jetpack\SyncModules     $sync_modules The sync modules.
         * @param \Automattic\WooCommerce\Analytics\Logging\LoggerInterface $logger The logger.
         * @param \Automattic\Jetpack\Connection\Manager  $manager The Jetpack manager.
         */
        public function __construct(\Automattic\WooCommerce\Analytics\Internal\Jetpack\SyncModules $sync_modules, \Automattic\WooCommerce\Analytics\Logging\LoggerInterface $logger, \Automattic\Jetpack\Connection\Manager $manager)
        {
        }
        /**
         * Register the hooks.
         *
         * @return void
         */
        public function register(): void
        {
        }
        /**
         * Registers the Full Sync Complete email with WooCommerce if:
         *  - the store is connected to Jetpack.
         *  - the full sync has never finished.
         *
         * @param WC_Email[] $email_classes All existing emails.
         * @return WC_Email[]
         */
        public function maybe_register_full_sync_complete_email($email_classes)
        {
        }
        /**
         * Check if the full sync has ever finished.
         *
         * @return bool True if the full sync has ever finished, false otherwise.
         */
        protected function has_full_sync_ever_finished(): bool
        {
        }
        /**
         * Callback for the jetpack_sync_processed_actions action, used to send notification email
         * and track full sync completion.
         *
         * @param array $actions The actions that were processed.
         *
         * @return void
         */
        public function on_sync_processed_actions(array $actions): void
        {
        }
        /**
         * Register the routes for the objects of the controller.
         */
        public function register_routes(): void
        {
        }
        /**
         * Check if a given request has permission to read the sync status.
         *
         * @param \WP_REST_Request $request Request object.
         *
         * @return bool
         */
        public function check_permission(\WP_REST_Request $request): bool
        {
        }
        /**
         * Check if a given request has permission to read the sync status reset.
         *
         * @param \WP_REST_Request $request Request object.
         *
         * @return bool
         */
        public function check_permission_reset_sync_status(\WP_REST_Request $request): bool
        {
        }
        /**
         * Get the current sync status.
         *
         * @param \WP_REST_Request $request Request object.
         *
         * @return \WP_REST_Response|\WP_Error Response object or WP_Error.
         */
        public function get_sync_status(\WP_REST_Request $request)
        {
        }
        /**
         * Get the sync status. The progress percentage is the full sync progress percentage if full sync is in progress.
         * Woocommerce Analytics Reports progress percentage is shown if available.
         * Progress = 0 and Woocommerce Analytics Reports progress = 0 means waiting for initial full sync to start.
         * Progress < 100 and Woocommerce Analytics Reports progress < 100 means initial full sync is in progress.
         * Progress = 100 and Woocommerce Analytics Reports progress = 100 means initial full sync has been done and Woocommerce Analytics Reports is synced.
         * Progress < 100 and Woocommerce Analytics Reports progress = 100 means initial full sync is in progress but Woocommerce Analytics Reports has synced already.
         * Progress = 100 and Woocommerce Analytics Reports progress < 0 means initial full sync has been done and Woocommerce Analytics Reports resync is in progress.
         *
         * @return array The sync status.
         */
        public function sync_status()
        {
        }
        /**
         * Check if a full sync is currently running.
         *
         * @return bool True if a full sync is running, false otherwise.
         */
        public function is_full_sync_running(): bool
        {
        }
        /**
         * Check if a full sync is available.
         *
         * @return bool True if a full sync is available, false otherwise.
         */
        public function is_full_sync_available(): bool
        {
        }
        /**
         * Get the schema for the sync status endpoint.
         *
         * @return array
         */
        public function get_item_schema(): array
        {
        }
        /**
         * Reset the initial full sync status and email notification sent status by removing the options.
         * Mostly used for development and debugging.
         *
         * @param \WP_REST_Request $request Request object.
         *
         * @return \WP_REST_Response|\WP_Error Response object or WP_Error.
         */
        public function reset_sync_status(\WP_REST_Request $request)
        {
        }
        /**
         * Get the schema for the reset-initial-full-sync endpoint.
         *
         * @return array
         */
        public function get_reset_sync_schema(): array
        {
        }
        /**
         * Get the full sync end action from the actions array.
         *
         * @param array $actions The actions array.
         *
         * @return array|null The full sync end action or null if not found.
         */
        private function get_full_sync_end_action(array $actions): ?array
        {
        }
    }
}
namespace Automattic\WooCommerce\Analytics\Admin {
    /**
     * Class Admin
     *
     * @package Automattic\WooCommerce\Analytics\Admin
     */
    class Admin implements \Automattic\WooCommerce\Analytics\Internal\DI\RegistrableInterface
    {
        use \Automattic\WooCommerce\Analytics\HelperTraits\Utilities;
        /**
         * We bump the assets version when the WooCommerce Analytics plugin is not compatible with the CDN assets anymore.
         *
         * @var string
         */
        const ANALYTICS_ASSETS_VERSION = 'v1';
        /**
         * The cache key for the assets data.
         *
         * @var string
         */
        const ANALYTICS_ASSETS_DATA_CACHE_KEY = 'woocommerce_analytics_assets_data';
        /**
         * Register our hooks.
         *
         * @return void
         */
        public function register(): void
        {
        }
        /**
         * Add the report menu items.
         *
         * @param array $report_pages The array of report menu pages.
         * @return array The updated array of report menu pages.
         */
        public function analytics_add_report_menu_items($report_pages)
        {
        }
        /**
         * Add tentative MVP reports menu items.
         *
         * @return void
         */
        public function analytics_add_mvp_menu_items(): void
        {
        }
        /**
         * Register the new admin pages for the new Admin Layout (MVP).
         *
         * @return void
         */
        public function analytics_register_new_admin_pages(): void
        {
        }
        /**
         * Render the element placeholder for the admin page.
         * It will be replaced by the React app.
         */
        public function render_admin_layout_container(): void
        {
        }
        /**
         * Add the admin menu.
         *
         * @return void
         */
        public function analytics_add_admin_menu_main_page(): void
        {
        }
        /**
         * Check if the current page is a new admin layout page.
         *
         * @param string $hook The hook name of the page.
         * @return bool
         */
        public function is_new_admin_layout_page($hook)
        {
        }
        /**
         * Load the admin script.
         *
         * @param string $hook The hook name of the page.
         */
        public function analytics_load_custom_wp_admin_scripts($hook): void
        {
        }
        /**
         * Enqueue the new admin layout app.
         *
         * @param string $hook The hook name of the page.
         * @return void
         */
        public function analytics_enqueue_new_admin_layout_app($hook): void
        {
        }
        /**
         * Get the structure of pages/menus for the WooCommerce Analytics section.
         *
         * @return array The filtered menu structure.
         */
        public function get_wc_analytics_sections_structure(): array
        {
        }
        /**
         * Enqueue the sections structure as a client global variable.
         *
         * @param string $hook The hook name of the page.
         * @return void
         */
        public function enqueue_sections_structure_script($hook): void
        {
        }
        /**
         * Admin init function.
         *
         * Runs on the admin init hook.
         *
         * @return void
         */
        public function admin_init(): void
        {
        }
        /**
         * Run plugin post-activation actions if we need to.
         *
         * @return void
         */
        private function plugin_post_activation(): void
        {
        }
    }
}
namespace Automattic\WooCommerce\Analytics\Admin\DebugTools {
    /**
     * Class WooCommerceStatusTools
     *
     * Provides tools for debugging WooCommerce status.
     */
    class WooCommerceStatusTools implements \Automattic\WooCommerce\Analytics\Internal\DI\RegistrableInterface
    {
        use \Automattic\WooCommerce\Analytics\HelperTraits\LoggerTrait;
        use \Automattic\WooCommerce\Analytics\HelperTraits\Utilities;
        /**
         * @var \Automattic\Jetpack\Connection\Manager
         */
        protected \Automattic\Jetpack\Connection\Manager $manager;
        /**
         * @var \Automattic\WooCommerce\Analytics\API\SyncStatus
         */
        protected \Automattic\WooCommerce\Analytics\API\SyncStatus $sync_status;
        /**
         * Used to detect if we can select the tool based on status or the action.
         *
         * @var bool $after_refresh
         */
        private $after_refresh = false;
        private const FULL_SYNC_TRANSIENT_KEY = 'woocommerce_analytics_full_sync_stop';
        /**
         * JetpackSyncStatus constructor.
         *
         * @param \Automattic\WooCommerce\Analytics\Logging\LoggerInterface $logger The logger.
         * @param \Automattic\WooCommerce\Analytics\API\SyncStatus      $sync_status The sync status.
         */
        public function __construct(\Automattic\WooCommerce\Analytics\Logging\LoggerInterface $logger, \Automattic\WooCommerce\Analytics\API\SyncStatus $sync_status)
        {
        }
        /**
         * Register method required by the RegistrableInterface.
         * Hooks registration for the class.
         */
        public function register(): void
        {
        }
        /**
         * Add tool to trigger full sync.
         * Available from WooCommerce > Status > Tools.
         *
         * @param array $tools The current tools.
         * @return array The modified tools.
         */
        public function add_data_sync_tool($tools)
        {
        }
        /**
         * Create full sync start tool.
         *
         * @param array $sync_status The current sync status.
         *
         * @return array Full sync tool specification.
         */
        private function get_sync_start_tool($sync_status)
        {
        }
        /**
         * Create full sync stop tool.
         *
         * @param array $sync_status The current sync status.
         *
         * @return array Full sync stop tool specification.
         */
        private function get_sync_stop_tool($sync_status)
        {
        }
        /**
         * Triggers a full synchronization of WooCommerce Analytics data.
         *
         * @return string The result message of the sync action.
         */
        public function trigger_full_sync()
        {
        }
        /**
         * Triggers a stop of the full synchronization of WooCommerce Analytics data.
         *
         * @return string The result message of the sync action.
         */
        public function trigger_full_sync_stop()
        {
        }
    }
}
namespace Automattic\WooCommerce\Analytics {
    /**
     * Autoloader class.
     */
    class Autoloader
    {
        /**
         * Static-only class.
         */
        private function __construct()
        {
        }
        /**
         * Require the autoloader and return the result.
         *
         * If the autoloader is not present, let's log the failure and display a nice admin notice.
         *
         * @return boolean
         */
        public static function init(): bool
        {
        }
        /**
         * If the autoloader is missing, add an admin notice.
         */
        protected static function missing_autoloader()
        {
        }
    }
}
namespace Automattic\WooCommerce\Analytics\Exception {
    /**
     * This interface is used for all of our exceptions so that we can easily catch only our own exceptions.
     */
    interface WooCommerceAnalyticsException extends \Throwable
    {
    }
    /**
     * Class InvalidVersion
     *
     * Error messages generated in this class should be translated, as they are intended to be displayed
     * to end users.
     *
     * @package Automattic\WooCommerce\Analytics\Exception
     */
    class InvalidVersion extends \RuntimeException implements \Automattic\WooCommerce\Analytics\Exception\WooCommerceAnalyticsException
    {
        /**
         * Create a new instance of the exception when an invalid version is detected.
         *
         * @param string $requirement The name of the requirement.
         * @param string $found_version The version in use on the site.
         * @param string $minimum_version The minimum required version.
         * @param string $download_url The URL to download the minimum required version.
         *
         * @return static
         */
        public static function from_requirement(string $requirement, string $found_version, string $minimum_version, $download_url): \Automattic\WooCommerce\Analytics\Exception\InvalidVersion
        {
        }
        /**
         * Create a new instance of the exception when a requirement is missing.
         *
         * @param string $requirement The name of the requirement.
         * @param string $minimum_version The minimum required version.
         *
         * @return InvalidVersion
         */
        public static function requirement_missing(string $requirement, string $minimum_version): \Automattic\WooCommerce\Analytics\Exception\InvalidVersion
        {
        }
    }
    /**
     * Exception thrown when a required feature is not available.
     *
     * @package Automattic\WooCommerce\Analytics\Exception
     */
    class RequiredFeatureDisabled extends \RuntimeException implements \Automattic\WooCommerce\Analytics\Exception\WooCommerceAnalyticsException
    {
        /**
         * Create a new instance of the exception when a required feature is not available.
         *
         * @param string $feature The name of the feature that is required.
         * @param string $feature_url The URL to enable the feature.
         * @param string $documentation_url The URL to the documentation.
         *
         * @return RequiredFeatureDisabled
         */
        public static function feature_disabled(string $feature, string $feature_url, string $documentation_url): \Automattic\WooCommerce\Analytics\Exception\RequiredFeatureDisabled
        {
        }
    }
}
namespace Automattic\WooCommerce\Analytics\Internal\DI {
    /**
     * Class Configuration
     *
     * @package Automattic\WooCommerce\Analytics\Internal
     */
    class Configuration
    {
        /**
         * Configuration for dependency injection container.
         *
         * @return array The PHP-DI configuration.
         */
        public static function get_php_di_configuration(): array
        {
        }
    }
}
namespace Automattic\WooCommerce\Analytics\Internal\FullSyncCheck {
    /**
     * Class AdminFullSyncCompleteEmail
     *
     * @package Automattic\WooCommerce\Admin\Internal\FullSyncCheck
     */
    class AdminFullSyncCompleteEmail extends \WC_Email
    {
        /**
         * Email key used in WooCommerce emails registry.
         *
         * @var string
         */
        const EMAIL_KEY = 'WC_Email_Admin_Full_Sync_Complete';
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get email subject.
         *
         * @return string
         */
        public function get_default_subject()
        {
        }
        /**
         * Get email heading.
         *
         * @return string
         */
        public function get_default_heading()
        {
        }
        /**
         * Get the greeting message for the email.
         *
         * @return string The greeting message with the admin's name or fallback.
         */
        private function get_message_greeting()
        {
        }
        /**
         * Get the email content based on format.
         *
         * @param bool $is_html Whether to return HTML content.
         * @return string
         */
        private function get_email_content(bool $is_html)
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
         * Send the email notification.
         */
        public static function send_email_notification(): void
        {
        }
        /**
         * Trigger the sending of this email.
         */
        public function trigger()
        {
        }
    }
}
namespace Automattic\WooCommerce\Analytics\Internal\Jetpack\Sync {
    /**
     * Class Configuration for Jetpack Sync
     */
    class Configuration implements \Automattic\WooCommerce\Analytics\Internal\DI\RegistrableInterface
    {
        use \Automattic\WooCommerce\Analytics\HelperTraits\Utilities;
        /**
         * Class that Premium Analytics (standalone or bundled in Jetpack) loads when it registers
         * the same WooCommerce Analytics sync module.
         *
         * @var string
         */
        private const PREMIUM_ANALYTICS_SYNC_CLASS = 'Automattic\Jetpack\PremiumAnalytics\Sync\Configuration';
        /**
         * Report data the sync module sends for each order that this plugin does not sync.
         *
         * @var string[]
         */
        private const EXCLUDED_REPORTS_DATA = array('order_product_data', 'order_coupon_data', 'order_tax_data');
        /**
         * Lookup tables the sync module adds to the checksums that this plugin does not sync.
         *
         * @var string[]
         */
        private const EXCLUDED_CHECKSUM_TABLES = array('wc_order_product_lookup', 'wc_order_coupon_lookup', 'wc_order_tax_lookup');
        /**
         * Product meta the sync module whitelists that this plugin does not sync.
         *
         * @var string[]
         */
        private const EXCLUDED_POST_META = array('_stock', '_stock_quantity', '_cogs_total_value', '_global_unique_id');
        /**
         * Register the hooks.
         *
         * @return void
         */
        public function register(): void
        {
        }
        /**
         * Initialize the Jetpack functionalities: sync, connection, etc...
         *
         * @return void
         */
        public function initialize_jetpack(): void
        {
        }
        /**
         * Jetpack Sync module configuration.
         *
         * @return array Jetpack Sync config array.
         */
        private function get_jetpack_sync_config(): array
        {
        }
        /**
         * Jetpack Connection module configuration.
         *
         * @return array Jetpack Connection config array.
         */
        private function get_jetpack_connection_config(): array
        {
        }
        /**
         * Enqueue the Jetpack Connection script (registered in actions.php which is auto-loaded).
         *
         * @return void
         */
        public function enqueue_jetpack_connection_script(): void
        {
        }
        /**
         * Expand full sync config with module required by WooCommerce Analytics if not already present.
         *
         * @param array $config The current full sync configuration.
         * @return array The modified full sync configuration.
         */
        public function expand_full_sync_config(array $config): array
        {
        }
        /**
         * Remove the product, coupon and tax data from an order's synced report data.
         *
         * @param array|mixed $data The report data.
         * @return array|mixed The report data without the excluded data.
         */
        public function remove_excluded_reports_data($data)
        {
        }
        /**
         * Remove the data the sync module sends when WPCOM requests product, coupon or tax lookup rows.
         *
         * @param array|mixed $data The report lookup data.
         * @return array|mixed An empty array, or the data unchanged when Premium Analytics is active.
         */
        public function remove_reports_lookup_data($data)
        {
        }
        /**
         * Remove the product, coupon and tax lookup tables from the checksum tables.
         *
         * @param array|mixed $tables The checksum tables.
         * @return array|mixed The checksum tables without the excluded tables.
         */
        public function remove_excluded_checksum_tables($tables)
        {
        }
        /**
         * Remove the product meta the sync module adds to the post meta whitelist.
         *
         * @param array|mixed $meta_keys The post meta whitelist.
         * @return array|mixed The post meta whitelist without the excluded meta.
         */
        public function remove_excluded_post_meta($meta_keys)
        {
        }
        /**
         * Whether Premium Analytics has registered the shared WooCommerce Analytics sync module.
         *
         * Premium Analytics only loads its Sync configuration class when it registers the module, so
         * the check skips the autoloader. Without it, Jetpack's bundled copy would always count as active.
         *
         * @return bool
         */
        protected function is_premium_analytics_active(): bool
        {
        }
    }
    /**
     * Class RefundFixFullSync
     *
     * Starts a full sync once the merchant ran WooCommerce's "Fix double-counted refunds
     * in Analytics" tool and it repaired orders, so WordPress.com gets the corrected
     * order stats. The fix rewrites refund order stats, which are not checksummed, so
     * the changes would otherwise never reach WordPress.com.
     *
     * WooCommerce fires no action when the tool finishes, so this watches the option
     * the tool stores its state in.
     *
     * @see https://github.com/woocommerce/woocommerce/pull/66505
     */
    class RefundFixFullSync implements \Automattic\WooCommerce\Analytics\Internal\DI\RegistrableInterface
    {
        use \Automattic\WooCommerce\Analytics\HelperTraits\LoggerTrait;
        use \Automattic\WooCommerce\Analytics\HelperTraits\Utilities;
        /**
         * Option WooCommerce stores the fix tool state in.
         *
         * @see \Automattic\WooCommerce\Internal\Admin\Analytics::REFUND_DOUBLE_COUNT_OPTION
         */
        private const REFUND_FIX_OPTION = 'woocommerce_analytics_refund_double_count';
        /**
         * Option holding the completed_at time of the last fix run a full sync was scheduled for.
         */
        private const HANDLED_OPTION = 'woocommerce_analytics_refund_fix_full_sync_handled';
        /**
         * Option holding the completed_at time of the last fix run a full sync was started for.
         * A second action for the same run, scheduled by two concurrent requests, then does nothing.
         */
        private const STARTED_OPTION = 'woocommerce_analytics_refund_fix_full_sync_started';
        /**
         * Action Scheduler hook that starts the full sync.
         */
        private const FULL_SYNC_HOOK = 'woocommerce_analytics_refund_fix_full_sync';
        /**
         * Seconds to wait before retrying while another full sync is running.
         */
        private const RETRY_DELAY = 10 * MINUTE_IN_SECONDS;
        /**
         * Seconds after the first attempt to keep retrying, so a full sync that never finishes does not retry forever.
         */
        private const RETRY_WINDOW = DAY_IN_SECONDS;
        /**
         * @var \Automattic\WooCommerce\Analytics\API\SyncStatus
         */
        protected \Automattic\WooCommerce\Analytics\API\SyncStatus $sync_status;
        /**
         * RefundFixFullSync constructor.
         *
         * @param \Automattic\WooCommerce\Analytics\Logging\LoggerInterface $logger      The logger.
         * @param \Automattic\WooCommerce\Analytics\API\SyncStatus      $sync_status The sync status.
         */
        public function __construct(\Automattic\WooCommerce\Analytics\Logging\LoggerInterface $logger, \Automattic\WooCommerce\Analytics\API\SyncStatus $sync_status)
        {
        }
        /**
         * Register the hooks.
         *
         * @return void
         */
        public function register(): void
        {
        }
        /**
         * Delete the handled option on deactivation, so the earlier-run check runs again on
         * reactivation and catches a fix run that completed while the plugin was inactive.
         *
         * A run whose full sync already started is not synced again, see STARTED_OPTION.
         * Static, because deactivation also runs when the plugin did not register its services.
         *
         * @return void
         */
        public static function forget_handled_run(): void
        {
        }
        /**
         * Schedule a full sync when a fix run that repaired orders has just completed.
         *
         * @param mixed $old_value Previous tool state.
         * @param mixed $value     New tool state.
         * @return void
         */
        public function on_refund_fix_state_updated($old_value, $value): void
        {
        }
        /**
         * Catch a fix run that completed while this plugin was inactive or did not watch the tool yet.
         *
         * Runs once; afterwards the handled option exists and on_refund_fix_state_updated() takes over.
         * It runs again after reactivation, or when scheduling the full sync failed, since both delete
         * the handled option.
         *
         * @return void
         */
        public function maybe_handle_earlier_run(): void
        {
        }
        /**
         * Start the full sync, or retry later when it cannot start yet.
         *
         * It cannot start while Jetpack is disconnected or refuses to sync, or while another full sync
         * runs, which may have sent the affected orders before they were fixed. Retries stop a day
         * after the first attempt.
         *
         * @param mixed $completed_at  completed_at time of the fix run the full sync is for.
         * @param mixed $fixed_count   Number of orders the fix run repaired.
         * @param mixed $first_attempt Time of the first attempt; 0 for this one.
         * @return void
         */
        public function start_full_sync($completed_at = 0, $fixed_count = 0, $first_attempt = 0): void
        {
        }
        /**
         * Schedule a full sync for a completed fix run that repaired orders and was not handled yet.
         *
         * @param mixed $state Tool state stored by WooCommerce.
         * @return bool Whether a full sync was scheduled.
         */
        private function maybe_schedule_full_sync($state): bool
        {
        }
        /**
         * Schedule the full sync action. When Action Scheduler fails to store it, delete the
         * handled option so maybe_handle_earlier_run() schedules it again on a later admin request.
         *
         * @param int $timestamp     When the action runs.
         * @param int $completed_at  completed_at time of the fix run the full sync is for.
         * @param int $fixed_count   Number of orders the fix run repaired.
         * @param int $first_attempt Time of the first attempt; 0 when this schedules the first one.
         * @return void
         */
        private function schedule(int $timestamp, int $completed_at, int $fixed_count, int $first_attempt = 0): void
        {
        }
    }
}
namespace Automattic\WooCommerce\Analytics\Internal\Jetpack {
    /**
     * Class SyncModules
     *
     * Used to retrieve the Full Sync Immediately module when needed
     * (and not before JetpackConfiguration initializes the sync modules).
     */
    class SyncModules
    {
        /**
         * Get the full sync immediately module.
         *
         * @return \Automattic\Jetpack\Sync\Modules\Full_Sync_Immediately
         */
        public function get_full_sync_immediately(): \Automattic\Jetpack\Sync\Modules\Full_Sync_Immediately
        {
        }
    }
}
namespace Automattic\WooCommerce\Analytics\Internal {
    /**
     * Class Plugin
     */
    final class Plugin implements \Automattic\WooCommerce\Analytics\Internal\DI\RegistrableInterface
    {
        use \Automattic\WooCommerce\Analytics\HelperTraits\LoggerTrait;
        /**
         * The instance of the Plugin object.
         *
         * @var Plugin|null
         */
        private static ?\Automattic\WooCommerce\Analytics\Internal\Plugin $instance = null;
        /**
         * The DI container.
         *
         * @var \Automattic\WooCommerce\Analytics\Dependencies\Psr\Container\ContainerInterface
         */
        private \Automattic\WooCommerce\Analytics\Dependencies\Psr\Container\ContainerInterface $container;
        /**
         * Set the DI container.
         *
         * @param \Automattic\WooCommerce\Analytics\Dependencies\Psr\Container\ContainerInterface $container The DI container.
         */
        public function __construct(\Automattic\WooCommerce\Analytics\Dependencies\Psr\Container\ContainerInterface $container)
        {
        }
        /**
         * Get the instance of the Plugin object.
         *
         * @return Plugin
         *
         * @throws \Exception If the DI container cannot be built.
         */
        public static function get_instance(): \Automattic\WooCommerce\Analytics\Internal\Plugin
        {
        }
        /**
         * Initialize the hooks.
         *
         * @return void
         */
        private function init_hooks()
        {
        }
        /**
         * Initialize the logger.
         *
         * @return void
         */
        public function initialize_logger(): void
        {
        }
        /**
         * Register main plugin functionality.
         *
         * @return void
         */
        public function register(): void
        {
        }
        /**
         * Initialize Jetpack configuration before plugins_loaded.
         *
         * @return void
         */
        private function init_jetpack_configuration(): void
        {
        }
        /**
         * Hooked to register_activation_hook() by an anonymous function in the plugin file.
         *
         * @return void
         */
        public function activate(): void
        {
        }
        /**
         * Hooked to register_deactivation_hook().
         *
         * @return void
         */
        public function deactivate(): void
        {
        }
        /**
         * Declare compatibility with HPOS.
         *
         * @return void
         */
        public function declare_compatibility(): void
        {
        }
    }
}
namespace Automattic\WooCommerce\Analytics\Internal\Requirements {
    /**
     * Interface RequirementValidatorInterface
     *
     * @package Automattic\WooCommerce\Analytics\Internal\Requirements
     */
    interface RequirementValidatorInterface
    {
        /**
         * Validate requirements for plugin to function properly.
         *
         * @return bool True if the requirements are met.
         */
        public function validate(): bool;
    }
    /**
     * Class RequirementValidator
     *
     * @package Automattic\WooCommerce\Analytics\Internal\Requirements
     */
    abstract class RequirementValidator implements \Automattic\WooCommerce\Analytics\Internal\Requirements\RequirementValidatorInterface
    {
        /**
         * @var RequirementValidator[]
         */
        private static $instances = array();
        /**
         * Get the instance of the RequirementValidator object.
         *
         * @return RequirementValidator
         */
        public static function instance(): \Automattic\WooCommerce\Analytics\Internal\Requirements\RequirementValidator
        {
        }
        /**
         * Add a standard requirement validation error notice.
         *
         * @param \RuntimeException $e The Exception.
         */
        protected function add_admin_notice(\RuntimeException $e): void
        {
        }
    }
    /**
     * Class OrderAttributionConfigValidator
     *
     * @package Automattic\WooCommerce\Analytics\Internal\Requirements
     */
    class OrderAttributionConfigValidator extends \Automattic\WooCommerce\Analytics\Internal\Requirements\RequirementValidator
    {
        use \Automattic\WooCommerce\Analytics\HelperTraits\Utilities;
        /**
         * Validate requirements for plugin to function properly.
         *
         * @return bool True if the requirements are met.
         */
        public function validate(): bool
        {
        }
        /**
         * Validate the configuration requirements for the plugin to function properly.
         *
         * @throws \Automattic\WooCommerce\Analytics\Exception\RequiredFeatureDisabled When the Order Attribution feature is disabled.
         */
        protected function validate_order_attribution_enabled(): void
        {
        }
    }
    /**
     * Class PluginValidator
     *
     * Display admin notices for required and incompatible plugins.
     */
    class PluginValidator
    {
        const PLUGINS = array(\Automattic\WooCommerce\Analytics\Internal\Requirements\WCValidator::class, \Automattic\WooCommerce\Analytics\Internal\Requirements\OrderAttributionConfigValidator::class);
        /**
         * @var bool $is_validated
         * Holds the validation status of the plugin.
         */
        protected static $is_validated = null;
        /**
         * Validate all required and incompatible plugins.
         *
         * @return bool
         */
        public static function validate(): bool
        {
        }
    }
    /**
     * Class WCValidator
     *
     * @package Automattic\WooCommerce\Analytics\Internal\Requirements
     */
    class WCValidator extends \Automattic\WooCommerce\Analytics\Internal\Requirements\RequirementValidator
    {
        /**
         * Validate all requirements for the plugin to function properly.
         *
         * @return bool
         */
        public function validate(): bool
        {
        }
        /**
         * Validate the minimum required WooCommerce version (after plugins are fully loaded).
         *
         * @throws \Automattic\WooCommerce\Analytics\Exception\InvalidVersion When the WooCommerce version does not meet the minimum version.
         */
        protected function validate_wc_version(): void
        {
        }
    }
}
namespace Automattic\WooCommerce\Analytics\Logging {
    interface LoggerInterface
    {
        /**
         * Log an exception.
         *
         * @param \Exception $exception The exception to log.
         * @param string    $method    The method where the exception occurred.
         */
        public function log_exception(\Exception $exception, string $method): void;
        /**
         * Log an error.
         *
         * @param string $message The error message.
         * @param string $method  The method where the error occurred.
         */
        public function log_error(string $message, string $method): void;
        /**
         * Log a generic note.
         *
         * @param string $message The note to log.
         * @param string $method  The method where the note occurred.
         */
        public function log_message(string $message, string $method): void;
        /**
         * Log a JSON response.
         *
         * @param mixed  $response The response to log.
         * @param string $method   The method where the response occurred.
         */
        public function log_response($response, string $method): void;
    }
    /**
     * Class DebugLogger
     */
    class DebugLogger implements \Automattic\WooCommerce\Analytics\Logging\LoggerInterface
    {
        use \Automattic\WooCommerce\Analytics\HelperTraits\Utilities;
        /**
         * WooCommerce logger class instance.
         *
         * @var \WC_Logger_Interface
         */
        private $logger;
        /**
         * Constructor.
         *
         * @param \WC_Logger_Interface $wc_logger The WooCommerce logger.
         */
        public function __construct(\WC_Logger_Interface $wc_logger)
        {
        }
        /**
         * Log an exception.
         *
         * @param \Exception $exception The exception to log.
         * @param string    $method    The method that threw the exception.
         */
        public function log_exception(\Exception $exception, string $method): void
        {
        }
        /**
         * Log an error.
         *
         * @param string $message The error message.
         * @param string $method  The method that threw the error.
         */
        public function log_error(string $message, string $method): void
        {
        }
        /**
         * Log a generic note.
         *
         * @param string $message The message to log.
         * @param string $method  The method that generated the message.
         */
        public function log_message(string $message, string $method): void
        {
        }
        /**
         * Log a JSON response.
         *
         * @param mixed  $response The response to log.
         * @param string $method   The method that generated the response.
         */
        public function log_response($response, string $method): void
        {
        }
        /**
         * Log a message as a debug log entry.
         *
         * @param string $message The message to log.
         * @param string $method  The method that generated the message.
         * @param string $level   The log level.
         */
        protected function log(string $message, string $method, string $level = \WC_Log_Levels::DEBUG)
        {
        }
    }
}
namespace Automattic\WooCommerce\Analytics\Utilities {
    /**
     * Class Features
     * Handles feature flag functionality for WooCommerce Analytics
     */
    class Features
    {
        /**
         * @var array
         */
        private static $features = null;
        /**
         * @var array
         */
        private static $features_defaults = array('orderAttribution' => true, 'addDevMenu' => false);
        /**
         * The meta key used to store user preferences in the database
         *
         * @var string
         */
        private static $analytics_meta_key = 'woocommerce/analytics';
        /**
         * Initialize the features
         */
        public static function init()
        {
        }
        /**
         * Check if a feature is enabled
         *
         * @param string $feature_name The name of the feature to check.
         * @return bool Whether the feature is enabled
         */
        public static function is_enabled($feature_name)
        {
        }
        /**
         * Get all enabled features
         *
         * @return array List of enabled features
         */
        public static function get_enabled_features()
        {
        }
        /**
         * Expose features to client-side code
         */
        public static function expose_features_to_client()
        {
        }
    }
    /**
     * The OrderStatsFixer class.
     *
     * Fixes bugs in WooCommerce Analytics core so that the wc_order_stats table is
     * in parity with the wc_orders/wc_posts table. This class will only make change to
     * the wc_order_stats table. It does not make any changes to the wc_orders/wp_posts table.
     */
    class OrderStatsFixer implements \Automattic\WooCommerce\Analytics\Internal\DI\RegistrableInterface
    {
        /**
         * Slug to identify the scheduler.
         *
         * @var string
         */
        public static $name = 'order_stats_fixer';
        use \Automattic\WooCommerce\Analytics\HelperTraits\Utilities;
        use \Automattic\WooCommerce\Analytics\HelperTraits\LoggerTrait;
        /**
         * Scheduler traits.
         */
        use \Automattic\WooCommerce\Admin\Schedulers\SchedulerTraits {
            init as scheduler_init;
        }
        /**
         * OrderStatsFixer constructor.
         *
         * @param \Automattic\WooCommerce\Analytics\Logging\LoggerInterface $logger The logger object.
         */
        public function __construct(\Automattic\WooCommerce\Analytics\Logging\LoggerInterface $logger)
        {
        }
        /**
         * Get all available scheduling actions.
         * Used to determine action hook names and clear events.
         *
         * @return array
         */
        public static function get_scheduler_actions()
        {
        }
        /**
         * Register the hooks.
         *
         * @return void
         */
        public function register(): void
        {
        }
        /**
         * Uses the correct status for the order stats table.
         *
         * The wc_order_stats table stores the order status as wc-trash instead of trash which is the correct core WordPress status.
         *
         * @param array $data The order stats data.
         * @return array
         */
        public function update_order_stats_data($data)
        {
        }
        /**
         * Fixes the incorrect order status in the wc_order_stats table.
         *
         * The status of a refund order is set to the status of the parent order before inserting into the
         * wc_order_stats table. This difference in status causes the wc_order_stats table to be out of sync with the
         * wc_orders/wp_posts table data. This function fixes the issue by updating the status in the wc_order_stats table.
         *
         * @param int $order_id The order ID.
         * @return int|bool Returns -1 if order won't be processed, or a boolean indicating processing success.
         */
        public function fix_incorrect_order_status($order_id)
        {
        }
        /**
         * Delete orphaned refund orders from the wc_order_stats table.
         *
         * When an order is deleted, the corresponding refund order is not deleted from the wc_order_stats table.
         * This function fixes that issue by deleting the orphaned refund orders.
         *
         * @param int $order_id The order ID.
         * @return void
         */
        public function delete_orphaned_refund_orders($order_id)
        {
        }
        /**
         * Schedule cleanup of the order stats table when missing orders are detected.
         *
         * @param array $missing_order_ids The missing orders.
         * @return void
         */
        public function possibly_schedule_cleanup($missing_order_ids)
        {
        }
        /**
         * Cleanup the order stats table.
         *
         * @param array $missing_order_ids The order IDs to cleanup.
         * @return void
         */
        public static function cleanup_order_stats($missing_order_ids)
        {
        }
    }
    /**
     * Class Tracking
     *
     * @package Automattic\WooCommerce\Analytics\Utilities
     */
    class Tracking
    {
        const TRACKING_NAMESPACE = 'woocommerceanalytics_';
        /**
         * Record a tracks event.
         *
         * @param string $event_name The event name to record.
         * @param array  $properties Array of properties to include with the event.
         */
        public static function tracks_event($event_name, $properties = array())
        {
        }
        /**
         * Prepare and send a full sync started event.
         *
         * @param array $full_status Full sync status.
         */
        public static function track_full_sync_completed($full_status)
        {
        }
        /**
         * Track when a manual sync action occurs.
         *
         * @param string $action The sync action - either "started" or "stopped".
         */
        public static function track_manual_sync_action($action)
        {
        }
        /**
         * Track when the full sync after WooCommerce's double-counted refunds fix starts, or is given up.
         *
         * @param string $action       The sync action - either "started" or "gave_up".
         * @param int    $fixed_count  Number of orders the fix repaired.
         * @param int    $wait_seconds Seconds between the first attempt and this action.
         */
        public static function track_refund_fix_sync_action($action, $fixed_count, $wait_seconds)
        {
        }
    }
}
namespace {
    \define('WC_ANALYTICS_VERSION', '0.10.0');
    // WRCS: DEFINED_VERSION.
    \define('WC_ANALYTICS_MIN_PHP_VER', '7.4');
    \define('WC_ANALYTICS_MIN_WC_VER', '9.5.0');
    \define('WC_ANALYTICS_FILE', __FILE__);
    \define('WC_ANALYTICS_ABSPATH', \plugin_dir_path(__FILE__));
    /**
     * Global function to get the plugin instance.
     *
     * @return \Automattic\WooCommerce\Analytics\Internal\Plugin
     */
    function woocommerce_analytics(): \Automattic\WooCommerce\Analytics\Internal\Plugin
    {
    }
}