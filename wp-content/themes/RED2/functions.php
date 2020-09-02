<?php

//    Užrašome konstantas

define('VER_', '1.79'); // Patys sugalvojame pavadinimą ('1.78'), kad matytusi kokia versija

/**
 * Enqueue scripts and styles.
 */

add_action('wp_enqueue_scripts', function () {

    // wp_enqueue_style( 'style', get_theme_file_uri('css/REDprojektas.css'), [], VER_);
    //    wp_enqueue_style( 'style', get_theme_file_uri('css/suTrStyle.css'), [], VER_);
    // wp_enqueue_style( 'style', get_theme_file_uri('css/naujasScss.scss'), [], VER_);
    // wp_enqueue_style('red', get_theme_file_uri('css/REDprojektas.css'), [], VER_);
    wp_enqueue_style('red', get_theme_file_uri('css/REDprojektas2.css'), [], VER_);




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


// Aprašomos funkcijos, kad atsirastų "Dashbord'e" (WP), nuoroda-užrašas su "Our Team"

add_action('init', function () {

    register_post_type(
        'our_team',
        // CPT Options
        array(
            'labels' => array(
                'name' => 'Our Team',  // Kreipiamės į "our-team", taip ir rodys
                'singular_name' => 'Our Team',
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'our-team'),
        )
    );
});

// ---------------- Taxonomy-skillsų kodas --------------------------

register_taxonomy('skills', array('our_team'), array(   // Kreipiamės į "our-team"
    'hierarchical' => true,   // Pridedame "hierarchiją"---> true
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'skills'),
));


// Aprašomos funkcijos, kad atsirastų "Dashbord'e" ( WP consoleje ), nuoroda-užrašas su "Our Contact"

add_action('init', function () {

    register_post_type(
        'our_contact',                // kaip visur ir DB identifikuojamas
        // CPT Options
        array(
            'labels' => array(
                'name' => 'Our Contact',                 // kaip pavadinimas atrodo išorėje, t.y. WP consoleje
                'singular_name' => 'Our Contact',         // toks pats tik vienaskaita
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'our-contact'),            // kaip matosi išorėje
        )
    );
});