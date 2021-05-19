<?php

/* Template Name: Galerija */

get_header();

?>
<?php get_template_part('elements/spalvotasmeniu'); ?>
<!-- Start Point -->
<!-- galerija -->
    <section id="apie" class="section-padding bg-colored tarpas">
        <div class="container">
            <div class="row">
                
                    </div>
                </div>
            </div>
            <div class="row">
                     <?php echo do_shortcode('[foogallery id="28"]'); ?>
      
             </div>
        </div>
    </section>
    <!-- galerija-->
 

<?php get_footer(); ?>