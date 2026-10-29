<?php
/**
 * Generated stub declarations for woocommerce-product-csv-import-suite 1.11.8.
 * @see https://github.com/woocommerce/php-stubs
 */

/**
 * Adds the CSV Import Suite admin menu page and renders its import and export screens.
 *
 * @class   WC_PCSVIS_Admin_Screen
 * @version 1.11.7
 */
class WC_PCSVIS_Admin_Screen
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Add screen id
     * @param  array $ids
     * @return array
     */
    public function screen_id($ids)
    {
    }
    /**
     * Notices in admin
     *
     * @return void
     */
    public function admin_notices()
    {
    }
    /**
     * Admin Menu
     *
     * @return void
     */
    public function admin_menu()
    {
    }
    /**
     * Register the navigation items in the WooCommerce navigation.
     *
     * @return void
     */
    public function register_navigation_items()
    {
    }
    /**
     * Admin Scripts
     *
     * @return void
     */
    public function admin_scripts()
    {
    }
    /**
     * Admin Screen output
     *
     * @return void
     */
    public function output()
    {
    }
    /**
     * Admin page for importing
     *
     * @return void
     */
    public function admin_import_page()
    {
    }
    /**
     * Admin Page for exporting
     *
     * @return void
     */
    public function admin_export_page()
    {
    }
}
/**
 * Handles the AJAX requests that import CSV rows and regenerate thumbnails.
 *
 * @class   WC_PCSVIS_AJAX_Handler
 * @version 1.11.7
 */
class WC_PCSVIS_AJAX_Handler
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Ajax event for importing a CSV
     *
     * @return void
     */
    public function csv_import_request()
    {
    }
    /**
     * From regenerate thumbnails plugin
     *
     * @return void
     */
    public function regenerate_thumbnail()
    {
    }
    /**
     * Die with a JSON formatted error message
     *
     * @param int    $id      Attachment ID.
     * @param string $message Error message.
     * @return void
     */
    public function die_json_error_msg($id, $message)
    {
    }
}
/**
 * Adds tools for deleting products and variations to the WooCommerce system status tools.
 *
 * @class   WC_PCSVIS_System_Status_Tools
 * @version 1.11.8
 */
class WC_PCSVIS_System_Status_Tools
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Tools we add to WC
     * @param  array $tools
     * @return array
     */
    public function tools($tools)
    {
    }
    /**
     * Delete products
     *
     * @return void
     */
    public function delete_products()
    {
    }
    /**
     * Delete variations
     *
     * @return void
     */
    public function delete_variations()
    {
    }
    /**
     * Delete orphans
     *
     * @return void
     */
    public function delete_orphaned_variations()
    {
    }
}
/**
 * Exports products or product variations to a CSV file.
 *
 * @class   WC_PCSVIS_Exporter
 * @version 1.11.8
 */
class WC_PCSVIS_Exporter
{
    /**
     * Product Exporter Tool
     *
     * @param string $post_type Post type to export: 'product' or 'product_variation'.
     * @return void
     */
    public static function do_export($post_type = 'product')
    {
    }
    /**
     * Format the data if required
     * @param  string $meta_value
     * @param  string $meta name of meta key
     * @return string
     */
    public static function format_export_meta($meta_value, $meta)
    {
    }
    /**
     * Convert a value to a UTF-8, CSV-escaped string.
     *
     * @param mixed $data Value to format; it is cast to a string.
     * @return string
     */
    public static function format_data($data)
    {
    }
    /**
     * Wrap a column in quotes for the CSV
     *
     * @param  mixed $data data to wrap; null becomes an empty column.
     * @return string wrapped data
     */
    public static function wrap_column($data)
    {
    }
    /**
     * Get a list of all the meta keys for a post type. This includes all public, private,
     * used, no-longer used etc. They will be sorted once fetched.
     *
     * @param string $post_type Post type.
     * @return array<int, string|null> Sorted meta keys.
     */
    public static function get_all_metakeys($post_type = 'product')
    {
    }
    /**
     * Get a list of all the product attributes for a post type.
     * These require a bit more digging into the values.
     *
     * @param string $post_type Post type.
     */
    public static function get_all_product_attributes($post_type = 'product')
    {
    }
}
/**
 * WooCommerce CSV Importer class for managing parsing of CSV files.
 *
 * @class   WC_CSV_Parser
 * @version 1.11.8
 */
