<?php
/**
 * Plugin Name
 *
 * @package           PluginPackage
 * @author            Your Name or Company Name
 * @copyright         2025 Your Name or Company Name
 * @license           GPL2 or later
 */

namespace YourNameSpace\Admin;

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( __NAMESPACE__ . '\Installer' ) ) :
	/**
	 * Installer class
	 */
	class Installer {

		/**
		 * Function to handle plugin activation.
		 *
		 * {@internal This function is called when the plugin is activated.
		 *            It can handle both single site and network-wide activations.}}
		 *
		 * @since 1.0.0
		 *
		 * @param bool $network_wide Whether the plugin is being activated network-wide.
		 */
		public static function on_activation( $network_wide = false ) {}

		/**
		 * Fired during plugin deactivation.
		 *
		 * {@internal This function is executed when the plugin is deactivated.}}
		 *
		 * @since    1.0.0
		 *
		 * @param    bool $network_wide    Whether the plugin is being deactivated network-wide.
		 */
		public static function on_deactivation( $network_wide = false ) {}
	}

endif;
