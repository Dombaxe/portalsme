<?php get_header(); ?>
           
           <!--Mobile-->
           <?php include('mobile.php') ?>
           <!--Mobile fim-->

           <!--DESTAQUE-->
           <section class="container element-animate d-md-block d-none" style="padding-top:210px">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <a target="_blank"  href="//www.smevisa.gov.ao/">
                            <div class="card text-white mb-3" style="background:#117eb9">
                              <div class="card-header text-center">
                                  <p><i class="fa fa-globe" style="font-size:29px;color:white"></i></p>
                                  <a target="_blank"  href="//www.smevisa.gov.ao/" style="color:white;text-decoration:none">VISTO DE TURISMO ONLINE</a>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a href="https://www.sme.gov.ao/formularios-digitais/">
                            <div class="card text-white mb-3" style="background:#117eb9">
                              <div class="card-header text-center">    
                                  <p><i class="fa fa-file" style="font-size:29px;color:white"></i></p>
                                  <a href="https://www.sme.gov.ao/formularios-digitais/" style="color:white;text-decoration:none">FORMULÁRIOS DIGITAIS</a>
                              </div>
                            </div>
                            </a>
                        </div>
                                
                        <div class="col-sm-6 col-md-4">
                            <a href="https://www.sme.gov.ao/agendamento/">
                            <div class="card text-white mb-3" style="background:#117eb9">
                              <div class="card-header text-center">  
                              <p><i class="fa fa-calendar" style="font-size:29px;color:white"></i></p>
                                  <a href="https://www.sme.gov.ao/agendamento/" style="color:white;text-decoration:none"> AGENDAMENTO</a>                         
                              </div>                    
                            </div>
                            </a>
                        </div>
                    </div>

            </section>
            <section class="section-text container-fluid element-animate d-md-block d-none" data-animate-effect="fadeInUP">
               
                    <div class="row mt-1 mb-1">
                       
                        <div class="col-sm-6 col-md-6">
                            <hr>
                            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                <?php 
                                    // args
                                        $my_argss1= array(
                                            'post-type' => 'post',
                                            'posts_per_page' => 3,
                                            'category_name' => 'destaque'
                                            );

                                    //query
                                    $my_dom1 = new WP_Query($my_argss1);
                                    ?>
                                    <?php if($my_dom1->have_posts()) : 
                                    //$banner=$banners[0]; 
                                    $c =0;
                                    while($my_dom1->have_posts()) : 
                                    $my_dom1->the_post(); ?>

                                    <div class="carousel-item <?php $c++; if($c == 1) {echo 'active';} ?>">
                                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid img')); ?>
                                    <div class="carousel-caption d-none d-md-block text-left mb-5">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </div>
                                  </div>
                                <?php endwhile; endif;  ?>
                                <?php wp_reset_query();  ?>                             
                                </div>
                                <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </button>
                              </div>

                        </div>

                        <div class="col-sm-6 col-md-6 mb-2">
                            <hr>          
                            <div class="row">
                              <?php 
                                // args
                                $my_args= array(
                                'post-type' => 'post',
                                'posts_per_page' => 4,
                                'category_name' => 'noticias'
                                );
                                //query
                                $my_query = new WP_Query($my_args);
                               ?>
                               <?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post(); ?>

                               <div class="col-sm-6 mb-4">
                                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">                         
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                      <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid img')); ?>
                                        <div class="carousel-caption d-none d-md-block text-left post-dom">
                                          <a href="<?php the_permalink(); ?>" class="a dom3"><?php the_title(); ?></a>
                                        </div>
                                      </div>
                                    </div>
                                       
                                  </div>                      
                               </div>  
                                <?php endwhile; endif;  ?>
                                <?php wp_reset_query();  ?> 
                               </div>                               
                        </div>
                        
                    </div>
            </section>
            <!-- fim destaque em tela md -->

            <!-- Destaque Mobile -->
              <?php include('mobile_destaque.php') ?>
            <!-- fim destaque mobile -->

            <!--OCORRÊNCIAS-->
            <section class="site-section site-section-differential element-animate" data-animate-effect="fadeInUp">
                <div class="container">
                    <div class="mb-5 mt-3 text-center">
                        <h2 style="font-weight: bold;text-shadow:2px 2px 3px rgba(110, 98, 98, 0.8);">OCORRÊNCIAS</h2>
                        <hr>
                    </div>
                    <div class="row">
                        <?php 
                            // args
                            $my_args= array(
                            'post-type' => 'post',
                            'posts_per_page' => 6,
                            'category_name' => 'ocorrências'
                            );
                            //query
                            $my_query = new WP_Query($my_args);
                        ?>
                        <?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post(); ?>

                        <div class="col-md-4">
                            <div class="card text-center mb-4">
                                <div class="card-img-top">
                                 <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid img')); ?>
                                </div>
                                <div class="card-body">
                                    <a href="<?php the_permalink(); ?>" class="a dom3"><?php the_title(); ?></a>
                                    <p class="card-text dom-musted"><?php echo get_the_date(); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; endif;  ?>
                        <?php wp_reset_query();  ?> 
                    </div>
                </div>
            </section>

            <!-- EFIMÉRIDES -->
            <section class="area-dom">
                <div class="area-alg mt-5">
                    
                </div>
                <div class="area-card">
                    <div class="container">
                     <div class="row owl-carousel owl-theme">
                        <?php 
                            // args
                            $my_args= array(
                            'post-type' => 'post',
                            'posts_per_page' => 10,
                            'category_name' => 'efemérides'
                            );
                            //query
                            $my_query = new WP_Query($my_args);
                        ?>
                        <?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post(); ?>

                         <div class="col-sm-6 col-md my-5 item">
                             <a href="">
                               <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid img')); ?>
                             </a>
                                
                                <a href="<?php the_permalink(); ?>"  class="card-text efim text-white" style="text-shadow:2px 2px 3px rgb(19, 18, 18);"><?php the_title(); ?></a>
                                <p class="card-text efim text-white"><?php echo get_the_date(); ?></p>                   
                         </div>
                        
                         <?php endwhile; endif;  ?>
                        <?php wp_reset_query();  ?>           
                         </div>
                    </div>
                </div>
            </section>
             <!-- FIM EFIMÉRIDES -->
             
            <section class="section-orc">
                <div class="container">
                    <div class="row element-animate">
                        <div class="col-sm-6 col-md-6 my-4">
                            <h3>REQUISITOS DOS ACTOS MIGRATÓRIOS</h3>
                            <p class="text-white">PARA NACIONAIS E ESTRANGEIROS.</p>
                        </div>
                        <div class="col-sm-6 col-md-6 my-4 justify-content-center">
                            <a href="http://sme.gov.ao/requisitos-actos-migratorios/" class="btn btn-white">ACTOS MIGRATÓRIOS</a>
                        </div>
                    </div>
                </div>                
            </section>
            <!--MAIS NOTICIAS-->
            <section class="site-section site-section-differential pt-5" >
                <div class="container">
                    <div class="mb-5 text-center mt-5">
                        <h2 style="font-weight: bold;text-shadow:2px 2px 3px rgba(110, 98, 98, 0.8);">MAIS NOTÍCIAS</h2>
                        <hr>
                    </div>
                    <div class="row">
                        <?php 
                            // args
                            $my_args= array(
                            'post-type' => 'post',
                            'posts_per_page' => 6,
                            'category_name' => 'maisNoticias'
                            );
                            //query
                            $my_query = new WP_Query($my_args);
                        ?>
                        <?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post(); ?>

                        <div class="col-md-4">
                            <div class="card text-center mb-4">
                                <div class="card-img-top">
                                  <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid img')); ?>
                                </div>
                                <div class="card-body">
                                    <a href="<?php the_permalink(); ?>" class="a dom3"><?php the_title(); ?></a>
                                    <p class="card-text dom-musted"><?php echo get_the_date(); ?></p>    
                                </div>

                            </div>
                             
                        </div>
                        <?php endwhile; endif;  ?>
                        <?php wp_reset_query();  ?>         
                    </div>
                </div>
            </section>
            
            <section class="ver-mais">
                <div class="container">
                    <div class="ver">
                        <a href="http://sme.gov.ao/maisnoticias/" class="btn btn btn-lg">ver mais</a>
                    </div>
                </div>
            </section>

           <!-- Jumbotron-->
