<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
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
    <div class="contenedor">
        <div class="contenido-header-inferior">
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
</div>
</header>