class WC_CSV_Parser
{
    /**
     * Number of rows parsed so far; null before the first row.
     *
     * @var int|null
     */
    var $row;
    /**
     * Post type being parsed: 'product' or 'product_variation'.
     *
     * @var string
     */
    var $post_type;
    /**
     * Fields we map/handle (not custom fields).
     *
     * @var string[]
     */
    var $reserved_fields;
    // Fields we map/handle (not custom fields)
    /**
     * Default post data.
     *
     * @var array<string, mixed>
     */
    var $post_defaults;
    // Default post data
    /**
     * Default post meta, from the woocommerce_csv_product_postmeta_defaults filter.
     *
     * @var mixed
     */
    var $postmeta_defaults;
    // default post meta
    /**
     * Post meta validation: allowed values per field.
     *
     * @var array<string, array<int|string>>
     */
    var $postmeta_allowed;
    // post meta validation
    /**
     * Allowed product types: term ID by product type slug (null if a core product type term is missing).
     *
     * @var array<string, int|null>
     */
    var $allowed_product_types;
    // Allowed product types
    /**
     * Cache of term IDs, by taxonomy, parent term ID and term name.
     *
     * @var array<string, array<int, array<int|string, int>>>
     */
    private $inserted_terms = array();
    /**
     * Constructor
     *
     * @param string $post_type Post type to parse: 'product' or 'product_variation'.
     */
    public function __construct($post_type = 'product')
    {
    }
    /**
     * Format data from the csv file
     *
     * @param  string       $data CSV cell.
     * @param  string|false $enc  Detected encoding of the file, or false.
     * @return string|false|null
     */
    public function format_data_from_csv($data, $enc)
    {
    }
    /**
     * Parse the data
     *
     * @param  string          $file      Path to the CSV file.
     * @param  string          $delimiter CSV delimiter.
     * @param  array           $mapping   Column mapping.
     * @param  integer         $start_pos File position to start parsing at.
     * @param  int|string|null $end_pos   File position to stop parsing at; '' or null to parse to the end.
     * @return array{list<array<array-key, string|false|null>>, array<array-key, string>, int|false|null} Parsed rows keyed by heading, the raw CSV headers keyed by heading, and the file position after the last parsed row (null if the file could not be opened).
     */
    public function parse_data($file, $delimiter, $mapping, $start_pos = 0, $end_pos = \null)
    {
    }
    /**
     * Parse product
     *
     * @param  array         $item              Parsed CSV row.
     * @param  int|bool|null $merge_empty_cells Whether empty cells overwrite existing data when merging.
     * @return array|WP_Error
     */
    public function parse_product($item, $merge_empty_cells = 0)
    {
    }
}
/**
 * Loads the WordPress Importer API and dispatches the product and variation importers.
 *
 * @class   WC_PCSVIS_Importer
 * @version 1.11.7
 */
class WC_PCSVIS_Importer
{
    /**
     * Product Exporter Tool
     *
     * @return void
     */
    public static function load_wp_importer()
    {
    }
    /**
     * Product Importer Tool
     *
     * @return void
     */
    public static function product_importer()
    {
    }
    /**
     * Variation Importer Tool
     *
     * @return void
     */
    public static function variation_importer()
    {
    }
}
/**
 * Product data store that updates the product meta lookup table for a single product.
 *
 * @class   WC_PCSVIS_Product_Data_Store
 * @version 1.11.7
 */
class WC_PCSVIS_Product_Data_Store extends \WC_Product_Data_Store_CPT
{
    /**
     * Update the lookup table for a single product.
     *
     * @param int $product_id Product ID.
     * @return void
     */
    public function update_lookup($product_id)
    {
    }
}
/**
 * Imports products from a CSV file.
 *
 * @class   WC_PCSVIS_Product_Import
 * @version 1.11.8
 */
