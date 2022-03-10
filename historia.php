<?php
/*
Template Name: historia
*/
?>
<?php get_header(); ?>

<section>
 <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="padding-top:11rem">
       <div class="carousel-inner">
         
         <div class="carousel-item active">
           <img src="<?php bloginfo('template_url'); ?>/assets/IMG_4093.JPG"   class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                   <div class="carousel-dom2 element-animate">
                     <h2 class="mb-3">História</h2>
                     <div class="carousel-a">
                     <a href="" class="">SME Por Dentro </a> <i class="fa fa-angle-right" style="font-size:1.2rem"></i>
                      História
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
<a href="" class="list-group-item list-group-item-action active" style="text-shadow:2px 2px 3px rgba(117, 106, 106, 0.8);">SME por Dentro</a>

</div>
<div class="list-group">
<a href="http://www.sme.gov.ao/sme/" class="list-group-item list-group-item-action list-group-item-my-color-5 text-my-color-5">SME</a>
<a href="http://www.sme.gov.ao/missao/" class="list-group-item list-group-item-action list-group-item-my-color-5 text-my-color-5">Missão</a>
<a href="http://www.sme.gov.ao/historia/" class="list-group-item list-group-item-action active" style="text-shadow:2px 2px 3px rgba(117, 106, 106, 0.8);">Histórico</a>
<a href="http://www.sme.gov.ao/organigrama/" class="list-group-item list-group-item-action list-group-item-my-color-5 text-my-color-5">Organigrama</a>
<a href="http://www.sme.gov.ao/perfildg/" class="list-group-item list-group-item-action list-group-item-my-color-5 text-my-color-5">Perfil dos Directores Geral</a>
<a href="http://www.sme.gov.ao/estatutoorganico/" class="list-group-item list-group-item-action list-group-item-my-color-5 text-my-color-5">Estatuto Orgânico</a>
<a href="http://www.sme.gov.ao/galeria_foto/" class="list-group-item list-group-item-action list-group-item-my-color-5 text-my-color-5">Galerias de Fotos</a>


</div>
</div>

<div class="col-md-9 col-lg-9">
<?php
if(have_posts()):
while(have_posts()):
the_post();
?>
<p class="text-justify text-muted"><?php the_content(); ?></p>
<?php endwhile; ?>
<?php else: get_404_template(); endif; ?>
</div>

</div>
</div>


</div>
<?php get_footer(); ?>