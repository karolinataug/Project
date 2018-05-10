<?php

define('ASSETS_URL' , get_template_directory_uri() . '/assets');
add_action('wp_enqueue_scripts', 'projektas_styles' );
function projektas_styles() {
  if (! is_admin() ){
  //stiliu pridedimas
  wp_register_style('reset_style', ASSETS_URL . '/reset.css', array(), false, 'all');
  wp_register_style('slick_style', ASSETS_URL . '/slick/slick.css', array(), false, 'all');
  wp_register_style('slick_slick_style', ASSETS_URL . '/slick/slick-theme.css', array(), false, 'all');
  wp_register_style('taisytas_style', ASSETS_URL . '/taisytas.css', array(), false, 'all');

  //stiliu uzregistravimas
  wp_enqueue_style('reset_style');
  wp_enqueue_style('slick_style');
  wp_enqueue_style('slick_slick_style');
  wp_enqueue_style('taisytas_style');
  //scriptu pridediams
  wp_register_script('fontawesome_script', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js' , array(), false, true);
  wp_register_script('slick_script', ASSETS_URL . '/slick/slick.min.js' , array('jquery'), false, true);
  wp_register_script('taisytas_script', ASSETS_URL . '/taisytas.js' , array('jquery'), false, true);
  wp_register_script('google_map_api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDFqTlGLGsOezxdv2DoSru4PMCtLSPLVl4' , array(), false, true);
  wp_register_script('maps_script', ASSETS_URL . '/maps.js', array('google_map_api'), false, true);
  //scriptu uzregistravimas
  wp_enqueue_script('fontawesome_script');
  wp_enqueue_script('slick_script');
  wp_enqueue_script('taisytas_script');
  wp_enqueue_script('google_map_api');
  wp_enqueue_script('maps_script');
  }
}

//navigation
add_action('init' , 'projektas_adding_theme_supports');
function projektas_adding_theme_supports () {
  add_theme_support( 'menus' );
  add_theme_support ('post-thumbnails');
}

add_action('init' , 'projektas_registering_menus');
function projektas_registering_menus() {
  register_nav_menus (array(
    'top-menu'           =>__('header menu'),
    'footer-menu'        =>__('footer menu'),
  ));
}

//logo -image
add_action ('init', 'logo_imagine_sizes');
function logo_imagine_sizes(){
 add_image_size('logo_imagine', 127, 23,true );
 add_image_size( 'about_me_image' , 180, 180, true);
 add_image_size( 'background_image', 1230, 470, true );
 add_image_size( 'just_default_imagine', 600, 400, true);
 add_image_size( 'slide_image', 1230, 480, true );
 add_image_size('portfolio_image' , 270, 270, true);

}

function my_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyDFqTlGLGsOezxdv2DoSru4PMCtLSPLVl4';
	return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
