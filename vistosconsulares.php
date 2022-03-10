<?php
/*
Template Name: vistos consulares
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
                     <h2 class="mb-3">Estrangeiros</h2>
                     <div class="carousel-a">
                     <a href="" class="">Serviços </a> <i class="fa fa-angle-right" style="font-size:1.2rem"></i>
                       Visto de Turismo
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
                <a href="http://www.sme.gov.ao/estrangeiros/" class="list-group-item list-group-item-action active">Estrangeiros</a>    
    </div>
      
        <div class="list-group">
            <a href="http://www.sme.gov.ao/vistoturismo/" class="list-group-item list-group-item-action list-group-item-my-color-5 text-my-color-5">Visto de Turismo</a>
            <a href="http://www.sme.gov.ao/vistosconsulares/" class="list-group-item list-group-item-action active">Visto Consulares</a>
            <a href="http://www.sme.gov.ao/vistosterritorial/" class="list-group-item list-group-item-action list-group-item-my-color-5 text-my-color-5">Visto Territoriais</a>
            
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