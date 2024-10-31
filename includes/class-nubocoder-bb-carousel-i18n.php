<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://nubocoder.com
 * @since      1.0.0
 *
 * @package    Nubocoder_Bb_Carousel
 * @subpackage Nubocoder_Bb_Carousel/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Nubocoder_Bb_Carousel
 * @subpackage Nubocoder_Bb_Carousel/includes
 * @author     César Siancas <admin@nubocoder.com>
 */
class Nubocoder_Bb_Carousel_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'nubocoder-bb-carousel',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
