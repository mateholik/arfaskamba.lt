<?php



/* Template Name: Kontaktai */



get_header();



?>

<?php get_template_part('elements/spalvotasmeniu'); ?>

<!-- Start Point -->

<!-- kontaktai -->

    <section id="contact" class="section-padding tarpas">

        <div class="container">

            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title text-center">

                        <h3  class="keiciam"> Paskambinkite ar parašykite </h3>

                    </div>

                </div>

            </div>
            <div class="row">

                <div class="col text-center padings2">

                    <?php the_field('kontaktai_tekstas'); ?>

                </div>

            </div>
            <div class="row">

                <!-- Contact form -->

                <div class="col-md-6 col-md-offset-3">

                    <?php echo do_shortcode( '[pirate_forms]' ) ?>

                </div>

            </div>

        </div>

    </section>

    <!--kontaktai -->

<?php get_footer(); ?>