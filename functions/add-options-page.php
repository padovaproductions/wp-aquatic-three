<?php 
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Social media',
		'menu_title'	=> 'Social media',
		'menu_slug' 	=> 'social-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url' => 'dashicons-carrot',
		'position' => 50.3
	));
  
	acf_add_options_page(array(
		'page_title' 	=> 'Site menus',
		'menu_title'	=> 'Site menus',
		'menu_slug' 	=> 'menu-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url' => 'dashicons-menu-alt2',
		'position' => 49.2
	));
  
}