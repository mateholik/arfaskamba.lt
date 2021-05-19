<?php

/* Template Name: Blogas */

get_header();

?>
<?php get_template_part('elements/spalvotasmeniu'); ?>

 <!-- Visi postai -->
<div id="apie" class="tarpas"></div>
    <section class="section-padding bg-colored dar">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h3 class="keiciam">Blog'as</h3>
                    </div>
                </div>
            </div>
            <div class="row taip">
                <div id="postass" class="col">
                        <?php query_posts('post_type=post') ?> <!-- be sito neveikė loopas -->
                        <?php if(have_posts() ):
                             while (have_posts()) : the_post(); ?>
                                <a href="<?php the_permalink(); ?> "><h3><?php the_title(); ?></h3></a> <!-- linkas tiesiai i posta -->
                                <?php echo get_the_date(); ?>
                                 <a href="<?php the_permalink(); ?> "><p><?php the_excerpt(); ?></p><p class="tarpasBlogoPostui"></p></a>

                             <?php endwhile;
                         endif; ?>
                </div>
            </div>
        </div>
    </section>

  <!-- Visi postai-->

<?php get_footer(); ?>