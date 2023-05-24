<?php
/**
 * Laurence Simons functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Laurence_Simons
 * @since Laurence Simons 1.0
 */

/**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 * Dashboard customized
 */




/**
 *
 * THEME SUPPORT
 *
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Laurence Simons 1.0
 */





/**
 * CUSTOMIZED ADMIN DASHBOARD
 * Update admin dashboard
 */
// ACF sections
if( function_exists('acf_add_options_page') ) {

    //    GLOBAL SETTINGS ---------------
    acf_add_options_page(array(
        'page_title'    =>'Global Settings',
        'menu_title'    =>'Global Settings',
        'menu_slug' 	=> 'global-settings',
        'capability'	=> 'edit_posts',
        'parent_slug'	=> '',
        'position'		=> 5,
        'redirect'		=> true,
        'icon_url'		=> 'dashicons-admin-settings'
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Logo',
        'menu_title'	=> 'Logo',
        'menu_slug'	    => 'theme-logo',
        'parent_slug'	=> 'global-settings',
        'position'		=> false,
        'redirect'		=> false,
        'icon_url'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Offices',
        'menu_title'	=> 'Offices',
        'menu_slug'	    => 'theme-office',
        'parent_slug'	=> 'global-settings',
        'position'		=> false,
        'redirect'		=> false,
        'icon_url'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Socials',
        'menu_title'	=> 'Socials',
        'menu_slug'	    => 'theme-social',
        'parent_slug'	=> 'global-settings',
        'position'		=> false,
        'redirect'		=> false,
        'icon_url'		=> false
    ));

     acf_add_options_sub_page(array(
        'page_title' 	=> 'Footer',
        'menu_title'	=> 'Footer',
        'menu_slug'	    => 'theme-footer',
        'parent_slug'	=> 'global-settings',
        'position'		=> false,
        'redirect'		=> false,
        'icon_url'		=> false
    ));

    //    ARCHIVES SETTINGS ---------------
    acf_add_options_page(array(
        'page_title'    =>'Archives',
        'menu_title'    =>'Archives',
        'menu_slug' 	=> 'archive',
        'capability'	=> 'edit_posts',
        'parent_slug'	=> '',
        'position'		=> 5,
        'redirect'		=> true,
        'icon_url'		=> 'dashicons-archive'
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'News archive',
        'menu_title'	=> 'News archive',
        'menu_slug'	    => 'theme-news',
        'parent_slug'	=> 'archive',
        'position'		=> false,
        'redirect'		=> false,
        'icon_url'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Employees archive',
        'menu_title'	=> 'Employees archive',
        'menu_slug'	    => 'theme-employee',
        'parent_slug'	=> 'archive',
        'position'		=> false,
        'redirect'		=> false,
        'icon_url'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Jobs archive',
        'menu_title'	=> 'Jobs archive',
        'menu_slug'	    => 'theme-jobs',
        'parent_slug'	=> 'archive',
        'position'		=> false,
        'redirect'		=> false,
        'icon_url'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Candidates archive',
        'menu_title'	=> 'Candidates archive',
        'menu_slug'	    => 'theme-candidate',
        'parent_slug'	=> 'archive',
        'position'		=> false,
        'redirect'		=> false,
        'icon_url'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Testimonials archive',
        'menu_title'	=> 'Testimonials archive',
        'menu_slug'	    => 'theme-testimonial',
        'parent_slug'	=> 'archive',
        'position'		=> false,
        'redirect'		=> false,
        'icon_url'		=> false
    ));


    acf_add_options_sub_page(array(
        'page_title' 	=> 'Case studies archive',
        'menu_title'	=> 'Case studies archive',
        'menu_slug'	    => 'theme-case-study',
        'parent_slug'	=> 'archive',
        'position'		=> false,
        'redirect'		=> false,
        'icon_url'		=> false
    ));

}



function news() {
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'News', 'Post Type General Name', 'lss' ),
        'singular_name'       => _x( 'News', 'Post Type Singular Name', 'lss' ),
        'menu_name'           => __( 'News', 'lss' ),
        'parent_item_colon'   => __( 'Parent News', 'lss' ),
        'all_items'           => __( 'All News', 'lss' ),
        'view_item'           => __( 'View News', 'lss' ),
        'add_new_item'        => __( 'Add New News', 'lss' ),
        'add_new'             => __( 'Add New', 'lss' ),
        'edit_item'           => __( 'Edit News', 'lss' ),
        'update_item'         => __( 'Update News', 'lss' ),
        'search_items'        => __( 'Search News', 'lss' ),
        'not_found'           => __( 'Not Found', 'lss' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'lss' ),
    );

    // Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'News', 'lss' ),
        'description'         => __( 'List of our team', 'lss' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'revisions', 'custom-fields', ),

        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 3,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'taxonomies'          => array('topics', 'category', 'post_tag' ),

    );

    // Registering your Custom Post Type
    register_post_type( 'news', $args );
}
add_action( 'init', 'news', 0 );


