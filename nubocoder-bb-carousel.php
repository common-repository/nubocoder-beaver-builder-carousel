<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://nubocoder.com
 * @since             1.0.0
 * @package           Nubocoder_Bb_Carousel
 *
 * @wordpress-plugin
 * Plugin Name:       NuboCoder - Beaver Builder Carousel
 * Plugin URI:        https://nubocoder.com/nubocoder-bb-carousel
 * Description:       Highly customizable carousel for Beaver Builder powered by Slick Carousel. 
 * Version:           1.0.4
 * Author:            César Siancas
 * Author URI:        https://nubocoder.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       nubocoder-bb-carousel
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'NUBOCODER_BB_CAROUSEL_VERSION', '1.0.4' );

/**
 * Plugin current directory and URL
 */
define( 'NUBOCODER_BB_CAROUSEL_DIR', plugin_dir_path( __FILE__ ) );
define( 'NUBOCODER_BB_CAROUSEL_URL', plugins_url( '/', __FILE__ ) );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-nubocoder-bb-carousel-activator.php
 */
function activate_nubocoder_bb_carousel() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-nubocoder-bb-carousel-activator.php';
	Nubocoder_Bb_Carousel_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-nubocoder-bb-carousel-deactivator.php
 */
function deactivate_nubocoder_bb_carousel() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-nubocoder-bb-carousel-deactivator.php';
	Nubocoder_Bb_Carousel_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_nubocoder_bb_carousel' );
register_deactivation_hook( __FILE__, 'deactivate_nubocoder_bb_carousel' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-nubocoder-bb-carousel.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_nubocoder_bb_carousel() {

	$plugin = new Nubocoder_Bb_Carousel();
	$plugin->run();

}
run_nubocoder_bb_carousel();
