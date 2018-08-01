<?php
Class analytical_lite_skebg_front
{
	function analytical_lite_skebg_callJSfunc($skebgg_time,$skebgg_transition,$skebgg_nav,$skebgg_playpause,$skebgg_thumbs,$skebgg_thumbs_display)
	{
		?>
		<script type="text/javascript">
			jQuery(document).ready(function(){
				jQuery.skebggallery('#skebggallery',{
					'delay':<?php echo $skebgg_time; ?>, 
					'fadeSpeed': <?php echo $skebgg_transition; ?>,
					'navigation':<?php echo $skebgg_nav; ?>,
					'playPause':<?php echo $skebgg_playpause; ?>,
					'thumbnails':<?php echo $skebgg_thumbs; ?>,
					'thumb_style':'<?php echo $skebgg_thumbs_display; ?>'
				});
				
				if(jQuery('#analytical_lite_skebggallery_cap').length > 0){
					jQuery.skebggcaptions('#analytical_lite_skebggallery_cap',{
						'delay':<?php echo $skebgg_time; ?>, 
						'fadeSpeed': <?php echo $skebgg_transition; ?>
					});
				}
			});
		</script>
		<?php
	}
	
	function analytical_lite_skebg_VdJSfunc($skebgg_bgvdourl,$skebgg_bgvdrept)
	{
		if($skebgg_bgvdourl)
		{
			if(strstr($skebgg_bgvdourl,'?v='))
			{
				$query_string = @parse_url($skebgg_bgvdourl, PHP_URL_QUERY);
				@parse_str($query_string, $youtubeid);
				?>
				<script type="text/javascript">
					jQuery(window).load(function(){
						setTimeout(function() {
							jQuery('#skebg-youtube-wrap').css({'visibility':'visible'});
							if(jQuery('.analytical_lite_skebg_fvdcap').length > 0){
								jQuery('.analytical_lite_skebg_fvdcap').show().css({'visibility':'visible'});
							}
							jQuery('#skebggallery-loader').remove();
							jQuery('body').append('<div id="skebg-yt-controls"><a href="javascript:void(0);" class="yt-play" title="play"></a><a href="javascript:void(0);" class="yt-pause" title="pause"></a><a href="javascript:void(0);" class="yt-mute" title="mute/unmute"></a></div>');
							jQuery('#skebg-yt-controls a.yt-mute').click(function(){
								if(!jQuery(this).hasClass('active')){
									jQuery(this).addClass('active');
								}else{
									jQuery(this).removeClass('active');
								}
							});
						}, 1000);
					});
					
					jQuery(document).ready(function(){
						jQuery('.analytical_lite_skebg_fimgcap').hide();
						jQuery('body').append('<div id="skebggallery-loader">Loading video...</div>');
						var options = { videoId: '<?php echo $youtubeid['v']; ?>',repeat:<?php echo $skebgg_bgvdrept; ?>};
						jQuery('body').tubular(options);
					});
				</script>
				<?php 
			} 
			elseif(strstr($skebgg_bgvdourl,'vimeo.com')){
				preg_match_all('#(http://vimeo.com)/([0-9]+)#i',$skebgg_bgvdourl,$vimeoarr);
			?>
				<script type="text/javascript">
					jQuery(document).ready(function(){
						jQuery('.analytical_lite_skebg_fimgcap').hide();
						jQuery('body').append('<div id="skebggallery-loader">Loading video...</div>');
					});
					
					jQuery(window).load(function(){
						setTimeout(function() {
							jQuery('#skebg-vimeo-player').css({'visibility':'visible'});
							if(jQuery('.analytical_lite_skebg_fvdcap').length > 0){
								jQuery('.analytical_lite_skebg_fvdcap').show().css({'visibility':'visible'});
							}
							jQuery('#skebggallery-loader').remove();
						}, 1000);
					});
				</script>
		<?php
			}
			else 
			{ 
			?>
				<script type="text/javascript">
					jQuery(document).ready(function(){
						jQuery('.analytical_lite_skebg_fimgcap').hide();
						jQuery('body').css('padding-bottom','50px').append('<div id="skebggallery-loader">Loading video...</div>').append('<div id="analytical_lite_skebg_scroll"></div>');
						var skebgV = new jQuery.skebgVideo();
						skebgV.init();
						skebgV.show('<?php echo $skebgg_bgvdourl; ?>',{doLoop:<?php echo $skebgg_bgvdrept; ?>});
					});
					jQuery(window).load(function(){
						setTimeout(function() {
							jQuery('#skebg-video-wrap,#skebg-video-control-container').css({'visibility':'visible'});
							if(jQuery('.analytical_lite_skebg_fvdcap').length > 0){
								jQuery('.analytical_lite_skebg_fvdcap').show().css({'visibility':'visible'});
							}
							jQuery('#skebggallery-loader').remove();
						}, 1000);
					});
				</script>
			<?php 
			}
		
		}// if video url exists

	}
	
	function analytical_lite_skebg_global_sldr($skebgg_time,$skebgg_transition,$skebgg_nav,$skebgg_playpause,$skebgg_thumbs,$skebgg_thumbs_display,$skebgg_BgChkbox,$skebgg_Bgcolor,$skebgg_overlay,$skebgg_bgvdochk,$skebgg_bgvdourl,$skebgg_bgvdrept,$skebgg_slidesArr)
	{
		if(!$skebgg_BgChkbox && !$skebgg_bgvdochk){
			$this->analytical_lite_skebg_callJSfunc($skebgg_time,$skebgg_transition,$skebgg_nav,$skebgg_playpause,$skebgg_thumbs,$skebgg_thumbs_display);
		}
		
		if($skebgg_bgvdochk){
			$this->analytical_lite_skebg_VdJSfunc($skebgg_bgvdourl,$skebgg_bgvdrept);
		}
		
		if(!$skebgg_bgvdochk) { ?>
			<div id="skebggallery" class="analytical_lite_skebg_global"><?php
			if($skebgg_BgChkbox){ ?><div class="analytical_lite_skebg_bgcolor" style="background:<?php echo $skebgg_Bgcolor; ?>;"></div><?php }
			else{
				if(!empty($skebgg_slidesArr)){
					foreach($skebgg_slidesArr as $analytical_lite_skebg_slide){
						?><img class="analytical_lite_skebg_bg" src="<?php echo $analytical_lite_skebg_slide; ?>" /><?php
					}
				}
			}
			if($skebgg_overlay){ ?><div class="analytical_lite_skebg_overlay" style="background:url('<?php echo SKETCHBGSURL ?>overlay/01.png')"></div><?php }
			?>
			</div>
		<?php 
		} 
	}
	
	function analytical_lite_skebg_single_sldr($skebgg_time,$skebgg_transition,$skebgg_nav,$skebgg_playpause,$skebgg_thumbs,$skebgg_thumbs_display,$skebgg_BgChkbox,$skebgg_Bgcolor,$skebgg_overlay,$skebgg_bgvdochk,$skebgg_bgvdourl,$skebgg_bgvdrept,$skebgg_slidesArr)
	{
		if(!$skebgg_BgChkbox && !$skebgg_bgvdochk){
			$this->analytical_lite_skebg_callJSfunc($skebgg_time,$skebgg_transition,$skebgg_nav,$skebgg_playpause,$skebgg_thumbs,$skebgg_thumbs_display);
		}
		
		if($skebgg_bgvdochk){
			$this->analytical_lite_skebg_VdJSfunc($skebgg_bgvdourl,$skebgg_bgvdrept);
		}
		
		if(!$skebgg_bgvdochk) { ?>
		<div id="skebggallery" class="analytical_lite_skebg_single"><?php
			if($skebgg_BgChkbox){ ?><div class="analytical_lite_skebg_bgcolor" style="background:<?php echo $skebgg_Bgcolor; ?>;"></div><?php }
			else{
				if(!empty($skebgg_slidesArr)){
					foreach($skebgg_slidesArr as $analytical_lite_skebg_slide){
						?><img class="analytical_lite_skebg_bg" src="<?php echo $analytical_lite_skebg_slide; ?>" /><?php
					}
				}
			}
			if($skebgg_overlay){ ?><div class="analytical_lite_skebg_overlay" style="background:url('<?php echo SKETCHBGSURL ?>overlay/01.png')"></div><?php }
			?>
		</div>
		<?php 
		} 
	}
	
	function analytical_lite_skebg_gallery_display()
	{
		include(get_template_directory().'/SketchBoard/functions/sketch-background-gallery/inc/front/skebg_global_s.php');
		
		if($skebgg_allpg && !is_page() && !is_single() && !is_tax())
		{
			$this->analytical_lite_skebg_global_sldr($skebgg_time,$skebgg_transition,$skebgg_nav,$skebgg_playpause,$skebgg_thumbs,$skebgg_thumbs_display,$skebgg_BgChkbox,$skebgg_Bgcolor,$skebgg_overlay,$skebgg_bgvdochk,$skebgg_bgvdourl,$skebgg_bgvdrept,$skebgg_slidesArr);
		}
		elseif((is_page() || is_front_page()) && !is_home())
		{
			global $post;
			$analytical_lite_skebg_cstm = get_post_custom($post->ID);
			
			if(isset($analytical_lite_skebg_cstm["analytical_lite_skebg_disable"][0])){
				$skebgg_disable_s = $analytical_lite_skebg_cstm["analytical_lite_skebg_disable"][0];
			}else{
				$skebgg_disable_s = null;
			}
			
			if(isset($analytical_lite_skebg_cstm["analytical_lite_skebg_check"][0])){
				$skebgg_check_s = $analytical_lite_skebg_cstm["analytical_lite_skebg_check"][0];
			}else{
				$skebgg_check_s = null;
			}

			if($skebgg_check_s && !$skebgg_disable_s){
				include(get_template_directory().'/SketchBoard/functions/sketch-background-gallery/inc/front/skebg_single_s.php');
				$this->analytical_lite_skebg_single_sldr($skebgg_time_s,$skebgg_transition_s,$skebgg_nav_s,$skebgg_playpause_s,$skebgg_thumbs_s,$skebgg_thumbs_display_s,$skebgg_BgChkbox_s,$skebgg_Bgcolor_s,$skebgg_overlay_s,$skebgg_bgvdochk_s,$skebgg_bgvdourl_s,$skebgg_bgvdrept_s,$skebgg_slidesArr_s);
			}
			elseif(!$skebgg_disable_s && $skebgg_allpg){
				$this->analytical_lite_skebg_global_sldr($skebgg_time,$skebgg_transition,$skebgg_nav,$skebgg_playpause,$skebgg_thumbs,$skebgg_thumbs_display,$skebgg_BgChkbox,$skebgg_Bgcolor,$skebgg_overlay,$skebgg_bgvdochk,$skebgg_bgvdourl,$skebgg_bgvdrept,$skebgg_slidesArr);
			}
		}
		elseif(is_single())
		{
			global $post;
			$analytical_lite_skebg_cstm = get_post_custom($post->ID);
			
			if(isset($analytical_lite_skebg_cstm["analytical_lite_skebg_disable"][0])){
				$skebgg_disable_s = $analytical_lite_skebg_cstm["analytical_lite_skebg_disable"][0];
			}else{
				$skebgg_disable_s = null;
			}
			
			if(isset($analytical_lite_skebg_cstm["analytical_lite_skebg_check"][0])){
				$skebgg_check_s = $analytical_lite_skebg_cstm["analytical_lite_skebg_check"][0];
			}else{
				$skebgg_check_s = null;
			}
		
			if($skebgg_check_s && !$skebgg_disable_s){
				include(get_template_directory().'/SketchBoard/functions/sketch-background-gallery/inc/front/skebg_single_s.php');
				$this->analytical_lite_skebg_single_sldr($skebgg_time_s,$skebgg_transition_s,$skebgg_nav_s,$skebgg_playpause_s,$skebgg_thumbs_s,$skebgg_thumbs_display_s,$skebgg_BgChkbox_s,$skebgg_Bgcolor_s,$skebgg_overlay_s,$skebgg_bgvdochk_s,$skebgg_bgvdourl_s,$skebgg_bgvdrept_s,$skebgg_slidesArr_s);
			}
			elseif(!$skebgg_disable_s && $skebgg_allpg){
				$this->analytical_lite_skebg_global_sldr($skebgg_time,$skebgg_transition,$skebgg_nav,$skebgg_playpause,$skebgg_thumbs,$skebgg_thumbs_display,$skebgg_BgChkbox,$skebgg_Bgcolor,$skebgg_overlay,$skebgg_bgvdochk,$skebgg_bgvdourl,$skebgg_bgvdrept,$skebgg_slidesArr);
			}
		}
	}
}
?>
