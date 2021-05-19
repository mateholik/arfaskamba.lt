<header id="home">
        <!-- Navbar -->
        <nav id="sticky-header" class="navbar navbar-default navbar-fixed-top meeniu">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Logo -->
                    <a href="<?php bloginfo('wpurl'); ?>" class="navbar-brand">Arfa skamba</a>

                    <!-- End Logo -->
                </div>
                <!-- Navbar-collapse -->
                <div id="navbar" class="collapse navbar-collapse">
                    <?php 
                        $nastroikes = array (
                            'container' => 'ul', //defaultu divas butu, todel nustatom ul
                            'theme_location' => 'primary-navigation', //meniu vieta
                            'menu_class' => 'nav navbar-nav navbar-right' //nurodom klase kurios mum reik, ji bus priskirta ul
                        );
                        wp_nav_menu($nastroikes);
                    ?>
                </div>
                <!-- End Navbar-collapse -->
            </div>
        </nav>
        <!-- End Navbar -->
    </header>