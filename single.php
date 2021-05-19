<?php
/**
 * posto vieno puslapio templeitas
 */

get_header(); ?>
<?php get_template_part('elements/spalvotasmeniu'); ?>

<!-- Pilnas postas -->
<div id="single" class="tarpas"></div>
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
                <div class="col">
                       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							 <h2><?php the_title(); ?></h2>
                              <?php echo get_the_date(); ?>
                              <p class="padings2"></p>
							 <?php the_content(); ?>
							 


						<?php endwhile; ?>
						<?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Pilnas postas -->

<?php get_footer(); ?>
