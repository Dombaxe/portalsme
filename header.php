<!doctype html>
<html <?php language_attributes(); ?> >
  <head>
    <!-- Required meta tags -->
    <meta <?php bloginfo('charset'); ?> >
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="src/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.green.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owlStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/lightbox.min.css">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>
  </head>
  <body>
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg  bg-white">
            <a class="navbar-brand col-9 logo d-md-block d-none max-headera" href="#">
                    <img src="<?php bloginfo('template_url'); ?>/assets/SME GOV.ao MAUSC.png" width="600px" height="90px">
                                
            </a>
           

             <div class="d-md-block d-none"><a class="nav-link mr-0" href="" data-toggle="modal" data-target="#sitemodal"><i class="fa fa-search"></i></a></div>
             <div class="d-md-block d-none"><a href="https://www.facebook.com/servicodemigracaoestrangeiros" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/facebook.png" width="25px" height="25px"></a></div>
             <div class="d-md-block d-none"> <?php
                                dynamic_sidebar('Lingua');
                              ?></div>
             

                
                 
                </div>
   
            </section>   
                 
          </nav>
          <nav class="navbar navbar-expand-lg" style="background:#117eb9">
                <a class="navbar-brand col-3" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                        <span class="navbar-toggler-icon text-dark">
                                <span class="sr-only">Abrir ou fechar menu</span> &#9779;
                        </span>
                      </button>
                 <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'principal',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse max-nav',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav navbar-ul',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>

                          
            
                </div>
           </nav>
        </header>