<?php
/*
Template Name: Perfil dos Directores Geral
*/
?>
<?php get_header(); ?>

<section>
 <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="padding-top:11rem">
       <div class="carousel-inner">
         
         <div class="carousel-item active">
           <img src="<?php bloginfo('template_url'); ?>/assets/IMG_5168.JPG"   class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                   <div class="carousel-dom2 element-animate">
                     <h2 class="mb-3">Perfil dos Directores Geral</h2>
                     <div class="carousel-a">
                     <a href="" class="">SME Por Dentro </a> <i class="fa fa-angle-right" style="font-size:1.2rem"></i>
                     Perfil dos Directores Geral
                     </div>
                   </div>

               </div>
         </div>

       </div>
     </div>
   </section>

  <!--Mobile-->
  <?php include('mobile_sme.php') ?>
  <!--Mobile fim-->

  <div class="container">
<div class="row my-5" style="padding-top:5rem">
<div class="col-md-3 col-lg-3 mb-4">

        <div class="list-group mb-2">
            <a href="" class="list-group-item list-group-item-action active">SME por Dentro</a>
  
          </div>
          <div class="list-group">
            <a href="http://www.sme.gov.ao/sme" class="list-group-item list-group-item-action list-group-item-my-color-5 text-my-color-5">SME</a>
            <a href="http://www.sme.gov.ao/missao/" class="list-group-item list-group-item-action list-group-item-my-color-5 text-my-color-5">Missão</a>
            <a href="http://www.sme.gov.ao/historia/" class="list-group-item list-group-item-action list-group-item-my-color-5 text-my-color-5">Histórico</a>
            <a href="http://www.sme.gov.ao/organigrama/" class="list-group-item list-group-item-action list-group-item-my-color-5 text-my-color-5">Organigrama</a>
            <a href="http://www.sme.gov.ao/perfildg/" class="list-group-item list-group-item-action active" style="text-shadow:2px 2px 3px rgba(117, 106, 106, 0.8);">Perfil dos Directores Geral</a>
            <a href="http://www.sme.gov.ao/estatutoorganico/" class="list-group-item list-group-item-action list-group-item-my-color-5 text-my-color-5">Estatuto Orgânico</a>
            <a href="http://www.sme.gov.ao/galeria_foto/" class="list-group-item list-group-item-action list-group-item-my-color-5 text-my-color-5">Galerias de Fotos</a>

      </div>
    </div>
    <div class="col-md-9 col-lg-9 galeria">

        <h2 class="display-5 text-center mb-5"> Perfil dos Directores Geral</h2>

        <div class="row">
          <div class="col">
              <center><div class="col-md-6 col-lg-5 mb-4">
                  <div class="card">
                    <a class="image-link" href="<?php bloginfo('template_url'); ?>/assets/DG.jpg"><img class="card-img-top"src="<?php bloginfo('template_url'); ?>/assets/DG.jpg"></a>
                   <div class="card-body">
                    <div class="card-text text-muted h6">***Comissário de Migração Principal***</div>
                    <div class="card-text text-muted">João António da Costa Dias</div>
                    <div class="card-text text-muted h6">Director Geral do SME</div>
                   </div>
                  </div>
                 </div>
                </center>
          </div>
        </div>
        
        <div class="row mt-5">
          <div class="col-md-8 col-lg-6">

              <div class="col-sm-9 col-md- mb-4">
                  <div class="card">
                    <a class="image-link" href="<?php bloginfo('template_url'); ?>/assets/DGA1.jpg"><img class="card-img-top"src="<?php bloginfo('template_url'); ?>/assets/DGA1.jpg"></a>
                   <div class="card-body">
                    <div class="card-text text-muted h6 text-center">**Comissário de Migração**</div>
                    <div class="card-text text-muted text-center">Tomé João Cuanga</div>
                    <div class="card-text text-muted h6 text-center">Director Geral Adjunto do SME</div>
                   </div>
                  </div>
                 </div>

          </div>

          <div class="col-md-8 col-lg-6">

              <div class="col-sm-9 col-md- mb-4">
                  <div class="card">
                    <a class="image-link" href="<?php bloginfo('template_url'); ?>/assets/DGA2.jpg"><img class="card-img-top"src="<?php bloginfo('template_url'); ?>/assets/DGA2.jpg"></a>
                   <div class="card-body">
                    <div class="card-text text-muted h6 text-center">**Comissário de Migração**</div>
                    <div class="card-text text-muted text-center">Marceleino Alfredo José Caetano</div>
                    <div class="card-text text-muted h6 text-center">Director Geral Adjunto do SME</div>
                   </div>
                  </div>
                 </div>

          </div>

        </div>

  </div>
</div>


     </div>
     </div>

<?php get_footer(); ?>