function post_type_employees() {
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Employees', 'Post Type General Name', 'lss' ),
        'singular_name'       => _x( 'Employees', 'Post Type Singular Name', 'lss' ),
        'menu_name'           => __( 'Employees', 'lss' ),
        'parent_item_colon'   => __( 'Parent Employee', 'lss' ),
        'all_items'           => __( 'All Employees', 'lss' ),
        'view_item'           => __( 'View Employee', 'lss' ),
        'add_new_item'        => __( 'Add New Employee', 'lss' ),
        'add_new'             => __( 'Add New', 'lss' ),
        'edit_item'           => __( 'Edit Employee', 'lss' ),
        'update_item'         => __( 'Update Employee', 'lss' ),
        'search_items'        => __( 'Search Employee', 'lss' ),
        'not_found'           => __( 'Not Found', 'lss' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'lss' ),
    );

    // Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'Employees', 'lss' ),
        'description'         => __( 'List of our team', 'lss' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'revisions', 'custom-fields' ),

        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type( 'employees', $args );
}
add_action( 'init', 'post_type_employees', 0 );


function post_type_jobs() {
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Jobs', 'Post Type General Name', 'lss' ),
        'singular_name'       => _x( 'Jobs', 'Post Type Singular Name', 'lss' ),
        'menu_name'           => __( 'Jobs', 'lss' ),
        'parent_item_colon'   => __( 'Parent Job', 'lss' ),
        'all_items'           => __( 'All Jobs', 'lss' ),
        'view_item'           => __( 'View Job', 'lss' ),
        'add_new_item'        => __( 'Add New Job', 'lss' ),
        'add_new'             => __( 'Add New', 'lss' ),
        'edit_item'           => __( 'Edit Job', 'lss' ),
        'update_item'         => __( 'Update Job', 'lss' ),
        'search_items'        => __( 'Search Job', 'lss' ),
        'not_found'           => __( 'Not Found', 'lss' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'lss' ),
    );

    // Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'Jobs', 'lss' ),
        'description'         => __( 'List of job vacancies', 'lss' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'revisions', 'custom-fields'),

        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type( 'jobs', $args );
}
add_action( 'init', 'post_type_jobs', 0 );


function post_type_candidates() {
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Candidates', 'Post Type General Name', 'lss' ),
        'singular_name'       => _x( 'Candidates', 'Post Type Singular Name', 'lss' ),
        'menu_name'           => __( 'Candidates', 'lss' ),
        'parent_item_colon'   => __( 'Parent Candidate', 'lss' ),
        'all_items'           => __( 'All Candidates', 'lss' ),
        'view_item'           => __( 'View Candidate', 'lss' ),
        'add_new_item'        => __( 'Add New Candidate', 'lss' ),
        'add_new'             => __( 'Add New', 'lss' ),
        'edit_item'           => __( 'Edit Candidate', 'lss' ),
        'update_item'         => __( 'Update Candidate', 'lss' ),
        'search_items'        => __( 'Search Candidate', 'lss' ),
        'not_found'           => __( 'Not Found', 'lss' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'lss' ),
    );

    // Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'Candidates', 'lss' ),
        'description'         => __( 'List of our team', 'lss' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'revisions', 'custom-fields'),

        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type( 'candidates', $args );
}
add_action( 'init', 'post_type_candidates', 0 );


function post_type_clients() {
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Clients', 'Post Type General Name', 'lss' ),
        'singular_name'       => _x( 'Clients', 'Post Type Singular Name', 'lss' ),
        'menu_name'           => __( 'Clients', 'lss' ),
        'parent_item_colon'   => __( 'Parent Client', 'lss' ),
        'all_items'           => __( 'All Client', 'lss' ),
        'view_item'           => __( 'View Client', 'lss' ),
        'add_new_item'        => __( 'Add New Client', 'lss' ),
        'add_new'             => __( 'Add New', 'lss' ),
        'edit_item'           => __( 'Edit Client', 'lss' ),
        'update_item'         => __( 'Update Client', 'lss' ),
        'search_items'        => __( 'Search Client', 'lss' ),
        'not_found'           => __( 'Not Found', 'lss' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'lss' ),
    );

    // Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'Clients', 'lss' ),
        'description'         => __( 'List of clients', 'lss' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'revisions', 'custom-fields'),

        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type( 'clients', $args );
}
add_action( 'init', 'post_type_clients', 0 );


