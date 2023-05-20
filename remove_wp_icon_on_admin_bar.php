<?php
/**
 * Plugin Name: Remove WP Icon On Admin Bar
 * Plugin URI: https://manuellsolutions.com/remove-wp-logo
 * Description: Removes the WordPress icon/logo from the admin bar.
 * Version: 1.0.0
 * Author: Emmanuel Milimo
 * Author URI: https://manuellsolutions.com
 * License: GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */


function replace_admin_bar_logo() {
    global $wp_admin_bar;

    // Remove the WordPress logo
    $wp_admin_bar->remove_node('wp-logo');

    // Add a custom home icon
    $args = array(
        'id'    => 'custom-home-icon',
        'title' => '<span class="ab-icon"></span>',
        'href'  => home_url(),
        'meta'  => array(
            'class' => 'ab-icon',
            'title' => 'Home',
        ),
    );
    $wp_admin_bar->add_node($args);
}
add_action('wp_before_admin_bar_render', 'replace_admin_bar_logo', 99);

?>