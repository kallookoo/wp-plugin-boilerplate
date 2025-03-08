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

if ( ! is_readable( __DIR__ . '/vendor/autoload.php' ) ) {
	_doing_it_wrong( __NAMESPACE__, 'Autoload could not be retrieved.', '1.0.0' );
	return;
}
require __DIR__ . '/vendor/autoload.php';

register_activation_hook( __FILE__, __NAMESPACE__ . '\Admin\Setup::on_activation' );
register_deactivation_hook( __FILE__, __NAMESPACE__ . '\Admin\Setup::on_deactivation' );
