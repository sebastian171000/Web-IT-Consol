<footer class="hero-footer">
    <div class="contenedor">
        <div class="contenido-footer">
            <div class="footer">
                <img src="<?php the_field('logo') ?>" alt="" >
                <p><strong>México</strong>-<strong>Perú</strong>-<strong>EE.UU.</strong>-<strong>Brasil</strong>-<strong>Colombia</strong></p>
                <p>2020 | IT CONSOL | Todos los derechos son reservados | Las marcas y logos que aparecen dentro del sitio pertenecen a sus respectivos propietarios.</p>
            </div>
           
            <div class="footer" style="text-align:left;">
                <p>Contacto:</p>
                <div class="footer-telefono" style="text-align:left;margin-bottom: -34px;margin-top: -24px;">
                    <i class="fas fa-phone-alt"></i>
                    <p>55 5456352</p>
                </div>
                <div class="footer-email">
                    <i class="fas fa-envelope"></i>
                    <p>contacto@itconsol.com</p>
                </div>
                <nav class="redes-sociales-header" style="text-align:left;">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt=""></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/in.png" alt=""></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt=""></a>
                </nav>
            </div>
        </div>
    </div>
    <div class="footer">
        <nav class="navegacion-footer">
            <div class="contenedor">
            <?php for($i = 1; $i<=10; $i++): ?>
                <?php if(!empty(get_field("url$i","2")) && !empty(get_field("texto_menu$i","2"))): ?>
                    <a <?php echo strpos(get_field("url$i","2"), "#") !== false ? 'data-scroll' : ''; ?>  href="<?php the_field("url$i","2"); ?>"><?php the_field("texto_menu$i","2"); ?></a>
                <?php endif; ?>
                    
            <?php endfor; ?>
            </div>
        </nav>
    </div>
    
    
</footer>



<?php wp_footer() ?>

</body>



</html>
