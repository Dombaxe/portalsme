<?php

//chamar a tag title e adcionar os formatos de posts
function smewp_theme_support(){
    add_theme_support('title-tag');
    //Adicionar os formatos de posts
    add_theme_support('post-formats', array('aside', 'image'));

    //Adicionar o logotipo
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'smewp_theme_support');
//previnir o erro na tag title na versoes antigas
if(!function_exists('_wp_render_title_tag')){
    function sme_render_title(){
        ?>
        <title><?php wp_title('|',true, 'right'); ?></title>
        <?php
    }
    add_action('wp_head','sme_render_title');
}

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

//registar os menus
register_nav_menus( array(
    'principal' => __( 'Menu principal', 'smewp')
));

// definir as minuaturas do posts
add_theme_support('post-thumbnails');
// set_post_thumbnail_size(1280,720, true);

//definir o tamanho do resumo

add_filter('excerpt_length', function($length){
  return 40;
});


//definir a paginação
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes(){
    return 'class="btn btn-outline-my-color-5"';
}

//Criar a barra lateral
register_sidebar(
    array(
      'name' => 'Barra lateral',
      'id' => 'sidebar',
      'before widget' => '<div class="card mb-4">',
      'after_widget' => '</div></div>',
      'before_title' => '<h6 class="card-header text-white bg-dark lead">',
      'after_title' => '</h6><div class="card-body">',

    ));

    //criar campo de busca
register_sidebar(
    array(
        'name' => 'Busca',
        'id' => 'busca',
        'before_widget'=> '<div class="blog-search">',
        'after_widget' =>'</div>',
        'before_title' =>'<h5>',
        'after_title' =>'</h5>',
));


    //Criar idioma
register_sidebar(
    array(
      'name' => 'Lingua',
      'id' => 'lingua',
      'before widget' => '<div>',
      'after_widget' => ' </div>',
      'before_title' => '<a>',
      'after_title' => '</a>',

    ));

// Criar o tipo de post para o banner
function create_post_type() {

    register_post_type('banners',
    // Definir as opções
    array(
        'labels' => array(
            'name' => __('Banners'),
            'singular_name' => __('Banners')
        ),
        'supports' => array(
            'title', 'editor', 'thumbnail'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'rewrite' => array('slug' => 'banners'),
    ));
}
//Iniciar o tipo de post
add_action('init', 'create_post_type');

// Incluir s funcões de personalização
require get_template_directory(). '/inc/customizer.php';


?>