class WC_PCSVIS_Product_Import extends \WP_Importer
{
    /**
     * ID of the uploaded import file attachment.
     *
     * @var int|null
     */
    var $id;
    /**
     * Import file path relative to WP_CONTENT_DIR.
     *
     * @var string|null
     */
    var $file_url;
    /**
     * CSV delimiter; dispatch() replaces it with the submitted one.
     *
     * @var string
     */
    public $delimiter = ',';
    /**
     * Whether empty cells overwrite existing data when merging (1 or 0).
     *
     * @var int|bool|null
     */
    var $merge_empty_cells;
    // mappings from old information to new
    var $processed_terms = array();
    var $processed_posts = array();
    var $post_orphans = array();
    var $attachments = array();
    var $upsell_skus = array();
    var $crosssell_skus = array();
    /**
     * Import page name.
     *
     * @var string
     */
    protected $import_page = '';
    /**
     * Product datastore.
     *
     * @var WC_PCSVIS_Product_Data_Store|null
     */
    protected $data_store;
    /**
     * CSV parser.
     *
     * @var WC_CSV_Parser
     */
    protected $parser;
    /**
     * Parsed data.
     *
     * @var list<array<array-key, string|false|null>> CSV rows keyed by heading, as returned by WC_CSV_Parser::parse_data().
     */
    protected $parsed_data;
    /**
     * Raw CSV headers.
     *
     * @var array<array-key, string> Original CSV column names keyed by heading, as returned by WC_CSV_Parser::parse_data().
     */
    public $raw_headers;
    /**
     * Whether import by file URL is enabled.
     *
     * @var boolean
     */
    protected $file_url_import_enabled = \true;
    /**
     * Whether to skip updating attachment metadata. Used internally during the import.
     *
     * @var boolean
     */
    protected $skip_attachment_meta_update = \false;
    /**
     * Import result of each row.
     *
     * @var array<int, array{post_title: mixed, post_id: int|string, sku: mixed, status: string, reason: string}>
     */
    var $import_results = array();
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Filter post meta values.
     *
     * @since 1.10.11
     * @version 1.10.11
     * @param mixed $value
     * @param string $key
     * @return mixed
     */
    public function filter_post_meta_value($value, $key)
    {
    }
    /**
     * Registered callback function for the WordPress Importer
     *
     * Manages the three separate stages of the CSV import process
     *
     * @throws Exception If the import file could not be read.
     * @return void
     */
    public function dispatch()
    {
    }
    /**
     * format_data_from_csv
     *
     * @param string       $data CSV cell.
     * @param string|false $enc  Detected encoding of the file, or false.
     * @return string|false|null
     */
    public function format_data_from_csv($data, $enc)
    {
    }
    /**
     * Display pre-import options
     *
     * @return void
     */
    public function import_options()
    {
    }
    /**
     * The main controller for the actual import stage.
     *
     * @return void
     */
    public function import()
    {
    }
    /**
     * Parses the CSV file and prepares us for the task of processing parsed data
     *
     * @param string     $file      Path to the CSV file for importing
     * @param mixed      $mapping   Column mapping decoded from the import request.
     * @param int        $start_pos File position to start parsing at.
     * @param int|string $end_pos   File position to stop parsing at, or '' to parse to the end.
     * @return int|false|null File position after the last parsed row; null if the file could not be opened.
     */
    public function import_start($file, $mapping, $start_pos, $end_pos)
    {
    }
    /**
     * Performs post-import cleanup of files and the cache
     *
     * @return void
     */
    public function import_end()
    {
    }
    /**
     * Handles the CSV upload and initial parsing of the file to prepare for
     * displaying author import options
     *
     * @version 1.10.13
     *
     * @return bool False if error uploading or invalid file, true otherwise
     */
    public function handle_upload()
    {
    }
    /**
     * Handle initial upload file before displaying import options.
     *
     * @throws Exception Error on upload.
     *
     * @since 1.10.13
     *
     * @version 1.10.13
     * @return void
     */
    protected function handle_initial_upload_file()
    {
    }
    /**
     * Handle initial path file check before displaying import options.
     *
     * @throws Exception Errors relating to the supplied file path.
     * @throws Throwable Errors relating to the supplied file path.
     *
     * @since 1.10.13
     *
     * @version 1.10.13
     * @return void
     */
    protected function handle_initial_path_file_check()
    {
    }
    /**
     * Confirm that the import file path is valid.
     *
     * @throws Exception Errors relating to the supplied file path.
     * @throws Throwable Errors relating to the supplied file path.
     *
     * @param string $filepath The file path to be checked.
     * @return void
     */
    private function perform_file_path_checks(string $filepath)
    {
    }
    /**
     * Checks if the provided filepath is within WordPress's content directory.
     *
     * @param string $filepath The filepath to be checked.
     *
     * @return bool True if the filepath is within the content directory.
     */
    private function is_within_content_dir(string $filepath): bool
    {
    }
    /**
     * Checks if a filepath resolves (real path, symlinks included) to a location within a directory.
     *
     * Both paths are resolved with realpath() before comparison, which fails closed: a filepath
     * that does not yet exist, or a symlink pointing outside the directory, is rejected rather
     * than treated as contained.
     *
     * @param string $filepath  The filepath to be checked.
     * @param string $directory The directory the filepath must resolve within.
     *
     * @return bool True if the filepath resolves within the directory.
     */
    private function is_within_directory(string $filepath, string $directory): bool
    {
    }
    /**
     * Validate that a real file has an acceptable image extension and that its actual
     * content matches, using WordPress's own content-sniffing (wp_check_filetype_and_ext())
     * rather than trusting getimagesize(), which does not recognize every format this site
     * may allow for upload (e.g. AVIF) on every PHP version this plugin supports.
     *
     * @param string $real_filepath Path to the real file to validate.
     * @param string $filename      Filename to check the extension of.
     *
     * @return array|false Filetype info on success, false if the extension or content is rejected.
     */
    private function get_safe_image_filetype($real_filepath, $filename)
    {
    }
    /**
     * Mime types accepted for images copied or looked up during product import: every image
     * type this site allows for upload, so a newly supported format (e.g. AVIF) is accepted
     * without this allow-list needing a manual update.
     *
     * @return array<string, string> Mime types keyed by the file extension regex, as in get_allowed_mime_types().
     */
    private function get_acceptable_image_mime_types()
    {
    }
    /**
     * Whether a product with this SKU already exists.
     *
     * @param string $title     Product title.
     * @param mixed  $sku       Product SKU, from the CSV row or the existing product's meta.
     * @param string $post_name Product slug.
     * @return bool
     */
    public function product_exists($title, $sku = '', $post_name = '')
    {
    }
    /**
     * sort attributes
     *
     * @return int
     */
    public function attributes_cmp($a, $b)
    {
    }
    /**
     * Sets product catalog visibility.
     *
     * @since 1.10.15
     * @version 1.10.15
     * @param int $product_id
     * @param array $post
     * @return void
     */
    public function set_catalog_visibility($product_id, $post)
    {
    }
    /**
     * Sets product featured visibility.
     *
     * @param int   $product_id Product ID.
     * @param array $post       Importer post data.
     * @return void
     */
    public function set_featured($product_id, $post)
    {
    }
    /**
     * Sets stock status.
     *
     * @param int   $product_id Product ID.
     * @param array $post       Importer post data.
     * @return void
     */
    public function set_stock_data($product_id, $post)
    {
    }
    /**
     * Fail a merge row whose SKU already belongs to another product.
     *
     * @since 1.11.7
     *
     * @param array $post Parsed import row.
     * @return bool True when the row was rejected.
     */
    protected function merge_has_sku_conflict($post)
    {
    }
    /**
     * Create new posts based on import information
     *
     * @return void
     */
    public function process_product($post)
    {
    }
    /**
     * Process terms
     *
     * @param int   $post_id          Product ID.
     * @param mixed $terms_to_process Term groups parsed from the CSV row.
     * @return void
     */
    public function process_terms($post_id, $terms_to_process)
    {
    }
    /**
     * Log a row's import status
     *
     * @param string     $status     Result status.
     * @param string     $reason     Result message.
     * @param int|string $post_id    Product ID, or a placeholder when there is none.
     * @param mixed      $post_title Product title from the CSV row.
     * @param mixed      $sku        Product SKU from the CSV row.
     * @return void
     */
    protected function add_import_result($status, $reason, $post_id = '', $post_title = '', $sku = '')
    {
    }
    /**
     * If fetching attachments is enabled then attempt to create a new attachment
     *
     * @param array $post Attachment post details from WXR
     * @param string $url URL to fetch attachment from
     * @param int    $post_id Product ID the attachment belongs to.
     * @return int|WP_Error Post ID on success, WP_Error otherwise
     */
    public function process_attachment($post, $url, $post_id)
    {
    }
    /**
     * Attempt to download a remote file attachment
     *
     * @param string $url URL to download.
     */
    public function fetch_remote_file($url, $post)
    {
    }
    /**
     * Decide what the maximum file size for downloaded attachments is.
     * Default is 0 (unlimited), can be filtered via import_attachment_size_limit
     *
     * @return int Maximum attachment file size to import
     */
    public function max_attachment_size()
    {
    }
    /**
     * Attempt to associate posts and menu items with previously missing parents
     *
     * @return void
     */
    public function backfill_parents()
    {
    }
    /**
     * Attempt to associate posts and menu items with previously missing parents
     *
     * @param string     $type       Link type: 'upsell' or 'crosssell'.
     * @param int|string $product_id Product ID, as restored from the import request.
     * @param mixed      $skus       SKUs to link, as restored from the import request.
     * @return void
     */
    public function link_product_skus($type, $product_id, $skus)
    {
    }
    /**
     * Display import page title.
     *
     * @return void
     */
    public function header()
    {
    }
    /**
     * Close div.wrap.
     *
     * @return void
     */
    public function footer()
    {
    }
    /**
     * Display introductory text and file upload form
     *
     * @return void
     */
    public function greet()
    {
    }
    /**
     * Added to http_request_timeout filter to force timeout at 60 seconds during import
     * @return int 60
     */
    public function bump_request_timeout($val)
    {
    }
    /**
     * Checks whether a given path file is a safe path.
     *
     * Safe path file means a given path starts with a given base directory.
     *
     * @since 1.10.13
     *
     * @version 1.10.13
     *
     * @param string $base_dir Base directory.
     * @param string $path     File path. Relative to `$base_dir`.
     *
     * @return bool Returns true if given `$path` starts with `$base_dir`.
     */
    protected function is_safe_path($base_dir, $path)
    {
    }
    /**
     * Checks whether a CSV file path is acceptable for importer.
     *
     * Filepath is acceptable if file extension is csv and MIME Content-type is
     * whitelisted.
     *
     * @since 1.10.13
     *
     * @version 1.10.13
     *
     * @param string $filepath CSV filepath.
     *
     * @return bool Returns true if given `$path` starts with `$base_dir`.
     */
    protected function is_acceptable_csv_file($filepath)
    {
    }
    /**
     * Get list of acceptable CSV mime types.
     *
     * @since 1.10.13
     *
     * @version 1.10.13
     *
     * @return array Array of acceptable CSV mime types.
     */
    protected function get_acceptable_csv_mime_types()
    {
    }
    /**
     * Sanitize request input value.
     *
     * @since 1.10.60
     * @param mixed $value The request value to be sanitized.
     * @return mixed Sanitized value.
     */
    public function clean_unslash($value)
    {
    }
    /**
     * Synchronizes the WooCommerce product attributes lookup table (introduced in WC 6.3) for a given product.
     *
     * The $this->data_store->update_lookup() above only syncs the legacy wc_product_meta_lookup table.
     * The newer wc_product_attributes_lookup table powers storefront attribute filters and needs an
     * explicit on_product_changed() call here, because this import path uses raw wp_insert_post() / $wpdb
     * writes and bypasses WC_Product::save()'s normal sync at abstract-wc-product.php:1564.
     *
     * @since 1.11.2
     *
     * @param int $product_id The ID of the product to sync.
     * @return void
     */
    public function sync_product_attributes_lookup(int $product_id)
    {
    }
}
/**
 * Imports product variations from a CSV file.
 *
 * @class   WC_PCSVIS_Product_Variation_Import
 * @version 1.11.7
 */
