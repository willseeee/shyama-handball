<?php
/**
 * Shyama Handball Academy Theme functions and definitions
 */

if ( ! function_exists( 'shyama_handball_setup' ) ) :
    function shyama_handball_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Register Primary Navigation Menu
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'shyama-handball' ),
        ) );

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ) );
    }
endif;
add_action( 'after_setup_theme', 'shyama_handball_setup' );

/**
 * Enqueue scripts and styles.
 */
function shyama_handball_scripts() {
    // Font Awesome
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );

    // Tabler Icons
    wp_enqueue_style( 'tabler-icons', 'https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css', array(), 'latest' );

    // Main Theme Stylesheet (points to root style.css which imports css/style.css)
    wp_enqueue_style( 'shyama-handball-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Main Theme JavaScript
    wp_enqueue_script( 'shyama-handball-main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'shyama_handball_scripts' );

/**
 * Register Custom Post Types (CPTs)
 */
function shyama_handball_register_cpts() {
    // 1. Coaches Custom Post Type
    register_post_type( 'coach', array(
        'labels' => array(
            'name'          => __( 'Coaches', 'shyama-handball' ),
            'singular_name' => __( 'Coach', 'shyama-handball' ),
            'add_new_item'  => __( 'Add New Coach', 'shyama-handball' ),
            'edit_item'     => __( 'Edit Coach', 'shyama-handball' ),
        ),
        'public'      => true,
        'has_archive' => false,
        'supports'    => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon'   => 'dashicons-businessman',
        'show_in_rest'=> true,
    ) );

    // 2. Events Custom Post Type
    register_post_type( 'event', array(
        'labels' => array(
            'name'          => __( 'Events', 'shyama-handball' ),
            'singular_name' => __( 'Event', 'shyama-handball' ),
            'add_new_item'  => __( 'Add New Event', 'shyama-handball' ),
            'edit_item'     => __( 'Edit Event', 'shyama-handball' ),
        ),
        'public'      => true,
        'has_archive' => true,
        'supports'    => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon'   => 'dashicons-calendar-alt',
        'show_in_rest'=> true,
    ) );

    // 3. Testimonials Custom Post Type
    register_post_type( 'testimonial', array(
        'labels' => array(
            'name'          => __( 'Testimonials', 'shyama-handball' ),
            'singular_name' => __( 'Testimonial', 'shyama-handball' ),
            'add_new_item'  => __( 'Add New Testimonial', 'shyama-handball' ),
            'edit_item'     => __( 'Edit Testimonial', 'shyama-handball' ),
        ),
        'public'      => true,
        'has_archive' => false,
        'supports'    => array( 'title', 'editor' ),
        'menu_icon'   => 'dashicons-testimonial',
        'show_in_rest'=> true,
    ) );

    // 4. Sponsors Custom Post Type
    register_post_type( 'sponsor', array(
        'labels' => array(
            'name'          => __( 'Sponsors & Partners', 'shyama-handball' ),
            'singular_name' => __( 'Sponsor', 'shyama-handball' ),
            'add_new_item'  => __( 'Add New Sponsor', 'shyama-handball' ),
            'edit_item'     => __( 'Edit Sponsor', 'shyama-handball' ),
        ),
        'public'      => true,
        'has_archive' => false,
        'supports'    => array( 'title', 'thumbnail' ),
        'menu_icon'   => 'dashicons-awards',
        'show_in_rest'=> true,
    ) );
}
add_action( 'init', 'shyama_handball_register_cpts' );
