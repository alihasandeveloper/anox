<?php

// Theme Customize Register

function anox_customize_register($wp_customize)
{
    // Header Logo
    $wp_customize->add_section('anox_header_area', array(
        'title' => __('Brand Logo','anox'),
        'description' => __('If you interested to update your header area, You can do it here.','anox'),
    ));
    $wp_customize->add_setting('anox_header_logo', array(
        'default' => get_bloginfo('template_directory') . '/assets/img/logo/anox_logo.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'anox_header_logo', array(
        'label' => 'Logo Uoload',
        'section' => 'anox_header_area',
        'settings' => 'anox_header_logo',
        'description' => __('If you interested to update your header area, You can do it here.','anox'),
    )));
    // Copyright Text

    $wp_customize->add_section('anox_copyright', array(
        'title' => 'Copyright Text',
        'description' => __('If you interested to update your copyright area, You can do it here.','anox'),
    ));

    $wp_customize->add_setting('anox_copyright_text', array(
        'default' => 'All rights reserved ©'. date ('Y').' boomdevs.com',
    ));

    $wp_customize->add_control('anox_copyright_text', array(
        'label' => 'Copyright Text',
        'section' => 'anox_copyright',
        'settings' => 'anox_copyright_text',
        'description' => __('If you interested to update your copyright area, You can do it here.','anox'),
    ));

}

add_action('customize_register', 'anox_customize_register');

// Register Nav menu

register_nav_menu('main-menu', __('Main Menu','anox'));