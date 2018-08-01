<?php
// ADD Styles and Script in head section
add_action('wp_enqueue_scripts', 'analytical_lite_skebggallery_frontend_scripts');

function analytical_lite_skebggallery_frontend_scripts() {	
	if(!is_admin()){
		wp_enqueue_script('skebggallery',SKETCHBGSSCRIPT.'front/js/skebggallery.js', array('jquery'));
		wp_enqueue_style('skebggallery',SKETCHBGSSCRIPT.'front/css/skebggallery.css');
		wp_enqueue_style('skebgvideo',SKETCHBGSSCRIPT.'front/css/skebgvideo.css');
		wp_enqueue_script('jquery-ui-slider');
		wp_enqueue_script('videomin',SKETCHBGSSCRIPT.'front/js/video.min.js', array('jquery'));
		wp_enqueue_script('skebgvideo',SKETCHBGSSCRIPT.'front/js/skebgvideo.js', array('jquery'));
		wp_enqueue_script('tubular',SKETCHBGSSCRIPT.'front/js/jquery.tubular.1.0.js', array('jquery'));
		wp_enqueue_script('vimeoplayer',SKETCHBGSSCRIPT.'front/js/vimeo.player.js', array('jquery'));
	}
}
//--------------------------------------------------------------------------------------------------------------------------------------
?>