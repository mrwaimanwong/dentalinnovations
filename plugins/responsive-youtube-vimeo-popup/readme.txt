=== WP Video Popup – Responsive YouTube & Vimeo Video Lightbox ===
Contributors: davidvongries
Tags: YouTube, Vimeo, Lightbox, Popup, YouTube Lightbox, Vimeo Lightbox, Video Lightbox, Video Popup, GDPR, DSGVO, WP Video Lightbox, WP Video Popup, Responsive Lightbox, Responsive Popup
Requires at least: 4.0
Tested up to: 4.9
Stable tag: 2.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==
**WP Video Popup** lets you add a responsive YouTube or Vimeo video lightbox popup to any page or post of your website.

Use the shortcode 

`[wp-video-popup video="link-to-your-youtube-video"]`

or

`[wp-video-popup vimeo="1" video="link-to-your-vimeo-video"]`

in your post, page or template file to embed your responsive YouTube or Vimeo lightbox popup.

To open the popup, add the CSS-class **`wp-video-popup`** to the element you wish to trigger the lightbox.

= GDPR Compliance =
WP Video Popup is 100% GDPR compliant. No connection to YouTube or Vimeo is established before the trigger element has been clicked.

= Page Speed =
Embedding videos can slow down your website. With WP Video Popup, the lightbox & video are only being loaded by the click on the trigger element.

= Usage =
Example Shortcode to display a **YouTube** video:

`[wp-video-popup video="https://www.youtube.com/watch?v=YlUKcNNmywk"]`

Example Shortcode to display a **Vimeo** video:

`[wp-video-popup vimeo="1" video="https://vimeo.com/136696258"]`

CSS class that needs to be added to the element you want to open the lightbox:

`wp-video-popup`

Trigger Element Example (Link):

`<a href="#" class="wp-video-popup">Play Video</a>`

= WP Video Popup PRO =

For multiple popups on a single page, autoplay on page load functionality, size & background-color options check out **WP Video Popup PRO**!

--> Get [WP Video Popup PRO](https://wp-video-popup.com/?utm_source=repository&utm_medium=link&utm_campaign=wp_video_popup) here! <--

== Installation ==
1. Download the responsive-youtube-vimeo-popup.zip file to your computer.
1. Unzip the file.
1. Upload the `responsive-youtube-vimeo-popup` folder to your `/wp-content/plugins/` directory.
1. Activate the plugin through the *Plugins* menu in WordPress.

== Frequently Asked Questions ==
= How do i use this plugin? =
WP Video Popup doesn’t create an admin settings page. To trigger and display the lightbox popup, please follow the steps under the **Description** tab.

== Screenshots ==
1. Desktop Example
2. Mobile Example

== Changelog ==
= 2.0 August 25, 2018 =
* New: shortcode has changed to [wp-video-popup video="link-to-your-video"] for YouTube videos and [wp-video-popup vimeo="1" video="link-to-your-video"] for vimeo videos
* New: instead of the embed url, the direct YouTube/Vimeo video link can now be used in the shortcode
* Fixed: nesting the shortcode causes other elements overlapping the lightbox.
* 100% backwards compatibility
* minor CSS tweaks and improvements

= 1.1.2 05/16/2017 =
* removed admin notice
* updated plugin description
= 1.1.1 05/20/2017 =
* Added: Elementor support – by adding !important to the video iframe width and max-width attributes to prevent Elementor (and others) from overwriting.
= 1.1 02-27-2017 =
* stability & maintenance release
* Added: use ESC-key on your keyboard to close the popup
= 1.0.1 =
* Tweak: Increased z-index to make sure ryv-popup is on top
= 1.0 =
* Initial Release