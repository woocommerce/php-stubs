<?php
/**
 * Generated stub declarations for blaze-ads 0.8.1.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

namespace BlazeAds {
    /**
     * Blaze Ads Utils class
     */
    class Blaze_Ads_Utils
    {
        /**
         * Calls the Blaze (aka DSP) server
         *
         * @param int    $blog_id The blog ID.
         * @param string $route The route to call.
         * @param string $method The HTTP method to use.
         * @param array  $query_params The query parameters to send.
         *
         * @return array with { code: int and body: mixed }.
         * @throws \BlazeAds\Exceptions\Base_Exception If the request to the DSP ends in error.
         */
        public static function call_dsp_server(int $blog_id, string $route, string $method = 'GET', array $query_params = array()): array
        {
        }
        /**
         * Mirrors JS's createInterpolateElement functionality.
         * Returns a string where angle brackets expressions are replaced with unescaped html while the rest is escaped.
         *
         * @param string $string string to process.
         * @param array  $element_map map of elements to not escape.
         *
         * @return string String where all the html was escaped, except for the tags specified in element map.
         */
        public static function esc_interpolated_html(string $string, array $element_map): string
        {
        }
    }
}
namespace {
    /**
     * Main class for the Blaze Ads extension. Its responsibility is to initialize the extension.
     */
    class Blaze_Ads
    {
        /**
         * Cache for plugin headers to avoid multiple calls to get_file_data
         *
         * @var ?array
         */
        private static ?array $plugin_headers = \null;
        /**
         * Static-only class.
         */
        private function __construct()
        {
        }
        /**
         * Entry point to the initialization logic.
         */
        public static function init(): void
        {
        }
        /**
         * Determines if criteria is met to enable Blaze Ads dashboard.
         *
         * @return bool
         */
        public static function should_initialize_dashboard(): bool
        {
        }
        /**
         * Prints the given message in an "admin notice" wrapper with "error" class.
         *
         * @param string $message Message to print. Can contain HTML.
         */
        public static function display_admin_error(string $message): void
        {
        }
        /**
         * Prints the given message in an "admin notice" wrapper with provided classes.
         *
         * @param string $message Message to print. Can contain HTML.
         * @param string $classes Space separated list of classes to be applied to notice element.
         */
        public static function display_admin_notice(string $message, string $classes): void
        {
        }
        /**
         * Get plugin headers and cache the result to avoid reopening the file.
         * First call should execute get_file_data and fetch headers from plugin details comment.
         * Subsequent calls return the value stored in the variable $plugin_headers.
         *
         * @return array Array with plugin headers
         */
        public static function get_plugin_headers(): ?array
        {
        }
    }
}
namespace BlazeAds {
    /**
     * Its responsibility is to initiate conversion pixels that the plugin uses.
     */
    class Blaze_Conversions
    {
        /**
         * Blaze DSP conversion URL
         *
         * @var string
         */
        public const CONVERSION_PIXEL_URL = 'https://public-api.wordpress.com/wpcom/v2/wordads/dsp/api/v1/conversion/pixel.gif?%s';
        /**
         * Initialize hooks for Blaze conversions
         *
         * @return void
         */
        public function initialize(): void
        {
        }
        /**
         * Adds the conversion pixel image to the thank you checkout page
         *
         * @param int $order_id Order id.
         */
        public function add_conversion_tracking_pixel(int $order_id): void
        {
        }
    }
    /**
     * Its responsibility is to render the customized version of the Blaze Dashboard.
     */
    class Blaze_Dashboard
    {
        /**
         * Initializes/configures the Jetpack Blaze module.
         */
        public function initialize(): void
        {
        }
        /**
         * Checks if the Marketing Blaze submenu can be displayed on the site.
         *
         * @return bool
         */
        public function can_display_marketing_menu(): bool
        {
        }
        /**
         * Checks if the Jetpack Blaze menu should be enabled.
         *
         * @return bool
         */
        public function should_enable_jetpack_blaze_menu(): bool
        {
        }
        /**
         * Adds Blaze entry point to the menu under the Marketing section.
         */
        public function add_admin_menu(): void
        {
        }
        /**
         * Handles the redirection from the Jetpack Blaze dashboard URL to the new Blaze Ads dashboard
         *
         * @return void
         */
        public function jetpack_dashboard_redirection(): void
        {
        }
        /**
         * Runs the onboarding logic for Jetpack connect.
         *
         * @return void
         */
        public function jetpack_connect_onboarding(): void
        {
        }
        /**
         * Sets the initial config data needed by the Blaze Ads dashboard.
         *
         * @param array $data Initial state for the Blaze Dashboard app.
         *
         * @return array
         */
        public function blaze_ads_initial_config_data(array $data): array
        {
        }
        /**
         * Checks the status of the plugin setup
         *
         * @return string Setup reason. NULL if no setup is required.
         */
        public function check_setup_plugin_status(): ?string
        {
        }
        /**
         * Returns if the Jetpack Blaze module is active in the site.
         *
         * @return bool Jetpack Blaze module status
         */
        public function is_blaze_module_active(): bool
        {
        }
        /**
         * Returns the Jetpack connect URL.
         * In reality this is just to trigger a page reload that re-reruns the onboarding logic and this could have been a window.reload on client
         * this method simply makes sure the server controls the url that handles the connect redirect for easy change without needing to update the client.
         *
         * @param string $blazeads_connect_from Optional. A page ID representing where the user should be returned to after connecting. Default is '1' - redirects back to the overview page.
         *
         * @return string Jetpack connect url.
         */
        public function get_connect_url(string $blazeads_connect_from = '1'): string
        {
        }
    }
    /**
     * Validates dependencies (core, plugins, versions) for Blaze
     * Used in the plugin main class for validation.
     */
    class Blaze_Dependency_Service
    {
        public const WOOCORE_INCOMPATIBLE = 'woocore_outdated';
        public const WP_INCOMPATIBLE = 'wp_outdated';
        /**
         * Initializes this class's WP hooks.
         *
         * @return void
         */
        public function initialize(): void
        {
        }
        /**
         * Checks if all the dependencies needed to run BlazeAds are present
         *
         * @return bool True if all required dependencies are met.
         */
        public function has_valid_dependencies(): bool
        {
        }
        /**
         * Render admin notices for unmet dependencies. Called on the admin_notices hook.
         */
        public function display_admin_notices(): void
        {
        }
        /**
         * Check if WooCommerce is active.
         *
         * @return bool
         */
        public static function is_woo_core_active(): bool
        {
        }
        /**
         * Returns an array of invalid dependencies
         *
         * @return array of invalid dependencies as string constants.
         */
        public function get_invalid_dependencies(): array
        {
        }
        /**
         * Checks if current page is plugin installation process page.
         *
         * @return bool True when installing plugin.
         */
        private static function is_at_plugin_install_page(): bool
        {
        }
        /**
         * Check if WooCommerce is active.
         *
         * @return bool
         */
        public function is_woo_core_version_compatible(): bool
        {
        }
        /**
         * Checks if the version of WordPress is compatible with Blaze Ads.
         *
         * @return bool True if WordPress version is greater than or equal the minimum accepted
         */
        public function is_wp_version_compatible(): bool
        {
        }
        /**
         * Get the error constant of an invalid dependency, and transforms it into HTML to be used in an Admin Notice.
         *
         * @param string $code - invalid dependency constant.
         *
         * @return string HTML to render admin notice for the unmet dependency.
         */
        private function get_notice_for_invalid_dependency(string $code): string
        {
        }
    }
    /**
     * Marketing Channel implementation for Blaze Campaigns.
     * This class is responsible for registering Blaze as a marketing channel and displaying Blaze campaigns
     *
     * Class Blaze_Marketing_Channel
     */
    class Blaze_Marketing_Channel implements \Automattic\WooCommerce\Admin\Marketing\MarketingChannelInterface
    {
        /**
         * The campaign types supported by Blaze.
         *
         * @var array
         */
        protected array $campaign_types;
        /**
         * MarketingChannelRegistrar constructor.
         */
        public function __construct()
        {
        }
        /**
         * Initialize the marketing channel.
         *
         * @return void
         */
        public function initialize(): void
        {
        }
        /**
         * Setups the WooCommerce marketing channel for Blaze Ads
         */
        public function setup_marketing_channel()
        {
        }
        /**
         * Check if the Multichannel Marketing plugin is active.
         *
         * @return bool
         */
        public function can_register_marketing_channel(): bool
        {
        }
        /**
         * Returns the unique identifier string for the marketing channel extension, also known as the plugin slug.
         *
         * @return string
         */
        public function get_slug(): string
        {
        }
        /**
         * Returns the name of the marketing channel.
         *
         * @return string
         */
        public function get_name(): string
        {
        }
        /**
         * Returns the description of the marketing channel.
         *
         * @return string
         */
        public function get_description(): string
        {
        }
        /**
         * Returns the path to the channel icon.
         *
         * @return string
         */
        public function get_icon_url(): string
        {
        }
        /**
         * Returns an array of marketing campaign types that the channel supports.
         *
         * @return \Automattic\WooCommerce\Admin\Marketing\MarketingCampaignType[] Array of marketing campaign type objects.
         */
        public function get_supported_campaign_types(): array
        {
        }
        /**
         * Returns the setup status of the marketing channel.
         *
         * @return bool
         */
        public function is_setup_completed(): bool
        {
        }
        /**
         * Returns the status of the marketing channel's product listings.
         *
         * @return string
         */
        public function get_product_listings_status(): string
        {
        }
        /**
         * Returns the number of channel issues/errors (e.g. account-related errors, product synchronization issues, etc.).
         *
         * @return int The number of issues to resolve, or 0 if there are no issues with the channel.
         */
        public function get_errors_count(): int
        {
        }
        /**
         * Returns the URL to the settings page, or the link to complete the setup/onboarding if the channel has not been set up yet.
         *
         * @return string
         */
        public function get_setup_url(): string
        {
        }
        /**
         * Returns the campaign price for the given Blaze campaign.
         *
         * @param array $campaign Blaze campaign object.
         *
         * @return \Automattic\WooCommerce\Admin\Marketing\Price
         */
        public function get_campaign_price(array $campaign): \Automattic\WooCommerce\Admin\Marketing\Price
        {
        }
        /**
         * Returns the campaign URL for the given Blaze campaign.
         *
         * @param array  $campaign Blaze campaign object.
         * @param string $site_url Site URL.
         *
         * @return string
         */
        public function get_campaign_url(array $campaign, string $site_url): string
        {
        }
        /**
         *  Returns the site hostname.
         *
         * @return string
         */
        public function get_site_hostname(): string
        {
        }
        /**
         * Returns the marketing campaigns from the Blaze campaigns information.
         *
         * @param array $campaigns List of Blaze campaigns.
         *
         * @return \Automattic\WooCommerce\Admin\Marketing\MarketingCampaign[] Array of marketing campaign objects.
         */
        public function get_marketing_campaigns(array $campaigns): array
        {
        }
        /**
         * Returns an array of the channel's marketing campaigns.
         *
         * @return \Automattic\WooCommerce\Admin\Marketing\MarketingCampaign[]
         */
        public function get_campaigns(): array
        {
        }
        /**
         * Returns the URL for creating a new marketing campaign.
         *
         * @return mixed
         */
        public function get_campaign_create_url(): string
        {
        }
        /**
         * Generate an array of supported marketing campaign types.
         *
         * @return \Automattic\WooCommerce\Admin\Marketing\MarketingCampaignType[]
         */
        protected function generate_campaign_types(): array
        {
        }
    }
    /**
     * Class representing Jetpack_Connect_Handler
     */
    class Jetpack_Connect_Handler
    {
        public const ERROR_MESSAGE_TRANSIENT = 'wcblaze_error_message';
        /**
         * Jetpack connection handler.
         *
         * @var Automattic\Jetpack\Connection\Manager
         */
        private $connection_manager;
        /**
         * Constructor
         * Sets up the connection manager.
         */
        public function __construct()
        {
        }
        /**
         * Handle onboarding flow.
         */
        public function maybe_handle_onboarding(): void
        {
        }
        /**
         * Redirects to the onboarding flow page.
         * Also checks if the server is connected and try to connect it otherwise.
         *
         * @param string $source The source of the redirect.
         *
         * @return void
         */
        private function redirect_to_onboarding_flow_page(string $source)
        {
        }
        /**
         * Utility function to immediately redirect to the dashboard connect page.
         * Note that this function immediately ends the execution.
         *
         * @param string|null $error_message Optional error message to show in a notice.
         */
        public function redirect_to_connect_home_page(string $error_message = null): void
        {
        }
        /**
         * Checks if Jetpack is connected.
         *
         * Checks if connection is authenticated in the same way as Jetpack_Client or Jetpack Connection Client does.
         *
         * @return bool true if Jetpack connection has access token.
         */
        public function is_connected(): bool
        {
        }
        /**
         * Starts the Jetpack connection process. Note that running this function will immediately redirect
         * to the Jetpack flow, so any PHP code after it will never be executed.
         *
         * @param string $redirect - URL to redirect to after the connection process is over.
         *
         * @throws \BlazeAds\Exceptions\API_Exception - Exception thrown on failure.
         */
        public function start_connection(string $redirect): void
        {
        }
    }
}
namespace BlazeAds\Exceptions {
    /**
     * Abstract class for extension exceptions, where we allow to inject
     * human-friendly error codes, e.g. 'order_not_found'.
     */
    class Base_Exception extends \Exception
    {
        /**
         * String error code, for example 'order_not_found'.
         *
         * @var string
         */
        private string $error_code;
        /**
         * Constructor, including the usual $message, $code, and $previous,
         * and a new parameter $error_code.
         *
         * @param string     $message    The Exception message to throw.
         * @param string     $error_code String error code.
         * @param int        $code       The Exception code.
         * @param \Throwable $previous   The previous exception used for the exception chaining.
         */
        public function __construct($message, $error_code, $code = 0, $previous = null)
        {
        }
        /**
         * Returns the error code.
         *
         * @return string Error code, for example 'order_not_found'.
         */
        public function get_error_code(): string
        {
        }
    }
    /**
     * Class representing API_Exception
     */
    class API_Exception extends \BlazeAds\Exceptions\Base_Exception
    {
        /**
         * HTTP error code, for example 404, 500 etc.
         *
         * @var int
         */
        private int $http_code = 0;
        /**
         * Error type attribute from the server.
         *
         * @var ?string
         */
        private ?string $error_type = null;
        /**
         * Decline code if it is a card error.
         *
         * @var ?string
         */
        private ?string $decline_code = null;
        /**
         * Constructor
         *
         * @param string     $message    The Exception message to throw.
         * @param string     $error_code Error code returned by the server, for example account_not_found.
         * @param int        $http_code  HTTP response code.
         * @param string     $error_type Error type attribute.
         * @param string     $decline_code The decline code if it is a card error.
         * @param int        $code       The Exception code.
         * @param \Throwable $previous   The previous exception used for the exception chaining.
         */
        public function __construct($message, $error_code, $http_code, $error_type = null, $decline_code = null, $code = 0, $previous = null)
        {
        }
        /**
         * Returns the HTTP code.
         *
         * @return int HTTP code, for example 404.
         */
        public function get_http_code(): int
        {
        }
        /**
         * Returns the error type attribute from the server.
         *
         * @return string|null Error type, for example 'api_error' or 'card_error'.
         */
        public function get_error_type(): ?string
        {
        }
        /**
         * Returns the decline code attribute from the server.
         *
         * @return string|null Decline code, for example 'expired_card' or 'insufficient_funds'.
         */
        public function get_decline_code(): ?string
        {
        }
    }
}
namespace {
    \define('BLAZEADS_PLUGIN_FILE', __FILE__);
    \define('BLAZEADS_ABSPATH', __DIR__ . '/');
    /**
     * Initialize the Jetpack functionalities: connection, etc.
     */
    function blazeads_jetpack_init()
    {
    }
    /**
     * Get custom texts for Jetpack Identity Crisis (IDC) module.
     *
     * @return array
     */
    function blazeads_jetpack_idc_custom_content(): array
    {
    }
    /**
     * Initialize the extension. Note that this gets called on the "plugins_loaded" filter,
     * so WooCommerce classes are guaranteed to exist at this point (if WooCommerce is enabled).
     */
    function blazeads_init()
    {
    }
}