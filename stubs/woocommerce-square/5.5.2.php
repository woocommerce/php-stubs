<?php
/**
 * Generated stub declarations for woocommerce-square 5.5.2.
 * @see https://github.com/woocommerce/php-stubs
 */

namespace WooCommerce\Square {
    /**
     * AJAX handler.
     *
     * @since 2.0.0
     */
    class AJAX
    {
        /**
         * Adds AJAX action callbacks.
         *
         * @since 2.0.0
         */
        public function __construct()
        {
        }
        /**
         * Register REST API endpoints.
         *
         * @since 2.1.6
         */
        public function register_rest_endpoints()
        {
        }
        /**
         * Verify access.
         *
         * Override this method if custom permissions required.
         */
        public function check_permission()
        {
        }
        /**
         * Fetches product stock data from Square.
         *
         * @internal
         *
         * @since 2.0.0
         */
        public function fetch_product_stock_with_square()
        {
        }
        /**
         * Starts importing products from Square.
         *
         * @param \WP_REST_Request $request The REST request object.
         *
         * @internal
         *
         * @since 2.0.0
         */
        public function import_products_from_square($request = null)
        {
        }
        /**
         * Update the connected_page_visited option.
         * This will be used to show a message to visit the onboarding
         * wizard and the onboarding wizard submenu until found `true`.
         *
         * @since 4.7.0
         */
        public function update_connected_page_visited()
        {
        }
        /**
         * Starts syncing products with Square.
         *
         * @internal
         *
         * @since 2.0.0
         */
        public function sync_products_with_square()
        {
        }
        /**
         * Handles sync records actions.
         *
         * @internal
         *
         * @since 2.0.0
         */
        public function handle_sync_records()
        {
        }
        /**
         * Gets a sync job status.
         *
         * Also bumps the job progression (useful for when background processing isn't available).
         *
         * @internal
         *
         * @since 2.0.0
         */
        public function get_sync_with_square_job_status()
        {
        }
        /**
         * Get sync status, variable status, and edit url for product
         *
         * Used to manipulate quick edit menu for product
         *
         * @since 2.1.6
         */
        public function get_quick_edit_product_details()
        {
        }
    }
}
namespace WooCommerce\Square\Framework\Api {
    /**
     * Base API Class
     *
     * This class provides a standardized framework for constructing an API wrapper
     * to external services. It is designed to be extremely flexible.
     */
    abstract class Base
    {
        /** @var string request method, defaults to POST */
        protected $request_method = 'POST';
        /** @var string URI used for the request */
        protected $request_uri;
        /** @var array request headers */
        protected $request_headers = array();
        /** @var string request user-agent */
        protected $request_user_agent;
        /** @var string request HTTP version, defaults to 1.0 */
        protected $request_http_version = '1.0';
        /** @var string request duration */
        protected $request_duration;
        /** @var API_Request|object request */
        protected $request;
        /** @var string response code */
        protected $response_code;
        /** @var string response message */
        protected $response_message;
        /** @var array response headers */
        protected $response_headers;
        /** @var string raw response body */
        protected $raw_response_body;
        /** @var string response handler class name */
        protected $response_handler;
        /** @var API_Response|object response */
        protected $response;
        /**
         * Perform the request and return the parsed response
         *
         * @since 3.0.0
         *
         * @param API_Request|object $request class instance which implements API_Request
         * @return API_Response|object class instance which implements API_Response
         * @throws API_Exception may be thrown in implementations
         */
        protected function perform_request($request)
        {
        }
        /**
         * Simple wrapper for wp_remote_request() so child classes can override this
         * and provide their own transport mechanism if needed, e.g. a custom
         * cURL implementation
         *
         * @since 3.0.0
         *
         * @param string $request_uri
         * @param string $request_args
         * @return array|\WP_Error
         */
        protected function do_remote_request($request_uri, $request_args)
        {
        }
        /**
         * Handle and parse the response
         *
         * @since 3.0.0
         * @param array|\WP_Error $response response data
         * @throws \Exception network issues, timeouts, API errors, etc
         * @return API_Request|object request class instance that implements API_Request
         */
        protected function handle_response($response)
        {
        }
        /**
         * Return the parsed response object for the request
         *
         * @since 3.0.0
         * @param string $raw_response_body
         * @return object|API_Request response class instance which implements API_Request
         */
        protected function get_parsed_response($raw_response_body)
        {
        }
        /**
         * Alert other actors that a request has been performed. This is primarily used
         * for request logging.
         *
         * @since 3.0.0
         */
        protected function broadcast_request()
        {
        }
        /**
         * Reset the API response members to their
         *
         * @since 3.0.0
         */
        protected function reset_response()
        {
        }
        /**
         * Get the request URI
         *
         * @since 3.0.0
         * @return string
         */
        protected function get_request_uri()
        {
        }
        /**
         * Gets the request path.
         *
         * @since 3.0.0
         * @return string
         */
        protected function get_request_path()
        {
        }
        /**
         * Gets the request URL query.
         *
         * @since 3.0.0
         *
         * @return string
         */
        protected function get_request_query()
        {
        }
        /**
         * Get the request arguments in the format required by wp_remote_request()
         *
         * @since 3.0.0
         *
         * @return array
         */
        protected function get_request_args()
        {
        }
        /**
         * Get the request method, POST by default
         *
         * @since 3.0.0
         * @return string
         */
        protected function get_request_method()
        {
        }
        /**
         * Gets the request body.
         *
         * @since 3.0.0
         * @return string
         */
        protected function get_request_body()
        {
        }
        /**
         * Gets the sanitized request body, for logging.
         *
         * @since 3.0.0
         * @return string
         */
        protected function get_sanitized_request_body()
        {
        }
        /**
         * Get the request HTTP version, 1.1 by default
         *
         * @since 3.0.0
         * @return string
         */
        protected function get_request_http_version()
        {
        }
        /**
         * Get the request headers
         *
         * @since 3.0.0
         * @return array
         */
        protected function get_request_headers()
        {
        }
        /**
         * Get sanitized request headers suitable for logging, stripped of any
         * confidential information
         *
         * The `Authorization` header is sanitized automatically.
         *
         * Child classes that implement any custom authorization headers should
         * override this method to perform sanitization.
         *
         * @since 3.0.0
         * @return array
         */
        protected function get_sanitized_request_headers()
        {
        }
        /**
         * Get the request user agent, defaults to:
         *
         * Dasherized-Plugin-Name/Plugin-Version (WooCommerce/WC-Version; WordPress/WP-Version)
         *
         * @since 3.0.0
         * @return string
         */
        protected function get_request_user_agent()
        {
        }
        /**
         * Get the request duration in seconds, rounded to the 5th decimal place
         *
         * @since 3.0.0
         * @return string
         */
        protected function get_request_duration()
        {
        }
        /**
         * Get the response handler class name
         *
         * @since 3.0.0
         * @return string
         */
        protected function get_response_handler()
        {
        }
        /**
         * Get the response code
         *
         * @since 3.0.0
         * @return string
         */
        protected function get_response_code()
        {
        }
        /**
         * Get the response message
         *
         * @since 3.0.0
         * @return string
         */
        protected function get_response_message()
        {
        }
        /**
         * Get the response headers
         *
         * @since 3.0.0
         * @return array
         */
        protected function get_response_headers()
        {
        }
        /**
         * Get the raw response body, prior to any parsing or sanitization
         *
         * @since 3.0.0
         * @return string
         */
        protected function get_raw_response_body()
        {
        }
        /**
         * Get the sanitized response body, provided by the response class
         * to_string_safe() method
         *
         * @since 3.0.0
         * @return string|null
         */
        protected function get_sanitized_response_body()
        {
        }
        /**
         * Returns the most recent request object.
         *
         * @since 3.0.0
         *
         * @return API_Request|object the most recent request object
         */
        public function get_request()
        {
        }
        /**
         * Returns the most recent response object.
         *
         * @since 3.0.0
         *
         * @return API_Response|object the most recent response object
         */
        public function get_response()
        {
        }
        /**
         * Get the ID for the API, used primarily to namespace the action name
         * for broadcasting requests
         *
         * @since 3.0.0
         * @return string
         */
        protected function get_api_id()
        {
        }
        /**
         * Return a new request object
         *
         * Child classes must implement this to return an object that implements
         * API_Request which should be used in the child class API methods
         * to build the request. The returned API_Request should be passed
         * to self::perform_request() by your concrete API methods
         *
         * @since 3.0.0
         *
         * @param array $args optional request arguments
         * @return API_Request|object
         */
        abstract protected function get_new_request($args = array());
        /**
         * Return the plugin class instance associated with this API
         *
         * Child classes must implement this to return their plugin class instance
         *
         * This is used for defining the plugin ID used in filter names, as well
         * as the plugin name used for the default user agent.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\Plugin
         */
        abstract protected function get_plugin();
        /**
         * Set the Content-Type request header
         *
         * @since 4.6.3
         * @param string $content_type The request content type.
         */
        protected function set_request_content_type_header($content_type)
        {
        }
        /**
         * Set the Accept request header
         *
         * @since 4.6.3
         * @param string $type The request accept type.
         */
        protected function set_request_accept_header($type)
        {
        }
        /**
         * Set the response handler class name. This class will be instantiated
         * to parse the response for the request.
         *
         * @since 3.0.0
         *
         * @param string $handler handle class name
         */
        protected function set_response_handler($handler)
        {
        }
        /**
         * Maybe force TLS v1.2 requests.
         *
         * @since 3.0.0
         *
         * @param resource $handle the cURL handle returned by curl_init() (passed by reference)
         * @param array $r the HTTP request arguments
         * @param $url string the request URL
         */
        public function set_tls_1_2_request($handle, $r, $url)
        {
        }
        /**
         * Determine if TLS v1.2 is required for API requests.
         *
         * Subclasses should override this to return true if TLS v1.2 is required.
         *
         * @since 3.0.0
         * @return bool
         */
        public function require_tls_1_2()
        {
        }
        /**
         * Determines if TLS 1.2 is available.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function is_tls_1_2_available()
        {
        }
    }
}
namespace WooCommerce\Square {
    /**
     * WooCommerce Square API class
     *
     * @since 2.0.0
     */
    class API extends \WooCommerce\Square\Framework\Api\Base
    {
        /**
         * Holds item option pages while the catalogue is still being walked.
         *
         * Kept apart from `wc_square_options_data`, which means "every option, fully read". Writing
         * partial pages under that name would make the next call return early with an incomplete cache.
         *
         * One key is shared by every walk, which is only safe because the background job runner takes
         * the oldest queued or processing job on every tick and runs a single step of it
         * (`WP_Background_Job_Handler::get_job()`, `ORDER BY option_id ASC LIMIT 1`). A job therefore
         * holds the runner for the whole of its walk, and no second job can interleave a step that
         * starts a competing read. If job selection ever gains priority ordering or parallel runners,
         * two walks could overwrite each other's pages here and promote a silently truncated cache,
         * which is the very failure this class of bug is about. Make the key per job before that lands.
         *
         * @since 5.5.0
         * @var string
         */
        const OPTIONS_DATA_PARTIAL_TRANSIENT = 'wc_square_options_data_partial';
        /** catalog request type */
        const REQUEST_TYPE_CATALOG = 'catalog';
        /** inventory request type */
        const REQUEST_TYPE_INVENTORY = 'inventory';
        /** tax type inclusive */
        const TAX_TYPE_INCLUSIVE = 'INCLUSIVE';
        /** tax type additive */
        const TAX_TYPE_ADDITIVE = 'ADDITIVE';
        /** @var \Square\SquareClient Square API client instance */
        protected $client;
        /**
         * Constructs the main Square API wrapper class.
         *
         * @since 2.0.0
         *
         * @param string $access_token Square API access token
         * @param bool   $is_sandbox   If sandbox access is desired
         */
        public function __construct($access_token, $is_sandbox = null)
        {
        }
        /** Catalog API Methods *******************************************************************************************/
        /**
         * Batch-deletes an array of catalog objects.
         *
         * @since 2.0.0
         *
         * @param string[] $object_ids array of square catalog object IDs
         * @return \WooCommerce\Square\API\Responses\Catalog
         * @throws \Exception
         */
        public function batch_delete_catalog_objects(array $object_ids)
        {
        }
        /**
         * Batch-retrieves an array of catalog objects.
         *
         * @since 2.0.0
         *
         * @param string[] $object_ids array of square catalog object IDs
         * @param bool $include_related_objects whether or not to include related objects in the response
         * @return \WooCommerce\Square\API\Responses\Catalog
         * @throws \Exception
         */
        public function batch_retrieve_catalog_objects(array $object_ids, $include_related_objects = false)
        {
        }
        /**
         * Batch-upserts an array of catalog objects.
         *
         * @since 2.0.0
         *
         * @param string $idempotency_key a UUID for this request
         * @param array $batches an array of batches to upsert
         * @return \WooCommerce\Square\API\Responses\Catalog
         * @throws \Exception
         */
        public function batch_upsert_catalog_objects($idempotency_key, array $batches)
        {
        }
        /**
         * Returns info about the Catalog API, including helpful info like request size limits.
         *
         * @since 2.0.0
         * @return \WooCommerce\Square\API\Responses\Catalog
         * @throws \Exception
         */
        public function catalog_info()
        {
        }
        /**
         * Deletes an object from the Square catalog.
         *
         * @since 2.0.0
         *
         * @param string $object_id Square catalog object ID
         * @return \WooCommerce\Square\API\Responses\Catalog
         * @throws \Exception
         */
        public function delete_catalog_object($object_id)
        {
        }
        /**
         * Returns a list of Square catalog items.
         *
         * @since 2.0.0
         *
         * @param string $cursor the cursor to list from
         * @param string[] $types the item types to filter by
         * @return \WooCommerce\Square\API\Responses\Catalog
         * @throws \Exception
         */
        public function list_catalog($cursor = '', $types = array())
        {
        }
        /**
         * Retrieves a single catalog object.
         *
         * @since 2.0.0
         *
         * @param string $object_id the Square catalog object ID
         * @param bool $include_related_objects whether or not to include related objects (such as categories)
         * @param int|null $object_version The specific version of the object to retrieve. Optional - defaults to latest.
         *                                 If the specified version of the object does not exist, the Square API will
         *                                 return the latest version. If the version provided is not known to exist consumers
         *                                 of this function should validate the version returned by the API.
         * @return \WooCommerce\Square\API\Responses\Catalog
         * @throws \Exception
         */
        public function retrieve_catalog_object($object_id, $include_related_objects = false, $object_version = null)
        {
        }
        /**
         * Searches the catalog for objects.
         *
         * @since 2.0.0
         *
         * @param array $args see Catalog::set_search_catalog_objects_data() for list of args
         * @return \WooCommerce\Square\API\Responses\Catalog
         * @throws \Exception
         */
        public function search_catalog_objects($args = array())
        {
        }
        /**
         * Updates the modifier lists that apply to given items.
         *
         * @since 2.0.0
         *
         * @param string[] $item_ids array of Square catalog item IDs
         * @param string[] $modifier_lists_to_enable (optional) modifier list IDs to enable
         * @param string[] $modifier_lists_to_disable (optional) modifier list IDs to disable
         * @return \WooCommerce\Square\API\Responses\Catalog
         * @throws \Exception
         */
        public function update_item_modifier_lists(array $item_ids, array $modifier_lists_to_enable = array(), array $modifier_lists_to_disable = array())
        {
        }
        /**
         * Updates an item's applied taxes.
         *
         * @since 2.0.0
         *
         * @param string[] $item_ids array of Square catalog item IDs
         * @param string[] $taxes_to_enable (optional) tax IDs to enable
         * @param string[] $taxes_to_disable (optional) tax IDs to disable
         * @return \WooCommerce\Square\API\Responses\Catalog
         * @throws \Exception
         */
        public function update_item_taxes(array $item_ids, array $taxes_to_enable = array(), array $taxes_to_disable = array())
        {
        }
        /**
         * Upserts an object into the catalog.
         *
         * @since 2.0.0
         *
         * @param string $idempotency_key UUID for this request
         * @param \Square\Models\CatalogObject $object the object to upsert
         * @return \WooCommerce\Square\API\Responses\Catalog
         * @throws \Exception
         */
        public function upsert_catalog_object($idempotency_key, $object)
        {
        }
        /**
         * Creates an image in Square.
         *
         * Note that this method uses a custom request, since the Square SDK does not yet provide a method for image creation.
         *
         * @since 2.0.0
         *
         * @param $image_path
         * @param string $square_item_id
         * @param string $caption optional image caption
         * @return string
         * @throws \Exception
         */
        public function create_image($image_path, $square_item_id = '', $caption = '')
        {
        }
        /** Inventory API Methods *****************************************************************************************/
        /**
         * Adds a count of inventory as "in-stock" to the given Square item variation ID as a result of a refund.
         *
         * @since 2.0.0
         *
         * @param string $square_id Square object ID
         * @param int $amount amount of inventory to add
         * @return \WooCommerce\Square\API\Responses\Inventory
         * @throws \Exception
         */
        public function add_inventory_from_refund($square_id, $amount)
        {
        }
        /**
         * Adds a count of inventory as "in-stock" to the given Square item variation ID.
         *
         * @since 2.0.0
         *
         * @param string $square_id Square object ID
         * @param int $amount amount of inventory to add
         * @param string $from_state the API state the inventory is coming from
         * @return \WooCommerce\Square\API\Responses\Inventory
         * @throws \Exception
         */
        public function add_inventory($square_id, $amount, $from_state = 'NONE')
        {
        }
        /**
         * Removes a count of inventory as "in-stock" to the given Square item variation ID.
         *
         * @since 2.0.0
         *
         * @param string $square_id Square object ID
         * @param int $amount amount of inventory to remove
         * @return \WooCommerce\Square\API\Responses\Inventory
         * @throws \Exception
         */
        public function remove_inventory($square_id, $amount)
        {
        }
        /**
         * Performs an inventory adjustment.
         *
         * @since 2.0.0
         *
         * @param string $square_id Square object ID
         * @param int $amount amount of inventory to add
         * @param string $from_state the API state the inventory is coming from
         * @param string $to_state the API state the inventory is changing to
         * @return \WooCommerce\Square\API\Responses\Inventory
         * @throws \Exception
         */
        protected function adjust_inventory($square_id, $amount, $from_state, $to_state)
        {
        }
        /**
         * Performs a Batch Change Inventory request.
         *
         * @since 2.0.0
         *
         * @param string $idempotency_key UUID for this request
         * @param \Square\Models\InventoryChange[] $changes array of Inventory Changes
         * @param bool $ignore_unchanged_counts whether the current physical count should be ignored if the quantity is unchanged since the last physical count
         * @return \WooCommerce\Square\API\Responses\Inventory
         * @throws \Exception
         */
        public function batch_change_inventory($idempotency_key, $changes, $ignore_unchanged_counts = true)
        {
        }
        /**
         * Performs a Batch Retrieve Inventory Changes request.
         *
         * @since 2.0.0
         *
         * @param array $args see Requests\Inventory::set_batch_retrieve_inventory_changes_data() for accepted arguments
         *
         * @return \WooCommerce\Square\API\Responses\Inventory
         * @throws \Exception
         */
        public function batch_retrieve_inventory_changes(array $args = array())
        {
        }
        /**
         * Performs a Batch Retrieve Inventory Counts request.
         *
         * @since 2.0.0
         *
         * @param array $args see Requests\Inventory::set_batch_retrieve_inventory_counts_data() for accepted arguments
         *
         * @return \WooCommerce\Square\API\Responses\Inventory
         * @throws \Exception
         */
        public function batch_retrieve_inventory_counts(array $args = array())
        {
        }
        /**
         * Performs a Retrieve Inventory Adjustment request.
         *
         * @since 2.0.0
         *
         * @param string $adjustment_id the InventoryAdjustment ID to retrieve
         *
         * @return \WooCommerce\Square\API\Responses\Inventory
         * @throws \Exception
         */
        public function retrieve_inventory_adjustment($adjustment_id)
        {
        }
        /**
         * Performs a Retrieve Inventory Changes request.
         *
         * @since 2.0.0
         *
         * @param string $catalog_object_id the CatalogObject ID to retrieve
         *
         * @return \WooCommerce\Square\API\Responses\Inventory
         * @throws \Exception
         */
        public function retrieve_inventory_changes($catalog_object_id)
        {
        }
        /**
         * Performs a Retrieve Inventory Count request.
         *
         * @since 2.0.0
         *
         * @param string $catalog_object_id the CatalogObject ID to retrieve
         * @return \WooCommerce\Square\API\Responses\Inventory
         * @throws \Exception
         */
        public function retrieve_inventory_count($catalog_object_id)
        {
        }
        /**
         * Performs a Retrieve Inventory Physical Count request.
         *
         * @since 2.0.0
         *
         * @param string $physical_count_id the InventoryPhysicalCount ID to retrieve
         *
         * @return \WooCommerce\Square\API\Responses\Inventory
         * @throws \Exception
         */
        public function retrieve_inventory_physical_count($physical_count_id)
        {
        }
        /**
         * Fetch the option (attribute) names from Square.
         *
         * @since 4.9.0
         *
         * @throws \Exception
         */
        public function retrieve_options_data($cursor = '', $refresh = false)
        {
        }
        /**
         * Determines whether an option creation failure means the cached options data is stale.
         *
         * Only a rejection saying the option or its value already exists in Square is worth replaying
         * the job for, because that is the one cause a refetch of the options data resolves. The
         * message is matched rather than the error code, since Square answers both the stale cache case
         * and a permanently invalid payload with the same INVALID_VALUE and BAD_REQUEST codes.
         *
         * @since 5.5.0
         *
         * @param string $message the message Square returned
         * @return bool
         */
        protected function is_stale_options_cache_error($message)
        {
        }
        /**
         * Folds one item option into the finished options cache.
         *
         * Callers here hold a single option they just read or created, not a walked catalogue, so the
         * cache is only ever extended, never built: writing one from an unlooped read would pass off
         * the first page of a paginated catalogue as the whole of it, for a day. With no cache to
         * extend there is nothing to do and the next full read is left to build it.
         *
         * @since 5.5.0
         *
         * @param string $option_id   Square item option ID.
         * @param array  $option_data Cache entry for the option.
         * @return void
         */
        public function cache_option_data($option_id, array $option_data)
        {
        }
        /**
         * Create options and values in Square.
         *
         * @since 4.9.0
         *
         * @param string $option_id Option ID.
         * @param string $attribute_name Attribute name.
         * @param array  $attribute_option_values Attribute option values.
         *
         * @return \Square\Models\CatalogObject
         */
        public function create_options_and_values($option_id = false, $attribute_name = '', $attribute_option_values = array())
        {
        }
        /**
         * Determines the best available name for a catalog option.
         *
         * @since 5.1.1
         *
         * @param \Square\Models\CatalogObject $catalog_object Catalog option object.
         * @return string
         */
        public function get_item_option_name_from_catalog_object(?\Square\Models\CatalogObject $catalog_object)
        {
        }
        /**
         * Checks if the cached options data is missing names and needs refreshing.
         *
         * @since 5.1.1
         *
         * @param mixed $options_data Cached options data.
         * @return bool
         */
        private function options_transient_needs_refresh($options_data)
        {
        }
        /** Locations methods *********************************************************************************************/
        /**
         * Gets the available locations.
         *
         * @since 2.0.0
         *
         * @return \Square\Models\Location[]
         * @throws \Exception
         */
        public function get_locations()
        {
        }
        /** Customer methods **********************************************************************************************/
        /**
         * Gets all customers.
         *
         * @since 2.0.0
         *
         * @param string $cursor pagination cursor
         * @return API\Response
         * @throws \Exception
         */
        public function get_customers($cursor = '')
        {
        }
        /** Request Helper Methods ****************************************************************************************/
        /**
         * Gets a new Catalog API request.
         *
         * @since 2.0.0
         *
         * @return \WooCommerce\Square\API\Requests\Catalog
         * @throws \Exception
         */
        protected function get_catalog_request()
        {
        }
        /**
         * Gets a new Inventory API request.
         *
         * @since 2.0.0
         *
         * @return \WooCommerce\Square\API\Requests\Inventory
         * @throws \Exception
         */
        protected function get_inventory_request()
        {
        }
        /**
         * Gets a new request object.
         *
         * @since 2.0.0
         *
         * @param string $type desired request type
         * @return \WooCommerce\Square\API\Requests\Catalog|\WooCommerce\Square\API\Requests\Inventory
         * @throws \Exception
         */
        protected function get_new_request($type = '')
        {
        }
        /**
         * Performs an API request.
         *
         * @see Base::perform_request()
         *
         * @since 2.0.0
         *
         * @param API\Request $request request object
         * @return API\Response
         * @throws \Exception
         */
        protected function perform_request($request)
        {
        }
        /**
         * Handles and parses the response.
         *
         * @since 2.0.0
         *
         * @param array|\WP_Error $response response data
         * @throws \Exception
         * @return API_Response|object request class instance that implements API_Request
         */
        protected function handle_response($response)
        {
        }
        /**
         * Validates the response data after it's been parsed.
         *
         * @since 2.0.0
         *
         * @return bool
         * @throws \Exception
         */
        protected function do_post_parse_response_validation()
        {
        }
        /**
         * Get currency from Square order with fallback to store currency.
         *
         * @param \Square\Models\Order $square_order Square order object.
         * @return string Currency code.
         */
        private function get_square_order_currency_or_store_default($square_order)
        {
        }
        /**
         * Performs a remote request with the Square API class.
         *
         * Note: This method handles both standard SDK methods and special cases like calculateOrder.
         * The Square PHP SDK's CalculateOrderRequest only supports order and proposed_rewards (loyalty).
         * We need to send proposed_discount_codes (discount code IDs), so we handle calculateOrder
         * as a special case using direct HTTP to maintain consistency with the plugin's request/response pattern.
         *
         * @since 2.0.0
         *
         * @param Object $square_api the square API class instance
         * @param string $method the class method to call
         * @param array $args the args to send with the method call
         * @throws \Exception
         */
        protected function do_square_request($square_api, $method, $args)
        {
        }
        /**
         * Gets the main plugin instance.
         *
         * @since 2.0.0
         *
         * @return \WooCommerce\Square\Plugin
         */
        public function get_plugin()
        {
        }
    }
}
namespace WooCommerce\Square\Framework\Api {
    interface API_Request
    {
        /**
         * Returns the method for this request: one of HEAD, GET, PUT, PATCH, POST, DELETE
         *
         * @since 3.0.0
         */
        public function get_method();
        /**
         * Returns the request path
         *
         * @since 3.0.0
         */
        public function get_path();
        /**
         * Gets the request query params.
         *
         * @since 3.0.0
         */
        public function get_params();
        /**
         * Gets the request data.
         *
         * @since 3.0.0
         */
        public function get_data();
        /**
         * Returns the string representation of this request
         *
         * @since 3.0.0
         * @return string the request
         */
        public function to_string();
        /**
         * Returns the string representation of this request with any and all
         * sensitive elements masked or removed
         *
         * @since 3.0.0
         * @return string the request, safe for logging/displaying
         */
        public function to_string_safe();
    }
}
namespace WooCommerce\Square\API {
    /**
     * Base WooCommerce Square API request object.
     *
     * @since 2.0.0
     */
    class Request implements \WooCommerce\Square\Framework\Api\API_Request
    {
        /** @var \SquareConnect\Configuration the configuration object */
        protected $configuration;
        /** @var mixed the Square API class instance being used for this request */
        protected $square_api;
        /** @var string method name on the square API to call */
        protected $square_api_method;
        /** @var array arguments for the method call */
        protected $square_api_args = array();
        /** @var null|object the square API request model */
        protected $square_request;
        /** @var bool whether the request is being made 'WithHTTPInfo' or not */
        protected $with_http_info = true;
        /**
         * Gets the Square API instance to use for this request.
         *
         * @since 2.0.0
         *
         * @return mixed
         */
        public function get_square_api()
        {
        }
        /**
         * Get the method to call on the Square API instance.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_square_api_method()
        {
        }
        /**
         * Gets the arguments to call the Square API method with.
         *
         * @since 2.0.0
         *
         * @return array
         */
        public function get_square_api_args()
        {
        }
        /**
         * Returns whether this request is set to get HTTP info.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function get_with_http_info()
        {
        }
        /**
         * Gets the HTTP method.
         *
         * @since 2.0.0
         */
        public function get_method()
        {
        }
        /**
         * Gets the query parameters.
         *
         * @since 2.0.0
         */
        public function get_params()
        {
        }
        /**
         * Gets the path.
         *
         * @since 2.0.0
         */
        public function get_path()
        {
        }
        /**
         * Gets the request data.
         *
         * @since 2.0.0
         */
        public function get_data()
        {
        }
        /**
         * Gets the request data as a string.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function to_string()
        {
        }
        /**
         * Gets the request data as a string with all sensitive information masked.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function to_string_safe()
        {
        }
    }
}
namespace WooCommerce\Square\API\Requests {
    /**
     * WooCommerce Square Catalog API Request class.
     *
     * @since 2.0.0
     */
    class Catalog extends \WooCommerce\Square\API\Request
    {
        /**
         * Initializes a new Catalog request.
         *
         * @since 2.0.0
         *
         * @param \Square\SquareClient $api_client the API client
         */
        public function __construct($api_client)
        {
        }
        /**
         * Sets the data for a batchDeleteCatalogObjects request.
         *
         * @see https://docs.connect.squareup.com/api/connect/v2#endpoint-catalog-batchdeletecatalogobjects
         * @see \Square\Apis\CatalogApi::batchDeleteCatalogObjects()
         *
         * @since 2.0.0
         *
         * @param string[] $object_ids the square catalog object IDs to delete
         */
        public function set_batch_delete_catalog_objects_data(array $object_ids)
        {
        }
        /**
         * Sets the data for a batchRetrieveCatalogObjects request.
         *
         * @see https://docs.connect.squareup.com/api/connect/v2#endpoint-catalog-batchretrievecatalogobjects
         * @see \Square\Apis\CatalogApi::batchRetrieveCatalogObjects()
         *
         * @since 2.0.0
         *
         * @param string[] $object_ids the square catalog object IDs to delete
         * @param bool $include_related_objects whether or not to include related objects in the response
         */
        public function set_batch_retrieve_catalog_objects_data(array $object_ids, $include_related_objects = false)
        {
        }
        /**
         * Sets the data for a batchUpsertCatalogObjects request.
         *
         * @see https://docs.connect.squareup.com/api/connect/v2#endpoint-catalog-batchupsertcatalogobjects
         * @see \Square\Apis\CatalogApi::batchUpsertCatalogObjects()
         *
         * @since 2.0.0
         *
         * @param string $idempotency_key the UUID for this request
         * @param \Square\Models\CatalogObjectBatch[] $batches array of catalog object batches
         */
        public function set_batch_upsert_catalog_objects_data($idempotency_key, array $batches)
        {
        }
        /**
         * Sets the data for a catalogInfo request.
         *
         * @see https://docs.connect.squareup.com/api/connect/v2#endpoint-catalog-cataloginfo
         * @see \Square\Apis\CatalogApi::catalogInfo()
         *
         * @since 2.0.0
         *
         * @param string $cursor
         * @param array $types
         */
        public function set_catalog_info_data($cursor = '', $types = array())
        {
        }
        /**
         * Sets the data for a deleteCatalogObject request.
         *
         * @see https://docs.connect.squareup.com/api/connect/v2#endpoint-catalog-deletecatalogobject
         * @see \Square\Apis\CatalogApi::deleteCatalogObject()
         *
         * @since 2.0.0
         *
         * @param string $object_id the Square catalog object ID to delete
         */
        public function set_delete_catalog_object_data($object_id)
        {
        }
        /**
         * Sets the data for a listCatalog request.
         *
         * @see https://docs.connect.squareup.com/api/connect/v2#endpoint-catalog-listcatalog
         * @see \Square\Apis\CatalogApi::listCatalog()
         *
         * @since 2.0.0
         *
         * @param string $cursor (optional) the pagination cursor
         * @param array $types (optional) the catalog item types to filter by
         */
        public function set_list_catalog_data($cursor = '', $types = array())
        {
        }
        /**
         * Sets the data for a retrieveCatalogObject request.
         *
         * @see https://docs.connect.squareup.com/api/connect/v2#endpoint-catalog-retrievecatalogobject
         * @see \Square\Apis\CatalogApi::retrieveCatalogObject()
         *
         * @since 2.0.0
         *
         * @param string $object_id the Square catalog object ID to retrieve
         * @param bool   $include_related_objects Whether or not to include related objects (such as categories)
         * @param int|null $object_version The specific version of the object to retrieve. Optional - defaults to latest.
         *                                 If the specified version of the object does not exist, the Square API will
         *                                 return the latest version. If the version provided is not known to exist consumers
         *                                 of this function should validate the version returned by the API.
         */
        public function set_retrieve_catalog_object_data($object_id, $include_related_objects = false, $object_version = null)
        {
        }
        /**
         * Sets the data for a searchCatalogObjects request.
         *
         * @see https://docs.connect.squareup.com/api/connect/v2#endpoint-catalog-searchcatalogobjects
         * @see \Square\Apis\CatalogApi::searchCatalogObjects()
         *
         * @since 2.0.0
         *
         * @param array $args see Square documentation for full list of args allowed
         */
        public function set_search_catalog_objects_data(array $args = array())
        {
        }
        /**
         * Sets the data for a updateItemModifierLists request.
         *
         * @see https://docs.connect.squareup.com/api/connect/v2#endpoint-catalog-updateitemmodifierlists
         * @see \Square\Apis\CatalogApi::updateItemModifierLists()
         *
         * @since 2.0.0
         *
         * @param string[] $item_ids array of item IDs to update
         * @param string[] $modifier_lists_to_enable array of list IDs to enable
         * @param string[] $modifier_lists_to_disable array of list IDs to disable
         */
        public function set_update_item_modifier_lists_data(array $item_ids, array $modifier_lists_to_enable = array(), array $modifier_lists_to_disable = array())
        {
        }
        /**
         * Sets the data for an updateItemTaxes request.
         *
         * @see https://docs.connect.squareup.com/api/connect/v2#endpoint-catalog-updateitemtaxes
         * @see \Square\Apis\CatalogApi::updateItemTaxes()
         *
         * @since 2.0.0
         *
         * @param string[] $item_ids array of item IDs to update
         * @param string[] $taxes_to_enable array of catalog tax IDs to enable
         * @param string[] $taxes_to_disable array of catalog tax IDs to disable
         */
        public function set_update_item_taxes_data(array $item_ids, array $taxes_to_enable = array(), array $taxes_to_disable = array())
        {
        }
        /**
         * Sets the data for an upsertCatalogObject request.
         *
         * @see https://docs.connect.squareup.com/api/connect/v2#endpoint-catalog-upsertcatalogobject
         * @see \Square\Apis\CatalogApi::upsertCatalogObject()
         *
         * @since 2.0.0
         *
         * @param string $idempotency_key a UUID for this request
         * @param \Square\Models\CatalogObject $object the object to update
         */
        public function set_upsert_catalog_object_data($idempotency_key, $object)
        {
        }
    }
    /**
     * The customers API request class.
     *
     * @since 2.0.0
     */
    class Customers extends \WooCommerce\Square\API\Request
    {
        /**
         * Initializes a new customer request.
         *
         * @since 2.0.0
         *
         * @param \Square\SquareClient $api_client the API client
         */
        public function __construct($api_client)
        {
        }
        /**
         * Sets the data for getting an existing customer.
         *
         * @since 2.0.0
         *
         * @param string $customer_id customer ID
         */
        public function set_get_customer_data($customer_id)
        {
        }
        /**
         * Sets the data for getting all existing customer.
         *
         * @since 2.0.0
         *
         * @param string $cursor pagination cursor
         */
        public function set_get_customers_data($cursor = '')
        {
        }
    }
    /**
     * WooCommerce Square Inventory API Request class
     *
     * @since 2.0.0
     */
    class Inventory extends \WooCommerce\Square\API\Request
    {
        /**
         * Initializes a new Inventory request.
         *
         * @since 2.0.0
         *
         * @param \Square\SquareClient $api_client the API client
         */
        public function __construct($api_client)
        {
        }
        /**
         * Sets the data for a batchChangeInventory request.
         *
         * @see https://docs.connect.squareup.com/api/connect/v2#endpoint-inventory-batchchangeinventory
         * @see InventoryApi::batchChangeInventory()
         *
         * @since 2.0.0
         *
         * @param string $idempotency_key a UUID for this request
         * @param \Square\Models\InventoryChange[] $changes array of inventory changes to be made
         * @param bool $ignore_unchanged_counts whether the current physical count should be ignored if the quantity is unchanged since the last physical count
         */
        public function set_batch_change_inventory_data($idempotency_key, $changes, $ignore_unchanged_counts = true)
        {
        }
        /**
         * Sets the data for a batchRetrieveInventoryChanges request.
         *
         * @see https://docs.connect.squareup.com/api/connect/v2#endpoint-inventory-batchretrieveinventorychanges
         * @see InventoryApi::batchRetrieveInventoryChanges()
         *
         * @since 2.0.0
         *
         * @param array $args
         *     @type string[] $catalog_object_ids filters results by CatalogObject ID
         *     @type string[] $location_ids filters results by Location ID
         *     @type string[] $types filters results by InventoryChangeType
         *     @type string[] $states filters ADJUSTMENT query results by InventoryState
         *     @type string $updated_after filters any changes updated after this time
         *     @type string $updated_before filters any changes updated before this time
         *     @type string $cursor pagination cursor
         */
        public function set_batch_retrieve_inventory_changes_data($args = array())
        {
        }
        /**
         * Sets the data for a batchRetrieveInventoryCounts request.
         *
         * @see https://docs.connect.squareup.com/api/connect/v2#endpoint-inventory-batchretrieveinventorycounts
         * @see InventoryApi::batchRetrieveInventoryCounts()
         *
         * @since 2.0.0
         *
         * @param array $args
         *     @type string[] $catalog_object_ids filters results by CatalogObject ID
         *     @type string[] $location_ids filters results by Location ID
         *     @type string $updated_after filters any changes updated after this time
         *     @type string $cursor pagination cursor
         *     @type string[] $states filters query results by InventoryState
         */
        public function set_batch_retrieve_inventory_counts_data($args = array())
        {
        }
        /**
         * Sets the data for a retrieveInventoryAdjustment request.
         *
         * @see https://docs.connect.squareup.com/api/connect/v2#endpoint-inventory-retrieveinventoryadjustment
         * @see InventoryApi::retrieveInventoryAdjustment()
         *
         * @since 2.0.0
         *
         * @param string $adjustment_id the InventoryAdjustment ID to retrieve
         */
        public function set_retrieve_inventory_adjustment_data($adjustment_id)
        {
        }
        /**
         * Sets the data for a retrieveInventoryChanges request.
         *
         * @see https://docs.connect.squareup.com/api/connect/v2#endpoint-inventory-retrieveinventorychanges
         * @see InventoryApi::retrieveInventoryChanges()
         *
         * @since 2.0.0
         *
         * @param string $catalog_object_id the CatalogObject ID to retrieve
         */
        public function set_retrieve_inventory_changes_data($catalog_object_id)
        {
        }
        /**
         * Sets the data for a retrieveInventoryCount request.
         *
         * @see https://docs.connect.squareup.com/api/connect/v2#endpoint-inventory-retrieveinventorycount
         * @see InventoryApi::retrieveInventoryCount()
         *
         * @since 2.0.0
         *
         * @param string $catalog_object_id the CatalogObject ID to retrieve
         * @param string $location_ids location IDs
         */
        public function set_retrieve_inventory_count_data($catalog_object_id, string $location_ids = '')
        {
        }
        /**
         * Sets the data for a retrieveInventoryPhysicalCount request.
         *
         * @see https://docs.connect.squareup.com/api/connect/v2#endpoint-inventory-retrieveinventoryphysicalcount
         * @see InventoryApi::retrieveInventoryPhysicalCount()
         *
         * @since 2.0.0
         *
         * @param string $physical_count_id the InventoryPhysicalCount ID to retrieve
         */
        public function set_retrieve_inventory_physical_count_data($physical_count_id)
        {
        }
    }
    /**
     * WooCommerce Square locations API Request class.
     *
     * @since 2.0.0
     */
    class Locations extends \WooCommerce\Square\API\Request
    {
        /**
         * Initializes a new locations request.
         *
         * @since 2.0.0
         *
         * @param \Square\SquareClient $api_client the API client
         */
        public function __construct($api_client)
        {
        }
        /**
         * Sets API method.
         *
         * @since 2.0.0
         */
        public function set_list_locations_data()
        {
        }
    }
}
namespace WooCommerce\Square\Framework\Api {
    interface API_Response
    {
        /**
         * Returns the string representation of this request
         *
         * @since 3.0.0
         * @return string the request
         */
        public function to_string();
        /**
         * Returns the string representation of this request with any and all
         * sensitive elements masked or removed
         *
         * @since 3.0.0
         * @return string the request, safe for logging/displaying
         */
        public function to_string_safe();
    }
}
namespace WooCommerce\Square\API {
    /**
     * Base WooCommerce Square API response object.
     *
     * @since 2.0.0
     */
    class Response implements \WooCommerce\Square\Framework\Api\API_Response
    {
        /** @var mixed raw response data */
        protected $raw_response_data;
        /**
         * Constructs the response object.
         *
         * @since 2.0.0
         *
         * @param Object|array $raw_response_data
         */
        public function __construct($raw_response_data)
        {
        }
        /**
         * Gets the response data.
         *
         * @since 2.0.0
         *
         * @return Object
         */
        public function get_data()
        {
        }
        /**
         * Gets errors returned by the Square API.
         *
         * @since 2.0.0
         *
         * @return \stdClass[]
         */
        public function get_errors()
        {
        }
        /**
         * Determines if the API response contains errors.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function has_errors()
        {
        }
        /**
         * Determines if the API response contains a particular error code.
         *
         * @since 2.1.6
         * @param $error \Square\Models\Error
         * @return bool
         */
        public function has_error_code($error_code)
        {
        }
        /**
         * Gets the response data as a string.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function to_string()
        {
        }
        /**
         * Gets the response data a string with all sensitive information masked.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function to_string_safe()
        {
        }
    }
}
namespace WooCommerce\Square\API\Responses {
    /**
     * Catalog response object
     *
     * @since 2.0.0
     *
     * @method \Square\Models\ListCatalogResponse|\Square\Models\BatchUpsertCatalogObjectsResponse|\Square\Models\SearchCatalogObjectsResponse|\Square\Models\RetrieveCatalogObjectResponse|\Square\Models\CatalogInfoResponse get_data()
     */
    class Catalog extends \WooCommerce\Square\API\Response
    {
    }
}
namespace WooCommerce\Square\Framework\Api {
    /**
     * Base JSON API response class.
     *
     * @since 3.0.0
     */
    abstract class API_JSON_Response
    {
        /** @var string string representation of this response */
        protected $raw_response_json;
        /** @var mixed decoded response data */
        public $response_data;
        /**
         * Build the data object from the raw JSON.
         *
         * @since 3.0.0
         * @param string $raw_response_json The raw JSON
         */
        public function __construct($raw_response_json)
        {
        }
        /**
         * Magic accessor for response data attributes
         *
         * @since 3.0.0
         * @param string $name The attribute name to get.
         * @return mixed The attribute value
         */
        public function __get($name)
        {
        }
        /**
         * Get the string representation of this response.
         *
         * @since 3.0.0
         * @return string
         */
        public function to_string()
        {
        }
        /**
         * Get the string representation of this response with any and all sensitive elements masked
         * or removed.
         *
         * @since 3.0.0
         * @return string
         */
        public function to_string_safe()
        {
        }
    }
}
namespace WooCommerce\Square\API\Responses {
    /**
     * The connection refresh response class.
     *
     * Note that this is handled by Woo's proxy connection server, not Square's API.
     *
     * @since 2.0.0
     */
    class Connection_Refresh_Response extends \WooCommerce\Square\Framework\Api\API_JSON_Response
    {
        /**
         * Gets the access token, if any.
         *
         * @since 2.0.0
         *
         * @return string|null
         */
        public function get_token()
        {
        }
        /**
         * Gets the refresh token, if any.
         *
         * @since 2.0.0
         *
         * @return string|null
         */
        public function get_refresh_token()
        {
        }
        /**
         * Gets the error message, if any.
         *
         * @since 2.0.0
         *
         * @return string|null
         */
        public function get_error_message()
        {
        }
        /**
         * Determines if there was an error returned.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function has_error()
        {
        }
    }
    /**
     * Inventory response object
     *
     * @since 2.0.0
     */
    class Inventory extends \WooCommerce\Square\API\Response
    {
        /**
         * Gets inventory counts.
         *
         * @since 2.0.0
         *
         * @return \Square\Models\InventoryCount[] array of inventory count objects
         */
        public function get_counts()
        {
        }
        /**
         * Checks if there are inventory counts.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function has_counts()
        {
        }
    }
    /**
     * Catalog response object
     *
     * @since 2.0.0
     *
     * @method \Square\Models\ListLocationsResponse get_data()
     */
    class Locations extends \WooCommerce\Square\API\Response
    {
        /**
         * Gets the returned locations.
         *
         * @since 2.0.0
         *
         * @return \Square\Models\Location[]
         */
        public function get_locations()
        {
        }
    }
}
namespace WooCommerce\Square {
    /**
     * The base admin handler class.
     *
     * @since 2.0.0
     */
    class Admin
    {
        /**
         * Product handler.
         *
         * @var Handlers\Products
         */
        private $products_handler;
        /**
         * Privacy handler.
         *
         * @var Admin\Privacy
         */
        private $privacy_handler;
        /**
         * Plugin
         *
         * @var Plugin plugin instance
         */
        private $plugin;
        /**
         * Constructs the class.
         *
         * @since 2.0.0
         *
         * @param Plugin $plugin plugin instance.
         */
        public function __construct(\WooCommerce\Square\Plugin $plugin)
        {
        }
        /**
         * Adds the action & filter hooks.
         *
         * @since 2.0.0
         */
        private function add_hooks()
        {
        }
        /**
         * Loads and enqueues admin scripts and styles.
         *
         * @param string $hook The current admin page.
         *
         * @since 2.0.0
         */
        private function load_scripts_styles($hook)
        {
        }
        /**
         * Gets a list of variable product types.
         *
         * @since 2.0.0
         *
         * @return string[]
         */
        private function get_variable_product_types()
        {
        }
        /**
         * Gets the products handler.
         *
         * @since 2.0.0
         *
         * @return Admin\Products
         */
        public function get_products_handler()
        {
        }
        /**
         * Gets the plugin instance.
         *
         * @since 2.0.0
         *
         * @return Plugin
         */
        protected function get_plugin()
        {
        }
        /**
         * Maybe show a warning notice for the user to manually trigger a sync if it has been a while since the last successful sync.
         *
         * If the following conditions are met, show the notice:
         * - The connection is established.
         * - The location is set.
         * - The product sync is enabled.
         * - The last synced at is set and is before the threshold time (default is 24 hours, 48 hours if the sync interval is 24 hours).
         * - The synced products count is greater than 0 (at least one product is synced with Square).
         *
         * @since 5.3.3
         *
         * @return void
         */
        public function maybe_show_sync_status_notice()
        {
        }
        /**
         * Maybe show a notice that a stalled sync job was automatically recovered.
         *
         * Shown when auto-recovery has fired and no successful sync has completed since, so the
         * merchant knows a stuck sync was stopped and can start a new one.
         * Clears itself once a sync completes successfully after the recovery.
         *
         * @since 5.5.0
         *
         * @return void
         */
        public function maybe_show_sync_recovered_notice()
        {
        }
    }
}
namespace WooCommerce\Square\Admin\Analytics {
    /**
     * Adds necessary functions to modify analytics stats data.
     */
    class Revenue
    {
        /**
         * Constructor function.
         */
        public function __construct()
        {
        }
        /**
         * Removes the purchase of a gift card from the net revenue.
         *
         * @since 4.2.0
         *
         * @param array $order_data Order data.
         * @return array
         */
        public function filter_net_sales_stats($order_data)
        {
        }
    }
}
namespace WooCommerce\Square\Admin {
    /**
     * Privacy admin handler.
     *
     * @since 2.0.0
     */
    class Privacy extends \WC_Abstract_Privacy
    {
        /**
         * Privacy class constructor.
         *
         * @since 2.0.0
         */
        public function __construct()
        {
        }
        /**
         * Initial registration of privacy erasers and exporters.
         */
        public function register_erasers_exporters()
        {
        }
        /**
         * Gets the message to display.
         *
         * @since 2.0.0
         */
        public function get_privacy_message()
        {
        }
        /**
         * Finds and erases customer data by email address.
         *
         * @since 2.0.0
         *
         * @param string $email_address the user email address
         * @param int $page page
         * @return array an array of personal data in name => value pairs
         */
        public function customer_data_eraser($email_address, $page)
        {
        }
    }
}
namespace WooCommerce\Square\Admin\Rest {
    /**
    * REST controller for transactions.
    */
    class WC_Square_REST_Base_Controller extends \WP_REST_Controller
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
         */
        public function check_permission()
        {
        }
    }
    /**
     * Class WC_REST_Square_Cash_App_Settings_Controller.
     *
     * @since 4.7.0
     */
    class WC_REST_Square_Cash_App_Settings_Controller extends \WooCommerce\Square\Admin\Rest\WC_Square_REST_Base_Controller
    {
        /**
         * Square settings option name.
         *
         * @var string
         */
        const SQUARE_CASH_APP_SETTINGS_OPTION_NAME = 'woocommerce_square_cash_app_pay_settings';
        /**
         * Endpoint path.
         *
         * @var string
         */
        protected $rest_base = 'wc_square/cash_app_settings';
        /**
         * Allowed parameters.
         *
         * @var array
         */
        private $allowed_params;
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Get the data.
         *
         * @return \WP_REST_Response
         */
        public function get_settings()
        {
        }
        /**
         * Update the data.
         *
         * @param \WP_REST_Request $request Full data about the request.
         */
        public function save_settings(\WP_REST_Request $request)
        {
        }
    }
    /**
     * Class WC_REST_Square_Credit_Card_Payment_Settings_Controller.
     *
     * @since 4.7.0
     */
    class WC_REST_Square_Credit_Card_Payment_Settings_Controller extends \WooCommerce\Square\Admin\Rest\WC_Square_REST_Base_Controller
    {
        /**
         * Square settings option name.
         *
         * @var string
         */
        const SQUARE_PAYMENT_SETTINGS_OPTION_NAME = 'woocommerce_square_credit_card_settings';
        /**
         * Endpoint path.
         *
         * @var string
         */
        protected $rest_base = 'wc_square/payment_settings';
        /**
         * Allowed parameters.
         *
         * @var array
         */
        private $allowed_params;
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Get the data.
         *
         * @return \WP_REST_Response
         */
        public function get_settings()
        {
        }
        /**
         * Update the data.
         *
         * @param \WP_REST_Request $request Full data about the request.
         */
        public function save_settings(\WP_REST_Request $request)
        {
        }
    }
    /**
     * Class WC_REST_Square_Gift_Cards_Settings_Controller.
     *
     * @since 4.7.0
     */
    class WC_REST_Square_Gift_Cards_Settings_Controller extends \WooCommerce\Square\Admin\Rest\WC_Square_REST_Base_Controller
    {
        /**
         * Endpoint path.
         *
         * @var string
         */
        protected $rest_base = 'wc_square/gift_cards_settings';
        /**
         * Allowed parameters.
         *
         * @var array
         */
        private $allowed_params;
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Get the data.
         *
         * @return \WP_REST_Response
         */
        public function get_settings()
        {
        }
        /**
         * Update the data.
         *
         * @param \WP_REST_Request $request Full data about the request.
         */
        public function save_settings(\WP_REST_Request $request)
        {
        }
    }
    /**
     * Class WC_REST_Square_Settings_Controller.
     *
     * @since 4.7.0
     */
    class WC_REST_Square_Settings_Controller extends \WooCommerce\Square\Admin\Rest\WC_Square_REST_Base_Controller
    {
        /**
         * Square settings option name.
         *
         * @var string
         */
        const SQUARE_GATEWAY_SETTINGS_OPTION_NAME = 'wc_square_settings';
        /**
         * Endpoint path.
         *
         * @var string
         */
        protected $rest_base = 'wc_square/settings';
        /**
         * Allowed parameters.
         *
         * @var array
         */
        private $allowed_params;
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Get the data.
         *
         * @return \WP_REST_Response
         */
        public function get_settings()
        {
        }
        /**
         * Update the data.
         *
         * @param \WP_REST_Request $request Full data about the request.
         */
        public function save_settings(\WP_REST_Request $request)
        {
        }
    }
}
namespace WooCommerce\Square\Admin {
    /**
     * The settings page class.
     *
     * @see \WooCommerce\Square\Settings handles settings registration
     *
     * @since 2.0.0
     */
    class Settings_Page extends \WC_Settings_Page
    {
        /** @var \WooCommerce\Square\Settings settings handler instance */
        protected $settings_handler;
        /**
         * Constructs the settings page.
         *
         * @since 2.0.0
         *
         * @param \WooCommerce\Square\Settings $settings_handler a settings handler instance, for displaying and saving the settings
         */
        public function __construct(\WooCommerce\Square\Settings $settings_handler)
        {
        }
        /**
         * Outputs the settings page.
         *
         * @internal
         *
         * @since 2.0.0
         */
        public function output()
        {
        }
        /**
         * Outputs the general settings section.
         *
         * @since 2.0.0
         */
        private function output_general_section()
        {
        }
        /**
         * Outputs the "Update" settings section.
         *
         * @since 2.0.0
         */
        private function output_update_section()
        {
        }
        /**
         * Saves the settings.
         *
         * @internal
         *
         * @since 2.0.0
         */
        public function save()
        {
        }
        /**
         * Gets the settings.
         *
         * @since 2.0.0
         *
         * @return array
         */
        public function get_settings()
        {
        }
        /**
         * Gets the settings sections.
         *
         * @internal
         *
         * @since 2.0.0
         *
         * @return array
         */
        public function get_sections()
        {
        }
        /**
         * Outputs a backbone modal template for importing products from Square.
         *
         * @since 2.0.0
         */
        private static function output_import_products_modal_template()
        {
        }
    }
    /**
     * Handles HTML output for the "Update" section of the Settings page with sync status handling and UI.
     *
     * @since 2.0.0
     */
    class Sync_Page
    {
        /**
         * Outputs the page HTML.
         *
         * @since 2.0.0
         */
        public static function output()
        {
        }
        /**
         * Outputs notice-like tabular HTML with information on the current Sync setting handling.
         *
         * @since 2.0.0
         */
        private static function output_system_record_of_data_info()
        {
        }
        /**
         * Outputs tabular HTML with information on sync status and a button to trigger a manual sync.
         *
         * @since 2.0.0
         */
        private static function output_sync_status()
        {
        }
        /**
         * Outputs tabular HTML with sync record logs and UI.
         *
         * @since 2.0.0
         */
        private static function output_sync_records()
        {
        }
        /**
         * Outputs a backbone modal template for starting a manual sync process.
         *
         * @since 2.0.0
         */
        private static function output_sync_with_square_modal_template()
        {
        }
    }
}
namespace WooCommerce\Square {
    /**
     * Class Coupons
     *
     * Handles coupon (WooCommerce term) and discount code (Square term)
     * use during the checkout process.
     *
     * @package WooCommerce\Square
     */
    class Coupons
    {
        /**
         * The singleton instance.
         *
         * @var Coupons|null
         */
        private static $instance = null;
        /**
         * Stores the last Square discount validation error message for woocommerce_coupon_error filter.
         * Used when we reject a Square coupon in woocommerce_coupon_is_valid (e.g. no discount applies).
         *
         * @var array|null Array with 'code' and 'message' keys, or null.
         */
        private static $last_square_validation_error = null;
        /**
         * Gets the singleton instance.
         *
         * @since 5.3.0
         *
         * @return Coupons The singleton instance.
         */
        public static function instance()
        {
        }
        /**
         * Initialize Coupons class.
         *
         * @since 5.3.0
         */
        public static function init()
        {
        }
        /**
         * Handle coupon application - trigger Square discount calculation if conditions are met.
         *
         * @since 5.3.0
         *
         * @param string $coupon_code The coupon code that was applied.
         */
        public static function handle_coupon_applied($coupon_code)
        {
        }
        /**
         * Prevent non-Square coupons from being used with Square coupons.
         *
         * @since 5.3.0
         *
         * @param bool       $is_valid Whether the coupon is valid.
         * @param \WC_Coupon $coupon   Coupon object.
         *
         * @return bool|WP_Error True if valid, false or WP_Error if invalid.
         */
        public static function prevent_non_square_coupons_with_square_coupons($is_valid, $coupon)
        {
        }
        /**
         * Validate Square coupon provides a discount before WooCommerce applies it.
         * Runs at priority 5 so we reject before the success message is shown.
         *
         * @since 5.3.0
         *
         * @param bool       $is_valid Whether the coupon is valid.
         * @param \WC_Coupon $coupon   Coupon object.
         *
         * @return bool True if valid, false if Square coupon provides no discount.
         */
        public static function validate_square_coupon_has_discount($is_valid, $coupon)
        {
        }
        /**
         * Replace the generic coupon error message with our Square-specific messages when we rejected.
         * Handles: (1) Square discount validation (no discount, zero total), (2) mixing Square and WooCommerce coupons.
         *
         * @since 5.3.0
         *
         * @param string $error_message The error message.
         * @param int    $error_code    The error code.
         * @param \WC_Coupon|null $coupon The coupon object.
         *
         * @return string The error message.
         */
        public static function filter_square_coupon_validation_error_message($error_message, $error_code, $coupon)
        {
        }
        /**
         * Preflight the construction of a WC_Coupon object.
         *
         * @since 5.3.0
         *
         * @param false|array $coupon      Coupon data. False indicates that the coupon has not yet
         *                                 been found/replaced via the preflight process.
         * @param mixed       $coupon_data Coupon data, object, ID or code as passed to the \WC_Coupon constructor.
         * @param \WC_Coupon  $wc_coupon   The WC_Coupon instance being constructed
         * @return false|array Modified coupon data.
         */
        public static function filter_woocommerce_get_shop_coupon_data($coupon, $coupon_data, \WC_Coupon $wc_coupon)
        {
        }
        /**
         * Populate order with Square discount meta from cart session.
         *
         * @since 5.3.0
         *
         * @param \WC_Order $order The order object.
         * @return bool True if meta was set, false otherwise.
         */
        public static function populate_order_square_discount_meta($order)
        {
        }
        /**
         * Ensure order has Square discount code meta (backup for edge cases).
         * Runs on woocommerce_checkout_update_order_meta so metadata is always available.
         *
         * @since 5.3.0
         *
         * @param int $order_id The order ID.
         */
        public static function ensure_order_square_discount_meta($order_id)
        {
        }
        /**
         * Last-chance: ensure order has Square discount code IDs from order coupon items before payment.
         * Call this from the payment gateway when meta may be missing (e.g. block checkout). If the order
         * has coupon items and they are Square codes, populates _square_discount_code_ids and saves.
         *
         * @since 5.3.0
         *
         * @param \WC_Order $order The order object.
         */
        public static function ensure_order_square_discount_code_ids_before_payment($order)
        {
        }
        /**
         * Get all Square discount code IDs stored on an order (for creating redemptions).
         *
         * @since 5.3.0
         *
         * @param \WC_Order $order The order object.
         * @return string[] Array of Square discount code IDs (empty if none).
         */
        public static function get_order_square_discount_code_ids($order)
        {
        }
        /**
         * Handle coupon removal - clear Square discount session data.
         *
         * @since 5.3.0
         *
         * @param string $coupon_code The coupon code that was removed.
         */
        public static function handle_coupon_removed($coupon_code)
        {
        }
        /**
         * Get applied coupon codes that are Square discount codes.
         *
         * @since 5.3.0
         *
         * @return string[] Array of applied Square coupon codes.
         */
        private static function get_applied_square_coupon_codes()
        {
        }
        /**
         * Check if the cart has any Square discount code applied.
         *
         * Square discount codes can only be redeemed when paying with Square.
         * Used to restrict available payment gateways to Square when a Square coupon is applied.
         *
         * @since 5.3.0
         *
         * @return bool True if cart has an applied Square discount code.
         */
        public static function cart_has_square_coupon()
        {
        }
        /**
         * Calculate Square discount from cart using CalculateOrder API.
         *
         * @since 5.3.0
         *
         * @param string $coupon_code The coupon code to calculate discount for.
         * @param string $square_discount_code_id The Square discount code ID to calculate discount for.
         * @return float The calculated discount amount.
         * @throws \Exception If calculation fails.
         */
        private static function calculate_square_discount_from_cart($coupon_code, $square_discount_code_id)
        {
        }
        /**
         * Stores each coupon's discount amount and per-item breakdown in session for cart/checkout display.
         *
         * Uses Square's order.discounts[] when available so each coupon shows its real amount (e.g. $5 off
         * vs 10% off). Coupons with no matching order.discount (e.g. product-specific with no qualifying item) stay at 0.
         * When Square returns no order.discounts and there is exactly one coupon, that coupon gets the full total.
         *
         * @since 5.3.0
         *
         * @param array    $calculated_order_data  Raw CalculateOrder response (order.discounts, line_items).
         * @param float    $total_discount_amount  Combined discount total (from line items or order total).
         * @param array    $line_item_discounts    Cart item key => combined discount amount (for fallback).
         * @param string[] $coupon_codes_in_calc   WooCommerce coupon codes included in this calculation.
         * @param \WC_Cart $cart                   WooCommerce cart (for mapping Square lines to cart keys).
         */
        private static function store_square_discount_amounts_per_coupon($calculated_order_data, $total_discount_amount, $line_item_discounts, $coupon_codes_in_calc, $cart)
        {
        }
        /**
         * Build Square line-item tax rate objects from the cart (for use in Square Order).
         * Uses cart items and WC_Tax so tax definitions exist even when cart totals are not yet calculated.
         *
         * @since 5.3.0
         *
         * @param \WC_Cart $cart     WooCommerce cart.
         * @param string   $tax_type One of API::TAX_TYPE_INCLUSIVE or API::TAX_TYPE_ADDITIVE.
         * @return array<int, \Square\Models\OrderLineItemTax> Map of WC rate_id => OrderLineItemTax.
         */
        private static function build_square_tax_rates_from_cart($cart, $tax_type)
        {
        }
        /**
         * Build Square Order object from cart data (for calculation only, no order creation).
         *
         * @since 5.3.0
         *
         * @param string $location_id Square location ID.
         * @return \Square\Models\Order Square Order object ready for CalculateOrder.
         */
        private static function build_square_order_from_cart($location_id)
        {
        }
        /**
         * Build Square order service charges for cart shipping (mirrors Orders::get_order_service_charges_for_shipping).
         * Shipping is sent as service charges, not line items, so CalculateOrder matches CreateOrder.
         *
         * @since 5.3.0
         *
         * @param \WC_Cart                        $cart       Cart object.
         * @param \Square\Models\OrderLineItemTax[] $tax_rates Tax objects keyed by rate_id.
         * @param string                          $currency   Currency code.
         * @return \Square\Models\OrderServiceCharge[]
         */
        private static function get_cart_service_charges_for_shipping($cart, array $tax_rates, $currency)
        {
        }
        /**
         * Override WooCommerce discount calculation with Square's calculated amount.
         *
         * @since 5.3.0
         *
         * @param float      $discount      Discount amount.
         * @param float      $discounting_amount Amount the coupon is being applied to.
         * @param array|null $cart_item     Cart item being discounted.
         * @param bool       $single        True if discounting a single qty item.
         * @param \WC_Coupon $coupon        Coupon object.
         * @return float Discount amount.
         */
        public static function override_discount_amount_with_square($discount, $discounting_amount, $cart_item, $single, $coupon)
        {
        }
        /**
         * Handle cart contents changed - recalculate Square discounts if applied.
         * Uses request coalescing: in a single request, we only call the Square API once per distinct cart state
         * (e.g. when woocommerce_before_calculate_totals fires multiple times with the same cart, we skip redundant calls).
         *
         * @since 5.3.0
         */
        public static function handle_cart_contents_changed()
        {
        }
    }
}
namespace WooCommerce\Square\Emails {
    /**
     * Base email class.
     *
     * @since 2.1.0
     */
    class Base_Email extends \WC_Email
    {
        /**
         * Whether the email is enabled by default.
         *
         * @var string
         */
        protected $enabled_default = 'no';
        /**
         * Plain text template path.
         *
         * @var string
         */
        public $template_plain = 'emails/plain/square-email.php';
        /**
         * HTML template path.
         *
         * @var string
         */
        public $template_html = 'emails/square-email.php';
        /**
         * Template path.
         *
         * @var string
         */
        public $template_base;
        /**
         * Email body.
         *
         * @var string
         **/
        public $body;
        /**
         * Email constructor.
         *
         * @since 2.1.0
         */
        public function __construct()
        {
        }
        /**
         * Initializes the email settings form fields.
         *
         * Extends and overrides parent method.
         *
         * @since 2.1.0
         */
        public function init_form_fields()
        {
        }
        /**
         * Gets the default email subject.
         *
         * @since 2.1.0
         *
         * @return string
         */
        public function get_default_subject()
        {
        }
        /**
         * Gets the email body.
         *
         * @since 2.1.0
         *
         * @return string may contain HTML
         */
        protected function get_default_body()
        {
        }
        /**
         * Determines if the email has valid recipients.
         *
         * @since 2.1.0
         *
         * @return bool
         */
        protected function has_recipients()
        {
        }
        /**
         * Gets the arguments that should be passed to an email template.
         *
         * @since 2.1.0
         *
         * @param array $args optional associative array with additional arguments
         * @return array
         */
        protected function get_template_args($args = array())
        {
        }
        /**
         * Gets the email HTML content.
         *
         * @since 2.0.0
         *
         * @return string HTML
         */
        public function get_content_html()
        {
        }
        /**
         * Gets the email plain text content.
         *
         * @since 2.0.0
         *
         * @return string plain text
         */
        public function get_content_plain()
        {
        }
    }
}
namespace {
    /**
     * Sync completed email.
     *
     * @since 2.1.0
     */
    class WC_Square_Access_Token_Email extends \WooCommerce\Square\Emails\Base_Email
    {
        /**
         * Email body.
         *
         * @var string
         **/
        public $body;
        /**
         * Email constructor.
         *
         * @since 2.1.0
         */
        public function __construct()
        {
        }
        /**
         * Triggers the email.
         *
         * @since 2.1.0
         */
        public function trigger()
        {
        }
        /**
         * Gets the arguments that should be passed to an email template.
         *
         * @since 2.1.0
         *
         * @param array $args optional associative array with additional arguments
         * @return array
         */
        protected function get_template_args($args = array())
        {
        }
    }
    /**
     * Gift card sent to recipient email.
     *
     * An email sent to the recipient of the gift card.
     *
     * @class       WC_Square_Gift_Card_Sent
     * @version     4.2.0
     * @extends     WC_Email
     */
    class WC_Square_Gift_Card_Sent extends \WC_Email
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Set dummy placeholders for the email.
         *
         * @since 4.9.0
         *
         * @param array  $placeholders Placeholders.
         * @param string $email_type Email type.
         * @return array
         */
        public function set_dummy_placeholders($placeholders, $email_type)
        {
        }
        /**
         * Set dummy order for the email.
         *
         * @since 4.9.0
         *
         * @param \WC_Order $order The WooCommerce order.
         * @param string    $email_type Email type.
         * @return \WC_Order
         */
        public function set_dummy_order(\WC_Order $order, $email_type)
        {
        }
        /**
         * Get email subject.
         *
         * @since 4.2.0
         *
         * @return string
         */
        public function get_default_subject()
        {
        }
        /**
         * Get email heading.
         *
         * @since 4.2.0
         *
         * @return string
         */
        public function get_default_heading()
        {
        }
        /**
         * Trigger for the email.
         *
         * @since 4.2.0
         *
         * @param \WC_Order $order The WooCommerce order.
         */
        public function trigger($order)
        {
        }
        /**
         * Returns the number of the gift card purchased.
         *
         * @since 4.2.0
         *
         * @param \WC_Order $order The Woo Order associated with the gift card purchase.
         * @return string
         */
        private function get_gift_card_gan($order)
        {
        }
        /**
         * Returns the amount loaded in the purchased gift card.
         *
         * @since 4.2.0
         *
         * @param \WC_Order $order The Woo Order associated with the gift card purchase.
         * @return string
         */
        private function get_gift_card_amount($order)
        {
        }
        /**
         * Returns the details of the gift card purchased.
         *
         * @since 4.9.0
         *
         * @param \WC_Order $order The Woo Order associated with the gift card purchase.
         * @param string    $key   The key of the gift card detail to retrieve.
         * @return string
         */
        private function get_gift_card_details($order, $key = '')
        {
        }
        /**
         * Check if order contains a gift card.
         *
         * @return boolean
         */
        private function does_order_contain_gift_card($order)
        {
        }
        /**
         * Get content html.
         *
         * @since 4.2.0
         *
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain.
         *
         * @since 4.2.0
         *
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Default content to show below main email content.
         *
         * @since 4.2.0
         *
         * @return string
         */
        public function get_default_additional_content()
        {
        }
    }
    /**
     * Sync completed email.
     *
     * @since 2.0.0
     */
    class WC_Square_Sync_Completed extends \WooCommerce\Square\Emails\Base_Email
    {
        /**
         * Email body.
         *
         * @var string
         **/
        public $body;
        /**
         * Email constructor.
         *
         * @since 2.0.0
         */
        public function __construct()
        {
        }
        /**
         * Set dummy placeholders for the email.
         *
         * @since 4.9.0
         *
         * @param array  $placeholders Placeholders.
         * @param string $email_type Email type.
         * @return array
         */
        public function set_dummy_placeholders($placeholders, $email_type)
        {
        }
        /**
         * Gets the email heading, adjusted by sync job result status.
         *
         * @since 2.0.0
         *
         * @param string $status sync job status
         * @return string
         */
        private function get_heading_by_job_status($status)
        {
        }
        /**
         * Gets the email body adjusted by sync job result status.
         *
         * @since 2.0.0
         *
         * @param string $status sync job status
         * @param bool $html whether output should be HTML (true) or plain text (false)
         * @return string may contain HTML
         */
        private function get_body_by_job_status($status, $html)
        {
        }
        /**
         * Gets the email's related sync job, if set.
         *
         * @since 2.0.0
         *
         * @return \stdClass|null
         */
        private function get_job()
        {
        }
        /**
         * Triggers the email.
         *
         * @since 2.0.0
         *
         * @param string|object|\stdClass $job a sync job object or ID
         */
        public function trigger($job)
        {
        }
        /**
         * Parses the email's body merge tags.
         *
         * @since 2.0.0
         */
        protected function parse_merge_tags()
        {
        }
        /**
         * Gets the arguments that should be passed to an email template.
         *
         * @since 2.0.0
         *
         * @param array $args optional associative array with additional arguments
         * @return array
         */
        protected function get_template_args($args = array())
        {
        }
    }
}
namespace WooCommerce\Square\Framework\Addresses {
    /**
     * The base address data class.
     *
     * This serves as a standard address object to be passed around by plugins whenever dealing with address data, and
     * eliminates the need to rely on WooCommerce's address arrays.
     *
     * @since 3.0.0
     */
    class Address
    {
        /** @var string line 1 of the street address */
        protected $line_1 = '';
        /** @var string line 2 of the street address */
        protected $line_2 = '';
        /** @var string line 3 of the street address */
        protected $line_3 = '';
        /** @var string address locality (city) */
        protected $locality = '';
        /** @var string address region (state) */
        protected $region = '';
        /** @var string address country */
        protected $country = '';
        /** @var string address postcode */
        protected $postcode = '';
        /** Getter methods ************************************************************************************************/
        /**
         * Gets line 1 of the street address.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_line_1()
        {
        }
        /**
         * Gets line 2 of the street address.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_line_2()
        {
        }
        /**
         * Gets line 3 of the street address.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_line_3()
        {
        }
        /**
         * Gets the locality or city.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_locality()
        {
        }
        /**
         * Gets the region or state.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_region()
        {
        }
        /**
         * Gets the country.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_country()
        {
        }
        /**
         * Gets the postcode.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_postcode()
        {
        }
        /**
         * Gets the hash representation of this address.
         *
         * @see Address::get_hash_data()
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_hash()
        {
        }
        /**
         * Gets the data used to generate a hash for the address.
         *
         * @since 3.0.0
         *
         * @return string[]
         */
        protected function get_hash_data()
        {
        }
        /** Setter methods ************************************************************************************************/
        /**
         * Sets line 1 of the street address.
         *
         * @since 3.0.0
         *
         * @param string $value line 1 value
         */
        public function set_line_1($value)
        {
        }
        /**
         * Sets line 2 of the street address.
         *
         * @since 3.0.0
         *
         * @param string $value line 2 value
         */
        public function set_line_2($value)
        {
        }
        /**
         * Gets line 3 of the street address.
         *
         * @since 3.0.0
         *
         * @param string $value line 3 value
         */
        public function set_line_3($value)
        {
        }
        /**
         * Gets the locality or city.
         *
         * @since 3.0.0
         *
         * @param string $value locality value
         */
        public function set_locality($value)
        {
        }
        /**
         * Gets the region or state.
         *
         * @since 3.0.0
         *
         * @param string $value region value
         */
        public function set_region($value)
        {
        }
        /**
         * Sets the country.
         *
         * @since 3.0.0
         *
         * @param string $value country value
         */
        public function set_country($value)
        {
        }
        /**
         * Sets the postcode.
         *
         * @since 3.0.0
         *
         * @param string $value postcode value
         */
        public function set_postcode($value)
        {
        }
    }
    /**
     * The customer address data class.
     *
     * Adds customer-specific data to a base address, as used for a billing or shipping address that can include first
     * and last name.
     *
     * @see Address
     *
     * @since 3.0.0
     */
    class Customer_Address extends \WooCommerce\Square\Framework\Addresses\Address
    {
        /** @var string customer first name */
        protected $first_name = '';
        /** @var string customer last name */
        protected $last_name = '';
        /** Getter Methods ************************************************************************************************/
        /**
         * Gets the customer first name.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_first_name()
        {
        }
        /**
         * Gets the customer first name.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_last_name()
        {
        }
        /**
         * Gets the data used to generate a hash for the address.
         *
         * @see Address::get_hash_data()
         *
         * @since 3.0.0
         *
         * @return string[]
         */
        protected function get_hash_data()
        {
        }
        /** Setter Methods ************************************************************************************************/
        /**
         * Sets the customer first name.
         *
         * @since 3.0.0
         *
         * @param string $value first name value
         */
        public function set_first_name($value)
        {
        }
        /**
         * Sets the customer last name.
         *
         * @since 3.0.0
         *
         * @param string $value first name value
         */
        public function set_last_name($value)
        {
        }
        /**
         * Sets the full address based on a WooCommerce order.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order WooCommerce order object
         * @param string $type address type, like billing or shipping
         */
        public function set_from_order(\WC_Order $order, $type = 'billing')
        {
        }
    }
}
namespace WooCommerce\Square\Framework {
    /**
     * # WordPress Admin Message Handler Class
     *
     * This class provides a reusable WordPress admin messaging facility for setting
     * and displaying messages and error messages across admin page requests without
     * resorting to passing the messages as query vars.
     *
     * ## Usage
     *
     * To use simple instantiate the class then set one or more messages:
     *
     * `
     * $admin_message_handler = new WP_Admin_Message_Handler( __FILE__ );
     * $admin_message_handler->add_message( 'Hello World!' );
     * `
     *
     * Then show the messages wherever you need, either with the built-in method
     * or by writing your own:
     *
     * `$admin_message_handler->show_messages();`
     */
    class Admin_Message_Handler
    {
        /** transient message prefix */
        const MESSAGE_TRANSIENT_PREFIX = '_wp_admin_message_';
        /** the message id GET name */
        const MESSAGE_ID_GET_NAME = 'wpamhid';
        /** @var string unique message identifier, defaults to __FILE__ unless otherwise set */
        private $message_id;
        /** @var array array of messages */
        private $messages = array();
        /** @var array array of error messages */
        private $errors = array();
        /** @var array array of warning messages */
        private $warnings = array();
        /** @var array array of info messages */
        private $infos = array();
        /**
         * Construct and initialize the admin message handler class
         *
         * @since 3.0.0
         * @param string $message_id optional message id.  Best practice is to set
         *        this to a unique identifier based on the client plugin, such as __FILE__
         */
        public function __construct($message_id = null)
        {
        }
        /**
         * Persist messages
         *
         * @since 3.0.0
         * @return boolean true if any messages were set, false otherwise
         */
        public function set_messages()
        {
        }
        /**
         * Loads messages
         *
         * @since 3.0.0
         */
        public function load_messages()
        {
        }
        /**
         * Clear messages and errors
         *
         * @since 3.0.0
         * @param string $id the messages identifier
         */
        public function clear_messages($id)
        {
        }
        /**
         * Add an error message.
         *
         * @since 3.0.0
         * @param string $error error message
         */
        public function add_error($error)
        {
        }
        /**
         * Adds a warning message.
         *
         * @since 3.0.0
         *
         * @param string $message warning message to add
         */
        public function add_warning($message)
        {
        }
        /**
         * Add a message.
         *
         * @since 3.0.0
         * @param string $message the message to add
         */
        public function add_message($message)
        {
        }
        /**
         * Get error count.
         *
         * @since 3.0.0
         * @return int error message count
         */
        public function error_count()
        {
        }
        /**
         * Gets the warning message count.
         *
         * @since 3.0.0
         *
         * @return int warning message count
         */
        public function warning_count()
        {
        }
        /**
         * Gets the info message count.
         *
         * @since 3.0.0
         *
         * @return int info message count
         */
        public function info_count()
        {
        }
        /**
         * Get message count.
         *
         * @since 3.0.0
         * @return int message count
         */
        public function message_count()
        {
        }
        /**
         * Get error messages
         *
         * @since 3.0.0
         * @return array of error message strings
         */
        public function get_errors()
        {
        }
        /**
         * Get an error message
         *
         * @since 3.0.0
         * @param int $index the error index
         * @return string the error message
         */
        public function get_error($index)
        {
        }
        /**
         * Gets all warning messages.
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_warnings()
        {
        }
        /**
         * Gets a specific warning message.
         *
         * @since 3.0.0
         *
         * @param int $index warning message index
         * @return string
         */
        public function get_warning($index)
        {
        }
        /**
         * Gets all info messages.
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_infos()
        {
        }
        /**
         * Gets a specific info message.
         *
         * @since 3.0.0
         *
         * @param int $index info message index
         * @return string
         */
        public function get_info($index)
        {
        }
        /**
         * Get messages
         *
         * @since 3.0.0
         * @return array of message strings
         */
        public function get_messages()
        {
        }
        /**
         * Get a message
         *
         * @since 3.0.0
         * @param int $index the message index
         * @return string the message
         */
        public function get_message($index)
        {
        }
        /**
         * Render the errors and messages.
         *
         * @since 3.0.0
         * @param array $params {
         *     Optional parameters.
         *
         *     @type array $capabilities Any user capabilities to check if the user is allowed to view the messages,
         *                               default: `manage_woocommerce`
         * }
         */
        public function show_messages($params = array())
        {
        }
        /**
         * Redirection hook which persists messages into session data.
         *
         * @since 3.0.0
         * @param string $location the URL to redirect to
         * @param int $status the http status
         * @return string the URL to redirect to
         */
        public function redirect($location, $status)
        {
        }
        /**
         * Generate a unique id to identify the messages
         *
         * @since 3.0.0
         * @return string unique identifier
         */
        protected function get_message_id()
        {
        }
    }
    /**
     * Admin Notice Handler Class
     *
     * The purpose of this class is to provide a facility for displaying
     * conditional (often dismissible) admin notices during a single page
     * request
     *
     * @since 3.0.0
     */
    class Admin_Notice_Handler
    {
        /** @var Plugin the plugin */
        private $plugin;
        /** @var array associative array of id to notice text */
        private $admin_notices = array();
        /** @var boolean static member to enforce a single rendering of the admin notice placeholder element */
        private static $admin_notice_placeholder_rendered = false;
        /** @var boolean static member to enforce a single rendering of the admin notice javascript */
        private static $admin_notice_js_rendered = false;
        /**
         * Initialize and setup the Admin Notice Handler
         *
         * @since 3.0.0
         */
        public function __construct($plugin)
        {
        }
        /**
         * Adds the given $message as a dismissible notice identified by $message_id,
         * unless the notice has been dismissed, or we're on the plugin settings page
         *
         * @since 3.0.0
         * @param string $message the notice message to display
         * @param string $message_id the message id
         * @param array $params {
         *     Optional parameters.
         *
         *     @type bool $dismissible             If the notice should be dismissible
         *     @type bool $always_show_on_settings If the notice should be forced to display on the
         *                                         plugin settings page, regardless of `$dismissible`.
         *     @type string $notice_class          Additional classes for the notice.
         * }
         */
        public function add_admin_notice($message, $message_id, $params = array())
        {
        }
        /**
         * Returns true if the identified notice hasn't been cleared, or we're on
         * the plugin settings page (where notices are always displayed)
         *
         * @since 3.0.0
         * @param string $message_id the message id
         * @param array $params {
         *     Optional parameters.
         *
         *     @type bool $dismissible             If the notice should be dismissible
         *     @type bool $always_show_on_settings If the notice should be forced to display on the
         *                                         plugin settings page, regardless of `$dismissible`.
         * }
         * @return bool
         */
        public function should_display_notice($message_id, $params = array())
        {
        }
        /**
         * Render any admin notices, as well as the admin notice placeholder
         *
         * @since 3.0.0
         * @param boolean $is_visible true if the notices should be immediately visible, false otherwise
         */
        public function render_admin_notices($is_visible = true)
        {
        }
        /**
         * Render any delayed admin notices, which have not yet already been rendered
         *
         * @since 3.0.0
         */
        public function render_delayed_admin_notices()
        {
        }
        /**
         * Render a single admin notice
         *
         * @since 3.0.0
         * @param string $message the notice message to display
         * @param string $message_id the message id
         * @param array $params {
         *     Optional parameters.
         *
         *     @type bool $dismissible             If the notice should be dismissible
         *     @type bool $is_visible              If the notice should be immediately visible
         *     @type bool $always_show_on_settings If the notice should be forced to display on the
         *                                         plugin settings page, regardless of `$dismissible`.
         *     @type string $notice_class          Additional classes for the notice.
         * }
         */
        public function render_admin_notice($message, $message_id, $params = array())
        {
        }
        /**
         * Render the javascript to handle the notice "dismiss" functionality
         *
         * @since 3.0.0
         */
        public function render_admin_notice_js()
        {
        }
        /**
         * Marks the identified admin notice as dismissed for the given user
         *
         * @since 3.0.0
         * @param string $message_id the message identifier
         * @param int $user_id optional user identifier, defaults to current user
         */
        public function dismiss_notice($message_id, $user_id = null)
        {
        }
        /**
         * Returns true if the identified admin notice has been dismissed for the
         * given user
         *
         * @since 3.0.0
         * @param string $message_id the message identifier
         * @param int $user_id optional user identifier, defaults to current user
         * @return boolean true if the message has been dismissed by the admin user
         */
        public function is_notice_dismissed($message_id, $user_id = null)
        {
        }
        /**
         * Returns the full set of dismissed notices for the user identified by
         * $user_id, for this plugin
         *
         * @since 3.0.0
         * @param int $user_id optional user identifier, defaults to current user
         * @return array of message id to dismissed status (true or false)
         */
        public function get_dismissed_notices($user_id = null)
        {
        }
        /** AJAX methods ******************************************************/
        /**
         * Dismiss the identified notice
         *
         * @since 3.0.0
         */
        public function handle_dismiss_notice()
        {
        }
        /** Getter methods ******************************************************/
        /**
         * Get the plugin
         *
         * @since 3.0.0
         * @return Plugin returns the plugin instance
         */
        protected function get_plugin()
        {
        }
    }
}
namespace WooCommerce\Square\Framework\Api {
    /**
     * Base JSON API request class.
     *
     * @since 3.0.0
     */
    abstract class API_JSON_Request implements \WooCommerce\Square\Framework\Api\API_Request
    {
        /** @var string The request method, one of HEAD, GET, PUT, PATCH, POST, DELETE */
        protected $method;
        /** @var string The request path */
        protected $path;
        /** @var array The request parameters, if any */
        protected $params = array();
        /** @var array the request data */
        protected $data = array();
        /**
         * Get the request method.
         *
         * @since 3.0.0
         * @see API_Request::get_method()
         * @return string
         */
        public function get_method()
        {
        }
        /**
         * Get the request path.
         *
         * @since 3.0.0
         * @see API_Request::get_path()
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get the request parameters.
         *
         * @since 3.0.0
         * @see API_Request::get_params()
         * @return array
         */
        public function get_params()
        {
        }
        /**
         * Get the request data.
         *
         * @since 3.0.0
         * @return array
         */
        public function get_data()
        {
        }
        /** API Helper Methods ******************************************************/
        /**
         * Get the string representation of this request.
         *
         * @since 3.0.0
         * @see API_Request::to_string()
         * @return string
         */
        public function to_string()
        {
        }
        /**
         * Get the string representation of this request with any and all sensitive elements masked
         * or removed.
         *
         * @since 3.0.0
         * @see API_Request::to_string_safe()
         * @return string
         */
        public function to_string_safe()
        {
        }
    }
}
namespace WooCommerce\Square\Framework\Compatibility {
    /**
     * WooCommerce data compatibility class.
     *
     * @since 3.0.0
     */
    abstract class Data_Compatibility
    {
        /**
         * Gets an object property.
         *
         * @since 3.0.0
         * @param \WC_Data $object the data object, likely \WC_Order or \WC_Product
         * @param string $prop the property name
         * @param string $context if 'view' then the value will be filtered
         * @param array $compat_props Compatibility properties.
         * @return mixed
         */
        public static function get_prop($object, $prop, $context = 'edit', $compat_props = array())
        {
        }
        /**
         * Sets an object's properties.
         *
         * Note that this does not save any data to the database.
         *
         * @since 3.0.0
         * @param \WC_Data $object the data object, likely \WC_Order or \WC_Product
         * @param array $props the new properties as $key => $value
         * @param array $compat_props Compatibility properties.
         * @return \WC_Data
         */
        public static function set_props($object, $props, $compat_props = array())
        {
        }
        /**
         * Gets an object's stored meta value.
         *
         * @since 3.0.0
         * @param \WC_Data $object the data object, likely \WC_Order or \WC_Product
         * @param string $key the meta key
         * @param bool $single whether to get the meta as a single item. Defaults to `true`
         * @param string $context if 'view' then the value will be filtered
         * @return mixed
         */
        public static function get_meta($object, $key = '', $single = true, $context = 'edit')
        {
        }
        /**
         * Stores an object meta value.
         *
         * @since 3.0.0
         * @param \WC_Data $object the data object, likely \WC_Order or \WC_Product
         * @param string $key the meta key
         * @param string $value the meta value
         * @param bool $unique Optional. Whether the meta should be unique.
         */
        public static function add_meta_data($object, $key, $value, $unique = false)
        {
        }
        /**
         * Updates an object's stored meta value.
         *
         * @since 3.0.0
         * @param \WC_Data $object the data object, likely \WC_Order or \WC_Product
         * @param string $key the meta key
         * @param string $value the meta value
         * @param int|string $meta_id Optional. The specific meta ID to update
         */
        public static function update_meta_data($object, $key, $value, $meta_id = '')
        {
        }
        /**
         * Deletes an object's stored meta value.
         *
         * @since 3.0.0
         * @param \WC_Data $object the data object, likely \WC_Order or \WC_Product
         * @param string $key the meta key
         */
        public static function delete_meta_data($object, $key)
        {
        }
    }
    /**
     * WooCommerce order compatibility class.
     *
     * @since 3.0.0
     */
    class Order_Compatibility extends \WooCommerce\Square\Framework\Compatibility\Data_Compatibility
    {
        /** @var array mapped compatibility properties, as `$new_prop => $old_prop` */
        protected static $compat_props = array('date_completed' => 'completed_date', 'date_paid' => 'paid_date', 'date_modified' => 'modified_date', 'date_created' => 'order_date', 'customer_id' => 'customer_user', 'discount' => 'cart_discount', 'discount_tax' => 'cart_discount_tax', 'shipping_total' => 'total_shipping', 'type' => 'order_type', 'currency' => 'order_currency', 'version' => 'order_version');
        /**
         * Gets an order date.
         *
         * This should only be used to retrieve WC core date properties.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @param string $type type of date to get
         * @param string $context if 'view' then the value will be filtered
         *
         * @return \WC_DateTime|null
         */
        public static function get_date_prop(\WC_Order $order, $type, $context = 'edit')
        {
        }
        /**
         * Gets an order property.
         *
         * @since 3.0.0
         * @param \WC_Order $object the order object
         * @param string $prop the property name
         * @param string $context if 'view' then the value will be filtered
         * @return mixed
         */
        public static function get_prop($object, $prop, $context = 'edit', $compat_props = array())
        {
        }
        /**
         * Sets an order's properties.
         *
         * Note that this does not save any data to the database.
         *
         * @since 3.0.0
         * @param \WC_Order $object the order object
         * @param array $props the new properties as $key => $value
         * @return \WC_Data|\WC_Order|\WooCommerce\Square\WC_Order_Square
         */
        public static function set_props($object, $props, $compat_props = array())
        {
        }
        /**
         * Order item CRUD compatibility method to add a coupon to an order.
         *
         * @since 3.0.0
         * @param \WC_Order $order the order object
         * @param array $code the coupon code
         * @param int $discount the discount amount.
         * @param int $discount_tax the discount tax amount.
         * @return int the order item ID
         */
        public static function add_coupon(\WC_Order $order, $code = array(), $discount = 0, $discount_tax = 0)
        {
        }
        /**
         * Order item CRUD compatibility method to add a fee to an order.
         *
         * @since 3.0.0
         * @param \WC_Order $order the order object
         * @param object $fee the fee to add
         * @return int the order item ID
         */
        public static function add_fee(\WC_Order $order, $fee)
        {
        }
        /**
         * Order item CRUD compatibility method to add a shipping line to an order.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @param \WC_Shipping_Rate $shipping_rate shipping rate to add
         * @return int the order item ID
         */
        public static function add_shipping(\WC_Order $order, $shipping_rate)
        {
        }
        /**
         * Order item CRUD compatibility method to add a tax line to an order.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @param int $tax_rate_id tax rate ID
         * @param float $tax_amount cart tax amount
         * @param float $shipping_tax_amount shipping tax amount
         * @return int order item ID
         */
        public static function add_tax(\WC_Order $order, $tax_rate_id, $tax_amount = 0, $shipping_tax_amount = 0)
        {
        }
        /**
         * Determines if an order has an available shipping address.
         *
         * WooCommerce 3.0+ no longer fills the shipping address with the billing if
         * a shipping address was never set by the customer at checkout, as is the
         * case with virtual orders. This method is helpful for gateways that may
         * reject such transactions with blank shipping information.
         *
         * TODO: Remove when WC 3.0.4 can be required {CW 2017-04-17}
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         *
         * @return bool
         */
        public static function has_shipping_address(\WC_Order $order)
        {
        }
    }
}
namespace WooCommerce\Square\Framework {
    /**
     * Plugin lifecycle handler.
     *
     * Registers and displays milestone notice prompts and eventually the plugin
     * install, upgrade, activation, and deactivation routines.
     *
     * @since 3.0.0
     */
    class Lifecycle
    {
        /** @var array the version numbers that have an upgrade routine */
        protected $upgrade_versions = array();
        /** @var string minimum milestone version */
        private $milestone_version;
        /** @var Plugin plugin instance */
        private $plugin;
        /**
         * Constructs the class.
         *
         * @since 3.0.0
         *
         * @param Plugin $plugin plugin instance
         */
        public function __construct(\WooCommerce\Square\Framework\Plugin $plugin)
        {
        }
        /**
         * Adds the action & filter hooks.
         *
         * @since 3.0.0
         */
        protected function add_hooks()
        {
        }
        /**
         * Initializes the plugin lifecycle.
         *
         * @since 3.0.0
         */
        public function init()
        {
        }
        /**
         * Performs plugin installation.
         *
         * @since 2.0.0
         */
        protected function install()
        {
        }
        /**
         * Triggers plugin activation.
         *
         * We don't use register_activation_hook() as that can't be called inside
         * the 'plugins_loaded' action. Instead, we rely on setting to track the
         * plugin's activation status.
         *
         * @internal
         *
         * @link https://developer.wordpress.org/reference/functions/register_activation_hook/#comment-2100
         *
         * @since 3.0.0
         */
        public function handle_activation()
        {
        }
        /**
         * Triggers plugin deactivation.
         *
         * @internal
         *
         * @since 3.0.0
         */
        public function handle_deactivation()
        {
        }
        /**
         * Helper method to install default settings for a plugin.
         *
         * @since 3.0.0
         *
         * @param array $settings settings in format required by WC_Admin_Settings
         */
        public function install_default_settings(array $settings)
        {
        }
        /**
         * Performs any upgrade tasks based on the provided installed version.
         *
         * @since 3.0.0
         *
         * @param string $installed_version installed version
         */
        protected function upgrade($installed_version)
        {
        }
        /**
         * Adds any lifecycle admin notices.
         *
         * @since 3.0.0
         */
        public function add_admin_notices()
        {
        }
        /** Milestone Methods *****************************************************/
        /**
         * Triggers a milestone.
         *
         * This will only be triggered if the install's "milestone version" is lower
         * than $since. Plugins can specify $since as the version at which a
         * milestone's feature was added. This prevents existing installs from
         * triggering notices for milestones that have long passed, like a payment
         * gateway's first successful payment. Omitting $since will assume the
         * milestone has always existed and should only trigger for fresh installs.
         *
         * @since 3.0.0
         *
         * @param string $id milestone ID
         * @param string $message message to display to the user
         * @param string $since the version since this milestone has existed in the plugin
         * @return bool
         */
        public function trigger_milestone($id, $message, $since = '1.0.0')
        {
        }
        /**
         * Generates a milestone notice message.
         *
         * @since 3.0.0
         *
         * @param string $custom_message custom text that notes what milestone was completed.
         * @return string
         */
        protected function generate_milestone_notice_message($custom_message)
        {
        }
        /**
         * Registers a milestone message to be displayed in the admin.
         *
         * @since 3.0.0
         * @see Lifecycle::generate_milestone_notice_message()
         *
         * @param string $id milestone ID
         * @param string $message message to display to the user
         * @return bool whether the message was successfully registered
         */
        public function register_milestone_message($id, $message)
        {
        }
        /** Event history methods *****************************************************************************************/
        /**
         * Adds an upgrade lifecycle event.
         *
         * @since 3.0.0
         *
         * @param string $from_version version upgrading from
         * @param array $data extra data to add
         * @return false|int
         */
        public function add_upgrade_event($from_version, array $data = array())
        {
        }
        /**
         * Stores a lifecycle event.
         *
         * This can be used to log installs, upgrades, etc...
         *
         * Uses a direct database query to avoid cache issues.
         *
         * @since 3.0.0
         *
         * @param string $name lifecycle event name
         * @param array $data any extra data to store
         * @return false|int
         */
        public function store_event($name, array $data = array())
        {
        }
        /**
         * Gets the lifecycle event history.
         *
         * The last 30 events are stored, with the latest first.
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_event_history()
        {
        }
        /**
         * Gets the event history option name.
         *
         * @since 3.0.0
         *
         * @return string
         */
        protected function get_event_history_option_name()
        {
        }
        /** Utility Methods *******************************************************/
        /**
         * Gets the registered milestone messages.
         *
         * @since 3.0.0
         *
         * @return array
         */
        protected function get_milestone_messages()
        {
        }
        /**
         * Sets the milestone version.
         *
         * @since 3.0.0
         *
         * @param string $version plugin version
         * @return bool
         */
        public function set_milestone_version($version)
        {
        }
        /**
         * Gets the milestone version.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_milestone_version()
        {
        }
        /**
         * Gets the currently installed plugin version.
         *
         * @since 3.0.0
         *
         * @return string
         */
        protected function get_installed_version()
        {
        }
        /**
         * Sets the installed plugin version.
         *
         * @since 3.0.0
         *
         * @param string $version version to set
         */
        protected function set_installed_version($version)
        {
        }
        /**
         * Gets the plugin instance.
         *
         * @since 3.0.0
         *
         * @return Plugin
         */
        protected function get_plugin()
        {
        }
    }
}
namespace WooCommerce\Square\Framework\PaymentGateway\Admin {
    /**
     * Handle the admin order screens.
     *
     * @since 3.0.0
     */
    class Payment_Gateway_Admin_Order
    {
        /** @var \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway_Plugin the plugin instance **/
        protected $plugin;
        /**
         * Constructs the class.
         *
         * @since 3.0.0
         *
         * @param Payment_Gateway_Plugin The plugin instance
         */
        public function __construct(\WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway_Plugin $plugin)
        {
        }
        /**
         * Enqueues the scripts and styles.
         *
         * @internal
         *
         * @since 3.0.0
         *
         * @param string $hook_suffix page hook suffix
         */
        public function enqueue_scripts($hook_suffix)
        {
        }
        /**
         * Enqueues the assets for the Edit Order screen.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         */
        protected function enqueue_edit_order_assets(\WC_Order $order)
        {
        }
        /** Capture Charge Feature ******************************************************/
        /**
         * Adds 'Capture charge' to the Orders screen bulk action select.
         *
         * @since 3.0.0
         */
        public function maybe_add_capture_charge_bulk_order_action()
        {
        }
        /**
         * Adds 'Capture charge' to the Orders screen bulk action select (HPOS).
         *
         * @since 4.6.0
         *
         * @param array $bulk_actions bulk actions
         * @return array
         */
        public function maybe_add_capture_charge_bulk_actions($bulk_actions)
        {
        }
        /**
         * Processes the 'Capture Charge' custom bulk action in HPOS.
         *
         * @since 4.6.0
         */
        public function hpos_process_capture_charge_bulk_order_action($redirect_to, $action, $ids)
        {
        }
        /**
         * Processes the 'Capture Charge' custom bulk action.
         *
         * @since 3.0.0
         */
        public function process_capture_charge_bulk_order_action()
        {
        }
        /**
         * Adds the capture charge button to the order UI.
         *
         * @internal
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         */
        public function add_capture_button($order)
        {
        }
        /**
         * Outputs the partial capture UI HTML.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @param \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway $gateway gateway instance
         */
        protected function output_partial_capture_html(\WC_Order $order, \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway $gateway)
        {
        }
        /**
         * Processes a capture via AJAX.
         *
         * @internal
         *
         * @since 3.0.0
         */
        public function ajax_process_capture()
        {
        }
        /**
         * Gets the gateway object from an order.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @return \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway
         */
        protected function get_order_gateway(\WC_Order $order)
        {
        }
        /**
         * Gets the plugin instance.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway_Plugin the plugin instance
         */
        protected function get_plugin()
        {
        }
        /**
         * Captures an order on status change to a "paid" status.
         *
         * @internal
         *
         * @since 3.0.0
         *
         * @param int $order_id order ID
         * @param string $old_status status being changed
         * @param string $new_status new order status
         */
        public function maybe_capture_paid_order($order_id, $old_status, $new_status)
        {
        }
        /**
         * Determines if an order is ready for capture.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @return bool
         */
        protected function is_order_ready_for_capture(\WC_Order $order)
        {
        }
    }
    /**
     * The token editor.
     *
     * @since 3.0.0
     */
    class Payment_Gateway_Admin_Payment_Token_Editor
    {
        /** @var \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway_Direct the gateway object **/
        protected $gateway;
        /**
         * Constructs the editor.
         *
         * @since 3.0.0
         *
         * @param Payment_Gateway_Direct the gateway object
         */
        public function __construct(\WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway_Direct $gateway)
        {
        }
        /**
         * Load the editor scripts and styles.
         *
         * @since 3.0.0
         */
        public function enqueue_scripts_styles()
        {
        }
        /**
         * Display the token editor.
         *
         * @since 3.0.0
         * @param int $user_id the user ID
         */
        public function display($user_id)
        {
        }
        /**
         * Display the tokens.
         *
         * @since 3.0.0
         * @param int $user_id the user ID
         */
        public function display_tokens($user_id)
        {
        }
        /**
         * Save the token editor.
         *
         * @since 3.0.0
         * @param int $user_id the user ID
         */
        public function save($user_id)
        {
        }
        /**
         * Add a token via AJAX.
         *
         * @since 3.0.0
         */
        public function ajax_get_blank_token()
        {
        }
        /**
         * Remove a token via AJAX.
         *
         * @since 3.0.0
         */
        public function ajax_remove_token()
        {
        }
        /**
         * Refresh the tokens list via AJAX.
         *
         * @since 3.0.0
         */
        public function ajax_refresh_tokens()
        {
        }
        /**
         * Build a token object from data saved in the admin.
         *
         * This method allows concrete gateways to add special token data.
         * See Authorize.net CIM for an example.
         *
         * @since 3.0.0
         *
         * @param int    $user_id the user ID
         * @param string $token_id the token ID
         * @param array  $data the token data
         * @return \WooCommerce\Square\Framework\PaymentGateway\PaymentTokens\Payment_Gateway_Payment_Token the payment token object
         */
        protected function build_token($user_id, $token_id, $data)
        {
        }
        /**
         * Update the user's token data.
         *
         * @since 3.0.0
         * @param int                     $user_id the user ID
         * @param array the token objects
         */
        protected function update_tokens($user_id, $tokens)
        {
        }
        /**
         * Validate a token's data before saving.
         *
         * Concrete gateways can override this to provide their own validation.
         *
         * @since 3.0.0
         * @param array $data the token data
         * @return array|bool the validated token data or false if the token should not be saved
         */
        protected function validate_token_data($token_id, $data)
        {
        }
        /**
         * Correctly format a credit card expiration date for storage.
         *
         * @since 3.0.0
         * @param array $data
         * @return array
         */
        protected function prepare_expiry_date($data)
        {
        }
        /**
         * Get the stored tokens for a user.
         *
         * @since 3.0.0
         * @param int $user_id the user ID
         * @return array the tokens in db format
         */
        protected function get_tokens($user_id)
        {
        }
        /**
         * Get the editor title.
         *
         * @since 3.0.0
         * @return string
         */
        protected function get_title()
        {
        }
        /**
         * Get the editor columns.
         *
         * @since 3.0.0
         * @return array
         */
        protected function get_columns()
        {
        }
        /**
         * Get the editor fields.
         *
         * @since 3.0.0
         * @return array
         */
        protected function get_fields($type = '')
        {
        }
        /**
         * Get the token payment type.
         *
         * @since 3.0.0
         * @return string
         */
        protected function get_payment_type()
        {
        }
        /**
         * Get the credit card type field options.
         *
         * @since 3.0.0
         * @return array
         */
        protected function get_card_type_options()
        {
        }
        /**
         * Get the HTML name for the token fields.
         *
         * @since 3.0.0
         * @return string
         */
        protected function get_input_name()
        {
        }
        /**
         * Get the available editor actions.
         *
         * @since 3.0.0
         * @return array
         */
        protected function get_actions()
        {
        }
        /**
         * Get the available token actions.
         *
         * @since 3.0.0
         * @return array
         */
        protected function get_token_actions()
        {
        }
        /**
         * Gets the gateway object.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway_Direct the gateway object
         */
        protected function get_gateway()
        {
        }
    }
    /**
     * Handle the admin user profile settings.
     *
     * @since 3.0.0
     */
    class Payment_Gateway_Admin_User_Handler
    {
        /** @var \Payment_Gateway_Plugin the plugin instance **/
        protected $plugin;
        /** @var array the token editor for each gateway **/
        protected $token_editors = array();
        /**
         * Construct the user handler.
         *
         * @since 3.0.0
         * @param \Payment_Gateway_Plugin The plugin instance
         */
        public function __construct(\WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway_Plugin $plugin)
        {
        }
        /**
         * Set up a token editor for each gateway.
         *
         * @since 3.0.0
         */
        public function init_token_editors()
        {
        }
        /**
         * Display the customer profile settings markup.
         *
         * @since 3.0.0
         * @param \WP_User $user The user object
         */
        public function add_profile_section($user)
        {
        }
        /**
         * Display the token editor markup.
         *
         * @since 3.0.0
         * @param \WP_User $user The user object
         */
        public function display_token_editors($user)
        {
        }
        /**
         * Display the customer ID field(s).
         *
         * @since 3.0.0
         * @param \WP_User $user the user object
         */
        public function display_customer_id_fields($user)
        {
        }
        /**
         * Save the user profile section fields.
         *
         * @since 3.0.0
         * @param int $user_id the user ID
         */
        public function save_profile_fields($user_id)
        {
        }
        /**
         * Save the token data from each token editor.
         *
         * @since 3.0.0
         * @param int $user_id the user ID
         */
        protected function save_tokens($user_id)
        {
        }
        /**
         * Save the customer IDs.
         *
         * @since 3.0.0
         * @param int $user_id the user ID
         */
        protected function save_customer_ids($user_id)
        {
        }
        /** Getter methods ******************************************************/
        /**
         * Get the token editor section title.
         *
         * @since 3.0.0
         * @return string
         */
        protected function get_title()
        {
        }
        /**
         * Get the token editor section description.
         *
         * @since 3.0.0
         * @return string
         */
        protected function get_description()
        {
        }
        /**
         * Get the token editor objects.
         *
         * @since 3.0.0
         * @return array
         */
        protected function get_token_editors()
        {
        }
        /**
         * Get the customer ID fields for the plugin's gateways.
         *
         * In most cases, this will be a single field unless the plugin has multiple gateways and they
         * are set to different environments.
         *
         * @since 3.0.0
         * @param int $user_id the user ID
         * @return array {
         *     The fields data
         *
         *     @type string $label the field label
         *     @type string $name  the input name
         *     @type string $value the input value
         * }
         */
        protected function get_customer_id_fields($user_id)
        {
        }
        /**
         * Get the unique environments between the plugin's gateways.
         *
         * @since 3.0.0
         * @return array the environments in the format `$environment_id => $environment_name`
         */
        protected function get_unique_environments()
        {
        }
        /**
         * Get the gateways that support tokenization and are enabled.
         *
         * @since 3.0.0
         * @return \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway[]
         */
        protected function get_tokenized_gateways()
        {
        }
        /** Conditional methods ******************************************************/
        /**
         * Determine if the user profile section is supported by at least one gateway.
         *
         * @since 3.0.0
         * @return bool
         */
        protected function is_supported()
        {
        }
        /**
         * Determine if the plugin has varying environments between its gateways.
         *
         * @since 3.0.0
         * @return bool
         */
        public function has_multiple_environments()
        {
        }
        /**
         * Get the plugin instance.
         *
         * @since 3.0.0
         * @return \Payment_Gateway_Plugin the plugin instance
         */
        protected function get_plugin()
        {
        }
    }
}
namespace WooCommerce\Square\Framework\PaymentGateway\Api {
    /**
     * WooCommerce Direct Payment Gateway API Response
     */
    interface Payment_Gateway_API_Response extends \WooCommerce\Square\Framework\Api\API_Response
    {
        /**
         * Checks if the transaction was successful.
         *
         * @since 3.0.0
         *
         * @return bool true if approved, false otherwise
         */
        public function transaction_approved();
        /**
         * Returns true if the transaction was held, for instance due to AVS/CSC
         * Fraud Settings.  This indicates that the transaction was successful, but
         * did not pass a fraud check and should be reviewed.
         *
         * @since 3.0.0
         *
         * @return bool true if the transaction was held, false otherwise
         */
        public function transaction_held();
        /**
         * Gets the response status message, or null if there is no status message
         * associated with this transaction.
         *
         * @since 3.0.0
         *
         * @return string status message
         */
        public function get_status_message();
        /**
         * Gets the response status code, or null if there is no status code
         * associated with this transaction.
         *
         * @since 3.0.0
         *
         * @return string status code
         */
        public function get_status_code();
        /**
         * Gets the response transaction id, or null if there is no transaction id
         * associated with this transaction.
         *
         * @since 3.0.0
         *
         * @return string transaction id
         */
        public function get_transaction_id();
        /**
         * Gets the payment type: 'credit-card', 'echeck', etc...
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_payment_type();
        /**
         * Returns a message appropriate for a frontend user.  This should be used
         * to provide enough information to a user to allow them to resolve an
         * issue on their own, but not enough to help nefarious folks fishing for
         * info.
         *
         * @see Payment_Gateway_API_Response_Message_Helper
         *
         * @since 3.0.0
         *
         * @return string user message, if there is one
         */
        public function get_user_message();
    }
    /**
     * WooCommerce Direct Payment Gateway API
     */
    interface Payment_Gateway_API
    {
        /**
         * Perform a credit card authorization for the given order
         *
         * If the gateway does not support credit card authorizations, this method can be a no-op.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order the order
         * @return Payment_Gateway_API_Response credit card charge response
         * @throws \Exception network timeouts, etc
         */
        public function credit_card_authorization(\WC_Order $order);
        /**
         * Perform a credit card charge for the given order
         *
         * If the gateway does not support credit card charges, this method can be a no-op.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order the order
         * @return Payment_Gateway_API_Response credit card charge response
         * @throws \Exception network timeouts, etc
         */
        public function credit_card_charge(\WC_Order $order);
        /**
         * Perform a credit card capture for a given authorized order
         *
         * If the gateway does not support credit card capture, this method can be a no-op.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order the order
         * @return Payment_Gateway_API_Response credit card capture response
         * @throws \Exception network timeouts, etc
         */
        public function credit_card_capture(\WC_Order $order);
        /**
         * Performs a gift card charge for a given order.
         *
         * @since 4.2.0
         *
         * @param \WC_Order $order order object
         * @return \WooCommerce\Square\API\Response
         */
        public function gift_card_charge(\WC_Order $order);
        /**
         * Performs payments when a transaction is done using multiple payment methods.
         * For example: Gift Card + Square Credit Card.
         *
         * @since 4.2.0
         *
         * @param array  $payment_ids Array of payment IDs.
         * @param string $order_id    Square order ID.
         */
        public function pay_order($payment_ids, $order_id);
        /**
         * Creates a Gift Card.
         *
         * @since 4.2.0
         *
         * @param $order_id Line item order ID.
         * @return API\Responses\Get_Gift_Card
         */
        public function create_gift_card($order_id);
        /**
         * Activates a Gift Card which is in a pending state.
         *
         * @since 4.2.0
         *
         * @param string $gift_card_id The ID of the inactive Gift Card.
         * @param string $order_id     Square Order ID associated with the Gift Card.
         * @param string $line_item_id Line Item ID for the Gift Card.
         */
        public function activate_gift_card($gift_card_id, $order_id, $line_item_id);
        /**
         * Loads an existing gift card with an amount.
         *
         * @since 4.2.0
         *
         * @param string    $gan   The gift card number.
         * @param \WC_Order $order WooCommerce order.
         */
        public function load_gift_card($gan, $order);
        /**
         * Sets data to refund/adjust decrement funds in a gift card.
         *
         * @since 4.2.0
         *
         * @param string               $gan          Gift card number.
         * @param \Square\Models\Money $amount_money The amount to be refunded.
         * @param \WC_Order            $order        WooCommerce order.
         */
        public function refund_gift_card($gan, $amount_money, $order);
        /**
         * Perform an eCheck debit (ACH transaction) for the given order
         *
         * If the gateway does not support check debits, this method can be a no-op.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order the order
         * @return Payment_Gateway_API_Response check debit response
         * @throws \Exception network timeouts, etc
         */
        public function check_debit(\WC_Order $order);
        /**
         * Perform a refund for the given order
         *
         * If the gateway does not support refunds, this method can be a no-op.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @return Payment_Gateway_API_Response refund response
         * @throws \Exception network timeouts, etc
         */
        public function refund(\WC_Order $order);
        /**
         * Perform a void for the given order
         *
         * If the gateway does not support voids, this method can be a no-op.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @return Payment_Gateway_API_Response void response
         * @throws \Exception network timeouts, etc
         */
        public function void(\WC_Order $order);
        /**
         * Creates a payment token for the given order
         *
         * If the gateway does not support tokenization, this method can be a no-op.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order the order
         * @return Payment_Gateway_API_Create_Payment_Token_Response payment method tokenization response
         * @throws \Exception network timeouts, etc
         */
        public function tokenize_payment_method(\WC_Order $order);
        /**
         * Updates a tokenized payment method.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @return Payment_Gateway_API_Response
         * @throws \Exception
         */
        public function update_tokenized_payment_method(\WC_Order $order);
        /**
         * Determines if this API supports updating tokenized payment methods.
         *
         * @see Payment_Gateway_API::update_tokenized_payment_method()
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function supports_update_tokenized_payment_method();
        /**
         * Removes the tokenized payment method.  This method should not be invoked
         * unless supports_remove_tokenized_payment_method() returns true, otherwise
         * the results are undefined.
         *
         * @since 3.0.0
         * @see Payment_Gateway_API::supports_remove_tokenized_payment_method()
         *
         * @param string $token the payment method token
         * @param string $customer_id unique customer id for gateways that support it
         * @return Payment_Gateway_API_Response remove tokenized payment method response
         * @throws \Exception network timeouts, etc
         */
        public function remove_tokenized_payment_method($token, $customer_id);
        /**
         * Returns true if this API supports a "remove tokenized payment method"
         * request.  If this method returns true, then remove_tokenized_payment_method()
         * is considered safe to call.
         *
         * @since 3.0.0
         * @see Payment_Gateway_API::remove_tokenized_payment_method()
         *
         * @return boolean true if this API supports a "remove tokenized payment method" request, false otherwise
         */
        public function supports_remove_tokenized_payment_method();
        /**
         * Returns all tokenized payment methods for the customer.  This method
         * should not be invoked unless supports_get_tokenized_payment_methods()
         * return true, otherwise the results are undefined
         *
         * @since 3.0.0
         * @see Payment_Gateway_API::supports_get_tokenized_payment_methods()
         *
         * @param string $customer_id unique customer id
         * @return Payment_Gateway_API_Get_Tokenized_Payment_Methods_Response response containing any payment tokens for the customer
         * @throws \Exception network timeouts, etc
         */
        public function get_tokenized_payment_methods($customer_id);
        /**
         * Returns true if this API supports a "get tokenized payment methods"
         * request.  If this method returns true, then get_tokenized_payment_methods()
         * is considered safe to call.
         *
         * @since 3.0.0
         * @see Payment_Gateway_API::get_tokenized_payment_methods()
         *
         * @return boolean true if this API supports a "get tokenized payment methods" request, false otherwise
         */
        public function supports_get_tokenized_payment_methods();
        /**
         * Returns the most recent request object
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\Api\API_Request the most recent request object
         */
        public function get_request();
        /**
         * Returns the most recent response object
         *
         * @since 3.0.0
         *
         * @return Payment_Gateway_API_Response the most recent response object
         */
        public function get_response();
        /**
         * Returns the WC_Order object associated with the request, if any
         *
         * @since 3.0.0
         *
         * @return \WC_Order
         */
        public function get_order();
    }
    /**
     * WooCommerce Direct Payment Gateway API Authorization Response
     *
     * Represents a Payment Gateway Credit Card Authorization response.  This should
     * also be used as the parent class for credit card charge (authorization +
     * capture) responses.
     */
    interface Payment_Gateway_API_Authorization_Response extends \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response
    {
        /**
         * The authorization code is returned from the credit card processor to
         * indicate that the charge will be paid by the card issuer.
         *
         * @since 3.0.0
         *
         * @return string credit card authorization code
         */
        public function get_authorization_code();
        /**
         * Returns the result of the AVS check.
         *
         * @since 3.0.0
         *
         * @return string|void result of the AVS check, if any
         */
        public function get_avs_result();
        /**
         * Returns the result of the CSC check.
         *
         * @since 3.0.0
         *
         * @return string|void result of CSC check
         */
        public function get_csc_result();
        /**
         * Returns true if the CSC check was successful.
         *
         * @since 3.0.0
         *
         * @return boolean|void true if the CSC check was successful
         */
        public function csc_match();
    }
    /**
     * WooCommerce Direct Payment Gateway API Create Payment Token Response
     */
    interface Payment_Gateway_API_Create_Payment_Token_Response extends \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response
    {
        /**
         * Returns the payment token.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\PaymentTokens\Payment_Gateway_Payment_Token payment token
         */
        public function get_payment_token();
    }
    /**
     * WooCommerce Direct Payment Gateway API Customer Response
     */
    interface Payment_Gateway_API_Customer_Response extends \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response
    {
        /**
         * Returns the customer ID.
         *
         * @since 3.0.0
         *
         * @return string customer ID returned by the gateway
         */
        public function get_customer_id();
    }
    /**
     * WooCommerce Direct Payment Gateway API Create Payment Token Response
     */
    interface Payment_Gateway_API_Get_Tokenized_Payment_Methods_Response extends \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response
    {
        /**
         * Returns any payment tokens.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\PaymentTokens\Payment_Gateway_Payment_Token[] array of Payment_Gateway_Payment_Token payment tokens, keyed by the token ID
         */
        public function get_payment_tokens();
    }
    /**
     * WooCommerce Payment Gateway API Response Message Helper
     *
     * This utility class is meant to provide a standard set of error messages to be
     * displayed to the customer during checkout.
     *
     * @since 3.0.0
     */
    class Payment_Gateway_API_Response_Message_Helper
    {
        /**
         * Returns a message appropriate for a frontend user.  This should be used
         * to provide enough information to a user to allow them to resolve an
         * issue on their own, but not enough to help nefarious folks fishing for
         * info.
         *
         * @since 3.0.0
         * @param string $message_id identifies the message to return
         * @return string a user message
         */
        public function get_user_message($message_id)
        {
        }
    }
}
namespace WooCommerce\Square\Framework\PaymentGateway\ApplePay\Api {
    /**
     * Sets up the Apple Pay API.
     *
     * @since 3.0.0
     */
    class Payment_Gateway_Apple_Pay_API extends \WooCommerce\Square\Framework\Api\Base
    {
        /** @var \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway the gateway instance */
        protected $gateway;
        /**
         * Constructs the class.
         *
         * @since 3.0.0
         *
         * @param SquareFramework\PaymentGateway\Payment_Gateway the gateway instance
         */
        public function __construct(\WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway $gateway)
        {
        }
        /**
         * Validates the Apple Pay merchant.
         *
         * @since 3.0.0
         *
         * @param string $url the validation URL
         * @param string $merchant_id the merchant ID to validate
         * @param string $domain_name the verified domain name
         * @param string $display_name the merchant display name
         * @return Payment_Gateway_Apple_Pay_API_Response the response object
         * @throws \Exception
         */
        public function validate_merchant($url, $merchant_id, $domain_name, $display_name)
        {
        }
        /**
         * Performs the request and return the parsed response.
         *
         * @since 3.0.0
         *
         * @param SquareFramework\Api\API_Request|object
         * @return \WooCommerce\Square\Framework\Api\API_Response|object
         * @throws \Exception
         */
        protected function perform_request($request)
        {
        }
        /**
         * Sets the PEM file required for authentication.
         *
         * @internal
         *
         * @since 3.0.0
         *
         * @param resource $curl_handle
         */
        public function set_cert_file($curl_handle)
        {
        }
        /** Validation methods ****************************************************/
        /**
         * Validates the post-parsed response.
         *
         * @since 3.0.0
         *
         * @return bool
         *
         * @throws \Exception
         */
        protected function do_post_parse_response_validation()
        {
        }
        /** Helper methods ********************************************************/
        /**
         * Gets a new request object.
         *
         * @since 3.0.0
         *
         * @param array $type Optional. The desired request type
         * @return Payment_Gateway_Apple_Pay_API_Request the request object
         */
        protected function get_new_request($type = array())
        {
        }
        /**
         * Gets the gateway instance.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway
         */
        protected function get_gateway()
        {
        }
        /**
         * Gets the plugin instance.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway_Plugin
         */
        protected function get_plugin()
        {
        }
    }
    /**
     * The Apple Pay API request object.
     *
     * @since 3.0.0
     */
    class Payment_Gateway_Apple_Pay_API_Request extends \WooCommerce\Square\Framework\Api\API_JSON_Request
    {
        /** @var \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway $gateway the gateway instance */
        protected $gateway;
        /**
         * Constructs the request.
         *
         * @since 3.0.0
         *
         * @param \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway $gateway the gateway instance
         */
        public function __construct(\WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway $gateway)
        {
        }
        /**
         * Sets the data for merchant validation.
         *
         * @since 3.0.0
         *
         * @param string $merchant_id the merchant ID to validate
         * @param string $domain_name the verified domain name
         * @param string $display_name the merchant display name
         */
        public function set_merchant_data($merchant_id, $domain_name, $display_name)
        {
        }
        /**
         * Get the string representation of this response with any and all sensitive
         * elements masked or removed.
         *
         * @since 3.0.0
         * @see API_Response::to_string_safe()
         *
         * @return string
         */
        public function to_string_safe()
        {
        }
    }
    /**
     * The Apple Pay API response object.
     *
     * @since 3.0.0
     */
    class Payment_Gateway_Apple_Pay_API_Response extends \WooCommerce\Square\Framework\Api\API_JSON_Response
    {
        /**
         * Gets the status code.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_status_code()
        {
        }
        /**
         * Gets the status message.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_status_message()
        {
        }
        /**
         * Gets the validated merchant session.
         *
         * @since 3.0.0
         *
         * @return string|array
         */
        public function get_merchant_session()
        {
        }
        /**
         * Get the string representation of this response with any and all sensitive
         * elements masked or removed.
         *
         * No strong indication from the Apple documentation that these _need_ to be
         * masked, but they don't provide any useful info and only make the debug
         * logs unnecessarily huge.
         *
         * @since 3.0.0
         * @see SquareFramework\Api\API_Response::to_string_safe()
         *
         * @return string
         */
        public function to_string_safe()
        {
        }
    }
    /**
     * The Apple Pay payment response object.
     *
     * @since 3.0.0
     */
    class Payment_Gateway_Apple_Pay_Payment_Response extends \WooCommerce\Square\Framework\Api\API_JSON_Response
    {
        /**
         * Gets the authorized payment data.
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_payment_data()
        {
        }
        /**
         * Gets the authorization transaction ID.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_transaction_id()
        {
        }
        /**
         * Gets the authorized card type.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_card_type()
        {
        }
        /**
         * Gets the last four digits of the authorized card.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_last_four()
        {
        }
        /**
         * Gets the billing address.
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_billing_address()
        {
        }
        /**
         * Gets the shipping address.
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_shipping_address()
        {
        }
        /**
         * Prepare an address to WC formatting.
         *
         * @since 3.0.0
         *
         * @param \stdClass|object $contact the address to prepare
         * @return array
         */
        protected function prepare_address($contact)
        {
        }
        /**
         * Get the string representation of this response with any and all sensitive
         * elements masked or removed.
         *
         * No strong indication from the Apple documentation that these _need_ to be
         * masked, but they don't provide any useful info and only make the debug
         * logs unnecessarily huge.
         *
         * @since 3.0.0
         *
         * @see WooCommerce\Square\Framework\Api\API_Response::to_string_safe()
         *
         * @return string
         */
        public function to_string_safe()
        {
        }
    }
}
namespace WooCommerce\Square\Framework\PaymentGateway\ApplePay {
    /**
     * Sets up Apple Pay support.
     *
     * @since 3.0.0
     */
    class Payment_Gateway_Apple_Pay
    {
        /** @var Payment_Gateway_Apple_Pay_Admin the admin instance */
        protected $admin;
        /** @var Payment_Gateway_Apple_Pay_Frontend the frontend instance */
        protected $frontend;
        /** @var Payment_Gateway_Apple_Pay_AJAX the AJAX instance */
        protected $ajax;
        /** @var \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway_Plugin the plugin instance */
        protected $plugin;
        /** @var \WooCommerce\Square\Framework\PaymentGateway\ApplePay\Api\Payment_Gateway_Apple_Pay_API the Apple Pay API */
        protected $api;
        /**
         * Constructs the class.
         *
         * @since 3.0.0
         *
         * @param \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway_Plugin $plugin the plugin instance
         */
        public function __construct(\WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway_Plugin $plugin)
        {
        }
        /**
         * Initializes the Apple Pay handlers.
         *
         * @since 3.0.0
         */
        protected function init()
        {
        }
        /**
         * Processes the payment after an Apple Pay authorization.
         *
         * This method creates a new order and calls the gateway for processing.
         *
         * @since 3.0.0
         *
         * @return array
         * @throws \Exception
         */
        public function process_payment()
        {
        }
        /**
         * Updates a customer's stored billing & shipping addresses based on the
         * Apple Pay payment response.
         *
         * @since 3.0.0
         *
         * @param int $user_id WordPress user ID
         * @param \WooCommerce\Square\Framework\PaymentGateway\ApplePay\Api\Payment_Gateway_Apple_Pay_Payment_Response $payment_response payment response object
         */
        protected function update_customer_addresses($user_id, \WooCommerce\Square\Framework\PaymentGateway\ApplePay\Api\Payment_Gateway_Apple_Pay_Payment_Response $payment_response)
        {
        }
        /**
         * Simulates a successful gateway payment response.
         *
         * This provides an easy way for merchants to test that their certificates
         * and other settings are correctly configured and communicating with Apple
         * without processing actual payments to test.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @return array
         */
        protected function process_test_payment(\WC_Order $order)
        {
        }
        /**
         * Gets a single product payment request.
         *
         * @since 3.0.0
         * @see Payment_Gateway_Apple_Pay::build_payment_request()
         *
         * @param \WC_Product $product product object
         * @param bool $in_cart whether to generate a cart for this request
         * @return array
         * @throws \Exception
         */
        public function get_product_payment_request(\WC_Product $product, $in_cart = false)
        {
        }
        /**
         * Gets a payment request based on WooCommerce cart data.
         *
         * @since 3.0.0
         * @see Payment_Gateway_Apple_Pay::build_payment_request()
         *
         * @param \WC_Cart $cart cart object
         * @return array
         * @throws \Exception
         */
        public function get_cart_payment_request(\WC_Cart $cart)
        {
        }
        /**
         * Recalculates the lines and totals for the current payment request.
         *
         * @since 3.0.0
         *
         * @return array
         * @throws \Exception
         */
        public function recalculate_totals()
        {
        }
        /**
         * Gets the line totals for a cart.
         *
         * @since 3.0.0
         * @see Payment_Gateway_Apple_Pay::build_payment_request_lines()
         *
         * @param \WC_Cart $cart cart object
         * @return array
         */
        protected function get_cart_totals(\WC_Cart $cart)
        {
        }
        /**
         * Builds a payment request for the Apple Pay JS.
         *
         * This contains all of the data necessary to complete a payment.
         *
         * @since 3.0.0
         *
         * @param float|int $amount amount to be charged by Apple Pay
         * @param array $args {
         *     Optional. The payment request args.
         *
         *     @type string $currency_code         Payment currency code. Defaults to the shop currency.
         *     @type string $country_code          Payment country code. Defaults to the shop base country.
         *     @type string $merchant_name         Merchant name. Defaults to the shop name.
         *     @type array  $merchant_capabilities merchant capabilities
         *     @type array  $supported_networks    supported networks or card types
         *     @type bool   $needs_shipping        whether the payment needs shipping
         *     @type array  $line_totals           request line totals. @see \Payment_Gateway_Apple_Pay::build_payment_request_lines()
         * }
         *
         * @return array
         */
        public function build_payment_request($amount, $args = array())
        {
        }
        /**
         * Builds payment request lines for the Apple Pay JS.
         *
         * Apple guidelines prefer that the "lines" displayed on the Apple Pay card
         * should be overall order totals, instead of listing actual product lines.
         * This method standardizes the main breakdowns which are:
         * + Subtotal
         * + Discounts (represented as a single negative amount)
         * + Shipping
         * + Fees
         * + Taxes
         *
         * @since 3.0.0
         *
         * @param array $totals {
         *     Payment line totals.
         *
         *     @type float $subtotal items subtotal
         *     @type float $discount discounts total
         *     @type float $shipping shipping total
         *     @type float $fees     fees total
         *     @type float $taxes    tax total
         * }
         * @return array
         */
        public function build_payment_request_lines($totals)
        {
        }
        /**
         * Formats a total price for use with Apple Pay JS.
         *
         * @since 3.0.0
         *
         * @param string|float $price the price to format
         * @return string
         */
        protected function format_price($price)
        {
        }
        /**
         * Gets the stored payment request data.
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_stored_payment_request()
        {
        }
        /**
         * Gets the stored payment response data.
         *
         * @since 3.0.0
         *
         * @return false|\WooCommerce\Square\Framework\PaymentGateway\ApplePay\Api\Payment_Gateway_Apple_Pay_Payment_Response|false
         */
        public function get_stored_payment_response()
        {
        }
        /**
         * Stores payment request data for later use.
         *
         * @since 3.0.0
         *
         * @param mixed|array $data
         */
        public function store_payment_request($data)
        {
        }
        /**
         * Stores payment response data for later use.
         *
         * @since 3.0.0
         *
         * @param mixed|array $data
         */
        public function store_payment_response($data)
        {
        }
        /**
         * Clears all payment request & response data from the session.
         *
         * @since 3.0.0
         */
        public function clear_payment_data()
        {
        }
        /**
         * Filters and sets the customer's taxable address.
         *
         * This is necessary because Apple Pay doesn't ever provide a billing
         * address until after payment is complete. If the shop is set to calculate
         * tax based on the billing address, we need to use the shipping address
         * to at least get some rates for new customers.
         *
         * @internal
         *
         * @since 3.0.0
         *
         * @param array $address taxable address
         * @return array
         */
        public function set_customer_taxable_address($address)
        {
        }
        /**
         * Allows the processing gateway to add Apple Pay details to the payment data.
         *
         * @internal
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order the order object
         * @return \WC_Order
         */
        public function add_order_data($order)
        {
        }
        /**
         * Gets the Apple Pay API.
         *
         * @since 3.0.0
         *
         * @return Payment_Gateway_Apple_Pay_API
         */
        public function get_api()
        {
        }
        /**
         * Adds a log entry to the gateway's debug log.
         *
         * @since 3.0.0
         *
         * @param string $message the log message to add
         */
        public function log($message)
        {
        }
        /**
         * Determines if Apple Pay is available.
         *
         * This does not indicate browser support or a user's ability, but rather
         * that Apple Pay is properly configured and ready to be initiated by the
         * Apple Pay JS.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function is_available()
        {
        }
        /**
         * Determines if Apple Pay settings are properly configured.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function is_configured()
        {
        }
        /**
         * Determines if the certification path is set and valid.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function is_cert_configured()
        {
        }
        /**
         * Determines if Apple Pay is enabled.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function is_enabled()
        {
        }
        /**
         * Determines if test mode is enabled.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function is_test_mode()
        {
        }
        /**
         * Gets the configured Apple merchant ID.
         *
         * @since 3.0.0
         * @return string
         */
        public function get_merchant_id()
        {
        }
        /**
         * Gets the certificate file path.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_cert_path()
        {
        }
        /**
         * Gets the currencies accepted by the gateway's Apple Pay integration.
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_accepted_currencies()
        {
        }
        /**
         * Gets the gateway's Apple Pay capabilities.
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_capabilities()
        {
        }
        /**
         * Gets the supported networks for Apple Pay.
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_supported_networks()
        {
        }
        /**
         * Gets the gateways that declare Apple Pay support.
         *
         * @since 3.0.0
         *
         * @return array the supporting gateways as `$gateway_id => Payment_Gateway`
         */
        public function get_supporting_gateways()
        {
        }
        /**
         * Gets the gateway set to process Apple Pay transactions.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway|null
         */
        public function get_processing_gateway()
        {
        }
        /**
         * Gets the Apple Pay button style.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_button_style()
        {
        }
        /**
         * Gets the gateway plugin instance.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway_Plugin
         */
        public function get_plugin()
        {
        }
    }
    /**
     * Sets up the Apple Pay settings screen.
     *
     * @since 3.0.0
     */
    class Payment_Gateway_Apple_Pay_Admin
    {
        /** @var Payment_Gateway_Apple_Pay the Apple Pay handler instance */
        protected $handler;
        /**
         * Construct the class.
         *
         * @since 3.0.0
         *
         * @param Payment_Gateway_Apple_Pay $handler main Apple Pay handler instance
         */
        public function __construct($handler)
        {
        }
        /**
         * Adds Apple Pay to the checkout settings sections.
         *
         * @internal
         *
         * @since 3.0.0
         *
         * @param array $sections the existing sections
         * @return array
         */
        public function add_settings_section($sections)
        {
        }
        /**
         * Gets all of the combined settings.
         *
         * @since 3.0.0
         *
         * @return array $settings The combined settings.
         */
        public function get_settings()
        {
        }
        /**
         * Outputs the settings fields.
         *
         * @internal
         *
         * @since 3.0.0
         */
        public function add_settings()
        {
        }
        /**
         * Saves the settings.
         *
         * @internal
         *
         * @since 3.0.0
         *
         * @global string $current_section The current settings section.
         */
        public function save_settings()
        {
        }
        /**
         * Renders a static setting.
         *
         * This "setting" just displays simple text instead of a <select> with only
         * one option.
         *
         * @since 3.0.0
         *
         * @param array $setting
         */
        public function render_static_setting($setting)
        {
        }
        /**
         * Adds admin notices for configuration options that need attention.
         *
         * @since 3.0.0
         */
        public function add_admin_notices()
        {
        }
        /**
         * Determines if the user is currently on the settings screen.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        protected function is_settings_screen()
        {
        }
        /**
         * Gets the available display location options.
         *
         * @since 3.0.0
         *
         * @return array
         */
        protected function get_display_location_options()
        {
        }
        /**
         * Gets the available gateway options.
         *
         * @since 3.0.0
         *
         * @return array
         */
        protected function get_gateway_options()
        {
        }
    }
    /**
     * The Apple Pay AJAX handler.
     *
     * @since 3.0.0
     */
    class Payment_Gateway_Apple_Pay_AJAX
    {
        /** @var Payment_Gateway_Apple_Pay $handler the Apple Pay handler instance */
        protected $handler;
        /**
         * Constructs the class.
         *
         * @since 3.0.0
         *
         * @param Payment_Gateway_Apple_Pay $handler the Apple Pay handler instance
         */
        public function __construct(\WooCommerce\Square\Framework\PaymentGateway\ApplePay\Payment_Gateway_Apple_Pay $handler)
        {
        }
        /**
         * Gets a payment request for the specified type.
         *
         * @internal
         *
         * @since 3.0.0
         */
        public function get_payment_request()
        {
        }
        /**
         * Validates the merchant.
         *
         * @internal
         *
         * @since 3.0.0
         */
        public function validate_merchant()
        {
        }
        /**
         * Recalculates the totals for the current payment request.
         *
         * @internal
         *
         * @since 3.0.0
         */
        public function recalculate_totals()
        {
        }
        /**
         * Processes the payment after the Apple Pay authorization.
         *
         * @internal
         *
         * @since 3.0.0
         */
        public function process_payment()
        {
        }
        /**
         * Gets the Apple Pay handler instance.
         *
         * @since 3.0.0
         *
         * @return Payment_Gateway_Apple_Pay
         */
        protected function get_handler()
        {
        }
    }
    /**
     * Sets up the Apple Pay front-end functionality.
     *
     * @since 3.0.0
     */
    class Payment_Gateway_Apple_Pay_Frontend
    {
        /** @var \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway_Plugin $plugin the gateway plugin instance */
        protected $plugin;
        /** @var Payment_Gateway_Apple_Pay $handler the Apple Pay handler instance */
        protected $handler;
        /** @var \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway $gateway the gateway instance */
        protected $gateway;
        /**
         * Constructs the class.
         *
         * @since 3.0.0
         *
         * @param \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway_Plugin $plugin the gateway plugin instance
         * @param Payment_Gateway_Apple_Pay $handler the Apple Pay handler instance
         */
        public function __construct(\WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway_Plugin $plugin, \WooCommerce\Square\Framework\PaymentGateway\ApplePay\Payment_Gateway_Apple_Pay $handler)
        {
        }
        /**
         * Initializes the scripts and hooks.
         *
         * @since 3.0.0
         */
        public function init()
        {
        }
        /**
         * Gets the configured display locations.
         *
         * @since 3.0.0
         *
         * @return array
         */
        protected function get_display_locations()
        {
        }
        /**
         * Enqueues the scripts.
         *
         * @since 3.0.0
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Renders an Apple Pay button.
         *
         * @since 3.0.0
         */
        public function render_button()
        {
        }
        /**
         * Initializes Apple Pay on the single product page.
         *
         * @since 3.0.0
         */
        public function init_product()
        {
        }
        /** Cart functionality ****************************************************/
        /**
         * Initializes Apple Pay on the cart page.
         *
         * @since 3.0.0
         */
        public function init_cart()
        {
        }
        /** Checkout functionality ************************************************/
        /**
         * Initializes Apple Pay on the checkout page.
         *
         * @since 3.0.0
         */
        public function init_checkout()
        {
        }
        /**
         * Renders the Apple Pay button for checkout.
         *
         * @since 3.0.0
         */
        public function render_checkout_button()
        {
        }
        /**
         * Gets the gateway instance.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway
         */
        protected function get_gateway()
        {
        }
        /**
         * Gets the gateway plugin instance.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway_Plugin
         */
        protected function get_plugin()
        {
        }
        /**
         * Gets the Apple Pay handler instance.
         *
         * @since 3.0.0
         *
         * @return Payment_Gateway_Apple_Pay
         */
        protected function get_handler()
        {
        }
    }
    /**
     * The Apple Pay order handler.
     *
     * @since 3.0.0
     */
    class Payment_Gateway_Apple_Pay_Orders
    {
        /**
         * Creates an order from a cart.
         *
         * @since 3.0.0
         *
         * @param \WC_Cart $cart cart object
         * @return \WC_Order|void
         * @throws \Exception
         * @throws \Exception
         */
        public static function create_order(\WC_Cart $cart)
        {
        }
        /**
         * Gets an order object for payment.
         *
         * @since 3.0.0
         *
         * @param array $order_data the order data
         * @return \WC_Order
         * @throws \Exception
         */
        public static function get_order_object($order_data)
        {
        }
    }
}
namespace WooCommerce\Square\Framework\PaymentGateway\Handlers {
    /**
     * The transaction capture handler.
     *
     * @since 3.0.0
     */
    class Capture
    {
        /** @var \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway payment gateway instance */
        private $gateway;
        /**
         * Capture constructor.
         *
         * @since 3.0.0
         *
         * @param \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway $gateway payment gateway instance
         */
        public function __construct(\WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway $gateway)
        {
        }
        /**
         * Captures an order on status change to a "paid" status.
         *
         * @internal
         *
         * @since 3.0.0
         *
         * @param int $order_id order ID
         * @param string $old_status status being changed
         * @param string $new_status new order status
         */
        public function maybe_capture_paid_order($order_id, $old_status, $new_status)
        {
        }
        /**
         * Perform a capture on an order if it can be captured.
         *
         * This acts as a wrapper for when the process should just bail without logging any errors or order notes, like when
         * performing capture via bulk action.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @param float|null $amount amount to capture
         * @return bool
         */
        public function maybe_perform_capture(\WC_Order $order, $amount = null)
        {
        }
        /**
         * Performs a credit card capture for an order.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order WooCommerce order object
         * @param float|null $amount amount to capture
         * @return array {
         *     Capture transaction results
         *
         *     @type bool   $success whether the capture was successful
         *     @type int    $code    result code
         *     @type string $message result message
         * }
         */
        public function perform_capture(\WC_Order $order, $amount = null)
        {
        }
        /**
         * Adds the standard capture data to an order.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order the order object
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response transaction response
         */
        public function do_capture_success(\WC_Order $order, \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response)
        {
        }
        /**
         * Lets gateways handle any specific capture failure results for the order.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order WooCommerce order object
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response API response object
         */
        public function do_capture_failed(\WC_Order $order, \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response)
        {
        }
        /** Conditional Methods *******************************************************************************************/
        /**
         * Determines if an order is eligible for capture.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @return bool
         */
        public function order_can_be_captured(\WC_Order $order)
        {
        }
        /**
         * Determines if an order is ready for capture.
         *
         * The base implementation of this method checks for a valid order status and that a transaction ID is set.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @return bool
         */
        public function is_order_ready_for_capture(\WC_Order $order)
        {
        }
        /**
         * Determines if an order has been fully captured
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order
         * @return bool
         */
        public function is_order_fully_captured(\WC_Order $order)
        {
        }
        /**
         * Determines if an order's authorization has expired.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order
         * @return bool
         */
        public function has_order_authorization_expired(\WC_Order $order)
        {
        }
        /**
         * Determines if an order's authorization has been captured, even partially.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @return bool
         */
        public function is_order_captured(\WC_Order $order)
        {
        }
        /** Getter Methods ************************************************************************************************/
        /**
         * Gets the maximum amount that can be captured from an order.
         *
         * Gateways can override this for an value above or below the order total.
         * For instance, some processors allow capturing an amount a certain
         * percentage higher than the payment total.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order WooCommerce order object
         * @return float
         */
        public function get_order_capture_maximum(\WC_Order $order)
        {
        }
        /**
         * Gets the amount originally authorized for an order.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @return float
         */
        public function get_order_authorization_amount(\WC_Order $order)
        {
        }
        /**
         * Gets the payment gateway instance.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway
         */
        protected function get_gateway()
        {
        }
    }
}
namespace WooCommerce\Square\Framework\PaymentGateway\Integrations {
    /**
     * Abstract Integration
     *
     * @since 3.0.0
     */
    abstract class Payment_Gateway_Integration
    {
        /** @var \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway direct gateway instance */
        protected $gateway;
        /**
         * Bootstraps the class.
         *
         * @since 3.0.0
         *
         * @param \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway $gateway direct gateway instance
         */
        public function __construct(\WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway $gateway)
        {
        }
        /**
         * Return the gateway for the integration
         *
         * @since 3.0.0
         * @return \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway
         */
        public function get_gateway()
        {
        }
    }
    /**
     * Pre-Orders Integration
     *
     * @since 3.0.0
     */
    class Payment_Gateway_Integration_Pre_Orders extends \WooCommerce\Square\Framework\PaymentGateway\Integrations\Payment_Gateway_Integration
    {
        /**
         * Bootstrap class
         *
         * @since 3.0.0
         *
         * @param \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway|Payment_Gateway_Direct $gateway gateway object
         */
        public function __construct(\WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway $gateway)
        {
        }
        /**
         * Adds support for pre-orders by hooking in some necessary actions
         *
         * @since 3.0.0
         */
        public function add_support()
        {
        }
        /**
         * Force tokenization for pre-orders
         *
         * @since 3.0.0
         * @see Payment_Gateway::tokenization_forced()
         * @param boolean $force_tokenization whether tokenization should be forced
         * @return boolean true if tokenization should be forced, false otherwise
         */
        public function maybe_force_tokenization($force_tokenization)
        {
        }
        /**
         * Adds pre-orders data to the order object.
         *
         * Filtered onto Payment_Gateway::get_order()
         *
         * @see Payment_Gateway::get_order()
         *
         * @since 3.0.0
         *
         * @param \WC_Order|\WooCommerce\Square\WC_Order_Square $order the order
         * @return \WC_Order
         */
        public function get_order($order)
        {
        }
        /**
         * Handle the pre-order initial payment/tokenization, or defer back to the normal payment
         * processing flow
         *
         * @since 3.0.0
         * @see Payment_Gateway::process_payment()
         * @param boolean $result the result of this pre-order payment process
         * @param int $order_id the order identifier
         * @return true|array true to process this payment as a regular transaction, otherwise
         *         return an array containing keys 'result' and 'redirect'
         */
        public function process_payment($result, $order_id)
        {
        }
        /**
         * Completes a pre-order payment by marking the order as Pre-Ordered.
         *
         * @internal
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         */
        public function complete_payment($order)
        {
        }
        /**
         * Processes a pre-order payment when the pre-order is released.
         *
         * @since 3.0.0
         *
         * @param \WC_Order|\WooCommerce\Square\WC_Order_Square $order original order containing the pre-order
         * @throws \Exception
         */
        public function process_release_payment($order)
        {
        }
    }
    /**
     * Subscriptions Integration
     *
     * @since 3.0.0
     */
    class Payment_Gateway_Integration_Subscriptions extends \WooCommerce\Square\Framework\PaymentGateway\Integrations\Payment_Gateway_Integration
    {
        /** @var string|float renewal payment total for Subs 2.0.x renewals */
        protected $renewal_payment_total;
        /**
         * Bootstraps the class.
         *
         * @since 3.0.0
         *
         * @param \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway|Payment_Gateway_Direct $gateway
         */
        public function __construct(\WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway $gateway)
        {
        }
        /**
         * Adds support for subscriptions by hooking in some necessary actions
         *
         * @since 3.0.0
         */
        public function add_support()
        {
        }
        /**
         * Force tokenization for subscriptions, this can be forced either during checkout
         * or when the payment method for a subscription is being changed
         *
         * @since 3.0.0
         * @see Payment_Gateway::tokenization_forced()
         * @param bool $force_tokenization whether tokenization should be forced
         * @return bool true if tokenization should be forced, false otherwise
         */
        public function maybe_force_tokenization($force_tokenization)
        {
        }
        /**
         * Save payment meta to the Subscription object after a successful transaction,
         * this is primarily used for the payment token and customer ID which are then
         * copied over to a renewal order prior to payment processing.
         *
         * @since 3.0.0
         * @param \WC_Order $order order
         */
        public function save_payment_meta($order)
        {
        }
        /**
         * Process a subscription renewal payment
         *
         * @since 3.0.0
         * @param float     $amount_to_charge subscription amount to charge, could include multiple renewals if they've previously failed and the admin has enabled it
         * @param \WC_Order $order original order containing the subscription
         */
        public function process_renewal_payment($amount_to_charge, $order)
        {
        }
        /**
         * Adds subscriptions data to the order object, currently:
         *
         * + renewal order specific description
         * + renewal payment total
         * + token and associated data (last four, type, etc)
         *
         * @since 3.0.0
         * @see Payment_Gateway_Direct::get_order()
         * @param \WC_Order|\WooCommerce\Square\WC_Order_Square $order renewal order
         * @return \WC_Order renewal order with payment token data set
         */
        public function get_order($order)
        {
        }
        /**
         * Don't copy order-specific meta to renewal orders from the WC_Subscription
         * object. Generally the subscription object should not have any order-specific
         * meta (aside from `payment_token` and `customer_id`) as they are not
         * copied during the upgrade (see do_not_copy_order_meta_during_upgrade()), so
         * this method is more of a fallback in case meta accidentally is copied.
         *
         * @since 3.0.0
         * @param array $order_meta order meta to copy
         * @return array
         */
        public function do_not_copy_order_meta($order_meta)
        {
        }
        /**
         * Don't copy order-specific meta to the new WC_Subscription object during
         * upgrade to 2.0.x. This only allows the `payment_token` and `customer_id`
         * meta to be copied.
         *
         * @since 3.0.0
         * @param array $order_meta order meta to copy
         * @return array
         */
        public function do_not_copy_order_meta_during_upgrade($order_meta)
        {
        }
        /**
         * Processes a Change Payment transaction.
         *
         * This hooks in before standard payment processing to simply add or create
         * token data and avoid certain failure conditions affecting the subscription
         * object.
         *
         * @internal
         *
         * @since 3.0.0
         *
         * @param bool|array             $result result from any others filtering this
         * @param int                    $order_id an order or subscription ID
         * @param Payment_Gateway_Direct $gateway gateway object
         * @return array $result change payment result
         */
        public function process_change_payment($result, $order_id, $gateway)
        {
        }
        /**
         * Remove order meta (like trans ID) that's added to a Subscription object
         * during the change payment method flow, which uses WC_Payment_Gateway::process_payment(),
         * thus some order-specific meta is added that is undesirable to have copied
         * over to renewal orders.
         *
         * @since 3.0.0
         * @param array            $result process_payment() result, unused
         * @param \WC_Subscription $subscription subscription object
         * @return array
         */
        public function remove_order_meta_from_change_payment($result, $subscription)
        {
        }
        /**
         * Update the payment token and optional customer ID for a subscription after a customer
         * uses this gateway to successfully complete the payment for an automatic
         * renewal payment which had previously failed.
         *
         * @since 3.0.0
         * @param \WC_Subscription $subscription subscription being updated
         * @param \WC_Order        $renewal_order order which recorded the successful payment (to make up for the failed automatic payment).
         */
        public function update_failing_payment_method($subscription, $renewal_order)
        {
        }
        /**
         * Get the order-specific meta keys that should not be copied to the WC_Subscription
         * object during upgrade to 2.0.x or during change payment method actions
         *
         * @since 3.0.0
         * @return array
         */
        protected function get_order_specific_meta_keys()
        {
        }
        /**
         * Render the payment method used for a subscription in the "My Subscriptions" table
         *
         * @since 3.0.0
         * @param string           $payment_method_to_display the default payment method text to display
         * @param \WC_Subscription $subscription
         * @return string the subscription payment method
         */
        public function maybe_render_payment_method($payment_method_to_display, $subscription)
        {
        }
        /**
         * Add a subscriptions header to the My Payment Methods table.
         *
         * @since 3.0.0
         * @param array                               $headers the table headers
         * @param \Payment_Gateway_My_Payment_Methods $handler the my payment methods instance
         * @return array
         */
        public function add_my_payment_methods_table_header($headers, $handler)
        {
        }
        /**
         * Add a subscriptions header to the My Payment Methods table.
         *
         * @since 3.0.0
         * @param array                               $method the table row data
         * @param \Payment_Gateway_Payment_Token      $token the payment token
         * @param \Payment_Gateway_My_Payment_Methods $handler the my payment methods instance
         * @return array
         */
        public function add_my_payment_methods_table_body_row_data($method, $token, $handler)
        {
        }
        /**
         * Disables the "Delete" My Payment Methods method action button if there is an associated subscription.
         *
         * @since 3.0.0
         *
         * @param array                              $actions the token actions
         * @param \WooCommerce\Square\Framework\PaymentGateway\PaymentTokens\Payment_Gateway_Payment_Token      $token the token object
         * @param Payment_Gateway_My_Payment_Methods $handler the my payment methods instance
         * @return array
         */
        public function disable_my_payment_methods_table_method_delete($actions, $token, $handler)
        {
        }
        /**
         * Gets the subscriptions tied to a user payment token.
         *
         * @since 3.0.0
         *
         * @param int                           $user_id the user
         * @param \WooCommerce\Square\Framework\PaymentGateway\PaymentTokens\Payment_Gateway_Payment_Token $token the token object
         * @return array the subscriptions or an empty array
         */
        protected function get_payment_token_subscriptions($user_id, $token)
        {
        }
        /**
         * Include the payment meta data required to process automatic recurring
         * payments so that store managers can manually set up automatic recurring
         * payments for a customer via the Edit Subscriptions screen in 2.0.x
         *
         * @since 3.0.0
         * @param array            $meta associative array of meta data required for automatic payments
         * @param \WC_Subscription $subscription subscription object
         * @return array
         */
        public function admin_add_payment_meta($meta, $subscription)
        {
        }
        /**
         * Validate the payment meta data required to process automatic recurring
         * payments so that store managers can manually set up automatic recurring
         * payments for a customer via the Edit Subscriptions screen in 2.0.x
         *
         * @since 3.0.0
         *
         * @param array $meta associative array of meta data required for automatic payments
         * @throws \Exception if payment token or customer ID is missing or blank
         */
        public function admin_validate_payment_meta($meta)
        {
        }
        /**
         * Provides customer ID and token of user through ajax call.
         */
        public function provide_user_token_and_id()
        {
        }
    }
}
namespace WooCommerce\Square\Framework\PaymentGateway\PaymentTokens {
    /**
     * WooCommerce Payment Gateway Token
     *
     * Represents a credit card or check payment token
     */
    class Payment_Gateway_Payment_Token
    {
        /** @var string payment gateway token ID */
        protected $id;
        /**
         * @var array associated token data
         */
        protected $data;
        /**
         * @var string payment type image url
         */
        protected $img_url;
        /**
         * Initialize a payment token with associated $data which is expected to
         * have the following members:
         *
         * default      - boolean optional indicates this is the default payment token
         * type         - string one of 'credit_card' or 'echeck' ('check' for backwards compatibility)
         * last_four    - string last four digits of account number
         * card_type    - string credit card type: visa, mc, amex, disc, diners, jcb, etc (credit card only)
         * exp_month    - string optional expiration month MM (credit card only)
         * exp_year     - string optional expiration year YYYY (credit card only)
         * account_type - string one of 'checking' or 'savings' (checking gateway only)
         *
         * @since 3.0.0
         * @param string $id the payment gateway token ID
         * @param array $data associated data
         */
        public function __construct($id, $data)
        {
        }
        /**
         * Returns the payment token string
         *
         * @since 3.0.0
         * @return string payment token string
         */
        public function get_id()
        {
        }
        /**
         * Returns true if this payment token is default
         *
         * @since 3.0.0
         * @return boolean true if this payment token is default
         */
        public function is_default()
        {
        }
        /**
         * Makes this payment token the default or a non-default one
         *
         * @since 3.0.0
         * @param boolean $default true or false
         */
        public function set_default($default)
        {
        }
        /**
         * Returns true if this payment token represents a credit card
         *
         * @since 3.0.0
         * @return boolean true if this payment token represents a credit card
         */
        public function is_credit_card()
        {
        }
        /**
         * Returns the payment type, one of 'credit_card' or 'echeck'
         *
         * @since 3.0.0
         * @return string the payment type
         */
        public function get_type()
        {
        }
        /**
         * Returns the card type ie visa, mc, amex, disc, diners, jcb, etc
         *
         * Credit card gateway only
         *
         * @since 3.0.0
         * @return string the payment type
         */
        public function get_card_type()
        {
        }
        /**
         * Returns the bank account type, one of 'checking' or 'savings'
         *
         * eCheck gateway only
         *
         * @since 3.0.0
         * @return string the payment type
         */
        public function get_account_type()
        {
        }
        /**
         * Set the account type
         *
         * eCheck gateway only
         *
         * @since 3.0.0
         * @param string $account_type
         */
        public function set_account_type($account_type)
        {
        }
        /**
         * Returns the full payment type, ie Visa, MasterCard, American Express,
         * Discover, Diners, JCB, eCheck, etc
         *
         * @since 3.0.0
         * @return string the payment type
         */
        public function get_type_full()
        {
        }
        /**
         * Returns the last four digits of the credit card or check account number
         *
         * @since 3.0.0
         * @return string last four of account
         */
        public function get_last_four()
        {
        }
        /**
         * Set the account last four
         *
         * @since 3.0.0
         * @param string $last_four
         */
        public function set_last_four($last_four)
        {
        }
        /**
         * Returns the expiration month of the credit card.  This should only be
         * called for credit card tokens
         *
         * @since 3.0.0
         * @return string expiration month as a two-digit number
         */
        public function get_exp_month()
        {
        }
        /**
         * Set the expiration month
         *
         * @since 3.0.0
         * @param string $month
         */
        public function set_exp_month($month)
        {
        }
        /**
         * Returns the expiration year of the credit card.  This should only be
         * called for credit card tokens
         *
         * @since 3.0.0
         * @return string expiration year as a four-digit number
         */
        public function get_exp_year()
        {
        }
        /**
         * Set the expiration year
         *
         * @since 3.0.0
         * @param string $year
         */
        public function set_exp_year($year)
        {
        }
        /**
         * Returns the expiration date in the format MM/YY, suitable for use
         * in order notes or other customer-facing areas
         *
         * @since 3.0.0
         * @return string formatted expiration date
         */
        public function get_exp_date()
        {
        }
        /**
         * Set the full image URL based on the token payment type.  Note that this
         * is available for convenience during a single request and will not be
         * included in persistent storage
         *
         * @see Payment_Gateway_Payment_Token::get_image_url()
         * @since 3.0.0
         * @param string $url the full image URL
         */
        public function set_image_url($url)
        {
        }
        /**
         * Get the full image URL based on teh token payment type.
         *
         * @see Payment_Gateway_Payment_Token::set_image_url()
         * @since 3.0.0
         * @return string the full image URL
         */
        public function get_image_url()
        {
        }
        /**
         * Gets the payment method nickname.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_nickname()
        {
        }
        /**
         * Sets the payment method nickname.
         *
         * @since 3.0.0
         *
         * @param string $value nickname value
         */
        public function set_nickname($value)
        {
        }
        /**
         * Gets the billing address hash.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_billing_hash()
        {
        }
        /**
         * Sets the billing hash.
         *
         * @since 3.0.0
         *
         * @param string $value billing hash
         */
        public function set_billing_hash($value = '')
        {
        }
        /**
         * Returns a representation of this token suitable for persisting to a
         * datastore
         *
         * @since 3.0.0
         * @return mixed datastore representation of token
         */
        public function to_datastore_format()
        {
        }
    }
    /**
     * Handle the payment tokenization related functionality.
     *
     * @since 3.0.0
     */
    class Payment_Gateway_Payment_Tokens_Handler
    {
        /** @var string the gateway environment ID */
        protected $environment_id;
        /** @var array|Payment_Gateway_Payment_Token[] array of cached user id to array of Payment_Gateway_Payment_Token token objects */
        protected $tokens;
        /** @var \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway gateway instance */
        protected $gateway;
        /**
         * Build the class.
         *
         * @since 3.0.0
         *
         * @param \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway $gateway payment gateway instance
         */
        public function __construct(\WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway $gateway)
        {
        }
        /**
         * Clear the user's cached tokens when they add a new token.
         *
         * @param int $token_id The newly created token ID.
         * @param int $user_id  The user ID.
         */
        public function clear_cache_for_new_token($token_id, $user_id)
        {
        }
        /**
         * Sets the `limit` parameter to 30 to retrieve more payment methods by not relying
         * on the `posts_per_page` setting.
         *
         * 30 was chosen as the default here as this should be high enough to account for the majority of users.
         *
         * @since 4.2.0
         *
         * @return int
         */
        public function increase_query_limit_for_payment_methods()
        {
        }
        /**
         * A factory method to build and return a payment token object for the
         * gateway.  Concrete classes can override this method to return a custom
         * payment token implementation.
         *
         * @since 3.0.0
         *
         * @param string $token payment token
         * @param array $data {
         *     Payment token data.
         *
         *     @type bool   $default   Optional. Indicates this is the default payment token
         *     @type string $type      Payment type. Either 'credit_card' or 'check'
         *     @type string $last_four Last four digits of account number
         *     @type string $card_type Credit card type (`visa`, `mc`, `amex`, `disc`, `diners`, `jcb`) or `echeck`
         *     @type string $exp_month Optional. Expiration month (credit card only)
         *     @type string $exp_year  Optional. Expiration year (credit card only)
         * }
         * @return Payment_Gateway_Payment_Token payment token
         */
        public function build_token($token, $data)
        {
        }
        /** Handle single tokens **********************************************************************/
        /**
         * Tokenizes the current payment method and adds the standard transaction
         * data to the order post record.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @param Payment_Gateway_API_Create_Payment_Token_Response|null $response payment token API response, or null if the request should be made
         * @param string $environment_id optional environment ID, defaults to the current environment
         * @return \WC_Order order object
         * @throws \Exception on transaction failure
         */
        public function create_token(\WC_Order $order, $response = null, $environment_id = null)
        {
        }
        /**
         * Adds a payment method and token as user meta.
         *
         * @since 3.0.0
         *
         * @param int $user_id user identifier
         * @param Payment_Gateway_Payment_Token $token the token
         * @param string|null $environment_id optional environment id, defaults to plugin current environment
         */
        public function add_token($user_id, $token, $environment_id = null)
        {
        }
        /**
         * Returns the payment token object identified by $token from the user
         * identified by $user_id
         *
         * @since 3.0.0
         *
         * @param int $user_id WordPress user identifier, or 0 for guest
         * @param string $token payment token
         * @param string|null $environment_id optional environment id, defaults to plugin current environment
         * @return Square_Credit_Card_Payment_Token payment token object or null
         */
        public function get_token($user_id, $token, $environment_id = null)
        {
        }
        /**
         * Updates a single token by persisting it to user meta
         *
         * @since 3.0.0
         *
         * @param int $user_id WP user ID
         * @param Payment_Gateway_Payment_Token $token token to update
         * @param string|null $environment_id optional environment ID, defaults to plugin current environment
         * @return string|int updated user meta ID
         */
        public function update_token($user_id, $token, $environment_id = null)
        {
        }
        /**
         * Deletes a credit card token from user meta
         *
         * @since 3.0.0
         *
         * @param string                    $token_id The payment token string.
         * @param \WC_Payment_Token_CC|null $token    The payment token object.
         * @return bool|int false if not deleted, updated user meta ID if deleted
         */
        public function remove_token($token_id, $token = null)
        {
        }
        /**
         * Determines if a token's local meta should be deleted based on an API response.
         *
         * @since 3.0.0
         *
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response API response object
         * @return bool
         */
        public function should_delete_token(\WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response)
        {
        }
        /**
         * Sets the default token for a user.
         *
         * This is shown as "Default Card" in the frontend and will be auto-selected during checkout.
         *
         * @since 3.0.0
         *
         * @param int $user_id user identifier
         * @param Payment_Gateway_Payment_Token|string $token the token to make default
         * @param string|null $environment_id optional environment id, defaults to plugin current environment
         * @return string|bool false if not set, updated user meta ID if set
         */
        public function set_default_token($user_id, $token, $environment_id = null)
        {
        }
        /** Handle all tokens *************************************************************************/
        /**
         * Gets the available payment tokens for a user as an associative array of
         * payment token to Payment_Gateway_Payment_Token
         *
         * @since 3.0.0
         *
         * @param int $user_id WordPress user identifier, or 0 for guest
         * @param array $args optional arguments, can include
         *      `customer_id` - if not provided, this will be looked up based on $user_id
         *      `environment_id` - defaults to plugin current environment
         * @return array|Payment_Gateway_Payment_Token[] associative array of string token to Payment_Gateway_Payment_Token object
         */
        public function get_tokens($user_id, $args = array())
        {
        }
        /**
         * Updates the given payment tokens for the identified user, in the database.
         *
         * @since 3.0.0
         *
         * @param int $user_id WP user ID
         * @param array $tokens array of tokens
         * @param string|null $environment_id optional environment id, defaults to plugin current environment
         * @return string updated user meta id
         */
        public function update_tokens($user_id, $tokens, $environment_id = null)
        {
        }
        /** Admin methods *****************************************************************************/
        /**
         * Get the admin token editor instance.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\Admin\Payment_Gateway_Admin_Payment_Token_Editor
         */
        public function get_token_editor()
        {
        }
        /** Conditional methods ***********************************************************************/
        /**
         * Determines if the identified user has the given payment token
         *
         * @since 3.0.0
         *
         * @param int $user_id WordPress user identifier, or 0 for guest
         * @param string|Payment_Gateway_Payment_Token $token payment token
         * @param string|null $environment_id optional environment id, defaults to plugin current environment
         * @return bool
         */
        public function user_has_token($user_id, $token, $environment_id = null)
        {
        }
        /**
         * Determines if the current payment method should be tokenized.
         *
         * Whether requested by customer or otherwise forced. This parameter is passed from
         * the checkout page/payment form.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function should_tokenize()
        {
        }
        /**
         * Determines if tokenization should be forced on the checkout page.
         *
         * This is most useful to force tokenization for a subscription or pre-orders initial transaction.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function tokenization_forced()
        {
        }
        /** Utility methods ***************************************************************************/
        /**
         * Merges remote token data with local tokens.
         *
         * Sometimes local tokens can provide additional detail that's not provided remotely.
         *
         * @since 3.0.0
         *
         * @param array $local_tokens local tokens
         * @param array $remote_tokens remote tokens
         * @return array associative array of string token to Payment_Gateway_Payment_Token objects
         */
        protected function merge_token_data($local_tokens, $remote_tokens)
        {
        }
        /**
         * Returns the attributes that should be used to merge local token data into
         * a remote token.
         *
         * Gateways can override this method to add their own attributes, but must
         * also include the associated get_*() & set_*() methods in the token class.
         *
         * See Authorize.net CIM for an example implementation.
         *
         * @since 3.0.0
         *
         * @return array associative array of string token to Payment_Gateway_Payment_Token objects
         */
        protected function get_merge_attributes()
        {
        }
        /**
         * Gets the payment token transient key for the given user, gateway and environment.
         *
         * Payment token transients can be disabled by using the filter below.
         *
         * @since 3.0.0
         *
         * @param string|int $user_id
         * @return string transient key
         */
        protected function get_transient_key($user_id = null)
        {
        }
        /**
         * Helper method to clear the tokens transient
         *
         * TODO: ideally the transient would make use of actions to clear itself
         * as needed (e.g. when customer IDs are updated/removed), but for now it's
         * only cleared when the tokens are updated. @MR July 2015
         *
         * @since 3.0.0
         *
         * @param int|string $user_id
         */
        public function clear_transient($user_id)
        {
        }
        /**
         * Clears all payment token transient.
         *
         * @since 3.8.3
         */
        public function clear_all_transients()
        {
        }
        /**
         * Returns the payment token user meta name for persisting the payment tokens.
         *
         * Defaults to _wc_{gateway id}_payment_tokens for the production environment,
         * and _wc_{gateway id}_payment_tokens_{environment} for any other environment.
         *
         * NOTE: the gateway id, rather than plugin id, is used by default to create
         * the meta key for this setting, because it's assumed that in the case of a
         * plugin having multiple gateways (ie credit card and eCheck) the payment
         * tokens will be distinct between them
         *
         * @since 3.0.0
         *
         * @param string|null $environment_id optional environment id, defaults to plugin current environment
         * @return string payment token user meta name
         */
        public function get_user_meta_name($environment_id = null)
        {
        }
        /**
         * Gets the order note message when a customer saves their payment method
         * to their account
         *
         * @since 3.0.0
         *
         * @param Payment_Gateway_Payment_Token $token the payment token being saved
         * @return string
         */
        protected function get_order_note($token)
        {
        }
        /**
         * Returns $tokens in a format suitable for data storage
         *
         * @since 3.0.0
         *
         * @param array $tokens array of Payment_Gateway_Payment_Token tokens
         * @return array data storage version of $tokens
         */
        protected function format_for_db($tokens)
        {
        }
        /**
         * Get the gateway environment ID.
         *
         * @since 3.0.0
         *
         * @return string
         */
        protected function get_environment_id()
        {
        }
        /**
         * Gets the gateway instance.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway gateway instance
         */
        protected function get_gateway()
        {
        }
    }
    /**
     * Square Payment Gateway Token
     *
     * Represents a credit card payment token.
     *
     * @since 3.8.0
     */
    class Square_Credit_Card_Payment_Token extends \WC_Payment_Token_CC
    {
        public function __construct($token = '')
        {
        }
        /**
         * Setter for a card's encironment.
         *
         * @param string $env Environment of the Square account.
         * @since 3.8.0
         */
        public function set_environment($env = '')
        {
        }
        /**
         * Setter for billing hash.
         *
         * @param string $value The billing hash string.
         * @since 3.8.0
         */
        public function set_billing_hash($value = '')
        {
        }
        /**
         * Setter for a card's nickname.
         *
         * @param string $value The billing hash string.
         * @since 3.8.0
         */
        public function set_nickname($value = '')
        {
        }
        /**
         * Getter for a card's environment.
         *
         * @since 3.8.0
         * @return string
         */
        public function get_environment($context = 'view')
        {
        }
        /**
         * Getter for billing hash.
         *
         * @since 3.8.0
         * @return string
         */
        public function get_billing_hash($context = 'view')
        {
        }
        /**
         * Get expiry date.
         *
         * @since 3.8.0
         * @return string
         */
        public function get_exp_date()
        {
        }
        /**
         * Getter for a card's nickname.
         *
         * @param string $value The billing hash string.
         * @since 3.8.0
         */
        public function get_nickname($context = 'view')
        {
        }
        /**
         * Retrieves array of Square Payment Tokens.
         *
         * @param WC_Payment_Token_CC[] $tokens Array of tokens
         * @since 3.8.0
         *
         * @return Square_Credit_Card_Payment_Token[];
         */
        public static function get_square_customer_tokens($tokens = array())
        {
        }
    }
}
namespace WooCommerce\Square\Framework\PaymentGateway {
    /**
     * WooCommerce Payment Gateway Framework
     *
     * @since 3.0.0
     */
    abstract class Payment_Gateway extends \WC_Payment_Gateway
    {
        /** Sends through sale and request for funds to be charged to cardholder's credit card. */
        const TRANSACTION_TYPE_CHARGE = 'charge';
        /** Sends through a request for funds to be "reserved" on the cardholder's credit card. A standard authorization is reserved for 2-5 days. Reservation times are determined by cardholder's bank. */
        const TRANSACTION_TYPE_AUTHORIZATION = 'authorization';
        /** The production environment identifier */
        const ENVIRONMENT_PRODUCTION = 'production';
        /** The test environment identifier */
        const ENVIRONMENT_TEST = 'test';
        /** Debug mode log to file */
        const DEBUG_MODE_LOG = 'log';
        /** Debug mode display on checkout */
        const DEBUG_MODE_CHECKOUT = 'checkout';
        /** Debug mode log to file and display on checkout */
        const DEBUG_MODE_BOTH = 'both';
        /** Debug mode disabled */
        const DEBUG_MODE_OFF = 'off';
        /** Debug mode log non-payment errors */
        const DEBUG_MODE_LOG_NON_PAYMENT_ERRORS = 'non-payment-save-to-log';
        /** Debug mode show payment errors on Checkout, log non-payment errors */
        const DEBUG_MODE_SHOW_PAYMENT_LOG_NON_PAYMENT = 'payment-show-and-non-payment-save-to-log';
        /** Debug mode log all errors */
        const DEBUG_MODE_LOG_ALL_ERRORS = 'all-errors-save-to-log';
        /** Credit card payment type */
        const PAYMENT_TYPE_CREDIT_CARD = 'credit-card';
        /** Credit card payment type */
        const PAYMENT_TYPE_CASH_APP_PAY = 'cash_app_pay';
        /** Credit card payment type */
        const PAYMENT_TYPE_GIFT_CARD_PAY = 'enable_gift_cards_pay';
        /** Products feature */
        const FEATURE_PRODUCTS = 'products';
        /** Credit card types feature */
        const FEATURE_CARD_TYPES = 'card_types';
        /** Tokenization feature */
        const FEATURE_TOKENIZATION = 'tokenization';
        /** Credit Card charge transaction feature */
        const FEATURE_CREDIT_CARD_CHARGE = 'charge';
        /** Credit Card authorization transaction feature */
        const FEATURE_CREDIT_CARD_AUTHORIZATION = 'authorization';
        /** Credit Card charge virtual-only orders feature */
        const FEATURE_CREDIT_CARD_CHARGE_VIRTUAL = 'charge-virtual';
        /** Credit Card capture charge transaction feature */
        const FEATURE_CREDIT_CARD_CAPTURE = 'capture_charge';
        /** Credit Card partial capture transaction feature */
        const FEATURE_CREDIT_CARD_PARTIAL_CAPTURE = 'partial_capture';
        /** Gateway charge transaction feature */
        const FEATURE_CHARGE = 'charge';
        /** Gateway authorization transaction feature */
        const FEATURE_AUTHORIZATION = 'authorization';
        /** Gateway charge virtual-only orders feature */
        const FEATURE_CHARGE_VIRTUAL = 'charge-virtual';
        /** Gateway capture charge transaction feature */
        const FEATURE_CAPTURE = 'capture_charge';
        /** Gateway partial capture transaction feature */
        const FEATURE_PARTIAL_CAPTURE = 'partial_capture';
        /** Refunds feature */
        const FEATURE_REFUNDS = 'refunds';
        /** Voids feature */
        const FEATURE_VOIDS = 'voids';
        /** Payment Form feature */
        const FEATURE_PAYMENT_FORM = 'payment_form';
        /** Customer ID feature */
        const FEATURE_CUSTOMER_ID = 'customer_id';
        /** Add new payment method feature */
        const FEATURE_ADD_PAYMENT_METHOD = 'add_payment_method';
        /** Apple Pay feature */
        const FEATURE_APPLE_PAY = 'apple_pay';
        /** Admin token editor feature */
        const FEATURE_TOKEN_EDITOR = 'token_editor';
        /** Subscriptions integration ID */
        const INTEGRATION_SUBSCRIPTIONS = 'subscriptions';
        /** Pre-orders integration ID */
        const INTEGRATION_PRE_ORDERS = 'pre_orders';
        /** Charge type when total amount is charged on a Gift Card. */
        const CHARGE_TYPE_FULL = 'FULL';
        /** Charge type when total amount is partially charged on a Gift Card. */
        const CHARGE_TYPE_PARTIAL = 'PARTIAL';
        /** @var Payment_Gateway_Plugin the parent plugin class */
        private $plugin;
        /** @var string payment type, one of 'credit-card' */
        private $payment_type;
        /** @var array associative array of environment id to display name, defaults to 'production' => 'Production' */
        private $environments;
        /** @var array associative array of card type to display name */
        private $available_card_types;
        /** @var array optional array of currency codes this gateway is allowed for */
        protected $currencies;
        /** @var string configuration option: the transaction environment, one of $this->environments keys */
        private $environment;
        /** @var string configuration option: the type of transaction, whether purchase or authorization, defaults to 'charge' */
        private $transaction_type;
        /** @var string configuration option: whether transactions should always be charged if the order is virtual-only, defaults to 'no' */
        private $charge_virtual_orders;
        /** @var string configuration option: whether orders can be partially captured multiple times */
        private $enable_partial_capture;
        /** @var string configuration option: whether orders are captured when switched to a "paid" status */
        private $enable_paid_capture;
        /** @var array configuration option: card types to show images for */
        private $card_types;
        /** @var string configuration option: indicates whether a Card Security Code field will be presented on checkout, either 'yes' or 'no' */
        private $enable_csc;
        /** @var string configuration option: indicates whether a Card Security Code field will be presented for saved cards at checkout, either 'yes' or 'no' */
        private $enable_token_csc;
        /** @var string configuration option: indicates whether tokenization is enabled, either 'yes' or 'no' */
        private $tokenization;
        /** @var string configuration option: indicates whether detailed customer decline messages should be displayed at checkout, either 'yes' or 'no' */
        private $enable_customer_decline_messages;
        /** @var string configuration option: 4 options for debug mode - off, checkout, log, both */
        private $debug_mode;
        /** @var string configuration option: whether to use a sibling gateway's connection/authentication settings */
        private $inherit_settings;
        /** @var array of shared setting names, if any. */
        private $shared_settings = array();
        /** @var \WooCommerce\Square\Framework\PaymentGateway\PaymentTokens\Payment_Gateway_Payment_Tokens_Handler payment tokens handler instance */
        protected $payment_tokens_handler;
        /** @var Payment_Gateway\Handlers\Capture capture handler instance */
        protected $capture_handler;
        /** @var array of Payment_Gateway_Integration objects for Subscriptions, Pre-Orders, etc. */
        protected $integrations;
        /** @var string configuration option: whether Square gateway is enabled. */
        public $enabled;
        /** @var string configuration option: title to show on the Checkout page for Square gateway. */
        public $title;
        /** @var string configuration option: description to show on the Checkout page for Square gateway. */
        public $description;
        /** @var string digital wallets section title field. */
        protected $digital_wallet_settings;
        /** @var string configuration option: whether digital wallets is enabled. */
        protected $enable_digital_wallets;
        /** @var string configuration option: button type: Buy Now | Donate | No Text. */
        protected $digital_wallets_button_type;
        /** @var string configuration option: button color for Apply Pay. */
        protected $digital_wallets_apple_pay_button_color;
        /** @var string configuration option: button color for Google Pay. */
        protected $digital_wallets_google_pay_button_color;
        /** @var array configuration option: list of buttons that are hidden on the front end. */
        protected $digital_wallets_hide_button_options;
        /** @var string configuration option: whether gift cards is enabled. */
        protected $enable_gift_cards;
        /** @var string advanced settings section title field. */
        protected $advanced_settings_title;
        /** @var string whether apple pay domain is registered. */
        protected $apple_pay_domain_registered;
        /** @var string whether apple pay domain registration was attempted. */
        protected $apple_pay_domain_registration_attempted;
        /** @var string Gift Card settings. */
        protected $gift_card_settings;
        /** @var string order note for the voided order. */
        protected $voided_order_message;
        /** @var string Gift card product default placeholder provided by the plugin. */
        protected $is_default_placeholder;
        /** @var integer ID of the placeholder media. */
        protected $placeholder_id;
        /**
         * Initialize the gateway
         *
         * Args:
         *
         * + `method_title` - string admin method title, ie 'Intuit QBMS', defaults to 'Settings'
         * + `method_description` - string admin method description, defaults to ''
         * + `supports` - array  list of supported gateway features, possible values include:
         *   'products', 'card_types', 'tokenziation', 'charge', 'authorization', 'subscriptions',
         *   'subscription_suspension', 'subscription_cancellation', 'subscription_reactivation',
         *   'subscription_amount_changes', 'subscription_date_changes', 'subscription_payment_method_change',
         *   'customer_decline_messages'
         *   Defaults to 'products', 'charge' (credit-card gateways only)
         * + `payment_type` - 'credit-card'
         * + `card_types` - array  associative array of card type to display name, used if the payment_type is 'credit-card' and the 'card_types' feature is supported.  Defaults to:
         *   'VISA' => 'Visa', 'MC' => 'MasterCard', 'AMEX' => 'American Express', 'DISC' => 'Discover', 'DINERS' => 'Diners', 'JCB' => 'JCB'
         * + `environments` - associative array of environment id to display name, merged with default of 'production' => 'Production'
         * + `currencies` -  array of currency codes this gateway is allowed for, defaults to plugin accepted currencies
         * + `countries` -  array of two-letter country codes this gateway is allowed for, defaults to all
         * + `shared_settings` - array of shared setting names, if any.
         *
         * @since 3.0.0
         * @param string $id the gateway id
         * @param Payment_Gateway_Plugin $plugin the parent plugin class
         * @param array $args gateway arguments
         */
        public function __construct($id, $plugin, $args)
        {
        }
        /**
         * Adds the various milestone hooks like "payment processed".
         *
         * @since 3.0.0
         */
        protected function add_milestone_hooks()
        {
        }
        /**
         * Loads the plugin configuration settings
         *
         * @since 3.0.0
         */
        public function load_settings()
        {
        }
        /**
         * Loads any shared settings from sibling gateways.
         *
         * @since 3.0.0
         */
        protected function load_shared_settings()
        {
        }
        /**
         * Enqueue the necessary scripts & styles for the gateway, including the
         * payment form assets (if supported) and any gateway-specific assets.
         *
         * @since 3.0.0
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Enqueue the payment form JS, CSS, and localized
         * JS params
         *
         * @since 3.0.0
         */
        protected function enqueue_payment_form_assets()
        {
        }
        /**
         * Returns an array of JS script params to localize for the
         * payment form JS. Generally used for i18n purposes.
         *
         * @since 3.0.0
         * @return array associative array of param name to value
         */
        protected function get_payment_form_js_localized_script_params()
        {
        }
        /**
         * Enqueue the gateway-specific assets if present, including JS, CSS, and
         * localized script params
         *
         * @since 3.0.0
         */
        protected function enqueue_gateway_assets()
        {
        }
        /**
         * Return the gateway-specifics JS script handle. This is used for:
         *
         * + enqueuing the script
         * + the localized JS script param object name
         *
         * Defaults to 'wc-<plugin ID dasherized>'.
         *
         * @since 3.0.0
         * @return string
         */
        protected function get_gateway_js_handle()
        {
        }
        /**
         * Localize a script once. Gateway plugins that have multiple gateways should
         * only have their params localized once.
         *
         * @since 3.0.0
         * @param string $handle script handle to localize
         * @param array $params script params to localize
         */
        protected function localize_script($handle, $params)
        {
        }
        /**
         * Returns true if on the pay page and this is the currently selected gateway
         *
         * @since 3.0.0
         *
         * @return null|bool true if on pay page and is currently selected gateways, false if on pay page and not the selected gateway, null otherwise
         */
        public function is_pay_page_gateway()
        {
        }
        /**
         * Gets the order button text:
         *
         * Direct gateway: "Place order"
         * Redirect/Hosted gateway: "Continue"
         *
         * @since 3.0.0
         */
        protected function get_order_button_text()
        {
        }
        /**
         * Adds a default simple pay page handler
         *
         * @since 3.0.0
         */
        protected function add_pay_page_handler()
        {
        }
        /**
         * Render a simple payment page
         *
         * @since 3.0.0
         * @param int $order_id identifies the order
         */
        public function payment_page($order_id)
        {
        }
        /** Payment Form Feature **************************************************/
        /**
         * Returns true if the gateway supports the payment form feature
         *
         * @since 3.0.0
         * @return bool
         */
        public function supports_payment_form()
        {
        }
        /**
         * Render the payment fields
         *
         * @since 3.0.0
         * @see WC_Payment_Gateway::payment_fields()
         * @see Payment_Gateway_Payment_Form class
         */
        public function payment_fields()
        {
        }
        /**
         * Gets the payment form class instance.
         *
         * @since 3.0.0
         *
         * @return Payment_Gateway_Payment_Form
         */
        public function get_payment_form_instance()
        {
        }
        /**
         * Get the payment form field defaults, primarily for gateways to override
         * and set dummy credit card info when in the test environment
         *
         * @since 3.0.0
         * @return array
         */
        public function get_payment_method_defaults()
        {
        }
        /** Tokenization **************************************************/
        /**
         * Initialize payment tokens handler.
         *
         * @since 3.0.0
         */
        protected function init_payment_tokens_handler()
        {
        }
        /**
         * Gets the payment tokens handler instance.
         *
         * Concrete classes can override this method to return a custom implementation.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\PaymentTokens\Payment_Gateway_Payment_Tokens_Handler
         */
        protected function build_payment_tokens_handler()
        {
        }
        /**
         * Gets the payment tokens handler instance.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\PaymentTokens\Payment_Gateway_Payment_Tokens_Handler
         */
        public function get_payment_tokens_handler()
        {
        }
        /**
         * Determines if tokenization takes place prior to transaction processing.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function tokenize_before_sale()
        {
        }
        /**
         * Determines tokenization takes place during a transaction request.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function tokenize_with_sale()
        {
        }
        /**
         * Determines tokenization takes place after a transaction request.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function tokenize_after_sale()
        {
        }
        /**
         * Determines if the gateway supports the admin token editor feature.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function supports_token_editor()
        {
        }
        /** Integrations Feature **************************************************/
        /**
         * Initializes supported integrations.
         *
         * @since 3.0.0
         */
        public function init_integrations()
        {
        }
        /**
         * Gets an array of available integration objects
         *
         * @since 3.0.0
         * @return array
         */
        public function get_integrations()
        {
        }
        /**
         * Gets the integration object for the given ID.
         *
         * @since 3.0.0
         *
         * @param string $id the integration ID, e.g. subscriptions
         * @return \WooCommerce\Square\Framework\PaymentGateway\Integrations\Payment_Gateway_Integration|null
         */
        public function get_integration($id)
        {
        }
        /**
         * Builds the Subscriptions integration class instance.
         *
         * Concrete classes can override this method to return a custom implementation.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\Integrations\Payment_Gateway_Integration_Subscriptions
         */
        protected function build_subscriptions_integration()
        {
        }
        /**
         * Gets the Subscriptions integration class instance.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\Integrations\Payment_Gateway_Integration_Subscriptions|null
         */
        public function get_subscriptions_integration()
        {
        }
        /**
         * Builds the Pre-Orders integration class instance.
         *
         * Concrete classes can override this method to return a custom implementation.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\Integrations\Payment_Gateway_Integration_Pre_Orders
         */
        protected function build_pre_orders_integration()
        {
        }
        /**
         * Gets the Pre-Orders integration class instance.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\Integrations\Payment_Gateway_Integration_Pre_Orders|null
         */
        public function get_pre_orders_integration()
        {
        }
        /**
         * Determines if the gateway supports Subscriptions.
         *
         * A gateway supports Subscriptions if all of the following are true:
         *
         * + Subscriptions is active
         * + tokenization is supported
         * + tokenization is enabled
         *
         * Concrete gateways can override this to conditionally support Subscriptions
         * based on certain settings (e.g. only when CSC is not required, etc.)
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function supports_subscriptions()
        {
        }
        /**
         * Determines if the gateway supports Pre-Orders.
         *
         * A gateway supports Pre-Orders if all of the following are true:
         *
         * + Pre-Orders is active
         * + tokenization is supported
         * + tokenization is enabled
         *
         * Concrete gateways can override this to conditionally support Pre-Orders
         * based on certain settings (e.g. only when CSC is not required, etc.)
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function supports_pre_orders()
        {
        }
        /** Apple Pay Feature *****************************************************/
        /**
         * Determines whether this gateway supports Apple Pay.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function supports_apple_pay()
        {
        }
        /**
         * Gets the Apple Pay gateway capabilities.
         *
         * Gateways should override this if they have more or less capabilities than
         * the default. See https://developer.apple.com/reference/applepayjs/paymentrequest/1916123-merchantcapabilities
         * for valid values.
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_apple_pay_capabilities()
        {
        }
        /**
         * Gets the currencies supported by Apple Pay.
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_apple_pay_currencies()
        {
        }
        /**
         * Adds the Apple Pay payment data to the order object.
         *
         * Gateways should override this to set the appropriate values depending on
         * how their processing API needs to handle the data.
         *
         * @since 3.0.0
         *
         * @param \WC_Order the order object
         * @param Payment_Gateway_Apple_Pay_Payment_Response authorized payment response
         * @return \WC_Order
         */
        public function get_order_for_apple_pay(\WC_Order $order, \WooCommerce\Square\Framework\PaymentGateway\ApplePay\Api\Payment_Gateway_Apple_Pay_Payment_Response $response)
        {
        }
        /**
         * Get the default payment method title, which is configurable within the
         * admin and displayed on checkout
         *
         * @since 3.0.0
         * @return string payment method title to show on checkout
         */
        protected function get_default_title()
        {
        }
        /**
         * Get the default payment method description, which is configurable
         * within the admin and displayed on checkout
         *
         * @since 3.0.0
         * @return string payment method description to show on checkout
         */
        protected function get_default_description()
        {
        }
        /**
         * Initialize payment gateway settings fields
         *
         * @since 3.0.0
         * @see WC_Settings_API::init_form_fields()
         */
        public function init_form_fields()
        {
        }
        /**
         * Returns an array of form fields specific for this method.
         *
         * To add environment-dependent fields, include the 'class' form field argument
         * with 'environment-field production-field' where "production" matches a
         * key from the environments member
         *
         * @since 3.0.0
         * @return array of form fields
         */
        abstract protected function get_method_form_fields();
        /**
         * Adds the gateway environment form fields
         *
         * @since 3.0.0
         * @param array $form_fields gateway form fields
         * @return array $form_fields gateway form fields
         */
        protected function add_environment_form_fields($form_fields)
        {
        }
        /**
         * Adds the optional shared settings toggle element.  The 'shared_settings'
         * optional constructor parameter must have been used in order for shared
         * settings to be supported.
         *
         * @since 3.0.0
         * @see Payment_Gateway::$shared_settings
         * @see Payment_Gateway::$inherit_settings
         * @param array $form_fields gateway form fields
         * @return array $form_fields gateway form fields
         */
        protected function add_shared_settings_form_fields($form_fields)
        {
        }
        /**
         * Adds the enable Card Security Code form fields
         *
         * @since 3.0.0
         * @param array $form_fields gateway form fields
         * @return array $form_fields gateway form fields
         */
        protected function add_csc_form_fields($form_fields)
        {
        }
        /**
         * Displays settings page with some additional javascript for hiding conditional fields.
         *
         * @see \WC_Settings_API::admin_options()
         *
         * @since 3.0.0
         */
        public function admin_options()
        {
        }
        /**
         * Checks for proper gateway configuration including:
         *
         * + gateway enabled
         * + correct configuration (gateway specific)
         * + any dependencies met
         * + required currency
         * + required country
         *
         * @since 3.0.0
         * @see WC_Payment_Gateway::is_available()
         * @return true if this gateway is available for checkout, false otherwise
         */
        public function is_available()
        {
        }
        /**
         * Returns true if the gateway is properly configured to perform transactions
         *
         * @since 3.0.0
         * @see Payment_Gateway::is_configured()
         * @return boolean true if the gateway is properly configured
         */
        protected function is_configured()
        {
        }
        /**
         * Returns the payment method image URL (if any) for the given $type, ie
         * if $type is 'amex' a URL to the american express card icon will be
         * returned.
         *
         * @since 3.0.0
         * @param string $type the payment method cc type or name
         * @return string the image URL or null
         */
        public function get_payment_method_image_url($type)
        {
        }
        /**
         * Add payment and transaction information as class members of WC_Order
         * instance.  The standard information that can be added includes:
         *
         * $order->payment_total           - the payment total
         * $order->customer_id             - optional payment gateway customer id (useful for tokenized payments, etc)
         * $order->payment->type           - one of 'credit_card' or 'check'
         * $order->description             - an order description based on the order
         * $order->unique_transaction_ref  - a combination of order number + retry count, should provide a unique value for each transaction attempt
         *
         * Note that not all gateways will necessarily pass or require all of the
         * above.  These represent the most common attributes used among a variety
         * of gateways, it's up to the specific gateway implementation to make use
         * of, or ignore them, or add custom ones by overridding this method.
         *
         * The returned order is expected to be used in a transaction request.
         *
         * @since 3.0.0
         * @param int|\WooCommerce\Square\WC_Order_Square $order the order or order ID being processed
         * @return \WooCommerce\Square\WC_Order_Square object with payment and transaction information attached
         */
        public function get_order($order)
        {
        }
        /**
         * Performs a transaction for the given order and returns the result.
         *
         * @since 4.6.0
         *
         * @param \WooCommerce\Square\WC_Order_Square     $order the order object
         * @param \WooCommerce\Square\Gateway\API\Responses\Create_Payment|null $response optional gateway transaction response
         * @return \WooCommerce\Square\Gateway\API\Responses\Create_Payment     the response
         * @throws \Exception network timeouts, etc
         */
        abstract protected function do_payment_method_transaction($order, $response = null);
        /**
         * Performs a gift card transaction for the given order and returns the result.
         *
         * @since 3.7.0
         *
         * @param \WooCommerce\Square\WC_Order_Square $order WooCommerce order object.
         *
         * @return \WooCommerce\Square\Gateway\API\Responses\Create_Payment The payment response.
         */
        public function do_gift_card_transaction($order)
        {
        }
        /**
         * Create a transaction.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order the order object
         * @return bool
         * @throws \Exception
         */
        protected function do_transaction($order)
        {
        }
        /**
         * Stores gift card details as order meta.
         *
         * @since 4.2.0
         *
         * @param \Square\Models\Order $square_order
         * @param \WC_Order $order
         */
        public function maybe_save_gift_card_order_details($square_order, $order)
        {
        }
        /**
         * Creates a gift card and activates it.
         *
         * @since 4.2.0
         *
         * @param \WC_Order $order
         */
        public function create_gift_card($order)
        {
        }
        /**
         * Loads an existing gift card with an amount.
         *
         * @since 4.2.0
         *
         * @param string    $gan   The gift card number.
         * @param \WC_Order $order WooCommerce order.
         * @return boolean
         */
        public function load_gift_card($gan, $order)
        {
        }
        /**
         * Returns true if the order total equals the sum of partial totals (gift card + other gateway).
         * Uses integer comparison in smallest currency unit to avoid float precision errors.
         *
         * @param \WC_Order $order WooCommerce order object.
         * @return bool True if order total matches sum of partial totals (within 1 unit tolerance).
         */
        protected function verify_order_total($order)
        {
        }
        /**
         * Handles responses when the order payment is made using a Square Gift or a Credit Card.
         *
         * @param \WooCommerce\Square\Gateway\API\Responses\Create_Payment $response       Square Gift Card or Credit Card payment response.
         * @param \WC_Order      $order          WooCommerce Order object.
         * @param string         $payment_method Describes whether payment was made using a Square Gift or a Credit Card.
         */
        protected function handle_single_payment_method($response, $order)
        {
        }
        /**
         * Handles responses when the order total payment is split between a Gift and Square Credit Card.
         *
         * @param \WooCommerce\Square\Gateway\API\Responses\Create_Payment $gift_card_response      Gift Card payment response.
         * @param \WooCommerce\Square\Gateway\API\Responses\Create_Payment $payment_method_response Other Payment Method payment response.
         * @param \WC_Order      $order                   WooCommerce Order object.
         */
        protected function handle_multi_payment_methods($gift_card_response, $payment_method_response, $order)
        {
        }
        /**
         * Tokenizes Credit Card.
         *
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response Credit Card payment response.
         * @param \WC_Order                     $order   WooCommerce order object.
         */
        protected function maybe_tokenize($response, $order)
        {
        }
        /**
         * Cancel authorized gift card payment.
         *
         * This method cancels gift card payment, and adds a relevant order note.
         *
         * @since 4.6.0
         *
         * @param \WC_Order $order order object
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response response object
         * @throws \Exception
         */
        protected function gift_card_cancel_payment(\WC_Order $order, \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response)
        {
        }
        /**
         * Completes an order payment.
         *
         * This method marks the order with an appropriate status, and adds a relevant order note.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response response object
         * @throws \Exception
         */
        protected function complete_payment(\WC_Order $order, \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response)
        {
        }
        /** Capture Methods ***********************************************************************************************/
        /**
         * Builds the capture handler instance.
         *
         * @since 3.0.0
         */
        public function init_capture_handler()
        {
        }
        /**
         * Gets the capture handler instance.
         *
         * @since 3.0.0
         *
         * @return Payment_Gateway\Handlers\Capture
         */
        public function get_capture_handler()
        {
        }
        /**
         * Gets an order object with payment data added for use in credit card capture transactions.
         *
         * This was intentionally not moved to the capture handler since we'll likely be refactoring how this information is
         * set in the future, and plenty of gateways override it.
         *
         * @since 3.0.0
         *
         * @param \WC_Square_Order|int $order the order being processed
         * @param float|null $amount amount to capture or null for the full order amount
         * @return \WooCommerce\Square\WC_Order_Square
         */
        public function get_order_for_capture($order, $amount = null)
        {
        }
        /**
         * Processes a refund.
         *
         * @since 3.0.0
         *
         * @param int $order_id order being refunded
         * @param float $amount refund amount
         * @param string $reason user-entered reason text for refund
         * @return bool|\WP_Error true on success, or a WP_Error object on failure/error
         */
        public function process_refund($order_id, $amount = null, $reason = '')
        {
        }
        /**
         * Refunds a Gift Card purchase/reload order.
         *
         * @since 4.2.0
         *
         * @param \WC_Order $order WooCommerce order.
         */
        public function maybe_refund_gift_card($order)
        {
        }
        /**
         * Add refund information as class members of WC_Order
         * instance for use in refund transactions.  Standard information includes:
         *
         * $order->refund->amount = refund amount
         * $order->refund->reason = user-entered reason text for the refund
         * $order->refund->trans_id = the ID of the original payment transaction for the order
         *
         * Payment gateway implementations can override this to add their own
         * refund-specific data
         *
         * @since 3.0.0
         *
         * @param \WC_Square_Order|int $order order being processed
         * @param float $amount refund amount
         * @param string $reason optional refund reason text
         * @return \WC_Order|\WP_Error object with refund information attached
         */
        protected function get_order_for_refund($order, $amount, $reason)
        {
        }
        /**
         * Adds the standard refund transaction data to the order.
         *
         * Note that refunds can be performed multiple times for a single order so
         * transaction IDs keys are not unique
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order the order object
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response transaction response
         */
        protected function add_refund_data(\WC_Order $order, $response)
        {
        }
        /**
         * Adds an order note with the amount and (optional) refund transaction ID.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response transaction response
         */
        protected function add_refund_order_note(\WC_Order $order, $response)
        {
        }
        /**
         * Adds an order note with the amount and (optional) refund transaction ID.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response transaction response
         */
        protected function add_multi_payment_refund_order_note(\WC_Order $order, $response, $payment_data = array())
        {
        }
        /**
         * Builds the WP_Error object for a failed refund.
         *
         * @since 3.0.0
         *
         * @param int|string $error_code error code
         * @param string $error_message error message
         * @return \WP_Error suitable for returning from the process_refund() method
         */
        protected function get_refund_failed_wp_error($error_code, $error_message)
        {
        }
        /**
         * Mark an order as refunded. This should only be used when the full order
         * amount has been refunded.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         */
        public function mark_order_as_refunded($order)
        {
        }
        /** Void feature ********************************************************/
        /**
         * Returns true if this is gateway that supports voids
         *
         * @since 3.0.0
         * @return boolean true if the gateway supports voids
         */
        public function supports_voids()
        {
        }
        /**
         * Allow gateways to void an order that was attempted to be refunded. This is
         * particularly useful for gateways that can void an authorized & captured
         * charge that has not yet settled (e.g. Authorize.net AIM/CIM)
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response refund response
         * @return boolean true if a void should be performed for the given order/response
         */
        protected function maybe_void_instead_of_refund($order, $response)
        {
        }
        /**
         * Processes a void order.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object (with refund class member already added)
         * @return bool|\WP_Error true on success, or a WP_Error object on failure/error
         */
        protected function process_void(\WC_Order $order)
        {
        }
        /**
         * Adds the standard void transaction data to the order.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order the order object
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response transaction response
         */
        protected function add_void_data(\WC_Order $order, $response)
        {
        }
        /**
         * Builds the WP_Error object for a failed void.
         *
         * @since 3.0.0
         *
         * @param int|string $error_code error code
         * @param string $error_message error message
         * @return \WP_Error suitable for returning from the process_refund() method
         */
        protected function get_void_failed_wp_error($error_code, $error_message)
        {
        }
        /**
         * Marks an order as voided.
         *
         * Because WC has no status for "void", we use refunded.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response object
         */
        public function mark_order_as_voided($order, $response)
        {
        }
        /**
         * Maybe change the order status for a voided order to cancelled
         *
         * @hooked woocommerce_order_fully_refunded_status filter
         *
         * @see Payment_Gateway::mark_order_as_voided()
         * @since 3.0.0
         * @param string $order_status default order status for fully refunded orders
         * @param int $order_id order ID
         * @return string 'cancelled'
         */
        public function maybe_cancel_voided_order($order_status, $order_id)
        {
        }
        /**
         * Returns the $order object with a unique transaction ref member added.
         *
         * @since 3.0.0
         *
         * @param \WC_Order|\WooCommerce\Square\WC_Order_Square $order the order object
         * @return \WC_Order|\WooCommerce\Square\WC_Order_Square order object with member named unique_transaction_ref
         */
        protected function get_order_with_unique_transaction_ref($order)
        {
        }
        /**
         * Called after an unsuccessful transaction attempt.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order the order
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response the transaction response
         * @return false
         */
        protected function do_transaction_failed_result(\WC_Order $order, \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response)
        {
        }
        /**
         * Adds the standard transaction data to the order.
         *
         * @since 3.0.0
         *
         * @param \WC_Order                         $order          The WooCommerce order object
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response|null $response       Optional transaction response
         * @param string                            $payment_method Describes whether the payment was done using a Square Gift or a Credit card.
         * @param boolean                           $is_partial     Describes whether if the order payment was split using multiple payment methods.
         */
        public function add_transaction_data($order, $response = null, $payment_method = 'credit_card', $is_partial = false)
        {
        }
        /**
         * Adds any gateway-specific transaction data to the order.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order the order object
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Customer_Response $response the transaction response
         */
        public function add_payment_gateway_transaction_data($order, $response)
        {
        }
        /**
         * Add customer data to an order/user if the gateway supports the customer ID
         * response
         *
         * @since 3.0.0
         *
         * @param \WooCommerce\Square\WC_Order_Square $order order
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Customer_Response $response
         */
        protected function add_customer_data($order, $response = null)
        {
        }
        /**
         * Gets the order note message for approved credit card transactions.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response response object
         * @return string
         * @throws \Exception
         */
        public function get_credit_card_transaction_approved_message(\WC_Order $order, $response)
        {
        }
        /**
         * Marks the given order as 'on-hold', set an order note and display a message to the customer.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order the order
         * @param string $message a message to display within the order note
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response optional, the transaction response object
         */
        public function mark_order_as_held($order, $message, $response = null)
        {
        }
        /**
         * Maybe render custom order received text on the thank you page when
         * an order is held
         *
         * If detailed customer decline messages are enabled, this message may
         * additionally include more detailed information.
         *
         * @since 3.0.0
         *
         * @param string $text order received text
         * @param \WC_Order|null $order order object
         * @return string
         */
        public function maybe_render_held_order_received_text($text, $order)
        {
        }
        /**
         * Marks the given order as failed and set the order note.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order the order
         * @param string $error_message a message to display inside the "Payment Failed" order note
         * @param Payment_Gateway_API_Response optional $response the transaction response object
         */
        public function mark_order_as_failed($order, $error_message, $response = null)
        {
        }
        /** Customer ID Feature  **************************************************/
        /**
         * Returns true if this is gateway that supports gateway customer IDs
         *
         * @since 3.0.0
         * @return boolean true if the gateway supports gateway customer IDs
         */
        public function supports_customer_id()
        {
        }
        /**
         * Gets/sets the payment gateway customer id, this defaults to wc-{user id}
         * and retrieves/stores to the user meta named by get_customer_id_user_meta_name()
         * This can be overridden for gateways that use some other value, or made to
         * return false for gateways that don't support a customer id.
         *
         * @since 3.0.0
         * @see Payment_Gateway::get_customer_id_user_meta_name()
         * @param int $user_id WordPress user identifier
         * @param array $args optional additional arguments which can include: environment_id, autocreate (true/false), and order
         * @return string payment gateway customer id
         */
        public function get_customer_id($user_id, $args = array())
        {
        }
        /**
         * Updates the payment gateway customer id for the given $environment, or
         * for the plugin current environment
         *
         * @since 3.0.0
         * @see Payment_Gateway::get_customer_id()
         * @param int $user_id WP user ID
         * @param string $customer_id payment gateway customer id
         * @param string $environment_id optional environment id, defaults to current environment
         * @return boolean|int false if no change was made (if the new value was the same as previous value) or if the update failed, meta id if the value was different and the update a success
         */
        public function update_customer_id($user_id, $customer_id, $environment_id = null)
        {
        }
        /**
         * Removes the payment gateway customer id for the given $environment, or
         * for the plugin current environment
         *
         * @since 3.0.0
         * @param int $user_id WP user ID
         * @param string $environment_id optional environment id, defaults to current environment
         * @return boolean true on success, false on failure
         */
        public function remove_customer_id($user_id, $environment_id = null)
        {
        }
        /**
         * Returns a payment gateway customer id for a guest customer.  This
         * defaults to wc-guest-{order id} but can be overridden for gateways that
         * use some other value, or made to return false for gateways that don't
         * support a customer id
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @return string payment gateway guest customer id
         */
        public function get_guest_customer_id(\WC_Order $order)
        {
        }
        /**
         * Returns the payment gateway customer id user meta name for persisting the
         * gateway customer id.  Defaults to wc_{plugin id}_customer_id for the
         * production environment and wc_{plugin id}_customer_id_{environment}
         * for other environments.  A particular environment can be passed,
         * otherwise this will default to the plugin current environment.
         *
         * This can be overridden and made to return false for gateways that don't
         * support a customer id.
         *
         * @since 3.0.0
         * @param string $environment_id optional environment id, defaults to plugin current environment
         * @return string payment gateway customer id user meta name
         */
        public function get_customer_id_user_meta_name($environment_id = null)
        {
        }
        /** Authorization/Charge feature ******************************************/
        /**
         * Returns true if this is a credit card gateway which supports
         * authorization transactions
         *
         * @since 3.0.0
         * @return boolean true if the gateway supports authorization
         */
        public function supports_credit_card_authorization()
        {
        }
        /**
         * Returns true if this is a credit card gateway which supports
         * charge transactions
         *
         * @since 3.0.0
         * @return boolean true if the gateway supports charges
         */
        public function supports_credit_card_charge()
        {
        }
        /**
         * Determines if this is a credit card gateway that supports charging virtual-only orders.
         *
         * @since 3.0.0
         * @return bool
         */
        public function supports_credit_card_charge_virtual()
        {
        }
        /**
         * Returns true if the gateway supports capturing a charge
         *
         * @since 3.0.0
         * @return boolean true if the gateway supports capturing a charge
         */
        public function supports_credit_card_capture()
        {
        }
        /**
         * Determines if the gateway supports capturing a partial charge.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function supports_credit_card_partial_capture()
        {
        }
        /**
         * Returns true if gateway supports authorization transactions
         *
         * @since 4.6.0
         * @return boolean true if the gateway supports authorization
         */
        public function supports_authorization()
        {
        }
        /**
         * Returns true if gateway supports charge transactions
         *
         * @since 4.6.0
         * @return boolean true if the gateway supports charges
         */
        public function supports_charge()
        {
        }
        /**
         * Determines if gateway supports charging virtual-only orders.
         *
         * @since 4.6.0
         * @return bool
         */
        public function supports_charge_virtual()
        {
        }
        /**
         * Returns true if the gateway supports capturing a charge
         *
         * @since 4.6.0
         * @return boolean true if the gateway supports capturing a charge
         */
        public function supports_capture()
        {
        }
        /**
         * Determines if the gateway supports capturing a partial charge.
         *
         * @since 4.6.0
         *
         * @return bool
         */
        public function supports_partial_capture()
        {
        }
        /**
         * Adds any credit card authorization/charge admin fields, allowing the
         * administrator to choose between performing authorizations or charges
         *
         * @since 3.0.0
         * @param array $form_fields gateway form fields
         * @return array $form_fields gateway form fields
         */
        protected function add_authorization_charge_form_fields($form_fields)
        {
        }
        /**
         * Return the authorization time window in hours. An authorization is considered
         * expired if it is older than this.
         *
         * 30 days (720 hours) is the standard authorization window. Individual gateways
         * can override this as necessary.
         *
         * @since 3.0.0
         * @return int hours
         */
        public function get_authorization_time_window()
        {
        }
        /**
         * Determines if a credit card transaction should result in a charge.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order Optional. The order being charged
         * @return bool
         */
        public function perform_credit_card_charge(?\WC_Order $order = null)
        {
        }
        /**
         * Determines if a credit card transaction should result in an authorization.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order Optional. The order being authorized
         * @return bool
         */
        public function perform_credit_card_authorization(?\WC_Order $order = null)
        {
        }
        /**
         * Determines if a gateway transaction should result in a charge.
         *
         * @since 4.6.0
         *
         * @param \WC_Order $order Optional. The order being charged
         * @return bool
         */
        public function perform_charge(?\WC_Order $order = null)
        {
        }
        /**
         * Determines if a gateway transaction should result in an authorization.
         *
         * @since 4.6.0
         *
         * @param \WC_Order $order Optional. The order being authorized
         * @return bool
         */
        public function perform_authorization(?\WC_Order $order = null)
        {
        }
        /**
         * Determines if partial capture is enabled.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function is_partial_capture_enabled()
        {
        }
        /**
         * Determines if orders should be captured when switched to a "paid" status.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function is_paid_capture_enabled()
        {
        }
        /** Add Payment Method feature ********************************************/
        /**
         * Determines if the gateway supports the add payment method feature.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function supports_add_payment_method()
        {
        }
        // TODO: generalize the direct methods
        /** Card Types feature ******************************************************/
        /**
         * Returns true if the gateway supports card_types: allows the admin to
         * configure card type icons to display at checkout
         *
         * @since 3.0.0
         * @return boolean true if the gateway supports card_types
         */
        public function supports_card_types()
        {
        }
        /**
         * Returns the array of accepted card types if this is a credit card gateway
         * that supports card types.  Return format is 'VISA', 'MC', 'AMEX', etc
         *
         * @since 3.0.0
         * @see get_available_card_types()
         * @return array of accepted card types, ie 'VISA', 'MC', 'AMEX', etc
         */
        public function get_card_types()
        {
        }
        /**
         * Adds any card types form fields, allowing the admin to configure the card
         * types icons displayed during checkout
         *
         * @since 3.0.0
         * @param array $form_fields gateway form fields
         * @return array $form_fields gateway form fields
         */
        protected function add_card_types_form_fields($form_fields)
        {
        }
        /**
         * Returns available card types, ie 'VISA' => 'Visa', 'MC' => 'MasterCard', etc
         *
         * @since 3.0.0
         * @return array associative array of card type to display name
         */
        public function get_available_card_types()
        {
        }
        /** Tokenization feature **************************************************/
        /**
         * Returns true if the gateway supports tokenization
         *
         * @since 3.0.0
         * @return boolean true if the gateway supports tokenization
         */
        public function supports_tokenization()
        {
        }
        /**
         * Returns true if tokenization is enabled
         *
         * @since 3.0.0
         * @return boolean true if tokenization is enabled
         */
        public function tokenization_enabled()
        {
        }
        /**
         * Adds any tokenization form fields for the settings page
         *
         * @since 3.0.0
         * @param array $form_fields gateway form fields
         * @return array $form_fields gateway form fields
         */
        protected function add_tokenization_form_fields($form_fields)
        {
        }
        /**
         * Add API request logging for the gateway. The main plugin class typically handles this, but the payment
         * gateway plugin class no-ops the method so each gateway's requests can be logged individually (e.g. credit card)
         * and make use of the payment gateway-specific add_debug_message() method
         *
         * @since 3.0.0
         * @see Plugin::add_api_request_logging()
         */
        public function add_api_request_logging()
        {
        }
        /**
         * Log gateway API requests/responses
         *
         * @since 3.0.0
         * @param array $request request data, see Base::broadcast_request() for format
         * @param array $response response data
         */
        public function log_api_request($request, $response)
        {
        }
        /**
         * Adds debug messages to the page as a WC message/error, and/or to the WC Error log
         *
         * @since 3.0.0
         * @param string $message message to add
         * @param string $type how to add the message, options are:
         *     'message' (styled as WC message), 'error' (styled as WC Error)
         */
        public function add_debug_message($message, $type = 'message')
        {
        }
        /**
         * Get payment currency, either from current order or WC settings
         *
         * @since 3.0.0
         * @return string three-letter currency code
         */
        protected function get_payment_currency()
        {
        }
        /**
         * Returns true if $currency is accepted by this gateway
         *
         * @since 3.0.0
         * @param string $currency optional three-letter currency code, defaults to
         *        order currency (if available) or currently configured WooCommerce
         *        currency
         * @return boolean true if $currency is accepted, false otherwise
         */
        public function currency_is_accepted($currency = null)
        {
        }
        /**
         * Adds order meta data.
         *
         * @since 3.0.0
         *
         * @param \WC_Order|int the order to add meta to
         * @param string $key meta key (already prefixed with gateway ID)
         * @param mixed $value meta value
         * @param bool $unique whether the meta value should be unique
         * @return false|void
         */
        public function add_order_meta($order, $key, $value, $unique = false)
        {
        }
        /**
         * Builds the order note string for orders made using a gift and a credit card.
         *
         * @since 4.2.0
         *
         * @var \WC_Order            $order   WooCommerce order.
         * @var \Square\Models\Order $square_order Array of tenders.
         * @return string
         */
        public function build_split_payment_order_note($order, $square_order)
        {
        }
        /**
         * Gets order meta data.
         *
         * Note this is hardcoded to return a single value for the get_post_meta() call.
         *
         * @since 3.0.0
         * @param \WC_Order|int the order to get meta for
         * @param string $key meta key
         * @return mixed
         */
        public function get_order_meta($order, $key)
        {
        }
        /**
         * Updates order meta data.
         *
         * @since 3.0.0
         *
         * @param \WC_Order|int the order to update meta for
         * @param string $key meta key
         * @param mixed $value meta value
         * @return false|void
         */
        public function update_order_meta($order, $key, $value)
        {
        }
        /**
         * Delete order meta data.
         *
         * @since 3.0.0
         * @param \WC_Order|int the order to delete meta for
         * @param string $key meta key
         * @return bool
         */
        public function delete_order_meta($order, $key)
        {
        }
        /**
         * Gets the order meta prefixed used for the *_order_meta() methods
         *
         * Defaults to `_wc_{gateway_id}_`
         *
         * @since 3.0.0
         * @return string
         */
        public function get_order_meta_prefix()
        {
        }
        /**
         * Returns the payment gateway id
         *
         * @since 3.0.0
         * @see WC_Payment_Gateway::$id
         * @return string payment gateway id
         */
        public function get_id()
        {
        }
        /**
         * Returns the payment gateway id with dashes in place of underscores, and
         * appropriate for use in frontend element names, classes and ids
         *
         * @since 3.0.0
         * @return string payment gateway id with dashes in place of underscores
         */
        public function get_id_dasherized()
        {
        }
        /**
         * Returns the parent plugin object
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Plugin the parent plugin object
         */
        public function get_plugin()
        {
        }
        /**
         * Returns the admin method title.  This should be the gateway name, ie
         * 'Intuit QBMS'
         *
         * @since 3.0.0
         * @see WC_Settings_API::$method_title
         * @return string method title
         */
        public function get_method_title()
        {
        }
        /**
         * Determines if the Card Security Code (CVV) field should be used at checkout.
         *
         * @since 3.0.0
         * @return bool
         */
        public function csc_enabled()
        {
        }
        /**
         * Determines if the Card Security Code (CVV) field should be used for saved cards at checkout.
         *
         * @since 3.0.0
         * @return bool
         */
        public function csc_enabled_for_tokens()
        {
        }
        /**
         * Determines if the Card Security Code (CVV) field should be required at checkout.
         *
         * @since 3.0.0
         * @return bool
         */
        public function csc_required()
        {
        }
        /**
         * Determines if the gateway supports sharing settings with sibling gateways.
         *
         * @since 3.0.0
         * @return bool
         */
        public function share_settings()
        {
        }
        /**
         * Determines if settings should be inherited for this gateway.
         *
         * @since 3.0.0
         * @return bool
         */
        public function inherit_settings()
        {
        }
        /**
         * Returns an array of two-letter country codes this gateway is allowed for, defaults to all
         *
         * @since 3.0.0
         * @see WC_Payment_Gateway::$countries
         * @return array of two-letter country codes this gateway is allowed for, defaults to all
         */
        public function get_available_countries()
        {
        }
        /**
         * Add support for the named feature or features
         *
         * @since 3.0.0
         * @param string|array $feature the feature name or names supported by this gateway
         */
        public function add_support($feature)
        {
        }
        /**
         * Set all features supported
         *
         * @since 3.0.0
         * @param array $features array of supported feature names
         */
        public function set_supports($features)
        {
        }
        /**
         * Gets the set of environments supported by this gateway.  All gateways
         * support at least the production environment
         *
         * @since 3.0.0
         * @return array associative array of environment id to name supported by this gateway
         */
        public function get_environments()
        {
        }
        /**
         * Returns the environment setting, one of the $environments keys, ie
         * 'production'
         *
         * @since 3.0.0
         * @return string the configured environment id
         */
        public function get_environment()
        {
        }
        /**
         * Get the configured environment's display name.
         *
         * @since 3.0.0
         * @return string The configured environment name
         */
        public function get_environment_name()
        {
        }
        /**
         * Returns true if the current environment is $environment_id.
         *
         * @since 3.0.0
         *
         * @param string|mixed $environment_id
         * @return bool
         */
        public function is_environment($environment_id)
        {
        }
        /**
         * Returns true if the current gateway environment is configured to
         * 'production'.  All gateways have at least the production environment
         *
         * @since 3.0.0
         * @param string $environment_id optional environment id to check, otherwise defaults to the gateway current environment
         * @return boolean true if $environment_id (if non-null) or otherwise the current environment is production
         */
        public function is_production_environment($environment_id = null)
        {
        }
        /**
         * Returns true if the current gateway environment is configured to 'test'
         *
         * @since 3.0.0
         * @param string $environment_id optional environment id to check, otherwise defaults to the gateway current environment
         * @return boolean true if $environment_id (if non-null) or otherwise the current environment is test
         */
        public function is_test_environment($environment_id = null)
        {
        }
        /**
         * Returns true if the gateway is enabled.  This has nothing to do with
         * whether the gateway is properly configured or functional.
         *
         * @since 3.0.0
         * @see WC_Payment_Gateway::$enabled
         * @return boolean true if the gateway is enabled
         */
        public function is_enabled()
        {
        }
        /**
         * Returns true if detailed decline messages should be displayed to
         * customers on checkout when available, rather than a single generic
         * decline message
         *
         * @since 3.0.0
         * @see Payment_Gateway_API_Response_Message_Helper
         * @see Payment_Gateway_API_Response::get_user_message()
         * @return boolean true if detailed decline messages should be displayed
         *         on checkout
         */
        public function is_detailed_customer_decline_messages_enabled()
        {
        }
        /**
         * Returns the set of accepted currencies, or empty array if all currencies
         * are accepted by this gateway
         *
         * @since 3.0.0
         * @return array of currencies accepted by this gateway
         */
        public function get_accepted_currencies()
        {
        }
        /**
         * Returns true if all debugging is disabled
         *
         * @since 3.0.0
         * @return boolean if all debuging is disabled
         */
        public function debug_off()
        {
        }
        /**
         * Returns true if debug logging is enabled
         *
         * @since 3.0.0
         * @return boolean if debug logging is enabled
         */
        public function debug_log()
        {
        }
        /**
         * Returns true if checkout debugging is enabled.  This will cause debugging
         * statements to be displayed on the checkout/pay pages
         *
         * @since 3.0.0
         * @return boolean if checkout debugging is enabled
         */
        public function debug_checkout()
        {
        }
        /**
         * Returns true if this is a direct type gateway
         *
         * @since 3.0.0
         * @return boolean if this is a direct payment gateway
         */
        public function is_direct_gateway()
        {
        }
        /**
         * Returns true if this is a hosted type gateway
         *
         * @since 3.0.0
         * @return boolean if this is a hosted IPN payment gateway
         */
        public function is_hosted_gateway()
        {
        }
        /**
         * Returns the payment type for this gateway
         *
         * @since 3.0.0
         * @return string the payment type, ie 'credit-card'.
         */
        public function get_payment_type()
        {
        }
        /**
         * Returns true if this is a credit card gateway
         *
         * @since 3.0.0
         * @return boolean true if this is a credit card gateway
         */
        public function is_credit_card_gateway()
        {
        }
        /**
         * Returns true if this is a Cash App Pay gateway
         *
         * @since 4.6.0
         * @return boolean true if this is a Cash App Pay gateway
         */
        public function is_cash_app_pay_gateway()
        {
        }
        /**
         * Returns true if a gift card is applied during checkout.
         *
         * @since 3.7.0
         * @return boolean
         */
        public function is_gift_card_applied()
        {
        }
        /**
         * Returns the charge type for a Gift card payment.
         * Gets the data from the $_POST array.
         *
         * If the entire amount is charged on the gift card, `FULL` is returned,
         * else if the total is split, then `PARTIAL` is returned.
         *
         * @return string
         */
        public function get_charge_type()
        {
        }
        /**
         * Returns the partial total amount paid using Square Gift Card.
         * Gets the data from the $_POST array.
         *
         * @return float
         */
        public function get_partial_total_on_gift_card()
        {
        }
        /**
         * Returns the partial total amount paid using other gateway (Credit card/cash app pay etc...).
         * Gets the data from the $_POST array.
         *
         * @return float
         */
        public function get_partial_total_on_other_gateway()
        {
        }
        /**
         * Returns the partial total amount paid using Square Credit Card.
         * Gets the data from the $_POST array.
         *
         * @return float
         */
        public function get_partial_total_on_credit_card()
        {
        }
        /**
         * Returns the tender types used for a Woo Order.
         *
         * @since 3.9.0
         *
         * @param \WC_Order $order Woo Order
         *
         * @return string
         */
        public function get_order_tender_types($order)
        {
        }
        /**
         * Returns the API instance for this gateway if it uses direct communication
         *
         * This is a stub method which must be overridden if this gateway performs
         * direct communication
         *
         * @since 3.0.0
         * @return \WooCommerce\Square\Gateway\API|void the payment gateway API instance
         */
        public function get_api()
        {
        }
        /**
         * Returns the order_id if on the checkout pay page
         *
         * @since 3.0.0
         * @return int order identifier
         */
        public function get_checkout_pay_page_order_id()
        {
        }
        /**
         * Gets the maximum amount that can be captured from an order.
         *
         * Gateways can override this for an value above or below the order total.
         * For instance, some processors allow capturing an amount a certain
         * percentage higher than the payment total.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @return float
         */
        public function get_order_capture_maximum(\WC_Order $order)
        {
        }
        /**
         * Gets the amount originally authorized for an order.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         * @return float
         */
        public function get_order_authorization_amount(\WC_Order $order)
        {
        }
        /**
         * Returns the gateway icon markup
         *
         * @since 3.0.0
         * @see WC_Payment_Gateway::get_icon()
         * @return string icon markup
         */
        public function get_icon()
        {
        }
        /**
         * Restores refunded Square inventory.
         *
         * @internal
         *
         * @since 2.0.0
         *
         * @param int $order_id order ID
         * @param int $refund_id refund ID
         */
        public function restore_refunded_inventory($order_id, $refund_id)
        {
        }
        /**
         * Check if the gateway has an account connected.
         *
         * @since 4.8.7
         *
         * @return bool true if the gateway has an account connected, false otherwise.
         */
        public function is_account_connected()
        {
        }
        /**
         * Returns true if the current gateway environment is configured to 'sandbox'
         *
         * @since 4.8.7
         *
         * @return bool true if the current environment is test environment.
         */
        public function is_in_test_mode()
        {
        }
        /**
         * Determine if the gateway still requires setup.
         *
         * @since 4.8.7
         *
         * @return bool tue if the gateway still requires setup, false otherwise.
         */
        public function needs_setup()
        {
        }
        /**
         * Returns the Onboarding URL for the gateway.
         *
         * @since 4.9.1
         *
         * @return string the Onboarding URL.
         */
        public function get_connection_url()
        {
        }
    }
    /**
     * # WooCommerce Payment Gateway Framework Direct Gateway
     *
     * @since 3.0.0
     */
    abstract class Payment_Gateway_Direct extends \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway
    {
        /**
         * Validate the payment fields when processing the checkout
         *
         * NOTE: if we want to bring billing field validation (ie length) into the
         * fold, see the Elavon VM Payment Gateway for a sample implementation
         *
         * @since 3.0.0
         * @see WC_Payment_Gateway::validate_fields()
         * @return bool true if fields are valid, false otherwise
         */
        public function validate_fields()
        {
        }
        /**
         * Returns true if the posted credit card fields are valid, false otherwise
         *
         * @since 3.0.0
         * @param boolean $is_valid true if the fields are valid, false otherwise
         * @return boolean true if the fields are valid, false otherwise
         */
        protected function validate_credit_card_fields($is_valid)
        {
        }
        /**
         * Validates the provided credit card expiration date
         *
         * @since 3.0.0
         * @param string $expiration_month the credit card expiration month
         * @param string $expiration_year the credit card expiration month
         * @return boolean true if the card expiration date is valid, false otherwise
         */
        protected function validate_credit_card_expiration_date($expiration_month, $expiration_year)
        {
        }
        /**
         * Validates the provided credit card account number
         *
         * @since 3.0.0
         * @param string $account_number the credit card account number
         * @return boolean true if the card account number is valid, false otherwise
         */
        protected function validate_credit_card_account_number($account_number)
        {
        }
        /**
         * Validates the provided Card Security Code, adding user error messages as
         * needed
         *
         * @since 3.0.0
         * @param string $csc the customer-provided card security code
         * @return boolean true if the card security code is valid, false otherwise
         */
        protected function validate_csc($csc)
        {
        }
        /**
         * Handles payment processing.
         *
         * @see WC_Payment_Gateway::process_payment()
         *
         * @since 3.0.0
         *
         * @param int|string $order_id
         * @return array associative array with members 'result' and 'redirect'
         */
        public function process_payment($order_id)
        {
        }
        /**
         * Handles updating a user's payment method during payment.
         *
         * This allows us to check the billing address against the last used so we can determine if it needs an update.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order
         * @return \WC_Order
         */
        protected function update_transaction_payment_method(\WC_Order $order)
        {
        }
        /**
         * Add payment and transaction information as class members of WC_Order
         * instance.  The standard information that can be added includes:
         *
         * $order->payment_total           - the payment total
         * $order->customer_id             - optional payment gateway customer id (useful for tokenized payments for certain gateways, etc)
         * $order->payment->account_number - the credit card or checking account number
         * $order->payment->last_four      - the last four digits of the account number
         * $order->payment->card_type      - the card type (e.g. visa) derived from the account number
         * $order->payment->routing_number - account routing number (check transactions only)
         * $order->payment->account_type   - optional type of account one of 'checking' or 'savings' if type is 'check'
         * $order->payment->card_type      - optional card type, ie one of 'visa', etc
         * $order->payment->exp_month      - the 2 digit credit card expiration month (for credit card gateways), e.g. 07
         * $order->payment->exp_year       - the 2 digit credit card expiration year (for credit card gateways), e.g. 17
         * $order->payment->csc            - the card security code (for credit card gateways)
         * $order->payment->check_number   - optional check number (check transactions only)
         * $order->payment->drivers_license_number - optional driver license number (check transactions only)
         * $order->payment->drivers_license_state  - optional driver license state code (check transactions only)
         * $order->payment->token          - payment token (for tokenized transactions)
         *
         * Note that not all gateways will necessarily pass or require all of the
         * above.  These represent the most common attributes used among a variety
         * of gateways, it's up to the specific gateway implementation to make use
         * of, or ignore them, or add custom ones by overridding this method.
         *
         * @since 3.0.0
         * @see WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway::get_order()
         * @param int|\WC_Order $order_id order ID being processed
         * @return \WooCommerce\Square\WC_Order_Square object with payment and transaction information attached
         */
        public function get_order($order_id)
        {
        }
        /**
         * Performs a credit card transaction for the given order and returns the result.
         *
         * @since 3.0.0
         *
         * @param \WooCommerce\Square\WC_Order_Square $order the order object
         * @param \WooCommerce\Square\Gateway\API\Responses\Create_Payment|null $response optional credit card transaction response
         * @return \WooCommerce\Square\Gateway\API\Responses\Create_Payment the response
         * @throws \Exception network timeouts, etc
         */
        protected function do_credit_card_transaction($order, $response = null)
        {
        }
        /** Add Payment Method feature ********************************************/
        /**
         * Entry method for the Add Payment Method feature flow. Note this is *not*
         * stubbed in the WC_Payment_Gateway abstract class, but is called if the
         * gateway declares support for it.
         *
         * @since 3.0.0
         */
        public function add_payment_method()
        {
        }
        /**
         * Perform the transaction to add the customer's payment method to their
         * account
         *
         * @since 3.0.0
         * @return array result with success/error message and request status (success/failure)
         * @throws \Exception
         */
        protected function do_add_payment_method_transaction(\WC_Order $order)
        {
        }
        /**
         * Creates the order required for adding a new payment method. Note that
         * a mock order is generated as there is no actual order associated with the
         * request.
         *
         * @since 3.0.0
         * @return \WooCommerce\Square\WC_Order_Square generated order object
         */
        protected function get_order_for_add_payment_method()
        {
        }
        /**
         * Add customer data as part of the add payment method transaction, primarily
         * customer ID
         *
         * @since 3.0.0
         * @param \WooCommerce\Square\WC_Order_Square $order mock order
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Create_Payment_Token_Response $response
         */
        protected function add_add_payment_method_customer_data($order, $response)
        {
        }
        /**
         * Adds data from the add payment method transaction, primarily:
         *
         * + transaction ID
         * + transaction date
         * + transaction environment
         *
         * @since 3.0.0
         *
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Create_Payment_Token_Response $response
         */
        protected function add_add_payment_method_transaction_data($response)
        {
        }
        /**
         * Allow gateway implementations to add additional data to the data saved
         * during the add payment method transaction
         *
         * @since 3.0.0
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Create_Payment_Token_Response $response create payment token response
         * @return array
         */
        protected function get_add_payment_method_payment_gateway_transaction_data($response)
        {
        }
        /** Getters ******************************************************/
        /**
         * Returns true if this is a direct type gateway
         *
         * @since 3.0.0
         * @return boolean if this is a direct payment gateway
         */
        public function is_direct_gateway()
        {
        }
        /**
         * Returns true if a transaction should be forced (meaning payment
         * processed even if the order amount is 0).  This is useful mostly for
         * testing situations
         *
         * @since 3.0.0
         * @return boolean true if the transaction request should be forced
         */
        public function transaction_forced()
        {
        }
    }
    /**
     * Payment Gateway Helper Class
     *
     * @since 3.0.0
     */
    class Payment_Gateway_Helper
    {
        /** @var string the Visa card type ID **/
        const CARD_TYPE_VISA = 'visa';
        /** @var string the MasterCard card type ID **/
        const CARD_TYPE_MASTERCARD = 'mastercard';
        /** @var string the American Express card type ID **/
        const CARD_TYPE_AMEX = 'amex';
        /** @var string the Diners Club card type ID **/
        const CARD_TYPE_DINERSCLUB = 'dinersclub';
        /** @var string the Discover card type ID **/
        const CARD_TYPE_DISCOVER = 'discover';
        /** @var string the JCB card type ID **/
        const CARD_TYPE_JCB = 'jcb';
        /** @var string the CarteBleue card type ID **/
        const CARD_TYPE_CARTEBLEUE = 'cartebleue';
        /** @var string the Maestro card type ID **/
        const CARD_TYPE_MAESTRO = 'maestro';
        /** @var string the Laser card type ID **/
        const CARD_TYPE_LASER = 'laser';
        /**
         * Perform standard luhn check.  Algorithm:
         *
         * 1. Double the value of every second digit beginning with the second-last right-hand digit.
         * 2. Add the individual digits comprising the products obtained in step 1 to each of the other digits in the original number.
         * 3. Subtract the total obtained in step 2 from the next higher number ending in 0.
         * 4. This number should be the same as the last digit (the check digit). If the total obtained in step 2 is a number ending in zero (30, 40 etc.), the check digit is 0.
         *
         * @since 3.0.0
         * @param string $account_number the credit card number to check
         * @return bool true if $account_number passes the check, false otherwise
         */
        public static function luhn_check($account_number)
        {
        }
        /**
         * Normalize a card type to a standard type ID and account for variations.
         *
         * @since 3.0.0
         * @param string $card_type the card type to normalize
         * @return string
         */
        public static function normalize_card_type($card_type)
        {
        }
        /**
         * Determine the credit card type from a given account number (only first 4
         * required)
         *
         * @since 3.0.0
         * @param string $account_number the credit card account number
         * @return string the credit card type
         */
        public static function card_type_from_account_number($account_number)
        {
        }
        /**
         * Translates a credit card type or bank account name to a full name,
         * e.g. 'mastercard' => 'MasterCard' or 'savings' => 'eCheck'
         *
         * @since 3.0.0
         * @param string $payment_type the credit card or bank type, ie 'mastercard', 'amex', 'checking'
         * @return string the credit card or bank account name, ie 'MasterCard', 'American Express', 'Checking Account'
         */
        public static function payment_type_to_name($payment_type)
        {
        }
        /**
         * Gets the known card types and their variations.
         *
         * Returns the card types in the format:
         *
         * 'mastercard' {
         *     'name'       => 'MasterCard',
         *     'variations' => array( 'mc' ),
         * }
         *
         * @since 3.0.0
         *
         * @return array
         */
        public static function get_card_types()
        {
        }
    }
    /**
     * My Payment Methods Class
     *
     * Renders the My Payment Methods table on the My Account page and handles
     * any associated actions (deleting a payment method, etc)
     *
     * @since 3.0.0
     */
    class Payment_Gateway_My_Payment_Methods
    {
        /** @var Payment_Gateway_Plugin */
        protected $plugin;
        /** @var \WooCommerce\Square\Framework\PaymentGateway\PaymentTokens\Payment_Gateway_Payment_Token[] array of token objects */
        protected $tokens;
        /** @var \WooCommerce\Square\Framework\PaymentGateway\PaymentTokens\Payment_Gateway_Payment_Token[] array of token objects */
        protected $credit_card_tokens;
        /** @var \WooCommerce\Square\Framework\PaymentGateway\PaymentTokens\Payment_Gateway_Payment_Token[] array of token objects */
        protected $echeck_tokens;
        /** @var bool true if there are tokens */
        protected $has_tokens;
        /**
         * Setup Class
         *
         * Note: this constructor executes during the `wp` action
         *
         * @param Payment_Gateway_Plugin $plugin gateway plugin
         * @since 3.0.0
         */
        public function __construct($plugin)
        {
        }
        /** Payment Method actions ************************************************/
        /**
         * Adds the details column next to method.
         *
         * @param array $columns Array of columns for payment methods.
         * @return array
         */
        public function filter_payment_method_columns($columns)
        {
        }
        /**
         * Renders the card brand.
         *
         * @param array $method Holds data about the payment method.
         */
        public function render_payment_method_method_data($method)
        {
        }
        /**
         * Renders card details.
         *
         * @param array $method Holds data about the payment method.
         */
        public function render_payment_method_details_data($method)
        {
        }
        /**
         * Redirect back to the Payment Methods (WC 2.6+) or My Account page
         *
         * @since 3.0.0
         */
        protected function redirect_to_my_account()
        {
        }
        /**
         * Return the gateway plugin, primarily a convenience method to other actors
         * using filters
         *
         * @since 3.0.0
         *
         * @return Payment_Gateway_Plugin
         */
        public function get_plugin()
        {
        }
        /**
         * Returns true if at least one of the plugin's gateways supports the
         * add new payment method feature
         *
         * @since 3.0.0
         * @return bool
         */
        protected function supports_add_payment_method()
        {
        }
        /**
         * Determines if we're viewing the My Account -> Payment Methods page.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        protected function is_payment_methods_page()
        {
        }
    }
    /**
     * Payment Form Class
     *
     * Handles rendering the payment form for both credit card and eCheck gateways
     *
     * @since 3.0.0
     */
    class Payment_Gateway_Payment_Form
    {
        /** @var \WC_Payment_Gateway gateway for this payment form */
        protected $gateway;
        /** @var array of WC_Payment_Gateway_Payment_Tokens, keyed by token ID */
        protected $tokens;
        /** @var bool default to show new payment method form */
        protected $default_new_payment_method = true;
        /**
         * Sets up class.
         *
         * @since 3.0.0
         *
         * @param Payment_Gateway|Payment_Gateway_Direct $gateway gateway for form
         */
        public function __construct($gateway)
        {
        }
        /**
         * Adds hooks for rendering the payment form.
         *
         * @see Payment_Gateway_Payment_Form::render()
         *
         * @since 3.0.0
         */
        protected function add_hooks()
        {
        }
        /**
         * Returns the active tokens for the current user/gateway
         *
         * @since 3.0.0
         * @return array of Payment_Gateway_Payment_Tokens, keyed by token ID
         */
        protected function get_tokens()
        {
        }
        /**
         * Returns the gateway for this form.
         *
         * @since 3.0.0
         *
         * @return Payment_Gateway|Payment_Gateway_Direct
         */
        public function get_gateway()
        {
        }
        /**
         * Return true if the current user has active tokens to display
         *
         * @since 3.0.0
         * @return bool
         */
        public function has_tokens()
        {
        }
        /**
         * Returns true if tokenization is allowed for the payment form. This is true
         * if both the gateway supports tokenization and it is enabled.
         *
         * Note that tokenization is not allowed on the pay page for guest customers,
         * as there is no way to create an account there.
         *
         * @since 3.0.0
         * @return bool true if tokenization is allowed
         */
        public function tokenization_allowed()
        {
        }
        /**
         * Returns true if tokenization is forced for the payment form. This is generally
         * true when a subscription or pre-order is in the cart and the payment
         * method must be tokenized.
         *
         * Note that only direct gateways support forced tokenization
         *
         * @since 3.0.0
         * @return bool true if tokenization is forced
         */
        public function tokenization_forced()
        {
        }
        /**
         * Return true if the payment form should default to showing the new payment
         * method form
         *
         * @since 3.0.0
         * @return bool
         */
        public function default_new_payment_method()
        {
        }
        /**
         * Get the payment form fields
         *
         * @since 3.0.0
         * @return array payment fields in format suitable for woocommerce_form_field()
         */
        protected function get_payment_fields()
        {
        }
        /**
         * Get default credit card form fields, note this pulls default values
         * from the associated gateway
         *
         * for an explanation of autocomplete attribute values, see:
         * @link https://html.spec.whatwg.org/multipage/forms.html#autofill
         *
         * @since 3.0.0
         * @return array credit card form fields
         */
        protected function get_credit_card_fields()
        {
        }
        /**
         * Get the payment form description HTML, generally set by the admin in
         * the gateway settings
         *
         * @since 3.0.0
         * @return string payment form description HTML
         */
        public function get_payment_form_description_html()
        {
        }
        /**
         * Get the saved payment methods HTML, this section includes the
         * "Manage Payment Method" button, the radio inputs for selecting an existing saved
         * payment method, and the radio input for using a new saved payment method
         *
         * @since 3.0.0
         * @return string saved payment methods HTML
         */
        protected function get_saved_payment_methods_html()
        {
        }
        /**
         * Get the "Manage Payment Methods" button HTML
         *
         * @since 3.0.0
         * @return string manage payment methods button html
         */
        protected function get_manage_payment_methods_button_html()
        {
        }
        /**
         * Get the saved payment method HTML for an given token, renders an input + label like:
         *
         * o <Amex logo> American Express ending in 6666 (expires 10/20)
         *
         * @since 3.0.0
         * @param \WC_Payment_Token_CC $token payment token
         * @return string saved payment method HTML
         */
        protected function get_saved_payment_method_html($token)
        {
        }
        /**
         * Get the title for a saved payment method, like
         *
         * <Amex logo> American Express ending in 6666 (expires 10/20)
         *
         * @since 3.0.0
         * @param \WC_Payment_Token_CC $token payment token
         * @return string saved payment method title
         */
        protected function get_saved_payment_method_title($token)
        {
        }
        /**
         * Get the "Use new payment method" radio input HTML, like
         *
         * o Use new <card>|<bank account>
         *
         * @since 3.0.0
         * @return string saved payment method title
         */
        protected function get_use_new_payment_method_input_html()
        {
        }
        /**
         * Get saved payment method checkbox HTML, like:
         *
         * [] Securely Save to Account
         *
         * @since 3.0.0
         * @return string save payment method checkbox HTML
         */
        protected function get_save_payment_method_checkbox_html()
        {
        }
        /** Rendering methods *****************************************************/
        /**
         * Renders the payment form
         *
         * @since 3.0.0
         */
        public function render()
        {
        }
        /**
         * Render the payment form description
         *
         * @hooked wc_{gateway ID}_payment_form_start @ priority 15
         *
         * @since 3.0.0
         */
        public function render_payment_form_description()
        {
        }
        /**
         * Render the saved payment methods
         *
         * @hooked wc_{gateway ID}_payment_form_start @ priority 20
         *
         * @since 3.0.0
         */
        public function render_saved_payment_methods()
        {
        }
        /**
         * Render the payment form opening fieldset tag and div
         *
         * @hooked wc_{gateway ID}_payment_form_start @ priority 30
         *
         * @since 3.0.0
         */
        public function render_fieldset_start()
        {
        }
        /**
         * Render the payment fields (e.g. account number, expiry, etc)
         *
         * @hooked wc_{gateway ID}_payment_form_start @ priority 0
         *
         * @since 3.0.0
         */
        public function render_payment_fields()
        {
        }
        /**
         * Render the payment, a simple wrapper around woocommerce_form_field() to
         * make it more convenient for concrete gateways to override form output
         *
         * @since 3.0.0
         * @param array $field
         */
        protected function render_payment_field($field)
        {
        }
        /**
         * Render the payment form closing fieldset tag, clearing div, and "save
         * payment method" checkbox
         *
         * @hooked wc_{gateway ID}_payment_form_end @ priority 5
         *
         * @since 3.0.0
         */
        public function render_fieldset_end()
        {
        }
        /**
         * Renders the payment form JS
         *
         * @hooked wc_{gateway ID}_payment_form_end @ priority 5
         *
         * @since 3.0.0
         */
        public function render_js()
        {
        }
    }
}
namespace WooCommerce\Square\Framework {
    /**
     * # WooCommerce Plugin Framework
     *
     * This framework class provides a base level of configurable and overrideable
     * functionality and features suitable for the implementation of a WooCommerce
     * plugin.  This class handles all the "non-feature" support tasks such
     * as verifying dependencies are met, loading the text domain, etc.
     */
    abstract class Plugin
    {
        /** @var object single instance of plugin */
        protected static $instance;
        /** @var string plugin id */
        private $id;
        /** @var string version number */
        private $version;
        /** @var string plugin path without trailing slash */
        private $plugin_path;
        /** @var string plugin uri */
        private $plugin_url;
        /** @var \WC_Logger instance */
        private $logger;
        /** @var  Admin_Message_Handler instance */
        private $message_handler;
        /** @var string the plugin text domain */
        private $text_domain;
        /** @var Plugin_Dependencies dependency handler instance */
        private $dependency_handler;
        /** @var Plugin\Lifecycle lifecycle handler instance */
        protected $lifecycle_handler;
        /** @var REST_API REST API handler instance */
        protected $rest_api_handler;
        /** @var Admin\Setup_Wizard handler instance */
        protected $setup_wizard_handler;
        /** @var Admin_Notice_Handler the admin notice handler class */
        private $admin_notice_handler;
        /**
         * Initialize the plugin.
         *
         * Child plugin classes may add their own optional arguments.
         *
         * @since 3.0.0
         *
         * @param string $id plugin id
         * @param string $version plugin version number
         * @param array $args {
         *     optional plugin arguments
         *
         *     @type string $text_domain the plugin textdomain, used to set up translations
         *     @type array  $dependencies {
         *         PHP extension, function, and settings dependencies
         *
         *         @type array $php_extensions PHP extension dependencies
         *         @type array $php_functions  PHP function dependencies
         *         @type array $php_settings   PHP settings dependencies
         *     }
         * }
         */
        public function __construct($id, $version, $args = array())
        {
        }
        /** Init methods **********************************************************/
        /**
         * Initializes the plugin dependency handler.
         *
         * @since 3.0.0
         *
         * @param array $dependencies {
         *     PHP extension, function, and settings dependencies
         *
         *     @type array $php_extensions PHP extension dependencies
         *     @type array $php_functions  PHP function dependencies
         *     @type array $php_settings   PHP settings dependencies
         * }
         */
        protected function init_dependencies($dependencies)
        {
        }
        /**
         * Builds the admin message handler instance.
         *
         * Plugins can override this with their own handler.
         *
         * @since 3.0.0
         */
        protected function init_admin_message_handler()
        {
        }
        /**
         * Builds the admin notice handler instance.
         *
         * Plugins can override this with their own handler.
         *
         * @since 3.0.0
         */
        protected function init_admin_notice_handler()
        {
        }
        /**
         * Builds the lifecycle handler instance.
         *
         * Plugins can override this with their own handler to perform install and
         * upgrade routines.
         *
         * @since 3.0.0
         */
        protected function init_lifecycle_handler()
        {
        }
        /**
         * Adds the action & filter hooks.
         *
         * @since 3.0.0
         */
        private function add_hooks()
        {
        }
        /**
         * Cloning instances is forbidden due to singleton pattern.
         *
         * @since 3.0.0
         */
        public function __clone()
        {
        }
        /**
         * Unserializing instances is forbidden due to singleton pattern.
         *
         * @since 3.0.0
         */
        public function __wakeup()
        {
        }
        /**
         * Include any critical files which must be available as early as possible,
         *
         * @since 3.0.0
         */
        private function includes()
        {
        }
        /**
         * Returns true if on the admin plugin settings page, if any
         *
         * @since 3.0.0
         * @return boolean true if on the admin plugin settings page
         */
        public function is_plugin_settings()
        {
        }
        /**
         * Return the plugin action links.  This will only be called if the plugin
         * is active.
         *
         * @since 3.0.0
         * @param array $actions associative array of action names to anchor tags
         * @return array associative array of plugin action links
         */
        public function plugin_action_links($actions)
        {
        }
        /**
         * Automatically log API requests/responses when using Base
         *
         * @since 3.0.0
         * @see Base::broadcast_request()
         */
        public function add_api_request_logging()
        {
        }
        /**
         * Log API requests/responses
         *
         * @since 3.0.0
         * @param array $request request data, see Base::broadcast_request() for format
         * @param array $response response data
         * @param string|null $log_id log to write data to
         */
        public function log_api_request($request, $response, $log_id = null)
        {
        }
        /**
         * Transform the API request/response data into a string suitable for logging
         *
         * @since 3.0.0
         * @param array $data
         * @return string
         */
        public function get_api_log_message($data)
        {
        }
        /**
         * Adds any PHP incompatibilities to the system status report.
         *
         * @since 3.0.0
         *
         * @param array $rows WooCommerce system status rows
         * @return array
         */
        public function add_system_status_php_information($rows)
        {
        }
        /**
         * Saves errors or messages to WooCommerce Log (woocommerce/logs/plugin-id-xxx.txt)
         *
         * @since 3.0.0
         * @param string $message error or message to save to log
         * @param string $log_id optional log id to segment the files by, defaults to plugin id
         */
        public function log($message, $log_id = null)
        {
        }
        /**
         * Gets the main plugin file.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_plugin_file()
        {
        }
        /**
         * The implementation for this abstract method should simply be:
         *
         * return __FILE__;
         *
         * @since 3.0.0
         * @return string the full path and filename of the plugin file
         */
        abstract protected function get_file();
        /**
         * Returns the plugin id
         *
         * @since 3.0.0
         * @return string plugin id
         */
        public function get_id()
        {
        }
        /**
         * Returns the plugin id with dashes in place of underscores, and
         * appropriate for use in frontend element names, classes and ids
         *
         * @since 3.0.0
         * @return string plugin id with dashes in place of underscores
         */
        public function get_id_dasherized()
        {
        }
        /**
         * Returns the plugin full name including "WooCommerce", ie
         * "WooCommerce X".  This method is defined abstract for localization purposes
         *
         * @since 3.0.0
         * @return string plugin name
         */
        abstract public function get_plugin_name();
        /**
         * Gets the dependency handler.
         *
         * @since 3.0.0
         *
         * @return Plugin_Dependencies
         */
        public function get_dependency_handler()
        {
        }
        /**
         * Gets the lifecycle handler instance.
         *
         * @since 3.0.0
         *
         * @return Plugin\Lifecycle
         */
        public function get_lifecycle_handler()
        {
        }
        /**
         * Gets the admin message handler.
         *
         * @since 3.0.0
         *
         * @return Admin_Message_Handler
         */
        public function get_message_handler()
        {
        }
        /**
         * Gets the admin notice handler instance.
         *
         * @since 3.0.0
         *
         * @return Admin_Notice_Handler
         */
        public function get_admin_notice_handler()
        {
        }
        /**
         * Returns the plugin version name.  Defaults to wc_{plugin id}_version
         *
         * @since 3.0.0
         * @return string the plugin version name
         */
        public function get_plugin_version_name()
        {
        }
        /**
         * Returns the current version of the plugin
         *
         * @since 3.0.0
         * @return string plugin version
         */
        public function get_version()
        {
        }
        /**
         * Returns the "Configure" plugin action link to go directly to the plugin
         * settings page (if any)
         *
         * @since 3.0.0
         * @see Plugin::get_settings_url()
         * @param string $plugin_id optional plugin identifier.  Note that this can be a
         *        sub-identifier for plugins with multiple parallel settings pages
         *        (ie a gateway that supports credit cards)
         * @return string plugin configure link
         */
        public function get_settings_link($plugin_id = null)
        {
        }
        /**
         * Returns the "Configure" plugin action link to go directly to the plugin
         * settings page (if any)
         *
         * @since 4.7.0
         * @see Plugin::get_settings_url()
         * @param string $step optional step identifier.
         *
         * @return string plugin configure link
         */
        public function get_square_onboarding_link($step = '')
        {
        }
        /**
         * Gets the plugin configuration URL
         *
         * @since 4.7.0
         * @see Plugin::get_settings_link()
         * @return string plugin settings URL
         */
        public function get_square_onboarding_url()
        {
        }
        /**
         * Gets the plugin configuration URL
         *
         * @since 3.0.0
         * @see Plugin::get_settings_link()
         * @param string $plugin_id optional plugin identifier.  Note that this can be a
         *        sub-identifier for plugins with multiple parallel settings pages
         *        (ie a gateway that supports credit cards)
         * @return string plugin settings URL
         */
        public function get_settings_url($plugin_id = null)
        {
        }
        /**
         * Returns the admin configuration url for the admin general configuration page
         *
         * @since 3.0.0
         * @return string admin configuration url for the admin general configuration page
         */
        public function get_general_configuration_url()
        {
        }
        /**
         * Gets the plugin documentation url, used for the 'Docs' plugin action
         *
         * @since 3.0.0
         * @return string documentation URL
         */
        public function get_documentation_url()
        {
        }
        /**
         * Gets the support URL, used for the 'Support' plugin action link
         *
         * @since 3.0.0
         * @return string support url
         */
        public function get_support_url()
        {
        }
        /**
         * Gets the plugin sales page URL.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_sales_page_url()
        {
        }
        /**
         * Gets the plugin reviews page URL.
         *
         * Used for the 'Reviews' plugin action and review prompts.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_reviews_url()
        {
        }
        /**
         * Returns the plugin's path without a trailing slash, i.e.
         * /path/to/wp-content/plugins/plugin-directory
         *
         * @since 3.0.0
         * @return string the plugin path
         */
        public function get_plugin_path()
        {
        }
        /**
         * Returns the plugin's url without a trailing slash, i.e.
         *
         * @since 3.0.0
         * @return string the plugin URL
         */
        public function get_plugin_url()
        {
        }
        /**
         * Returns the loaded framework __FILE__
         *
         * @since 3.0.0
         * @return string
         */
        public function get_framework_file()
        {
        }
        /**
         * Returns the loaded framework path, without trailing slash. Ths is the highest
         * version framework that was loaded by the bootstrap.
         *
         * @since 3.0.0
         * @return string
         */
        public function get_framework_path()
        {
        }
        /**
         * Returns the loaded framework assets URL without a trailing slash
         *
         * @since 3.0.0
         * @return string
         */
        public function get_framework_assets_url()
        {
        }
        /**
         * Helper function to determine whether a plugin is active
         *
         * @since 3.0.0
         * @param string $plugin_name plugin name, as the plugin-filename.php
         * @return boolean true if the named plugin is installed and active
         */
        public function is_plugin_active($plugin_name)
        {
        }
    }
}
namespace WooCommerce\Square\Framework\PaymentGateway {
    /**
     * # WooCommerce Payment Gateway Plugin Framework
     *
     * A payment gateway refinement of the WooCommerce Plugin Framework
     *
     * This framework class provides a base level of configurable and overrideable
     * functionality and features suitable for the implementation of a WooCommerce
     * payment gateway.  This class handles all the non-gateway support tasks such
     * as verifying dependencies are met, loading the text domain, etc.  It also
     * loads the payment gateway when needed now that the gateway is only created
     * on the checkout & settings pages / api hook.  The gateway can also be loaded
     * in the following instances:
     *
     * + On the My Account page to display / change saved payment methods (if supports tokenization)
     * + On the Admin User/Your Profile page to render/persist the customer ID field(s) (if supports customer_id)
     * + On the Admin Order Edit page to render a merchant account transaction direct link (if supports transaction_link)
     *
     * ## Supports (zero or more):
     *
     * + `customer_id`             - adds actions to show/persist the "Customer ID" area of the admin User edit page
     * + `transaction_link`        - adds actions to render the merchant account transaction direct link on the Admin Order Edit page.  (Don't forget to override the Payment_Gateway::get_transaction_url() method!)
     * + `capture_charge`          - adds actions to capture charge for authorization-only transactions
     * + `my_payment_methods`      - adds actions to show/handle a "My Payment Methods" area on the customer's My Account page. This will show saved payment methods for all plugin gateways that support tokenization.
     */
    abstract class Payment_Gateway_Plugin extends \WooCommerce\Square\Framework\Plugin
    {
        /** Customer ID feature */
        const FEATURE_CUSTOMER_ID = 'customer_id';
        /** Charge capture feature */
        const FEATURE_CAPTURE_CHARGE = 'capture_charge';
        /** My Payment Methods feature */
        const FEATURE_MY_PAYMENT_METHODS = 'my_payment_methods';
        /** @var array optional associative array of gateway id to array( 'gateway_class_name' => string, 'gateway' => Payment_Gateway ) */
        private $gateways;
        /** @var array optional array of currency codes this gateway is allowed for */
        private $currencies = array();
        /** @var array named features that this gateway supports which require action from the parent plugin, including 'tokenization' */
        private $supports = array();
        /** @var bool helper for lazy subscriptions active check */
        private $subscriptions_active;
        /** @var bool helper for lazy pre-orders active check */
        private $pre_orders_active;
        /** @var boolean true if this gateway requires SSL for processing transactions, false otherwise */
        private $require_ssl;
        /** @var \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway_Privacy payment gateway privacy handler instance */
        protected $privacy_handler;
        /** @var \WooCommerce\Square\Framework\PaymentGateway\Admin\Payment_Gateway_Admin_Order order handler instance */
        protected $admin_order_handler;
        /** @var \WooCommerce\Square\Framework\PaymentGateway\Admin\Payment_Gateway_Admin_User_Handler user handler instance */
        protected $admin_user_handler;
        /** @var Payment_Gateway_My_Payment_Methods adds My Payment Method functionality */
        private $my_payment_methods;
        /** @var Payment_Gateway_Apple_Pay the Apple Pay handler instance */
        private $apple_pay;
        /**
         * Initializes the plugin.
         *
         * Optional args:
         *
         * + `require_ssl` - boolean true if this plugin requires SSL for proper functioning, false otherwise. Defaults to false
         * + `gateways` - array associative array of gateway id to gateway class name.  A single plugin might support more than one gateway, ie credit card, echeck.  Note that the credit card gateway must always be the first one listed.
         * + `currencies` -  array of currency codes this gateway is allowed for, defaults to all
         * + `supports` - array named features that this gateway supports, including 'tokenization', 'transaction_link', 'customer_id', 'capture_charge'
         *
         * @since 3.0.0
         *
         * @see Plugin::__construct()
         * @param string $id plugin id
         * @param string $version plugin version number
         * @param array $args plugin arguments
         */
        public function __construct($id, $version, $args)
        {
        }
        /**
         * Adds the action & filter hooks.
         *
         * @since 3.0.0
         */
        private function add_hooks()
        {
        }
        /**
         * Initializes the plugin admin.
         *
         * @internal
         * @see Plugin::init_admin()
         *
         * @since 3.0.0
         */
        public function init_admin()
        {
        }
        /**
         * Adds any gateways supported by this plugin to the list of available payment gateways.
         *
         * @internal
         *
         * @since 3.0.0
         *
         * @param array $gateways
         * @return array $gateways
         */
        public function load_gateways($gateways)
        {
        }
        /**
         * Adjust the available gateways in certain cases.
         *
         * @since 3.0.0
         *
         * @param array $available_gateways the available payment gateways
         * @return array
         */
        public function adjust_available_gateways($available_gateways)
        {
        }
        /**
         * Include required files.
         *
         * @internal
         *
         * @since 3.0.0
         */
        private function includes()
        {
        }
        /** My Payment Methods methods ***********************************/
        /**
         * Instantiates the My Payment Methods table class instance when a user is
         * logged in on an account page and tokenization is enabled for at least
         * one of the active gateways.
         *
         * @internal
         *
         * @since 3.0.0
         */
        public function maybe_init_my_payment_methods()
        {
        }
        /**
         * Returns true if tokenization is supported and enabled for at least one
         * active gateway
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function tokenization_enabled()
        {
        }
        /**
         * Gets the My Payment Methods table instance.
         *
         * Overrideable by concrete gateway plugins to return a custom instance as needed
         *
         * @since 3.0.0
         *
         * @return Payment_Gateway_My_Payment_Methods
         */
        protected function get_my_payment_methods_instance()
        {
        }
        /**
         * Determines whether the My Payment Methods feature is supported.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function supports_my_payment_methods()
        {
        }
        /** Apple Pay *************************************************************/
        /**
         * Initializes Apple Pay if it's supported.
         *
         * @since 3.0.0
         */
        public function maybe_init_apple_pay()
        {
        }
        /**
         * Builds the Apple Pay handler instance.
         *
         * Gateways can override this to define their own Apple Pay class.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\ApplePay\Payment_Gateway_Apple_Pay
         */
        protected function build_apple_pay_instance()
        {
        }
        /**
         * Gets the Apple Pay handler instance.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\ApplePay\Payment_Gateway_Apple_Pay
         */
        public function get_apple_pay_instance()
        {
        }
        /**
         * Determines if this plugin has any gateways with Apple Pay support.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function supports_apple_pay()
        {
        }
        /** Admin methods ******************************************************/
        /**
         * Determines if on the admin gateway settings screen for this plugin.
         *
         * Multi-gateway plugins will return true if on either settings page
         *
         * @since 3.0.0
         *
         * @see Plugin::is_plugin_settings()
         * @return bool
         */
        public function is_plugin_settings()
        {
        }
        /**
         * Convenience method to add delayed admin notices, which may depend upon
         * some setting being saved prior to determining whether to render.
         *
         * @since 3.0.0
         *
         * @see Plugin::add_delayed_admin_notices()
         */
        public function add_delayed_admin_notices()
        {
        }
        /**
         * Adds any SSL admin notices.
         *
         * Checks if SSL is required and not available and adds a dismissible admin
         * notice if so.
         *
         * @since 3.0.0
         *
         * @see Payment_Gateway_Plugin::add_admin_notices()
         */
        protected function add_ssl_admin_notices()
        {
        }
        /**
         * Adds any currency admin notices.
         *
         * Checks if a particular currency is required and not being used and adds a
         * dismissible admin notice if so.
         *
         * @since 3.0.0
         *
         * @see Payment_Gateway_Plugin::render_admin_notices()
         */
        protected function add_currency_admin_notices()
        {
        }
        /**
         * Adds notices about enabled debug logging.
         *
         * @since 3.0.0
         */
        protected function add_debug_setting_notices()
        {
        }
        /** Integration methods ***************************************************/
        /**
         * Checks if a supported integration is activated (Subscriptions or Pre-Orders)
         * and adds a notice if a gateway supports the integration *and* tokenization,
         * but tokenization is not enabled
         *
         * @since 3.0.0
         */
        protected function add_integration_requires_tokenization_notices()
        {
        }
        /**
         * Edit the Subscriptions automatic renewal payments support column content
         * when a gateway supports subscriptions (via tokenization) but tokenization
         * is not enabled
         *
         * @since 3.0.0
         *
         * @param string $html column content
         * @param WC_Payment_Gateway|Payment_Gateway $gateway payment gateway being checked for support
         * @return string html
         */
        public function subscriptions_maybe_edit_renewal_support_status($html, $gateway)
        {
        }
        /**
         * Add some inline CSS to render the failed order status icon for the
         * automatic renewal payment support status column
         *
         * @since 3.0.0
         */
        public function subscriptions_add_renewal_support_status_inline_style()
        {
        }
        /**
         * Add gateway information to the system status report.
         *
         * @since 3.0.0
         */
        public function add_system_status_information()
        {
        }
        /** Helper methods ******************************************************/
        /**
         * Determines if the plugin supports the capture charge feature.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function supports_capture_charge()
        {
        }
        /**
         * Returns true if the gateway supports the named feature
         *
         * @since 3.0.0
         * @param string $feature the feature
         * @return boolean true if the named feature is supported
         */
        public function supports($feature)
        {
        }
        /** Getter methods ******************************************************/
        /**
         * Gets the privacy handler instance.
         *
         * @since 3.0.0
         *
         * @return Payment_Gateway_Privacy
         */
        public function get_privacy_instance()
        {
        }
        /**
         * Get the admin order handler instance.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\Admin\Payment_Gateway_Admin_Order
         */
        public function get_admin_order_handler()
        {
        }
        /**
         * Get the admin user handler instance.
         *
         * @since 3.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\Admin\Payment_Gateway_Admin_User_Handler
         */
        public function get_admin_user_handler()
        {
        }
        /**
         * Returns the gateway settings option name for the identified gateway.
         * Defaults to woocommerce_{gateway id}_settings
         *
         * @since 3.0.0
         *
         * @param string $gateway_id
         * @return string the gateway settings option name
         */
        protected function get_gateway_settings_name($gateway_id)
        {
        }
        /**
         * Returns the settings array for the identified gateway.  Note that this
         * will not include any defaults if the gateway has yet to be saved
         *
         * @since 3.0.0
         *
         * @param string $gateway_id gateway identifier
         * @return array settings array
         */
        public function get_gateway_settings($gateway_id)
        {
        }
        /**
         * Returns true if this plugin requires SSL to function properly
         *
         * @since 3.0.0
         *
         * @return boolean true if this plugin requires ssl
         */
        protected function requires_ssl()
        {
        }
        /**
         * Gets the plugin configuration URL
         *
         * @since 3.0.0
         *
         * @see Plugin::get_settings_url()
         * @param string $gateway_id the gateway identifier
         * @return string gateway settings URL
         */
        public function get_settings_url($gateway_id = null)
        {
        }
        /**
         * Returns the admin configuration url for a gateway
         *
         * @since 3.0.0
         *
         * @param string $gateway_id the gateway ID
         * @return string admin configuration url for the gateway
         */
        public function get_payment_gateway_configuration_url($gateway_id)
        {
        }
        /**
         * Returns true if the current page is the admin configuration page for a gateway
         *
         * @since 3.0.0
         *
         * @param string $gateway_id the gateway ID
         * @return boolean true if the current page is the admin configuration page for the gateway
         */
        public function is_payment_gateway_configuration_page($gateway_id)
        {
        }
        /**
         * Adds the given gateway id and gateway class name as an available gateway
         * supported by this plugin
         *
         * @since 3.0.0
         *
         * @param string $gateway_id the gateway identifier
         * @param string $gateway_class_name the corresponding gateway class name
         */
        public function add_gateway($gateway_id, $gateway_class_name)
        {
        }
        /**
         * Gets all supported gateway class names; typically this will be just one,
         * unless the plugin supports credit card and echeck variations
         *
         * @since 3.0.0
         *
         * @return array of string gateway class names
         */
        public function get_gateway_class_names()
        {
        }
        /**
         * Gets the gateway class name for the given gateway id
         *
         * @since 3.0.0
         *
         * @param string $gateway_id the gateway identifier
         * @return string gateway class name
         */
        public function get_gateway_class_name($gateway_id)
        {
        }
        /**
         * Gets all supported gateway objects; typically this will be just one,
         * unless the plugin supports credit card and echeck variations
         *
         * @since 3.0.0
         *
         * @return Payment_Gateway[]
         */
        public function get_gateways()
        {
        }
        /**
         * Adds the given $gateway to the internal gateways store
         *
         * @since 3.0.0
         *
         * @param string $gateway_id the gateway identifier
         * @param Payment_Gateway $gateway the gateway object
         */
        public function set_gateway($gateway_id, $gateway)
        {
        }
        /**
         * Returns the identified gateway object
         *
         * @since 3.0.0
         *
         * @param string $gateway_id optional gateway identifier, defaults to first gateway, which will be the credit card gateway in plugins with support for both credit cards and echecks
         * @return Payment_Gateway the gateway object
         */
        public function get_gateway($gateway_id = null)
        {
        }
        /**
         * Returns true if the plugin supports this gateway
         *
         * @since 3.0.0
         *
         * @param string $gateway_id the gateway identifier
         * @return boolean true if the plugin has this gateway available, false otherwise
         */
        public function has_gateway($gateway_id)
        {
        }
        /**
         * Returns all available gateway ids for the plugin
         *
         * @since 3.0.0
         *
         * @return array of gateway id strings
         */
        public function get_gateway_ids()
        {
        }
        /**
         * Returns the gateway for a given token
         *
         * @since 3.0.0
         *
         * @param string|int $user_id the user ID associated with the token
         * @param string $token the token string
         * @return Payment_Gateway|null gateway if found, null otherwise
         */
        public function get_gateway_from_token($user_id, $token)
        {
        }
        /**
         * No-op the plugin class implementation so the payment gateway class can
         * implement its own request logging. This is primarily done to keep the log
         * files separated by gateway ID
         *
         * @see Plugin::add_api_request_logging()
         *
         * @since 3.0.0
         */
        public function add_api_request_logging()
        {
        }
        /**
         * Returns the set of accepted currencies, or empty array if all currencies
         * are accepted.  This is the intersection of all currencies accepted by
         * any gateways this plugin supports.
         *
         * @since 3.0.0
         *
         * @return array of accepted currencies
         */
        public function get_accepted_currencies()
        {
        }
        /**
         * Checks is WooCommerce Subscriptions is active
         *
         * @since 3.0.0
         *
         * @return bool true if the WooCommerce Subscriptions plugin is active, false if not active
         */
        public function is_subscriptions_active()
        {
        }
        /**
         * Checks is WooCommerce Pre-Orders is active
         *
         * @since 3.0.0
         *
         * @return bool true if WC Pre-Orders is active, false if not active
         */
        public function is_pre_orders_active()
        {
        }
        /**
         * Returns the loaded payment gateway framework __FILE__
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_payment_gateway_framework_file()
        {
        }
        /**
         * Returns the loaded payment gateway framework path, without trailing slash.
         *
         * This is the highest version payment gateway framework that was loaded by
         * the bootstrap.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_payment_gateway_framework_path()
        {
        }
        /**
         * Returns the absolute path to the loaded payment gateway framework image
         * directory, without a trailing slash
         *
         * @since 3.0.0
         *
         * @return string relative path to framework image directory
         */
        public function get_payment_gateway_framework_assets_path()
        {
        }
        /**
         * Returns the loaded payment gateway framework assets URL, without a trailing slash
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_payment_gateway_framework_assets_url()
        {
        }
    }
    /**
     * The payment gateway privacy handler class.
     *
     * @since 3.0.0
     */
    class Payment_Gateway_Privacy extends \WC_Abstract_Privacy
    {
        /** @var Payment_Gateway_Plugin payment gateway plugin instance */
        private $plugin;
        /**
         * Constructs the class.
         *
         * @since 3.0.0
         *
         * @param Payment_Gateway_Plugin payment gateway plugin instance
         */
        public function __construct(\WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway_Plugin $plugin)
        {
        }
        /**
         * Adds the action & filter hooks.
         *
         * @since 3.0.0
         */
        protected function add_hooks()
        {
        }
        /**
         * Initial registration of privacy erasers and exporters.
         */
        public function register_erasers_exporters()
        {
        }
        /** Customer methods ******************************************************/
        /**
         * Adds the gateway data to customer data exports.
         *
         * @internal
         *
         * @since 3.0.0
         *
         * @param array $data customer personal data to export
         * @param \WC_Customer $customer customer object
         * @return array
         */
        public function add_export_customer_data($data, $customer)
        {
        }
        /**
         * Removes the gateway data during an order data erasure.
         *
         * @since 3.0.0
         *
         * @param array $response customer data erasure response
         * @param \WC_Customer $customer customer object
         * @return array
         */
        public function remove_customer_personal_data($response, $customer)
        {
        }
        /**
         * Handles the customer token exporter.
         *
         * @internal
         *
         * @param string $email_address email address for the user to export
         * @param int $page page offset - unused as we don't page tokens
         * @return array token export data
         */
        public function customer_tokens_exporter($email_address, $page)
        {
        }
        /**
         * Handles the customer token eraser.
         *
         * @internal
         *
         * @param string $email_address email address for the user to erase
         * @param int $page page offset - unused as we don't page tokens
         * @return array token eraser data
         */
        public function customer_tokens_eraser($email_address, $page)
        {
        }
        /** Order methods *********************************************************/
        /**
         * Adds the gateway data to order data exports.
         *
         * @internal
         *
         * @since 3.0.0
         *
         * @param array $data order personal data to export
         * @param \WC_Order $order order object
         * @return array
         */
        public function add_export_order_data($data, $order)
        {
        }
        /**
         * Removes the gateway data during an order data erasure.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         */
        public function remove_order_personal_data($order)
        {
        }
        /**
         * Gets the payment gateway plugin instance.
         *
         * @since 3.0.0
         *
         * @return Payment_Gateway_Plugin
         */
        protected function get_plugin()
        {
        }
    }
}
namespace WooCommerce\Square\Framework {
    class Plugin_Compatibility
    {
        /**
         * Logs a doing_it_wrong message.
         *
         * Backports wc_doing_it_wrong() to WC 2.6.
         *
         * @since 3.0.0
         *
         * @param string $func    function used
         * @param string $message message to log
         * @param string $version version the message was added in
         */
        public static function wc_doing_it_wrong($func, $message, $version)
        {
        }
        /**
         * Helper method to get the version of the currently installed WooCommerce
         *
         * @since 3.0.0
         * @return string woocommerce version number or null
         */
        public static function get_wc_version()
        {
        }
        /**
         * Determines if the installed version of WooCommerce is lower than the
         * passed version.
         *
         * @since 3.0.0
         *
         * @param string $version version number to compare
         * @return bool
         */
        public static function is_wc_version_lt($version)
        {
        }
        /**
         * Normalizes a WooCommerce page screen ID.
         *
         * Needed because WordPress uses a menu title (which is translatable), not slug, to generate screen ID.
         * See details in: https://core.trac.wordpress.org/ticket/21454
         *
         * @since 3.0.0
         * @param string $slug slug for the screen ID to normalize (minus `woocommerce_page_`)
         * @return string normalized screen ID
         */
        public static function normalize_wc_screen_id($slug = 'wc-settings')
        {
        }
        /**
         * Converts a shorthand byte value to an integer byte value.
         *
         * Wrapper for wp_convert_hr_to_bytes(), moved to load.php in WordPress 4.6 from media.php
         *
         * Based on ActionScheduler's compat wrapper for the same function:
         * ActionScheduler_Compatibility::convert_hr_to_bytes()
         *
         * @link https://secure.php.net/manual/en/function.ini-get.php
         * @link https://secure.php.net/manual/en/faq.using.php#faq.using.shorthandbytes
         *
         * @since 3.0.0
         *
         * @param string $value A (PHP ini) byte value, either shorthand or ordinary.
         * @return int An integer byte value.
         */
        public static function convert_hr_to_bytes($value)
        {
        }
    }
    class Plugin_Dependencies
    {
        /** @var array required PHP extensions */
        protected $php_extensions = array();
        /** @var array required PHP functions */
        protected $php_functions = array();
        /** @var array required PHP settings */
        protected $php_settings = array();
        /** @var Plugin plugin instance */
        protected $plugin;
        /**
         * Constructs the class.
         *
         * @param Plugin $plugin plugin instance
         * @param array $args {
         *     PHP extension, function, and settings dependencies
         *
         *     @type array $php_extensions PHP extension dependencies
         *     @type array $php_functions  PHP function dependencies
         *     @type array $php_settings   PHP settings dependencies
         * }
         */
        public function __construct(\WooCommerce\Square\Framework\Plugin $plugin, $args = array())
        {
        }
        /**
         * Parses the dependency arguments and sets defaults.
         *
         * @since 3.0.0
         *
         * @param array $args dependency args
         * @return array
         */
        private function parse_dependencies($args)
        {
        }
        /**
         * Adds the action & filter hooks.
         *
         * @since 3.0.0
         */
        protected function add_hooks()
        {
        }
        /**
         * Adds the admin dependency notices.
         *
         * @since 3.0.0
         */
        public function add_admin_notices()
        {
        }
        /**
         * Adds notices for any missing PHP extensions.
         *
         * @since 3.0.0
         */
        public function add_php_extension_notices()
        {
        }
        /**
         * Adds notices for any missing PHP functions.
         *
         * @since 3.0.0
         */
        public function add_php_function_notices()
        {
        }
        /**
         * Adds notices for any incompatible PHP settings.
         *
         * @since 3.0.0
         */
        public function add_php_settings_notices()
        {
        }
        /**
         * Gets any deprecated warning notices.
         *
         * @since 3.0.0
         */
        protected function add_deprecated_notices()
        {
        }
        /**
         * Adds an admin notice.
         *
         * @since 3.0.0
         *
         * @param string $id notice ID
         * @param string $message notice message
         * @param string $type notice type
         */
        protected function add_admin_notice($id, $message, $type = 'info')
        {
        }
        /** Getter methods ********************************************************/
        /**
         * Gets any missing PHP extensions.
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_missing_php_extensions()
        {
        }
        /**
         * Returns true if the plugin meets PHP dependencies, false otherwise.
         *
         * @return boolean
         */
        public function meets_php_dependencies()
        {
        }
        /**
         * Gets the required PHP extensions.
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_php_extensions()
        {
        }
        /**
         * Gets any missing PHP functions.
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_missing_php_functions()
        {
        }
        /**
         * Gets the required PHP functions.
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_php_functions()
        {
        }
        /**
         * Gets any incompatible PHP settings.
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_incompatible_php_settings()
        {
        }
        /**
         * Gets the required PHP settings.
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_php_settings()
        {
        }
        /**
         * Gets the plugin instance.
         *
         * @since 3.0.0
         *
         * @return Plugin
         */
        protected function get_plugin()
        {
        }
    }
    /**
     * Square Helper Class
     *
     * The purpose of this class is to centralize common utility functions.
     *
     * @since 3.0.0
     */
    class Square_Helper
    {
        /** encoding used for mb_*() string functions */
        const MB_ENCODING = 'UTF-8';
        /** String manipulation functions (all multi-byte safe) ***************/
        /**
         * Returns true if the haystack string starts with needle
         *
         * Note: case-sensitive
         *
         * @since 3.0.0
         * @param string $haystack
         * @param string $needle
         * @return bool
         */
        public static function str_starts_with($haystack, $needle)
        {
        }
        /**
         * Returns true if the needle exists in haystack
         *
         * Note: case-sensitive
         *
         * @since 3.0.0
         * @param string $haystack
         * @param string $needle
         * @return bool
         */
        public static function str_exists($haystack, $needle)
        {
        }
        /**
         * Returns a string with all non-ASCII characters removed. This is useful
         * for any string functions that expect only ASCII chars and can't
         * safely handle UTF-8. Note this only allows ASCII chars in the range
         * 33-126 (newlines/carriage returns are stripped)
         *
         * @since 3.0.0
         * @param string $string string to make ASCII
         * @return string
         */
        public static function str_to_ascii($string)
        {
        }
        /**
         * Truncates a given $string after a given $length if string is longer than
         * $length. The last characters will be replaced with the $omission string
         * for a total length not exceeding $length
         *
         * @since 3.0.0
         * @param string $string text to truncate
         * @param int $length total desired length of string, including omission
         * @param string $omission omission text, defaults to '...'
         * @return string
         */
        public static function str_truncate($string, $length, $omission = '...')
        {
        }
        /**
         * Helper method to check if the multibyte extension is loaded, which
         * indicates it's safe to use the mb_*() string methods
         *
         * @since 3.0.0
         * @return bool
         */
        protected static function multibyte_loaded()
        {
        }
        /** Array functions ***************************************************/
        /**
         * Insert the given element after the given key in the array
         *
         * Sample usage:
         *
         * given
         *
         * array( 'item_1' => 'foo', 'item_2' => 'bar' )
         *
         * array_insert_after( $array, 'item_1', array( 'item_1.5' => 'w00t' ) )
         *
         * becomes
         *
         * array( 'item_1' => 'foo', 'item_1.5' => 'w00t', 'item_2' => 'bar' )
         *
         * @since 3.0.0
         * @param array $array array to insert the given element into
         * @param string $insert_key key to insert given element after
         * @param array $element element to insert into array
         * @return array
         */
        public static function array_insert_after(array $array, $insert_key, array $element)
        {
        }
        /**
         * Lists an array as text.
         *
         * Takes an array and returns a list like "one, two, three, and four"
         * with a (mandatory) oxford comma.
         *
         * @since 3.0.0
         *
         * @param array $items items to list
         * @param string|null $conjunction coordinating conjunction, like "or" or "and"
         * @param string $separator list separator, like a comma
         * @return string
         */
        public static function list_array_items(array $items, $conjunction = null, $separator = '')
        {
        }
        /** Number helper functions *******************************************/
        /**
         * Format a number with 2 decimal points, using a period for the decimal
         * separator and no thousands separator.
         *
         * Commonly used for payment gateways which require amounts in this format.
         *
         * @since 3.0.0
         * @param float $number
         * @return string
         */
        public static function number_format($number)
        {
        }
        /**
         * Determines if an order contains only virtual products.
         *
         * @since 3.0.0
         * @param \WC_Order $order the order object
         * @return bool
         */
        public static function is_order_virtual(\WC_Order $order)
        {
        }
        /**
         * Safely get sanitized data from $_POST
         *
         * @since 3.0.0
         * @param string $key               Array key to get from $_POST array.
         * @param string $sanitize_callback Name of the sanitization callback function.
         *
         * @return string value from $_POST or blank string if $_POST[ $key ] is not set
         */
        public static function get_post($key = '', $sanitize_callback = 'sanitize_text_field')
        {
        }
        /**
         * Safely get and trim data from $_REQUEST
         *
         * @since 3.0.0
         * @param string $key               Array key to get from $_REQUEST array.
         * @param string $sanitize_callback Name of the sanitization callback function.
         *
         * @return string value from $_REQUEST or blank string if $_REQUEST[ $key ] is not set
         */
        public static function get_request($key, $sanitize_callback = 'sanitize_text_field')
        {
        }
        /**
         * Add and store a notice.
         *
         * WC notice functions are not available in the admin
         *
         * @since 3.0.0
         * @param string $message The text to display in the notice.
         * @param string $notice_type The singular name of the notice type - either error, success or notice. [optional]
         */
        public static function wc_add_notice($message, $notice_type = 'success')
        {
        }
        /**
         * Gets the full URL to the log file for a given $handle
         *
         * @since 3.0.0
         * @param string $handle log handle
         * @return string URL to the WC log file identified by $handle
         */
        public static function get_wc_log_file_url($handle)
        {
        }
        /**
         * Gets the current WordPress site name.
         *
         * This is helpful for retrieving the actual site name instead of the
         * network name on multisite installations.
         *
         * @since 3.0.0
         * @return string
         */
        public static function get_site_name()
        {
        }
        /**
         * Displays a notice if the provided hook has not yet run.
         *
         * @since 3.0.0
         *
         * @param string $hook action hook to check
         * @param string $method method/function name
         * @param string $version version the notice was added
         */
        public static function maybe_doing_it_early($hook, $method, $version)
        {
        }
        /**
         * Triggers a PHP error.
         *
         * This wrapper method ensures AJAX isn't broken in the process.
         *
         * @since 3.0.0
         * @param string $message the error message
         * @param int $type Optional. The error type. Defaults to E_USER_NOTICE
         */
        public static function trigger_error($message, $type = E_USER_NOTICE)
        {
        }
    }
}
namespace WooCommerce\Square\Framework\Utilities {
    /**
     * Square WordPress Background Job Handler class
     *
     * Based on the wonderful WP_Background_Process class by deliciousbrains:
     * https://github.com/A5hleyRich/wp-background-processing
     *
     * Subclasses SV_WP_Async_Request. Instead of the concept of `batches` used in
     * the Delicious Brains' version, however, this takes a more object-oriented approach
     * of background `jobs`, allowing greater control over manipulating job data and
     * processing.
     *
     * A batch implicitly expected an array of items to process, whereas a job does
     * not expect any particular data structure (although it does default to
     * looping over job data) and allows subclasses to provide their own
     * processing logic.
     *
     * @since 3.0.0
     */
    abstract class Background_Job_Handler
    {
        /** @var string async request prefix */
        protected $prefix = 'sv_wp';
        /** @var string async request action */
        protected $action = 'background_job';
        /** @var string data key */
        protected $data_key = 'data';
        /** @var int start time of current process */
        protected $start_time = 0;
        /** @var string cron hook identifier */
        protected $cron_hook_identifier;
        /** @var string cron interval identifier */
        protected $cron_interval_identifier;
        /** @var string debug message, used by the system status tool */
        protected $debug_message;
        /** @var string job identifier */
        protected $identifier;
        /**
         * Initiate new background job handler
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Adds the necessary action and filter hooks.
         *
         * @since 3.0.0
         */
        protected function add_hooks()
        {
        }
        /**
         * Check whether job queue is empty or not
         *
         * @since 3.0.0
         * @return bool True if queue is empty, false otherwise
         */
        protected function is_queue_empty()
        {
        }
        /**
         * Check whether background process is running or not
         *
         * Check whether the current process is already running
         * in a background process.
         *
         * @since 3.0.0
         * @return bool True if processing is running, false otherwise
         */
        protected function is_process_running()
        {
        }
        /**
         * Lock process
         *
         * Lock the process so that multiple instances can't run simultaneously.
         * Override if applicable, but the duration should be greater than that
         * defined in the time_exceeded() method.
         *
         * @since 3.0.0
         */
        protected function lock_process()
        {
        }
        /**
         * Unlock process
         *
         * Unlock the process so that other instances can spawn.
         *
         * @since 3.0.0
         * @return Background_Job_Handler
         */
        protected function unlock_process()
        {
        }
        /**
         * Check if memory limit is exceeded
         *
         * Ensures the background job handler process never exceeds 90%
         * of the maximum WordPress memory.
         *
         * @since 3.0.0
         *
         * @return bool True if exceeded memory limit, false otherwise
         */
        protected function memory_exceeded()
        {
        }
        /**
         * Get memory limit
         *
         * @since 3.0.0
         *
         * @return int memory limit in bytes
         */
        protected function get_memory_limit()
        {
        }
        /**
         * Create a background job
         *
         * Delicious Brains' versions alternative would be using ->data()->save().
         * Allows passing in any kind of job attributes, which will be available at item data processing time.
         * This allows sharing common options between items without the need to repeat
         * the same information for every single item in queue.
         *
         * Instead of returning self, returns the job instance, which gives greater
         * control over the job.
         *
         * @since 3.0.0
         *
         * @param array|mixed $attrs Job attributes.
         * @return \stdClass|object|null
         */
        public function create_job($attrs)
        {
        }
        /**
         * Get a job (by default the first in the queue)
         *
         * @since 3.0.0
         *
         * @param string $id Optional. Job ID. Will return first job in queue if not
         *                   provided. Will not return completed or failed jobs from queue.
         * @return \stdClass|object|null The found job object or null
         */
        public function get_job($id = null)
        {
        }
        /**
         * Gets jobs.
         *
         * @since 3.0.0
         *
         * @param array $args {
         *     Optional. An array of arguments
         *
         *     @type string|array $status Job status(es) to include
         *     @type string $order ASC or DESC. Defaults to DESC
         *     @type string $orderby Field to order by. Defaults to option_id
         * }
         * @return \stdClass[]|object[]|null Found jobs or null if none found
         */
        public function get_jobs($args = array())
        {
        }
        /**
         * Update job attrs
         *
         * @since 3.0.0
         *
         * @param \stdClass|object|string $job Job instance or ID
         * @return \stdClass|object|false on failure
         */
        public function update_job($job)
        {
        }
        /**
         * Handles job completion.
         *
         * @since 3.0.0
         *
         * @param \stdClass|object|string $job Job instance or ID
         * @return \stdClass|object|false on failure
         */
        public function complete_job($job)
        {
        }
        /**
         * Handle job failure
         *
         * Default implementation does not call this method directly, but it's
         * provided as a convenience method for subclasses that may call this to
         * indicate that a particular job has failed for some reason.
         *
         * @since 3.0.0
         *
         * @param \stdClass|object|string $job Job instance or ID
         * @param string $reason Optional. Reason for failure.
         * @return \stdClass|false on failure
         */
        public function fail_job($job, $reason = '')
        {
        }
        /**
         * Delete a job
         *
         * @since 3.0.0
         *
         * @param \stdClass|object|string $job Job instance or ID
         * @return bool|void returns false on failure
         */
        public function delete_job($job)
        {
        }
        /**
         * Handle job queue completion
         *
         * Override if applicable, but ensure that the below actions are
         * performed, or, call parent::complete().
         *
         * @since 3.0.0
         */
        protected function complete()
        {
        }
        /**
         * Schedule cron healthcheck
         *
         * @since 3.0.0
         * @param array $schedules
         * @return array
         */
        public function schedule_cron_healthcheck($schedules)
        {
        }
        /**
         * Schedule cron health check event
         *
         * @since 3.0.0
         */
        protected function schedule_event()
        {
        }
        /**
         * Clear scheduled health check event
         *
         * @since 3.0.0
         */
        protected function clear_scheduled_event()
        {
        }
        /**
         * Process an item from job data
         *
         * Implement this method to perform any actions required on each
         * item in job data.
         *
         * @since 3.0.0
         *
         * @param mixed $item Job data item to iterate over
         * @param \stdClass|object $job Job instance
         * @return mixed
         */
        abstract protected function process_item($item, $job);
        /**
         * Handles PHP shutdown, say after a fatal error.
         *
         * @since 3.0.0
         *
         * @param \stdClass|object $job the job being processed
         */
        public function handle_shutdown($job)
        {
        }
        /**
         * Update a job option in options database.
         *
         * @since 3.0.0
         *
         * @param \stdClass|object $job the job instance to update in database
         * @return int|bool number of rows updated or false on failure, see wpdb::update()
         */
        private function update_job_option($job)
        {
        }
        /** Debug & Testing Methods ***********************************************/
        /**
         * Translate the tool success message.
         *
         * This can be removed in favor of returning the message string in `run_debug_tool()`
         *  when WC 3.1 is required, though that means the message will always be "success" styled.
         *
         * @since 3.0.0
         *
         * @param string $translated the text to output
         * @param string $original the original text
         * @param string $domain the textdomain
         * @return string the updated text
         */
        public function translate_success_message($translated, $original, $domain)
        {
        }
        /** Helper Methods ********************************************************/
        /**
         * Gets the job handler identifier.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_identifier()
        {
        }
    }
}
namespace WooCommerce\Square {
    /**
     * The Square payment gateway class.
     *
     * @since 2.0.0
     *
     * @method Plugin get_plugin()
     */
    class Gateway extends \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway_Direct
    {
        /**
         * Error code used to indicate coupon/redemption failures that should fail checkout.
         *
         * @since 5.3.2
         */
        const COUPON_REDEMPTION_ERROR_CODE = 9001;
        /** @var Gateway\API API base instance */
        private $api;
        /**
         * As per documentation, as of now, SCA is enabled only for UK merchants, but to be implemented for Europe.
         * As other currencies get supported, add them here.
         *
         * @since 2.2.0
         *
         * @var array $sca_supported_currencies Currencies for which SCA(3DS) is supported
         */
        private $sca_supported_currencies = array('GBP', 'EUR');
        /**
         * Square Payment Form instance
         * Null by default.
         *
         * @since 2.2.3
         *
         */
        private $payment_form = null;
        /**
         * Holds the instance of the Digital_Wallet class.
         * @since 4.2.0
         *
         * @var null|\WooCommerce\Square\Gateway\Digital_Wallet
         */
        private $digital_wallet = null;
        /**
         * Constructs the class.
         *
         * @since 2.0.0
         */
        public function __construct()
        {
        }
        /**
         * Get the payment method title or show default if not set.
         *
         * @since 5.2.0
         * @return string payment method title to show on checkout
         */
        public function get_title()
        {
        }
        /**
         * Get the payment method description or show default if not set.
         *
         * @since 5.2.0
         * @return string payment method description to show on checkout
         */
        public function get_description()
        {
        }
        /**
         * Ajax callback to return payment token by token ID.
         *
         * @since 4.2.0
         */
        public function get_token_by_id()
        {
        }
        /**
         * Logs any data sent by the payment form JS via AJAX.
         *
         * @since 2.0.0
         */
        public function log_js_data()
        {
        }
        /**
         * Stores the Square item variation ID to order items when added to orders.
         *
         * @internal
         *
         * @since 2.0.0
         *
         * @param int $item_id order item ID
         * @param \WC_Order_Item $item order item object
         * @param int $order_id order ID
         */
        public function store_new_order_item_square_meta($item_id, $item, $order_id)
        {
        }
        /**
         * Overrides enqueue of the gateway-specific assets if present, including JS, CSS, and
         * localized script params
         *
         * @since 2.1.7
         */
        protected function enqueue_payment_form_assets()
        {
        }
        /**
         * Enqueues the gateway JS.
         *
         * @since 2.0.0
         */
        protected function enqueue_gateway_assets()
        {
        }
        /**
         * Retrieves the validation exception for the gateway.
         *
         * This function is used to fetch the exception that occurs during
         * the validation of fields in the payment gateway. It can be utilized
         * in the `validation_fields` method to handle and process validation errors.
         *
         * @since 4.9.3
         *
         * @return Exception|null The validation exception if one exists, or null if no exception occurred.
         */
        public function get_validation_exception()
        {
        }
        /**
         * Validates the entered payment fields.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function validate_fields()
        {
        }
        /**
         * Gets the order object with payment information added.
         *
         * @since 2.0.0
         *
         * @param int|\WC_Order $order_id order ID or object
         * @return \WC_Order
         */
        public function get_order($order_id)
        {
        }
        /**
         * Do the transaction.
         *
         * @since 2.0.0
         *
         * @param WC_Order_Square $order
         * @return bool
         * @throws \Exception
         */
        protected function do_transaction($order)
        {
        }
        /**
         * Performs a credit card transaction for the given order and returns the result.
         *
         * @since 4.6.0
         *
         * @param WC_Order_Square     $order the order object
         * @param \WooCommerce\Square\Gateway\API\Responses\Create_Payment|null $response optional credit card transaction response
         * @return \WooCommerce\Square\Gateway\API\Responses\Create_Payment     the response
         * @throws \Exception network timeouts, etc
         */
        protected function do_payment_method_transaction($order, $response = null)
        {
        }
        /**
         * Adds transaction data to the order.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order order object
         * @param \WooCommerce\Square\Gateway\API\Responses\Charge $response API response object
         */
        public function add_payment_gateway_transaction_data($order, $response)
        {
        }
        /**
         * Gets an order with capture data attached.
         *
         * @since 2.0.0
         *
         * @param int|\WC_Order $order order object
         * @param null|float $amount amount to capture
         * @return \WC_Order
         */
        public function get_order_for_capture($order, $amount = null)
        {
        }
        /**
         * Gets an order with refund data attached.
         *
         * @since 2.0.0
         *
         * @param int|\WC_Order $order order object
         * @param float $amount amount to refund
         * @param string $reason response for the refund
         *
         * @return \WC_Order|\WP_Error
         */
        protected function get_order_for_refund($order, $amount, $reason)
        {
        }
        /**
         * Gets a mock order for adding a new payment method.
         *
         * @since 2.0.0
         *
         * @return \WC_Order
         */
        protected function get_order_for_add_payment_method()
        {
        }
        /**
         * Builds the payment tokens handler instance.
         *
         * @since 2.0.0
         *
         * @return \WooCommerce\Square\Gateway\Card_Handler
         */
        public function build_payment_tokens_handler()
        {
        }
        /**
         * Returns the gift card object.
         *
         * @since 4.2.0
         *
         * @return Digital_Wallet;
         */
        public function get_digital_wallet_handler()
        {
        }
        /** Admin methods *************************************************************************************************/
        /**
         * Initialize payment gateway settings fields
         *
         * @since 2.3.0
         * @see WC_Settings_API::init_form_fields()
         */
        public function init_form_fields()
        {
        }
        /**
         * Adds the tokenization form fields to the gateway settings.
         *
         * Overridden to change the setting name to "Customer Profiles."
         *
         * @since 2.0.0
         *
         * @param array $form_fields existing fields
         * @return array
         */
        protected function add_tokenization_form_fields($form_fields)
        {
        }
        /**
         * Clear the CSC field settings, as CSC is always required by Square.
         *
         * @since 2.0.0
         *
         * @param array $form_fields
         * @return array
         */
        protected function add_csc_form_fields($form_fields)
        {
        }
        /**
         * Adds the Card Types setting field.
         *
         * This adds UnionPay card type option and activates it by default
         *
         * @since 2.0.0
         *
         * @param array $form_fields
         * @return array
         */
        protected function add_card_types_form_fields($form_fields)
        {
        }
        /**
         * Adds the Digital Wallet setting fields.
         *
         * @since 2.3.0
         *
         * @param array $form_fields
         * @return array
         */
        protected function add_digital_wallets_form_fields($form_fields)
        {
        }
        /** Conditional methods *******************************************************************************************/
        /**
         * Determines if the gateway is available.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function is_available()
        {
        }
        /**
         * Determines whether the CSC field is enabled.
         *
         * This is always required by the Square payment form JS.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function csc_enabled()
        {
        }
        /**
         * Determines whether new payment customers/tokens should be created before processing a payment.
         *
         * Square requires we create a new customer & customer card before referencing that customer in a transaction.
         *
         * @since 2.0.0
         * @since 4.9.7 - Changed to false to do tokenization after sale.
         *
         * @return bool
         */
        public function tokenize_before_sale()
        {
        }
        /**
         * Determines whether new payment customers/tokens should be created after processing a payment.
         *
         * @since 4.9.7
         *
         * @return bool
         */
        public function tokenize_after_sale()
        {
        }
        /**
         * Determines if 3d secure is enabled.
         *
         * @since      2.1.0
         * @deprecated 3.3.0 Square automatically detects whether SCA is required, so we do not need this function.
         *
         * @return bool
         */
        public function is_3d_secure_enabled()
        {
        }
        /**
         * Determines if digital wallets are available.
         *
         * @since 2.3
         * @return bool
         */
        public function is_digital_wallet_available()
        {
        }
        /** Getter methods ************************************************************************************************/
        /**
         * Gets order meta.
         *
         * Overridden to handle any missing transaction ID meta from v1.
         *
         * @since 2.0.0
         *
         * @param \WC_Order|int $order order object or ID
         * @param string $key meta key
         * @return mixed
         */
        public function get_order_meta($order, $key)
        {
        }
        /**
         * Gets the authorization -> capture time window.
         *
         * Square limits captures to 6 days.
         *
         * @since 2.0.0
         *
         * @return int
         */
        public function get_authorization_time_window()
        {
        }
        /**
         * Gets the payment form handler instance.
         *
         * @since 2.0.0
         *
         * @return \WooCommerce\Square\Gateway\Payment_Form
         */
        public function get_payment_form_instance()
        {
        }
        /**
         * Gets the API instance.
         *
         * @since 2.0.0
         *
         * @return Gateway\API
         */
        public function get_api()
        {
        }
        /**
         * Gets the gateway settings fields.
         *
         * @since 2.0.0
         *
         * @return array
         */
        protected function get_method_form_fields()
        {
        }
        /**
         * Gets a user's stored customer ID.
         *
         * Overridden to avoid auto-creating customer IDs, as Square generates them.
         *
         * @since 2.0.0
         *
         * @param int $user_id user ID
         * @param array $args arguments
         * @return string
         */
        public function get_customer_id($user_id, $args = array())
        {
        }
        /**
         * Gets a guest's customer ID.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order order object
         * @return string|bool
         */
        public function get_guest_customer_id(\WC_Order $order)
        {
        }
        /**
         * Gets the configured environment ID.
         *
         * Square doesn't really support a sandbox, so we don't show a setting for this.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_environment()
        {
        }
        /**
         * Gets the configured application ID.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_application_id()
        {
        }
        /**
         * AJAX WooCommerce checkout validation handler
         *
         * Tap into  woocommerce_after_checkout_validation hook
         * and return WooCommerce checkout validation errors
         *
         * @since 2.2
         */
        public function wc_ajax_square_checkout_handler()
        {
        }
        /**
         * Filters to show only the Square gateway when cart contains a Gift card product
         * or a Square discount code.
         *
         * @since 4.2.0
         *
         * @param array $gateways Array of payment gateways.
         * @return array
         */
        public function filter_available_gateways($gateways)
        {
        }
        /**
         * If no payment gateways are available and cart contains gift card or Square discount code,
         * then show error message.
         *
         * @since 4.2.0
         *
         * @param string $text Error message.
         * @return string
         */
        public function filter_no_payment_gatways_message($text)
        {
        }
        /**
         * Validate WooCommerce checkout data on Square JS AJAX call
         *
         * Returns validation errors (or success) as JSON and exits to prevent checkout
         *
         * @since 2.2
         *
         * @param array    $data WooCommerce checkout POST data.
         * @param WP_Error $errors WooCommerce checkout errors.
         */
        public function wc_ajax_square_checkout_validate($data, $errors = null)
        {
        }
        /**
         * Returns the $order object with a unique transaction ref member added
         *
         * @since 2.2.1
         * @param \WC_Order $order the order object
         * @return \WC_Order order object with member named unique_transaction_ref
         */
        protected function get_order_with_unique_transaction_ref($order)
        {
        }
        /**
         * Returns the payment method image URL (if any) for the given $type, ie
         * if $type is 'amex' a URL to the american express card icon will be
         * returned.  If $type is 'echeck', a URL to the echeck icon will be
         * returned.
         *
         * @since 3.4.0
         * @param string $type the payment method cc type or name
         * @return string the image URL or null
         */
        public function get_payment_method_image_url($type)
        {
        }
        /**
         * Mark an order as refunded. This should only be used when the full order
         * amount has been refunded.
         *
         * @since 3.2.0
         *
         * @param \WC_Order $order order object
         */
        public function mark_order_as_refunded($order)
        {
        }
        /**
         * Get order amount via AJAX.
         *
         * @since 4.1.0
         */
        public function get_order_amount()
        {
        }
        /**
         * Check if request is to change payment method.
         *
         * @since 4.9.7
         *
         * @return boolean
         */
        public function is_change_payment_method_request()
        {
        }
        /**
         * Returns whether the order should be charged.
         *
         * @since 4.9.7
         */
        public function should_charge_order()
        {
        }
    }
}
namespace WooCommerce\Square\Gateway {
    /**
     * The base Square gateway API class.
     *
     * @since 2.0.0
     */
    class API extends \WooCommerce\Square\API
    {
        /** @var string location ID to use for requests */
        protected $location_id;
        /** @var \WC_Order order object associated with a request, if any */
        protected $order;
        /** @var string API ID */
        protected $api_id;
        /** @var bool whether the gateway is in sandbox mode */
        protected $is_sandbox = false;
        /**
         * Constructs the class.
         *
         * @since 2.0.0
         *
         * @param string $access_token the API access token
         * @param string $location_id location ID to use for requests
         * @param bool   $is_sandbox whether the gateway is in sandbox mode
         */
        public function __construct($access_token, $location_id, $is_sandbox = null)
        {
        }
        /** Transaction methods *******************************************************************************************/
        /**
         * Performs a credit card authorization for the given order.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order order object
         * @return \WooCommerce\Square\API\Response
         * @throws \Exception
         */
        public function credit_card_authorization(\WC_Order $order)
        {
        }
        /**
         * Performs a credit card charge for the given order.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order order object
         * @return \WooCommerce\Square\API\Response
         * @throws \Exception
         */
        public function credit_card_charge(\WC_Order $order)
        {
        }
        /**
         * Performs a capture for a given authorized order.
         *
         * @since 4.6.0
         *
         * @param \WC_Order $order order object
         * @return \WooCommerce\Square\API\Response
         * @throws \Exception
         */
        public function capture_payment(\WC_Order $order)
        {
        }
        /**
         * Performs a credit card capture for a given authorized order.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order order object
         * @return \WooCommerce\Square\API\Response
         * @throws \Exception
         */
        public function credit_card_capture(\WC_Order $order)
        {
        }
        /**
         * Performs a gift card charge for a given order.
         *
         * @param \WC_Order $order order object
         * @since 3.7.0
         * @return \WooCommerce\Square\Gateway\API\Responses\Create_Payment
         */
        public function gift_card_charge(\WC_Order $order)
        {
        }
        /**
         * Performs a cash app pay authorization for the given order.
         *
         * @since 4.6.0
         *
         * @param \WC_Order $order order object
         * @return \WooCommerce\Square\Gateway\API\Responses\Create_Payment
         * @throws \Exception
         */
        public function cash_app_pay_authorization(\WC_Order $order)
        {
        }
        /**
         * Performs a Cash App Pay charge for the given order.
         *
         * @since 4.5.0
         *
         * @param \WC_Order $order   Order object
         * @param bool      $capture Whether to capture the charge or not.
         * @return \WooCommerce\Square\Gateway\API\Responses\Create_Payment
         * @throws \Exception
         */
        public function cash_app_pay_charge(\WC_Order $order, $capture = true)
        {
        }
        /**
         * Performs a refund for the given order.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order        WooCommerce order object.
         * @param array     $payment_data Array of payment information necessary for a refund.
         * @return \WooCommerce\Square\API\Response
         * @throws \Exception
         */
        public function refund(\WC_Order $order, $payment_data = array())
        {
        }
        /**
         * Performs a void for the given order.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order order object
         * @return \WooCommerce\Square\API\Response
         * @throws \Exception
         */
        public function void(\WC_Order $order)
        {
        }
        /**
         * Creates a payment token for the given order.
         *
         * @since 2.0.0
         *
         * @param \WC_Order|\WooCommerce\Square\WC_Order_Square $order the order object
         * @return API\Responses\Create_Customer_Card|API\Responses\Create_Customer
         * @throws \Exception
         */
        public function tokenize_payment_method($order)
        {
        }
        /**
         * Creates a payment token for the given order.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order the order object
         * @return API\Responses\Create_Customer_Card
         * @throws \Exception
         */
        public function create_customer_card(\WC_Order $order)
        {
        }
        /**
         * Creates a new customer based on the given order.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order order object
         * @return API\Responses\Create_Customer
         * @throws \Exception
         */
        public function create_customer(\WC_Order $order)
        {
        }
        /**
         * Gets all tokenized payment methods for the customer.
         *
         * @since 2.0.0
         *
         * @param string $customer_id unique customer id
         * @return API\Responses\Get_Customer
         * @throws \Exception
         */
        public function get_tokenized_payment_methods($customer_id)
        {
        }
        /**
         * Removes the tokenized payment method (disables the card on Square).
         *
         * Safeguard: when this site is staging/local/development and uses production Square
         * credentials, we skip the Square API call for admin/CLI/cron requests (e.g. merchant
         * deleting users, privacy erasure) so that live customer cards are never disabled.
         * When we skip, we still return a successful response so the local token is removed
         * in WordPress only. See should_disable_card_on_square().
         *
         * @since 2.0.0
         *
         * @param string $token the payment method token (Square card ID)
         * @param string $customer_id unique customer id
         * @return API\Response
         * @throws \Exception
         */
        public function remove_tokenized_payment_method($token, $customer_id)
        {
        }
        /**
         * Determines whether we should call the Square API to disable the card when a token is removed.
         *
         * Used to avoid disabling live customer cards when token removal happens on a staging/
         * local/development site that uses production Square credentials (e.g. merchant deletes
         * users on staging → we must not call Square so live cards stay enabled).
         *
         * Logic:
         * - Sandbox: always call Square (test data only).
         * - Customer request (e.g. My Account "delete payment method"): always call Square.
         * - Admin/CLI/cron on production site: call Square.
         * - Admin/CLI/cron on non-production site (staging/local/dev or WCS duplicate): do not call Square.
         *
         * @since 5.3.3
         *
         * @param string $token       the payment method token (Square card ID).
         * @param string $customer_id unique customer id.
         *
         * @return bool true to call the Square API and disable the card, false to skip the API call
         */
        protected function should_disable_card_on_square($token, $customer_id)
        {
        }
        /**
         * Whether the current WordPress environment is staging, local, development, or a WCS duplicate site.
         *
         * @since 5.3.3
         *
         * @return bool true if the site is non-production (staging/local/dev or WooCommerce Subscriptions duplicate)
         */
        protected function is_staging_or_non_production_site()
        {
        }
        /**
         * Creates a new Square order from a WooCommerce order.
         *
         * @since 2.0.0
         *
         * @param string $location_id location ID
         * @param \WC_Order $order
         * @return \Square\Models\Order
         * @throws \Exception
         */
        public function create_order($location_id, \WC_Order $order)
        {
        }
        /**
         * Retrieves a Square order.
         *
         * @param string $order_id The Square order ID.
         *
         * @return \Square\Models\Order
         */
        public function retrieve_order($order_id)
        {
        }
        /**
         * Calculates a Square order without creating one.
         *
         * This method follows the standard request/response pattern used throughout the plugin.
         * It uses API\Requests\Orders::set_calculate_order_data() to prepare the request,
         * and API.php::do_square_request() handles the actual API call as a special case
         * via direct HTTP. The SDK's CalculateOrderRequest only supports order and proposed_rewards
         * (loyalty); we need to send proposed_discount_codes (discount code IDs), so the request
         * is made in do_square_request() using wp_remote_post.
         *
         * @param \WC_Order|null       $order                   Optional. WooCommerce order object. Can be null when called from cart context.
         * @param \Square\Models\Order $square_order            Square order object to calculate.
         * @param array                $proposed_discount_codes Optional. Array of discount code IDs to propose for calculation.
         * @param bool                 $return_raw_response     Optional. If true, returns array with both order and raw response data.
         *
         * @return \Square\Models\Order|array Returns Order object, or array with 'order' and 'raw_response' if $return_raw_response is true.
         * @throws \Exception
         */
        public function calculate_order($order, \Square\Models\Order $square_order, array $proposed_discount_codes = array(), $return_raw_response = false)
        {
        }
        /**
         * Updates a Square order.
         *
         * @param \WC_Order            $order        Woo order object.
         * @param \Square\Models\Order $square_order Square order object.
         */
        public function update_order(\WC_Order $order, \Square\Models\Order $square_order)
        {
        }
        /**
         * Creates a Redemption to link a Square discount code to a Square order.
         *
         * @since 5.3.0
         *
         * @param string $discount_code_id The Square discount code ID.
         * @param string $order_id          The Square order ID.
         * @param string $idempotency_key   Optional. Idempotency key for the request.
         * @return array|WP_Error Redemption object data or WP_Error on failure.
         */
        public function create_redemption($discount_code_id, $order_id, $idempotency_key = null)
        {
        }
        /**
         * Updates the payment total of an existing payment.
         *
         * @param \WC_Order $order  The WooCommerce order object.
         * @param float     $amount The new payment total.
         *
         * @return \Square\Models\Payment
         */
        public function update_payment(\WC_Order $order, float $amount)
        {
        }
        /**
         * Adjusts an existing Square order by amount.
         * When the current Square order is passed, positive adjustments use a service charge (not a line item) so the amount is not
         * eligible for discounts already on the order (a Square coupon, or an earlier downward adjustment).
         * Otherwise, positive adjustments use a line item (original plugin behavior).
         *
         * @since 2.0.4
         *
         * @param string                    $location_id          Square location ID.
         * @param \WC_Order                 $order                WooCommerce order.
         * @param int                       $version              Current 'version' value of Square order.
         * @param int                       $amount               Adjustment in smallest unit (cents). Positive = add, negative = discount.
         * @param \Square\Models\Order|null $square_coupon_in_use Current Square order to add a service charge to; null = use line item.
         * @return \Square\Models\Order
         * @throws \Exception
         */
        public function adjust_order($location_id, \WC_Order $order, $version, $amount, $square_coupon_in_use = null)
        {
        }
        /**
         * Adjusts the Square order by delta so its total matches the WooCommerce total (charge what the customer saw).
         *
         * A downward adjustment is an order-level discount, which Square applies before tax and caps at the pre-tax
         * subtotal, so it can leave the Square total below the WooCommerce total. The remainder is then added as an
         * untaxed, post-tax service charge: a line item would be absorbed by any unused part of that same discount,
         * which can zero the order (e.g. a WooCommerce gift card larger than the pre-tax subtotal).
         *
         * @since 5.5.2
         *
         * @param string                    $location_id          Square location ID.
         * @param \WC_Order                 $order                WooCommerce order.
         * @param \Square\Models\Order      $square_order         Current Square order.
         * @param \Square\Models\Order|null $square_coupon_in_use Current Square order when redemption is used; null otherwise.
         * @return \Square\Models\Order
         * @throws \Exception
         */
        public function reconcile_order_total($location_id, \WC_Order $order, $square_order, $square_coupon_in_use = null)
        {
        }
        /**
         * Performs payments when a transaction is done using multiple payment methods.
         * For example: Gift Card + Square Credit Card.
         *
         * @param array  $payment_ids Array of payment IDs.
         * @param string $order_id    Square order ID.
         * @return \WooCommerce\Square\Gateway\API\Responses\Create_PayOrder
         * @since 3.9.0
         */
        public function pay_order($payment_ids, $order_id)
        {
        }
        /**
         * Gets an existing transaction.
         *
         * @since 2.0.0
         *
         * @param string $transaction_id transaction ID
         * @param string $location_id location ID
         * @return API\Responses\Charge
         * @throws \Exception
         */
        public function get_transaction($transaction_id, $location_id = '')
        {
        }
        /**
         * Creates a Gift Card.
         *
         * @since 4.2.0
         *
         * @param $order_id Line item order ID.
         * @return API\Responses\Get_Gift_Card
         */
        public function create_gift_card($order_id)
        {
        }
        /**
         * Activates a Gift Card which is in a pending state.
         *
         * @since 4.2.0
         *
         * @param string $gift_card_id The ID of the inactive Gift Card.
         * @param string $order_id     Square Order ID associated with the Gift Card.
         * @param string $line_item_id Line Item ID for the Gift Card.
         */
        public function activate_gift_card($gift_card_id, $order_id, $line_item_id)
        {
        }
        /**
         * Loads an existing gift card with an amount.
         *
         * @since 4.2.0
         *
         * @param string $gan          The gift card number.
         * @param string $order_id     The Square order ID.
         * @param string $line_item_id The line item order ID for the gift card.
         */
        public function load_gift_card($gan, $order)
        {
        }
        /**
         * Sets data to refund/adjust decrement funds in a gift card.
         *
         * @since 4.2.0
         *
         * @param string               $gan          Gift card number.
         * @param \Square\Models\Money $amount_money The amount to be refunded.
         * @param \WC_Order            $order        WooCommerce order.
         */
        public function refund_gift_card($gan, $amount_money, $order)
        {
        }
        /**
         * Gets an existing payment.
         *
         * @since 2.2.0
         *
         * @param string $payment_id transaction ID
         * @return API\Responses\Create_Payment
         * @throws \Exception
         */
        public function get_payment($payment_id)
        {
        }
        /**
         * Cancel authorized payment.
         *
         * @since 4.6.0
         *
         * @param string $payment_id transaction ID
         * @return API\Responses\Create_Payment
         * @throws \Exception
         */
        public function cancel_payment($payment_id)
        {
        }
        /**
         * Retrieves a gift card using nonce.
         *
         * @since 3.7.0
         *
         * @param string $gan Gift card number.
         *
         * @return API\Responses\Get_Gift_Card
         */
        public function retrieve_gift_card($nonce = '')
        {
        }
        /**
         * Retrieves a gift card using GAN.
         *
         * @since 4.2.0
         *
         * @param string $gan Gift card number.
         *
         * @return API\Responses\Get_Gift_Card
         */
        public function retrieve_gift_card_by_gan($gan = '')
        {
        }
        /**
         * Searches for Square orders.
         *
         * @since 5.0.0
         *
         * @param array  $location_ids Array of location IDs.
         * @param string $start_time   Start time in the RFC 3339 format for the search.
         * @param int    $limit        Number of orders to retrieve.
         * @param string $cursor       Cursor for pagination.
         * @param string $end_time     Optional end time in the RFC 3339 format for the search.
         *
         * @return array Array containing orders and cursor.
         *
         * @throws \Exception
         */
        public function search_orders($location_ids, $start_time, $limit = 100, $cursor = '', $end_time = '')
        {
        }
        /**
         * Validates the parsed response.
         *
         * @since 2.0.0
         *
         * @return bool
         * @throws \Exception
         */
        protected function do_post_parse_response_validation()
        {
        }
        /** Conditional methods *******************************************************************************************/
        /**
         * Determines if this API supports getting a customer's tokenized payment methods.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function supports_get_tokenized_payment_methods()
        {
        }
        /**
         * Determines if this API supports updating tokenized payment methods.
         *
         * @see Payment_Gateway_API::update_tokenized_payment_method()
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function supports_update_tokenized_payment_method()
        {
        }
        /**
         * Determines if this API supports removing a tokenized payment method.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function supports_remove_tokenized_payment_method()
        {
        }
        /** Getter methods ************************************************************************************************/
        /**
         * Gets the location ID to be used for requests.
         *
         * @since 2.0.0
         *
         * @return string
         */
        protected function get_location_id()
        {
        }
        /**
         * Gets the object associated with the request, if any.
         *
         * @since 2.0.0
         *
         * @return \WC_Order
         */
        public function get_order()
        {
        }
        /**
         * Gets the API ID.
         *
         * @since 2.0.0
         *
         * @return string
         */
        protected function get_api_id()
        {
        }
        /** No-op methods *************************************************************************************************/
        /**
         * The gateway API does not support check debits.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order order object
         */
        public function check_debit(\WC_Order $order)
        {
        }
        /**
         * Updates a tokenized payment method.
         *
         * Square API does not allow updating a stored card's address, and instead recommends deleting and re-adding a new
         * card. This isn't an option for us since subscriptions would break any time an address is updated.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order order object
         */
        public function update_tokenized_payment_method(\WC_Order $order)
        {
        }
        /**
         * Set API ID to used for logging.
         *
         * @param string $api_id
         * @return void
         */
        public function set_api_id($api_id)
        {
        }
    }
}
namespace WooCommerce\Square\Gateway\API\Requests {
    /**
     * The Cards API request class.
     *
     * @since 3.0.0
     */
    class Card extends \WooCommerce\Square\API\Request
    {
        /**
         * Initializes a new Card request.
         *
         * @since 3.0.0
         * @param \Square\SquareClient $api_client the API client
         */
        public function __construct($api_client)
        {
        }
        /**
         * Sets the data for creating a new customer card.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order object
         */
        public function set_create_card_data(\WC_Order $order)
        {
        }
        /**
         * Sets the data for deleting an existing card.
         *
         * @since 3.0.0
         *
         * @param string $card_id Square card ID
         */
        public function set_delete_card_data($card_id)
        {
        }
    }
    /**
     * The customers API request class.
     *
     * @since 2.0.0
     */
    class Customers extends \WooCommerce\Square\API\Requests\Customers
    {
        /**
         * Sets the data for creating a new customer.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order order object
         */
        public function set_create_customer_data(\WC_Order $order)
        {
        }
        /**
         * Gets a billing address model from a WC order.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order order object
         * @return \Square\Models\Address
         */
        public static function get_address_from_order(\WC_Order $order)
        {
        }
    }
    /**
     * The Gift Card request class.
     *
     * @since 3.7.0
     */
    class Gift_Card extends \WooCommerce\Square\API\Request
    {
        /**
         * Location ID.
         *
         * @since 4.2.0
         * @var string
         */
        public $location_id;
        /**
         * Initializes a new Catalog request.
         *
         * @since 3.7.0
         *
         * @param string               $location_id Location ID.
         * @param \Square\SquareClient $api_client  The API client
         */
        public function __construct($location_id, $api_client)
        {
        }
        /**
         * Sets data for the `retrieveGiftCardFromNonce` API method.
         *
         * @param string $nonce Gift Card payment nonce.
         */
        public function set_retrieve_gift_card_data($nonce = '')
        {
        }
        /**
         * Sets data for the `retrieveGiftCardFromGAN` API method.
         *
         * @since 4.2.0
         *
         * @param string $gan Gift card number.
         */
        public function set_retrieve_gift_card_from_gan_data($gan = '')
        {
        }
        /**
         * Sets data to create a Gift card.
         *
         * @since 4.2.0
         *
         * @param $order_id Line item order ID.
         */
        public function set_create_gift_card_data($order_id)
        {
        }
    }
    /**
     * The Gift Card Activities request class.
     *
     * @since 4.2.0
     */
    class Gift_Card_Activities extends \WooCommerce\Square\API\Request
    {
        /**
         * Location ID.
         *
         * @since 4.2.0
         *
         * @var string
         */
        public $location_id;
        /**
         * Initializes a new Catalog request.
         *
         * @since 4.2.0
         *
         * @param \Square\SquareClient $api_client the API client
         */
        public function __construct($location_id, $api_client)
        {
        }
        /**
         * Sets data required to activate a Gift card.
         *
         * @since 4.2.0
         *
         * @param string $gift_card_id The ID of the inactive Gift Card.
         * @param string $order_id     Square Order ID associated with the Gift Card.
         * @param string $line_item_id Line Item ID for the Gift Card.
         */
        public function set_activate_gift_card_data($gift_card_id, $order_id, $line_item_id)
        {
        }
        /**
         * Loads an existing gift card with an amount.
         *
         * @since 4.2.0
         *
         * @param string    $gan The gift card number.
         * @param \WC_Order $order WooCommerce order.
         */
        public function set_load_gift_card_data($gan, $order)
        {
        }
        /**
         * Refunds/adjusts decrement when a Gift Card purchase/reload is refunded.
         *
         * @since 4.2.0
         *
         * @param string               $gan          Gift card number.
         * @param \Square\Models\Money $amount_money The amount to be refunded.
         * @param \WC_Order            $order        WooCommerce order.
         */
        public function set_gift_card_refund_data($gan, $amount_money, $order)
        {
        }
    }
    /**
     * The Orders API request class.
     *
     * @since 2.0.0
     */
    class Orders extends \WooCommerce\Square\API\Request
    {
        /**
         * Square order object for calculateOrder request.
         * Used to store the order object when calculating discounts.
         * Made public to allow access from API.php::do_square_request().
         *
         * @var \Square\Models\Order
         */
        public $square_order;
        /**
         * Proposed discount codes for calculateOrder request.
         * Array of discount code IDs to propose for calculation.
         * Made public to allow access from API.php::do_square_request().
         *
         * @var array
         */
        public $proposed_discount_codes = array();
        /**
         * Whether to return raw response data for calculateOrder.
         * When true, the raw JSON response will be available in addition to the parsed order object.
         * Made public to allow access from API.php::do_square_request().
         *
         * @var bool
         */
        public $return_raw_response = false;
        /**
         * WooCommerce order object.
         * Stored for reference during calculateOrder request.
         * Made public to allow access from API.php::do_square_request().
         *
         * @var \WC_Order|null
         */
        public $wc_order;
        /**
         * Raw response data from calculateOrder API call.
         * This is populated by the API.php do_square_request method when handling calculateOrder.
         * Used to provide access to the full JSON response including per-line-item discount details.
         *
         * @var array
         */
        public $raw_calculate_order_response;
        /**
         * Initializes a new Catalog request.
         *
         * @since 2.0.0
         *
         * @param \Square\SquareClient $api_client the API client
         */
        public function __construct($api_client)
        {
        }
        /**
         * Sets the data for creating an order.
         *
         * @since 2.0.0
         *
         * @param string $location_id location ID
         * @param \WC_Order $order order object
         */
        public function set_create_order_data($location_id, \WC_Order $order)
        {
        }
        /**
         * Prepares data to retrieve a Square order.
         *
         * @param string $order_id The Square order ID.
         */
        public function set_retrieve_order_data($order_id)
        {
        }
        /**
         * Prepare data to update Square order.
         *
         * @param \WC_Order            $order        WooCommerce order object.
         * @param \Square\Models\Order $square_order Square order object.
         */
        public function set_update_order_data(\WC_Order $order, \Square\Models\Order $square_order)
        {
        }
        /**
         * Sets the data for calculating a Square order.
         *
         * Note: The SDK's CalculateOrderRequest only supports order and proposed_rewards (loyalty).
         * We need to send proposed_discount_codes (discount code IDs), so the actual API call is
         * made in API.php::do_square_request() via direct HTTP, following the same request/response pattern.
         *
         * @since 5.3.0
         *
         * @param \WC_Order|null       $order                   Optional. WooCommerce order object. Can be null when called from cart context.
         * @param \Square\Models\Order $square_order            Square order object to calculate.
         * @param array                $proposed_discount_codes Optional. Array of discount code IDs to propose for calculation.
         * @param bool                 $return_raw_response     Optional. If true, the raw JSON response will be available.
         */
        public function set_calculate_order_data($order, \Square\Models\Order $square_order, array $proposed_discount_codes = array(), $return_raw_response = false)
        {
        }
        /**
         * Sets the data for an order.
         *
         * @since 3.7.0
         *
         * @param \WC_Order            $order              WooCommerce order object.
         * @param \Square\Models\Order $square_order       Square order object.
         * @param string               $order_request_type The type of order request.
         */
        public function set_order_data(\WC_Order $order, \Square\Models\Order $order_model, $order_request_type = 'update')
        {
        }
        /**
         * Sets the fulfillment data for an order.
         *
         * @since 5.0.0
         *
         * @param \WC_Order            $order        WooCommerce order object.
         * @param \Square\Models\Order $order_model Square order object.
         * @return \Square\Models\Order
         */
        protected function set_fulfillment_data(\WC_Order $order, \Square\Models\Order $order_model)
        {
        }
        /**
         * Sets request data when a payment is to be made using multiple payment methods.
         * For example: Gift Card + Square Credit Card.
         *
         * @param array  $payment_ids Array of payment IDs.
         * @param string $order_id    Square order ID.
         * @since 3.9.0
         */
        public function set_pay_order_data($payment_ids, $order_id)
        {
        }
        /**
         * Gets Square line item objects for an order's product items.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order order object
         * @return \WC_Order_Item_Product[]
         */
        protected function get_product_line_items(\WC_Order $order)
        {
        }
        /**
         * Gets Square line item objects for an order's fee items.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order order object
         * @return \WC_Order_Item_Fee[]
         */
        protected function get_fee_line_items(\WC_Order $order)
        {
        }
        /**
         * Gets Square line item objects for an order's shipping items.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order order object
         * @return \WC_Order_Item_Shipping[]
         */
        protected function get_shipping_line_items(\WC_Order $order)
        {
        }
        /**
         * Gets Square order service charge objects for the order's shipping methods.
         * Sends shipping as order-level service charges per Square's recommendation (not as line items).
         *
         * @since 5.3.0
         *
         * @param \WC_Order                        $order WooCommerce order object.
         * @param \Square\Models\OrderLineItemTax[] $taxes Order taxes keyed by rate_id (for taxable service charges).
         * @return \Square\Models\OrderServiceCharge[]
         */
        protected function get_order_service_charges_for_shipping(\WC_Order $order, array $taxes)
        {
        }
        /**
         * Gets Square API line item objects.
         *
         * @since 2.2.6
         *
         * @param \WC_Order $order
         * @param \WC_Order_Item[] $line_items
         * @param \Square\Models\OrderLineItemTax[] $taxes
         * @return \Square\Models\OrderLineItem[]
         */
        protected function get_api_line_items(\WC_Order $order, $line_items, $taxes)
        {
        }
        /**
         * Gets the tax line items for an order.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order
         * @return \Square\Models\OrderLineItemTax[]
         */
        protected function get_order_taxes(\WC_Order $order)
        {
        }
        /**
         * Creates applied taxes array for each Square line item.
         *
         * @since 2.0.4
         *
         * @param \Square\Models\OrderLineItemTax[] $taxes
         * @param WC_Order_Item $line_item
         * @return \Square\Models\OrderLineItemAppliedTax[] $taxes
         */
        protected function apply_taxes($taxes, $line_item)
        {
        }
        /**
         * Sets the data for updating an order with a line item adjustment.
         *
         * @since 2.0.4
         *
         * @param string $location_id location ID
         * @param \WC_Order $order order object
         * @param int $version Current 'version' value of Square order
         * @param int $amount Amount of line item in smallest unit
         */
        public function add_line_item_order_data($location_id, \WC_Order $order, $version, $amount)
        {
        }
        /**
         * Sets the data for updating an order with a discount adjustment.
         *
         * @since 2.0.4
         *
         * @param string $location_id location ID
         * @param \WC_Order $order order object
         * @param int $version Current 'version' value of Square order
         * @param int $amount Amount of discount in smallest unit
         */
        public function add_discount_order_data($location_id, \WC_Order $order, $version, $amount)
        {
        }
        /**
         * Sets the data for updating an order with a service charge adjustment.
         * Used for positive adjustments so the amount is not eligible for coupon discount (unlike a line item).
         *
         * @since 5.0.0
         *
         * @param string                    $location_id           Square location ID.
         * @param \WC_Order                 $order                 WooCommerce order.
         * @param int                       $version               Current version of the Square order.
         * @param int                       $amount                Adjustment amount in smallest currency unit (cents).
         * @param \Square\Models\Order|null $existing_square_order Current Square order (to preserve existing service charges e.g. shipping).
         */
        public function add_service_charge_order_data($location_id, \WC_Order $order, $version, $amount, $existing_square_order = null)
        {
        }
        /**
         * Sets the data for searching orders.
         *
         * @since 5.0.0
         *
         * @param array  $location_ids Array of location IDs to search in.
         * @param string $start_time   Start time for the search (ISO 8601 format).
         * @param int    $limit        Maximum number of orders to return.
         * @param string $cursor       Cursor for pagination.
         * @param string $end_time     Optional end time for the search (ISO 8601 format).
         */
        public function set_search_orders_data($location_ids, $start_time, $limit = 100, $cursor = '', $end_time = '')
        {
        }
        /**
         * Check if order fulfillment sync is enabled.
         *
         * @since 5.0.0
         * @return bool True if enabled, false otherwise.
         */
        public function is_order_fulfillment_sync_enabled()
        {
        }
    }
    /**
     * The Payments API request class.
     *
     * @since 2.2.0
     */
    class Payments extends \WooCommerce\Square\API\Request
    {
        /** @var string location ID */
        protected $location_id;
        /**
         * Initializes a new payments request.
         *
         * @since 2.2.0
         * @param string $location_id location ID
         * @param \Square\SquareClient $api_client the API client
         */
        public function __construct($location_id, $api_client)
        {
        }
        /**
         * Sets the data for an authorization/delayed capture.
         *
         * @since 2.2.0
         * @param \WC_Order $order order object
         */
        public function set_authorization_data(\WC_Order $order)
        {
        }
        /**
         * Sets the data for a charge.
         *
         * @since 2.2.0
         *
         * @param \WC_Order $order
         * @param bool $capture whether to immediately capture the charge
         */
        public function set_charge_data(\WC_Order $order, $capture = true, $is_cash_app_pay = false)
        {
        }
        /**
         * Prepares data required to update the payment total.
         *
         * @since 3.7.0
         *
         * @param \WC_Order $order  The WooCommerce order object.
         * @param float     $amount The new payment total.
         */
        public function set_update_payment_data(\WC_Order $order, float $amount)
        {
        }
        /**
         * Sets the data for capturing a payment.
         *
         * @since 2.2.0
         *
         * @param \WC_Order $order order object
         */
        public function set_capture_data(\WC_Order $order)
        {
        }
        /**
         * Sets the data for capturing a gift card payment.
         *
         * @param \WC_Order $order order object
         * @since 3.7.0
         */
        public function set_gift_card_charge_data(\WC_Order $order)
        {
        }
        /**
         * Sets the data for voiding/cancelling a payment.
         *
         * @since 2.2.0
         *
         * @param \WC_Order $order order object
         */
        public function set_void_data(\WC_Order $order)
        {
        }
        /**
         * Sets the data for getting a Payment.
         *
         * @since 2.2.0
         *
         * @param string $payment_id payment ID
         */
        public function set_get_payment_data($payment_id)
        {
        }
        /**
         * Sets the data for cancel a Payment.
         *
         * @since 4.6.0
         *
         * @param string $payment_id payment ID
         */
        public function set_cancel_payment_data($payment_id)
        {
        }
        /** Getter methods ************************************************************************************************/
        /** Gets the location ID for this request.
         *
         * All requests in this type must have a location ID.
         *
         * @since 2.0.0
         *
         * @return string
         */
        protected function get_location_id()
        {
        }
    }
    /**
     * The Refunds API request class.
     *
     * @since 2.2.0
     */
    class Refunds extends \WooCommerce\Square\API\Request
    {
        /**
         * Initializes a new refund request.
         *
         * @since 2.2.0
         * @param \Square\SquareClient $api_client the API client
         */
        public function __construct($api_client)
        {
        }
        /**
         * Sets the data for refund a payment.
         *
         * @since 2.2.0
         *
         * @param \WC_Order $order       order object
         * @param array     $refund_data array of data required for a refund.
         */
        public function set_refund_data(\WC_Order $order, $refund_data = array())
        {
        }
    }
    class Transactions extends \WooCommerce\Square\API\Request
    {
        /** @var string location ID */
        protected $location_id;
        /**
         * Initializes a new transactions request.
         *
         * @since 2.0.0
         *
         * @param string $location_id location ID
         * @param \Square\SquareClient $api_client the API client
         */
        public function __construct($location_id, $api_client)
        {
        }
        /**
         * Sets the data for an authorization/delayed capture.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order order object
         */
        public function set_authorization_data(\WC_Order $order)
        {
        }
        /**
         * Sets the data for a charge.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order
         * @param bool $capture whether to immediately capture the charge
         */
        public function set_charge_data(\WC_Order $order, $capture = true)
        {
        }
        /**
         * Sets the data for capturing a transaction.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order order object
         */
        public function set_capture_data(\WC_Order $order)
        {
        }
        /**
         * Sets the data for refund a transaction.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order order object
         */
        public function set_refund_data(\WC_Order $order)
        {
        }
        /**
         * Sets the data for voiding a transaction.
         *
         * @since 2.0.0
         *
         * @param \WC_Order $order order object
         */
        public function set_void_data(\WC_Order $order)
        {
        }
        /**
         * Sets the data for getting a transaction.
         *
         * @since 2.0.0
         *
         * @param string $transaction_id transaction ID
         */
        public function set_get_transaction_data($transaction_id)
        {
        }
        /** Getter methods ************************************************************************************************/
        /** Gets the location ID for this request.
         *
         * All requests in this type must have a location ID.
         *
         * @since 2.0.0
         *
         * @return string
         */
        protected function get_location_id()
        {
        }
    }
}
namespace WooCommerce\Square\Gateway\API {
    class Response extends \WooCommerce\Square\API\Response implements \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response
    {
        /**
         * The transaction has been approved.
         */
        const STATUS_COMPLETED = 'COMPLETED';
        /**
         * The transaction has been approved.
         */
        const STATUS_APPROVED = 'APPROVED';
        /**
         * The transaction has been authorized but not yet captured.
         */
        const STATUS_AUTHORIZED = 'AUTHORIZED';
        /**
         * Determines if the transaction was approved.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function transaction_approved()
        {
        }
        /**
         * Determines if the transaction was held.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function transaction_held()
        {
        }
        /** Getter methods ************************************************************************************************/
        /**
         * Gets the transaction ID.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_transaction_id()
        {
        }
        /**
         * Gets the response status message.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_status_message()
        {
        }
        /**
         * Gets the response status code.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_status_code()
        {
        }
        /**
         * Gets array of response status codes.
         *
         * @since 3.5.0
         *
         * @return array
         */
        public function get_status_codes()
        {
        }
        /**
         * Gets the message to display to the user.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_user_message()
        {
        }
        /**
         * Gets the payment type.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_payment_type()
        {
        }
    }
    /**
     * WooCommerce Payment Gateway API Response Message Helper
     *
     * This utility class is meant to provide a standard set of error messages to be
     * displayed to the customer during checkout.
     *
     * Most gateways define a plethora of error conditions, some of which a customer
     * can resolve on their own, and others which must be handled by the admin/
     * merchant.  It's not always clear which conditions should be reported to a
     * customer, or what the best wording is.  This utility class seeks to ease
     * the development burden of handling customer-facing error messages by
     * defining a set of common error conditions/messages which can be used by
     * nearly any gateway.
     *
     * This class, or a subclass, should be instantiated by the API response object,
     * which will use a gateway-specific mapping of error conditions to message,
     * and returned by the `Payment_Gateway_API_Response::get_user_message()`
     * method implementation.  Add new common/generic codes and messages to this
     * base class as they are encountered during gateway integration development,
     * and use a subclass to include any gateway-specific codes/messages.
     *
     * @since 2.2.3
     */
    class Response_Message_Helper
    {
        /**
         * Returns a message appropriate for a frontend user.  This should be used
         * to provide enough information to a user to allow them to resolve an
         * issue on their own, but not enough to help nefarious folks fishing for
         * info.
         *
         * @since 2.2.3
         *
         * @param string[] $message_ids array of string $message_id's which identify the message(s) to return
         * @return string a user message, combining all $message_ids
         */
        public function get_user_messages($message_ids)
        {
        }
        /**
         * Returns a message appropriate for a frontend user.  This should be used
         * to provide enough information to a user to allow them to resolve an
         * issue on their own, but not enough to help nefarious folks fishing for
         * info.
         *
         * @since 2.2.3
         * @param string $message_id identifies the message to return
         * @return string a user message
         */
        public function get_user_message($message_id)
        {
        }
    }
}
namespace WooCommerce\Square\Gateway\API\Responses {
    /**
     * The Charge API response object.
     *
     * @since 2.0.0
     *
     * @method \Square\Models\ChargeResponse get_data()
     */
    class Charge extends \WooCommerce\Square\Gateway\API\Response implements \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Authorization_Response
    {
        /**
         * Determines if the charge was held.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function transaction_held()
        {
        }
        /** Getter methods ************************************************************************************************/
        /**
         * Gets the authorization code.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_authorization_code()
        {
        }
        /**
         * Gets the transaction ID.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_transaction_id()
        {
        }
        /**
         * Gets the location ID.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_location_id()
        {
        }
        /**
         * Gets the Square order ID, if any.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_square_order_id()
        {
        }
        /**
         * Gets the Square tender (auth) object.
         *
         * @since 2.0.0
         *
         * @return \Square\Models\Tender|null
         */
        public function get_tender()
        {
        }
        /**
         * Gets the Square transaction object.
         *
         * @since 2.0.0
         *
         * @return \Square\Models\Transaction|null
         */
        public function get_transaction()
        {
        }
        /**
         * Gets the message to display to the user.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_user_message()
        {
        }
        /** No-op methods *************************************************************************************************/
        public function get_avs_result()
        {
        }
        public function get_csc_result()
        {
        }
        public function csc_match()
        {
        }
    }
    /**
     * Customer create response.
     *
     * @since 2.0.0
     *
     * @method \Square\Models\CreateCustomerResponse get_data()
     */
    class Create_Customer extends \WooCommerce\Square\Gateway\API\Response implements \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Customer_Response
    {
        /**
         * Gets the new customer ID.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_customer_id()
        {
        }
    }
    /**
     * Create customer response class.
     *
     * @since 2.0.0
     *
     * @method \Square\Models\CreateCustomerCardResponse get_data()
     */
    class Create_Customer_Card extends \WooCommerce\Square\Gateway\API\Response implements \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Create_Payment_Token_Response
    {
        /**
         * Gets the created payment token.
         *
         * @since 2.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\PaymentTokens\Payment_Gateway_Payment_Token|null
         */
        public function get_payment_token()
        {
        }
    }
    /**
     * The Create PayOrder API response object.
     *
     * @since 3.9.0
     *
     * @method \Square\Models\CreatePayOrderResponse get_data()
     */
    class Create_PayOrder extends \WooCommerce\Square\Gateway\API\Response
    {
        /**
         * Gets the Square payment object.
         *
         * @since 3.9.0
         * @return \Square\Models\Order|null
         */
        public function get_order()
        {
        }
        /**
         * Returns true if the order status is completed.
         *
         * @since 3.9.0
         * @return boolean
         */
        public function transaction_approved()
        {
        }
        /**
         * Returns array of trasaction IDs when payment is done using multiple payment methods.
         * For example, Square Gift card + Square credit card.
         *
         * @since 3.9.0
         * @return array
         */
        public function get_transaction_ids()
        {
        }
    }
    /**
     * The Create Payment API response object.
     *
     * @since 2.2.0
     *
     * @method \Square\Models\CreatePaymentResponse get_data()
     */
    class Create_Payment extends \WooCommerce\Square\Gateway\API\Response implements \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Authorization_Response
    {
        /**
         * Determines if the charge was held.
         *
         * @since 2.2.0
         *
         * @return bool
         */
        public function transaction_held()
        {
        }
        /** Getter methods ************************************************************************************************/
        /**
         * Gets the authorization code.
         *
         * @since 2.2.0
         *
         * @return string
         */
        public function get_authorization_code()
        {
        }
        /**
         * Gets the transaction (payment) ID.
         *
         * @since 2.2.0
         *
         * @return string
         */
        public function get_transaction_id()
        {
        }
        /**
         * Gets the location ID.
         *
         * @since 2.2.0
         *
         * @return string
         */
        public function get_location_id()
        {
        }
        /**
         * Gets the Square order ID, if any.
         *
         * @since 2.2.0
         *
         * @return string
         */
        public function get_square_order_id()
        {
        }
        /**
         * Gets the Square payment object.
         *
         * @since 2.2.0
         *
         * @return \Square\Models\Payment|null
         */
        public function get_payment()
        {
        }
        /**
         * Gets the message to display to the user.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_user_message()
        {
        }
        /**
         * Returns if the card used is a Square Gift Card.
         *
         * @since 3.9.0
         * @return boolean
         */
        public function is_gift_card_payment()
        {
        }
        /**
         * Returns true if the payment status is completed.
         *
         * @since 4.5.0
         * @return boolean
         */
        public function is_cash_app_payment_completed()
        {
        }
        /**
         * Returns true if the payment status is approved.
         *
         * @since 4.6.0
         * @return boolean
         */
        public function is_cash_app_payment_approved()
        {
        }
        /** No-op methods *************************************************************************************************/
        public function get_avs_result()
        {
        }
        public function get_csc_result()
        {
        }
        public function csc_match()
        {
        }
    }
    /**
     * Get customer response.
     *
     * @since 2.0.0
     *
     * @method \Square\Models\RetrieveCustomerResponse|array get_data()
     */
    class Get_Customer extends \WooCommerce\Square\Gateway\API\Response implements \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Get_Tokenized_Payment_Methods_Response
    {
        /**
         * Returns any payment tokens.
         *
         * @since 1.0.0
         *
         * @return \WooCommerce\Square\Framework\PaymentGateway\PaymentTokens\Payment_Gateway_Payment_Token[]
         */
        public function get_payment_tokens()
        {
        }
    }
    /**
     * Get Gift_Card response.
     *
     * @since 3.7.0
     *
     * @method \Square\Models\CreateGiftCardResponse|array get_data()
     */
    class Get_Gift_Card extends \WooCommerce\Square\Gateway\API\Response
    {
        /**
         * Gets the Square Gift Card object.
         *
         * @since 4.2.0
         *
         * @return \Square\Models\GiftCard|null
         */
        public function get_gift_card()
        {
        }
        /**
         * Get the gift card ID.
         *
         * @since 4.2.0
         *
         * @return string
         */
        public function get_id()
        {
        }
        /**
         * Get the gift card state.
         *
         * @since 4.2.0
         *
         * @return string
         */
        public function get_state()
        {
        }
        /**
         * Get the gift card number.
         *
         * @since 4.2.0
         *
         * @return string
         */
        public function get_gan()
        {
        }
        /**
         * Get the gift card amount.
         *
         * @since 4.2.0
         *
         * @return string
         */
        public function get_amount()
        {
        }
    }
    /**
     * The refund API response object.
     *
     * @since 2.0.0
     *
     * @method \Square\Models\CreateRefundResponse|\Square\Models\GetPaymentRefundResponse get_data()
     */
    class Refund extends \WooCommerce\Square\Gateway\API\Response
    {
        /**
         * Determines if the transaction was approved.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function transaction_approved()
        {
        }
        /**
         * Gets the transaction ID.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_transaction_id()
        {
        }
        /**
         * Gets the response status code.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_status_code()
        {
        }
    }
    /**
     * The Search Orders API response object.
     *
     * @since 5.0.0
     *
     * @method \Square\Models\SearchOrdersResponse get_data()
     */
    class Search_Orders extends \WooCommerce\Square\Gateway\API\Response
    {
        /**
         * Gets the orders from the response.
         *
         * @since 5.0.0
         *
         * @return array
         */
        public function get_orders()
        {
        }
        /**
         * Gets the cursor for pagination.
         *
         * @since 5.0.0
         *
         * @return string
         */
        public function get_cursor()
        {
        }
        /**
         * Gets the response data as an array with orders and cursor.
         *
         * @since 5.0.0
         *
         * @return array
         */
        public function get_response_data()
        {
        }
    }
}
namespace WooCommerce\Square\Gateway {
    class Blocks_Handler extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
    {
        /**
         * @var string $name
         */
        protected $name = 'square_credit_card';
        /**
         * @var \WooCommerce\Square\Plugin $plugin
         */
        protected $plugin = null;
        /**
         * @var Gateway $gateway
         */
        protected $gateway = null;
        protected $digital_wallets_handler;
        /**
         * Init Square Cart and Checkout Blocks handler class
         *
         * @since 2.5
         */
        public function __construct()
        {
        }
        /**
         * Initializes the payment method type.
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
         * Register scripts
         *
         * @return array
         */
        public function get_payment_method_script_handles()
        {
        }
        /**
         * Returns an array of key=>value pairs of data made available to the payment methods script.
         *
         * @since 2.5
         * @return array
         */
        public function get_payment_method_data()
        {
        }
        /**
         * Helper function to get title of Square gateway to be displayed as Label on checkout block.
         * Defaults to "Credit Card"
         *
         * @since 2.5
         * @return string
         */
        private function get_title()
        {
        }
        /**
         * Get a list of available card types
         *
         * @since 2.5
         * @return array
         */
        private function get_available_card_types()
        {
        }
        /**
         * Get a list of features supported by Square
         *
         * @since 2.5
         * @return array
         */
        public function get_supported_features()
        {
        }
        /**
         * Hooked on before `process_legacy_payment` and logs any data recording during
         * the checkout process on client-side.
         *
         * If the checkout recorded an error, skip validating the checkout fields by setting the
         * 'error' status on the PaymentResult.
         *
         * @since 2.5
         * @param \Automattic\WooCommerce\StoreApi\Payments\PaymentContext $context Holds context for the payment.
         * @param \Automattic\WooCommerce\StoreApi\Payments\PaymentResult  $result  Result of the payment.
         */
        public function log_js_data(\Automattic\WooCommerce\StoreApi\Payments\PaymentContext $context, \Automattic\WooCommerce\StoreApi\Payments\PaymentResult &$result)
        {
        }
        /**
         * Display an admin notice for stores that are running WooCommerce Blocks < 4.8 and also have 3D Secure turned on.
         *
         * @since 2.5
         */
        public function display_compatible_version_notice()
        {
        }
        /**
         * Helper function to get and store an instance of the Square gateway
         *
         * @since 2.5
         * @return Gateway
         */
        private function get_gateway()
        {
        }
    }
    class Card_Handler extends \WooCommerce\Square\Framework\PaymentGateway\PaymentTokens\Payment_Gateway_Payment_Tokens_Handler
    {
        /**
         * Tokenizes the current payment method and adds the standard transaction
         * data to the order post record.
         *
         * @since 2.1.0
         *
         * @param \WC_Order $order order object
         * @param Payment_Gateway_API_Create_Payment_Token_Response|null $response payment token API response, or null if the request should be made
         * @param string $environment_id optional environment ID, defaults to the current environment
         * @return \WC_Order order object
         * @throws \Exception on transaction failure
         */
        public function create_token(\WC_Order $order, $response = null, $environment_id = null)
        {
        }
        /**
         * Determines if a token should be deleted locally after a failed API attempt.
         *
         * Checks the response code, and if Square indicates the card ID was not found then it's probably safe to delete.
         *
         * @since 2.0.0
         *
         * @param \WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response
         * @return bool
         */
        public function should_delete_token(\WooCommerce\Square\Framework\PaymentGateway\Api\Payment_Gateway_API_Response $response)
        {
        }
        /**
         * Gets the available payment tokens for a user as an associative array of
         * payment token to Payment_Gateway_Payment_Token
         *
         * @since 2.2.0
         * @param int $user_id WordPress user identifier, or 0 for guest
         * @param array $args optional arguments, can include
         *    `customer_id` - if not provided, this will be looked up based on $user_id
         *    `environment_id` - defaults to plugin current environment
         * @return array array of string token to Payment_Gateway_Payment_Token object
         */
        public function get_tokens($user_id, $args = array())
        {
        }
    }
    class Cash_App_Pay_Blocks_Handler extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
    {
        /**
         * @var string $name
         */
        protected $name = \WooCommerce\Square\Plugin::CASH_APP_PAY_GATEWAY_ID;
        /**
         * @var \WooCommerce\Square\Plugin $plugin
         */
        protected $plugin = null;
        /**
         * @var Cash_App_Pay_Gateway $gateway
         */
        protected $gateway = null;
        /**
         * Init Square Cash App Pay Cart and Checkout Blocks handler class
         *
         * @since 4.5.0
         */
        public function __construct()
        {
        }
        /**
         * Initializes the payment method type.
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
         * Register scripts
         *
         * @return array
         */
        public function get_payment_method_script_handles()
        {
        }
        /**
         * Returns an array of key=>value pairs of data made available to the payment methods script.
         *
         * @since 4.5.0
         * @return array
         */
        public function get_payment_method_data()
        {
        }
        /**
         * Helper function to get title of Square Cash App gateway to be displayed as Label on checkout block.
         * Defaults to "Cash App Pay"
         *
         * @since 5.2.0
         * @return string
         */
        private function get_title()
        {
        }
        /**
         * Helper function to get description of Square Cash App gateway to be displayed on checkout block.
         * Defaults to "Pay securely using Cash App Pay."
         *
         * @since 5.2.0
         * @return string
         */
        private function get_description()
        {
        }
        /**
         * Get a list of features supported by Square
         *
         * @since 4.5.0
         * @return array
         */
        public function get_supported_features()
        {
        }
        /**
         * Helper function to get and store an instance of the Square gateway
         *
         * @since 4.5.0
         * @return Cash_App_Pay_Gateway|null
         */
        private function get_gateway()
        {
        }
    }
    /**
     * The Cash App Pay payment gateway class.
     *
     * @since 4.5.0
     */
    class Cash_App_Pay_Gateway extends \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway
    {
        /** @var API API base instance */
        private $api;
        /** @var string configuration option: button theme for the Cash App Pay button. */
        public $button_theme;
        /** @var string configuration option: button shape for the Cash App Pay button. */
        public $button_shape;
        /**
         * Constructs the class.
         *
         * @since 4.5.0
         */
        public function __construct()
        {
        }
        /**
         * Enqueue the necessary scripts & styles for the gateway.
         *
         * @since 4.5.0
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Payment form on checkout page.
         *
         * @since 4.5.0
         */
        public function payment_fields()
        {
        }
        /**
         * Return the gateway-specifics JS script handle.
         *
         * @since 4.5.0
         * @return string
         */
        protected function get_gateway_js_handle()
        {
        }
        /**
         * Enqueue the gateway-specific assets if present, including JS, CSS, and
         * localized script params
         *
         * @since 4.5.0
         */
        protected function enqueue_gateway_assets()
        {
        }
        /**
         * Validates the entered payment fields.
         *
         * @since 4.5.0
         *
         * @return bool
         */
        public function validate_fields()
        {
        }
        /** Admin methods *************************************************************************************************/
        /**
         * Adds admin notices.
         *
         * @since 4.5.0
         */
        public function add_admin_notices()
        {
        }
        /**
         * Get the default payment method title, which is configurable within the
         * admin and displayed on checkout
         *
         * @since 4.5.0
         * @return string payment method title to show on checkout
         */
        protected function get_default_title()
        {
        }
        /**
         * Get the default payment method title, which is configurable within the
         * admin and displayed on checkout
         *
         * @since 5.2.0
         * @return string payment method title to show on checkout
         */
        public function get_title()
        {
        }
        /**
         * Get the default payment method description, which is configurable
         * within the admin and displayed on checkout
         *
         * @since 4.5.0
         * @return string payment method description to show on checkout
         */
        protected function get_default_description()
        {
        }
        /**
         * Get transaction URL format.
         *
         * @since 4.5.0
         *
         * @return string URL format
         */
        public function get_transaction_url_format()
        {
        }
        /**
         * Initialize payment gateway settings fields
         *
         * @since 4.5.0
         * @see WC_Settings_API::init_form_fields()
         */
        public function init_form_fields()
        {
        }
        /** Conditional methods *******************************************************************************************/
        /**
         * Determines if the gateway is available.
         *
         * @since 4.5.0
         *
         * @return bool
         */
        public function is_available()
        {
        }
        /**
         * Returns true if the gateway is properly configured to perform transactions
         *
         * @since 4.5.0
         * @return boolean true if the gateway is properly configured
         */
        public function is_configured()
        {
        }
        /** Getter methods ************************************************************************************************/
        /**
         * Gets the API instance.
         *
         * @since 4.5.0
         *
         * @return \WooCommerce\Square\Gateway\API
         */
        public function get_api()
        {
        }
        /**
         * Gets the gateway settings fields.
         *
         * @since 4.5.0
         *
         * @return array
         */
        protected function get_method_form_fields()
        {
        }
        /**
         * Initialize payment tokens handler.
         *
         * @since 4.5.1
         */
        protected function init_payment_tokens_handler()
        {
        }
        /**
         * Gets a user's stored customer ID.
         *
         * Overridden to avoid auto-creating customer IDs, as Square generates them.
         *
         * @since 4.5.0
         *
         * @param int $user_id user ID
         * @param array $args arguments
         * @return string
         */
        public function get_customer_id($user_id, $args = array())
        {
        }
        /**
         * Gets a guest's customer ID.
         *
         * @since 4.5.0
         *
         * @param \WC_Order $order order object
         * @return string|bool
         */
        public function get_guest_customer_id(\WC_Order $order)
        {
        }
        /**
         * Gets the order object with payment information added.
         *
         * @since 4.5.0
         *
         * @param int|\WC_Order $order_id order ID or object
         * @return \WC_Order
         */
        public function get_order($order_id)
        {
        }
        /**
         * Gets an order with capture data attached.
         *
         * @since 4.6.0
         *
         * @param int|\WC_Order $order order object
         * @param null|float    $amount amount to capture
         * @return \WC_Order
         */
        public function get_order_for_capture($order, $amount = null)
        {
        }
        /**
         * Gets an order with refund data attached.
         *
         * @since 4.5.0
         *
         * @param int|\WC_Order $order order object
         * @param float $amount amount to refund
         * @param string $reason response for the refund
         *
         * @return \WC_Order|\WP_Error
         */
        protected function get_order_for_refund($order, $amount, $reason)
        {
        }
        /**
         * Gets the configured environment ID.
         *
         * @since 4.5.0
         *
         * @return string
         */
        public function get_environment()
        {
        }
        /**
         * Gets the configured application ID.
         *
         * @since 4.5.0
         *
         * @return string
         */
        public function get_application_id()
        {
        }
        /**
         * Returns the $order object with a unique transaction ref member added
         *
         * @since 4.5.0
         * @param \WooCommerce\Square\WC_Order_Square $order the order object
         * @return \WooCommerce\Square\WC_Order_Square order object with member named unique_transaction_ref
         */
        protected function get_order_with_unique_transaction_ref($order)
        {
        }
        /**
         * Returns the payment method image URL.
         *
         * @since 4.5.0
         * @param string $type the payment method type or name
         * @return string the image URL or null
         */
        public function get_payment_method_image_url($type = '')
        {
        }
        /**
         * Get the Cash App Pay button styles.
         *
         * @return array Button styles.
         */
        public function get_button_styles()
        {
        }
        /**
         * Mark an order as refunded. This should only be used when the full order
         * amount has been refunded.
         *
         * @since 4.5.0
         *
         * @param \WC_Order $order order object
         */
        public function mark_order_as_refunded($order)
        {
        }
        /**
         * Build the payment request object for the cash app pay payment form.
         *
         * Payment request objects are used by the Payments and need to be in a specific format.
         * Reference: https://developer.squareup.com/docs/api/paymentform#paymentform-paymentrequestobjects
         *
         * @since 4.5.0
         * @return array
         */
        public function get_payment_request()
        {
        }
        /**
         * Get the partial amount to be paid by Cash App Pay.
         * This is the amount after deducting the gift card balance.
         *
         * @since 4.6.0
         * @return float Partial amount to be paid by Cash App Pay.
         */
        public function get_partial_cash_app_amount()
        {
        }
        /**
         * Build a payment request object to be sent to Payments.
         *
         * Documentation: https://developer.squareup.com/docs/api/paymentform#paymentform-paymentrequestobjects
         *
         * @since 4.5.0
         * @param string $amount - format '100.00'
         * @param array $data
         * @return array
         */
        public function build_payment_request($amount, $data = array(), $gift_card_applied = false)
        {
        }
        /**
         * Builds an array of line items/totals to be sent back to Square in the lineItems array.
         *
         * @since 4.5.0
         * @param array $totals
         * @return array
         */
        public function build_payment_request_line_items($totals = array())
        {
        }
        /**
         * Get the payment request object in an ajax request
         *
         * @since 4.5.0
         * @return void
         */
        public function ajax_get_payment_request()
        {
        }
        /**
         * Set continuation session to select the cash app payment method after the redirect back from the cash app
         *
         * @since 4.5.0
         * @return void
         */
        public function ajax_set_continuation_session()
        {
        }
        /**
         * Determines if the current request is a continuation of a cash app pay payment.
         *
         * @return boolean
         */
        public function is_cash_app_pay_continuation()
        {
        }
        /**
         * Returns cart totals in an array format
         *
         * @since 4.5.0
         * @throws \Exception if no cart is found
         * @return array
         */
        public function get_cart_totals()
        {
        }
        /**
         * Handles payment processing.
         *
         * @see WC_Payment_Gateway::process_payment()
         *
         * @since 4.5.0
         *
         * @param int|string $order_id
         * @return array associative array with members 'result' and 'redirect'
         */
        public function process_payment($order_id)
        {
        }
        /**
         * Do the transaction.
         *
         * @since 4.5.0
         *
         * @param \WooCommerce\Square\WC_Order_Square $order
         * @return bool
         * @throws \Exception
         */
        protected function do_transaction($order)
        {
        }
        /**
         * Performs a credit card transaction for the given order and returns the result.
         *
         * @since 4.6.0
         *
         * @param \WooCommerce\Square\WC_Order_Square     $order the order object
         * @param \WooCommerce\Square\Gateway\API\Responses\Create_Payment|null $response optional credit card transaction response
         * @return \WooCommerce\Square\Gateway\API\Responses\Create_Payment     the response
         * @throws \Exception network timeouts, etc
         */
        protected function do_payment_method_transaction($order, $response = null)
        {
        }
        /**
         * Adds transaction data to the order.
         *
         * @since 4.5.0
         *
         * @param \WC_Order $order order object
         * @param \WooCommerce\Square\Gateway\API\Responses\Create_Payment $response API response object
         */
        public function add_payment_gateway_transaction_data($order, $response)
        {
        }
        /**
         * Renders the payment form JS.
         *
         * @since 4.5.0
         */
        public function render_js()
        {
        }
        /**
         * Logs any data sent by the payment form JS via AJAX.
         *
         * @since 4.5.0
         */
        public function log_js_data()
        {
        }
    }
    class Customer_Helper
    {
        /**
         * Adds customers to the local index.
         *
         * @since 2.0.0
         *
         * @param \Square\Models\Customer[] $customers Square API customers
         */
        public static function add_customers(array $customers)
        {
        }
        /**
         * Adds a customer to the index.
         *
         * @since 2.0.0
         *
         * @param string $square_id Square customer ID
         * @param string $email_address customer email address
         * @param int $user_id WordPress user ID
         */
        public static function add_customer($square_id, $email_address, $user_id = 0)
        {
        }
        /**
         * Gets a Square customer ID from an email address.
         *
         * @param string $email_address customer email address
         * @return string|null
         */
        public static function get_square_id($email_address)
        {
        }
        public static function get_customers_by_email($email_address)
        {
        }
        /**
         * Determines if a customer exists in the index.
         *
         * @since 2.0.0
         *
         * @param string $square_id Square customer ID
         * @return bool
         */
        public static function is_customer_indexed($square_id)
        {
        }
        /**
         * Creates the db table for the customer index.
         *
         * @since 2.0.0
         */
        public static function create_table()
        {
        }
    }
    class Digital_Wallet
    {
        /**
         * @var Gateway $gateway
         */
        public $gateway = null;
        /**
         * @var String $page - Current page
         */
        public $page = null;
        /**
         * @var bool $is_available - Is Apple Pay and Google Pay available
         */
        public $is_available = null;
        /**
         * @var string just a simple text, 'via WooCommerce'.
         */
        public $total_label_suffix;
        /**
         * @var array Array of localised data.
         */
        protected $localised_data = array();
        /**
         * Setup the Digital Wallet class
         *
         * @since 2.3
         */
        public function __construct($gateway)
        {
        }
        /**
         * Initialize the digital wallet class
         *
         * @since 2.3
         */
        public function init()
        {
        }
        public function get_localised_data()
        {
        }
        /**
         * Display admin notices related to Square digital wallets
         *
         * @since 2.3
         * @return void
         */
        public function admin_notices()
        {
        }
        /**
         * Returns true if the checkout using Digital Wallets require custom fields
         * to not be empty.
         *
         * @since 4.3.1
         *
         * @return boolean
         */
        public function does_checkout_require_custom_fields()
        {
        }
        /**
         * Render the Digital Wallet buttons (Apple Pay) on the Product, Cart or Checkout pages
         *
         * @since 2.3
         * @return void
         */
        public function render_button()
        {
        }
        /**
         * Load Square wallet scripts and styles
         *
         * @since 2.3
         * @return void
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Build the payment request object for the given context (i.e. product, cart or checkout page)
         *
         * Payment request objects are used by the Payments and need to be in a specific format.
         * Reference: https://developer.squareup.com/docs/api/paymentform#paymentform-paymentrequestobjects
         *
         * @since 2.3
         * @param string $context
         * @return array
         */
        public function get_payment_request_for_context($context)
        {
        }
        /**
         * Build a payment request object to be sent to Payments on the product page
         *
         * Documentation: https://developer.squareup.com/docs/api/paymentform#paymentform-paymentrequestobjects
         *
         * @since 2.3
         * @param int $product_id
         * @param bool $add_to_cart - whether or not the product needs to be added to the cart before building the payment request
         * @return array
         */
        public function get_product_payment_request($product_id = 0, $quantity = 1, $attributes = array(), $add_to_cart = false)
        {
        }
        /**
         * Build a payment request object to be sent to Payments.
         *
         * Documentation: https://developer.squareup.com/docs/api/paymentform#paymentform-paymentrequestobjects
         *
         * @since 2.3
         * @param string $amount - format '100.00'
         * @param array $data
         * @return array
         */
        public function build_payment_request($amount, $data = array())
        {
        }
        /**
         * Builds an array of line items/totals to be sent back to Square in the lineItems array.
         *
         * @since 2.3
         * @param array $totals
         * @return array
         */
        public function build_payment_request_line_items($totals = array())
        {
        }
        /**
         * Get the payment request object in an ajax request
         *
         * @since 2.3
         * @return void
         */
        public function ajax_get_payment_request()
        {
        }
        /**
         * When the digital wallet button is pressed, add the product to cart and generate a new payment request.
         * We need to add the product the cart to help with shipping/tax calculations.
         *
         * @since 2.3
         * @return void
         */
        public function ajax_add_to_cart()
        {
        }
        /**
         * Updates shipping method in WC session
         *
         * @since 2.3
         * @param array $shipping_methods Array of selected shipping methods ids
         * @return void
         */
        public function update_shipping_method($shipping_methods)
        {
        }
        /**
         * Reset shipping and calculate the latest shipping options/package with the given address.
         *
         * If no address, use the store's base address as default.
         *
         * @since 2.3
         * @param array $address
         * @return void
         */
        public function calculate_shipping($address = array())
        {
        }
        /**
         * Returns location's state code by state name.
         *
         * @param string $country_code The country's 2 letter ISO 3166-1 alpha-2 code.
         * @param string $state_name   The full name of the state that is to be search for its code.
         *
         * @return string
         */
        public static function get_state_code_by_name($country_code = '', $state_name = '')
        {
        }
        /**
         * Recalculate shipping methods and cart totals and send the updated information
         * data as a square payment request json object.
         *
         * @since 2.3
         * @return void
         */
        public function ajax_recalculate_totals()
        {
        }
        /**
         * Filters the post data just before checkout.
         *
         * WooCommerce requires the state code but Google Pay returns
         * the full name of the state. We filter the post data to convert
         * the full state name into its equivalent state code.
         *
         * @param array $posted_data The $_POST data submitted at checkout.
         *
         * @return array
         */
        public function filter_posted_data($posted_data)
        {
        }
        /**
         * Filters checkout fields when Digital Wallet is used.
         *
         * @param array $fields Array of checkout fields.
         *
         * @return array
         */
        public function filter_checkout_fields($fields)
        {
        }
        /**
         * Process the digital wallet checkout
         *
         * @since 2.3
         * @return void
         */
        public function ajax_process_checkout()
        {
        }
        /** Helper methods *******************************************************************************************/
        /**
         * Helper function to return the expected location of the apple-developer verification file on the server.
         *
         * @since 2.3
         * @return string
         */
        public function apple_pay_verification_file_location()
        {
        }
        /**
         * Checks for the existance of Apple Pay verification domain file at:
         * SERVER_ROOT/.well-known/apple-developer-merchantid-domain-association
         *
         * If the file doesn't exist or the contents has been modified, copy the file from the plugin
         * directory to the expected verification domain file location.
         *
         * @since 2.3
         * @return bool
         */
        public function check_apple_pay_verification_file()
        {
        }
        /**
         * When loading the settings page this function, tries to register the current store domain with Square/Apple Pay.
         *
         * If digital wallets and Apple Pay is enabled, check that the domain verification file exist and check
         * the gateway settings for `apple_pay_domain_registered` to confirm that this domain has been successfully registered with Square/Apple Pay.
         *
         * If the store has been registered, keep verifying the registration of the current connected account and domain every hour.
         *
         * @since 2.3
         */
        public function apple_pay_domain_registration()
        {
        }
        /**
         * Sends an API request to endpoint v2/apple-pay/domains to register the store's domain with Square/Apple Pay.
         *
         * Reference: https://developer.squareup.com/docs/payment-form/cookbook/apple-pay-register-domains
         *
         * @since 2.3
         * @throws \Exception on error
         * @return void
         */
        private function register_apple_pay_domain()
        {
        }
        /**
         * Returns an array of pages that digital wallets are loaded/available on.
         * Defaults to product, cart and checkout pages.
         *
         * @since 2.3
         * @return array
         */
        public function get_available_pages()
        {
        }
        /**
         * Returns the current page.
         *
         * Stores the result in $this->page to avoid recalculating multiple times per request
         *
         * @since 2.3
         * @return string
         */
        public function get_current_page()
        {
        }
        /**
         * Returns cart totals in an array format
         *
         * @since 2.3
         * @throws \Exception if no cart is found
         * @return array
         */
        public function get_cart_totals()
        {
        }
        /**
         * Returns a list of hidden digital wallet options
         *
         * If Apple Pay domain hasn't been registered, force Apple Pay to be hidden.
         *
         * @since 2.3
         * @return array
         */
        public function get_hidden_button_options()
        {
        }
        /**
         * Returns a list the supported product types that can be used to purchase a digital wallet
         *
         * @since 2.3
         * @return array
         */
        public function supported_product_types()
        {
        }
        /**
         * Checks if digital wallets are allowed to be used to purchase the current product.
         *
         * @since 2.3
         * @return bool
         */
        public function allowed_for_product_page()
        {
        }
        /**
         * Checks the cart to see if Square Digital Wallets is allowed to purchase all cart items.
         *
         * @since 2.3
         * @return bool
         */
        public function allowed_for_cart()
        {
        }
        /**
         * Returns if Google Pay and/or Apple Pay is available by checking the following:
         *  - setting is enabled
         *  - country and currency is supported
         *  - square is connected and location is set
         *  - current page/cart has items that can be purchased with a digital wallet
         *
         * Sets $this->is_available so that it's only checked once per request/page load
         *
         * @since 2.3
         * @return bool
         */
        public function is_available()
        {
        }
        /**
         * Returns true if digital wallets are available for the given page.
         * Checks the current page is no $page value is given
         *
         * @since 2.4.0
         * @param string $page
         * @return bool
         */
        public function is_available_for_page($page = '')
        {
        }
        /**
         * Checks if digital wallets are available and enabled.
         *
         * @since 2.4
         * @return bool
         */
        public function is_digital_wallet_enabled()
        {
        }
        /**
         * This function calculates the value returned by get_option( 'wc_square_apple_pay_enabled', $default )
         * and is used by WC Admin's Remote Inbox Notifications for marketing purposes.
         *
         * Returns either 1 or 2 if Apple Pay is enabled on the store, or $value (false) if not
         *
         * @since 2.3
         * @param $value
         * @return int|mixed
         */
        public function get_option_is_apple_pay_enabled($value)
        {
        }
    }
    class Gift_Card extends \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway
    {
        /**
         * Square settings option name.
         *
         * @var string
         */
        const SQUARE_PAYMENT_SETTINGS_OPTION_NAME = 'woocommerce_gift_cards_pay_settings';
        /**
         * @var API API base instance
         */
        private $api;
        /**
         * Checks if Gift Card is enabled.
         *
         * @since 3.7.0
         * @return bool
         */
        public function is_gift_card_enabled()
        {
        }
        /**
         * Setup the Gift Card class
         *
         * @since 3.7.0
         */
        public function __construct()
        {
        }
        /**
         * Get the payment method title or show default if not set.
         *
         * @since 5.2.0
         * @return string payment method title to show on checkout
         */
        public function get_title()
        {
        }
        /**
         * Returns true if the gateway is properly configured to perform transactions
         *
         * @since 4.7.0
         *
         * @return boolean true if the gateway is properly configured
         */
        public function is_configured()
        {
        }
        /**
         * Gets the API instance.
         *
         * @since 4.7.0
         *
         * @return \WooCommerce\Square\Gateway\API
         */
        public function get_api()
        {
        }
        /**
         * Gets the configured application ID.
         *
         * @since 4.7.0
         *
         * @return string application ID
         */
        public function get_application_id()
        {
        }
        /**
         * Gets the gateway settings fields.
         *
         * @since 4.7.0
         *
         * @return array
         */
        protected function get_method_form_fields()
        {
        }
        /**
         * Initialize payment tokens handler.
         *
         * @since 4.7.0
         */
        protected function init_payment_tokens_handler()
        {
        }
        /**
         * Get the default payment method title, which is configurable within the
         * admin and displayed on checkout.
         *
         * @since 4.7.0
         *
         * @return string payment method title to show on checkout
         */
        protected function get_default_title()
        {
        }
        /**
         * Get the default payment method description, which is configurable
         * within the admin and displayed on checkout.
         *
         * @since 4.7.0
         *
         * @return string payment method description to show on checkout
         */
        protected function get_default_description()
        {
        }
        /**
         * Initialize payment gateway settings fields
         *
         * @since 4.7.0
         *
         * @see WC_Settings_API::init_form_fields()
         */
        public function init_form_fields()
        {
        }
        /**
         * Performs a credit card transaction for the given order and returns the result.
         *
         * @since 4.7.0
         *
         * @param WC_Order_Square     $order the order object
         * @param Create_Payment|null $response optional credit card transaction response
         * @return Create_Payment     the response
         * @throws \Exception network timeouts, etc
         */
        protected function do_payment_method_transaction($order, $response = null)
        {
        }
        /**
         * Returns true if the Checkout page meets all criteria to
         * render the Gift Card feature.
         *
         * @return boolean
         */
        public static function does_checkout_support_gift_card()
        {
        }
        /**
         * Creates an image atatchement for the gift card placeholder.
         *
         * @since 4.2.0
         */
        public function add_gift_card_image_placeholder($settings)
        {
        }
        /**
         * Disables the `Gift card product placeholder image` setting when the
         * gift card placeholder image is deleted from the library.
         *
         * @since 4.8.1
         *
         * @param int $post_id Attachment ID of the media being deleted.
         */
        public function delete_gift_card_image_placeholder($post_id)
        {
        }
        /**
         * Returns true if the cart contains a Gift Card.
         * False otherwise.
         *
         * @since 4.2.0
         *
         * @return boolean
         */
        public static function cart_contains_gift_card()
        {
        }
        /**
         * Returns true if the cart contains a Pre Order with Charge Upon Release.
         *
         * @return boolean
         */
        public static function cart_contains_upon_release_pre_order()
        {
        }
        /**
         * Enqueue scripts ans=d styles required for Gift Cards.
         *
         * @since 3.7.0
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Filters order review fragments to load Gift Card HTML.
         *
         * @since 3.7.0
         *
         * @param array $fragments Array of fragments.
         */
        public function add_gift_card_fragments($fragments)
        {
        }
        /**
         * Ajax callback to apply a Gift Card.
         *
         * @since 3.7.0
         */
        public function apply_gift_card()
        {
        }
        /**
         * Ajax callback to remove Gift Card.
         *
         * @since 3.7.0
         */
        public function remove_gift_card()
        {
        }
        /**
         * Delete Gift card session after order complete.
         *
         * @since 3.7.0
         */
        public function delete_sessions()
        {
        }
        /**
         * Returns true if the gift card product added to cart is a new gift card.
         *
         * @since 4.2.0
         *
         * @return boolean
         */
        public static function is_new()
        {
        }
        /**
         * Returns true if the gift card product added to cart is to reload an existing gift card.
         *
         * @since 4.2.0
         *
         * @return boolean
         */
        public static function is_load()
        {
        }
    }
    /**
     * The payment form handler.
     *
     * @since 2.0.0
     *
     * @method \WooCommerce\Square\Gateway get_gateway()
     */
    class Payment_Form extends \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway_Payment_Form
    {
        /**
         * Adds hooks for rendering the payment form.
         * Extended from SV framework and remove render_js action
         *
         * @see Payment_Gateway_Payment_Form::render()
         *
         * @since 2.2.3
         */
        protected function add_hooks()
        {
        }
        /**
         * Renders any additional billing information we need for processing on pages other than checkout
         * e.g. pay page, add payment method page
         *
         * @since 2.1.0
         */
        public function render_supplementary_billing_info()
        {
        }
        /**
         * Renders the payment fields.
         *
         * @since 2.0.0
         */
        public function render_payment_fields()
        {
        }
        /**
         * Gets the credit card fields.
         *
         * Overridden to add special iframe classes.
         *
         * @since 2.0.0
         *
         * @return array
         */
        protected function get_credit_card_fields()
        {
        }
        /**
         * Renders a payment form field.
         *
         * @since 2.0.0
         *
         * @param array $field field to render
         */
        public function render_payment_field($field)
        {
        }
        /**
         * Renders the payment form JS.
         *
         * @since 2.0.0
         */
        public function render_js()
        {
        }
    }
}
namespace WooCommerce\Square\Handlers {
    /**
     * Async_Request class
     *
     * @extends \WP_Async_Request
     * @package WooCommerce\Square\Handlers
     *
     * @since 4.1.0
     */
    class Async_Request extends \WP_Async_Request
    {
        /**
         * Prefix
         *
         * @var string
         */
        protected $prefix = 'wc_square';
        /**
         * Action
         *
         * @var string
         */
        protected $action = 'async_request';
        /**
         * Handle a dispatched request.
         */
        protected function handle()
        {
        }
    }
    /**
     * Product and Inventory Synchronization handler class.
     *
     * This class handles manual and interval synchronization jobs.
     * It is a wrapper for the framework background handler and as such it only handles loopback business to keep the queue processing.
     * See the individual job implementations:
     *
     * @see Manual_Synchronization manual jobs re-process ALL synced products
     * @see Interval_Polling interval (polling) jobs perform API requests for ONLY the latest changes and update the associated products
     *
     * @since 2.0.0
     */
    class Background_Job extends \WooCommerce\Square\Framework\Utilities\Background_Job_Handler
    {
        /**
         * Initializes the background sync handler.
         *
         * @since 2.0.0
         */
        public function __construct()
        {
        }
        /**
         * Creates a new job.
         *
         * @since 2.0.0
         *
         * @param array $attrs array of job attributes
         * @return \stdClass|null
         */
        public function create_job($attrs)
        {
        }
        /**
         * Handles job execution.
         *
         * Overridden to support our multi-step job structure. There are steps that can take a long time to process, so this
         * ensures only one step is performed for each background request.
         *
         * @since 2.0.0
         */
        public function handle()
        {
        }
        /**
         * Processes a background job.
         *
         * @since 2.0.0
         *
         * @param object|\stdClass $job
         * @param null $items_per_batch
         * @return false|object|\stdClass
         */
        public function process_job($job, $items_per_batch = null)
        {
        }
        /**
         * Checks whether a job row still exists.
         *
         * Used instead of re-reading the job, because callers hold an object that other code (including
         * the shutdown handler registered in handle()) keeps mutating, and replacing it would strand
         * those references.
         *
         * @since 5.5.0
         *
         * @param string $job_id job ID
         * @return bool
         */
        protected function job_exists($job_id)
        {
        }
        /**
         * Handles actions after a sync job is complete.
         *
         * @since 2.0.0
         *
         * @param $job
         */
        public function job_complete($job)
        {
        }
        /**
         * Handles actions after a sync job has failed.
         *
         * @since 2.0.0
         *
         * @param $job
         */
        public function job_failed($job)
        {
        }
        /**
         * No-op: implements framework parent abstract method.
         *
         * @since 2.0.0
         *
         * @param null $item
         * @param \stdClass $job
         */
        protected function process_item($item, $job)
        {
        }
        /**
         * Adds some helpful debug tools.
         *
         * @since 2.0.0
         *
         * @param array $tools existing debug tools
         * @return array
         */
        public function add_debug_tool($tools)
        {
        }
        /**
         * Clear all background jobs of any status.
         *
         * @since 2.0.0
         */
        public function clear_all_jobs()
        {
        }
        /**
         * Deletes a set of background jobs.
         *
         * @since 2.0.0
         *
         * @param object[] $jobs jobs to delete
         */
        public function delete_jobs($jobs)
        {
        }
        /**
         * Runs the "Clear Square Sync" tool.
         *
         * Provides a way for merchants to clear any ongoing or stuck product syncs.
         *
         * @since 2.0.0
         */
        public function run_clear_background_jobs()
        {
        }
        /**
         * Runs the stalled-sync recovery check from admin page loads, throttled.
         *
         * The scheduled healthcheck is the primary trigger, but on sites where cron or Action
         * Scheduler execution is broken (as in the reported incident, where the healthcheck actions
         * themselves failed for a month) it never runs. Admin page loads are the one context such a
         * site still exercises, so use them as a fallback trigger. Throttled to once per five minutes
         * and restricted to users who can manage WooCommerce.
         *
         * @since 5.5.0
         */
        public function maybe_recover_stuck_sync_from_admin()
        {
        }
        /**
         * Detects a sync job stalled in "processing" and recovers it so the queue can resume.
         *
         * A job is considered stalled when it has been in "processing" without any step activity for
         * longer than a filterable threshold (measured against the per-step heartbeat, so a legitimately
         * long sync is not affected). Recovery marks the job failed and releases the process lock;
         * scheduled wc_square_job_runner actions are left alone so other queued sync jobs keep
         * processing. A flag is stored so the admin notice can prompt a re-run.
         *
         * @since 5.5.0
         *
         * @return bool whether a stalled job was failed by this call
         */
        protected function maybe_recover_stuck_sync()
        {
        }
        /**
         * Checks whether a job runner action is waiting to run.
         *
         * Deliberately not as_has_scheduled_action() or as_next_scheduled_action(): both also report true
         * for an action that is in progress, and an in progress row can outlive its worker indefinitely
         * because only Action Scheduler's own cleaner clears it. Treating that as "the queue will run"
         * would both grant a dead queue a grace window and stop the queue ever being restarted.
         *
         * @since 5.5.0
         *
         * @return bool
         */
        protected function has_pending_job_runner()
        {
        }
        /**
         * Clears the stalled sync grace marker.
         *
         * @since 5.5.0
         */
        protected function clear_recovery_grace()
        {
        }
        /**
         * Deletes stale failed Square Action Scheduler actions to prevent table bloat.
         *
         * Runs at most once per day. Removes actions for the plugin's sync hooks that are in the failed
         * state and older than a filterable retention window. Never touches pending or in-progress
         * actions, and does not change Action Scheduler's own timeout handling.
         *
         * @since 5.5.0
         */
        protected function cleanup_stale_failed_actions()
        {
        }
        /**
         * Handle Sync healthcheck
         *
         * Restart the background sync process if not already running
         * and data exists in the queue.
         *
         * @since 3.8.2
         */
        public function handle_sync_healthcheck()
        {
        }
    }
    /**
     * Category handler class.
     *
     * @since 2.0.0
     */
    class Category
    {
        const CATEGORY_MAP_META_KEY = 'wc_square_category_map';
        const SQUARE_ID_META_KEY = 'square_cat_id';
        const SQUARE_VERSION_META_KEY = 'square_cat_version';
        /**
         * Gets the full category map.
         *
         * @since 2.0.0
         *
         * @return array
         */
        public static function get_map()
        {
        }
        /**
         * Updates the full category map.
         *
         * @since 2.0.0
         *
         * @param array $map
         */
        public static function update_map($map)
        {
        }
        /**
         * Gets the mapping for a single category ID.
         *
         * @since 2.0.0
         *
         * @param int $category_id the category ID
         * @return array
         */
        public static function get_mapping($category_id)
        {
        }
        /**
         * Returns a Square ID if known, or a temporary ID to be used in API calls.
         *
         * @since 2.0.0
         *
         * @param int $category_id
         * @return string
         */
        public static function get_square_id($category_id)
        {
        }
        /**
         * Gets the Square version for the given category (if known).
         *
         * @since 2.0.0
         *
         * @param int $category_id
         * @return int
         */
        public static function get_square_version($category_id)
        {
        }
        /**
         * Adds a mapping for a category.
         *
         * @since 2.0.0
         *
         * @param int $category_id the category ID
         * @param string $square_id the Square Catalog Item ID
         * @param string $square_version the Square Item version
         *
         * @return array the updated full map
         */
        public static function update_mapping($category_id, $square_id, $square_version)
        {
        }
        /**
         * Imports or updates local category data for a remote CatalogObject.
         *
         * @since 2.0.0
         *
         * @param \Square\Models\CatalogObject $catalog_object the catalog object
         * @return int|null the category ID, if found
         */
        public static function import_or_update($catalog_object)
        {
        }
        /**
         * Updates a category's Square metadata.
         *
         * @since 2.0.0
         *
         * @param int $category_id the category ID
         * @param string $square_id the square ID
         * @param string $square_version the square version
         */
        public static function update_square_meta($category_id, $square_id, $square_version)
        {
        }
        /**
         * Gets a category ID from a known square ID.
         *
         * @since 2.0.0
         *
         * @param string $square_id the square ID
         * @return int|null
         */
        public static function get_category_id_by_square_id($square_id)
        {
        }
        /**
         * Get category ID from ITEM catalog object.
         *
         * @param \Square\Models\CatalogItem $catalog_item the catalog item object
         * @return string|null
         */
        public static function get_square_category_id($catalog_item)
        {
        }
        /**
         * Get the WooCommerce category IDs from a catalog item.
         *
         * @since 5.4.0
         *
         * @param \Square\Models\CatalogItem $catalog_item the catalog item object
         * @return array
         */
        public static function get_category_ids_from_catalog_item($catalog_item)
        {
        }
    }
    /**
     * The admin connection handler.
     *
     * @since 2.0.0
     */
    class Connection
    {
        /** @var string production connect URL */
        const CONNECT_URL_PRODUCTION = 'https://api.woocommerce.com/integrations/login/square';
        /** @var string sandbox connect URL */
        const CONNECT_URL_SANDBOX = 'https://api.woocommerce.com/integrations/login/squaresandbox';
        /** @var string production refresh URL */
        const REFRESH_URL_PRODUCTION = 'https://api.woocommerce.com/integrations/renew/square';
        /** @var string sandbox refresh URL */
        const REFRESH_URL_SANDBOX = 'https://api.woocommerce.com/integrations/renew/squaresandbox';
        /** @var \WooCommerce\Square\Plugin plugin instance */
        protected $plugin;
        /**
         * Constructs the class.
         *
         * @since 2.0.0
         *
         * @param \WooCommerce\Square\Plugin $plugin plugin instance
         */
        public function __construct(\WooCommerce\Square\Plugin $plugin)
        {
        }
        /**
         * Adds the action and filter hooks.
         *
         * @since 2.0.0
         */
        protected function add_hooks()
        {
        }
        /**
         * Handles a successful connection.
         *
         * @internal
         *
         * @since 2.0.0
         */
        public function handle_connected()
        {
        }
        /**
         * Handles disconnection.
         *
         * @internal
         *
         * @since 2.0.0
         */
        public function handle_disconnect()
        {
        }
        /**
         * Disconnects the plugin.
         *
         * @since 2.0.0
         */
        public function disconnect()
        {
        }
        /** Refresh methods ***********************************************************************************************/
        /**
         * Schedules the connection refresh.
         *
         * @since 2.0.0
         */
        public function schedule_refresh()
        {
        }
        /**
         * Refreshes the access token via the Woo proxy.
         *
         * @since 2.0.0
         *
         * @return bool True when a new access token was stored, false otherwise (including in sandbox mode, where refresh is not supported).
         */
        public function refresh_connection()
        {
        }
        /**
         * Unschedules the connection refresh.
         *
         * @since 2.0.0
         */
        protected function unschedule_refresh()
        {
        }
        /** Customer index methods ****************************************************************************************/
        /**
         * Index existing Square customers.
         *
         * @since 2.0.0
         *
         * @param string $cursor pagination cursor
         */
        public function index_customers($cursor = '')
        {
        }
        /**
         * Schedules the customer index action.
         *
         * @since 2.0.0
         *
         * @param string $cursor pagination cursor
         */
        protected function schedule_customer_index($cursor = '')
        {
        }
        /** Getter methods ************************************************************************************************/
        /**
         * Gets the Connect button HTML.
         *
         * @since 2.0.0
         *
         * @param bool $is_sandbox whether to point the button to production or sandbox
         * @return string
         */
        public function get_connect_button_html($is_sandbox = false)
        {
        }
        /**
         * Gets the disconnect button HTML.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_disconnect_button_html()
        {
        }
        /**
         * Gets the connection URL.
         *
         * @since 2.0.0
         *
         * @param bool $is_sandbox whether to point to production or sandbox
         * @param array $args additional query args
         *
         * @return string
         */
        public function get_connect_url($is_sandbox = false, $args = array())
        {
        }
        /**
         * Gets the disconnect URL.
         *
         * @since 2.0.0
         *
         * @return string
         */
        protected function get_disconnect_url()
        {
        }
        /**
         * Gets the token refresh URL.
         *
         * @since 2.0.0
         *
         * @return string
         */
        protected function get_refresh_url()
        {
        }
        /**
         * Gets the connection scopes.
         *
         * @since 2.0.0
         *
         * @return string[]
         */
        protected function get_scopes()
        {
        }
        /**
         * Gets the plugin instance.
         *
         * @since 2.0.0
         *
         * @return \WooCommerce\Square\Plugin
         */
        public function get_plugin()
        {
        }
    }
    /**
     * Emails handler class.
     *
     * @since 2.0.0
     */
    class Email
    {
        /** @var WC_Square_Sync_Completed instance */
        private $square_sync_completed;
        /** @var WC_Square_Access_Token_Email instance */
        private $square_access_token_email;
        /** @var WC_Square_Gift_Card_Sent instance */
        private $square_gift_card_sent;
        /**
         * Sets up Square emails.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Ensures the WooCommerce email handlers are loaded.
         *
         * @since 2.0.0
         */
        private function init_mailer()
        {
        }
        /**
         * Initializes Square email classes.
         *
         * @internal
         *
         * @since 2.0.0
         */
        public function init_emails()
        {
        }
        /**
         * Adds WooCommerce Square email handlers.
         *
         * @internal
         *
         * @since 2.0.0
         *
         * @param \WC_Email[] $emails associative array of email IDs and objects
         * @return \WC_Email[]
         */
        public function get_email_classes($emails = array())
        {
        }
        /**
         * Gets the Square sync completed email instance.
         *
         * @since 2.0.0
         *
         * @return WC_Square_Sync_Completed
         */
        public function get_sync_completed_email()
        {
        }
        /**
         * Gets the Square access token email instance.
         *
         * @since 2.1.0
         *
         * @return WC_Square_Access_Token_Email
         */
        public function get_access_token_email()
        {
        }
        /**
         * Gets the Square Gift Card email sent instance.
         *
         * @since 4.2.0
         *
         * @return WC_Square_Gift_Card_Sent
         */
        public function get_gift_card_sent()
        {
        }
    }
    /**
     * Order handler class.
     *
     * @since 2.0.0
     */
    class Order
    {
        /**
         * Array of previous stock values.
         *
         * @var array
         */
        private $previous_stock = array();
        /**
         * Array of product IDs that have been scheduled for sync in this request.
         *
         * @var array
         */
        private $products_to_sync = array();
        /**
         * Array of payment gateways that are Square payment gateways.
         *
         * @var array
         */
        private $square_payment_gateways = array(\WooCommerce\Square\Plugin::GATEWAY_ID, \WooCommerce\Square\Plugin::CASH_APP_PAY_GATEWAY_ID);
        /**
         * Sets up Square order handler.
         *
         * @since 2.0.0
         */
        public function __construct()
        {
        }
        /**
         * Ensures the Square order item meta is hidden.
         *
         * @since 2.0.0
         *
         * @param string[] $hidden the hidden order item meta
         * @return string[] updated meta
         */
        public function hide_square_order_item_meta($hidden)
        {
        }
        /**
         * Add hooks to ensure PayPal IPN callbacks are added caches and considered for inventory changes
         * when the sync happens. This also adds the shutdown hook to ensure sync happens if needed at
         * a later stage.
         *
         * @since 2.1.1
         * @deprecated 5.4.2 No longer used; stock sync is handled via woocommerce_reduce_order_stock on WC 7.6+.
         *
         * @param array $posted values returned from PayPal Standard IPN callback.
         */
        public function maybe_sync_stock_for_order_via_paypal($posted)
        {
        }
        /**
         * Checks if we should sync stock for this order.
         * We only sync for other gateways that Square will not be aware of.
         *
         * This functions sets a process in motion that gathers products that will be processed on shutdown.
         *
         * @since 2.0.8
         * @deprecated 5.4.2 No longer used; stock sync is handled via woocommerce_reduce_order_stock on WC 7.6+.
         *
         * @param int      $order_id    Order ID number.
         * @param array    $posted_data Submitted order data.
         * @param WC_Order $order       Order object.
         */
        public function maybe_sync_stock_for_order_via_other_gateway($order_id, $posted_data, $order)
        {
        }
        /**
         * Checks if we should sync stock for this order.
         * We only sync for other gateways that Square will not be aware of.
         *
         * This functions sets a process in motion that gathers products that will be processed on shutdown.
         *
         * @since 4.0.0
         * @deprecated 5.4.2 No longer used; stock sync is handled via woocommerce_reduce_order_stock on WC 7.6+.
         *
         * @param \WC_Order $order Order object.
         */
        public function maybe_sync_stock_for_store_api_order_via_other_gateway($order)
        {
        }
        /**
         * For a given order sync stock if inventory sync is enabled.
         *
         * @since 2.1.1
         *
         * @param \WC_Order $order the order for which the stock must be synced.
         */
        protected function sync_stock_for_order($order)
        {
        }
        /**
         * Loop through order and cached previous stock values before they are reduced.
         *
         * @since 2.0.8
         *
         * @param WC_Order $order Order object.
         */
        private function cache_previous_stock($order)
        {
        }
        /**
         * Stages a product inventory update for sync with Square when a product stock is updated.
         *
         * @internal The staged values will be stored in product_to_sync
         *
         * @since 2.0.8
         *
         * @param WC_Product $product the updated product with inventory updates.
         */
        public function maybe_stage_inventory_updates_for_product($product)
        {
        }
        /**
         * Stage inventory updates for products in the order.
         * This function only used for WooCommerce 7.6 and above.
         *
         * @param \WC_Order_Item_Product $item   Order item data.
         * @param array                  $change Change Details.
         * @param \WC_Order              $order  Order data.
         * @return void
         *
         * @since 4.1.0
         */
        public function maybe_stage_stock_updates_for_product($item, $change, $order)
        {
        }
        /**
         * Maybe restore stock for an order that was cancelled or moved to pending.
         * This is only for orders that were not processed through the Square gateway.
         *
         * @param int $order_id Order ID.
         *
         * @since 4.1.0
         */
        public function maybe_sync_inventory_for_stock_increase($order_id)
        {
        }
        /**
         * Cache the product's previous stock value.
         *
         * @param WC_Product $product Product object.
         *
         * @since 4.1.0
         */
        public function cache_product_previous_stock($product)
        {
        }
        /**
         * Initializes a synchronization event for any staged inventory updates in this request.
         *
         * @internal
         *
         * @since 2.0.8
         */
        /**
         * Returns the Square catalog objects for these products that Square has never counted.
         *
         * A relative adjustment is only meaningful once Square holds a count, so callers use this to
         * decide when to send an absolute count instead. An unavailable answer returns an empty list, so
         * the caller keeps the existing adjustment behaviour rather than guessing.
         *
         * @since 5.5.0
         *
         * @param int[] $product_ids WooCommerce product IDs.
         * @return string[] catalog object IDs with no inventory history.
         */
        private static function get_objects_without_inventory_history(array $product_ids)
        {
        }
        public function maybe_sync_staged_inventory_updates()
        {
        }
        /**
         * Handle order refunds inventory/stock changes sync.
         *
         * @since 2.0.8
         *
         * @param in $order_id
         * @param int $refund_id
         */
        public function maybe_sync_stock_for_refund_from_other_gateway($order_id, $refund_id)
        {
        }
        /**
         * Add gift card recipient data to order line item meta.
         *
         * @since 4.2.0
         *
         * @param \WC_Order_Item_Product $item          The order item product.
         * @param string                 $cart_item_key The cart item key.
         * @param array                  $values        Values associated with a cart item key.
         * @param \WC_Order              $order         Woo Order.
         */
        public function add_gift_card_add_to_cart_details_to_order($item, $cart_item_key, $values, $order)
        {
        }
        /**
         * Adds gift card related order item meta to the order again cart item.
         *
         * @param array $cart_item_data Cart item data.
         *
         * @return array
         */
        public function reorder_gift_card($cart_item_data)
        {
        }
        /**
         * Filters the meta key into a human-readable format.
         *
         * @since 4.2.0
         *
         * @param string                 $display_key The value that will be displayed in the order line item.
         * @param \WC_Meta_Data          $meta        The order line item meta data object.
         * @param \WC_Order_Item_Product $order_item  Instance of the order item product.
         *
         * @return string
         */
        public function modify_gift_card_line_item_key($display_key, $meta, $order_item)
        {
        }
        /**
         * Triggers an email to the recipient of the gift card.
         *
         * @since 4.2.0
         *
         * @param \WC_Order $order WooCommerce order.
         */
        public function trigger_email_for_gift_card_sent($order)
        {
        }
        /**
         * Hides the meta that indicates the type of gift card purchase,
         * new or reload.
         *
         * @since 4.2.0
         *
         * @param array $meta_array Array of line order item meta.
         * @return array
         */
        public function hide_gift_card_line_item_meta($meta_array)
        {
        }
        /**
         * Returns the type of gift card purchase type - `new` or `load`.
         *
         * - `new` indicates a new gift card is purchased.
         * - `load` indicates an existing gift card is loaded with additional funds.
         *
         * @since 4.2.0
         *
         * @param \WC_Order $order WooCommerce order.
         *
         * @return string|boolean Types of gift card purchase, false otherwise.
         */
        public static function get_gift_card_purchase_type($order)
        {
        }
        /**
         * Returns the gift card number from the order line item.
         *
         * @since 4.2.0
         *
         * @param \WC_Order $order WooCommerce order.
         *
         * @return string|boolean The gift card number, false otherwise.
         */
        public static function get_gift_card_gan($order)
        {
        }
        /**
         * Returns if the order was placed using a Square credit card.
         *
         * @since 3.7.0
         *
         * @param \WC_Order $order WooCommerce order.
         *
         * @return boolean
         */
        public static function is_tender_type_card($order)
        {
        }
        /**
         * @since 3.7.0
         *
         * @param \WC_Order $order WooCommerce order.
         *
         * @return boolean
         */
        public static function is_tender_type_gift_card($order)
        {
        }
        /**
         * Returns if the order was placed using a Square cash app pay.
         *
         * @since 4.6.0
         *
         * @param \WC_Order $order WooCommerce order.
         *
         * @return boolean
         */
        public static function is_tender_type_cash_app_pay($order)
        {
        }
        /**
         * Sets the amount charged on the gift card for the given order.
         *
         * @since 3.7.0
         *
         * @param \WC_Order $order  WooCommerce order.
         * @param float     $amount The total amount charged on the gift card for the order.
         */
        public static function set_gift_card_total_charged_amount($order, $amount)
        {
        }
        /**
         * Returns the amount charged on the gift card for the given order.
         *
         * @since 3.7.0
         *
         * @param \WC_Order $order WooCommerce order.
         *
         * @return float
         */
        public static function get_gift_card_total_charged_amount($order)
        {
        }
        /**
         * Returns the last 4 digits of the gift card.
         *
         * @since 3.7.0
         *
         * @param \WC_Order $order WooCommerce order.
         *
         * @return string
         */
        public static function get_gift_card_last4($order)
        {
        }
        /**
         * Sets the last 4 digits of the gift card.
         *
         * @since 3.7.0
         *
         * @param \WC_Order $order WooCommerce order.
         *
         * @return string
         */
        public static function set_gift_card_last4($order, $number)
        {
        }
        /**
         * Returns the total amount that is refunded to the gift card.
         *
         * @since 3.7.0
         *
         * @param \WC_Order $order WooCommerce order.
         *
         * @return float
         */
        public static function get_gift_card_total_refunded_amount($order)
        {
        }
        /**
         * Sets the total amount that is refunded to the gift card.
         *
         * @since 3.7.0
         *
         * @param \WC_Order $order  WooCommerce order.
         * @param float     $amount The total amount refunded to the gift card for the order.
         */
        public static function set_gift_card_total_refunded_amount($order, $amount)
        {
        }
        /**
         * Sets the total order amount before applying the gift card.
         *
         * @since 3.7.0
         *
         * @param \WC_Order $order  WooCommerce order.
         * @param float     $amount
         */
        public static function set_order_total_before_gift_card($order, $amount)
        {
        }
        /**
         * Gets the total order amount before applying the gift card.
         *
         * @since 3.7.0
         *
         * @return float
         */
        public static function get_order_total_before_gift_card($order)
        {
        }
        /**
         * Displays the gift card details in the order item.
         *
         * @param int $order_id WooCommerce order ID.
         */
        public function add_admin_order_items($order_id)
        {
        }
        /**
         * Includes info regarding gift card in the payment method title.
         *
         * @since 3.7.0
         *
         * @param string    $value Payment method title.
         * @param \WC_Order $order WooCommerce order.
         *
         * @return string
         */
        public function filter_payment_method_title($value, $order)
        {
        }
        /**
         * Includes info regarding gift card in the payment gateway title.
         *
         * @since 3.7.0
         *
         * @param string $value Gateway title.
         * @param string $id    Plugin id.
         *
         * @return string
         */
        public function filter_gateway_title($value, $id)
        {
        }
        /**
         * Includes split payment details on the order details screen.
         *
         * @param array     $total_rows Array of order details.
         * @param \WC_Order $order      WooCommerce Order.
         *
         * @return array
         */
        public function filter_order_item_totals($total_rows, $order)
        {
        }
        /**
         * Renders a notice if the billing country is not set in manual order.
         *
         * @since 4.2.0
         * @param \WC_Order $order
         */
        public function render_admin_missing_billing_details_notice($order)
        {
        }
        /**
         * Renders a notice if the billing country is not set in manual order.
         *
         * @since 4.2.0
         *
         * @param \WC_Order $order
         */
        public function render_missing_billing_details_notice($order)
        {
        }
        /**
         * Saves billing details of a guest user on the Pay for order page.
         *
         * Requires a valid order-pay context, matching order key, guest order, and
         * an order-specific nonce.
         *
         * @since 4.2.0
         * @since 5.4.3 Require order key + order-specific nonce; null-guard order.
         */
        public function save_guest_details()
        {
        }
        /**
         * Disables email verification when billing details are updated by a guest on
         * the pay for order page — only for an authorized save request.
         *
         * @since 4.2.0
         * @since 5.4.3 Scope bypass to order-key + nonce verified requests.
         *
         * @param bool      $email_verification_required If email verification is required.
         * @param \WC_Order $order                       Order being viewed/paid.
         * @param string    $context                     Verification context.
         *
         * @return bool
         */
        public function no_verification_on_guest_save($email_verification_required, $order = null, $context = '')
        {
        }
        /**
         * Nonce action for saving guest billing details for a specific order.
         *
         * @since 5.4.3
         *
         * @param int $order_id Order ID.
         * @return string
         */
        private function get_save_guest_details_nonce_action($order_id)
        {
        }
        /**
         * Whether the current request may save guest billing details for an order.
         *
         * Authorization mirrors WooCommerce pay-for-order: the order key in the URL
         * is the capability token for guest orders. Capability alone is insufficient
         * because guests receive pay_for_order for any order with no customer user.
         *
         * @since 5.4.3
         *
         * @param mixed $order Order object or false.
         * @return bool
         */
        private function can_save_guest_billing_details($order)
        {
        }
    }
    /**
     * Handles syncing orders between WooCommerce and Square.
     *
     * @since 5.0.0
     */
    class Order_Sync
    {
        /**
         * Initialize hooks.
         *
         * @since 5.0.0
         */
        public function init()
        {
        }
    }
    /**
     * Product handler class.
     *
     * @since 2.0.0
     */
    class Product
    {
        /**
         * Meta key to store the taxonomy name that flags whether a product
         * is marked as 'synced' with Square
         * @var string
         **/
        const SYNCED_WITH_SQUARE_TAXONOMY = 'wc_square_synced';
        /**
         * Meta key to store catalog object ID.
         *
         * @var string
         */
        const SQUARE_ID_META_KEY = '_square_item_id';
        /**
         * Meta key to store version of a catalog object.
         *
         * @var string
         */
        const SQUARE_VERSION_META_KEY = '_square_item_version';
        /**
         * Meta key to store version of a catalog object variation.
         *
         * @var string
         */
        const SQUARE_VARIATION_ID_META_KEY = '_square_item_variation_id';
        /**
         * Meta key to store version of a catalog object variation.
         *
         * @var string
         */
        const SQUARE_VARIATION_VERSION_META_KEY = '_square_item_variation_version';
        /**
         * Meta key to store catalog object thumbnail ID.
         *
         * @var string
         **/
        const SQUARE_IMAGE_ID_META_KEY = '_square_item_image_id';
        /**
         * Meta key used to identify whether a product is a gift card.
         *
         * @var string
         */
        const SQUARE_GIFT_CARD_KEY = '_square_gift_card';
        /**
         * @param \WC_Product $product
         * @param \Square\Models\CatalogObject $catalog_object
         */
        public static function update_product(\WC_Product $product, \Square\Models\CatalogObject $catalog_object)
        {
        }
        /**
         * @param \WC_Product $product
         * @param \Square\Models\CatalogObject $catalog_object
         */
        public static function update_variation(\WC_Product $product, \Square\Models\CatalogObject $catalog_object)
        {
        }
        /**
         * Determines whether a Square ID is a client placeholder rather than an ID Square assigned.
         *
         * Placeholders start with "#" (e.g. "#item_123") and are only meaningful inside the request
         * that creates the object.
         *
         * @since 5.5.2
         *
         * @param mixed $square_id the Square ID to check
         * @return bool
         */
        private static function is_placeholder_square_id($square_id)
        {
        }
        /**
         * Updates a WooCommerce product from Square data.
         *
         * @since 2.0.0
         *
         * @param \WC_Product $product product object
         * @param \Square\Models\CatalogItem $catalog_item Square API catalog item data
         * @param bool $with_inventory whether to pull the latest product inventory from Square
         * @throws \Exception
         */
        public static function update_from_square(\WC_Product $product, \Square\Models\CatalogItem $catalog_item, $with_inventory = true)
        {
        }
        /**
         * Returns description of a catalog item.
         *
         * @since 3.9.1
         *
         * @param \Square\Models\CatalogItem $catalog_item
         * @return string
         */
        public static function get_catalog_item_description($catalog_item)
        {
        }
        /**
         * Updates a product image from a URL provided by Square (helper method).
         *
         * Note: does not save the product for persistence. If opening to public, consider changing this behavior.
         *       This function handles its own exceptions and logs them.
         *
         * @since 2.0.0
         *
         * @param \WC_Product|int $given_product product object or product ID
         * @param string $image_id
         * @param bool $force_update If true, always import and update the product image from Square. If false, check if the image already exists on the given product before uploading a possible
         * @todo Look at ussages of this function. Does it even need to return anything?
         * @return \WC_Product|int The product id of object that was passed in.
         */
        public static function update_image_from_square($given_product, $image_id, $force_update = false)
        {
        }
        /**
         * Updates a product's stock by getting the latest values from Square.
         *
         * @since 2.0.0
         *
         * @param \WC_Product $product product object
         * @param bool $save whether to save the product object
         * @return \WC_Product
         * @throws \Exception
         */
        public static function update_stock_from_square(\WC_Product $product, $save = true)
        {
        }
        /**
         * Updates a product's stock by getting the latest values from Square.
         *
         * @since 4.1.0
         *
         * @param int[] $product_ids Product IDs.
         * @param bool  $save        Whether to save the product object.
         * @return void
         * @throws \Exception
         */
        public static function update_products_stock_from_square($product_ids)
        {
        }
        /**
         * Initializes custom product taxonomies.
         *
         * @since 2.0.0
         */
        public static function init_taxonomies()
        {
        }
        /**
         * Sets a product's synced with Square status.
         *
         * @since 2.0.0
         *
         * @param \WC_Product|int $product a valid product object or product ID
         * @param string $synced either 'yes' (default) or 'no'
         * @return bool
         */
        public static function set_synced_with_square($product, $synced = 'yes')
        {
        }
        /**
         * Removes a product flag from being synced with Square.
         *
         * @since 2.0.0
         *
         * @param \WC_Product $product a valid product object
         * @return bool
         */
        public static function unset_synced_with_square($product)
        {
        }
        /**
         * Determines whether a product is set to be synced with Square.
         *
         * @since 2.0.0
         *
         * @param false|\WC_Product $product a valid product object
         * @return bool
         */
        public static function is_synced_with_square($product)
        {
        }
        /**
         * Determines if a product can be synced with Square.
         *
         * SKUs and single-dimension attributes are required, so this helps us validate that in case a product has been
         * marked as "Sync with Square" manually.
         *
         * @since 2.0.2
         *
         * @param \WC_Product $product product object
         * @return bool
         */
        public static function can_sync_with_square(\WC_Product $product)
        {
        }
        /**
         * Return a link to the product's edit page
         *
         * @since 2.0.8
         *
         * @param \WC_Product $product product object
         * @return string
         */
        public static function get_product_edit_link(\WC_Product $product)
        {
        }
        /**
         * Determines if a product has a SKU set.
         *
         * For variable products, this checks if all of its variations have a SKU.
         *
         * @since 2.0.2
         *
         * @param \WC_Product $product product object
         * @return bool
         */
        public static function has_sku(\WC_Product $product)
        {
        }
        /**
         * Determines if a product has multiple variation attributes.
         *
         * @since 2.0.2
         *
         * @param \WC_Product $product product object
         * @return bool
         */
        public static function has_multiple_variation_attributes(\WC_Product $product)
        {
        }
        /**
         * Gets an ID list of products that have a synced with Square status set.
         *
         * @since 2.0.0
         *
         * @param string $status either 'yes' or 'no'
         * @return int[] array of product IDs
         */
        private static function get_products_synced_status($status)
        {
        }
        /**
         * Gets a list of products explicitly not set to be synced with Square.
         *
         * @since 2.0.0
         *
         * @return int[]
         */
        public static function get_products_not_synced_with_square()
        {
        }
        /**
         * Gets a list of products that are set to be synced with Square.
         *
         * @since 2.0.0
         *
         * @return int[] array of product IDs
         */
        public static function get_products_synced_with_square()
        {
        }
        /**
         * Gets a product ID from a Square API variation ID.
         *
         * @since 2.0.0
         *
         * @param string $variation_id Square API variation item ID
         * @return int|null
         */
        public static function get_product_id_by_square_variation_id($variation_id)
        {
        }
        /**
         * Gets a product from a Square API variation ID.
         *
         * @since 2.0.0
         *
         * @param string $variation_id Square API variation item ID
         * @return \WC_Product|null
         */
        public static function get_product_by_square_variation_id($variation_id)
        {
        }
        /**
         * Gets a product ID from a Square API ID.
         *
         * @since 2.0.0
         *
         * @param string $square_id Square API item ID
         * @return int|null
         */
        public static function get_product_id_by_square_id($square_id)
        {
        }
        /**
         * Gets a product from a Square API ID.
         *
         * @since 2.0.0
         *
         * @param string $square_id Square API item ID
         * @return \WC_Product|null
         */
        public static function get_product_by_square_id($square_id)
        {
        }
        /**
         * Converts a WC_Product to a Square CatalogObject.
         *
         * @since 2.0.0
         *
         * @param \WC_Product $product
         * @return null|\Square\Models\CatalogObject
         */
        public static function convert_to_catalog_object(\WC_Product $product)
        {
        }
        /**
         * Extracts the data for a catalog item from a \WC_Product.
         *
         * @since 2.0.0
         *
         * @param \WC_Product $product the product object
         * @param \Square\Models\CatalogItemVariation[] $variations (optional) array of variations to include
         * @param bool $is_soft_delete whether or not this item data is for a soft-delete
         * @return array
         */
        public static function extract_catalog_item_data(\WC_Product $product, array $variations = array(), $is_soft_delete = false)
        {
        }
        /**
         * Extracts the data for a catalog item variation from a \WC_Product.
         *
         * @since 2.0.0
         *
         * @param \WC_Product $product the product to get the variation data for
         * @param \WC_Product $parent_product (optional) the parent product - prevents additional calls to wc_get_product()
         * * @param bool $is_soft_delete whether or not this item data is for a soft-delete
         * @return array
         */
        public static function extract_catalog_item_variation_data(\WC_Product $product, ?\WC_Product $parent_product = null, $is_soft_delete = false)
        {
        }
        /**
         * Converts a product price to a Money object.
         *
         * @since 2.0.0
         *
         * @param int|float $price
         * @return \Square\Models\Money
         */
        public static function price_to_money($price)
        {
        }
        /**
         * Returns the square item ID (if known) or generates one based on local data.
         *
         * @since 2.0.0
         *
         * @param int|\WC_Product $product_id the product ID or product object
         * @param bool $generate_if_not_found whether a temporary ID should be returned if an ID is not found
         * @return string
         */
        public static function get_square_item_id($product_id, $generate_if_not_found = true)
        {
        }
        /**
         * Sets the Square item ID for a given product.
         *
         * @since 2.0.0
         *
         * @param int|false|\WC_Product $product the product object or ID
         * @param string $item_id the Square item ID
         */
        public static function set_square_item_id($product, $item_id)
        {
        }
        /**
         * Returns the square item variation ID (if known) or generates one based on local data.
         *
         * @since 2.0.0
         *
         * @param int|\WC_Product $product_id the product ID or product object
         * @param bool $generate_if_not_found whether a temporary ID should be returned if an ID is not found
         * @return string|null
         */
        public static function get_square_item_variation_id($product_id, $generate_if_not_found = true)
        {
        }
        /**
         * Sets the Square item variation ID for a given product.
         *
         * @since 2.0.0
         *
         * @param int|false|\WC_Product $product the product object or ID
         * @param string $item_variation_id the Square item variation ID
         */
        public static function set_square_item_variation_id($product, $item_variation_id)
        {
        }
        /**
         * Looks up a Square catalog variation ID by SKU (e.g. when mapping was lost after timeout).
         * Optionally persists the mapping so future syncs don't need to look it up again.
         *
         * @since 5.3.3
         *
         * @param string     $sku        WooCommerce product/variation SKU.
         * @param int|null   $product_id Optional. Product ID to save the mapping to when found.
         * @param bool       $persist    Optional. Whether to save the variation ID to the product when found. Default true.
         * @return string|null Square variation ID if found, null otherwise.
         */
        public static function get_square_variation_id_by_sku($sku, $product_id = null, $persist = true)
        {
        }
        /**
         * Returns the Square item version (if known) for the given product.
         *
         * @since 2.0.0
         *
         * @param int|\WC_Product $product_id the product ID or product object
         * @return int
         */
        public static function get_square_version($product_id)
        {
        }
        /**
         * Sets the Square item version for a given product.
         *
         * @since 2.0.0
         *
         * @param int|false|\WC_Product $product the product object or ID
         * @param int $version the Square item version
         */
        public static function set_square_version($product, $version)
        {
        }
        /**
         * Returns the Square item variation version (if known) for the given product.
         *
         * @since 2.0.0
         *
         * @param int|\WC_Product $product_id the product ID or product object
         * @return int
         */
        public static function get_square_variation_version($product_id)
        {
        }
        /**
         * Sets the Square item ID for a given product.
         *
         * @since 2.0.0
         *
         * @param int|false|\WC_Product $product the product object or ID
         * @param int $variation_version the Square item variation version
         */
        public static function set_square_variation_version($product, $variation_version)
        {
        }
        /**
         * Gets a product's Square image ID.
         *
         * @since 2.0.0
         *
         * @param \WC_Product|int $product product object or ID
         * @return string
         */
        public static function get_square_image_id($product)
        {
        }
        /**
         * Sets a product's Square image ID.
         *
         * @since 2.0.0
         *
         * @param \WC_Product|int $product product object or ID
         * @param string $image_id Square image ID
         */
        public static function set_square_image_id($product, $image_id)
        {
        }
        /**
         * Gets all the Square meta data for the given product IDs.
         *
         * @see Product::get_square_meta_single()
         *
         * @since 2.0.0
         *
         * @param int[] $product_ids the product IDs to look up
         * @param string $array_key the variable to use as the array key in the resulting array
         * @return array associative array of arrays of data, indexed by $array_key found values (e.g. product ID or square ID, etc.)
         */
        public static function get_square_meta($product_ids, $array_key = 'product_id')
        {
        }
        /**
         * Gets all the Square meta data for the given single product ID.
         *
         * @see Product::get_square_meta() for getting meta data for all products
         *
         * @since 2.0.0
         *
         * @param int|\WC_Product $product_id the product ID or object
         * @return array associative array
         */
        public static function get_square_meta_single($product_id)
        {
        }
        /**
         * Checks if a product is mapped to a Square Item.
         *
         * @since 2.0.0
         *
         * @param int|\WC_Product $product_id the product ID or product object
         * @return bool
         */
        public static function is_mapped($product_id)
        {
        }
        /**
         * Updates square meta for a given product ID.
         *
         * @since 2.0.0
         *
         * @param int|\WC_Product $product_id the product ID or the product object
         * @param array $meta_data the meta data to update
         *     @type string $item_id the Square Item ID
         *     @type int $item_version the Square Item version
         *     @type string $item_variation_id the Square Item Variation ID
         *     @type int $item_variation_version the Square Item Variation Version
         */
        public static function update_square_meta($product_id, $meta_data)
        {
        }
        /**
         * Clears the Square meta for a given product.
         *
         * @since 2.0.0
         *
         * @param int[] $product_ids array of product IDs
         */
        public static function clear_square_meta($product_ids)
        {
        }
        /**
         * Imports meta data from a remote product to the given local product ID.
         *
         * @since 2.0.0
         *
         * @param int|false|\WC_Product $product the product object or ID
         * @param \Square\Models\CatalogObject $remote_product the remote catalog object
         */
        public static function import_remote_meta($product, $remote_product)
        {
        }
        /**
         * Returns the thumbnail ID of a CatalogItem.
         *
         * @param \Square\Models\CatalogObject $catalog_object
         * @return string
         */
        public static function get_catalog_item_thumbnail_id($catalog_object)
        {
        }
        /**
         * Gets an InventoryChange object filled with a \Square\Models\InventoryPhysicalCount object for a given product.
         *
         * @since 2.0.0
         *
         * @param \WC_Product $product the product object
         * @return \Square\Models\InventoryChange|null
         */
        public static function get_inventory_change_physical_count_type(\WC_Product $product)
        {
        }
        /**
         * Gets an InventoryChange object filled with a \Square\Models\InventoryAdjustment object for a given product.
         *
         * @since 2.0.8
         *
         * @param \WC_Product $product the product object
         * @param int $adjustment Value can negative or positive.
         *
         * @return \Square\Models\InventoryChange|null
         */
        public static function get_inventory_change_adjustment_type(\WC_Product $product, $adjustment)
        {
        }
        /**
         * Checks for location overrides and sets the product/variation's price based on the location
         *
         * @since 3.3.1
         *
         * @param \WC_Product|\WC_Product_Variation $product
         * @param \Square\Models\CatalogObject $catalog_variation
         */
        public static function update_price_money($product, \Square\Models\CatalogObject $catalog_variation)
        {
        }
        /** Helper function to get the variation product's parent ID from posts table but only if the parent product still exists.
         *
         * @since 2.5.2
         * @param int|object $variation_id
         * @return string|null
         */
        public static function get_parent_product_id_by_variation_id($variation_id)
        {
        }
        /**
         * Check if product is a gift card.
         *
         * @since 4.2.0
         *
         * @param \WC_Product $product WooCommerce product.
         *
         * @return bool
         */
        public static function is_gift_card($product)
        {
        }
    }
}
namespace WooCommerce\Square\Handlers\Product {
    class Woo_SOR extends \WooCommerce\Square\Handlers\Product
    {
        /**
         * Updates a Square catalog item with a WooCommerce product's data.
         *
         * @since 2.0.0
         *
         * @param \Square\Models\CatalogObject $catalog_object Square SDK catalog object
         * @param \WC_Product $product WooCommerce product
         * @return \Square\Models\CatalogObject
         * @throws \InvalidArgumentException when the catalog object is not an ITEM
         * @throws \Exception on Square API failures while resolving item options
         */
        public static function update_catalog_item(\Square\Models\CatalogObject $catalog_object, \WC_Product $product)
        {
        }
        /**
         * Updates a Square catalog item variation with a WooCommerce product's data.
         *
         * @since 2.0.0
         *
         * @param \Square\Models\CatalogObject $catalog_object Square SDK catalog object
         * @param \WC_Product   $product        WooCommerce product
         * @param array         $options_ids    Array of options IDs
         *
         * @return \Square\Models\CatalogObject
         * @throws \InvalidArgumentException when the catalog object is not an ITEM_VARIATION
         * @throws \Exception on Square API failures while resolving item options
         */
        public static function update_catalog_variation(\Square\Models\CatalogObject $catalog_object, \WC_Product $product, $options_ids = array())
        {
        }
        /**
         * Sets the present/absent location IDs to a catalog object.
         *
         * @since 2.0.0
         *
         * @param \Square\Models\CatalogObject $catalog_object Square SDK catalog object
         * @param bool $is_delete whether the product is being deleted
         * @return \Square\Models\CatalogObject
         */
        public static function set_catalog_object_location_ids(\Square\Models\CatalogObject $catalog_object, $is_delete = false)
        {
        }
        /**
         * Helper to get only attributes used for variations.
         *
         * @since 4.9.3
         *
         * @param WC_Product $product
         * @return array
         */
        public static function get_used_variation_attributes($product)
        {
        }
    }
}
namespace WooCommerce\Square\Handlers {
    /**
     * Products admin handler.
     *
     * @since 2.0.0
     */
    class Products
    {
        /** @var array associative array of product error codes and messages */
        private $product_errors;
        /** @var array associative array of memoized errors being output for a product at one time */
        private $output_errors = array();
        /** @var int[] array of product IDs that have been scheduled for sync in this request */
        private $products_to_sync = array();
        /** @var int[] array of product IDs that have been scheduled for deletion in this request */
        private $products_to_delete = array();
        /** @var bool whether gift card features are enabled */
        private $gift_card_enabled = 'no';
        /** @var int[] array of product IDs that have been scheduled for inventory sync in this request */
        private $products_to_inventory_sync = array();
        /** @var \WooCommerce\Square\Plugin plugin instance */
        private $plugin;
        /**
         * Sets up the products admin handler.
         *
         * @since 2.0.0
         */
        public function __construct(\WooCommerce\Square\Plugin $plugin)
        {
        }
        /**
         * Loads register common errors.
         *
         * @since 4.8.6
         */
        public function register_common_errors()
        {
        }
        /**
         * Adds hooks to the admin products edit screen.
         *
         * Products filtering, bulk actions, etc.
         *
         * @since 2.0.0
         */
        private function add_products_edit_screen_hooks()
        {
        }
        /**
         * Adds hooks to individual products edit screens.
         *
         * Product data input fields, variations, etc.
         *
         * @since 2.0.0
         */
        private function add_product_edit_screen_hooks()
        {
        }
        /**
         * Adds hooks to sync products that have been updated.
         *
         * @since 2.0.0
         */
        private function add_product_sync_hooks()
        {
        }
        /**
         * Add help tabs.
         *
         * @since 4.7.0
         */
        public function add_tabs()
        {
        }
        /**
         * Adds an option to filter products by sync status.
         *
         * @internal
         *
         * @since 2.0.0
         *
         * @param string $post_type the post type context
         */
        public function add_filter_products_synced_with_square_option($post_type)
        {
        }
        /**
         * Filters products in admin edit screen by sync status with Square.
         *
         * @internal
         *
         * @since 2.0.0
         *
         * @param array $query_vars query variables
         * @return array
         */
        public function filter_products_synced_with_square($query_vars)
        {
        }
        /**
         * Adds general product data options to a product metabox.
         *
         * @internal
         *
         * @since 2.0.0
         */
        public function add_product_data_fields()
        {
        }
        /**
         * Outputs HTML with a dropdown field to mark a product to be synced with Square.
         *
         * @since 2.0.0
         *
         * @param bool $bulk whether the field is meant for bulk edit
         */
        private function output_synced_with_square_edit_field($bulk = false)
        {
        }
        /**
         * Adds quick edit fields to the products screen.
         *
         * @internal
         *
         * @since 2.0.0
         */
        public function add_quick_edit_inputs()
        {
        }
        /**
         * Adds bulk edit fields to the products screen.
         *
         * @internal
         *
         * @since 2.0.0
         */
        public function add_bulk_edit_inputs()
        {
        }
        /**
         * In case Woo is the SOR, validates whether a product can be synced with Square and disable sync if not
         *
         * @since 2.0.8
         *
         * @param int $product_id the product ID
         */
        public function validate_product_update_and_sync($product_id)
        {
        }
        /**
         * Stages a product for sync with Square on product save if Woo is the SOR and the product is set to 'synced with square'.
         *
         * @internal
         *
         * @since 2.0.0
         *
         * @param \WC_Product $product the product object
         */
        public function maybe_stage_product_for_sync($product)
        {
        }
        /**
         * Initializes a synchronization event for any staged products in this request.
         *
         * @internal
         *
         * @since 2.0.0
         */
        public function maybe_sync_staged_products()
        {
        }
        /**
         * Removes a product from Square if it is deleted locally and Woo is the SOR.
         *
         * @since 2.0.0
         *
         * @param int $product_id the product ID
         */
        public function maybe_stage_products_for_deletion($product_id)
        {
        }
        /**
         * Deletes any products staged for remote deletion.
         *
         * @since 2.0.0
         */
        public function maybe_delete_staged_products()
        {
        }
        /**
         * Sets a product's synced with Square status for quick/bulk edit action.
         *
         * @internal
         *
         * @since 2.0.0
         *
         * @param \WC_Product $product a product object
         */
        public function set_synced_with_square($product)
        {
        }
        /**
         * Updates Square sync status for a product upon saving.
         *
         * @internal
         *
         * @since 2.0.0
         *
         * @param \WC_Product $product product object
         */
        public function process_product_data($product)
        {
        }
        /**
         * Adjusts a product's Square stock.
         *
         * @since 2.0.0
         *
         * @param \WC_Product $product product object
         */
        public function maybe_adjust_square_stock($product)
        {
        }
        /**
         * Prevents copying Square data when duplicating a product in admin.
         *
         * @internal
         *
         * @since 2.0.0
         *
         * @param \WC_Product $duplicated_product product duplicate
         * @param \WC_Product $original_product product duplicated
         */
        public function handle_product_duplication($duplicated_product, $original_product)
        {
        }
        /**
         * Outputs an admin notice when a product was hidden from catalog upon a sync error.
         *
         * @internal
         *
         * @since 2.0.0
         */
        public function add_notice_product_hidden_from_catalog()
        {
        }
        /**
         * Check whether this product can be synced with Square
         *
         * @param \WC_Product $product product object
         * @return array errors
         */
        private function check_product_sync_errors(\WC_Product $product)
        {
        }
        /**
         * Formats product error message with product information
         *
         * @param string $error error identifier (e.g. 'missing_variation_sku' or 'missing_sku')
         * @param \WC_Product $product product object
         * @return string formatted error message
         */
        private function format_product_error(string $error, \WC_Product $product)
        {
        }
        /**
         * Gets the plugin instance.
         *
         * @since 2.0.8
         *
         * @return Plugin
         */
        protected function get_plugin()
        {
        }
        /**
         * Adds the sync status column to the export columns.
         *
         * @param array $columns Array of columns
         * @return array
         */
        public function add_sync_status_to_column($columns)
        {
        }
        /**
         * Sets column data.
         *
         * @param mixed       $value   Value of a column
         * @param \WC_Product $product WooCommerce product object.
         */
        public function export_sync_status_taxonomy($value, $product)
        {
        }
        /**
         * Registers the sync status to the importer.
         *
         * @param array $columns Array of columns
         * @return array
         */
        public function register_sync_status_for_importer($columns)
        {
        }
        /**
         * Add automatic mapping support for wc_square_synced column.
         *
         * @param array $columns Array of columns
         * @return array
         */
        public function map_sync_status_column($columns)
        {
        }
        /**
         * Imports square sync status.
         *
         * @param \WC_Product $product WooCommerce product.
         * @param array       Import data.
         *
         * @return array
         */
        public function import_sync_status($product, $data)
        {
        }
        /**
         * Returns array of product types that support a Square Gift Card.
         *
         * @since 4.2.0
         * @return array
         */
        public static function get_gift_card_compatible_product_types()
        {
        }
        /**
         * Add checkbox in product type options.
         *
         * @since 4.2.0
         *
         * @param  array $actions Array of actions.
         * @return array
         */
        public static function add_gift_card_checkbox($actions)
        {
        }
        /**
         * Removes product settings tabs that are irrelevant to the Gift Card product type.
         *
         * @since 4.2.0
         *
         * @param array $tabs Array of tabs
         * @return array
         */
        public static function filter_product_tabs($tabs)
        {
        }
        /**
         * Handles a gift card product on publish/update.
         *
         * @since 4.2.0
         *
         * @param \WC_Product $product WooCommerce product.
         * @return void
         */
        public static function process_post_data($product)
        {
        }
        /**
         * Adds email address input fields to sent gift cards.
         *
         * @since 4.2.0
         */
        public static function add_input_fields_to_gift_card_product()
        {
        }
        /**
         * Disables taxes for a Square Gift Card.
         *
         * @since 4.2.0
         *
         * @param boolean     $tax_status Indicates whether taxes should be applied to a WooCommerce product.
         * @param \WC_Product $product    The WooCommerce product object.
         *
         * @return boolean
         */
        public function disable_taxes_for_gift_card_product($tax_status, $product)
        {
        }
        /**
         * Disables shipping for a Square Gift Card.
         *
         * @since 4.2.0
         *
         * @param boolean     $needs_shipping Indicates whether shipping is required for a WooCommerce product.
         * @param \WC_Product $product        The WooCommerce product object.
         *
         * @return boolean
         */
        public function disable_shipping_for_gift_card_product($needs_shipping, $product)
        {
        }
        /**
         * Disables coupons for a Square Gift Card.
         *
         * @since 4.2.0
         *
         * @param boolean     $is_valid Indicates whether coupons are applicable to a WooCommerce product.
         * @param \WC_Product $product  The WooCommerce product object.
         * @param \WC_Coupon  $coupon   The WooCommerce coupon object.
         * @param array       $values   Cart item values.
         *
         * @return boolean
         */
        public function disable_coupons_for_gift_card_product($is_valid, $product, $coupon, $values)
        {
        }
        /**
         * Invalidate coupons when used with gift card products.
         *
         * @since 4.2.0
         *
         * @param  bool       $is_valid Whether a coupon is valid.
         * @param  WC_Coupon  $coupon   The coupon being applied.
         * @return bool
         */
        public function coupon_is_valid($is_valid, $coupon)
        {
        }
        /**
         * Adds Gift Card send-to email address to cart item.
         *
         * @since 4.2.0
         *
         * @param array $cart_item_data Array of cart items.
         * @param int   $product_id     Woo product ID.
         * @param int   $variation_id   Woo product variation ID.
         * @param int   $quantity       Quantity of a product added to cart.
         */
        public function add_cart_item_data($cart_item_data, $product_id, $variation_id, $quantity)
        {
        }
        /**
         * Adds gift card meta to cart item.
         *
         * @since 4.2.0
         *
         * @param array $item_data Cart item data. Empty by default.
         * @param array $cart_item Cart item array.
         */
        public function add_sent_to_email_to_cart_item($item_data, $cart_item)
        {
        }
        /**
         * Adds a custom gift card placeholder image to products that are marked
         * as a gift card.
         *
         * @since 4.2.0
         *
         * @param string      $image   HTML string for image.
         * @param \WC_Product $product WooCommerce product.
         * @param string      $size (default: 'woocommerce_thumbnail').
         *
         * @return string
         */
        public function filter_gift_card_product_featured_image_placeholder($image, $product, $size)
        {
        }
        /**
         * Adds a custom gift card placeholder image to product that are marked
         * as a gift card on the single product page.
         *
         * @since 4.2.0
         *
         * @param string $html HTML string for image.
         *
         * @return string
         */
        public function filter_single_product_featured_image_placeholder($html)
        {
        }
        /**
         * Limits adding a single gift card product to cart per order.
         *
         * @since 4.2.0
         *
         * @param boolean $found_in_cart Indicates if the product is found in cart.
         * @param int     $product_id    The ID of the product being added to the cart.
         *
         * @return boolean
         */
        public function limit_gift_card_quantity_in_cart($found_in_cart, $product_id)
        {
        }
        /**
         * Disables processing for a gift card product so that the order goes to
         * the `completed` state.
         *
         * @since 4.2.0
         *
         * @param boolean     $virtual_downloadable_item Is a product virtual & downloadable item.
         * @param \WC_Product $product                   Current product being processed.
         */
        public function filter_needs_processing($virtual_downloadable_item, $product)
        {
        }
        /**
         * Stage products for inventory sync when product is added to cart.
         *
         * @param string $cart_item_key  Cart item key.
         * @param int    $product_id     Product ID.
         * @param int    $quantity       Quantity.
         * @param int    $variation_id   Variation ID.
         *
         * @since 4.1.0
         */
        public function maybe_stage_products_for_sync_inventory($cart_item_key, $product_id, $quantity, $variation_id)
        {
        }
        /**
         * Sync product inventory of staged products.
         *
         * @since 4.1.0
         */
        public function maybe_sync_product_inventory()
        {
        }
        /**
         * Add to cart text.
         *
         * @param string      $text    Add to cart text.
         * @param \WC_Product $product Product object.
         * @return string
         */
        public function gift_card_add_to_cart_text($text, $product)
        {
        }
        /**
         * Add to cart URL.
         *
         * @param string      $url     Add to cart URL.
         * @param \WC_Product $product Product object.
         * @return string
         */
        public function gift_card_add_to_cart_url($url, $product)
        {
        }
        /**
         * Determine if the Product has options.
         *
         * This will change the add to card button link to product page.
         *
         * @param boolean     $has_options Whether the product has options.
         * @param \WC_Product $product     Product object.
         */
        public function gift_card_product_has_options($has_options, $product)
        {
        }
        /**
         * Determine if the Product supports a feature.
         *
         * Disable AJAX add to cart for gift card products.
         *
         * @param boolean     $supports Whether the product supports a feature.
         * @param string      $feature  Feature.
         * @param \WC_Product $product  Product object.
         * @return boolean
         */
        public function gift_card_product_supports($supports, $feature, $product)
        {
        }
        /**
         * Adds a custom gift card placeholder image to products that are marked
         * as a gift card.
         *
         * @param string      $image_id Image ID.
         * @param \WC_Product $product  WooCommerce product.
         *
         * @return string
         */
        public function gift_card_product_image_id($image_id, $product)
        {
        }
        /**
         * Returns true if a gift card product should use the provided
         * default placeholder image.
         *
         * @since 4.8.1
         *
         * @return bool
         */
        public static function should_use_default_gift_card_placeholder_image()
        {
        }
        /**
         * Returns the default placeholder image ID for gift card products.
         *
         * @since 4.8.1
         *
         * @return int
         */
        public static function get_gift_card_default_placeholder_id()
        {
        }
        /**
         * Returns the default placeholder image URL for gift card products.
         *
         * @since 4.8.1
         *
         * @return string|bool
         */
        public static function get_gift_card_default_placeholder_url()
        {
        }
    }
    /**
     * Synchronization handler class
     *
     * @since 2.0.0
     */
    class Sync
    {
        /** @var string key of the option that stores a timestamp when the last sync job completed */
        private $last_synced_at_option_key = 'wc_square_last_synced_at';
        /** @var string name of the Action Scheduler event name for syncing with Square */
        private $sync_scheduled_event_name;
        /** @var \WooCommerce\Square\Plugin plugin instance */
        private $plugin;
        /**
         * Constructs the class.
         *
         * @since 2.0.0
         *
         * @param \WooCommerce\Square\Plugin $plugin
         */
        public function __construct(\WooCommerce\Square\Plugin $plugin)
        {
        }
        /**
         * Adds the action & filter hooks.
         *
         * @since 2.0.0
         */
        private function add_hooks()
        {
        }
        /**
         * Returns array of post types supported for sync.
         *
         * Since 3.8.3
         *
         * @return array
         */
        public function supported_product_types()
        {
        }
        /**
         * Schedules the interval sync.
         *
         * @param bool $change_interval (optional) whether to change the interval
         * @since 2.0.0
         */
        public function schedule_sync($change_interval = false)
        {
        }
        /**
         * Unschedules the interval sync.
         *
         * @since 2.0.0
         */
        public function unschedule_sync()
        {
        }
        /**
         * Performs a product import from Square.
         *
         * @since 2.0.0
         *
         * @param bool $update_during_import whether the store manager has ticked to update products during an import
         * @return \stdClass|null
         */
        public function start_product_import($update_during_import = false)
        {
        }
        /**
         * Performs a manual sync.
         *
         * @since 2.0.0
         *
         * @param int[] $product_ids (optional) array of product IDs to sync
         * @return \stdClass|null
         */
        public function start_manual_sync(array $product_ids = array())
        {
        }
        /**
         * Performs a manual product deletion.
         *
         * @since 2.0.0
         *
         * @param int[] $product_ids array of product IDs to delete
         * @return \stdClass|null
         */
        public function start_manual_deletion(array $product_ids)
        {
        }
        /**
         * Performs an interval sync with Square.
         *
         * @since 2.0.0
         */
        public function start_interval_sync()
        {
        }
        /** Conditional methods *******************************************************************************************/
        /**
         * Determines whether a sync, scheduled or manual, is in progress.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function is_sync_in_progress()
        {
        }
        /**
         * Determines if sync is enabled.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function is_sync_enabled()
        {
        }
        /** Setter methods ************************************************************************************************/
        /**
         * Records a successful sync.
         *
         * @since 2.0.0
         *
         * @param int[] $product_ids IDs of products synced
         * @param null|\stdClass $job optional sync job, may be used to set the job ID to prevent duplicates
         */
        public function record_sync(array $product_ids, $job = null)
        {
        }
        /**
         * Updates the time when the last sync job occurred.
         *
         * @since 2.0.0
         *
         * @param int|string|null $timestamp a valid timestamp in UTC (optional, will default to now)
         * @return bool success
         */
        public function set_last_synced_at($timestamp = null)
        {
        }
        /** Getter methods ************************************************************************************************/
        /**
         * Gets a job that is currently in progress.
         *
         * @since 2.0.0
         *
         * @return null|\stdClass background job object or null if not found
         */
        public function get_job_in_progress()
        {
        }
        /**
         * Gets the timestamp when the next sync job should start.
         *
         * @since 2.0.0
         *
         * @return int
         */
        public function get_next_sync_at()
        {
        }
        /**
         * Gets the timestamp for when the last sync job completed.
         *
         * @since 2.0.0
         *
         * @return int
         */
        public function get_last_synced_at()
        {
        }
        /**
         * Sets the timestamp for when the last inventory sync job started.
         *
         * @since 2.0.0
         *
         * @param int|string|null $timestamp a valid timestamp in UTC (optional, will default to now)
         * @return bool success
         */
        public function set_inventory_last_synced_at($timestamp = null)
        {
        }
        /**
         * Gets the timestamp for when the last inventory sync job completed.
         *
         * @since 2.0.0
         *
         * @return int
         */
        public function get_inventory_last_synced_at()
        {
        }
        /**
         * Gets the plugin instance.
         *
         * @since 2.0.0
         *
         * @return \WooCommerce\Square\Plugin
         */
        private function get_plugin()
        {
        }
        /**
         * Show warning not to close or navigate away from the current
         * page when product import is in progress.
         */
        public function render_import_no_navigation_warning()
        {
        }
    }
}
namespace WooCommerce\Square\Internal\Abilities {
    /**
     * Registers Square for WooCommerce abilities with the WordPress Abilities API.
     *
     * Thin coordinator: holds the ABILITY_CLASSES list and the
     * can_manage_woocommerce_square() capability helper that mirrors the load-bearing
     * read gate resolved by the plugin's REST controllers
     * (WC_Square_REST_Base_Controller::check_permission()).
     *
     * Gated by the `woocommerce_square_abilities_enabled` filter (default false).
     *
     * Registration pattern: abilities are registered exclusively via Woo
     * Core's `woocommerce_ability_definition_classes` loader filter
     * (introduced in WC 10.9). On stores running WC < 10.9 the feature
     * silently no-ops — see woo_abilities_loader_available().
     *
     * @internal This class may be modified, moved or removed in future releases.
     */
    class Abilities_Registrar
    {
        /**
         * Category slug used for every Square for WooCommerce ability.
         *
         * The `woocommerce` category is owned and registered by WooCommerce
         * Core (10.9+); plugin ownership lives in the ability namespace, not
         * the category. Mirrored on Domain\AbstractSquareAbility::CATEGORY_SLUG
         * so Domain classes can reference self::CATEGORY_SLUG without a
         * cross-namespace static call.
         *
         * @var string
         */
        const CATEGORY_SLUG = 'woocommerce';
        /**
         * Ability definition classes registered through the WC 10.9 loader.
         *
         * Every Square for WooCommerce ability is listed here. The ::class
         * constants are compile-time strings — referencing them does NOT
         * autoload the classes. They resolve only when Woo's loader iterates
         * the filter return value on WC 10.9+.
         *
         * @var array<int, class-string>
         */
        private const ABILITY_CLASSES = array(\WooCommerce\Square\Internal\Abilities\Domain\GetSyncStatus::class, \WooCommerce\Square\Internal\Abilities\Domain\GetSyncRecords::class, \WooCommerce\Square\Internal\Abilities\Domain\GetConnectionStatus::class, \WooCommerce\Square\Internal\Abilities\Domain\GetLocations::class, \WooCommerce\Square\Internal\Abilities\Domain\GetProductSyncState::class, \WooCommerce\Square\Internal\Abilities\Domain\GetPendingJobs::class, \WooCommerce\Square\Internal\Abilities\Domain\GetOrderPaymentStatus::class);
        /**
         * Whether init() has already wired its action callbacks.
         *
         * Without this guard, repeated calls to init() while the feature
         * filter is true would each append a fresh add_action() for the
         * registrar callbacks, and the Abilities Registry would emit
         * _doing_it_wrong notices for every already-registered slug when the
         * action fires.
         *
         * @var bool
         */
        private static $initialized = false;
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
         * Whether WC 10.9's AbilitiesLoader is available.
         *
         * Used as a hard gate: on WC < 10.9 the abilities feature silently
         * no-ops. WC 10.9 also depends on WP 6.9, so wp_register_ability()
         * is implicitly available wherever the loader exists.
         *
         * @return bool
         */
        private static function woo_abilities_loader_available(): bool
        {
        }
        /**
         * Append Square for WooCommerce ability classes to Woo Core's loader.
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
         * Permission callback for Square for WooCommerce read abilities.
         *
         * Mirrors the read gate resolved by
         * WC_Square_REST_Base_Controller::check_permission().
         *
         * @return bool
         */
        public static function can_manage_woocommerce_square(): bool
        {
        }
    }
}
namespace WooCommerce\Square\Internal\Abilities\Domain {
    /**
     * Shared helpers for Square for WooCommerce ability definitions.
     *
     * Mirrors the shape of Woo Core's `Internal\Abilities\Domain\AbstractDomainAbility`
     * without coupling Square for WooCommerce to that class.
     *
     * @internal
     */
    abstract class AbstractSquareAbility
    {
        /**
         * Ability category slug shared across every Domain ability.
         *
         * The `woocommerce` category is owned and registered by WooCommerce
         * Core (10.9+); plugin ownership lives in the ability namespace, not
         * the category. Mirrors WooCommerce\Square\Internal\Abilities\Abilities_Registrar::CATEGORY_SLUG
         * so Domain classes can reference self::CATEGORY_SLUG without a
         * cross-namespace static call.
         */
        public const CATEGORY_SLUG = 'woocommerce';
        /**
         * Resolve the plugin's Settings handler, or a uniform WP_Error if the
         * plugin is not initialized.
         *
         * @return \WooCommerce\Square\Settings|\WP_Error
         */
        protected static function get_settings_handler_or_error()
        {
        }
        /**
         * Resolve the plugin's Sync handler, or a uniform WP_Error if the plugin
         * is not initialized.
         *
         * @return \WooCommerce\Square\Handlers\Sync|\WP_Error
         */
        protected static function get_sync_handler_or_error()
        {
        }
        /**
         * Resolve the plugin's Background_Job handler, or a uniform WP_Error if
         * the plugin is not initialized.
         *
         * @return \WooCommerce\Square\Handlers\Background_Job|\WP_Error
         */
        protected static function get_background_job_handler_or_error()
        {
        }
        /**
         * Resolve the plugin instance, or a uniform WP_Error if the wc_square()
         * accessor has not loaded yet.
         *
         * @return \WooCommerce\Square\Plugin|\WP_Error
         */
        protected static function get_plugin_or_error()
        {
        }
        /**
         * Uniform "plugin not initialized" error for execute() callbacks.
         *
         * @return \WP_Error
         */
        protected static function not_initialized_error(): \WP_Error
        {
        }
    }
    /**
     * Registers the woocommerce-square/get-connection-status ability.
     *
     * Lean alternative to the kitchen-sink general settings read. Answers
     * "is this store connected to Square, against which environment, and
     * which location ID is configured?" with five focused fields — and
     * deliberately excludes access_tokens, connection/disconnection URLs,
     * and the locations list. The locations list is available as a
     * separate ability (woocommerce-square/get-locations).
     *
     * @internal Only loaded when WooCommerce 10.9+ is active.
     */
    class GetConnectionStatus extends \WooCommerce\Square\Internal\Abilities\Domain\AbstractSquareAbility implements \Automattic\WooCommerce\Abilities\AbilityDefinition
    {
        public static function get_name(): string
        {
        }
        public static function get_registration_args(): array
        {
        }
        /**
         * Execute callback.
         *
         * @param mixed $input Ignored.
         * @return array|\WP_Error
         */
        public static function execute($input = null)
        {
        }
    }
    /**
     * Registers the woocommerce-square/get-locations ability.
     *
     * Returns the Square locations the merchant's connected account exposes —
     * id, name, status, currency, country (when available). Empty array when
     * not connected. Coerces Square SDK Location objects (\Square\Models\Location)
     * into plain associative arrays so the SDK class shape stays out of the
     * ability contract.
     *
     * Caveat: `Settings::get_locations()` round-trips the Square API on cache
     * miss (transient ttl is 1 hour). Treat the response as point-in-time.
     * Agents that need fresh data after a manual disconnect/reconnect must
     * accept a small staleness window.
     *
     * @internal Only loaded when WooCommerce 10.9+ is active.
     */
    class GetLocations extends \WooCommerce\Square\Internal\Abilities\Domain\AbstractSquareAbility implements \Automattic\WooCommerce\Abilities\AbilityDefinition
    {
        public static function get_name(): string
        {
        }
        public static function get_registration_args(): array
        {
        }
        /**
         * Execute callback.
         *
         * @param mixed $input Ignored.
         * @return array|\WP_Error
         */
        public static function execute($input = null)
        {
        }
        /**
         * Coerce a Square SDK Location object (or array) into a plain array
         * with the keys agents can rely on.
         *
         * @param mixed $location Square Location object or array-shaped value.
         * @return array
         */
        private static function normalize_location($location): array
        {
        }
    }
    /**
     * Registers the woocommerce-square/get-order-payment-status ability.
     *
     * Returns Square-specific payment state for a single WooCommerce order:
     * transaction id, capture state, gift-card split-payment metadata, refund
     * totals, and the underlying order status/total. Lets agents answer "why
     * did order X's payment behave this way?" without round-tripping through
     * the WC admin UI.
     *
     * Backing detail: reads post-meta only (no Square API calls, no transient
     * writes). Both Square gateways are checked — square_credit_card and
     * square_cash_app_pay. When the order's payment method is something else,
     * the ability still returns the order's status/total + an
     * `is_square_payment: false` signal so agents can route accordingly
     * rather than receiving an error.
     *
     * @internal Only loaded when WooCommerce 10.9+ is active.
     */
    class GetOrderPaymentStatus extends \WooCommerce\Square\Internal\Abilities\Domain\AbstractSquareAbility implements \Automattic\WooCommerce\Abilities\AbilityDefinition
    {
        public static function get_name(): string
        {
        }
        public static function get_registration_args(): array
        {
        }
        /**
         * Execute callback.
         *
         * @param mixed $input Input args; `order_id` is required.
         * @return array|\WP_Error
         */
        public static function execute($input = null)
        {
        }
        /**
         * Collect a compact summary of WC refunds attached to the order.
         *
         * @param \WC_Order $order Order being inspected.
         * @return array
         */
        private static function collect_refunds(\WC_Order $order): array
        {
        }
    }
    /**
     * Registers the woocommerce-square/get-pending-jobs ability.
     *
     * Returns active background sync jobs (queued + currently processing) so
     * agents can answer "is sync stuck in a queue?" vs "still progressing?".
     * Distinct from get-sync-status, which is a composite health snapshot —
     * this ability surfaces the individual job records with per-job progress.
     *
     * Backing detail: Background_Job_Handler::get_jobs() reads job records
     * from wp_options with a LIKE-on-JSON status filter. No transient writes,
     * no API calls. Completed and failed jobs are excluded by default; pass
     * `include_terminal: true` to include them (still capped at 20 entries
     * total via the schema's `maximum` on `limit`).
     *
     * @internal Only loaded when WooCommerce 10.9+ is active.
     */
    class GetPendingJobs extends \WooCommerce\Square\Internal\Abilities\Domain\AbstractSquareAbility implements \Automattic\WooCommerce\Abilities\AbilityDefinition
    {
        public static function get_name(): string
        {
        }
        public static function get_registration_args(): array
        {
        }
        /**
         * Execute callback.
         *
         * @param mixed $input Optional input args (include_terminal, limit).
         * @return array|\WP_Error
         */
        public static function execute($input = null)
        {
        }
        /**
         * Coerce a Background_Job stdClass into a stable associative-array shape.
         *
         * @param object $job Job object returned by Background_Job_Handler::get_jobs().
         * @return array
         */
        private static function normalize_job($job): array
        {
        }
    }
    /**
     * Registers the woocommerce-square/get-product-sync-state ability.
     *
     * One-arg per-product read. Answers "is product X synced to Square,
     * and if so what's its Square item ID?". Sync state is held by a
     * taxonomy term (`wc_square_synced`, yes/no), NOT post-meta — the
     * Square item ID is post-meta (`_square_item_id`). The ability rolls
     * up the variation-parent lookup so callers don't need to know
     * variations check their parent product's term.
     *
     * Passes `$generate_if_not_found = false` to `Product::get_square_item_id()`
     * so the response distinguishes "synced, has a Square ID" from "synced,
     * not yet pushed". The default `true` arg returns a synthesized
     * `#item_<id>` placeholder which would mask the unpushed state.
     *
     * @internal Only loaded when WooCommerce 10.9+ is active.
     */
    class GetProductSyncState extends \WooCommerce\Square\Internal\Abilities\Domain\AbstractSquareAbility implements \Automattic\WooCommerce\Abilities\AbilityDefinition
    {
        public static function get_name(): string
        {
        }
        public static function get_registration_args(): array
        {
        }
        /**
         * Execute callback.
         *
         * @param mixed $input Expected shape: array{product_id: int}.
         * @return array|\WP_Error
         */
        public static function execute($input = null)
        {
        }
    }
    /**
     * Registers the woocommerce-square/get-sync-records ability.
     *
     * Returns entries from the Square sync log (per-product warnings, errors,
     * hidden products) so agents can diagnose "why didn't product X sync?" or
     * "what went wrong in yesterday's sync?". Filter parameters mirror the
     * subset of arguments accepted by Records::get_records() that make sense
     * to expose: type, product_id, limit, sort. orderby stays internal at
     * 'date' for predictability.
     *
     * Backing detail: Records::get_records() applies `max(50, $limit)` — that
     * is a floor, not a ceiling, so the service itself returns up to 50
     * records regardless of values below 50. The 50-record upper bound is
     * enforced by the input schema's `maximum: 50` on the `limit` property,
     * which clamps oversize requests before they reach the backing service.
     * Each Record is coerced to a plain associative array so the internal
     * Record class shape stays out of the ability contract.
     *
     * @internal Only loaded when WooCommerce 10.9+ is active.
     */
    class GetSyncRecords extends \WooCommerce\Square\Internal\Abilities\Domain\AbstractSquareAbility implements \Automattic\WooCommerce\Abilities\AbilityDefinition
    {
        public static function get_name(): string
        {
        }
        public static function get_registration_args(): array
        {
        }
        /**
         * Execute callback.
         *
         * @param mixed $input Filter args (type, product_id, sort, limit).
         * @return array|\WP_Error Array of record summaries.
         */
        public static function execute($input = null)
        {
        }
    }
    /**
     * Registers the woocommerce-square/get-sync-status ability.
     *
     * Reference ability for the Square for WooCommerce Abilities API rollout —
     * zero-arg overview answering "is Square product/inventory sync healthy?".
     * Returns a small associative array composed from six accessor methods on
     * the Sync handler: whether a sync is currently in progress, the id of the
     * running job (if any), the last product- and inventory-sync timestamps,
     * the next scheduled sync timestamp, and whether product sync is enabled.
     *
     * Today this state is only exposed via the `wc_square_get_sync_with_square_status`
     * wp_ajax_* handler; this ability fills the agent-facing gap without adding
     * a new REST endpoint.
     *
     * @internal Only loaded when WooCommerce 10.9+ is active. The
     *           Abilities_Registrar short-circuits before referencing this
     *           class on earlier WC versions; PHP's lazy autoload means the
     *           unresolved AbilityDefinition interface FQN never reaches the
     *           parser there.
     */
    class GetSyncStatus extends \WooCommerce\Square\Internal\Abilities\Domain\AbstractSquareAbility implements \Automattic\WooCommerce\Abilities\AbilityDefinition
    {
        public static function get_name(): string
        {
        }
        public static function get_registration_args(): array
        {
        }
        /**
         * Execute callback.
         *
         * Composes a small associative array from the Sync handler's read methods.
         * The job object returned by `get_job_in_progress()` is coerced to a
         * stable string id (or null) — the internal class shape is not part of
         * the ability contract.
         *
         * @param mixed $input Ignored; the ability accepts no input.
         * @return array|\WP_Error Associative array of sync state, or WP_Error
         *                         when the plugin has not finished initializing.
         */
        public static function execute($input = null)
        {
        }
    }
}
namespace WooCommerce\Square {
    /**
     * The plugin lifecycle handler.
     *
     * @since 2.0.0
     *
     * @method Plugin get_plugin()
     */
    class Lifecycle extends \WooCommerce\Square\Framework\Lifecycle
    {
        /**
         * Lifecycle constructor.
         *
         * @since 2.0.0
         *
         * @param Plugin $plugin main instance.
         */
        public function __construct(\WooCommerce\Square\Plugin $plugin)
        {
        }
        /**
         * Performs plugin installation.
         *
         * @since 2.0.0
         */
        protected function install()
        {
        }
        /**
         * Performs upgrade tasks.
         *
         * @since 2.0.0
         *
         * @param string $installed_version semver.
         */
        protected function upgrade($installed_version)
        {
        }
        /**
         * Upgrades to version 2.0.0
         *
         * @since 2.0.0
         */
        protected function upgrade_to_2_0_0()
        {
        }
        /**
         * Upgrades to version 2.0.4.
         *
         * @since 2.0.4
         */
        protected function upgrade_to_2_0_4()
        {
        }
        /**
         * Upgrades to version 2.1.5
         *
         * 2.1.5 updated the woocommerce_square_customers database schema.
         *
         * @see https://github.com/woocommerce/woocommerce-square/issues/359
         * @since 2.1.5
         */
        protected function upgrade_to_2_1_5()
        {
        }
        /**
         * Adds the missing Square customer table.
         *
         * @see https://github.com/woocommerce/woocommerce-square/issues/825
         * @since 3.2.0
         */
        protected function upgrade_to_3_2_0()
        {
        }
        /**
         * Deletes all transient data related to payment tokens.
         *
         * @see https://github.com/woocommerce/woocommerce-square/issues/1050
         * @since 3.8.3
         */
        protected function upgrade_to_3_8_3()
        {
        }
        /**
         * Upgrades to version 3.7.1
         *
         * This upgrade disables gift cards, and shows a notice to inform the merchant.
         * Gift Cards are in beta status and not recommended for production.
         *
         * @see https://github.com/woocommerce/woocommerce-square/issues/1003
         * @see https://github.com/woocommerce/woocommerce-square/issues/1009
         * @since 3.7.1.
         */
        protected function upgrade_to_3_7_1()
        {
        }
        /**
         * Generates a milestone notice message.
         *
         * @since 2.1.7
         *
         * @param string $custom_message Custom text that notes what milestone was completed.
         * @return string
         */
        protected function generate_milestone_notice_message($custom_message)
        {
        }
        /**
         * Upgrades to version 2.2.0.
         *
         * @since 2.2.0
         */
        protected function upgrade_to_2_2_0()
        {
        }
        /**
         * Upgrades to version 2.3.0.
         *
         * @since 2.3.0
         */
        protected function upgrade_to_2_3_0()
        {
        }
        /**
         * Deletes the transient that holds locations data.
         *
         * @see https://github.com/woocommerce/woocommerce-square/issues/786#issuecomment-1121388650
         *
         * @since 3.0.2
         */
        protected function upgrade_to_3_0_2()
        {
        }
        /**
         * Upgrades to version 4.7.0.
         *
         * @since 4.7.0
         */
        protected function upgrade_to_4_7_0()
        {
        }
        /**
         * Migrates plugin settings from v1 to v2.
         *
         * @see Lifecycle::upgrade_to_2_0_0()
         *
         * @since 2.0.0
         *
         * @return bool whether a Sync setting was enabled from migration
         */
        private function migrate_plugin_settings()
        {
        }
        /**
         * Migrates gateway settings from v1 to v2.
         *
         * @see Lifecycle::upgrade_to_2_0_0()
         *
         * @since 2.0.0
         */
        private function migrate_gateway_settings()
        {
        }
        /**
         * Migrates gateway settings dynamically.
         *
         * @param string $legacy_option legacy option name.
         * @param string $new_option    new option name.
         * @param array  $fields        fields to migrate.
         *
         * @since 4.7.0
         */
        private function migrate_gateway_settings_dynamically($legacy_option, $new_option, $fields = array(), $bail = true)
        {
        }
        /**
         * Migrates order data from v1 to v2.
         *
         * @see Lifecycle::upgrade_to_2_0_0()
         *
         * @since 2.0.0
         */
        private function migrate_orders()
        {
        }
        /**
         * Migrates product data from v1 to v2.
         *
         * @see Lifecycle::upgrade_to_2_0_0()
         *
         * @since 2.0.0
         */
        private function migrate_products()
        {
        }
        /**
         * Migrates customer data.
         *
         * @since 2.0.0
         */
        private function migrate_customers()
        {
        }
        /**
         * Adds the Sync setting setting to the v2 plugin settings depending on v1 setting values.
         *
         * @since 2.0.2
         *
         * @param array $v1_settings v1 plugin settings.
         * @param array $v2_settings v2 plugin settings.
         * @return array
         */
        private function get_migrated_system_of_record($v1_settings, $v2_settings)
        {
        }
        /**
         * Adds environment specific location_id to, and removes general location_id from v1 setting array.
         *
         * @since 2.2.0
         *
         * @param array $v1_settings v1 plugin settings.
         * @return array
         */
        private function set_environment_location_id($v1_settings)
        {
        }
    }
    /**
     * The main plugin class.
     *
     * @since 2.0.0
     */
    class Plugin extends \WooCommerce\Square\Framework\PaymentGateway\Payment_Gateway_Plugin
    {
        /** plugin version number */
        const VERSION = WC_SQUARE_PLUGIN_VERSION;
        /** plugin ID */
        const PLUGIN_ID = 'square';
        /** string gateway ID */
        const GATEWAY_ID = 'square_credit_card';
        /** string Gift Cards gateway ID */
        const GIFT_CARD_PAY_GATEWAY_ID = 'gift_cards_pay';
        /** string Cash App Pay gateway ID */
        const CASH_APP_PAY_GATEWAY_ID = 'square_cash_app_pay';
        /** @var Plugin plugin instance */
        protected static $instance;
        /** @var Settings settings handler instance */
        private $settings_handler;
        /** @var Handlers\Connection connection handler instance  */
        private $connection_handler;
        /** @var Coupons coupons handler instance */
        private $coupons_handler;
        /** @var Admin admin handler instance */
        private $admin_handler;
        /** @var \WooCommerce\Square\Handlers\Sync sync handler instance */
        private $sync_handler;
        /** @var \WooCommerce\Square\Handlers\Background_Job background handler instance */
        private $background_job_handler;
        /** @var AJAX handler instance */
        private $ajax_handler;
        /** @var \WooCommerce\Square\Handlers\Email emails handler */
        private $email_handler;
        /** @var \WooCommerce\Square\Handlers\Order orders handler */
        private $order_handler;
        /** @var \WooCommerce\Square\Handlers\Products products handler */
        private $products_handler;
        /** @var \WooCommerce\Square\Handlers\Async_Request Asynchronous request handler */
        private $async_request_handler;
        /** @var \WooCommerce\Square\Handlers\Order_Sync order sync handler */
        private $order_sync_handler;
        /**
         * Constructs the plugin.
         *
         * @since 2.0.0
         */
        public function __construct()
        {
        }
        /**
         * Unschedule order sync event if order sync is disabled.
         *
         * @since 5.0.0
         */
        public function unschedule_order_sync()
        {
        }
        /**
         * Includes required classes.
         *
         * @since 2.0.0
         */
        private function includes()
        {
        }
        /**
         * Adds API request logging.
         *
         * @internal
         *
         * @since 2.0.0
         */
        public function add_api_request_logging()
        {
        }
        /**
         * Logs an API request & response.
         *
         * @since 2.0.0
         *
         * @param array $request request data
         * @param array $response response data
         * @param string|null $log_id log ID
         */
        public function log_api_request($request, $response, $log_id = null)
        {
        }
        /**
         * If debug logging is enabled, saves errors or messages to Square Log
         *
         * @since 2.2.4
         * @param string $message error or message to save to log
         * @param string $log_id optional log id to segment the files by, defaults to plugin id
         */
        public function log($message, $log_id = null)
        {
        }
        /**
         * Initializes the lifecycle handler.
         *
         * @since 2.0.0
         */
        public function init_lifecycle_handler()
        {
        }
        /**
         * Registers custom taxonomies.
         *
         * @internal
         *
         * @since 2.0.0
         */
        public function init_taxonomies()
        {
        }
        /**
         * Initializes the general plugin functionality.
         *
         * @since 2.0.0
         */
        public function init_plugin()
        {
        }
        /**
         * Locates the WooCommerce template files from our templates directory.
         *
         * @internal
         *
         * @since 2.0.0
         *
         * @param string $template already found template
         * @param string $template_name searchable template name
         * @param string $template_path template path
         * @return string search result for the template
         */
        public function locate_template($template, $template_name, $template_path)
        {
        }
        /** Admin methods *************************************************************************************************/
        /**
         * Adds admin notices.
         *
         * @since 2.0.0
         */
        public function add_admin_notices()
        {
        }
        /**
         * Adds a notice for out-of-bounds base locations.
         *
         * @since 2.0.0
         */
        protected function add_base_location_admin_notice()
        {
        }
        /**
         * Adds a notice if no refresh token has been cached.
         *
         * @since 2.0.5
         */
        protected function add_missing_refresh_token_notice()
        {
        }
        /**
         * Adds a tax-inclusive admin warning to product pages.
         *
         * @since 2.0.0
         */
        protected function add_tax_inclusive_pricing_notice()
        {
        }
        /**
         * Adds admin notices for currency issues.
         *
         * @since 2.0.0
         */
        protected function add_currency_admin_notices()
        {
        }
        /** Helper methods ************************************************************************************************/
        /**
         * Returns an idempotency key to be used in Square API requests.
         *
         * @since 2.0.0
         *
         * @param string $key_input
         * @param bool $append_key_input
         * @return string
         */
        public function get_idempotency_key($key_input = '', $append_key_input = true)
        {
        }
        /**
         * Extracts the request body hash embedded in an idempotency key.
         *
         * Keys built for catalog upserts embed md5( serialize( $body ) ) as the first 32
         * characters of the key input (the part after the colon separator). Comparing this
         * hash against the hash of the current request body decides whether a stored key
         * can be reused on retry (unchanged body) or a new key is required (changed body).
         *
         * Returns null when the key has no parseable input, e.g. when the
         * `wc_square_idempotency_key` filter strips the input suffix. Callers must treat
         * null as "no match" and generate a fresh key.
         *
         * @since 5.5.0
         *
         * @param string $idempotency_key full idempotency key as returned by get_idempotency_key()
         * @return string|null 32-character md5 body hash, or null if not parseable
         */
        public function get_idempotency_key_body_hash($idempotency_key)
        {
        }
        /**
         * Returns the idempotency key to use for a request, reusing a previous key when allowed.
         *
         * Implements Square's idempotency contract for retries: a 429/5xx retry must resubmit
         * with the SAME key when the request body is unchanged, but a key can never be reused
         * with a different body (Square rejects it with IDEMPOTENCY_KEY_REUSED). The previous
         * key embeds the hash of the body it was created for, so body equality decides reuse.
         *
         * @since 5.5.0
         *
         * @param string|null $previous_key key stored by an earlier failed attempt, if any
         * @param string $body_hash md5 hash of the serialized current request body
         * @param string $context static context suffix for the key input, e.g. '_upsert_products'
         * @return string the previous key when the body is unchanged, otherwise a fresh key
         */
        public function get_reusable_idempotency_key($previous_key, $body_hash, $context)
        {
        }
        /** Conditional methods *******************************************************************************************/
        /**
         * Determines if viewing the plugin settings.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function is_plugin_settings()
        {
        }
        /**
         * Determines if viewing the gateway settings.
         *
         * @since 2.3.0
         *
         * @return bool
         */
        public function is_gateway_settings()
        {
        }
        /** Getter methods ************************************************************************************************/
        /**
         * Gets the main Square API handler.
         *
         * @since 2.0.0
         *
         * @param string|null $access_token API access token
         * @return API
         */
        public function get_api($access_token = null, $is_sandbox = null)
        {
        }
        /**
         * Gets the connection handler.
         *
         * @since 2.0.0
         *
         * @return Handlers\Connection
         */
        public function get_connection_handler()
        {
        }
        /**
         * Gets the sync handler instance.
         *
         * @since 2.0.0
         *
         * @return \WooCommerce\Square\Handlers\Sync
         */
        public function get_sync_handler()
        {
        }
        /**
         * Gets the background sync handler instance.
         *
         * @since 2.0.0
         *
         * @return \WooCommerce\Square\Handlers\Background_Job
         */
        public function get_background_job_handler()
        {
        }
        /**
         * Gets the settings handler instance.
         *
         * @since 2.0.0
         *
         * @return Settings
         */
        public function get_settings_handler()
        {
        }
        /**
         * Gets the admin handler instance.
         *
         * @since 2.0.0
         *
         * @return Admin|null
         */
        public function get_admin_handler()
        {
        }
        /**
         * Gets the email handler instance.
         *
         * @since 2.0.0
         *
         * @return \WooCommerce\Square\Handlers\Email
         */
        public function get_email_handler()
        {
        }
        /**
         * Gets the order handler instance.
         *
         * @since 2.0.0
         *
         * @return \WooCommerce\Square\Handlers\Order
         */
        public function get_order_handler()
        {
        }
        /**
         * Get the products handler instance/
         *
         * @since 2.0.8
         *
         * @return \WooCommerce\Square\Handlers\Products
         */
        public function get_products_handler()
        {
        }
        /**
         * Gets the Asynchronous request handler instance.
         *
         * @since 4.1.0
         *
         * @return \WooCommerce\Square\Handlers\Async_Request
         */
        public function get_async_request_handler()
        {
        }
        /**
         * Gets the order sync handler instance.
         *
         * @since 5.0.0
         *
         * @return \WooCommerce\Square\Handlers\Order_Sync
         */
        public function get_order_sync_handler()
        {
        }
        /**
         * Gets the plugin name.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_plugin_name()
        {
        }
        /**
         * Gets the settings URL.
         *
         * @since 2.0.0
         *
         * @param null|string $gateway_id gateway ID
         * @return string
         */
        public function get_settings_url($gateway_id = null)
        {
        }
        /**
         * Gets the Setup Wizard URL.
         *
         * @since 4.7.0
         *
         * @param string $step Step to go to.
         *
         * @return string
         */
        public function get_square_onboarding_url($step = '')
        {
        }
        /**
         * Gets the sale page URL.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_sales_page_url()
        {
        }
        /**
         * Gets the documentation URL.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_documentation_url()
        {
        }
        /**
         * Gets the plugin reviews page URL.
         *
         * Used for the 'Reviews' plugin action and review prompts.
         *
         * @since 2.1.7
         *
         * @return string
         */
        public function get_reviews_url()
        {
        }
        /**
         * Gets the support URL.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_support_url()
        {
        }
        /**
         * Gets __DIR__.
         *
         * @since 2.0.0
         *
         * @return string
         */
        protected function get_file()
        {
        }
        /**
         * Gets the singleton instance of the plugin.
         *
         * @since 2.0.0
         *
         * @return Plugin
         */
        public static function instance()
        {
        }
        /**
         * Schedules the migration of payment tokens.
         *
         * @since 3.8.0
         */
        public function schedule_token_migration_job()
        {
        }
        /**
         * Migrates payment token from user_meta to WC_Payment_Token_CC.
         *
         * @param integer $page Pagination number.
         * @since 3.8.0
         */
        public function register_payment_tokens_migration_scheduler($page)
        {
        }
    }
    /**
     * The settings API class.
     *
     * This handles registering, getting, and storing the general plugin options.
     *
     * Note that this is separate from the gateway settings.
     *
     * @since 2.0.0
     */
    class Settings extends \WC_Settings_API
    {
        /**
         * Square Sync setting.
         *
         * @var string square Sync setting indicator
         */
        const SYSTEM_OF_RECORD_SQUARE = 'square';
        /**
         * Woocommerce Sync setting.
         *
         * @var string square Sync setting indicator
         */
        const SYSTEM_OF_RECORD_WOOCOMMERCE = 'woocommerce';
        /**
         * Disabled Sync setting.
         *
         * @var string Sync setting indicator for disabled sync
         */
        const SYSTEM_OF_RECORD_DISABLED = 'disabled';
        /** Debug mode log to file */
        const DEBUG_MODE_LOG = 'log';
        /** Debug mode display on checkout */
        const DEBUG_MODE_CHECKOUT = 'checkout';
        /** Debug mode log to file and display on checkout */
        const DEBUG_MODE_BOTH = 'both';
        /** Debug mode disabled */
        const DEBUG_MODE_OFF = 'off';
        /** Debug mode log non-payment errors */
        const DEBUG_MODE_LOG_NON_PAYMENT_ERRORS = 'non-payment-save-to-log';
        /** Debug mode show payment errors on Checkout, log non-payment errors */
        const DEBUG_MODE_SHOW_PAYMENT_LOG_NON_PAYMENT = 'payment-show-and-non-payment-save-to-log';
        /** Debug mode log all errors */
        const DEBUG_MODE_LOG_ALL_ERRORS = 'all-errors-save-to-log';
        /**
         * Refresh token
         *
         * @var string un-encrypted refresh token
         */
        protected $refresh_token;
        /**
         * Access token
         *
         * @var string un-encrypted access token
         */
        protected $access_token;
        /**
         * Square business locations
         *
         * @var array business locations returned by the API
         */
        protected $locations;
        /**
         * Square plugin instance
         *
         * @var Plugin plugin instance
         */
        protected $plugin;
        /**
         * The current debug mode.
         *
         * @var string Returns from the settings.
         */
        private $debug_mode;
        /**
         * Constructs the class.
         *
         * @since 2.0.0
         *
         * @param Plugin $plugin plugin instance.
         */
        public function __construct(\WooCommerce\Square\Plugin $plugin)
        {
        }
        /**
         * Redirect users to the templates screen on plugin activation.
         *
         * @since 4.7.0
         */
        public function square_onboarding_redirect()
        {
        }
        /**
         * Registers square page(s).
         *
         * @since 4.7.0
         */
        public function register_pages()
        {
        }
        /**
         * Output the Setup Wizard page(s).
         */
        public function render_onboarding_page()
        {
        }
        /**
         * Show a notice to visit the wizard on plugin activation.
         *
         * @since 4.7.0
         */
        public function show_visit_wizard_notice()
        {
        }
        /**
         * Redirect users to the onboarding wizard screen on plugin activation.
         *
         * @since 4.7.0
         */
        public function render_square_settings_container()
        {
        }
        /**
         * Redirect users to the onboarding wizard screen on plugin activation.
         *
         * @since 4.7.0
         */
        public function render_payments_settings_container()
        {
        }
        /**
         * Show warning to reconnect if the `SQUARE_ENCRYPTION_KEY` and `SQUARE_ENCRYPTION_SALT` constants
         * are newly added.
         *
         * @since 4.2.0
         */
        public function show_auth_keys_changed_notice()
        {
        }
        /**
         * Returns true if `SQUARE_ENCRYPTION_KEY` and `SQUARE_ENCRYPTION_SALT` constants are both set.
         *
         * @since 4.2.0
         *
         * @return boolean
         */
        public function is_custom_square_auth_keys_set()
        {
        }
        /**
         * Initializes form fields and settings.
         *
         * @since 3.5.1
         */
        public function init()
        {
        }
        /**
         * Initializes the form fields.
         *
         * @since 2.0.0
         */
        public function init_form_fields()
        {
        }
        /**
         * Gets the form fields.
         *
         * Overridden to populate the Location settings options on display.
         *
         * @since 2.0.0
         *
         * @return array
         */
        public function get_form_fields()
        {
        }
        /**
         * Generates the HTML for import products button.
         *
         * @param string $id form id.
         * @param array  $field form fields.
         */
        public function generate_import_products_html($id, $field)
        {
        }
        /**
         * Generates the Connection field HTML.
         *
         * @since 2.0.0
         *
         * @param string $id field ID.
         * @param array  $field field data.
         * @return string
         */
        public function generate_connect_html($id, $field)
        {
        }
        /**
         * Updates the stored refresh token.
         *
         * @since 2.0.0
         *
         * @param string $token refresh token.
         */
        public function update_refresh_token($token)
        {
        }
        /**
         * Updates the stored access token.
         *
         * @since 2.0.0
         *
         * @param string $token access token.
         */
        public function update_access_token($token)
        {
        }
        /**
         * Clears any stored refresh tokens.
         *
         * @since 2.0.0
         */
        public function clear_refresh_tokens()
        {
        }
        /**
         * Clears any stored access tokens.
         *
         * @since 2.0.0
         */
        public function clear_access_tokens()
        {
        }
        /**
         * Clears the location ID from the settings.
         *
         * This is helpful on disconnect / revoke so that previously set location IDs don't stick around and cause confusion.
         *
         * @since 2.0.0
         */
        public function clear_location_id()
        {
        }
        /** Conditional methods *******************************************************************************************/
        /**
         * Determines if WooCommerce is configured to be the Sync setting.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function is_system_of_record_woocommerce()
        {
        }
        /**
         * Determines if Square is configured to be the Sync setting.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function is_system_of_record_square()
        {
        }
        /**
         * Determines if there is no Sync setting.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function is_system_of_record_disabled()
        {
        }
        /**
         * Determines if inventory sync is enabled.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function is_inventory_sync_enabled()
        {
        }
        /**
         * Determines if image overriding is enabled.
         *
         * @since 3.9.0
         *
         * @return bool
         */
        public function is_override_product_images_enabled()
        {
        }
        /**
         * Determines if order fulfillment sync is enabled.
         *
         * @since 5.0.0
         *
         * @return bool
         */
        public function is_order_fulfillment_sync_enabled()
        {
        }
        /**
         * Determines if product sync is enabled.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function is_product_sync_enabled()
        {
        }
        /**
         * Determines whether to hide products that don't exist in square from the catalog.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function hide_missing_square_products()
        {
        }
        /**
         * Returns sync interval in seconds.
         * Returns 1 hr = 3600 seconds as default.
         *
         * @since 3.5.1
         *
         * @return int
         */
        public function get_sync_interval()
        {
        }
        /**
         * Determines if the plugin settings are fully configured.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function is_configured()
        {
        }
        /**
         * Determines if the plugin is connected to Square.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function is_connected()
        {
        }
        /**
         * Determines if configured in the sandbox environment.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function is_sandbox()
        {
        }
        /**
         * Determines if debug logging is enabled.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function is_debug_enabled()
        {
        }
        /** Getter methods ************************************************************************************************/
        /**
         * Gets the configured location.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_location_id()
        {
        }
        /**
         * Gets the available locations.
         *
         * @since 2.0.0
         *
         * @param bool $force whether to force a refetch of the locations.
         *
         * @return \Square\Models\Location[]
         */
        public function get_locations($force = false)
        {
        }
        /**
         * Ajax callback for locations.
         *
         * @since 4.7.0
         */
        public function get_locations_ajax_callback()
        {
        }
        /**
         * Gets the configured Sync setting.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_system_of_record()
        {
        }
        /**
         * Gets the configured Sync setting name.
         *
         * @since 2.0.0
         *
         * @return string or empty string if no Sync setting is configured
         */
        public function get_system_of_record_name()
        {
        }
        /**
         * Gets the refresh token.
         *
         * @since 2.0.0
         *
         * @return string|null
         */
        public function get_refresh_token()
        {
        }
        /**
         * Gets the access token.
         *
         * @since 2.0.0
         *
         * @return string|null
         */
        public function get_access_token()
        {
        }
        /**
         * Gets the stored access tokens.
         *
         * Each environment may have its own token.
         *
         * @since 2.0.0
         *
         * @return array
         */
        public function get_access_tokens()
        {
        }
        /**
         * Gets the stored refresh tokens.
         *
         * Each environment may have its own token.
         *
         * @since 2.0.0
         *
         * @return array
         */
        public function get_refresh_tokens()
        {
        }
        /**
         * Gets setting enabled sandbox.
         *
         * @since 2.1.2
         *
         * @return string
         */
        public function get_enable_sandbox()
        {
        }
        /**
         * Tells is if the setting for enabling sandbox is checked.
         *
         * @since 2.1.2
         *
         * @return boolean
         */
        public function is_sandbox_setting_enabled()
        {
        }
        /**
         * Gets the configured environment.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_environment()
        {
        }
        /**
         * Gets the plugin instance.
         *
         * @since 2.0.0
         *
         * @return Plugin
         */
        public function get_plugin()
        {
        }
        /**
         * Determines if the current request is for the Square admin settings screen.
         *
         * @since 2.1.5
         * @return bool True if the current request is for the Square admin settings, otherwise false.
         */
        public function is_admin_settings_screen()
        {
        }
        /**
         * Update the sync interval if it has changed.
         *
         * @param array $settings
         * @return void
         */
        public function maybe_change_sync_interval($settings)
        {
        }
    }
}
namespace WooCommerce\Square\Sync {
    /**
     * Class to represent a single catalog item.
     *
     * @since 2.0.0
     */
    class Catalog_Item
    {
        /** @var \WC_Product the product object */
        protected $product;
        /** @var \Square\Models\CatalogObjectBatch the batch object */
        protected $batch;
        /** @var int the total number of catalog objects in this batch */
        protected $batch_object_count = 0;
        /** @var bool whether or not this catalog item should be soft-deleted */
        protected $soft_delete = false;
        /**
         * Constructs the catalog item.
         *
         * @since 2.0.0
         *
         * @param int|false|\WC_Product $product the product ID or product object
         * @param bool $is_soft_delete whether this catalog object should be soft-deleted
         * @throws \Exception
         */
        public function __construct($product, $is_soft_delete = false)
        {
        }
        /**
         * Gets the object batch.
         *
         * @since 2.0.0
         *
         * @param \Square\Models\CatalogObject|null $catalog_object existing catalog object or null to create a new one
         * @return \Square\Models\CatalogObjectBatch
         * @throws \Exception
         */
        public function get_batch(?\Square\Models\CatalogObject $catalog_object = null)
        {
        }
        /**
         * Gets the total number of objects in the batch.
         *
         * @since 2.0.0
         *
         * @return int
         */
        public function get_batch_object_count()
        {
        }
        /**
         * Returns whether this catalog object should be soft-deleted.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        protected function is_soft_delete()
        {
        }
        /**
         * Creates a batch containing this item and any variations.
         *
         * @since 2.0.0
         *
         * @param \Square\Models\CatalogObject|null $catalog_object existing catalog object or null to create a new one
         * @throws \Exception
         */
        protected function create_batch(?\Square\Models\CatalogObject $catalog_object = null)
        {
        }
    }
    /**
     * Square Sync Helper Class
     *
     * The purpose of this class is to centralize common sync utility functions.
     *
     * @since 3.8.2
     */
    class Helper
    {
        /**
         * Maximum group narrowing passes before falling back to one request per unresolved id.
         *
         * Bounds the worst case: without it a page that resolves a single id each time would issue one
         * group request per id on top of the per id fallback.
         *
         * @since 5.5.0
         * @var int
         */
        const MAX_HISTORY_NARROWING_PASSES = 5;
        /**
         * Get the inventory tracking value for the given catalog object ids.
         *
         * @param array $catalog_object_ids The catalog object ids.
         * @return array Array of inventory tracking for given catalog object ids.
         */
        public static function get_catalog_objects_inventory_stats($catalog_object_ids)
        {
        }
        /**
         * Get the inventory tracking value for the given catalog object ids.
         *
         * @param array $catalog_object_ids The catalog object ids.
         * @return array Array of inventory tracking for given catalog object ids.
         */
        public static function get_catalog_objects_tracking_stats($catalog_object_ids)
        {
        }
        /**
         * Collects the catalog object ids whose count is zero.
         *
         * Callers hold counts in two shapes: a plain id to quantity map, and an id to stats map where the
         * quantity sits under a key. Both are accepted so the zero collection is written once.
         *
         * @since 5.5.0
         *
         * @param array $counts id keyed counts, values either a quantity or an array of stats
         * @param string|null $quantity_key key holding the quantity when values are arrays
         * @return string[] ids whose count is exactly zero
         */
        public static function zero_count_object_ids(array $counts, $quantity_key = null)
        {
        }
        /**
         * Returns the subset of catalog object IDs that have real inventory history in Square.
         *
         * A tracked item that has never had a count recorded reports an IN_STOCK count of 0 that is
         * indistinguishable from a genuine sellout by state alone. Square's inventory change history is
         * the reliable discriminator: a never-counted item has an empty history, while any real count or
         * sale leaves a PHYSICAL_COUNT / ADJUSTMENT record. Callers use this to decide whether a zero
         * count may be written to WooCommerce (real) or must be ignored (phantom).
         *
         * On an API failure this returns null, which callers MUST treat as "verification unavailable":
         * never write the zero, and never advance a watermark or processed marker past the item, or a
         * genuine sellout would be permanently skipped once the API recovers. Null is distinct from an
         * empty array, which is a POSITIVE verification that none of the ids have history.
         *
         * @since 5.5.0
         *
         * @param string[] $catalog_object_ids catalog object (variation) IDs to check
         * @return string[]|null IDs with at least one real inventory change, or null when Square could not be asked
         */
        public static function get_catalog_objects_with_inventory_history($catalog_object_ids)
        {
        }
        /**
         * Fetches one page of inventory changes for the given catalog object ids.
         *
         * @since 5.5.0
         *
         * @param string[] $catalog_object_ids ids to query
         * @return array|null { object_ids: string[] with a change on this page, cursor: string|null } or null on failure
         */
        protected static function fetch_inventory_changes_page(array $catalog_object_ids)
        {
        }
        /**
         * Applies a Square IN_STOCK count to a WooCommerce product using the sync write policy.
         *
         * Policy (SQUARE-145 / SQUARE-359):
         * - A positive count is trusted (a phantom is always zero): write the quantity and keep the
         *   existing behavior of enabling stock management to mirror Square tracking.
         * - A zero count never changes manage_stock. For a stock-managed product it is written only
         *   when Square's change history proves a real count was ever recorded ($zero_verified);
         *   a phantom zero from a never-counted item is skipped. For a product that does not manage
         *   stock, counts are ignored entirely and only the stock status is reflected.
         *
         * @since 5.5.0
         *
         * @param \WC_Product $product the WooCommerce product or variation
         * @param float $quantity the IN_STOCK quantity reported by Square
         * @param bool $sold_out whether Square reports the item as sold out at the configured location
         * @param bool $zero_verified whether a zero count is backed by real inventory history
         * @return bool whether the product was modified (caller is responsible for saving)
         */
        public static function apply_square_inventory_count(\WC_Product $product, $quantity, $sold_out, $zero_verified)
        {
        }
        /**
         * Get the inventory tracking value for the given catalog objects.
         *
         * @param \Square\Models\CatalogObject[] $catalog_objects The catalog objects.
         * @return array Array of inventory tracking for given catalog objects.
         */
        public static function get_catalog_inventory_tracking($catalog_objects)
        {
        }
    }
    /**
     * Synchronization Job abstract.
     *
     * Synchronization jobs should extend this parent method with their own synchronization logic.
     * @see \WooCommerce\Square\Handlers\Background_Job main handler should be responsible to set and create all Square background jobs
     *
     * @since 2.0.0
     */
    class Job
    {
        /** @var \stdClass background job object */
        protected $job;
        /**
         * Synchronization job constructor.
         *
         * @since 2.0.0
         *
         * @param null|\stdClass $job background synchronization job object
         */
        public function __construct($job = null)
        {
        }
        /**
         * Gets an attribute from the underlying job object.
         *
         * @since 2.0.0
         *
         * @param string $attr_name the attribute name
         * @param mixed $default_value value if attribute is not found
         * @return mixed
         */
        protected function get_attr($attr_name, $default_value = null)
        {
        }
        /**
         * Sets an attribute on the underlying job object.
         *
         * @since 2.0.0
         *
         * @param string $attr_name the attribute name
         * @param mixed $attr_value the attribute value
         * @param bool $update whether to update the job object (defaults to true)
         */
        protected function set_attr($attr_name, $attr_value, $update = true)
        {
        }
        /**
         * Checks if the job is currently locked.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        protected function is_job_locked()
        {
        }
        /**
         * Locks the job.
         *
         * @since 2.0.0
         */
        protected function lock_job()
        {
        }
        /**
         * Unlocks the job.
         *
         * @since 2.0.0
         */
        protected function unlock_job()
        {
        }
        /**
         * Executes the job.
         *
         * Child implementation should override this method with their own job processing logic.
         *
         * @since 2.0.0
         *
         * @return \stdClass the job object
         */
        public function run()
        {
        }
        /**
         * Completes the job.
         *
         * @since 2.0.0
         *
         * @return \stdClass the job object
         */
        protected function complete()
        {
        }
        /**
         * Fails the job.
         *
         * @since 2.0.0
         *
         * @param string $reason failure reason message (optional)
         * @return \stdClass the job object
         */
        protected function fail($reason = '')
        {
        }
        /**
         * Checks if this job uses WooCommerce as the SOR.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function is_system_of_record_woocommerce()
        {
        }
        /**
         * Checks if this is job uses square as the SOR.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function is_system_of_record_square()
        {
        }
    }
    /**
     * Stepped Job abstract.
     *
     * Adds multi-step management to the job class.
     *
     * @since 2.0.0
     */
    abstract class Stepped_Job extends \WooCommerce\Square\Sync\Job
    {
        /** @var int attempts a step makes to verify zero counts before it proceeds without them */
        const MAX_ZERO_VERIFICATION_ATTEMPTS = 3;
        /**
         * Executes the next step of this job.
         *
         * @since 2.0.0
         *
         * @return \stdClass the job object
         */
        public function run()
        {
        }
        /**
         * Verifies which zero counts are real, applying this class's shared retry policy when Square
         * cannot be asked.
         *
         * Wraps the two parts every step repeated: verify the zeros, and hold and retry a bounded number
         * of times when verification is unavailable. Progress markers stay with the caller, because each
         * step holds something different (a cursor, a watermark, a queue attribute) and flattening that in
         * here would silently drop work.
         *
         * The return says which zeros may be written, and null says the caller must hold its own progress
         * and return so the step runs again. An empty array is NOT a signal of failure: it also means the
         * question was asked successfully and none of those zeros is real. A caller that needs to know the
         * attempts ran out (to keep a watermark from advancing over a window it could not verify) must ask
         * zero_verification_exhausted() rather than infer it from an empty array.
         *
         * @since 5.5.0
         *
         * @param string $step_name step name used for the attempt counters and messages
         * @param string[] $zero_object_ids catalog object ids reporting a zero count
         * @return string[]|null verified ids, or null when the caller should hold and retry
         */
        protected function resolve_zero_count_verification($step_name, array $zero_object_ids)
        {
        }
        /**
         * Whether the last verification attempt for a step ran out of retries without an answer.
         *
         * Steps that advance a watermark must not move it over a window whose zero counts they could not
         * verify, or a genuine sellout in that window is skipped for good. An empty verified list cannot
         * answer this, since it also means "asked, and none of them were real".
         *
         * @since 5.5.0
         *
         * @param string $step_name step name used for the attempt counters
         * @return bool
         */
        protected function zero_verification_exhausted($step_name)
        {
        }
        /**
         * Decides how a step should react when Square's inventory history could not be read.
         *
         * A zero count cannot be classified as a real sellout or as a never counted item without that
         * history, and writing it blind is the behavior SQUARE-145 fixed. The step therefore holds its
         * progress and is run again by the job loop. Those retries follow the job's own loopback timing,
         * so they are close together rather than spread over cycles: they cover a brief blip, not a long
         * outage. Holding forever would keep a job alive without ever finishing, so after a bounded
         * number of attempts the step proceeds with no zero verified, which skips only the zero writes,
         * and records an alert so the outcome is never silent. Steps that own a watermark should also
         * leave it alone on that path so the same window is read again later.
         *
         * @since 5.5.0
         *
         * @param string $step_name step name for the log and record messages
         * @return bool true when the caller should stop and retry later, false when it should proceed
         */
        protected function should_retry_unverified_zero_counts($step_name)
        {
        }
        /**
         * Clears the unverified zero count retry counter after a successful verification.
         *
         * @since 5.5.0
         */
        protected function clear_unverified_zero_count_attempts($step_name)
        {
        }
        /**
         * Assigns the next steps needed for this sync job.
         *
         * Adds the next steps to the 'next_steps' attribute.
         *
         * @since 2.0.0
         */
        abstract protected function assign_next_steps();
        /**
         * Gets the next step in the sync process.
         *
         * @since 2.0.0
         *
         * @return string|null
         */
        protected function get_next_step()
        {
        }
        /**
         * Gets the next steps for the sync process.
         *
         * @since 2.0.0
         *
         * @return string[]
         */
        protected function get_next_steps()
        {
        }
        /**
         * Performs the next step in the sync process.
         *
         * @since 2.0.0
         */
        protected function do_next_step()
        {
        }
        /**
         * Records the beginning of a new step cycle, meaning a new loop on the job for a given step.
         *
         * @since 2.0.0
         *
         * @param string $step_name the step name
         */
        protected function start_step_cycle($step_name)
        {
        }
        /**
         * Records the completion of a step cycle.
         *
         * @since 2.0.0
         *
         * @param string $step_name the step name
         * @param bool $is_successful (optional) whether the step completion is from a success or not
         * @param string $error_message (optional) error message to include with failed step log
         */
        protected function complete_step_cycle($step_name, $is_successful = true, $error_message = '')
        {
        }
        /**
         * Completes the specified step (if it's the next step).
         *
         * @since 2.0.0
         *
         * @param string $step_name
         */
        protected function complete_step($step_name)
        {
        }
        /**
         * Adds a step to the completed steps array.
         *
         * @since 2.0.0
         *
         * @param string $step_name
         */
        protected function add_completed_step($step_name)
        {
        }
        /**
         * Get step update data like count of synced products or categories.
         *
         * @param string $step_name Step name.
         * @return string
         */
        protected function get_step_update_data($step_name)
        {
        }
    }
    /**
     * Class to represent a synchronization job to poll latest product updates at intervals.
     *
     * @since 2.0.0
     */
    class Interval_Polling extends \WooCommerce\Square\Sync\Stepped_Job
    {
        /**
         * Assigns the next steps needed for this sync job.
         *
         * Adds the next steps to the 'next_steps' attribute.
         *
         * @since 2.0.0
         */
        protected function assign_next_steps()
        {
        }
        /**
         * Updates categories from Square.
         *
         * @since 2.0.8
         *
         * @throws \Exception
         */
        protected function update_category_data()
        {
        }
        /**
         * Updates products from Square.
         *
         * @since 2.0.0
         *
         * @throws \Exception
         */
        protected function update_product_data()
        {
        }
        /**
         * Updates the inventory tracking value from the latest in Square.
         *
         * Helper method, do not open to public.
         *
         * @since 3.8.2
         *
         * @throws \Exception
         */
        protected function update_inventory_tracking()
        {
        }
        /**
         * Updates the inventory counts from the latest in Square.
         *
         * Helper method, do not open to public.
         *
         * @since 2.0.0
         *
         * @throws \Exception
         */
        protected function update_inventory_counts()
        {
        }
    }
    /**
     * Class to represent a single synchronization job triggered manually.
     *
     * @since 2.0.0
     */
    class Manual_Synchronization extends \WooCommerce\Square\Sync\Stepped_Job
    {
        /** @var int the limit for how many objects can be upserted in a batch upsert request */
        const BATCH_UPSERT_OBJECT_LIMIT = 600;
        /** @var int the limit for how many inventory changes can be made in a single request */
        const BATCH_CHANGE_INVENTORY_LIMIT = 100;
        /** @var int maximum per product fallback upserts attempted within one step cycle */
        const MAX_ISOLATED_UPSERTS_PER_CYCLE = 5;
        /** @var int maximum rounds of dropping named objects from one inventory chunk before giving up */
        const MAX_INVENTORY_ISOLATION_ROUNDS = 5;
        /**
         * Square error codes that mean "this object's own data is invalid", and nothing else.
         *
         * Skipping an object has to be opted into by a known data error, never assumed: anything not
         * listed here fails the job instead, because a server error, timeout or permission problem may
         * have applied the write already and re-sending would duplicate it in Square. Codes come from
         * \Square\Models\ErrorCode. Filterable via wc_square_isolatable_error_codes.
         *
         * Before removing a code from this list because it produced a bad skip: some codes are
         * deliberately listed here and narrowed by a second gate at the call site, because Square
         * reuses one code for both an object level problem and a job level one. Removing the code
         * disables the object level handling and does not fix the job level case.
         *
         * - NOT_FOUND is both a stale catalog mapping and a location that does not belong to the
         *   account. push_inventory_changes_isolated() drops nothing unless Square named an object
         *   present in the chunk.
         * - INVALID_VALUE is both bad product data and an item option name collision, which
         *   API::create_options_and_values() turns into a whole job replay. The staging catch in
         *   upsert_catalog_objects() snapshots woocommerce_square_refresh_sync_cycle and rethrows
         *   when it changed.
         *
         * @var string[]
         */
        const ISOLATABLE_ERROR_CODES = array(
            'BAD_REQUEST',
            'MISSING_REQUIRED_PARAMETER',
            'INCORRECT_TYPE',
            'INVALID_VALUE',
            'INVALID_ENUM_VALUE',
            'INVALID_ARRAY_VALUE',
            'INVALID_TIME',
            'VALUE_EMPTY',
            'VALUE_TOO_LONG',
            'VALUE_TOO_SHORT',
            'VALUE_TOO_LOW',
            'VALUE_TOO_HIGH',
            'VALUE_REGEX_MISMATCH',
            'ARRAY_EMPTY',
            'ARRAY_LENGTH_TOO_LONG',
            'ARRAY_LENGTH_TOO_SHORT',
            'UNPROCESSABLE_ENTITY',
            'REQUEST_ENTITY_TOO_LARGE',
            // the combined request was too big; one object per request is the fix.
            'NOT_FOUND',
            'CONFLICT',
        );
        /** @var int max SKU-based lookups per push_inventory step to avoid rate limits */
        const MAX_SKU_LOOKUPS_PER_PUSH_STEP = 20;
        /** @var int the limit for how many inventory counts can be requested per batch
         * Square paginates responses in page size of 100.
         * Consider some items can have more than one object returned with different states. */
        const BATCH_INVENTORY_COUNTS_LIMIT = 125;
        /**
         * Executes the next step of this job.
         *
         * @since 2.0.0
         *
         * @return \stdClass the job object
         */
        public function run()
        {
        }
        /**
         * Validates the products attached to this job.
         *
         * @since 2.0.0
         */
        protected function validate_products()
        {
        }
        /**
         * Updates the catalog API limits.
         *
         * @since 2.0.0
         */
        protected function update_limits()
        {
        }
        /**
         * Extracts the category IDs from the list of product IDs in this job, and saves them.
         *
         * @since 2.0.0
         */
        protected function extract_category_ids()
        {
        }
        /**
         * Refreshes mappings for categories with known Square IDs.
         *
         * @since 2.0.0
         *
         * @throws \Exception
         */
        protected function refresh_category_mappings()
        {
        }
        /**
         * Checks the Square API for any unmapped categories we may have.
         *
         * @since 2.0.0
         *
         * @throws \Exception
         */
        protected function query_unmapped_categories()
        {
        }
        /**
         * Upserts the categories for the selected products to Square.
         *
         * @since 2.0.0
         *
         * @throws \Exception
         */
        protected function upsert_categories()
        {
        }
        /**
         * Sends a set of category batches to Square and applies the returned mappings.
         *
         * @since 5.5.0
         *
         * @param \Square\Models\CatalogObjectBatch[] $category_batches batches to send (one category each)
         * @param array $reverse_map square id keyed map to local term ids, updated in place
         * @throws \Exception on API failure or invalid response
         */
        protected function upsert_category_batches(array $category_batches, array &$reverse_map)
        {
        }
        /**
         * Maps the categories a failed chunk already created in Square and returns the batches still to retry.
         *
         * Only new categories (temporary "#" IDs) are looked up, by name, the same case insensitive way
         * query_unmapped_categories() matches them. A name that appears more than once in the chunk is
         * left to the per category retry because a match could not tell those categories apart. A failed
         * lookup is logged and changes nothing beyond the matches already found, so the caller falls back
         * to retrying every remaining category on its own.
         *
         * @since 5.5.2
         *
         * @param \Square\Models\CatalogObjectBatch[] $category_batches batches of the failed chunk (one category each)
         * @param array $reverse_map square id keyed map to local term ids, updated in place
         * @return \Square\Models\CatalogObjectBatch[] the batches that were not matched
         */
        protected function link_created_categories(array $category_batches, array &$reverse_map)
        {
        }
        /**
         * Updates a set of products that already have a Square ID set and are found in the catalog.
         *
         * @since 2.0.0
         *
         * @throws \Exception
         */
        protected function update_matched_products()
        {
        }
        /**
         * Searches the full Square catalog to find matches and updates them.
         *
         * @since 2.0.0
         *
         * @throws \Exception
         */
        protected function search_matched_products()
        {
        }
        /**
         * Links products to existing Square items by SKUs.
         *
         * @since 5.3.3
         *
         * @param array $product_ids The IDs of the WooCommerce products to link.
         * @return array The IDs of the linked products.
         */
        protected function link_products_to_existing_square_items($product_ids)
        {
        }
        /**
         * Finds existing Square items by SKUs.
         *
         * @since 5.3.3
         *
         * @param array $product_skus The SKUs of the WooCommerce products to find.
         * @return \Square\Models\CatalogObject[] The existing Square ITEM catalog objects.
         */
        protected function find_existing_square_items_by_skus($product_skus)
        {
        }
        /**
         * @throws \Exception
         */
        protected function upsert_new_products()
        {
        }
        /**
         * Upserts a list of catalog objects and updates their cooresponding products.
         *
         * @since 2.0.0
         *
         * @param array $objects      list of catalog objects to update, as $product_id => CatalogItem
         * @param bool  $new_products Whether these are new products or not.
         * @return array
         * @throws \Exception
         */
        protected function upsert_catalog_objects(array $objects, $new_products = false)
        {
        }
        /**
         * Completes the job, reporting a completed with errors outcome when products were skipped.
         *
         * @since 5.5.0
         *
         * @return \stdClass the job object
         */
        protected function complete()
        {
        }
        /**
         * Classifies a sync exception to decide how the sync should react to it.
         *
         * - rate_limited: throttling, safe to retry the same request unchanged (existing behavior).
         * - isolatable: Square understood the request and rejected this object because its data is
         *   invalid. The same request will keep failing, so the object can be skipped and the sync can
         *   continue without it (SQUARE-143 / SQUARE-31).
         * - fatal: anything else. The write may or may not have been applied, so the job must fail
         *   loudly instead of isolating: re-sending the staged objects under fresh temporary IDs would
         *   create duplicate catalog items in Square.
         *
         * Skipping an object has to be opted into by a known data error, never assumed. A deny list
         * would classify server errors, timeouts and permission problems as bad product data.
         *
         * @since 5.5.0
         *
         * @param \Exception $exception the caught exception
         * @return string rate_limited|isolatable|fatal
         */
        protected function classify_sync_error(\Exception $exception)
        {
        }
        /**
         * Records a product skipped by the sync, with the reason, and tracks the error counters.
         *
         * @since 5.5.0
         *
         * @param int $product_id the skipped product ID
         * @param string $reason the failure reason (Square error message or local validation detail)
         */
        protected function record_skipped_product($product_id, $reason)
        {
        }
        /**
         * Upserts the staged products one request per product after a combined batch request failed.
         *
         * Square rejects a whole upsert when any object in it is invalid and does not always identify
         * the offender, so the reliable isolation is granularity: one request per product. Successful
         * responses are merged into a single synthesized response so the caller's post processing works
         * unchanged; failing products are recorded with their reason and skipped (SQUARE-143/31).
         *
         * The batches built by the staging loop are reused rather than rebuilt. Rebuilding would not be
         * free: Catalog_Item::get_batch() reaches Square to create item options for variable products,
         * so re-deriving a payload here would multiply the request count on the one path that only runs
         * because something already failed.
         *
         * @since 5.5.0
         *
         * At most MAX_ISOLATED_UPSERTS_PER_CYCLE products are attempted per invocation so a huge
         * fallback cannot exhaust PHP's execution time inside one step cycle; unattempted products are
         * simply not consumed and are staged again on the next cycle. A rate limit mid loop stops the
         * slice: with partial progress the progress is kept, with none the exception bubbles so the
         * existing job level retry and backoff take over.
         *
         * @param \Square\Models\CatalogObjectBatch[] $batches product ID keyed batches already built by the staging loop
         * @param int[] $staged_product_ids the product IDs staged into the failed combined request
         * @return array { response: BatchUpsertCatalogObjectsResponse, done_ids: int[], failed_ids: int[] }
         */
        protected function upsert_products_individually(array $batches, array $staged_product_ids)
        {
        }
        /**
         * Converts object data to an instance of CatalogObject.
         *
         * @since 2.0.0
         *
         * @param array|string $object_data json string or array of object data
         * @return \Square\Models\CatalogObject
         */
        protected function convert_to_catalog_object($object_data)
        {
        }
        /**
         * Pushes a product's image to Square.
         *
         * @since 2.0.0
         *
         * @param \WC_Product|int $product product object or ID
         */
        protected function push_product_image($product)
        {
        }
        /**
         * Pushes WooCommerce inventory to Square for a specific set of product IDs.
         *
         * Called inline after each upsert_new_products batch so that newly created Square catalog
         * objects receive correct stock quantities immediately, rather than waiting for the deferred
         * push_inventory step. If the API call fails the exception is caught, the failure is logged,
         * and the affected product IDs are returned so the caller can queue them for the deferred step.
         *
         * @since 5.4.1
         *
         * @param int[] $product_ids WooCommerce product IDs to push inventory for.
         * @return int[] Product IDs for which the inventory push failed.
         */
        private function push_inventory_for_products(array $product_ids): array
        {
        }
        /**
         * Builds inventory change objects for a single product.
         *
         * Handles both variable and simple products. For variable products it iterates
         * each child variation; for simple products it acts on the product itself.
         * Only products with stock management enabled produce inventory changes.
         *
         * Note: this method does not perform SKU-based Square ID lookups. It assumes
         * Square variation IDs are already stored in WC postmeta, which is guaranteed
         * for products that have just been upserted via upsert_catalog_objects().
         * The deferred push_inventory() step handles its own SKU lookups separately.
         *
         * @since 5.4.1
         *
         * @param \WC_Product $product WooCommerce product object.
         * @return \Square\Models\InventoryChange[] Inventory change objects for the product.
         */
        private function get_product_inventory_changes(\WC_Product $product): array
        {
        }
        /**
         * Pushes WooCommerce inventory to Square for synced items.
         *
         * @since 2.0.0
         *
         * @throws \Exception
         */
        protected function push_inventory()
        {
        }
        /**
         * Splits a failed inventory chunk into the objects Square named in the error and the rest.
         *
         * The chunk's own catalog object IDs are tested against the error text rather than parsing an
         * ID out of it. Square does not guarantee any particular formatting and frequently quotes the
         * JSON field path instead of the value, so parsing either extracts a field name that matches
         * nothing in the chunk, and discards up to a hundred good inventory updates, or extracts
         * nothing at all.
         *
         * An empty named set means the failure cannot be attributed to anything in this chunk. The
         * caller treats that as fatal, because the same code Square returns for a dead catalog object
         * is also what it returns for a location the account does not own.
         *
         * @since 5.5.0
         *
         * @param \Square\Models\InventoryChange[] $chunk changes sent in the request that failed
         * @param string $error_message the message Square returned
         * @return array {named: string[], remaining: \Square\Models\InventoryChange[]}
         */
        protected function partition_inventory_changes_by_error(array $chunk, $error_message)
        {
        }
        /**
         * Sends inventory changes to Square with per change isolation of dead catalog objects.
         *
         * A single change referencing a Square object that no longer exists (a stale local mapping
         * after a Square side catalog wipe) rejects the whole batch with NOT_FOUND, silently dropping
         * inventory for every other product in it. Square names the offending object in the error, so
         * the changes it names are removed, recorded, and the remainder is retried. Unattributable
         * failures skip only their own chunk and the sync continues (SQUARE-143 / SQUARE-31).
         *
         * The offending IDs are found by testing the chunk's own catalog object IDs against the error
         * text rather than by parsing an ID out of it. Square does not guarantee any particular
         * formatting and frequently quotes the JSON field path instead of the value, so parsing would
         * either extract a field name that matches nothing in the chunk, and drop up to 100 good
         * inventory updates, or extract nothing at all.
         *
         * @since 5.5.0
         *
         * @param \Square\Models\InventoryChange[] $inventory_changes the changes to push
         */
        protected function push_inventory_changes_isolated(array $inventory_changes)
        {
        }
        /**
         * Performs a sync when Square is the Sync setting.
         *
         * @since 2.0.0
         */
        protected function square_sor_sync()
        {
        }
        /**
         * Drops the catalog objects whose counts this job just pushed from the inventory pull queue.
         *
         * Square's inventory is eventually consistent, so reading a count straight back after writing it
         * can answer with the pre-push value, and for an item that had never been counted it answers zero,
         * which would undo the push. Both push sites run before pull_inventory in the step order, so
         * removing the ids here is enough and needs no second attribute.
         *
         * @since 5.5.0
         *
         * @param \Square\Models\InventoryChange[] $inventory_changes changes that were pushed
         */
        protected function exclude_pushed_objects_from_inventory_pull(array $inventory_changes)
        {
        }
        /**
         * Pulls the latest inventory counts for the variation IDs in `pull_inventory_variation_ids`.
         *
         * @since 2.0.2
         *
         * @throws \Exception
         */
        protected function pull_inventory()
        {
        }
        /**
         * Marks a set of products as failed to sync.
         *
         * @since 2.0.0
         *
         * @param \WC_Product[]|int[] $products products to mark as failed
         */
        protected function mark_failed_products($products = array())
        {
        }
        /**
         * Gets a list of unique category IDs used by a group of product IDs.
         *
         * @since 2.0.0
         *
         * @param  int[] $product_ids array of product IDs.
         * @return int[]
         */
        protected function get_shared_category_ids($product_ids)
        {
        }
        /**
         * Assigns the next steps needed for this sync job.
         *
         * @since 2.0.0
         */
        protected function assign_next_steps()
        {
        }
        /**
         * Fetch the option (attribute) names from Square.
         *
         * @since 4.9.0
         *
         * @throws \Exception
         */
        protected function fetch_options_data()
        {
        }
        /**
         * Gets the maximum number of objects to retrieve in a single sync job.
         *
         * @since 2.0.0
         *
         * @return int
         */
        protected function get_max_objects_to_retrieve()
        {
        }
        /**
         * Gets the maximum number of objects per batch in a single sync job.
         *
         * @deprecated 3.2
         * @since 2.0.0
         *
         * @return int
         */
        protected function get_max_objects_per_batch()
        {
        }
        /**
         * Gets the maximum number of objects per batch upsert in a single request.
         *
         * @since 2.0.0
         *
         * @return int
         */
        protected function get_max_objects_per_upsert()
        {
        }
        /**
         * Gets the maximum number of objects allowed in a single sync job.
         *
         * @since 2.0.0
         *
         * @return int
         */
        protected function get_max_objects_total()
        {
        }
    }
    /**
     * Class to handle importing Square orders into WooCommerce.
     *
     * @since 5.0.0
     */
    class Order_Importer
    {
        /**
         * Update existing WooCommerce order with Square order data.
         *
         * @since 5.0.0
         * @param \WC_Order $wc_order Existing WooCommerce order.
         * @param \Square\Models\Order $square_order Square order object.
         * @return array Update result with 'updated' flag and message.
         */
        public function update_existing_woocommerce_order($wc_order, $square_order)
        {
        }
        /**
         * Update fulfillment data from Square order.
         *
         * @since 5.0.0
         * @param \WC_Order $wc_order WooCommerce order.
         * @param \Square\Models\Order $square_order Square order.
         */
        private function maybe_update_fulfillment_data($wc_order, $square_order)
        {
        }
        /**
         * Find existing WooCommerce order by Square order ID.
         *
         * @since 5.0.0
         * @param string $square_order_id Square order ID.
         * @return \WC_Order|false
         */
        public function find_existing_wc_order_by_square_order_id($square_order_id)
        {
        }
    }
    /**
     * Class Order_Mapper
     *
     * Provides static methods to map order data between Square and WooCommerce.
     *
     * @since 5.0.0
     */
    class Order_Mapper
    {
        /**
         * Map Square order state to WooCommerce order status.
         *
         * @since 5.0.0
         * @param string $square_state Square order state.
         * @return string WooCommerce order status.
         */
        public static function map_square_state_to_wc_status($square_state)
        {
        }
        /**
         * Check if order status change is allowed.
         *
         * @since 5.0.0
         * @param string $from_status Current WooCommerce status.
         * @param string $to_status New status from Square.
         * @return bool True if status change is allowed.
         */
        public static function is_status_change_allowed($from_status, $to_status)
        {
        }
    }
    /**
     * Order Polling Class.
     *
     * @since 5.0.0
     */
    class Order_Polling
    {
        /**
         * Initialize the polling system.
         *
         * @since 5.0.0
         */
        public function __construct()
        {
        }
        /**
         * Maybe schedule the polling Action Scheduler job.
         *
         * @since 5.0.0
         */
        public function maybe_schedule_polling()
        {
        }
        /**
         * Schedule the polling Action Scheduler job.
         *
         * @since 5.0.0
         */
        public function schedule_polling()
        {
        }
        /**
         * Poll Square for new orders.
         *
         * @since 5.0.0
         */
        public function poll_square_orders()
        {
        }
        /**
         * Fetch recent Square orders.
         *
         * @since 5.0.0
         * @param string $sync_start_time Optional sync start time for bounded time window.
         * @return array Array of Square order objects.
         */
        private function fetch_recent_square_orders($sync_start_time = null)
        {
        }
        /**
         * Search Square orders since a specific time with bounded time window.
         *
         * @since 5.0.0
         * @param \WooCommerce\Square\Gateway\API $api API instance.
         * @param string                          $since_time ISO 8601 timestamp.
         * @param string                          $sync_start_time Optional sync start time for bounded time window.
         * @return array Array of Square order objects.
         */
        private function search_square_orders_since($api, $since_time, $sync_start_time = null)
        {
        }
        /**
         * Process Square orders to create or update WooCommerce orders.
         *
         * @since 5.0.0
         * @param array $square_orders Array of Square order objects.
         */
        private function process_square_orders($square_orders)
        {
        }
        /**
         * Get polling interval in seconds.
         *
         * @since 5.0.0
         * @return int
         */
        private function get_polling_interval_seconds()
        {
        }
        /**
         * Get last polling time.
         *
         * @since 5.0.0
         * @return string ISO 8601 timestamp.
         */
        private function get_last_polling_time()
        {
        }
        /**
         * Update last polling time.
         *
         * @since 5.0.0
         * @param string $timestamp Optional timestamp to set. Defaults to current time.
         */
        private function update_last_polling_time($timestamp = null)
        {
        }
    }
    /**
     * Class to represent a synchronization job to import products from Square.
     *
     * @since 2.0.0
     */
    class Product_Import extends \WooCommerce\Square\Sync\Stepped_Job
    {
        /**
         * Product's existing attributes at Woo.
         */
        protected $woo_attributes = array();
        protected function assign_next_steps()
        {
        }
        /**
         * Gets the limit for how many items to import per request.
         *
         * Square has a hard maximum for this at 1000, but 100 seems to be a sane
         * default to allow for creating products without timing out.
         *
         * @since 2.0.0
         *
         * @return int
         */
        protected function get_import_api_limit()
        {
        }
        /**
         * Fetch the option (attribute) names from Square.
         *
         * @since 4.9.0
         *
         * @throws \Exception
         */
        protected function fetch_options_data()
        {
        }
        /**
         * Performs a product import.
         *
         * @since 2.0.0
         *
         * @throws \Exception
         */
        protected function import_products()
        {
        }
        /**
         * Imports inventory counts for all the tracked Square products.
         *
         * @since 2.0.0
         *
         * @throws \Exception
         */
        protected function import_inventory()
        {
        }
        /**
         * Determines whether any catalog item variation is missing a SKU
         *
         * @since 2.2.0
         *
         * @param \Square\Models\CatalogObject $catalog_object the catalog object
         * @return bool
         */
        private function item_variation_has_missing_sku($catalog_object)
        {
        }
        /**
         * Determines whether a SKU within a catalog item is found in WooCommerce.
         *
         * @since 2.0.0
         *
         * @param array $data the catalog object data
         * @return bool
         */
        private function item_variation_has_matching_sku($data)
        {
        }
        /**
         * Creates a product from catalog object data.
         *
         * @since 2.0.0
         *
         * @param array $data the catalog object data
         * @return int|null
         */
        private function import_product($data)
        {
        }
        /**
         * Updates a product from catalog object data
         *
         * @since 2.2.0
         *
         * @param \WC_Product $product existing product in Woo that is being updated
         * @param array $data the Square catalog object data
         * @return int|null
         */
        public function update_product($product, $data)
        {
        }
        /**
         * Convert an existing simple product to a variable when new variations are found.
         * This function
         *
         * @since 2.2.0
         *
         * @param int $variation_id simple product ID being updated to a variation with new parent product
         * @param array $data
         * @return int|null
         */
        protected function update_simple_product_to_variable($variation_id, $data = array())
        {
        }
        /**
         * Extracts product data from a CatalogObject to an array of data.
         *
         * @since 2.0.0
         *
         * @param \Square\Models\CatalogObject $catalog_object the catalog object
         * @param WC_Product|null $product
         * @return array|null
         * @throws \Exception
         */
        public function extract_product_data($catalog_object, $product = null)
        {
        }
        /**
         * Extracts data from a CatalogItemVariation for insertion into a WC product.
         *
         * @since 2.0.0
         *
         * @param \Square\Models\CatalogObject $variation the variation object
         * @return array
         * @throws \Exception
         */
        protected function extract_square_item_variation_data($variation)
        {
        }
        /**
         * Extracts attributes from Square options.
         *
         * @since 4.9.0
         *
         * @param array $options    the Square options
         * @param array $variations the product variations to determine which option values are actually used
         * @return array
         * @throws \Exception
         */
        protected function extract_attributes_from_square_options($options, $variations = array())
        {
        }
        /**
         * Extracts attributes from Square variations.
         *
         * @since 4.9.0
         *
         * @param array $variations the variations
         * @return array
         */
        protected function extract_attributes_from_square_variations($variations)
        {
        }
        protected function save_product_images($product_id, $images)
        {
        }
        protected function upload_product_image($src)
        {
        }
        protected function set_product_image_as_attachment($upload, $product_id)
        {
        }
        /**
         * Saves product meta data for a given product.
         *
         * @since 2.0.0
         *
         * @param int $product_id the product ID
         * @param array $data the product data
         * @return bool
         * @throws \Exception
         */
        protected function save_product_meta($product_id, $data)
        {
        }
        /**
         * Saves the variations for a given product.
         *
         * @since 2.0.0
         *
         * @param int $product_id the product ID
         * @param array $data the product data, including a 'variations' key
         * @return bool
         * @throws \Exception
         */
        protected function save_variations($product_id, $data)
        {
        }
        /**
         * Gets an attribute taxonomy by its slug.
         *
         * @since 2.0.0
         *
         * @param string $slug
         * @return string|null
         */
        protected function get_attribute_taxonomy_by_slug($slug)
        {
        }
        /**
         * Saves the product price.
         *
         * @since 2.0.0
         *
         * @param int $product_id
         * @param float $regular_price
         * @param float $sale_price
         * @param string $date_from
         * @param string $date_to
         */
        public function wc_save_product_price($product_id, $regular_price, $sale_price = '', $date_from = '', $date_to = '')
        {
        }
        /**
         * Clears a product from WooCommerce - used when product creation fails partially through the creation process.
         *
         * @since 2.0.0
         *
         * @param int $product_id the product ID
         */
        protected function clear_product($product_id)
        {
        }
        /**
         * Creates a product in WooCommerce using the data from Square
         *
         * @since 2.2.0
         *
         * @param array $data New product data
         * @return int
         * @throws \Exception
         */
        protected function create_product_from_square_data($data = array())
        {
        }
        /**
         * Record an error made during import or update by creating a new Sync Record and Square log
         *
         * @since 2.2.0
         *
         * @param string $error Error message to record
         * @param \Square\Models\CatalogObject|array|null $catalog_item the catalog object or data
         * @param string $context Context for whether the error occurred during import or update
         */
        protected function record_error($error, $catalog_item = null, $context = 'import')
        {
        }
    }
    /**
     * The sync records handler.
     *
     * @since 2.0.0
     */
    class Records
    {
        /** @var string WordPress option key where sync records are stored */
        private static $records_option_key = 'wc_square_sync_records';
        /**
         * Checks if there are existing records.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public static function has_records()
        {
        }
        /**
         * Gets a specific sync record.
         *
         * @since 2.0.0
         *
         * @param int $id the record's identifier
         * @return null|\WooCommerce\Square\Sync\Records\Record
         */
        public static function get_record($id)
        {
        }
        /**
         * Gets an array of record objects.
         *
         * @since 2.0.0
         *
         * @param array $args associative array of arguments to query records
         * @return \WooCommerce\Square\Sync\Records\Record[]
         */
        public static function get_records(array $args = array())
        {
        }
        /**
         * Compares two records for sorting by date.
         *
         * @see usort() callback
         * @see Records::get_records()
         *
         * @since 2.0.0
         *
         * @param \WooCommerce\Square\Sync\Records\Record $record_1 first record
         * @param \WooCommerce\Square\Sync\Records\Record $record_2 second record
         * @return int should return 0, -1 or +1
         */
        private static function sort_records_by_date($record_1, $record_2)
        {
        }
        /**
         * Compares two records for sorting by type.
         *
         * @see usort() callback
         * @see Records::get_records()
         *
         * @since 2.0.0
         *
         * @param \WooCommerce\Square\Sync\Records\Record $record_1 first record
         * @param \WooCommerce\Square\Sync\Records\Record $record_2 second record
         * @return int should return 0, -1 or +1
         */
        private static function sort_records_by_type($record_1, $record_2)
        {
        }
        /**
         * Saves a new record.
         *
         * @since 2.0.0
         *
         * @param array|\WooCommerce\Square\Sync\Records\Record $data raw data or record object
         * @return bool success
         */
        public static function set_record($data)
        {
        }
        /**
         * Saves multiple records.
         *
         * @since 2.0.0
         *
         * @param array|\WooCommerce\Square\Sync\Records\Record[] $data array of raw record data or array of record objects
         * @return bool success
         */
        public static function set_records(array $data)
        {
        }
        /**
         * Removes a record permanently.
         *
         * @since 2.0.0
         *
         * @param int $id record identifier
         * @return bool success
         */
        public static function delete_record($id)
        {
        }
        /**
         * Delete multiple records.
         *
         * @since 2.0.0
         *
         * @param array $args query arguments
         * @return int count of records removed
         */
        public static function delete_records(array $args)
        {
        }
        /**
         * Removes all records.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public static function clean_records()
        {
        }
    }
}
namespace WooCommerce\Square\Sync\Records {
    /**
     * The sync record object.
     *
     * @since 2.0.0
     */
    class Record
    {
        /** @var string unique identifier */
        private $id = '';
        /** @var string date in UTC */
        private $date = '';
        /** @var string the record status */
        private $type = '';
        /** @var string message (optional, may contain HTML) */
        private $message = '';
        /** @var int associated product ID (optional) */
        private $product_id = 0;
        /** @var bool whether the associated product was hidden when the record was created */
        private $product_hidden = false;
        /**
         * Sync record constructor.
         *
         * @since 2.0.0
         *
         * @param array|int $data raw data or related product ID
         */
        public function __construct($data)
        {
        }
        /**
         * Parses data from the store into the object properties
         *
         * @since 2.0.0
         *
         * @param int|array $data associative array or product ID
         * @return array
         */
        private function parse_data($data)
        {
        }
        /**
         * Gets the record's raw data.
         *
         * @since 2.0.0
         *
         * @return array associative array
         */
        public function get_data()
        {
        }
        /**
         * Gets the record's ID.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_id()
        {
        }
        /**
         * Sets an ID for the record.
         *
         * @since 2.0.0
         *
         * @param null|string $id
         * @return string set ID
         */
        public function set_id($id = null)
        {
        }
        /**
         * Gets a record's default status.
         *
         * @since 2.0.0
         *
         * @return string
         */
        private function get_default_type()
        {
        }
        /**
         * Gets a record's possible statuses.
         *
         * @since 2.0.0
         *
         * @return array associative array of types and labels
         */
        private function get_valid_types()
        {
        }
        /**
         * Gets the record's label.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_label()
        {
        }
        /**
         * Gets the record status.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_type()
        {
        }
        /**
         * Set's the record status.
         *
         * @since 2.0.0
         *
         * @param string $type a known type
         * @return string set type
         */
        public function set_type($type)
        {
        }
        /**
         * Checks if the record is of a given type.
         *
         * @since 2.0.0
         *
         * @param array|string $type one or more types to check
         * @return bool
         */
        public function is_type($type)
        {
        }
        /**
         * Checks whether the record is resolved.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function is_resolved()
        {
        }
        /**
         * Resolves the record.
         *
         * @since 2.0.0
         */
        public function resolve()
        {
        }
        /**
        * Gets the record's timestamp, in UTC.
        *
        * @since 2.0.0
        *
        	if (
        * @return int
        */
        public function get_timestamp()
        {
        }
        /**
         * Gets the record's date, in UTC.
         *
         * @since 2.0.0
         *
         * @param string $format defaults to MySQL format
         * @return string
         */
        public function get_date($format = 'Y-m-d H:i:s')
        {
        }
        /**
         * Gets the record's date, in the local timezone.
         *
         * @since 2.0.0
         *
         * @param null|string $format optional PHP date format (defaults to the site date/time format)
         * @return string
         */
        public function get_local_date($format = null)
        {
        }
        /**
         * Gets the record's message.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_message()
        {
        }
        /**
         * Sets the record's message.
         *
         * @since 2.0.0
         *
         * @param string $message may contain HTML
         * @return bool success
         */
        public function set_message($message)
        {
        }
        /**
         * Removes the record's message.
         *
         * @since 2.0.0
         */
        public function remove_message()
        {
        }
        /**
         * Sets the record's product.
         *
         * @since 2.0.0
         *
         * @param int|\WC_Product $product
         * @return bool success
         */
        public function set_product($product)
        {
        }
        /**
         * Removes a related product from the record.
         *
         * @since 2.0.0
         */
        public function remove_product()
        {
        }
        /**
         * Checks whether there is a valid product associated with the record.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function has_product()
        {
        }
        /**
         * Gets the product associated with the record.
         *
         * @since 2.0.0
         *
         * @return null|\WC_Product
         */
        public function get_product()
        {
        }
        /**
         * Gets the product ID associated with the record.
         *
         * @since 2.0.0
         *
         * @return int
         */
        public function get_product_id()
        {
        }
        /**
         * Sets a flag whether when adding the record the product was contextually hidden from catalog.
         *
         * Note: this is for historical record purposes and may not correspond to the effective product visibility, nor does not affect the product visibility when called.
         *
         * @since 2.0.0
         *
         * @param bool $was_hidden whether product was hidden when creating the record
         * @return bool success
         */
        public function set_product_hidden($was_hidden = true)
        {
        }
        /**
         * Checks whether a flag was set for hiding the product from catalog when the record was created.
         *
         * This may not reflect the actual product visibility status, it is only for historical purposes.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function was_product_hidden()
        {
        }
        /**
         * Gets the record's actions.
         *
         * @since 2.0.0
         *
         * @return \stdClass[] associative array of action names and action properties as objects
         */
        public function get_actions()
        {
        }
        /**
         * Saves the record to storage.
         *
         * @since 2.0.0
         *
         * @return bool success
         */
        public function save()
        {
        }
        /**
         * Deletes the record from storage.
         *
         * @since 2.0.0
         *
         * @return bool success
         */
        public function destroy()
        {
        }
    }
}
namespace WooCommerce\Square\Utilities {
    /**
     * Helper for dealing with String values.
     *
     * @since 2.2.0
     */
    class Array_Utility
    {
        /**
         * Insert the given element after the given key in the array
         *
         * Sample usage:
         *
         * given
         *
         * array( 'item_1' => 'foo', 'item_2' => 'bar' )
         *
         * array_insert_after( $array, 'item_1', array( 'item_1.5' => 'w00t' ) )
         *
         * becomes
         *
         * array( 'item_1' => 'foo', 'item_1.5' => 'w00t', 'item_2' => 'bar' )
         *
         * @since 2.2.0
         * @param array $array array to insert the given element into
         * @param string $insert_key key to insert given element after
         * @param array $element element to insert into array
         * @return array
         */
        public static function array_insert_after(array $array, $insert_key, array $element)
        {
        }
        /**
         * Lists an array as text.
         *
         * Takes an array and returns a list like "one, two, three, and four"
         * with a (mandatory) oxford comma.
         *
         * @since 5.2.0
         *
         * @param array $items items to list
         * @param string|null $conjunction coordinating conjunction, like "or" or "and"
         * @param string $separator list separator, like a comma
         * @return string
         */
        public static function list_array_items(array $items, $conjunction = null, $separator = '')
        {
        }
    }
    /**
     * Map a Square Coupon/Discount to a WooCommerce Coupon.
     *
     * @since 5.3.0
     */
    class Coupon_Utility
    {
        /**
         * The Square API bearer token.
         *
         * @var string
         */
        protected static $bearer_token = '';
        /**
         * Whether to use the Square sandbox environment.
         *
         * @var bool
         */
        protected static $is_sandbox = false;
        /**
         * The Square Discount object.
         *
         * @var \Square\Models\CatalogObject
         */
        protected static $discount_object;
        /**
         * The Square Pricing Rule and Product Set objects.
         *
         * @var \Square\Models\CatalogObject
         */
        protected static $pricing_rule_object;
        /**
         * The Square Product Set object.
         *
         * @var \Square\Models\CatalogObject
         */
        protected static $product_set_object;
        /**
         * Check if Square discount codes are enabled (setting + filter).
         * Scope is not checked here; use Token_Scope_Utility in admin for merchant notices only.
         *
         * @since 5.3.0
         *
         * @return bool True if Square discount codes should be processed.
         */
        public static function is_square_discount_codes_enabled()
        {
        }
        /**
         * Remove a coupon from the cart by code (finds the applied code that matches and removes it).
         *
         * @since 5.3.0
         *
         * @param string $coupon_code The coupon code to remove (matched with wc_is_same_coupon).
         * @return bool True if the coupon was found and removed, false otherwise.
         */
        public static function remove_coupon_from_cart($coupon_code)
        {
        }
        /**
         * Check if a coupon code is in the cart's applied coupons.
         *
         * @since 5.3.0
         *
         * @param string $coupon_code The coupon code to check.
         * @return bool True if the coupon is applied to the cart.
         */
        public static function is_coupon_in_applied_cart($coupon_code)
        {
        }
        /**
         * Build a map of cart item key => catalog_object_id and name for matching Square line items to cart.
         *
         * @since 5.3.0
         *
         * @param \WC_Cart $cart WooCommerce cart.
         * @return array<string, array{catalog_object_id: string, name: string}> Cart key => lookup data.
         */
        public static function get_cart_items_by_key($cart)
        {
        }
        /**
         * Find the WooCommerce cart item key that corresponds to a Square order line item.
         * Matches by catalog object ID first, then by product name.
         *
         * @since 5.3.0
         *
         * @param array $square_line_item  Line item from Square API response.
         * @param array $cart_items_by_key Map from get_cart_items_by_key().
         * @return string|null Cart item key or null if no match.
         */
        public static function match_square_line_to_cart_key($square_line_item, $cart_items_by_key)
        {
        }
        /**
         * Get the transient key for caching discount code data.
         *
         * @since 5.3.0
         *
         * @param string $discount_code The discount code.
         * @return string Transient key.
         */
        public static function get_discount_code_transient_key($discount_code)
        {
        }
        /**
         * Sentinel key in transient value when the discount code was looked up and not found.
         * get_transient() returns false when the key is missing, so we store an array to distinguish "not found" from "not cached".
         *
         * @var string
         */
        const CACHE_SENTINEL_NOT_FOUND = '__not_found';
        /**
         * Cache discount code details.
         * Uses WordPress transients to cache discount code data for 15 minutes.
         *
         * @since 5.3.0
         *
         * @param string     $discount_code The discount code.
         * @param array|null $code_details  The discount code details to cache. Null if not found.
         */
        public static function set_cache_discount_code($discount_code, $code_details)
        {
        }
        /**
         * Retrieve cached discount code details.
         *
         * @since 5.3.0
         *
         * @param string $discount_code The discount code.
         * @return array|null|false Cached discount code details, false if cached as "not found", or null if not cached.
         */
        public static function get_cache_discount_code($discount_code)
        {
        }
        /**
         * Clear cached discount code details.
         *
         * @since 5.3.0
         *
         * @param string $discount_code The discount code.
         */
        public static function clear_cache_discount_code($discount_code)
        {
        }
        /**
         * Retrieve discount code from the Square API.
         * Uses caching to avoid repeated API calls for the same code.
         *
         * @since 5.3.0
         *
         * @param string $discount_code The discount code to retrieve.
         * @return array|null Discount code details, or null if not found.
         */
        public static function get_discount_code($discount_code)
        {
        }
        /**
         * Get Square discount code ID by coupon code.
         *
         * @since 5.3.0
         *
         * @param string $coupon_code The coupon code to search for.
         * @return string|null The discount code ID or null if not found.
         */
        public static function get_square_discount_code_id_by_code($coupon_code)
        {
        }
        /**
         * Find and validate a matching discount code from API response.
         *
         * @since 5.3.0
         *
         * @param array  $discount_codes Array of discount codes from API response.
         * @param string $coupon_code    The coupon code to find and validate.
         * @return array|null The matching and valid discount code, or null if not found or invalid.
         */
        private static function find_valid_discount_code($discount_codes, $coupon_code)
        {
        }
        /**
         * Search for discount codes via Square API.
         *
         * @since 5.3.0
         *
         * @param string $coupon_code The coupon code to search for.
         * @param int    $timeout     Request timeout in seconds. Default 30.
         * @return array|null Response data with 'discount_codes' key, or null on error.
         */
        private static function search_discount_codes_via_api($coupon_code, $timeout = 30)
        {
        }
        /**
         * Get Square API credentials for direct HTTP requests.
         * Used for endpoints not available in the Square SDK (e.g., discount codes search).
         * Credentials are cached in static properties to avoid redundant fetches during a request.
         *
         * @since 5.3.0
         *
         * @return array|null Array with 'access_token', 'is_sandbox', and 'base_url', or null on error.
         */
        public static function get_square_api_credentials()
        {
        }
        /**
         * Make a POST request to the Square API.
         * Wrapper for direct HTTP calls to avoid duplicating credential and request logic.
         *
         * @since 5.3.0
         *
         * @param string $path    API path relative to base URL (e.g. 'orders/calculate' or 'discount-codes/search').
         * @param array  $body    Request body as array (will be JSON-encoded).
         * @param int    $timeout Request timeout in seconds. Default 30.
         * @return array|WP_Error Decoded response body and response code on success, WP_Error on failure.
         */
        public static function square_api_post($path, $body, $timeout = 30)
        {
        }
        /**
         * Map a Square Discount Code to a WooCommerce Coupon array.
         *
         * This allows for the creation of manual WC_Coupon object mapped from the
         * Square Discount code data provides.
         *
         * @since 5.3.0
         *
         * @param array $square_discount_code The Square discount code array.
         * @return array|false The mapped WooCommerce coupon data. False if mapping fails.
         */
        public static function map_square_discount_code_to_woocommerce_coupon($square_discount_code)
        {
        }
        /**
         * Get the Square CatalogDiscount object ID for a pricing rule (used to match order.discounts in API responses).
         * Results are cached by pricing_rule_id and version to avoid repeated API calls.
         *
         * @since 5.3.0
         *
         * @param string $pricing_rule_id      The Square pricing rule ID.
         * @param int    $pricing_rule_version The Square pricing rule version.
         * @return string|null The discount catalog object ID, or null if not found.
         */
        public static function get_discount_catalog_id_for_pricing_rule($pricing_rule_id, $pricing_rule_version)
        {
        }
        /**
         * Request the pricing rule and related objects from Square.
         *
         * @since 5.3.0
         *
         * @param string $pricing_rule_id      The Square pricing rule ID.
         * @param int    $pricing_rule_version The Square pricing rule version.
         *
         * @return bool True on success, false on failure.
         */
        protected static function request_pricing_rule_objects($pricing_rule_id, $pricing_rule_version)
        {
        }
        /**
         * Filter related objects by type.
         *
         * @since 5.3.0
         *
         * @param \Square\Models\CatalogObject[] $related_objects The related objects.
         * @param string $type The desired object type.
         * @return \Square\Models\CatalogObject[] The filtered related objects.
         */
        protected static function get_related_objects_by_type($related_objects, $type)
        {
        }
        /**
         * Map the Square discount type to the WooCommerce coupon discount type.
         *
         * @since 5.3.0
         *
         * @return string The mapped discount type.
         * @throws \Exception If the discount type is unsupported.
         */
        protected static function map_discount_type()
        {
        }
    }
    /**
     * The encryption utility class.
     *
     * Requires OpenSSL by default.
     *
     * @since 2.0.0
     */
    class Encryption_Utility
    {
        /** @var string default cipher method */
        protected $default_cipher_method = 'AES-128-CBC';
        /** @var string cipher method */
        protected $cipher_method;
        /**
         * Constructs the class.
         *
         * @param string $preferred_cipher_method cipher method
         */
        public function __construct($preferred_cipher_method = '')
        {
        }
        /**
         * Encrypts data.
         *
         * @since 2.0.0
         *
         * @param string|array $data data to encrypt
         * @param string $key encryption key
         * @return string
         * @throws \Exception
         */
        public function encrypt_data($data, $key = '')
        {
        }
        /**
         * Decrypts data.
         *
         * @since 2.0.0
         *
         * @param string $data data to decrypt
         * @param string $key decryption key
         * @return string|array
         * @throws \Exception
         */
        public function decrypt_data($data, $key = '')
        {
        }
        /**
         * Gets the vector length.
         *
         * @since 2.0.0
         *
         * @return int
         */
        protected function get_vector_length()
        {
        }
        /**
         * Determines if a cipher method is supported by the server.
         *
         * @since 2.0.0
         *
         * @param string $method cipher method to check
         * @return bool
         */
        protected function is_cipher_method_supported($method)
        {
        }
        /**
         * Determines if encryption is supported at all.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public static function is_encryption_supported()
        {
        }
        /**
         * Gets the cipher method.
         *
         * @since 2.0.0
         *
         * @return string
         */
        protected function get_cipher_method()
        {
        }
        /**
         * Gets the default cipher method.
         *
         * Checks the list of supported methods first, and if the default isn't supported, uses the first available.
         *
         * @since 2.0.0
         *
         * @return string
         */
        protected function get_default_cipher_method()
        {
        }
        /**
         * Gets the supported cipher methods.
         *
         * @since 2.0.0
         *
         * @return array
         */
        protected function get_supported_cipher_methods()
        {
        }
        /**
         * Gets the default encryption key.
         *
         * @since 2.0.0
         *
         * @return string
         */
        protected function get_default_key()
        {
        }
    }
    /**
     * WooCommerce Square Helper Class
     *
     * The purpose of this class is to centralize common utility functions.
     *
     * @since 2.2.0
     */
    class Helper
    {
        /**
         * Format a number with 2 decimal points, using a period for the decimal
         * separator and no thousands separator.
         *
         * Commonly used for payment gateways which require amounts in this format.
         *
         * @since 3.0.0
         * @param float $number
         * @return string
         */
        public static function number_format($number)
        {
        }
        /**
         * Safely get and trim data from $_POST
         *
         * @since 3.0.0
         * @param string $key array key to get from $_POST array
         * @return string value from $_POST or blank string if $_POST[ $key ] is not set
         */
        public static function get_post($key)
        {
        }
        /**
         * Add and store a notice.
         *
         * WC notice functions are not available in the admin
         *
         * @since 3.0.2
         * @param string $message The text to display in the notice.
         * @param string $notice_type The singular name of the notice type - either error, success or notice. [optional]
         */
        public static function wc_add_notice($message, $notice_type = 'success')
        {
        }
        /**
         * Gets the full URL to the log file for a given $handle
         *
         * @since 3.0.0
         * @param string $handle log handle
         * @return string URL to the WC log file identified by $handle
         */
        public static function get_wc_log_file_url($handle)
        {
        }
        /**
         * Helper method to get the version of the currently installed WooCommerce
         *
         * @since 3.0.0
         * @return string woocommerce version number or null
         */
        public static function get_wc_version()
        {
        }
        /**
         * Registers, enqueues, and adds an inline script (replaces repeated wp_register_script + wp_enqueue_script + wp_add_inline_script).
         *
         * @since 5.3.0
         * @param string      $script_handle  Script handle.
         * @param string      $javascript     Inline JavaScript code.
         * @param array       $dependencies   Optional. Script dependencies. Default array( 'jquery' ).
         * @param string|null $version        Optional. Script version. Default WC_SQUARE_PLUGIN_VERSION.
         * @param bool        $in_footer      Optional. Whether to enqueue in footer. Default true.
         */
        public static function enqueue_inline_script(string $script_handle, string $javascript, array $dependencies = array('jquery'), ?string $version = null, bool $in_footer = true): void
        {
        }
    }
    /**
     * Helper for converting money values.
     *
     * Square deals in cents, and Woo deals in floats so this methods help conversion between the two.
     *
     * @since 2.0.0
     */
    class Money_Utility
    {
        /**
         * Converts a WooCommerce amount to a Square money object.
         *
         * @since 2.0.0
         *
         * @param float $amount amount to convert
         * @param string $currency currency code
         *
         * @return \Square\Models\Money
         */
        public static function amount_to_money($amount, $currency)
        {
        }
        /**
         * Converts a float amount to cents.
         *
         * @since 2.0.0
         *
         * @param float $amount float amount to convert
         * @param string $currency currency code for the amount
         * @return int
         */
        public static function amount_to_cents($amount, $currency = '')
        {
        }
        /**
         * Converts an amount in cents to a float.
         *
         * @since 2.0.0
         *
         * @param int $cents amount in cents
         * @param string $currency currency code for the amount
         * @return float
         */
        public static function cents_to_float($cents, $currency = '')
        {
        }
        /**
         * Gets the standard number of decimals for the given currency.
         *
         * @since 2.0.2
         *
         * @param string $currency currency code
         * @return int
         */
        public static function get_currency_decimals($currency)
        {
        }
    }
    /**
     * Authorizes AJAX handlers that return order data during pay-for-order flows.
     *
     * @since 5.3.1
     */
    final class Order_Ajax_Authorization
    {
        /**
         * Generic error message for any failed pay-for-order authorization (avoid response differentiation).
         *
         * @since 5.3.1
         *
         * @return string
         */
        public static function get_invalid_order_message()
        {
        }
        /**
         * Order key from AJAX POST, or from the pay-for-order URL query string on full page requests.
         *
         * @since 5.3.1
         *
         * @return string
         */
        public static function get_request_order_key()
        {
        }
        /**
         * Order key for frontend scripts on the order-pay page.
         *
         * @since 5.3.1
         *
         * @return string
         */
        public static function get_order_key_for_frontend_localization()
        {
        }
        /**
         * Whether the current request may load the given order in pay-for-order AJAX context.
         *
         * @since 5.3.1
         *
         * @param \WC_Order|false $order Order object or false.
         * @return bool
         */
        public static function is_authorized_for_pay_for_order($order)
        {
        }
        /**
         * Order ID for payment line-item builders: non-zero only when pay-for-order context applies and authorization passes.
         *
         * On normal checkout AJAX, a forged `order_id` must be ignored (returns 0). When the pay-for-order endpoint
         * is active or `is_pay_for_order_page` is posted as true, returns the sanitized ID for the order being paid.
         * Uses `is_authorized_for_pay_for_order()` to check if the order is authorized to be paid.
         *
         * @since 5.3.1
         *
         * @param int $order_id Order ID from POST or query.
         * @return int
         */
        public static function trusted_line_items_order_id($order_id)
        {
        }
    }
    /**
     * Performance logging utility for timing operations and memory usage.
     *
     * @since 4.9.1
     */
    class Performance_Logger
    {
        /** @var array Stores timer start times indexed by key */
        private static $timers = array();
        /**
         * Starts a timer for performance tracking.
         *
         * @since 4.9.1
         *
         * @param string $key Unique identifier for this timer
         * @param \WooCommerce\Square\Plugin $plugin Plugin instance to check debug status
         */
        public static function start($key, $plugin)
        {
        }
        /**
         * Ends a timer and logs the performance data.
         *
         * @since 4.9.1
         *
         * @param string $key Unique identifier for this timer
         * @param \WooCommerce\Square\Plugin $plugin Plugin instance for logging
         * @param boolean $is_error Whether the operation failed
         */
        public static function end($key, $plugin, $is_error = false)
        {
        }
        /**
         * Gets the current timer value without logging (useful for testing).
         *
         * @since 4.9.1
         *
         * @param string $key Timer identifier
         * @return float|null Timer value in seconds or null if timer not found
         */
        public static function get_timer($key)
        {
        }
        /**
         * Resets all timers (useful for testing).
         *
         * @since 4.9.1
         */
        public static function reset()
        {
        }
    }
    /**
     * Helper for dealing with String values.
     *
     * @since 2.2.0
     */
    class String_Utility
    {
        /**
         * encoding used for mb_*() string functions
         **/
        const MB_ENCODING = 'UTF-8';
        /**
         * Truncates $string after a given $length if string is longer than
         * $length.
         *
         * The last characters will be replaced with the $omission string
         * for a total length not exceeding $length
         *
         * See Square_Helper::str_truncate()
         *
         * @since 2.2.0
         * @param string $string text to truncate
         * @param int $length total desired length of string, including omission
         * @param string $omission omission text, defaults to '...'
         * @return string
         */
        public static function truncate($string, $length, $omission = '...')
        {
        }
        /**
         * Returns a string with all non-ASCII characters removed. This is useful
         * for any string functions that expect only ASCII chars and can't
         * safely handle UTF-8. Note this only allows ASCII chars in the range
         * 33-126 (newlines/carriage returns are stripped)
         *
         * See Square_Helper::to_ascii()
         *
         * @since 2.2.0
         * @param string $string string to make ASCII
         * @return string
         */
        public static function to_ascii($string)
        {
        }
        /**
         * Returns true if the haystack string starts with needle
         *
         * Note: case-sensitive
         *
         * See Square_Helper::str_starts_with()
         *
         * @since 2.2.0
         * @param string $haystack
         * @param string $needle
         * @return bool
         */
        public static function str_starts_with($haystack, $needle)
        {
        }
        /**
         * Returns true if the needle exists in haystack
         *
         * Note: case-sensitive
         *
         * See Square_Helper::str_exists()
         *
         * @since 2.2.0
         * @param string $haystack
         * @param string $needle
         * @return bool
         */
        public static function str_exists($haystack, $needle)
        {
        }
        /**
         * Helper method to check if the multibyte extension is loaded, which
         * indicates it's safe to use the mb_*() string methods
         *
         * @since 2.2.0
         * @return bool
         */
        protected static function multibyte_loaded()
        {
        }
    }
    /**
     * Utility for Square OAuth token introspection (retrieve token status).
     * Used to check merchant scopes before calling scope-gated APIs (e.g. discount codes).
     *
     * @see https://developer.squareup.com/reference/square/o-auth-api/retrieve-token-status
     * @since 5.3.0
     */
    class Token_Scope_Utility
    {
        /**
         * OAuth scopes required for Square discount code APIs. Both must be present on the token.
         *
         * @var string[]
         */
        const DISCOUNT_CODES_SCOPES_REQUIRED = array('DISCOUNT_CODES_READ', 'DISCOUNT_CODES_WRITE');
        /**
         * Transient key prefix for cached scopes. Suffix is environment (production or sandbox).
         *
         * @var string
         */
        const TRANSIENT_PREFIX = 'wc_square_token_scopes_';
        /**
         * Cache duration for token scopes in seconds (24 hours).
         *
         * @var int
         */
        const CACHE_DURATION = HOUR_IN_SECONDS * 24;
        /**
         * Retrieve token status from Square OAuth API and return the list of scopes.
         * Results are cached per environment to avoid repeated API calls.
         *
         * @since 5.3.0
         *
         * @param string|null $access_token Access token (optional; uses plugin settings if null).
         * @param bool|null   $is_sandbox   Whether sandbox (optional; uses plugin settings if null).
         * @return array|WP_Error List of scope strings, or WP_Error on failure.
         */
        public static function get_token_scopes($access_token = null, $is_sandbox = null)
        {
        }
        /**
         * Whether the current merchant's token has both scopes required for discount code APIs.
         * Both DISCOUNT_CODES_READ and DISCOUNT_CODES_WRITE must be present.
         *
         * @since 5.3.0
         *
         * @param string|null $access_token Access token (optional).
         * @param bool|null   $is_sandbox   Whether sandbox (optional).
         * @return bool True if token has both DISCOUNT_CODES_READ and DISCOUNT_CODES_WRITE, false otherwise.
         */
        public static function merchant_has_discount_codes_scope($access_token = null, $is_sandbox = null)
        {
        }
        /**
         * Clear cached token scopes for an environment (e.g. after token update or disconnect).
         *
         * @since 5.3.0
         *
         * @param string|null $environment 'production', 'sandbox', or null to clear both.
         */
        public static function clear_scope_cache($environment = null)
        {
        }
    }
}
namespace WooCommerce\Square {
    class WC_Order_Square extends \WC_Order
    {
        /**
         * Holds the Square customer ID.
         *
         * @var string
         */
        public $customer_id;
        /**
         * Holds the Square customer ID. Same as $customer_id.
         *
         * @var string
         */
        public $square_customer_id;
        /**
         * Holds payment information on the order object.
         *
         * @var object
         */
        public $payment;
        /**
         * Holds order description.
         *
         * @var string
         */
        public $description;
        /**
         * Holds a combination of order number + retry count, should provide
         * a unique value for each transaction attempt.
         *
         * @var string
         */
        public $unique_transaction_ref;
        /**
         * Holds Square order ID.
         *
         * @var string
         */
        public $square_order_id;
        /**
         * Holds plugin version number.
         *
         * @var string
         */
        public $square_version;
        /**
         * Holds order payment total.
         *
         * @var float
         */
        public $payment_total;
        /**
         * Holds capture transaction type information.
         *
         * @var object
         */
        public $capture;
        /**
         * Holds refund order information.
         *
         * @var object
         */
        public $refund;
        /**
         * Wrapper around wc_get_order().
         *
         * @since 4.3.1
         *
         * @param mixed $the_order Post object or post ID of the order.
         *
         * @return bool|WC_Order|WC_Order_Refund|WC_Order_Square
         */
        public static function wc_get_order($the_order)
        {
        }
    }
    /**
     * WC_Payments_Compatibility Class
     *
     * @version 4.7.3
     */
    class WC_Payments_Compatibility
    {
        /**
         * Initialize the WooPayments Compatibility class.
         *
         * @since 4.7.3
         */
        public function init()
        {
        }
        /**
         * Filter whether to display express pay buttons on product pages.
         *
         * Runs on the `wcpay_payment_request_is_product_supported` and
         * `wcpay_woopay_button_is_product_supported` filters.
         *
         * @since 4.7.3
         *
         * @param bool        $is_supported Whether express pay buttons are supported on product pages.
         * @param \WC_Product $product      The product object.
         *
         * @return bool Modified support status.
         */
        public function wcpay_is_product_supported($is_supported, $product)
        {
        }
        /**
         * Filter whether to display WooPay express pay buttons on cart pages.
         *
         * Hide the express WooPay button on cart pages containing Square Gift Cards.
         *
         * Runs on the `wcpay_platform_checkout_button_are_cart_items_supported` filter.
         *
         * @param bool $is_supported Whether express WooPay buttons are supported on cart pages.
         *
         * @return bool Modified support status.
         */
        public function platform_checkout_button_are_cart_items_supported($is_supported)
        {
        }
    }
}
namespace {
    /**
     * The plugin loader class.
     *
     * @since 2.0.0
     */
    class WooCommerce_Square_Loader
    {
        /** minimum PHP version required by this plugin */
        const MINIMUM_PHP_VERSION = '7.4.0';
        /** minimum WordPress version required by this plugin */
        const MINIMUM_WP_VERSION = '6.9';
        /** minimum WooCommerce version required by this plugin */
        const MINIMUM_WC_VERSION = '11.0';
        /**
         * SkyVerge plugin framework version used by this plugin
         * Constant is left as it is for legacy purposes.
         **/
        const FRAMEWORK_VERSION = '5.4.0';
        /** the plugin name, for displaying notices */
        const PLUGIN_NAME = 'Square for WooCommerce';
        /** @var WooCommerce_Square_Loader single instance of this class */
        private static $instance;
        /** @var array the admin notices to add */
        private $notices = array();
        /**
         * Constructs the class.
         *
         * @since 2.0.0
         */
        protected function __construct()
        {
        }
        /**
         * Cloning instances is forbidden due to singleton pattern.
         *
         * @since 2.0.0
         */
        public function __clone()
        {
        }
        /**
         * Unserializing instances is forbidden due to singleton pattern.
         *
         * @since 2.0.0
         */
        public function __wakeup()
        {
        }
        /**
         * Initializes the plugin.
         *
         * @since 2.0.0
         */
        public function init_plugin()
        {
        }
        /**
         * Loads the base framework classes.
         *
         * @since 2.0.0
         */
        protected function load_framework()
        {
        }
        /**
         * Gets the framework version in namespace form.
         *
         * @since 2.0.0
         *
         * @return string
         */
        protected function get_framework_version_namespace()
        {
        }
        /**
         * Gets the framework version used by this plugin.
         *
         * @since 2.0.0
         *
         * @return string
         */
        protected function get_framework_version()
        {
        }
        /**
         * Adds notices for out-of-date WordPress and/or WooCommerce versions.
         *
         * @since 2.0.0
         * @deprecated 4.6.3 Use \WooCommerce_Square_Loader::is_environment_compatible() instead.
         */
        public function add_plugin_notices()
        {
        }
        /**
         * Determines if the required plugins are compatible.
         *
         * @since 2.0.0
         * @deprecated 4.6.3 Use \WooCommerce_Square_Loader::is_environment_compatible() instead.
         *
         * @return bool
         */
        protected function plugins_compatible()
        {
        }
        /**
         * Determines if the WordPress compatible.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        protected function is_wp_compatible()
        {
        }
        /**
         * Determines if the WooCommerce compatible.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        protected function is_wc_compatible()
        {
        }
        /**
         * Deactivates the plugin.
         *
         * @since 2.0.0
         */
        protected function deactivate_plugin()
        {
        }
        /**
         * Adds an admin notice to be displayed.
         *
         * @since 2.0.0
         *
         * @param string $slug the slug for the notice
         * @param string $class the css class for the notice
         * @param string $message the notice message
         */
        public function add_admin_notice($slug, $class, $message)
        {
        }
        /**
         * Displays any admin notices added with \WooCommerce_Square_Loader::add_admin_notice()
         *
         * @since 2.0.0
         */
        public function admin_notices()
        {
        }
        /**
         * Determines if the server environment is compatible with this plugin.
         *
         * Override this method to add checks for more than just the PHP version.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function is_environment_compatible()
        {
        }
        /**
         * Get the WooCommerce download link for a specific version.
         *
         * Ensures the download link is correct for major versions of WooCommerce by
         * ensuring that specific download links match the tagged version and include
         * three parts in the version number.
         *
         * @since 4.6.3
         *
         * @param string|int|float $version The version of WooCommerce to get the download link for.
         *                                  Accepts a version number in the forms of 'x', 'x.x' or 'x.x.x'.
         *                                  Accepts the strings 'minimum' and 'latest'.
         *                                  Defaults to 'latest'.
         * @return string The download link for the WooCommerce version.
         */
        public function get_woocommerce_download_link($version = 'latest')
        {
        }
        /**
         * Declares support for WooCommerce features.
         */
        public function declare_features_compatibility()
        {
        }
        /**
         * Returns true if opcache.save_comments is enabled.
         *
         * @since 3.0.2
         *
         * @return boolean
         */
        protected function is_opcache_save_message_enabled()
        {
        }
        /**
         * Returns true if the PHP version of the environment
         * meets the requirement.
         *
         * @since 3.0.2
         *
         * @return boolean
         */
        protected function is_php_version_valid()
        {
        }
        /**
         * Register the Square Credit Card checkout block integration class
         *
         * @since 2.5.0
         */
        public function register_payment_method_block_integrations($payment_method_registry)
        {
        }
        /**
         * Gets the main plugin loader instance.
         *
         * Ensures only one instance can be loaded.
         *
         * @since 2.0.0
         *
         * @return \WooCommerce_Square_Loader
         */
        public static function instance()
        {
        }
    }
}
namespace {
    /**
     * Gets the singleton instance of WooCommerce Square.
     *
     * @since 2.0.0
     *
     * return \WooCommerce\Square\Plugin
     */
    function wc_square()
    {
    }
    \define('WC_SQUARE_PLUGIN_VERSION', '5.5.2');
    \define('WC_SQUARE_PLUGIN_URL', \plugin_dir_url(__FILE__));
    \define('WC_SQUARE_PLUGIN_PATH', \plugin_dir_path(__FILE__));
    \define('WC_SQUARE_OPTION_ANY', 'Any');
    \define('WC_SQUARE_SYNC_ORDERS_EVENT_HOOK', 'wc_square_sync_orders');
}