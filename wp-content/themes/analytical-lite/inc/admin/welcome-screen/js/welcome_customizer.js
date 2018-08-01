jQuery(document).ready(function() {
    var analytical_aboutpage = analyticalLiteWelcomeScreenCustomizerObject.aboutpage;
    var analytical_nr_actions_required = analyticalLiteWelcomeScreenCustomizerObject.nr_actions_required;

    /* Number of required actions */
    if ((typeof analytical_aboutpage !== 'undefined') && (typeof analytical_nr_actions_required !== 'undefined') && (analytical_nr_actions_required != '0')) {
        jQuery('#accordion-section-themes .accordion-section-title').append('<a href="' + analytical_aboutpage + '"><span class="analytical-lite-actions-count">' + analytical_nr_actions_required + '</span></a>');
    }

    /* Upsell in Customizer (Link to Welcome page) */
    if ( !jQuery( ".analytical-upsells" ).length ) {
        jQuery('#customize-theme-controls > ul').prepend('<li class="accordion-section analytical-upsells">');
    }
    if (typeof analytical_aboutpage !== 'undefined') {
        jQuery('.analytical-upsells').append('<a style="width: 80%; margin: 5px auto 5px auto; display: block; text-align: center;" href="' + analytical_aboutpage + '" class="button" target="_blank">{themeinfo}</a>'.replace('{themeinfo}', analyticalLiteWelcomeScreenCustomizerObject.themeinfo));
    }
    if ( !jQuery( ".analytical-upsells" ).length ) {
        jQuery('#customize-theme-controls > ul').prepend('</li>');
    }
});