<?php

function hlm_theme_style() {
	wp_enqueue_style('bootstrap_style', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('css_style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('font-awesome_style', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css');

	// wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array('jQuery'), true);
	// wp_enqueue_script('jqBootstrapValidation_js', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array('jQuery'), true);
	// wp_enqueue_script('contact_me_js', get_template_directory_uri() . '/js/contact_me.js', array('jQuery'), true);
	// wp_enqueue_script('freelancer_js', get_template_directory_uri() . '/js/freelancer.js', array('jQuery'), true);
}
add_action('wp_enqueue_scripts', 'hlm_theme_style');

//function hlm_theme_js() {

//}
//add_action('wp_enqueue_scripts', 'hlm_theme_js');

function hlm_theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'hlm_theme_prefix_setup' );

function hlm_the_custom_logo() {
   if ( function_exists( 'the_custom_logo' ) ) {
      the_custom_logo();
   }
}


?>