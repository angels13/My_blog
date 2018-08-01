<?php
function analytical_lite_skebg_checkgetOptions($options)
{
	if(!isset($options['analytical_lite_skebg_allpg'])){$options['analytical_lite_skebg_allpg']=1;}
	if(!isset($options['analytical_lite_skebg_random'])){$options['analytical_lite_skebg_random']=0;}
	if(!isset($options['analytical_lite_skebg_bgchkbox'])){$options['analytical_lite_skebg_bgchkbox']=0;}
	if(!isset($options['analytical_lite_skebg_bgcolor'])){$options['analytical_lite_skebg_bgcolor']='#111';}
	if(!isset($options['analytical_lite_skebg_bgvdochk'])){$options['analytical_lite_skebg_bgvdochk']=0;}
	if(!isset($options['analytical_lite_skebg_bgvdourl'])){$options['analytical_lite_skebg_bgvdourl']='http://www.youtube.com/watch?v=e4Is32W-ppk';}
	if(!isset($options['analytical_lite_skebg_bgvdrept'])){$options['analytical_lite_skebg_bgvdrept']=0;}
	
return $options;
}
function analytical_lite_skebg_checkMataValues($custom)
{
	if(!isset($custom['analytical_lite_skebg_random'][0])){$custom['analytical_lite_skebg_random'][0]=0;}
	if(!isset($custom['analytical_lite_skebg_bgchkbox'][0])){$custom['analytical_lite_skebg_bgchkbox'][0]=0;}
	if(!isset($custom['analytical_lite_skebg_bgcolor'][0])){$custom['analytical_lite_skebg_bgcolor'][0]='#111';}
	if(!isset($custom['analytical_lite_skebg_bgvdochk'])){$custom['analytical_lite_skebg_bgvdochk']=0;}
	if(!isset($custom['analytical_lite_skebg_bgvdourl'])){$custom['analytical_lite_skebg_bgvdourl']='http://www.youtube.com/watch?v=e4Is32W-ppk';}
	if(!isset($custom['analytical_lite_skebg_bgvdrept'])){$custom['analytical_lite_skebg_bgvdrept']=0;}
	
return $custom;
}
function analytical_lite_skebg_validate_options($analytical_lite_skebg_input)
{
	if(!isset($analytical_lite_skebg_input['analytical_lite_skebg_allpg'])){$analytical_lite_skebg_input['analytical_lite_skebg_allpg']=0;}
	if(!isset($analytical_lite_skebg_input['analytical_lite_skebg_time'])){$analytical_lite_skebg_input['analytical_lite_skebg_time']=null;}
	if(!isset($analytical_lite_skebg_input['analytical_lite_skebg_transition'])){$analytical_lite_skebg_input['analytical_lite_skebg_transition']=null;}
	if(!isset($analytical_lite_skebg_input['analytical_lite_skebg_nav'])){$analytical_lite_skebg_input['analytical_lite_skebg_nav']=0;}
	if(!isset($analytical_lite_skebg_input['analytical_lite_skebg_playpause'])){$analytical_lite_skebg_input['analytical_lite_skebg_playpause']=0;}
	if(!isset($analytical_lite_skebg_input['analytical_lite_skebg_thumbs'])){$analytical_lite_skebg_input['analytical_lite_skebg_thumbs']=0;}
	if(!isset($analytical_lite_skebg_input['analytical_lite_skebg_random'])){$analytical_lite_skebg_input['analytical_lite_skebg_random']=0;}
	if(!isset($analytical_lite_skebg_input['analytical_lite_skebg_overlay'])){$analytical_lite_skebg_input['analytical_lite_skebg_overlay']=0;}
	if(!isset($analytical_lite_skebg_input['analytical_lite_skebg_bgchkbox'])){$analytical_lite_skebg_input['analytical_lite_skebg_bgchkbox']=0;} 
	if(!isset($analytical_lite_skebg_input["analytical_lite_skebg_bgvdochk"])){$analytical_lite_skebg_input["analytical_lite_skebg_bgvdochk"]=0;}
	if(!isset($analytical_lite_skebg_input["analytical_lite_skebg_bgvdrept"])){$analytical_lite_skebg_input["analytical_lite_skebg_bgvdrept"]=0;}
	if(!isset($analytical_lite_skebg_input['analytical_lite_skebg_slide1'])){$analytical_lite_skebg_input['analytical_lite_skebg_slide1']=null;}  
	if(!isset($analytical_lite_skebg_input['analytical_lite_skebg_slide2'])){$analytical_lite_skebg_input['analytical_lite_skebg_slide2']=null;}  
	if(!isset($analytical_lite_skebg_input['analytical_lite_skebg_slide3'])){$analytical_lite_skebg_input['analytical_lite_skebg_slide3']=null;}  
return $analytical_lite_skebg_input;
}
function analytical_lite_skebg_validate_mataValues($post_mata)
{
	if(empty($post_mata["analytical_lite_skebg_disable"])){$post_mata["analytical_lite_skebg_disable"]=0;}
	if(empty($post_mata["analytical_lite_skebg_check"])){$post_mata["analytical_lite_skebg_check"]=0;}
	if(empty($post_mata["analytical_lite_skebg_time"])){$post_mata["analytical_lite_skebg_time"]=null;}
	if(empty($post_mata["analytical_lite_skebg_transition"])){$post_mata["analytical_lite_skebg_transition"]=null;}
	if(empty($post_mata["analytical_lite_skebg_nav"])){$post_mata["analytical_lite_skebg_nav"]=0;}
	if(empty($post_mata["analytical_lite_skebg_playpause"])){$post_mata["analytical_lite_skebg_playpause"]=0;}
	if(empty($post_mata["analytical_lite_skebg_thumbs"])){$post_mata["analytical_lite_skebg_thumbs"]=0;}
	if(empty($post_mata["analytical_lite_skebg_random"])){$post_mata["analytical_lite_skebg_random"]=0;}
	if(empty($post_mata["analytical_lite_skebg_overlay"])){$post_mata["analytical_lite_skebg_overlay"]=0;}
	if(empty($post_mata["analytical_lite_skebg_bgchkbox"])){$post_mata["analytical_lite_skebg_bgchkbox"]=0;}
	if(empty($post_mata["analytical_lite_skebg_bgcolor"])){$post_mata["analytical_lite_skebg_bgcolor"]='#111';}
	if(empty($post_mata["analytical_lite_skebg_bgvdochk"])){$post_mata["analytical_lite_skebg_bgvdochk"]=0;}
	if(empty($post_mata["analytical_lite_skebg_bgvdrept"])){$post_mata["analytical_lite_skebg_bgvdrept"]=0;}
	if(empty($post_mata["analytical_lite_skebg_slide1"])){$post_mata["analytical_lite_skebg_slide1"]=null;}
	if(empty($post_mata["analytical_lite_skebg_slide2"])){$post_mata["analytical_lite_skebg_slide2"]=null;}
	if(empty($post_mata["analytical_lite_skebg_slide3"])){$post_mata["analytical_lite_skebg_slide3"]=null;}
return $post_mata;
}
?>