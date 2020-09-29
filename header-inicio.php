<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header-desktop">
    <div class="hero-header">
        <div class="contenedor">
            <div class="contenido-header-superior">
                <img src="<?php the_field('logo') ?>" alt="" >
                <div>
                    <nav class="nav-idiomas">
                        <p><a href="#">En</a> | <a href="#">Por</a></p>    
                    </nav>
                    <nav class="redes-sociales-header">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-header-nav">
        <!-- <div class="contenedor"> -->
            <div class="contenido-header-inferior contenedor">
                <img src="<?php the_field('logo2') ?>" alt="" >
                <nav class="navegacion-principal">
                    <a href="">SOLUCIONES</a>
                    <a href="">INDUSTRIAS</a>
                    <a href="">CONTACTO</a>
                    <a href="">NOTICIAS Y CONOCIMIENTOS</a>
                    <a href="">NOSOTROS</a>
                    <?php //get_search_form(); ?>
                </nav>
            </div>

        </div>
    <!-- </div> -->
</header>
<header class="header-mobile">
    <div class="hero-header-mobile">
        <div class="contenedor">
            <div class="contenido-header-mobile">
                <div class="logo-mobile">
                    <img src="<?php the_field('logo') ?>" alt="" >
                </div>
                <div class="menu-bar">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-header-nav">
        <div class="contenedor">
            <nav class="contenido-header-nav">
                <a href="">SOLUCIONES</a>
                <a href="">INDUSTRIAS</a>
                <a href="">CONTACTO</a>
                <a href="">NOTICIAS Y CONOCIMIENTOS</a>
                <a href="">NOSOTROS</a>

            </nav>
            <nav class="redes-sociales-header">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter-square"></i></a>
            </nav>
            <nav class="nav-idiomas">
                <p><a href="#">En</a> | <a href="#">Por</a></p>    
            </nav>
        </div>
    </div>
</header>