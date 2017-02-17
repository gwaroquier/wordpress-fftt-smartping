<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/gwaroquier
 * @since             2.0.0
 * @package           Fftt_Smartping
 *
 * @wordpress-plugin
 * Plugin Name:       FFTT SmartPing
 * Plugin URI:        https://github.com/gwaroquier/wordpress-fftt-smartping
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           2.0.0
 * Author:            Geoffrey WAROQUIER
 * Author URI:        https://github.com/gwaroquier
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fftt-smartping
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-fftt-smartping-activator.php
 */
function activate_fftt_smartping() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fftt-smartping-activator.php';
	Fftt_Smartping_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-fftt-smartping-deactivator.php
 */
function deactivate_fftt_smartping() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fftt-smartping-deactivator.php';
	Fftt_Smartping_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_fftt_smartping' );
register_deactivation_hook( __FILE__, 'deactivate_fftt_smartping' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-fftt-smartping.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    2.0.0
 */
function run_fftt_smartping() {

	$plugin = new Fftt_Smartping();
	$plugin->run();

}
run_fftt_smartping();
