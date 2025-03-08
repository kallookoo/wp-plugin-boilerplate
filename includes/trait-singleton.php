<?php
/**
 * Plugin Name
 *
 * @package           PluginPackage
 * @author            Your Name or Company Name
 * @copyright         2025 Your Name or Company Name
 * @license           GPL2 or later
 */

namespace YourNameSpace;

defined( 'ABSPATH' ) || exit;

/**
 * Trait Singleton
 */
trait Singleton {

	/**
	 * Current Class Instance
	 *
	 * @var mixed
	 */
	protected static $class_instance;

	/**
	 * Get Current Class Instance
	 *
	 * @since 1.0.0
	 *
	 * @return static
	 */
	public static function instance() {
		if ( ! ( static::$class_instance instanceof static ) ) {
			static::$class_instance = new static();
		}
		return static::$class_instance;
	}

	/**
	 * Prevents cloning of the instance.
	 *
	 * {@internal This method is private to prevent cloning of the singleton instance.}}
	 *
	 * @since 1.0.0
	 */
	public function __clone() {
		_doing_it_wrong( __FUNCTION__, 'Cloning is forbidden.', '1.0.0' );
	}

	/**
	 * Prevents unserializing of the singleton instance.
	 *
	 * {@internal This method is empty to prevent the unserialization of the singleton instance,
	 *            ensuring that the singleton pattern is maintained.}}
	 *
	 * @since 1.0.0
	 */
	public function __wakeup() {
		_doing_it_wrong( __FUNCTION__, 'Unserializing instances of this class is forbidden.', '1.0.0' );
	}
}
