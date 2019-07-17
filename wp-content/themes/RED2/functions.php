<?php


//    Užrašome konstantas

define('VER_', '1.78');

/**
 * Enqueue scripts and styles.
 */

add_action('wp_enqueue_scripts', function () {

   // wp_enqueue_style( 'red', get_theme_file_uri('css/REDprojektas.css'), [], VER_);
   wp_enqueue_style( 'style', get_theme_file_uri('css/REDprojektas.css'), [], VER_);

	// wp_enqueue_script( 'slider', get_theme_file_uri('js/jquery.slider.js'), [], VER_);

   // wp_enqueue_style( 'bxslider', get_theme_file_uri('css/jquery.bxslider.css'), [], VER_);
   // wp_enqueue_style( 'menu', get_theme_file_uri('css/menu.css'), [], VER_);
   // wp_enqueue_style( 'responsive', get_theme_file_uri('css/responsive.css'), [], VER_);
   // wp_enqueue_style( 'animate', get_theme_file_uri('css/animated.css'), [], VER_);
	// wp_enqueue_script( 'twentynineteen-priority-menu', get_theme_file_uri('css/grid.css'), [], VER_);
});


add_action('wp_footer', function () {

   // wp_enqueue_script( 'mixitup', get_theme_file_uri('js/jquery.mixitup.min.js'), [], VER_);
	// wp_enqueue_script( 'slider', get_theme_file_uri('js/jquery.slider.js'), [], VER_);
	// wp_enqueue_script( 'script', get_theme_file_uri('js/script.js'), [], VER_);
   // wp_enqueue_script( 'fixed-responsive-nav', get_theme_file_uri('js/fixed-responsive-nav.js'), [], VER_);
	// wp_enqueue_script( 'waypoints', get_theme_file_uri('js/waypoints.min.js'), [], VER_);

});






