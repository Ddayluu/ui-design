<?php
// Adding css and js

function gt_setup() {
    wp_enqueue_style('mystyles', get_stylesheet_directory_uri().'/css/mystyles.css',false, NULL);
    wp_enqueue_style('mobile-view', get_stylesheet_directory_uri().'/css/mobile-view.css', false, NULL);
    wp_enqueue_style('reviews', get_stylesheet_directory_uri().'/css/reviews.css', false, NULL);
    wp_enqueue_style('reviewpost', get_stylesheet_directory_uri().'/css/reviewpost.css',false, NULL);
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(),false);    

    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/f1f6bd8687.js');
    wp_enqueue_script('main', get_theme_file_uri('js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'gt_setup');

// Adding Theme Support
function gt_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list', 'comment-form', 'search-form')
    );
}

add_action('after_setup_theme', 'gt_init');

// Adding project post type
function gt_custom_post_type() {
    register_post_type('project',
        array(
            'rewrite' => array('slug' => 'projects'),
            'labels' => array(
                'name' => 'Projects',
                'singular_name' => 'Project',
                'add_new_item' => 'Add New Project',
                'edit-item' => 'Edit Project'
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array (
                'title','thumbnail', 'editor', 'excerpt', 'comments'
            )
        )
    );
}
add_action('init', 'gt_custom_post_type');

// Sidebar
function gt_widgets() {
    register_sidebar(
        array(
            'name' => 'Main Sidebar',
            'id' => 'main_sidebar',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
        );
}

add_action('widgets_init', 'gt_widgets');

// Filter
function search_filter($query) {
    if ($query->is_search()){
        $query->set('post_type', array('post', 'project'));
    }
}
add_action('pre_get_posts', 'search_filter');