<?php 

//pridedam css============
function theme_stylesheets(){
		wp_enqueue_style( 'animate',  get_template_directory_uri() .'/assets/css/animate.min.css', array(), null, 'all' );
		wp_enqueue_style( 'carousel',  get_template_directory_uri() .'/assets/css/owl.carousel.css', array(), null, 'all' );
		wp_enqueue_style( 'bootstrap',  get_template_directory_uri() .'/assets/css/bootstrap.min.css', array(), null, 'all' );
		wp_enqueue_style( 'style',  get_template_directory_uri() .'/style.css', array(), null, 'all' );
		wp_enqueue_style( 'responsive',  get_template_directory_uri() .'/assets/css/responsive.css', array(), null, 'all' );
		wp_enqueue_style( 'kalendorius',  get_template_directory_uri() .'/assets/css/kalendorius.css', array(), null, 'all' );
		
	}

add_action('wp_enqueue_scripts', 'theme_stylesheets');


//pridedam js=================
function theme_scripts() {
		wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-1.12.4.min.js', array(), '1.0.0', true);
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true);
		wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array(), '1.0.0', true);
		wp_enqueue_script( 'typed', get_template_directory_uri() . '/assets/js/typed.min.js', array(), '1.0.0', true);
		wp_enqueue_script( 'wypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array(), '1.0.0', true);
		wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), '1.0.0', true);
		wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0.0', true);
		wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/assets/js/bootstrap-dropdownhover.min.js', array(), '1.0.0', true);
		wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0.0', true);
	}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );


//isemam active.js is galerijos ir is bassgliss puslapio, nes kertasi su pluginu==========
function isemam_is_galerijos() {
   if ( !is_page('gelerija') && !is_page('bassgliss')) {
		wp_enqueue_script( 'active', get_template_directory_uri() . '/assets/js/active.js', array(), '1.0.0', true);
     }
}

add_action( 'wp_enqueue_scripts', 'isemam_is_galerijos', 100 );



//priddam meniu================
function register_theme_menus() {
   	register_nav_menus(array( 
        'primary-navigation' => __( 'Virsutinis meniu' ) 
    ));
}
add_action('init', 'register_theme_menus');


//pridedam klase meniu linkui=======
add_filter('nav_menu_link_attributes', 'pridedam_a_klase', 10 , 4);
function pridedam_a_klase ($atts, $item, $args, $depth){
	if( $args->theme_location === 'primary-navigation'){
		$atts['class'] = 'smooth-scroll';
	}
	return $atts;
}


//pridedam hardcode ka reik i meniu
function hardcore_meniu_li($items, $args) {
    if($args->theme_location == 'primary-navigation'){
       $en_lt = '<li class="kalbos"><a href="http://en.arfaskamba.lt/">En/</a><a href="http://arfaskamba.lt/">Lt</a></li>';
       $items = $items . $en_lt;
    }
	return $items;
}
add_filter('wp_nav_menu_items', 'hardcore_meniu_li', 10, 2);



//registruojam 4 footerius
register_sidebar( array(
'name' => 'Footer 1',
'id' => 'footer-1',
'description' => 'Atsiras saito apacioj, pirmam stulpely',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3><hr class="linija2">'
));
register_sidebar( array(
'name' => 'Footer 2',
'id' => 'footer-2',
'description' => 'Atsiras saito apacioj, antram stulpely',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3><hr class="linija2">'
));
register_sidebar( array(
'name' => 'Footer 3',
'id' => 'footer-3',
'description' => 'Atsiras saito apacioj, treciam stulpely',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3><hr class="linija2">'
));
register_sidebar( array(
'name' => 'Footer 4',
'id' => 'footer-4',
'description' => 'Atsiras saito apacioj, ketvirtam stulpely',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3><hr class="linija2">'
));
 


//trumpinam blogo postu atvaizdavima=======================
add_filter( 'excerpt_length', 'ilgis' );

function ilgis() {
    return 100;
}