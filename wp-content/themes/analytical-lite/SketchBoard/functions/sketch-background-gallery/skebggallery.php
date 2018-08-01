<?php
include_once(get_template_directory().'/SketchBoard/functions/sketch-background-gallery/skebg_defaults.php');
include_once(get_template_directory().'/SketchBoard/functions/sketch-background-gallery/inc/front/skebg_front.php');
include_once(get_template_directory().'/SketchBoard/functions/sketch-background-gallery/scripts.php');

define('SKETCHBGSURL', get_template_directory_uri() . '/images/sketchbg/');
define('SKETCHBGSSCRIPT', get_template_directory_uri() . '/SketchBoard/functions/sketch-background-gallery/inc/');

function analytical_lite_skebggallery_defaults(){

	$gallery_img_dir = get_template_directory_uri().'/images/sketchbg/';

	$default = array(
	'analytical_lite_skebg_allpg' => 1,
	'analytical_lite_skebg_time' =>'6',
	'analytical_lite_skebg_transition'=> '1',
	'analytical_lite_skebg_nav'=> 1,
	'analytical_lite_skebg_playpause'=> 1,
	'analytical_lite_skebg_thumbs'=> 1,
	'analytical_lite_skebg_thumbs_display'=> 'square',
	'analytical_lite_skebg_random' => 0,
	'analytical_lite_skebg_overlay'=> 1,
	'analytical_lite_skebg_bgchkbox'=> 0,
	'analytical_lite_skebg_bgcolor'=>'#111',
	'analytical_lite_skebg_bgvdochk'=> 0,
	'analytical_lite_skebg_bgvdourl'=> 'http://www.youtube.com/watch?v=e4Is32W-ppk',
	'analytical_lite_skebg_bgvdrept'=> 1,
	'analytical_lite_skebg_slide1' => esc_url(get_theme_mod('_gallery_img1', $gallery_img_dir.'orange-1.jpg') ),
	'analytical_lite_skebg_slide2' => esc_url(get_theme_mod('_gallery_img2', $gallery_img_dir.'orange-2.jpg') ),
	'analytical_lite_skebg_slide3' => esc_url(get_theme_mod('_gallery_img3', $gallery_img_dir.'orange-3.jpg') )
	);
return $default;
}
?>