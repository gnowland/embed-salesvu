=== Embed SalesVu ===
Contributors: gnowland
Donate link: http://buymeacoff.ee/gnowland
Tags: shortcode, iframe, embed, salesvu, store, e-store, reservations, shop
Stable tag: 1.0.1
Requires PHP: 5.2.4
Requires at least: 4.0
Tested up to: 5.3
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

Embed SalesVu accepts the same parameters as the `<iframe>` HTML tag (plus some extras!):

<table>
<thead>
<tr>
<td>Parameter</td>
<td>Description</td>
<td>Example</td>
<td>Default</td>
</thead>
<tbody>
<tr>
<td>`src`</td>
<td>SalesVu Widget Store URL</td>
<td>URL: `src="https://www.salesvu.com`<br />`/widget-url?storeid=000&etc"`</td>
<td>N/A</td>
</tr>
<tr>
<td>`script`</td>
<td>SalesVu Widget Script URL</td>
<td>URL: `script="https://www.salesvu.com`<br />`/widget-script-url/file.js"`</td>
<td>N/A</td>
</tr>
<tr>
<td>`width`</td>
<td>Widget width</td>
<td>Pixels: `width="500"` <br />Percent: `width="100%"`</td>
<td>`100%`</td>
</tr>
<tr>
<td>`height`</td>
<td>Widget height</td>
<td>Pixels: `height="800"`</td>
<td>`800`</td>
</tr>
<tr>
<td>`scrolling`</td>
<td>Allow or disallow scrolling</td>
<td>Allow: `scrolling="yes"` <br />Disallow: `scrolling="no"`</td>
<td>`yes`</td>
</tr>
<tr>
<td>`frameborder`</td>
<td>Show or hide the iframe border</td>
<td>Show: `frameborder="1"` <br /> Hide: `frameborder="0"`</td>
<td>`0`</td>
</tr>
<tr>
<td>`marginheight`</td>
<td>Height of the margin</td>
<td>Pixels: `marginheight="10"`</td>
<td>`0`</td>
</tr>
<tr>
<td>`marginwidth`</td>
<td>Width of the margin</td>
<td>Pixels: `marginwidth="10"`</td>
<td>`0`</td>
</tr>
<tr>
<td>`id`</td>
<td>Add an ID to the iframe</td>
<td>String: `id="anything"`</td>
<td>`tvoow`</td>
</tr>
<tr>
<td>`class`</td>
<td>Add classes to the iframe</td>
<td>String: `class="class1 class2"`</td>
<td>N/A</td>
</tr>
<tr>
<td>`style`</td>
<td>Add CSS styles to the iframe</td>
<td>String: `style="margin: 30px; padding: 20px;"`</td>
<td>`border: none; overflow: visible; width: 100%; background: #FFF;`</td>
</tr>
<tr>
<td>`same_height_as`</td>
<td>Set the height of the iframe to the same as target element </td>
<td>Class: `same_height_as="div.sidebar"` <br />ID: `same_height_as="div#content"` <br /> Tag: `same_height_as="body"`</td>
<td>`false`</td>
</tr>
<tr>
<td>`any_other_param`</td>
<td>Add an arbitrary parameter to the iframe</td>
<td>String: `any_other_param="any_value"`</td>
<td>N/A</td>
</tr>
<tr>
<td>`any_other_empty_param`</td>
<td>Add an empty parameter to the iframe</td>
<td>String: `any_other_empty_param`<br />`="allowfullscreen"`</td>
<td>N/A</td>
</tr>
</tbody>
</table>

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