<section class="element-animate" data-animate-effect="fadeInLeft">
<div class="jumbotron jumbotron-fluid">
  <div class="container section-jumbotron">
    <div class="row mt-4">
      <div class="col-12 text-center">
       <h1 class="display-3">Multimédia</h1>
       
       <p class="">Actividades realizadas pelo Serviço de Migração e Estrangeiros (SME)</p>
      <hr>

      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <ul class="nav nav-pills justify-content-center mb-5" id="pills-nav" role="tablist">

        <li class="nav-item">
          <a class="nav-link active" id="nav-pills-04" data-toggle="pill" href="#nav-item-04" style="font-size:.9rem">VISTO DE TURISMO</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" id="nav-pills-01" data-toggle="pill" href="#nav-item-01" style="font-size:.9rem;text-transform: uppercase;">Alusivas ao 43º Aniversário do SME</a>
        </li>
	    <li class="nav-item">
          <a class="nav-link" id="nav-pills-02" data-toggle="pill" href="#nav-item-02" style="font-size:.9rem;text-transform: uppercase;">Workshop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="nav-pills-03" data-toggle="pill" href="#nav-item-03" style="font-size:.9rem;text-transform: uppercase;">SME - Angola de Portas Abertas</a>
        </li>
       
        </ul>
        <div class="tab-content" id="nav-pills-content">

          <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel">
            <div class="row">
              <div class="col-sm-6 mb-3">
                <div class="embed-responsive embed-responsive-16by9">
                  <video controls width="700" height="450">
                    <source class="embed-responsive-item" src="<?php bloginfo('template_url'); ?>/assets/SME43ANOS.mp4" type="video/mp4"> 
                </video>
                </div>

              </div>

              <div class="col-sm-6">
              <p class="">O SME vai no periodo de 10 a 19 de Abril, comemorar o aniversário da sua fundação sob o lema:"SME 43 anos, rumo a Excelencia no Controlo Migratório"</p>
              </diV>

            </div>

          </div>
			 <div class="tab-pane fade" id="nav-item-02" role="tabpanel">
            <div class="row">
              <div class="col-sm-6 mb-3">
                <div class="embed-responsive embed-responsive-16by9">
                  <video controls width="700" height="450">
                    <source class="embed-responsive-item" src="<?php bloginfo('template_url'); ?>/assets/workshop.mp4" type="video/mp4"> 
                </video>
                </div>

              </div>

              <div class="col-sm-6">
              <p class="text-muted">O Serviço de Migração e Estrangeiros-SME, e a Agência de Investimento Privado e Promoção das Exportações-AIPEX realizaram, na última Quarta Feira (13.02.2019), no anfiteatro da AIPEX, o Workshop sobre Investimento Privado e o Regime de facilitação de Visto em Angola.</p>
              </diV>

            </div>

          </div>


          <div class="tab-pane fade" id="nav-item-03" role="tabpanel">

              <div class="row">
                  <div class="col-sm-6 mb-3">
                      <div class="embed-responsive embed-responsive-16by9">
                          <video controls width="700" height="450">
                            <source class="embed-responsive-item" src="<?php bloginfo('template_url'); ?>/assets/SME 2018 - Angola de Portas Abertas.mp4" type="video/mp4"> 
                        </video>
                        </div>
    
                  </div>
    
                  <div class="col-sm-6">
                  <p class="text-muted">No discurso de abertura, Sua Excelência o Ministro do Interior sublinhou que o evento surge numa altura em que o país aprovou o novo Regime Jurídico de Estrangeiros, um instrumento que confere maior abertura aos cidadãos estrangeiros no que diz respeito ao Investimento Privado. Segundo o Ministro do Interior, o SME adoptou medidas que vão ao encontro do referido diploma, nomeadamente, a aposta na Descentralização Gradual das Prorrogações dos Vistos para as Representações Provinciais, bem como, um Sistema que permite que Pareceres sejam Tratados de Forma Concentrada para Facilitar o Controlo, conferir celeridade no tratamento e evitar falsificações.
                  </p>
                  </diV>
    
                </div>
    
              </div>


          <div class="tab-pane fade" id="nav-item-04" role="tabpanel">
            
              <div class="row">
                  <div class="col-sm-6 mb-3">
                      <div class="embed-responsive embed-responsive-16by9">
                          <video controls width="700" height="450">
                            <source class="embed-responsive-item" src="<?php bloginfo('template_url'); ?>/assets/PORTUGUES.mp4" type="video/mp4"> 
                        </video>
                        </div>
    
                  </div>
    
                  <div class="col-sm-6">
                  <p class="text-muted">I. O visto de turismo é concedido pelas Missões diplomáticas e consulares angolanas ao cidadão estrangeiro que pretenda entrar na República de Angola, em visita de carácter recreativo, desportivo ou cultural.</p>

