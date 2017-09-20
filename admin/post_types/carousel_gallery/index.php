<?php

add_action( 'init', 'create_custom_gallery_post_types' );

//CUSTOM POST TYPE
function create_custom_gallery_post_types() {
    register_post_type( 'gallery',
        array(
            'labels' => array(
                'name' => 'gallerys',
                'singular_name' => 'gallery',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New gallery',
                'edit' => 'Edit',
                'edit_item' => 'Edit gallery',
                'new_item' => 'New gallery',
                'view' => 'View',
                'view_item' => 'View gallerys',
                'search_items' => 'Search gallerys',
                'not_found' => 'No gallerys found',
                'not_found_in_trash' => 'No gallerys found in Trash'
            ),
            'public' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor','thumbnail','page-attributes'),
            'taxonomies' => array( '' ),
            'menu_icon' => '',
            'has_archive' => false,
            'rewrite' => array( 'slug' => 'gallerys', 'with_front' => false ),
        )
    );
}

function gallery_wp_enqueue_scripts(){
    wp_register_style( 'slick-style', get_template_directory_uri().'/admin/post_types/carousel_gallery/css/slick.css');
    wp_register_script( 'slick-script', get_template_directory_uri().'/admin/post_types/carousel_gallery/js/slick.min.js',array('jquery'));
    wp_register_script( 'slick-slider', get_template_directory_uri().'/admin/post_types/carousel_gallery/js/slick-slider.js',array('slick-script'));
}
add_action( 'wp_enqueue_scripts', 'gallery_wp_enqueue_scripts' );



function gallery(){

    wp_enqueue_style( 'slick-style');
    wp_enqueue_script( 'slick-script');
    wp_enqueue_script( 'slick-slider');

    extract( shortcode_atts( array(
        'id' => '',
        'class' => ''
    ), $atts ));

    global $post;
    $return = '';


    wp_reset_query();
    $args = array(
        'post_type' => 'gallery',
        'posts_per_page' => $posts_per_page,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );
    $the_query = new WP_Query( $args );

    $return .= '<div class="slider-wrap galleryslide">';
    $return .= '<div class="slider">';
        while ( $the_query->have_posts() ) : $the_query->the_post();
            $content = do_shortcode( get_the_content());
            $content = apply_filters('the_content',$content);


            $return .= '<div class="slider-slide">';
                $return .= '<div class="slider-img" style="background-image: url(\'' . get_the_post_thumbnail_url() . '\');">';
                    // $return .= get_the_post_thumbnail();
                $return .= '</div>';
                $return .= '<div class="slider-content">';
                    $return .= '<div class="inner-content">';
                        $return .= $content;
                    $return .= '</div>';
                $return .= '</div>';
            $return .= '</div>';
    endwhile;


    $return .= '</div>';
    $return .= '<button type="button" class="btn slick-home-prev">&lt;</button><button type="button" class="btn slick-home-next">&gt;</button>';
    $return .= '</div>';

    wp_reset_query();

    return $return;
}
add_shortcode( 'gallery', 'gallery' );