function post_type_testimonials() {
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Testimonials', 'Post Type General Name', 'lss' ),
        'singular_name'       => _x( 'Testimonials', 'Post Type Singular Name', 'lss' ),
        'menu_name'           => __( 'Testimonials', 'lss' ),
        'parent_item_colon'   => __( 'Parent Client Testimonial', 'lss' ),
        'all_items'           => __( 'All Testimonials', 'lss' ),
        'view_item'           => __( 'View Client Testimonial', 'lss' ),
        'add_new_item'        => __( 'Add New Client Testimonial', 'lss' ),
        'add_new'             => __( 'Add New', 'lss' ),
        'edit_item'           => __( 'Edit Client Testimonial', 'lss' ),
        'update_item'         => __( 'Update Client Testimonial', 'lss' ),
        'search_items'        => __( 'Search Client Testimonial', 'lss' ),
        'not_found'           => __( 'Not Found', 'lss' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'lss' ),
    );

    // Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'Testimonials', 'lss' ),
        'description'         => __( 'List of our team', 'lss' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'revisions', 'custom-fields'),

        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type( 'testimonials', $args );
}
add_action( 'init', 'post_type_testimonials', 0 );

function post_type_case_studies() {
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Case studies', 'Post Type General Name', 'lss' ),
        'singular_name'       => _x( 'Case studies', 'Post Type Singular Name', 'lss' ),
        'menu_name'           => __( 'Case studies', 'lss' ),
        'parent_item_colon'   => __( 'Parent Case study', 'lss' ),
        'all_items'           => __( 'All Case studies', 'lss' ),
        'view_item'           => __( 'View Case study', 'lss' ),
        'add_new_item'        => __( 'Add New Case study', 'lss' ),
        'add_new'             => __( 'Add New', 'lss' ),
        'edit_item'           => __( 'Edit Case study', 'lss' ),
        'update_item'         => __( 'Update Case study', 'lss' ),
        'search_items'        => __( 'Search Case study', 'lss' ),
        'not_found'           => __( 'Not Found', 'lss' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'lss' ),
    );

    // Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'Case studies', 'lss' ),
        'description'         => __( 'List of our case study', 'lss' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'revisions', 'custom-fields'),

        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type( 'case-studies', $args );
}
add_action( 'init', 'post_type_case_studies', 0 );




function lss_theme_support(){


    // Custom background color.
    add_theme_support(
        'custom-background',
        array(
            'default-color' => 'fefefe',
        )
    );



    /*
     * Enable support for Post Thumbnails on posts and pages.
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    // Set post thumbnail size.
    set_post_thumbnail_size( 1200, 9999 );

    // Add custom image size used in Cover Template.
    add_image_size( 'lss-fullscreen', 1980, 9999 );




    // Custom logo.
    $logo_width  = 120;
    $logo_height = 90;

    // If the retina setting is active, double the recommended width and height.
    if ( get_theme_mod( 'retina_logo', false ) ) {
        $logo_width  = floor( $logo_width * 2 );
        $logo_height = floor( $logo_height * 2 );
    }

    add_theme_support(
        'custom-logo',
        array(
            'height'      => $logo_height,
            'width'       => $logo_width,
            'flex-height' => true,
            'flex-width'  => true,
//            'unlink-homepage-logo' => true,
        )
    );



    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );


    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
            'navigation-widgets',
        )
    );

    /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Laurence Simons, use a find and replace
         * to change 'lss' to the name of your theme in all the template files.
         */
    load_theme_textdomain( 'lss' );


    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );

    // Add support for responsive embeds.
    add_theme_support( 'responsive-embeds' );


    /*
	 * Adds starter content to highlight the theme on fresh sites.
	 * This is done conditionally to avoid loading the starter content on every
	 * page load, as it is a one-off operation only needed once in the customizer.
	 */
    if ( is_customize_preview() ) {
        require get_template_directory() . '/inc/starter-content.php';
        add_theme_support( 'starter-content', lss_get_starter_content() );
    }



    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /*
         * Adds `async` and `defer` support for scripts registered or enqueued
         * by the theme.
         */
    $loader = new lss_Script_Loader();
    add_filter( 'script_loader_tag', array( $loader, 'filter_script_loader_tag' ), 10, 2 );

}
add_action( 'after_setup_theme', 'lss_theme_support' );





/**
 * REQUIRED FILES
 * Include required files.
 */
require get_template_directory() . '/inc/template-tags.php';

// Handle SVG icons.
require get_template_directory() . '/classes/class-lss-svg-icons.php';
require get_template_directory() . '/inc/svg-icons.php';

// Handle Customizer settings.
require get_template_directory() . '/classes/class-lss-customize.php';

// Require Separator Control class.
require get_template_directory() . '/classes/class-lss-separator-control.php';

// Custom comment walker.
require get_template_directory() . '/classes/class-lss-walker-comment.php';

// Custom page walker.
require get_template_directory() . '/classes/class-lss-walker-page.php';

// Custom script loader class.
require get_template_directory() . '/classes/class-lss-script-loader.php';

// Non-latin language handling.
require get_template_directory() . '/classes/class-lss-non-latin-languages.php';

// Custom CSS.
require get_template_directory() . '/inc/custom-css.php';

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';



/**
 * REGISTER STYLES
 *
 * @since Laurence Simons 1.0
 */

