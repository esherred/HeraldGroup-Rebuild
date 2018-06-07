<?php
/**
 * Plugin Name: Accordion and Accordion Slider Pro
 * Plugin URI: https://www.wponlinesupport.com/plugins/
 * Description: Accordion and Accordion Slider (Horizontal and Vertical) - Responsive and Touch enabled accordion for WordPress Website.
 * Author: WP Online Support 
 * Text Domain: accordion-and-accordion-slider
 * Domain Path: /languages/
 * Version: 1.0.1
 * Author URI: https://www.wponlinesupport.com
 *
 * @package WordPress
 * @author SP Technolab
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

if( !defined( 'WP_AAS_PRO_VERSION' ) ) {
	define( 'WP_AAS_PRO_VERSION', '1.0.1' ); // Version of plugin
}
if( !defined( 'WP_AAS_PRO_DIR' ) ) {
    define( 'WP_AAS_PRO_DIR', dirname( __FILE__ ) ); // Plugin dir
}
if( !defined( 'WP_AAS_PRO_PLUGIN_BASENAME' ) ) {
    define( 'WP_AAS_PRO_PLUGIN_BASENAME', plugin_basename( __FILE__ ) ); // Plugin base name
}
if( !defined( 'WP_AAS_PRO_URL' ) ) {
    define( 'WP_AAS_PRO_URL', plugin_dir_url( __FILE__ ) ); // Plugin url
}
if( !defined( 'WP_AAS_PRO_POST_TYPE' ) ) {
    define( 'WP_AAS_PRO_POST_TYPE', 'wpos_aac_slider' ); // Plugin post type
}
if( !defined( 'WP_AAS_PRO_META_PREFIX' ) ) {
    define( 'WP_AAS_PRO_META_PREFIX', '_wp_aas_' ); // Plugin metabox prefix
}

/**
 * Load Text Domain
 * This gets the plugin ready for translation
 * 
 * @package Accordion and Accordion Slider
 * @since 1.0
 */
function wp_aas_pro_load_textdomain() {
	load_plugin_textdomain( 'accordion-and-accordion-slider', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}
add_action('plugins_loaded', 'wp_aas_pro_load_textdomain');

/**
 * Activation Hook
 * 
 * Register plugin activation hook.
 * 
 * @package Accordion and Accordion Slider Pro
 * @since 1.0.0
 */
register_activation_hook( __FILE__, 'wp_aas_pro_install' );

/**
 * Deactivation Hook
 * 
 * Register plugin deactivation hook.
 * 
 * @package Accordion and Accordion Slider Pro
 * @since 1.0.0
 */
register_deactivation_hook( __FILE__, 'wp_aas_pro_uninstall');

/**
 * Plugin Setup (On Activation)
 * 
 * Does the initial setup,
 * set default values for the plugin options.
 * 
 * @package Accordion and Accordion Slider Pro
 * @since 1.0.0
 */
function wp_aas_pro_install() {
    
    // Register post type function
    wp_aas_pro_register_post_type();  
   
    // IMP need to flush rules for custom registered post type
    flush_rewrite_rules();

     // Deactivate free version
    if( is_plugin_active('accordion-and-accordion-slider/accordion-and-accordion-slider.php') ) {
        add_action('update_option_active_plugins', 'wp_aas_pro_deactivate_free_version');
    }
}


/**
 * Deactivate free plugin
 * 
 * @package Accordion and Accordion Slider Pro
 * @since 1.0.0
 */
function wp_aas_pro_deactivate_free_version() {
    deactivate_plugins('accordion-and-accordion-slider/accordion-and-accordion-slider.php', true);
}

/**
 * Function to display admin notice of activated plugin.
 * 
 * @package Accordion and Accordion Slider Pro
 * @since 1.0.0
 */
function wp_aas_pro_admin_notice() {
    
    $dir = WP_PLUGIN_DIR . '/accordion-and-accordion-slider/accordion-and-accordion-slider.php';
    
    // If free plugin exist
    if( file_exists($dir) ) {
        
        global $pagenow;
        
        if ( $pagenow == 'plugins.php' && current_user_can( 'install_plugins' ) ) {
            echo '<div id="message" class="updated notice is-dismissible"><p><strong>Thank you for activating Accordion and Accordion Slider Pro</strong>.<br /> It looks like you had FREE version <strong>(<em>Accordion and Accordion Slider</em>)</strong> of this plugin activated. To avoid conflicts the extra version has been deactivated and we recommend you delete it. </p></div>';
        }
    }
}

// Action to display notice
add_action( 'admin_notices', 'wp_aas_pro_admin_notice');

/**
 * Plugin Setup (On Deactivation)
 * 
 * Delete  plugin options.
 * 
 * @package Accordion and Accordion Slider Pro
 * @since 1.0.0
 */
function wp_aas_pro_uninstall() {
    
    // IMP need to flush rules for custom registered post type
    flush_rewrite_rules();
}


/***** Updater Code Starts *****/
define( 'EDD_WP_AAS_PRO_STORE_URL', 'https://www.wponlinesupport.com' );
define( 'EDD_WP_AAS_PRO_ITEM_NAME', 'Accordion and Accordion Slider Pro' );

// Plugin Updator Class 
if( !class_exists( 'EDD_SL_Plugin_Updater' ) ) {    
    include( dirname( __FILE__ ) . '/EDD_SL_Plugin_Updater.php' );
}

/**
 * Updater Function
 * 
 * @package Accordion and Accordion Slider Pro
 * @since 1.0.0
 */
function edd_sl_aas_pro_plugin_updater() {
    
    $license_key = trim( get_option( 'edd_aas_pro_license_key' ) );

    $edd_updater = new EDD_SL_Plugin_Updater( EDD_WP_AAS_PRO_STORE_URL, __FILE__, array(
                'version'   => WP_AAS_PRO_VERSION,           // current version number
                'license'   => $license_key,             // license key (used get_option above to retrieve from DB)
                'item_name' => EDD_WP_AAS_PRO_ITEM_NAME,    // name of this plugin
                'author'    => 'WP Online Support'       // author of this plugin
            )
    );

}
add_action( 'admin_init', 'edd_sl_aas_pro_plugin_updater', 0 );
include( dirname( __FILE__ ) . '/edd-post-plugin.php' );
/***** Updater Code Ends *****/

// Functions File
require_once( WP_AAS_PRO_DIR . '/includes/wp-aas-functions.php' );

// Plugin Post Type File
require_once( WP_AAS_PRO_DIR . '/includes/wp-aas-post-types.php' );

// Script File
require_once( WP_AAS_PRO_DIR . '/includes/class-wp-aas-script.php' );

// Admin Class File
require_once( WP_AAS_PRO_DIR . '/includes/admin/class-wp-aas-admin.php' );

// Shortcode File
require_once( WP_AAS_PRO_DIR . '/includes/shortcode/wpos-aas-shortcode.php' );