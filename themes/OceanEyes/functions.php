<?php
function OceanEyes_setup() {
    OceanE_theme_support();
    //The logo for the website
    add_theme_support('custom-logo');
    
}
function OceanE_theme_support(){
    //Featured Images
    add_theme_support('post-thumbnails');
    //MENU
    add_theme_support('menus');
}
//Excerpt Length（サムネイル表示時の文字数の制限）
function twpp_change_excerpt_length( $length ) {
  return 1; 
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );
add_action( 'after_setup_theme', 'OceanEyes_setup');

//Widget Location
function init_widgets($id){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="side-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="sidebar-title">',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_init', 'init_widgets');

//javascript
function ocean_eyes_script() {
    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/library/js/main.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'ocean_eyes_script' );

//jQuery
wp_enqueue_script("jquery");
    