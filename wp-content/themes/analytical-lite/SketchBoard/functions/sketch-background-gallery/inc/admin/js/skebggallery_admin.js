/*-- Sketch BG-Gallery Admin script
---------------------------------------*/
jQuery(document).ready(function(){
	if(jQuery("#analytical_lite_skebg_wrapper #analytical_lite_skebg_disable").is(':checked')){jQuery('#analytical_lite_skebg_wrapper .analytical_lite_skebg_disable').hide();}
	if(!jQuery("#analytical_lite_skebg_wrapper #analytical_lite_skebg_check").is(':checked')){jQuery('#analytical_lite_skebg_wrapper .analytical_lite_skebg_table').hide();}
	jQuery("#analytical_lite_skebg_wrapper #analytical_lite_skebg_check").click(function(){
		if(jQuery("#analytical_lite_skebg_wrapper #analytical_lite_skebg_check").is(':checked')){jQuery('#analytical_lite_skebg_wrapper .analytical_lite_skebg_table').stop(true,true).slideDown();jQuery('#analytical_lite_skebg_wrapper #analytical_lite_skebg_addchk').addClass('checked');}
		else{jQuery('#analytical_lite_skebg_wrapper .analytical_lite_skebg_table').stop(true,true).slideUp();jQuery('#analytical_lite_skebg_wrapper #analytical_lite_skebg_addchk').removeClass('checked');}
	});
	jQuery('#analytical_lite_skebg_wrapper .analytical_lite_skebg_onoff_chkbox,#analytical_lite_skebg_wrapper .analytical_lite_skebg_wrap_chkbox').click(function(){
		if(jQuery(this).is(':checked')){jQuery(this).prev('label').addClass('checked');}
		else{jQuery(this).prev('label').removeClass('checked');}
	});
	jQuery("#analytical_lite_skebg_wrapper #analytical_lite_skebg_disable").click(function(){
		if(jQuery("#analytical_lite_skebg_wrapper #analytical_lite_skebg_disable").is(':checked')){jQuery('#analytical_lite_skebg_wrapper .analytical_lite_skebg_disable').stop(true,true).slideUp();jQuery(this).prev('label.analytical_lite_skebg_mkchk').addClass('checked');jQuery("#analytical_lite_skebg_wrapper #analytical_lite_skebg_check").prop("checked", false);jQuery('#analytical_lite_skebg_addchk').removeClass('checked');}
		else{jQuery('#analytical_lite_skebg_wrapper .analytical_lite_skebg_disable').stop(true,true).slideDown();jQuery(this).prev('label.analytical_lite_skebg_mkchk').removeClass('checked');}
	});
	jQuery('#analytical_lite_skebg_wrapper .analytical_lite_skebg_rdlb').click(function(){
		jQuery('#analytical_lite_skebg_wrapper .analytical_lite_skebg_rdlb').removeClass('active');
		jQuery(this).addClass('active');
	}); 
	jQuery('#analytical_lite_skebg_wrapper .analytical_lite_skebg_td').click(function(){
		jQuery('#analytical_lite_skebg_wrapper .analytical_lite_skebg_td').removeClass('checked');
		jQuery(this).addClass('checked');
	}); 
	jQuery('#analytical_lite_skebg_wrapper .analytical_lite_skebg_settings').click(function(){
		jQuery(this).find('.analytical_lite_skebg_plus_minus').toggleClass('active');
		jQuery('#analytical_lite_skebg_wrapper .analytical_lite_skebg_expCol').addClass('active')
		jQuery(this).next('.analytical_lite_skebg_extendbox').stop(true,true).slideToggle('fast');
	});
	jQuery('#analytical_lite_skebg_wrapper .analytical_lite_skebg_settings .analytical_lite_skebg_savebox input').click(function(e) {
        e.stopPropagation();
    });
	jQuery('#analytical_lite_skebg_wrapper .analytical_lite_skebg_expCol').click(function(){
		var analytical_lite_skebg_expcol = jQuery(this);
		if(jQuery(this).is('.active')){
			jQuery('#analytical_lite_skebg_wrapper .analytical_lite_skebg_extendbox').slideUp('fast',function(){
				jQuery('#analytical_lite_skebg_wrapper .analytical_lite_skebg_plus_minus').removeClass('active');
				jQuery(analytical_lite_skebg_expcol).removeClass('active');
			});
		}else{
			jQuery('#analytical_lite_skebg_wrapper .analytical_lite_skebg_extendbox').slideDown('fast',function(){
				jQuery('#analytical_lite_skebg_wrapper .analytical_lite_skebg_plus_minus').addClass('active');
				jQuery(analytical_lite_skebg_expcol).addClass('active');
			});
		}
	});
/*-- Upload image jquery start 
--------------------------------------------*/
	var targetfield= '';
	var analytical_lite_skebg_send_to_editor = window.send_to_editor;
	jQuery('.analytical_lite_skebg_uploadbtn').click(function(){
		targetfield = jQuery(this).prev('.analytical_lite_skebg_uploadimg');
		tb_show('', 'media-upload.php?type=image&TB_iframe=true');
		window.send_to_editor = function(html) {
			imgurl = jQuery('img',html).attr('src');
			jQuery(targetfield).val(imgurl);
			tb_remove();
			window.send_to_editor = analytical_lite_skebg_send_to_editor;
		}
		return false;
	});	
/*-------------------------------------------*/
/*color picker jquery start*/
	if (jQuery("#analytical_lite_skebg_wrapper").length){
		jQuery('#analytical_lite_skebg_wrapper .analytical_lite_skebg_bgcolor').farbtastic('#analytical_lite_skebg_bgcolor');
	}
	jQuery('html').click(function() {jQuery("#analytical_lite_skebg_wrapper .farbtastic").fadeOut('fast');});
	jQuery('#analytical_lite_skebg_wrapper .analytical_lite_skebg_colsel').click(function(event){
		jQuery("#analytical_lite_skebg_wrapper .farbtastic").hide();
		jQuery(this).find(".farbtastic").fadeIn('fast');event.stopPropagation();
	});
/*color picker jquery end*/
});
/*-- Sketch BG-Gallery Tooltip jquery script 
---------------------------------------------------*/
analytical_lite_skebg_ShowTooltip = function(e){
	var text = jQuery(this).find('.analytical_lite_skebg_tooltip_txt');
	if (text.attr('class') != 'analytical_lite_skebg_tooltip_txt')
		return false;
	text.stop(true,true).fadeIn('fast')
	return false;
}
analytical_lite_skebg_HideTooltip = function(e){
	var text = jQuery(this).find('.analytical_lite_skebg_tooltip_txt');
	if (text.attr('class') != 'analytical_lite_skebg_tooltip_txt')
	return false;
	text.stop(true,true).fadeOut('fast');
}
analytical_lite_skebg_SetupTooltips = function(){
	jQuery('.analytical_lite_skebg_tooltip')
		.each(function(){
			jQuery(this).append('.');
			jQuery(this)
				.append(jQuery('<span/>')
					.attr('class', 'analytical_lite_skebg_tooltip_txt')
					.html(jQuery(this).attr('title')))
				.attr('title', '');
		})
		.hover(analytical_lite_skebg_ShowTooltip, analytical_lite_skebg_HideTooltip);
}
jQuery(document).ready(function() {
	analytical_lite_skebg_SetupTooltips();
	jQuery('span.analytical_lite_skebg_tooltip_txt').prepend('<div class="analytical_lite_skebg_tarr"></div>');
});
/*---------------------------------------------------*/
jQuery(document).ready(function($) {
	jQuery("form#analytical_lite_skebg_saveform").submit(function(event){
		var data = jQuery(this).serializeArray();
		jQuery.ajax({	
			url:ajaxurl,
			data:data,
			type: "POST",
			beforeSend: function(){
				jQuery('#analytical_lite_skebg_ajaxloader').fadeIn('fast');
				jQuery('.analytical_lite_skebg_overlay').fadeIn('fast');
				jQuery('#analytical_lite_skebg_settsaved').html('');
			},
			success: function(response) {
				if(response == 1){
					jQuery('#analytical_lite_skebg_ajaxloader').fadeOut('fast');
					analytical_lite_skebg_show_message(1);
					t = setTimeout('analytical_lite_skebg_fade_message()', 1000);
				}else{
					jQuery('#analytical_lite_skebg_ajaxloader').fadeOut('fast');
					analytical_lite_skebg_show_message(0);
					t = setTimeout('analytical_lite_skebg_fade_message()', 2700);
				}    
			}
		});
		return false;
	});
});
function analytical_lite_skebg_show_message(n){
	if(n == 1){ jQuery('#analytical_lite_skebg_settsaved').html('<div class="updated_msg"></div>').fadeIn(500);} 
	else if(n == 0){
		jQuery('#analytical_lite_skebg_settsaved').html('<div class="info_msg"></div>').fadeIn(500);
	}
}
function analytical_lite_skebg_fade_message(){jQuery('#analytical_lite_skebg_settsaved').fadeOut(1000);jQuery('.analytical_lite_skebg_overlay').fadeOut(1000);	clearTimeout(t);}