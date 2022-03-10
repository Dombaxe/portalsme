<?php get_header(); ?>

<section>
 <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="padding-top:11rem">
       <div class="carousel-inner">
         
         <div class="carousel-item active">
           <img src="<?php bloginfo('template_url'); ?>/assets/IMG_4093.jpg"   class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                   <div class="carousel-dom2 element-animate">
                     <h2 class="mb-3">Notícias</h2>
                     <div class="carousel-a">
                     <a href="http://sme.gov.ao/index.php/" class="">Home </a> <i class="fa fa-angle-right" style="font-size:1.2rem"></i>
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

 <!-- cards 1-->

<div class="row d-flex justify-content-center my-5">
<div class="col-md-12 col-lg-8">

 <img src="<?php bloginfo('template_url'); ?>/assets/error-404.gif" class="img-fluid d-block" height="400" width="500">
 <p color="text-center" style="color:#8a909a;font-size:.9rem">Pagina não encontrada</p>
</div>



<?php get_sidebar(); ?>


</div>

</div>


<?php get_footer(); ?>
 

  