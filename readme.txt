=== Embed SalesVu ===
Contributors: gnowland
Donate link: http://buymeacoff.ee/gnowland
Tags: shortcode, iframe, embed, salesvu, store, e-store, reservations, shop
Requires at least: 4.6
Tested up to: 5.3
Stable tag: 1.0.1
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html

A WordPress Plugin for adding [SalesVu](https://www.salesvu.com) store "widgets" with a `[salesvu]` Shortcode.

== Description ==

Add [SalesVu](https://www.salesvu.com) store "widgets" using the simple `[salesvu]` Shortcode.

## 💭 Rationale

WordPress removes `<iframe>` and `<script>` HTML tags for a variety of security reasons.

## ⚠️ HTTP(S)

**Important**: Your site must be using HTTPS! You cannot embed secure SalesVu store pages into an insecure HTTP website.

## 👾 Parameters

Embed SalesVu accepts the same parameters as the <iframe> html tag (plus some extras!):

| Parameter               | Description                                                    | Example                                                                                                            | Default                                                           |
| ----------------------- | -------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------ | ----------------------------------------------------------------- |
| `src`                   | SalesVu Widget Store URL                                       | URL: `src="https://www.salesvu.com`<br />`/widget-url?storeid=000&etc"`                                            | N/A                                                               |
| `script`                | SalesVu Widget Script URL                                      | URL: `script="https://www.salesvu.com`<br />`/widget-script-url/file.js"`                                          | N/A                                                               |
| `width`                 | Widget width                                                   | Pixels: `width="500"` <br />Percent: `width="100%"`                                                                | `100%`                                                            |
| `height`                | Widget height                                                  | Pixels: `height="800"`                                                                                             | `800`                                                             |
| `scrolling`             | Allow or disallow scrolling                                    | Allow: `scrolling="yes"` <br />Disallow: `scrolling="no"`                                                          | `yes`                                                             |
| `frameborder`           | Show or hide the `<iframe>` border                             | Show: `frameborder="1"` <br /> Hide: `frameborder="0"`                                                             | `0`                                                               |
| `marginheight`          | Height of the margin                                           | Pixels: `marginheight="10"`                                                                                        | `0`                                                               |
| `marginwidth`           | Width of the margin                                            | Pixels: `marginwidth="10"`                                                                                         | `0`                                                               |
| `id`                    | Add an ID to the `<iframe>`                                    | String: `id="anything"`                                                                                            | `tvoow`                                                           |
| `class`                 | Add classes to the `<iframe>`                                  | String: `class="class1 class2"`                                                                                    | N/A                                                               |
| `style`                 | Add CSS styles to the `<iframe>`                               | String: `style="margin: 30px; padding: 20px;"`                                                                     | `border: none; overflow: visible; width: 100%; background: #FFF;` |
| `same_height_as`        | Set the height of the `<iframe>` to the same as target element | Class: `same_height_as="div.sidebar"` <br />ID: `same_height_as="div#content"` <br /> Tag: `same_height_as="body"` | `false`                                                           |
| `any_other_param`       | Add an arbitrary parameter to the `<iframe>`                   | String: `any_other_param="any_value"`                                                                              | N/A                                                               |
| `any_other_empty_param` | Add an empty parameter to the `<iframe>`                       | String: `any_other_empty_param`<br />`="allowfullscreen"`                                                          | N/A                                                               |
== Changelog ==

= 1.0.1 =
* Docs: Add installation instructions and changelog to README
* Docs: Added Parameters and HTTPS warning to README
* Cleanup: Remove unsupported `allowtransparency` tag from parameters
* Bugfix: Allow both ID & Classes in same_height_as
* Improvements: Increase default height to 800px

= 1.0.0 =
* Initial Release
 
== Installation ==

1. Install and Activate the Plugin on the Plugins Admin page
2. Add shortcode `[salesvu src="https://www.salesvu.com/widget-url?storeid=000&etc=etc" script="https://www.salesvu.com/widget-script-url/file.js"]` to page or post content
