<?php  

function um_theme_setup(){

    add_theme_support('custom-logo' );
    add_theme_support('title-tag' );
    add_theme_support( 'post-thumbnails');
    add_theme_support('automatic-feed-links' );
    add_image_size( 'home-featured', 600, 400, array('center','center') );
    add_image_size( 'single-post', '580', '272', array('center', 'center') );

    register_nav_menus( array(
        'primary' => __('Primary Menu', 'umtheme')
    ) );

    
}
add_action('after_setup_theme', 'um_theme_setup');

function um_theme_scripts(){
    wp_enqueue_style('style.css', get_stylesheet_uri(  ));
    wp_enqueue_script('jquery'); //add jquery
    wp_enqueue_script('umtheme-browser', get_template_directory_uri(  ).'/assets/js/browser.min.js'); 
    wp_enqueue_script('umtheme-browser', get_template_directory_uri(  ).'/assets/js/breakpoints.min.js'); 
    wp_enqueue_script('umtheme-browser', get_template_directory_uri(  ).'/assets/js/util.js'); 
    wp_enqueue_script('umtheme-browser', get_template_directory_uri(  ).'/assets/js/main.js'); 

}
add_action('wp_enqueue_scripts', 'um_theme_scripts');

function um_theme_widgets_init(){
    register_sidebar( array(
        'name' => __('Primary Sidebar', 'umtheme'),
        'id' =>  'main-sidebar',
        'description' => 'Mian sidebar on right side',
        'before_widget' => '<section id="%1$s" class="box %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h3 class="widget-title">',
        'after-title'  => '</h3></header>'
    ) );
    register_sidebar( array(
        'name' => __('Home Banner', 'umtheme'),
        'id' =>  'home-banner',
        'description' => 'Banner area on homepage',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after-title'  => '</h3>'
    ) );
    register_sidebar( array(
        'name' => __('Home Services', 'umtheme'),
        'id' =>  'home-services',
        'description' => 'Services area on homepage',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after-title'  => '</h3>'
    ) );
    register_sidebar( array(
        'name' => __('Footer 1', 'umtheme'),
        'id' =>  'footer-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h2 class="widget-title">',
        'after-title'  => '</h2></header>'
    ) );
    register_sidebar( array(
        'name' => __('Footer 2', 'umtheme'),
        'id' =>  'footer-2',
        'description' => 'Mian sidebar on right side',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h2 class="widget-title">',
        'after-title'  => '</h2></header>'
    ) );
    register_sidebar( array(
        'name' => __('Footer 3', 'umtheme'),
        'id' =>  'footer-3',
        'description' => 'Mian sidebar on right side',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h2 class="widget-title">',
        'after-title'  => '</h2></header>'
    ) );
}

add_action('widgets_init', 'um_theme_widgets_init');
// Custom post
require get_template_directory().'/inc/portfolio.php';

function custom_excerpt_length( $length ) {
    return 20; 
}
add_filter( 'excerpt_length', 'custom_excerpt_length' );


?>
