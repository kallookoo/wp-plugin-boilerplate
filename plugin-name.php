<?php // phpcs:disable WooCommerce.Commenting.CommentTags
/**
 * Plugin Name
 *
 * @package           PluginPackage
 * @author            Your Name or Company Name
 * @copyright         2025 Your Name or Company Name
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Plugin Name
 * Plugin URI:        https://wordpress.org/plugins/plugin-slug-name
 * Description:       Description of the plugin.
 * Version:           1.0.0
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Requires Plugins:  my-plugin, yet-another-plugin
 * Author:            Your Name or Company Name
 * Author URI:        https://your-domain.com
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://your-domain-for-updates.com/my-plugin
 * Text Domain:       plugin-slug-name
 * Domain Path:       /languages
 * Network:           true
 */

namespace YourNameSpace;

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( '\str_starts_with' ) ) {
	/**
	 * Checks if a string starts with a given substring.
	 *
	 * {@internal Declared because it does not exist until PHP version 8.0.
	 *            Only work with the current namespace.}}
	 *
	 * @param string $haystack The string to search in.
	 * @param string $needle   The substring to search for.
	 *
	 * @return bool True if $haystack starts with $needle, false otherwise.
	 */
	function str_starts_with( $haystack, $needle ) {
		return ( 0 === strncmp( $haystack, $needle, strlen( $needle ) ) );
	}
}

spl_autoload_register(
	function ( $item ) {
		if ( str_starts_with( $item, __NAMESPACE__ ) ) {
			$item = str_replace(
				array( '\\', '_' ),
				array( '/', '-' ),
				strtolower( substr( $item, strlen( __NAMESPACE__ ) ) )
			);

			$relative_file = "/includes/{$item}.php";
			if ( str_starts_with( $item, 'admin/' ) ) {
				$relative_file = "/{$item}.php";
			}

			foreach ( array( 'class', 'trait', 'abstract', 'interface' ) as $prefix ) {
				$filename = preg_replace( '@([^/]+)$@', "{$prefix}-$1", __DIR__ . $relative_file );
				if ( is_readable( $filename ) ) {
					require $filename;
					break;
				}
			}
		}
	}
);

register_activation_hook( __FILE__, __NAMESPACE__ . '\Admin\Installer::on_activation' );
register_deactivation_hook( __FILE__, __NAMESPACE__ . '\Admin\Installer::on_deactivation' );
