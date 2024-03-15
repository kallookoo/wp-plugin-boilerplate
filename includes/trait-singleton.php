<?php
/**
 * Plugin Name
 *
 * @package           PluginPackage
 * @author            Your Name or Company Name
 * @copyright         2023 Your Name or Company Name
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
	 * @return object
	 */
	public static function instance() {
		if ( ! ( static::$class_instance instanceof static ) ) {
			static::$class_instance = new static();
		}
		return static::$class_instance;
	}

	/**
	 * Cloning is forbidden.
	 */
	public function __clone() {}

	/**
	 * Unserializing instances of this class is forbidden.
	 */
	public function __wakeup() {}
}
