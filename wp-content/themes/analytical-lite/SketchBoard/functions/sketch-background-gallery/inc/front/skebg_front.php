<?php
//-- FUNCTION TO CALL GALLERY ------------
//----------------------------------------
require_once(get_template_directory().'/SketchBoard/functions/sketch-background-gallery/inc/front/skebg_class.php');
function analytical_lite_skebg_gallery(){
	$analytical_lite_skebg_obj = new analytical_lite_skebg_front;
	?><!-- Sketch BG-Gallery Starts Here --><?php
	$analytical_lite_skebg_obj->analytical_lite_skebg_gallery_display();
	?><!-- Sketch BG-Gallery Ends Here --><?php
}
add_action('wp_footer','analytical_lite_skebg_gallery');
?>