<?php
function simons_child_enqueue_styles() {
    // Estilos del tema padre (Hello Elementor)
    wp_enqueue_style('hello-elementor-style', get_template_directory_uri() . '/style.css');

    // Bootstrap 5 desde CDN
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), null, true);

    // Nuestro propio style.css, cargado al final para poder sobreescribir
    wp_enqueue_style('simons-child-style', get_stylesheet_uri(), array('bootstrap-css'));
}
add_action('wp_enqueue_scripts', 'simons_child_enqueue_styles');
