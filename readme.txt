=== Plugin Name ===
Plugin Name: ePaperFlip Publisher
Tags: flipb, epaperflip, wordpress, shortcode, flipbook, digital magazine, online magazine, ebook, digital publishing, page turning
Description: Easily embed epaperflip flipbooks in your wordpress page
Version:     1
Contributors: Shinjo Melosh
Requires at least: 4.1
Tested up to: 4.1
Stable tag: 1
License:     GPL2

== Description ==

The epaperflip_embed plugin is used to embed flipb and epaperflip digital catalogs into your wordpress website.  
With a simple line of code you can easily embed your catalog into your site.

== Installation ==

1. To install this plugin in wordpress simply download the epaperflip_embed file and upload it to your wp-content/plugins folder
so the complete path would be wwwwroot/sitename/wp-content/plugins/epaperflip_embed/epaperflip_embed.php

2. Activate the plugin in your WordPress plugins page.  This can be found on WordPress administration page sidebar.
 
== Changelog ==

= 1.0 =
* Product release
  
== MarkDown ==
How to use the plugin:  
[epaperflip_embed docid="" dimension="" width="" height="" center="" disableflash=""] 
ie.  
[epaperflip_embed docid="3cf0520a-03a8-49fd-b235-a3e300d379da" dimension="pixel" width="800" height="600" center="true" disableflash="true"] 
[epaperflip_embed docid="3cf0520a-03a8-49fd-b235-a3e300d379da" dimension="percentage" width="80" height="100" center="false" disableflash="false"] 
[epaperflip_embed publicationid="12039c46-934b-4a5c-98c8-a495016b3293" dimension="percentage" width="80" height="100" center="false" disableflash="true"] 

REQUIRED: 
You must provide one of the following two fields.  
1. docid : (Default null) String value used to target the document you wish to display 
2. publicationid : (Default null) String value used to target a specific publication and  display the most recently published catalog  

OPTIONAL: 
These fields are not required. 
1. dimension : (Default percentage) String value either percentage or pixel to denote whether you want the dimensions to be in percentage or pixel format  
2. width : (Default 100) Integer value used this value to set the width of the frame in either percentage or pixels 
3. height : (Default 100) Integer value used this value to set the height of the frame in either percentage or pixels 
4. center : (Default true) Boolean value used this value to denote whether you want the frame to be centered 
5. disableflash : (Default false) Boolean value used to denote whether you only want the HTML5 viewer to be available 

PS: Percentage will be based on the parent div of this shortcode

== contributors ==
Shinjo Melosh