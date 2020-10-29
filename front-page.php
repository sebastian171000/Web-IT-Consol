<?php get_header('inicio');  ?>
<!-- Swiper -->
<div class="swiper-container banners">
    <div class="swiper-wrapper">
        <?php for($i = 1; $i<=10; $i++): ?>
            <?php if(!empty(get_field("titulo$i")) && !empty(get_field("parrafo$i"))): ?>
                <div class="swiper-slide swiper-hero<?php echo $i;?> p-relative capa-oscura">
                    <div class="contenido-swiper estilos-banner swiper<?php echo $i;?>">
                    <h2><?php the_field("titulo$i"); ?></h2>
                    <p><?php the_field("parrafo$i"); ?></p>
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
        <a class="btn-swiper" href="#">¿Conoce más?</a>  
    </div>
</div>

<div class="contenedor" id="soluciones" data-scroll>
    <div class="titulo-h3 seccion">
      <h3><?php the_field("titulo_soluciones_home"); ?></h3>
    </div>
    <div class="contenido-soluciones">
        <?php for($i = 1; $i<=10; $i++): ?>
            <?php if(!empty(get_field("subtitulo_soluciones_home$i")) && !empty(get_field("texto_soluciones_home$i")) && !empty(get_field("imagen_soluciones_home$i"))): ?>
            <div class="solucion seccion <?php echo ($i % 2) == 0 ? 'par' : ''; ?>">
                <div class="contenido-solucion">
                    <h4><?php the_field("subtitulo_soluciones_home$i"); ?></h4>
                    <p><?php the_field("texto_soluciones_home$i"); ?></p>
                    <div class="contenedor-boton">
                        <!-- Swiper -->
                        <div class="swiper-container2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#">CONOCE MÁS</a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">CONTÁCTANOS</a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">BOTON3</a></div>
                                </div>
                        <!-- Add Pagination -->
                            <div  class="swiper-pagination2"></div>
                        </div>
                    </div>
                </div>
                <div class="img-solucion">
                    <img src="<?php the_field("imagen_soluciones_home$i") ?>" alt="" >
                </div>
            </div>
            <hr>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
</div>

<div class="hero-creamos-valor-para-las-industrias" id="industrias" data-scroll>
    <div class="contenedor">
        <div class="titulo-h3 seccion">
            <h3><?php the_field('titulo_industrias_home'); ?></h3>
        </div>
        <div class="contenido-cvpli-fila1 seccion">
            <?php for($i = 1; $i<=10; $i++): ?>
            <?php if(!empty(get_field("icono_industria_home$i")) && !empty(get_field("titulo_icono_industria_home$i"))): ?>
            <div class="industria <?php echo ($i % 4 != 0) ? 'border-right' : '';?>">
                <div>
                    <img src="<?php the_field("icono_industria_home$i"); ?>" alt="">
                    <h4><?php the_field("titulo_icono_industria_home$i"); ?></h4>
                </div>
                <a href="<?php echo the_field("link_industria_home$i"); ?>"><?php the_field("texto_boton_industrias_home"); ?></a>
                
            </div>
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