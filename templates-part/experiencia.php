<div class="titulo-h3 seccion">
      <h3><?php the_field("titulo_experiencia","2"); ?></h3>
</div>
<div class="hero-nuestra-experiencia">
    <div class="contenedor">
        <div class="swiper-container3">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="contenido-experiencia seccion">
                        <?php for($i = 1; $i<=4; $i++): ?>
                        <?php if(!empty(get_field("imagen_experiencia$i","2")) && !empty(get_field("imagen_experiencia_hover$i","2"))): ?>
                        <div class="experiencia exp<?php echo $i;?>">
                            <div class="img-experiencia">
                                <img src="<?php the_field("imagen_experiencia$i","2"); ?>" alt="">
                                <img src="<?php the_field("imagen_experiencia_hover$i","2"); ?>" alt="">
                            </div>  
                            <h4><?php the_field("subtitulo_experiencia$i","2"); ?></h4>
                            <p><?php the_field("texto_experiencia$i","2"); ?></p>  
                        </div>
                        <?php endif; ?>
                        <?php endfor; ?>
                        
                    </div>          
                </div>
                <div class="swiper-slide">
                <div class="contenido-experiencia seccion">
                        <?php for($i = 1; $i<=4; $i++): ?>
                        <?php if(!empty(get_field("imagen_experiencia$i","2")) && !empty(get_field("imagen_experiencia_hover$i","2"))): ?>
                        <div class="experiencia exp<?php echo $i;?>">
                            <div class="img-experiencia">
                                <img src="<?php the_field("imagen_experiencia$i","2"); ?>" alt="">
                                <img src="<?php the_field("imagen_experiencia_hover$i","2"); ?>" alt="">
                            </div>  
                            <h4><?php the_field("subtitulo_experiencia$i","2"); ?></h4>
                            <p><?php the_field("texto_experiencia$i","2"); ?></p>  
                        </div>
                        <?php endif; ?>
                        <?php endfor; ?>
                        
                    </div>         
                </div>
                <div class="swiper-slide">
                <div class="contenido-experiencia seccion">
                        <?php for($i = 1; $i<=4; $i++): ?>
                        <?php if(!empty(get_field("imagen_experiencia$i","2")) && !empty(get_field("imagen_experiencia_hover$i","2"))): ?>
                        <div class="experiencia exp<?php echo $i;?>">
                            <div class="img-experiencia">
                                <img src="<?php the_field("imagen_experiencia$i","2"); ?>" alt="">
                                <img src="<?php the_field("imagen_experiencia_hover$i","2"); ?>" alt="">
                            </div>  
                            <h4><?php the_field("subtitulo_experiencia$i","2"); ?></h4>
                            <p><?php the_field("texto_experiencia$i","2"); ?></p>  
                        </div>
                        <?php endif; ?>
                        <?php endfor; ?>
                        
                    </div>         
                </div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination3"></div>
        </div>
    </div>
</div>

