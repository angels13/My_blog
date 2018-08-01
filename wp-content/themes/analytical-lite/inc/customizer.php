<?php

function analytical_lite_customize_register( $wp_customize ) {

	// define image directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	// Do stuff with $wp_customize, the WP_Customize_Manager object.
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	$wp_customize->remove_control('header_textcolor');
	
	// ====================================
	// = Background Image Size for custom-background
	// ====================================
	$wp_customize->add_setting( 'background_size', array(
		'default'        => 'cover',
		'theme_supports' => 'custom-background',
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	));
	$wp_customize->add_control('background_size', array(
		'label' => __('Background Image Size','analytical-lite'),
		'section' => 'background_image',
	));

	// ====================================
	// = Analytical Lite Theme Pannel
	// ====================================
	$wp_customize->add_panel( 'analytical_lite_settings', array(
		'title' => __( 'Analytical Lite Settings', 'analytical-lite'),
		'priority' => 10,
	) );

	// ====================================
	// = General Settings Sections
	// ====================================
	$wp_customize->add_section( 'general_settings_section' , array(
		'title' => __('General Settings','analytical-lite'),
		'panel' => 'analytical_lite_settings',
	) );
	// Choose 
	$wp_customize->add_setting( '_layout_struc', array(
		'default'           => 'ls_left',
		'sanitize_callback' => 'analytical_lite_sanitize_layout',
	) );
	$wp_customize->add_control( '_layout_struc', array(
		'label' => __( 'Layout Structure', 'analytical-lite' ),
		'section' => 'general_settings_section',
		'type' => 'select',
		'choices' => array(
			'ls_top' => __('Top Header', 'analytical-lite'),
			'ls_left' => __('Left Header', 'analytical-lite')
		)
	) );
	// Choose Primary Skin
	$wp_customize->add_setting( '_base_color', array(
		'default'           => '#00a6ff',
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, '_base_color', array(
		'label'      => __( 'Change the base color', 'analytical-lite' ),
		'section'    => 'general_settings_section',
		)
	) );
	// Choose Secondary Skin
	$wp_customize->add_setting( '_base_color2', array(
		'default'           => '#b4eafa',
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, '_base_color2', array(
		'label'      => __( 'Change the base color 2.', 'analytical-lite' ),
		'section'    => 'general_settings_section',
		)
	) );
	// Logo Image
	$wp_customize->add_setting( '_logo_img', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, '_logo_img', array(
		'label' => __( 'Change Logo','analytical-lite'),
		'description' => "240x78 px",
		'section' => 'general_settings_section',
		'mime_type' => 'image',
	) ) );
	// Persistent Logo Image
	$wp_customize->add_setting( '_flogo_img', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, '_flogo_img', array(
		'label' => __( 'Change Persistent header logo','analytical-lite'),
		'description' => "120x40 px",
		'section' => 'general_settings_section',
		'mime_type' => 'image',
	) ) );
	// 
	$wp_customize->add_setting( '_sconus_content', array(
		'default'        => '(+40) 111 222 333<br />test@test.com<br />the address<br />city, state<br />',
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_sconus_content', array(
		'label' => __('Sidebar Contact Us Content','analytical-lite'),
		'description' => __('for "Left Header" layout structure','analytical-lite'),
		'section' => 'general_settings_section',
		'type' => 'textarea',
	));
	// Pagination
	$wp_customize->add_setting( '_show_pagenavi', array(
		'default'           => 'on',
		'sanitize_callback' => 'analytical_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( '_show_pagenavi', array(
		'label' => __( 'Custom Pagination', 'analytical-lite' ),
		'section' => 'general_settings_section',
		'type' => 'radio',
		'choices' => array(
			'on' =>'ON',
			'off'=> 'OFF'
		),
	) );

	// ====================================
	// = Navigation Settings Sections
	// ====================================
	$wp_customize->add_section( 'navigation_settings_section' , array(
		'title' => __('Navigation Settings', 'analytical-lite'),
		'panel' => 'analytical_lite_settings',
	) );
	// Choose Even color
	$wp_customize->add_setting( '_nav_eitem', array(
		'default'           => '#1d95cf',
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, '_nav_eitem', array(
		'label'      => __( 'Navigation Even-item BG-Color.', 'analytical-lite' ),
		'section'    => 'navigation_settings_section',
		)
	) );
	// Choose Odd color
	$wp_customize->add_setting( '_nav_oitem', array(
		'default'           => '#75c6eb',
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, '_nav_oitem', array(
		'label'      => __( 'Navigation Odd-item BG-Color.', 'analytical-lite' ),
		'section'    => 'navigation_settings_section',
		)
	) );
	// Persistent navigation
	$wp_customize->add_setting( '_skenavfull', array(
		'default'           => 'on',
		'sanitize_callback' => 'analytical_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( '_skenavfull', array(
		'label' => __( 'Enable persistent header navigation menu', 'analytical-lite' ),
		'section' => 'navigation_settings_section',
		'type' => 'radio',
		'choices' => array(
			'on' =>'ON',
			'off'=> 'OFF'
		),
	) );

	// ====================================
	// = Social Links Settings Sections
	// ====================================
	$wp_customize->add_section( 'social_links_settings_section' , array(
		'title' => __('Social Links Settings','analytical-lite'),
		'panel' => 'analytical_lite_settings',
	) );
	//  Facebook
	$wp_customize->add_setting( '_fbook_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_fbook_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links_settings_section',
		'label'    		=> __( 'Facebook URL', 'analytical-lite' ),
	) );
	// Twitter
	$wp_customize->add_setting( '_twitter_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_twitter_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links_settings_section',
		'label'    		=> __( 'Twitter URL', 'analytical-lite' ),
	) );
	// Goggle+
	$wp_customize->add_setting( '_gplus_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_gplus_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links_settings_section',
		'label'    		=> __( 'Google+ URL', 'analytical-lite' ),
	) );
	// Youtube
	$wp_customize->add_setting( '_ytube_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_ytube_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links_settings_section',
		'label'    		=> __( 'Youtube URL', 'analytical-lite' ),
	) );
	// Pinterest
	$wp_customize->add_setting( '_pint_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_pint_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links_settings_section',
		'label'    		=> __( 'Pinterest URL', 'analytical-lite' ),
	) );
	// Dribble
	$wp_customize->add_setting( '_drib_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_drib_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links_settings_section',
		'label'    		=> __( 'Dribbble URL', 'analytical-lite' ),
	) );
	// Wordpress
	$wp_customize->add_setting( '_wordp_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_wordp_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links_settings_section',
		'label'    		=> __( 'WordPress URL', 'analytical-lite' ),
	) );

	// Linkedin
	$wp_customize->add_setting( '_linkedin_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_linkedin_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links_settings_section',
		'label'    		=> __( 'Linkedin URL', 'analytical-lite' ),
	) );

	// Instagram
	$wp_customize->add_setting( '_instagram_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_instagram_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links_settings_section',
		'label'    		=> __( 'Instagram URL', 'analytical-lite' ),
	) );


	// ====================================
	// = Front Page Gallery Sections
	// ====================================
	$gallery_img_dir = get_template_directory_uri().'/images/sketchbg/';

	$wp_customize->add_section( 'gallery_settings_section' , array(
		'title' => __('Gallery Settings','analytical-lite'),
		'panel' => 'analytical_lite_settings',
	) );
	$wp_customize->add_setting( '_gallery_img1', array(
		'default'           => $gallery_img_dir.'orange-1.jpg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, '_gallery_img1', array(
		'label' => __( 'Gallery Image 1','analytical-lite'),
		'section' => 'gallery_settings_section',
		'mime_type' => 'image',
	) ) );
	$wp_customize->add_setting( '_gallery_img2', array(
		'default'           => $gallery_img_dir.'orange-2.jpg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, '_gallery_img2', array(
		'label' => __( 'Gallery Image 2','analytical-lite'),
		'section' => 'gallery_settings_section',
		'mime_type' => 'image',
	) ) );
	$wp_customize->add_setting( '_gallery_img3', array(
		'default'           => $gallery_img_dir.'orange-3.jpg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, '_gallery_img3', array(
		'label' => __( 'Gallery Image 3','analytical-lite'),
		'section' => 'gallery_settings_section',
		'mime_type' => 'image',
	) ) );


	// ====================================
	// = Front Page Gallery Sections
	// ====================================
	$wp_customize->add_section( 'front_gcaption_settings_section' , array(
		'title' => __('Front Gallery Captions','analytical-lite'),
		'panel' => 'analytical_lite_settings',
	) );
	$wp_customize->add_setting( '_sl1_title', array(
		'default'        => __('Title 1', 'analytical-lite'),
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_sl1_title', array(
		'label' => __('Image 1 Title','analytical-lite'),
		'section' => 'front_gcaption_settings_section',
	));
	$wp_customize->add_setting( '_sl1_content', array(
		'default'        => __('Lorem ipsum dolor sit amet,  sectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 'analytical-lite'),
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_sl1_content', array(
		'label' => __('Image 1 Content','analytical-lite'),
		'type' => 'textarea',
		'section' => 'front_gcaption_settings_section',
	));
	// Image 2
	$wp_customize->add_setting( '_sl2_title', array(
		'default'        => __('Title 2', 'analytical-lite'),
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_sl2_title', array(
		'label' => __('Image 2 Title','analytical-lite'),
		'section' => 'front_gcaption_settings_section',
	));
	$wp_customize->add_setting( '_sl2_content', array(
		'default'        => __('Lorem ipsum dolor sit amet,  sectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 'analytical-lite'),
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_sl2_content', array(
		'label' => __('Image 2 Content','analytical-lite'),
		'type' => 'textarea',
		'section' => 'front_gcaption_settings_section',
	));
	// Image 3
	$wp_customize->add_setting( '_sl3_title', array(
		'default'        => __('Title 3', 'analytical-lite'),
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_sl3_title', array(
		'label' => __('Image 3 Title','analytical-lite'),
		'section' => 'front_gcaption_settings_section',
	));
	$wp_customize->add_setting( '_sl3_content', array(
		'default'        => __('Lorem ipsum dolor sit amet,  sectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 'analytical-lite'),
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_sl3_content', array(
		'label' => __('Image 3 Content','analytical-lite'),
		'type' => 'textarea',
		'section' => 'front_gcaption_settings_section',
	));
	// ====================================
	// = Front Page Video Sections
	// ====================================
	$wp_customize->add_section( 'front_vcaption_settings_section' , array(
		'title' => __('Front Page Video Captions','analytical-lite'),
		'panel' => 'analytical_lite_settings',
	) );
	$wp_customize->add_setting( '_fvd_title', array(
		'default'        => __('Video Title', 'analytical-lite'),
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fvd_title', array(
		'label' => __('Video Title','analytical-lite'),
		'section' => 'front_vcaption_settings_section',
	));
	$wp_customize->add_setting( '_fvd_descp', array(
		'default'        => __('Lorem ipsum dolor sit amet,  sectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 'analytical-lite'),
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fvd_descp', array(
		'label' => __('Video Description','analytical-lite'),
		'type' => 'textarea',
		'section' => 'front_vcaption_settings_section',
	));
	// ====================================
	// = Gallery Page Sections
	// ====================================
	$wp_customize->add_section( 'gallery_gcaption_settings_section' , array(
		'title' => __('Gallery Page Captions','analytical-lite'),
		'panel' => 'analytical_lite_settings',
	) );
	$wp_customize->add_setting( '_gsl1_title', array(
		'default'        => __('Title 1', 'analytical-lite'),
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_gsl1_title', array(
		'label' => __('Image 1 Title','analytical-lite'),
		'section' => 'gallery_gcaption_settings_section',
	));
	$wp_customize->add_setting( '_gsl1_content', array(
		'default'        => __('Lorem ipsum dolor sit amet,  sectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 'analytical-lite'),
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_gsl1_content', array(
		'label' => __('Image 1 Content','analytical-lite'),
		'type' => 'textarea',
		'section' => 'gallery_gcaption_settings_section',
	));
	// Image 2
	$wp_customize->add_setting( '_gsl2_title', array(
		'default'        => __('Title 2', 'analytical-lite'),
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_gsl2_title', array(
		'label' => __('Image 2 Title','analytical-lite'),
		'section' => 'gallery_gcaption_settings_section',
	));
	$wp_customize->add_setting( '_gsl2_content', array(
		'default'        => __('Lorem ipsum dolor sit amet,  sectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 'analytical-lite'),
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_gsl2_content', array(
		'label' => __('Image 2 Content','analytical-lite'),
		'type' => 'textarea',
		'section' => 'gallery_gcaption_settings_section',
	));
	// Image 3
	$wp_customize->add_setting( '_gsl3_title', array(
		'default'        => __('Title 3', 'analytical-lite'),
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_gsl3_title', array(
		'label' => __('Image 3 Title','analytical-lite'),
		'section' => 'gallery_gcaption_settings_section',
	));
	$wp_customize->add_setting( '_gsl3_content', array(
		'default'        => __('Lorem ipsum dolor sit amet,  sectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 'analytical-lite'),
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_gsl3_content', array(
		'label' => __('Image 3 Content','analytical-lite'),
		'type' => 'textarea',
		'section' => 'gallery_gcaption_settings_section',
	));

	// ====================================
	// = Footer Settings Sections
	// ====================================
	$wp_customize->add_section( 'footer_settings_section' , array(
		'title' => __('Footer Settings','analytical-lite'),
		'panel' => 'analytical_lite_settings',
	) );
	$wp_customize->add_setting( '_sidebar1_title', array(
		'default'        => __('Creative', 'analytical-lite'),
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_sidebar1_title', array(
		'label' => __('First Sidebar Title','analytical-lite'),
		'description' => __('Leave it blank, if you want to disable it.', 'analytical-lite'),
		'section' => 'footer_settings_section',
	));
	$wp_customize->add_setting( '_sidebar2_title', array(
		'default'        => __('Services', 'analytical-lite'),
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_sidebar2_title', array(
		'label' => __('Second Sidebar Title','analytical-lite'),
		'description' => __('Leave it blank, if you want to disable it.', 'analytical-lite'),
		'section' => 'footer_settings_section',
	));
	$wp_customize->add_setting( '_sidebar3_title', array(
		'default'        => __('Clients', 'analytical-lite'),
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_sidebar3_title', array(
		'label' => __('Third Sidebar Title','analytical-lite'),
		'description' => __('Leave it blank, if you want to disable it.', 'analytical-lite'),
		'section' => 'footer_settings_section',
	));
	$wp_customize->add_setting( '_copyright', array(
		'default'        => __('Proudly Powered by WordPress', 'analytical-lite'),
		'sanitize_callback' => 'analytical_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_copyright', array(
		'label' => __('Copyright Text','analytical-lite'),
		'description' => __('You can use HTML for links etc..', 'analytical-lite'),
		'section' => 'footer_settings_section',
	));

}
add_action( 'customize_register', 'analytical_lite_customize_register' );


// sanitize textarea
function analytical_lite_sanitize_textarea( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

// sanitize layout
function analytical_lite_sanitize_layout( $input ) {
	return $input;
}

// sanitize on-off
function analytical_lite_sanitize_on_off( $input ) {
	$valid = array(
		'on' =>'ON',
		'off'=> 'OFF'
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

?>