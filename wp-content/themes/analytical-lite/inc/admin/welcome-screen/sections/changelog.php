<?php
/**
 * Changelog
 */

$analytical_lite = wp_get_theme( 'analytical-lite' );

?>
<div class="analytical-lite-tab-pane" id="changelog">

	<div class="analytical-tab-pane-center">
	
		<h1>Analytical Lite <?php if( !empty($analytical_lite['Version']) ): ?> <sup id="analytical-lite-theme-version"><?php echo esc_attr( $analytical_lite['Version'] ); ?> </sup><?php endif; ?></h1>

	</div>

	<?php
	WP_Filesystem();
	global $wp_filesystem;
	$analytical_lite_changelog = $wp_filesystem->get_contents( get_template_directory().'/changelog.txt' );
	$analytical_lite_changelog_lines = explode(PHP_EOL, $analytical_lite_changelog);
	foreach($analytical_lite_changelog_lines as $analytical_lite_changelog_line){
		if(substr( $analytical_lite_changelog_line, 0, 3 ) === "###"){
			echo '<hr /><h1>'.substr($analytical_lite_changelog_line,3).'</h1>';
		} else {
			echo $analytical_lite_changelog_line,'<br/>';
		}
	}

	?>
	
</div>