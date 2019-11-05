<?php
if ( ! function_exists( 'hp_wp_setup' ) ) :

function hp_wp_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'hp_wp', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// Add menus.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'hp_wp' ),
		'social'  => __( 'Social Links Menu', 'hp_wp' ),
	) );
	/*
	 * Register custom menu locations
	 */
	register_nav_menu(  'primary', __( 'Main Navigation', 'hp_wp' )  );
	register_nav_menu(  'footer', __( 'Footer Menu', 'hp_wp' )  );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	/*
	 * Enable support for Page excerpts.
	 */
	 add_post_type_support( 'page', 'excerpt' );
}
endif; // hp_wp_setup

add_action( 'after_setup_theme', 'hp_wp_setup' );

// Register Events Custom Post Type
function events_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'hp_wp' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'hp_wp' ),
		'menu_name'             => __( 'Events', 'hp_wp' ),
		'name_admin_bar'        => __( 'Event', 'hp_wp' ),
		'archives'              => __( 'Events Archives', 'hp_wp' ),
		'attributes'            => __( 'Events Attributes', 'hp_wp' ),
		'parent_item_colon'     => __( 'Parent Item:', 'hp_wp' ),
		'all_items'             => __( 'All Events', 'hp_wp' ),
		'add_new_item'          => __( 'Add New Event', 'hp_wp' ),
		'add_new'               => __( 'Add New', 'hp_wp' ),
		'new_item'              => __( 'New Event', 'hp_wp' ),
		'edit_item'             => __( 'Edit Event', 'hp_wp' ),
		'update_item'           => __( 'Update Event', 'hp_wp' ),
		'view_item'             => __( 'View Event', 'hp_wp' ),
		'view_items'            => __( 'View Events', 'hp_wp' ),
		'search_items'          => __( 'Search Event', 'hp_wp' ),
		'not_found'             => __( 'Not found', 'hp_wp' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'hp_wp' ),
		'featured_image'        => __( 'Featured Event Image', 'hp_wp' ),
		'set_featured_image'    => __( 'Set featured event image', 'hp_wp' ),
		'remove_featured_image' => __( 'Remove featured event image', 'hp_wp' ),
		'use_featured_image'    => __( 'Use as featured event image', 'hp_wp' ),
		'insert_into_item'      => __( 'Insert into item', 'hp_wp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this event', 'hp_wp' ),
		'items_list'            => __( 'Events list', 'hp_wp' ),
		'items_list_navigation' => __( 'Events list navigation', 'hp_wp' ),
		'filter_items_list'     => __( 'Filter Events list', 'hp_wp' ),
	);
	$args = array(
		'label'                 => __( 'Event', 'hp_wp' ),
		'description'           => __( 'Heart and Paw Events', 'hp_wp' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'events', $args );

}
add_action( 'init', 'events_custom_post_type', 0 );

// Register Locations Custom Post Type
function locations_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Locations', 'Post Type General Name', 'hp_wp' ),
		'singular_name'         => _x( 'Location', 'Post Type Singular Name', 'hp_wp' ),
		'menu_name'             => __( 'Locations', 'hp_wp' ),
		'name_admin_bar'        => __( 'Location', 'hp_wp' ),
		'archives'              => __( 'Locations Archives', 'hp_wp' ),
		'attributes'            => __( 'Locations Attributes', 'hp_wp' ),
		'parent_item_colon'     => __( 'Parent Item:', 'hp_wp' ),
		'all_items'             => __( 'All Locations', 'hp_wp' ),
		'add_new_item'          => __( 'Add New Location', 'hp_wp' ),
		'add_new'               => __( 'Add New', 'hp_wp' ),
		'new_item'              => __( 'New Location', 'hp_wp' ),
		'edit_item'             => __( 'Edit Location', 'hp_wp' ),
		'update_item'           => __( 'Update Location', 'hp_wp' ),
		'view_item'             => __( 'View Location', 'hp_wp' ),
		'view_items'            => __( 'View Locations', 'hp_wp' ),
		'search_items'          => __( 'Search Location', 'hp_wp' ),
		'not_found'             => __( 'Not found', 'hp_wp' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'hp_wp' ),
		'featured_image'        => __( 'Featured Location Image', 'hp_wp' ),
		'set_featured_image'    => __( 'Set featured event image', 'hp_wp' ),
		'remove_featured_image' => __( 'Remove featured event image', 'hp_wp' ),
		'use_featured_image'    => __( 'Use as featured event image', 'hp_wp' ),
		'insert_into_item'      => __( 'Insert into item', 'hp_wp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this event', 'hp_wp' ),
		'items_list'            => __( 'Locations list', 'hp_wp' ),
		'items_list_navigation' => __( 'Locations list navigation', 'hp_wp' ),
		'filter_items_list'     => __( 'Filter Locations list', 'hp_wp' ),
	);
	$args = array(
		'label'                 => __( 'Location', 'hp_wp' ),
		'description'           => __( 'Heart and Paw Locations', 'hp_wp' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-location-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'locations', $args );

}
add_action( 'init', 'locations_custom_post_type', 0 );


if ( ! function_exists( 'hp_wp_init' ) ) :

function hp_wp_init() {

	
	// Use categories and tags with attachments
	register_taxonomy_for_object_type( 'category', 'attachment' );
	register_taxonomy_for_object_type( 'post_tag', 'attachment' );

}
endif; // hp_wp_setup

