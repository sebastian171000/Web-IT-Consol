<?php get_header('inicio');  ?>
<div class="hero-transporte centrar-contenido-banner p-relative capa-oscura">
    <div class="estilos-banner">
        <h2>Industrias</h2>
        <p>TRANSPORTE</p>
    </div>
</div>
<div class="contenedor soluciones-transporte" id="soluciones" data-scroll>
    <div class="contenido-soluciones">
        <div class="solucion seccion">
            <div class="contenido-solucion">
                <h4>Energía y <br> Servicios Públicos</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed eaque voluptates voluptatibus corporis commodi ad at quis earum facere rem eos eligendi saepe, natus quae non praesentium quidem illum qui! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem, inventore modi facere nisi velit nesciunt perspiciatis eaque, unde quia deserunt porro sint ab, dolor non. Minus labore illum et nisi!</p>
            </div>
            <div class="img-solucion">
                <img src="<?php the_field('imagen_soluciones') ?>" alt="" >
            </div>
        </div>
        
    </div>
    <div class="contenido-soluciones2">
        <h3>Principales necesidades relacionadas con la Operación y Gestión de  Activos:</h3>
        <div class="listas-soluciones">
            <ul>
                <li>- Monitoreo de Operación y Desempeño</li>
                <li>- Cumplimiento de Reportes Regulotorio</li>
                <li>- Gestión de Interrupciones (SAIOl/SAIFI)</li>
                <li>- Planificación de Mantenimientos</li>
                <li>- Administración de Uso de Recursos</li>
            </ul>
            <ul>
                <li>- Inspecciones en Transmisión</li>
                <li>- Gestión de trabajos y manejo de cuadrillos</li>
                <li>- Proyectos de Expansión - Unidades Compatibles</li>
                <li>- Gestión de Riesgos, Seguridad y Medio Ambiente</li>
                <li>- Administración de Contratos de Terceros</li>
            </ul>
        </div>
    </div>
</div>
<div class="hero-transporte2 hero-banner2 centrar-contenido-banner">
    <div class="estilos-banner">
        <h2>Soluciones IT CONSOL <br> que atienden sus necesidades</h2>
    </div>
</div>
<div class="hero-creamos-valor-para-las-industrias" id="industrias" data-scroll>
    <div class="contenedor">
        <div class="contenido-cvpli-fila2 seccion">
            <div class="industria">
                <div class="icono">
                    <img src="<?php the_field('icono1'); ?>" alt="">
                </div>
                <h4>IBM APM Suite</h4>
                <p>Monitoreo de Desempeño y Predicción en Generación
(Salud y Predicción de Fallas)</p>
            </div>
            <div class="industria">
                <div class="icono">
                    <img src="<?php the_field('icono2'); ?>" alt="">
                </div>
                <h4>IBM APM for <br> Energy & Utility</h4>
                <p>Monitoreo de Redes de Transmisión y Distribución (Salud y Predicción de Fallas)</p>
            </div>
            <div class="industria">
                <div class="icono">
                    <img src="<?php the_field('icono3'); ?>" alt="">
                </div>
                <h4>IBM MAXIMO <br> EAM</h4>
                <p>Gestión de Mantenimiento, Proyectos, Logística
y Seguridad</p>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('templates-part/formulario') ?>
<?php get_footer();  ?>