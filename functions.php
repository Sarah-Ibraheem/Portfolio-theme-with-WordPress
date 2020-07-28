<?php
 

//Assets
function addAssets(){
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/assets/css/styles.css');
    wp_enqueue_style( 'responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css');
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js',['jquery']);
    // wp_enqueue_script('custom',get_template_directory_uri().'/assets/js/custom-scripts.js',['jquery']);

}


add_action('wp_enqueue_scripts','addAssets');

//theme options like image
add_theme_support( "post-thumbnails" );

add_theme_support("menus");

register_nav_menus( array(
    "main-menu" => "Main Menu",
    "footer-menu" => "Footer Menu"
) );

// Custom Post Type CPT

function addSkillsPostType(){
    register_post_type("skills",array(
        "label" => "Skills",
        "public" => true,
        "menu_position" => 4,
        "supports"=>["title"],
        'taxonomies' => ['category'],
        "show_in_rest" => true,
        "has_archive" => true
    ));
}

add_action("init","addSkillsPostType");

// Custom Post Type CPT

function addExperiencesPostType(){
    register_post_type("experiences",array(
        "label" => "Experiences",
        "public" => true,
        "menu_position" => 5,
        "supports"=>["title"],
        'taxonomies' => ['category'],
        "show_in_rest" => true,
        "has_archive" => true
    ));
}

add_action("init","addExperiencesPostType");

function addEducationsPostType(){
    register_post_type("educations",array(
        "label" => "Educations",
        "public" => true,
        "menu_position" => 6,
        "supports"=>["title"],
        'taxonomies' => ['category'],
        "show_in_rest" => true,
        "has_archive" => true
    ));
}

add_action("init","addEducationsPostType");


?>