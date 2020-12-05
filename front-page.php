<?php get_header('inicio');  ?>
<!-- Swiper -->
<h1>Prueba git</h1>
<div class="swiper-container banners">
    <div class="swiper-wrapper">
        <?php for($i = 1; $i<=10; $i++): ?>
            <?php if(!empty(get_field("titulo$i")) && !empty(get_field("parrafo$i"))): ?>
                <div class="swiper-slide banners swiper-hero<?php echo $i;?> p-relative capa-oscura">
                    <div class="contenido-swiper estilos-banner swiper<?php echo $i;?>">
                    <h2 data-swiper-parallax="-3000" data-swiper-parallax-opacity="0"><?php the_field("titulo$i"); ?></h2>
                    <div class="text" data-swiper-parallax="-2000" data-swiper-parallax-opacity="0">
                        <p><?php the_field("parrafo$i"); ?></p>
                    </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
   <!-- Add Pagination -->
   <div class="swiper-pagination"></div>
</div>
<div class="hero-botones">
    <div class="botones-swiper">
        <a class="btn-swiper" href="#">¿Qué hacemos?</a>
        <a class="btn-swiper" href="#">¿Cómo lo hacemos?</a>
        <a class="btn-swiper" href="#">Conoce más</a>  
    </div>
</div>
<div class="hero-soluciones">
    <div  class="contenedor" id="soluciones" data-scroll>
        <div data-aos="fade-up" class="titulo-h3 seccion">
        <h3><?php the_field("titulo_soluciones_home"); ?></h3>
        </div>
        <div class="contenido-soluciones">
            <?php for($i = 1; $i<=10; $i++): ?>
                <?php if(!empty(get_field("subtitulo_soluciones_home$i")) && !empty(get_field("texto_soluciones_home$i")) && !empty(get_field("imagen_soluciones_home$i"))): ?>
                <div data-aos="fade-up" class="solucion seccion <?php echo ($i % 2) == 0 ? 'par' : ''; ?>">
                    <div class="contenido-solucion">
                        <h4><?php the_field("subtitulo_soluciones_home$i"); ?></h4>
                        <p><?php the_field("texto_soluciones_home$i"); ?></p>
                        <div class="contenedor-boton">
                            <div class="slider">
                            <a href="#">CONOCE MÁS</a>
                                <a href="#">CONTÁCTANOS</a>
                                <a href="#">COMPARTIR</a>
                            </div>
                        </div>
                    </div>
                    <div class="img-solucion">
                        <img src="<?php the_field("imagen_soluciones_home$i") ?>" alt="" >
                    </div>
                </div>
                <hr data-aos="fade-up">
                <?php endif; ?>
            <?php endfor; ?>
        </div>
    </div>
</div>
<div class="hero-creamos-valor-para-las-industrias" id="industrias" data-scroll>
    <div class="contenedor">
        <div data-aos="fade-up" class="titulo-h3 seccion">
            <h3><?php the_field('titulo_industrias_home'); ?></h3>
        </div>
        <div class="contenido-cvpli-fila1 seccion">
            <?php for($i = 1; $i<=10; $i++): ?>
            <?php if(!empty(get_field("icono_industria_home$i")) && !empty(get_field("titulo_icono_industria_home$i"))): ?>
            <a data-aos="fade-up" class="industria-enlace<?php echo $i?>" href="<?php echo the_field("link_industria_home$i"); ?>" style="display:contents;">
            <div  class="industria-home industria <?php echo ($i % 4 != 0) ? 'border-right' : '';?>">

                <?php if(!empty(get_field("fondo-hover$i"))): ?>
                <img class="fondo-hover" src="<?php echo the_field("fondo-hover$i"); ?>" alt="">
                <?php endif; ?>

                <div> 
                    <img data-aos="fade-up" src="<?php the_field("icono_industria_home$i"); ?>" alt="">
                    <h4 data-aos="fade-up"><?php the_field("titulo_icono_industria_home$i"); ?></h4>
                </div>
                
            </div>
            </a>
            <?php endif; ?>
            <?php endfor; ?>
        </div>
    </div>
</div>
<?php get_template_part('templates-part/experiencia') ?>
<?php get_template_part('templates-part/formulario') ?>

<a target="_blank" href="https://wa.link/l2qgwk" class="btn-wsp">
    <img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.png" alt="">
</a>
<?php get_footer();  ?>