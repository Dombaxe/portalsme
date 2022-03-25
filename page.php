<?php
/*
Template Name:page
*/
?>
<?php get_header(); ?>

         <section>
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="padding-top:8rem">
                <div class="carousel-inner">
                  
                  <div class="carousel-item active">
                    <img src="<?php bloginfo('template_url'); ?>/assets/IMG_4093.jpg"   class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="carousel-dom2 element-animate">
                              <h2 class="mb-3">Mais Notícias</h2>
                              <div class="carousel-a">
                              <a href="index.html" class="">Home </a> <i class="fa fa-angle-right" style="font-size:1.2rem"></i>
                              Mais Notícias
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
        
         <!-- Categoria de Mais Notícias -->

  <section class="card-header section-maisnoticias mais-noticias">

<div class="container mt-5 mb-3">
    
    <div class="row">

            <?php
              $paged= (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
              $args=array(
                'post_type' =>'post',
                'posts_per_page' => 16,
                'paged'          =>$paged,
              );

              $the_query=new WP_Query($args); 
            ?>
          <?php if($the_query->have_posts()) : ?>
          <?php while($the_query->have_posts()) : $the_query->the_post(); ?>

      <div class="col-sm-6 col-md-3 my-4 zoom">
          <div class="card ">
             <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail',  array('class'=> 'card-img-top rounded img-fluid owl-lazy'));?></a>        
               <div class="card-body">
               
                  <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
                  <p class="card-text dom-musted"><?php echo get_the_date(); ?></p>
                  <p class="card-text"><?php the_excerpt(); ?></p>
                  <a href="<?php the_permalink(); ?>"><p class="card-text dom-musted" style="color:#CCCD3E">Ler Mais..</p></a>
               
                </div>
          </div>
         
      </div>
          
          <?php endwhile; ?>
          <?php else: get_404_template(); endif ?>
          
  </div>
    <a href="#" id="efimerides"></a>

            <div class="paginacao d-flex justify-content-center mt-2">
          
                  <?php
                    $big = 999999999; // need an unlikely integer
                    
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $the_query->max_num_pages
                    ) );
                  ?>
          
            </div>

</div>
  
</section>


<?php get_footer(); ?>