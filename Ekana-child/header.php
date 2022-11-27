<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ekana_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Descubre todo sobre el entrenamiento personal">
    <meta name="keywords" content="entrenamiento personalizatua, fisioterapia, nutrizioa eta dietetika, kirol medikuntza konsulta, ezfortzu frogak, vinyasa yoga, clases de yoga, entrenamiento personal, nutrición y dietetika, prueba de esfuerzo, consulta médica deportiva, recuperación de lecciones, eventos deportivos, entrenamiento desde casa, entrenamiento al aire libre">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/style.min.css'); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'ekana_theme'); ?></a>

        <header id="masthead" class="site-header">
            <nav id="site-navigation" class="main-navigation">

            <div class="kzk-menu-logo">
                <a href="<?php echo home_url(); ?>" alt="<?php wp_get_document_title(); ?>"> 
            <svg version="1.1" id="ekana-logo-principal" x="0px" y="0px" viewBox="0 0 120 120" style="enable-background:new 0 0 120 120;" xml:space="preserve">
                <polygon class="logo_path" points="104.8,51 61.6,94.1 61,94.7 60.4,94.1 26.7,60.2 26.1,59.6 26.7,59 58.5,27.2 59.1,26.6 59.7,27.2 
													72.5,39.9 73.1,40.5 72.5,41.1  52,61.2 62.1,71.3 93.9,39.9 58.6,4.5 4.3,59.2 60.9,116.2 115.5,61.8 " />
                </svg>
            </a>
        </div> <!-- /logo-conteiner -->
               <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    )
                );
                ?>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z4REBMCFFC"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-Z4REBMCFFC');
        </script>
        <script>
        $(window).scroll(function() {    
            var scroll = $(window).scrollTop();

            if (scroll >= 150) {
                $(".site-header").addClass("scrolled");
            } else {
                $(".site-header").removeClass("scrolled");
            }
        });
        </script>
        <script>
            $(document).ready(function() {
                $("#primary-menu li:nth-child(4) a").addClass("kzk");
            });
        </script>