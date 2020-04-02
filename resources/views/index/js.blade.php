<script data-cfasync="false" src="{{asset('css/email-decode.js')}}"></script>
<script type="text/javascript">
    setREVStartSize({
        c: 'rev_slider_5_1',
        rl: [1240, 1240, 778, 480],
        el: [775, 775, 700, 350],
        gw: [1240, 1240, 778, 320],
        gh: [775, 775, 700, 350],
        layout: 'fullwidth',
        mh: "0"
    });
    var revapi5,
        tpj;
    jQuery(function () {
        tpj = jQuery;
        if (tpj("#rev_slider_5_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_5_1");
        } else {
            revapi5 = tpj("#rev_slider_5_1").show().revolution({
                jsFileLocation: "//mendel-antiques.ancorathemes.com/wp-content/plugins/revslider/public/assets/js/",
                sliderLayout: "fullwidth",
                visibilityLevels: "1240,1240,778,480",
                gridwidth: "1240,1240,778,320",
                gridheight: "775,775,700,350",
                minHeight: "",
                spinner: "spinner0",
                editorheight: "775,768,700,350",
                responsiveLevels: "1240,1240,778,480",
                disableProgressBar: "on",
                navigation: {
                    mouseScrollNavigation: false,
                    onHoverStop: false,
                    touch: {
                        touchenabled: true,
                        touchOnDesktop: true
                    }
                },
                fallbacks: {
                    allowHTML5AutoPlayOnAndroid: true
                },
            });
        }

    });
