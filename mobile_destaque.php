<section class="site-section site-section-differential element-animate d-md-none d-sm-block" data-animate-effect="fadeInUp">
                    <div class="container">
                        <div class="row">
                             <?php 
                                // args
                                $my_args= array(
                                'post-type' => 'post',
                                'posts_per_page' => 4,
                                'category_name' => 'destaque'
                                );
                                //query
                                $my_query = new WP_Query($my_args);
                               ?>
                               <?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post(); ?>

                            <div class="col-sm-6">
                                <hr>
                                <div class="card text-center mb-4">
                                    <div class="card-img-top">
                                       <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid img')); ?>
                                    </div>
                                    <div class="card-body">
                                        <a href="<?php the_permalink(); ?>" class="a dom3 card-text"><?php the_title(); ?></a>
                                        <p class="card-text dom-musted"><?php echo get_the_date(); ?></p>
                                    </div>
                                </div>
                            </div>
                            
                            <?php endwhile; endif;  ?>
                            <?php wp_reset_query();  ?> 
                                
                        </div>
                    </div>
                </section>