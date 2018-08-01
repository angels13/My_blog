<?php global $themename; global $shortname; ?>
<!-- Donot modify this section code -->
<div id="footer-widget-area" role="complementary" class="clearfix">
	<?php if( get_theme_mod('_sidebar1_title', __('Creative', 'analytical-lite') ) != '' ) { ?>
	<div id="first" class="footer-widget-area">
		<div class="footbar_title colitereg"><?php echo wp_kses_post( get_theme_mod('_sidebar1_title', __('Creative', 'analytical-lite') ) ); ?><a class="farr"></a></div>
		<ul class="xoxo">
			<?php if ( ! dynamic_sidebar( 'footer-first-sidebar-area' )): ?>
			  <li id="archives" class="widget-container">
					<h3 class="widget-title"><?php _e( 'Archives','analytical-lite'); ?></h3>
					<ul>
						<?php wp_get_archives( 'type=monthly' ); ?>
					</ul>
				</li>
			<?php endif;?>
		</ul>
	</div><!-- #first .widget-area -->
	<?php } ?>
	<?php if( get_theme_mod('_sidebar2_title', __('Services', 'analytical-lite') ) != '' ) { ?>
	<div id="second" class="footer-widget-area">
		<div class="footbar_title colitereg"><?php echo wp_kses_post( get_theme_mod('_sidebar2_title', __('Services', 'analytical-lite') ) ); ?><a class="farr"></a></div>
		<ul class="xoxo">
			<?php if (! dynamic_sidebar( 'footer-second-sidebar-area' )): ?>
			  <li id="meta" class="widget-container">
					<h3 class="widget-title"><?php _e( 'Meta', 'analytical-lite' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</li>
			<?php endif;?>
		</ul>
	</div><!-- #second .widget-area -->
	<?php } ?>
	<?php if( get_theme_mod('_sidebar3_title', __('Clients', 'analytical-lite') ) != '' ) { ?>
	<div id="third" class="footer-widget-area">
		<div class="footbar_title colitereg"><?php echo wp_kses_post( get_theme_mod('_sidebar3_title', __('Clients', 'analytical-lite') ) ); ?><a class="farr"></a></div>
		<ul class="xoxo">
			<?php if(! dynamic_sidebar( 'footer-third-sidebar-area' )): ?>
				<li id="archives" class="widget-container">
					<h3 class="widget-title"><?php _e( 'Archives', 'analytical-lite' ); ?></h3>
					<ul>
						<?php wp_get_archives( 'type=monthly' ); ?>
					</ul>
				</li>
			<?php endif;?>
		</ul>
	</div><!-- #third .widget-area -->
	<?php } ?>
</div><!-- #footer-widget-area -->
<!-- Donot modify this section code -->