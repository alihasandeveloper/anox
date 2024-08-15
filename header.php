<?php
// This template for displaying Header
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php wp_head(); ?>
<body class="<?php body_class(); ?>">
<header id="header_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="anox_logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_theme_mod('anox_header_logo'); ?>">
                </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="anox_menu">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'menu_id' => 'anox_nav'
                    )); ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="anox_nav_btn">
                    <a href="#">Login</a>
                    <a href="#" class="btn">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</header>