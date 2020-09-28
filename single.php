<?php 
    echo 'Hola desde Entrada';
?>
<div class="contenedor descripcion">
<?php while (have_posts()) : the_post();?> 
    <p><?php the_content()?></p>
            <?php endwhile; ?>
</div>