<?php
/*
Template Name: Gallery Template
*/
get_header();
global $shortname;
global $themename;
 ?>
<script type="text/javascript">
show_analytical_lite_skebg_thumbs = function(){
	if(jQuery('div.analytical_lite_skebg_thumbnails').length > 0){
		var wht = jQuery(window).height();
		var thisht = jQuery('.analytical_lite_skebg_thumbnails').height();
		var diffht = wht - thisht;
		var half_ht = diffht / 2;
		if(!jQuery('a.analytical_lite_skebg_showthumbs').hasClass('active')){
			jQuery('a.analytical_lite_skebg_showthumbs').addClass('active');
			jQuery('.analytical_lite_skebg_thumbnails').css('display','block').animate({'bottom': half_ht},250);
		}
		else{}
	}
}
jQuery(document).ready(function(){
	if(jQuery('body').hasClass('ls_left')){jQuery('body').removeClass('ls_left');jQuery('body').addClass('ls_top');}
	var totalWidth = 0;
	jQuery("#menu-main >li").not("ul ul").each(function() {totalWidth = totalWidth + jQuery(this).outerWidth(true);});
	var flogoWdth = jQuery('#floating_logo').outerWidth(true);
	jQuery('#nav_outerwrap').css({width:totalWidth+flogoWdth,margin:'0 auto'}).addClass('clearfix');
});
</script>
<div class="front_content clearfix">
	<?php
		for($skebgi=1;$skebgi < 4;$skebgi++){
			$analytical_lite_skebg_imgT = get_theme_mod('_gsl'.$skebgi.'_title', __('Title ', 'analytical-lite').$skebgi );
			$analytical_lite_skebg_imgC = get_theme_mod('_gsl'.$skebgi.'_content', __('Lorem ipsum dolor sit amet,  sectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 'analytical-lite') );
			$analytical_lite_skebg_capsArr[] = array("title"=>$analytical_lite_skebg_imgT,"descp"=>$analytical_lite_skebg_imgC);
		}			
	?>
	<?php if(!empty($analytical_lite_skebg_capsArr)){ ?>
		<div class="skegallry_captions">
			<a class="skegallry_toggle" href="javascript:void(0);" title="hide/show caption"></a>
			<div id="analytical_lite_skebggallery_cap">
			<?php foreach($analytical_lite_skebg_capsArr as $analytical_lite_skebg_nm) { ?>
				<?php if($analytical_lite_skebg_nm['title'] || $analytical_lite_skebg_nm['descp']) { ?>
				<div class="skegallery_citem">
				<div class="skegallry_thread"></div>
					<div class="skecap_itemwrap">
						<div class="analytical_lite_skebg_caption">
							<?php if($analytical_lite_skebg_nm['title']){ ?><div class="analytical_lite_skebg_title"><?php echo wp_kses_post( $analytical_lite_skebg_nm['title'] ); ?></div><?php } ?> 
							<?php if($analytical_lite_skebg_nm['descp']){ ?><div class="analytical_lite_skebg_descp"><?php echo wp_kses_post( $analytical_lite_skebg_nm['descp'] ); ?></div><?php } ?>
						</div>
					</div>
					</div>
				<?php } ?>
			<?php } ?>
			</div>
		</div>
	<?php } ?>
</div>
<?php get_footer(); ?>