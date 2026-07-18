<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <!-- Preloader -->
    <div id="preloader"><div class="spinner"></div></div>

    <!-- Top Bar -->
    <div class="top-bar">
        <div class="top-bar-left">
            <span><i class="fas fa-phone"></i> +91 8765550245, 7084900009</span>
            <span><i class="fas fa-envelope"></i> shyamahandballacademy@gmail.com</span>
        </div>
        <div class="top-bar-right">
            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
            <span class="language-selector"><i class="fas fa-globe"></i> English <i class="fas fa-caret-down"></i></span>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-logos">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Shyama Handball Academy.png" alt="Shyama Handball Academy Logo" class="logo-1">
            <div class="vertical-divider"></div>
            <span class="academy-name-text">Shyama Handball Academy</span>
        </div>
        
        <!-- Layer 2: Navigation Links -->
        <?php
        if ( has_nav_menu( 'primary' ) ) {
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-links',
                'fallback_cb'    => false,
                'depth'          => 1,
            ) );
        } else {
            // Fallback Menu matching static structure
            $current_page = basename($_SERVER['PHP_SELF']);
            ?>
            <ul class="nav-links">
                <li><a href="<?php echo esc_url( home_url('/') ); ?>" class="<?php echo is_front_page() ? 'active' : ''; ?>">Home</a></li>
                <li><a href="<?php echo esc_url( home_url('/about') ); ?>">About Us</a></li>
                <li><a href="<?php echo esc_url( home_url('/training') ); ?>">Training</a></li>
                <li><a href="<?php echo esc_url( home_url('/coaches') ); ?>">Coaches</a></li>
                <li><a href="<?php echo esc_url( home_url('/players') ); ?>">Players</a></li>
                <li><a href="<?php echo esc_url( home_url('/events') ); ?>">Events</a></li>
                <li><a href="<?php echo esc_url( home_url('/gallery') ); ?>">Gallery</a></li>
                <li><a href="<?php echo esc_url( home_url('/contact') ); ?>">Contact</a></li>
                <li class="nav-btn-container"><a href="<?php echo esc_url( home_url('/join') ); ?>" class="nav-btn">Join Academy</a></li>
            </ul>
            <?php
        }
        ?>
    </nav>
