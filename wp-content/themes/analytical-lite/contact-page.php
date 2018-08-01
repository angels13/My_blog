<?php 
/*
Template name: Contact Us Template
*/
get_header(); 
	global $themename;
	global $shortname;
?>
<div id="container" class="clearfix">
	<!-- .content_wrap -->
	<div class="content_wrap">	  
		<!-- #Content -->		
		<div id="content">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<div <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">
						<h2 class="entry-title champlimbld">
							<a href="<?php the_permalink(); ?>" class="champlimbld" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>
						<?php
							if ((class_exists('skt_breadcrumb_class'))) {$skt_breadcumb->analytical_lite_custom_breadcrumb();}
						?>
						<div id="contact-page" class="clearfix">
							<div class="skepost">
								<?php the_content(); ?>				
							</div> <!-- skepost -->
							<?php edit_post_link(__('Edit','analytical-lite'), __('<p>','analytical-lite'), __('</p>','analytical-lite')); ?>
					   </div> 
					</div> <!-- post -->
					<?php endwhile; ?>
					<?php else :  ?>
					<div class="post">
						<h2><?php _e('Page Does Not Exist','analytical-lite'); ?></h2>
					</div>
					<?php endif; ?>			
					<!-- #contact-page -->
		</div>
		<!-- #content -->
	</div>
	<!-- .content_wrap -->	
</div>
<!-- #Container Area -->
<?php get_footer(); ?>