<?php 

add_theme_support( 'post-thumbnails' );

function register_my_menus() {
	register_nav_menus(
		array(
			'top-menu' => __('Menú Superior'),
			'bottom-menu' => __('Menú del footer')
			)
		);
}
add_action('init', 'register_my_menus');