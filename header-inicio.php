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
                        <p><a href="#">EN</a> | <a href="#">POR</a> | <a href="#">SPA</a></p>    
                    </nav>
                    <nav class="redes-sociales-header">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt=""></a>
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/in.png" alt=""></a>
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt=""></a>
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
                    <a data-scroll href="#soluciones">SOLUCIONES</a>
                    <a data-scroll href="#industrias">INDUSTRIAS</a>
                    <a data-scroll href="#contacto">CONTACTO</a>
                    <a href="">NOTICIAS Y CONOCIMIENTOS</a>
                    <a href="">NOSOTROS</a>
                    <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
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
                <a data-scroll href="#soluciones">SOLUCIONES</a>
                <a data-scroll href="#industrias">INDUSTRIAS</a>
                <a data-scroll href="#contacto">CONTACTO</a>
                <a href="">NOTICIAS Y CONOCIMIENTOS</a>
                <a href="">NOSOTROS</a>

            </nav>
            <nav class="redes-sociales-header">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt=""></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/in.png" alt=""></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt=""></a>
                    </nav>
            <nav class="nav-idiomas">
                <p><a href="#">En</a> | <a href="#">Por</a></p>    
            </nav>
        </div>
    </div>
</header>