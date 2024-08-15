<?php
// CSS and JS file Enqueue

function anox_css_js_file()
{
    // CSS file Enqueue

    wp_enqueue_style('anox_style', get_stylesheet_uri());

    wp_register_style('anox_custom_css', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0', 'all');

    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3', 'all');

    wp_register_style('anox_scss', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');

    wp_enqueue_style('anox_custom_css');

    wp_enqueue_style('bootstrap');

    wp_enqueue_style('anox_scss');

    // Js & Jquery Enqueue

    wp_enqueue_script('jquery');

    wp_enqueue_script('anox_custom_js', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0', 'true');

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '5.3', 'true');
}


add_action('wp_enqueue_scripts', 'anox_css_js_file');

// Google Font Enqueue

function anox_gooogle_font()
{
    // Google fonts enqueue
    wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap');
}


add_action('wp_enqueue_scripts', 'anox_gooogle_font');


// Font Awesome kit Enqueue

function anox_fontawesome_font()
{
    // Google fonts enqueue
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/4f15d0eb89.js');
}


add_action('wp_enqueue_scripts', 'anox_fontawesome_font');


