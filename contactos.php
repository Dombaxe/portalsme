<?php
/*
Template Name: Contactos
*/
?>
<?php get_header(); ?>

<section>
 <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="padding-top:11rem">
       <div class="carousel-inner">
         
         <div class="carousel-item active">
           <img src="<?php bloginfo('template_url'); ?>/assets/IMG_4093.jpg"   class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                   <div class="carousel-dom2 element-animate">
                     <h2 class="mb-3">Contacte-Nos</h2>
                     <div class="carousel-a">
                     <a href="" class="">Contactos </a> <i class="fa fa-angle-right" style="font-size:1.2rem"></i>
                      Contacte-Nos
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

 <div class="container img-fluid my-5">
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
