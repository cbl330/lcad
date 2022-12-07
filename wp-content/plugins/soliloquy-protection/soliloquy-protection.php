<?php
/**
 * Plugin Name: Soliloquy - Protection Addon
 * Plugin URI:  https://soliloquywp.com
 * Description: Enables image protection (disables right clicking) for Soliloquy.
 * Author:      Soliloquy Team
 * Author URI:  https://soliloquywp.com
 * Version:     1.1.1
 * Text Domain: soliloquy-protection
 * Domain Path: languages
 *
 * @package SoliloquyWP
 * @subpackage Soliloquy Protection
 *
 * Soliloquy is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Soliloquy is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Soliloquy. If not, see <http://www.gnu.org/licenses/>.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// Define necessary addon constants.
define( 'SOLILOQUY_PROTECTION_PLUGIN_NAME', 'Soliloquy - Protection Addon' );
define( 'SOLILOQUY_PROTECTION_PLUGIN_VERSION', '1.1.1' );
define( 'SOLILOQUY_PROTECTION_PLUGIN_SLUG', 'soliloquy-protection' );

add_action( 'plugins_loaded', 'soliloquy_protection_plugins_loaded' );
/**
 * Ensures the full Soliloquy plugin is active before proceeding.
 *
 * @since 1.0.0
 *
 * @return null Return early if Soliloquy is not active.
 */
function soliloquy_protection_plugins_loaded() {

	// Bail if the main class does not exist.
	if ( ! class_exists( 'Soliloquy' ) ) {
		return;
	}

	// Fire up the addon.
	add_action( 'soliloquy_init', 'soliloquy_protection_plugin_init' );

	// Load the plugin textdomain.
	load_plugin_textdomain( SOLILOQUY_PROTECTION_PLUGIN_SLUG, false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

}

/**
 * Loads all of the addon hooks and filters.
 *
 * @since 1.0.0
 */
function soliloquy_protection_plugin_init() {

	add_action( 'soliloquy_updater', 'soliloquy_protection_updater' );
	add_filter( 'soliloquy_defaults', 'soliloquy_protection_defaults', 10, 2 );
	add_action( 'soliloquy_misc_box', 'soliloquy_protection_setting' );
	add_filter( 'soliloquy_save_settings', 'soliloquy_protection_save', 10, 2 );
	add_action( 'soliloquy_api_end', 'soliloquy_protection_init' );

}

/**
 * Initializes the addon updater.
 *
 * @since 1.0.0
 *
 * @param string $key The user license key.
 */
function soliloquy_protection_updater( $key ) {

	$args = array(
		'plugin_name' => SOLILOQUY_PROTECTION_PLUGIN_NAME,
		'plugin_slug' => SOLILOQUY_PROTECTION_PLUGIN_SLUG,
		'plugin_path' => plugin_basename( __FILE__ ),
		'plugin_url'  => trailingslashit( WP_PLUGIN_URL ) . SOLILOQUY_PROTECTION_PLUGIN_SLUG,
		'remote_url'  => 'http://soliloquywp.com/',
		'version'     => SOLILOQUY_PROTECTION_PLUGIN_VERSION,
		'key'         => $key,
	);

	$updater = new Soliloquy_Updater( $args );

}

/**
 * Applies a default to the addon setting.
 *
 * @since 1.0.0
 *
 * @param array $defaults  Array of default config values.
 * @param int   $post_id     The current post ID.
 * @return array $defaults Amended array of default config values.
 */
function soliloquy_protection_defaults( $defaults, $post_id ) {

	// Enabled by default.
	$defaults['protection'] = 1;
	return $defaults;

}

/**
 * Adds addon setting to the Misc tab.
 *
 * @since 1.0.0
 *
 * @param object $post The current post object.
 */
function soliloquy_protection_setting( $post ) {

	$instance = Soliloquy_Metaboxes::get_instance();
	?>
	<tr id="soliloquy-config-protection-box">
		<th scope="row">
			<label for="soliloquy-config-protection"><?php esc_html_e( 'Enable Image Protection?', 'soliloquy-protection' ); ?></label>
		</th>
		<td>
			<input id="soliloquy-config-protection" type="checkbox" name="_soliloquy[protection]" value="<?php echo esc_attr( $instance->get_config( 'protection', $instance->get_config_default( 'protection' ) ) ); ?>" <?php checked( $instance->get_config( 'protection', $instance->get_config_default( 'protection' ) ), 1 ); ?> />
			<span class="description"><?php esc_html_e( 'Enables or disables image protection for slider images (display and lightbox).', 'soliloquy-protection' ); ?></span>
		</td>
	</tr>
	<?php

}

/**
 * Saves the addon setting.
 *
 * @since 1.0.0
 *
 * @param array $settings  Array of settings to be saved.
 * @param int   $post_id     The current post ID.
 * @return array $settings Amended array of settings to be saved.
 */
function soliloquy_protection_save( $settings, $post_id ) {

	if ( ! isset( $_POST['soliloquy'] ) || ! wp_verify_nonce( sanitize_key( $_POST['soliloquy'] ), 'soliloquy' ) ) {
		return;
	}
	$settings['config']['protection'] = isset( $_POST['_soliloquy']['protection'] ) ? 1 : 0;
	return $settings;

}

/**
 * Initializes image protection.
 *
 * @since 1.0.0
 *
 * @param array $data Data for the Soliloquy.
 * @return null       Return early if protection is not enabled.
 */
function soliloquy_protection_init( $data ) {

	if ( ! Soliloquy_Shortcode::get_instance()->get_config( 'protection', $data ) ) {
		return;
	}

	ob_start();
	?>
	$(document).on('contextmenu dragstart', '.soliloquy-wrapper, .soliloquybox-wrap, #soliloquy-<?php echo sanitize_html_class( $data['id'] ); ?> .soliloquy-image, #soliloquy-thumbnails-<?php echo sanitize_html_class( $data['id'] ); ?> img, .soliloquybox-image, #soliloquybox-thumbs img, .soliloquy-fullscreen .soliloquy-item', function(){
		return false;
	});
	$(".soliloquy-wrapper, .soliloquybox-wrap, #soliloquy-<?php echo sanitize_html_class( $data['id'] ); ?> .soliloquy-image, #soliloquy-thumbnails-<?php echo sanitize_html_class( $data['id'] ); ?> img, .soliloquybox-image, #soliloquybox-thumbs img, .soliloquy-fullscreen .soliloquy-item").on( 'click', function(e) {
		if (e.altKey) {  e.preventDefault(); }
	});
	<?php
	// @codingStandardsIgnoreStart
	echo apply_filters( 'soliloquy_protection_output', ob_get_clean(), $data );
	// @codingStandardsIgnoreEnd
}