class WC_PCSVIS_Product_Variation_Import extends \WC_PCSVIS_Product_Import
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Filter post meta values.
     *
     * @since 1.10.11
     * @version 1.10.11
     * @param mixed $value
     * @param string $key
     * @return mixed
     */
    public function filter_post_meta_value($value, $key)
    {
    }
    /**
     * Create new posts based on import information
     *
     * @return void
     */
    public function process_product($post)
    {
    }
    /**
     * Checks to see if a variation exists for a specific parent based on ID or SKU
     * @param  int $parent_id   The ID of the parent product
     * @param  int $id          The ID for the variation
     * @param  string $sku      The SKU for the variation
     * @return bool             True if the variation exists, false if not
     */
    public function variation_exists($parent_id, $id, $sku = '')
    {
    }
    /**
     * Parses the CSV file and prepares us for the task of processing parsed data
     *
     * @param string     $file      Path to the CSV file for importing
     * @param mixed      $mapping   Column mapping decoded from the import request.
     * @param int        $start_pos File position to start parsing at.
     * @param int|string $end_pos   File position to stop parsing at, or '' to parse to the end.
     * @return int|false|null File position after the last parsed row; null if the file could not be opened.
     */
    function import_start($file, $mapping, $start_pos, $end_pos)
    {
    }
    /**
     * Display import page title.
     *
     * @return void
     */
    function header()
    {
    }
    /**
     * Display introductory text and file upload form
     *
     * @return void
     */
    public function greet()
    {
    }
}
// WRCS: DEFINED_VERSION.
/**
 * Main CSV Import class
 *
 * @class   WC_Product_CSV_Import_Suite
 * @version 1.11.7
 */
