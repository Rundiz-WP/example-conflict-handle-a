<?php
/**
 * Plugin Name: Plugin A
 * Description: This example demonstrates the errors that occur when using the same asset handle but in different versions. See front page footer.
 */


if (!function_exists('plugin_a_enqueue_style')) {
    function plugin_a_enqueue_style() {
        wp_enqueue_style('sample', plugins_url('sample.css', __FILE__));
    }// plugin_a_enqueue_style
}
add_action('wp_enqueue_scripts', 'plugin_a_enqueue_style');


if (!function_exists('plugin_a_wpfooter')) {
    function plugin_a_wpfooter() {
        echo '<p class="style_v1">This paragraph from plugin A. It\'s showing <strong class="text_underline">yellow</strong> background and black text.</p>';
    }// plugin_a_wpfooter
}
add_action('wp_footer', 'plugin_a_wpfooter');