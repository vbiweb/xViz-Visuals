<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://visualbi.com
 * @since             1.0.0
 * @package           Xviz_Visuals
 *
 * @wordpress-plugin
 * Plugin Name:       xViz Visuals
 * Plugin URI:        https://github.com/vbiweb/xViz-Visuals
 * Description:       This WordPress plugin displays all the xViz Visuals in the visuals page.
 * Version:           1.0.0
 * Author:            Balasubramaniyan M, K Gopal Krishna
 * Author URI:        https://visualbi.com
 * License:           GPL-2.0+
 * Text Domain:       xviz-visuals
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
define( 'XVIZ_VISUALS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-xviz-visuals-activator.php
 */
function activate_xviz_visuals() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-xviz-visuals-activator.php';
	Xviz_Visuals_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-xviz-visuals-deactivator.php
 */
function deactivate_xviz_visuals() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-xviz-visuals-deactivator.php';
	Xviz_Visuals_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_xviz_visuals' );
register_deactivation_hook( __FILE__, 'deactivate_xviz_visuals' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-xviz-visuals.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_xviz_visuals() {

	$plugin = new Xviz_Visuals();
	$plugin->run();

}
run_xviz_visuals();
