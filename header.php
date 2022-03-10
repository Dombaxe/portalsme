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
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
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
        <nav class="navbar navbar-expand-lg max-headera">
            <!-- <a class="navbar-brand max-logo col-12 logo" href="#" style="text-align:center">
                    <img src="src/assets/sme.png">|
                    <img src="src/assets/logomarca3.png">
            </a> -->

            <section class="top top-fixed p-1">
      
                <div class=" ml-3 mr-3 d-flex align-items-center">
                <div class="ml-2">
                  <?php
                     $custom_logo_id=get_theme_mod('custom_logo');
                     $logo=wp_get_attachment_image_src($custom_logo_id,'full');

                     if(has_custom_logo() ){
                       echo '<img src="' . esc_url($logo[0]) .'" class="img-fluid" width="100">';

                     }else{

                      echo '<h5>'. get_bloginfo('name') . '</h5>';
                    
                     }

                     
                    ?>
                </div>
                
                <div class="d-flex flex-column">
                <div class="">
                    <div class="d-flex align-items-end mb-2">

                    </div>
                    <div class="d-md-block d-none">
                    <h5 class="text-center" style="color:white;font-weight: bold"><?php bloginfo('name'); ?></h5>
                    <h5 class="ml-2"  style="color:white;font-weight: bold"><?php bloginfo('description'); ?></h5>
                    </div>
                    <div class="d-md-none d-sm-block">
                    <h5 class="text-center"  style="color:white;font-weight: bold"><?php bloginfo('name'); ?></h5>
                    <h5 class="ml-2"   style="color:white;font-weight: bold"><?php bloginfo('description'); ?></h5>
                    </div>
                </div>
                </div>

                <div class="d-md-block d-none" style="margin-left:35rem">
                   <img src="<?php bloginfo('template_url'); ?>/assets/logomarca3.png" width="100">
                   <a class="btn btn-danger mt-1 btn-lg ml-4" target="_blank"  href="//www.smevisa.gov.ao/">VISTOS</a>
                </div>
   
            </section>   
                 
          </nav>
          <nav class="navbar navbar-expand-lg  bg-light">
                <a class="navbar-brand col-2" href="#"></a>
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

                          <li class="nav-item  d-none d-md-block">
                            <a class="nav-link mr-0" href="" data-toggle="modal" data-target="#sitemodal"><i class="fa fa-search"></i></a>
                          </li>
                          <li class="nav-item d-none d-md-block">
                                  <a class="nav-link mr-0 dom1" href="https://www.facebook.com/servicodemigracaoestrangeiros"><i class="fa fa-facebook"></i></a>
                          </li>
                          <li class="nav-item d-none d-md-block">
                                <a class="nav-link mr-0 dom2" href="#"><i class="fa fa-youtube"></i></a>
                        </li> 
                          <li class="nav-item dropdown d-none d-md-block">
                              <?php
                                dynamic_sidebar('Lingua');
                              ?>
                          </li>               
                        </ul>
            
                </div>
           </nav>
        </header>