</script>
</rs-module-wrap>
</div>
</div>
</div>
</div>
<script type="text/javascript">
var ajaxRevslider;
jQuery(document).ready(function () {

ajaxRevslider = function (obj) {
var content = '';
var data = {
action: 'revslider_ajax_call_front',
client_action: 'get_slider_html',
token: 'a945e10489',
type: obj.type,
id: obj.id,
aspectratio: obj.aspectratio
};
jQuery.ajax({
type: 'post',
url: 'http://mendel-antiques.ancorathemes.com/wp-admin/admin-ajax.php',
dataType: 'json',
data: data,
async: false,
success: function (ret, textStatus, XMLHttpRequest) {
if (ret.success == true)
    content = ret.data;
},
error: function (e) {
console.log(e);
}
});

return content;
};

var ajaxRemoveRevslider = function (obj) {
return jQuery(obj.selector + ' .rev_slider').revkill();
};
if (jQuery.fn.tpessential !== undefined)
if (typeof (jQuery.fn.tpessential.defaults) !== 'undefined')
jQuery.fn.tpessential.defaults.ajaxTypes.push({
type: 'revslider',
func: ajaxRevslider,
killfunc: ajaxRemoveRevslider,
openAnimationSpeed: 0.3
});
});
</script>
<script type="text/javascript">
var sbiajaxurl = "http://mendel-antiques.ancorathemes.com/wp-admin/admin-ajax.php";
</script>
<link href="<?php echo asset('index/index6.css')?>" rel="stylesheet" property="stylesheet" media="all" type="text/css">
<script type="text/javascript">
var c = document.body.className;
c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
document.body.className = c;
</script>
<script type="text/javascript">
if (typeof revslider_showDoubleJqueryError === "undefined") {
function revslider_showDoubleJqueryError(sliderID) {
var err = "<div class='rs_error_message_box'>";
err += "<div class='rs_error_message_oops'>Oops...</div>";
err += "<div class='rs_error_message_content'>";
err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' ->  'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
err += "</div>";
err += "</div>";
jQuery(sliderID).show().html(err);
}
}
</script>
<link property="stylesheet" rel='stylesheet' id='vc_tta_style-css' href="<?php echo asset('index/index7.css')?>" type='text/css' media='all'/>
<script type='text/javascript' src="{{asset('index/js/code.min,js')}}"></script>
<script type='text/javascript' src="{{asset('index/js/widget.min.js')}}"></script>
<script type='text/javascript' src="{{asset('index/js/mouse.min.js')}}"></script>
<script type='text/javascript' src="{{asset('index/js/draggable.min.js')}}"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {
"apiSettings": {
"root": "http:\/\/mendel-antiques.ancorathemes.com\/wp-json\/contact-form-7\/v1",
"namespace": "contact-form-7\/v1"
}
};
/* ]]> */
</script>
<script type='text/javascript' src="{{asset('index/js/scripts.js')}}"></script>
<script type='text/javascript' src="{{asset('index/js/datepicker.min.js')}}"></script>
<script type='text/javascript'>
jQuery(document).ready(function (jQuery) {
jQuery.datepicker.setDefaults({
"closeText": "Close",
"currentText": "Today",
"monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
"monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
"nextText": "Next",
"prevText": "Previous",
"dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
"dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
"dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
"dateFormat": "MM d, yy",
"firstDay": 1,
"isRTL": false
});
});
</script>
<script type='text/javascript' src="{{asset('index/js/jquery-ui-timepicker-addon.min.js')}}"></script>
<script type='text/javascript' src="{{asset('index/js/slider.min.js')}}"></script>
<script type='text/javascript' src="{{asset('index/js/button.min.js')}}"></script>
<script type='text/javascript' src="{{asset('index/js/jquery-ui-sliderAccess.js')}}"></script>
<script type='text/javascript' src="{{asset('index/js/swiper.jquery.min.js')}}"></script>
<script type='text/javascript' src="{{asset('index/js/jquery.magnific-popup.min.js')}}"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var TRX_ADDONS_STORAGE = {
"ajax_url": "http:\/\/mendel-antiques.ancorathemes.com\/wp-admin\/admin-ajax.php",
"ajax_nonce": "97687fc03d",
"site_url": "http:\/\/mendel-antiques.ancorathemes.com",
"post_id": "471",
"vc_edit_mode": "0",
"popup_engine": "magnific",
"animate_inner_links": "0",
"user_logged_in": "0",
"email_mask": "^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$",
"msg_ajax_error": "Invalid server answer!",
"msg_magnific_loading": "Loading image",
"msg_magnific_error": "Error loading image",
"msg_error_like": "Error saving your like! Please, try again later.",
"msg_field_name_empty": "The name can't be empty",
"msg_field_email_empty": "Too short (or empty) email address",
"msg_field_email_not_valid": "Invalid email address",
"msg_field_text_empty": "The message text can't be empty",
"msg_search_error": "Search error! Try again later.",
"msg_send_complete": "Send message complete!",
"msg_send_error": "Transmit failed!",
"ajax_views": "",
"menu_cache": [".menu_mobile_inner > nav > ul"],
"login_via_ajax": "1",
"msg_login_empty": "The Login field can't be empty",
"msg_login_long": "The Login field is too long",
"msg_password_empty": "The password can't be empty and shorter then 4 characters",
"msg_password_long": "The password is too long",
"msg_login_success": "Login success! The page should be reloaded in 3 sec.",
"msg_login_error": "Login failed!",
"msg_not_agree": "Please, read and check 'Terms and Conditions'",
"msg_email_long": "E-mail address is too long",
"msg_email_not_valid": "E-mail address is invalid",
"msg_password_not_equal": "The passwords in both fields are not equal",
"msg_registration_success": "Registration success! Please log in!",
"msg_registration_error": "Registration failed!",
"scroll_to_anchor": "1",
"update_location_from_anchor": "0",
"msg_sc_googlemap_not_avail": "Googlemap service is not available",
"msg_sc_googlemap_geocoder_error": "Error while geocode address"
};
/* ]]> */
</script>
<script type='text/javascript' src="{{asset('index/js/trx_addons.js')}}"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var TRX_DEMO_STORAGE = {
"ajax_url": "http:\/\/mendel-antiques.ancorathemes.com\/wp-admin\/admin-ajax.php",
"ajax_nonce": "97687fc03d",
"site_url": "http:\/\/mendel-antiques.ancorathemes.com",
"user_logged_in": "0",
"msg_ajax_error": "Invalid server response! Try again later.",
"tabs_delay": "5000"
};
/* ]]> */
</script>
<script type='text/javascript' src="{{asset('index/js/trx_demo_panels.js')}}"></script>
<script type='text/javascript' src="{{asset('index/js/js.cookie.min.js')}}"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {
"ajax_url": "\/wp-admin\/admin-ajax.php",
"wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
};
/* ]]> */
</script>
<script type='text/javascript' src="{{asset('index/js/woocommerce.min.js')}}"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {
"ajax_url": "\/wp-admin\/admin-ajax.php",
"wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
"cart_hash_key": "wc_cart_hash_628ed1ee6ec9661da1ed4f9e60a23a4b",
"fragment_name": "wc_fragments_628ed1ee6ec9661da1ed4f9e60a23a4b",
"request_timeout": "5000"
};
/* ]]> */
</script>
<script type='text/javascript' src="{{asset('index/js/cart-fragments.min.js')}}"></script>
<script type='text/javascript' src="{{asset('index/js/superfish.js')}}"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var MENDEL_STORAGE = {
"ajax_url": "http:\/\/mendel-antiques.ancorathemes.com\/wp-admin\/admin-ajax.php",
"ajax_nonce": "97687fc03d",
"site_url": "http:\/\/mendel-antiques.ancorathemes.com",
"theme_url": "http:\/\/mendel-antiques.ancorathemes.com\/wp-content\/themes\/mendel",
"site_scheme": "scheme_default",
"user_logged_in": "",
"mobile_layout_width": "767",
"mobile_device": "",
"menu_side_stretch": "",
"menu_side_icons": "1",
"background_video": "",
"use_mediaelements": "1",
"comment_maxlength": "1000",
"admin_mode": "",
"email_mask": "^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$",
"strings": {
"ajax_error": "Invalid server answer!",
"error_global": "Error data validation!",
"name_empty": "The name can&#039;t be empty",
"name_long": "Too long name",
"email_empty": "Too short (or empty) email address",
"email_long": "Too long email address",
"email_not_valid": "Invalid email address",
"text_empty": "The message text can&#039;t be empty",
"text_long": "Too long message text"
},
"alter_link_color": "#838a40",
"button_hover": "slide_left",
"stretch_tabs_area": "1"
};
/* ]]> */
</script>
<script type='text/javascript' src="{{asset('index/js/__scripts.js')}}"></script>
<script type='text/javascript'>
var mejsL10n = {
"language": "en", "strings": {
"mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
"mejs.fullscreen-off": "Turn off Fullscreen",
"mejs.fullscreen-on": "Go Fullscreen",
"mejs.download-video": "Download Video",
"mejs.fullscreen": "Fullscreen",
"mejs.time-jump-forward": ["Jump forward 1 second", "Jump forward %1 seconds"],
"mejs.loop": "Toggle Loop",
"mejs.play": "Play",
"mejs.pause": "Pause",
"mejs.close": "Close",
"mejs.time-slider": "Time Slider",
"mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
"mejs.time-skip-back": ["Skip back 1 second", "Skip back %1 seconds"],
"mejs.captions-subtitles": "Captions\/Subtitles",
"mejs.captions-chapters": "Chapters",
"mejs.none": "None",
"mejs.mute-toggle": "Mute Toggle",
"mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
"mejs.unmute": "Unmute",
"mejs.mute": "Mute",
"mejs.volume-slider": "Volume Slider",
"mejs.video-player": "Video Player",
"mejs.audio-player": "Audio Player",
"mejs.ad-skip": "Skip ad",
"mejs.ad-skip-info": ["Skip in 1 second", "Skip in %1 seconds"],
"mejs.source-chooser": "Source Chooser",
"mejs.stop": "Stop",
"mejs.speed-rate": "Speed Rate",
"mejs.live-broadcast": "Live Broadcast",
"mejs.afrikaans": "Afrikaans",
"mejs.albanian": "Albanian",
"mejs.arabic": "Arabic",
"mejs.belarusian": "Belarusian",
"mejs.bulgarian": "Bulgarian",
"mejs.catalan": "Catalan",
"mejs.chinese": "Chinese",
"mejs.chinese-simplified": "Chinese (Simplified)",
"mejs.chinese-traditional": "Chinese (Traditional)",
"mejs.croatian": "Croatian",
"mejs.czech": "Czech",
"mejs.danish": "Danish",
"mejs.dutch": "Dutch",
"mejs.english": "English",
"mejs.estonian": "Estonian",
"mejs.filipino": "Filipino",
"mejs.finnish": "Finnish",
"mejs.french": "French",
"mejs.galician": "Galician",
"mejs.german": "German",
"mejs.greek": "Greek",
"mejs.haitian-creole": "Haitian Creole",
"mejs.hebrew": "Hebrew",
"mejs.hindi": "Hindi",
"mejs.hungarian": "Hungarian",
"mejs.icelandic": "Icelandic",
"mejs.indonesian": "Indonesian",
"mejs.irish": "Irish",
"mejs.italian": "Italian",
"mejs.japanese": "Japanese",
"mejs.korean": "Korean",
"mejs.latvian": "Latvian",
"mejs.lithuanian": "Lithuanian",
"mejs.macedonian": "Macedonian",
"mejs.malay": "Malay",
"mejs.maltese": "Maltese",
"mejs.norwegian": "Norwegian",
"mejs.persian": "Persian",
"mejs.polish": "Polish",
"mejs.portuguese": "Portuguese",
"mejs.romanian": "Romanian",
"mejs.russian": "Russian",
"mejs.serbian": "Serbian",
"mejs.slovak": "Slovak",
"mejs.slovenian": "Slovenian",
"mejs.spanish": "Spanish",
"mejs.swahili": "Swahili",
"mejs.swedish": "Swedish",
"mejs.tagalog": "Tagalog",
"mejs.thai": "Thai",
"mejs.turkish": "Turkish",
"mejs.ukrainian": "Ukrainian",
"mejs.vietnamese": "Vietnamese",
"mejs.welsh": "Welsh",
"mejs.yiddish": "Yiddish"
}
};
</script>
<script type='text/javascript' src="{{asset('index/js/mediaelement-and-player.min.js')}}"></script>
<script type='text/javascript' src="{{asset('index/js/mediaelement-migrate.min.js')}}"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpmejsSettings = {
"pluginPath": "\/wp-includes\/js\/mediaelement\/",
"classPrefix": "mejs-",
"stretching": "responsive"
};
/* ]]> */
</script>
<script type='text/javascript' src="{{asset('index/js/wp-mediaelement.min.js')}}"></script>
<script type='text/javascript' src="{{asset('index/js/wp-embed.min.js')}}"></script>
<script type='text/javascript' src="{{asset('index/js/js_composer_front.min.js')}}"></script>
<script type='text/javascript' src="{{asset('index/js/vc-accordion.min.js')}}"></script>
<script type='text/javascript' src="{{asset('index/js/vc-tta-autoplay.min.js')}}"></script>
<script type='text/javascript' src="{{asset('index/js/vc-tabs.min.js')}}"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var sb_instagram_js_options = {
"font_method": "svg",
"resized_url": "http:\/\/mendel-antiques.ancorathemes.com\/wp-content\/uploads\/sb-instagram-feed-images\/",
"placeholder": "http:\/\/mendel-antiques.ancorathemes.com\/wp-content\/plugins\/instagram-feed\/img\/placeholder.png"
};
/* ]]> */
</script>
<script type='text/javascript'
src="{{asset('index/js/sb-instagram-2-2.min.js')}}"></script>
<a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up"
title="Scroll to top"></a>
