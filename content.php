<?php 
if(is_single()):?>
 
       <h3 class="display-5 text-center my-5" style="font-weight:bold"><?php the_title(); ?></h3>
        <div class="text-justify text-muted mt-5"><?php the_content('content', array('class' => 'text-muted')); ?> </div>
       
        <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded')); ?>
     
      <p class="text-muted display-5 mt-2">Publicado em: <span class="badge badge-info display-5"><?php echo get_the_date('d/m/y') ?></span></p>

<?php else: ?>

 <div class="blog-post">
          <h4 class="mb-3 pb-2 border-bottom display-5 mt-5" style="font-weight:bold"><a href="<?php the_permalink(); ?>" class="text-my-color-5"><?php the_title(); ?></a></h4>
          <div class="row">
            <div class="col-sm-12 col-lg-6 mb-3">
                <a href="<?php the_permalink(); ?>" class="zoom">
              <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded')); ?>
              </a>
            </div>
            <div class="col-sm-12 col-lg-6 mb-2">
            <div class="card-text text-muted"> <?php the_excerpt('excerpt', array('class' => 'text-muted')); ?></div>
            </div>
          </div>
        <p class="text-muted display-5">Publicado em: <span class="badge badge-info display-5"><?php echo get_the_date('d/m/y') ?></span></p>
        </div>

<?php endif; ?>