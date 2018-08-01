<?php
//	Registers the Widgets and Sidebars for the site
function ana_widgets_init() {
	register_sidebar(array(
		'name' => 'blog-sidebar-area',
		'id' => 'blog-sidebar-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => 'footer-first-sidebar-area',
		'id' => 'footer-first-sidebar-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => 'footer-second-sidebar-area',
		'id' => 'footer-second-sidebar-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => 'footer-third-sidebar-area',
		'id' => 'footer-third-sidebar-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}
add_action( 'widgets_init', 'ana_widgets_init' );


/***************register nav menus*********************/
function analytical_lite_nav_menus_call() {
	register_nav_menus( array(
		'Header' => __( 'Primary Navigation','analytical-lite'),
	));
}
add_action( 'after_setup_theme', 'analytical_lite_nav_menus_call' ); 

/***** Make theme available for translation ****/
// Translations can be filed in the /lang/ directory

function ana_lang_setup(){
	load_theme_textdomain('analytical-lite', get_template_directory() . '/languages');

	// This theme allows users to set a custom header.
	add_theme_support( 'custom-header', array( 'flex-width' => true, 'width' => 1600, 'flex-height' => true, 'height' => 750, 'default-image' => get_template_directory_uri() . '/images/header.png') );

    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	
	// This theme allows users to set a custom background.
	add_theme_support( 'custom-background', apply_filters( 'connexions_lite_custom_background_args', array('default-color' => 'ffffff', ) ) );
	require get_template_directory() . '/inc/admin/welcome-screen/welcome-screen.php';

}
add_action('after_setup_theme', 'ana_lang_setup');

/**
* Funtion to add CSS class to body
*/
function ana_add_class( $classes ) {

		global $shortname;
		
	if ( 'page' == get_option( 'show_on_front' ) && ( '' != get_option( 'page_for_posts' ) ) && is_front_page() ) {
		$classes[] = 'front-page';
	}
		if(is_page_template('template-gallery.php')){ $skeGtemp = "skegallery"; } else{ $skeGtemp = "";}
	    $classes[] = get_theme_mod('_layout_struc','ls_left').' '.$skeGtemp.' analytical-lite';
	return $classes;
}
add_filter( 'body_class','ana_add_class' );


/**
 * Add Config File 
 */
require_once get_template_directory() . '/SketchBoard/functions/admin-init.php';

/**
 * Add Customizer 
 */
require get_template_directory() . '/inc/customizer.php';
