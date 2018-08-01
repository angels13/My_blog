<?php global $shortname; global $themename; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- #Header Area -->
<div id="head_block"></div>
<div id="main-wrap" class="<?php if(get_theme_mod('_layout_struc') == 'ls_left') echo "clearfix"; ?>">
<div class="header_wrap">
	<div id="header-area">
		<div id="header">
			<!-- social links -->
			<?php if( get_theme_mod('_fbook_link') || get_theme_mod('_twitter_link') || get_theme_mod('_gplus_link') || get_theme_mod('_ytube_link') || get_theme_mod('_pint_link') || get_theme_mod('_drib_link') || get_theme_mod('_wordp_link')) { ?>
			<div class="social_icons clearfix">
				<div class="social_wrap">
					<?php if(get_theme_mod('_fbook_link', '#') != '' ) { ?>
						<a target="_blank" href="<?php echo esc_url(get_theme_mod('_fbook_link')); ?>"><div class="gc_social_button facebook"></div></a>
					<?php } ?>
					<?php if(get_theme_mod('_twitter_link', '#') != '' ) { ?>
						<a target="_blank" href="<?php echo esc_url(get_theme_mod('_twitter_link')); ?>"><div class="gc_social_button twitter"></div></a>
					<?php } ?>
					<?php if(get_theme_mod('_gplus_link', '#') != '' ) { ?>
						<a target="_blank" href="<?php echo esc_url(get_theme_mod('_gplus_link')); ?>"><div class="gc_social_button gplus"></div></a>
					<?php } ?>
					<?php if(get_theme_mod('_ytube_link', '#') != '' ) { ?>
						<a target="_blank" href="<?php echo esc_url(get_theme_mod('_ytube_link')); ?>"><div class="gc_social_button ytube"></div></a>
					<?php } ?>
					<?php if(get_theme_mod('_pint_link', '#') != '' ) { ?>
						<a target="_blank" href="<?php echo esc_url(get_theme_mod('_pint_link')); ?>"><div class="gc_social_button pint"></div></a>
					<?php } ?>
					<?php if(get_theme_mod('_drib_link', '#') != '' ) { ?>
						<a target="_blank" href="<?php echo esc_url(get_theme_mod('_drib_link')); ?>"><div class="gc_social_button drib"></div></a>
					<?php } ?>
					<?php if(get_theme_mod('_wordp_link', '#') != '' ) { ?>
						<a target="_blank" href="<?php echo esc_url(get_theme_mod('_wordp_link')); ?>"><div class="gc_social_button wordp"></div></a>
					<?php } ?>
					<?php if(get_theme_mod('_linkedin_link', '#') != '' ) { ?>
						<a target="_blank" href="<?php echo esc_url(get_theme_mod('_linkedin_link')); ?>"><div class="gc_social_button linkedin"></div></a>
					<?php } ?>
					<?php if(get_theme_mod('_instagram_link', '#') != '' ) { ?>
						<a target="_blank" href="<?php echo esc_url(get_theme_mod('_instagram_link')); ?>"><div class="gc_social_button instagram"></div></a>
					<?php } ?>
				</div>
			</div>
			<?php } ?>
			<!-- social links -->
			<!-- Top Head Section -->
			<div id="top-head" class="clearfix">
				<div class="left-section">
				 <?php if(get_theme_mod('_logo_img', '') != '' ) { ?>
					<!-- #logo -->
						<a id="logo" href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name') ?>" style="display:block;">
							<img src="<?php echo esc_url(get_theme_mod('_logo_img')); ?>" alt="<?php bloginfo('name') ?>" />
						</a>
					<!-- #logo -->
					<?php } else{ ?>
					<!-- #description -->
						<div class="logo_desp">
							<a id="logo" href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name') ?>" style="display:block;"><?php bloginfo('name'); ?></a> 
							<div id="site-description "><?php bloginfo( 'description' ); ?></div>
						</div>
					<!-- #description -->
					<?php } ?>
				</div>
				<div class="right-section">
					<div class="menu_wrapper">
						<!-- Hedaer Navigation  -->
						<div id="skenav" class="colitereg">
							<div id="nav_outerwrap">
								<?php if(get_theme_mod('_flogo_img','') != ''){ ?>
								<!-- #logo -->
								<a id="floating_logo" href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name') ?>">
									<img src="<?php echo esc_url(get_theme_mod('_flogo_img')); ?>" alt="<?php bloginfo('name') ?>" />
								</a>
								<!-- #logo -->
								<?php } ?>
								<?php analytical_lite_nav(); ?>
								<input type="hidden" id="clrschm" value="<?php echo esc_attr(get_theme_mod('_base_color2','#b4eafa')); ?>" />
							</div>
						</div>
						<!-- Hedaer Navigation  -->
					</div>
				</div>
			</div>
			<!-- Top Head Section -->
			<!-- Bottom Head Section -->
			<div id="bottom-head">
				<!-- Contact us block -->
				<?php if(get_theme_mod('_sconus_content','(+40) 111 222 333<br />test@test.com<br />the address<br />city, state<br />') != '' ){ ?>
					<div class="side_contus colitereg">
						<div class="sc_title"><?php _e('Contact Us','analytical-lite'); ?></div>
						<div class="sc_text"><?php echo wp_kses_post( get_theme_mod('_sconus_content','(+40) 111 222 333<br />test@test.com<br />the address<br />city, state<br />') ); ?></div>
					</div>
				<?php } ?>
				<!-- Contact us block -->
				<!-- Copyright block -->
				
					<div class="copyright_box colreg"><?php if(get_theme_mod('_copyright','') != ''){ echo wp_kses_post(get_theme_mod('_copyright')); } ?><div class="powered-by"><?php _e('Analytical Lite By','analytical-lite');?> <a title="Sketch Themes" target="_blank" href="https://sketchthemes.com">SketchThemes</a></div></div>
				<!-- Copyright block -->
			</div>
			<!-- Bottom Head Section -->
		</div>
	</div>
	<div class="head-toggle" title="close/open" ><a></a><div class="bc-box"></div></div>
</div>
<!-- #Header Area -->