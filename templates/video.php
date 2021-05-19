<?php

/* Template Name: Video*/

get_header();

?>
<?php get_template_part('elements/spalvotasmeniu'); ?>
<!-- Start Point -->
<!-- Video-->
    <section id="apie" class="section-padding bg-colored tarpas">
        <div class="container">
            <div class="row">
                
                    </div>
                </div>
            </div>
            <div class="row">


              <?php if( have_rows('_video_video_blokas') ):
               while ( have_rows('_video_video_blokas') ) : the_row(); ?>

                  <div class="col-sm-12 col-md-6 tarpelis">
                    <div class="embed-responsive embed-responsive-16by9 kampuciai">
                        <iframe class="embed-responsive-item" src="<?php the_sub_field('youtube_url'); ?>" allowfullscreen></iframe>
                    </div>
                     <p class="mt-2"><?php the_sub_field('video_url_aprasymas'); ?></p>
                  </div>
              <?php endwhile;
              else :
              endif; ?>
               
                 
      </div>
        </div>
    </section>
    <!-- Video -->



<?php get_footer(); ?>