add_action( 'init', 'hp_wp_init' );

if ( ! function_exists( 'hp_wp_widgets_init' ) ) :

function hp_wp_widgets_init() {

	/*
	 * Register widget areas.
	 */

	register_sidebar( array(
		'name'          => __( 'Footer One', 'hp_wp' ),
		'id'            => 'footer_one',
		'description'   => 'Footer Left',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>'
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Two', 'hp_wp' ),
		'id'            => 'footer_two',
		'description'   => 'Footer Center',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>'
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Right', 'hp_wp' ),
		'id'            => 'footer_three',
		'description'   => 'Footer Right',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>'
	) );

}
add_action( 'widgets_init', 'hp_wp_widgets_init' );
endif;// hp_wp_widgets_init



if ( ! function_exists( 'hp_wp_customize_register' ) ) :

function hp_wp_customize_register( $wp_customize ) {
	// Do stuff with $wp_customize, the WP_Customize_Manager object.

	$wp_customize->add_section( 'hp_logo', array(
		'title' => __( 'Logos', 'hp_wp' )
	));

	$wp_customize->add_section( 'app_cta', array(
		'title' => __( 'App Call to Action', 'hp_wp' )
	));
	$pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

	$wp_customize->add_setting( 'desktop_logo', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'desktop_logo', array(
		'label' => __( 'Desktop Logo', 'hp_wp' ),
		'type' => 'media',
		'mime_type' => 'image',
		'section' => 'hp_logo'
	) ) );

	$wp_customize->add_setting( 'mobile_logo', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'mobile_logo', array(
		'label' => __( 'Mobile Logo', 'hp_wp' ),
		'type' => 'media',
		'mime_type' => 'image',
		'section' => 'hp_logo'
	) ) );

	$wp_customize->add_setting( 'app_image', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'app_image', array(
		'label' => __( 'App Image', 'hp_wp' ),
		'type' => 'media',
		'mime_type' => 'image',
		'section' => 'app_cta'
	) ) );

	$wp_customize->add_setting( 'app_heading', array(
		'type' => 'theme_mod',
		'default' => __( 'We are your partners in pet parenthood.', 'hp_wp' ),
		'sanitize_callback' => $pgwp_sanitize
	));

	$wp_customize->add_control( 'app_heading', array(
		'label' => __( 'Heading', 'hp_wp' ),
		'type' => 'text',
		'section' => 'app_cta'
	));

	$wp_customize->add_setting( 'app_sub_heading', array(
		'type' => 'theme_mod',
		'default' => __( 'Coming soon on the web, iOS, and Android.', 'hp_wp' ),
		'sanitize_callback' => $pgwp_sanitize
	));

	$wp_customize->add_control( 'app_sub_heading', array(
		'label' => __( 'App Sub Heading', 'hp_wp' ),
		'type' => 'text',
		'section' => 'app_cta'
	));

	$wp_customize->add_setting( 'app_download_one', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'app_download_one', array(
		'label' => __( 'Download Button One', 'hp_wp' ),
		'type' => 'media',
		'mime_type' => 'image',
		'section' => 'app_cta'
	) ) );

	$wp_customize->add_setting( 'app_download_one_link', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

	$wp_customize->add_control( 'app_download_one_link', array(
		'label' => __( 'Download Link', 'hp_wp' ),
		'type' => 'url',
		'section' => 'app_cta'
	));

	$wp_customize->add_setting( 'app_download_two', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'app_download_two', array(
		'label' => __( 'Download Button Two', 'hp_wp' ),
		'type' => 'media',
		'mime_type' => 'image',
		'section' => 'app_cta'
	) ) );

	$wp_customize->add_setting( 'app_download_two_link', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

	$wp_customize->add_control( 'app_download_two_link', array(
		'label' => __( 'Download Link Two', 'hp_wp' ),
		'type' => 'url',
		'section' => 'app_cta'
	));

}
add_action( 'customize_register', 'hp_wp_customize_register' );
endif;// hp_wp_customize_register


if ( ! function_exists( 'hp_wp_enqueue_scripts' ) ) :
	function hp_wp_enqueue_scripts() {

		wp_enqueue_script( 'jquery' );
		wp_deregister_script( 'bootstrapbundle' );
		wp_enqueue_script( 'bootstrapbundle', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', false, null, true);

		wp_deregister_script( 'jqueryeasing' );
		wp_enqueue_script( 'jqueryeasing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', false, null, true);

		wp_deregister_script( 'jqbootstrapvalidation' );
		wp_enqueue_script( 'jqbootstrapvalidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', false, null, true);

		wp_deregister_script( 'freelancer' );
		wp_enqueue_script( 'freelancer', get_template_directory_uri() . '/js/freelancer.min.js', false, null, true);

		wp_deregister_style( 'all' );
		wp_enqueue_style( 'all', get_template_directory_uri() . '/vendor/fontawesome-free/css/all.min.css', false, null, 'all');

		wp_deregister_style( 'freelancer' );
		wp_enqueue_style( 'freelancer', get_template_directory_uri() . '/css/freelancer.min.css', false, null, 'all');

		wp_deregister_style( 'style' );
		wp_enqueue_style( 'style', get_bloginfo('stylesheet_url'), false, null, 'all');

	}
	add_action( 'wp_enqueue_scripts', 'hp_wp_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }

	require_once "inc/wp_pg_helpers.php";
	require_once "inc/wp_smart_navwalker.php";

?>
