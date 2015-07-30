
jQuery(document).ready(function () {
    jQuery("#facebook_right").hover(function () {
        jQuery(this)
            .stop(true, false)
            .animate({ right: 0 }, 500); }, function () {
        jQuery("#facebook_right")
            .stop(true, false).animate({ right: -300 }, 500); });
    });
