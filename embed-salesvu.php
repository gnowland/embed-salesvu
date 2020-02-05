<?php

/**
 *
 * @wordpress-plugin
 * Plugin Name:         Embed SalesVu
 * Plugin URI:          https://github.com/gnowland/embed-salesvu
 * Description:         A WordPress Plugin for adding SalesVu <https://www.salesvu.com> store "widgets" (iframes) to your website with a simple Shortcode.
 * Version:             1.0.0
 * Author:              Gifford Nowland
 * Author URI:          https://github.com/gnowland
 *
 * License:             GPL-3.0+
 * License URI:         https://www.gnu.org/licenses/gpl-3.0.en.html
 *
 * GitHub Plugin URI:   gnowland/embed-salesvu
 * GitHub Branch:       release
 *
 * Text Domain:         embed-salesvu
 * Domain Path:         /languages
 *
 * Attribution:
 * I owe a ton of inspiration for version 0.2.0 of the plugin to https://github.com/webvitalii/iframe
 *
 */
namespace Gnowland\EmbedSalesvu;

/**
 * SalesVU Shortcode
 *
 * @param array $attributes
 */

function salesvu_shortcode($atts) {
  $defaults = [
    'src'               => '',
    'script'            => '',
    'width'             => '100%',
    'height'            => '800',
    'scrolling'         => 'yes',
    'frameborder'       => '0',
    'style'             => [
      'border'      => 'none',
      'overflow'    => 'visible',
      'width'       => '100%',
      'background'  => '#FFF'
    ],
    //'class'             => '',
    'id'                => 'tvoow',
    'same_height_as'    => false
  ];

  foreach ($defaults as $default => $value) { // add defaults
    if (!@array_key_exists($default, $atts)) { // mute warning with "@" when no params at all
      $atts[$default] = $value;
    }
  }

  // Sanitize URLs // @TODO: Limit to SalesVu domains?
  if (!empty($atts['src'])) {
    $atts['src'] = esc_url($atts['src']);
    // Force HTTPS
    if (strpos($atts['src'], 'http://') !== false) {
      $atts['src'] = str_replace('http://', 'https://', $atts['src']);
    }
  }

  $html = "\n" . '<!-- SalesVu shortcode -->' . "\n";
  $container_class = (!empty($atts['id']) ? $atts['id'] : '') . '-iframe-container';
  $html .= '<div class="' . $container_class . '"';
  // Add iOS iframe scrolling fix
  if (!empty($scrolling = $atts['scrolling']) && $scrolling === 'yes') {
    $html .= ' style="width:100%;height:100%;overflow:auto;-webkit-overflow-scrolling:touch"';
  }
  $html .= '>' . "\n";

  // Create iframe
  if (!empty($atts['src'])) {
    $html .= '<iframe';
    foreach ($atts as $attr => $value) { // remove some attributes (either for security or to handle elsewhere)
      if (strtolower($attr) !== 'script'
        && strtolower($attr) !== 'same_height_as'
        && strtolower($attr) !== 'onload'
        && strtolower($attr) !== 'onpageshow'
        && strtolower($attr) !== 'onclick') {
        if ($value !== '' && !is_array($value) && !is_bool($value)) { // adding available attributes
          $html .= ' ' . esc_attr($attr) . '="' . esc_attr($value) . '"';
        } elseif (is_array($value)) { // adding array-keyed attributes
          $html .= ' ' . esc_attr($attr) . '="';
          foreach ($value as $prop => $val) {
            $html .= $prop . ":" . $val . ";";
          }
          $html .= '"';
        } else { // adding empty attributes
          $html .= ' ' . esc_attr($attr);
        }
      }
    }
    $html .= '></iframe>'."\n";

    $html .= '</div>';

    // Add linked script
    if (!empty($atts['script'])) {
      // Sanitize URLs // @TODO: Limit to SalesVu domains?
      $atts['script'] = esc_url($atts['script']);
      // Force HTTPS
      if (strpos($atts['script'], 'http://') !== false) {
        $atts['script'] = str_replace('http://', 'https://', $atts['script']);
      }
      $html .= '<script type="text/javascript" async="" src="' . $atts['script'] . '"></script>';
    }

    // "Same Height As" Script
    if (!empty($atts['same_height_as'])) {
      ob_start();?>
      <script>
        // Don't pollute!
        (function() {
          window.iframe = "iframe<?php
          if (!empty($atts['id'])) {
            echo '#' . esc_attr($atts['id']);
          }
          if (!empty($atts['class'])) {
            echo '.' . str_replace(' ', '.', esc_attr($atts['class']));
          } ?>";
          window.target = "<?= esc_attr($atts['same_height_as']) ?>";

          // Match height
          var matchHeight = function(target, iframe) {
            var iframeElement = document.querySelector(iframe);
            var targetElement = document.querySelector(target);
            var newHeight = targetElement.offsetHeight + "px";
            iframeElement.style.height = newHeight;
          };

          // Throttle resize
          var throttle = function(type, name, obj) {
            obj = obj || window;
            var running = false;
            var func = function() {
              if (running) { return; }
              running = true;
              requestAnimationFrame(function() {
                obj.dispatchEvent(new CustomEvent(name));
                running = false;
              });
            };
            obj.addEventListener(type, func);
          };

          /* init - you can init any event */
          throttle("resize", "optimizedResize");

          // handle event
          window.addEventListener("optimizedResize", matchHeight(target, iframe));
        })();
      </script><?php
      // Shrink script
      $html .= preg_replace('/(?:(?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|(?:(?<!\:|\\\|\'|\")\/\/.*))|(?:\s\s+)/', '', ob_get_clean());
    }
  } else {
    $html .= "\n" . '<!-- ERROR: attribute "src" invalid or not set -->' . "\n";
  }

  return $html;
}
add_shortcode('salesvu', __NAMESPACE__ . '\\salesvu_shortcode');
