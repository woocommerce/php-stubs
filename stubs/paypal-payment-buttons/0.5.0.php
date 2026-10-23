<?php
/**
 * Generated stub declarations for paypal-payment-buttons 0.5.0.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

/**
 * Class PayPal_Payment_Buttons
 */
class PayPal_Payment_Buttons
{
    /**
     * Plugin instance.
     *
     * @var PayPal_Payment_Buttons
     */
    private static $instance = \null;
    /**
     * Get plugin instance.
     *
     * @return PayPal_Payment_Buttons
     */
    public static function instance()
    {
    }
    /**
     * Initialize the plugin and register hooks.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Constructor.
     */
    private function __construct()
    {
    }
    /**
     * Initialize WordPress hooks.
     *
     * @return void
     */
    public function init_hooks()
    {
    }
    /**
     * Register the PayPal Payment Buttons block with the correct dist path.
     */
    public function register_paypal_block()
    {
    }
    /**
     * Enqueue block availability data for the editor.
     */
    public function enqueue_block_availability_data()
    {
    }
    /**
     * Plugin deactivation handler.
     *
     * @access public
     * @static
     */
    public static function plugin_deactivation()
    {
    }
}
\define('PAYPAL_PAYMENT_BUTTONS_DIR', \plugin_dir_path(__FILE__));
\define('PAYPAL_PAYMENT_BUTTONS_ROOT_FILE', __FILE__);
\define('PAYPAL_PAYMENT_BUTTONS_ROOT_FILE_RELATIVE_PATH', \plugin_basename(__FILE__));
\define('PAYPAL_PAYMENT_BUTTONS_SLUG', 'paypal-payment-buttons');
\define('PAYPAL_PAYMENT_BUTTONS_NAME', 'PayPal Payment Buttons');
\define('PAYPAL_PAYMENT_BUTTONS_URI', 'https://jetpack.com/paypal-payment-buttons');
\define('PAYPAL_PAYMENT_BUTTONS_FOLDER', \dirname(\plugin_basename(__FILE__)));