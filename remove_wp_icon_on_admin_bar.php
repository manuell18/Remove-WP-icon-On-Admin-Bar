<?php
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