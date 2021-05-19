<!-- Kainos -->
<div id="kalendorius"></div>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h3 class="keiciam">Kalendorius</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="timeline">

                  <?php if( have_rows('koncerto_blokas_kaire') ):
                  while ( have_rows('koncerto_blokas_kaire') ) : the_row(); ?>
                     <li>
                       <div class="timeline-badge"><i class="fas fa-music"></i></div>
                       <div class="timeline-panel">
                         <div class="timeline-heading">
                           <h4 class="timeline-title"><?php the_sub_field('kalendorius_kur'); ?></h4>
                           <p><small class="text-muted"><i class="far fa-clock"></i> <?php the_sub_field('kalendorius_kada'); ?></small></p>
                         </div>
                         <div class="timeline-body">
                           <p><?php the_sub_field('kalendorius_aprasymas'); ?></p>
                         </div>
                       </div>
                     </li>
                  <?php endwhile;
                  else :
                  endif; ?>


                  <?php if( have_rows('koncerto_blokas_desine') ):
                  while ( have_rows('koncerto_blokas_desine') ) : the_row(); ?>
                     <li class="timeline-inverted">
                       <div class="timeline-badge warning"><i class="fas fa-star"></i></div>
                       <div class="timeline-panel">
                         <div class="timeline-heading">
                           <h4 class="timeline-title"><?php the_sub_field('kalendorius_kur'); ?></h4>
                           <p><small class="text-muted"><i class="far fa-clock"></i> <?php the_sub_field('kalendorius_kada'); ?></small></p>
                         </div>
                         <div class="timeline-body">
                           <p><?php the_sub_field('kalendorius_aprasymas'); ?></p>
                         </div>
                       </div>
                     </li>
                  <?php endwhile;
                  else :
                  endif; ?>

               </ul>
            </div>
        </div>
    </section>
    <!-- Kainos -->



