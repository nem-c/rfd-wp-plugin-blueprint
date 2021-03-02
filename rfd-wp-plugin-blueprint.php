<?php
/**
 * Plugin Name: RFP WP Plugin Blueprint
 * Plugin URI:  https://cimba.dev/
 * Description:
 * Version:     0.9.0
 * Author:      Nemanja Cimbaljevic
 * Author URI:  https://codeable.io/developers/nemanja-cimbaljevic/?ref=jjTaE
 * Text Domain: rfd-wp-plugin-blueprint
 * Domain Path: /languages
 * License:     GPL2
 *
 * @package RFD\WP_Plugin_Blueprint
 */

namespace RFD\WP_Plugin_Blueprint;

if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Current plugin version.
 */
define( 'RFD_WP_PLUGIN_BLUEPRINT_PLUGIN', 'rfd-wp-plugin-blueprint' );
define( 'RFD_WP_PLUGIN_BLUEPRINT_VERSION', '0.9.0' );

define( 'RFD_WP_PLUGIN_BLUEPRINT_PLUGIN_DIR', dirname( __FILE__ ) . DIRECTORY_SEPARATOR );
define( 'RFD_WP_PLUGIN_BLUEPRINT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

define( 'RFD_WP_PLUGIN_BLUEPRINT_ASSETS_URL', RFD_WP_PLUGIN_BLUEPRINT_PLUGIN_URL . 'assets/' );
define( 'RFD_WP_PLUGIN_BLUEPRINT_TEMPLATES_DIR', RFD_WP_PLUGIN_BLUEPRINT_PLUGIN_DIR . 'templates' . DIRECTORY_SEPARATOR );

define( 'RFD_WP_PLUGIN_BLUEPRINT_BLOCKS_DIR', RFD_WP_PLUGIN_BLUEPRINT_PLUGIN_DIR . 'blocks' . DIRECTORY_SEPARATOR );
define( 'RFD_WP_PLUGIN_BLUEPRINT_BLOCKS_URL', RFD_WP_PLUGIN_BLUEPRINT_PLUGIN_URL . 'blocks/' );

require_once RFD_WP_PLUGIN_BLUEPRINT_PLUGIN_DIR . 'core/autoload.php';
require_once RFD_WP_PLUGIN_BLUEPRINT_PLUGIN_DIR . 'functions/functions.php';

/**
 * The code that runs during plugin activation.
 */
$init_plugin = new Init();
( function () use ( $init_plugin ) {
	$init_plugin->prepare()->run();
} )();