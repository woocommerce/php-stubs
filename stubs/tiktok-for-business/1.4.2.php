<?php
/**
 * Generated stub declarations for tiktok-for-business 1.4.2.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

namespace {
    /**
     * The plugin loader class
     */
    class Tiktokforbusiness
    {
        /**
         * The version of TikTok for WooCommerce
         *
         * @var string[]
         */
        private static $current_tiktok_for_woocommerce_version = '1.4.2';
        /**
         * Whether WooCommerce has been loaded.
         *
         * @var bool
         */
        private static $woocommerce_loaded = \false;
        /**
         * The TT4B instance.
         */
        private static $instance = \null;
        /**
         * The constructor.
         */
        private function __construct()
        {
        }
        /**
         * Initializes hooks.
         *
         * This should be hooked to the 'woocommerce_loaded' action.
         *
         * @return void
         */
        public function initialize_hooks()
        {
        }
        /**
         * Teardown all action scheduler tasks
         *
         * @return void
         */
        private static function unschedule_scheduled_actions()
        {
        }
        /**
         * Initialize most of the plugin logic.
         *
         * @return void
         */
        private function init()
        {
        }
        /**
         * Get the plugin file name.
         */
        public function get_plugin_file()
        {
        }
        /**
         * Adds plugin action links.
         */
        public function plugin_action_links($actions)
        {
        }
        /**
         * Gets the configuration link to direct to the plugin set-up.
         */
        public function get_settings_link()
        {
        }
        /**
         * Adds the onboarding task to the Tasklists.
         *
         * @since x.x.x
         */
        public function add_onboarding_task()
        {
        }
        /**
         * Deactivates plugin.
         *
         * @return void
         */
        public static function tt_plugin_deactivate()
        {
        }
        /**
         * Generates app credentials.
         *
         * @return void
         */
        public static function tt_plugin_activate()
        {
        }
        /**
         * Get the instance of the Tiktokforbusiness class.
         *
         * @return Tiktokforbusiness
         */
        public static function tiktok_for_business_get_instance()
        {
        }
    }
    /**
     * Onboarding Task class.
     */
    class Tt4b_Onboarding extends \Automattic\WooCommerce\Admin\Features\OnboardingTasks\Task
    {
        /**
         * Get the ID of the task.
         *
         * @return string
         */
        public function get_id()
        {
        }
        /**
         * Get the title for the task.
         *
         * @return string
         */
        public function get_title()
        {
        }
        /**
         * Content.
         *
         * @return string
         */
        public function get_content()
        {
        }
        /**
         * Get the time required to perform the task.
         *
         * @return string
         */
        public function get_time()
        {
        }
        /**
         * Get the action URL for the task.
         *
         * @return string
         */
        public function get_action_url()
        {
        }
        /**
         * Check if the task is complete. The task is completed if we are able to connect to TikTok.
         *
         * @return bool
         */
        public function is_complete()
        {
        }
        /**
         * Parent ID. This method is abstract in WooCommerce 6.1.x, 6.2.x and 6.3.x. This implementation is for backward compatibility for these versions.
         * compatibility-code "WC 6.1.x, WC 6.2.x, WC 6.3.x"
         *
         * @return string
         */
        public function get_parent_id()
        {
        }
    }
    /**
     * Copyright (c) Bytedance, Inc. and its affiliates. All Rights Reserved
     *
     * This source code is licensed under the license found in the
     * LICENSE file in the root directory of this source tree.
     *
     * @package TikTok
     */
    class Tt4b_Menu_Class
    {
        /**
         * Loads the menu.
         *
         * @return void
         */
        public static function tt4b_admin_menu()
        {
        }
        /**
         * Loads the plug-in page.
         */
        public static function tt4b_admin_menu_main()
        {
        }
        /**
         * Populates eligibility for woocommerce merchants.
         */
        public static function get_eligibility_info_for_external_data($external_data)
        {
        }
        /**
         * Populates the extra data for external data.
         */
        public static function get_extra_data_for_external_data($external_data)
        {
        }
        /**
         * Populates address info for woocommerce merchants.
         */
        public static function get_address_info_for_external_data($external_data)
        {
        }
        /**
         * Populates currency and country_iso for woocommerce merchants.
         */
        public static function get_country_and_currency_for_external_data($external_data)
        {
        }
        /**
         * Gets the user country.
         *
         * @return string
         */
        private static function get_user_country()
        {
        }
        /**
         * Loads content from TikTok CDN into the page head.
         *
         * @param $hook_suffix string The hook used
         *
         * @return void
         */
        public static function load_styles($hook_suffix = '')
        {
        }
        /**
         * Stores the mapi issued access token.
         *
         * @return void
         */
        public static function tt4b_store_access_token()
        {
        }
        /**
         * Converts state abbreviation to full state name.
         *
         * @param string $name The state abbreviation or name
         *
         * @return string
         */
        public static function convert_state($name)
        {
        }
    }
}
namespace tiktok\admin\tts\order_detail {
    /**
     * The order detail class
     */
    class OrderDetail
    {
        /**
         * The current order
         *
         * @var $order
         */
        private static $order = null;
        /**
         * The constructor
         */
        public static function init()
        {
        }
        /**
         * Checks whether it is a tiktok order
         */
        private static function is_tiktok_order_detail_page()
        {
        }
        /**
         * Disables edits on tiktok orders (they should be managed on seller center)
         */
        private static function disable_edit()
        {
        }
        /**
         * Delivers notice that tiktok orders are managed on seller center
         */
        private static function notice()
        {
        }
        /**
         * Because tiktok_order_update meta includes timestamp placeholder
         * so we need to hide custom fields by tiktok
         * located in wordpress/wp-admin/includes/meta-boxes.php post_custom_meta_box function
         */
        private static function hide_tiktok_custom_fields()
        {
        }
    }
}
namespace tiktok\admin\tts\order_list {
    /**
     * The order list class
     */
    class OrderList
    {
        /**
         * The constructor
         */
        public static function init()
        {
        }
        public static function load_style_and_script()
        {
        }
        /**
         * Add Channel adn Update columns
         * hook located in wordpress/wp-admin/includes/screen.php get_column_headers function
         */
        private static function modify_table()
        {
        }
        /**
         * Add TikTok views
         * hook is located in wordpress/wp-admin/includes/class-wp-list-table.php views method
         */
        private static function add_tiktok_filter()
        {
        }
    }
}
namespace {
    class TikTokProductsController extends \WC_REST_Products_Controller
    {
        public function prepare_object($object, $request)
        {
        }
    }
    class Tt4b_Catalog_Class
    {
        /**
         * The TikTok Mapi Class used to make various requests to TikTok
         *
         * @var Tt4b_Mapi_Class
         */
        protected $mapi;
        /**
         * The woocommerce logger
         *
         * @var Logger
         */
        protected $logger;
        /**
         * Custom way to pull Woo products
         *
         * @var TikTokProductsController
         */
        protected $tikTokProductsController;
        /**
         * Week in seconds - used to determine if it's been at least a week since the last full sync
         */
        const WEEK = 604800;
        /**
         * Option used to associate scheduled catalog actions with the selected catalog.
         */
        const SYNC_CATALOG_OPTION = 'tt4b_catalog_sync_catalog_id';
        /**
         * Option containing the latest catalog synchronization health information.
         */
        const SYNC_HEALTH_OPTION = 'tt4b_catalog_sync_health';
        /**
         * Catalog actions that must not survive a catalog change.
         */
        const CATALOG_ACTIONS = array('tt4b_catalog_sync', 'tt4b_catalog_sync_helper', 'tt4b_delete_products_helper', 'tt4b_variation_sync', 'tt4b_variation_sync_helper');
        /**
         * Constructor
         *
         * @param Tt4b_Mapi_Class $mapi   The Tt4b_Mapi_Class
         * @param Logger          $logger
         *
         * @return void
         */
        public function __construct(\Tt4b_Mapi_Class $mapi, \Logger $logger)
        {
        }
        /**
         * Initializes actions related to Tt4b_Catalog_Class such as catalog sync functionality used by action_scheduler
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Returns the amount of catalog items are in approved/processing/rejected.
         *
         * @param string $access_token The MAPI issued access token
         * @param string $bc_id        The users business center ID
         * @param string $catalog_id   The users catalog ID
         *
         * @return array(processing, approved, rejected)
         */
        public static function get_catalog_processing_status($access_token, $bc_id, $catalog_id)
        {
        }
        /**
         * Reconciles the selected catalog and schedules immediate and recurring synchronization.
         *
         * @param string $catalog_id The user's catalog ID.
         * @param string $bc_id      The user's business center ID.
         * @param string $store_name The user's store name.
         *
         * @return void
         */
        public function initiate_catalog_sync($catalog_id, $bc_id, $store_name)
        {
        }
        /**
         * Return the catalog IDs referenced by pending or in-progress full sync actions.
         *
         * @return string[]
         */
        private function get_scheduled_catalog_ids()
        {
        }
        /**
         * Cancel all pending catalog synchronization actions on catalog replacement.
         *
         * @return void
         */
        private function cancel_catalog_sync_actions()
        {
        }
        /**
         * Reset delta cursors because they are scoped to the previous catalog.
         *
         * @return void
         */
        private function reset_catalog_sync_cursors()
        {
        }
        /**
         * Return a catalog-specific action group.
         *
         * @param string $schedule_type The schedule type, such as initial or daily.
         * @param string $catalog_id    The selected catalog ID.
         *
         * @return string
         */
        private function get_catalog_action_group($schedule_type, $catalog_id)
        {
        }
        /**
         * Return the persisted catalog synchronization health state.
         *
         * @return array
         */
        public static function get_catalog_sync_health()
        {
        }
        /**
         * Persist a redacted synchronization health state for the UI and support tools.
         *
         * @param string $status     The current synchronization status.
         * @param string $catalog_id The selected catalog ID.
         * @param array  $context    Additional non-sensitive diagnostic fields.
         *
         * @return void
         */
        public function update_catalog_sync_health($status, $catalog_id, $context = array())
        {
        }
        /**
         * Add skipped products to health context without failing the synchronization.
         *
         * @param string $catalog_id            The selected catalog ID.
         * @param int    $skipped_products_count The number of products skipped in this batch.
         *
         * @return void
         */
        private function update_skipped_products_health($catalog_id, $skipped_products_count)
        {
        }
        /**
         * Resolve the current access token instead of relying on a scheduled copy.
         *
         * @param string $scheduled_access_token A token from a legacy scheduled action.
         *
         * @return string|false
         */
        private function get_current_access_token($scheduled_access_token = '')
        {
        }
        /**
         * Confirm that a queued action still targets the selected catalog.
         *
         * Action Scheduler cannot cancel an action that is already executing. This
         * check prevents an old action from continuing after a catalog replacement.
         *
         * @param string $catalog_id The catalog ID from the queued action.
         *
         * @return bool
         */
        private function is_current_catalog_action($catalog_id)
        {
        }
        /**
         * Check a TikTok MAPI response without persisting its potentially sensitive body.
         *
         * @param string $response The JSON response body.
         *
         * @return bool
         */
        private function is_successful_mapi_response($response)
        {
        }
        /**
         * Extract non-sensitive request metadata from a TikTok API response.
         *
         * @param string $response The JSON response body.
         *
         * @return array
         */
        private function get_api_response_context($response)
        {
        }
        /**
         * Sync merchant catalog from woocommerce store to TikTok catalog manager via creation of catalog_sync_helper functions for batches of products
         *
         * @param string $catalog_id   The users catalog ID
         * @param string $bc_id        The users business center ID
         * @param string $store_name   The users store name
         * @param string $access_token The MAPI issued access token
         *
         * @return void
         */
        public function catalog_sync($catalog_id, $bc_id, $store_name, $access_token)
        {
        }
        /**
         * Helper function used to delete products on tiktok catalog manager that have been removed (trashed or deleted) from the woocommerce store
         * This function should run before any products sync to avoid issues when products are trashed and then untrashed
         *
         * @param string  $catalog_id               The users catalog ID
         * @param string  $bc_id                    The users business center ID
         * @param string  $store_name               The users store name
         * @param string  $access_token             The MAPI issued access token
         * @param integer $page_total               The maximum number of pages of 100 products to sync for this job
         * @param integer $last_catalog_sync        The unix timestamp of the last catalog sync, used to fetch products modified and created since that timestamp
         * @param boolean $reconciliation_sync      Control if the current sync is reconciliation for TikTok's product webhooks, which will sync all products to the webhooks and only deltas to the MAPI endpoint, defaults to false
         * @param integer $reconciliation_sync_time The reference time for the reconciliation sync, which will be used if reconciliation sync is enabled, to make sure to only send recent modifications to the MAPI endpoint
         *
         * @return void
         */
        public function delete_products_helper($catalog_id, $bc_id, $store_name, $access_token, $page_total, $last_catalog_sync, $reconciliation_sync, $reconciliation_sync_time)
        {
        }
        /**
         * Helper function used to post batches of products from woocommerce store to tiktok catalog manager
         *
         * @param string  $catalog_id               The users catalog ID
         * @param string  $bc_id                    The users business center ID
         * @param string  $store_name               The users store name
         * @param string  $access_token             The MAPI issued access token
         * @param integer $page                     The page of products from the user catalog
         * @param integer $page_total               The maximum number of pages of 100 products to sync for this job
         * @param integer $last_catalog_sync        The unix timestamp of the last catalog sync, used to fetch products modified and created since that timestamp
         * @param boolean $reconciliation_sync Control if the current sync is reconciliation for TikTok's product webhooks, which will sync all products to the webhooks and only deltas to the MAPI endpoint, defaults to false
         * @param integer $reconciliation_sync_time The reference time for the reconciliation sync, which will be used if reconciliation sync is enabled, to make sure to only send recent modifications to the MAPI endpoint
         *
         * @return void
         */
        public function catalog_sync_helper(string $catalog_id, string $bc_id, string $store_name, string $access_token, int $page, int $page_total, int $last_catalog_sync, bool $reconciliation_sync, int $reconciliation_sync_time)
        {
        }
        /**
         * Sync a product's variants to the TikTok catalog
         *
         * @param int    $parent_id
         * @param string $parent_sku
         * @param string $access_token
         * @param int    $page_total
         * @param int    $page
         *
         * /**
         *  Sync a product's variants to the TikTok catalog
         *
         *  @param int    $parent_id
         *  @param string $parent_sku
         *  @param string $access_token
         *  @param int    $page_total
         *  @param int    $page
         *
         *  @return void
         * @return void
         */
        public function variation_sync_helper(int $parent_id, string $parent_sku, string $access_token, int $page_total, int $page)
        {
        }
        /**
         * Prepare child product_variations associated with parent variable product to be synced to TikTok MAPI catalog
         *
         * @param string                 $parent_sku
         * @param string                 $parent_description
         * @param string                 $store_name
         * @param WC_Product_Variation[] $product_variations
         * @param integer                $last_catalog_sync The unix timestamp of the last catalog sync, used to fetch products modified and created since that timestamp
         *
         * @return array
         */
        public function fetch_mapi_product_variations($parent_sku, $parent_description, $store_name, $product_variations, $last_catalog_sync)
        {
        }
        /**
         * Check if async action should be added according to name, payload, and group
         *
         * @param string $action_name name of the action to run
         * @param array  $payload     array payload for the action
         *
         * @param string $group       action group, pass empty string if no group
         *
         * @return int The created action ID, or 1 when an equivalent action already exists.
         */
        private function check_and_start_async_action(string $action_name, array $payload, string $group)
        {
        }
        /**
         * Generate the needed product_data in array format for products, and product variants accordingly
         *
         * @param string     $store_name
         * @param WC_Product $product
         * @param string     $parent_sku         optional - provided for child products (variants) to associate child product to parent product
         * @param string     $parent_description optional - provided for child products in case the child doesn't have a unique description
         *
         * @return array
         */
        public function generate_product_info($store_name, $product, $parent_sku = '', $parent_description = '')
        {
        }
        /**
         * Returns a cron string with randomized hour and minute values for scheduling recurring eligibility collection
         *
         * @return string
         */
        private function generate_cron_string()
        {
        }
    }
    /**
     * Class responsible for logging
     */
    class Logger
    {
        /**
         * The log_file_name.
         *
         * @var string
         */
        protected $log_file_name;
        /**
         * The constructor
         *
         * @param WC_Logger_Interface $logger The wc_get_logger interface.
         */
        public function __construct()
        {
        }
        /**
         * Log errors and debugging messages
         *
         * @param string $method  The class/function where the message occurred.
         * @param string $message The message to be logged.
         * @param string $level   The level/context of the message.
         *
         * @return void
         */
        public function log($method, $message, $level = 'debug')
        {
        }
        /**
         * Helper for Logging API requests.
         *
         * @param string $url   The URL of the request.
         * @param array  $args  The Arguments of the request.
         * @param string $level The default level/context of the message to be logged.
         *
         * @return void
         */
        public function log_request($url, $args, $level = 'debug')
        {
        }
        /**
         * Possibly output the pixel debugging data.
         *
         * @param string $data
         *
         * @return void
         */
        protected function maybe_output_pixel_data($data)
        {
        }
        /**
         * Return whether this is an AJAX request.
         *
         * @return bool
         */
        protected function doing_ajax()
        {
        }
        /**
         *  Helper for Logging API responses.
         *
         * @param string $method   The method where the log occurred.
         * @param array  $response The body of the response.
         * @param string $level    The default level/context of the message to be logged.
         *
         * @return void
         */
        public function log_response($method, $response, $level = 'debug')
        {
        }
    }
    class Tt4b_Mapi_Class
    {
        /**
         * The TikTok Ads endpoint base url.
         *
         * @var string
         */
        protected $mapi_url;
        /**
         * The TBP endpoint base url.
         *
         * @var string
         */
        protected $tbp_url;
        /**
         * The plugin endpoint base url.
         *
         * @var string
         */
        protected $plugin_url;
        /**
         * The wc_get_logger interface.
         *
         * @var WC_Logger_Interface
         */
        protected $logger;
        /**
         * Constructor
         *
         * @return void
         */
        public function __construct(\Logger $logger)
        {
        }
        /**
         * Initializes actions related to Tt4b_Mapi_Class such as eligibility information collection
         */
        public function init()
        {
        }
        /**
         * Posts to business-api.tiktok.com
         *
         * @param string $endpoint     The endpoint for the mapi post
         * @param string $access_token The MAPI issued access token
         * @param array  $params       Whichever params to be included with the post
         * @param string $version      The MAPI version used
         * @param bool   $blocking     Whether the request should be synchronous
         *
         * @return string
         */
        public function mapi_post($endpoint, $access_token, $params, $version, $blocking = \true)
        {
        }
        /**
         * Get from business-api.tiktok.com
         *
         * @param string $endpoint     The endpoint for the mapi post
         * @param string $access_token The MAPI issued access token
         * @param array  $params       Whichever params to be included with the post
         * @param string $version      The MAPI version used
         *
         * @return string
         */
        public function mapi_get($endpoint, $access_token, $params, $version)
        {
        }
        /**
         * Get from tbp/business_profile
         *
         * @param string $access_token         The MAPI issued access token
         * @param string $external_business_id The exteneral business_id of the merchant
         *
         * @return string
         */
        public function get_business_profile($access_token, $external_business_id)
        {
        }
        /**
         *
         * Get from api/user/location
         *
         * @return string
         */
        public function get_user_location()
        {
        }
        /**
         * Post to tbp
         *
         * @param string $external_data The external data
         * @param string $endpoint      The endpoint
         * @param string $version       The version
         * @param array  $params        The body of the request
         * @param int    $tbp_api_type  Which url to use based on the TBPApi abstract class
         * @param bool   $blocking      Whether the request should be synchronous
         *
         * @return string
         */
        public function tbp_post($external_data, $endpoint, $version, $params, $tbp_api_type, $blocking = \true)
        {
        }
        /**
         * Update from tbp/business_profile
         *
         * @param string  $access_token                           The MAPI issued access token
         * @param string  $external_business_id                   The external business_id of the merchant
         * @param integer $total_gmv                              The merchant's total gmv
         * @param integer $total_orders                           The merchant's total orders
         * @param integer $total_orders                           The merchant's tenure in days
         * @param string  $current_tiktok_for_woocommerce_version The current tiktok-for-woocommerce version
         *
         * @return void
         */
        public function update_business_profile($access_token, $external_business_id, $total_gmv, $total_orders, $days_since_first_order, $current_tiktok_for_woocommerce_version)
        {
        }
        /**
         * Returns a raw API response from TikTok
         * marketing_api/api/developer/app/create_auto_approve/
         *
         * @param string $smb_id       The merchants external_business_id
         * @param string $smb_name     The MAPI issued access token
         * @param string $redirect_uri The redirect_url (the store url)
         *
         * @return string|bool
         */
        public function create_open_source_app($smb_id, $smb_name, $redirect_uri)
        {
        }
        /**
         * Returns a raw API response from TikTok oauth2/access_token_v2/ endpoint
         *
         * @param string $app_id    The MAPI app_id
         * @param string $secret    The MAPI secret
         * @param string $auth_code The auth_code
         * @param string $version   The MAPI version used
         *
         * @return string
         */
        public function get_access_token($app_id, $secret, $auth_code, $version)
        {
        }
        /**
         * Returns a cron string with randomized hour and minute values for scheduling recurring eligibility collection
         *
         * @return string
         */
        private function generate_cron_string()
        {
        }
        /**
         * Begins first eligibility information collection process, and scheduled recurring collection if not already scheduled
         *
         * @return void
         */
        public function fetch_eligibility()
        {
        }
        /**
         * Retrieves eligibility information from merchants woocommerce store via creation of retrieve_eligibility_helper functions for batches of 20 orders
         *
         * @return void
         */
        public function retrieve_eligibility_information()
        {
        }
        /**
         * Helper function used to calculate eligibility information in batches of 20
         *
         * @param integer $page The page of orders from woocommerce
         *
         * @return void
         */
        public function retrieve_eligibility_helper($page)
        {
        }
        /**
         * Update partner insights data
         *
         * @param string $external_data The external data.
         * @param array  $insights_data Partner insights data payload.
         *
         * @return string
         */
        public function partner_insights_update($external_data, $insights_data)
        {
        }
        /**
         * Collect partner insights data
         *
         * @param integer $store_tenure Store tenure in days.
         *
         * @return array
         */
        public function collect_partner_insights_data($store_tenure)
        {
        }
        /**
         * Get last 30 days' GMV
         *
         * @return integer
         */
        private function get_last_30_days_gmv()
        {
        }
        /**
         * Get last 30 days' order count
         *
         * @return integer
         */
        private function get_last_30_days_orders()
        {
        }
        /**
         * Calculate orders tier based on order count
         *
         * @param integer $order_count Number of orders.
         *
         * @return string
         */
        private function calculate_orders_tier($order_count)
        {
        }
        /**
         * Get store country
         *
         * @return string
         */
        private function get_store_country()
        {
        }
        /**
         * Get website URL
         *
         * @return string
         */
        private function get_website_url()
        {
        }
        /**
         * Get product count
         *
         * @return integer
         */
        private function get_product_count()
        {
        }
        /**
         * Check if Google Analytics is present
         *
         * @return boolean
         */
        private function has_google_analytics()
        {
        }
        /**
         * Check if Facebook Pixel is present
         *
         * @return boolean
         */
        private function has_facebook_pixel()
        {
        }
        /**
         * Calculate GMV tier based on total GMV
         *
         * @param integer $total_gmv Total GMV amount.
         *
         * @return string
         */
        private function calculate_gmv_tier($total_gmv)
        {
        }
        /**
         * TTS Disconnect
         *
         * @param string $external_data The external data.
         *
         * @return void
         */
        public function tts_shop_disconnect($external_data)
        {
        }
    }
    class Tt4b_Pixel_Class
    {
        // TTCLID Cookie name
        const TTCLID_COOKIE = 'tiktok_ttclid';
        const TTP_COOKIE = '_ttp';
        private static $events = array();
        /**
         * Fires the view content event
         *
         * @return void
         */
        public static function inject_view_content_event()
        {
        }
        /**
         * Fires the add to cart event
         *
         * @param string $cart_item_key The cart item id
         * @param string $product_id The product id
         * @param string $quantity The quantity of products
         * @param string $variation_id The variant id
         *
         * @return void
         */
        public static function inject_add_to_cart_event($cart_item_key, $product_id, $quantity, $variation_id)
        {
        }
        /**
         * Fires the start checkout event
         *
         * @return void
         */
        public static function inject_initiate_checkout_event()
        {
        }
        /**
         * Fires the purchase event
         *
         * @param string $order_id the order id
         *
         * @return void
         */
        public static function inject_purchase_event($order_id)
        {
        }
        /**
         *  Gets product property meta data.
         *
         * @param object $product      the product.
         * @param int    $quantity     the quantity.
         * @param int    $variation_id the variation_id.
         * @param string $method       the method.
         */
        public static function get_properties_from_product($product, $quantity, $variation_id, $method)
        {
        }
        /**
         * Get email for purchase events - follows Pinterest pattern for reliable guest checkout email capture
         *
         * @return string Email address or empty string
         */
        public static function get_email_for_purchase()
        {
        }
        /**
         *  Gets the user param needed for view content, add to cart, start checkout, complete payment.
         */
        public static function get_user()
        {
        }
        public static function get_event_id($content_id)
        {
        }
        /**
         *  Gets all pixels associated to an ad account.
         *
         * @param string $access_token The MAPI issued access token.
         * @param string $advertiser_id The users advertiser id.
         * @param string $pixel_code The users pixel code.
         */
        public function get_pixels($access_token, $advertiser_id, $pixel_code)
        {
        }
        /**
         * Gets whether advanced matching is enabled for the user.
         *
         * @param string $info The users email or phone
         *
         * @return false|string
         */
        public function add_advanced_matching_hashed_info($info, $user, $identifier)
        {
        }
        /**
         *  Preprocess to ensure we have the required fields to call the event track API
         *
         * @param string $method The hook that is executed.
         *
         * @return array
         */
        public static function pixel_event_tracking_field_track($method)
        {
        }
        /**
         *  Validates to ensure tt4b options are stored, and return the option if it is.
         *
         * @param string $option_name The tt4b data option
         * @param bool   $default The default option boolean
         *
         * @return string
         * @throws Exception          Throws exception when the given option is missing.
         */
        protected static function get_and_validate_option($option_name, $default = \false)
        {
        }
        /**
         *  Checks to see whether to track events s2s
         *
         * @param string $access_token The access token
         * @param string $advertiser_id The advertiser_id
         * @param string $pixel_code The pixel_code
         *
         * @return bool
         */
        public function confirm_to_send_s2s_events($access_token, $advertiser_id, $pixel_code)
        {
        }
        /**
         *  Grab ttclid from URL and set cookie for 30 days
         */
        public static function set_ttclid()
        {
        }
        public static function get_user_ip_address()
        {
        }
        /**
         *  Add ajax event tracking
         */
        public static function add_ajax_snippet()
        {
        }
        /**
         * Get cart subtotal for a product with tax if appropriate
         *
         * @param WC_Product $product  the product to calculate row subtotal
         * @param int        $quantity quantity of product being purchase
         *
         * @return int the appropriate price with tax for the product row subtotal
         */
        protected static function get_product_subtotal_as_float($product)
        {
        }
        /**
         * Gets the event's JS code to be enqueued or printed.
         *
         * @param string $event The event's type.
         * @param string $pixel_code The pixel code
         * @param array  $data The data to be passed to the JS function.
         * @param string $event_id The unique id corresponding to the event.
         *
         * @return string
         */
        private static function prepare_event_code($event, $pixel_code, $data, $event_id)
        {
        }
        /**
         * Gets the AM to be enqueued or printed.
         *
         * @param string $pixel_code The pixel code.
         * @param string $hashed_email The hashed email.
         * @param string $hashed_phone The hashed phone.
         * @param string $first_name The hashed first_name.
         * @param string $last_name The hashed last_name
         * @param string $city The city.
         * @param string $state The state.
         * @param string $country The country.
         * @param string $zip_code The zip_code.
         *
         * @return string
         */
        private static function prepare_advanced_matching($pixel_code, $user)
        {
        }
        /**
         * Prints the given event.
         *
         * @param string $event The event's type.
         * @param string $pixel_code The pixel code.
         * @param array  $data The data to be passed to the JS function.
         * @param string $hashed_email The hashed email.
         * @param string $hashed_phone The hashed phone.
         *
         * @return void
         */
        private static function print_event($event, $pixel_code, $data, $hashed_email, $hashed_phone, $event_id)
        {
        }
        /**
         * Enqueues the given event.
         *
         * @param string $event The event's type.
         * @param string $pixel_code The pixel code.
         * @param array  $data The data to be passed to the JS function.
         * @param string $hashed_email The hashed email.
         * @param string $hashed_phone The hashed phone.
         *
         * @return void
         */
        private static function enqueue_event($event, $pixel_code, $data, $event_id, $user)
        {
        }
        /**
         * Prints the enqueued base code and events snippets.
         * Meant to be used in wp_head.
         *
         * @return void
         */
        public static function print_script()
        {
        }
        public static function track_page_view()
        {
        }
        public function get_key($key)
        {
        }
        /**
         * Filter the "Add to cart" button attributes to include more data.
         *
         * @see woocommerce_template_loop_add_to_cart()
         *
         * @since 1.0.11
         *
         * @param array      $args The arguments used for the Add to cart button.
         * @param WC_Product $product The product object.
         *
         * @return array The filtered arguments for the Add to cart button.
         */
        public static function filter_add_to_cart_attributes(array $args, \WC_Product $product)
        {
        }
    }
    /**
     * Abstract class used as enum for utility method to determine catalog product_id
     */
    abstract class Method
    {
        const CATALOG = 0;
        const DELETE = 1;
        const ADDTOCART = 2;
        const PURCHASE = 3;
        const STARTCHECKOUT = 4;
        const VIEWCONTENT = 5;
    }
    /**
     * Abstract class used as enum to control TBP endpoint base url
     */
    abstract class TBPApi
    {
        const TBP = 0;
        const PLUGIN = 1;
    }
}
/**
 * TikTok common code
 * such as const, util function
 */
