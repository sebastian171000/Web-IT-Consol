<?php get_header('inicio');  ?>
<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide swiper-hero1">
            <div class="contenido-swiper swiper1">
              <h2>Grupo IT Consol </h2>
              <p>LÍDERES EN GESTIÓN DE <br> ACTIVOS Y MANTENIMIENTO</p>
            </div>
        </div>
        <div class="swiper-slide swiper-hero2">
            <div class="contenido-swiper swiper2">
                <h2>Gestión de Activos</h2>
                <p>SIMPLIFICA TU GESTIÓN DE ACTIVOS <br> CON MÁXIMO IT CONSOL</p>
                </div>
            </div>
        <div class="swiper-slide swiper-hero3">
            <div class="contenido-swiper swiper3">
                <h2>Soluciones Tecnológicas EAM-APM</h2>
                <p>MAXIMIZA EL RENDIMIENTO DE TUS ACTIVOS <br> CON IT CONSOL</p>
                </div>
            </div>
        <div class="swiper-slide swiper-hero4">
            <div class="contenido-swiper swiper4">
                <h2>Transformación Digital</h2>
                <p>ACELERA PROCESOS Y SOLUCIONES <br> TECNOLÓGICAS CON IT CONSOL</p>
            </div>
        </div>
    </div>
    <div class="botones-swiper">
        <a class="btn-swiper" href="#">¿Qué hacemos?</a>
        <a class="btn-swiper" href="#">¿Cómo lo hacemos?</a>
        <a class="btn-swiper" href="#">¿Conoce más?</a>  
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
<div class="contenedor">
    <div class="titulo-h3 seccion">
      <h3>Nuestras Soluciones</h3>
    </div>
    
    <div class="contenido-soluciones">
        <div class="solucion seccion">
            <div class="contenido-solucion">
                <h4>Gestión de Activos ISO 55000</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam et quo a corporis enim nemo voluptate ipsam aut. Molestias eum quidem ad exercitationem laboriosam perferendis voluptatibus suscipit eius sed ex.</p>
                <a href="#">CONTÁCTANOS</a>
            </div>
            <div class="img-solucion">
                <img src="<?php the_field('imagen_gestion_de_activos') ?>" alt="" >
            </div>
        </div>
        <div class="solucion seccion segunda">
            <div class="contenido-solucion ">
                <h4>Soluciones Tecnológicas EAM y APM</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad cupiditate quos ducimus sapiente deleniti hic nisi, vero libero dolorum necessitatibus iure quae amet? Dolore reprehenderit illum ullam dignissimos perferendis odio?</p>
                <a href="#">CONTÁCTANOS</a>
            </div>
            <div class="img-solucion">
                <img src="<?php the_field('soluciones_tecnologicas_eam_y_apm') ?>" alt="" >
            </div>
        </div>
        <div class="solucion seccion">
            <div class="contenido-solucion">
                <h4>Transformación Digital</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis nesciunt quam temporibus distinctio hic. Quisquam sit, esse, reprehenderit dolores recusandae repellendus in cumque modi itaque vel ad aperiam molestiae minus.</p>
                <a href="#">CONTÁCTANOS</a>
            </div>
            <div class="img-solucion">
                <img src="<?php the_field('imagen_transformacion_digital') ?>" alt="">
            </div>        
        </div>
    </div>
</div>
<div class="hero-creamos-valor-para-las-industrias">
    <div class="contenedor">
        <h3>Creamos valor para las industrias</h3>
        <div class="contenido-cvpli-fila1 seccion">
            <div class="industria">
                <div class="icono">
                    <img src="<?php the_field('icono1'); ?>" alt="">
                </div>
                <h4>ENERGÍA Y SERVICIOS PÚBLICOS</h4>
                <p>Electricidad, Gas y Agua.</p>
            </div>
            <div class="industria">
                <div class="icono">
                    <img src="<?php the_field('icono2'); ?>" alt="">
                </div>
                <h4>PUERTOS Y CADENAS LOGÍSTICAS</h4>
                <p>Puerto, Administración, Logística y Transporte.</p>
            </div>
            <div class="industria">
                <div class="icono">
                    <img src="<?php the_field('icono3'); ?>" alt="">
                </div>
                <h4>MINERÍA Y PETROLEO</h4>
                <p>Extracción, Planta de Beneficio, Transporte.</p>
            </div>
            <div class="industria">
                <div class="icono">
                    <img src="<?php the_field('icono4'); ?>" alt="">
                </div>
                <h4>PROVEEDOR DE SERVICIO</h4>
                <p>Mantenimiento, Alquileres, Rentabilidad de Equipos. </p>
            </div>
            
        </div>
        <div class="contenido-cvpli-fila2 seccion">
            <div class="industria">
                <div class="icono">
                    <img src="<?php the_field('icono5'); ?>" alt="">
                </div>
                <h4>MANUFACTURA</h4>
                <p>Producción, Mantenimiento, Logística.</p>
            </div>
            <div class="industria">
                <div class="icono">
                    <img src="<?php the_field('icono6'); ?>" alt="">
                </div>
                <h4>BANCA</h4>
                <p>Gestión de Servicios, Logística.</p>
            </div>
            <div class="industria">
                <div class="icono">
                    <img src="<?php the_field('icono7'); ?>" alt="">
                </div>
                <h4>TRANSPORTE</h4>
                <p>Operación, Mantenimiento, Combustible.</p>
            </div>
        </div>
    </div>
</div>
<div class="hero-formulario">
    <div class="contenedor">
        <h3>Consulta a nuestros expertos</h3>
        <p>Comunicate con nuestros expertos y haremso un diagnostico de tus necesidades.</p>
        <div class="contenido-form">
            <?php echo do_shortcode ('[contact-form-7 id="68" title="Contact form 1"]');?>
        </div>
    </div>
</div>
<div class="hero-creamos-valor-para-las-industrias hero-nuestra-experiencia">
    <div class="contenedor">
        <h3>Nuestra Experiencia</h3>
        <div class="contenido-experiencia seccion">
            <div class="experiencia exp1">
                <div class="img-experiencia ">
                    <img src="<?php the_field('imagen_experiencia1'); ?>" alt="">
                </div>  
                <h4>ELECTRODUNAS <br> Distribución  de Energía </h4>
            </div>
            <div class="experiencia exp2">
                <div class="img-experiencia ">
                    <img src="<?php the_field('imagen_experiencia2'); ?>" alt="">
                </div> 
                <h4>HERMES <br> Servicios de  Administración  de Riesgos  </h4>
            </div>
            <div class="experiencia exp3">
                <div class="img-experiencia ">
                    <img src="<?php the_field('imagen_experiencia3'); ?>" alt="">
                </div> 
                <h4>DPWORLD <br> Administración de Puertos y  Cadena Logística  </h4>
            </div>
            <div class="experiencia exp4">
                <div class="img-experiencia ">
                    <img src="<?php the_field('imagen_experiencia4'); ?>" alt="">
                </div> 
                <h4>SUDAMERICANA  DE FIBRAS <br> Fabricación  de Fibras textiles  </h4>
            </div>
        </div>
    </div>
</div>
<?php get_footer();  ?>