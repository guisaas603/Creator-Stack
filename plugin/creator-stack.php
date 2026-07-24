<?php
/**
 * Plugin Name: Creator-Stack
 * Plugin URI: https://creator-stack.com
 * Description: The Ultimate Creator Commerce Platform for WordPress.
 * Version: 1.0.0
 * Requires at least: 6.0
 * Requires PHP: 8.1
 * Author: Creator-Stack
 * Author URI: https://creator-stack.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: creator-stack
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Plugin constants
define( 'CS_VERSION', '1.0.0' );
define( 'CS_PLUGIN_FILE', __FILE__ );
define( 'CS_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'CS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Load the core plugin class.
require_once CS_PLUGIN_PATH . 'app/Core/Application.php';

// Start the plugin.
CreatorStack\Core\Application::boot();