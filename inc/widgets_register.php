<?php 
// Register Widgets
function anox_widgets_register() 
{
    register_sidebar(array(
        'name' => __('Footer Text Area', 'anox'),
        'id' => 'footer-text',
        'description' => __('Apperas in the sidebar in blog page and also other page','anox'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => 'Footer Search Area',
        'id' => 'footer-search',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'anox'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => 'Footer About Links',
        'id' => 'footer-about-links',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'anox'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer Support Links', 'anox'),
        'id' => 'footer-support-links',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'anox'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer Contact Links', 'anox'),
        'id' => 'footer-contact-links',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'anox'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer Template Links', 'anox'),
        'id' => 'footer-template-links',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'anox'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => 'Social Icon Area',
        'id' => 'social-icon',
        'description' => __('If you interested to update your social icons, You can do it here.','anox'),
        'before_widget' => '<div class="footer-widget-social">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title-social">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'anox_widgets_register');
