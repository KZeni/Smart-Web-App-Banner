// Values shown here are the default
$().smartWebBanner({
	title: 'Web App', // What the title of the "app" should be in the banner
	titleSwap: true, // Whether or not to use the title specified here as the default label of the home screen icon (otherwise uses the page's "apple-mobile-web-app-title" meta tag or <title> tag as a fallback)
	url: '', // URL to mask the page as before saving to home screen (allows for having it save the homepage of a site no matter what page the visitor is on)
	author: 'Save to Home Screen', // What the author of the "app" should be in the banner
	speedIn: 300, // Show animation speed of the banner
	speedOut: 400, // Close animation speed of the banner
	useIcon: true, // Whether or not it should show site's apple touch icon (located via <link> tag)
	iconOverwrite: '', // Force the URL of the icon (even if found via <link> tag)
	iconGloss: 'auto', // Whether or not to show the gloss over the icon (true/false/"auto" [auto doesn't show if precomposed <link> tag is used])
	showFree: true, // Whether or not to show "Free" at bottom of info
	daysHidden: 15, // Duration to hide the banner after being closed (0 = always show banner)
	daysReminder: 90, // Duration to hide the banner after "Save" is clicked *separate from when the close button is clicked* (0 = always show banner)
	popupDuration: 6000, // How long the instructions are shown before fading out (0 = show until manually closed)
	popupSpeedIn: 200, // Show animation speed of the popup
	popupSpeedOut: 900, // Close animation speed of the popup
	theme: 'auto', // Change between "auto" (detect iOS version), "iOS 6", "iOS 7", and "dark" theme to fit your site design & visitors
	autoApp: false, // Whether or not it should auto-add the mobile-web-app meta tag that makes it open as an app rather than in mobile safari
	debug: false // Whether or not it should always be shown (even for non-iOS devices & if cookies have previously been set) *This is helpful for testing and/or previewing
});