class WC_Product_CSV_Import_Suite
{
    /**
     * Logging class
     *
     * @var WC_Logger|false
     */
    private static $logger = \false;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Add screen ID
     *
     * @param array $ids Screen IDs.
     */
    public function woocommerce_screen_ids($ids)
    {
    }
    /**
     * Catches an export request and exports the data. This class is only loaded in admin.
     *
     * @return void
     */
    public function catch_export_request()
    {
    }
    /**
     * Register importers for use
     *
     * @return void
     */
    public function register_importers()
    {
    }
    /**
     * Get meta data direct from DB, avoiding get_post_meta and caches
     *
     * @param string $message Log message.
     * @return void
     */
    public static function log($message)
    {
    }
    /**
     * Get meta data direct from DB, avoiding get_post_meta and caches
     *
     * @param int    $post_id Post ID.
     * @param string $meta_key Meta key.
     *
     * @return string
     */
    public static function get_meta_data($post_id, $meta_key)
    {
    }
    /**
     * Unserialize a value like maybe_unserialize(), but never instantiate objects.
     *
     * Guards against PHP object injection from CSV cells or postmeta that could
     * have been seeded through another route: allowed_classes => false turns any
     * O:-tagged entry into an inert __PHP_Incomplete_class instead of the real
     * class, and the contains_object() check refuses to keep that stand-in even
     * when it is nested inside an array, so a later unrestricted unserialize()
     * (e.g. a plain get_post_meta() call) can't instantiate the real class.
     *
     * @param mixed $value Value to maybe unserialize.
     *
     * @return mixed
     */
    public static function safe_maybe_unserialize($value)
    {
    }
    /**
     * Check whether a value contains an object at any nesting depth.
     *
     * A depth limit is enforced both to bound recursion cost and to safely
     * reject serialized arrays containing reference cycles (e.g. an array
     * referencing itself), which would otherwise recurse indefinitely.
     *
     * @param mixed $value Value to check.
     * @param int   $depth Current recursion depth.
     *
     * @return bool
     */
    public static function contains_object($value, $depth = 0)
    {
    }
    /**
     * Declares compatible features.
     *
     * Kept for backwards compatibility. Declarations now happen on every request, not only in the admin.
     *
     * @since 1.10.50
     * @deprecated 1.11.4 Use woocommerce_product_csv_import_suite_declare_feature_compatibility() instead.
     * @return void
     */
    public function declare_woocommerce_feature_compatibility()
    {
    }
}
/**
 * Read first data row from csv_file and check if it's encoded in specified
 * encoding.
 *
 * @since 1.10.8
 *
 * @param string          $csv_file Path to CSV file
 * @param string|string[] $encoding List of character encoding Encoding order may be specified
 *                                  by array or comma separated list string.
 *
 * @return string|false The detected character encoding or FALSE if the encoding
 *                     cannot be detected from the given string
 */
