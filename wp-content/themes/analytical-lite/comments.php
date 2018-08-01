<?php
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die (__('Please do not load this page directly. Thanks!','analytical-lite'));
	if ( post_password_required() ) { ?>
<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','analytical-lite'); ?></p>
<?php
		return;
	}
?>
<!-- You can start editing here. -->
<div id="commentsbox">
<?php if ( have_comments() ) : ?>
	<h3 id="comments"><?php comments_number(__('No Comments','analytical-lite'), __('One Comment','analytical-lite'), __('% Comments ','analytical-lite'));?><?php _e(' so far:','analytical-lite'); ?></h3>
	<ol class="commentlist">
		<?php wp_list_comments(); ?>
	</ol>
	<div class="comment-nav">
		<div class="alignleft">
			<?php previous_comments_link() ?>
		</div>
		<div class="alignright">
			<?php next_comments_link() ?>
		</div>
	</div>
<?php else : // this is displayed if there are no comments so far ?>
	<?php if ( ! comments_open() && ! is_page() ) : ?>
		<?php _e('Comments are closed.','analytical-lite'); ?>
	<?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
<div class="depth_bdr"></div>
	<div id="comment-form">
		<?php 
		$args = array(
			'title_reply' => __( 'Leave your Comment','analytical-lite' ),
			'title_reply_to' => __( 'Leave your Comment to %s','analytical-lite' ),
			'cancel_reply_link' => __( 'Cancel your Comment','analytical-lite' )
			);
		?>
		<?php comment_form($args); ?>
	</div>
<?php endif; // if you delete this the sky will fall on your head ?>
</div>