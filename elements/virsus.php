
<section class="intro" style="background-attachment:fixed;background-image:url(<?php the_field('fono_nuotrauka'); ?>);">
    <div class="overlay"></div> 
       <div class="display-table">
           <div class="display-table-cell">
               <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="intro-left">
                                 <img class="img-responsive" src="<?php the_field('nuotrauka_kaireje'); ?>">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="intro-right">
                                <h2><?php the_field('pavadinimas'); ?></h2>
                                <div id="typed-strings">
                                    <?php if( have_rows('judantis_tekstas') ):
                                     while ( have_rows('judantis_tekstas') ) : the_row(); ?>
                                    <span><?php the_sub_field('judantis_tekstas'); ?></span>
                                    <?php endwhile;
                                    else :
                                    endif; ?>
                                </div>
                                <span id="typed"></span>
                                <ul class="list-inline">
                                    <?php if( have_rows('zalios_dezutes') ):
                                     while ( have_rows('zalios_dezutes') ) : the_row(); ?>
                                    <li><?php the_sub_field('zalia_dezute'); ?></li>
                                    <?php endwhile;
                                    else :
                                    endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
    </section>