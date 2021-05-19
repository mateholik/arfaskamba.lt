<?php

/* Template Name: BassGliss */

get_header();

?>
<?php get_template_part('elements/spalvotasmeniu'); ?>
<!-- Start Point -->
<!-- Bassgliss -->
    <section id="bassgliss" class="section-padding bg-colored">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  
                           <img class="logo_bass" src="<?php the_field('logo'); ?>">
                  
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-content">
                        <h3><?php the_field('bassgliss_pavadinimas'); ?></h3>
                        <p><?php the_field('bassgliss_aprasymas'); ?></p>
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="intro-video">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="816" height="459" src="<?php the_field('bassgliss_youtube_nuoroda'); ?>" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ivirsu">
              
                    </div>
                </div>
            </div>
            <div class="row">
                     <?php echo do_shortcode('[foogallery id="96"]'); ?>
      
             </div>
        </div>
    </section>
    <!-- Bassgliss  -->

<?php get_footer(); ?>






<iframe width="560" height="315" src="https://www.youtube.com/embed/pCXVDWiwQjI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>