function wc_pcsvis_is_first_row_encoded_in($csv_file, $encoding)
{
}
/**
 * Advance a file handle past a UTF-8 BOM if one is present.
 *
 * The exporter writes a BOM (EF BB BF) before the first byte of the CSV so
 * that Excel renders Unicode correctly. The BOM sits immediately before the
 * opening enclosure quote of the first header field, e.g.:
 *
 *   <BOM>"post_title","post_excerpt",...
 *
 * fgetcsv() treats the enclosure character as special only when it is the
 * very first character of a field. Because the BOM precedes the quote,
 * fgetcsv() does not recognise the enclosure and reads the entire first field
 * as literal bytes — BOM + quotes and all — breaking the header mapping.
 *
 * The fix is to seek past the BOM in the file handle *before* calling
 * fgetcsv(), so that fgetcsv() sees "post_title",... and handles quoting
 * normally. Stripping from the parsed string after the fact is insufficient
 * because the dangling quote would remain.
 *
 * @since 1.10.83
 *
 * @param resource $handle Open file handle, positioned at byte 0.
 * @return void
 */
function wc_pcsvis_skip_bom($handle)
{
}
/**
 * Escape a string to be used in a CSV context
 *
 * Malicious input can inject formulas into CSV files, opening up the possibility
 * for phishing attacks and disclosure of sensitive information.
 *
 * Additionally, Excel exposes the ability to launch arbitrary commands through
 * the DDE protocol.
 *
 * @see http://www.contextis.com/resources/blog/comma-separated-vulnerabilities/
 * @see https://hackerone.com/reports/72785
 *
 * @since 1.10.11
 *
 * @param string $field CSV field to escape
 *
 * @return string
 */
