<footer class="hero-footer">
    <div class="contenedor">
        <div class="contenido-footer">
            <div class="footer">
                <p><strong>México</strong>-<strong>Perú</strong>-<strong>EE.UU.</strong>-<strong>Brasil</strong>-<strong>Colombia</strong></p>
                <p>2020 It Consol Todos los derechos son reservados
                Las marcas y logos que aparecen dentro del sitio
                pertenecen a sus respectivos propietarios.</p>
            </div>
            <div class="footer">
                <img src="<?php the_field('logo') ?>" alt="" >
            </div>
            <div class="footer">
                <nav class="navegacion-footer">
                    <a href="">SOLUCIONES</a>
                    <a href="">INDUSTRIAS</a>
                    <a href="">CONTACTO</a>
                    <a href="">NOTICIAS Y CONOCIMIENTOS</a>
                    <a href="">NOSOTROS</a>
                    <?php //get_search_form(); ?>
                </nav>
            </div>
            <div class="footer">
            <nav class="redes-sociales-header">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt=""></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/in.png" alt=""></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt=""></a>
                    </nav>
            </div>
        </div>

        
    </div>
</footer>



<?php wp_footer() ?>

</body>



</html>
