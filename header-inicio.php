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
                <a href="<?php echo esc_url(site_url('/')) ?>">
                    <img src="<?php the_field('logo','2')?>" alt="">
                </a>
                <div class="contenedor-idiomas-sociales">
                    <nav class="nav-idiomas idiomas-desktop">
                        <a href="#">ING</a>
                        <a href="#">POR</a>
                        <a class="idioma-activo" href="#">ESP</a>   
                    </nav>
                    <nav class="redes-sociales-header" style="margin-right:6rem;">
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
                <a href="<?php echo esc_url(site_url('/')) ?>">
                    <img src="<?php the_field('logo2','2')?>" alt="">
                </a>
                <nav class="navegacion-principal">
                <?php for($i = 1; $i<=10; $i++): ?>
                    <?php if(!empty(get_field("url$i","2")) && !empty(get_field("texto_menu$i","2"))): ?>
                        <a <?php echo strpos(get_field("url$i","2"), "#") !== false ? 'data-scroll' : ''; ?>  href="<?php the_field("url$i","2"); ?>"><?php the_field("texto_menu$i","2"); ?></a>
                        <?php endif; ?>
                    
                <?php endfor; ?>
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
                    <a href="<?php echo esc_url(site_url('/')) ?>">
                        <img src="<?php the_field('logo','2')?>" alt="">
                    </a>
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
                <a data-scroll href="<?php the_field('url1','2'); ?>"><?php the_field('texto_menu1','2'); ?></a>
                <a data-scroll href="<?php the_field('url2','2'); ?>"><?php the_field('texto_menu2','2'); ?></a>
                <a data-scroll href="<?php the_field('url3','2'); ?>"><?php the_field('texto_menu3','2'); ?></a>
                <a href="<?php the_field('url4','2'); ?>"><?php the_field('texto_menu4','2'); ?></a>
                <a href="<?php the_field('url5','2'); ?>"><?php the_field('texto_menu5','2'); ?></a>

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