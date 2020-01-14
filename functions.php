<?php 
add_action('wp_enqueue_scripts','childhood_style');
add_action('wp_enqueue_style', 'childhood_scripts');
function childhood_style() {
	wp_enqueue_style('childhood_style', get_stylesheet_uri() );
	// wp_enqueue_style('childhood_style', get_template_directory_uri() . "/assets/styles/style.css");
	wp_enqueue_style('childhood_animate', get_template_directory_uri() . "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css");
	// JS
	wp_enqueue_script('childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js');
	// jquery
	wp_enqueue_script("ajax", get_template_directory_uri() . "/assets/libs/jquery/jquery-3.4.1.min");
	
	wp_enqueue_script('childhood-scripts-main', get_template_directory_uri() . '/assets/js/main.js');
}


add_theme_support('custom-logo' );
add_theme_support( 'post-thumbnails' ); // для всех типов постов

add_action( 'after_setup_theme', 'main_menu' );
function main_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}
// add_filter("nav_menu_link_attributes", "filter_nav_menu_link_attributes", 10, 3);

// function filter_nav_menu_link_attributes ($atts, $item, $args) {
// 	if ($args->menu === "main")
// }