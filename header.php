<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="">
    <!-- Title set within WP -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <a href="#content" class="skip-link screen-reader-text">
        <?php esc_html_e('Skip to content', 'thedd'); ?>
    </a>
    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
            <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
        </div>
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <?php
            $top_menu_args = [
                'theme_location' => 'top-menu'
            ];
            wp_nav_menu($top_menu_args);
            ?>
        </nav>

    </header>
    <div class="hero">

    </div>
    <div id="content" class="site-content">
            <!-- Nothing below here -->