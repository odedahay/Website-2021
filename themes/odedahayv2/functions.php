<?php

function portfolio_files(){
    wp_enqueue_script('main-portfolio-js', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/fontawesome.css', array(), '5.13.0');
    wp_enqueue_style('font-awesome-brand', get_template_directory_uri() . '/css/brands.css', array(), '5.13.0');
    wp_enqueue_style('font-awesome-solid', get_template_directory_uri() . '/css/solid.css', array(), '5.13.0');
    wp_enqueue_style('custom-google-fonts_main', '//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
    wp_enqueue_style('custom-google-fonts_secondary', '//fonts.googleapis.com/css2?family=Ranchers&display=swap');
    wp_enqueue_style('portfolio_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'portfolio_files'); 


function portfolio_features(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('worksList', 300, 220, true);
    add_image_size('worksSingle', 800, 500, true);
    
}

add_action('after_setup_theme', 'portfolio_features');


function portfolio_widget(){
    register_sidebar(array(
        'name' => 'Portfolio Sidebar',
        'id' => 'category_sidebar',
        'before_widget' => '<nav class="sidebar-list">',
        'after_widget' => '</nav>',
        'before_title' => '<p class="profile-thin-title text-left">',
        'after_title' => '</p>',
    ));

}
add_action('widgets_init', 'portfolio_widget');