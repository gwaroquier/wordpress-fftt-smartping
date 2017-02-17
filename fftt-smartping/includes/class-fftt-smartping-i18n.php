<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/gwaroquier
 * @since      2.0.0
 *
 * @package    Fftt_Smartping
 * @subpackage Fftt_Smartping/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      2.0.0
 * @package    Fftt_Smartping
 * @subpackage Fftt_Smartping/includes
 * @author     Geoffrey WAROQUIER <geoffrey@waroquier.org>
 */
class Fftt_Smartping_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    2.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'fftt-smartping',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
