<?php

if ( ! function_exists( 'ngtcw_setup' ) ) :

    function ngtcw_setup() {
        /**
         * Enable theme support features
         *
         * @link https://developer.wordpress.org/reference/functions/add_theme_support/
         */
        add_theme_support( 'title-tag' );

        // add_theme_support( 'custom-header' );

        add_theme_support( 'post-thumbnails' );

        // add_theme_support( 'custom-background' );

        // add_theme_support( 'post-formats', array(
        //  'aside', 'image', 'video', 'quote', 'link', 'gallery',
        // ) );

        /**
         * Register navigation menus
         *
         * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
         */
        register_nav_menus( array( 'main' => 'Main Nav' ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

    } // end setup function
endif;
add_action( 'after_setup_theme', 'ngtcw_setup' );

/**
 * Enqueue scripts and styles.
 */
function ngtcw_scripts() {
    wp_enqueue_script( 'slickjs', get_bloginfo('template_url') . '/js/slick.min.js', 'jquery', '1.6.0', true );
    wp_enqueue_script( 'ngacustom', get_bloginfo('template_url') . '/js/custom.js', 'jquery', '1.0', true );
    wp_enqueue_style( 'opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i' );
    wp_enqueue_style( 'oswald', 'https://fonts.googleapis.com/css?family=Oswald:400,700' );
    wp_enqueue_style( 'poppins', 'https://fonts.googleapis.com/css?family=Poppins:100,400' );
    wp_enqueue_style( 'slickcss', get_bloginfo('template_url') . '/css/slick.css', array(), false );
    wp_enqueue_style( 'ngtcw_main', get_bloginfo('template_url') . '/main.css', array('bootstrap'), false );
    wp_enqueue_style( 'fontawesome', get_bloginfo('template_url') . '/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'ngtcw_scripts' );

function ld_new_excerpt_more($more) {
    global $post;
    return '...<a class="more-link" href="'. get_permalink($post->ID) . '"><em>More</em></a>';
}
add_filter('excerpt_more', 'ld_new_excerpt_more');

/**
 * Register widgetized areas.
 *
 */
function ngtcw_widget_init() {

    register_sidebar( array(
        'name'          => 'Page Sidebar',
        'id'            => 'page_sidebar_1',
        'before_widget' => '<div class="sb-widget-area">',
        'after_widget'  => '</div>'
    ) );

}
add_action( 'widgets_init', 'ngtcw_widget_init' );


/*
* Utility Function
*
* Mainly used to get the post id of a page outside of the loop in a page template
 */
function get_the_post_id() {
  if (in_the_loop()) {
       $post_id = get_the_ID();
  } else {
       global $wp_query;
       $post_id = $wp_query->get_queried_object_id();
         }
  return $post_id;
}

include(TEMPLATEPATH.'/admin/custom_shortcodes.php');
include(TEMPLATEPATH.'/admin/post_types/slider/index.php');
include(TEMPLATEPATH.'/admin/post_types/carousel_gallery/index.php');
