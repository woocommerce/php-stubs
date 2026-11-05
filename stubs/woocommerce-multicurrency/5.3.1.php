<?php
/**
 * Generated stub declarations for woocommerce-multicurrency 5.3.1.
 * @see https://github.com/woocommerce/php-stubs
 */

namespace WOOMC {
    /**
     * Class API
     *
     * @package WOOMC
     */
    class API
    {
        /**
         * Currency conversion.
         *
         * @since 1.17.0
         *
         * @param int|float|string $value The value to convert.
         * @param string           $to    Currency to convert to.
         * @param string           $from  Currency to convert from.
         *
         * @return int|float|string
         * @noinspection OneTimeUseVariablesInspection
         */
        public static function convert($value, $to, $from)
        {
        }
        /**
         * Convert a value from the default (store base) currency to the
         * currently active currency. No-op when the active currency is the base
         * (Calculator::calculate short-circuits when $to === $from).
         *
         * Use this when downstream code holds a value known to be in base
         * currency and needs the active-currency equivalent for display or
         * subtraction against converted prices. Saves callers the
         * `convert($v, active_currency(), default_currency())` boilerplate.
         *
         * @since 4.7.1
         *
         * @param int|float|string $value Value in base currency.
         *
         * @return int|float|string Value in the active currency.
         * @noinspection PhpUnused
         */
        public static function convert_to_active($value)
        {
        }
        /**
         * Raw currency conversion.
         *
         * @since 1.17.0
         *
         * @param int|float|string $value The value to convert.
         * @param string           $to    Currency to convert to.
         * @param string           $from  Currency to convert from.
         *
         * @return int|float|string
         * @noinspection OneTimeUseVariablesInspection
         */
        public static function convert_raw($value, $to, $from)
        {
        }
        /**
         * The base ("Store") currency, unfiltered.
         *
         * @since 1.19.0
         * @return string
         */
        public static function default_currency()
        {
        }
        /**
         * Currently active currency.
         *
         * @since 2.11.0-rc.1
         * @return string
         */
        public static function active_currency()
        {
        }
        /**
         * Returns true if currency is active.
         *
         * @since 4.6.0
         *
         * @param string $currency Currency code.
         *
         * @return bool
         */
        public static function is_currency_active(string $currency): bool
        {
        }
        /**
         * List of enabled currency codes, including the store currency.
         *
         * @since 1.19.0
         * @return string[]
         */
        public static function enabled_currencies()
        {
        }
        /**
         * Returns true if currency is in the list of enabled.
         *
         * @since 2.14.1-rc.3
         *
         * @param string $currency Currency code.
         *
         * @return bool
         */
        public static function is_currency_enabled($currency)
        {
        }
        /**
         * List of enabled currency codes, excluding the store currency.
         *
         * @since 1.19.0
         * @return array
         */
        public static function extra_currencies()
        {
        }
        /**
         * List of enabled currency codes, excluding the currently active currency.
         *
         * @since 2.12.0-beta.1
         * @return array
         */
        public static function inactive_currencies()
        {
        }
        /**
         * All WooCommerce's currencies in the form Code => Name.
         *
         * @since 2.5.0
         * @return string[]
         */
        public static function currency_names()
        {
        }
        /**
         * Returns true if the currently selected currency is the store base currency.
         *
         * @since 2.8.5
         * @return bool
         */
        public static function is_default_currency_active()
        {
        }
        /**
         * Is price per product allowed?
         *
         * @since 2.11.0-rc.1
         * @return bool
         */
        public static function is_custom_pricing_enabled()
        {
        }
        /**
         * Get custom price.
         *
         * @since 2.10.0
         * @since 3.4.2-1 Moved to API and made public.
         *
         * @param \WC_Product $product     The product object.
         * @param             $price_type
         * @param bool        $include_tax Return price with tax?
         *
         * @return false|float|string False if product has no custom prices, not regular and not sale.
         */
        public static function get_custom_price($product, $price_type = '_price', $include_tax = false)
        {
        }
        /**
         * Returns true if product has NYP price set.
         *
         * @since 4.6.0
         *
         * @param \WC_Product $product Product instance
         *
         * @return bool
         */
        public static function is_product_nyp($product): bool
        {
        }
    }
    /**
     * Class AbstractConverter
     */
    abstract class AbstractConverter implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * DI: Price Controller.
         *
         * @var Price\Controller
         */
        protected $price_controller;
        /**
         * Constructor.
         *
         * @param Price\Controller $price_controller The price controller.
         */
        public function __construct(\WOOMC\Price\Controller $price_controller)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        abstract public function setup_hooks();
        /**
         * Pass-through to the Converter.
         *
         * @param string|int|float $value   The price.
         * @param \WC_Product      $product The Product object. Reserved for future use.
         * @param string           $to      Currency convert to. Default is the currently selected.
         * @param string           $from    Currency convert from. Default is store base.
         * @param bool             $reverse If this is a reverse conversion.
         *
         * @return float|int|string
         */
        public function convert($value, $product = null, $to = '', $from = '', $reverse = false)
        {
        }
        /**
         * Pass-through to the {@see \WOOMC\Price\Controller::convert_raw}
         *
         * @param string|int|float $value   The price.
         * @param \WC_Product      $product The Product object. Reserved for future use.
         * @param string           $to      Currency convert to. Default is the currently selected.
         * @param string           $from    Currency convert from. Default is store base.
         *
         * @return float|int|string
         */
        public function convert_raw($value, $product = null, $to = '', $from = '')
        {
        }
        /**
         * Pass-through to the {@see \WOOMC\Price\Controller::convert_shipping_fee()}
         *
         * @since 4.2.0
         *
         * @param string|int|float $value   The price.
         * @param \WC_Product      $product The Product object. Reserved for future use.
         * @param string           $to      Currency convert to. Default is the currently selected.
         * @param string           $from    Currency convert from. Default is store base.
         *
         * @return float|int|string
         */
        public function convert_shipping_fee($value, $product = null, $to = '', $from = '')
        {
        }
        /**
         * True if no need to convert (the base currency is active, etc.)
         *
         * @param \WC_Product|null $product The product object.
         *
         * @return bool
         */
        protected function is_no_conversion_required($product = null)
        {
        }
        /**
         * True if we need to convert the value right now and skip any further checking.
         *
         * @since 2.10.0
         *
         * @param string           $price_type Regular, Sale, etc.
         * @param \WC_Product|null $product    The product object.
         *
         * @return bool
         */
        protected function is_convert_as_is($price_type, $product = null)
        {
        }
        /**
         * Generic price conversion.
         *
         * @param string|int|float $value       The price.
         * @param string           $price_type  Regular, Sale, etc.
         * @param \WC_Product      $product     The product object.
         * @param bool             $include_tax Return price with tax?
         *
         * @return string
         * @noinspection PhpConditionAlreadyCheckedInspection
         */
        public function get_price($value, $price_type, $product, $include_tax = false)
        {
        }
        /**
         * Get custom price.
         *
         * @since 2.10.0
         *
         * @param \WC_Product $product     The product object.
         * @param             $price_type
         * @param bool        $include_tax Return price with tax?
         *
         * @return false|float|string False if product has no custom prices, not regular and not sale.
         */
        protected function get_custom_price($product, $price_type, $include_tax = false)
        {
        }
    }
}
namespace WOOMC\Abstracts {
    /**
     * Class Hookable.
     *
     * @since 2.7.1
     */
    abstract class Hookable implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
    }
}
namespace WOOMC\Admin\Analytics {
    /**
     * Class Admin\Analytics\Controller
     *
     * @since 2.5.0
     */
    class Controller extends \WOOMC\Abstracts\Hookable
    {
        /**
         * Name of the JS script.
         *
         * @since 2.5.0
         * @var string
         */
        protected const JS_NAME = 'analytics';
        /**
         * WC-Admin pages that need the currency filter.
         *
         * @since 2.5.0
         * @var string[]
         */
        protected const ANALYTICS_PAGES = array('overview', 'orders', 'revenue', 'products', 'categories', 'coupons', 'taxes', 'variations');
        /**
         * Var is_legacy.
         *
         * @since 4.4.5
         *
         * @var bool
         */
        protected static $is_legacy = false;
        /**
         * Stored active currency for export context (where $_GET is unavailable).
         *
         * @since 4.6.4
         * @var string
         */
        protected $active_currency = '';
        /**
         * Setup actions and filters.
         *
         * @since        2.5.0
         * @return void
         * @noinspection ReturnTypeCanBeDeclaredInspection
         */
        public function setup_hooks()
        {
        }
        /**
         * Add currency settings to the AssetDataRegistry.
         *
         * @since        2.5.0
         * @since        2.14.0 Decode HTML entity in currency names. Ex: "Polish z&#x142;oty".
         * @noinspection ReturnTypeCanBeDeclaredInspection
         */
        public function add_currency_settings()
        {
        }
        /**
         * Return the active currency: from _GET or store default.
         *
         * @since        2.5.0
         * @return string
         * @noinspection ReturnTypeCanBeDeclaredInspection
         */
        protected function get_active_currency()
        {
        }
        /**
         * Add currency to the admin GET query arguments.
         *
         * @since        2.5.0
         *
         * @param array $args
         *
         * @return array
         * @noinspection ReturnTypeCanBeDeclaredInspection
         */
        public function apply_currency_arg($args)
        {
        }
        /**
         * Is SQL_with_subquery?
         * When a report is filtered by specific product or category,
         * Analytics first makes a subquery with a GROUP BY clause.
         * In subquery, we need the join, where and select restrictions by currency.
         * After that, it makes a "wrapper" query, with the subquery is one of the "fields".
         * The wrapper query (a) cannot use JOIN; (b) must use the `currency` field from the subquery.
         * Without this "hack", queries fail with
         * "WordPress database error Unknown column 'wp_wc_order_stats.order_id' in 'on clause' for query"
         *
         * @since        2.15.2-beta.1
         *
         * @param string $context
         *
         * @return bool
         * @noinspection ReturnTypeCanBeDeclaredInspection
         */
        protected function is_sql_with_subquery($context)
        {
        }
        /**
         * Add currency to the JOIN clause.
         *
         * @since        2.5.0
         *
         * @param string[] $clauses The array of clauses.
         * @param string   $context Context.
         *
         * @return string[]
         * @noinspection ReturnTypeCanBeDeclaredInspection
         */
        public function filter__clauses_join($clauses, $context)
        {
        }
        /**
         * Add currency to the WHERE clause.
         *
         * @since        2.5.0
         *
         * @param string[] $clauses The array of clauses.
         * @param string   $context Context.
         *
         * @return string[]
         * @noinspection ReturnTypeCanBeDeclaredInspection
         */
        public function filter__clauses_where($clauses, $context)
        {
        }
        /**
         * Are we on the WooCommerce->Customers page?
         *
         * @since 2.15.3
         *
         * @param string $context The context of the filters.
         *
         * @return bool
         */
        protected function is_on_customers_page($context): bool
        {
        }
        /**
         * Add currency to the SELECT clause.
         *
         * @since        2.5.0
         *
         * @param string[] $clauses The array of clauses.
         * @param string   $context Context.
         *
         * @return string[]
         * @noinspection ReturnTypeCanBeDeclaredInspection
         */
        public function filter__clauses_select($clauses, $context)
        {
        }
        /**
         * Capture currency from the REST export request body.
         * Fires on the synchronous POST to /wc-analytics/reports/{type}/export.
         *
         * @since        4.6.4
         *
         * @param mixed            $result  Response to replace (null to not hijack).
         * @param \WP_REST_Server  $server  Server instance.
         * @param \WP_REST_Request $request Request.
         *
         * @return mixed Unmodified $result.
         * @noinspection PhpUnusedParameterInspection
         */
        public function capture_export_rest_currency($result, $server, $request)
        {
        }
        /**
         * Resolve currency for an export request from available sources.
         *
         * @since 4.6.4
         *
         * @param array            $report_args Report arguments from the POST body.
         * @param \WP_REST_Request $request     REST request.
         *
         * @return string Currency code or empty string.
         */
        protected function resolve_export_currency($report_args, $request): string
        {
        }
        /**
         * Capture currency from Action Scheduler export args (async batch).
         *
         * @since        4.6.4
         *
         * @param int    $page_number Page number.
         * @param string $export_id   Export ID.
         * @param string $report_type Report type.
         * @param array  $report_args Report arguments.
         *
         * @noinspection PhpUnusedParameterInspection
         * @noinspection ReturnTypeCanBeDeclaredInspection
         */
        public function set_export_currency($page_number, $export_id, $report_type, $report_args)
        {
        }
        /**
         * Add "Currency" column header to CSV export.
         *
         * @since        4.6.4
         *
         * @param array $columns Export columns.
         *
         * @return array
         * @noinspection ReturnTypeCanBeDeclaredInspection
         */
        public function add_export_currency_column($columns)
        {
        }
        /**
         * Add "Currency" value to each CSV export row.
         *
         * @since        4.6.4
         *
         * @param array $export_item Prepared export item.
         * @param array $item        Raw item data.
         *
         * @return array
         * @noinspection ReturnTypeCanBeDeclaredInspection
         * @noinspection PhpUnusedParameterInspection
         */
        public function add_export_currency_value($export_item, $item)
        {
        }
        /**
         * Register the JS.
         *
         * @since        2.5.0
         * @since        2.15.5 Do not use PageController or Loader classes (WC backward incompatibility and warnings).
         * @noinspection ReturnTypeCanBeDeclaredInspection
         */
        public function add_extension_register_script()
        {
        }
    }
}
namespace WOOMC\Admin\Appearance {
    /**
     * Class Customizer
     *
     * @since 3.2.4-2
     */
    class Customizer extends \WOOMC\Abstracts\Hookable
    {
        /**
         * Setup actions and filters.
         *
         * @since 3.2.4-2
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Register custom menu item types.
         *
         * @since 3.2.4-2
         *
         * @param array $item_types The item types.
         *
         * @return array
         */
        public function register_customize_nav_menu_item_types($item_types)
        {
        }
        /**
         * Register custom menu items.
         *
         * @since        3.2.4-2
         *
         * @param array  $items       The items to register.
         * @param string $item_type   The type of the item (currency-switcher, currency-selector, rate-display).
         * @param string $item_object The object of the item (woomc-currency-switcher_nav, woomc-currency-selector_nav, woomc-rate-display_nav).
         * @param int    $page        The page of the item
         *
         * @return array
         * @noinspection PhpUnusedParameterInspection
         */
        public function register_customize_nav_menu_items($items = array(), $item_type = '', $item_object = '', $page = 0)
        {
        }
    }
    /**
     * Class Menus
     *
     * @since 2.11.0
     */
    class Menus extends \WOOMC\Abstracts\Hookable
    {
        /**
         * A fictitious menu URL serves as a flag to replace with a shortcode output.
         *
         * @since 2.11.0
         * @var string
         */
        const MENU_ITEM_URL = '#woomc-shortcode';
        /**
         * The CSS class added to the menus by default.
         *
         * @since 2.11.0
         * @var string
         */
        const MAIN_CSS_CLASS = 'woomc-shortcode';
        /**
         * Setup actions and filters.
         *
         * @since 2.11.0
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Add custom nav meta box.
         *
         * @since 2.11.0
         * @return void
         */
        public function action__add_meta_box()
        {
        }
        /**
         * Menu items.
         *
         * @since 3.2.4-2
         * @return string[][]
         */
        public static function items()
        {
        }
        /**
         * Output menu links.
         *
         * @since        2.11.0
         * @since        3.2.1-0 Selector is no longer marked as "deprecated".
         *
         * @noinspection PhpArrayWriteIsNotUsedInspection
         */
        public function callback__nav_menu_links()
        {
        }
    }
}
namespace WOOMC\Admin {
    /**
     * Class Compatibility
     *
     * @package WOOMC\Admin
     */
    class Compatibility implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * Setup actions and filters.
         *
         * @see   Env::in_wp_admin
         * @since 1.18.3 Assuming that we run within `in_wp_admin` block, can skip checking for user existence.
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Check incompatible plugins.
         */
        public function action__admin_init()
        {
        }
        /**
         * Show or hide the notice.
         *
         * @param string $class_name  Plugin's class name.
         * @param string $plugin_name Plugin's name.
         */
        protected function show_hide($class_name, $plugin_name)
        {
        }
        /**
         * Notice: Incompatible with ...
         *
         * @param string $with The name of the incompatible plugin.
         *
         * @return string
         */
        protected function notice_incompatible($with)
        {
        }
    }
}
namespace WOOMC\Admin\CustomPrice {
    /**
     * Class Controller.
     *
     * @since 2.4.0
     */
    class Controller implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
    }
    /**
     * Class CustomPrice/Simple
     *
     * @package WOOMC\Admin\CustomPrice
     */
    class Simple implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * True if the product type is one of those we support.
         *
         * @since 2.7.2 Support Product Bundle.
         * @since 2.13.0-rc.1 Support WC_Product_Mix_and_Match.
         *
         * @param \WC_Product $product Product instance.
         *
         * @return bool
         */
        protected function is_my_product($product)
        {
        }
        /**
         * Build array of meta keys depending on the product type.
         *
         * @param \WC_Product $product The product object.
         *
         * @return string[]
         */
        protected function setup_keys($product)
        {
        }
        /**
         * Introduction text printed above the metaboxes.
         *
         * @return void
         */
        protected function create_intro()
        {
        }
        /**
         * Add metaboxes to the Product Edit in admin.
         *
         * @return void
         */
        public function action__create()
        {
        }
        /**
         * Process metaboxes upon edit save.
         *
         * @see \WC_Meta_Box_Product_Data::save
         *
         * @param int $post_id Post ID.
         *
         * @return void
         */
        public function action__woocommerce_process_product_meta($post_id)
        {
        }
    }
    /**
     * Class CustomPrice/Variable
     *
     * @package WOOMC\Admin\CustomPrice
     */
    class Variable implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * True if the product type is one of those we support.
         *
         * @param \WC_Product $product Product instance.
         *
         * @return bool
         */
        protected function is_my_product($product)
        {
        }
        /**
         * Build array of meta keys depending on the product type.
         *
         * @param \WC_Product $product The product object.
         *
         * @return string[]
         */
        protected function setup_keys($product)
        {
        }
        /**
         * Introduction text printed above the metaboxes.
         *
         * @return void
         */
        protected function create_intro()
        {
        }
        /**
         * Add metaboxes to the Product Edit - Variations tab in admin.
         *
         * @param int      $loop           Position in the loop.
         * @param array    $variation_data Variation data. (Unused).
         * @param \WP_Post $variation      The product variation Post.
         *
         * @return void
         * @noinspection PhpUnusedParameterInspection
         */
        public function action__create($loop, $variation_data, $variation)
        {
        }
        /**
         * Process metaboxes upon edit save.
         *
         * @param int $loop         Position in the loop of saving.
         * @param int $variation_id Variation ID.
         *
         * @return void
         */
        public function save_product_variation($variation_id, $loop)
        {
        }
    }
}
namespace WOOMC\Admin {
    /**
     * Class EditCurrency
     */
    class EditCurrency extends \WOOMC\Abstracts\Hookable
    {
        /**
         * Nonce name.
         *
         * @var string
         */
        const NONCE_NAME = 'woomc_nonce_name_currency';
        /**
         * Nonce action.
         *
         * @var string
         */
        const NONCE_ACTION = 'woomc_nonce_action_currency';
        /**
         * List of the admin screens where currency editing is applicable.
         *
         * @var string[]
         */
        protected $screen = array('shop_order', 'shop_subscription');
        /**
         * List of fields for the metabox.
         *
         * @var array[]
         */
        protected $meta_fields = array();
        /**
         * The Rate Storage instance.
         *
         * @since 2.9.4-rc.1
         * @var  \WOOMC\Rate\Storage
         */
        protected $rate_storage;
        /**
         * EditCurrency constructor.
         *
         * @since 2.9.4-rc.1 DI Rate Storage.
         *
         * @param \WOOMC\Rate\Storage $rate_storage The Rate Storage instance.
         */
        public function __construct(\WOOMC\Rate\Storage $rate_storage)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Add metaboxes.
         *
         * @since    1.8.0
         * @since    2.16.4 HPOS support: use wc_get_page_screen_id.
         * @internal action
         */
        public function add_meta_boxes()
        {
        }
        /**
         * Metabox callback.
         *
         * @param \WP_Post $post The Post object.
         *
         * @internal callback.
         */
        public function meta_box_callback($post)
        {
        }
        /**
         * Metabox content.
         *
         * @since    1.8.0
         * @since    2.16.4 HPOS support: use $order->get_currency().
         *
         * @param \WP_Post|\WC_Order $post_or_order_object The Post or Order object.
         */
        protected function field_generator($post_or_order_object)
        {
        }
        /**
         * Put values in a table row.
         *
         * @param string $th Content of the <th> tag.
         * @param string $td Content of the <td> tag.
         *
         * @return string
         */
        protected function format_rows($th, $td)
        {
        }
        /**
         * Save the metabox fields.
         *
         * @since    1.8.0
         * @since    2.16.4 HPOS support: use $order->update_meta_data().
         * @since    4.6.3 Use woocommerce_process_shop_order_meta hook (works in both HPOS and CPT).
         *
         * @param int $order_id Order ID.
         *
         * @internal action.
         */
        public function save_fields($order_id)
        {
        }
    }
    /**
     * Class Menu
     *
     * @package WOOMC\Admin
     */
    class Menu implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * Menu slug.
         *
         * @var string
         */
        const SLUG_MAIN = 'woomc';
        /**
         * Menu position.
         *
         * @var string
         */
        const POSITION = 56;
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Create main menu.
         */
        public function action__setup_main_menu()
        {
        }
        /**
         * Add pointer to the Woo Settings.
         */
        public function action__add_settings_menu()
        {
        }
        /**
         * Remove the non-existent main menu page.
         */
        public function action__admin_head()
        {
        }
        /**
         * Generate HTML tag for submenu icons.
         *
         * @param string $dashicons_id Dashicon ID.
         *
         * @return string
         */
        public static function icon_tag($dashicons_id)
        {
        }
        /**
         * Register the navigation items in the WooCommerce navigation.
         *
         * @since 2.9.4-rc.1
         * @since 2.9.5 Check if WC Admin is active.
         */
        public function register_navigation_items()
        {
        }
    }
    /**
     * Class Notices
     *
     * @since   1.10.0
     *
     * @package WOOMC\Admin
     */
    class Notices
    {
        /**
         * Public access to the __CLASS__.
         *
         * @return string
         */
        public static function get_class()
        {
        }
        /**
         * Plugin activated.
         *
         * @since 1.15.0 Do not display this notice if requirements not met.
         *
         * @param string $url_settings      The settings URL.
         * @param string $url_documentation The documentation URL.
         */
        public static function activation($url_settings, $url_documentation)
        {
        }
        /**
         * Method get_wrapper_error.
         *
         * @since 3.2.4-2
         *
         * @param string $msg Text to wrap in "error".
         *
         * @return string
         */
        protected static function get_wrapper_error($msg)
        {
        }
        /**
         * Build one WordPress-style admin notice, or '' for an empty message.
         *
         * The general notice wrapper (moved here from CacheAdvisor). {@see self::get_wrapper_error} is the
         * fixed warning+inline special case; consolidating the two (and reconciling the auto-icon
         * difference) is deferred to the HTML/library pass - see the notices-consolidation issue.
         *
         * @since 5.0.0
         *
         * @param string $severity 'info' | 'warning' | 'error' (the `notice-<severity>` class).
         * @param string $message  Already-localized message text (plain, no markup).
         * @param bool   $inline   True keeps the notice in place; false lets core hoist it to the top.
         *
         * @return string
         */
        public static function notice(string $severity, string $message, bool $inline = true): string
        {
        }
        /**
         * Method get_txt_warning.
         *
         * @since 3.2.4-2
         * @return string
         */
        public static function get_txt_warning()
        {
        }
        /**
         * Method get_error_wcpay.
         *
         * @since 3.2.4-2
         * @return string
         */
        public static function get_error_wcpay()
        {
        }
        /**
         * Method get_error_incompatible_plugins.
         *
         * @since 3.2.4-2
         *
         * @param string[] $plugin_names Names of the incompatible plugins.
         *
         * @return string
         */
        public static function get_error_incompatible_plugins($plugin_names)
        {
        }
    }
    /**
     * Class StatusReport
     */
    class StatusReport extends \WOOMC\Dependencies\TIVWP\WC\AbstractStatusReport
    {
        /**
         * Add or modify the report key-value options array.
         *
         * @since 2.6.7
         *
         * @param array $options The options to report.
         *
         * @return array
         */
        public function filter__tivwp_wc_status_report_options($options)
        {
        }
        /**
         * Render the report.
         *
         * @internal action.
         */
        public function action__woocommerce_system_status_report()
        {
        }
    }
    /**
     * Class Admin\Tools
     */
    class Tools implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Button(s) on the WooCommerce > Status > Tools page.
         *
         * @param array $tools All tools array.
         *
         * @return array
         * @uses Tools::reset_all_settings
         */
        public function tools($tools)
        {
        }
        /**
         * Database cleanup.
         *
         * @return string
         */
        public static function reset_all_settings()
        {
        }
        /**
         * Export settings.
         *
         * @since 2.5.0
         *
         * @return string
         */
        public function export_all_settings()
        {
        }
        /**
         * Import settings.
         *
         * @since 2.5.0
         *
         * @return string
         */
        public function import_all_settings()
        {
        }
    }
}
namespace WOOMC {
    /**
     * Class App
     */
    class App extends \WOOMC\Dependencies\TIVWP\AbstractApp implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * The WooCommerce base URL.
         *
         * @since 4.2.1-0
         * @var string
         */
        public const URL_WOO = 'https://woocommerce.com/';
        /**
         * To display a message after activation.
         *
         * @var string
         */
        private const ACTIVATION_TRANSIENT = 'woocommerce-multicurrency-activated';
        /**
         * Hook priorities - they may compete, so the same priority does not always work.
         *
         * @since 4.6.0
         */
        public const HOOK_PRIORITY = array('pre_product_get_price' => array('WCSubscriptions' => self::HOOK_PRIORITY_EARLY, 'WCNameYourPrice' => self::HOOK_PRIORITY_EARLY - 1));
        /**
         * Flag used to disable changing the settings.
         *
         * @var bool
         */
        protected $read_only_settings = false;
        /**
         * Getter for $this->read_only_settings.
         *
         * @return bool
         */
        public function isReadOnlySettings()
        {
        }
        /**
         * Setter for $this->read_only_settings.
         *
         * @param bool $read_only_settings True/False.
         */
        public function setReadOnlySettings($read_only_settings)
        {
        }
        /**
         * The support URL.
         *
         * @var string
         */
        protected $url_support = self::URL_WOO . 'my-account/contact-support/';
        /**
         * The documentation URL.
         *
         * @var string
         */
        protected $url_documentation = self::URL_WOO . 'document/multi-currency/';
        /**
         * Getter for $this->url_support.
         *
         * @return string
         */
        public function getUrlSupport()
        {
        }
        /**
         * Getter for $this->url_documentation.
         *
         * @return string
         */
        public function getUrlDocumentation()
        {
        }
        /**
         * The current User.
         *
         * @var User
         */
        protected $user;
        /**
         * Getter for $this->user.
         *
         * @return User
         */
        public function getUser()
        {
        }
        /**
         * Price calculator instance.
         *
         * @since 2.6.0
         *
         * @var Price\Calculator
         */
        protected $price_calculator;
        /**
         * Getter: Price calculator instance.
         *
         * @since 2.6.0
         * @return Price\Calculator
         */
        public function getPriceCalculator()
        {
        }
        /**
         * Currency controller instance.
         *
         * @since 2.6.0
         *
         * @var Currency\Controller
         */
        protected $currency_controller;
        /**
         * Getter: Currency controller instance.
         *
         * @since 2.6.0
         * @return Currency\Controller
         */
        public function getCurrencyController()
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Do stuff on plugin deactivation.
         *
         * @since 1.20.0
         */
        public function on_deactivation()
        {
        }
        /**
         * Set transient to flag that the plugin was just activated.
         */
        public function set_activation_transient()
        {
        }
        /**
         * Display the activation notice once.
         */
        public function display_activation_notice()
        {
        }
        /**
         * This runs only after we checked the prerequisites.
         *
         * @internal filter.
         */
        public function setup_hooks_after_plugins_loaded()
        {
        }
        /**
         * Recalculate totals on "refresh fragments" AJAX.
         * Without this, the mini-cart widget and the top bar cart show wrong totals when the currency is switched.
         *
         * @since    1.9.0
         *
         * @internal action.
         */
        public function action__wc_ajax_get_refreshed_fragments()
        {
        }
        /**
         * Use minimized JS or the source.
         * === FOR INTERNAL USE BY TIV.NET DEVELOPERS ONLY ===
         *
         * @since 2.14.0
         *
         * @return string
         */
        public function getExtJS(): string
        {
        }
    }
    /**
     * Class Cookie
     */
    class Cookie
    {
        /**
         * Set the cookie at frontend.
         * When cookies set by server do not work for some reason (disabled by hosting, etc.).
         * Note: this breaks caching that uses mod_rewrite to serve pages from disk.
         *
         * @since 2.14.4-rc.1
         * @since 4.3.0-2 Use COOKIEPATH and COOKIE_DOMAIN
         *
         * @param string     $name    Name.
         * @param string|int $value   Value.
         * @param int|float  $max_age Expiration.
         *
         * @return void
         */
        protected static function set_with_js($name, $value, $max_age = YEAR_IN_SECONDS)
        {
        }
        /**
         * Set the cookie.
         *
         * @since 2.6.3-rc.2 Do not set JS cookie if the page is cached in browser. Use JS cookies optionally.
         * @since 2.6.7-beta.2 Added $force parameter.
         * @since 2.14.4-rc.1 Refactored to set cookie only if changed.
         * @since 4.3.0-2 Use COOKIEPATH and COOKIE_DOMAIN
         *
         * @param string     $name    Name.
         * @param string|int $value   Value.
         * @param int|float  $max_age Expiration.
         * @param bool       $force   Allow repeated setcookie calls.
         *
         * @return void
         */
        public static function set($name, $value, $max_age = YEAR_IN_SECONDS, $force = false)
        {
        }
        /**
         * Delete a cookie (expire it now). Mirrors {@see set()} on both the client-side-JS
         * and backend paths, and clears it from $_COOKIE so the rest of the request sees it gone.
         *
         * @since 5.0.0
         *
         * @param string $name Name.
         *
         * @return void
         */
        public static function delete($name)
        {
        }
    }
}
namespace WOOMC\Currency {
    /**
     * Class Currency Controller
     */
    class Controller implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * The Currency Detector instance.
         *
         * @var Detector
         */
        protected $currency_detector;
        /**
         * True if currency filtering is enabled
         *
         * @since 2.6.0
         * @var bool
         */
        protected $currency_filtering_enabled = true;
        /**
         * Getter: $currency_filtering_enabled
         *
         * @since 2.6.0
         * @return bool
         */
        public function isCurrencyFilteringEnabled()
        {
        }
        /**
         * Setter: $currency_filtering_enabled
         *
         * @since 2.6.0
         *
         * @param bool $true_false True/False.
         *
         * @return bool
         */
        protected function setCurrencyFilteringEnabled($true_false)
        {
        }
        /**
         * Enable currency filtering.
         *
         * @since 2.6.0
         * @return bool
         */
        public function enable_currency_filtering()
        {
        }
        /**
         * Disable currency filtering.
         *
         * @since 2.6.0
         * @return bool
         */
        public function disable_currency_filtering()
        {
        }
        /**
         * Currency Controller constructor.
         *
         * @param Detector $currency_detector The Currency Detector instance.
         */
        public function __construct(\WOOMC\Currency\Detector $currency_detector)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Change the currency symbol to the one from our settings panel.
         *
         * @param string $currency_symbol The currency symbol.
         * @param string $currency        The currency code.
         *
         * @return string
         */
        public function filter__woocommerce_currency_symbol($currency_symbol, $currency)
        {
        }
        /**
         * Filter the {@see get_woocommerce_currency()} to return the active currency instead of the Store currency.
         *
         * @param string $currency The currency code.
         *
         * @return string
         */
        public function filter__woocommerce_currency($currency)
        {
        }
        /**
         * Add HTML body classes for possible use in CSS rules.
         *
         * @since 1.15.0
         * @since 1.20.1 Added `woocommerce-multicurrency-reloaded` class.
         * @since 2.0.0 Do not use body class for "reloaded" check.
         *
         * @param array $classes Body Classes.
         *
         * @return array
         */
        public function filter__body_class($classes)
        {
        }
    }
    /**
     * Class Currency\Decimals.
     */
    class Decimals implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * Default number of price decimals.
         * Same as hard-coded in {@see \wc_get_price_decimals}.
         *
         * @since 1.18.0
         * @var int
         */
        const DEFAULT_NUMBER_OF_DECIMALS = 2;
        /**
         * Decimals of currency.
         *
         * @since   1.5.0
         *
         * @var array {
         * @type string The currency code.
         * @type int The number of decimals.
         * }
         */
        protected static $decimals_of_currency = array('BIF' => 0, 'CLP' => 0, 'CVE' => 0, 'DJF' => 0, 'GNF' => 0, 'ISK' => 0, 'JPY' => 0, 'KMF' => 0, 'KRW' => 0, 'PYG' => 0, 'RWF' => 0, 'UGX' => 0, 'UYI' => 0, 'VND' => 0, 'VUV' => 0, 'XAF' => 0, 'XOF' => 0, 'XPF' => 0, 'BHD' => 3, 'IQD' => 3, 'JOD' => 3, 'KWD' => 3, 'LYD' => 3, 'OMR' => 3, 'TND' => 3, 'CLF' => 4, 'HUF' => 0, 'TWD' => 0, 'BTC' => 8);
        /**
         * Default decimals set in the General settings.
         *
         * @var int
         */
        protected static $store_base_decimals = self::DEFAULT_NUMBER_OF_DECIMALS;
        /**
         * Constructor.
         *
         * @since   1.5.0
         * @since   2.0.0 Do not need to pass Detector.
         */
        public function __construct()
        {
        }
        /**
         * Setup actions and filters.
         *
         * @since   1.5.0
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Filter the decimals.
         *
         * @since 1.5.0
         * @since 1.16.0 Use 'wc_get_price_decimals' tag instead of 'pre_option_woocommerce_price_num_decimals'.
         * @since 1.18.0 Revert to 'pre_option_...' because many extensions do not use 'wc_get_...'.
         * @since 2.0.0 Filter always, do not compare with the store currency.
         * @since 2.9.4-rc.1 Special treatment for My Account pages.
         */
        public function filter_the_decimals()
        {
        }
        /**
         * Returns the number of decimals of the currently active currency.
         *
         * @since    1.5.0
         * @since    2.0.0 Do not use the initial currency from Detector and get it each time.
         *           Fixes the problem with wrong decimals when no forced currency is set.
         * @since    4.7.1 Return store base decimals when called inside WC's variable-product
         *           cache build. WC's read_price_data calls wc_format_decimal() on each variation
         *           BEFORE firing woocommerce_variation_prices_array (where Pricing converts the
         *           value). With active=JPY (0 decimals) it would round 19.99 to "20" first,
         *           producing 4000 instead of 3998 after conversion. Using base decimals there
         *           preserves precision for the conversion that follows.
         *
         * @return int
         *
         * @internal filter.
         */
        public function decimals_of_active_currency()
        {
        }
        /**
         * Returns the number of decimals of the currency.
         *
         * @since 1.16.0
         * @since 1.18.0 Use hard-coded default of 2 instead of reading from the options.
         * @since 1.18.1 Do not return decimals higher than the one set in the General Settings.
         * @since 2.12.2 Ignore General Settings for low-rate (BTC) currencies.
         *
         * @param string $currency The currency code.
         *
         * @return int
         */
        public static function get_price_decimals($currency)
        {
        }
        /**
         * Temporary var to pass value between methods.
         *
         * @since 2.9.4-rc.1
         * @var string
         */
        protected $tmp_order_currency = '';
        /**
         * If we can detect the order currently viewed, set decimals according to the order currency.
         * If order currency is the same as store currency, do nothing.
         *
         * @since 2.9.4-rc.1
         */
        protected function maybe_set_decimals_by_order_currency()
        {
        }
        /**
         * If we are viewing an order on My Account, store the order currency in a temporary variable.
         *
         * @since 2.9.4-rc.1
         */
        protected function detect_currency_of_currently_viewed_order()
        {
        }
        /**
         * Returns the number of decimals of the currently viewed order.
         *
         * @since    2.9.4-rc.1
         *
         * @return int
         *
         * @internal filter.
         */
        public function decimals_of_order_currency()
        {
        }
    }
    /**
     * Class Detector
     */
    class Detector extends \WOOMC\Abstracts\Hookable
    {
        /**
         * Cookie name: forced currency.
         *
         * @var string
         */
        public const COOKIE_FORCED_CURRENCY = 'woocommerce_multicurrency_forced_currency';
        /**
         * HTTP GET parameter to force currency.
         *
         * @var string
         */
        public const GET_FORCED_CURRENCY = 'currency';
        /**
         * Cookie name: language (if multilingual).
         *
         * @since 2.6.1
         *
         * @var string
         */
        public const COOKIE_LANGUAGE = 'woocommerce_multicurrency_language';
        /**
         * Cookie name: presence flag marking the active currency as NOT the cache currency.
         *
         * Drives REJECT on direct-serve / reject cache backends: the cache-currency visitor
         * carries no such cookie and is served from the static cache; everyone else carries
         * `woomc-no-cache=1` and bypasses to fresh PHP. Set/cleared in set_currency_cookie().
         *
         * @since 5.0.0
         *
         * @var string
         */
        public const COOKIE_NO_CACHE = 'woomc-no-cache';
        /**
         * Prefix for the log message when detected.
         *
         * @since 2.14.1-rc.3
         * @var string
         */
        public const LOG_PREFIX_DETECTED = 'DETECTED';
        /**
         * Prefix for the log message when validation failed.
         *
         * @since 2.14.1-rc.3
         * @var string
         */
        public const LOG_PREFIX_VALIDATION_FAILED = 'VALIDATION FAILED';
        /**
         * Language to currency.
         *
         * @var string[]
         */
        protected $language_to_currency;
        /**
         * Default currency.
         *
         * @var string
         */
        protected $default_currency;
        /**
         * Cache detected currency.
         *
         * @since 2.14.1-rc.3 Moved to the class variable.
         * @var string
         */
        protected $cached_detect = '';
        /**
         * Getter for $this->default_currency.
         *
         * @return string
         */
        public function getDefaultCurrency()
        {
        }
        /**
         * Setter for $this->default_currency.
         *
         * @param string $default_currency The currency.
         */
        public function setDefaultCurrency($default_currency)
        {
        }
        /**
         * Setter for $this->language_to_currency.
         *
         * @param string[] $language_to_currency Language-to-currency array.
         */
        public function setLanguageToCurrency($language_to_currency)
        {
        }
        /**
         * DAO.
         *
         * @var  \WOOMC\DAO\IDAO
         */
        protected $dao;
        /**
         * Internal var to override currency.
         *
         * @since 3.2.4-0
         *
         * @var string
         */
        protected static $override_currency = '';
        /**
         * Setter _override_currency
         *
         * @since 3.2.4-0
         *
         * @param string $override_currency The currency code.
         */
        public static function set_override_currency($override_currency = '')
        {
        }
        /**
         * Currency\Detector constructor.
         */
        public function __construct()
        {
        }
        /**
         * Returns true if the language cookie is set and matches the parameter.
         *
         * @since 2.6.3-rc.2
         *
         * @param string $language The language code.
         *
         * @return bool
         */
        protected function is_language_cookie_matches($language)
        {
        }
        /**
         * Returns true if the language is linked to a currency in the settings.
         *
         * @since 2.14.1-rc.3
         *
         * @param string $language The language code.
         *
         * @return bool
         */
        protected function is_language_linked_to_currency($language)
        {
        }
        /**
         * Compare the current language to the previously set cookie.
         * (Only if `language_to_currency` is set for this language).
         *
         * @since 2.6.1
         *
         * @param string $language The language code.
         *
         * @return bool True if language does not match the cookie, so has changed.
         */
        protected function is_language_switched($language)
        {
        }
        /**
         * The currency is linked to the language (on multilingual sites).
         * - site is multilingual
         * - the language just switched or was never set before (implies `language_to_currency` is set).
         *
         * @since 2.6.3-rc.2
         *
         * @return string Detected currency or empty string.
         */
        protected function detect_by_language()
        {
        }
        /**
         * Detect if the currency is set in the cookie.
         *
         * @since 2.6.3-rc.2
         * @return string Detected currency or empty string.
         */
        protected function detect_by_cookie()
        {
        }
        /**
         * The currency is defined by the user's location, if one of the enabled currencies.
         *
         * @since 1.4.0
         * @since 1.16.0 Validate if $user is not `null` (for unit tests).
         * @since 2.1.0 Save the user's currency as forced cookie if not multilingual.
         * @since 2.6.0 Only check User if geolocation is enabled and ignore obvious robots.
         * @since 2.6.3-rc.2 Set forced cookie regardless, multilingual or not (in the caller).
         * @since 2.14.1-rc.3 Additional debug.
         * @return string Detected currency or empty string.
         */
        protected function detect_by_geolocation()
        {
        }
        /**
         * Get the forced currency value from URL.
         *
         * @since 1.9.0
         * @since 2.12.0-beta.1 Check $_POST also.
         *
         * @return string
         */
        protected function detect_by_url()
        {
        }
        /**
         * Use the fallback currency.
         *
         * @since 2.14.1-rc.3 Moved to a separate method.
         *
         * @return string
         */
        protected function detect_by_fallback()
        {
        }
        /**
         * Determine the currency settings by several criteria.
         *
         * @since 2.6.3-rc.2 Always save the detected currency in a cookie.
         * @since 2.14.1-rc.3 Not saving if called before 'woocommerce_init'.
         *
         * @return string
         */
        protected function detect()
        {
        }
        /**
         * Validate the currency code: sane and one of the enabled.
         *
         * @since 2.14.1-rc.3
         *
         * @param string $currency Currency code.
         *
         * @return bool
         */
        protected function validate($currency)
        {
        }
        /**
         * Messages from {@see save()}.
         *
         * @since 2.14.1
         *
         * @var array
         */
        protected $messages_from_save = array();
        /**
         * Log the saved messages.
         *
         * @since 2.14.1
         * @return void
         */
        protected function log_messages_from_save()
        {
        }
        /**
         * Save the detected currency.
         *
         * @since 2.14.1-rc.3
         *
         * @param string $currency Currency code.
         *
         * @return bool
         */
        protected function save($currency)
        {
        }
        /**
         * Combination of validate and save.
         *
         * @since 2.14.1-rc.3
         *
         * @param string $currency Currency code.
         *
         * @return bool
         */
        protected function validate_and_save($currency)
        {
        }
        /**
         * Check if the current filter chain contains one of the names specified.
         *
         * Example:
         * The global $wp_current_filter may look like
         * [ 'wp_loaded', 'woocommerce_product_get_price', 'woocommerce_currency' ]
         * We want to know if 'woocommerce_product_get_price' is in the list.
         *
         * @since 2.16.3
         *
         * @param string|string[] $filter_names The filter name(s).
         *
         * @return bool
         */
        protected static function is_in_current_filter($filter_names)
        {
        }
        /**
         * Handle the 'woocommerce_add_order_item' AJAX call.
         *
         * Returns the currency of the order or blank string
         * if we cannot get it or should not do anything (blank string means "no exception").
         *
         * @since 2.16.3
         * @since 2.16.4 Use MC_Order (HPOS compatibility)
         *
         * @return string
         */
        protected function get_currency_for_adding_item_to_order()
        {
        }
        /**
         * Check if we should return a currency exception, which is different from the general state.
         *
         * @since 2.6.3-rc.2
         * @return string
         */
        protected function get_currency_exception()
        {
        }
        /**
         * The current currency.
         *
         * @since 2.6.1 Cache the result.
         * @since 2.6.3-rc.2 Exceptions moved to a separate method.
         *
         * @return string
         */
        public function currency()
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Get the forced currency value from cookie.
         *
         * @since 2.6.0 Converted to public static.
         *
         * @return string
         */
        public static function currency_from_cookie()
        {
        }
        /**
         * Set the `COOKIE_FORCED_CURRENCY` cookie.
         *
         * @since 2.1.0
         * @since 2.6.7-beta.2 Added $force parameter. Renamed to `set_currency_cookie`.
         * @since 2.9.4-rc.6 Made public static.
         *
         * @param string $currency The currency code.
         * @param bool   $force    Allow repeated setcookie calls.
         *
         * @return void
         */
        public static function set_currency_cookie($currency, $force = false)
        {
        }
        /**
         * Handle the "order-pay" WC endpoint.
         * That's the link called "Customer payment page" in Admin->Edit order.
         * We must set the active currency to the currency of order.
         * Otherwise, the customer can switch currency, but the amount is not changing.
         *
         * @since 2.5.3
         * @since 2.16.4 Use MC_Order (HPOS compatibility)
         *
         * @return string
         */
        protected function get_order_pay_currency()
        {
        }
        /**
         * Act on `parse_request`.
         *
         * @since    2.6.7-beta.2
         * @internal Action.
         */
        public function action__parse_request()
        {
        }
    }
    /**
     * Class Parser
     *
     * Parses localized currency/number strings into standard decimal form.
     */
    class Parser
    {
        /**
         * Convert a localized money/number string to standard decimal form.
         *
         * Format-agnostic: auto-detects the decimal separator using a "last separator wins" heuristic.
         *
         * @since 4.2.0 As OptionsConverter::money_to_standard_form().
         * @since 4.6.3 Moved to Currency\Parser::to_standard_form().
         *
         * @param string $money_number Money string in international notation.
         *
         * @return string
         *
         *               - US/UK: "1,234.56" → "1234.56"
         *               - European: "1.234,56" → "1234.56"
         *               - French/Russian: "1 234,56" → "1234.56"
         *               - Swiss: "1'234.56" → "1234.56"
         *               - Indian lakhs: "1,23,456.78" → "123456.78"
         *               - 3-decimal KWD: "1,234.567" → "1234.567"
         *               - 3-decimal TND: "1.234,567" → "1234.567"
         *               - Zero-decimal with spaces (HUF): "1 234" → "1234"
         *               - Negative numbers, whitespace variants, NBSP, &nbsp;, edge cases
         */
        public static function to_standard_form($money_number): string
        {
        }
    }
}
namespace WOOMC\Currency\Switcher {
    /**
     * Class AbstractSwitcherShortcode
     *
     * @since 4.0.0
     */
    abstract class AbstractSwitcherShortcode extends \WOOMC\Abstracts\Hookable
    {
        /**
         * Shortcode tag.
         *
         * @var string
         */
        protected const TAG = '';
        /**
         * Switcher type: '1', '2'.
         *
         * @var string
         */
        protected const TYPE = '';
        /**
         * Default format, if not passed.
         *
         * @var string
         */
        protected const DEFAULT_FORMAT = '{{code}}: {{name}} ({{symbol}})';
        /**
         * Parameters.
         *
         * @var array{type:string, format:string, flag:string, active_currency:string, currencies:string[], inactive_currencies:string}
         */
        protected $params = array();
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Make option text.
         *
         * @param string $currency Currency code.
         *
         * @return string
         */
        protected function make_option_text($currency)
        {
        }
        /**
         * Make flag CSS class.
         *
         * @param string $currency Currency code.
         *
         * @return string
         */
        protected function make_flag_css_class($currency)
        {
        }
        /**
         * Method widget_settings.
         *
         * @since 4.1.0
         * @return array
         */
        public static function widget_settings(): array
        {
        }
        /**
         * Process shortcode.
         *
         * @param string[] $params The shortcode attributes.
         *
         * @return string
         */
        public function process_shortcode($params)
        {
        }
        /**
         * Setup shortcode parameters.
         *
         * @param string[]|string $params The shortcode attributes.
         */
        protected function setup_parameters($params)
        {
        }
        /**
         * Returns true if hidden by Switcher Conditions.
         *
         * @since 2.16.2
         *
         * @return bool
         */
        protected function is_hidden()
        {
        }
        /**
         * Enqueue scripts.
         *
         * @since 2.12.0-beta.1
         * @since 2.16.1-rc.1 Do not do anything if hide_conditions.
         */
        protected function enqueue_scripts_type_1()
        {
        }
        /**
         * Enqueue scripts.
         *
         * @since 1.1.2
         * @since 2.5.1 Enqueued only if shortcode (or widget) is on the page.
         * @since 2.6.3-rc.2 Non-related settings moved to {@see FrontendController}.
         * @since 3.2.1-0 Loading Flags CSS moved to Currency\Controller.
         * @since 4.3.0-3 Loading Flags CSS moved to frontend JS.
         */
        protected function enqueue_scripts_type_2()
        {
        }
        /**
         * Method render_type_1.
         *
         * @since 4.1.0
         * @return string
         */
        protected function render_type_1()
        {
        }
        /**
         * Method render_type_2.
         *
         * @since 4.1.0
         * @return string
         */
        protected function render_type_2()
        {
        }
    }
    /**
     * Class Widget
     */
    abstract class AbstractSwitcherWidget extends \WP_Widget
    {
        /**
         * Initialize widget settings.
         */
        abstract protected function init_settings();
        // =================================
        /**
         * Widget settings.
         *
         * @var array
         */
        protected $settings = array();
        /**
         * Widget constructor.
         */
        public function __construct()
        {
        }
        /**
         * Default arguments.
         *
         * @return array
         */
        protected function default_args()
        {
        }
        /**
         * Widget front-end.
         *
         * @param array $args     Display arguments including 'before_title', 'after_title',
         *                        'before_widget', and 'after_widget'.
         * @param array $instance The settings for the particular instance of the widget.
         */
        public function widget($args, $instance)
        {
        }
        /**
         * Actions before the form output starts.
         */
        protected function before_form()
        {
        }
        /**
         * Widget back-end.
         *
         * @param array $instance Current settings.
         */
        public function form($instance)
        {
        }
        /**
         * Updating widget replacing old instances with new.
         *
         * @param array $new_instance New settings for this instance as input by the user via
         *                            WP_Widget::form().
         * @param array $old_instance Old settings for this instance.
         *
         * @return array Settings to save or bool false to cancel saving.
         */
        public function update($new_instance, $old_instance)
        {
        }
    }
    /**
     * Class SwitcherBlock
     *
     * @since 5.1.0
     */
    class SwitcherBlock extends \WOOMC\Abstracts\Hookable
    {
        /**
         * Block name. Provisional - see docs/switcher-library-spec.md, question 10.5.
         *
         * @var string
         */
        public const NAME = 'woocommerce-multicurrency/tiv-switcher';
        /**
         * The classic block this one can be transformed from.
         *
         * @var string
         */
        public const CLASSIC_NAME = 'woocommerce-multicurrency/switcher';
        /**
         * Handle of the small script that adds the classic-to-current transform.
         *
         * @var string
         */
        private const HANDLE_TRANSFORM = 'woomc-switcher-block-transform';
        /**
         * Handle of the flag stylesheet, as used in the editor.
         *
         * @var string
         */
        private const HANDLE_FLAGS = 'woomc-flags';
        /**
         * Our own inserter category, shared with the classic block.
         *
         * Appearance > Menus already puts the brand on the container - the meta box is
         * titled "TIV Multi-currency" and the item inside it is just "Currency Switcher".
         * A block category is the inserter's equivalent of that container, so the same
         * pattern applies here.
         *
         * Prefixing the block TITLE instead would be worse than doing nothing: the
         * inserter's search ranks a title that STARTS WITH the search term above one that
         * merely contains it, so "TIV Currency Switcher" would sort below every classic
         * entry on a search for "currency".
         *
         * @var string
         */
        public const CATEGORY = 'tiv-multicurrency';
        /**
         * Setup actions and filters.
         *
         * @since 5.1.0
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Add our inserter category, just above WooCommerce's own.
         *
         * @since    5.1.0
         *
         * @param array $categories Registered block categories.
         *
         * @return array
         * @internal Filter callback.
         */
        public function filter__block_categories($categories)
        {
        }
        /**
         * Register the block.
         *
         * @since    5.1.0
         *
         * @return void
         * @internal Action callback.
         */
        public function register_block()
        {
        }
        /**
         * Make the flags visible in the editor.
         *
         * On the front end the flag stylesheet is attached lazily by our JavaScript, because
         * a switcher can arrive as a widget, a menu item, a shortcode or a block and at
         * enqueue time we do not yet know whether any flag will render. That works in a
         * browser but not in the editor, where the inserter previews a block before any of
         * our frontend script has run - which is why the preview showed a flagless switcher.
         *
         * Declaring it as a dependency of the switcher stylesheet fixes it, because that
         * stylesheet is registered as the block's own and so follows it into the iframed
         * canvas. Admin only, so the front end keeps loading flags lazily as before.
         *
         * @since 5.1.0
         *
         * @return void
         */
        private function add_flags_to_editor(): void
        {
        }
        /**
         * Register the script that adds a "Transform to" from the classic block.
         *
         * Product-specific, so it stays out of the library: the mapping is real branching,
         * not data. It hooks `blocks.registerBlockType` rather than being passed into the
         * library, which keeps the library ignorant of transforms altogether.
         *
         * @since 5.1.0
         *
         * @return void
         */
        private function register_transform_script(): void
        {
        }
        /**
         * Render the block.
         *
         * Block attributes live in post content, so they are input, not configuration. Nothing
         * that arrives here is passed on: every setting is a closed set - three selects with
         * fixed options and two checkboxes, no free text anywhere - so the incoming value is
         * only ever COMPARED, and what travels onward is our own option or our own default,
         * taken from the field schema.
         *
         * That is the same shape the legacy block used in block/render.php, which tests each
         * attribute and appends a literal. It is stronger than sanitizing the value: anything
         * not in the schema cannot reach the renderer at all, so the output provably originates
         * in our code rather than in post content. It also satisfies QIT's semgrep rule
         * audit.php.wp.security.xss.block-attr, which tracks the attributes as tainted through
         * any variable and does not accept sanitize_key()/sanitize_text_field() as clearing it.
         *
         * The library escapes on top of this - Switcher::sanitize_args() whitelists `style` and
         * `open_on`, labels go through esc_html() and attributes through esc_attr() - but that
         * happens two classes away, where neither a reader of this method nor a scanner can see it.
         *
         * @since 5.1.0
         *
         * @param array $attributes Block attributes.
         *
         * @return string
         * @noinspection PhpTernaryExpressionCanBeReplacedWithConditionInspection
         */
        public static function render(array $attributes): string
        {
        }
    }
    /**
     * Class SwitcherConditions
     *
     * @package WOOMC\Currency
     */
    class SwitcherConditions extends \WOOMC\Abstracts\Hookable
    {
        /**
         * Setup actions and filters.
         *
         * @since 2.12.0
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Do we need to hide?
         *
         * @since 2.12.0
         * @since 2.16.1-rc.1 Converted to public static to use elsewhere.
         * @return bool
         */
        public static function is_hide_conditions()
        {
        }
        /**
         * Is this our switcher widget?
         *
         * @param \WP_Widget $widget The widget object.
         *
         * @return bool
         */
        protected function is_switcher_widget($widget)
        {
        }
        /**
         * Is this our switcher shortcode?
         *
         * @param string $tag Shortcode name.
         *
         * @return bool
         */
        protected function is_switcher_shortcode($tag)
        {
        }
        /**
         * Hide widget under certain conditions.
         *
         * @param array      $instance Instance settings.
         * @param \WP_Widget $widget   The widget object.
         * @param array      $args     Sidebar arguments.
         *
         * @return array|false
         * @noinspection PhpUnusedParameterInspection
         */
        public function filter__widget_display_callback($instance, $widget, $args)
        {
        }
        /**
         * Filters whether to call a shortcode callback.
         *
         * Returning a non-false value from filter will short-circuit the
         * shortcode generation process, returning that value instead.
         *
         * @see          \do_shortcode_tag()
         *
         * @param false|string $short_circuit_return Short-circuit return value. Either false or the value to replace the shortcode with.
         * @param string       $tag                  Shortcode name.
         * @param array|string $attr                 Shortcode attributes array or empty string.
         * @param array        $m                    Regular expression match array.
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public function filter__pre_do_shortcode_tag($short_circuit_return, $tag, $attr, $m)
        {
        }
    }
    /**
     * Class SwitcherLegacy
     *
     * @since 5.1.0
     */
    class SwitcherLegacy extends \WOOMC\Abstracts\Hookable
    {
        /**
         * Setup actions and filters.
         *
         * @since 5.1.0
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * The word used to mark the classic switchers wherever they are listed.
         *
         * Deliberately "Legacy" and not "Deprecated": this label is not confined to the
         * inserter. It is also the heading over an existing, working widget on the Widgets
         * screen and the name in the block List View, where "Deprecated" would read as
         * "about to stop working" to someone whose site is perfectly fine. The stronger
         * wording goes in the description instead, which only the person adding a NEW one
         * ever sees.
         *
         * It is also the term WordPress core itself uses, in its "Legacy Widget" block.
         *
         * @since 5.1.0
         *
         * @return string
         */
        public static function label(): string
        {
        }
        /**
         * Description shown for every classic switcher in the inserter.
         *
         * Seen only when browsing for something to add, so this is where the migration
         * message belongs.
         *
         * @since 5.1.0
         *
         * @return string
         */
        public static function description(): string
        {
        }
        /**
         * The classic widgets, by `id_base`.
         *
         * @since 5.1.0
         *
         * @return string[]
         */
        public static function widget_id_bases(): array
        {
        }
        /**
         * Constant that forces the classic widgets to stay on offer.
         *
         * Hiding them is decided by whether the site has any, which leaves one dead end:
         * delete the last classic widget and the entry that creates one disappears with it,
         * so there is no way back. Define this to keep them listed regardless - needed for
         * testing the classic switchers, and as the escape hatch for anyone who deletes
         * theirs and then wants it back.
         *
         * @var string
         */
        public const CONST_SHOW = 'WOOMC_SHOW_LEGACY_SWITCHERS';
        /**
         * Whether the classic widgets should stay on offer regardless of use.
         *
         * @since 5.1.0
         *
         * @return bool
         */
        public static function is_show_forced(): bool
        {
        }
        /**
         * Whether this site has any classic switcher widget.
         *
         * Counts a stored instance, not a placed one - a widget parked in the inactive
         * area still means the merchant has used it and may put it back.
         *
         * @since 5.1.0
         *
         * @return bool
         */
        public static function is_widget_used(): bool
        {
        }
        /**
         * Stop offering the classic widgets to sites that have never used them.
         *
         * A site with no stored instance cannot be inconvenienced by this - there is
         * nothing of theirs to hide - while a site that has one keeps seeing them exactly
         * as before. Core hides its own superseded widgets through this same filter.
         *
         * This only removes them from the inserter. Existing widgets keep rendering and
         * stay editable, and `unregister_widget()` is deliberately NOT used, as that would
         * break them.
         *
         * {@see SwitcherLegacy::CONST_SHOW} overrides all of this, for the case where the
         * last classic widget has been deleted and one is wanted back.
         *
         * @since 5.1.0
         *
         * @param string[] $widgets Widget-type IDs already hidden.
         *
         * @return string[]
         * @internal Filter callback.
         */
        public function filter__hide_unused_legacy_widgets($widgets)
        {
        }
    }
    /**
     * Class SwitcherMenuItem
     *
     * @since 5.1.0
     */
    class SwitcherMenuItem extends \WOOMC\Abstracts\Hookable
    {
        /**
         * Value stored in `_menu_item_object` for our items.
         *
         * @var string
         */
        public const OBJECT_TYPE = 'tiv_currency_switcher';
        /**
         * Postmeta key holding an item's settings.
         *
         * @var string
         */
        private const META_SETTINGS = '_tiv_currency_switcher_settings';
        /**
         * The registered library instance, so the Menus meta box can borrow its checklist
         * entry instead of the library adding a second panel of its own.
         *
         * @var \WOOMC\Dependencies\TIV\Switcher\MenuItem|null
         */
        private static $menu_item;
        /**
         * The registered library instance, or null before `init`.
         *
         * @since 5.1.0
         *
         * @return \WOOMC\Dependencies\TIV\Switcher\MenuItem|null
         */
        public static function instance()
        {
        }
        /**
         * Setup actions and filters.
         *
         * @since 5.1.0
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Build and register the menu item type.
         *
         * @since 5.1.0
         *
         * @return void
         * @internal Action callback.
         */
        public function register_menu_item()
        {
        }
        /**
         * Render the switcher for one menu item.
         *
         * @since 5.1.0
         *
         * @param array $settings The item's saved settings.
         *
         * @return string
         */
        public static function render(array $settings): string
        {
        }
    }
    /**
     * Class SwitcherRenderer
     *
     * @since 5.1.0
     */
    class SwitcherRenderer
    {
        /**
         * Default display format.
         *
         * @var string
         */
        public const DEFAULT_FORMAT = '{{code}}: {{name}} ({{symbol}})';
        /**
         * Render a currency switcher.
         *
         * @since 5.1.0
         *
         * @param array $args {
         *     @type string $style      dropdown | flat | native.
         *     @type string $open_on    click | hover.
         *     @type bool   $flag       Show flags.
         *     @type string $format     Display template.
         *     @type string $currencies Comma-separated subset, or '' for all enabled.
         *     @type bool   $in_menu    Render for a nav menu.
         * }
         *
         * @return string
         */
        public static function render(array $args = array()): string
        {
        }
        /**
         * Render from a settings array keyed by {@see SwitcherSettings::fields()}.
         *
         * The adapter between the configuration surfaces - nav menu item, Customizer, block -
         * and this renderer's own argument names. It lives here rather than on
         * SwitcherSettings so that class stays pure schema, and so there is exactly one
         * `render()` in this namespace.
         *
         * @since 5.1.0
         *
         * @param array $settings Settings keyed by the schema.
         * @param bool  $in_menu  Render for a nav menu.
         *
         * @return string
         */
        public static function render_settings(array $settings, bool $in_menu = false): string
        {
        }
        /**
         * Should the switcher be suppressed on this page?
         *
         * Switcher Conditions hide the switcher on cart, checkout and account pages, where
         * changing currency mid-transaction causes more trouble than it solves. The legacy
         * switchers check this too - see AbstractSwitcherShortcode::is_hidden().
         *
         * @since 5.1.0
         *
         * @return bool
         */
        public static function is_hidden(): bool
        {
        }
        /**
         * Which currencies to offer, always intersected with the enabled ones.
         *
         * @since 5.1.0
         *
         * @param string $requested Comma-separated codes, or ''.
         *
         * @return string[]
         */
        private static function wanted_currencies(string $requested): array
        {
        }
        /**
         * The currency to mark as the current one.
         *
         * The visitor's active currency, except when the block editor is drawing a preview.
         * There it is the store's base currency instead: the editor renders the block over
         * the REST API carrying the administrator's own cookies, so the preview would
         * otherwise show whichever currency that person last browsed the shop in. Accurate,
         * but it has nothing to do with the page being edited and changes under them for no
         * visible reason. The base currency is stable and is what the switcher is set up
         * around.
         *
         * @since 5.1.0
         *
         * @return string
         */
        private static function current_currency(): string
        {
        }
        /**
         * Is this render the block editor asking for a preview?
         *
         * Recognised by the REST route rather than by `is_admin()`, which is false during a
         * REST request. `ServerSideRender` and the inserter preview both come through
         * `/wp/v2/block-renderer/`, so one test covers the canvas and the inserter alike.
         *
         * @since 5.1.0
         *
         * @return bool
         */
        private static function is_editor_preview(): bool
        {
        }
        /**
         * Turn currency codes into library items.
         *
         * @since 5.1.0
         *
         * @param string[] $currencies Currency codes.
         * @param string   $format     Display template.
         * @param bool     $with_flags Attach flag classes.
         *
         * @return \WOOMC\Dependencies\TIV\Switcher\Item[]
         */
        private static function build_items(array $currencies, string $format, bool $with_flags): array
        {
        }
        /**
         * Expand the display template for one currency.
         *
         * @since 5.1.0
         *
         * @param string $currency Currency code.
         * @param string $format   Display template.
         *
         * @return string
         */
        private static function make_label(string $currency, string $format): string
        {
        }
        /**
         * Flag CSS classes for a currency.
         *
         * Goes through Dict so the public `woocommerce_currency_to_country_alpha_2` filter
         * still applies - the legacy type 2 dropdown builds this map in JS and skips that
         * filter, which is why a filtered store sees mismatched flags there today.
         *
         * @since 5.1.0
         *
         * @param string $currency Currency code.
         *
         * @return string
         */
        private static function make_flag_class(string $currency): string
        {
        }
    }
    /**
     * Class SwitcherSettings
     *
     * @since 5.1.0
     */
    class SwitcherSettings
    {
        /**
         * Default display format for the configuration surfaces.
         *
         * Named apart from {@see SwitcherRenderer::DEFAULT_FORMAT} because the values differ
         * on purpose and two same-named constants would invite picking the wrong one: a
         * switcher placed in a menu or a sidebar has far less room than one dropped into the
         * middle of a page by shortcode.
         *
         * @var string
         */
        public const COMPACT_FORMAT = '{{code}} ({{symbol}})';
        /**
         * Code only, e.g. "USD".
         *
         * This and the constants below are the display formats offered. They are constants so
         * the block renderer can compare an incoming attribute against them without restating
         * the strings: one source of truth, and adding a format here cannot leave the renderer
         * silently ignoring it.
         *
         * @since 5.1.0
         * @var string
         */
        public const FORMAT_CODE = '{{code}}';
        /**
         * Code and name, e.g. "USD: US dollar".
         *
         * @since 5.1.0
         * @var string
         */
        public const FORMAT_CODE_NAME = '{{code}}: {{name}}';
        /**
         * Code, name and symbol, e.g. "USD: US dollar ($)".
         *
         * @since 5.1.0
         * @var string
         */
        public const FORMAT_CODE_NAME_SYMBOL = '{{code}}: {{name}} ({{symbol}})';
        /**
         * Symbol only, e.g. "$".
         *
         * @since 5.1.0
         * @var string
         */
        public const FORMAT_SYMBOL = '{{symbol}}';
        /**
         * Name only, e.g. "US dollar".
         *
         * @since 5.1.0
         * @var string
         */
        public const FORMAT_NAME = '{{name}}';
        /**
         * The schema.
         *
         * @since 5.1.0
         *
         * @return array
         */
        public static function fields(): array
        {
        }
    }
    /**
     * Class SwitcherShortcode
     *
     * @since 5.1.0
     */
    class SwitcherShortcode extends \WOOMC\Abstracts\Hookable
    {
        /**
         * Shortcode tag. Provisional.
         *
         * @var string
         */
        public const TAG = 'tiv-currency-switcher';
        /**
         * Setup actions and filters.
         *
         * @since 5.1.0
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Render the shortcode.
         *
         * @since 5.1.0
         *
         * @param string[]|string $atts Shortcode attributes.
         *
         * @return string
         * @internal Shortcode callback.
         * @noinspection ReturnTypeCanBeDeclaredInspection
         */
        public function process_shortcode($atts)
        {
        }
    }
    /**
     * Class Shortcode
     */
    class SwitcherShortcode1 extends \WOOMC\Currency\Switcher\AbstractSwitcherShortcode
    {
        /**
         * Shortcode tag.
         *
         * @var string
         */
        const TAG = 'woocommerce-currency-switcher';
        /**
         * Switcher type: '1', '2'.
         *
         * @var string
         */
        protected const TYPE = '1';
    }
    /**
     * Class Shortcode
     */
    class SwitcherShortcode2 extends \WOOMC\Currency\Switcher\AbstractSwitcherShortcode
    {
        /**
         * Shortcode tag.
         *
         * @var string
         */
        const TAG = 'woocommerce-currency-selector';
        /**
         * Switcher type: '1', '2'.
         *
         * @var string
         */
        protected const TYPE = '2';
    }
    /**
     * Class Widget
     */
    class SwitcherWidget1 extends \WOOMC\Currency\Switcher\AbstractSwitcherWidget
    {
        /**
         * Initialize widget settings.
         */
        protected function init_settings()
        {
        }
    }
    /**
     * Class Widget
     */
    class SwitcherWidget2 extends \WOOMC\Currency\Switcher\AbstractSwitcherWidget
    {
        /**
         * Initialize widget settings.
         */
        protected function init_settings()
        {
        }
    }
}
namespace WOOMC\DAO {
    /**
     * Class Factory
     */
    class Factory
    {
        /**
         * The DAO instance.
         *
         * @var IDAO
         */
        protected static $dao;
        /**
         * Get the DAO instance.
         *
         * @return IDAO
         */
        public static function getDao()
        {
        }
    }
    /**
     * Interface IDAO
     */
    interface IDAO
    {
        /**
         * Full (prefixed) key name in the Options table.
         *
         * @since 1.15.0
         *
         * @param string $key The option name without prefix.
         *
         * @return string
         */
        public function option_name($key);
        /**
         * Store any value.
         *
         * @see \update_option for the parameter descriptions.
         *
         * @param string    $key      The key.
         * @param mixed     $value    The value.
         * @param bool|null $autoload The 'autoload' flag.
         *
         * @return bool
         */
        public function store($key, $value, $autoload = null);
        /**
         * Retrieve the value by key.
         *
         * @see \get_option for the parameter descriptions.
         *
         * @param mixed  $default_value The default value to return if not found.
         *
         * @param string $key           The key.
         *
         * @return mixed
         */
        public function retrieve($key, $default_value = false);
        /**
         * Getters
         */
        /**
         * Getter for Currency To Price Format.
         *
         * @return string[]
         */
        public function getCurrencyToPriceFormat();
        /**
         * Get the Currency Symbol set in the settings tab.
         *
         * @param string $currency The currency code.
         *
         * @return string
         */
        public function getCustomCurrencySymbol($currency);
        /**
         * Getter for Default Currency.
         *
         * @return string
         */
        public function getDefaultCurrency();
        /**
         * Returns array of enabled currency codes.
         *
         * @return string[]
         */
        public function getEnabledCurrencies();
        /**
         * Getter for Fallback Currency.
         *
         * @since 2.8.0
         *
         * @return string
         */
        public function getFallbackCurrency();
        /**
         * Getter for Cache Currency - the single currency served from static cache on
         * direct-serve / reject backends (defaults to the store base currency).
         *
         * @since 5.0.0
         *
         * @return string
         */
        public function getCacheCurrency();
        /**
         * Getter for FeePercent.
         *
         * @return float
         */
        public function getFeePercent();
        /**
         * Getter for AutoRounding.
         *
         * @return bool
         */
        public function getAutomaticRounding();
        /**
         * Getter for FixedRate.
         *
         * @since 1.15.0
         *
         * @param string $currency The currency code.
         *
         * @return float
         */
        public function getFixedRate($currency);
        /**
         * Getter for "language-to-currency".
         *
         * @return string[]
         */
        public function getLanguageToCurrency();
        /**
         * Getter for LogLevel.
         *
         * @since 1.15.0
         *
         * @return string
         */
        public function getLogLevel();
        /**
         * Getter for PriceCharm.
         *
         * @return float
         */
        public function getPriceCharm();
        /**
         * Getter for Rates Provider Credentials.
         * This is not loaded at constructor because we need to get it again when the provider
         * is changed in the Panel.
         *
         * @return string
         */
        public function getRatesProviderCredentials();
        /**
         * Getter for Rates Retrieval Status.
         *
         * @since 1.15.0
         *
         * @return bool
         */
        public function getRatesRetrievalStatus();
        /**
         * Get the Rates Timestamp.
         *
         * @return string
         */
        public function getRatesTimestamp();
        /**
         * Get the Rates Provider Service ID.
         *
         * @return string
         */
        public function getRatesProviderID();
        /**
         * Getter for RoundTo.
         *
         * @return float
         */
        public function getRoundTo();
        /**
         * Getter for VersionInDB.
         *
         * @return string
         */
        public function getVersionInDB();
        /**
         * Is price per product allowed?
         *
         * @since 1.19.1
         *
         * @return bool
         */
        public function isAllowPricePerProduct();
        /**
         * Are switcher conditions enabled?
         *
         * @since 2.12.0
         *
         * @return bool
         */
        public function isSwitcherConditionsEnabled();
        /**
         * Getter.
         *
         * @since 1.20.0
         *
         * @return string
         */
        public function getRatesUpdateSchedule();
        /**
         * Is client-side cookies?
         *
         * @since 2.6.3-rc.2
         *
         * @return bool
         */
        public function isClientSideCookies();
        /**
         * Is JS to be lazy loaded?
         *
         * @since 4.2.0
         *
         * @return bool
         */
        public function isLazyLoadJS();
        /**
         * Should we raw-convert shipping fees?
         *
         * @since 4.2.0
         *
         * @return bool
         */
        public function isRawShippingConversion();
        /**
         * Setters
         */
        /**
         * Setter for Default Currency.
         *
         * @param string $default_currency The currency code.
         */
        public function setDefaultCurrency($default_currency);
        /**
         * Setter for Enabled Currencies.
         *
         * @since 1.15.0
         *
         * @param string[] $currencies The array of currencies.
         */
        public function setEnabledCurrencies(array $currencies);
        /**
         * Setter for FixedRate.
         *
         * @since 1.15.0
         *
         * @param string $currency The currency code.
         * @param float  $rate     The exchange rate.
         */
        public function setFixedRate($currency, $rate);
        /**
         * Setter for LogLevel.
         *
         * @since 1.15.0
         *
         * @param string $log_level The log level.
         */
        public function setLogLevel($log_level);
        /**
         * Setter for RatesRetrievalStatus.
         *
         * @since 1.15.0
         *
         * @param bool $rates_retrieval_status Rates retrieval status.
         */
        public function setRatesRetrievalStatus($rates_retrieval_status);
        /**
         * Setter for VersionInDB.
         *
         * @param string $version Version to set.
         */
        public function setVersionInDB($version);
        /**
         * Setter.
         *
         * @since 1.20.0
         *
         * @param string $schedule Schedule ID.
         *
         * @return void
         */
        public function setRatesUpdateSchedule($schedule);
        /**
         * Option keys
         */
        /**
         * Options table keys for the Currency Symbol.
         *
         * @param string $currency The currency code.
         *
         * @return string
         */
        public function key_currency_symbol($currency);
        /**
         * Options table key for the Enabled Currencies list.
         *
         * @return string
         */
        public function key_enabled_currencies();
        /**
         * Options table key for the Cache Currency.
         *
         * @since 5.0.0
         * @return string
         */
        public function key_cache_currency();
        /**
         * Options table key for the Fallback Currency.
         *
         * @since 2.8.0
         * @return string
         */
        public function key_fallback_currency();
        /**
         * Options table key for Fee Percent.
         *
         * @return string
         */
        public function key_fee_percent();
        /**
         * Options table key for Currency.
         *
         * @since 1.15.0
         *
         * @param string $currency The currency code.
         *
         * @return string
         */
        public function key_fixed_rate($currency);
        /**
         * Option table key for Language-to-currency.
         *
         * @param string $language The language code.
         *
         * @return string
         */
        public function key_language_to_currency($language);
        /**
         * Options table key for Log level.
         *
         * @since 1.15.0
         *
         * @return string
         */
        public function key_log_level();
        /**
         * Options table key for Price charm.
         *
         * @return string
         */
        public function key_price_charm();
        /**
         * Options table key for "smart" rounding.
         *
         * @since 3.2.0-1
         * @return string
         */
        public function key_automatic_rounding();
        /**
         * Options table keys for the Price Format.
         *
         * @param string $currency The currency code.
         *
         * @return string
         */
        public function key_price_format($currency);
        /**
         * Options table key for the Rates Provider Service.
         *
         * @return string
         */
        public function key_rates_provider_id();
        /**
         * Options table key for the Rates Provider Credentials.
         *
         * @param string $provider_id The Provider ID.
         *
         * @return string
         */
        public function key_rates_provider_credentials($provider_id);
        /**
         * Options table key for the Rates Retrieval Status.
         *
         * @since 1.15.0
         *
         * @return string
         */
        public function key_rates_retrieval_status();
        /**
         * Options table key for the Rates Timestamp.
         *
         * @return string
         */
        public function key_rates_timestamp();
        /**
         * Options table key for Round To.
         *
         * @return string
         */
        public function key_round_to();
        /**
         * Options table key for Version in DB.
         *
         * @return string
         */
        public function key_version_in_db();
        /**
         * Options table key.
         *
         * @since 1.19.1
         *
         * @return string
         */
        public function key_allow_price_per_product();
        /**
         * Options table key.
         *
         * @since 2.12.0
         *
         * @return string
         */
        public function key_switcher_conditions();
        /**
         * Options table key.
         *
         * @since 1.20.0
         *
         * @return string
         */
        public function key_rates_update_schedule();
        /**
         * Options table key.
         *
         * @since 2.6.3-rc.2
         *
         * @return string
         */
        public function key_client_side_cookies();
        /**
         * Options table key.
         *
         * @since 4.2.0
         *
         * @return string
         */
        public function key_lazy_load_js();
        /**
         * Options table key.
         *
         * @since 4.2.0
         *
         * @return string
         */
        public function key_raw_shipping_conversion();
        /**
         * Options table key for the cache-handling operating mode.
         *
         * @since 5.0.0
         *
         * @return string
         */
        public function key_cache_handling_mode();
        /**
         * Misc. methods.
         */
        /**
         * Add a currency to the list of enabled currencies,
         *
         * @since 1.15.0
         *
         * @param string $currency The currency code.
         *
         * @return void
         */
        public function add_enabled_currency($currency);
        /**
         * Save the Fallback Currency.
         *
         * @since 2.8.0
         *
         * @param string $currency The currency code.
         *
         * @return void
         */
        public function saveFallbackCurrency($currency);
        /**
         * Save the Cache Currency.
         *
         * @since 5.0.0
         *
         * @param string $currency The currency code.
         *
         * @return void
         */
        public function saveCacheCurrency($currency);
        /**
         * Save the Rates Timestamp.
         *
         * @param string $timestamp The timestamp.
         *
         * @return void
         */
        public function saveRatesTimestamp($timestamp);
    }
    /**
     * Class WP
     */
    class WP implements \WOOMC\DAO\IDAO
    {
        /**
         * Options table keys prefix.
         *
         * @var string
         */
        public const OPTIONS_PREFIX = 'woocommerce_multicurrency_';
        /**
         * Full (prefixed) key name in the Options table.
         *
         * @since 1.15.0
         *
         * @param string $key The option name without prefix.
         *
         * @return string
         */
        public function option_name($key)
        {
        }
        /**
         * Language to currency.
         *
         * @var string[]
         */
        protected $language_to_currency;
        /**
         * Default currency.
         *
         * @var string
         */
        protected $default_currency;
        /**
         * Array of price formats per currency.
         *
         * @var string[]
         */
        protected $currency_to_price_format;
        /**
         * WP constructor.
         */
        public function __construct()
        {
        }
        /**
         * Store any value.
         *
         * @see \update_option for the parameter descriptions.
         *
         * @param string    $key      The key.
         * @param mixed     $value    The value.
         * @param bool|null $autoload The 'autoload' flag.
         *
         * @return bool
         */
        public function store($key, $value, $autoload = null)
        {
        }
        /**
         * Retrieve the value by key.
         *
         * @see \get_option for the parameter descriptions.
         *
         * @param string $key           The key.
         * @param mixed  $default_value The default value to return if not found.
         *
         * @return mixed
         */
        public function retrieve($key, $default_value = false)
        {
        }
        /**
         * Getters
         */
        /**
         * Getter for Currency To Price Format.
         *
         * @return string[]
         */
        public function getCurrencyToPriceFormat()
        {
        }
        /**
         * Get the Currency Symbol set in the settings tab.
         *
         * @param string $currency The currency code.
         *
         * @return string
         */
        public function getCustomCurrencySymbol($currency)
        {
        }
        /**
         * Getter for Default Currency.
         *
         * @return string
         */
        public function getDefaultCurrency()
        {
        }
        /**
         * Returns array of enabled currency codes.
         *
         * @since 2.10.0 Prevent fatal error when the option table value is corrupted and $enabled_currencies is not an array.
         *
         * @return string[]
         */
        public function getEnabledCurrencies()
        {
        }
        /**
         * Getter for FeePercent.
         *
         * @return float
         */
        public function getFeePercent()
        {
        }
        /**
         * Getter for Automatic Rounding.
         *
         * @return bool
         */
        public function getAutomaticRounding()
        {
        }
        /**
         * Getter for Fallback Currency.
         *
         * @since 2.8.0
         * @return string
         */
        public function getFallbackCurrency()
        {
        }
        /**
         * Getter for Cache Currency - the single currency served from static cache on
         * direct-serve / reject cache backends. Defaults to the store base currency.
         *
         * @since 5.0.0
         * @return string
         */
        public function getCacheCurrency()
        {
        }
        /**
         * Getter for FixedRate.
         *
         * @since 1.15.0
         * @since 2.6.1 No rounding.
         *
         * @param string $currency The currency code.
         *
         * @return float
         */
        public function getFixedRate($currency)
        {
        }
        /**
         * Getter for "language-to-currency".
         *
         * @return string[]
         */
        public function getLanguageToCurrency()
        {
        }
        /**
         * Getter for LogLevel.
         *
         * @since 1.15.0
         *
         * @return string
         */
        public function getLogLevel()
        {
        }
        /**
         * Getter for PriceCharm.
         *
         * @return float
         */
        public function getPriceCharm()
        {
        }
        /**
         * Getter for Rates Provider Credentials.
         * This is not loaded at constructor because we need to get it again when the provider
         * is changed in the Panel.
         *
         * @return string
         */
        public function getRatesProviderCredentials()
        {
        }
        /**
         * Getter for Rates Retrieval Status.
         *
         * @since 1.15.0
         *
         * @return bool
         */
        public function getRatesRetrievalStatus()
        {
        }
        /**
         * Get the Rates Timestamp.
         *
         * @return string
         */
        public function getRatesTimestamp()
        {
        }
        /**
         * Get the Rates Provider Service ID.
         *
         * @since 1.15.0 Default is 'FixedRates'.
         *
         * @return string
         */
        public function getRatesProviderID()
        {
        }
        /**
         * Getter for RoundTo.
         *
         * @return float
         */
        public function getRoundTo()
        {
        }
        /**
         * Getter for VersionInDB.
         *
         * @return string
         */
        public function getVersionInDB()
        {
        }
        /**
         * Is price per product allowed?
         *
         * @since 1.19.1
         *
         * @return bool
         */
        public function isAllowPricePerProduct()
        {
        }
        /**
         * Are switcher conditions enabled?
         *
         * @since 2.12.0
         *
         * @return bool
         */
        public function isSwitcherConditionsEnabled()
        {
        }
        /**
         * Getter.
         *
         * @since 1.20.0
         *
         * @return string
         */
        public function getRatesUpdateSchedule()
        {
        }
        /**
         * Is client-side cookies?
         *
         * @since 2.6.3-rc.2
         *
         * @return bool
         */
        public function isClientSideCookies()
        {
        }
        /**
         * Implement isLazyLoadJS().
         *
         * @since 4.2.0
         * @inheritDoc
         */
        public function isLazyLoadJS()
        {
        }
        /**
         * Implement isRawShippingConversion().
         *
         * @since 4.2.0
         *
         * @inheritDoc
         */
        public function isRawShippingConversion()
        {
        }
        /**
         * Setters
         */
        /**
         * Setter for Default Currency.
         *
         * @param string $default_currency The currency code.
         */
        public function setDefaultCurrency($default_currency)
        {
        }
        /**
         * Setter for Enabled Currencies.
         *
         * @since 1.15.0
         *
         * @param string[] $currencies The array of currencies.
         */
        public function setEnabledCurrencies(array $currencies)
        {
        }
        /**
         * Setter for FixedRate.
         *
         * @since 1.15.0
         *
         * @param string $currency The currency code.
         * @param float  $rate     The exchange rate.
         */
        public function setFixedRate($currency, $rate)
        {
        }
        /**
         * Setter for LogLevel.
         *
         * @since 1.15.0
         *
         * @param string $log_level The log level.
         */
        public function setLogLevel($log_level)
        {
        }
        /**
         * Setter for RatesRetrievalStatus.
         *
         * @since 1.15.0
         *
         * @param bool $rates_retrieval_status Rates retrieval status.
         */
        public function setRatesRetrievalStatus($rates_retrieval_status)
        {
        }
        /**
         * Setter for VersionInDB.
         *
         * @param string $version Version to set.
         */
        public function setVersionInDB($version)
        {
        }
        /**
         * Setter.
         *
         * @since 1.20.0
         *
         * @param string $schedule Schedule ID.
         *
         * @return void
         */
        public function setRatesUpdateSchedule($schedule)
        {
        }
        /**
         * Option keys
         */
        /**
         * Options table keys for the Currency Symbol.
         *
         * @param string $currency The currency code.
         *
         * @return string
         */
        public function key_currency_symbol($currency)
        {
        }
        /**
         * Options table key for the Enabled Currencies list.
         *
         * @return string
         */
        public function key_enabled_currencies()
        {
        }
        /**
         * Options table key for the Fallback Currency.
         *
         * @since 2.8.0
         * @return string
         */
        public function key_fallback_currency()
        {
        }
        /**
         * Options table key for the Cache Currency.
         *
         * @since 5.0.0
         * @return string
         */
        public function key_cache_currency()
        {
        }
        /**
         * Options table key for Fee Percent.
         *
         * @return string
         */
        public function key_fee_percent()
        {
        }
        /**
         * Options table key for Automatic Rounding
         *
         * @return string
         */
        public function key_automatic_rounding()
        {
        }
        /**
         * Options table key for Currency.
         *
         * @since 1.15.0
         *
         * @param string $currency The currency code.
         *
         * @return string
         */
        public function key_fixed_rate($currency)
        {
        }
        /**
         * Option table key for Language-to-currency.
         *
         * @param string $language The language code.
         *
         * @return string
         */
        public function key_language_to_currency($language)
        {
        }
        /**
         * Options table key for Log level.
         *
         * @since 1.15.0
         *
         * @return string
         */
        public function key_log_level()
        {
        }
        /**
         * Options table key for Price charm.
         *
         * @return string
         */
        public function key_price_charm()
        {
        }
        /**
         * Options table keys for the Price Format.
         *
         * @param string $currency The currency code.
         *
         * @return string
         */
        public function key_price_format($currency)
        {
        }
        /**
         * Options table key for the Rates Provider Service.
         *
         * @return string
         */
        public function key_rates_provider_id()
        {
        }
        /**
         * Options table key for the Rates Provider Credentials.
         *
         * @param string $provider_id The Provider ID.
         *
         * @return string
         */
        public function key_rates_provider_credentials($provider_id)
        {
        }
        /**
         * Options table key for the Rates Retrieval Status.
         *
         * @since 1.15.0
         *
         * @return string
         */
        public function key_rates_retrieval_status()
        {
        }
        /**
         * Options table key for the Rates Timestamp.
         *
         * @return string
         */
        public function key_rates_timestamp()
        {
        }
        /**
         * Options table key for Round To.
         *
         * @return string
         */
        public function key_round_to()
        {
        }
        /**
         * Options table key for Version in DB.
         *
         * @return string
         */
        public function key_version_in_db()
        {
        }
        /**
         * Options table key.
         *
         * @since 1.19.1
         *
         * @return string
         */
        public function key_allow_price_per_product()
        {
        }
        /**
         * Options table key.
         *
         * @since 2.12.0
         *
         * @return string
         */
        public function key_switcher_conditions()
        {
        }
        /**
         * Options table key.
         *
         * @since 1.20.0
         *
         * @return string
         */
        public function key_rates_update_schedule()
        {
        }
        /**
         * Options table key.
         *
         * @since 2.6.3-rc.2
         *
         * @return string
         */
        public function key_client_side_cookies()
        {
        }
        /**
         * Options table key.
         *
         * @since 4.2.0
         *
         * @return string
         */
        public function key_lazy_load_js()
        {
        }
        /**
         * Implement key_raw_shipping_conversion().
         *
         * @since 4.2.0
         *
         * @inheritDoc
         */
        public function key_raw_shipping_conversion()
        {
        }
        /**
         * Options table key for the cache-handling operating mode.
         *
         * @since 5.0.0
         *
         * @return string
         */
        public function key_cache_handling_mode()
        {
        }
        /**
         * Misc. methods.
         */
        /**
         * Add a currency to the list of enabled currencies,
         *
         * @since 1.15.0
         *
         * @param string $currency The currency code.
         *
         * @return void
         */
        public function add_enabled_currency($currency)
        {
        }
        /**
         * Save the Fallback Currency.
         *
         * @since 2.8.0
         *
         * @param string $currency The currency code.
         *
         * @return void
         */
        public function saveFallbackCurrency($currency)
        {
        }
        /**
         * Save the Cache Currency.
         *
         * @since 5.0.0
         *
         * @param string $currency The currency code.
         *
         * @return void
         */
        public function saveCacheCurrency($currency)
        {
        }
        /**
         * Save the Rates Timestamp.
         *
         * @param string $timestamp The timestamp.
         *
         * @return void
         */
        public function saveRatesTimestamp($timestamp)
        {
        }
    }
}
namespace WOOMC\Deprecated {
    /**
     * Class Deprecated_Filters
     *
     * @since 4.1.0
     */
    class Deprecated_Filters extends \WC_Deprecated_Filter_Hooks
    {
        /**
         * Array of deprecated hooks we need to handle.
         * Format of 'new' => 'old'.
         *
         * @since 4.1.0
         *
         * @var array
         */
        protected $deprecated_hooks = array('woocommerce_multicurrency_shortcode_format' => 'woocommerce_multicurrency_switcher_format', 'woocommerce_multicurrency_shortcode_flag' => 'woocommerce_multicurrency_switcher_flag', 'woocommerce_multicurrency_shortcode_currencies' => 'woocommerce_multicurrency_switcher_currencies');
        /**
         * Array of versions on each hook has been deprecated.
         *
         * @since 4.1.0
         *
         * @var array
         */
        protected $deprecated_version = array('woocommerce_multicurrency_shortcode_format' => '4.1.0', 'woocommerce_multicurrency_shortcode_flag' => '4.1.0', 'woocommerce_multicurrency_shortcode_currencies' => '4.1.0');
    }
}
namespace WOOMC {
    /**
     * Class Dict
     *
     * @since 4.3.0-3
     */
    class Dict
    {
        /**
         * Getter currency_to_country_alpha_2
         *
         * The currency-to-country table itself now lives in the shared tiv-flags library
         * ({@see CurrencyMap}, a direct port of the array that used to sit here). Keeping a
         * second copy in WooMC would let the two drift apart, so this method delegates.
         *
         * This wrapper stays because `woocommerce_currency_to_country_alpha_2` is a public
         * extension point (@since 4.3.0-3) that stores may already filter. CurrencyMap applies
         * its own `tiv_flags_currency_map` filter, which is not a substitute - dropping the
         * legacy filter would silently break those customizations.
         *
         * Filter order: `tiv_flags_currency_map` (library, inside resolve()) runs first, then
         * `woocommerce_currency_to_country_alpha_2` (below), so a WooMC-side filter still has
         * the last word, exactly as before.
         *
         * @since 4.3.0-3
         * @since 5.1.0 Table delegated to the vendored tiv-flags CurrencyMap.
         *
         * @param string $currency
         *
         * @return string ISO 3166-1 alpha-2 code, UPPERCASE, or '' when unresolvable.
         */
        public static function currency_to_country_alpha_2(string $currency): string
        {
        }
    }
}
namespace WOOMC\Frontend {
    /**
     * Class Frontend\Controller
     */
    class Controller implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * Security hash.
         *
         * @var string
         */
        protected const SECURITY_HASH = '0c6d616f3a1f137ac9d96c7ceb1101d0';
        /**
         * Plugin-relative URL of the flag-icons stylesheet bundled with the vendored
         * tiv-flags library. Mozart scopes the package to `vendor/WOOMC/TIV/Flags/`.
         *
         * @since 5.1.0
         * @var string
         */
        protected const REL_URL_FLAGS_CSS = 'vendor/WOOMC/TIV/Flags/assets/flag-icons.min.css';
        /**
         * Lowercase user-agent fragments treated as robots. The CacheBuster JS keeps the same list
         * ({@see js-packages/frontend/src/classes/CacheBuster.ts}).
         *
         * @since 5.3.1 Was a local array in is_bot_user_agent().
         * @var string[]
         */
        protected const BOT_USER_AGENTS = array('googlebot', 'bingbot', 'gtmetrix', 'lighthouse');
        /**
         * Absolute URL of the flag-icons stylesheet.
         *
         * @since 5.1.0
         *
         * @return string
         */
        public static function flags_css_url(): string
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Enqueue scripts.
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Check if user agent is a bot.
         *
         * @since 3.2.4-0
         * @since 4.4.4 Added "Chrome-Lighthouse" (https://pagespeed.web.dev/)
         *
         * @return bool
         */
        protected function is_bot_user_agent()
        {
        }
        /**
         * Method sanitized_current_url.
         *
         * @since 4.3.0-3
         * @return string
         */
        public static function sanitized_current_url()
        {
        }
        /**
         * Add the `woomc` global object via localize.
         *
         * @since 2.8.3 Remove min_max_price from the URL (added by Filter-by-price widget).
         * @since 4.3.0-2 Added COOKIEPATH and COOKIE_DOMAIN.
         *
         * @return void
         */
        protected function make_state_object()
        {
        }
        /**
         * Method inline_front_libs_js.
         *
         * @since 4.3.0-3
         * @return void
         */
        protected function inline_front_libs_js()
        {
        }
        /**
         * True is security cookie is set.
         *
         * @return bool
         */
        protected function is_secure()
        {
        }
    }
}
namespace WOOMC\Integration {
    /**
     * Class AbstractIntegration
     *
     * @package WOOMC\Integration
     */
    abstract class AbstractIntegration implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * DI: Price Controller.
         *
         * @var \WOOMC\Price\Controller
         */
        protected $price_controller;
        /**
         * Constructor.
         *
         * @param \WOOMC\Price\Controller $price_controller The price controller.
         */
        public function __construct(\WOOMC\Price\Controller $price_controller)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        abstract public function setup_hooks();
        /**
         * Pass-through to the Converter.
         *
         * @since 2.8.3
         *
         * @param string|int|float $value   The price.
         * @param \WC_Product      $product The Product object. Reserved for future use.
         * @param string           $to      Currency convert to. Default is the currently selected.
         * @param string           $from    Currency convert from. Default is store base.
         * @param bool             $reverse If this is a reverse conversion.
         *
         * @return float|int|string
         */
        public function filter__convert($value, $product = null, $to = '', $from = '', $reverse = false)
        {
        }
    }
    /**
     * Class Avada
     *
     * @package WOOMC\Integration
     */
    class Avada implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * WooMC switcher placeholders mapped to inert sentinel strings.
         *
         * @var array<string,string>
         */
        private const PLACEHOLDER_MAP = array('{{code}}' => '__TIV_MC_PLACEHOLDER_CODE__', '{{name}}' => '__TIV_MC_PLACEHOLDER_NAME__', '{{symbol}}' => '__TIV_MC_PLACEHOLDER_SYMBOL__', '{{flag}}' => '__TIV_MC_PLACEHOLDER_FLAG__');
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Encode WooMC placeholders to sentinels before Avada parses dynamic data.
         *
         * @param mixed $content Filter input.
         *
         * @return mixed
         */
        public function encode($content)
        {
        }
        /**
         * Decode sentinels back to WooMC placeholders after Avada has parsed dynamic data.
         *
         * @param mixed $content Filter input.
         *
         * @return mixed
         */
        public function decode($content)
        {
        }
    }
}
namespace WOOMC\Integration\Booking {
    /**
     * Class ABookingIntegration
     *
     * @package WOOMC\Integration\Booking
     */
    abstract class ABookingIntegration extends \WOOMC\Integration\AbstractIntegration
    {
        /**
         * Bookings version before 1.15.0 is "legacy".
         *
         * @since 1.17.1
         *
         * @var bool
         */
        protected $is_legacy_booking = false;
        /**
         * The PHP class of the product I am working with.
         *
         * @return string
         */
        abstract protected function my_product_class();
        /**
         * Is the product "mine" (by its PHP class name)?
         *
         * @param \WC_Product_Booking|\WC_Product_Accommodation_Booking|\WC_Product $product The Product object.
         *
         * @return bool
         */
        protected function is_my_product($product)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Short-circuit the price conversion for Bookings in some specific cases.
         *
         * @param false|string|int|float   $pre_value  Initially passed as "false". May return the actual value.
         * @param string|int|float         $value      The price.
         * @param \WC_Product_Booking|null $product    The product object.
         * @param string                   $price_type Regular, Sale, etc.
         *
         * @return string|int|float|false
         *
         * @internal filter.
         */
        abstract public function filter__woocommerce_multicurrency_pre_product_get_price($pre_value, $value, $product = null, $price_type = '');
        /**
         * Convert Booking addon prices in the cart.
         * This filter is not required since Booking 1.15.2.
         *
         * @see        calculate_addon_costs().
         * @since      1.14.1
         *
         * @param mixed $addon          Unused.
         * @param int   $product_id     The Product ID.
         *
         * @param array $cart_item_data Array of cart item data.
         *
         * @return array
         *
         * @deprecated 1.17.3
         *
         * @internal   filter.
         */
        public function filter__woocommerce_product_addon_cart_item_data(
            $cart_item_data,
            /**
             * Unused.
             *
             * @noinspection PhpUnusedParameterInspection
             */
            $addon,
            $product_id
        )
        {
        }
        /**
         * Convert Booking resource costs.
         *
         * @param array               $resources The `id=>value` array of all resources.
         * @param \WC_Product_Booking $product   The Product object.
         *
         * @return array
         * @internal     filter.
         *
         * @noinspection PhpUndefinedClassInspection If not using Booking.
         */
        public function filter__booking_resources($resources, $product = null)
        {
        }
        /**
         * Convert additional booking prices (eg, costs per person).
         *
         * @since        1.13.0
         *
         * @param array               $pricing The pricing_rules.
         * @param \WC_Product_Booking $product The product.
         *
         * @return array
         *
         * @internal     filter.
         */
        public function filter__woocommerce_product_get_pricing($pricing, $product)
        {
        }
        /**
         * Recalculate booking cost for each item in the cart.
         * Without it, when the currency changes, costs in the cart stay the same.
         *
         * @since 1.3.0
         * @since 1.17.1 Support Bookings 1.15.0+
         *
         * @param \WC_Cart $cart The cart.
         *
         * @return \WC_Cart
         */
        public function action__woocommerce_before_calculate_totals($cart)
        {
        }
        /**
         * Calculate the cost of product add-ons.
         *
         * Adapted from {@see \WC_Bookings_Addons::add_cart_item_data_adjust_booking_cost}
         *
         * @see          \WC_Bookings_Addons::add_cart_item_data_adjust_booking_cost
         * @since        1.18.0
         *
         * @param float|int $cost           The cost calculated in the caller.
         *
         * @param array     $cart_item_data Extra data for cart item.
         *
         * @return float|int
         * @noinspection DuplicatedCode
         */
        protected function calculate_addon_costs($cart_item_data, $cost)
        {
        }
    }
    /**
     * Class OWCBookingForm
     *
     * @package WOOMC\Integration\Booking
     */
    class OWCBookingForm extends \WC_Booking_Form
    {
        /**
         * Always true.
         * Need to skip validation when we recalculate the costs of booking in the cart.
         *
         * @see ABookingIntegration::action__woocommerce_before_calculate_totals()
         *
         * @param array $data The booking data.
         *
         * @return true
         */
        public function is_bookable($data)
        {
        }
    }
    /**
     * Class OWCProductBooking
     *
     * @package WOOMC\Integration\Booking
     */
    class OWCProductBooking extends \WC_Product_Booking
    {
        /**
         * Always true.
         * Need to skip validation when we recalculate the costs of booking in the cart.
         *
         * @see ABookingIntegration::action__woocommerce_before_calculate_totals()
         *
         * @param array $data The booking data.
         *
         * @return true
         */
        public function is_bookable($data)
        {
        }
    }
    /**
     * Class WCAccommodationBooking
     */
    class WCAccommodationBooking extends \WOOMC\Integration\Booking\ABookingIntegration
    {
        /**
         * The PHP class of the product I am working with.
         *
         * @return string
         */
        protected function my_product_class()
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Short-circuit the price conversion for Bookings in some specific cases.
         *
         * @param false|string|int|float                 $pre_value  Initially passed as "false". May return the actual value.
         * @param string|int|float                       $value      The price.
         * @param \WC_Product_Accommodation_Booking|null $product    The product object.
         * @param string                                 $price_type Regular, Sale, etc.
         *
         * @return string|int|float|false
         *
         * @internal filter.
         */
        public function filter__woocommerce_multicurrency_pre_product_get_price($pre_value, $value, $product = null, $price_type = '')
        {
        }
    }
    /**
     * Class WCBookings
     */
    class WCBookings extends \WOOMC\Integration\Booking\ABookingIntegration
    {
        /**
         * The PHP class of the product I am working with.
         *
         * @return string
         */
        protected function my_product_class()
        {
        }
        /**
         * Is this my product?
         *
         * @since 2.3.0 Override the parent method to work with the OWCProductBooking class.
         *
         * @param \WC_Product|\WC_Product_Booking $product The Product object.
         *
         * @return bool
         */
        protected function is_my_product($product)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Additional tags to hook to the product price conversion.
         *
         * @since 1.3.0
         * @since 1.17.2 Convert `display_cost`.
         *
         * @param string[] $filter_tags The array of filter tags (the filter names).
         *
         * @return string[]
         */
        public function filter__woocommerce_multicurrency_get_props_filters($filter_tags)
        {
        }
        /**
         * Short-circuit the price conversion in some specific cases.
         *
         * @param false|string|int|float   $pre_value  Initially passed as "false". May return the actual value.
         * @param string|int|float         $value      The price.
         * @param \WC_Product_Booking|null $product    The product object.
         * @param string                   $price_type Regular, Sale, etc.
         *
         * @return string|int|float|false
         *
         * @internal filter.
         */
        public function filter__woocommerce_multicurrency_pre_product_get_price($pre_value, $value, $product = null, $price_type = '')
        {
        }
    }
}
namespace WOOMC\Integration\Cache {
    /**
     * Class CacheAbstract.
     *
     * Each cache-plugin backend (JetpackBoost, WPSuperCache, W3TotalCache) extends this and
     * overrides only what differs from the cookie-vary baseline. WP Rocket stays loader-direct
     * (woocommerce-multicurrency.php:82, intentional since 4.4.4) and may extend this for
     * shared bits without going through Controller's dispatcher.
     *
     * @since 4.8.0
     */
    abstract class CacheAbstract extends \WOOMC\Abstracts\Hookable
    {
        /**
         * The cookie WooMC varies cache keys by.
         *
         * Convenience alias of Detector::COOKIE_FORCED_CURRENCY for fixtures and tests.
         *
         * @since 4.8.0
         * @var string
         */
        public const COOKIE_NAME = \WOOMC\Currency\Detector::COOKIE_FORCED_CURRENCY;
        /**
         * Operating mode: WooMC actively integrates with the active page cache so every visitor
         * sees the correct currency. Default.
         *
         * @since 5.0.0
         * @var string
         */
        public const MODE_AUTO = 'auto';
        /**
         * Operating mode: WooMC does not change how the page cache behaves. For admins who
         * configure per-currency caching themselves.
         *
         * @since 5.0.0
         * @var string
         */
        public const MODE_OFF = 'off';
        /**
         * The current cache-handling operating mode - one of the MODE_* constants.
         *
         * Any unrecognized stored value normalizes to MODE_AUTO (the safe default).
         *
         * @since 5.0.0
         * @return string
         */
        public static function get_mode(): string
        {
        }
        /**
         * Whether WooMC should wire its cache handling this request. False only in MODE_OFF.
         *
         * @since 5.0.0
         * @return bool
         */
        public static function is_handling_enabled(): bool
        {
        }
        /**
         * Wire shared hooks. Subclasses call parent::setup_hooks() and add backend-specific wiring.
         *
         * @since 4.8.0
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Is this backend's page cache currently active (plugin loaded AND caching engaged)?
         *
         * Each backend defines its own predicate. Declared here so the Controller can dispatch and clean
         * up over a `class-string<CacheAbstract>` list type-safely.
         *
         * @since 5.0.0
         * @return bool
         */
        abstract public static function is_active(): bool;
        /**
         * Flush this backend's cache. Subclasses override with the backend-specific mechanism.
         *
         * @since 4.8.0
         * @return void
         */
        public function flush_cache(): void
        {
        }
        /**
         * React to WooMC being activated (or its cache handling being (re)enabled) while this backend
         * is the active page cache.
         *
         * Default: flush, so any pages cached in a single currency BEFORE WooMC came up are purged and
         * re-rendered under the per-currency vary. Backends that persist a footprint into the FOREIGN
         * plugin's own config (WP Super Cache, W3 Total Cache, WP-Optimize, Cache Enabler, WP Fastest
         * Cache) override this to (re)register that footprint first, then flush.
         *
         * Symmetric with {@see on_woomc_deactivation}. Called load-order-independently: from
         * {@see Controller::on_woomc_activation} (WooMC activated after the backend was already up) and
         * from the Controller's `activated_plugin` listener (backend activated after WooMC).
         *
         * @since 5.0.0
         * @return void
         */
        public function on_woomc_activation(): void
        {
        }
        /**
         * Clean up this backend's footprint when WooMC is deactivated OR its cache handling is switched
         * Off while WooMC stays active.
         *
         * Default: flush, so stale per-currency entries do not linger. Backends that write a WooMC cookie
         * into the FOREIGN plugin's OWN config override this to REMOVE it first (so the plugin does not
         * keep varying/excluding by a cookie WooMC no longer sets), then flush: WP Super Cache (its
         * `wpsc_cookies` vary list), W3 Total Cache (its `woomc_*` cookie groups), WP-Optimize (its
         * `wpo_cache_cookies` vary list), Cache Enabler and WP Fastest Cache (their `woomc-no-cache` reject
         * lists). Dispatched per active backend from {@see Controller::on_woomc_deactivation} (WooMC
         * deactivation) and {@see Controller::on_after_save_settings} (save-to-Off). The foreign cache
         * plugin is still active during both, so its config is reachable. (WP Rocket has its own cleanup,
         * bound to the loader's register_deactivation_hook, since it is launched outside the Controller.)
         *
         * @since 5.0.0
         * @return void
         */
        public function on_woomc_deactivation(): void
        {
        }
        /**
         * Disable cache for the current request if the currency cookie is not set.
         *
         * Default mechanism: define DONOTCACHEPAGE (honored by Boost and W3TC in PHP-served mode).
         * WPSuperCache overrides to set the global $cache_enabled flag instead - its native disable.
         *
         * @since 4.8.0
         * @return void
         */
        public function maybe_disable_first_visit(): void
        {
        }
        /**
         * Tell the page cache not to store the current render.
         *
         * Default: define DONOTCACHEPAGE, the de facto standard. A backend whose cache ignores it
         * overrides this to add its own native call ({@see WPFastestCache::do_not_cache_this_page}).
         *
         * @since 5.3.1
         * @return void
         */
        protected static function do_not_cache_this_page(): void
        {
        }
        /**
         * Whether this backend needs the URL hash to vary caches (vs cookie alone).
         *
         * Reserved for a future Force-URL setting (Q6 deferred). For 4.8.0 all backends use
         * cookie-vary only, so the default is false.
         *
         * @since 4.8.0
         * @return bool
         */
        protected function uses_url_hash(): bool
        {
        }
        /**
         * Block writing the current render to cache when the active currency is NOT the cache
         * currency (the WRITE-side guard for REJECT backends).
         *
         * The reject cookie ({@see Detector::COOKIE_NO_CACHE}) only stops RETURNING non-cache-currency
         * visitors - they already carry it. The very first render in a non-cache currency (e.g. a
         * cookieless visit geolocated elsewhere) has no such cookie yet and, on a URL-keyed / direct-serve
         * cache, could be written as the shared cache file and then served to cache-currency visitors.
         * DONOTCACHEPAGE blocks that write. Cache currency renders are written normally. Used by the
         * REJECT backends (Cache Enabler, WP Fastest Cache, WP-Optimize); mirrors WPRocket's direct-serve
         * write guard.
         *
         * @since 5.0.0
         * @since 5.3.1 Via {@see do_not_cache_this_page}, so a backend that ignores DONOTCACHEPAGE is covered.
         * @return void
         */
        public static function maybe_donotcachepage_for_non_cache_currency(): void
        {
        }
    }
    /**
     * Class CacheAdvisor.
     *
     * Detects how the active page cache (if any) interacts with WooMC's per-currency vary,
     * and produces human-readable advisories for the settings panel. Three tiers:
     *
     *   Tier 0 - optimal. One of our integrated plugins is active and PHP-served. No advisory;
     *            cookie-vary works and every currency gets its own cache entry.
     *
     *   Tier 1 - integrated but in a direct-serve mode that is single-currency by nature: only
     *            WP Rocket's mod_rewrite (.htaccess) block, where Apache serves one URL-keyed file
     *            before PHP and cannot vary by cookie. Informational, not a warning - it is a
     *            supported choice (cache currency static-fast, others fresh). (W3TC Disk: Enhanced
     *            and WPSC Expert are NOT here: both still vary per currency - W3TC via cookie groups,
     *            WPSC via per-value PHP wp-cache for cookied visitors - so they stay Tier 0 even though
     *            they are mod_rewrite-served. Their is_*_in_rewrite_mode() detectors feed no advisory.)
     *
     *   Tier 2 - foreign cache. A page cache WooMC does NOT integrate is active (e.g. WP
     *            Fastest Cache, LiteSpeed), either PHP-served (an advanced-cache.php drop-in)
     *            or direct-served (its own .htaccess block). The vary cannot be enforced and
     *            there is no plugin section to host the warning, so foreign_cache() feeds a
     *            single generic advisory that Controller prepends to the settings fields.
     *
     * Wherever a cache cannot keep per-currency copies, the always-on client-side WooMCCacheBuster
     * still corrects the DISPLAYED currency via a POST-reload (POST is excluded from these caches), so
     * multi-currency prices stay correct - the cost is lost cache efficiency, not wrong prices. As of
     * 5.0.0 no advisory is a "fix this" warning: every integrated backend varies (so it is silent), WP
     * Rocket direct-serve is informational, and only an unsupported/foreign cache gets a soft
     * "for best results, use a recommended plugin" recommendation.
     *
     * Tier-2 detection is best-effort: it recognizes known foreign families and the generic
     * advanced-cache.php drop-in. A rewrite-only plugin that sets no WP_CACHE and whose
     * .htaccess marker we do not know can slip through - the only universal "vary defeated"
     * signal is the buster firing at runtime, which server-side detection cannot see.
     *
     * Boost is intentionally never flagged for rewrite mode - it is always PHP-served via its
     * advanced-cache.php drop-in, so it has no direct-serve mode to detect.
     *
     * @since 4.8.0
     */
    class CacheAdvisor
    {
        /**
         * Known foreign (non-integrated) cache .htaccess block markers. Used to detect a
         * direct-serve cache that WooMC does not integrate. Extend as new families surface;
         * markers for OUR integrations (Rocket / WPSC) are deliberately absent - those are
         * Tier 1 and handled in-section.
         *
         * @since 4.8.0
         * @var string[]
         */
        private const FOREIGN_REWRITE_MARKERS = array('# BEGIN LSCACHE');
        /**
         * The cache advisory HTML for the WooMC "Cache handling settings" section - the single surface
         * for every cache advisory (5.0.0). Returns one severity-styled notice, or '' when nothing needs
         * saying. Rendered below the section intro by {@see \WOOMC\Settings\Fields::section_cache}.
         *
         * Severity drives placement: an `error` (the multi-cache conflict) OMITS the `inline` class so
         * WordPress core (`wp-admin/js/common.js`) hoists it to the top of the page; `warning` / `info`
         * keep `inline` and stay in the section. The count rule mirrors {@see Controller::setup_hooks}:
         * >1 = conflict, 0 = maybe a foreign cache, 1 = the active backend confirmed (adapted to its mode).
         *
         * @since 5.0.0
         * @return string
         */
        public static function get_advisory_html(): string
        {
        }
        /**
         * Copy: cache handling is off. The only advisory allowed to mention the displayed currency,
         * because in Off mode the admin has taken responsibility for it.
         *
         * @since 5.0.0
         * @return string
         */
        private static function message_off(): string
        {
        }
        /**
         * Copy: more than one page cache active (conflict). Names the conflicting plugins.
         *
         * @since 5.0.0
         *
         * @param string[] $names Human-readable names of the active cache plugins.
         *
         * @return string
         */
        private static function message_conflict(array $names): string
        {
        }
        /**
         * Copy: an active single-currency (reject) backend - Cache Enabler or WP Fastest Cache. Three lines:
         * names the plugin, explains the single-currency behavior, and points at the Cache currency selector
         * (rendered below) and the compatibility guide (linked above).
         *
         * @since 5.0.0
         *
         * @param string $plugin_name The active plugin's human-readable name.
         *
         * @return string
         */
        private static function message_single_currency(string $plugin_name): string
        {
        }
        /**
         * Copy: positive confirmation for an active per-currency (vary) backend - every currency is cached.
         *
         * @since 5.0.0
         *
         * @param string $plugin_name The active plugin's human-readable name.
         *
         * @return string
         */
        private static function message_backend_active(string $plugin_name): string
        {
        }
        /**
         * Tier-2 detector: a page cache WooMC does NOT integrate appears to be active.
         *
         * Returns null when an integrated backend owns the cache (Tier 0/1 handle that) or
         * when no foreign cache is detected. Otherwise returns an advisory:
         *   ['code' => 'foreign_rewrite'|'foreign', 'message' => '<localized>']
         *
         * 'foreign_rewrite' wins when a known direct-serve .htaccess block is present (Apache
         * serves before PHP); 'foreign' covers a PHP-served drop-in (advanced-cache.php).
         *
         * @since 4.8.0
         * @return array{code:string,message:string}|null
         */
        public static function foreign_cache(): ?array
        {
        }
        /**
         * Is the "Cache currency" setting relevant right now? True only when WooMC is actively handling a
         * single-currency (reject / direct-serve) backend - the reject family (Cache Enabler, WP Fastest
         * Cache) or WP Rocket in mod_rewrite mode - where one currency is served from cache and the rest
         * fresh. For per-currency (vary) backends, no cache, a foreign cache, a conflict, or Off, the
         * setting has no effect, so the settings panel hides it.
         *
         * @since 5.0.0
         * @return bool
         */
        public static function is_cache_currency_relevant(): bool
        {
        }
        /**
         * Is more than one integrated page cache active (the conflict / full-stop state)? While true,
         * WooMC wires nothing regardless of the operating mode, so the settings panel hides the Operating
         * mode control - it would otherwise contradict the conflict notice ("cache handling turned off").
         *
         * @since 5.0.0
         * @return bool
         */
        public static function is_cache_conflict(): bool
        {
        }
        /**
         * Is any cache plugin WooMC integrates currently active?
         *
         * @since 4.8.0
         * @since 5.0.0 Reads the single source of truth, {@see Controller::detect()}.
         * @return bool
         */
        private static function is_integrated_backend_active(): bool
        {
        }
        /**
         * Is a known foreign cache serving pages directly via an .htaccess block?
         *
         * @since 4.8.0
         * @return bool
         */
        private static function is_foreign_rewrite_present(): bool
        {
        }
        /**
         * Is a foreign PHP page-cache drop-in active? WP_CACHE on AND a non-empty
         * advanced-cache.php present. Since no integrated backend is active when this runs,
         * any such drop-in is foreign (or a stale leftover). The non-empty check skips the
         * 0-byte stub WP Rocket leaves behind on deactivation.
         *
         * @since 4.8.0
         * @return bool
         */
        private static function is_foreign_dropin_present(): bool
        {
        }
        /**
         * Copy: WP Rocket direct-serve (mod_rewrite) mode. Informational, not a
         * warning: direct-serve is a supported mode (5.0.0). The cache currency is served as a
         * fast static file; other currencies are shown with correct multi-currency prices but served fresh
         * (not cached). WooMC adapts automatically (reject cookie + write guard).
         *
         * @since 4.8.0
         * @since 5.0.0 Direct-serve is supported; copy is informational, not a "fix your filter" warning.
         * @return string
         */
        private static function message_rocket_rewrite(): string
        {
        }
        /**
         * Generic Tier-2 copy for any non-integrated cache. Deliberately omits the serving
         * mechanism (.htaccess / Apache / drop-in) - the admin cannot act on it; the actionable
         * advice is simply to switch to a plugin WooMC optimizes.
         *
         * @since 4.8.0
         * @return string
         */
        private static function message_foreign(): string
        {
        }
    }
    /**
     * Class CacheEnabler.
     *
     * Cache Enabler is a PHP-served page cache (an `advanced-cache.php` drop-in), URL-keyed with NO
     * cookie-value hook - so per-currency VARY is impossible. It is integrated as REJECT: the cache
     * currency stays cached and served; a non-cache-currency visitor carries
     * {@see Detector::COOKIE_NO_CACHE}, which we register into Cache Enabler's `excluded_cookies` regex,
     * so that visitor is neither cached nor served and falls through to a fresh PHP render (correct,
     * uncached, no flash). Logic ported from paywall's CacheCacheEnabler (cookie name swapped).
     *
     * `excluded_cookies` is a single REGEX string matched against each cookie NAME; we add our cookie
     * as a top-level alternation (`...|woomc-no-cache`) so it never disturbs the admin's own pattern.
     * The value lives in Cache Enabler's on-disk settings file (read before WordPress loads), so it is
     * PERSISTED via the `cache_enabler` option + a settings-file rewrite on `admin_init`; a runtime
     * filter cannot reach the pre-WordPress serve path.
     *
     * @since 5.0.0
     */
    class CacheEnabler extends \WOOMC\Integration\Cache\CacheAbstract
    {
        /**
         * The value written into `excluded_cookies` when it was empty: Cache Enabler's built-in default
         * exclusions (logged-in / postpass / comment author) plus our cookie as a top-level alternation.
         * Restored to empty (built-in default) on unregister.
         *
         * @since 5.0.0
         * @var string
         */
        private const SEEDED_EXCLUDED_COOKIES = '/^(wp-postpass|wordpress_logged_in|comment_author)_|woomc-no-cache/';
        /**
         * Is Cache Enabler active?
         *
         * Keyed on the plugin's main class, NOT `Cache_Enabler_Engine::$started`: `$started` is true
         * only on a FRONT-END request the engine ran, so it is FALSE on wp-admin - and the reject
         * cookie is persisted into Cache Enabler's config on `admin_init`, so a `$started` gate would
         * skip the registration entirely. Activating Cache Enabler engages caching (writes the drop-in
         * + WP_CACHE; there is no separate on/off toggle), so "main class loaded" == "this is the active
         * page cache" - true on both admin and front-end, which is what the integration needs.
         *
         * @since 5.0.0
         * @return bool
         */
        public static function is_active(): bool
        {
        }
        /**
         * Wire shared base + the reject registration and the non-cache-currency write guard.
         *
         * @since 5.0.0
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Flush Cache Enabler's whole cache (on WooMC settings save).
         *
         * @since 5.0.0
         * @return void
         */
        public function flush_cache(): void
        {
        }
        /**
         * Register our presence cookie into Cache Enabler's `excluded_cookies` regex. Idempotent.
         *
         * @since 5.0.0
         * @return void
         */
        public function register_reject_cookie(): void
        {
        }
        /**
         * On WooMC activation / re-enable: persist our presence cookie into Cache Enabler's exclude list,
         * then flush. Load-order independent - runs at activation time when {@see setup_hooks}'s admin_init
         * handler may not have fired this request.
         *
         * @since 5.0.0
         * @return void
         */
        public function on_woomc_activation(): void
        {
        }
        /**
         * On WooMC deactivation / Off: remove our presence cookie from Cache Enabler's exclude list, then
         * flush.
         *
         * @since 5.0.0
         * @return void
         */
        public function on_woomc_deactivation(): void
        {
        }
        /**
         * Remove our presence cookie from Cache Enabler's `excluded_cookies` regex.
         *
         * @since 5.0.0
         * @return void
         */
        public function unregister_reject_cookie(): void
        {
        }
        /**
         * Add our cookie to an `excluded_cookies` regex as a top-level alternation.
         *
         * @since 5.0.0
         *
         * @param string $current The current regex (possibly empty).
         *
         * @return string
         */
        private static function add_cookie_to_regex(string $current): string
        {
        }
        /**
         * Remove our cookie from an `excluded_cookies` regex, reversing {@see add_cookie_to_regex}.
         *
         * @since 5.0.0
         *
         * @param string $current The current regex.
         *
         * @return string Empty string when we restore the built-in default.
         */
        private static function remove_cookie_from_regex(string $current): string
        {
        }
        /**
         * Persist the settings: update the `cache_enabler` option AND rewrite the on-disk settings file
         * so the pre-WordPress engine reads the new value regardless of hook timing this request.
         *
         * @since 5.0.0
         *
         * @param array $settings The full settings array.
         *
         * @return void
         */
        private static function persist_settings(array $settings): void
        {
        }
    }
    /**
     * Integration Cache Controller class.
     *
     * {@see detect()} is the single source of truth for "which supported page caches are active"
     * (multi-valued - cache plugins are not mutually exclusive). Dispatch follows a count rule:
     *
     *   0 active -> no integrated backend; surface a Tier-2 foreign-cache advisory if one is present.
     *   1 active -> wire that backend (unless the admin set Operating mode = Off).
     *  >1 active -> FULL STOP: wire nothing and warn. Integrating one page cache while another serves
     *               risks serving the wrong currency, so WooMC stays out until only one remains.
     *
     * As of 5.0.0 WP Rocket is dispatched here like every other backend - the loader-direct launch and
     * its installed/active split were dropped (STEP 2 of the cache refactor). detect() counts it (so
     * Rocket + another = a conflict), and when it is the single active backend it is dispatched normally.
     *
     * Load-order independence: the runtime wiring runs on `plugins_loaded` LATE (App), which is early
     * enough for a cache MISS (a cache HIT is served pre-plugins from a file whose key already baked our
     * cookies). Activation is handled without relying on plugin file order via two extra entry points -
     * {@see on_woomc_activation} (WooMC activated after the backend) and {@see on_plugin_activated} (the
     * backend activated after WooMC). Rocket - which bakes its config during its OWN activation - is the
     * sharpest test of this, guarded by 091's R-W / W-R cases and 092.
     */
    class Controller extends \WOOMC\Abstracts\Hookable
    {
        /**
         * Backend classes wired this request, so a second dispatch (e.g. from the activated_plugin
         * listener after plugins_loaded already wired one) does not double-add hooks.
         *
         * @since 5.0.0
         * @var array<int, class-string>
         */
        private static array $wired = array();
        /**
         * Setup actions and filters.
         *
         * @since 2.7.1
         * @since 4.8.0 Added JetpackBoost branch, Rocket guard, and (when the W3TC spike resolves) W3TotalCache branch.
         * @since 5.0.0 Count-rule dispatch via detect(); save-to-Off cleanup + activated_plugin listener.
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Every cache backend WooMC integrates, human name => backend class.
         *
         * The single registry behind {@see detect()}. WP Rocket is listed so it is counted for the
         * conflict rule and the advisor, even though it is dispatched loader-direct rather than from
         * here (so the map type is the looser `class-string`, not `class-string<CacheAbstract>`).
         *
         * @since 5.0.0
         * @return array<string, class-string>
         */
        public static function all_backends(): array
        {
        }
        /**
         * Which supported page caches are active right now (multi-valued - cache plugins are not
         * mutually exclusive). The cache analog of {@see \WOOMC\Integration\Multilingual::detect()},
         * returning the SET of active backends rather than one status. Feeds dispatch, the conflict
         * rule, and {@see CacheAdvisor}. NOT memoized: activation can flip a backend active mid-request
         * (the activated_plugin path relies on a fresh probe).
         *
         * @since 5.0.0
         * @return array<string, class-string> Human name => class, for the active subset of all_backends().
         */
        public static function detect(): array
        {
        }
        /**
         * Handle WooMC being activated while a page cache is already up (the B-W order).
         *
         * Bound to the plugin's activation hook (App.php). Load-order independent: at activation time
         * WooMC's own `plugins_loaded` wiring has not run this request, so this (re)registers the active
         * backend's persisted footprint and flushes directly. Honors the count rule (a conflict wires
         * nothing) and the Off mode.
         *
         * Same-request activation (`wp plugin activate a b c`, bulk activate): when WooMC is activated
         * BEFORE the backend in one request, the backend is not loaded yet here (detect() = 0), and the
         * `activated_plugin` listener from {@see setup_hooks} was never added, because WooMC was inactive
         * when this request booted. So the listener is added here too; it fires when the backend's own
         * activation completes. `add_action` dedupes the same callback, so a normal request is unaffected.
         *
         * @since 5.0.0
         * @since 5.3.1 Adds the `activated_plugin` listener (GH #30: W3TC cookie groups were lost).
         * @return void
         */
        public static function on_woomc_activation(): void
        {
        }
        /**
         * Handle a plugin being activated AFTER WooMC (the W-B / W-R order).
         *
         * Fires on `activated_plugin` (any plugin, wp-cli included). We re-detect rather than match the
         * activated plugin's basename: if exactly one supported, dispatched backend is now active and not
         * yet wired this request, wire it and (re)register its footprint + flush immediately (its own
         * admin_init registration may already have passed this request).
         *
         * @since 5.0.0
         *
         * @param string $plugin Activated plugin basename (unused - we re-detect).
         *
         * @return void
         */
        public static function on_plugin_activated($plugin): void
        {
        }
        /**
         * On WooMC settings save: (re)assert backend footprints for the current mode.
         *
         * In AUTO the dispatched backend already flushed (its own `after_save_settings -> flush_cache`)
         * and re-registered its footprint on admin_init this request, so there is nothing to add. In Off -
         * including the AUTO->Off transition save, where this request bootstrapped in AUTO and DID wire the
         * backend - strip every active backend's persisted footprint and flush, so no foreign plugin keeps
         * varying/excluding by a cookie WooMC no longer manages.
         *
         * @since 5.0.0
         * @return void
         */
        public static function on_after_save_settings(): void
        {
        }
        /**
         * Wire a single backend's runtime hooks, once per request.
         *
         * @since 5.0.0
         *
         * @param class-string<CacheAbstract> $backend_class The backend to dispatch.
         *
         * @return void
         */
        private static function dispatch_backend(string $backend_class): void
        {
        }
        /**
         * Enforce DONOTCACHEPAGE on cart and checkout pages on template_redirect.
         *
         * WC sets this itself on these pages, so under normal conditions this is a no-op. The explicit
         * re-assertion is a safety net against backends that ignore WC's signal or a future WC regression.
         *
         * @since 4.8.0
         * @return void
         */
        public static function reinforce_no_cache_on_transactional_pages(): void
        {
        }
        /**
         * Clean up on WooMC deactivation.
         *
         * Each active dispatched backend gets its {@see CacheAbstract::on_woomc_deactivation} called -
         * the backends that persist a WooMC footprint into a foreign plugin's config strip it (so that
         * plugin does not keep varying/excluding by a cookie WooMC no longer sets), then flush. The
         * foreign cache plugin is still active during this (deactivation) request, so its config is
         * reachable. WP Rocket is NOT here: it cleans itself via its own register_deactivation_hook
         * ({@see WPRocket::on_woomc_deactivation}). Iterates every dispatched backend (not just the first
         * active one) so a misconfigured multi-cache site is fully cleaned.
         *
         * Called from {@see \WOOMC\App::on_deactivation()}.
         *
         * @since 5.0.0
         * @return void
         */
        public static function on_woomc_deactivation(): void
        {
        }
        /**
         * The CacheAbstract backends dispatched from here, in preference order. As of 5.0.0 WP Rocket is
         * included - it was folded into the shared dispatch/cleanup model (the loader-direct launch and its
         * own register_(de)activation_hook were dropped; see {@see WPRocket::setup_hooks}).
         *
         * @since 5.0.0
         * @return array<int, class-string<CacheAbstract>>
         */
        private static function dispatched_backends(): array
        {
        }
        /**
         * The dispatched (non-Rocket) backends that are currently active.
         *
         * @since 5.0.0
         * @return array<int, class-string<CacheAbstract>>
         */
        private static function dispatched_active(): array
        {
        }
    }
    /**
     * Class Hummingbird.
     *
     * Hummingbird builds its page-cache key from an ALLOWLIST of cookies, matched by the
     * hardcoded regex `^wp-postpass_|^comment_author_|^wordpress_logged_in_|^wphb_cache_`
     * (Page_Cache::get_cookies()). The regex is not filterable, so - unlike the other
     * backends - we cannot register WooMC's currency cookie into the vary list directly.
     *
     * Instead we use Hummingbird's documented per-cookie vary mechanism: any cookie whose
     * name begins with `wphb_cache_` is folded into the cache key, producing a distinct
     * cached file per value (WPMU DEV docs, "Caching by cookie", since Hummingbird 2.1).
     * So we mirror the active currency into a `wphb_cache_` cookie, set on the same
     * lifecycle as the currency cookie. The first-visit (no-cookie) case is covered by the
     * base DONOTCACHEPAGE guard, which Hummingbird honors (Page_Cache: "Page not cached
     * because DONOTCACHEPAGE is defined").
     *
     * @since 4.8.0
     */
    class Hummingbird extends \WOOMC\Integration\Cache\CacheAbstract
    {
        /**
         * Mirror cookie that carries the active currency into Hummingbird's vary key.
         *
         * The `wphb_cache_` prefix is what Hummingbird matches; the remainder is free-form.
         * Set alongside the currency cookie so it round-trips identically and the served and
         * written cache keys agree.
         *
         * @since 4.8.0
         * @var string
         */
        public const VARY_COOKIE = 'wphb_cache_woomc_currency';
        /**
         * Is Hummingbird active with page caching enabled?
         *
         * Reads the persisted page-cache flag from the `wphb_settings` option rather than
         * going through Hummingbird\Core\Utils::get_module(). That helper depends on
         * WP_Hummingbird's module registry being populated, which is NOT guaranteed at the
         * early `init` priority where the WooMC cache Controller dispatches - there it reads
         * `modules` on a null `core` and returns nothing, so detection would spuriously fail.
         * The option is available as soon as options load, in both web and WP-CLI contexts.
         *
         * @since 4.8.0
         * @return bool
         */
        public static function is_active(): bool
        {
        }
        /**
         * Wire shared base hooks (DONOTCACHEPAGE first-visit guard + flush-on-save), the
         * currency-mirror cookie, and the settings-panel section (admin only).
         *
         * @since 4.8.0
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Set the `wphb_cache_` mirror cookie to the active currency.
         *
         * @since 4.8.0
         *
         * @param string $currency The active currency code.
         *
         * @return void
         */
        public function set_vary_cookie($currency): void
        {
        }
        /**
         * Flush Hummingbird's page cache via its public action.
         *
         * @since 4.8.0
         * @return void
         */
        public function flush_cache(): void
        {
        }
    }
    /**
     * Class JetpackBoost.
     *
     * Boost uses a denylist cookie key model - it varies by every cookie not on its ignore
     * list - so the currency cookie automatically varies the cache with zero registration.
     * This class wires only the shared flush-on-save and first-visit guard from CacheAbstract.
     *
     * KEY GOTCHA (from paywall 4.10.0 cache work): Boost ignores nocache_headers() but honors
     * DONOTCACHEPAGE. The base maybe_disable_first_visit() default uses DONOTCACHEPAGE, so
     * this works out without an override.
     *
     * @since 4.8.0
     */
    class JetpackBoost extends \WOOMC\Integration\Cache\CacheAbstract
    {
        /**
         * Boost's main cache-engine class FQCN.
         *
         * Held as a string instead of `Boost_Cache::class` because that resolves the `use`
         * alias at compile time - which would error if Boost is not installed. Keeping it as
         * a literal string is safe under autoload + class_exists checks.
         *
         * @since        4.8.0
         * @var string
         * @noinspection ClassConstantCanBeUsedInspection
         */
        private const BOOST_CACHE_CLASS = 'Automattic\Jetpack_Boost\Modules\Optimizations\Page_Cache\Pre_WordPress\Boost_Cache';
        /**
         * Is Boost active with its page-cache engine class available?
         *
         * Used by the dispatcher to decide whether to wire WooMC's Boost-flavored hooks.
         * Note we deliberately do NOT call Boost_Cache::is_loaded() here - that only returns
         * true when Boost's advanced-cache.php drop-in is engaged on the current request, which
         * is never the case in wp-cli or admin context. Flush-on-save and the settings panel
         * still need to wire in those contexts, so the dispatch predicate is purely "plugin
         * installed + class available". The Boost_Cache::is_loaded() / DONOTCACHEPAGE branch
         * happens only when actually serving from cache.
         *
         * @since 4.8.0
         * @return bool
         */
        public static function is_active(): bool
        {
        }
        /**
         * Clear Boost's page cache via its public API (delete_recursive from home_url()).
         *
         * @since 4.8.0
         * @return void
         */
        public function flush_cache(): void
        {
        }
    }
    /**
     * Class W3TotalCache.
     *
     * W3TC is URL-keyed by default and ignores most cookies. The integration uses W3TC's
     * "cookie groups" feature (`pgcache.cookiegroups.enabled` + `pgcache.cookiegroups.groups`)
     * to register one group per enabled currency. Each group binds the cookie pattern
     * `woocommerce_multicurrency_forced_currency=<currency>` to its own cache key extension,
     * so per-currency requests land in distinct cache files without any URL changes.
     *
     * Works in BOTH engines. In Disk: Basic (engine=file) the group folds into the PHP cache key.
     * In Disk: Enhanced (engine=file_generic) W3TC emits per-group RewriteConds into .htaccess and
     * keys the served file by the matched group, so each currency lands in its own file - per-currency
     * vary holds there too. The Enhanced .htaccess rules are only written when W3TC's environment is
     * regenerated, which needs admin context; {@see maybe_register_cookie_groups} therefore runs on
     * `admin_init` and calls Root_Environment::fix_in_wpadmin after saving the groups. (Before 5.0.0 it
     * ran on front-end `init` and only saved the config, never regenerating .htaccess, so Enhanced vary
     * was silently inert.) Probe `w3tc-enhanced` confirms every currency is cached and served correctly.
     *
     * @since 4.8.0
     * @since 5.0.0 Register groups on admin_init + regenerate the environment so Disk: Enhanced varies.
     */
    class W3TotalCache extends \WOOMC\Integration\Cache\CacheAbstract
    {
        /**
         * Cookie-group name prefix.
         *
         * @since 4.8.0
         * @var string
         */
        private const GROUP_PREFIX = 'woomc_';
        /**
         * Is W3TC active with its page cache enabled?
         *
         * Narrow probe: we want this only when W3TC's page cache module is actually engaged.
         * The dispatcher must fall through if W3TC is installed but pgcache is off.
         *
         * @since 4.8.0
         * @return bool
         * @noinspection ClassConstantCanBeUsedInspection
         */
        public static function is_active(): bool
        {
        }
        /**
         * Is W3TC's page cache in Disk: Enhanced (file_generic / mod_rewrite) mode?
         *
         * Detected via the `pgcache.engine` config value: 'file' is Disk: Basic (PHP-served),
         * 'file_generic' is Disk: Enhanced (Apache serves the file before PHP). INFORMATIONAL ONLY -
         * it does NOT trigger an advisory, because Enhanced still varies per currency: WooMC's W3TC
         * cookie groups emit per-group RewriteConds, so each currency is served from its own static
         * file (proven by the `w3tc-enhanced` probe). So Enhanced is Tier 0 (optimal - and faster
         * than Basic), not a degraded mode. Kept as a factual detector, symmetric with
         * {@see WPSuperCache::is_in_rewrite_mode} and {@see WPRocket::is_in_rewrite_mode}. (Before 5.0.0
         * this fed a "switch to Disk: Basic" warning, which was wrong - the cookie-group .htaccess rules
         * just were not being regenerated; that is now fixed in {@see self::maybe_register_cookie_groups}.)
         *
         * @since        4.8.0
         * @since        5.0.0 Informational only; Enhanced varies correctly, so no advisory is raised.
         * @return bool
         * @noinspection ClassConstantCanBeUsedInspection
         */
        public static function is_in_rewrite_mode(): bool
        {
        }
        /**
         * Wire shared base + the cookie-group registration on init.
         *
         * @since 4.8.0
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Register one cookie group per enabled currency in W3TC's pgcache config.
         *
         * Compares against W3TC's live config slice for the `woomc_*` keys and only writes
         * when actually out of sync. Self-heals after any external reset of W3TC's config
         * (admin save that drops one of our groups, config import, restore-defaults, etc.).
         *
         * Preserves W3TC's own groups (mobile / loggedin / subscribers) - we merge into the
         * live array rather than replacing it.
         *
         * @since 4.8.0
         * @return void
         */
        public function maybe_register_cookie_groups(): void
        {
        }
        /**
         * Build the W3TC cookie-groups array - one group per currency.
         *
         * Each group binds the pattern `<cookie_name>=<currency>` to its own cache key
         * extension. Default group ("default") is left untouched - that's the bucket
         * for cookieless first-visit requests (which `maybe_disable_first_visit` blocks
         * from caching anyway via DONOTCACHEPAGE).
         *
         * @since 4.8.0
         *
         * @param string[] $currencies Enabled currency codes.
         *
         * @return array<string, array{enabled: bool, cache: bool, cookies: string[]}>
         */
        private function build_groups_array(array $currencies): array
        {
        }
        /**
         * Flush W3TC page cache via the public API.
         *
         * `w3tc_pgcache_flush` is a function in `w3-total-cache-api.php`, NOT a WP action - so
         * `do_action('w3tc_pgcache_flush')` is a no-op. Calling the function directly is the
         * supported public flush entry point.
         *
         * @since 4.8.0
         * @return void
         */
        public function flush_cache(): void
        {
        }
        /**
         * On WooMC activation / re-enable: (re)register the per-currency cookie groups, then flush.
         *
         * Load-order independent - runs at activation time when {@see setup_hooks}'s admin_init handler
         * may not have fired this request.
         *
         * @since 5.0.0
         * @return void
         */
        public function on_woomc_activation(): void
        {
        }
        /**
         * On WooMC deactivation / Off: remove our `woomc_*` cookie groups from W3TC's config (and
         * regenerate the environment so Disk: Enhanced drops the per-currency RewriteConds), then flush.
         *
         * Closes the pre-5.0.0 cleanup gap where the cookie groups were left in W3TC's config after WooMC
         * went away, so W3TC kept keying cache files by a cookie WooMC no longer set.
         *
         * @since 5.0.0
         * @return void
         */
        public function on_woomc_deactivation(): void
        {
        }
        /**
         * Remove every `woomc_*` cookie group from W3TC's pgcache config, preserving W3TC's own groups
         * (mobile / loggedin / subscribers). Disables the cookie-groups feature only if no non-WooMC
         * group remains. Regenerates the environment so Disk: Enhanced's .htaccess RewriteConds are
         * rewritten. No-op when nothing WooMC-owned is present.
         *
         * @since 5.0.0
         * @return void
         * @noinspection ClassConstantCanBeUsedInspection
         */
        public function unregister_cookie_groups(): void
        {
        }
    }
    /**
     * Class WPFastestCache.
     *
     * WP Fastest Cache serves static HTML straight from the site `.htaccess` (mod_rewrite, before PHP).
     * It has no PHP-served mode and is URL-keyed, so cookie-VARY is impossible - but it supports a
     * cookie EXCLUDE rule: an entry in the `WpFastestCacheExclude` option compiles into a
     * `RewriteCond %{HTTP:Cookie} !<name>` that makes Apache skip the cached file when the cookie is
     * present. It is integrated as REJECT: we register {@see Detector::COOKIE_NO_CACHE} there, so a
     * non-cache-currency visitor is never served the static cache and falls through to a fresh PHP
     * render - even on a raw GET, no JS. This replaces today's "unsupported / post-reload" handling.
     * Logic ported from paywall's CacheWPFastestCache (cookie name swapped).
     *
     * WPFC exposes no filter and its rules live in the baked `.htaccess`, so {@see register_reject_cookie}
     * persists the entry into the option and rewrites only WPFC's own `# Start WPFC Exclude` sub-block.
     * That runs on `admin_init` (an admin request), where WPFC's getABSPATH() resolves the site
     * `.htaccess` correctly.
     *
     * @since 5.0.0
     */
    class WPFastestCache extends \WOOMC\Integration\Cache\CacheAbstract
    {
        /**
         * The WPFC option holding its exclude rules (a JSON-encoded array of rule objects).
         *
         * @since 5.0.0
         * @var string
         */
        private const EXCLUDE_OPTION = 'WpFastestCacheExclude';
        /**
         * Is WP Fastest Cache active?
         *
         * @since 5.0.0
         * @return bool
         * @noinspection ClassConstantCanBeUsedInspection
         */
        public static function is_active(): bool
        {
        }
        /**
         * Wire shared base + the reject registration and the non-cache-currency write guard.
         *
         * @since 5.0.0
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * WP Fastest Cache ignores DONOTCACHEPAGE (it checks the constant only for 403 / 503 responses and
         * the Divi theme), so the first-visit guard and the non-cache-currency write guard did not stop it
         * from storing the render. Its own API is the global `wpfc_exclude_current_page()`, which fires the
         * action WPFC hooks while it decides to cache this request (before `init`, so our guards are late
         * enough). The constant is still defined for anything else that reads it.
         *
         * The WPFC call is made only for a front-end page render (`template_redirect`): WPFC appends an
         * "excluded" HTML comment to the output, and it does so BEFORE its JSON check, so calling it on a
         * REST / AJAX / WP-CLI request (the first-visit guard runs on `init` for every request) would corrupt
         * the response. Those requests never reach `template_redirect` (wc-ajax exits there at priority 0).
         *
         * @since 5.3.1
         * @return void
         */
        protected static function do_not_cache_this_page(): void
        {
        }
        /**
         * Flush WP Fastest Cache (on WooMC settings save).
         *
         * @since 5.0.0
         * @return void
         */
        public function flush_cache(): void
        {
        }
        /**
         * Add a cookie EXCLUDE rule for our presence cookie to WPFC's list, then rewrite its
         * `.htaccess` exclude sub-block. Idempotent: skip when the rule is already present.
         *
         * @since 5.0.0
         * @return void
         */
        public function register_reject_cookie(): void
        {
        }
        /**
         * On WooMC activation / re-enable: add our cookie EXCLUDE rule to WPFC (and its .htaccess
         * sub-block), then flush. Load-order independent - runs at activation time when
         * {@see setup_hooks}'s admin_init handler may not have fired this request.
         *
         * @since 5.0.0
         * @return void
         */
        public function on_woomc_activation(): void
        {
        }
        /**
         * On WooMC deactivation / Off: remove our cookie EXCLUDE rule from WPFC (and its .htaccess
         * sub-block), then flush.
         *
         * @since 5.0.0
         * @return void
         */
        public function on_woomc_deactivation(): void
        {
        }
        /**
         * Remove our cookie EXCLUDE rule from WPFC's list (leaving the user's own rules), then
         * rewrite the `.htaccess` exclude sub-block.
         *
         * @since 5.0.0
         * @return void
         */
        public function unregister_reject_cookie(): void
        {
        }
        /**
         * WPFC's exclude rules as an array of associative rule arrays (the option stores a JSON
         * string; empty / "null" / malformed -> empty list).
         *
         * @since 5.0.0
         * @return array
         */
        private static function read_exclude_rules(): array
        {
        }
        /**
         * Persist the exclude rules, then ask WPFC to rewrite its `.htaccess` exclude sub-block.
         *
         * Runs only from `register_reject_cookie` (on `admin_init`) and `unregister_reject_cookie` (on
         * WooMC deactivation) - both real admin requests, where WPFC's `get_home_path()` resolves the site
         * root correctly, so no path workaround is needed here. (The "WordPress in its own directory"
         * mis-resolution only happens under WP-CLI - the test harness, where tivwp-cli supplies the admin
         * context on WPFC's own activate/deactivate.)
         *
         * @since 5.0.0
         *
         * @param array $rules The full exclude-rules list to persist (re-indexed).
         *
         * @return void
         */
        private static function persist_and_rewrite(array $rules): void
        {
        }
        /**
         * Ask WPFC to rewrite ONLY its `# Start WPFC Exclude` sub-block in the site `.htaccess`
         * (preserve-block edit; no-ops when the block is absent). Guarded so a foreign API change
         * degrades to a no-op rather than a fatal.
         *
         * @since 5.0.0
         * @return void
         */
        private static function rewrite_htaccess_exclude(): void
        {
        }
    }
    /**
     * Class WPOptimize.
     *
     * WP-Optimize is a PHP-served page cache (an `advanced-cache.php` drop-in). It is integrated as
     * VARY (per-currency): WP-Optimize folds every cookie returned by its `wpo_cache_cookies` filter
     * into the cache filename ({@see \wpo_cache_filename()} -> `index-<name>=<value>.json`), so adding
     * {@see Detector::COOKIE_FORCED_CURRENCY} gives a distinct cached file per currency - EVERY currency
     * is cached, the same model as Jetpack Boost and Hummingbird. The cookieless first visit is covered
     * by the base DONOTCACHEPAGE guard ({@see CacheAbstract::maybe_disable_first_visit}), which
     * WP-Optimize honors (`wpo_can_cache_page()`). This is WP-Optimize's own native multi-currency
     * pattern (cf. its built-in `enable_cache_aelia_currency`).
     *
     * The cookie list the drop-in reads is PERSISTED to WP-Optimize's on-disk config (read before this
     * plugin loads). {@see \WPO_Cache_Config::update()} does NOT honor a `wpo_cache_cookies` value passed
     * in the config array - it REBUILDS that key from the `wpo_cache_cookies` FILTER (from an empty
     * array). So the integration registers {@see filter__wpo_cache_cookies} and then calls update() once
     * ({@see register_vary_cookie}, on `admin_init`) to bake the currency cookie into the on-disk config.
     *
     * 5.0.0 history: first integrated as REJECT (presence cookie in `cache_exception_cookies`); switched
     * to VARY once probed, since WP-Optimize can cache every currency rather than leaving non-cache
     * currencies uncached. {@see register_vary_cookie} also strips any leftover reject entry from a
     * prior install (transition cleanup).
     *
     * @since 5.0.0
     */
    class WPOptimize extends \WOOMC\Integration\Cache\CacheAbstract
    {
        /**
         * Is WP-Optimize page caching active (plugin loaded AND page cache enabled)?
         *
         * @since        5.0.0
         * @return bool
         * @noinspection ClassConstantCanBeUsedInspection
         */
        public static function is_active(): bool
        {
        }
        /**
         * Wire shared base (flush-on-save + cookieless first-visit DONOTCACHEPAGE guard), the
         * per-currency vary filter, the on-disk persistence trigger, and the settings-panel section.
         *
         * The `wpo_cache_cookies` filter is registered UNCONDITIONALLY (not admin-only): WP-Optimize
         * rebuilds the persisted cookie list from this filter inside every {@see \WPO_Cache_Config::update()}
         * (its own settings save, a purge, or our register_vary_cookie), so the filter must be present
         * wherever an update can run, or the currency cookie would be silently dropped from the config.
         *
         * @since 5.0.0
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Add WooMC's currency cookie to WP-Optimize's cache-filename (vary) cookie list.
         *
         * @since 5.0.0
         *
         * @param array $cookies Cookie names WP-Optimize folds into the cache filename.
         *
         * @return array
         */
        public static function filter__wpo_cache_cookies($cookies): array
        {
        }
        /**
         * Flush WP-Optimize's page cache (on WooMC settings save).
         *
         * @since 5.0.0
         * @return void
         * @noinspection ClassConstantCanBeUsedInspection
         */
        public function flush_cache(): void
        {
        }
        /**
         * Persist the per-currency vary cookie into WP-Optimize's on-disk config (the drop-in reads it
         * pre-WordPress). update() re-applies the `wpo_cache_cookies` filter - registered in
         * {@see setup_hooks} - which adds the currency cookie; we just trigger the update when the
         * persisted list does not yet carry it. Also strips any stale `woomc-no-cache` reject entry left
         * by a pre-VARY install. Idempotent - persists only when something actually changes.
         *
         * @since        5.0.0
         * @return void
         * @noinspection ClassConstantCanBeUsedInspection
         */
        public function register_vary_cookie(): void
        {
        }
        /**
         * On WooMC activation / re-enable: persist our currency cookie into WP-Optimize's vary list, then
         * flush. Load-order independent - runs at activation time when {@see setup_hooks}'s admin_init
         * handler may not have fired this request.
         *
         * @since 5.0.0
         * @return void
         */
        public function on_woomc_activation(): void
        {
        }
        /**
         * On WooMC deactivation / Off: remove our currency cookie from WP-Optimize's persisted vary list,
         * then flush.
         *
         * @since 5.0.0
         * @return void
         */
        public function on_woomc_deactivation(): void
        {
        }
        /**
         * Remove WooMC's currency cookie from WP-Optimize's persisted vary list (deactivation cleanup).
         *
         * Removes the filter first, then re-persists: update() rebuilds `wpo_cache_cookies` from the
         * (now WooMC-free) filter chain, dropping the currency cookie from the on-disk config.
         *
         * @since 5.0.0
         * @return void
         */
        public function unregister_vary_cookie(): void
        {
        }
    }
    /**
     * Class WPRocket
     *
     * @since 2.7.1
     */
    class WPRocket extends \WOOMC\Integration\Cache\CacheAbstract
    {
        /**
         * Is WP Rocket loaded into the current request?
         *
         * The `WP_Rocket\Plugin` class is Rocket's main namespaced class, present only once Rocket's
         * bootstrap has run. Used by the Controller to dispatch Rocket like every other backend.
         *
         * @since 4.8.0
         * @return bool
         * @noinspection ClassConstantCanBeUsedInspection
         */
        public static function is_active(): bool
        {
        }
        /**
         * Is WP Rocket serving cached pages via mod_rewrite (direct-serve), rather than PHP?
         *
         * Rocket emits its `.htaccess` serve rule - Apache returns the bare cached file before
         * PHP runs - only when it is NOT generating separate mobile cache files. That gate is
         * `is_rocket_generate_caching_mobile_files()` = `cache_mobile && do_caching_mobile_files`;
         * when true the serve block is omitted and Rocket serves via PHP (advanced-cache.php).
         * Rocket's first install seeds both to 1, so PHP-served is the default; mod_rewrite is
         * the rare edge, reached only by setting `do_caching_mobile_files` to 0 (no dashboard
         * field - WP-CLI or a filter). WooMC reads the SAME gate Rocket's own .htaccess writer
         * uses, so WooMC's cookie strategy always matches how Rocket actually serves - and it
         * works under WP-CLI (option-based, no request context needed). On nginx the serve rule
         * is inert, but a reject cookie there still yields correct multi-currency prices (uncached non-cache
         * currencies, same as Apache direct-serve), so following Rocket's intent is safe.
         *
         * @since 4.8.0
         * @since 5.0.0 Detect via Rocket's mobile-files gate (the serve-rule condition) instead of
         *              scanning .htaccess; this now SELECTS WooMC's cookie strategy, not just a warning.
         * @return bool
         */
        public static function is_in_rewrite_mode(): bool
        {
        }
        /**
         * Wire WooMC's Rocket integration: the shared base (flush-on-save + first-visit template method),
         * the per-currency cookie strategy (gated on the operating mode), and the settings section.
         *
         * Dispatched from {@see Controller} like every other backend. The pre-5.0.0 loader-direct launch
         * (woocommerce-multicurrency.php) and the installed/active split were DROPPED in the 5.0.0 cache
         * refactor: load-order independence now comes from {@see Controller::on_woomc_activation} (WooMC
         * activated after Rocket) and the `activated_plugin` listener (Rocket activated after WooMC) -
         * exactly the mechanism proven on the other backends, and re-proven for Rocket by 091 (R-W / W-R)
         * and 092. Rocket's own register_(de)activation_hook + after-save flush are gone, replaced by the
         * shared hooks ({@see on_woomc_activation}, {@see on_woomc_deactivation}, {@see flush_cache}).
         *
         * @since        2.7.1
         * @since        5.0.0 Reparented onto CacheAbstract; folded into Controller dispatch.
         *
         * @return void
         * @noinspection PhpMissingReturnTypeInspection
         */
        public function setup_hooks()
        {
        }
        /**
         * Flush WP Rocket (config regen + cache clear). The shared flush-on-save hook (wired by
         * {@see CacheAbstract::setup_hooks}) and the activation/deactivation cleanup all route through this.
         *
         * @since 5.0.0
         * @return void
         */
        public function flush_cache(): void
        {
        }
        /**
         * Rocket handles the cookieless first visit its own way - the mandatory cookie in PHP-served mode,
         * the reject cookie + write-guard in direct-serve - so the base DONOTCACHEPAGE first-visit guard is
         * intentionally a no-op for Rocket (overrides {@see CacheAbstract::maybe_disable_first_visit}).
         *
         * @since 5.0.0
         * @return void
         */
        public function maybe_disable_first_visit(): void
        {
        }
        /**
         * On WooMC activation / re-enable while Rocket is active (or Rocket activated after WooMC):
         * (re)register the cookie strategy (gated on the operating mode) and re-bake Rocket's config so it
         * carries WooMC's cookies. Load-order independent - called from {@see Controller::on_woomc_activation}
         * (B-W) and the Controller's `activated_plugin` listener (W-R). Registration is idempotent (all
         * static-callback filters), so a same-request dispatch + activation call does not double-wire.
         *
         * @since 5.0.0
         * @return void
         */
        public function on_woomc_activation(): void
        {
        }
        /**
         * On WooMC deactivation / Off: remove WooMC's cookie filters, then flush so Rocket re-bakes a
         * config with none of WooMC's cookies. A real override of the shared cleanup contract, dispatched
         * from {@see Controller::on_woomc_deactivation} (5.0.0 - was Rocket's own register_deactivation_hook).
         *
         * @since 4.4.4
         * @since 5.0.0 Public instance override of {@see CacheAbstract::on_woomc_deactivation}.
         * @return void
         */
        public function on_woomc_deactivation(): void
        {
        }
        /**
         * Register WooMC's WP Rocket integration, adapting to Rocket's serving mode.
         *
         * WooMC does NOT set Rocket's serving mode (5.0.0 change - it used to force PHP serving
         * by stripping Rocket's mod_rewrite rules). It DETECTS the mode via
         * {@see self::is_in_rewrite_mode} and registers the matching per-currency
         * correctness mechanism:
         *
         *  - PHP-served (Rocket's default): cookie VARY - mandatory + dynamic cookies make Rocket
         *    cache a separate file per currency. Every currency is cached.
         *  - mod_rewrite / direct-serve: Apache serves the bare, non-suffixed file before PHP and
         *    cannot vary by a cookie VALUE, only branch on a REJECT cookie's presence. So reject
         *    non-cache-currency visitors (they carry `woomc-no-cache`) at serve (RewriteCond) and
         *    block the write (DONOTCACHEPAGE). Only the cache currency is cached / served static;
         *    other currencies fall through to a fresh PHP render. Vary cookies are deliberately
         *    NOT registered here - they make Rocket write currency-SUFFIXED files that the serve
         *    rule never matches, which would defeat direct-serve.
         *
         * @since 2.7.1
         * @since 5.0.0 Detect Rocket's mode and adapt, instead of forcing PHP serving.
         * @return void
         */
        protected function set_rocket_caching_options(): void
        {
        }
        /**
         * Add our cookie to the "special treatment" by WPRocket.
         *
         * As per WPRocket support:
         * - The mandatory one means that cache files are not served for the current visitor
         *   until this specific cookie has a value.
         * - The dynamic one means to create different cache files depending on the cookie value.
         *
         * The mandatory cookie is now unconditional (5.0.0): it guarantees Rocket never caches a
         * page until the currency cookie is set, so a cookieless first visit always runs PHP (where
         * WooMC can geolocate and pick the currency server-side) instead of being cached as the bare,
         * currency-less page and later served to the wrong visitor. The prior opt-out option was
         * removed - there is no use case for caching the currency-less page in PHP-served (vary) mode;
         * fast static serving for one currency is what direct-serve mode is for.
         *
         * @url https://docs.wp-rocket.me/article/1313-create-different-cache-files-with-dynamic-and-mandatory-cookies
         *
         * @since        2.8.5
         * @since        5.0.0 Always mandatory; the `wp_rocket_mandatory_cookie` opt-out option was removed.
         *
         * @param string[] $cookies Cookies list.
         *
         * @return string[]
         * @internal     Filter.
         * @noinspection PhpMissingReturnTypeInspection
         * @noinspection PhpMissingParamTypeInspection
         */
        public static function filter__rocket_cache_mandatory_cookies($cookies)
        {
        }
        /**
         * Add our cookie to the "special treatment" by WPRocket.
         *
         * @since        2.7.1
         *
         * @param string[] $cookies Cookies list.
         *
         * @return string[]
         * @link         https://docs.wp-rocket.me/article/1313-create-different-cache-files-with-dynamic-and-mandatory-cookies
         *
         * @internal     Filter.
         * @noinspection PhpMissingReturnTypeInspection
         * @noinspection PhpMissingParamTypeInspection
         */
        public static function filter__rocket_cache_dynamic_cookies($cookies)
        {
        }
        /**
         * REJECT non-cache-currency visitors from Rocket's cache (5.0.0 direct-serve mode).
         *
         * Appends our `woomc-no-cache` presence cookie to Rocket's reject list, so a request
         * carrying it is neither served from nor written to cache - it bakes into the serve
         * rule's `RewriteCond %{HTTP:Cookie} !(...)`. Registered only when direct-serve is on.
         *
         * @since 5.0.0
         *
         * @param string[] $cookies Cookies list.
         *
         * @return string[]
         * @internal     Filter.
         * @noinspection PhpMissingParamTypeInspection
         */
        public static function filter__rocket_cache_reject_cookies($cookies)
        {
        }
        /**
         * Regenerate WP Rocket configs and clear the cache.
         *
         * @since 2.7.1
         *
         * @return void
         */
        protected static function flush_rocket(): void
        {
        }
        /**
         * "Preload" support
         * Based on:
         *
         * @link https://docs.wp-rocket.me/article/1676-preload-custom-cookie
         * @link https://github.com/wp-media/wp-rocket-helpers/blob/master/preload/wp-rocket-preload-dynamic-cookies/wp-rocket-preload-dynamic-cookies.php
         */
        /**
         * Helper method rocket_get_combinations.
         *
         * @since 4.4.4
         *
         * @param array ...$arrays Arrays to combine.
         *
         * @return array|array[]
         */
        protected static function rocket_get_combinations(...$arrays): array
        {
        }
        /**
         * Helper method rocket_flatten_array.
         *
         * @since 4.4.4
         *
         * @param array $arr Array of cookies.
         *
         * @return array
         */
        protected static function rocket_flatten_array(array $arr): array
        {
        }
        /**
         * Filter filter__rocket_preload_before_preload_url.
         *
         * @since        4.4.4
         *
         * @param array $requests Array of Preload requests.
         *
         * @return array
         * @noinspection PhpMissingReturnTypeInspection
         * @noinspection PhpMissingParamTypeInspection
         */
        public static function filter__rocket_preload_before_preload_url($requests)
        {
        }
    }
    /**
     * Class WPSuperCache.
     *
     * @since 2.12.1 Initial integration (wpsc_add_cookie + no-cookie cache disable).
     * @since 4.8.0 Refactored to extend CacheAbstract; first-visit guard generalized into the base.
     */
    class WPSuperCache extends \WOOMC\Integration\Cache\CacheAbstract
    {
        /**
         * Is WP Super Cache active?
         *
         * `wpsc_add_cookie` is the function WPSC declares to opt cookies into its vary list -
         * defined whenever the plugin is loaded. We use it as the dispatch predicate rather
         * than poking at the WP_Cache_Plugin class so the check matches the API we actually
         * rely on in setup_hooks().
         *
         * @since 4.8.0
         * @return bool
         */
        public static function is_active(): bool
        {
        }
        /**
         * Is WP Super Cache running in mod_rewrite (Expert) mode?
         *
         * `wp_cache_mod_rewrite` is 1 in Expert (mod_rewrite) mode, 0 in Simple (PHP-served) mode. It is
         * a CONFIG GLOBAL persisted to `wp-cache-config.php` (set via `wp_cache_setting()`), NOT a WP
         * option - so `get_option('wp_cache_mod_rewrite')` always returned the default and this advisory
         * never fired. Read the global, populated when WPSC loads its config (available by the time the
         * settings panel is built). INFORMATIONAL ONLY - feeds NO advisory: WooMC's WPSC vary works in BOTH
         * modes (a present currency cookie makes WPSC fall through to per-value PHP wp-cache even in Expert
         * mode, proven by the `wpsc-expert` probe), so Expert is Tier 0 like Simple. Kept as a factual
         * detector, symmetric with {@see W3TotalCache::is_in_rewrite_mode} and {@see WPRocket::is_in_rewrite_mode}.
         * (Before 5.0.0 this fed a "switch to Simple" warning, which was wrong - Expert is per-currency too,
         * just PHP-served.)
         *
         * @since 4.8.0
         * @since 5.0.0 Read the `$wp_cache_mod_rewrite` config global instead of a (non-existent) option;
         *              and informational only - Expert varies, so no advisory is raised.
         * @return bool
         */
        public static function is_in_rewrite_mode(): bool
        {
        }
        /**
         * Wire WPSC-specific cookie vary plus the shared base hooks.
         *
         * @since 2.12.1
         * @since 4.8.0 Calls parent::setup_hooks() for shared flush + first-visit guard.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Disable WPSC's cache for first-visit (no currency cookie) requests.
         *
         * Overrides the base default (which uses DONOTCACHEPAGE) with WPSC's native disable
         * - the global `$cache_enabled` flag - so this is the lightest possible bypass on a
         * WPSC site.
         *
         * @since 2.12.1 (was no_cookie_no_cache())
         * @since 4.8.0 Renamed to match the base template-method name; same logic.
         *
         * @return void
         */
        public function maybe_disable_first_visit(): void
        {
        }
        /**
         * Flush WPSC's cache on WooMC settings save.
         *
         * @since 4.8.0
         * @return void
         */
        public function flush_cache(): void
        {
        }
        /**
         * On WooMC activation / re-enable: persist the currency cookie into WPSC's vary list, then flush.
         *
         * `wpsc_add_cookie` adds the cookie to the `$wpsc_cookies` global AND writes it to
         * `wp-cache-config.php` (via `wp_cache_setting`), so this survives beyond the request - the same
         * footprint {@see setup_hooks} registers at runtime, but (re)asserted at activation time when
         * setup_hooks may not have run (load-order independence).
         *
         * @since 5.0.0
         * @return void
         */
        public function on_woomc_activation(): void
        {
        }
        /**
         * On WooMC deactivation / Off: remove the currency cookie from WPSC's persisted vary list, then
         * flush. `wpsc_delete_cookie` drops it from `$wpsc_cookies` and rewrites `wp-cache-config.php`, so
         * WPSC stops varying by a cookie WooMC no longer sets.
         *
         * @since 5.0.0
         * @return void
         */
        public function on_woomc_deactivation(): void
        {
        }
    }
}
namespace WOOMC\Integration {
    /**
     * Class Controller
     *
     * @package WOOMC\Integration
     */
    class Controller extends \WOOMC\AbstractConverter
    {
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Hooks for payment gateways.
         * Separate from other integration because need to run them also in admin.
         *
         * @since 1.18.0
         */
        protected function setup_gateways_hooks()
        {
        }
        /**
         * Various.
         */
        protected function various_extensions()
        {
        }
        /**
         * Subscriptions.
         */
        protected function subscription_extensions()
        {
        }
        /**
         * Booking.
         */
        protected function booking_extensions()
        {
        }
        /**
         * Shipping methods.
         */
        protected function shipping_methods()
        {
        }
        /**
         * Widgets.
         *
         * @since 2.8.3
         */
        protected function widgets()
        {
        }
    }
}
namespace WOOMC\Integration\Gateways {
    /**
     * Class AbstractGateways
     *
     * @package WOOMC\Integration\Gateways
     */
    abstract class AbstractGateways implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        abstract public function setup_hooks();
        /**
         * Return the currently selected currency as array.
         *
         * @return array
         */
        public function active_currency_as_array()
        {
        }
    }
    /**
     * Class WCGatewayPaypal
     *
     * @package WOOMC\Integration\Gateways
     */
    class WCGatewayPaypal extends \WOOMC\Integration\Gateways\AbstractGateways
    {
        /**
         * Setup actions and filters.
         *
         * @scope in_wp_admin
         * @return void
         */
        public function setup_hooks()
        {
        }
    }
    /**
     * Class WCStripe
     *
     * @package WOOMC\Integration\Gateways
     */
    class WCStripe extends \WOOMC\Integration\Gateways\AbstractGateways
    {
        /**
         * List of Stripe gateways.
         *
         * @see \WC_Stripe::add_gateways
         * @var string[]
         */
        const GATEWAYS = array('alipay', 'bancontact', 'eps', 'giropay', 'ideal', 'multibanco', 'p24', 'sepa', 'sofort');
        /**
         * Setup actions and filters.
         *
         * @scope in_wp_admin
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Trick to enable gateways regardless of the base currency.
         * (In fact, they are enabled, just show annoying admin error message).
         */
        protected function disable_store_currency_admin_notices()
        {
        }
    }
}
namespace WOOMC\Integration {
    /**
     * Class Multilingual.
     *
     * @since 2.1.0
     */
    class Multilingual
    {
        /**
         * TIV Globus (paid Globus edition) is active.
         *
         * @since 5.0.0
         * @var string
         */
        public const STATUS_TIV_GLOBUS = 'tiv-globus';
        /**
         * WPGlobus (free Globus edition) is active.
         *
         * @since 5.0.0
         * @var string
         */
        public const STATUS_WPGLOBUS = 'wpglobus';
        /**
         * Polylang is active.
         *
         * @since 5.0.0
         * @var string
         */
        public const STATUS_POLYLANG = 'polylang';
        /**
         * No multilingual plugin that WooMC recognizes is active.
         *
         * This is deliberately "unknown", not "none": there may be an unsupported
         * multilingual plugin present that WooMC simply does not detect.
         *
         * @since 5.0.0
         * @var string
         */
        public const STATUS_UNKNOWN = 'unknown';
        /**
         * Cached language configuration for the current request.
         *
         * Null until primed by {@see self::init()} (or resolved lazily on first read).
         *
         * @since 5.0.0
         * @var array{multilingual_provider:string,enabled_languages:string[],language:string,en_language_name:array<string,string>}|null
         */
        private static ?array $config = null;
        /**
         * Detects which multilingual plugin, if any, WooMC recognizes on the site.
         *
         * The result is a single status - one of the STATUS_* constants. Because WooMC
         * does not know every multilingual plugin in existence, "nothing recognized" is
         * reported as {@see self::STATUS_UNKNOWN}, NOT as a definitive "no multilingual
         * plugin is installed": an unsupported plugin (e.g. WPML) also lands here.
         *
         * WPGlobus (free) and TIV Globus (paid) are the same provider in two editions
         * and cannot run at the same time (enforced on the Globus side), so they are
         * detected as two distinct statuses but linked identically downstream.
         *
         * @since 5.0.0
         *
         * @return string One of the STATUS_* constants.
         */
        public static function detect(): string
        {
        }
        /**
         * True when a multilingual plugin WooMC recognizes is active.
         *
         * Compatibility shim for callers that only need the boolean. New code should
         * branch on {@see self::detect()} instead.
         *
         * @since 2.9.4-rc.1 Moved from Locale class.
         *
         * @return bool
         */
        public static function is_multilingual(): bool
        {
        }
        /**
         * Resolve the language configuration from the active multilingual provider.
         *
         * Ported from App::get_multilingual_config() so the "usable
         * languages" resolution lives next to {@see self::detect()}. The provider is
         * chosen by {@see self::detect()} (not by repeating class-exists probes);
         * this then reads that provider's real language data.
         *
         * `multilingual_provider` is '' when no provider yields usable languages
         * (monolingual fallback to the site language). NOTE: the per-provider
         * "active" test is asymmetric - Polylang must expose usable languages, while
         * both Globus editions (WPGlobus, TIV Globus) are accepted on presence alone.
         * To be harmonized later.
         *
         * @since        5.0.0
         *
         * @return array{multilingual_provider:string,enabled_languages:string[],language:string,en_language_name:array<string,string>}
         */
        private static function get_language_config(): array
        {
        }
        /**
         * Prime the per-request language configuration cache.
         *
         * Meant to be called ONCE, from App at the controlled hook (plugins_loaded
         * LATE), so the cached current language matches the point at which the
         * providers have resolved it. Forces a fresh resolution even if already set.
         *
         * @since 5.0.0
         *
         * @return void
         */
        public static function init(): void
        {
        }
        /**
         * The cached configuration, resolving lazily if {@see self::init()} has not run.
         *
         * @since 5.0.0
         *
         * @return array{multilingual_provider:string,enabled_languages:string[],language:string,en_language_name:array<string,string>}
         */
        private static function config(): array
        {
        }
        /**
         * Enabled language codes.
         *
         * @since 5.0.0
         *
         * @return string[]
         */
        public static function get_enabled_languages(): array
        {
        }
        /**
         * Current language code.
         *
         * @since 5.0.0
         *
         * @return string
         */
        public static function get_language(): string
        {
        }
        /**
         * Active provider id, or '' when none yields usable languages.
         *
         * @since 5.0.0
         *
         * @return string
         */
        public static function get_provider(): string
        {
        }
        /**
         * English name for a language code, or the code itself when unknown.
         *
         * @since 5.0.0
         *
         * @param string $code Language code.
         *
         * @return string
         */
        public static function get_en_language_name(string $code): string
        {
        }
        /**
         * Clear the cached configuration. For unit-test isolation.
         *
         * @since 5.0.0
         *
         * @return void
         */
        public static function reset(): void
        {
        }
    }
}
namespace WOOMC\Integration\Shipping {
    /**
     * Class AbstractController
     */
    abstract class AbstractController implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * Method ID.
         *
         * @var string
         */
        const METHOD_ID = 'undefined';
        /**
         * If true, the shipping method needs store currency and unconverted product prices.
         *
         * @since 2.6.0
         *
         * @var bool
         */
        const CALCULATE_IN_STORE_CURRENCY = false;
        /**
         * DI: Price Controller.
         *
         * @var \WOOMC\Price\Controller
         */
        protected $price_controller;
        /**
         * Constructor.
         *
         * @param \WOOMC\Price\Controller $price_controller The Price Controller instance.
         */
        public function __construct(\WOOMC\Price\Controller $price_controller)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Check if the shipping rate object's method ID is relevant to this class.
         *
         * @param \WC_Shipping_Rate $shipping_rate_object The shipping rate object.
         *
         * @return bool
         */
        protected function is_my_method($shipping_rate_object)
        {
        }
        /**
         * Filter the rate cost.
         *
         * @param float|int|string  $cost                 The shipping rate cost.
         * @param \WC_Shipping_Rate $shipping_rate_object The shipping rate object.
         *
         * @return float|int|string
         * @internal filter.
         */
        public function filter__woocommerce_shipping_rate_cost($cost, $shipping_rate_object)
        {
        }
        /**
         * Filter the taxes.
         *
         * @param float[]|int[]|string[] $taxes                The shipping rate taxes array.
         * @param \WC_Shipping_Rate      $shipping_rate_object The shipping rate object.
         *
         * @return float[]|int[]|string[]
         * @internal filter.
         */
        public function filter__woocommerce_shipping_rate_taxes($taxes, $shipping_rate_object)
        {
        }
    }
    /**
     * Data and method specific to this shipping method.
     */
    class AustraliaPost extends \WOOMC\Integration\Shipping\AbstractController
    {
        const METHOD_ID = 'australia_post';
    }
    /**
     * Data and methods specific to this shipping extension.
     */
    class CanadaPost extends \WOOMC\Integration\Shipping\AbstractController
    {
        /**
         * Method ID to use in {@see is_my_method()}.
         *
         * @var string
         */
        const METHOD_ID = 'canada_post';
        /**
         * Always convert from CAD because the online rates are returned in CAD, regardless the default currency of the Store.
         *
         * @var string
         */
        const CONVERT_FROM = 'CAD';
        /**
         * Filter the shipping rate cost.
         *
         * @param float|int|string  $cost                 The cost.
         * @param \WC_Shipping_Rate $shipping_rate_object The Shipping Rate instance.
         *
         * @return float|int|string
         */
        public function filter__woocommerce_shipping_rate_cost($cost, $shipping_rate_object)
        {
        }
        /**
         * Filter the shipping rate taxes.
         *
         * @param float[]|int[]|string[] $taxes                The taxes array.
         * @param \WC_Shipping_Rate      $shipping_rate_object The Shipping Rate instance.
         *
         * @return array|float[]|int[]|string[]
         */
        public function filter__woocommerce_shipping_rate_taxes($taxes, $shipping_rate_object)
        {
        }
    }
    /**
     * Data and method specific to this shipping method.
     */
    class FedEx extends \WOOMC\Integration\Shipping\AbstractController
    {
        /**
         * Method ID.
         *
         * @var string
         */
        const METHOD_ID = 'fedex';
        /**
         * If true, the shipping method needs store currency and unconverted product prices.
         *
         * @since 2.6.0
         *
         * @var bool
         */
        const CALCULATE_IN_STORE_CURRENCY = true;
        /**
         * Setup actions and filters.
         *
         * @since        2.5.4 Additional filters for FedEx.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * DO NOT Filter the rate cost.
         *
         * @since        2.5.4
         *
         * @param float|int|string  $cost                 The shipping rate cost.
         * @param \WC_Shipping_Rate $shipping_rate_object The shipping rate object.
         *
         * @return float|int|string
         * @internal     filter.
         */
        public function filter__woocommerce_shipping_rate_cost($cost, $shipping_rate_object)
        {
        }
        /**
         * DO NOT Filter the taxes.
         *
         * @since        2.5.4
         *
         * @param float[]|int[]|string[] $taxes                The shipping rate taxes array.
         * @param \WC_Shipping_Rate      $shipping_rate_object The shipping rate object.
         *
         * @return float[]|int[]|string[]
         * @internal     filter.
         */
        public function filter__woocommerce_shipping_rate_taxes($taxes, $shipping_rate_object)
        {
        }
        /**
         * Convert rate.
         *
         * @since        2.5.4
         *
         * @param array              $rate_data              The rate data.
         *                                                   'id'    => $rate_id,
         *                                                   'label' => $rate_name,
         *                                                   'cost'  => $rate_cost,
         *                                                   'sort'  => $sort,
         *
         * @param string             $currency               The currency code.
         * @param \stdClass          $details                Unused.
         * @param \WC_Shipping_Fedex $shipping_method_object FedEx shipping object.
         *
         * @return array
         * @noinspection PhpUnusedParameterInspection
         */
        public function filter__woocommerce_shipping_fedex_rate($rate_data, $currency, $details, $shipping_method_object)
        {
        }
        /**
         * Returns true if my shipping method class is in the trace.
         *
         * @since 2.5.4
         * @return bool
         */
        public static function is_called_by_my_method()
        {
        }
    }
    /**
     * Class RoyalMail
     */
    class RoyalMail implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * The method ID.
         *
         * @var string
         */
        const METHOD_ID = 'royal_mail';
        /**
         * DI: Price Controller.
         *
         * @var \WOOMC\Price\Controller
         */
        protected $price_controller;
        /**
         * Constructor.
         *
         * @param \WOOMC\Price\Controller $price_controller The Price Controller instance.
         */
        public function __construct(\WOOMC\Price\Controller $price_controller)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Check if the shipping rate object's method ID is relevant to this class.
         *
         * @param \WC_Shipping_Rate $shipping_rate_object The shipping rate object.
         *
         * @return bool
         */
        protected function is_my_method($shipping_rate_object)
        {
        }
        /**
         * Filter the rate cost.
         *
         * @param float|int|string  $cost                 The shipping rate cost.
         * @param \WC_Shipping_Rate $shipping_rate_object The shipping rate object.
         *
         * @return float|int|string
         *
         * @internal filter.
         */
        public function filter__woocommerce_shipping_rate_cost($cost, $shipping_rate_object)
        {
        }
        /**
         * Filter the taxes.
         *
         * @param float[]|int[]|string[] $taxes                The shipping rate taxes array.
         * @param \WC_Shipping_Rate      $shipping_rate_object The shipping rate object.
         *
         * @return float[]|int[]|string[]
         *
         * @internal filter.
         */
        public function filter__woocommerce_shipping_rate_taxes($taxes, $shipping_rate_object)
        {
        }
    }
    /**
     * Class Integration\Shipping\TableRate
     */
    class TableRate implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * DI: Price Controller.
         *
         * @var \WOOMC\Price\Controller
         */
        protected $price_controller;
        /**
         * Constructor.
         *
         * @param \WOOMC\Price\Controller $price_controller The Price Controller instance.
         */
        public function __construct(\WOOMC\Price\Controller $price_controller)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Prepare comparison criteria.
         *
         * @see      \WC_Shipping_Table_Rate::query_rates uses a DB query to check the applicability
         * of a certain rate. Because the criteria are "hard-stored" and retrieved from DB with no filtering,
         * we need to convert the amount back to the default currency before comparing against it.
         *
         * @note     The converted-back amount might differ from the original amount because of rounding and adjustments.
         *
         * @param array $args The arguments. We need only the 'price'.
         *
         * @return array
         *
         * The method @internal filter.
         */
        public function filter__woocommerce_table_rate_query_rates_args($args)
        {
        }
        /**
         * Convert the rates.
         *
         * @since    2.15.1 Added rate_min, rate_max
         * @since    2.15.1 Short-circuit if is_default_currency_active().
         *
         * @param \stdClass $rates The Rates object.
         *
         * @return \stdClass
         *
         * @internal filter.
         */
        public function filter__woocommerce_table_rate_query_rates($rates)
        {
        }
    }
    /**
     * Data and method specific to this shipping method.
     */
    class UPS extends \WOOMC\Integration\Shipping\AbstractController
    {
        /**
         * Shipping method ID.
         *
         * @var string
         */
        const METHOD_ID = 'ups';
        /**
         * Additional hooks, besides those set in the parent class.
         *
         * @since 1.17.0
         */
        public function setup_hooks()
        {
        }
        /**
         * Ignore warning about SimpleXMLElement missing in composer.
         *
         * @noinspection PhpComposerExtensionStubsInspection
         */
        /**
         * Handle the case when the store currency and the currency of the UPS account differ.
         * The effect is visible when WOOMC does not do its regular conversion.
         * For example:
         * - the UPS account is in USD
         * - the store currency is MXP
         * - the selected currency is also MXP
         * In that case, we would see the USD value instead of MXP.
         * This filter fixes the issue.
         *
         * From the UPS code {@see \WC_Shipping_UPS::calculate_shipping}:
         * // Allow 3rd parties to process the rates returned by UPS. This will
         * // allow to convert them to the active currency. The original currency
         * // from the rates, the XML and the shipping method instance are passed
         * // as well, so that 3rd parties can fetch any additional information
         * // they might require
         * // $rates[ $rate_id ] = apply_filters( 'woocommerce_shipping_ups_rate', array(
         * //    'id'    => $rate_id,
         * //    'label' => $rate_name,
         * //    'cost'  => $rate_cost,
         * //    'sort'  => $sort,
         * // ), $currency, $xml, $this );
         *
         * @since        1.17.3
         *
         * @param array             $rate         The rate array.
         * @param string            $currency     The currency of the rate (currency of the UPS account).
         * @param \SimpleXMLElement $ups_xml_data The XML with UPS response.
         * @param \WC_Shipping_UPS  $ups_instance The UPS class instance.
         *
         * @return array
         */
        public function filter__woocommerce_shipping_ups_rate(
            array $rate,
            $currency,
            /**
             * Unused.
             *
             * @noinspection PhpUnusedParameterInspection
             */
            $ups_xml_data,
            /**
             * Unused.
             *
             * @noinspection PhpUnusedParameterInspection
             */
            $ups_instance
        )
        {
        }
    }
    /**
     * Class USPS
     */
    class USPS implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        const METHOD_ID = 'usps';
        /**
         * DI: Price Controller.
         *
         * @var \WOOMC\Price\Controller
         */
        protected $price_controller;
        /**
         * USPS constructor.
         *
         * @param \WOOMC\Price\Controller $price_controller The Price controller instance.
         */
        public function __construct(\WOOMC\Price\Controller $price_controller)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Check if the shipping rate object's method ID is relevant to this class.
         *
         * @param \WC_Shipping_Rate $shipping_rate_object The shipping rate object.
         *
         * @return bool
         */
        protected function is_my_method($shipping_rate_object)
        {
        }
        /**
         * Filter the rate cost.
         *
         * @param float|int|string  $cost                 The shipping rate cost.
         * @param \WC_Shipping_Rate $shipping_rate_object The shipping rate object.
         *
         * @return float|int|string
         *
         * @internal filter.
         */
        public function filter__woocommerce_shipping_rate_cost($cost, $shipping_rate_object)
        {
        }
        /**
         * Filter the taxes.
         *
         * @param float[]|int[]|string[] $taxes                The shipping rate taxes array.
         * @param \WC_Shipping_Rate      $shipping_rate_object The shipping rate object.
         *
         * @return float[]|int[]|string[]
         *
         * @internal filter.
         */
        public function filter__woocommerce_shipping_rate_taxes($taxes, $shipping_rate_object)
        {
        }
    }
}
namespace WOOMC\Integration {
    /**
     * Class TierPricingTable
     *
     * Tier Pricing Table renders a table of quantity-based tier prices on the product page
     * (e.g. Buy 2 / Buy 3 / Buy 5). Without this integration only the base product price
     * gets converted to the active currency; the tier rows stay in the store base currency.
     *
     * Tier Pricing Table funnels every non-edit-context tier amount through the
     * `tiered_pricing_table/price/price_by_rules` filter (see {@see \TierPricingTable\PriceManager::getPriceByRules}),
     * which we hook to convert the tier value to the active currency.
     *
     * Cart-side double-conversion is avoided via {@see self::filter__pre_product_get_price()}: when
     * Tier Pricing Table has stamped a cart item's product with the runtime meta
     * `tiered_pricing_cart_price_calculated=yes` (set in `\TierPricingTable\Services\TieredPricingCartService::calculateTieredPricingInCart()`),
     * the stored `_price` is already in the active currency, so we short-circuit WOOMC's
     * subsequent get_price() conversion via the `woocommerce_multicurrency_pre_product_get_price` hook.
     *
     * Percentage rules are skipped - those are unitless multipliers and must not be converted.
     *
     * @package WOOMC\Integration
     */
    class TierPricingTable extends \WOOMC\Integration\AbstractIntegration
    {
        /**
         * Cart-item runtime meta key Tier Pricing Table stamps on the product after
         * setting a tier-discounted `_price`. Presence indicates the price has already
         * been routed through our conversion filter; further get_price conversion
         * would double-apply the FX rate.
         */
        private const CART_FLAG_META = 'tiered_pricing_cart_price_calculated';
        /**
         * Setup actions and filters.
         *
         * @return void
         * @noinspection ReturnTypeCanBeDeclaredInspection
         */
        public function setup_hooks()
        {
        }
        /**
         * Convert a tier price from store base to the active currency.
         *
         * @since 4.7.0
         *
         * @param float|int|false $price       The tier price in store base currency.
         * @param int             $quantity    The quantity tier (unused).
         * @param int             $product_id  The product ID (unused).
         * @param string          $context     `view` for display paths, `edit` for raw access.
         * @param string          $place       `shop`, `cart`, etc. (unused).
         * @param \TierPricingTable\PricingRule     $pricing_rule The pricing rule.
         *
         * @return float|int|false
         *
         * @noinspection PhpUnusedParameterInspection
         * @noinspection PhpMissingParamTypeInspection
         *
         * @internal filter
         */
        public function filter__price_by_rules($price, $quantity, $product_id, $context, $place, $pricing_rule)
        {
        }
        /**
         * Short-circuit WOOMC's get_price conversion for tier-managed cart items.
         *
         * Tier Pricing Table calls `set_price()` with a value that already passed through
         * {@see self::filter__price_by_rules()} and is therefore already in the active currency.
         * Letting WOOMC convert it again on read would double-apply the FX rate.
         *
         * @since 4.7.0
         *
         * @param false|string|int|float $pre_value   Initially false; non-false short-circuits.
         * @param string|int|float       $value       The stored `_price` (already converted).
         * @param \WC_Product            $product     The product object.
         * @param string                 $price_type  `_price`, `_regular_price`, etc.
         *
         * @return false|string|int|float
         *
         * @noinspection PhpUnusedParameterInspection
         * @noinspection PhpMissingParamTypeInspection
         * @noinspection PhpConditionAlreadyCheckedInspection
         *
         * @internal filter
         */
        public function filter__pre_product_get_price($pre_value, $value, $product, $price_type)
        {
        }
    }
    /**
     * Class WCAPFS
     *
     * @package WOOMC\Integration
     */
    class WCAPFS extends \WOOMC\Integration\AbstractIntegration
    {
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * WCS_ATT adds its own filters to the prices - {@see \WCS_ATT_Product_Price_Filters::add},
         * so our previously converted prices are ineffective when the subscription scheme prices
         * are calculated. Thus, we convert the prices again, using this filter.
         *
         * @since 2.7.0 Convert only fixed prices, not calculated as percents ("inherited").
         *
         * @param array           $prices Prices.
         * @param \WCS_ATT_Scheme $scheme Scheme.
         *
         * @return array
         */
        public function filter__wcsatt_subscription_scheme_prices($prices, $scheme)
        {
        }
        /**
         * Short-circuit the price conversion in some specific cases.
         *
         * @param false|string|int|float $pre_value  Initially passed as "false". May return the actual value.
         * @param string|int|float       $value      The price.
         * @param \WC_Product|null       $product    The product object.
         * @param string                 $price_type Regular, Sale, etc.
         *
         * @return string|int|float|false
         *
         * @internal     filter.
         * @noinspection PhpUnusedParameterInspection
         */
        public function filter__woocommerce_multicurrency_pre_product_get_price($pre_value, $value, $product = null, $price_type = '')
        {
        }
    }
    /**
     * Class WCAddFees
     *
     * @package WOOMC\Integration
     */
    class WCAddFees extends \WOOMC\Integration\AbstractIntegration
    {
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Convert fixed values.
         *
         * @param float|int|string $fee     The fee stored in the option table.
         * @param array            $gateway The gateway.
         *
         * @return float|int|string
         */
        public function filter__wc_add_fees_gateway_fee($fee, $gateway)
        {
        }
        /**
         * Convert min/max values.
         *
         * @param float|int|string $value The value stored in the option table.
         *
         * @return float|int|string
         */
        public function filter__wc_add_fees_min_max_value($value)
        {
        }
    }
    /**
     * Class Integration\WCCSP
     */
    class WCCSP implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * DI: Price Controller.
         *
         * @var \WOOMC\Price\Controller
         */
        protected $price_controller;
        /**
         * Constructor.
         *
         * @param \WOOMC\Price\Controller $price_controller The Price controller instance.
         */
        public function __construct(\WOOMC\Price\Controller $price_controller)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * This function restricts the currency conversion when CSP is active.
         * This is implemented to avoid repeated conversions in the WooCommerce cart.
         *
         * @param string[] $filter_tags The filter tags.
         *
         * @return string[]
         */
        public function dontApplyVariablePriceInCart($filter_tags)
        {
        }
        /**
         * This function restricts the currency conversion when CSP is active.
         * This is implemented to avoid repeated conversions in the WooCommerce cart.
         *
         * @param bool             $pre_value  Unused.
         * @param string|int|float $value      The price.
         * @param \WC_Product|null $product    The product object.
         * @param string           $price_type Regular, Sale, etc.
         *
         * @return string|int|float
         * @noinspection PhpUnusedParameterInspection
         */
        public function dontApplyInCart($pre_value, $value, $product, $price_type = '')
        {
        }
        /**
         * Return converted specific prices.
         *
         * @param array       $merged_prices Merged prices.
         * @param \WC_Product $product       Product object.
         *
         * @return array
         */
        public function returnConvertedSpecificPrices($merged_prices, $product)
        {
        }
        /**
         * ReturnConvertedCartDiscountLimits.
         *
         * @param array $cart_rules Cart rules.
         *
         * @return array
         */
        public function returnConvertedCartDiscountLimits($cart_rules)
        {
        }
        /**
         * ConvertPriceValue.
         *
         * @param float|int|string $value Price value.
         *
         * @return float|int|string
         */
        public function convertPriceValue($value)
        {
        }
    }
    /**
     * Class Integration\WCCheckoutAddOns
     */
    class WCCheckoutAddOns implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * DI: Price Controller.
         *
         * @var \WOOMC\Price\Controller
         */
        protected $price_controller;
        /**
         * Constructor.
         *
         * @param \WOOMC\Price\Controller $price_controller The Price controller instance.
         */
        public function __construct(\WOOMC\Price\Controller $price_controller)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Convert prices at the DB options retrieval.
         *
         * @noinspection PhpUndefinedNamespaceInspection
         * @see          \SkyVerge\WooCommerce\Checkout_Add_Ons\Add_Ons\Data_Store_Options::get_add_ons_data
         * @see          \WC_Checkout_Add_Ons::get_add_ons (Version 1.x)
         *
         * @since        1.17.0
         *
         * @param array $add_ons_data The options array.
         *
         * @return array
         * @noinspection AlterInForeachInspection
         */
        public function filter__option_wc_checkout_add_ons($add_ons_data)
        {
        }
        /**
         * Convert the cost ("adjustment") of the add-on.
         *
         * @since 1.17.0
         *
         * @param array $data The add-on data.
         *
         * @return void
         */
        protected function convert_add_on_data(&$data)
        {
        }
    }
    /**
     * Class Integration\WCDynamicPricing
     */
    class WCDynamicPricing implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * Convert amounts only flag.
         *
         * @var string
         */
        const CONVERT_AMOUNTS_ONLY = 'convert_amounts_only';
        /**
         * DI: Price Controller.
         *
         * @var \WOOMC\Price\Controller
         */
        protected $price_controller;
        /**
         * Constructor.
         *
         * @param \WOOMC\Price\Controller $price_controller The Price controller instance.
         */
        public function __construct(\WOOMC\Price\Controller $price_controller)
        {
        }
        /**
         * Shortcut to {@see \WOOMC\Price\Controller::convert()}
         *
         * @param float|int|string $price The price to convert.
         *
         * @return float|int|string
         *
         * @internal filter
         */
        public function convert($price)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Convert array of sets, amounts only, not changing `from-to`.
         *
         * @param array|string|\Traversable $sets Array of rulesets of empty string iа product does not have rules.
         *
         * @return array
         *
         * @internal filter
         */
        public function convert_sets_amounts_only($sets)
        {
        }
        /**
         * Convert the rules in adjustment sets.
         *
         * @param bool                              $is_true        Pass-through unchanged.
         * @param \WC_Product                       $cart_item_data Unused.
         * @param string                            $module_id      Type of the module.
         * @param \WC_Dynamic_Pricing_Advanced_Base $module         Module object.
         * @param array                             $cart_item      Unused.
         *
         * @return bool
         *
         * @internal filter.
         */
        public function convert_adjustment_sets(
            $is_true,
            /**
             * Unused.
             *
             * @noinspection PhpUnusedParameterInspection
             */
            $cart_item_data,
            /**
             * Unused.
             *
             * @noinspection PhpUnusedParameterInspection
             */
            $module_id,
            $module,
            /**
             * Unused.
             *
             * @noinspection PhpUnusedParameterInspection
             */
            $cart_item
        )
        {
        }
        /**
         * Convert set of rules.
         *
         * @param array|\stdClass|\WC_Dynamic_Pricing_Adjustment_Set $set       The set of Rules.
         * @param string                                             $module_id Type of the module.
         */
        protected function convert_set(&$set, $module_id)
        {
        }
        /**
         * Convert array or rules.
         *
         * @param array[] $rules     The rules.
         * @param string  $module_id Type of the module.
         */
        protected function convert_rules(&$rules, $module_id)
        {
        }
        /**
         * Convert rule.
         *
         * @param array  $rule      The rule: from, to, amount, etc.
         * @param string $module_id Type of the module.
         */
        protected function convert_rule(&$rule, $module_id)
        {
        }
        /**
         * Convert modules when loaded.
         *
         * @param \WC_Dynamic_Pricing_Advanced_Base[] $modules Module objects.
         *
         * @return \WC_Dynamic_Pricing_Advanced_Base[]
         */
        public function filter__load_modules($modules)
        {
        }
        /**
         * Convert module.
         *
         * @param \WC_Dynamic_Pricing_Advanced_Base|\WC_Dynamic_Pricing_Advanced_Totals $module Module object.
         *
         * @noinspection PhpParameterByRefIsNotUsedAsReferenceInspection
         */
        protected function convert_module(&$module)
        {
        }
        /**
         * Filter the "price to discount".
         *
         * Called by {@see \WC_Dynamic_Pricing_Module_Base::get_price_to_discount}.
         *
         * The main function is to convert the price.
         * If the product has custom pricing, take that into account
         *
         * @since        2.2.0
         *
         * @param bool|float|int|string $result           The price to filter.
         * @param array                 $filter_cart_item The cart item.
         * @param string                $cart_item_key    The cart item key (unused).
         *
         * @return bool|float|int|string
         * @noinspection PhpUnusedParameterInspection
         */
        public function filter__woocommerce_dynamic_pricing_get_price_to_discount($result, $filter_cart_item, $cart_item_key)
        {
        }
        /**
         * Return the custom price or false if it's not set for the selected currency.
         *
         * @since        2.2.0
         *
         * @param array $filter_cart_item The cart item.
         *
         * @return string|false
         */
        protected function get_custom_price_to_discount($filter_cart_item)
        {
        }
    }
    /**
     * Class WCGFPA
     *
     * @package WOOMC\Integration
     */
    class WCGFPA extends \WOOMC\Integration\AbstractIntegration
    {
        /**
         * Unfiltered form field choices.
         *
         * @var array
         */
        protected $original_form_choices = array();
        /**
         * Setup actions and filters.
         *
         * @return void
         * @noinspection PhpUnused
         */
        public function setup_hooks()
        {
        }
        /**
         * Filter gform_form_post_get_meta.
         *
         * @param array $form GF Form.
         *
         * @return array
         */
        public function filter__gform_form_post_get_meta($form)
        {
        }
        /**
         * Convert GF Money ("$1.00 CAD") to the selected currency.
         *
         * @param string $gf_money The GF money formatted price.
         *
         * @return string
         */
        protected function convert_gf_money($gf_money)
        {
        }
        /**
         * Get unfiltered GF currency from the Options table.
         *
         * @return string
         */
        protected function get_gf_currency()
        {
        }
        /**
         * Is the product "mine"?
         *
         * @param \WC_Product $product The Product object.
         *
         * @return bool
         */
        protected function is_my_product($product)
        {
        }
        /**
         * Short-circuit the price conversion in some specific cases.
         *
         * @param false|string|int|float $pre_value  Initially passed as "false". May return the actual value.
         * @param string|int|float       $value      The price.
         * @param \WC_Product|null       $product    The product object.
         * @param string                 $price_type Regular, Sale, etc.
         *
         * @return string|int|float|false
         *
         * @internal     filter.
         * @noinspection PhpUnusedParameterInspection
         */
        public function filter__woocommerce_multicurrency_pre_product_get_price($pre_value, $value, $product = null, $price_type = '')
        {
        }
        /**
         * Fix total calculation in the Cart.
         * This is the WooCommerce's line total.
         *
         * @param float $total     Total to fix.
         * @param array $cart_item Cart item.
         *
         * @return float
         */
        public function filter__woocommerce_gforms_get_cart_item_total($total, $cart_item)
        {
        }
        /**
         * Filter gform_get_field_value.
         * This is the total displayed by Gravity (GF_Field_Total), not the WooCommerce's line total.
         *
         * @param mixed     $value Field value.
         * @param array     $lead  GF Lead.
         * @param \GF_Field $field GF Field.
         *
         * @return mixed|float|string
         */
        public function filter__gform_get_field_value($value, $lead, $field)
        {
        }
        /**
         * Recalculate total using preserved form choices.
         * This is the total displayed by Gravity (GF_Field_Total), not the WooCommerce's line total.
         *
         * @param float $total   The total currently in the cart.
         * @param array $lead    The GF Lead.
         * @param bool  $convert If true, convert each choice's value before adding to total. Fixes rounding.
         *
         * @return float
         */
        protected function recalculate_gf_field_total($total, $lead, $convert = false)
        {
        }
        /**
         * Returns true if the string has the form of "Option1|100".
         *
         * @param string $sz The string to check.
         *
         * @return bool
         */
        protected function is_option_value_string($sz)
        {
        }
        /**
         * For the cart values like "Option1|100", restore the original value of the "100".
         * "Original" means in the currency of GForms and not in the currency of the cart.
         * Need it when currency is switched while there are products in the cart already.
         *
         * @param string    $value Field value.
         * @param \GF_Field $field GF Field.
         *
         * @return string
         */
        protected function restore_original_choice_value($value, $field)
        {
        }
        /**
         * Set GF currency formatting to match ours.
         *
         * @since 2.5.4
         * @since 2.8.1 HTML-decode currency symbols. Gravity does not like them in calculated fields.
         *
         * @param string[][] $currencies Currency formats.
         *
         * @return string[][]
         * @link  https://docs.gravityforms.com/gform_currencies/
         */
        public function filter__gform_currencies($currencies)
        {
        }
        /**
         * Parse Woo price format into GF.
         *
         * @param string $price_format    The price format.
         * @param string $currency_symbol The currency symbol.
         *
         * @return string[]
         */
        public static function parse_price_format($price_format, $currency_symbol)
        {
        }
    }
    /**
     * Class WCGoogleListingsAndAds
     *
     * @since 4.4.0
     */
    class WCGoogleListingsAndAds extends \WOOMC\Integration\AbstractIntegration
    {
        /**
         * Implement setup_hooks().
         *
         * @since 4.4.0
         * @inheritDoc
         */
        public function setup_hooks()
        {
        }
        /**
         * Short-circuit the price conversion.
         *
         * @since        4.4.0
         *
         * @param false|string|int|float                 $pre_value  Initially passed as "false". May return the actual value.
         * @param string|int|float                       $value      The price.
         * @param \WC_Product_Accommodation_Booking|null $product    The product object.
         * @param string                                 $price_type Regular, Sale, etc.
         *
         * @return string|int|float|false
         *
         * @internal     filter.
         * @noinspection PhpUnusedParameterInspection
         */
        public function filter__woocommerce_multicurrency_pre_product_get_price($pre_value, $value, $product = null, $price_type = '')
        {
        }
    }
    /**
     * Class WCMSRP
     *
     * @package WOOMC\Integration
     */
    class WCMSRP extends \WOOMC\Integration\AbstractIntegration
    {
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Convert the MSRP value to the active currency.
         *
         * @since 4.6.3
         *
         * @param string|float $msrp_value The MSRP value in store base currency.
         * @param int          $product_id The product or variation ID.
         *
         * @return string|float
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public function filter__woocommerce_msrp_product_msrp_frontend($msrp_value, $product_id)
        {
        }
    }
    /**
     * Class WCMeasurementPriceCalculator
     *
     * @package WOOMC\Integration
     */
    class WCMeasurementPriceCalculator extends \WOOMC\Integration\AbstractIntegration
    {
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Convert the MPC cart item price to the active currency.
         *
         * MPC's `get_cart_widget_item_price_html()` (priority 9) reads the unconverted
         * `pricing_item_meta_data['_price']` and formats it via `wc_get_price_including/excluding_tax`.
         * We redo that with the converted price.
         *
         * @since 4.6.3
         *
         * @param string $price_html    The price HTML.
         * @param array  $cart_item     The cart item.
         * @param string $cart_item_key The unique cart item hash.
         *
         * @return string
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public function filter__woocommerce_cart_item_price($price_html, $cart_item, $cart_item_key)
        {
        }
    }
    /**
     * Class WCMixAndMatch
     */
    class WCMixAndMatch extends \WOOMC\Integration\AbstractIntegration
    {
        /**
         * Setup actions and filters.
         *
         * @since   1.16.0
         * @since   2.15.5-beta.1 Refine the "Disable conversion" condition (@Kathy Darling)
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Short-circuit the price conversion for child products in some specific cases.
         *
         * @since        1.16.0
         *
         * @param false|string|int|float $pre_value  Initially passed as "false". May return the actual value.
         * @param string|int|float       $value      The price.
         * @param \WC_Product|null       $product    The product object.
         * @param string                 $price_type Regular, Sale, etc.
         *
         * @return string|int|float|false
         *
         * @internal     filter.
         * @noinspection PhpUnusedParameterInspection
         */
        public function filter__woocommerce_multicurrency_pre_product_get_price($pre_value, $value, $product = null, $price_type = '')
        {
        }
    }
    /**
     * Class Integration\WCNameYourPrice
     */
    class WCNameYourPrice extends \WOOMC\Integration\AbstractIntegration
    {
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Store the initial currency when item is added.
         *
         * @since 1.11.0
         *
         * @param array $cart_item_data The Cart Item data.
         *
         * @return array
         */
        public function add_initial_currency($cart_item_data)
        {
        }
        /**
         * Filter Name Your Price Cart prices.
         *
         * @since    1.11.0
         *
         * @param array $session_data The Session data.
         * @param array $values       The values.
         *
         * @return array
         *
         * @internal filter.
         */
        public function filter__woocommerce_get_cart_item_from_session($session_data, $values)
        {
        }
        /**
         * Convert NYP prices.
         *
         * @since 2.0.0
         * @since 2.5.3 - NYP3 passes the product object as 3rd parameter.
         *
         * @param string|int|float  $value      The price.
         * @param int               $product_id Product ID.
         * @param \WC_Product|false $product    The product object.
         *
         * @return float|int|string
         */
        public function filter__nyp_prices($value, $product_id, $product = false)
        {
        }
        /**
         * Short-circuit the price conversion for NYP products in the cart.
         *
         * @since        3.2.1
         *
         * @param false|string|int|float $pre_value  Initially passed as "false". May return the actual value.
         * @param string|int|float       $value      The price.
         * @param \WC_Product|null       $product    The product object.
         * @param string                 $price_type Regular, Sale, etc.
         *
         * @return string|int|float|false
         *
         * @internal     filter.
         * @noinspection PhpUnusedParameterInspection
         */
        public function filter__woocommerce_multicurrency_pre_product_get_price($pre_value, $value, $product = null, $price_type = '')
        {
        }
        /**
         * Add currency to cart edit link.
         *
         * @since 3.4.2-1
         *
         * @param array $args the args to be appended to the Edit link
         *
         * @return array
         */
        public function filter__wc_nyp_edit_in_cart_args($args)
        {
        }
        /**
         * Maybe convert any prices being edited from the cart.
         *
         * @since 3.4.2-1
         *
         * @param string      $initial_price The price.
         * @param \WC_Product $product       The product.
         * @param string      $suffix        Needed for composites and bundles.
         *
         * @return string
         */
        public function filter__wc_nyp_get_initial_price($initial_price, $product, $suffix)
        {
        }
    }
    /**
     * Class WCProductAddons
     *
     * @package WOOMC\Integration
     */
    class WCProductAddons implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * Used to mark product in Cart as PAO.
         *
         * @since 2.8.5
         * @var string
         */
        const META_MARKED_AS_PAO = '_woomc_is_pao';
        /**
         * DI: Price Controller.
         *
         * @var \WOOMC\Price\Controller
         */
        protected $price_controller;
        /**
         * Constructor.
         *
         * @param \WOOMC\Price\Controller $price_controller The Price controller instance.
         */
        public function __construct(\WOOMC\Price\Controller $price_controller)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @see \WC_Product_Addons_Cart::get_item_data displays addons with prices in the cart
         * @see \WC_Product_Addons_Cart::update_product_price ads addon prices to the (sub)totals in the cart
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Replace some PAO hooks with our versions.
         *
         * @since 2.8.5
         */
        protected function replace_pao_hooks()
        {
        }
        /**
         * Remove a hook.
         *
         * @since        2.8.5
         *
         * @param string $tag           Tag.
         * @param string $class_name    Class name.
         * @param string $function_name Function name.
         * @param int    $priority      Priority.
         *
         * @noinspection PhpUnused
         */
        protected function remove_pao_hook($tag, $class_name, $function_name, $priority)
        {
        }
        /**
         * Overrides {@see \WC_Product_Addons_Cart::add_cart_item()}.
         * Add cart item. Fires after add cart item data filter.
         *
         * @since 2.8.5
         * @since 4.6.3 Rewritten to mirror PAO 7.9.1 structure.
         *
         * @param array $cart_item_data Cart item meta data.
         *
         * @return array
         */
        public function add_cart_item($cart_item_data)
        {
        }
        /**
         * Updates the product price based on the add-ons and the quantity.
         *
         * Mirrors {@see \WC_Product_Addons_Cart::update_product_price()} from PAO 7.9.1,
         * without the `woocommerce_product_addons_adjust_price` guard (we disable that filter
         * via `__return_false` in {@see replace_pao_hooks()}).
         *
         * @since 4.6.3
         *
         * @param array $cart_item_data Cart item meta data.
         * @param int   $quantity       Quantity of products in that cart item.
         * @param array $prices         Array of prices for that product to use in calculations.
         *
         * @return array
         */
        protected function update_product_price($cart_item_data, $quantity, $prices)
        {
        }
        /**
         * Overrides {@see \WC_Product_Addons_Cart::get_cart_item_from_session()}.
         * Get cart item from session.
         *
         * @since 2.8.5
         * @since 4.6.3 Rewritten to mirror PAO 7.9.1 structure.
         *
         * @param array $cart_item Cart item data.
         * @param array $values    Cart item values.
         *
         * @return array
         */
        public function get_cart_item_from_session($cart_item, $values)
        {
        }
        /**
         * Recalculate addon prices when cart item quantity changes.
         *
         * Mirrors {@see \WC_Product_Addons_Cart::update_price_on_quantity_update()} from PAO 7.9.1.
         * Uses `?? addons_price_before_calc` fallbacks for carts with items added before the upgrade.
         *
         * @since 4.6.3
         *
         * @param string   $cart_item_key Cart item key.
         * @param int      $quantity      New quantity.
         * @param int      $old_quantity  Old quantity.
         * @param \WC_Cart $cart          WC Cart object.
         *
         * @return void
         */
        public function update_price_on_quantity_update($cart_item_key, $quantity, $old_quantity, $cart)
        {
        }
        /**
         * Convert addon prices. For the checkbox, radio, etc.
         *
         * @since    1.6.0
         * @since    1.14.1 Fix: do not convert percentage-based addons.
         *
         * @param float|int|string $option_price Cost of the add-on option.
         * @param string[]         $option       The option.
         *
         * @return float|int|string
         *
         * @internal filter
         */
        public function filter__woocommerce_product_addons_option_price_raw($option_price, $option)
        {
        }
        /**
         * Convert addon prices. For the add-ons that are not "multiple choice".
         *
         * @since    1.15.0
         *
         * @param float|int|string $addon_price Cost of the add-on.
         * @param string[]         $addon       The add-on.
         *
         * @return float|int|string
         *
         * @internal filter
         */
        public function filter__woocommerce_product_addons_price_raw($addon_price, $addon)
        {
        }
        /**
         * Get the base (unconverted) price for a product, respecting custom pricing.
         *
         * If custom pricing is set for the active currency, convert it back to the store
         * base currency. Otherwise, use the product's raw stored price.
         *
         * @since 4.6.3
         *
         * @param \WC_Product $product    The product.
         * @param string      $price_type One of '_price', '_regular_price', '_sale_price'.
         *
         * @return float
         */
        protected function get_base_price(\WC_Product $product, $price_type = '_price')
        {
        }
        /**
         * Mark cart item as PAO.
         *
         * @since 2.8.5
         *
         * @param \WC_Product $product_in_cart Product in Cart.
         */
        protected function mark_cart_item_as_pao($product_in_cart)
        {
        }
        /**
         * Returns true if product is marked as PAO in the Cart.
         *
         * @since 2.8.5
         *
         * @param \WC_Product $product Product to check.
         *
         * @return bool
         */
        public static function is_product_marked_as_pao($product)
        {
        }
    }
    /**
     * Class Integration\WCProductVendors
     */
    class WCProductVendors implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * DI: Price Controller.
         *
         * @var \WOOMC\Price\Controller
         */
        protected $price_controller;
        /**
         * The default currency.
         *
         * @var string
         */
        protected $default_currency;
        /**
         * WCProductVendors constructor.
         *
         * @param \WOOMC\Price\Controller $price_controller The Price controller instance.
         */
        public function __construct(\WOOMC\Price\Controller $price_controller)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Whether we suppressed the vendor's commission display for the current email.
         *
         * @since 4.6.3
         * @var bool
         */
        protected $suppressed_vendor_commission = false;
        /**
         * Suppress the vendor plugin's default commission display.
         * Respects other plugins that may have already disabled it.
         *
         * @since 4.6.3
         */
        public function action__suppress_vendor_commission()
        {
        }
        /**
         * Remove the suppression after the vendor's hook has fired.
         *
         * @since 4.6.3
         */
        public function action__restore_vendor_commission()
        {
        }
        /**
         * Shortcut: Convert from order currency to the base store currency.
         *
         * @since 1.12.0
         * @since 1.16.0 Use raw conversion.
         *
         * @param float|int|string $value          The value to convert.
         * @param string           $order_currency The order currency code.
         *
         * @return float|int|string
         */
        protected function convert_to_store_currency($value, $order_currency)
        {
        }
        /**
         * When an order is processed by {@see \WC_Product_Vendors_Order::process},
         * the list of items in the order is retrieved, the commission is calculated and
         * inserted to the table by {@see \WC_Product_Vendors_Commission::insert}.
         * This filter converts all amounts in the order items to the Store base currency, so that
         * the commission is calculated in the Store currency.
         *
         * @since    1.12.0
         *
         * @param \WC_Order_Item_Product[] $items The products in Order.
         * @param \WC_Order                $order The Order object.
         *
         * @return \WC_Order_Item_Product[]
         *
         * @internal filter
         */
        public function filter__woocommerce_order_get_items($items, $order)
        {
        }
        const EMAIL_STYLE_TABLE = "border-spacing: 0; border-collapse: separate; width: 100%; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;";
        /**
         * Method th.
         *
         * @since 1.12.0
         *
         * @param string $content Cell content.
         *
         * @return void
         */
        protected function th($content)
        {
        }
        /**
         * Method td.
         *
         * @since 1.12.0
         *
         * @param string $content Cell content.
         *
         * @return void
         */
        protected function td($content)
        {
        }
        /**
         * Add conversion information to the email sent to Vendor.
         *
         * @since 1.16.0
         *
         * @param \WC_Order                                 $order         The order object.
         * @param bool                                      $sent_to_admin Is sent to admin.
         * @param bool                                      $plain_text    Is plain text email.
         * @param \WC_Product_Vendors_Order_Email_To_Vendor $email         The email object.
         */
        public function action__wc_product_vendors_email_order_meta(
            $order,
            /**
             * Unused.
             *
             * @noinspection PhpUnusedParameterInspection
             */
            $sent_to_admin,
            $plain_text,
            /**
             * Unused.
             *
             * @noinspection PhpUnusedParameterInspection
             */
            $email
        )
        {
        }
        /**
         * Add commission information to the email sent to Vendor.
         *
         * @since 2.14.0
         *
         * @param \WC_Order                                 $order         The order object.
         * @param bool                                      $sent_to_admin Is sent to admin.
         * @param bool                                      $plain_text    Is plain text email.
         * @param \WC_Product_Vendors_Order_Email_To_Vendor $email         The email object.
         */
        public function action__email_show_commission(
            $order,
            /**
             * Unused.
             *
             * @noinspection PhpUnusedParameterInspection
             */
            $sent_to_admin,
            $plain_text,
            $email
        )
        {
        }
    }
    /**
     * Class WCSubscriptions
     *
     * @package WOOMC\Integration
     */
    class WCSubscriptions extends \WOOMC\Abstracts\Hookable
    {
        /**
         * If `$product->get_type()` returns one of these values, then it's "my product".
         *
         * @var string[]
         */
        const MY_PRODUCT_TYPES = array('subscription', 'subscription_variation', 'variable-subscription');
        /**
         * If `$product->get_type()` returns one of these values, then the product may have custom prices.
         *
         * @since 2.11.0-rc.1
         *
         * @var string[]
         */
        const PRODUCT_TYPES_FOR_CUSTOM_PRICES = array('subscription', 'subscription_variation');
        /**
         * Price converter.
         *
         * @var \WOOMC\Price\Converter
         */
        protected $price_converter;
        /**
         * WCSubscriptions constructor.
         *
         * @param \WOOMC\Price\Converter $price_converter
         */
        public function __construct(\WOOMC\Price\Converter $price_converter)
        {
        }
        /**
         * Is this a WC_Product [of a certain type]?
         *
         * @since 2.11.0-rc.1
         *
         * @param \WC_Product     $product The Product object.
         * @param string|string[] $type    Optional: array or string of types.
         *
         * @return bool
         */
        public static function is_wc_product($product, $type = '')
        {
        }
        /**
         * Is the product "mine"?
         *
         * @param \WC_Product $product The Product object.
         *
         * @return bool
         * @noinspection PhpUnused
         */
        protected function is_my_product($product)
        {
        }
        /**
         * Can the product have custom prices?
         *
         * @since 2.11.0-rc.1
         *
         * @param \WC_Product $product The Product object.
         *
         * @return bool
         */
        protected function can_have_custom_prices($product)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Method action__woocommerce_multicurrency_order_currency_changed.
         *
         * @since 4.4.11
         *
         * @param int       $order_id Order ID
         * @param string    $currency Currency
         * @param \WC_Order $order    Order object
         *
         * @return void
         */
        public function action__woocommerce_multicurrency_order_currency_changed($order_id, $currency, $order): void
        {
        }
        /**
         * Get product raw meta. Per-currency overrides default.
         *
         * @since 2.11.0-rc.1
         *
         * @param \WC_Product $product  Product.
         * @param string      $meta_key Meta key.
         * @param string      $currency [Currency code].
         *
         * @return string
         */
        protected function get_product_raw_meta($product, $meta_key, $currency = '')
        {
        }
        /**
         * Meta keys to keep custom pricing values.
         *
         * @since 2.0.0
         * @since 2.4.0 Product object passed instead of product type.
         *
         * @param string[]    $keys    Array of meta keys.
         * @param \WC_Product $product The product object.
         *
         * @return string[]
         */
        public function filter__woocommerce_multicurrency_custom_pricing_meta_keys($keys, $product)
        {
        }
        /**
         * Detect subscription ID when it's in a query: viewing subscription, re-subscribing, etc.
         *
         * @since 2.9.4-rc.6
         * @return int
         */
        protected function get_queried_subscription_id()
        {
        }
        /**
         * Hook on 'parse_request' to force currency to match the subscription.
         *
         * @since    2.9.4-rc.6
         * @return void
         * @internal Action.
         */
        public function maybe_force_currency_to_match_subscription()
        {
        }
        /**
         * Filter product meta.
         *
         * @since 2.11.0-rc.1
         *
         * @param string|int|float                                                        $value    The value.
         * @param \WC_Product|\WC_Product_Subscription|\WC_Product_Subscription_Variation $product  Product.
         * @param string                                                                  $meta_key Meta key.
         *
         * @return string|int|float
         */
        public function filter_product_meta($value, $product, $meta_key)
        {
        }
        /**
         * Convert subscription price.
         *
         * @since 2.11.0-rc.1
         *
         * @param float|int|string                     $price   Price.
         * @param \WC_Product|\WC_Product_Subscription $product Product.
         *
         * @return float|int|string
         */
        public function filter__subscription_price($price, $product)
        {
        }
        /**
         * Convert subscription variation price.
         *
         * @since 2.11.0-rc.1
         *
         * @param float|int|string                     $price   Price.
         * @param \WC_Product|\WC_Product_Subscription $product Product.
         *
         * @return float|int|string
         */
        public function filter__variation_subscription_price($price, $product)
        {
        }
        /**
         * Returns true is product/variation is in the cart ite.
         *
         * @since 2.11.0-rc.1
         *
         * @param array       $cart_item Cart Item.
         * @param \WC_Product $product   Product.
         *
         * @return bool
         */
        protected function is_product_in_cart_item($cart_item, $product)
        {
        }
        /**
         * Returns true if Cart has a "subscription action" item, such as "switch", "resubscribe", etc.
         * Optionally, for a specified product.
         *
         * @since 2.11.0-rc.1
         *
         * @param string|string[]  $actions Action name(s).
         * @param \WC_Product|null $product Product.
         *
         * @return bool
         */
        protected function is_cart_action($actions, $product = null)
        {
        }
        /**
         * Convert order subtotal to the store currency.
         *
         * @since 2.11.0-rc.1
         *
         * @param string|int|float       $price              The subtotal value.
         * @param \WC_Order_Item_Product $order_item_product Order item Product.
         *
         * @return string|int|float
         */
        public function filter__woocommerce_order_item_get_subtotal($price, $order_item_product)
        {
        }
        /**
         * Convert order total to the store currency.
         *
         * @since 2.11.0-rc.1
         *
         * @param string|int|float       $price The total value.
         * @param \WC_Order_Item_Product $order_item_product
         *
         * @return string|int|float
         */
        public function filter__woocommerce_order_item_get_total($price, $order_item_product)
        {
        }
        /**
         * The method {@see \WC_Subscription::get_items_sign_up_fee} gets all data with
         * the 'edit' context, so we do not apply the meta filters. Here we convert the value.
         *
         * @since 2.11.0-rc.1
         *
         * @param float                  $sign_up_fee                Sign-up fee.
         * @param \WC_Order_Item_Product $line_item                  Product in the cart.
         * @param \WC_Subscription       $subscription               The subscription.
         * @param string                 $tax_inclusive_or_exclusive Probably do not need.
         *
         * @return float
         * @todo  Maybe restrict to call from {@see \WC_Subscriptions_Switcher::subscription_items_sign_up_fee}.
         */
        public function filter__woocommerce_subscription_items_sign_up_fee(
            $sign_up_fee,
            $line_item,
            /* @noinspection PhpUnusedParameterInspection */
            $subscription,
            /* @noinspection PhpUnusedParameterInspection */
            $tax_inclusive_or_exclusive
        )
        {
        }
        /**
         * Short-circuit the price conversion in some specific cases.
         *
         * @param false|string|int|float $pre_value  Initially passed as "false". May return the actual value.
         * @param string|int|float       $value      The price.
         * @param \WC_Product|null       $product    The product object.
         * @param string                 $price_type Regular, Sale, etc.
         *
         * @return string|int|float|false
         *
         * @internal     filter.
         * @noinspection PhpUnusedParameterInspection
         */
        public function filter__woocommerce_multicurrency_pre_product_get_price($pre_value, $value, $product = null, $price_type = '')
        {
        }
        /**
         * Conditionally modify the price HTML string.
         *
         * @see   \WC_Subscriptions_Product::get_price_string()
         *
         * @since 3.1.1
         *
         * @param array                             $include_flags An associative array of flags to indicate how to calculate the price and what to include.
         * @param \WC_Product_Variable_Subscription $product       The product.
         *
         * @return array
         */
        public function filter__get_price_string($include_flags, $product)
        {
        }
        /**
         * Convert sign-up fee.
         *
         * @since 3.1.1
         *
         * @param float|int|string $price   Price.
         * @param \WC_Product      $product The product.
         *
         * @return float|int|string
         */
        public function filter__product_sign_up_fee($price, $product)
        {
        }
        /**
         * ===========================
         * TO DELETE
         * ===========================
         */
        /**
         * Convert subscription sign-up fee.
         *
         * @since      2.11.0-rc.1
         *
         * @param float|int|string                     $price   Fee.
         * @param \WC_Product|\WC_Product_Subscription $product Product.
         *
         * @return float|int|string
         * @deprecated 3.1.1 Use {@see filter__product_sign_up_fee}
         *                                                      public function filter__subscription_sign_up_fee( $price, $product ) {
         *
         * if ( $this->is_cart_action( 'subscription_switch', $product )
         * && Env::is_function_in_backtrace(
         * array( 'WC_Subscriptions_Cart', 'set_subscription_prices_for_calculation' )
         * )
         * ) {
         * // Exclude repeated conversion.
         * return $price;
         * }
         *
         * if ( $this->is_cart_action( 'subscription_resubscribe', $product ) ) {
         * // TODO: maybe only if $price is 0, i.e. resubscribe w/o sign-up fee?
         * return $price;
         * }
         *
         * // TODO: get from meta. NYP? Custom price for sign-up.
         * $converted_price = $this->price_converter->get_price( $price, '_subscription_sign_up_fee', $product );
         *
         * return $converted_price;
         * }
         */
        /**
         * Convert subscription variation sign-up fee.
         *
         * @since      2.11.0-rc.1
         *
         * @param float|int|string                               $price   Fee.
         * @param \WC_Product|\WC_Product_Subscription_Variation $product Product.
         *
         * @return float|int|string
         * @deprecated 3.1.1 Use {@see filter__product_sign_up_fee}
         *                                                                public function filter__variation_subscription_sign_up_fee( $price, $product ) {
         *
         * if ( $this->is_cart_action( 'subscription_switch', $product )
         * && Env::is_function_in_backtrace(
         * array( 'WC_Subscriptions_Cart', 'set_subscription_prices_for_calculation' )
         * )
         * ) {
         * // Exclude repeated conversion.
         * return $price;
         * }
         *
         * if ( $this->is_cart_action( 'subscription_resubscribe', $product ) ) {
         * // TODO: maybe only if $price is 0, i.e. resubscribe w/o sign-up fee?
         * return $price;
         * }
         *
         * $caller_restrictions =
         * array(
         * array( 'WCS_Switch_Totals_Calculator', 'set_upgrade_cost' ),
         * );
         *
         * if ( Env::is_functions_in_backtrace( $caller_restrictions ) ) {
         * return $price;
         * }
         *
         * // This doesn't consider custom priced fee.
         * // $price = $this->filter_product_meta( $price, $product, '_subscription_sign_up_fee' );
         * $price = $this->price_converter->get_price( $price, '_subscription_sign_up_fee', $product );
         * return $price;
         * }
         */
    }
}
namespace WOOMC\Integration\Widget {
    /**
     * Class PriceFilter
     *
     * @package WOOMC\Integration\Widget
     */
    class PriceFilter extends \WOOMC\Integration\AbstractIntegration
    {
        /**
         * The post_clauses hook has a default priority=10.
         * This is to run our hook before.
         *
         * @var int
         */
        const PRIORITY_BEFORE = 9;
        /**
         * The post_clauses hook has a default priority=10.
         * This is to run our hook after.
         *
         * @var int
         */
        const PRIORITY_AFTER = 11;
        /**
         * Original query args values preserved here.
         *
         * @var int[]
         */
        protected $original_min_max = array('min_price' => 0, 'max_price' => 0);
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Temporarily convert _GETs.
         *
         * @see \WC_Query::price_filter_post_clauses()
         *
         * @param \WP_Query $wp_query WP_Query object.
         *
         * @param array     $args     Query args.
         *
         * @return array
         */
        public function convert_min_max_query_args($args, $wp_query)
        {
        }
        /**
         * Restore _GETs.
         *
         * @see          \WC_Query::price_filter_post_clauses()
         *
         * @param \WP_Query $wp_query WP_Query object.
         *
         * @param array     $args     Query args.
         *
         * @return array
         */
        public function restore_min_max_query_args($args, $wp_query)
        {
        }
    }
}
namespace WOOMC {
    /**
     * Class Locale
     *
     * @package WOOMC
     */
    class Locale extends \WOOMC\Abstracts\Hookable
    {
        /**
         * Locale-info.
         *
         * @since 2.9.4-rc.1
         * @var string[][]
         */
        protected $locale_info = array();
        /**
         * Country.
         *
         * @var string
         */
        protected $country = '';
        /**
         * Decimal separator.
         *
         * @var string
         */
        protected $decimal_separator = '.';
        /**
         * Thousands separator.
         *
         * @var string
         */
        protected $thousand_separator = ',';
        /**
         * Getter.
         *
         * @return string
         */
        public function getDecimalSeparator()
        {
        }
        /**
         * Setter.
         *
         * @param string $decimal_separator
         */
        public function setDecimalSeparator($decimal_separator)
        {
        }
        /**
         * Getter.
         *
         * @return string
         */
        public function getThousandSeparator()
        {
        }
        /**
         * Setter.
         *
         * @param string $thousand_separator
         */
        public function setThousandSeparator($thousand_separator)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Default values for separators are taken from the Woo General Tab.
         *
         * @return void
         */
        protected function set_default_separators()
        {
        }
        /**
         * Setup locale.
         *
         * @return void
         */
        public function setup()
        {
        }
        /**
         * Decimal and thousand separators to display a currency with.
         *
         * - Store base currency: always the WC General tab settings, as set by the store owner.
         * - Other currencies: the number format of the visitor's country, whatever the currency,
         *   so the reader never misreads a separator (`1.234` is "one point two" in the US).
         *   If the visitor's country is unknown, the conventions of the currency
         *   (see {@see get_locale_info_by_currency()}), then the General tab.
         *
         * @since 5.2.0
         *
         * @param string $currency The currency code.
         *
         * @return string[] Keys: `decimal_sep`, `thousand_sep`.
         */
        public function get_separators($currency)
        {
        }
        /**
         * Country of the visitor, detected once per request.
         *
         * @since 5.2.0
         *
         * @return string
         */
        protected function get_country()
        {
        }
        /**
         * Load locale-info array.
         *
         * @since        2.9.4-rc.1
         *
         * @return void
         * @noinspection PhpIncludeInspection
         */
        protected function load_locale_info()
        {
        }
        /**
         * Parse locale and return the country part, uppercase.
         *
         * @return string
         */
        protected function get_country_from_locale()
        {
        }
        /**
         * Detect country of user.
         *
         * @return string
         */
        public function detect_country()
        {
        }
        /**
         * Locales missing in i18n/locale-info.php.
         *
         * @return array
         */
        protected function additional_locales()
        {
        }
        /**
         * Get locale-info matching country and optionally, currency.
         *
         * @since        2.9.4-rc.1
         *
         * @param string $country  Country code.
         * @param string $currency Currency code (Optional).
         *
         * @return string[]
         * @noinspection PhpUnused
         */
        public function get_locale_info_by_country($country, $currency = '')
        {
        }
        /**
         * Filter the locale_info array to have only locales with the specified currency.
         *
         * @since 2.9.4-rc.3
         *
         * @param string $currency Currency code.
         *
         * @return string[][]
         */
        public function get_locales_by_currency($currency)
        {
        }
        /**
         * Get locale_info matching the currency specified.
         *
         * If several countries use the currency, prefer the visitor's country,
         * then the currency's "home" country (the first two letters of the code: USD - US, INR - IN).
         * A currency without a home country (EUR) matches nothing unless the visitor's country uses it.
         *
         * @since 2.9.4-rc.3
         * @since 5.2.0 Fall back to the home country instead of the first country in the list.
         *
         * @param string $currency The currency code.
         *
         * @return array|string[]
         */
        public function get_locale_info_by_currency($currency)
        {
        }
    }
    /**
     * WC_Logger wrapper.
     */
    class Log extends \WOOMC\Dependencies\TIVWP\Logger\Log
    {
        /**
         * Log source.
         *
         * @return string
         */
        protected static function source(): string
        {
        }
        /**
         * Log level defined in the application settings.
         *
         * @since 2.5.4 Made public.
         *
         * @return string
         */
        public static function threshold(): string
        {
        }
    }
}
namespace WOOMC\MetaSet {
    /**
     * Class AbstractCurrencyMetaSet.
     *
     * @since 4.4.11
     */
    abstract class AbstractCurrencyMetaSet implements \WOOMC\Dependencies\TIVWP\Abstracts\MetaSetInterface
    {
        /**
         * Var order_currency.
         *
         * @since 4.4.11
         *
         * @var string
         */
        protected string $order_currency = '';
        /**
         * Returns the MetaSet title.
         *
         * @since  3.0.0-rc.1
         *
         * @return string
         */
        public function get_title(): string
        {
        }
        /**
         * Method init.
         *
         * @since 4.4.11
         * @return void
         */
        protected function init(): void
        {
        }
        /**
         * Method is_order_currency_enabled.
         *
         * @since 4.4.11
         * @return bool
         */
        protected function is_order_currency_enabled(): bool
        {
        }
        /**
         * Method field_disabled_currency.
         *
         * @since 4.4.11
         *
         * @return array[]
         */
        protected function field_disabled_currency(): array
        {
        }
        /**
         * Method field_select_currency.
         *
         * @since 4.4.11
         * @return array
         */
        protected function field_select_currency(): array
        {
        }
        /**
         * Method additional_fields.
         *
         * @since 4.4.11
         * @return array
         */
        protected function additional_fields(): array
        {
        }
        /**
         * Returns the MetaSet fields.
         *
         * @since  3.0.0-rc.1
         *
         * @return array[]
         */
        public function get_meta_fields(): array
        {
        }
    }
    /**
     * Class
     *
     * @since  3.0.0-rc.1
     */
    class MetaSetOrder extends \WOOMC\MetaSet\AbstractCurrencyMetaSet
    {
        /**
         * Implement get_type().
         *
         * @since 4.4.8
         * @inheritDoc
         */
        public function get_type(): string
        {
        }
        /**
         * Method get_screens.
         *
         * @since        4.4.11
         * @return string[]
         * @noinspection PhpMemberCanBePulledUpInspection
         */
        public static function get_screens(): array
        {
        }
        /**
         * Implement additional_fields().
         *
         * @inheritDoc
         */
        protected function additional_fields(): array
        {
        }
    }
    /**
     * Class
     *
     * @since  4.4.11
     */
    class MetaSetSubscription extends \WOOMC\MetaSet\AbstractCurrencyMetaSet
    {
        /**
         * Implement get_type().
         *
         * @since 4.4.11
         * @inheritDoc
         */
        public function get_type(): string
        {
        }
        /**
         * Method get_screens.
         *
         * @since        4.4.11
         * @return string[]
         * @noinspection PhpMemberCanBePulledUpInspection
         */
        public static function get_screens(): array
        {
        }
        /**
         * Implement additional_fields().
         *
         * @inheritDoc
         */
        protected function additional_fields(): array
        {
        }
    }
}
namespace WOOMC\Order {
    /**
     * Class Order\Controller
     *
     * @package WOOMC\Order
     */
    class Controller
    {
        /**
         * Marker for converted column headings.
         *
         * @since 4.6.4
         */
        public const MARKER = '*';
        /**
         * DI.
         *
         * @var \WOOMC\Rate\Storage
         */
        protected $rate_storage;
        /**
         * Store currency (current).
         *
         * @var string
         */
        protected $store_currency_now;
        /**
         * Constructor.
         *
         * @param \WOOMC\Rate\Storage $rate_storage Rate Storage instance.
         */
        public function __construct($rate_storage)
        {
        }
        /**
         * Add multi-currency columns to the WC Orders list table.
         * Inserts Currency before Total; all others after Total.
         *
         * @since 4.6.4
         *
         * @param array $columns List table columns.
         *
         * @return array
         */
        public function add_currency_columns($columns): array
        {
        }
        /**
         * Show a note explaining the * columns on the WC Orders list page.
         *
         * @since 4.6.4
         *
         * @param string $order_type Order type.
         * @param string $which      'top' or 'bottom'.
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public function render_orders_list_note($order_type, $which): void
        {
        }
        /**
         * Render the currency filter dropdown.
         *
         * @since 4.6.4
         */
        public function render_currency_filter(): void
        {
        }
        /**
         * Apply the currency filter to the orders query.
         *
         * @since 4.6.4
         *
         * @param array $query_args Query arguments for wc_get_orders().
         *
         * @return array
         */
        public function apply_currency_filter($query_args): array
        {
        }
        /**
         * Render multi-currency column values.
         *
         * @since 4.6.4
         *
         * @param string    $column_name Column identifier.
         * @param \WC_Order $order       Order object.
         */
        public function render_currency_column($column_name, $order): void
        {
        }
        /**
         * Get order data for multi-currency columns (cached per order).
         *
         * @since 4.6.4
         *
         * @param \WC_Order $order Order object.
         *
         * @return array
         */
        protected function get_order_data($order): array
        {
        }
    }
    /**
     * Class MC_Order.
     *
     * @since 2.16.4
     */
    class MC_Order
    {
        /**
         * Order ID.
         *
         * @since 2.16.4
         *
         * @var int
         */
        protected $order_id = 0;
        /**
         * Order object.
         *
         * @since 2.16.4
         *
         * @var \WC_Order
         */
        protected $order;
        /**
         * True if loaded.
         *
         * @since 2.16.4
         *
         * @var bool
         */
        protected $loaded = false;
        /**
         * Getter Loaded
         *
         * @since 2.16.4
         *
         * @return bool
         */
        public function isLoaded()
        {
        }
        /**
         * Currency Controller.
         *
         * @since 2.16.4
         *
         * @var \WOOMC\Currency\Controller
         */
        protected $currency_controller;
        /**
         * Do we need to re-enable conversion?
         *
         * @since 2.16.4
         *
         * @var bool
         */
        protected $need_to_enable_conversion = false;
        /**
         * Constructor OrderUtils
         *
         * @since 2.16.4
         *
         * @param int  $order_id              Order ID.
         * @param bool $is_conversion_enabled True if currency conversion is done during loading [Default=false].
         */
        public function __construct($order_id, $is_conversion_enabled = false)
        {
        }
        /**
         * Load order.
         *
         * @since 2.16.4
         *
         * @param bool $is_conversion_enabled True if currency conversion is done during loading [Default=false].
         * @return bool
         */
        public function load($is_conversion_enabled = false)
        {
        }
        /**
         * Disable currency conversion if wasn't disabled already.
         *
         * @since 2.16.4
         *
         * @return void
         */
        protected function maybe_disable_conversion()
        {
        }
        /**
         * Re-enable currency conversion if we disabled it previously.
         *
         * @since 2.16.4
         *
         * @return void
         */
        protected function maybe_enable_conversion()
        {
        }
        /**
         * Gets order currency.
         *
         * @param string $context View or edit context.
         * @return string
         */
        public function get_currency($context = 'edit')
        {
        }
        /**
         * Return the order status without wc- internal prefix.
         *
         * @param string $context View or edit context.
         * @return string
         */
        public function get_status($context = 'edit')
        {
        }
    }
    /**
     * Class Meta
     *
     * @since 1.16.0
     */
    class Meta extends \WOOMC\Abstracts\Hookable
    {
        /**
         * Meta keys prefix.
         *
         * @since 1.16.0
         * @var string
         */
        const PREFIX = '_woomc_';
        /**
         * DI.
         *
         * @since 1.16.0
         * @var \WOOMC\Rate\Storage
         */
        protected $rate_storage;
        /**
         * Meta constructor.
         *
         * @since 1.16.0
         *
         * @param \WOOMC\Rate\Storage $rate_storage Rate Storage instance.
         */
        public function __construct($rate_storage)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @since 1.16.0
         * @since 2.16.4 Use woocommerce_checkout_create_order instead of woocommerce_checkout_update_order_meta.
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Add order metas at checkout.
         *
         * @since 2.16.4
         *
         * @param \WC_Order $order Order object.
         *
         * @return void
         */
        public function action__woocommerce_checkout_create_order($order)
        {
        }
        /**
         * Act on meta changes.
         *
         * @since        3.0.0-rc.1
         *
         * @param string           $meta_action Meta action - see MetaboxEngine constants.
         * @param array            $meta_field  Meta field.
         * @param mixed            $meta_value  Meta value.
         * @param \WOOMC\Dependencies\TIVWP\Abstracts\MetaSetInterface $meta_set    MetaSet.
         * @param \WOOMC\Dependencies\TIVWP\UniMeta\UniMeta_WC_Order $uni_meta    UniMeta.
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public function action__tivwp_meta_changed($meta_action, $meta_field, $meta_value, $meta_set, $uni_meta)
        {
        }
    }
    /**
     * Class ReportPage
     *
     * @package WOOMC\Order
     */
    class ReportPage implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * Orders report menu slug.
         *
         * @var string
         */
        const MENU_SLUG_ORDERS_REPORT = 'multicurrency-orders';
        /**
         * DI.
         *
         * @var \WOOMC\Rate\Storage
         */
        protected $rate_storage;
        /**
         * Meta constructor.
         *
         * @param \WOOMC\Rate\Storage $rate_storage Rate Storage instance.
         */
        public function __construct($rate_storage)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Add submenu.
         */
        public function action__admin_menu()
        {
        }
        /**
         * The page.
         */
        public function callback__page()
        {
        }
    }
    /**
     * Class ReportTable
     *
     * @package WOOMC\Order
     */
    class ReportTable extends \WP_List_Table
    {
        /**
         * Nonce name.
         *
         * @since 2.0.0
         * @var string
         */
        const NONCE_NAME = 'woomc_nonce_name_orders';
        /**
         * Nonce action.
         *
         * @since 2.0.0
         * @var string
         */
        const NONCE_ACTION = 'woomc_nonce_action_orders';
        /**
         * The Order post type.
         *
         * @var string
         */
        const POST_TYPE = 'shop_order';
        /**
         * Prefix for the converted field names.
         *
         * @var string
         */
        const PREFIX_CONVERTED = 'converted__';
        /**
         * Marker for the converted fields headings.
         */
        const MARKER = '*';
        /**
         * Rows per page - min.
         *
         * @var int
         */
        const PER_PAGE_MIN = 1;
        /**
         * Rows per page - max.
         *
         * @var int
         */
        const PER_PAGE_MAX = 1000;
        /**
         * Rows per page - default.
         *
         * @var int
         */
        const PER_PAGE_DEFAULT = 20;
        /**
         * Max items.
         *
         * @var int
         */
        protected $max_items = 0;
        /**
         * DI.
         *
         * @var \WOOMC\Rate\Storage
         */
        protected $rate_storage;
        /**
         * Store currency - now. Used as default if not in the order meta.
         *
         * @var string
         */
        protected $store_currency_now;
        /**
         * Rows per page.
         *
         * @var int
         */
        protected $per_page = self::PER_PAGE_DEFAULT;
        /**
         * Totals.
         *
         * @var float[]
         */
        protected $totals = array();
        /**
         * To access the array in {@see get_columns}
         *
         * @var string[]
         */
        protected $columns = array();
        /**
         * Constructor.
         *
         * @param \WOOMC\Rate\Storage $rate_storage Rate Storage instance.
         */
        public function __construct($rate_storage)
        {
        }
        /**
         * Output the report.
         */
        public function output_report()
        {
        }
        /**
         * Get column value.
         *
         * @param \WC_Order $item        Item (order object).
         * @param string    $column_name Column name.
         */
        public function column_default($item, $column_name)
        {
        }
        /**
         * Calculate the table row values.
         *
         * @param \WC_Order $order Order.
         *
         * @return array
         */
        protected function calculate($order)
        {
        }
        /**
         * Get columns.
         *
         * @return array
         */
        public function get_columns()
        {
        }
        /**
         * Prepare customer list items.
         */
        public function prepare_items()
        {
        }
        /**
         * Retrieve the items from DB.
         *
         * @param int $current_page Current page.
         * @param int $per_page     Results per page.
         */
        public function get_items($current_page, $per_page)
        {
        }
        /**
         * Extra navigation controls.
         *
         * @param string $which Top or bottom.
         */
        protected function extra_tablenav($which)
        {
        }
        /**
         * Displays the order status dropdown filter
         */
        public function status_dropdown()
        {
        }
        /**
         * Render the months filter dropdown.
         * Based on {@see \Automattic\WooCommerce\Internal\Admin\Orders\ListTable::months_filter}
         *
         * @since 4.4.1
         * @since 4.5.1 Fix wpdb 'not prepared' by using "%i" placeholder.
         * @return void
         */
        private function months_filter(): void
        {
        }
    }
}
namespace WOOMC\Price {
    /**
     * Class Price\Calculator
     */
    class Calculator
    {
        /**
         * The Rate Storage instance.
         *
         * @var  \WOOMC\Rate\Storage
         */
        protected $rate_storage;
        /**
         * The Price Rounder instance.
         *
         * @var  Rounder
         */
        protected $price_rounder;
        /**
         * True if currency conversion is enabled.
         *
         * @since 2.6.0
         *
         * @var bool
         */
        protected $conversion_enabled = true;
        /**
         * Getter for $conversion_enabled.
         *
         * @since 2.6.0
         * @return bool
         */
        public function isConversionEnabled()
        {
        }
        /**
         * Setter for $conversion_enabled.
         *
         * @since 2.6.0
         *
         * @param bool $conversion_enabled
         *
         * @return bool
         */
        protected function setConversionEnabled($conversion_enabled)
        {
        }
        /**
         * Enable conversion.
         *
         * @since 2.6.0
         * @return bool
         */
        public function enable_conversion()
        {
        }
        /**
         * Disable conversion.
         *
         * @since 2.6.0
         * @return bool
         */
        public function disable_conversion()
        {
        }
        /**
         * Price\Calculator constructor.
         *
         * @param \WOOMC\Rate\Storage $rate_storage  The Rate Storage instance.
         * @param Rounder $price_rounder The Price Rounder instance.
         *
         * @codeCoverageIgnore
         */
        public function __construct(\WOOMC\Rate\Storage $rate_storage, \WOOMC\Price\Rounder $price_rounder)
        {
        }
        /**
         * Calculate the price for the currency specified.
         *
         * @since 1.12.1 Added the `reverse` parameter.
         *
         * @param int|float|string $value   The value to convert.
         * @param string           $to      Currency to convert to.
         * @param string           $from    Currency to convert from.
         * @param bool             $reverse If this is a reverse conversion.
         *
         * @return int|float|string
         */
        public function calculate($value, $to, $from, $reverse = false)
        {
        }
        /**
         * Calculate the price for the currency specified, ignoring all price adjustments.
         *
         * @since 1.16.0
         *
         * @param int|float|string $value The value to convert.
         * @param string           $to    Currency to convert to.
         * @param string           $from  Currency to convert from.
         *
         * @return int|float|string
         */
        public function calculate_raw($value, $to, $from)
        {
        }
        /**
         * Cast one variable to the type of another.
         * If we cannot cast, return unchanged.
         *
         * @since 2.3.0
         *
         * @param mixed $value                    Value to cast.
         * @param mixed $value_with_required_type Value to get the type from.
         *
         * @return mixed
         */
        public static function cast_to($value, $value_with_required_type)
        {
        }
    }
    /**
     * Class Price\Controller
     */
    class Controller implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * Instance of the Calculator.
         *
         * @var Calculator
         */
        protected $price_calculator;
        /**
         * Instance of the Detector.
         *
         * @var \WOOMC\Currency\Detector
         */
        protected $currency_detector;
        /**
         * Apply rounding, charming, and fee to the shipping fees?
         *
         * @since 4.2.0
         *
         * @var bool
         */
        protected $is_raw_shipping_conversion = false;
        /**
         * Controller constructor.
         *
         * @param Calculator $price_calculator  Instance of the Calculator.
         * @param \WOOMC\Currency\Detector   $currency_detector Instance of the Detector.
         */
        public function __construct(\WOOMC\Price\Calculator $price_calculator, \WOOMC\Currency\Detector $currency_detector)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Convert the fixed amount coupon data.
         *
         * @since    1.8.0
         *
         * @param \WC_Coupon $coupon The coupon object.
         *
         * @internal action.
         */
        public function action__woocommerce_coupon_loaded($coupon)
        {
        }
        /**
         * The Converter.
         *
         * @since 1.3.0 is in a separate method.
         * @since 1.10.1 Parameters $to and $from.
         * @since 1.12.1 Parameter $reverse.
         * @since 1.17.0 Do not attempt to convert non-numeric values.
         * @since 2.7.0 Do not call `calculate()` if to=from.
         *
         * @param string|int|float $value   The price.
         * @param \WC_Product      $product The Product object. Reserved for future use.
         * @param string           $to      Currency convert to. Default is the currently selected.
         * @param string           $from    Currency convert from. Default is store base.
         * @param bool             $reverse If this is a reverse conversion.
         *
         * @return float|int|string
         */
        public function convert(
            $value,
            /* @noinspection PhpUnusedParameterInspection */
            $product = null,
            $to = '',
            $from = '',
            $reverse = false
        )
        {
        }
        /**
         * The Raw Converter.
         *
         * @since 1.16.0
         * @since 1.17.0 Do not attempt to convert non-numeric values.
         *
         * @param string|int|float $value   The price.
         * @param \WC_Product      $product The Product object. Reserved for future use.
         * @param string           $to      Currency convert to. Default is the currently selected.
         * @param string           $from    Currency convert from. Default is store base.
         *
         * @return float|int|string
         */
        public function convert_raw(
            $value,
            /* @noinspection PhpUnusedParameterInspection */
            $product = null,
            $to = '',
            $from = ''
        )
        {
        }
        /**
         * The shipping fees converter.
         *
         * @since 4.2.0
         *
         * @param string|int|float $value   The price.
         * @param \WC_Product      $product The Product object. Reserved for future use.
         * @param string           $to      Currency convert to. Default is the currently selected.
         * @param string           $from    Currency convert from. Default is store base.
         *
         * @return float|int|string
         */
        public function convert_shipping_fee($value, $product = null, $to = '', $from = '')
        {
        }
        /**
         * Convert back to the default currency.
         *
         * @see        convert() with reverse=true.
         *
         * @note       The result might differ from the original amount because of rounding and adjustments.
         * @since      1.15.0 Parameters $to and $from.
         * @since      1.17.0 Do not attempt to convert non-numeric values.
         *
         * @since      1.8.0
         *
         * @param string|int|float $value   The amount.
         * @param \WC_Product      $product The Product object. Reserved for future use.
         * @param string           $to      Currency convert to. Default is store base.
         * @param string           $from    Currency convert from. Default is the currently selected.
         *
         * @return float|int|string
         */
        public function convert_back(
            $value,
            /* @noinspection PhpUnusedParameterInspection */
            $product = null,
            $to = '',
            $from = ''
        )
        {
        }
        /**
         * The Raw back-Converter.
         *
         * @since        2.8.3
         *
         * @param string|int|float $value   The price.
         * @param \WC_Product      $product The Product object. Reserved for future use.
         * @param string           $to      Currency convert to. Default is store base.
         * @param string           $from    Currency convert from. Default is the currently selected.
         *
         * @return float|int|string
         * @noinspection PhpUnusedParameterInspection
         */
        public function convert_back_raw($value, $product = null, $to = '', $from = '')
        {
        }
        /**
         * Convert an array of prices.
         *
         * @since   1.4.0
         * @since   1.10.1 Parameters $to and $from.
         * @since   1.12.1 Parameter $reverse.
         *
         * @param array  $values  The array of values.
         * @param string $to      Currency convert to. Default is the currently selected.
         * @param string $from    Currency convert from. Default is store base.
         * @param bool   $reverse If this is a reverse conversion.
         *
         * @return array
         * @example convert_array( ['price' => '10', 'sale_price' => 5] ) --> ['price' => '12.4', 'sale_price' => 6.2]
         */
        public function convert_array($values, $to = '', $from = '', $reverse = false)
        {
        }
        /**
         * Raw convert an array of prices.
         *
         * @since   4.2.0
         *
         * @param array  $values  The array of values.
         * @param string $to      Currency convert to. Default is the currently selected.
         * @param string $from    Currency convert from. Default is store base.
         * @param bool   $reverse If this is a reverse conversion.
         *
         * @return array
         */
        public function convert_array_raw($values, $to = '', $from = '', $reverse = false)
        {
        }
        /**
         * Raw/normal convert an array depending on is_raw_shipping_conversion.
         *
         * @since   4.2.0
         *
         * @param array  $values  The array of values.
         * @param string $to      Currency convert to. Default is the currently selected.
         * @param string $from    Currency convert from. Default is store base.
         * @param bool   $reverse If this is a reverse conversion.
         *
         * @return array
         */
        public function convert_array_shipping($values, $to = '', $from = '', $reverse = false)
        {
        }
    }
    /**
     * Class Converter.
     *
     * @since 4.1.0
     */
    class Converter extends \WOOMC\AbstractConverter
    {
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
    }
    /**
     * Class Formatter
     */
    class Formatter extends \WOOMC\Abstracts\Hookable
    {
        /**
         * Array of price formats per currency.
         *
         * @var string[]
         */
        protected $currency_to_price_format;
        /**
         * DI: Locale.
         *
         * @since 2.1.0
         *
         * @var \WOOMC\Locale
         */
        protected $locale;
        /**
         * Price\Formatter constructor.
         *
         * @codeCoverageIgnore
         *
         * @param \WOOMC\Locale $locale Locale object.
         */
        public function __construct(\WOOMC\Locale $locale)
        {
        }
        /**
         * Setter.
         *
         * @param string[] $currency_to_price_format Array of "currency-to-price-format".
         */
        public function setCurrencyToPriceFormat($currency_to_price_format)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         * @codeCoverageIgnore
         */
        public function setup_hooks()
        {
        }
        /**
         * Setup hooks when WP and WC are fully loaded.
         *
         * @since 2.9.4-rc.1 Special treatment for My Account pages.
         * @since 2.9.4-rc.3 Special treatment for My Account pages - also for the price format.
         * @since 2.9.4-rc.5 Special treatment for the `order-pay` page.
         */
        public function action__setup_hooks_on_full_load()
        {
        }
        /**
         * If we have a format for the current WC currency, return it.
         *
         * @param string $format The currency format to filter.
         *
         * @return string
         */
        public function filter__woocommerce_price_format($format)
        {
        }
        /**
         * If we have a format for this currency, return it.
         *
         * @param string $currency The currency code.
         *
         * @return string
         */
        protected function get_format($currency)
        {
        }
        /**
         * Wrapper for PHPUnit mocking.
         *
         * @return string
         * @codeCoverageIgnore
         */
        protected function get_woocommerce_currency()
        {
        }
    }
    /**
     * Price\Rounder
     */
    class Rounder
    {
        /**
         * Default "Round To" value.
         *
         * @var float
         */
        const DEFAULT_ROUND_TO = 0.01;
        /**
         * Default "Price charm" value.
         *
         * @var float
         */
        const DEFAULT_PRICE_CHARM = 0.0;
        /**
         * Default "Fee percent" value.
         *
         * @var float
         */
        const DEFAULT_FEE_PERCENT = 0.0;
        /**
         * Default minimum value of number to round.
         * All values under this will not be rounded.
         *
         * @since 3.2.0-1
         * @var float
         */
        const MIN_ROUND_TO_VALUE = 0.01;
        /**
         * Default automatic rounding value.
         *
         * @since 3.2.0-1
         * @var bool
         */
        const DEFAULT_AUTO_ROUNDING = false;
        /**
         * The settings array.
         *
         * @var float[]
         */
        protected $settings = array('round_to' => self::DEFAULT_ROUND_TO, 'price_charm' => self::DEFAULT_PRICE_CHARM, 'fee_percent' => self::DEFAULT_FEE_PERCENT, 'auto_rounding' => self::DEFAULT_AUTO_ROUNDING);
        /**
         * Price\Rounder constructor.
         */
        public function __construct()
        {
        }
        /**
         * Discard invalid parameters and values lower than 1 cent (that also discards negative values).
         *
         * @param mixed $value    The value.
         * @param float $fallback The fallback if not sanitize-able.
         *
         * @return float
         */
        protected function sanitize_setting_value($value, $fallback = 0.0)
        {
        }
        /**
         * Getter for "Round to".
         *
         * @return float
         */
        public function getRoundTo()
        {
        }
        /**
         * Setter for "Round to".
         *
         * @param float|int $value The value.
         */
        public function setRoundTo($value)
        {
        }
        /**
         * Getter for "Price charm".
         *
         * @return float
         * @noinspection PhpUnused
         */
        public function getPriceCharm()
        {
        }
        /**
         * Setter for "Price charm".
         *
         * @param float|int $value The value.
         */
        public function setPriceCharm($value)
        {
        }
        /**
         * Getter for "Fee percent".
         *
         * @return float
         * @noinspection PhpUnused
         */
        public function getFeePercent()
        {
        }
        /**
         * Setter for "Fee percent".
         *
         * @param float|int $value The value.
         */
        public function setFeePercent($value)
        {
        }
        /**
         * Setter for "Automatic rounding".
         *
         * @param bool $auto_rounding_set rounding or not.
         */
        public function setAutomaticRounding($auto_rounding_set)
        {
        }
        /**
         * Getter for "Automatic rounding".
         *
         * @return bool
         */
        public function getAutomaticRounding()
        {
        }
        /**
         * Set round_to and price_charm depending on value.
         *
         * @since 3.2.0-1
         *
         * @param float $value The value.
         *
         * @return int $multiplier The multiplier.
         */
        protected function get_adaptive_rounding_multiplier($value)
        {
        }
        /**
         * Round the value.
         *
         * @since 3.2.0-1
         * @since 3.4.2-1 Fix float math (a visible 310.0 might be 310.00000000000001 internally).
         * @since 4.6.3 Removed legacy (int)*10000 truncation — redundant after M2 round() fix; broke BTC precision and 32-bit PHP.
         *
         * @param float|int $value The value.
         *
         * @return float|int
         */
        protected function round_value($value, $round_to)
        {
        }
        /**
         * Round up a value.
         *
         * @since 1.0.0
         * @since 3.2.0-1 Added "smart rounding"
         *
         * @param float|int $value    The value to round.
         * @param string    $currency The currency code.
         *
         * @return float
         */
        public function up($value, $currency = '')
        {
        }
        /**
         * Reverse to the {@see up()}.
         *
         * @param float  $value    The value to reverse-round.
         * @param string $currency The currency code.
         *
         * @return float
         */
        public function down($value, $currency = '')
        {
        }
    }
}
namespace WOOMC\Product {
    /**
     * Class Product\Info
     */
    class Info
    {
        /**
         * Return this if garbage was passed to {@see classname()}.
         *
         * @since 1.13.0
         *
         * @var string
         */
        const NOT_AN_OBJECT = 'NOT_AN_OBJECT';
        /**
         * The WC Product object.
         *
         * @since 1.19.0
         *
         * @var \WC_Product
         */
        protected $product;
        /**
         * Custom prices.
         *
         * @since 2.11.0-rc.1
         * @var array
         */
        protected $custom_prices = array();
        /**
         * Getter.
         *
         * @since 2.11.0-rc.1
         * @return array
         */
        public function getCustomPrices()
        {
        }
        /**
         * Active currency.
         *
         * @since 2.11.0-rc.1
         * @var string
         */
        protected $active_currency = '';
        /**
         * True is the product has any custom price.
         *
         * @since 2.11.0-rc.1
         * @var bool
         */
        protected $is_custom_priced = false;
        /**
         * Info constructor.
         *
         * @since 1.19.0
         *
         * @param \WC_Product $product The product object.
         */
        public function __construct(\WC_Product $product)
        {
        }
        /**
         * Get meta for custom price.
         *
         * @since 2.11.0-rc.1
         * @since 2.16.4 Use product->get_meta instead of get_post_meta.
         * @param string $key Meta key.
         * @return string
         */
        protected function get_custom_meta($key)
        {
        }
        /**
         * Polyfill for ?: operator.
         *
         * @since 2.11.0-rc.1
         * @param mixed $a               A.
         * @param mixed $if_not_a_then_b B.
         * @return mixed
         */
        protected function elvis($a, $if_not_a_then_b)
        {
        }
        /**
         * Load custom prices at constructor.
         *
         * @since 2.11.0-rc.1
         */
        protected function load_custom_prices()
        {
        }
        /**
         * Get the class of product object.
         *
         * @since 1.13.0
         *
         * @param mixed $product Can be anything: product, its ID, null, etc.
         *
         * @return string The class.
         */
        public static function classname($product)
        {
        }
        /**
         * Check if the product has a sale schedule.
         *
         * @since 1.19.0
         * @since 2.14.2-beta.1 Handle partially entered dates.
         *
         * @param string $context What the value is for. Valid values are view and edit.
         *
         * @return bool
         */
        public function has_sale_schedule($context = 'edit')
        {
        }
        /**
         * Check if the product is currently on sale schedule.
         * Checks the dates only and ignores the prices.
         *
         * @since 1.19.0
         * @since 2.14.2-beta.1 Handle partially entered dates.
         *
         * @param string $context What the value is for. Valid values are view and edit.
         *
         * @return bool
         */
        public function is_on_sale_schedule($context = 'edit')
        {
        }
        /**
         * Check if the product has custom pricing.
         *
         * @since 1.19.0
         * @since 2.11.0-rc.1 Defined in the constructor.
         *
         * @return bool
         */
        public function is_custom_priced()
        {
        }
        /**
         * Get custom price.
         *
         * @since 2.8.5
         * @since 2.10.0 Fix: Do not use base sale price in calculations.
         * @since 2.10.0 Fix: Cache values per currency.
         * @since 2.11.0 Fix: Subscription price is the same as regular price.
         * @since 2.11.0 Added: get_custom_subscription_sign_up_fee.
         *
         * @param string $price_type One of the 'price', 'sale_price', 'regular_price'.
         *
         * @return string|false
         */
        public function get_custom_price($price_type)
        {
        }
    }
    /**
     * Class Pricing
     *
     * @package WOOMC\Product
     */
    class Pricing extends \WOOMC\AbstractConverter
    {
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Make WC's variation-prices transient bucket per currency and rate.
         *
         * Without this, all currencies share one transient slot, so
         * {@see filter__woocommerce_variation_prices} runs on every page load
         * and redoes ~N variations x 3 price types of conversion work per
         * variable product. Including the active currency code and the
         * default-to-active rate in the hash gives WC a separate bucket per
         * currency and auto-invalidates when rates change.
         *
         * @since 4.6.6
         *
         * @param array        $hash        WC's hash array.
         * @param \WC_Product  $product     The product.
         * @param bool         $for_display For-display flag.
         *
         * @return array
         *
         * @internal     filter.
         * @noinspection PhpUnusedParameterInspection
         */
        public function filter__woocommerce_get_variation_prices_hash($hash, $product = null, $for_display = false)
        {
        }
        /**
         * Filter `$product->get_price()`.
         *
         * @param string|int|float                  $value       The price.
         * @param \WC_Product|\WC_Product_Variation $product     The product object.
         * @param bool                              $include_tax Return price with tax?
         *
         * @return string
         *
         * @internal filter.
         */
        public function filter__woocommerce_product_get_price($value, $product, $include_tax = false)
        {
        }
        /**
         * Filter `$product->get_regular_price()`.
         *
         * @param string|int|float $value       The price.
         * @param \WC_Product      $product     The product object.
         * @param bool             $include_tax Return price with tax?
         *
         * @return string
         *
         * @internal filter.
         */
        public function filter__woocommerce_product_get_regular_price($value, $product, $include_tax = false)
        {
        }
        /**
         * Filter `$product->get_sale_price()`.
         *
         * @param string|int|float $value       The price.
         * @param \WC_Product      $product     The product object.
         * @param bool             $include_tax Return price with tax?
         *
         * @return string
         *
         * @internal filter.
         */
        public function filter__woocommerce_product_get_sale_price($value, $product, $include_tax = false)
        {
        }
        /**
         * Convert variation prices for one variation, before WC stores the
         * price array in its transient cache.
         *
         * Replaces the post-cache `woocommerce_variation_prices` hook, which fired
         * on every page load and redid conversion work even on cache hit. This
         * pre-cache hook fires only when WC rebuilds the variation prices array
         * (cache miss), so the converted prices are persisted in the transient and
         * subsequent reads serve them with no per-request work.
         *
         * Pairs with {@see filter__woocommerce_get_variation_prices_hash}, which
         * buckets the transient per (currency, rate).
         *
         * @since 4.6.6
         *
         * @param array        $prices_array The prices array being built. Has `price`, `regular_price`, `sale_price` keys.
         * @param \WC_Product  $variation    The variation product object.
         * @param bool         $for_display  If true, prices include tax based on `woocommerce_tax_display_shop`.
         *
         * @return array
         *
         * @internal filter.
         */
        public function filter__woocommerce_variation_prices_array($prices_array, $variation, $for_display = false)
        {
        }
        /**
         * Setup filters for get_prop_* methods.
         *
         * @since 1.0.0
         * @since 2.0.0 Moved to a function in Pricing.
         */
        protected function setup_get_props_filters()
        {
        }
    }
}
namespace WOOMC\Rate {
    /**
     * Class Rates\CurrentProvider
     *
     * @package WOOMC\Rate
     */
    class CurrentProvider
    {
        /**
         * Returns true if the current provider is "FixedRates"
         *
         * @return bool
         */
        public static function isFixedRates()
        {
        }
    }
}
namespace WOOMC\Rate\Provider {
    /**
     * Abstract Provider Class
     */
    abstract class AbstractProvider
    {
        /**
         * Provider's URL.
         *
         * @since 3.1.0
         * @return  string
         */
        protected static function url()
        {
        }
        /**
         * Provider's API URL.
         *
         * @since 1.0.0
         * @var string
         */
        protected $url_get_rates;
        /**
         * Rates section in the data received from the provider.
         *
         * @since 1.0.0
         * @var string
         */
        protected $section_rates;
        /**
         * Timestamp section in the data received from the provider.
         *
         * @since 1.0.0
         * @var string
         */
        protected $section_timestamp = 'timestamp';
        /**
         * The credentials.
         *
         * @since 1.0.0
         * @var mixed
         */
        protected $credentials;
        /**
         * Formatted rates timestamp.
         *
         * @since 1.0.0
         * @var string
         */
        protected $timestamp;
        /**
         * The provider ID.
         *
         * @since 1.15.0
         * @since 3.1.0 ID must match the class name, or {@see \WOOMC\Rate\Updater::getProvider} fails.
         *
         * @return string
         */
        final public static function id()
        {
        }
        /**
         * The provider title.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public static function title()
        {
        }
        /**
         * The credentials label (App ID, API key, etc.).
         *
         * @since 1.15.0
         *
         * @return string
         */
        public static function credentials_label()
        {
        }
        /**
         * Provider description (e.g., link to their site).
         *
         * @since 3.1.0
         *
         * @return string
         */
        public static function description()
        {
        }
        /**
         * Getter for $this->credentials.
         *
         * @since 1.0.0
         * @return mixed
         */
        public function getCredentials()
        {
        }
        /**
         * Setter for $this->credentials.
         *
         * @since 1.0.0
         *
         * @param mixed $credentials The credentials.
         */
        protected function setCredentials($credentials)
        {
        }
        /**
         * Getter for $this->timestamp.
         *
         * @since 1.0.0
         * @return string
         */
        public function getTimestamp()
        {
        }
        /**
         * Getter for $this->timestamp.
         *
         * @since 1.0.0
         *
         * @param string $timestamp The timestamp.
         */
        public function setTimestamp($timestamp)
        {
        }
        /**
         * This method must be called to pass the credentials.
         * The derived classes also must set the URL and additional parameters.
         *
         * @since 1.0.0
         *
         * @param array $settings The array of settings.
         *
         * @return void
         */
        public function configure(array $settings)
        {
        }
        /**
         * Method to call the provider service.
         *
         * @since 3.0.0
         * @since 3.2.0-2 Added $args.
         *
         * @param array $args Optional. Request arguments. Default empty array.
         *
         * @return array|\WP_Error
         */
        protected function remote_call($args = array())
        {
        }
        /**
         * Call the provider API to retrieve the rates.
         * It is public because called by Updater.
         *
         * @since 1.0.0
         * @since 1.15.0 Logging.
         * @since 1.18.3 Log response body if error and if debug.
         *
         * @return float[]
         * @throws \Exception Caught in {@see \WOOMC\Rate\Updater::update}.
         */
        public function retrieve_rates()
        {
        }
        /**
         * Stub for sanitizing rates.
         *
         * @since 1.0.0
         *
         * @param array $rates The array of ratings.
         *
         * @return array
         */
        protected function sanitize_rates(array $rates)
        {
        }
    }
    /**
     * Class APILayerProvider
     *
     * @since 3.0.0
     */
    class APILayerProvider extends \WOOMC\Rate\Provider\AbstractProvider
    {
        /**
         * APILayer base URL.
         *
         * @since 3.0.0
         * @type string
         */
        const APILAYER_URL = 'https://api.apilayer.com/';
        /**
         * The credentials label.
         *
         * @since 3.0.0
         * @return string
         */
        public static function credentials_label()
        {
        }
        /**
         * Override remote_call.
         *
         * @since 3.0.0
         * @inheritDoc
         */
        protected function remote_call($args = array())
        {
        }
    }
    /**
     * Class Provider\APILayer_ExchangeRates
     *
     * @since 3.0.0
     */
    class APILayer_ExchangeRates extends \WOOMC\Rate\Provider\APILayerProvider
    {
        /**
         * Overwrite title.
         *
         * @since 3.0.0
         * @return string
         */
        public static function title()
        {
        }
        /**
         * Implement url().
         *
         * @since 3.1.0
         * @inheritDoc
         */
        public static function url()
        {
        }
        /**
         * Configure.
         *
         * @since 3.0.0
         * @param array $settings The settings array.
         */
        public function configure(array $settings)
        {
        }
    }
    /**
     * Class Provider\APILayer_Fixer
     *
     * @since 3.0.0
     */
    class APILayer_Fixer extends \WOOMC\Rate\Provider\APILayerProvider
    {
        /**
         * Overwrite title.
         *
         * @since 3.0.0
         * @return string
         */
        public static function title()
        {
        }
        /**
         * Implement url().
         *
         * @since 3.1.0
         * @inheritDoc
         */
        public static function url()
        {
        }
        /**
         * Configure.
         *
         * @since 3.0.0
         * @param array $settings The settings array.
         */
        public function configure(array $settings)
        {
        }
    }
    /**
     * Class Provider\AbstractAPI_ExchangeRates
     */
    class AbstractAPI_ExchangeRates extends \WOOMC\Rate\Provider\AbstractProvider
    {
        /**
         * Overwrite title.
         *
         * @since 3.1.0
         * @return string
         */
        public static function title()
        {
        }
        /**
         * The credentials label (App ID, API key, etc.).
         *
         * @inheritdoc
         */
        public static function credentials_label()
        {
        }
        /**
         * Implement url().
         *
         * @since 3.1.0
         * @inheritDoc
         */
        public static function url()
        {
        }
        /**
         * This method must be called to pass the credentials.
         *
         * @param array $settings The array of settings.
         *
         * @return void
         */
        public function configure(array $settings)
        {
        }
    }
    /**
     * Class Provider\Currencylayer
     *
     * @since 1.0.0
     */
    class Currencylayer extends \WOOMC\Rate\Provider\AbstractProvider
    {
        /**
         * Overwrite title.
         *
         * @since 3.0.0
         * @return string
         */
        public static function title()
        {
        }
        /**
         * The credentials label (App ID, API key, etc.).
         *
         * @since 1.0.0
         * @return string
         */
        public static function credentials_label()
        {
        }
        /**
         * Configure.
         *
         * @since 1.0.0
         * @param array $settings The settings array.
         */
        public function configure(array $settings)
        {
        }
        /**
         * Remove the "USD" prefix from the currency codes.
         * 'USDAED' becomes 'AED'.
         *
         * @since 1.0.0
         * @since 2.16.4 Fix: USD (base currency) not present in the retrieved rates. Adding it with rate 1.0.
         *
         * @param array $rates The rates array.
         *
         * @return array
         * @example
         * "USDAED" => 3.672982,
         * "USDAFN"=> 57.8936,
         * "USDALL"=> 126.1652,
         *
         * Alternative way:
         * $sanitized_rates = array();
         * array_walk( $rates, function ( $rate, $code ) use ( &$sanitized_rates ) {
         * $sanitized_rates[ substr( $code, 3 ) ] = $rate;
         * } );
         */
        protected function sanitize_rates(array $rates)
        {
        }
    }
    /**
     * Class Provider\ExchangeRateAPI
     */
    class ExchangeRateAPI extends \WOOMC\Rate\Provider\AbstractProvider
    {
        /**
         * Timestamp section in the data received from the provider.
         *
         * @var string
         */
        protected $section_timestamp = 'time_last_update_unix';
        /**
         * Overwrite title.
         *
         * @since 3.1.0
         * @inheritdoc
         */
        public static function title()
        {
        }
        /**
         * Overwrite credentials_label.
         *
         * @since 3.1.0
         * @inheritdoc
         */
        public static function credentials_label()
        {
        }
        /**
         * Implement url().
         *
         * @since 3.1.0
         * @inheritDoc
         */
        public static function url()
        {
        }
        /**
         * This method must be called to pass the credentials.
         *
         * @since 3.1.0
         * @inheritDoc
         */
        public function configure(array $settings)
        {
        }
        /**
         * Overwrite remote_call().
         *
         * @since 3.1.0
         * @inheritDoc
         */
        protected function remote_call($args = array())
        {
        }
    }
    /**
     * Class Provider\FixedRates
     */
    class FixedRates extends \WOOMC\Rate\Provider\AbstractProvider
    {
        /**
         * Overwrite title.
         *
         * @since 3.0.0
         * @return string
         */
        public static function title()
        {
        }
        /**
         * The label for "credentials" input field.
         *
         * @inheritdoc
         */
        public static function credentials_label()
        {
        }
        /**
         * Retrieve rates.
         *
         * @inheritdoc
         */
        public function retrieve_rates()
        {
        }
    }
    /**
     * Class Provider\OpenExchangeRates
     */
    class OpenExchangeRates extends \WOOMC\Rate\Provider\AbstractProvider
    {
        /**
         * Overwrite title.
         *
         * @since 3.0.0
         * @return string
         */
        public static function title()
        {
        }
        /**
         * The credentials label (App ID, API key, etc.).
         *
         * @inheritdoc
         */
        public static function credentials_label()
        {
        }
        /**
         * Implement url().
         *
         * @since 3.1.0
         * @inheritDoc
         */
        public static function url()
        {
        }
        /**
         * This method must be called to pass the credentials.
         *
         * @param array $settings The array of settings.
         *
         * @return void
         */
        public function configure(array $settings)
        {
        }
    }
}
namespace WOOMC\Rate {
    /**
     * Class Providers
     *
     * @since 3.1.1
     */
    class Providers
    {
        /**
         * Class name - ordered.
         */
        protected const CLASS_NAMES = array('FixedRates', 'AbstractAPI_ExchangeRates', 'APILayer_ExchangeRates', 'APILayer_Fixer', 'ExchangeRateAPI', 'OpenExchangeRates', 'Currencylayer');
        /**
         * Var providers_id_title.
         *
         * @since 4.4.5
         *
         * @var array
         */
        protected static $providers_id_title = array();
        /**
         * Var providers_description.
         *
         * @since 4.4.5
         *
         * @var array
         */
        protected static $providers_description = array();
        /**
         * Var providers_credentials_name.
         *
         * @since 4.4.5
         *
         * @var array
         */
        protected static $providers_credentials_name = array();
        /**
         * Populate the arrays once.
         *
         * @since 4.4.5
         * @return void
         */
        protected static function populate(): void
        {
        }
        /**
         * List rate providers id.
         *
         * @since 4.4.5
         * @return array
         */
        public static function providers_id()
        {
        }
        /**
         * List rate providers id=>title.
         *
         * @since 3.1.1
         * @since 3.2.0-2 Added 'Test' provider.
         * @return array
         */
        public static function providers_id_title()
        {
        }
        /**
         * List rate providers id=>credentials name (label).
         *
         * @since 3.1.1
         * @since 3.2.0-2 Added 'Test' provider.
         * @return array
         */
        public static function providers_id_credentials_name()
        {
        }
        /**
         * List rate providers id=>description.
         *
         * @since 3.1.1
         * @since 3.2.0-2 Added 'Test' provider.
         * @return array
         */
        public static function providers_id_description()
        {
        }
    }
    /**
     * Class Rate\Storage
     */
    class Storage implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * Options table key.
         *
         * @var string
         */
        const OPTION_NAME = 'woocommerce_multicurrency_rates';
        /**
         * Fake rates for Unit Testing.
         *
         * @since 1.17.0
         */
        const TEST_RATES = array('AUD' => 0.25, 'CAD' => 2.0, 'EUR' => 0.5, 'GBP' => 0.3333, 'JPY' => 0.01, 'USD' => 1.0);
        /**
         * Currency rates in the format (string) CODE => (float) RATE
         *
         * @var  float[]
         */
        protected $rates;
        /**
         * Getter for `rates`.
         *
         * @return float[]
         */
        public function getRates()
        {
        }
        /**
         * Setter for `rates`.
         *
         * @param float[] $rates The array of currency rates.
         */
        public function setRates($rates)
        {
        }
        /**
         * Rate\Storage constructor.
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Load rates from the options table.
         *
         * @return void
         */
        public function load_rates()
        {
        }
        /**
         * Save rates to the options table.
         *
         * @since 1.20.0
         *
         * @param array $rates The currency rates array.
         *
         * @return void
         */
        public static function save_rates(array $rates)
        {
        }
        /**
         * Get the rate of the specified currency against the default currency.
         *
         * Note: the rates retrieved from OpenExchangeRates are against the "base" currency.
         *
         * @link https://docs.openexchangerates.org/docs/changing-base-currency
         *
         * @example
         * If our default currency is GBP, and we want prices in CAD:
         * CAD/GBP = CAD/base * base/GBP = CAD/base / GBP/base
         *
         * @param string $from The "from" currency code.
         * @param string $to   The "to" currency code.
         *
         * @return float
         */
        public function get_rate($from, $to)
        {
        }
        /**
         * List of currencies we have rates for.
         *
         * @return string[]
         */
        /**
         * Unused.
         *
         * @noinspection PhpUnused
         */
        public function get_currencies()
        {
        }
        /**
         * List of WooCommerce currencies filtered by those we have rates.
         * We do not use a filter because we need it only for our lists.
         *
         * @return array
         */
        public function woocommerce_currencies_with_rates()
        {
        }
    }
}
namespace WOOMC\Rate\Update {
    /**
     * Class Rate\Update\Manager
     *
     * @package WOOMC\Rate\Update
     */
    class Manager
    {
        /**
         * The "need to update" flag.
         *
         * @var bool
         */
        protected static $need_to_update = false;
        /**
         * Is update needed?
         *
         * @return bool
         */
        public static function isNeedToUpdate()
        {
        }
        /**
         * Set update to "needed".
         */
        public static function setNeedToUpdate()
        {
        }
        /**
         * Set update to "NOT needed".
         */
        public static function unsetNeedToUpdate()
        {
        }
        /**
         * Run the rates update if needed.
         *
         * @throws \Exception Caught.
         */
        public static function update()
        {
        }
        /**
         * Force to run the rates update.
         *
         * @throws \Exception Caught.
         */
        public static function forced_update()
        {
        }
    }
}
namespace WOOMC\Rate {
    /**
     * Class UpdateScheduler
     *
     * @package WOOMC\Rate
     */
    class UpdateScheduler implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * Default cron job schedule.
         *
         * @var string
         */
        const DEFAULT_SCHEDULE = 'twicedaily';
        /**
         * Custom cron job schedule.
         *
         * @var string
         */
        const CUSTOM_SCHEDULE = 'woomc_rates';
        /**
         * Action to update rates.
         *
         * @var string
         */
        const ACTION_UPDATE_RATES = 'woocommerce_multicurrency_update_rates';
        /**
         * The cron interval in seconds.
         * To activate, define WOOMC_RATE_UPDATES_INTERVAL.
         *
         * @var int
         */
        protected $interval = 0;
        /**
         * UpdateScheduler constructor.
         */
        public function __construct()
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Decide whether to add or remove the cron job.
         *
         * Public because it is an `init` callback.
         *
         * @return void
         */
        public function toggle_cron_job()
        {
        }
        /**
         * Remove the schedule and set it again - when selected a different one in the settings panel.
         *
         * @return void
         */
        public function reschedule_cron_job()
        {
        }
        /**
         * Setup cron schedule.
         *
         * @return void
         */
        protected function add_cron_job()
        {
        }
        /**
         * Shortcut to forced update.
         *
         * @return void
         * @throws \Exception Caught.
         */
        public function update_from_cron()
        {
        }
        /**
         * Is cron scheduled?
         *
         * @return bool
         */
        protected function is_scheduled()
        {
        }
        /**
         * Add a custom cron schedule.
         *
         * @param array $schedules The schedules.
         *
         * @return array
         */
        public function add_wp_cron_schedule($schedules)
        {
        }
        /**
         * Remove the scheduled job.
         *
         * @return void
         */
        public function remove_cron_job()
        {
        }
    }
    /**
     * Class Rate\Updater
     */
    class Updater
    {
        /**
         * Option key
         *
         * @since 3.1.1
         * @var string
         */
        const OPTION_KEY_UPDATE_ERROR = 'woocommerce_multicurrency_update_error';
        /**
         * Update rates.
         *
         * @since 1.0.0
         * @since 1.20.0 Do not need parameters.
         *
         * @return int Number of rates received (array size).
         * @throws \Exception Caught.
         * @uses  AbstractProvider::retrieve_rates
         */
        public function update()
        {
        }
        /**
         * Get the current rates provider object.
         *
         * @since 1.20.0
         *
         * @return \WOOMC\Rate\Provider\AbstractProvider
         * @throws \Exception Caught in the caller.
         */
        protected function getProvider()
        {
        }
        /**
         * Set error message.
         *
         * @since 3.1.1
         *
         * @param string $message Error message.
         *
         * @return void
         */
        protected function set_error_message($message)
        {
        }
        /**
         * Get error message.
         *
         * @since 3.1.1
         * @return false|array
         */
        public static function get_error_message()
        {
        }
    }
}
namespace WOOMC\Reports {
    /**
     * Class Reports\Controller
     */
    class Controller implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * The selected currency is transferred between page loads via this cookie.
         *
         * @var string
         */
        const COOKIE_REPORTS_CURRENCY = 'woocommerce_multicurrency_reports_currency';
        /**
         * Shortcode tag.
         *
         * @var string
         */
        const TAG_CURRENCY_SELECTOR = 'woocommerce_multicurrency_reports_currency_selector';
        /**
         * The selected currency.
         *
         * @var string
         */
        protected $selected_currency = '';
        /**
         * The selected currency symbol.
         *
         * @var string
         */
        protected $selected_currency_symbol = '';
        /**
         * Dispatcher.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Handle dashboard widget.
         *
         * @internal
         */
        public function dashboard_controller()
        {
        }
        /**
         * Handle reports page.
         *
         * @internal
         */
        public function reports_controller()
        {
        }
        /**
         * Initialize the currency settings.
         */
        protected function init_selected_currency()
        {
        }
        /**
         * Force the currency symbol to match the selected currency.
         *
         * @return string
         * @internal
         */
        public function set_currency_symbol()
        {
        }
    }
    /**
     * Class CurrencySelector
     *
     * @package WOOMC\Reports
     */
    class CurrencySelector
    {
        /**
         * The currency selector dropdown.
         *
         * @param string $selected_currency The active currency.
         */
        public static function render($selected_currency)
        {
        }
    }
    /**
     * Class Dashboard
     *
     * @package WOOMC\Reports
     */
    class Dashboard implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * The selected currency.
         *
         * @var string
         */
        protected $selected_currency = '';
        /**
         * Dashboard constructor.
         *
         * @param string $selected_currency The selected currency.
         */
        public function __construct($selected_currency)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Currency selector on dashboard widget.
         */
        public function currency_selector()
        {
        }
        /**
         * Adjust queries used in the dashboard widget.
         *
         * @param array $query The query.
         *
         * @return array
         *
         * @internal Filter.
         */
        public function query_filter($query)
        {
        }
        /**
         * Comma-separated list of order IDs for use in an SQL IN(...) statement.
         *
         * @param string $currency Currency code.
         *
         * @return string
         */
        protected function order_ids_csv($currency)
        {
        }
    }
    /**
     * Class Page
     *
     * @package WOOMC\Reports
     */
    class Page implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * The selected currency.
         *
         * @var string
         */
        protected $selected_currency = '';
        /**
         * Page constructor.
         *
         * @param string $selected_currency The currency code.
         */
        public function __construct($selected_currency)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Add a tab with the currency selector dropdown.
         *
         * @internal
         */
        public function currency_selector()
        {
        }
        /**
         * Restrict the reports query to the selected currency.
         *
         * @param array $query The SQL query parts.
         *
         * @return array
         *
         * @internal Filter.
         */
        public function query_filter($query)
        {
        }
        /**
         * A way to check if we are in the admin.php?page=wc-reports&tab=customers&report=customer_list
         *
         * @since 2.1.0
         *
         * @return bool
         */
        protected function is_report_customer_list()
        {
        }
        /**
         * Prevent caching of the Total Customer Spent value, so we always run the (filtered) DB query.
         *
         * @since    2.1.0
         *
         * @param $spent
         *
         * @return string
         * @internal Filter.
         */
        public function prevent_caching_customer_spent($spent)
        {
        }
        /**
         * Restrict the Total Spent query to the selected currency.
         *
         * @since    2.1.0
         *
         * @param string $sql The SQL statement.
         *
         * @return string
         * @internal Filter.
         */
        public function filter_total_spent_query($sql)
        {
        }
    }
}
namespace WOOMC {
    /**
     * Class Scripting
     *
     * @since 4.2.0
     */
    class Scripting extends \WOOMC\Dependencies\TIVWP\Scripting
    {
        /**
         * Init.
         *
         * @since 4.2.0
         * @return void
         */
        public static function init(): void
        {
        }
        /**
         * Method is_lazy_mode.
         *
         * @since 4.2.0
         * @return bool
         */
        public static function is_lazy_mode(): bool
        {
        }
    }
    /**
     * Class ServerInfo.
     *
     * @since 5.0.0
     */
    class ServerInfo
    {
        /**
         * Does the current web server honor .htaccess - i.e. would an .htaccess block actually serve
         * files? True for Apache and LiteSpeed; false for nginx and others, where .htaccess is ignored
         * and such a block is inert.
         *
         * Mirrors WordPress core's `$is_apache` global (wp-includes/vars.php), which is already true for
         * both Apache and LiteSpeed - the .htaccess-honoring servers.
         *
         * @since 5.0.0
         * @return bool
         */
        public static function is_apache(): bool
        {
        }
        /**
         * Absolute path to the site root .htaccess - where cache plugins write their mod_rewrite
         * serving blocks.
         *
         * Uses dirname( WP_CONTENT_DIR ), which is the web/home root in BOTH a standard install
         * (ABSPATH/wp-content -> ABSPATH) and a Skeleton/split layout where WP core lives under a
         * /wp/ subdir (public/wp-content -> public). ABSPATH alone is wrong in the split layout (it
         * points at public/wp/, not public/). This matches the path the tivwp-cli WP Fastest Cache
         * command writes to.
         *
         * @since 5.0.0
         * @return string
         */
        public static function root_htaccess_path(): string
        {
        }
    }
}
namespace WOOMC\Settings {
    /**
     * Class Controller
     */
    class Controller implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * The Rate Storage instance.
         *
         * @var  \WOOMC\Rate\Storage
         */
        protected $rate_storage;
        /**
         * Controller constructor.
         *
         * @param \WOOMC\Rate\Storage $rate_storage The Rate Storage instance.
         */
        public function __construct(\WOOMC\Rate\Storage $rate_storage)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Add the "Settings" link in the plugins list in Admin area.
         *
         * @param array $actions An array of plugin action links.
         *
         * @return array
         *
         * @internal Filter.
         */
        public function add_settings_link($actions)
        {
        }
    }
    /**
     * Class Settings\Fields
     */
    class Fields
    {
        /**
         * Field sections prefix.
         *
         * @var string
         */
        public const SECTION_ID_PREFIX = 'woocommerce-multicurrency_';
        /**
         * CSS class for credentials input fields. Needed for the show/hide JS.
         *
         * @var string
         */
        private const CSS_CLASS_CREDENTIALS_INPUT = 'rates_credentials_input';
        /**
         * Currencies with rates.
         *
         * @var  array
         */
        protected $currencies_with_rates;
        /**
         * DAO.
         *
         * @var  \WOOMC\DAO\IDAO
         */
        protected $dao;
        /**
         * Rate Storage instance.
         *
         * @var \WOOMC\Rate\Storage
         */
        protected $rate_storage;
        /**
         * Fields constructor.
         *
         * @param \WOOMC\Rate\Storage $rate_storage Rate Storage instance.
         */
        public function __construct(\WOOMC\Rate\Storage $rate_storage)
        {
        }
        /**
         * Build all panel fields.
         *
         * @return array
         */
        public function get_all()
        {
        }
        /**
         * Section "intro".
         *
         * @since 1.0.0
         * @since 3.2.4-1 Added: warning about incompatible plugins.
         *
         * @param array $fields Reference to the 'All Fields' array.
         */
        protected function section_intro(array &$fields)
        {
        }
        /**
         * Section "rates service".
         *
         * @param array $fields Reference to the 'All Fields' array.
         */
        protected function section_rates_service(array &$fields)
        {
        }
        /**
         * Display notice that the rates were not retrieved.
         *
         * @since 1.15.0
         *
         * @param array $fields Reference to the 'All Fields' array.
         */
        protected function section_rates_not_retrieved(array &$fields)
        {
        }
        /**
         * Method format_timestamp.
         *
         * @since 1.0.0
         *
         * @param string $timestamp Timestamp.
         *
         * @return string
         */
        protected function format_timestamp($timestamp)
        {
        }
        /**
         * Display the date and time when the Provider updated the rates.
         *
         * @param array $fields Reference to the 'All Fields' array.
         */
        protected function section_rates_timestamp(array &$fields)
        {
        }
        /**
         * Section "enabled currencies".
         *
         * @param array $fields Reference to the 'All Fields' array.
         */
        protected function section_enabled_currencies(array &$fields)
        {
        }
        /**
         * Inline "description" paragraph and right-align label.
         * Not for RTL languages.
         *
         * @since 4.6.3
         * @return void
         */
        protected static function styling_section_fixed_rates(): void
        {
        }
        /**
         * The Fixed Rates section.
         *
         * @since 1.15.0
         *
         * @param array $fields Reference to the 'All Fields' array.
         */
        protected function section_fixed_rates(array &$fields)
        {
        }
        /**
         * Section "Currency symbols".
         *
         * @since 1.1.0
         *
         * @param array $fields Reference to the 'All Fields' array.
         */
        protected function section_currency_symbols(array &$fields)
        {
        }
        /**
         * Section "price conversion settings".
         *
         * @param array $fields Reference to the 'All Fields' array.
         */
        protected function section_price_conversion_settings(array &$fields)
        {
        }
        /**
         * Section "price formats".
         *
         * @param array $fields Reference to the 'All Fields' array.
         */
        protected function section_price_formats(array &$fields)
        {
        }
        /**
         * Section "auto-currencies" (if multilingual).
         *
         * @param array $fields Reference to the 'All Fields' array.
         */
        protected function section_auto_currencies(array &$fields)
        {
        }
        /**
         * Display notice that the Auto-currencies is disabled.
         *
         * @param array $fields Reference to the 'All Fields' array.
         */
        protected function section_auto_currencies_is_disabled(array &$fields)
        {
        }
        /**
         * Section "Cache".
         *
         * @since 5.0.0
         *
         * @param array $fields Reference to the 'All Fields' array.
         */
        protected function section_cache(array &$fields)
        {
        }
        /**
         * Section "General settings".
         *
         * @since 1.15.0
         *
         * @param array $fields Reference to the 'All Fields' array.
         */
        protected function section_general_settings(array &$fields)
        {
        }
        /**
         * Display notice that the saving is disabled.
         *
         * @param array $fields Reference to the 'All Fields' array.
         */
        protected function section_save_is_disabled(array &$fields)
        {
        }
        /**
         * Compatibility
         *
         * @since 5.0.0
         *
         * @param array $fields Reference to the 'All Fields' array.
         */
        protected function section_compatibility(array &$fields)
        {
        }
        /**
         * JS function to show/hide the credentials input fields.
         *
         * @since 1.20.0 Hide also the `rate update schedule` field.
         */
        public function js_show_hide_credentials()
        {
        }
        /**
         * JS function to disable saving settings.
         */
        public function js_disable_save()
        {
        }
        /**
         * Display a rounding example.
         *
         * @since  1.0.0
         * @since  3.2.0-1 with auto-rounding.
         */
        public function js_rounding_calculator()
        {
        }
    }
    /**
     * Class Migration
     *
     * @since   1.2.2
     */
    class Migration
    {
        /**
         * The DAO instance.
         *
         * @var \WOOMC\DAO\IDAO
         */
        protected $dao;
        /**
         * Migration constructor.
         *
         * @since 1.2.2
         */
        public function __construct()
        {
        }
        /**
         * Do the migration if necessary.
         *
         * @since 1.2.2
         */
        public function maybe_migrate()
        {
        }
        /**
         * Migrate from the WPGlobus version.
         *
         * @since 1.2.2
         */
        protected function migrate_wpglobus_options()
        {
        }
        /**
         * Copy and "Save As..." an option.
         *
         * @param string $key_from The key to import from.
         * @param string $key_to   The key to Save As.
         * @param bool   $force    True = Import even if already exists.
         *
         * @since 1.2.2
         */
        protected function import_option($key_from, $key_to, $force = false)
        {
        }
    }
    /**
     * Class Settings\MultilingualPromo
     *
     * Builds one of two promo cards for the "Link language to currency" section:
     *
     *  - Install card: shown in the not-multilingual variant of the section, when no
     *    multilingual plugin is active. Promotes TIV Globus as the companion.
     *  - Switch card: shown in the active variant, when the legacy WPGlobus plugin is
     *    running, prompting the merchant to move to its successor, TIV Globus.
     *
     * Each card is returned as a string and appended to the section's `desc` by
     * {@see Fields::section_auto_currencies()} / {@see Fields::section_auto_currencies_is_disabled()},
     * i.e. rendered inline with the section intro. The dismissable-notice plumbing is
     * the shared {@see \WOOMC\Dependencies\TIVWP\WC\Admin\SettingsNotices} instance owned
     * by {@see WorksWith} (reached via {@see WorksWith::notices()}); this class only owns
     * the show/hide gating and the copy. `SettingsNotices::notice()` wraps each body in a
     * dismissable card tagged for the shared footer beacon, so no card carries its own
     * script - which also sidesteps WooCommerce stripping `<script>` from a section `desc`.
     *
     * Dismissal state is the shared `woomc_promo_dismissed` option, so a single
     * `wp option delete woomc_promo_dismissed` resets every promo.
     *
     * @since 5.0.0
     */
    class MultilingualPromo
    {
        /**
         * TIV Globus product page on the WooCommerce marketplace.
         *
         * @since 5.0.0
         * @var string
         */
        private const GLOBUS_URL = \WOOMC\App::URL_WOO . 'products/tiv-globus/';
        /**
         * Dismissal slug for the "get TIV Globus" install card.
         *
         * @since 5.0.0
         * @var string
         */
        private const SLUG_INSTALL = 'multilingual-install';
        /**
         * Dismissal slug for the "switch from WPGlobus" card.
         *
         * @since 5.0.0
         * @var string
         */
        private const SLUG_SWITCH = 'wpglobus-switch';
        /**
         * Method link_to_tiv_globus.
         *
         * @since 5.0.0
         * @return string
         */
        private static function link_to_tiv_globus(): string
        {
        }
        /**
         * HTML for the "get TIV Globus" install card, or '' when it should not show
         * (TIV Globus already active, or the merchant dismissed it).
         *
         * @since 5.0.0
         * @return string
         */
        public static function install_card(): string
        {
        }
        /**
         * HTML for the "switch to TIV Globus" card, or '' when it should not show
         * (TIV Globus active, WPGlobus not active, or the merchant dismissed it).
         *
         * @since 5.0.0
         * @return string
         */
        public static function switch_card(): string
        {
        }
    }
    /**
     * Class Settings\Panel
     *
     * @since 1.0.0
     */
    class Panel implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * WooCommerce's settings tab slug.
         *
         * @since 1.0.0
         * @var string
         */
        const TAB_SLUG = 'multicurrency';
        /**
         * The Fields instance.
         *
         * @since 1.0.0
         * @var Fields
         */
        protected $fields;
        /**
         * Panel constructor.
         *
         * @since 1.0.0
         *
         * @param Fields $fields The Fields instance.
         */
        public function __construct(\WOOMC\Settings\Fields $fields)
        {
        }
        /**
         * Setup actions and filters.
         *
         * @since 1.0.0
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Add our tab to the WooCommerce Settings.
         *
         * @since 1.0.0
         *
         * @param array $settings_tabs Existing tabs.
         *
         * @return array Tabs with ours added.
         */
        public static function add_settings_tab(array $settings_tabs)
        {
        }
        /**
         * Display fields on our tab.
         *
         * @since 1.0.0
         */
        public function output_fields()
        {
        }
        /**
         * When {@see Panel::save_fields} is invoked,
         * if Provider ID or credentials changed, we need to update the rates.
         *
         * @since 1.0.0
         * @return void
         */
        protected function setup_hooks_on_provider_change()
        {
        }
        /**
         * Force updating rates.
         *
         * @since 1.0.0
         * @since 1.15.0 this method is static.
         * @since 1.20.0 Calls Updater directly.
         * @since 1.20.0 Moved to Panel class. Made dynamic again.
         *
         * @return void
         * @internal
         */
        public function force_update_rates()
        {
        }
        /**
         * Update the settings.
         *
         * @since 1.0.0
         * @throws \Exception Caught.
         */
        public function save_fields()
        {
        }
        /**
         * Enqueue scripts.
         *
         * @since 3.2.0-2
         * @return void
         */
        protected function enqueue_scripts()
        {
        }
    }
    /**
     * Class Settings\WorksWith
     *
     * Builds a contextual card promoting TIV Sales Assistant, appended inline to the
     * "Compatibility notes" section ({@see Fields::section_compatibility}) via
     * {@see card()} - the same string-returning pattern as {@see MultilingualPromo}.
     * Shown only when SA is not active, the merchant has not dismissed it, and the
     * store actually runs more than one currency.
     *
     * The dismissable-notice plumbing (dismissed-slugs option, AJAX endpoint, the
     * shared footer beacon) lives in {@see SettingsNotices}; this class only owns the
     * SA-specific gating and copy. It is also the plugin's single owner of the shared
     * `woomc` {@see SettingsNotices} instance - {@see MultilingualPromo} reuses it via
     * {@see notices()} so every promo card shares one option, one endpoint, one beacon.
     *
     * Companion to the always-on "About TIV.NET" catalog box rendered by
     * {@see \WOOMC\Dependencies\TIVWP\WC\Admin\AdminUtils::show_tivwp_wc_about},
     * which lists the whole product line unconditionally.
     *
     * @since 4.7.1
     */
    class WorksWith
    {
        /**
         * Prefix for the shared promo {@see SettingsNotices} instance. Derives the
         * dismissed option (`woomc_promo_dismissed`), AJAX action, and card data
         * attribute (`data-woomc-dismiss`).
         *
         * @var string
         */
        private const PREFIX = 'woomc';
        /**
         * Version constant defined by the TIV Sales Assistant plugin.
         *
         * Probed with `defined()` rather than `class_exists()` so an inactive SA
         * never triggers autoloading.
         *
         * @var string
         */
        private const SA_PROBE = 'TIV_WOOSA_VERSION';
        /**
         * TIV Sales Assistant product page on the WooCommerce marketplace.
         *
         * @var string
         */
        private const SA_URL = \WOOMC\App::URL_WOO . 'products/tiv-sales-assistant/';
        /**
         * Slug used as the dismissal key for SA in the dismissed-promos option.
         *
         * @var string
         */
        private const PLUGIN_SLUG = 'sa';
        /**
         * The shared promo-notices instance for this plugin. Owned here; reused by
         * {@see MultilingualPromo} so all promo cards share one option/endpoint/beacon.
         *
         * @return \WOOMC\Dependencies\TIVWP\WC\Admin\SettingsNotices
         */
        public static function notices(): \WOOMC\Dependencies\TIVWP\WC\Admin\SettingsNotices
        {
        }
        /**
         * Register the shared notices plumbing (AJAX endpoint + footer beacon). Called
         * once from {@see Controller::setup_hooks()}, OUTSIDE the `DOING_AJAX` gate so
         * the dismissal endpoint is wired on ajax requests.
         *
         * @return void
         */
        public static function bootstrap(): void
        {
        }
        /**
         * HTML for the SA promo card, or '' when it should not show. Appended to the
         * "Compatibility notes" section desc by {@see Fields::section_compatibility}.
         *
         * @return string
         */
        public static function card(): string
        {
        }
        /**
         * Whether the cross-promotion card should be shown.
         *
         * Gated on: SA not active AND not dismissed AND the store has more than
         * one currency enabled - i.e. the merchant is actually doing
         * multi-currency, so SA's currency-correct discount handling is genuinely
         * relevant to them.
         *
         * @return bool
         */
        public static function should_show(): bool
        {
        }
        /**
         * Is TIV Sales Assistant active?
         *
         * @return bool
         */
        protected static function is_sa_active(): bool
        {
        }
        /**
         * Does the store have more than one currency enabled?
         *
         * @return bool
         */
        protected static function has_multiple_currencies(): bool
        {
        }
    }
}
namespace WOOMC\Shipping {
    /**
     * Class Shipping\OptionsConverter
     *
     * @package WOOMC\Shipping
     */
    class OptionsConverter extends \WOOMC\AbstractConverter
    {
        /**
         * Setup actions and filters.
         *
         * @since 1.6.0
         * @since 1.8.0 Hooked early.
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Convert every shipping setting that "looks like" cost or amount.
         *
         * @since    1.6.0
         * @since    1.8.0 added the "_fee" pattern (used by USPS and Table Rate).
         * @since    1.9.0 convert numbers extracted from string - for the settings with shortcodes such as `1 * [qty]`.
         * @since    1.17.0 preserve the variable type.
         * @since    1.17.0 attempt to convert only scalars.
         * @since    2.6.4 Support commas and min/max_fee.
         *
         * @param array $settings Shipping method settings.
         *
         * @return array Settings with the amounts converted.
         *
         * @internal filter.
         */
        public function filter__shipping_method_costs($settings)
        {
        }
        /**
         * Callback for {@see filter__shipping_method_costs}.
         *
         * @since    2.6.4
         *
         * @param array $matches Matches from preg_replace.
         *
         * @return string Converted values.
         *
         * @internal filter callback.
         */
        public function callback__convert_min_max_fees($matches)
        {
        }
    }
}
namespace WOOMC\Shortcode {
    /**
     * Class Convert
     *
     * @package WOOMC\Shortcode
     */
    class Convert extends \WOOMC\AbstractConverter
    {
        /**
         * Shortcode tag.
         *
         * @since 1.16.0
         *
         * @var string
         */
        const TAG = 'woomc-convert';
        /**
         * Setup actions and filters.
         *
         * @since 1.16.0
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Process shortcode.
         *
         * @since    1.16.0
         * @since    2.12.0-beta.1 Added the "raw" attribute (false by default).
         *
         * @formatter:off
         * @param string[] $atts The shortcode attributes.
         * @formatter:on
         *
         * @type float|string|int $value Value to convert.
         * @type bool|string|int $formatting Pass 0/off/no/false to skip formatting with {@see \wc_price()}.
         * @type string $currency Convert to this currency. Default is the currently selected.
         * @type int $decimals Format using this number of decimals. Default depends on the currency.
         *
         * @return string
         *
         * @example
         *         <code>
         *         [woomc-convert value="5"] - Convert "5" to the currently selected currency and display formatted as WC price.
         *         [woomc-convert value="5" formatting="false"] - Convert same as above but displays just the number.
         *         [woomc-convert value="5" currency="JPY"] - Convert to "JPY" currency.
         *         [woomc-convert value="5" currency="JPY" decimals=1] - Same as above but forces the number of decimals.
         *         </code>
         *
         * @internal
         */
        public function process_shortcode($atts = array())
        {
        }
        /**
         * Default shortcode attribute values.
         *
         * @since 1.16.0
         * @since 2.12.0-beta.1 Added the "raw" attribute (false by default).
         *
         * @return array
         */
        protected function default_atts()
        {
        }
    }
    /**
     * Class InMenus
     *
     * @package WOOMC\Shortcode
     */
    class InMenus extends \WOOMC\Abstracts\Hookable
    {
        /**
         * Are we currently expanding a shortcode inside a nav menu item?
         *
         * @since 5.1.0
         * @var bool
         */
        private static $is_in_menu = false;
        /**
         * True while a shortcode is being expanded inside a nav menu item.
         *
         * Lets a shortcode adapt its markup to the menu without the merchant having to
         * say so: the walker has already opened an <li>, which changes what valid and
         * well-styled output looks like.
         *
         * @since 5.1.0
         * @return bool
         */
        public static function is_in_menu(): bool
        {
        }
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Filters a menu item's starting output.
         * If this is our shortcode, replace the menu with the shortcode output.
         *
         * @param string   $item_output The menu item's starting HTML output.
         * @param \WP_Post $item        Menu item data object.
         */
        public function filter__walker_nav_menu_start_el($item_output, $item)
        {
        }
    }
    /**
     * Class ProductPricesPerCurrency
     *
     * @package WOOMC\Shortcode
     */
    class ProductPricesPerCurrency extends \WOOMC\AbstractConverter
    {
        /**
         * Shortcode tag.
         *
         * @since 3.2.4-0
         *
         * @var string
         */
        const TAG = 'woomc-product-prices-per-currency';
        /**
         * Setup actions and filters.
         *
         * @since 3.2.4-0
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Process shortcode and print the output.
         *
         * @since  3.2.4-1
         *
         * @param string[] $atts The shortcode attributes.
         *
         * @return void
         * @example
         *    <code>
         *         add_action( 'woocommerce_before_add_to_cart_form',
         *                function () {
         *                if ( class_exists( '\WOOMC\Shortcode\ProductPricesPerCurrency' ) ) {
         *                    \WOOMC\Shortcode\ProductPricesPerCurrency::process_shortcode_e(
         *                        array( 'show_current_price' => true )
         *                    );
         *                }
         *                }
         *            );
         *    </code>
         * @noinspection PhpUnused
         */
        public static function process_shortcode_e($atts = array())
        {
        }
        /**
         * Process shortcode.
         *
         * @since        3.2.4-0
         *
         * @param string[] $atts The shortcode attributes.
         *
         * @return string
         *
         * @example
         *         <code>
         *         [woomc-product-prices-per-currency]
         *         [woomc-product-prices-per-currency show_current_price=true]
         *         </code>
         *
         */
        public static function process_shortcode($atts = array())
        {
        }
        /**
         * Default shortcode attribute values.
         *
         * @since 3.2.4-1
         *
         * @return array
         */
        protected static function default_atts()
        {
        }
    }
}
namespace WOOMC {
    /**
     * Class User
     */
    class User extends \WC_Data implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * This is the name of this object type.
         *
         * @var string
         */
        protected $object_type = 'multicurrency_user';
        /**
         * Data array.
         *
         * @var array
         */
        protected $data = array('currency' => '', 'country' => '');
        /**
         * Key for storing data.
         *
         * @var string
         */
        protected $storage_key = '';
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Initialize the User w/o Geolocation yet.
         *
         * @since    2.14.1-rc.3
         *
         * @internal Action.
         */
        public function action__init()
        {
        }
        /**
         * Geolocate the User.
         *
         * @since    1.12.0 Fix: Hooked to 'woocommerce_init'. Otherwise, geolocation is not initialized yet.
         * @since    2.14.1-rc.3 Separated from the main initialization,
         *                so if there is a cookie, we do not need to wait for the geolocation.
         * @since    3.4.1-0 Logic moved to {@see geolocate()}.
         *
         * @internal Action.
         */
        public function action__woocommerce_init()
        {
        }
        /**
         * Detect country.
         *
         * @since 3.2.3-0
         * @return string
         */
        protected function detect_country()
        {
        }
        /**
         * Get user data by location.
         *
         * @since 1.4.0
         * @since 3.4.1-0 Get country even if currency already known.
         *
         * @return void
         */
        protected function geolocate()
        {
        }
        /**
         * Detect and store the country if not already known.
         *
         * @since 4.6.3
         *
         * @return void
         */
        protected function maybe_detect_country(): void
        {
        }
        /**
         * Set currency based on the stored country, if currency is not already set.
         *
         * @since 4.6.3
         *
         * @return void
         */
        protected function maybe_set_currency_from_country(): void
        {
        }
        /**
         * Store the user data.
         *
         * @since   1.4.0
         * @since   2.0.0 Use WC session instead of cookie.
         */
        protected function store()
        {
        }
        /**
         * Retrieve the user data.
         *
         * @since   1.4.0
         * @since   2.0.0 Use WC session instead of cookie.
         */
        protected function retrieve()
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Getters
        |--------------------------------------------------------------------------
        */
        /**
         * Get currency.
         *
         * @param string $context What the value is for. Valid values are 'view' and 'edit'.
         *
         * @return string
         */
        public function get_currency($context = 'view')
        {
        }
        /**
         * Get country.
         *
         * @param string $context What the value is for. Valid values are 'view' and 'edit'.
         *
         * @return string
         */
        public function get_country($context = 'view')
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Setters
        |--------------------------------------------------------------------------
        */
        /**
         * Set currency.
         *
         * @param string $value Currency.
         */
        public function set_currency($value)
        {
        }
        /**
         * Set country.
         *
         * @param string $value Country.
         */
        public function set_country($value)
        {
        }
    }
}
namespace WOOMC\User {
    /**
     * Class Profile
     *
     * @package WOOMC\User
     */
    class Profile implements \WOOMC\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * User meta key.
         *
         * @var string
         */
        const META_KEY_CURRENCY = 'woocommerce_multicurrency_currency';
        /**
         * Setup actions and filters.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Act on currency change.
         *
         * @param string $currency The currency code.
         *
         * @return void
         * @internal action.
         */
        public function action__woocommerce_multicurrency_currency_changed($currency)
        {
        }
        /**
         * Store or update currency in the user's profile.
         *
         * @param int    $user_id  The user ID.
         * @param string $currency The currency code.
         *
         * @return void
         */
        protected function store_currency($user_id, $currency)
        {
        }
        /**
         * Act on login.
         *
         * @param string   $user_login Username.
         * @param \WP_User $user       User object.
         */
        public function action__wp_login($user_login, $user)
        {
        }
        /**
         * Retrieve currency from the user profile and set it as active if the Cart is empty.
         *
         * @param int $user_id User ID.
         */
        protected function force_profile_currency($user_id)
        {
        }
        /**
         * Show our meta(s) on the user profile page.
         *
         * @param array $show_fields Array of fields already added by WooCommerce.
         *
         * @return array
         */
        public function filter__woocommerce_customer_meta_fields($show_fields)
        {
        }
    }
}
namespace {
    \define('WOOCOMMERCE_MULTICURRENCY_VERSION', '5.3.1');
}