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
    $id_imagen1 = get_field('hero-swiper1', $front_page_id);
    $id_imagen2 = get_field('hero-swiper2', $front_page_id);
    $id_imagen3 = get_field('hero-swiper3', $front_page_id);
    $id_imagen4 = get_field('hero-swiper4', $front_page_id);
    $id_imagen5 = get_field('fondo_formulario', $front_page_id);
    $id_imagen6 = get_field('banner_imagen', '89');
    $id_imagen7 = get_field('banner_imagen2', '89');
    $id_imagen8 = get_field('banner_imagen', '115');
    $id_imagen9 = get_field('banner_imagen2', '115');
    $id_imagen10 = get_field('hero-swiper5', $front_page_id);
    //obtener la imagen
    $imagen1 = wp_get_attachment_image_src($id_imagen1, 'full')[0];
    $imagen2 = wp_get_attachment_image_src($id_imagen2, 'full')[0];
    $imagen3 = wp_get_attachment_image_src($id_imagen3, 'full')[0];
    $imagen4 = wp_get_attachment_image_src($id_imagen4, 'full')[0];
    $imagen5 = wp_get_attachment_image_src($id_imagen5, 'full')[0];
    $imagen6 = wp_get_attachment_image_src($id_imagen6, 'full')[0];
    $imagen7 = wp_get_attachment_image_src($id_imagen7, 'full')[0];
    $imagen8 = wp_get_attachment_image_src($id_imagen8, 'full')[0];
    $imagen9 = wp_get_attachment_image_src($id_imagen9, 'full')[0];
    $imagen10 = wp_get_attachment_image_src($id_imagen10, 'full')[0];
    //style css
    wp_register_style('custom', false);
    wp_enqueue_style('custom');
    $imagen_destacada_css = "
    
    
    body.home .swiper-hero1{
        background-image: url($imagen1);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    body.home .swiper-hero2{
        background-image: url($imagen2);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    body.home .swiper-hero3{
        background-image: url($imagen3);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    body.home .swiper-hero4{
        background-image: url($imagen4);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    body.home .swiper-hero5{
        background-image: url($imagen10);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    
    body.page-id-89 .hero-energia{
        background-image: url($imagen6);
        background-repeat: no-repeat;
        background-size: cover;
        height: 79.1vh;
        background-position: center;
    }
    body.page-id-89 .hero-energia2{
        background-image: url($imagen7);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 69.1vh;
    }
    body.page-id-115 .hero-transporte{
        background-image: url($imagen7);
        background-repeat: no-repeat;
        background-size: cover;
        height: 79.1vh;
        background-position: center;
    }
    body.page-id-115 .hero-transporte2{
        background-image: url($imagen8);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 69.1vh;
    }
    @media (min-width: 1090px) {
        body.home .swiper-hero1{
            background-position: 0rem -31rem;
        }
    }
    ";
    wp_add_inline_style('custom', $imagen_destacada_css);
}
add_action('init', 'header_hero_imagen');
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
   }
add_filter('upload_mimes', 'cc_mime_types');
?>
