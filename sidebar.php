
<div class="col-md-12 col-lg-4 posto">
  <?php 
  // args
  $my_args= array(
    'post-type' => 'post',
    'posts_per_page' => 6,
    'category_name' => 'noticias'
  );
  //query
  $my_query = new WP_Query($my_args);
  ?>
  
      <div class="card mb-4 mt-5">
      <h5 class="card-header p-menu mb-4">ARTIGOS</h5>
          
          <?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post(); ?>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-4 zoom">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded ')); ?></a>
              </div>
              <div class="col-sm-6 col-md-8">
              <a href="<?php the_permalink(); ?>"><div class="text-muted" style="font-size:.9rem"><?php the_title(); ?></div></a>
              </div>
            </div>  
          </div>
          <?php endwhile; endif;  ?>
           <?php wp_reset_query();  ?>
        
        </div>

      <div class="card mb-4">
      <h5 class="card-header p-menu mb-4">Ligações Úteis</h5>
        
        <div class="card-body">

           <center><p class="lead"><a href="http://www.minint.gov.ao/"><img src="<?php bloginfo('template_url'); ?>/assets/evisa.jpg" class="img-fluid" width="150" height="150"></a></p>
          <p class="lead"><a href="http://www.aipex.gov.ao"><img src="<?php bloginfo('template_url'); ?>/assets/aipex.jpg" class="img-fluid" width="100" height="100"></a></p>
          <p class="lead"><a href="http://www.governo.gov.ao/"><img src="<?php bloginfo('template_url'); ?>/assets/angola.png" class="img-fluid" width="100" height="100"></a></p>
          <p class="lead"><a href="https://www.cgpn.gov.ao/"><img src="<?php bloginfo('template_url'); ?>/assets/policia.png" class="img-fluid" width="100" height="100"></a></p>
          <p class="lead"><a href="http://www.welcometoangola.co.ao/"><img src="<?php bloginfo('template_url'); ?>/assets/welcome2.jpg" class="img-fluid" width="100" height="100"></a></p>
        
        </div>
        
      </div>
      
  </div>
  
</div>

</div>


</div>
</div>