function lss_register_styles(){
    $theme_version = wp_get_theme()->get( 'Version' );

    // Add CSS
    wp_enqueue_style( 'lss-style', get_template_directory_uri() . '/style.css', array('lss-bulma'), '2.3.4.1', 'all' );

    // Bulma library
    wp_enqueue_style( 'lss-bulma', get_template_directory_uri() . '/bulma.css', null, $theme_version, 'all' );

    // Glidster library
    wp_enqueue_style( 'lss-glidster-min', 'https://cdn.jsdelivr.net/npm/@glidejs/glide@latest/dist/css/glide.core.min.css', null, $theme_version, 'all' );

}

add_action( 'wp_enqueue_scripts', 'lss_register_styles' );




/**
 * REGISTER SCRIPTS
 *
 * @since Laurence Simons 1.0
 */

function lss_register_scripts() {

    $theme_version = wp_get_theme()->get( 'Version' );

    if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    wp_enqueue_script( 'lss-js', get_template_directory_uri() . '/assets/js/index.js', array(), $theme_version, false );
    wp_script_add_data( 'lss-js', 'async', true );

    //--- Ionicons icons library ---//
    wp_enqueue_script( 'lss-ionicons', 'https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.js', array(), $theme_version, true );
    wp_enqueue_script( 'lss-ionicons', 'https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.esm.js', array(), $theme_version, true );

    //--- Jquery ---//
    // need to appear on the header to make sure every functions work correctly
    wp_enqueue_script( 'lss-jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(), $theme_version, true );

    //--- Google map ---//
    wp_enqueue_script( 'lss-googlemap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCukI9AGWDgMrD7POw2FoV1BRXd9htvgv4', array(), $theme_version ); // AIzaSyCukI9AGWDgMrD7POw2FoV1BRXd9htvgv4 // AIzaSyDaKCNJMHkTRujeBW7_XnclUfSpjf96Iv0

    //--- Glidster ---//
    // used for sliders and carousels
    wp_enqueue_script( 'lss-glidsterjs', 'https://cdn.jsdelivr.net/npm/@glidejs/glide@latest/dist/glide.min.js', array('lss-jquery'), $theme_version );


    //--- Tracking Code from LSS | CODE 2 ---//
    //  the following line of code to be executed as part of their cookie consent logic once a visitor consents to using cookies
    wp_enqueue_script( 'lss-tracking', 'https://secure.perk0mean.com/js/sc/168911.js', array(), $theme_version );


}

add_action( 'wp_enqueue_scripts', 'lss_register_scripts' );



/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @since Laurence Simons 1.0
 *
 * @link https://git.io/vWdr2
 */
function lss_skip_link_focus_fix() {
    // The following is minified via `terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
    ?>
    <script>
        /(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
    </script>
    <?php
}
add_action( 'wp_print_footer_scripts', 'lss_skip_link_focus_fix' );




/**
 * Enqueue non-latin language styles.
 *
 * @since Laurence Simons 1.0
 *
 * @return void
 */
function lss_non_latin_languages() {
    $custom_css = lss_Non_Latin_Languages::get_non_latin_css( 'front-end' );

    if ( $custom_css ) {
        wp_add_inline_style( 'lss-style', $custom_css );
    }
}

add_action( 'wp_enqueue_scripts', 'lss_non_latin_languages' );




/**
 * REGISTER MENUS
 *
 * @since Laurence Simons 1.0
 */
function lss_menus() {
    $locations = array(
        'primary'  => __( 'Top horizontal menu', 'lss' ),
        'mobile'   => __( 'Mobile Menu', 'lss' ),
        'footer'   => __( 'Footer Menu', 'lss' ),
        'social'   => __( 'Social Menu', 'lss' ),
    );

    register_nav_menus( $locations );
}

add_action( 'init', 'lss_menus' );




/**
 * Custom Logo
 *
 * @since Laurence Simons 1.0
 *
 * @param string $html The HTML output from get_custom_logo (core function).
 * @return string
 */
function lss_get_custom_logo( $html ) {

    $logo_id = get_theme_mod( 'custom_logo' );

    if ( ! $logo_id ) {
        return $html;
    }

    $logo = wp_get_attachment_image_src( $logo_id, 'full' );

    if ( $logo ) {
        // For clarity.
        $logo_width  = esc_attr( $logo[1] );
        $logo_height = esc_attr( $logo[2] );

        // If the retina logo setting is active, reduce the width/height by half.
        if ( get_theme_mod( 'retina_logo', false ) ) {
            $logo_width  = floor( $logo_width / 2 );
            $logo_height = floor( $logo_height / 2 );

            $search = array(
                '/width=\"\d+\"/iU',
                '/height=\"\d+\"/iU',
            );

            $replace = array(
                "width=\"{$logo_width}\"",
                "height=\"{$logo_height}\"",
            );

            // Add a style attribute with the height, or append the height to the style attribute if the style attribute already exists.
            if ( strpos( $html, ' style=' ) === false ) {
                $search[]  = '/(src=)/';
                $replace[] = "style=\"height: {$logo_height}px;\" src=";
            } else {
                $search[]  = '/(style="[^"]*)/';
                $replace[] = "$1 height: {$logo_height}px;";
            }

            $html = preg_replace( $search, $replace, $html );

        }
    }

    return $html;

}

add_filter( 'get_custom_logo', 'lss_get_custom_logo' );



/**
 * WP BODY OPEN ************************************************
 *
 * @since Laurence Simons 1.0
 */
if ( ! function_exists( 'wp_body_open' ) ) {

    /**
     * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
     *
     * @since Laurence Simons 1.0
     */
    function wp_body_open() {
        /** This action is documented in wp-includes/general-template.php */
        do_action( 'wp_body_open' );
    }
}
/**
 * Include a skip to content link at the top of the page so that users can bypass the menu.
 *
 * @since Laurence Simons 1.0
 */
function lss_skip_link() {
    echo '<a class="skip-link screen-reader-text" href="#site-content">' . __( 'Skip to the content', 'lss' ) . '</a>';
}

add_action( 'wp_body_open', 'lss_skip_link', 5 );





/**
 * REGISTER SIDEBAR / WIDGET AREA
 *
 * @since Laurence Simons 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lss_sidebar_registration() {

    // Arguments used in all register_sidebar() calls.
    $shared_args = array(
        'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
        'after_title'   => '</h2>',
        'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
        'after_widget'  => '</div></div>',
    );

    // Footer #1.
    register_sidebar(
        array_merge(
            $shared_args,
            array(
                'name'        => __( 'Footer #1', 'lss' ),
                'id'          => 'sidebar-1',
                'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'lss' ),
            )
        )
    );

    // Footer #2.
    register_sidebar(
        array_merge(
            $shared_args,
            array(
                'name'        => __( 'Footer #2', 'lss' ),
                'id'          => 'sidebar-2',
                'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'lss' ),
            )
        )
    );

}

add_action( 'widgets_init', 'lss_sidebar_registration' );




/**
 * ENQUEUE BLOCK EDITOR ASSETS ************************************************
 *
 * @since Laurence Simons 1.0
 */
function lss_block_editor_styles() {

    // Enqueue the editor styles.
    wp_enqueue_style( 'lss-block-editor-styles', get_theme_file_uri( '/assets/css/editor-style-block.css' ), array(), wp_get_theme()->get( 'Version' ), 'all' );
    wp_style_add_data( 'lss-block-editor-styles', 'rtl', 'replace' );

    // Add inline style from the Customizer.
    wp_add_inline_style( 'lss-block-editor-styles', lss_get_customizer_css( 'block-editor' ) );

    // Add inline style for non-latin fonts.
    wp_add_inline_style( 'lss-block-editor-styles', lss_Non_Latin_Languages::get_non_latin_css( 'block-editor' ) );

    // Enqueue the editor script.
    wp_enqueue_script( 'lss-block-editor-script', get_theme_file_uri( '/assets/js/editor-script-block.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}

add_action( 'enqueue_block_editor_assets', 'lss_block_editor_styles', 1, 1 );




/**
 * ENQUEUE CLASSIC EDITOR STYLES ************************************************
 *
 * @since Laurence Simons 1.0
 */
function lss_classic_editor_styles() {

    $classic_editor_styles = array(
        '/assets/css/editor-style-classic.css',
    );

    add_editor_style( $classic_editor_styles );

}

add_action( 'init', 'lss_classic_editor_styles' );

/**
 * Output Customizer settings in the classic editor.
 * Adds styles to the head of the TinyMCE iframe. Kudos to @Otto42 for the original solution.
 *
 * @since Laurence Simons 1.0
 *
 * @param array $mce_init TinyMCE styles.
 * @return array TinyMCE styles.
 */
function lss_add_classic_editor_customizer_styles( $mce_init ) {

    $styles = lss_get_customizer_css( 'classic-editor' );

    if ( ! isset( $mce_init['content_style'] ) ) {
        $mce_init['content_style'] = $styles . ' ';
    } else {
        $mce_init['content_style'] .= ' ' . $styles . ' ';
    }

    return $mce_init;

}

add_filter( 'tiny_mce_before_init', 'lss_add_classic_editor_customizer_styles' );

/**
 * Output non-latin font styles in the classic editor.
 * Adds styles to the head of the TinyMCE iframe. Kudos to @Otto42 for the original solution.
 *
 * @param array $mce_init TinyMCE styles.
 * @return array TinyMCE styles.
 */
function lss_add_classic_editor_non_latin_styles( $mce_init ) {

    $styles = lss_Non_Latin_Languages::get_non_latin_css( 'classic-editor' );

    // Return if there are no styles to add.
    if ( ! $styles ) {
        return $mce_init;
    }

    if ( ! isset( $mce_init['content_style'] ) ) {
        $mce_init['content_style'] = $styles . ' ';
    } else {
        $mce_init['content_style'] .= ' ' . $styles . ' ';
    }

    return $mce_init;

}

add_filter( 'tiny_mce_before_init', 'lss_add_classic_editor_non_latin_styles' );




/**
 * BLOCK EDITOR SETTINGS ************************************************
 * Add custom colors and font sizes to the block editor.
 *
 * @since Laurence Simons 1.0
 */
function lss_block_editor_settings() {

    // Block Editor Palette.
    $editor_color_palette = array(
        array(
            'name'  => __( 'Accent Color', 'lss' ),
            'slug'  => 'accent',
            'color' => lss_get_color_for_area( 'content', 'accent' ),
        ),
        array(
            'name'  => _x( 'Primary', 'color', 'lss' ),
            'slug'  => 'primary',
            'color' => lss_get_color_for_area( 'content', 'text' ),
        ),
        array(
            'name'  => _x( 'Secondary', 'color', 'lss' ),
            'slug'  => 'secondary',
            'color' => lss_get_color_for_area( 'content', 'secondary' ),
        ),
        array(
            'name'  => __( 'Subtle Background', 'lss' ),
            'slug'  => 'subtle-background',
            'color' => lss_get_color_for_area( 'content', 'borders' ),
        ),
    );

    // Add the background option.
    $background_color = get_theme_mod( 'background_color' );
    if ( ! $background_color ) {
        $background_color_arr = get_theme_support( 'custom-background' );
        $background_color     = $background_color_arr[0]['default-color'];
    }
    $editor_color_palette[] = array(
        'name'  => __( 'Background Color', 'lss' ),
        'slug'  => 'background',
        'color' => '#' . $background_color,
    );

    // If we have accent colors, add them to the block editor palette.
    if ( $editor_color_palette ) {
        add_theme_support( 'editor-color-palette', $editor_color_palette );
    }

    // Block Editor Font Sizes.
    add_theme_support(
        'editor-font-sizes',
        array(
            array(
                'name'      => _x( 'Small', 'Name of the small font size in the block editor', 'lss' ),
                'shortName' => _x( 'S', 'Short name of the small font size in the block editor.', 'lss' ),
                'size'      => 18,
                'slug'      => 'small',
            ),
            array(
                'name'      => _x( 'Regular', 'Name of the regular font size in the block editor', 'lss' ),
                'shortName' => _x( 'M', 'Short name of the regular font size in the block editor.', 'lss' ),
                'size'      => 21,
                'slug'      => 'normal',
            ),
            array(
                'name'      => _x( 'Large', 'Name of the large font size in the block editor', 'lss' ),
                'shortName' => _x( 'L', 'Short name of the large font size in the block editor.', 'lss' ),
                'size'      => 26.25,
                'slug'      => 'large',
            ),
            array(
                'name'      => _x( 'Larger', 'Name of the larger font size in the block editor', 'lss' ),
                'shortName' => _x( 'XL', 'Short name of the larger font size in the block editor.', 'lss' ),
                'size'      => 32,
                'slug'      => 'larger',
            ),
        )
    );

    add_theme_support( 'editor-styles' );

    // If we have a dark background color then add support for dark editor style.
    // We can determine if the background color is dark by checking if the text-color is white.
    if ( '#ffffff' === strtolower( lss_get_color_for_area( 'content', 'text' ) ) ) {
        add_theme_support( 'dark-editor-style' );
    }

}
add_action( 'after_setup_theme', 'lss_block_editor_settings' );

/**
 * Overwrite default more tag with styling and screen reader markup.
 *
 * @param string $html The default output HTML for the more tag.
 * @return string
 */
function lss_read_more_tag( $html ) {
    return preg_replace( '/<a(.*)>(.*)<\/a>/iU', sprintf( '<div class="read-more-button-wrap"><a$1><span class="faux-button">$2</span> <span class="screen-reader-text">"%1$s"</span></a></div>', get_the_title( get_the_ID() ) ), $html );
}

add_filter( 'the_content_more_link', 'lss_read_more_tag' );

/**
 * Enqueues scripts for customizer controls & settings.
 *
 * @since Laurence Simons 1.0
 *
 * @return void
 */
function lss_customize_controls_enqueue_scripts() {
    $theme_version = wp_get_theme()->get( 'Version' );

    // Add main customizer js file.
    wp_enqueue_script( 'lss-customize', get_template_directory_uri() . '/assets/js/customize.js', array( 'jquery' ), $theme_version, false );

    // Add script for color calculations.
    wp_enqueue_script( 'lss-color-calculations', get_template_directory_uri() . '/assets/js/color-calculations.js', array( 'wp-color-picker' ), $theme_version, false );

    // Add script for controls.
    wp_enqueue_script( 'lss-customize-controls', get_template_directory_uri() . '/assets/js/customize-controls.js', array( 'lss-color-calculations', 'customize-controls', 'underscore', 'jquery' ), $theme_version, false );
    wp_localize_script( 'lss-customize-controls', 'lssBgColors', lss_get_customizer_color_vars() );
}

add_action( 'customize_controls_enqueue_scripts', 'lss_customize_controls_enqueue_scripts' );

/**
 * Enqueue scripts for the customizer preview.
 *
 * @since Laurence Simons 1.0
 *
 * @return void
 */
function lss_customize_preview_init() {
    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_script( 'lss-customize-preview', get_theme_file_uri( '/assets/js/customize-preview.js' ), array( 'customize-preview', 'customize-selective-refresh', 'jquery' ), $theme_version, true );
    wp_localize_script( 'lss-customize-preview', 'lssPreviewEls', lss_get_elements_array() );
}

add_action( 'customize_preview_init', 'lss_customize_preview_init' );

/**
 * Get accessible color for an area.
 *
 * @since Laurence Simons 1.0
 *
 * @param string $area    The area we want to get the colors for.
 * @param string $context Can be 'text' or 'accent'.
 * @return string Returns a HEX color.
 */
function lss_get_color_for_area( $area = 'content', $context = 'text' ) {

    // Get the value from the theme-mod.
    $settings = get_theme_mod(
        'accent_accessible_colors',
        array(
            'content'       => array(
                'text'      => '#000000',
                'accent'    => '#cd2653',
                'secondary' => '#6d6d6d',
                'borders'   => '#dcd7ca',
            ),
            'header-footer' => array(
                'text'      => '#000000',
                'accent'    => '#cd2653',
                'secondary' => '#6d6d6d',
                'borders'   => '#dcd7ca',
            ),
        )
    );

    // If we have a value return it.
    if ( isset( $settings[ $area ] ) && isset( $settings[ $area ][ $context ] ) ) {
        return $settings[ $area ][ $context ];
    }

    // Return false if the option doesn't exist.
    return false;
}


/**
 * Returns an array of variables for the customizer preview.
 *
 * @since Laurence Simons 1.0
 *
 * @return array
 */
function lss_get_customizer_color_vars() {
    $colors = array(
        'content'       => array(
            'setting' => 'background_color',
        ),
        'header-footer' => array(
            'setting' => 'header_footer_background_color',
        ),
    );
    return $colors;
}


/**
 * Get an array of elements.
 *
 * @since Laurence Simons 1.0
 *
 * @return array
 */
function lss_get_elements_array() {

    // The array is formatted like this:
    // [key-in-saved-setting][sub-key-in-setting][css-property] = [elements].
    $elements = array(
        'content'       => array(
            'accent'     => array(
                'color'            => array( '.color-accent', '.color-accent-hover:hover', '.color-accent-hover:focus', ':root .has-accent-color', '.has-drop-cap:not(:focus):first-letter', '.wp-block-button.is-style-outline', 'a' ),
                'border-color'     => array( 'blockquote', '.border-color-accent', '.border-color-accent-hover:hover', '.border-color-accent-hover:focus' ),
                'background-color' => array( 'button', '.button', '.faux-button', '.wp-block-button__link', '.wp-block-file .wp-block-file__button', 'input[type="button"]', 'input[type="reset"]', 'input[type="submit"]', '.bg-accent', '.bg-accent-hover:hover', '.bg-accent-hover:focus', ':root .has-accent-background-color', '.comment-reply-link' ),
                'fill'             => array( '.fill-children-accent', '.fill-children-accent *' ),
            ),
            'background' => array(
                'color'            => array( ':root .has-background-color', 'button', '.button', '.faux-button', '.wp-block-button__link', '.wp-block-file__button', 'input[type="button"]', 'input[type="reset"]', 'input[type="submit"]', '.wp-block-button', '.comment-reply-link', '.has-background.has-primary-background-color:not(.has-text-color)', '.has-background.has-primary-background-color *:not(.has-text-color)', '.has-background.has-accent-background-color:not(.has-text-color)', '.has-background.has-accent-background-color *:not(.has-text-color)' ),
                'background-color' => array( ':root .has-background-background-color' ),
            ),
            'text'       => array(
                'color'            => array( 'body', '.entry-title a', ':root .has-primary-color' ),
                'background-color' => array( ':root .has-primary-background-color' ),
            ),
            'secondary'  => array(
                'color'            => array( 'cite', 'figcaption', '.wp-caption-text', '.post-meta', '.entry-content .wp-block-archives li', '.entry-content .wp-block-categories li', '.entry-content .wp-block-latest-posts li', '.wp-block-latest-comments__comment-date', '.wp-block-latest-posts__post-date', '.wp-block-embed figcaption', '.wp-block-image figcaption', '.wp-block-pullquote cite', '.comment-metadata', '.comment-respond .comment-notes', '.comment-respond .logged-in-as', '.pagination .dots', '.entry-content hr:not(.has-background)', 'hr.styled-separator', ':root .has-secondary-color' ),
                'background-color' => array( ':root .has-secondary-background-color' ),
            ),
            'borders'    => array(
                'border-color'        => array( 'pre', 'fieldset', 'input', 'textarea', 'table', 'table *', 'hr' ),
                'background-color'    => array( 'caption', 'code', 'code', 'kbd', 'samp', '.wp-block-table.is-style-stripes tbody tr:nth-child(odd)', ':root .has-subtle-background-background-color' ),
                'border-bottom-color' => array( '.wp-block-table.is-style-stripes' ),
                'border-top-color'    => array( '.wp-block-latest-posts.is-grid li' ),
                'color'               => array( ':root .has-subtle-background-color' ),
            ),
        ),
        'header-footer' => array(
            'accent'     => array(
                'color'            => array( 'body:not(.overlay-header) .primary-menu > li > a', 'body:not(.overlay-header) .primary-menu > li > .icon', '.modal-menu a', '.footer-menu a, .footer-widgets a', '#site-footer .wp-block-button.is-style-outline', '.wp-block-pullquote:before', '.singular:not(.overlay-header) .entry-header a', '.archive-header a', '.header-footer-group .color-accent', '.header-footer-group .color-accent-hover:hover' ),
                'background-color' => array( '.social-icons a', '#site-footer button:not(.toggle)', '#site-footer .button', '#site-footer .faux-button', '#site-footer .wp-block-button__link', '#site-footer .wp-block-file__button', '#site-footer input[type="button"]', '#site-footer input[type="reset"]', '#site-footer input[type="submit"]' ),
            ),
            'background' => array(
                'color'            => array( '.social-icons a', 'body:not(.overlay-header) .primary-menu ul', '.header-footer-group button', '.header-footer-group .button', '.header-footer-group .faux-button', '.header-footer-group .wp-block-button:not(.is-style-outline) .wp-block-button__link', '.header-footer-group .wp-block-file__button', '.header-footer-group input[type="button"]', '.header-footer-group input[type="reset"]', '.header-footer-group input[type="submit"]' ),
                'background-color' => array( '#site-header', '.footer-nav-widgets-wrapper', '#site-footer', '.menu-modal', '.menu-modal-inner', '.search-modal-inner', '.archive-header', '.singular .entry-header', '.singular .featured-media:before', '.wp-block-pullquote:before' ),
            ),
            'text'       => array(
                'color'               => array( '.header-footer-group', 'body:not(.overlay-header) #site-header .toggle', '.menu-modal .toggle' ),
                'background-color'    => array( 'body:not(.overlay-header) .primary-menu ul' ),
                'border-bottom-color' => array( 'body:not(.overlay-header) .primary-menu > li > ul:after' ),
                'border-left-color'   => array( 'body:not(.overlay-header) .primary-menu ul ul:after' ),
            ),
            'secondary'  => array(
                'color' => array( '.site-description', 'body:not(.overlay-header) .toggle-inner .toggle-text', '.widget .post-date', '.widget .rss-date', '.widget_archive li', '.widget_categories li', '.widget cite', '.widget_pages li', '.widget_meta li', '.widget_nav_menu li', '.powered-by-wordpress', '.to-the-top', '.singular .entry-header .post-meta', '.singular:not(.overlay-header) .entry-header .post-meta a' ),
            ),
            'borders'    => array(
                'border-color'     => array( '.header-footer-group pre', '.header-footer-group fieldset', '.header-footer-group input', '.header-footer-group textarea', '.header-footer-group table', '.header-footer-group table *', '.footer-nav-widgets-wrapper', '#site-footer', '.menu-modal nav *', '.footer-widgets-outer-wrapper', '.footer-top' ),
                'background-color' => array( '.header-footer-group table caption', 'body:not(.overlay-header) .header-inner .toggle-wrapper::before' ),
            ),
        ),
    );

    /**
     * Filters Laurence Simons theme elements.
     *
     * @since Laurence Simons 1.0
     *
     * @param array Array of elements.
     */
    return apply_filters( 'lss_get_elements_array', $elements );
}


// remove posts as they don't work
function remove_menu () 
{
   remove_menu_page('edit.php');
} 

add_action('admin_menu', 'remove_menu');



function add_query_vars_filter( $vars ) {
    $vars[] = "news-cat";
    return $vars;
  }
  add_filter( 'query_vars', 'add_query_vars_filter' );



function truncated($text, $excerpt_length) {
    global $post;
    if ( '' != $text ) {
        $text = strip_shortcodes( $text );
//        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]>>', $text);
        $text_length = strlen($text); // Get text length (characters)
        $excerpt_more = '...';

        // Shorten the text
        $text = substr($text, 0, $excerpt_length);

        // If the text is more than 50 characters, append $excerpt_more
        if ($text_length > $excerpt_length) {
            $text .= $excerpt_more;
        }

    }
    return $text;
}



?>