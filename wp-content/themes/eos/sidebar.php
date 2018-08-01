<?php $aOptions = get_option('eos_options'); ?>
<div class="SideBars">
<div class="SidebarButtons">
	<?php if($aOptions['enableRSSIcon']): ?><a class="RssButton" href="<?php bloginfo('rss2_url'); ?>"><?php bloginfo('name'); ?></a><?php endif; ?>
<!-- twitter -->
	<?php if($aOptions['enableTwitterIcon'] && $aOptions['twitterURL']): ?>
	<a class="TwitterButton" href="<?php print $aOptions['twitterURL']; ?>"><?php bloginfo('name'); ?></a>
	<?php endif; ?>
<!-- twitter end -->

<!-- facebook -->
	<?php if($aOptions['enableFacebookIcon'] && $aOptions['facebookURL']): ?>
	<a class="FacebookButton" href="<?php print $aOptions['facebookURL']; ?>"><?php bloginfo('name'); ?></a>
	<?php endif; ?>
<!-- facebook end -->

</div>
<div class="SideBar_Full">
	<ul>
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_full') ) : ?>
	
	<li>
	<div class="sidebarbox">
	<h2><?php _e('Recent Posts', 'Eos'); ?></h2>
	<ul>
	<?php wp_get_archives('type=postbypost&limit=10'); ?>
	</ul>
	</div>
	</li>
	
	<li>
	<div class="sidebarbox">
	<h2><?php _e('Browse by Tags', 'Eos'); ?></h2>
	<?php wp_tag_cloud('smallest=8&largest=17&number=30'); ?>
	</div>
	</li>
	
	<?php endif; ?>
	
	</ul>
</div><!-- Closes .SideBar_Full -->



<!-- Closes .SideBar_Right -->
<div class="SideBar_Full_Bottom">
	<ul>
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_full_bottom') ) : ?>
	<?php endif; ?>
	
	</ul>
</div>

<!-- Closes .SideBar_Full -->
</div><!-- Closes .SideBars -->



