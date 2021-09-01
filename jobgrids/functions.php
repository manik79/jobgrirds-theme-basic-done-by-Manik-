<?php
if ( site_url() == "http://localhost/wordpress/" ) {
    define( "VERSION", time() );
} else {
    define( "VERSION", wp_get_theme()->get( "Version" ) );
}
function jobgrids_theme_setup() {
    load_theme_textdomain( "jobgrids", get_theme_file_path( '/languages' ) );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "title-tag" );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "html5", array( "comment-list", "search-form" ) );
    add_theme_support( "post-formats", array( "image", "gallery", "quote", "audio", "video", "link" ) );
    add_editor_style( "/assets/css/editor-style.css" );
    register_nav_menu( "topmenu", __( "Top Menu", "jobgrids" ) );
}
add_action( 'after_setup_theme', 'jobgrids_theme_setup' );

function jobgrids_assets() {
    wp_enqueue_style( 'google-font', "//fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap", array(), VERSION );
    wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( "/assets/css/bootstrap.min.css" ), array(), VERSION );
    wp_enqueue_style( 'LineIcons-css', get_theme_file_uri( "/assets/css/LineIcons.2.0.css" ), array(), VERSION );
    wp_enqueue_style( 'animate-css', get_theme_file_uri( "/assets/css/animate.css" ), array(), VERSION );
    wp_enqueue_style( 'tinyslider-css', get_theme_file_uri( "/assets/css/tiny-slider.css" ), array(), VERSION );
    wp_enqueue_style( 'glightbox-css', get_theme_file_uri( "/assets/css/glightbox.min.css" ), array(), VERSION );
    wp_enqueue_style( 'main-css', get_theme_file_uri( "/assets/css/main.css" ), array(), VERSION );
    wp_enqueue_style( 'jobgrids-css', get_stylesheet_uri(), array(), VERSION );

    wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( "/assets/js/bootstrap.min.js" ), array(), VERSION, true );
    wp_enqueue_script( 'wow-js', get_theme_file_uri( "/assets/js/wow.min.js" ), array(), VERSION, true );
    wp_enqueue_script( 'glightbox-js', get_theme_file_uri( "/assets/js/glightbox.min.js" ), array(), VERSION, true );
    wp_enqueue_script( 'main-js', get_theme_file_uri( "/assets/js/main.js" ), array(), VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'jobgrids_assets' );

function jobgrids_menu_li_class($classes,$items){
    $classes[] = 'nav-item';
    return $classes;
}
add_filter('nav_menu_css_class','jobgrids_menu_li_class',10,2);