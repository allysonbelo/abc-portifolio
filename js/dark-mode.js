jQuery(document).ready(function () {
    jQuery('#theme-toggle').click(function () {
        jQuery('body').toggleClass('light-mode');
        jQuery(this).toggleClass('light-mode');
    });
});