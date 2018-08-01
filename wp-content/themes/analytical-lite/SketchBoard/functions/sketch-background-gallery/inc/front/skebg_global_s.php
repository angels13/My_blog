<?php
$analytical_lite_skebg_options = get_option('analytical_lite_skebggallery_options'); 
$options = analytical_lite_skebg_checkgetOptions($analytical_lite_skebg_options);
$skebgg_allpg = 1;
$skebgg_time = 6000;
$skebgg_transition = 1000;
$skebgg_nav = 1;
$skebgg_playpause = 1;
$skebgg_thumbs = 1;
$skebgg_thumbs_display = 'square';
$skebgg_random = 0;
$skebgg_overlay = 1;
$skebgg_BgChkbox = 0;
$skebgg_Bgcolor = '#111';
$skebgg_bgvdochk = 0;
$skebgg_bgvdourl = 'http://www.youtube.com/watch?v=e4Is32W-ppk';
$skebgg_bgvdrept = 1;

$gallery_img_dir = get_template_directory_uri().'/images/sketchbg/';
for($skebgi=1; $skebgi < 4; $skebgi++ ){
	$skebgg_slideUrl = get_theme_mod("_gallery_img".$skebgi, $gallery_img_dir.'orange-'.$skebgi.'.jpg');
	if($skebgg_slideUrl != '') {
		$skebgg_slidesArr[] = $skebgg_slideUrl; 
	}
}
if($skebgg_random && !empty($skebgg_slidesArr))
shuffle($skebgg_slidesArr);

?>