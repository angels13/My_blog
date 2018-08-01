<!-- custom code here -->
<?php
if(get_theme_mod('_layout_struc', 'ls_left') == 'ls_left' ) {
	if(is_page_template('template-gallery.php'))
		$nav_orient = 'h';
	else
		$nav_orient = 'v';
}
elseif(get_theme_mod('_layout_struc', 'ls_left') == 'ls_top' )
	$nav_orient = 'h';
?>
<style type="text/css">
.bc_clr,#skenav a:hover,.entry-title a:link, .entry-title a:visited,.cont_nav a,a:link,a:focus,a:hover,a,.pagenavi a, .pagenavi span.current, .pagenavi .single_page, .pagenavi span.pages,h3#comments-title,
h3#reply-title,h3#comments,.comment-meta a:link, .comment-meta a:visited,#analytical_lite_skebggallery_cap .analytical_lite_skebg_caption .analytical_lite_skebg_title,.comment-author cite.fn{color:<?php echo get_theme_mod('_base_color', '#00a6ff'); ?>;}
.bc_bgclr,#footer-widget-area .footer-widget-area,.pagination span.analytical-title,.pagination a:hover,.head-toggle .bc-box,.pagination .analytical-lite-current{background-color:<?php echo get_theme_mod('_base_color', '#00a6ff'); ?>;}
.bc_bdrclr,#content .entry-title,.pagination .analytical-current,body.ls_left .head-toggle,#contact-page iframe {border-color:<?php echo get_theme_mod('_base_color', '#00a6ff'); ?>;}
#skenav ul ul li.odd{background-color:<?php echo esc_attr( get_theme_mod('_nav_oitem', '#75c6eb') ); ?>; }
#skenav ul ul li.even{background-color:<?php echo esc_attr( get_theme_mod('_nav_eitem', '#1d95cf') ); ?>; }
#skenav ul ul li.current_page_item.even a{color:<?php echo esc_attr( get_theme_mod('_nav_oitem', '#75c6eb') ); ?>; }
#skenav ul ul li.current_page_item.odd a{color:<?php echo esc_attr( get_theme_mod('_nav_eitem', '#1d95cf') ); ?>; }
body.ls_left #head_block,body.skegallery #skenav{border-color:<?php echo esc_attr( get_theme_mod('_base_color', '#00a6ff') ); ?>; }
#skenav ul li.current_page_item > a, #skenav ul li.current-menu-ancestor > a, #skenav ul li.current-menu-item > a, #skenav ul li.current-menu-parent > a {
color:<?php echo get_theme_mod('_base_color', '#00a6ff'); ?>;
}
* html #skenav ul li.current_page_item a, * html #skenav ul li.current-menu-ancestor a, * html #skenav ul li.current-menu-item a, * html #skenav ul li.current-menu-parent a, * html #skenav ul li a:hover, .woocommerce-MyAccount-navigation-link a:hover,.woocommerce-MyAccount-navigation-link.is-active a{
color:<?php echo get_theme_mod('_base_color', '#00a6ff'); ?>;
}
#blog_wrapper .blog_content .post-mata,#blog_wrapper .blog_content .post-mata .post-mon,.searchform,body.ls_top #header-area{border-color:<?php echo get_theme_mod('_base_color2', '#b4eafa'); ?>;}
#blog_wrapper .blog_sidebar .widget-title{color:<?php echo get_theme_mod('_base_color2', '#b4eafa'); ?>;}
.searchform input[type="submit"]{background-color:<?php echo get_theme_mod('_base_color2', '#b4eafa'); ?>;}
</style>
<!-- custom code here -->