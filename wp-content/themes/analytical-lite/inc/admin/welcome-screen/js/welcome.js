jQuery(document).ready(function() {
	
	/* Tabs in welcome page */
	function analytical_welcome_page_tabs(event) {
		jQuery(event).parent().addClass("active");
        jQuery(event).parent().siblings().removeClass("active");
        var tab = jQuery(event).attr("href");
        jQuery(".analytical-lite-tab-pane").not(tab).css("display", "none");
        jQuery(tab).fadeIn();
	}
	
	var analytical_actions_anchor = location.hash;
	
	if( (typeof analytical_actions_anchor !== 'undefined') && (analytical_actions_anchor != '') ) {
		analytical_welcome_page_tabs('a[href="'+ analytical_actions_anchor +'"]');
	}
	
    jQuery(".analytical-lite-nav-tabs a").click(function(event) {
        event.preventDefault();
		analytical_welcome_page_tabs(this);
    });

});