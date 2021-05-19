 <!-- Footer -->
    <footer>
        <div class="scroll-up">
            <a class="smooth-scroll" href="#home"><i class="fa fa-angle-up"></i></a>
        </div>
        <div class="copyright">
            <div class="row">
                <div class="col-sm-3 padings">
                   <?php
                        if(is_active_sidebar('footer-1')){
                            dynamic_sidebar('footer-1');
                        }
                    ?>
               </div>
               <div class="col-sm-3 padings">
                    <?php
                        if(is_active_sidebar('footer-2')){
                            dynamic_sidebar('footer-2');
                        }
                    ?>
                </div>
                <div class="col-sm-3 padings">
                   <?php
                        if(is_active_sidebar('footer-3')){
                            dynamic_sidebar('footer-3');
                        }
                    ?>
                </div>
                <div class="col-sm-3 padings">
                   <?php
                        if(is_active_sidebar('footer-4')){
                            dynamic_sidebar('footer-4');
                        }
                    ?>
               </div>
            </div>
            <hr class="linija">
            <div class="container text-center">
               <p>&copy; Arfa skamba 2020</p>
           </div
        </div>

     </footer>
    <!-- End Footer -->