function wc_pcsvis_esc_csv($field)
{
}
/**
 * Parse a CSV sale-end-date cell into a Unix timestamp.
 *
 * When the CSV value is a date without an explicit time, default the time to
 * 23:59:59 so the sale ends at the end of that day -- matching what the
 * WooCommerce Product Editor stores. Explicit times (including an explicit
 * `00:00:00`) are preserved so the importer honours what the CSV author wrote.
 *
 * @since 1.11.1
 *
 * @param string|null $value Raw CSV cell value.
 * @return int|false Unix timestamp on success, false for an empty or unparsable value.
 */
function wc_pcsvis_parse_sale_end_date($value)
{
}
/**
 * Declares compatible features.
 *
 * Hooked before the admin-only return below, because WooCommerce reads declarations on every request.
 *
 * @since 1.11.4
 * @return void
 */
function woocommerce_product_csv_import_suite_declare_feature_compatibility()
{
}
/**
 * WooCommerce fallback notice.
 *
 * @since 1.10.33
 * @return void
 */
function woocommerce_product_csv_import_suite_missing_wc_notice()
{
}
\define('WC_PCSVIS_FILE', __FILE__);
\define('WC_PCSVIS_VERSION', '1.11.8');
/**
 * Initializes the extension.
 *
 * @since 1.10.33
 * @return void
 */
function woocommerce_product_csv_import_suite_init()
{
}