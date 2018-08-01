<?php global $shortname; global $themename; ?>
	<!-- #Footer Area -->
	<div id="footer-area">
		<?php get_sidebar('footer'); ?>
		<!-- Footer Copyright info -->
		<div id="foot_copyrt" class="colreg">
			<div class="fcenter copyright_box">
				<?php echo wp_kses_post( get_theme_mod('_copyright') ); ?> | 
		
				<span class="powered-by"><?php printf(__('Analytical Lite BY %s','analytical-lite'),'<a href="'.esc_url('https://sketchthemes.com').'"><strong>SKETCHTHEMES</strong></a>');?>
				</span>
			</div>
		</div>
		<!-- Footer Copyright info -->
	</div>
	<!-- #Footer Area -->
</div>
<?php wp_footer(); ?>
</body>
</html>