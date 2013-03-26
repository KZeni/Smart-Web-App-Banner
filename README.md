jQuery Smart Web App Banner
===========================

Looking for the iOS 6 Smart Banner, but saddened by it only supporting apps on the App Store & not web apps? This little jQuery-powered script is here to help. Add this small script to your site & invite your visitors to save your site to their home screen alongside the rest of their apps!

Take a look at the top of this page to see a preview of the banner.

Tip: Try this out using the Responsive Design Bookmarklet to preview iPhone & iPad sizes (courtesy of Victor Coulon).

Quick Preview

Preview Dark Theme

Features

The iOS 6 Smart Banner look & feel, but made for web apps.
Slides the entire site down rather than obstructing the page from your visitors with a popup.
Add CSS & JavaScript, and call the script... that's it. Graphics utilize CSS 3 & use embedded icons at retina resolution (which is perfect for Mobile Safari) so there's no images to be concerned about.
Only shown when using Mobile Safari since that's the only browser with home screen integration.
Set how long it will be before the banner is shown again after it's closed & after the visitor presses "save" (avoids annoying visitors).
Automatic icon detection via <link> tag (isn't shown if it isn't available, lets you easily overwrite it if desired, and it even adds gloss to the icon if it detects it isn't precomposed [can also be set via an option]).
Can automatically add <meta name="apple-mobile-web-app-capable" content="yes" /> if not already present (saves site as a web app when added to home screen & makes it so the banner isn't shown when revisiting the site).
Can be scaled/resized to fit your site's mobile viewport by changing the font-size of #smartWebBanner & #swb-instructions via CSS to have the rest scales with it (add .ipad to the selector for iPad-specific sizes).
Device-specific instructions ("add to home screen" is at the top of an iPad while it's at the bottom of an iPhone). Even matches the look & feel of the device's native popup (subtle color & size difference).
Swaps out the page's URL with specified URL (using HTML5 replaceState) so that's what the home screen icon takes the visitor to after saving it rather than the page they happened to be on when they went to add it to their home screen (which is the default behavior). For example, make it so the home screen button is always your homepage.
Swaps out the page's title with the specified title so that's what the icon's default label is when adding it to the home screen (which would otherwise use the existing page title). Seems minor, but this can be impactful.
Helpful debug option (sets the banner to be shown in all browsers & disregards the already closed/saved cookies) makes previewing/testing the banner a breeze.
Light & Dark themes to make it fit your site design (I really love both). Preview the themes with the button above, or click here.
Show/hide the banner on demand using $().smartWebBanner('show'); & $().smartWebBanner('hide'); (click to preview).
Incredibly configurable via plenty of options! *See example below for full list.
Roadmap

Improve the autoApp feature that adds the mobile-web-app meta tag so that it also prevents normal (non-AJAX) links from opening in Safari (unless leaving the domain or going to a media file [due to lack of a back button]). Change the default autoApp setting as it's now much more useful for standard sites.
Look into adding to jQuery plugin director(ies).
Consider implementing in WordPress plugin form for those looking for this functionality without the ability/time to implement the script itself (have it pull the blog's name for the title & description for the "author"), and look into building out a plugin settings page for the script's options.
Get feedback from the community!
Changelog

Version 1.3 - March 22, 2013

Added feature that swaps out the page's URL with the URL that's specified via the script's options. This means you can set it to the homepage of your site so that using the Add to Home Screen feature will save the homepage rather than the page that the visitor is on (the default behavior).
Still stuck on jQuery older than version 1.7? This URL swapping feature has been added to that version as well & is available here (it's otherwise recommended to run the latest version found below).
Version 1.2 - March 20, 2013

Changed how the CSS is structured to only use three px values & use em for the rest. This allows for the scale of the banner to be changed while still preventing external font sizes from unintentionally affecting it.
Version 1.1.2 - March 20, 2013

Swapped out .live() for .on() for jQuery 1.9+ compatibility.
Now requires jQuery 1.7+, but the previous version can be downloaded here (using the latest CSS will work).
Version 1.1.1 - October 3, 2012

Added option to enable the auto-addition of the mobile-web-app meta tag (disabled by default).
Version 1.1 - September 27, 2012

Added feature that swaps out the page's <title> attribute with the title that's specified via the script's options.
Added option to disable the new title swap feature.
Version 1.0 - September 19, 2012

Initial Release (same day as iOS 6).