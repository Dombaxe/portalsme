<?php get_header(); ?>

<section>
 <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="padding-top:9rem">
       <div class="carousel-inner">
         
         <div class="carousel-item active">
           <img src="<?php bloginfo('template_url'); ?>/assets/IMG_5168.jpg"   class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                   <div class="carousel-dom2 element-animate">
                     <h2 class="mb-3">Notícias</h2>
                     <div class="carousel-a">
                     <a href="http://www.sme.gov.ao/index.php/" class="">Home </a> <i class="fa fa-angle-right" style="font-size:1.2rem"></i>
                       Notícias
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
   <div class="container-fluid">
   <!-- cards 1-->
   <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  <div class="row justify-content-sm-center my-5">
    <div class="col-md-12 col-lg-8 mb-4">

    <?php get_template_part('content', get_post_format()); ?>

     <?php endwhile; ?>
<?php else: get_404_template(); endif; ?>  
  </div>
  
  
  
  <?php get_sidebar(); ?>

  </div>
</div>

</div>


<?php get_footer(); ?>


