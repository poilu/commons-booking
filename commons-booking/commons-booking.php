<?php

/**
 * Commons Booking
 *
 *
 * @package   Commons Booking
 * @author    Florian Egermann <florian@macht-medien.de>
 * @license   GPL-2.0+
 * @link      http://www.wielebenwir.de
 * @copyright 2015 wielebenwir
 *
 * @wordpress-plugin
 * Plugin Name:       Commons Booking
 * Plugin URI:        @TODO
 * Description:       @TODO
 * Version:           0.0.1
 * Author:            Florian Egermann
 * Author URI:        @TODO
 * Text Domain:       commons-booking
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * WordPress-Plugin-Boilerplate-Powered: v1.1.0
 */
// If this file is called directly, abort.
if ( !defined( 'WPINC' ) ) {
	die;
}

/* ----------------------------------------------------------------------------*
 * Public-Facing Functionality
 * ---------------------------------------------------------------------------- */

/*
 * Load library for simple and fast creation of Taxonomy and Custom Post Type
 *
 */
require_once( plugin_dir_path( __FILE__ ) . 'includes/Taxonomy_Core/Taxonomy_Core.php' );
require_once( plugin_dir_path( __FILE__ ) . 'includes/CPT_Core/CPT_Core.php' );

// Custom Post Type and Taxonomy Definitions
require_once( plugin_dir_path( __FILE__ ) . 'admin/cb-items/class-commons-booking-items-cpt.php' );
require_once( plugin_dir_path( __FILE__ ) . 'admin/cb-locations/class-commons-booking-locations-cpt.php' );

// Classes for the individual content types - not sure if it belongs here. @TODO
require_once( plugin_dir_path( __FILE__ ) . 'admin/class-commons-booking-items.php' );

// Class for Timeframes functionality
//require_once( plugin_dir_path( __FILE__ ) . 'admin/cb-timeframes/includes/class-cb-timeframes-list.php' );


require_once( plugin_dir_path( __FILE__ ) . 'admin/cb-timeframes/cb-timeframes.php' );
require_once( plugin_dir_path( __FILE__ ) . 'admin/cb-codes/cb-codes.php' );
require_once( plugin_dir_path( __FILE__ ) . 'admin/cb-bookings/cb-bookings.php' );

// CLasses for Frontend-Booking
require_once( plugin_dir_path( __FILE__ ) . 'public/cb-bookings/class-commons-booking-booking.php' );
require_once( plugin_dir_path( __FILE__ ) . 'public/cb-bookings/class-commons-booking-public-items.php' );
require_once( plugin_dir_path( __FILE__ ) . 'public/cb-bookings/class-commons-booking-data.php' );
require_once( plugin_dir_path( __FILE__ ) . 'admin/cb-settings/class-commons-booking-admin-settings.php' );

// include Helper functions
require_once( plugin_dir_path( __FILE__ ) . 'includes/commons-booking-helpers.php' );

// Class for Codes
require_once( plugin_dir_path( __FILE__ ) . 'admin/cb-codes/class-cb-codes-csv.php' );

/*
 * Load template system
 */
require_once( plugin_dir_path( __FILE__ ) . 'includes/template.php' );

/*
 * Load Fake Page class
 */
// require_once( plugin_dir_path( __FILE__ ) . 'includes/fake-page.php' );

// new Fake_Page(
//     array(
//   'slug' => 'faker',
//   'post_title' => 'Fake Page Title',
//   'post content' => 'This is the fake page content'
//     )
// );

/*
 * Load Widget boilerplate
 */
require_once( plugin_dir_path( __FILE__ ) . 'includes/Widgets-Helper/wph-widget-class.php' );
require_once( plugin_dir_path( __FILE__ ) . 'includes/widgets/sample.php' );

/*
 * Load Language wrapper function for WPML/Ceceppa Multilingua/Polylang
 */
require_once( plugin_dir_path( __FILE__ ) . 'includes/language.php' );


require_once( plugin_dir_path( __FILE__ ) . 'public/class-commons-booking.php' );


/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 */

register_activation_hook( __FILE__, array( 'Commons_Booking', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Commons_Booking', 'deactivate' ) );


add_action( 'plugins_loaded', array( 'Commons_Booking', 'get_instance' ) );

/* ----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 * ---------------------------------------------------------------------------- */
if ( is_admin() && (!defined( 'DOING_AJAX' ) || !DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-commons-booking-admin.php' );
	add_action( 'plugins_loaded', array( 'Commons_Booking_Admin', 'get_instance' ) );
}
