<?php get_header(); ?>

<section>
 <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="padding-top:9rem">
       <div class="carousel-inner">
         
         <div class="carousel-item active">
           <img src="<?php bloginfo('template_url'); ?>/assets/IMG_3816.jpg"   class="d-block w-100" alt="...">
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

   <!-- cards 1-->

<div class="row justify-content-sm-center my-2 container-fluid">
<div class="col-md-12 col-lg-8 mb-4">
<!-- Se houver resultado exibe o conteúdo, se não exibe um formulario de busca-->
<?php
if(is_search()):
    $total_results= $wp_query ->found_posts;
    echo"<h3 class='mt-5'>". sprintf(__('%s resultado(s) para "%s"','SME'), $total_results, get_search_query()) . "</h3>";
endif;
?>

 <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<h4 class="my-5" style="color:#117EB9;font-size:1.5rem"><?php the_title(); ?></h4>
        <p class="" style="color:#8e8e94"><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>"><p class="card-text dom-musted mb-1" style="color:#CCCD3E; font-size:.8rem">Ler Mais..</p></a>
       
        <?php the_post_thumbnail('post-thumbnail',  array('class'=> 'img-fluid rounded img-pag'));?>
        <p class="card-text dom-musted mt-1" style="color:#8e8e94; font-size:.8rem">Publicado: <?php echo get_the_date(); ?></p>


<?php endwhile; ?>
<?php else: 
echo"<p style='color:#8e8e94;text-align:center'>Pesquisa não encontrada.Usa o formulário para refazer a pesquisa</p>";
get_search_form();

endif; ?>

<div class=" mb-5" style="font-size:.9rem">
<?php echo paginate_links(); ?>
</div>
</div>



<?php get_sidebar(); ?>


</div>

</div>


<?php get_footer(); ?>


