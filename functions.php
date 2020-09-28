<?php 
function webitconsole_setup()
{
    //habilita imagenes destacadas
    add_theme_support('post-thumbnails');
    add_theme_support('align-wide');
    //titulo seo
    add_theme_support('title-tag');
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

    
   
}
add_action('after_setup_theme', 'webitconsole_setup');
//scripts y Styles
function webitconsole_scripts_styles()
{
    //la hoja de estilo principal
    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0');
    //css
    wp_enqueue_style('adobefonts', 'https://use.typekit.net/xmj4frm.css', array(), '1.0.0');
    wp_enqueue_style('swipecss', get_template_directory_uri() . '/css/swiper.min.css', array(), '1.0.0');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefonts','swipecss'), '1.0.0');    
    //javascript
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery','swipejs'), '1.0.0', true);
    wp_enqueue_script('swipejs', get_template_directory_uri() . '/js/swiper.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('smooth-scroll-js', get_template_directory_uri() . '/js/smooth-scroll.min.js', array('jquery'), '1.0.0', true);
    //fontawesome
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/a0e0d9b7b0.js', array(), '1.0.0');
    

    
}
//va acargar hojas de estilo en la parte frontal del sitio web
add_action('wp_enqueue_scripts', 'webitconsole_scripts_styles');
/**imagen hero */
function header_hero_imagen()
{
    // obtener id pagina principal
    $front_page_id = get_option('page_on_front');
    //obtener id imagen
    $id_imagen = get_field('hero-swiper2', $front_page_id);
    //obtener la imagen
    $imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];
    //style css
    wp_register_style('custom', false);
    wp_enqueue_style('custom');
    $imagen_destacada_css = "
    body.home .swiper-hero2{
        background-image: url($imagen);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 0rem -31rem;
    }
    ";
    wp_add_inline_style('custom', $imagen_destacada_css);
}
add_action('init', 'header_hero_imagen');
?>
