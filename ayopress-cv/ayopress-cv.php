<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://apompey.com/ayopress-cv/
 * @since             1.0.0
 * @package           Ayopress-CV
 *
 * @wordpress-plugin
 * Plugin Name:       Ayopress-CV
 * Plugin URI:        http://apompey.com/ayopress-cv/
 * Description:       This plugin displays CV information
 * Version:           1.0.0
 * Author:            Ayodele Pompey
 * Author URI:        http://apompey.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ayopress-cv
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_ayopress_cv() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ayopress-cv-activator.php';
	Ayopress_CV_Activator::activate();
        Ayopress_CV_Activator::installData();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_ayopress_cv() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ayopress-cv-deactivator.php';
	Ayopress_CV_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ayopress-cv' );
register_deactivation_hook( __FILE__, 'deactivate_ayopress-cv' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ayopress-cv.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ayopress_cv() {

	$plugin = new ayopress_cv();
	$plugin->run();

}
run_ayopress_cv();
