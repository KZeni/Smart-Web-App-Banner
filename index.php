<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Smart Web App Banner (jQuery Plugin)</title>
<meta name="description" content="This small jQuery plugin gets you iOS 6 &amp; 7 Smart App Banners for Web Apps. Quick to implement, configurable, and free for you to use." />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png"/>
<link rel="stylesheet" type="text/css" href="jQuery.smartWebBanner.css?v=1.5"/>
<style type="text/css">
body { font-family:'Helvetica Neue',Arial,sans-serif; background:#fa4343; }
a { color:#149aff; }
a:hover { color:#30a6ff; }
a:active { color:#333; }
.button { border:1px solid #bfbfbf; padding:4px 21px; font-size:1.2em; text-align:center; font-weight:bold; color:#6a6a6a; background:-webkit-linear-gradient(top, #efefef 0%,#dcdcdc 100%); text-decoration:none; text-shadow:0 1px 0 rgba(255,255,255,0.8); border-radius:3px; box-shadow:0 1px 0 rgba(255,255,255,0.6),0 1px 0 rgba(255,255,255,0.7) inset; }
.button:hover{ color:#7c7c7c; background:-webkit-linear-gradient(top, #fdfdfd 0%,#dcdcdc 100%); }
.button:active,.button.active { color:#444; background:-webkit-linear-gradient(top, #dcdcdc 0%,#efefef 100%); }
#site { margin:3em auto 2em; padding:0.5em 2em 2em; border:3px solid #ff7e7e; max-width:860px; line-height:1.4em; color:#444; background:#fff; box-shadow:0 12px 30px rgba(0,0,0,0.2); }
#site h1 { line-height:1.2em; }
#site li { margin:0.5em 0; }
#share { float:right; padding:12px 0 0; width:100px; }
#webkit-alert { display:none; padding:3px 10px; border:1px solid #E1E16D; color:#000; background:lightYellow; box-shadow:0 3px 5px rgba(0,0,0,0.4); }
#footer { margin:0 0 4em; font-size:0.8em; text-align:center; color:#b20000; text-shadow:0 1px 0 rgba(255,255,255,0.5); }
#footer a { color:#b20000; text-decoration:none; }
</style>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?1uRux7h32RdxtnPszozEzdUxc2fvB60Y';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=139633696125963";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="site">
	<div id="share">
		<div class="fb-like" data-href="http://kurtzenisek.com/p/smart-web-banner/" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" data-font="arial"></div>
		<iframe src="http://ghbtns.com/github-btn.html?user=KZeni&repo=Smart-Web-App-Banner&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="100" height="20"></iframe>
	</div><!-- #share -->
	<h1>jQuery Smart Web App Banner</h1>
	<p>Looking for the iOS 6 &amp; 7+ Smart Banner, but saddened by it only supporting apps on the App Store &amp; not web apps? This little jQuery-powered script is here to help. Add this small script to your site &amp; invite your visitors to save your site to their home screen alongside the rest of their apps!</p>
	<p>Take a look at the top of this page to see a preview of the banner.</p>
	<p id="webkit-alert">Smart Web App Banner was made to look its best in Mobile Safari. For the sake of keeping the file size small, code wasn't added to make it look as good in Firefox or IE.<br /><em>This preview looks best in Chrome, Safari, or on an iOS device.</em></p>
	<h2>Quick Preview</h2>
	<p><a href="#auto" class="theme-toggle button active">Auto</a> <a href="#ios7" class="theme-toggle button">iOS 7+</a> <a href="#ios6" class="theme-toggle button">iOS 6</a> <a href="#dark" class="theme-toggle button">Dark</a></p>
	<h2>Features</h2>
	<ul>
		<li>The iOS 6 &amp; 7+ Smart Banner look &amp; feel, but made for web apps!</li>
		<li>Intelligently shows iOS 6/7+ banner design depending on the what the visitor is using.</li>
		<li>Slides the <em>entire site</em> down rather than obstructing the page from your visitors with a popup.</li>
		<li>Add CSS &amp; JavaScript, and call the script... that's it. Graphics utilize CSS 3 &amp; use embedded icons at retina resolution (which is perfect for Mobile Safari) so there's no images to be concerned about.</li>
		<li>Only shown when using Mobile Safari since that's the only browser with home screen integration.</li>
		<li>Set how long it will be before the banner is shown again after it's closed &amp; after the visitor presses "save" (avoids annoying visitors).</li>
		<li>Automatic icon detection via &lt;link&gt; tag (isn't shown if it isn't available, lets you easily overwrite it if desired, and it even adds gloss to the icon if it detects it isn't precomposed [can also be set via an option]).</li>
		<li>Can automatically add <code>&lt;meta name="apple-mobile-web-app-capable" content="yes" /&gt;</code> if not already present (saves site as a web app when added to home screen &amp; makes it so the banner isn't shown when revisiting the site).</li>
		<li>Can be scaled/resized to fit your site's mobile viewport by changing the font-size of #smartWebBanner &amp; #swb-instructions via CSS to have the rest scales with it (add .ipad to the selector for iPad-specific sizes).</li>
		<li>Device-specific instructions ("add to home screen" is at the top of an iPad while it's at the bottom of an iPhone). Even matches the look &amp; feel of the device's native popup (subtle color &amp; size difference).</li>
		<li>Swaps out the page's URL with specified URL (using HTML5 replaceState) so that's what the home screen icon takes the visitor to after saving it rather than the page they happened to be on when they went to add it to their home screen (which is the default behavior). For example, make it so the home screen button is always your homepage.</li>
		<li>Swaps out the page's title with the specified title so that's what the icon's default label is when adding it to the home screen (which would otherwise use the existing page title). Seems minor, but this can be impactful.</li>
		<li>Helpful debug option (sets the banner to be shown in all browsers &amp; disregards the already closed/saved cookies) makes previewing/testing the banner a breeze.</li>
		<li>Light &amp; Dark themes to make it fit your site design (I really love both). Preview the themes with the buttons above, or <a href="#dark" class="theme-toggle">click here</a>.</li>
		<li>Show/hide the banner on demand using <code><a href="#show">$().smartWebBanner('show');</a></code> &amp; <code><a href="#hide">$().smartWebBanner('hide');</a></a></code> (click to preview).</li>
		<li>Incredibly configurable via plenty of options! *See example below for full list.</li>
	</ul>
	<h2>Roadmap</h2>
	<ul>
		<li>Implement Chrome support & style for Android devices.</li>
		<li>Improve the autoApp feature that adds the mobile-web-app meta tag so that it also prevents normal (non-AJAX) links from opening in Safari (unless leaving the domain or going to a media file [due to lack of a back button]). Change the default autoApp setting as it's now much more useful for standard sites.</li>
		<li>Consider implementing in WordPress plugin form for those looking for this functionality without the ability/time to implement the script itself (have it pull the blog's name for the title &amp; description for the "author"), and look into building out a plugin settings page for the script's options.</li>
		<li>Get feedback from the community!</li>
	</ul>
	<h2>Changelog</h2>
	<p>Version 1.5 - August 8, 2017</p>
	<ul>
		<li>Added <code>swb:shown</code> and <code>swb:closed</code> events/triggers to the <code>$('#smartWebBanner')</code> element that are fired when the banner is shown and closed, respectively. This allows actions to occur when the banner is shown/hidden (ex. <code>$('#smartWebBanner').on('swb:closed',function(){alert('Banner was closed');});</code>)</li>
		<li>Made the HTML element have <code>.swb-shown</code> and <code>.swb-closed</code> toggled depending on if the banner is shown or closed. This allows any parts of the site to be changed based on wheter the banner is shown by referencing those CSS classes.</li>
		<li>Updated script to follow JSHint.</li>
		<li>Implemented SCSS for the working stylesheet.</li>
		<li>Made sure &quot;apple-mobile-web-app-title&quot; meta tag content/value is used for the homescreen icon's text label/title instead of the page's <code>&gt;title&lt;</code> tag when present (still used as the fallback).</li>
	</ul>
	<p>Version 1.4 - May 24, 2014</p>
	<ul>
		<li>Updated to use iOS 7 design on iPhones &amp; iPads running iOS 7 (new icons, locations, popups, and overall design).</li>
		<li>Now auto-selects iOS 6/7 style when appropriate. Important: Theme names have changed as there is now "Auto" (default), "iOS 6", "iOS 7", and "Dark". Auto will use either iOS 6 & 7 depending on what the device is running.</li>
	</ul>
	<p>May 20, 2014</p>
	<ul>
		<li>jQuery Smart Web App Banner is now available on <a href="http://cdnjs.com/libraries/jquery-smart-web-app-banner" target="_blank">cdnjs.com</a> as a hosted CDN option!</li>
	</ul>
	<p>Version 1.3 - March 22, 2013</p>
	<ul>
		<li>Added feature that swaps out the page's URL with the URL that's specified via the script's options. This means you can set it to the homepage of your site so that using the Add to Home Screen feature will save the homepage rather than the page that the visitor is on (the default behavior).</li>
		<li>Still stuck on jQuery older than version 1.7? This URL swapping feature has been added to that version as well &amp; is available <a href="jQuery.smartWebBanner.pre-1.7.min.js">here</a> (it's otherwise recommended to run the latest version found below).</li>
	</ul>
	<p>Version 1.2 - March 20, 2013</p>
	<ul>
		<li>Changed how the CSS is structured to only use three px values &amp; use em for the rest. This allows for the scale of the banner to be changed while still preventing external font sizes from unintentionally affecting it.</li>
	</ul>
	<p>Version 1.1.2 - March 20, 2013</p>
	<ul>
		<li>Swapped out .live() for .on() for jQuery 1.9+ compatibility.<br />Now requires jQuery 1.7+, but the previous version can be downloaded <a href="jQuery.smartWebBanner.pre-1.7.min.js">here</a> (using the latest CSS will work).</li>
	</ul>
	<p>Version 1.1.1 - October 3, 2012</p>
	<ul>
		<li>Added option to enable the auto-addition of the mobile-web-app meta tag (disabled by default).</li>
	</ul>
	<p>Version 1.1 - September 27, 2012</p>
	<ul>
		<li>Added feature that swaps out the page's &lt;title&gt; attribute with the title that's specified via the script's options.</li>
		<li>Added option to disable the new title swap feature.</li>
	</ul>
	<p>Version 1.0 - September 19, 2012</p>
	<ul>
		<li>Initial Release (same day as iOS 6).</li>
	</ul>
	<h2>Beginner's Getting Started Guide</h2>
	<p><a href="https://gist.github.com/KZeni/cbd6e19e94617cda9a16#file-getting-started-md" class="button" target="_blank">Open Getting Started Guide</a></p>
	<h2>Example (using default settings)</h2>
	<script src="https://gist.github.com/KZeni/9606241.js"></script>
	<h2>Example (with full options)</h2>
	<script src="https://gist.github.com/KZeni/9606221.js"></script>
	<h2>Example of additional code to toggle a class on the HTML element when the banner's shown/hidden</h2>
	<script src="https://gist.github.com/KZeni/2c7be4ccbed2914082492b72ff17cde1.js"></script>
	<h2 id="download">Download Now</h2>
	<p>
		<a href="http://gum.co/jquery-smart-web-app-banner" class="button">Download</a><script type="text/javascript" src="https://gumroad.com/js/gumroad.js"></script>
		<a href="http://cdnjs.com/libraries/jquery-smart-web-app-banner" target="_blank" class="button">Use cdnjs</a>
	</p>
	<p><strong>Pay What You Want:</strong> Free is an option! <em>Just enter $0</em>; that's cool!<br />I wanted a way for those who'd like to support the project to share a few bucks. Pressing "<a href="http://gum.co/jquery-smart-web-app-banner">download</a>" asks for your email, but you won't be spammed (it's simply used to give you a receipt &amp; a backup download link).</p>
	<p><strong>Using a CDN:</strong> <a href="http://cdnjs.com/libraries/jquery-smart-web-app-banner" target="_blank">cdnjs.com</a> makes it quick &amp; easy to add the script (complete with CSS) to your site with the benefits of a CDN. It even supports multiple protocols so it's encouraged to leave the protocol off.</p>
	<p><strong>It is open source:</strong> You can <a href="https://github.com/KZeni/Smart-Web-App-Banner" target="_blank">view it on Github</a> and download from there too!</p>
	<p>Requires: jQuery v1.7 or later<br />Still using jQuery 1.3.2 - 1.8.x? Use the jQuery.smartWebBanner.pre-1.7.min.js file instead.</p>
	<h2 id="support">Support</h2>
	<p><a href="http://www.google.com/recaptcha/mailhide/d?k=01mU-MMXHEZiapIGiiSSe78Q==&amp;c=h-nAexn4QTO2z6nieTeXVg==" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501mU-MMXHEZiapIGiiSSe78Q\75\75\46c\75h-nAexn4QTO2z6nieTeXVg\75\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address" class="button">Email me</a></p>
	<p><a href="https://github.com/KZeni/Smart-Web-App-Banner" target="_blank">View on Github</a></p>
	<h2 id="faqs">FAQs</h2>
	<p><strong>Need to have it save the homepage of your site rather than the page the visitor is on?</strong><br />Saving a page to the home screen saves the current page by default, but you can set the <code>url</code> option to be whatever URL you would like it to save &amp; the plugin takes care of the rest.</p>
	<p>Tip: set <code>url</code> to <code>'/'</code> to have it always be the homepage of your site while being independent of the domain itself. Also, it can't be a different domain for security reasons.</p>
	<p><strong>Need to adjust the size of the banner to fit the scale of your site?</strong><br />This plugin's CSS was built to refer to two elements (with one variant) that then determines the size of everything else. Simply change the font-size for #smartWebBanner &amp; #swb-instructions (add .ipad for iPad-specific sizes) in your own CSS (or edit the plugin directly) to fit your needs. Seriously, it even works on the fly: <a href="#" onclick="jQuery('#smartWebBanner,#swb-instructions').css('font-size','36px');jQuery('#swb-instructions.ipad').css('font-size','46px');jQuery('html,body').animate({scrollTop:0},200);return false;">Large</a>, <a href="#" onclick="jQuery('#smartWebBanner,#swb-instructions').css('font-size','16px');jQuery('#swb-instructions.ipad').css('font-size','21px');jQuery('html,body').animate({scrollTop:0},200);return false;">Default</a>, <a href="#" onclick="jQuery('#smartWebBanner,#swb-instructions').css('font-size','8px');jQuery('#swb-instructions.ipad').css('font-size','12px');jQuery('html,body').animate({scrollTop:0},200);return false;">Small</a> (scroll back up &amp; see).</p>
	<p><strong>Looking to use this to promote *non web-based* Android apps and/or iOS apps on older iOS versions and/or different browsers?</strong><br />Check out <a href="http://jasny.github.com/jquery.smartbanner/" target="_blank">Jasny's fork</a> for Android apps and/or iOS apps older than iOS 6.<br />Also check out <a href="https://github.com/ijason/Smart-App-Banners">iJason's fork</a> aimed purely at making it available for iOS apps in other iOS browsers (Google Chrome) &amp; older iOS versions.<br />Note: Both of these are for non-web apps. This is the only plugin aimed at <em>web apps</em> (to my knowledge).</p>
	<h2 id="license">License</h2>
	<p>jQuery Smart Web App Banner is provided under the <a href="https://www.apache.org/licenses/LICENSE-2.0.html" target="_blank">Apache License, 2.0</a>.</p>
	<p>Please know that this is in no way created, owned, or managed by Apple Inc. nor am I employed by Apple Inc.</p>
</div><!-- #site -->
<div id="footer">
	<p>~ <?php echo date('Y'); ?> by <a href="http://kurtzenisek.com">Kurt Zenisek (KZeni)</a> ~</p>
</div><!-- #footer -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="jQuery.smartWebBanner.js?v=1.5"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
	if(navigator.userAgent.indexOf('Firefox')!=-1)
		jQuery('#webkit-alert').prepend('You appear to be using Firefox, ').fadeIn(400);
	if(navigator.userAgent.indexOf('MSIE')!=-1)
		jQuery('#webkit-alert').prepend('You appear to be using Internet Explorer, ').fadeIn(400);
	window.scrollTo(0,0);
	// Show/hide demo links
	jQuery('a[href="#hide"]').on('click',function(){
		jQuery().smartWebBanner('hide');
		return false;
	});
	jQuery('a[href="#show"]').on('click',function(){
		jQuery().smartWebBanner('show');
		return false;
	});
	jQuery('.theme-toggle').on('click',function(){ // Demo-specific code for switching between the themes on the fly
		// Update the button that's currently shown as active
		jQuery('.theme-toggle').removeClass('active');
		jQuery(this).addClass('active');
		// Hide the banner to make the swap
		jQuery('html').css('margin-top','0');
		jQuery('#smartWebBanner').css('top','-82px').removeClass('shown');
		// Scroll up to the banner
		jQuery('html,body').animate({scrollTop:0},200);
		// Swap out the banner style depending on what was clicked
		if(jQuery(this).attr('href') == '#ios6')
			jQuery('#smartWebBanner,#swb-instructions').addClass('ios6').removeClass('ios7').removeClass('dark');
		else if(jQuery(this).attr('href') == '#ios7' || jQuery(this).attr('href') == '#auto')
			jQuery('#smartWebBanner,#swb-instructions').removeClass('ios6').addClass('ios7').removeClass('dark');
		else if(jQuery(this).attr('href') == '#dark')
			jQuery('#smartWebBanner,#swb-instructions').removeClass('ios6').removeClass('ios7').addClass('dark');
		// Show banner
		jQuery('#smartWebBanner').stop().animate({
			top:0
		},300).addClass('shown');
		jQuery('html').stop().animate({
			marginTop:78
		},300);
		return false;
	});
	jQuery().smartWebBanner({
		title: 'KZeni.com',
		author: 'Kurt Zenisek',
		debug: true
	});

});
</script>
<script src="/mint/?js" type="text/javascript"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15075859-2']);
  _gaq.push(['_setDomainName', 'kurtzenisek.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- Start Quantcast -->
<script type="text/javascript">
var _qevents = _qevents || [];
(function() {
var elem = document.createElement('script');
elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
elem.async = true;
elem.type = "text/javascript";
var scpt = document.getElementsByTagName('script')[0];
scpt.parentNode.insertBefore(elem, scpt);
})();
_qevents.push({
qacct:"p-z1eCMBM2_KrkQ"
});
</script>
<noscript><div style="display:none;"><img src="//pixel.quantserve.com/pixel/p-z1eCMBM2_KrkQ.gif" border="0" height="1" width="1" alt="Quantcast"/></div></noscript>
<!-- End Quantcast -->
<!-- Start Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://kurtzenisek.com/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
    g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="http://kurtzenisek.com/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik -->
</body>
</html>