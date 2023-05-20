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


 function remove_wp_logo() {
    global $wp_admin_bar;

    $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'remove_wp_logo');


?>