<?php
/**
 * Generated stub declarations for reddit-for-woocommerce 1.0.7.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

namespace RedditForWooCommerce\API\AdPartner {
    /**
     * API module for managing Ad Partner ad accounts.
     *
     * This class provides methods to fetch the list of ad accounts associated
     * with the configured business and to retrieve details for the currently
     * selected ad account.
     *
     * @since 0.1.0
     */
    class AdAccountsApi extends \RedditForWooCommerce\API\AdPartner\BaseAdPartnerApi
    {
        /**
         * Retrieves the list of ad accounts for the configured business.
         *
         * This method calls the Ad Partner API to return all ad accounts
         * associated with the business ID stored in plugin options
         * ({@see OptionDefaults::BUSINESS_ID}).
         *
         * If no business ID is set, a {@see WP_Error} is returned.
         *
         * @since 0.1.0
         *
         * @return \WP_REST_Response|\WP_Error REST response containing the list of ad accounts
         *                                    or error if the business ID is not configured.
         */
        public function list()
        {
        }
        /**
         * Retrieves details of the configured ad account.
         *
         * This method fetches detailed information about the ad account
         * selected in plugin options via {@see OptionDefaults::AD_ACCOUNT_ID}.
         *
         * If no ad account ID is set, a {@see WP_Error} is returned.
         *
         * @since 0.1.0
         *
         * @return \WP_REST_Response|\WP_Error REST response containing the ad account details
         *                                    or error if no ad account ID is configured.
         */
        public function get()
        {
        }
    }
    /**
     * API module for creating Ads.
     *
     * This class provides the ability to create a new Ad under the merchant's
     * Ad Partner account, associating it with an existing Ad Group.
     *
     * @since 0.1.0
     */
    class AdApi extends \RedditForWooCommerce\API\AdPartner\BaseAdPartnerApi
    {
        /**
         * Creates an Ad for the current merchant business.
         *
         * This method builds and submits the Ad creation request using the
         * Ad group ID and Profile ID configured in the plugin settings.
         *
         * It returns a {@see WP_REST_Response} on success or a {@see WP_Error}
         * on failure, depending on whether the required prerequisites are met.
         *
         * @since 0.1.0
         *
         * @param string $ad_group_id The ad group ID.
         * @param string $profile_id  The profile ID.
         * @return \WP_REST_Response|\WP_Error REST response from WCS or error if inputs are missing.
         */
        public function create($ad_group_id, $profile_id)
        {
        }
    }
    /**
     * API module for creating Ad Groups.
     *
     * This class provides the ability to create a new Ad Group under the merchant's
     * Ad Partner account, associating it with an existing Campaign.
     *
     * @since 0.1.0
     */
    class AdGroupApi extends \RedditForWooCommerce\API\AdPartner\BaseAdPartnerApi
    {
        /**
         * Creates an Ad Group for the current merchant business.
         *
         * This method builds and submits the Ad Group creation request using the
         * campaign ID and Ad Account ID configured in the plugin settings.
         *
         * It returns a {@see WP_REST_Response} on success or a {@see WP_Error}
         * on failure, depending on whether the required prerequisites are met.
         *
         * @since 0.1.0
         *
         * @param array $campaign_data The campaign data.
         * @return \WP_REST_Response|\WP_Error REST response from WCS or error if inputs are missing.
         */
        public function create($campaign_data)
        {
        }
        /**
         * Check if all countries are allowed.
         * If Shipping is disabled we check if all countries are allowed to sell to.
         * If Shipping is enabled we check if all countries are allowed to ship to.
         *
         * @return bool True if all countries are allowed, false otherwise.
         */
        private function is_all_countries_allowed(): bool
        {
        }
        /**
         * Get allowed countries.
         *
         * @return array Allowed countries.
         */
        private function get_allowed_countries(): array
        {
        }
    }
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
        public \RedditForWooCommerce\API\AdPartner\CatalogApi $catalog;
        /**
         * Handles product feed operations.
         *
         * @since 0.1.0
         * @var FeedApi
         */
        public \RedditForWooCommerce\API\AdPartner\FeedApi $feed;
        /**
         * Handles business operations.
         *
         * @since 0.1.0
         * @var BusinessApi
         */
        public \RedditForWooCommerce\API\AdPartner\BusinessApi $business;
        /**
         * Handles Ad Account operations.
         *
         * @since 0.1.0
         * @var AdAccountsApi
         */
        public \RedditForWooCommerce\API\AdPartner\AdAccountsApi $ad_accounts;
        /**
         * Handles Pixels operations.
         *
         * @since 0.1.0
         * @var PixelsApi
         */
        public \RedditForWooCommerce\API\AdPartner\PixelsApi $pixels;
        /**
         * Handles Members operations.
         *
         * @since 0.1.0
         * @var MembersApi
         */
        public \RedditForWooCommerce\API\AdPartner\MembersApi $members;
        /**
         * Handles Campaigns operations.
         *
         * @since 0.1.0
         * @var CampaignApi
         */
        public \RedditForWooCommerce\API\AdPartner\CampaignApi $campaigns;
        /**
         * Handles Ad Groups operations.
         *
         * @since 0.1.0
         * @var AdGroupApi
         */
        public \RedditForWooCommerce\API\AdPartner\AdGroupApi $ad_groups;
        /**
         * Handles Product Sets operations.
         *
         * @since 0.1.0
         * @var ProductSetApi
         */
        public \RedditForWooCommerce\API\AdPartner\ProductSetApi $product_sets;
        /**
         * Handles Ads operations.
         *
         * @since 0.1.0
         * @var AdApi
         */
        public \RedditForWooCommerce\API\AdPartner\AdApi $ads;
        /**
         * Handles Profiles operations.
         *
         * @since 1.0.3
         * @var ProfilesApi
         */
        public \RedditForWooCommerce\API\AdPartner\ProfilesApi $profiles;
        /**
         * Private constructor to enforce singleton pattern.
         *
         * Initializes all API submodules with the shared {@see WcsClient} instance,
         * ensuring consistent communication with WooCommerce Connect Server.
         *
         * @since 0.1.0
         *
         * @param \RedditForWooCommerce\Connection\WcsClient $wcs WCS client used for authenticated proxy API requests.
         */
        private function __construct(\RedditForWooCommerce\Connection\WcsClient $wcs)
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
         * @param \RedditForWooCommerce\Connection\WcsClient $wcs WCS client used for authenticated proxy API requests.
         * @return self Singleton instance of this class.
         */
        public static function get_instance(\RedditForWooCommerce\Connection\WcsClient $wcs): self
        {
        }
    }
}
namespace RedditForWooCommerce\Api\AdPartner {
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
         * @var \RedditForWooCommerce\Connection\WcsClient
         */
        protected \RedditForWooCommerce\Connection\WcsClient $wcs;
        /**
         * Constructor.
         *
         * Accepts a {@see WcsClient} instance used for all outgoing API calls
         * made by this module or its subclasses.
         *
         * @since 0.1.0
         *
         * @param \RedditForWooCommerce\Connection\WcsClient $wcs WCS client instance.
         */
        public function __construct(\RedditForWooCommerce\Connection\WcsClient $wcs)
        {
        }
    }
}
namespace RedditForWooCommerce\API\AdPartner {
    /**
     * API module for managing Ad Partner businesses.
     *
     * This class provides methods to fetch a list of businesses available
     * to the authenticated merchant and to retrieve detailed information
     * for the currently selected business.
     *
     * @since 0.1.0
     */
    class BusinessApi extends \RedditForWooCommerce\API\AdPartner\BaseAdPartnerApi
    {
        /**
         * Retrieves the list of businesses for the current merchant.
         *
         * This method calls the Ad Partner API to return all businesses
         * associated with the authenticated account. The request is proxied
         * through WCS for authentication.
         *
         * @since 0.1.0
         *
         * @return \WP_REST_Response|\WP_Error REST response containing the list of businesses
         *                                    or error if the request fails.
         */
        public function list()
        {
        }
        /**
         * Retrieves details of the configured business.
         *
         * This method fetches detailed information about the currently
         * selected business. The business ID must first be stored in plugin
         * options via {@see OptionDefaults::BUSINESS_ID}.
         *
         * If no business ID is set, a {@see WP_Error} is returned.
         *
         * @since 0.1.0
         *
         * @return \WP_REST_Response|\WP_Error REST response containing the business details
         *                                    or error if no business ID is configured.
         */
        public function get()
        {
        }
    }
    /**
     * API module for creating campaigns.
     *
     * This class provides the ability to create a new campaign under the merchant's
     * Ad Partner account, associating it with an existing Ads Account.
     *
     * @since 0.1.0
     */
    class CampaignApi extends \RedditForWooCommerce\API\AdPartner\BaseAdPartnerApi
    {
        /**
         * Creates a campaign for the current merchant business.
         *
         * This method builds and submits the campaign creation request using the
         * business ID and Ads Account ID configured in the plugin settings.
         *
         * It returns a {@see WP_REST_Response} on success or a {@see WP_Error}
         * on failure, depending on whether the required prerequisites are met.
         *
         * Requirements:
         * - Ads Account ID must be saved in plugin options.
         *
         * @since 0.1.0
         *
         * @return \WP_REST_Response|\WP_Error REST response from WCS or error if inputs are missing.
         */
        public function create()
        {
        }
        /**
         * Updates a campaign with the given data.
         *
         * This method builds and submits the campaign updating request using the
         * campaign ID.
         *
         * @since 1.0.3
         *
         * @param string $campaign_id The campaign ID.
         * @param array  $update_data The data to update the campaign with.
         * @example array(
         *     'configured_status' => 'ARCHIVED',
         * )
         * @return \WP_REST_Response|\WP_Error REST response from WCS or error if inputs are missing.
         */
        public function update($campaign_id, $update_data = array())
        {
        }
    }
    /**
     * API module for managing product catalogs.
     *
     * This class provides the ability to create a new catalog under the merchant's
     * Ad Partner account, associating it with an existing Pixel.
     *
     * @since 0.1.0
     */
    class CatalogApi extends \RedditForWooCommerce\API\AdPartner\BaseAdPartnerApi
    {
        /**
         * Creates a product catalog for the current merchant business.
         *
         * This method builds and submits the catalog creation request using the
         * business ID and Pixel ID configured in the plugin settings.
         *
         * It returns a {@see WP_REST_Response} on success or a {@see WP_Error}
         * on failure, depending on whether the required prerequisites are met.
         *
         * Requirements:
         * - Business ID must be saved in plugin options.
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
         * Deletes a product catalog for a given ID.
         *
         * This method submits the catalog deletion request for a given
         * catalog ID.
         *
         * It returns a {@see WP_REST_Response} on success or a {@see WP_Error} on failure.
         *
         * @since 0.1.0
         *
         * @param string $catalog_id The ID of the catalog to delete.
         * @return \WP_REST_Response|\WP_Error REST response from WCS or error if inputs are missing.
         */
        public function delete($catalog_id)
        {
        }
        /**
         * Lists all product catalogs for the current merchant business.
         *
         * This method submits the catalog listing request for the current merchant business.
         *
         * It returns a {@see WP_REST_Response} on success or a {@see WP_Error} on failure.
         *
         * @since 1.0.3
         *
         * @return \WP_REST_Response|\WP_Error REST response from WCS or error if inputs are missing.
         */
        public function list()
        {
        }
        /**
         * Retrieves a product catalog by its ID.
         *
         * This method submits the catalog retrieval request for a given
         * catalog ID.
         *
         * It returns a {@see WP_REST_Response} on success or a {@see WP_Error} on failure.
         *
         * @since 1.0.3
         *
         * @param string $catalog_id The ID of the catalog to get.
         * @return \WP_REST_Response|\WP_Error REST response from WCS or error if inputs are missing.
         */
        public function get($catalog_id)
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
    class FeedApi extends \RedditForWooCommerce\API\AdPartner\BaseAdPartnerApi
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
    /**
     * API module for getting authenticated member.
     *
     * This class provides methods to fetch the authenticated member.
     *
     * @since 0.1.0
     */
    class MembersApi extends \RedditForWooCommerce\API\AdPartner\BaseAdPartnerApi
    {
        /**
         * Retrieves the authenticated member.
         *
         * This method calls the Ad Partner API to return the authenticated member via the `/ads/me` endpoint.
         *
         * @since 0.1.0
         *
         * @return \WP_REST_Response|WP_Error REST response containing the authenticated member
         *                                    or error if the request fails.
         */
        public function me()
        {
        }
    }
    /**
     * API module for managing Ad Partner pixels.
     *
     * This class provides methods to fetch the list of tracking pixels
     * associated with the currently configured business. Pixels are used
     * for event tracking, conversion attribution, and retargeting
     * within the Ad Partner’s platform.
     *
     * @since 0.1.0
     */
    class PixelsApi extends \RedditForWooCommerce\API\AdPartner\BaseAdPartnerApi
    {
        /**
         * Retrieves the list of pixels for the configured business.
         *
         * This method calls the Ad Partner API to return all pixels
         * associated with the business ID stored in plugin options
         * ({@see OptionDefaults::BUSINESS_ID}).
         *
         * If no business ID is set, a {@see WP_Error} is returned.
         *
         * @since 0.1.0
         *
         * @return \WP_REST_Response|\WP_Error REST response containing the list of pixels
         *                                    or error if the business ID is not configured.
         */
        public function list()
        {
        }
    }
    /**
     * API module for managing product sets.
     *
     * This class provides the ability to create a new product set under the merchant's
     * Ad Partner account, associating it with an existing Ads Account.
     *
     * @since 0.1.0
     */
    class ProductSetApi extends \RedditForWooCommerce\API\AdPartner\BaseAdPartnerApi
    {
        /**
         * Returns the list of all product sets.
         *
         * @since 0.1.0
         *
         * @return \WP_REST_Response|\WP_Error REST response from WCS or error if inputs are missing.
         */
        public function get_all_products_set_id()
        {
        }
        /**
         * Creates a product set for the current merchant business.
         *
         * This method builds and submits the product set creation request using the
         * Catalog ID configured in the plugin settings.
         *
         * It returns a {@see WP_REST_Response} on success or a {@see WP_Error}
         * on failure, depending on whether the required prerequisites are met.
         *
         * Requirements:
         * - Catalog ID must be saved in plugin options.
         *
         * @since 0.1.0
         *
         * @return \WP_REST_Response|\WP_Error REST response from WCS or error if inputs are missing.
         */
        public function create()
        {
        }
    }
    /**
     * API module for managing Ad Partner profiles.
     *
     * This class provides methods to fetch the list of profiles
     * associated with the currently configured business. Profiles are used
     * for ad targeting and campaign management within the Ad Partner’s platform.
     *
     * @since 1.0.3
     */
    class ProfilesApi extends \RedditForWooCommerce\API\AdPartner\BaseAdPartnerApi
    {
        /**
         * Retrieves the list of profiles for the configured business.
         *
         * This method calls the Ad Partner API to return all profiles
         * associated with the business ID stored in plugin options
         * ({@see OptionDefaults::BUSINESS_ID}).
         *
         * If no business ID is set, a {@see WP_Error} is returned.
         *
         * @since 1.0.3
         *
         * @return \WP_REST_Response|\WP_Error REST response containing the list of profiles
         *                                    or error if the business ID is not configured.
         */
        public function list()
        {
        }
    }
}
namespace RedditForWooCommerce\API {
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
namespace RedditForWooCommerce\API\Site\Controllers {
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
        use \RedditForWooCommerce\API\AdminPermissionsTrait;
    }
    /**
     * Controller for the `/campaigns` endpoint.
     *
     * @since 0.1.0
     */
    class CampaignController extends \RedditForWooCommerce\API\Site\Controllers\RESTBaseController
    {
        /**
         * WCS proxy request client.
         *
         * @var \RedditForWooCommerce\Connection\WcsClient
         */
        protected \RedditForWooCommerce\Connection\WcsClient $wcs;
        /**
         * Instance of the Ad Partner API.
         *
         * @var \RedditForWooCommerce\API\AdPartner\AdPartnerApi
         */
        protected \RedditForWooCommerce\API\AdPartner\AdPartnerApi $ad_partner_api;
        /**
         * Constructor.
         *
         * @param \RedditForWooCommerce\Connection\WcsClient    $wcs            WCS proxy request client.
         * @param \RedditForWooCommerce\API\AdPartner\AdPartnerApi $ad_partner_api Ad Partner API.
         */
        public function __construct(\RedditForWooCommerce\Connection\WcsClient $wcs, \RedditForWooCommerce\API\AdPartner\AdPartnerApi $ad_partner_api)
        {
        }
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
         * Create a campaign REST callback.
         *
         * Creates a campaign, a product set, an ad group, and an ad.
         *
         * @since 0.1.0
         *
         * @param \WP_REST_Request $request REST request object.
         *
         * @return \WP_REST_Response
         */
        public function create_campaign_callback($request)
        {
        }
        /**
         * Create a campaign.
         *
         * @return string|\WP_Error Campaign ID or WP_Error if something went wrong.
         */
        private function create_campaign()
        {
        }
        /**
         * Returns the product set ID of the set that is created by Reddit when
         * a Catalog is created. This ID refers to the set pointing to All Products.
         */
        private function get_product_set_id()
        {
        }
        /**
         * Create a product set.
         *
         * @return string|\WP_Error Product set ID or WP_Error if something went wrong.
         */
        private function create_product_set()
        {
        }
        /**
         * Create ad groups.
         *
         * Creates ad groups for the campaign to set the daily budget and targeting type.
         *
         * 2 Ad Groups are created with different targeting types and budgets:
         * - Prospecting
         * - Retargeting
         *   - Retarget people with previous events: add to cart + view content
         *
         * If a user enters a custom daily budget less than $17:
         * - Prospecting: 50% budget
         * - Retargeting: 50% budget
         *
         * If a user enters a custom daily budget greater than or equal to $17:
         * - Prospecting: 70% budget
         * - Retargeting: 30% budget
         *
         * @since 0.1.0
         *
         * @param string $campaign_id    Campaign ID.
         * @param string $product_set_id Product set ID.
         * @param float  $daily_budget   Daily budget.
         *
         * @return array|\WP_Error Ad group IDs or WP_Error if something went wrong.
         */
        private function create_ad_groups($campaign_id, $product_set_id, $daily_budget)
        {
        }
        /**
         * Create an ads for the ad groups.
         *
         * @param array $ad_group_ids Ad group IDs.
         *
         * @return array|\WP_Error Ad IDs or WP_Error if something went wrong.
         */
        private function create_ads($ad_group_ids)
        {
        }
        /**
         * Validate the amount argument.
         *
         * @param mixed           $amount   The amount to validate.
         * @param \WP_REST_Request $request  The request object.
         * @param string          $param    The parameter name.
         *
         * @return bool|\WP_Error True if the amount is valid, WP_Error if something went wrong.
         */
        public function validate_amount_callback($amount, $request, $param)
        {
        }
        /**
         * Get the profile ID for the configured business.
         *
         * This method fetches all profiles for the configured business and returns the first profile ID.
         *
         * @return string|\WP_Error Profile ID or WP_Error if profile ID is not found.
         */
        private function get_profile_id()
        {
        }
    }
    /**
     * Controller for the Jetpack connection REST endpoints.
     *
     * @since 0.1.0
     */
    class JetpackAccountController extends \RedditForWooCommerce\API\Site\Controllers\RESTBaseController
    {
        /**
         * WCS proxy request client.
         *
         * @var \RedditForWooCommerce\Connection\WcsClient
         */
        protected \RedditForWooCommerce\Connection\WcsClient $wcs;
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
        private const NEXT_PATH_MAPPING = array('setup-reddit' => '/reddit/setup', 'reconnect' => '/reddit/settings&subpath=/reconnect-wpcom-account');
        /**
         * Constructor.
         *
         * @param \RedditForWooCommerce\Connection\WcsClient $wcs    WCS proxy request client.
         * @param \Automattic\Jetpack\Connection\Manager   $manager Jetpack connection manager.
         */
        public function __construct(\RedditForWooCommerce\Connection\WcsClient $wcs, \Automattic\Jetpack\Connection\Manager $manager)
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
        protected function is_jetpack_connection_owner(): bool
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
    class OnboardingController extends \RedditForWooCommerce\API\Site\Controllers\RESTBaseController
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
         * Completes the onboarding setup.
         *
         * @since 1.0.3
         *
         * @return \WP_REST_Response
         */
        public function complete_setup(): \WP_REST_Response
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
     * Controller for setting up and managing the Reddit account connection.
     *
     * @since 0.1.0
     */
    class RedditConnectionController extends \RedditForWooCommerce\API\Site\Controllers\RESTBaseController
    {
        /**
         * WCS proxy request client.
         *
         * @var \RedditForWooCommerce\Connection\WcsClient
         */
        protected \RedditForWooCommerce\Connection\WcsClient $wcs;
        /**
         * Instance of the Ad Partner API.
         *
         * @var \RedditForWooCommerce\API\AdPartner\AdPartnerApi
         */
        protected \RedditForWooCommerce\API\AdPartner\AdPartnerApi $ad_partner_api;
        /**
         * Constructor.
         *
         * @param \RedditForWooCommerce\Connection\WcsClient    $wcs            WCS proxy request client.
         * @param \RedditForWooCommerce\API\AdPartner\AdPartnerApi $ad_partner_api Ad Partner API.
         */
        public function __construct(\RedditForWooCommerce\Connection\WcsClient $wcs, \RedditForWooCommerce\API\AdPartner\AdPartnerApi $ad_partner_api)
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
         * GET/POST the Reddit Ads configuration.
         *
         * Fetches or stores the related Business ID, Ad Account ID, Pixel ID, and Conversion API token.
         *
         * @since 0.1.0
         *
         * @param \WP_REST_Request $request REST request object.
         *
         * @return \WP_REST_Response|\WP_Error
         */
        public function do_config(\WP_REST_Request $request)
        {
        }
        /**
         * Returns an array of Merchant Account details.
         *
         * @since 0.1.0
         *
         * @return \WP_REST_Response
         */
        public function get_connection_details()
        {
        }
        /**
         * Retrieves the list of businesses associated with the authenticated merchant.
         *
         * This method proxies a request to the Ad Partner's Business API via
         * WooCommerce Connect Server (WCS) to fetch all businesses available
         * to the merchant. The response is normalized into a simplified array
         * of business IDs and names for use in the onboarding UI.
         *
         * @since 0.1.0
         *
         * @return \WP_REST_Response REST response containing the formatted list of businesses
         *                          (each with `business_id` and `business_name`) or error details.
         */
        public function get_businesses()
        {
        }
        /**
         * Retrieves the list of ad accounts for the configured business.
         *
         * This method proxies a request to the Ad Partner's Ad Accounts API via
         * WooCommerce Connect Server (WCS) to fetch all ad accounts associated
         * with the business ID stored in plugin options. The response is
         * normalized into a simplified array containing ad account IDs, names,
         * and their associated business ID.
         *
         * @since 0.1.0
         *
         * @return \WP_REST_Response REST response containing the formatted list of ad accounts
         *                          (each with `ad_account_id`, `ad_account_name`, `business_id`)
         *                          or error details.
         */
        public function get_ad_accounts()
        {
        }
        /**
         * Retrieves the list of pixels for the configured business.
         *
         * This method proxies a request to the Ad Partner's Pixel API via
         * WooCommerce Connect Server (WCS) to fetch all tracking pixels
         * associated with the current business. The response is normalized
         * into a simplified array containing pixel IDs, names, and their
         * associated business ID.
         *
         * @since 0.1.0
         *
         * @return \WP_REST_Response REST response containing the formatted list of pixels
         *                          (each with `pixel_id`, `pixel_name`, `business_id`)
         *                          or error details.
         */
        public function get_pixels()
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
    /**
     * Controller for the `/settings` endpoint.
     *
     * @since 0.1.0
     */
    class SettingsController extends \RedditForWooCommerce\API\Site\Controllers\RESTBaseController
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
}
namespace RedditForWooCommerce\Admin {
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
namespace RedditForWooCommerce\Admin\Export {
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
         * @var \RedditForWooCommerce\Admin\Export\Contract\CacheBuilderInterface
         */
        public \RedditForWooCommerce\Admin\Export\Contract\CacheBuilderInterface $cache_builder;
        /**
         * Supplies entity IDs and objects to be exported.
         *
         * @var \RedditForWooCommerce\Admin\Export\Contract\ExportableEntityProviderInterface
         */
        protected \RedditForWooCommerce\Admin\Export\Contract\ExportableEntityProviderInterface $provider;
        /**
         * Converts each entity into an array of exportable row data.
         *
         * @var \RedditForWooCommerce\Admin\Export\Contract\ExportRowBuilderInterface
         */
        protected \RedditForWooCommerce\Admin\Export\Contract\ExportRowBuilderInterface $row_builder;
        /**
         * Writes row data to the final export file (e.g., CSV).
         *
         * @var \RedditForWooCommerce\Admin\Export\Contract\ExportWriterInterface
         */
        public \RedditForWooCommerce\Admin\Export\Contract\ExportWriterInterface $writer;
        /**
         * Constructor.
         *
         * @since 0.1.0
         *
         * @param \RedditForWooCommerce\Admin\Export\Contract\CacheBuilderInterface             $cache_builder  Prepares and caches exportable entity IDs ahead of export.
         * @param \RedditForWooCommerce\Admin\Export\Contract\ExportableEntityProviderInterface $provider       Supplies exportable entity IDs and objects.
         * @param \RedditForWooCommerce\Admin\Export\Contract\ExportRowBuilderInterface         $row_builder    Builds CSV-compatible row data from entities.
         * @param \RedditForWooCommerce\Admin\Export\Contract\ExportWriterInterface             $writer         Writes data to file and manages file output.
         */
        public function __construct(\RedditForWooCommerce\Admin\Export\Contract\CacheBuilderInterface $cache_builder, \RedditForWooCommerce\Admin\Export\Contract\ExportableEntityProviderInterface $provider, \RedditForWooCommerce\Admin\Export\Contract\ExportRowBuilderInterface $row_builder, \RedditForWooCommerce\Admin\Export\Contract\ExportWriterInterface $writer)
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
namespace RedditForWooCommerce\Admin\Export\Contract {
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
namespace RedditForWooCommerce\Admin\Export\EntityProvider {
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
    class ProductEntityProvider implements \RedditForWooCommerce\Admin\Export\Contract\ExportableEntityProviderInterface
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
         * Skips IDs that do not resolve to valid product objects.
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
namespace RedditForWooCommerce\Admin\Export\RowBuilder {
    /**
     * Converts WooCommerce products into catalog-compatible row arrays.
     *
     * Implements {@see ExportRowBuilderInterface} to define how a WooCommerce product
     * should be exported into a format suitable for Reddit’s product feed.
     * Handles common fields such as title, price, and availability, and attempts
     * to extract optional fields like brand, GTIN, and MPN from product attributes or meta.
     *
     * This class is intended to be reused across batch exporters or file writers.
     *
     * @since 0.1.0
     */
    class ProductRowBuilder implements \RedditForWooCommerce\Admin\Export\Contract\ExportRowBuilderInterface
    {
        /**
         * Additional data providers that can enrich the export row.
         *
         * @var \RedditForWooCommerce\Admin\Export\Contract\RowBuilderAdditionalData[]
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
         * @param \RedditForWooCommerce\Admin\Export\Contract\RowBuilderAdditionalData[] $additional_data_providers One or more providers.
         */
        public function __construct(array $additional_data_providers = array())
        {
        }
        /**
         * Builds a single exportable row from a product entity.
         *
         * Validates that the input is a `WC_Product`, then extracts relevant product data
         * into an associative array with Reddit catalog keys. If the input is not a product,
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
namespace RedditForWooCommerce\Admin\Export\Service {
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
    class ProductIdCacheBuilder implements \RedditForWooCommerce\Admin\Export\Contract\CacheBuilderInterface
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
namespace RedditForWooCommerce\Admin\Export\Writer {
    /**
     * Concrete export writer that generates a CSV file.
     *
     * Uses WP_Filesystem to support environments with different filesystem access layers.
     * Supports creating a new file, writing header rows, appending data rows,
     * and resolving a public download URL.
     *
     * @since 0.1.0
     */
    class CsvExportWriter implements \RedditForWooCommerce\Admin\Export\Contract\ExportWriterInterface
    {
        /**
         * Name of the subdirectory inside uploads/ to store exports.
         *
         * @since 0.1.0
         */
        const EXPORT_FOLDER = 'reddit';
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
namespace RedditForWooCommerce\Admin {
    /**
     * Trait MenuFixesTrait
     *
     * Adds Woo Admin React-powered submenu under Marketing with proper ordering and slug fix.
     *
     * @package RedditForWooCommerce\Admin
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
     * The page renders via Woo Admin’s routing system (`/wp-admin/admin.php?page=wc-admin&path=/reddit/start`)
     * while appearing natively within the classic admin UI.
     *
     * @since 0.1.0
     */
    class Menu
    {
        use \RedditForWooCommerce\Admin\MenuFixesTrait;
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
         * Registers the Reddit submenu under WooCommerce > Marketing.
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
}
namespace RedditForWooCommerce\Admin\MetaBox {
    /**
     * Handles Channel visibility meta box registration and product meta persistence.
     *
     * @since 1.0.7
     */
    class ChannelVisibilityMetaBox
    {
        /**
         * Meta key controlling whether a product is eligible for catalog export.
         *
         * When set to '1' the product is included in catalog generation.
         * When set to '0' or absent the product is excluded.
         *
         * @since 1.0.7
         */
        public const CATALOG_ITEM = 'product_catalog_item';
        /**
         * Registers WordPress hooks.
         *
         * @since 1.0.7
         * @return void
         */
        public function register_hooks(): void
        {
        }
        /**
         * Registers the Channel visibility meta box only when no shared `channel_visibility` box exists.
         *
         * Runs at priority 999 so any extension registering at the default priority has already done so.
         * In cohabit mode the React component injects Reddit's settings into the shared box;
         * no second meta box should appear. In standalone mode Reddit owns the box.
         *
         * @since 1.0.7
         *
         * @param string   $post_type Current post type.
         * @param \WP_Post $post      Current post object.
         * @return void
         */
        public function maybe_register(string $post_type, $post): void
        {
        }
        /**
         * Checks whether a `channel_visibility` meta box is registered for the product screen.
         *
         * @since 1.0.7
         *
         * @param array $wp_meta_boxes Global meta boxes registry.
         * @return bool
         */
        private function shared_box_registered(array $wp_meta_boxes): bool
        {
        }
        /**
         * Renders the React mount point for the Channel visibility widget.
         *
         * @since 1.0.7
         * @return void
         */
        public function render(): void
        {
        }
        /**
         * Saves the catalog item meta when a product is saved.
         *
         * Mode-agnostic: runs regardless of whether Reddit owns the meta box or shares another extension's,
         * because the form field lives in the same <form id="post"> either way.
         *
         * @since 1.0.7
         *
         * @param int $post_id The product post ID.
         * @return void
         */
        public function save_meta(int $post_id): void
        {
        }
    }
    /**
     * Enqueues meta box bundles only on matching WC admin screens and inlines mount data.
     *
     * @since 1.0.7
     */
    class MetaBoxAssets
    {
        /**
         * Registers hooks.
         *
         * @since 1.0.7
         *
         * @return void
         */
        public function register_hooks(): void
        {
        }
        /**
         * Loads order-attribution or channel-visibility scripts and localize data as `redditAdsMetaBoxData`.
         *
         * At most one bundle is enqueued per request.
         *
         * @since 1.0.7
         *
         * @return void
         */
        public function enqueue_assets(): void
        {
        }
        /**
         * Gates the order-attribution bundle to the WooCommerce order edit screen.
         *
         * @since 1.0.7
         *
         * @return bool
         */
        protected function should_enqueue_order_attribution_bundle(): bool
        {
        }
        /**
         * Enqueues the order-attribution bundle and passes localized data for the Edit Order screen.
         *
         * @since 1.0.7
         *
         * @return void
         */
        private function enqueue_order_attribution_assets(): void
        {
        }
        /**
         * Enqueues the channel-visibility bundle and passes localized data for the Edit Product screen.
         *
         * @since 1.0.7
         *
         * @param array<string,mixed> $channel_visibility Inline data built by ProductChannelVisibilityData.
         *
         * @return void
         */
        private function enqueue_channel_visibility_assets(array $channel_visibility): void
        {
        }
        /**
         * Subset of the admin app's `redditAdsAdminData` that tracking and the data store need.
         *
         * @since 1.0.7
         *
         * @return array<string,mixed>
         */
        private function get_admin_data(): array
        {
        }
        /**
         * Keys shared between order-attribution and channel-visibility localized payloads.
         *
         * @since 1.0.7
         *
         * @return array<string,mixed>
         */
        private function get_shared_metabox_bootstrap(): array
        {
        }
    }
    /**
     * WC Edit Order screen detection and Reddit order-attribution context.
     *
     * @since 1.0.7
     */
    final class OrderAttributionData
    {
        /**
         * Whether the current admin request is the WooCommerce order edit screen (HPOS or CPT).
         *
         * Requires {@see is_admin()} so this is not treated as an order screen on the front end or in CLI.
         * PHPUnit coverage that calls {@see OrderUtil::is_order_edit_screen()} should define `WP_ADMIN` and
         * run after {@see set_current_screen()} (see {@see MetaBoxAssetsTest::ensure_admin_request_context_for_tests()}).
         *
         * @since 1.0.7
         *
         * @return bool
         */
        public static function is_wc_order_edit_screen(): bool
        {
        }
        /**
         * Resolves the ID of the order being edited in admin, if any.
         *
         * @since 1.0.7
         *
         * @return int|null
         */
        public static function get_editing_order_id(): ?int
        {
        }
        /**
         * Reddit-specific order attribution source for the order currently being edited.
         *
         * @since 1.0.7
         *
         * @return string|null 'reddit' when attribution matches Reddit traffic, null otherwise.
         */
        public static function get_order_attribution_source(): ?string
        {
        }
        /**
         * Reads WooCommerce order attribution meta and returns Reddit when it applies.
         *
         * @since 1.0.7
         *
         * @param int $order_id Order ID.
         * @return string|null 'reddit' or null.
         */
        public static function get_order_attribution_source_for_order(int $order_id): ?string
        {
        }
    }
    /**
     * Gates and payload for the Edit Product channel-visibility bundle.
     *
     * Does not read cohabit/mode from PHP; those are resolved client-side at mount.
     *
     * @since 1.0.7
     */
    final class ProductChannelVisibilityData
    {
        /**
         * Builds the `channelVisibility` object for `redditAdsMetaBoxData`.
         *
         * @since 1.0.7
         *
         * @return array<string,mixed>|null Null when not on a valid product edit context.
         */
        public static function get_channel_visibility_inline_block(): ?array
        {
        }
    }
}
namespace RedditForWooCommerce\Admin {
    /**
     * Registers the WooCommerce Admin onboarding page for Reddit.
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
    /**
     * Coordinates admin-side service initialization for the plugin.
     *
     * This class accepts any number of service objects that support the
     * `register_hooks()` method, and invokes them during admin bootstrap.
     * It allows granular registration of features such as script assets and
     * admin UI components without hardcoding dependencies.
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
namespace RedditForWooCommerce {
    /**
     * Manages frontend asset loading for plugin features.
     *
     * While currently responsible for tracking-related assets (e.g., Reddit Pixel
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
         * Example: `reddit_for_woocommerce`
         *
         * @since 0.1.0
         */
        const PLUGIN_SLUG = 'reddit_for_woocommerce';
        /**
         * The namespace used for all REST API endpoints exposed by this plugin.
         *
         * This value is appended to `/wp-json/` to form the full route base.
         * Example: `/wp-json/wc/rfw/reddit/config`
         *
         * @since 0.1.0
         *
         * @todo: Change this to the actual WCS endpoint.
         */
        const REST_NAMESPACE = 'wc/rfw';
        /**
         * Prefix used for all WordPress storage keys managed by this plugin.
         *
         * This prefix is prepended to all storage names (options or transients) to group
         * them under a consistent namespace.
         * Example: `reddit_pixel_enabled`, `reddit_access_token`
         *
         * @since 0.1.0
         */
        const STORE_PREFIX = 'reddit_';
        /**
         * Prefix used for all asset handles registered or enqueued by this plugin.
         *
         * Used in `wp_enqueue_script`, `wp_register_style`, etc., to avoid name collisions.
         * Example: `reddit_pixel-tracking`, `reddit_admin-settings`
         *
         * @since 0.1.0
         */
        const ASSET_HANDLE_PREFIX = 'reddit_';
        /**
         * JavaScript global variable prefix used for frontend data localization.
         *
         * This constant defines the prefix applied to all global variables created via `AssetLoader::localize_script()`.
         * For example, when localizing with object name `TrackingData`, the resulting JS global will be:
         * `window.redditAdsTrackingData`.
         *
         * This is used by Ad Partner scripts to access configuration, product metadata, or event identifiers
         * injected into the page from the server.
         *
         * @since 0.1.0
         *
         * @see \RedditForWooCommerce\Utils\AssetLoader::localize_script()
         */
        const AD_PARTNER_JS_VAR_PREFIX = 'redditAds';
    }
}
namespace RedditForWooCommerce\Connection {
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
        private \RedditForWooCommerce\Connection\JetpackAuthenticator $authenticator;
        /**
         * Jetpack client wrapper.
         *
         * @var JetpackClient
         */
        private \RedditForWooCommerce\Connection\JetpackClient $jetpack_client;
        /**
         * Class construnctor.
         *
         * @param JetpackAuthenticator $authenticator  Authenticator for API access.
         * @param JetpackClient        $jetpack_client Jetpack client wrapper.
         */
        public function __construct(\RedditForWooCommerce\Connection\JetpackAuthenticator $authenticator, \RedditForWooCommerce\Connection\JetpackClient $jetpack_client)
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
         * @param array  $headers        Optional additional headers to include in the request.
         * @param bool   $blocking       Whether to wait for the response. Pass false for
         *                               fire-and-forget requests that must not hold the
         *                               current PHP request open (e.g. high-volume tracking
         *                               beacons); the response is not available in that case.
         *
         * @return \WP_REST_Response|\WP_Error API response or error.
         */
        public function proxy_post(string $path, $body, bool $requires_auth = true, array $headers = array(), bool $blocking = true)
        {
        }
        /**
         * Sends a proxy PATCH request to an arbitrary WCS endpoint.
         *
         * @since 1.0.3
         *
         * @param string $path           Path within the WCS API (relative to service base).
         * @param mixed  $body           Body payload to send in JSON format.
         * @param bool   $requires_auth  Whether to include the Jetpack auth header.
         * @param array  $headers        Optional additional headers to include in the request.
         *
         * @return \WP_REST_Response|\WP_Error API response or error.
         */
        public function proxy_patch(string $path, $body, bool $requires_auth = true, array $headers = array())
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
         * @param array      $headers        Optional additional headers to include in the request.
         * @param bool       $blocking       Whether to wait for the response. When false the
         *                                   request is dispatched fire-and-forget and a stub
         *                                   202 response is returned without reading Reddit's reply.
         *
         * @return \WP_REST_Response|\WP_Error Parsed response or error.
         */
        public function proxy_request(string $method, string $path, $body = null, $requires_auth = true, array $headers = array(), bool $blocking = true)
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
namespace RedditForWooCommerce\CsvExporter {
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
    class ProductCategoryProvider implements \RedditForWooCommerce\Admin\Export\Contract\RowBuilderAdditionalData
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
         * @var \RedditForWooCommerce\Admin\Export\BatchExportJob
         */
        public \RedditForWooCommerce\Admin\Export\BatchExportJob $job;
        /**
         * Provides access to the Ad Partner APIs.
         *
         * @var \RedditForWooCommerce\API\AdPartner\AdPartnerApi
         */
        public \RedditForWooCommerce\API\AdPartner\AdPartnerApi $ad_partner_api;
        /**
         * Constructor.
         *
         * @since 0.1.0
         *
         * @param \RedditForWooCommerce\Admin\Export\BatchExportJob $job Export job instance that handles caching, entity export, and file generation.
         * @param \RedditForWooCommerce\API\AdPartner\AdPartnerApi   $ad_partner_api Exposes Ad Partner APIs.
         */
        public function __construct(\RedditForWooCommerce\Admin\Export\BatchExportJob $job, \RedditForWooCommerce\API\AdPartner\AdPartnerApi $ad_partner_api)
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
         * It is typically called when the Reddit connection is removed or during plugin deactivation.
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
         * Creates the product catalog if it not exists on Reddit.
         *
         * This method checks if the catalog exists on Reddit and if not, it creates it.
         *
         * This method is hooked to {@see Helper::with_prefix( 'batch_export_job_complete' )}.
         * It is triggered automatically after the final export batch has finished and the
         * CSV feed file has been successfully written.
         *
         * @since 1.0.3
         */
        public function maybe_create_catalog()
        {
        }
        /**
         * Invokes the Ad Partner API to create a product feed after export completes if it hasn't been created yet.
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
        /**
         * Creates a product catalog for the current business.
         *
         * This method creates a product catalog for the current business and
         * triggers the feed creation if the CSV export is completed and the export file URL is set.
         * Triggers the export if the export is not in progress and the export file URL is not set.
         *
         * @since 0.1.0
         */
        public function create_catalog_manually(): void
        {
        }
        /**
         * Deletes the existing catalog for the current business.
         *
         * This method deletes the existing catalog which is associated with the current pixel to allow the creation of a new catalog.
         *
         * @since 1.0.3
         *
         * @param string $pixel_id The ID of the pixel to delete the catalog for.
         *
         * @return bool|\WP_Error True if the catalog is deleted, false if no catalog is found, WP_Error if the catalog is not deleted.
         */
        public function delete_existing_catalog($pixel_id)
        {
        }
        /**
         * Virtual and downloaded products are excluded from CSV exports because
         * DPA (Dynamic Product Ads) only allows physical products.
         *
         * {@see https://business.reddithelp.com/s/article/dynamic-product-ads}
         *
         * @param array      $row     Row of a CSV describing product properties.
         * @param \WC_Product $product A WooCommerce product.
         *
         * @return array
         */
        public function allow_only_physical_products($row, $product)
        {
        }
    }
}
namespace RedditForWooCommerce\MultichannelMarketing {
    /**
     * Class Marketing
     *
     * Registers the Reddit marketing channel with WooCommerce's Marketing UI.
     * Acts as an integration point between WooCommerce's core marketing infrastructure
     * and the Reddit channel defined in this plugin.
     *
     * @package RedditForWooCommerce\MultichannelMarketing
     *
     * @since 0.1.0
     */
    class Marketing
    {
        /**
         * Registers necessary WordPress/WooCommerce hooks to enable the Reddit marketing channel.
         *
         * This function should be called during the plugin initialization phase.
         * It hooks into the `woocommerce_marketing_channels` filter to register the Reddit channel
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
         * Adds the Reddit marketing channel to the list of WooCommerce marketing channels.
         *
         * This method is hooked into the `woocommerce_marketing_channels` filter and appends
         * a new instance of the `RedditChannel` class to the array of available channels.
         *
         * @since 0.1.0
         *
         * @param \Automattic\WooCommerce\Admin\Marketing\MarketingChannelInterface[] $channels Associative array of registered marketing channels, keyed by their slug.
         *
         * @return \Automattic\WooCommerce\Admin\Marketing\MarketingChannelInterface[] Modified array of marketing channels including the Reddit channel.
         */
        public static function add_reddit_channel($channels)
        {
        }
    }
    /**
     * Class RedditChannel
     *
     * @package RedditForWooCommerce\MultichannelMarketing
     *
     * @since 0.1.0
     */
    class RedditChannel implements \Automattic\WooCommerce\Admin\Marketing\MarketingChannelInterface
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
namespace RedditForWooCommerce {
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
        /**
         * Identifier for the Admin related services and features.
         *
         * @since 0.1.0
         */
        public const PRODUCT_EXPORT_SERVICE = 'product_export_service';
        /**
         * Identifier for the Settings REST Controller Setup
         *
         * @since 0.1.0
         */
        public const SETTINGS_REST_CONTROLLER_SETUP = 'settings_rest_controller_setup';
    }
}
namespace RedditForWooCommerce\Tracking {
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
namespace RedditForWooCommerce\Tracking\ConversionEvent\Contract {
    /**
     * Interface for common Ad Partner Conversion event payload fields.
     *
     * Defines the shared contract for all event payload classes. Every Conversion
     * Event (Purchase, AddToCart, ViewContent, PageView, etc.) must provide these
     * fields to guarantee consistent attribution, reporting, and API compatibility.
     *
     * @since 0.1.0
     */
    interface ConversionCommonPayloadInterface
    {
        /**
         * Retrieves the identifier of the data source partner.
         *
         * Typically this is a constant string like `WOOCOMMERCE` that indicates
         * the system of origin for the conversion payload. Ad Partners use this
         * field to distinguish between integrations.
         *
         * @since 0.1.0
         *
         * @return string Partner identifier (e.g., `WOOCOMMERCE`).
         */
        public static function get_partner(): string;
        /**
         * Retrieves the integration version associated with the partner payload.
         *
         * This value identifies the current plugin/integration release being used
         * to send the conversion event. Ad Partners may use it to distinguish
         * behavioral changes across platform-managed integrations.
         *
         * @since 1.0.4
         *
         * @return string Partner integration version.
         */
        public static function get_partner_version(): string;
        /**
         * Retrieves the Unix timestamp when the event occurred.
         *
         * The timestamp should represent the moment the WooCommerce user action
         * (purchase, add-to-cart, product view, etc.) took place. This value is
         * critical for accurate attribution and sequencing of conversion events.
         *
         * @since 0.1.0
         *
         * @return int Unix timestamp (in seconds).
         */
        public static function get_event_at(): int;
        /**
         * Retrieves the source channel of the conversion event.
         *
         * This field identifies the environment where the conversion was recorded
         * (e.g., `WEBSITE`, `MOBILE_APP`). Most WooCommerce-based integrations
         * default to `WEBSITE`, but alternative implementations may specify other
         * values depending on the integration context.
         *
         * @since 0.1.0
         *
         * @return string Action source identifier (e.g., `WEBSITE`).
         */
        public static function get_action_source(): string;
        /**
         * Retrieves the unique tracking type identifier for the event.
         *
         * Each event (e.g., `PURCHASE`, `ADD_TO_CART`, `VIEW_CONTENT`, `PAGE_VIEW`)
         * declares its own constant identifier. This allows the Ad Partner API to
         * classify the event correctly and apply the appropriate attribution logic.
         *
         * @since 0.1.0
         *
         * @return string Tracking type identifier (e.g., `PURCHASE`).
         */
        public function get_tracking_type(): string;
    }
}
namespace RedditForWooCommerce\Tracking\ConversionEvent {
    /**
     * Abstract base class for Conversion Event payloads.
     *
     * Implements default logic for shared event fields, reducing duplication
     * across concrete event classes. Subclasses are required to implement
     * {@see AbstractEventPayloadBase::get_tracking_type()} to define their
     * event type identifier.
     *
     * @since 0.1.0
     */
    abstract class AbstractEventPayloadBase implements \RedditForWooCommerce\Tracking\ConversionEvent\Contract\ConversionCommonPayloadInterface
    {
        /**
         * Retrieves the identifier of the data source partner.
         *
         * For all WooCommerce integrations, this value is fixed as `WOOCOMMERCE`.
         * Ad Partners use this field to identify the system of origin for the event.
         *
         * @since 0.1.0
         *
         * @return string Partner identifier (`WOOCOMMERCE`).
         */
        public static function get_partner(): string
        {
        }
        /**
         * Retrieves the integration version associated with the payload.
         *
         * @since 1.0.4
         *
         * @return string Partner integration version.
         */
        public static function get_partner_version(): string
        {
        }
        /**
         * Retrieves the Unix timestamp when the event occurred.
         *
         * Uses the {@see Helper::get_event_time()} utility method to return the
         * current event time in seconds. This ensures consistent and reliable
         * timestamp generation across all event payloads.
         *
         * @since 0.1.0
         *
         * @return int Unix timestamp (in seconds).
         */
        public static function get_event_at(): int
        {
        }
        /**
         * Retrieves the source channel of the conversion event.
         *
         * Defaults to `WEBSITE`.
         *
         * @since 0.1.0
         *
         * @return string Action source identifier (`WEBSITE`).
         */
        public static function get_action_source(): string
        {
        }
        /**
         * Retrieves the unique tracking type identifier for the event.
         *
         * Subclasses must implement this method to define their event type constant
         * (e.g., `PURCHASE`, `ADD_TO_CART`, `VIEW_CONTENT`, `PAGE_VIEW`).
         *
         * @since 0.1.0
         *
         * @return string Tracking type identifier.
         */
        abstract public function get_tracking_type(): string;
        /**
         * Appends optional event-level fields shared by every conversion event.
         *
         * Adds the following to the event array when the corresponding value is
         * available in `$args`:
         *
         * - `event_source_url` — URL of the page the event originated on. Reddit uses
         *   it on WEBSITE events for domain detection and as a fallback source for the
         *   click ID.
         * - `click_id` — Reddit click ID for the ad that drove the visit.
         * - `user`      — user match keys (IP address, user agent, pixel UUID, …).
         *
         * Centralizing this keeps the optional-field handling identical across all
         * event types, so a field can't be added to one event and forgotten in another.
         *
         * @since 1.0.4
         *
         * @param array<string,mixed> $event The event array being assembled.
         * @param array<string,mixed> $args  Payload args passed to {@see build_payload()}.
         * @return array<string,mixed> The event array with optional fields appended.
         */
        protected static function append_optional_event_fields(array $event, array $args): array
        {
        }
    }
}
namespace RedditForWooCommerce\Tracking\ConversionEvent\Contract {
    /**
     * Interface for final Conversion Event payload builders.
     *
     * Enforces that implementing event classes can construct a complete
     * associative array payload suitable for dispatch to an Ad Partner’s
     * Conversions API.
     *
     * @since 0.1.0
     */
    interface ConversionFinalPayloadInterface
    {
        /**
         * Builds the raw Conversion Event payload.
         *
         * This method should combine all relevant metadata — including common
         * event fields, product details, contextual information, and deduplication
         * identifiers — into a fully structured payload that matches the Ad Partner’s
         * specification.
         *
         * Implementations should allow selective overrides via the `$args` parameter,
         * enabling flexibility for advanced use cases (e.g., injecting a pre-generated
         * conversion ID or custom user data).
         *
         * @since 0.1.0
         *
         * @param array<string,mixed> $args Optional arguments to override or extend
         *                                  the final payload data.
         * @return array<string,mixed> Fully structured Conversion Event payload
         *                             ready for transmission.
         */
        public function build_payload(array $args): array;
    }
    /**
     * Interface for product-level Conversion Event payload fields.
     *
     * Implementing classes are responsible for extracting product-specific metadata
     * from WooCommerce entities and formatting them into a structure suitable for
     * inclusion in the final Conversions API payload.
     *
     * @since 0.1.0
     */
    interface ConversionProductsPayloadInterface
    {
        /**
         * Retrieves product metadata included in the Conversion Event.
         *
         * Each product must be represented as an associative array containing at
         * minimum its ID and name. Implementations may extend this to include
         * additional attributes (e.g., category, variant, SKU) depending on the
         * Ad Partner’s requirements.
         *
         * Example:
         * ```php
         * array(
         *     array(
         *         'id'   => '123',
         *         'name' => 'Sample Product',
         *     ),
         * )
         * ```
         *
         * @since 0.1.0
         *
         * @return array<int,array<string,string>> List of product metadata.
         */
        public function get_products(): array;
        /**
         * Retrieves the store currency code for the Conversion Event.
         *
         * The returned value should follow the ISO 4217 format (e.g., `USD`, `EUR`).
         * This ensures proper monetary interpretation by the Ad Partner API.
         *
         * @since 0.1.0
         *
         * @return string ISO 4217 currency code.
         */
        public function get_currency(): string;
        /**
         * Retrieves the total item count for the Conversion Event.
         *
         * Represents the number of items included in the event (e.g., the quantity
         * of a single product in AddToCart, or the sum of all line items in Purchase).
         *
         * @since 0.1.0
         *
         * @return int Total item count.
         */
        public function get_item_count(): int;
        /**
         * Retrieves the monetary value of the Conversion Event.
         *
         * The value represents the relevant total for the event:
         * - For **ViewContent** → product price
         * - For **AddToCart**   → product subtotal (price × quantity)
         * - For **Purchase**    → order total or revenue
         *
         * @since 0.1.0
         *
         * @return float Event value (monetary amount).
         */
        public function get_value(): float;
    }
}
namespace RedditForWooCommerce\Tracking\ConversionEvent {
    /**
     * Constructs a Conversion request payload for the AddToCart event type.
     *
     * This class captures minimal cart data for tracking add-to-cart conversions.
     *
     * @since 0.1.0
     */
    final class AddToCartEvent extends \RedditForWooCommerce\Tracking\ConversionEvent\AbstractEventPayloadBase implements \RedditForWooCommerce\Tracking\ConversionEvent\Contract\ConversionFinalPayloadInterface, \RedditForWooCommerce\Tracking\ConversionEvent\Contract\ConversionProductsPayloadInterface
    {
        /**
         * Unique identifier for this event type.
         *
         * Used to register and identify the event in the system.
         *
         * @since 0.1.0
         */
        public const ID = 'ADD_TO_CART';
        /**
         * Product instance.
         *
         * @since 0.1.0
         * @var \WC_Product|null
         */
        private $product;
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
         * Retrieves the unique tracking type identifier for this event.
         *
         * @since 0.1.0
         *
         * @return string Tracking type identifier (`ADD_TO_CART`).
         */
        public function get_tracking_type(): string
        {
        }
        /**
         * Retrieves the store currency code for the event.
         *
         * Uses the WooCommerce store currency setting, returned in ISO 4217 format
         * (e.g., `USD`, `EUR`). Ensures compatibility with Ad Partner APIs that
         * require explicit currency codes in payloads.
         *
         * @since 0.1.0
         *
         * @return string ISO 4217 currency code.
         */
        public function get_currency(): string
        {
        }
        /**
         * Retrieves the total monetary value of the event.
         *
         * The value is calculated as the product’s price multiplied by the
         * quantity added. Returns `0.0` if the product instance is invalid.
         *
         * @since 0.1.0
         *
         * @return float Event value (subtotal amount).
         */
        public function get_value(): float
        {
        }
        /**
         * Retrieves the item count for the event.
         *
         * For AddToCart events, this corresponds to the quantity of the product
         * added to the cart.
         *
         * @since 0.1.0
         *
         * @return int Quantity added.
         */
        public function get_item_count(): int
        {
        }
        /**
         * Retrieves metadata for the product added to the cart.
         *
         * Returns an array with product details including its ID and name.
         * If the product instance is invalid, an empty array is returned.
         *
         * Example:
         * ```php
         * array(
         *     array(
         *         'id'   => '123',
         *         'name' => 'Sample Product',
         *     ),
         * )
         * ```
         *
         * @since 0.1.0
         *
         * @return array<int,array<string,string>> Product metadata array.
         */
        public function get_products(): array
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
        public function build_payload(array $args): array
        {
        }
    }
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
     * Constructs a Conversion request payload for the PageVisit event type.
     *
     * This class captures minimal single product page data for tracking
     * view content conversions.
     *
     * @since 0.1.0
     */
    final class PageVisitEvent extends \RedditForWooCommerce\Tracking\ConversionEvent\AbstractEventPayloadBase implements \RedditForWooCommerce\Tracking\ConversionEvent\Contract\ConversionFinalPayloadInterface
    {
        /**
         * Unique identifier for this event type.
         *
         * Used to register and identify the event in the system.
         *
         * @since 0.1.0
         */
        public const ID = 'PAGE_VISIT';
        /**
         * Retrieves the unique tracking type identifier for this event.
         *
         * @since 0.1.0
         *
         * @return string Tracking type identifier (`PAGE_VISIT`).
         */
        public function get_tracking_type(): string
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
        public function build_payload(array $args): array
        {
        }
    }
    /**
     * Constructs a Conversion request payload for the Purchase event type.
     *
     * Extracts item details, order totals, and identifiers from
     * the WooCommerce order object to track conversions accurately.
     *
     * @since 0.1.0
     */
    final class PurchaseEvent extends \RedditForWooCommerce\Tracking\ConversionEvent\AbstractEventPayloadBase implements \RedditForWooCommerce\Tracking\ConversionEvent\Contract\ConversionProductsPayloadInterface, \RedditForWooCommerce\Tracking\ConversionEvent\Contract\ConversionFinalPayloadInterface
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
         * Retrieves the unique tracking type identifier for this event.
         *
         * @since 0.1.0
         *
         * @return string Tracking type identifier (`PURCHASE`).
         */
        public function get_tracking_type(): string
        {
        }
        /**
         * Retrieves the currency used for the order.
         *
         * Falls back to the store’s default WooCommerce currency if the
         * order object is not available. Otherwise, retrieves the currency
         * directly from the WooCommerce order instance.
         *
         * @since 0.1.0
         *
         * @return string ISO 4217 currency code.
         */
        public function get_currency(): string
        {
        }
        /**
         * Retrieves the total monetary value of the order.
         *
         * Returns `0.0` if the order is not available. Otherwise,
         * returns the WooCommerce order total as a float.
         *
         * @since 0.1.0
         *
         * @return float Order total or `0.0` if unavailable.
         */
        public function get_value(): float
        {
        }
        /**
         * Retrieves the total item count from the order.
         *
         * Returns `0` if the order object is not available.
         * Otherwise, returns the number of line items in the order.
         *
         * @since 0.1.0
         *
         * @return int Total item count.
         */
        public function get_item_count(): int
        {
        }
        /**
         * Retrieves metadata for the products included in the order.
         *
         * Iterates through order line items and extracts basic product
         * details (ID and name) for each valid product. Returns an
         * empty array if the order object is unavailable or no valid
         * products are found.
         *
         * Example:
         * ```php
         * array(
         *     array(
         *         'id'   => '123',
         *         'name' => 'Sample Product',
         *     ),
         * )
         * ```
         *
         * @since 0.1.0
         *
         * @return array<int,array<string,string>> List of product metadata.
         */
        public function get_products(): array
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
        public function build_payload(array $args): array
        {
        }
    }
    /**
     * Constructs a Conversion request payload for the ViewContent event type.
     *
     * This class captures minimal single product page data for tracking
     * view content conversions.
     *
     * @since 0.1.0
     */
    final class ViewContentEvent extends \RedditForWooCommerce\Tracking\ConversionEvent\AbstractEventPayloadBase implements \RedditForWooCommerce\Tracking\ConversionEvent\Contract\ConversionFinalPayloadInterface, \RedditForWooCommerce\Tracking\ConversionEvent\Contract\ConversionProductsPayloadInterface
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
         * Product instance.
         *
         * @since 0.1.0
         * @var \WC_Product|null
         */
        private $product;
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
         * Retrieves the unique tracking type identifier for this event.
         *
         * @since 0.1.0
         *
         * @return string Tracking type identifier (`VIEW_CONTENT`).
         */
        public function get_tracking_type(): string
        {
        }
        /**
         * Retrieves the store currency code for the event.
         *
         * Uses the WooCommerce store currency setting, returned in ISO 4217 format
         * (e.g., `USD`, `EUR`). Ensures compatibility with Ad Partner APIs that
         * require explicit currency codes in payloads.
         *
         * @since 0.1.0
         *
         * @return string ISO 4217 currency code.
         */
        public function get_currency(): string
        {
        }
        /**
         * Retrieves the monetary value associated with the event.
         *
         * For a VIEW_CONTENT event, this corresponds to the product’s price.
         * Returns `0.0` if the product instance is invalid or unavailable.
         *
         * @since 0.1.0
         *
         * @return float Product price or `0.0` if unavailable.
         */
        public function get_value(): float
        {
        }
        /**
         * Retrieves the total item count for the event.
         *
         * Always returns `1` for a VIEW_CONTENT event since it represents a single
         * product view.
         *
         * @since 0.1.0
         *
         * @return int Item count (always `1`).
         */
        public function get_item_count(): int
        {
        }
        /**
         * Retrieves metadata for the viewed product.
         *
         * Returns an array with product details including its ID and name.
         * If the product instance is invalid, an empty array is returned.
         *
         * Example:
         * ```php
         * array(
         *     array(
         *         'id'   => '123',
         *         'name' => 'Sample Product',
         *     ),
         * )
         * ```
         *
         * @since 0.1.0
         *
         * @return array<int,array<string,string>> Product metadata array.
         */
        public function get_products(): array
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
        public function build_payload(array $args): array
        {
        }
    }
}
namespace RedditForWooCommerce\Tracking {
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
         * @param string $event_name  Event identifier (e.g. 'PURCHASE', 'ADD_TO_CART').
         * @param int    $status_code HTTP status code returned from the API.
         * @param array  $context     Optional structured context.
         * @return void
         */
        public function log_event(string $event_name, int $status_code, array $context = array()): void
        {
        }
        /**
         * Determine the appropriate log level based on event name.
         *
         * @param string $event_name The name of the conversion event (e.g., 'PURCHASE', 'ADD_TO_CART').
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
    class ConversionTrackingService implements \RedditForWooCommerce\Tracking\ServiceStatusInterface
    {
        /**
         * Instance of a class implementing conversion tracking logic.
         *
         * @var ConversionTrackerInterface
         */
        protected \RedditForWooCommerce\Tracking\ConversionTrackerInterface $tracker;
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
        public function __construct(\RedditForWooCommerce\Tracking\ConversionTrackerInterface $tracker)
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
         * Determines whether Reddit Conversion tracking is currently enabled.
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
     * Provides unique, consistent event IDs for each product/order event type.
     *
     * IDs are generated per-request and cached in memory. For cart events,
     * IDs can optionally be persisted in cookies or frontend-localized for reuse.
     *
     * @since 0.1.0
     */
    final class EventIdRegistry
    {
        /**
         * Returns a order key for the given purchase.
         *
         * Uses the WooCommerce order ID as the key.
         *
         * @since 0.1.0
         *
         * @param int $order_id The Order ID.
         *
         * @return string Order key.
         */
        public static function get_purchase_id($order_id): string
        {
        }
    }
    /**
     * Interface for tracking pixel injectors used in Reddit for WooCommerce integration.
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
    final class PixelTrackingService implements \RedditForWooCommerce\Tracking\ServiceStatusInterface
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
        private \RedditForWooCommerce\Tracking\PixelTrackerInterface $tracker;
        /**
         * Constructor.
         *
         * @since 0.1.0
         *
         * @param PixelTrackerInterface $tracker Instance implementing the logic to inject the tracking pixel.
         */
        public function __construct(\RedditForWooCommerce\Tracking\PixelTrackerInterface $tracker)
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
         * such as `VIEW_CONTENT`, and `PAGE_VIEW`, then localizes it to the
         * frontend as a global JS variable.
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
    class RemoteConversionTracker implements \RedditForWooCommerce\Tracking\ConversionTrackerInterface
    {
        /**
         * Meta key used to mark orders that have already been tracked.
         */
        public const ORDER_CONVERSION_TRACKED_META_KEY = '_reddit_conversion_tracked';
        /**
         * WCS client used to proxy API requests to the Ad Partner.
         *
         * @var \RedditForWooCommerce\Connection\WcsClient
         */
        protected \RedditForWooCommerce\Connection\WcsClient $client;
        /**
         * Logger instance for tracking conversion events.
         *
         * This logger is used to log successful and failed event transmissions,
         * as well as debug information about the payloads being sent.
         *
         * @var ConversionEventLogger
         */
        protected \RedditForWooCommerce\Tracking\ConversionEventLogger $logger;
        /**
         * Constructor.
         *
         * @since 0.1.0
         *
         * @param \RedditForWooCommerce\Connection\WcsClient             $client WCS API proxy client.
         * @param ConversionEventLogger $logger Logger instance for tracking conversion events.
         */
        public function __construct(\RedditForWooCommerce\Connection\WcsClient $client, \RedditForWooCommerce\Tracking\ConversionEventLogger $logger)
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
         * This is a high-volume, low-impact event fired on every product page view. To avoid
         * holding the visitor's request open on the WCS/Reddit round trip (and tying up a PHP
         * worker per page view), it is dispatched fire-and-forget: {@see send()} is called with
         * blocking disabled rather than enqueued in Action Scheduler, which would grow the queue
         * as fast as traffic arrives. The matching client-side pixel event shares the same
         * `event_id`, so Reddit deduplicates the two and any occasional dropped beacon is covered.
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
         * blog post) is viewed by a user. It instantiates a {@see PageVisitEvent} object,
         * constructs the event payload, and sends it immediately via the Conversions API
         * using the internal `send()` method.
         *
         * The payload includes contextual user metadata and an optional deduplication identifier
         * (`event_id`) to align with a corresponding client-side pixel event.
         *
         * This is the highest-volume event, fired on every non-product page view. To avoid holding
         * the visitor's request open on the WCS/Reddit round trip (and tying up a PHP worker per
         * page view), it is dispatched fire-and-forget: {@see send()} is called with blocking
         * disabled rather than enqueued in Action Scheduler, which would grow the queue as fast as
         * traffic arrives. The matching client-side pixel event shares the same `event_id`, so
         * Reddit deduplicates the two and any occasional dropped beacon is covered.
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
         * Tracks a dummy purchase event during the onboarding process with latest order or sample data.
         *
         * This method is called just before the Reddit onboarding process is marked as completed.
         * As we want to send this as early as possible, during the onboarding process.
         *
         * This method is used to track a dummy purchase event with latest order or sample data during onboarding,
         * to enable the "PURCHASE" optimization goal for the ad campaign.
         *
         * Instantiates a {@see PurchaseEvent} object using the latest order ID,
         * generates a valid API payload, and sends it immediately to the Ad Partner
         *
         * @since 0.1.0
         *
         * @return void
         */
        public function track_dummy_purchase(): void
        {
        }
        /**
         * Sends a previously built payload to the Ad Partner Conversions API via WCS.
         *
         * Triggered asynchronously by Action Scheduler (via the `send_conversion_event`
         * hook) for Purchase and AddToCart, and directly — but non-blocking — for the
         * high-volume PageVisit and ViewContent beacons. It retrieves the required pixel
         * ID from plugin options and sends the payload to the Conversions API through the
         * WCS proxy.
         *
         * @since 0.1.0
         *
         * @param array<string,mixed> $event_payload Single event payload.
         * @param array               $args          Additional args.
         * @param bool                $blocking      Whether to wait for the WCS/Reddit response.
         *                                           Pass false to dispatch fire-and-forget so the
         *                                           current request is not held open; the response
         *                                           is then unavailable and not logged.
         * @return void
         */
        public function send(array $event_payload, array $args = array(), bool $blocking = true): void
        {
        }
    }
    /**
     * Fetches and injects Reddit pixel tracking code into WooCommerce frontend pages.
     *
     * Responsibilities:
     * - Checks plugin option to determine if pixel tracking is enabled.
     * - Retrieves pixel script from local cache or Reddit Ads API.
     * - Injects sanitized pixel JavaScript into the frontend via `wp_head`.
     * - Optionally personalizes the script using the logged-in user's email.
     *
     * Dependencies:
     * - {@see WcsClient} for making remote API calls to fetch the pixel script.
     * - {@see JetpackAuthenticator} for securely authenticating requests.
     * - {@see OptionsStore} and {@see OptionDefaults} for managing plugin settings and cache.
     *
     * @see \RedditForWooCommerce\Tracking\PixelTrackerInterface
     * @since 0.1.0
     */
    final class RemotePixelTracker implements \RedditForWooCommerce\Tracking\PixelTrackerInterface
    {
        /**
         * Partner identifier expected by Reddit for platform-managed pixel integrations.
         */
        private const PIXEL_PARTNER = 'WOOCOMMERCE';
        /**
         * Meta key used to mark orders that have already been tracked.
         */
        protected const ORDER_PIXEL_TRACKED_META_KEY = '_reddit_pixel_tracked';
        /**
         * Client for making authenticated proxy requests to Reddit Ads API.
         *
         * @var \RedditForWooCommerce\Connection\WcsClient
         */
        private \RedditForWooCommerce\Connection\WcsClient $wcs_client;
        /**
         * Constructor.
         *
         * @param \RedditForWooCommerce\Connection\WcsClient $wcs_client WCS API client.
         */
        public function __construct(\RedditForWooCommerce\Connection\WcsClient $wcs_client)
        {
        }
        /**
         * Injects the Reddit Pixel script into the footer.
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
         * Retrieves the Reddit Pixel script, either from cache or the remote API.
         *
         * If not cached, it authenticates with Jetpack and queries the Reddit Ads API for pixel script.
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
         * Emits the Reddit `PURCHASE` tracking event after a successful order.
         *
         * Hooked into `wp_footer`. Avoids duplicate firing via meta key.
         *
         * @since 0.1.0
         */
        public function track_purchase_event()
        {
        }
    }
}
namespace RedditForWooCommerce\Utils {
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
         * // Returns: 'reddit_for_woocommerce_send_conversion_event'
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
         * Register an AJAX action for both logged-in and non-logged-in users (frontend).
         *
         * @since 0.1.0
         *
         * @param string   $action     Action name (will be prefixed automatically).
         * @param callable $callback   Callback function to handle the AJAX request.
         * @param boolean  $admin_only If the action should be registered for Admin-context only.
         */
        public static function register_ajax_action(string $action, callable $callback, bool $admin_only = false): void
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
         * Generate a sample headline for the ad.
         *
         * @since 0.1.0
         *
         * @return string A sample headline for the ad.
         */
        public static function get_ad_headline()
        {
        }
        /**
         * Retrieve a valid IANA timezone string for the site.
         *
         * Behavior:
         * - If `timezone_string` is set in WordPress options, that value is returned.
         * - If only a numeric GMT offset is set (e.g. +5.5), it is converted into
         *   the closest matching timezone identifier.
         * - If no valid timezone can be determined, "UTC" is returned as fallback.
         *
         * @since 0.1.0
         *
         * @return string A valid IANA timezone string.
         */
        public static function get_timezone_string()
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
         * Returns the URL of the page where the current tracking event originated.
         *
         * Reddit recommends `event_source_url` on server-side WEBSITE events: it lets
         * Reddit detect the event's domain and, as a fallback, extract the click ID
         * from the URL's query string when it isn't supplied separately.
         *
         * The value is resolved from the current request:
         * - Asynchronous events (AJAX/REST) are dispatched from a background endpoint
         *   (e.g. `admin-ajax.php`), so the originating page is taken from the request
         *   referer — the front-end page that fired the event, which also carries any
         *   `rdt_cid` query parameter from the ad click.
         * - Synchronous events (e.g. the order-received page, a product-form add to
         *   cart) run in the context of the page itself, so the current request URL is
         *   used.
         *
         * `wp_get_referer()` only returns same-host URLs, so the value cannot be
         * spoofed to a foreign domain via the referer header.
         *
         * @since 1.0.4
         *
         * @return string Event source URL, or an empty string if it cannot be determined.
         */
        public static function get_event_source_url(): string
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
         * Convert a decimal amount to microcurrency.
         *
         * @param float $amount The amount in normal currency units.
         * @return int The amount in microcurrency (integer).
         */
        public static function amount_to_microcurrency(float $amount): int
        {
        }
    }
    /**
     * Helpers for setup state used by admin UI, marketing channel, and meta boxes.
     *
     * @since 1.0.7
     */
    final class OnboardingStatus
    {
        /**
         * Whether Reddit onboarding is complete (connected to Reddit).
         *
         * @since 1.0.7
         *
         * @return bool
         */
        public static function is_setup_completed(): bool
        {
        }
    }
}
namespace RedditForWooCommerce\Utils\ProductData {
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
    class GoogleProductTaxonomy
    {
        /**
         * Build the google_product_category value for a given product.
         *
         * Returns the product category string.
         * If the product has no categories, an empty string is returned.
         *
         * Example: 'Apparel & Accessories > Clothing > Activewear'
         *
         * @since 0.1.0
         *
         * @param \WC_Product $product Product instance.
         * @return string Associative array with GPC field or empty if unavailable.
         */
        public function get_google_product_category($product): string
        {
        }
    }
}
namespace RedditForWooCommerce\Utils\Storage {
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
         * Option key for the Reddit Business ID.
         *
         * @since 0.1.0
         */
        public const BUSINESS_ID = 'business_id';
        /**
         * Option key for storing the name of the selected Reddit business.
         *
         * Stored locally after fetching the business from the Reddit API.
         *
         * @since 0.1.0
         */
        public const BUSINESS_NAME = 'business_name';
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
         * Option key for the Ad Partner's Catalog ID.
         *
         * @since 0.1.0
         */
        public const CATALOG_ID = 'catalog_id';
        /**
         * Option key indicating whether the catalog creation has an error.
         */
        public const CATALOG_ERROR = 'catalog_error';
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
         * Option key to store the dummy purchase tracked status.
         *
         * @since 0.1.0
         */
        public const DUMMY_PURCHASE_TRACKED = 'dummy_purchase_tracked';
        /**
         * Option key to store the Ad Partner's currency.
         *
         * @since 0.1.0
         */
        public const ADS_ACCOUNT_CURRENCY = 'ad_account_currency';
        /**
         * Option key to store the Ad Partner's Campaign IDs.
         *
         * @since 0.1.0
         */
        public const CAMPAIGN_IDS = 'campaign_ids';
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
     * @package RedditForWooCommerce\Utils\Storage
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
    final class OptionStorage implements \RedditForWooCommerce\Utils\Storage\StorageStrategyInterface
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
        private static ?\RedditForWooCommerce\Utils\Storage\Store $instance = null;
        /**
         * Lazily instantiates the store with the OptionStorage strategy.
         *
         * @since 0.1.0
         *
         * @return Store The configured store instance.
         */
        private static function get_instance(): \RedditForWooCommerce\Utils\Storage\Store
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
        private \RedditForWooCommerce\Utils\Storage\StorageStrategyInterface $strategy;
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
        public function __construct(\RedditForWooCommerce\Utils\Storage\StorageStrategyInterface $strategy, array $defaults)
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
         * Transient key for storing the email of the connected Reddit account.
         *
         * @since 0.1.0
         */
        public const REDDIT_ACCOUNT_EMAIL = 'reddit_account_email';
        /**
         * Transient key for storing the ID of the created product set.
         *
         * @since 0.1.0
         */
        public const PRODUCT_SET_ID = 'product_set_id';
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
    final class TransientStorage implements \RedditForWooCommerce\Utils\Storage\StorageStrategyInterface
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
         * @var \RedditForWooCommerce\Utils\Storage\Store|null
         */
        private static ?\RedditForWooCommerce\Utils\Storage\Store $instance = null;
        /**
         * Lazily instantiates the store with the TransientStorage strategy.
         *
         * @since 0.1.0
         *
         * @return \RedditForWooCommerce\Utils\Storage\Store The configured store instance.
         */
        private static function get_instance(): \RedditForWooCommerce\Utils\Storage\Store
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
namespace RedditForWooCommerce\Utils {
    /**
     * Builds the user_data structure for CAPI event payloads.
     *
     * This includes device metadata (IP, UA), Reddit cookies, and click ID data.
     * Intended to improve event match rate and attribution accuracy.
     *
     * @since 0.1.0
     */
    final class UserIdentifier
    {
        /**
         * Returns a user_data array for CAPI payloads.
         *
         * Includes:
         * - IP address
         * - user agent (from server)
         * - unique user ID (UUID)
         *
         * @since 0.1.0
         *
         * @return array<string,mixed> Associative array of user identifiers.
         */
        public static function get_user_data(): array
        {
        }
        /**
         * Retrieves the user's browser user agent string.
         *
         * The user agent string provides information about the client's browser, operating system,
         * and device. This information is commonly used for device identification and analytics.
         *
         * This method accesses the 'HTTP_USER_AGENT' server variable and sanitizes the input to
         * ensure it is safe for further processing or storage.
         *
         * @since 0.1.0
         *
         * @return string The sanitized user agent string, or an empty string if not available.
         */
        private static function get_user_agent(): string
        {
        }
        /**
         * Retrieves the user's IP address from server variables.
         *
         * This method attempts to determine the client's real IP address by checking common HTTP headers
         * that may be set by proxies or CDNs such as Cloudflare.
         *
         * The order of precedence is:
         * 1. 'HTTP_CF_CONNECTING_IP' - Used by Cloudflare to pass the original client IP.
         * 2. 'HTTP_X_FORWARDED_FOR' - A comma-separated list of IP addresses sent by proxies; the first IP is assumed to be the client IP.
         * 3. 'REMOTE_ADDR' - The IP address reported by the web server as the remote client.
         *
         * @since 0.1.0
         *
         * @return string The client's IP address if available, otherwise an empty string.
         */
        private static function get_user_ip_address(): string
        {
        }
        /**
         * Retrieves the Reddit Pixel UUID from the user's browser cookies.
         *
         * The Reddit Pixel UUID is a unique user identifier set by the Reddit Pixel in the '_rdt_uuid' cookie
         * whenever the pixel is installed on the website. Sending this identifier with server-side conversion events
         * significantly improves Reddit's ability to match conversions with user engagements and ad impressions,
         * enhancing attribution accuracy and deduplication between pixel and server events.
         *
         * @since 0.1.0
         *
         * @return string The Reddit Pixel UUID from the '_rdt_uuid' cookie, or an empty string if not set.
         */
        private static function get_reddit_pixel_uuid(): ?string
        {
        }
        /**
         * Retrieves the Reddit Click ID (rdtCid) from the user's browser cookies.
         *
         * The Reddit Click ID represents a unique identifier passed as a query parameter (rdt_cid)
         * on product links when a user clicks a Reddit ad. After redirecting to the merchant site,
         * this value is stored in a cookie named 'rdtCid'.
         *
         * Including this identifier in server-side conversion events helps attribute the conversion
         * to the specific Reddit ad click, improving attribution accuracy and deduplication.
         *
         * @since 0.1.0
         *
         * @return string The Reddit Click ID stored in the 'rdtCid' cookie, or an empty string if not set.
         */
        private static function get_reddit_click_id(): string
        {
        }
    }
}
namespace {
    \define('REDDIT_FOR_WOOCOMMERCE_VERSION', '1.0.7');
    \define('REDDIT_FOR_WOOCOMMERCE_FILE', __FILE__);
    \define('REDDIT_FOR_WOOCOMMERCE_PLUGIN_DIR', \plugin_dir_path(__FILE__));
    \define('REDDIT_FOR_WOOCOMMERCE_PLUGIN_URL', \plugin_dir_url(__FILE__));
    \define('REDDIT_FOR_WOOCOMMERCE_PLUGIN_BUILD_PATH', \REDDIT_FOR_WOOCOMMERCE_PLUGIN_DIR . 'js/build/');
    \define('REDDIT_FOR_WOOCOMMERCE_BUILD_URL', \REDDIT_FOR_WOOCOMMERCE_PLUGIN_URL . 'js/build/');
    \define('REDDIT_FOR_WOOCOMMERCE_DEBUG', \false);
    \define('REDDIT_FOR_WOOCOMMERCE_TRACKING_SLUG', 'redtwoo');
}