<p class="text-muted">II. O visto de turismo deve ser utilizado no prazo de 60 dias subsequentes à data da sua concessão, é válido para uma ou múltiplas entradas e permite a permanência em Angola por um período de até 30 dias, sendo prorrogável uma única vez, por igual período.</p>

<p class="text-muted">III. O visto de turismo não permite ao seu titular a fixação de residência em Angola, nem o exercício de qualquer actividade remunerada.
                  </p>
                  </diV>
    
                </div>
    
              </div>
             

                  
        
                  
            
          </div>

        </div>

      </div>

    </div>

  </div>
</div>
</section>

           <!-- Ligações úteis-->
          <section class="container section-ligacoes mt-5 element-animate">
              <div class="mt-5">
                  <h5  style="font-weight: bold;text-shadow:2px 2px 3px rgba(110, 98, 98, 0.8);">LIGAÇÕES ÚTEIS</h5>
                  <hr class="mb-5">
              </div>
              
              <div class="row">
              
                  <div class="col-sm-4 col-lg-2 text-center mb-2"><a href="" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/angola.PNG" class="img-fluid" width="100" height="100"></a></div>
                  <div class="col-sm-4 col-lg-2 text-center mb-2"><a href="http://www.smevisa.gov.ao/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/evisa.jpg" class="img-fluid" width="150" height="150"></a></div>
                  <div class="col-sm-4 col-lg-2 text-center mb-2"><a href="http://www.aipex.gov.ao" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/aipex.jpg" class="img-fluid" width="100" height="100"></a></div>
                  <div class="col-sm-4 col-lg-2 text-center mb-2"><a href="https://www.cgpn.gov.ao/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/policia.PNG" class="img-fluid" width="100" height="100"></a></div>
                  <div class="col-sm-4 col-lg-2 text-center mb-2"><a href="https://sic.gov.ao/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/sic.jpg" class="img-fluid" width="100" height="100"></a></div>
                  <div class="col-sm-4 col-lg-2 text-center mb-2"><a href="https://hospedes.sme.gov.ao/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/sme.png" class="img-fluid" width="100" height="100"></a></div>

              </div>

          </section>

<?php get_footer(); ?>