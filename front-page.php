<?php get_header('inicio');  ?>
<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide swiper-hero1 p-relative capa-oscura">
            <div class="contenido-swiper estilos-banner swiper1">
              <h2>Grupo IT Consol </h2>
              <p>LÍDERES EN GESTIÓN DE <br> ACTIVOS Y MANTENIMIENTO</p>
            </div>
        </div>
        <div class="swiper-slide swiper-hero2 p-relative capa-oscura">
            <div class="contenido-swiper estilos-banner swiper2">
                <h2>Gestión de Activos</h2>
                <p>SIMPLIFICA TU GESTIÓN DE ACTIVOS <br> CON MAXIMO IT CONSOL</p>
                </div>
            </div>
        <div class="swiper-slide swiper-hero3 p-relative capa-oscura">
            <div class="contenido-swiper estilos-banner swiper3">
                <h2>Soluciones Tecnológicas EAM-APM</h2>
                <p>MAXIMIZA EL RENDIMIENTO DE TUS ACTIVOS <br> CON IT CONSOL</p>
                </div>
            </div>
        <div class="swiper-slide swiper-hero4 p-relative capa-oscura">
            <div class="contenido-swiper estilos-banner swiper4">
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
                <a class="icono" href="<?php echo get_permalink('89') ?>">
                    <img src="<?php the_field('icono1'); ?>" alt="">
                </a>
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
            <a class="icono" href="<?php echo get_permalink('115') ?>">
                    <img src="<?php the_field('icono7'); ?>" alt="">
                </a>
                <h4>TRANSPORTE</h4>
                <p>Operación, Mantenimiento, Combustible.</p>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('templates-part/contacto-experiencia-footer') ?>
<a target="_blank" href="https://wa.link/l2qgwk" class="btn-wsp">
    <img src="<?php echo get_template_directory_uri(); ?>/img/WSP.png" alt="">
</a>
<?php get_footer();  ?>