<?php

/**
 * Register all modules for beaver builder
 *
 * @link       https://nubocoder.com
 * @since      1.0.0
 *
 * @package    Nubocoder_Bb_Carousel
 * @subpackage Nubocoder_Bb_Carousel/includes
 */

/**
 * Register all modules for beaver builder
 *
 * A class that handles loading custom modules and custom
 * fields if the builder is installed and activated.
 *
 * @package    Nubocoder_Bb_Carousel
 * @subpackage Nubocoder_Bb_Carousel/includes
 * @author     César Siancas <admin@nubocoder.com>
 */
class Nubocoder_Bb_Carousel_Module_Loader {
	
	/**
	 * Initializes the class once all plugins have loaded.
	 */
	static public function init() {
		add_action( 'plugins_loaded', __CLASS__ . '::setup_hooks' );
	}
	
	/**
	 * Setup hooks if the builder is installed and activated.
	 */
	static public function setup_hooks() {
		if ( ! class_exists( 'FLBuilder' ) ) {
			return;	
		}
		
		// Load custom modules.
		add_action( 'init', __CLASS__ . '::load_modules' );
	}
	
	/**
	 * Loads our custom modules.
	 */
	static public function load_modules() {
		require_once NUBOCODER_BB_CAROUSEL_DIR . 'modules/carousel/carousel.php';
	}
}

Nubocoder_Bb_Carousel_Module_Loader::init();