namespace tiktok\admin\tts\common {
    /**
     * Inserts a new key/value after the key in the array.
     *
     * If the $needle doesn't exist in the array, the new key and value wil be
     * appended to the end of the $haystack array.
     *
     * @param string $needle    The array key to insert the element after
     * @param array  $haystack  An array to insert the element into
     * @param string $new_key   The key to insert
     * @param mixed  $new_value An value to insert
     *
     * @return array The new array.
     */
    function array_insert_after($needle, $haystack, $new_key, $new_value)
    {
    }
    /**
     * Helper to create links to edit.php with params.
     *
     * @since 4.4.0
     *
     * @param  string[] $args      Associative array of URL parameters for the link.
     * @param  string   $link_text Link text.
     * @param  string   $css_class Optional. Class attribute. Default empty string.
     * @return string The formatted link string.
     *
     * located in wordpress/wp-admin/includes/class-wp-posts-list-talbe.php
     */
    function get_edit_link($args, $link_text, $css_class = '')
    {
    }
    /**
     * The origin of Tiktok Seller Center in different countries are different
     * We need to set the origin according to the country
     */
    function get_tts_seller_center_origin()
    {
    }
}
namespace {
    /**
     * Trash a product
     *
     * @param string $post_id The product_id.
     *
     * @return void
     */
    function tt4b_product_trashed($post_id)
    {
    }
    /**
     * Delete or trash a product variation
     *
     * @param string $post_id The product/variation id to be deleted.
     *
     * @return void
     */
    function tt4b_variation_delete($post_id)
    {
    }
    /**
     * Add restore products back to MAPI via upload API vs update
     * TODO: Use this during catalog and variation syncing for MAPI - move parent + children over from update to upload
     *
     * @param $post_id - The product/variation to be restored
     *
     * @return void
     */
    function tt4b_product_untrashed($post_id)
    {
    }
    /**
     * Delete a product or product_variation
     *
     * @param string  $post_id The product_id.
     * @param WP_Post $post    The post.
     *
     * @return void
     */
    function tt4b_product_delete($post_id, $post)
    {
    }
    /**
     * Determine variation product ID for TT catalog sync
     *
     * @param int    $method     Method const int from abstract util Class Method.
     * @param string $parent_id  parent product's sku_id.
     * @param string $sku_id     variation product's sku_id.
     * @param string $product_id variation product's WP DB ID.
     *
     * @return string
     */
    function tt4b_variation_content_id_helper($method, $parent_id, $sku_id, $product_id)
    {
    }
}