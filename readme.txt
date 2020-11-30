=== Embed SalesVu ===
Contributors: gnowland
Donate link: https://buymeacoff.ee/gnowland
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

= 💭 Rationale =

WordPress removes `<iframe>` and `<script>` HTML tags for a variety of security reasons.

= ⚠️ HTTP(S) =

**Important**: Your site must be using HTTPS! You cannot embed secure SalesVu store pages into an insecure HTTP website.

= 👾 Parameters =

Embed SalesVu accepts the same parameters as the `<iframe>` HTML tag (plus some extras!). At a minimum you must supply the `src` and `script` parameters, e.g:

`[salesvu src="https://www.salesvu.com/widget-url?storeid=000&etc" script="https://www.salesvu.com/widget-script-url/file.js"]`

All Parameters:
`
| Parameter             | Description                                                | Unit   | Example                                                        | Default                                                           |
| --------------------- | ---------------------------------------------------------- | ------ | -------------------------------------------------------------- | ----------------------------------------------------------------- |
| src                   | SalesVu Widget Store URL                                   | url    | src="https://www.salesvu.com/widget-url?storeid=000&etc"       | ⚠️ required                                                       |
| _____________________ | __________________________________________________________ | ______ | ______________________________________________________________ | _________________________________________________________________ |
| script                | SalesVu Widget Script URL                                  | url    | script="https://www.salesvu.com/widget-script-url/file.js"     | ⚠️ required                                                       |
| _____________________ | __________________________________________________________ | ______ | ______________________________________________________________ | _________________________________________________________________ |
| width                 | Widget width                                               | # (px) | width="500"                                                    | 100%                                                              |
|                       |                                                            | %      | width="50%"                                                    |                                                                   |
| _____________________ | __________________________________________________________ | ______ | ______________________________________________________________ | _________________________________________________________________ |
| height                | Widget height                                              | # (px) | height="800"                                                   | 800                                                               |
| _____________________ | __________________________________________________________ | ______ | ______________________________________________________________ | _________________________________________________________________ |
| scrolling             | Allow or disallow scrolling                                | yes    | scrolling="yes"                                                | yes                                                               |
|                       |                                                            | no     | scrolling="no"                                                 |                                                                   |
| _____________________ | __________________________________________________________ | ______ | ______________________________________________________________ | _________________________________________________________________ |
| frameborder           | Show or hide the iframe border                             | show   | frameborder="1"                                                | 0                                                                 |
|                       |                                                            | hide   | frameborder="0"                                                |                                                                   |
| _____________________ | __________________________________________________________ | ______ | ______________________________________________________________ | _________________________________________________________________ |
| marginheight          | Height of the widget margin                                | # (px) | marginheight="10"                                              | 0                                                                 |
| _____________________ | __________________________________________________________ | ______ | ______________________________________________________________ | _________________________________________________________________ |
| marginwidth           | Width of the widget margin                                 | # (px) | marginwidth="10"                                               | 0                                                                 |
| _____________________ | __________________________________________________________ | ______ | ______________________________________________________________ | _________________________________________________________________ |
| id                    | Add an ID to the iframe                                    | string | id="whatever"                                                  | tvoow                                                             |
| _____________________ | __________________________________________________________ | ______ | ______________________________________________________________ | _________________________________________________________________ |
| class                 | Add class(es) to the iframe                                | string | class="cheese fork broccoli"                                   |                                                                   |
| _____________________ | __________________________________________________________ | ______ | ______________________________________________________________ | _________________________________________________________________ |
| style                 | Add CSS styles to the iframe                               | string | style="margin: 30px; padding: 20px;"                           | "border: none; overflow: visible; width: 100%; background: #FFF;" |
| _____________________ | __________________________________________________________ | ______ | ______________________________________________________________ | _________________________________________________________________ |
| same_height_as        | Set the height of the iframe to the same as target element | class  | same_height_as="div.sidebar"                                   | false                                                             |
|                       |                                                            | id     | same_height_as="div#content"                                   |                                                                   |
|                       |                                                            | tag    | same_height_as="main"                                          |                                                                   |
|                       |                                                            | false  | same_height_as="false"                                         |                                                                   |
| _____________________ | __________________________________________________________ | ______ | ______________________________________________________________ | _________________________________________________________________ |
| any_other_param       | Add an arbitrary HTML parameter(s) to the iframe           | string | any_other_param="any_value"                                    |                                                                   |
| _____________________ | __________________________________________________________ | ______ | ______________________________________________________________ | _________________________________________________________________ |
| any_other_empty_param | Add an "empty" HTML parameter(s) to the iframe             | string | any_other_empty_param="allowfullscreen"                        |                                                                   |
| _____________________ | __________________________________________________________ | ______ | ______________________________________________________________ | _________________________________________________________________ |
`

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
