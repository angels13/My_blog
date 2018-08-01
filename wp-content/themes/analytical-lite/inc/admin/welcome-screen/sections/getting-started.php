<?php
/**
 * Getting started template
 */

$customizer_url = admin_url() . 'customize.php' ;
?>

<div id="getting_started" class="analytical-lite-tab-pane active">

	<div class="analytical-tab-pane-center">

		<h1 class="analytical-lite-welcome-title">Welcome to Analytical Lite! <?php if( !empty($analytical_lite['Version']) ): ?> <sup id="analytical-lite-theme-version"><?php echo esc_attr( $analytical_lite['Version'] ); ?> </sup><?php endif; ?></h1>

		<p><?php esc_html_e( 'Our one of the popular free minimal, responsive and Elegant Business WordPress theme, Analytical Lite!','analytical-lite'); ?></p>
		<p><?php esc_html_e( 'We want to make sure you have the best experience using Analytical Lite and that is why we gathered here all the necessary informations for you. We hope you will enjoy using Analytical Lite, as much as we enjoy creating great products.', 'analytical-lite' ); ?>

	</div>

	<hr />

	<div class="analytical-tab-pane-center">

		<h1><?php esc_html_e( 'Getting started', 'analytical-lite' ); ?></h1>

		<h4><?php esc_html_e( 'Customize everything in a single place.' ,'analytical-lite' ); ?></h4>
		<p><?php esc_html_e( 'Using the WordPress Customizer you can easily customize every aspect of the theme.', 'analytical-lite' ); ?></p>
		<p><a href="<?php echo esc_url( $customizer_url ); ?>" class="button button-primary"><?php esc_html_e( 'Go to Customizer', 'analytical-lite' ); ?></a></p>

	</div>

	<hr />

	<div class="analytical-tab-pane-center">

		<h1><?php esc_html_e( 'FAQ', 'analytical-lite' ); ?></h1>

	</div>

	<div class="analytical-tab-pane-half analytical-tab-pane-first-half">

		<h4><?php esc_html_e( 'Create a child theme', 'analytical-lite' ); ?></h4>
		<p><?php esc_html_e( 'If you want to make changes to the theme\'s files, those changes are likely to be overwritten when you next update the theme. In order to prevent that from happening, you need to create a child theme. For this, please follow the documentation below.', 'analytical-lite' ); ?></p>
		<p><a href="<?php echo esc_url( 'https://codex.wordpress.org/Child_Themes' ); ?>" class="button"><?php esc_html_e( 'View how to do this', 'analytical-lite' ); ?></a></p>

		<hr />
		
		<h4><?php esc_html_e( 'How to set front page?', 'analytical-lite' ); ?></h4>
		<p><?php esc_html_e( 'You can set the front page to a static page from Setting -> Reading.', 'analytical-lite' ); ?></p>
		<p><a href="<?php echo esc_url( 'https://codex.wordpress.org/Creating_a_Static_Front_Page#WordPress_Static_Front_Page_Process/' ); ?>" class="button"><?php esc_html_e( 'View how to do this', 'analytical-lite' ); ?></a></p>

	</div>

	<div class="analytical-tab-pane-half">

		<h4><?php esc_html_e( 'Translate Analytical Lite', 'analytical-lite' ); ?></h4>
		<p><?php esc_html_e( 'In the below documentation you will find an easy way to translate Analytical Lite into your native language or any other language you need for you site.', 'analytical-lite' ); ?></p>
		<p><a href="<?php echo esc_url( 'https://sketchthemes.com/blog/effective-steps-to-translate-your-wordpress-theme-using-qtranslate-x/' ); ?>" class="button"><?php esc_html_e( 'View how to do this', 'analytical-lite' ); ?></a></p>

		<hr />

		<h4><?php esc_html_e( 'What if I have any problems?', 'analytical-lite' ); ?></h4>
		<p><?php esc_html_e( 'In case of any problems or help you can search to see if your topic has been started already or post a new support topic.', 'analytical-lite' ); ?></p>
		<p><a href="<?php echo esc_url( 'https://wordpress.org/support/theme/analytical-lite' ); ?>" class="button"><?php esc_html_e( 'View how to do this', 'analytical-lite' ); ?></a></p>
		
	</div>

	<div class="analytical-lite-clear"></div>

</div>
