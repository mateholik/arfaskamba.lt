<!-- Apie -->
<div id="apie"></div>
    <section class="section-padding bg-colored">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h3 class="keiciam">Apie</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-content">
                        <h3><?php the_field('apie_pavadinimas');?></h3>
                        <p><?php the_field('apie_aprasymas');?></p>
                       
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="intro-video">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="816" height="459" src="<?php the_field('apie_youtube');?>" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Apie -->
