<?php
/*
    Plugin Name: LCAD Custom Post Types
    description: a plugin that creates various custom posts specific for LCAD functionality
    Version: 1.0
    Author: Christopher Lugenbeal
    License: GPL2
*/

// Register News Custom Post Type
// function lcad_news_post() {
//     register_post_type( 'news',
//         array(
//             'labels' => array(
//                 'name' => __( 'News' ),
//                 'singular_name' => __( 'News' )
//             ),
//             'public' => true,
//             'show_in_rest' => true,
//         'supports' => array('title', 'editor', 'thumbnail'),
//         'has_archive' => true,
//         'rewrite'   => array( 'slug' => 'lcad-programs' ),
//             'menu_position' => 5,
//         'menu_icon' => 'dashicons-format-aside',
//         // 'taxonomies' => array('cuisines', 'post_tag') // this is IMPORTANT
//         )
//     );
// }

// Register Programs Custom Post Type
function lcad_programs_post() {
    register_post_type( 'programs',
        array(
            'labels' => array(
                'name' => __( 'Programs' ),
                'singular_name' => __( 'Program' )
            ),
            'public' => true,
            'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'rewrite'   => array( 'slug' => 'lcad-programs' ),
            'menu_position' => 5,
        'menu_icon' => 'dashicons-art',
        // 'taxonomies' => array('cuisines', 'post_tag') // this is IMPORTANT
        )
    );
}

// Register Alumni Directory Custom Post Type
function lcad_alumni_post() {
    register_post_type( 'alumni',
        array(
            'labels' => array(
                'name' => __( 'Alumni Directory' ),
                'singular_name' => __( 'Alumnus Directory' )
            ),
            'public' => true,
            'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'rewrite'   => array( 'slug' => 'lcad-alumni' ),
            'menu_position' => 5,
        'menu_icon' => 'dashicons-welcome-learn-more',
        // 'taxonomies' => array('cuisines', 'post_tag') // this is IMPORTANT
        )
    );
}

// Register Staff Directory Custom Post Type
function lcad_staff_post() {
    register_post_type( 'staff',
        array(
            'labels' => array(
                'name' => __( 'Staff Directory' ),
                'singular_name' => __( 'Staff Directory' )
            ),
            'public' => true,
            'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'rewrite'   => array( 'slug' => 'lcad-staff' ),
            'menu_position' => 5,
        'menu_icon' => 'dashicons-welcome-learn-more',
        // 'taxonomies' => array('cuisines', 'post_tag') // this is IMPORTANT
        )
    );
}

// Register Student Stories Custom Post Type
function lcad_student_story_post() {
    register_post_type( 'student story',
        array(
            'labels' => array(
                'name' => __( 'Student Stories' ),
                'singular_name' => __( 'Student Story' )
            ),
            'public' => true,
            'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'rewrite'   => array( 'slug' => 'student-story' ),
            'menu_position' => 5,
        'menu_icon' => 'dashicons-welcome-learn-more',
        // 'taxonomies' => array('cuisines', 'post_tag') // this is IMPORTANT
        )
    );
}

// Call Post Types
// add_action( 'init', 'lcad_news_post' );
add_action( 'init', 'lcad_programs_post' );
add_action( 'init', 'lcad_alumni_post' );
add_action( 'init', 'lcad_staff_post' );
add_action( 'init', 'lcad_student_story_post' );

?>