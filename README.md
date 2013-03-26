jQuery Smart Web App Banner
===========================

Looking for the iOS 6 Smart Banner, but saddened by it only supporting apps on the App Store & not web apps? This little jQuery-powered script is here to help. Add this small script to your site & invite your visitors to save your site to their home screen alongside the rest of their apps!

Take a look at the top of this page to see a preview of the banner.

##Quick Preview##

Available at: [http://kurtzenisek.com/p/smart-web-banner/](http://kurtzenisek.com/p/smart-web-banner/)

##Features##

- The iOS 6 Smart Banner look & feel, but made for web apps.
- Slides the entire site down rather than obstructing the page from your visitors with a popup.
- Add CSS & JavaScript, and call the script... that's it. Graphics utilize CSS 3 & use embedded icons at retina resolution (which is perfect for Mobile Safari) so there's no images to be concerned about.
- Only shown when using Mobile Safari since that's the only browser with home screen integration.
- Set how long it will be before the banner is shown again after it's closed & after the visitor presses "save" (avoids annoying visitors).
- Automatic icon detection via <link> tag (isn't shown if it isn't available, lets you easily overwrite it if desired, and it even adds gloss to the icon if it detects it isn't precomposed [can also be set via an option]).
- Can automatically add <meta name="apple-mobile-web-app-capable" content="yes" /> if not already present (saves site as a web app when added to home screen & makes it so the banner isn't shown when revisiting the site).
- Can be scaled/resized to fit your site's mobile viewport by changing the font-size of #smartWebBanner & #swb-instructions via CSS to have the rest scales with it (add .ipad to the selector for iPad-specific sizes).
- Device-specific instructions ("add to home screen" is at the top of an iPad while it's at the bottom of an iPhone). Even matches the look & feel of the device's native popup (subtle color & size difference).
- Swaps out the page's URL with specified URL (using HTML5 replaceState) so that's what the home screen icon takes the visitor to after saving it rather than the page they happened to be on when they went to add it to their home screen (which is the default behavior). For example, make it so the home screen button is always your homepage.
- Swaps out the page's title with the specified title so that's what the icon's default label is when adding it to the home screen (which would otherwise use the existing page title). Seems minor, but this can be impactful.
- Helpful debug option (sets the banner to be shown in all browsers & disregards the already closed/saved cookies) makes previewing/testing the banner a breeze.
- Light & Dark themes to make it fit your site design (I really love both).
- Show/hide the banner on demand using $().smartWebBanner('show'); & $().smartWebBanner('hide');
- Incredibly configurable via plenty of options! *See example below for full list.

##Roadmap##

- Improve the autoApp feature that adds the mobile-web-app meta tag so that it also prevents normal (non-AJAX) links from opening in Safari (unless leaving the domain or going to a media file [due to lack of a back button]). Change the default autoApp setting as it's now much more useful for standard sites.
- Look into adding to jQuery plugin director(ies).
- Consider implementing in WordPress plugin form for those looking for this functionality without the ability/time to implement the script itself (have it pull the blog's name for the title & description for the "author"), and look into building out a plugin settings page for the script's options.
- Get feedback from the community!

##Changelog##

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

##Example (using default settings)##

`$().smartWebBanner();`

##Example (with full options)##

`$().smartWebBanner({
    title: "Tree Finder", // What the title of the "app" should be in the banner | Default: "Web App"
    titleSwap: false, // Whether or not to use the title specified here has the default label of the home screen icon (otherwise uses the page's <title> tag) | Default: true
    url: 'http://appleorchard.com', // URL to mask the page as before saving to home screen (allows for having it save the homepage of a site no matter what page the visitor is on) | Default: ''
    author: "Johnny Appleseed", // What the author of the "app" should be in the banner | Default: "Save to Home Screen"
    speedIn: 500, // Show animation speed of the banner | Default: 300
    speedOut: 800, // Close animation speed of the banner | Default: 400
    useIcon: true, // Whether or not it should show site's apple touch icon (located via <link> tag) | Default: true
    iconOverwrite: "http://appleorchard.com/icon-114x114.png", // Force the URL of the icon (even if found via <link> tag) | Default: ""
    iconGloss: true, // Whether or not to show the gloss over the icon (true/false/"auto" [auto doesn't show if precomposed <link> tag is used]) | Default: "auto"
    showFree: false, // Whether or not to show "Free" at bottom of info | Default: true
    daysHidden: 7, // Duration to hide the banner after being closed (0 = always show banner) | Default: 15
    daysReminder: 30, // Duration to hide the banner after "Save" is clicked *separate from when the close button is clicked* (0 = always show banner) | Default: 90
    popupDuration: 4000, // How long the instructions are shown before fading out (0 = show until manually closed) | Default: 6000
    popupSpeedIn: 400, // Show animation speed of the popup | Default: 200
    popupSpeedOut: 1200, // Close animation speed of the popup | Default: 900
    theme: 'dark', // Change between "light" & "dark" theme to fit your site design | Default: "light"
    autoApp: true, // Whether or not it should auto-add the mobile-web-app meta tag that makes it open as an app rather than in mobile safari | Default: false
    debug: true // Whether or not it should always be shown (even for non-iOS devices & if cookies have previously been set) *This is helpful for testing and/or previewing | Default: false
});`

##Like it? Maybe throw me a few bucks##

This is a one-man project. I can't put an accurate price on what value you might get out of this or the time saved... so I leave you to pay what you want. Really, feel free to just use it. [Click here to learn more](http://kurtzenisek.com/p/smart-web-banner/#donate)

##Support##

[Email me](http://www.google.com/recaptcha/mailhide/d?k=01mU-MMXHEZiapIGiiSSe78Q==&c=h-nAexn4QTO2z6nieTeXVg==)

##FAQs##

**Need to have it save the homepage of your site rather than the page the visitor is on?**
Saving a page to the home screen saves the current page by default, but you can set the url option to be whatever URL you would like it to save & the plugin takes care of the rest.

Tip: set url to '/' to have it always be the homepage of your site while being independent of the domain itself. Also, it can't be a different domain for security reasons.

**Need to adjust the size of the banner to fit the scale of your site?**
This plugin's CSS was built to refer to two elements (with one variant) that then determines the size of everything else. Simply change the font-size for #smartWebBanner & #swb-instructions (add .ipad for iPad-specific sizes) in your own CSS (or edit the plugin directly) to fit your needs.

**Looking to use this to promote *non web-based* Android apps and/or iOS apps on older iOS versions and/or different browsers?**
Check out [Jasny's fork](http://jasny.github.com/jquery.smartbanner/) for Android apps & or iOS apps older than iOS 6.
Also check out [iJason's fork](https://github.com/ijason/Smart-App-Banners) aimed purely at making it available for iOS apps in other iOS browsers (Google Chrome) & older iOS versions.
Note: Both of these are for non-web apps. This is the only plugin aimed at web apps (to my knowledge).

Please know that this is in no way created, owned, or managed by Apple Inc. nor am I employed by Apple Inc.