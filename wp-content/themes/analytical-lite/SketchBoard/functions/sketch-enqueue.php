<?php
global $themename;
global $shortname;
/************************************************
*  enquque css and javascript
************************************************/
//enqueue jquery 
function analytical_lite_script_enqueqe() {
	global $shortname;
	if(!is_admin())
	{
		wp_enqueue_script( 'comment-reply' );    
	}
}
add_action('wp_enqueue_scripts', 'analytical_lite_script_enqueqe');

//enqueue admin css
function analytical_lite_theme_stylesheet(){
global $themename;
global $shortname;
if ( !is_admin() ) {
	global $wp_version;
	$skt_version = NULL;
	$theme = wp_get_theme();
	$skt_version = $theme['Version'];

	wp_enqueue_script('easing',get_template_directory_uri().'/js/jquery.easing.1.3.js',array('jquery'),'1.3.0' );
	wp_enqueue_script('colorboxsimple_slide',get_template_directory_uri().'/js/jquery.prettyPhoto.js',array('jquery'),'1.0' );
	wp_enqueue_script('analytical-lite-custom_slide',get_template_directory_uri().'/js/custom.js',array('jquery'),'1.0' );
	wp_enqueue_script('addsmoothmenusimple_slide',get_template_directory_uri().'/js/superfish.js',array('jquery'),'1.0' );
	wp_enqueue_script('stricky',get_template_directory_uri().'/js/hcsticky.js',array('jquery'),'1.1.9' );

	wp_enqueue_style( 'typography', get_template_directory_uri().'/css/typography.css', false, $skt_version );
	wp_enqueue_style( 'lite-layout-stylesheet', get_template_directory_uri().'/css/layout.css', false, $skt_version );
	wp_enqueue_style( 'analytical-lite-style', get_stylesheet_uri(), false, $skt_version  );
	wp_enqueue_style( 'analytical-lite-theme-default' );
	wp_enqueue_style( 'prettyPhoto', get_template_directory_uri().'/css/prettyPhoto.css', false, $skt_version  );
	wp_enqueue_style( 'google-Fonts-Merriweather', '//fonts.googleapis.com/css?family=Merriweather+Sans:400,400italic,300,300italic'  );
	wp_enqueue_style( 'superfish', get_template_directory_uri().'/css/superfish.css', false, $skt_version );
	
	}
}
add_action('wp_enqueue_scripts', 'analytical_lite_theme_stylesheet');

function analytical_lite_head_custom(){
global $shortname;
	if(!is_admin())
	{
		require_once(get_template_directory().'/inc/analytical_custom.php');
	}   
}
add_action('wp_head', 'analytical_lite_head_custom',10);

function analytical_lite_footer()
{
	global $shortname;
	if(is_page_template('template-gallery.php')){ ?>
		<script type="text/javascript">
		jQuery(document).ready(function(){
			show_analytical_lite_skebg_thumbs();
		});
		</script>
	<?php } 
}

add_action('wp_footer', 'analytical_lite_footer');

