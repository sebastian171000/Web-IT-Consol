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
<div class="contenedor" id="soluciones" data-scroll>
    <div class="titulo-h3 seccion">
      <h3>Nuestras Soluciones</h3>
    </div>
    
    <div class="contenido-soluciones">
        <div class="solucion seccion">
            <div class="contenido-solucion">
                <h4>Gestión de Activos ISO 55000</h4>
                <p>Metodología para implementación de Gestión de Activos
                (Estrategia, Personas, Proceso, Tecnología), Cursos de
                formación en Mantenimiento y Confiabilidad, Modelos de
                Optimización de Recursos y Técnicas de Confiabilidad.</p>
                <a href="#">CONTÁCTANOS</a>
            </div>
            <div class="img-solucion">
                <img src="<?php the_field('imagen_gestion_de_activos') ?>" alt="" >
            </div>
        </div>
        <div class="solucion seccion segunda">
            <div class="contenido-solucion ">
                <h4>Soluciones Tecnológicas EAM y APM</h4>
                <p>Soluciones EAM (Enterprise Asset Management) y APM (Asset Performance Management) para la gestión integral de activos, uso de recursos y gestión del desempeño para diversas industrias: Energía, Transporte, Minería, Manufactura, Salud, Alimentos, Proveedores de Servicios, etc.</p>
                <a href="#">CONTÁCTANOS</a>
            </div>
            <div class="img-solucion">
                <img src="<?php the_field('soluciones_tecnologicas_eam_y_apm') ?>" alt="" >
            </div>
        </div>
        <div class="solucion seccion">
            <div class="contenido-solucion">
                <h4>Transformación Digital</h4>
                <p>Asesoramiento a empresas hacia la transformación digital de procesos operativos mediante la implementación de soluciones especializadas de industria 4.0.</p>
                <a href="#">CONTÁCTANOS</a>
            </div>
            <div class="img-solucion">
                <img src="<?php the_field('imagen_transformacion_digital') ?>" alt="">
            </div>        
        </div>
    </div>
</div>
<div class="hero-creamos-valor-para-las-industrias" id="industrias" data-scroll>
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
<div class="hero-formulario" id="contacto" data-scroll>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ELECTRODUNAS2.png" alt="">
                </div>  
                <h4>ELECTRODUNAS <br> Distribución  de Energía </h4>
            </div>
            <div class="experiencia exp2">
                <div class="img-experiencia ">
                    <img src="<?php the_field('imagen_experiencia2'); ?>" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/hermesv3.png" alt="">
                </div> 
                <h4>HERMES <br> Servicios de  Administración  de Riesgos  </h4>
            </div>
            <div class="experiencia exp3">
                <div class="img-experiencia ">
                    <img src="<?php the_field('imagen_experiencia3'); ?>" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/DPWORLD2.png" alt="">
                </div> 
                <h4>DPWORLD <br> Administración de Puertos y  Cadena Logística  </h4>
            </div>
            <div class="experiencia exp4">
                <div class="img-experiencia ">
                    <img src="<?php the_field('imagen_experiencia4'); ?>" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/SDF.png" alt="">
                </div> 
                <h4>SUDAMERICANA  DE FIBRAS <br> Fabricación  de Fibras textiles  </h4>
            </div>
        </div>
    </div>
</div>
<a target="_blank" href="https://wa.link/l2qgwk" class="btn-wsp">
    <img src="<?php echo get_template_directory_uri(); ?>/img/WSP.png" alt="">
</a>
<?php get_footer();  ?>