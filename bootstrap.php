<?php
/**
 * Reusable Meta Box WordPress Plugin
 *
 * @package     ReusableMetaBox
 * @author      Purple Prodigy
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Reusable Meta Box Plugin
 * Plugin URI:  https://github.com/PurpleProdigy/resuable-meta-box.git
 * Description: Reusable meta box plugin using the ModularConfiguration pattern. Configure your meta box and build a custom view to add custom meta boxes to your WordPress website projects.
 * Version:     1.0.0
 * Author:      Purple Prodigy
 * Author URI:  https://purpleprodigy.com
 * Text Domain: metabox
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace PurpleProdigy\MetaBox;

use PurpleProdigy\Metadata as metaData;

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Cheatin&#8217; uh?' );
}

/**
 * Set up the plugin's constants.
 *
 * @since 1.0.0
 *
 * @return void
 */
function init_constants() {
	$plugin_url = plugin_dir_url( __FILE__ );
	if ( is_ssl() ) {
		$plugin_url = str_replace( 'http://', 'https://', $plugin_url );
	}

	define( 'METABOX_URL', $plugin_url );
	define( 'METABOX_DIR', plugin_dir_path( __FILE__ ) );
}

/**
 * Autoload the plugin's files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function autoload_files() {
	$files = array(
		'/src/config-store/module.php',
		'/src/metadata/module.php'
	);

	foreach ( $files as $filename ) {
		require __DIR__ . $filename;
	}
}

/**
 * Launch the plugin
 *
 * @since 1.0.0
 *
 * @return void
 */
function launch() {
	init_constants();

	autoload_files();

	// Load configurations
	metaData\autoload_configurations(
		array(
			__DIR__ . '/config/subtitle.php',
			__DIR__ . '/config/portfolio.php'
		)
	);
}

launch();
