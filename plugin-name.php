<?php // phpcs:disable WooCommerce.Commenting.CommentTags
/**
 * Plugin Name
 *
 * @package           PluginPackage
 * @author            Your Name or Company Name
 * @copyright         2024 Your Name or Company Name
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Plugin Name
 * Plugin URI:        https://wordpress.org/plugins/plugin-slug-name
 * Description:       Description of the plugin.
 * Version:           1.0.0
 * Requires at least: 6.0
 * Requires PHP:      7.0
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

spl_autoload_register(
	function ( $item ) {
		if ( str_starts_with( $item, __NAMESPACE__ ) ) {
			$item = str_replace(
				array( '\\', '_' ),
				array( '/', '-' ),
				strtolower( substr( $item, strlen( __NAMESPACE__ ) ) )
			);

			foreach ( array( 'class', 'trait', 'abstract', 'interface' ) as $prefix ) {
				$filename = preg_replace( '@([^/]+)$@', "{$prefix}-$1", __DIR__ . "/includes/{$item}.php" );
				if ( is_readable( $filename ) ) {
					require $filename;
					break;
				}
			}
		}
	}
);
