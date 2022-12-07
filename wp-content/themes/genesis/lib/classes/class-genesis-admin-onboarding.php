<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package StudioPress\Genesis
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 */

/**
 * Registers a new admin page, providing content and corresponding menu item for the "Getting Started" page.
 *
 * @since 2.8.0
 */
final class Genesis_Admin_Onboarding extends Genesis_Admin_Basic {

	/**
	 * Sets the admin page properties and creates the page.
	 */
	public function __construct() {
		$this->help_base = GENESIS_VIEWS_DIR . '/help/getting-started-';

		$page_id = 'genesis-getting-started';

		$menu_ops = [
			'submenu' => [
				'parent_slug' => 'genesis',
				'page_title'  => __( 'Genesis - Getting Started', 'genesis' ),
				'menu_title'  => __( 'Child Theme Setup', 'genesis' ),
			],
		];

		$this->create( $page_id, $menu_ops );
	}

	/**
	 * Loads the onboarding admin page.
	 */
	public function admin() {
		if ( genesis_onboarding_starter_packs() ) {
			delete_option( 'genesis_onboarding_chosen_pack' );
			include GENESIS_VIEWS_DIR . '/pages/genesis-admin-onboarding-packs.php';
		} else {
			include GENESIS_VIEWS_DIR . '/pages/genesis-admin-onboarding.php';
		}
	}

}
