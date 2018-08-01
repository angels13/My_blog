<?php global $themename; global $shortname; ?>

<?php if ( 'page' == get_option( 'show_on_front' ) ) { ?>

<?php get_header(); ?>
<!-- #Container Area -->
<div id="container">
	<div class="front_content clearfix">
		<?php
			for($skebgi=1;$skebgi < 4;$skebgi++){
				$analytical_lite_skebg_imgT = wp_kses_post( get_theme_mod('_sl'.$skebgi.'_title', __('Title', 'analytical-lite').$skebgi ) );
				$analytical_lite_skebg_imgC = wp_kses_post( get_theme_mod('_sl'.$skebgi.'_content', __('Lorem ipsum dolor sit amet,  sectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 'analytical-lite') ) );
				$analytical_lite_skebg_capsArr[] = array("title"=>$analytical_lite_skebg_imgT,"descp"=>$analytical_lite_skebg_imgC);
			}		
		?>
		<?php if(!empty($analytical_lite_skebg_capsArr)){ ?>
			<div class="skegallry_captions analytical_lite_skebg_fimgcap">
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
		
		<?php if(get_theme_mod('_fvd_title', __('Video Title', 'analytical-lite') ) != '' || get_theme_mod('_fvd_descp', __('Lorem ipsum dolor sit amet,  sectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 'analytical-lite') ) != '' ) { ?>
		<div class="skegallry_captions analytical_lite_skebg_fvdcap" style="display:none;">
			<a class="skegallry_toggle" href="javascript:void(0);" title="hide/show caption"></a>
			<div id="analytical_lite_skebggallery_cap">
				<div class="skegallery_citem" style="display:block;">
					<div class="skegallry_thread"></div>
					<div class="skecap_itemwrap">
						<div class="analytical_lite_skebg_caption" style="display:block;">
							<div class="analytical_lite_skebg_title"><?php echo wp_kses_post( get_theme_mod('_fvd_title', __('Video Title', 'analytical-lite') ) ); ?></div>
							<div class="analytical_lite_skebg_descp"><?php echo wp_kses_post( get_theme_mod('_fvd_descp', __('Lorem ipsum dolor sit amet,  sectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 'analytical-lite') ) ); ?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>

	<?php if ( 'page' == get_option( 'show_on_front' ) ) {  ?>
		<!-- PAGE EDITER CONTENT -->
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
			<div id="front-page-content">
				<div id="content">
					<!-- Blog -->
					<div id="blog_wrapper" class="blog_wrap front-page-blog_wrap clearfix homeblog">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		<?php endif; ?> 
		<!-- \\PAGE EDITER CONTENT -->
	<?php } ?>
</div>
<!-- #Container Area -->

<?php get_footer(); ?>

<?php } else {
	include( get_home_template() );
} ?>