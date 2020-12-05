
<div class="hero-formulario2">    
    <div data-aos="fade-up" class="titulo-h3 seccion">
        <h3>Contáctanos</h3>
    </div>
    <nav data-aos="fade-left" class="redes-sociales-header" style="text-align:center;">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook-azul.png" alt=""></a>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/in-azul.png" alt=""></a>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter-azul.png" alt=""></a>
    </nav>

    <div class="contenedor-formulario">
        <img class="imagen-formulario" src="<?php the_field('imagen_formulario','2'); ?>" alt="">
        <div class="hero-formulario" id="contacto" data-scroll>
            <div data-aos="fade-up" class="contenido-form">
               <form action="<?php echo "http://" . $_SERVER["SERVER_NAME"] . '/post-form'?>" method="post">
                   <input id="nombre" type="text" name="nombre" placeholder="Nombre: ">
                   <input id="empresa" type="text" name="empresa" placeholder="Empresa: ">
                   <input id="email" type="email" name="email" placeholder="Email: ">
                   <input id="telefono" type="text" name="telefono" placeholder="Telefono:(opcional) ">
                   <textarea placeholder="Mensaje:" name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
                   <input type="hidden" name="pagina" value="<?php echo  $_SERVER["REQUEST_URI"] ?>">
                   <div class="right">
                        <input id="enviar" type="submit" value="Enviar">
                   </div>
                   <?php echo isset($_SESSION['completado']) ? '<div id="completado"></div>' : ''; ?>
                   <?php unset($_SESSION['completado']); ?>
                   <?php session_destroy(); ?>
               </form>
            </div>
            <hr data-aos="fade-up">
            <div data-aos="fade-up" class="contenedor-swiper-formulario">
                <div class="swiper-container4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="contenedor-informacion-formulario">
                                <div class="informacion">
                                    <h5>Oficina Corporativas México</h5>
                                    <p>Calle Goberbador Agustín Vicente<br>
                                    Eguía 46 Col. San Miguel Chapultepec<br>
                                    I sección Ciudad de México<br>
                                    Tel: +52 (55) 5545-6352</p>
                                </div>
                                <div class="informacion">
                                    <h5>Oficina Corporativas México</h5>
                                    <p>Calle Goberbador Agustín Vicente<br>
                                    Eguía 46 Col. San Miguel Chapultepec<br>
                                    I sección Ciudad de México<br>
                                    Tel: +52 (55) 5545-6352</p>
                                </div>
                                <div class="informacion">
                                    <h5>Oficina Corporativas México</h5>
                                    <p>Calle Goberbador Agustín Vicente<br>
                                    Eguía 46 Col. San Miguel Chapultepec<br>
                                    I sección Ciudad de México<br>
                                    Tel: +52 (55) 5545-6352</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="contenedor-informacion-formulario">
                                <div class="informacion">
                                    <h5>Oficina Corporativas México</h5>
                                    <p>Calle Goberbador Agustín Vicente<br>
                                    Eguía 46 Col. San Miguel Chapultepec<br>
                                    I sección Ciudad de México<br>
                                    Tel: +52 (55) 5545-6352</p>
                                </div>
                                <div class="informacion">
                                    <h5>Oficina Corporativas México</h5>
                                    <p>Calle Goberbador Agustín Vicente<br>
                                    Eguía 46 Col. San Miguel Chapultepec<br>
                                    I sección Ciudad de México<br>
                                    Tel: +52 (55) 5545-6352</p>
                                </div>
                                <div class="informacion">
                                    <h5>Oficina Corporativas México</h5>
                                    <p>Calle Goberbador Agustín Vicente<br>
                                    Eguía 46 Col. San Miguel Chapultepec<br>
                                    I sección Ciudad de México<br>
                                    Tel: +52 (55) 5545-6352</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination4"></div>
                </div>
            </div>
        </div>
    </div>
</div>