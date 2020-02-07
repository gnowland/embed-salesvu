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

### **`src`**

* **Description:** SalesVu Widget Store URL
* **Example:** URL: `src="https://www.salesvu.com/widget-url?storeid=000&etc"`
* **Default:** N/A

### **`script`**

* **Description:** SalesVu Widget Script URL
* **Example:** URL: `script="https://www.salesvu.com/widget-script-url/file.js"`
* **Default:** N/A

### **`width`**

* **Description:** Widget width
* **Example:** Pixels: `width="500"` <br /> Percent: `width="100%"`
* **Default:** `100%`

### **`height`**

* **Description:** Widget height
* **Example:** Pixels: `height="800"`
* **Default:** `800`

### **`scrolling`**

* **Description:** Allow or disallow scrolling
* **Example:** Allow: `scrolling="yes"` <br /> Disallow: `scrolling="no"`
* **Default:** `yes`

### **`frameborder`**

* **Description:** Show or hide the iframe border
* **Example:** Show: `frameborder="1"` <br /> Hide: `frameborder="0"`
* **Default:** `0`

### **`marginheight`**

* **Description:** Height of the margin
* **Example:** Pixels: `marginheight="10"`
* **Default:** `0`

### **`marginwidth`**

* **Description:** Width of the margin
* **Example:** Pixels: `marginwidth="10"`
* **Default:** `0`

### **`id`**

* **Description:** Add an ID to the iframe
* **Example:** String: `id="anything"`
* **Default:** `tvoow`

### **`class`**

* **Description:** Add classes to the iframe
* **Example:** String: `class="class1 class2"`
* **Default:** N/A

### **`style`**

* **Description:** Add CSS styles to the iframe
* **Example:** String: `style="margin: 30px; padding: 20px;"`
* **Default:** `border: none; overflow: visible; width: 100%; background: #FFF;`

### **`same_height_as`**
* **Description:** Set the height of the iframe to the same as target element
* **Example:** Class: `same_height_as="div.sidebar"` <br /> ID: `same_height_as="div#content"` <br /> Tag: `same_height_as="body"`
* **Default:** `false`

### **`any_other_param`**

* **Description:** Add an arbitrary parameter to the iframe
* **Example:** String: `any_other_param="any_value"`
* **Default:** N/A

### **`any_other_empty_param`**

* **Description:** Add an empty parameter to the iframe
* **Example:** String: `any_other_empty_param="allowfullscreen"`
* **Default:** N/A


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
