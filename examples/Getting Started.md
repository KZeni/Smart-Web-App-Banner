## 1. Add jQuery by adding the following to the `<head>` of your page/site (or your jQuery version and/or hosting of choice):
```
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
```
**Note:** You don't need to add this if jQuery is already being called on the page.
## 2. Add the banner’s CSS by adding the following to the `<head>` of your page/site:
```
<link href="//cdnjs.cloudflare.com/ajax/libs/jquery-smart-web-app-banner/1.5/jquery.smartwebbanner.min.css" rel="stylesheet" type="text/css" />
```
## 3. Add the banner’s JavaScript by adding the following before the closing `</body>` tag (making it so it lets the main part of your site load first):
```
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-smart-web-app-banner/1.5/jquery.smartwebbanner.min.js"></script>
```
## 4. Initiate the banner by adding the following _after_ the banner's JavaScript file but _before_ the closing `</body>` tag:
```
<script>
jQuery(document).ready(function($){
	$().smartWebBanner({
		title: '***',
		author: '***',
		url: '/'
	});
});
</script>
```

**Important Note:** Replace the *** (keep the apostrophes) with the site’s name for the title and the company/entity’s name for the author. There are more options documented here: [http://kurtzenisek.com/p/smart-web-banner/](http://kurtzenisek.com/p/smart-web-banner/) (technically all of the settings are optional as there are adaptive defaults)

**Technical Note:** You can insert this code snippet into a file you may have existing javascript for your site, and you don't need a separate jQuery(document).ready() call if you have one already. This is just a beginner’s guide to getting started that is designed to work with all setups.

### Additional Information:
- All of the links to files in the code above are using well established & supported CDNs so they should be fast & reliable for your visitors. That said, you can certainly host these files on your site itself.
- The version numbers in the code above reference the latest versions at the time of writing so feel free to update these as new versions are made available.
- You won’t be able to see the banner unless using an iOS device (or setting your user agent to appear to be one). You can use the debug: true option in the plugin’s initialization script to see the banner regardless o the device being used or whether or not they’ve closed the banner previously (which would have saved a cookie so it’s not shown every time).