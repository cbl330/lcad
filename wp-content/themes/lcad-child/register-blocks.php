<?php

// Register Custom Blocks
function be_register_blocks_1() {
	
	if( ! function_exists( 'acf_register_block_type' ) )
		return;

	acf_register_block_type( array(
		'name'			=> 'team-member',
		'title'			=> __( 'Team Member', 'clientname' ),
		'render_template'	=> 'blocks/team-member.php',
		'category'		=> 'formatting',
		'icon'			=> 'admin-users',
		'mode'			=> 'auto',
		'keywords'		=> array( 'profile', 'user', 'author' )
	));

}
add_action('acf/init', 'be_register_blocks_1' );

// // Register Custom Blocks
// function be_register_blocks_2() {
	
// 	if( ! function_exists( 'acf_register_block_type' ) )
// 		return;

// 	acf_register_block_type( array(
// 		'name'			=> 'template-home',
// 		'title'			=> __( 'Template Home', 'homepage' ),
// 		'render_template'	=> 'blocks/template-home.php',
// 		'category'		=> 'formatting',
// 		'icon'			=> 'admin-users',
// 		'mode'			=> 'auto',
// 		'keywords'		=> array( 'profile', 'user', 'author' )
// 	));

// }
// add_action('acf/init', 'be_register_blocks_2' );

// // Register Custom Blocks
// function lcadHeroSection() {
	
// 	if( ! function_exists( 'acf_register_block_type' ) )
// 		return;

// 	acf_register_block_type( array(
// 		'name'			=> 'section-hero',
// 		'title'			=> __( 'Section Hero', 'hero' ),
// 		'render_template'	=> 'blocks/section-hero.php',
// 		'category'		=> 'formatting',
// 		'icon'			=> 'admin-users',
// 		'mode'			=> 'auto',
// 		'keywords'		=> array( 'section', 'hero', 'home' )
// 	));

// }
// add_action('acf/init', 'lcadHeroSection' );