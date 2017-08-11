[jQuery Smart Web App Banner](http://kurtzenisek.com/p/smart-web-banner/)
===========================

Official Project URL: [http://kurtzenisek.com/p/smart-web-banner/](http://kurtzenisek.com/p/smart-web-banner/)

Looking for the iOS 6 & 7+ Smart Banner, but saddened by it only supporting apps on the App Store & not web apps? This little jQuery-powered script is here to help. Add this small script to your site & invite your visitors to save your site to their home screen alongside the rest of their apps!

## Quick Preview

Available at: [http://kurtzenisek.com/p/smart-web-banner/](http://kurtzenisek.com/p/smart-web-banner/)

## Features

- The iOS 6 &amp; 7+ Smart Banner look &amp; feel, but made for web apps!
- Intelligently shows iOS 6/7+ banner design depending on the what the visitor is using.
- Slides the _entire site_ down rather than obstructing the page from your visitors with a popup.
- Add CSS &amp; JavaScript, and call the script... that's it. Graphics utilize CSS 3 &amp; use embedded icons at retina resolution (which is perfect for Mobile Safari) so there's no images to be concerned about.
- Only shown when using Mobile Safari since that's the only browser with home screen integration.
- Set how long it will be before the banner is shown again after it's closed &amp; after the visitor presses "save" (avoids annoying visitors).
- Automatic icon detection via &lt;link&gt; tag (isn't shown if it isn't available, lets you easily overwrite it if desired, and it even adds gloss to the icon if it detects it isn't precomposed [can also be set via an option]).
- Can automatically add `&lt;meta name="apple-mobile-web-app-capable" content="yes" /&gt;` if not already present (saves site as a web app when added to home screen &amp; makes it so the banner isn't shown when revisiting the site).
- Light &amp; Dark themes to make it fit your site design (I really love both). Preview the themes with the buttons on [http://kurtzenisek.com/p/smart-web-banner/](http://kurtzenisek.com/p/smart-web-banner/)
- Show/hide the banner on demand using `<a href="#show">$().smartWebBanner('show');</a>` &amp; `<a href="#hide">$().smartWebBanner('hide');</a></a>` (can be previewed at [http://kurtzenisek.com/p/smart-web-banner/](http://kurtzenisek.com/p/smart-web-banner/))
- Event triggers for swb:shown, swb:closed, swb:instructions-shown, and swb:instructions:closed on the banner element for performing additional actions when the banner or instructions are shown or closed.
- Adds classes to the page's HTML element based on the state of the banner for adjusting aspects of the site via CSS based on the banner's state.
- Can be scaled/resized to fit your site's mobile viewport by changing the font-size of #smartWebBanner &amp; #swb-instructions via CSS to have the rest scales with it (add .ipad to the selector for iPad-specific sizes).
- Device-specific instructions ("add to home screen" is at the top of an iPad while it's at the bottom of an iPhone). Even matches the look &amp; feel of the device's native popup (subtle color &amp; size difference).
- Swaps out the page's URL with specified URL (using HTML5 replaceState) so that's what the home screen icon takes the visitor to after saving it rather than the page they happened to be on when they went to add it to their home screen (which is the default behavior). For example, make it so the home screen button is always your homepage.
- Swaps out the page's title with the specified title so that's what the icon's default label is when adding it to the home screen (which would otherwise use the existing apple-mobile-web-app-title meta tag or the page's title). Seems minor, but this can be impactful.
- Helpful debug option (sets the banner to be shown in all browsers &amp; disregards the already closed/saved cookies) makes previewing/testing the banner a breeze.
- Incredibly configurable via plenty of options! *See example below for full list.

## Roadmap

- Implement Chrome support & style for Android devices.
- Improve the autoApp feature that adds the mobile-web-app meta tag so that it also prevents normal (non-AJAX) links from opening in Safari (unless leaving the domain or going to a media file [due to lack of a back button]). Change the default autoApp setting as it's now much more useful for standard sites.
- Consider implementing in WordPress plugin form for those looking for this functionality without the ability/time to implement the script itself (have it pull the blog's name for the title &amp; description for the "author"), and look into building out a plugin settings page for the script's options. Also, the script should be updated to automatically accomodate WordPress' admin bar.
- Code overhaul/rewrite/cleanup.
- Create a theme system which allows CSS files to be provided individually to determine the design (separate from the core styles). This is technically possible but many of the existing CSS styles need to be overwritten to accomplish a new design.
- Get feedback from the community! (<a href="http://www.google.com/recaptcha/mailhide/d?k=01mU-MMXHEZiapIGiiSSe78Q==&amp;c=h-nAexn4QTO2z6nieTeXVg==" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501mU-MMXHEZiapIGiiSSe78Q\75\75\46c\75h-nAexn4QTO2z6nieTeXVg\75\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address" class="button" target="_blank">Email me</a>)

## Changelog

Version 1.5 - August 8, 2017
- Added `swb:shown`, `swb:closed`, `swb:instructions-shown` and `swb:instructions-closed` events/triggers to the `$('#smartWebBanner')` element that are fired when the banner is shown and closed, respectively. This allows actions to occur when the banner is shown/hidden (ex. `$('#smartWebBanner').on('swb:closed',function(){alert('Banner was closed');});`)
- Made the HTML element have `.swb-shown` and `.swb-closed` toggled depending on if the banner is shown or closed. This allows any parts of the site to be changed based on wheter the banner is shown by referencing those CSS classes.
- Updated script to follow JSHint.
- Implemented SCSS for the working stylesheet.
- Made sure &quot;apple-mobile-web-app-title&quot; meta tag content/value is used for the homescreen icon's text label/title instead of the page's `<title>` tag when present (still used as the fallback).

Version 1.4 - May 24, 2014

- Updated to use iOS 7 design on iPhones & iPads running iOS 7 (new icons, locations, popups, and overall design).
- Now auto-selects iOS 6/7 style when appropriate. Important: Theme names have changed as there is now "Auto" (default), "iOS 6", "iOS 7", and "Dark". Auto will use either iOS 6 & 7 depending on what the device is running.

May 20, 2014

- jQuery Smart Web App Banner is now available on [cdnjs.com](http://cdnjs.com/libraries/jquery-smart-web-app-banner) as a hosted CDN option!

Version 1.3 - March 22, 2013

- Added feature that swaps out the page's URL with the URL that's specified via the script's options. This means you can set it to the homepage of your site so that using the Add to Home Screen feature will save the homepage rather than the page that the visitor is on (the default behavior).
- Still stuck on jQuery older than version 1.7? This URL swapping feature has been added to that version as well & is available [here](https://github.com/KZeni/Smart-Web-App-Banner/blob/master/jQuery.smartWebBanner.pre-1.7.min.js) (it's otherwise recommended to run the latest version found below).

Version 1.2 - March 20, 2013

- Changed how the CSS is structured to only use three px values & use em for the rest. This allows for the scale of the banner to be changed while still preventing external font sizes from unintentionally affecting it.

Version 1.1.2 - March 20, 2013

- Swapped out .live() for .on() for jQuery 1.9+ compatibility.
- Now requires jQuery 1.7+, but the previous version can be downloaded [here](https://github.com/KZeni/Smart-Web-App-Banner/blob/master/jQuery.smartWebBanner.pre-1.7.min.js) (using the latest CSS will work).

Version 1.1.1 - October 3, 2012

- Added option to enable the auto-addition of the mobile-web-app meta tag (disabled by default).

Version 1.1 - September 27, 2012

- Added feature that swaps out the page's <title> attribute with the title that's specified via the script's options.
- Added option to disable the new title swap feature.

Version 1.0 - September 19, 2012

- Initial Release (same day as iOS 6).

## Beginner's Getting Started Guide

[Open Getting Started Guide](https://gist.github.com/KZeni/cbd6e19e94617cda9a16#file-getting-started-md)

## Example (using default settings)

<script src="https://gist-it.appspot.com/https://github.com/KZeni/Smart-Web-App-Banner/blob/master/examples/basic.js?footer=minimal"></script>

## Example (with full options)

<script src="https://gist-it.appspot.com/https://github.com/KZeni/Smart-Web-App-Banner/blob/master/examples/full-options.js?footer=minimal"></script>

## Example performing actions when the banner is shown and/or hidden

<script src="https://gist-it.appspot.com/https://github.com/KZeni/Smart-Web-App-Banner/blob/master/examples/perform-actions-on-toggle.js?footer=minimal"></script>

## Download Now

- [Download](http://gum.co/jquery-smart-web-app-banner)<script type="text/javascript" src="https://gumroad.com/js/gumroad.js"></script>
- [Use cdnjs](http://cdnjs.com/libraries/jquery-smart-web-app-banner)

**It is open source:** You can [view it on Github](https://github.com/KZeni/Smart-Web-App-Banner) and download from there too!

Requires: jQuery v1.7 or later
Still using jQuery 1.3.2 - 1.8.x? Use the [jQuery.smartWebBanner.pre-1.7.min.js](https://github.com/KZeni/Smart-Web-App-Banner/blob/master/jQuery.smartWebBanner.pre-1.7.min.js) file instead.

## Support

<a href="http://www.google.com/recaptcha/mailhide/d?k=01mU-MMXHEZiapIGiiSSe78Q==&amp;c=h-nAexn4QTO2z6nieTeXVg==" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501mU-MMXHEZiapIGiiSSe78Q\75\75\46c\75h-nAexn4QTO2z6nieTeXVg\75\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address" class="button" target="_blank">Email me</a>

## FAQs

**Need to have it save the homepage of your site rather than the page the visitor is on?**
Saving a page to the home screen saves the current page by default, but you can set the url option to be whatever URL you would like it to save & the plugin takes care of the rest.

Tip: set url to '/' to have it always be the homepage of your site while being independent of the domain itself. Also, it can't be a different domain for security reasons.

**Need to adjust the size of the banner to fit the scale of your site?**
This plugin's CSS was built to refer to two elements (with one variant) that then determines the size of everything else. Simply change the font-size for #smartWebBanner & #swb-instructions (add .ipad for iPad-specific sizes) in your own CSS (or edit the plugin directly) to fit your needs.

**Looking to use this to promote *non web-based* Android apps and/or iOS apps on older iOS versions and/or different browsers?**
Check out [Jasny's fork](http://jasny.github.com/jquery.smartbanner/) for Android apps & or iOS apps older than iOS 6.
Also check out [iJason's fork](https://github.com/ijason/Smart-App-Banners) aimed purely at making it available for iOS apps in other iOS browsers (Google Chrome) & older iOS versions.
Note: Both of these are for non-web apps. This is the only plugin aimed at web apps (to my knowledge).

## License

jQuery Smart Web App Banner is provided under the [Apache License, 2.0](https://www.apache.org/licenses/LICENSE-2.0.html).

Please know that this is in no way created, owned, or managed by Apple Inc. nor am I employed by Apple Inc.

[![Analytics](https://ga-beacon.appspot.com/UA-15075859-6/Smart-Web-App-Banner/readme?pixel)](https://github.com/igrigorik/ga-beacon)