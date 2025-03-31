<?php
// Charger les styles du thème parent
function twentytwentyone_child_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'twentytwentyone_child_enqueue_styles');

require_once get_stylesheet_directory() . '/cpt-portfolio.php';