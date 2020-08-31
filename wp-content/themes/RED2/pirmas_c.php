<?php /* Template Name: Pirmas Puslapis_c */ ?>

<?php get_header();   ?>

<header>

   <!-- ---------------- Viršutinės navigacijos logo kairėje pusėje ------------------------------ -->

   <div class="top-container">

      <div class="logo">
         <a href="#">
            <!-- <img src="<?= get_theme_file_uri('/img/logo2.png') ?>" alt="upper logo"> -->
            <img class="head-img" src="<?= get_theme_file_uri('/img/logo.png') ?>" alt="upper logo">

         </a>
      </div>

      <!-- ---------- Viršutinės navigacijos menu dešinėje pusėje (viršuje) ------------------ -->

      <nav class="nav-collapse">
         <ul>
            <li class="menu-item"><a href="<?= home_url('home/') ?>">Home</a></li>
            <!-- <li class="menu-item"><a href="<?= home_url('pirmas_c/') ?>">Home</a></li> --- Negali grįžti į "home" nuorodą  -->
            <li class="menu-item"><a href="<?= home_url('about-us/') ?>">About Us</a></li>
            <li class="menu-item"><a href="<?= home_url('social/') ?>">Social</a></li>
            <li class="menu-item"><a href="<?= home_url('contact/') ?>">Contact</a></li>

            <!--  --------------- Nesigauna grąžinti "Contact", nes vis rodo "Sarą" ---------------------------- -->

            <!-- <li class="menu-item"><a href="<?= get_permalink(480) ?>">Contact</a></li> -->
         </ul>
      </nav>

   </div> <!-- -----------------"top-container" - pabaiga ------------------------------------>



   <!--  ---------  užrašas <SINCE 1978> ir <Premium Quality & Tradition>  ------------------- -->

   <div class="box8">
      <h1>
         Premium Quality & Tradition
      </h1>

      <p>
         SINCE 1978
      </p>
   </div> <!-- ---- box8 - pabaiga ---------------------------------------------- -->

   <!-- ------------------  APATINIS "ARROW DOWN" SIMBOLIS  -------------------------------- -->

   <a href="#footer">
      <!-- <img class="head-img" src="http://localhost/RED/public/img/head-arrow.png" alt="arrow down"> -->
      <img class="head-img" src="<?= get_theme_file_uri('/img/head-arrow.png') ?>" alt="arrow down">
   </a>

</header>

<!--  --------------------------------------------  UŽRAŠAS "MEET OUR TEAM"   ---------------------------------->

<section class="showcase">

   <div class="box6">
      <h2>
         Meet Our Team
      </h2>
   </div>

   <!-- ------------------------------------------- LINIJA PO UŽRAŠU------------------------------------ -->

   <!-- <img src="http://localhost/RED/public/img/section2-line.svg" alt="undeline"> -->
   <img src="<?= get_theme_file_uri('/img/section2-line.svg') ?>" alt="underline-septintas">


   <!-- ------------------------------------- TRIJŲ ŽMONIŲ NUOTRAUKOS --------------------------- -->

   <div class="box10">
      <div class="row box-images">

         <!-- ----------------- WP atvaizdavimas -------------------------------------------------------------- -->
         <!-- ------------- Visi "our tem" puslapiai dabar įkeliami šio kodo pagalba ------------------------- -->

         <?php

         $query = new WP_Query(array(
            'post_type' => 'our_team',   // "viešinamas" per POST'ą --> our team
            'post_status' => 'publish',
            'posts_per_page' => -1,      // Kad rodytų visus 'page'
         ));

         while ($query->have_posts()) {
            $query->the_post();
            $post_id = get_the_ID();
         ?>

         <!-- ----------- Dabar visi WP trijų žmonių info atvaizduojama per čia pateiktą kodą: --------------- -->

         <div class="col-lg-3 col-sm-12 col-md-6 box">
            <div>
               <!-- Papildomas div'as -->
               <span class="lnr lnr-pencil"></span>

               <!-- Nurodome kelią "get_permalink" su "path" ir funkcijos viduje nurodome "kelią" -->
               <a href="<?= get_permalink($post_id) ?>">
                  <!-- Įkeliame 'visas' nuotraukas -->
                  <img src="<?= get_field('photo') ?>" alt="<?= get_field('alt') ?>"> <!-- PHOTO -->
               </a>

               <h3><?= get_field('title') ?></h3> <!-- TITLE -->
               <div class="smallline"></div>
               <p><?= get_field('desc') ?></p> <!-- DESC -->

               <?php

                  $term_list = wp_get_post_terms($post_id, 'skills', array('fields' => 'all')); // gauname termu lista, kaip objektus
                  foreach ($term_list as $term)  //einame per visą listą
                  {
                  ?> <a href="
                        <?= get_term_link($term->term_taxonomy_id, 'skills') ?>">
                  <!-- skaiciuojame kiekvieno termo linka, turedami jo id -->
                  <?= $term->name ?>
                  <!-- paimame termo varda -->
               </a> <?php
                        }

                           ?>

            </div><!-- papildomas div'as -->
         </div> <!-- col-lg-3 col-sm-12 col-md-6 box -->


         <?php }
         wp_reset_query(); ?>

      </div> <!-- ------ "row box-images" - pabaiga --------------- -->
   </div><!-- ------------- "box10" - pabaiga --------------------------------->
</section> <!-- ------------- class="showcase"  pabaiga ----------------------- -->

<!-- -------------------------------  SHOWCASE-2  ---  TREČIA DALIS ----------------------------  -->

<section class="showcase2">
   <div class="row slider">

      <!-- "Įtraukiame" į "row-slider" kairę ir dešinę rodykles + 3 img. -->

      <!--  ------------------------- LEFT ARROW nuotrauka  -------------------------------------- -->

      <img class="left-arrow" src="<?= get_theme_file_uri('img/Left arrow.png') ?>" alt="Left arrow">


      <!--  ----------------- SWIPER-SLIDER IR ---- AŠTUONIOS NUOTRAUKĖLĖS EILĖJE  ------------------------- -->

      <div class="swiper-container">
         <div class="swiper-wrapper">

            <!-- --------------------------------  Pirma nuotrauka: PAVĖSINĖ  ------------------------------- -->

            <div class="swiper-slide">
               <!-- pridedame "swipe-slider" klasę -->
               <div class="showcase2-card">
                  <img class="select" src="<?= get_theme_file_uri('img/Image 1.jpg') ?>" alt="Pavėsinė">
               </div>
            </div>

            <!-- --------------------------------  Antra nuotrauka: FONAS  ---------------------------------- -->

            <div class="swiper-slide">
               <div class="showcase2-card">
                  <img class="select" src="<?= get_theme_file_uri('img/Image 2 Mouse Over.jpg') ?>" alt="Fonas">
               </div>
            </div>

            <!-- --------------------------------  Trečia nuotrauka: GATVĖ  --------------------------------- -->

            <div class="swiper-slide">
               <div class="showcase2-card">
                  <img class="select" src="<?= get_theme_file_uri('img/Image 3.jpg') ?>" alt="Gatvė">
               </div>
            </div>

            <!-- --------------------------------  Ketvirta nuotrauka: CENTRAS  ----------------------------- -->

            <div class="swiper-slide">
               <div class="showcase2-card">
                  <img class="select" src="<?= get_theme_file_uri('img/Image 4.jpg') ?>" alt="Centras">
               </div>
            </div>

            <!-- --------------------------------  Penkta nuotrauka: CENTRAS  ------------------------------- -->

            <div class="swiper-slide">
               <div class="showcase2-card">
                  <img class="select" src="<?= get_theme_file_uri('img/Image 4.jpg') ?>" alt="Centras">
               </div>
            </div>

            <!-- --------------------------------  Šešta nuotrauka: DOG  ------------------------------------ -->

            <div class="swiper-slide">
               <div class="showcase2-card">
                  <img class="select" src="<?= get_theme_file_uri('img/dog.jpg') ?>" alt="Dog">
               </div>
            </div>

            <!-- --------------------------------  Septinta nuotrauka: CAT  --------------------------------- -->

            <div class="swiper-slide">
               <div class="showcase2-card">
                  <img class="select" src="<?= get_theme_file_uri('img/cat.jpg') ?>" alt="Cat">
               </div>
            </div>

            <!-- --------------------------------  Aštunta nuotrauka: CHAIRS-COMFORT  ----------------------- -->

            <div class="swiper-slide">
               <div class="showcase2-card">
                  <img class="select" src="<?= get_theme_file_uri('img/chairs-comfort.jpg') ?>" alt="Chairs-comfort">
               </div>
            </div>

         </div> <!-- -----------------"swiper-wrapper" - pabaiga ---------------- -->
      </div> <!-- --------------- "swiper-container" - pabaiga ------------------ -->

      <!--  ---------------------------- RIGHT ARROW nuotrauka  --------------------------------------------- -->

      <img class="right-arrow" src="<?= get_theme_file_uri('img/Right Arrow.png') ?>" alt="Right arrow">


   </div> <!-- --------------------- "row slider" - pabaiga --------------------  -->

   <!--  -------------  INSTAGRAM ICONA IR UŽRAŠAS "FOLLOW US ON INSTAGRAM"  -------------------------------- -->

   <a href="#" class="wrapper btn">
      <i class="fab fa-instagram">
      </i>

      <p>
         FOLLOW US ON INSTAGRAM
      </p>
   </a>

</section> <!-- ----------------- "showcase-2" - pabaiga ------------------------  -->

<!-- -----------------------------  SHOWCASE-3  ------------------------------------------------------- -->

<section class="showcase3">

   <a href="#">
      <h2>
         Contact Us
      </h2>
   </a>

   <!--  ------------------------- UNDELINE nuotrauka  -------------SHOWCASE-3------------------------------- -->

   <img img class="undeline" src="<?= get_theme_file_uri('/img/About Us Undderline.png') ?>" alt="undeline">

   <!-- -------------------------  VARDAS, EMAIL'AS, MESSAGE  ------  SHOWCASE-3   ------------------------- -->

   <div class="row">
      <div class="showcase3-card">
         <form class="myForm">

            <!--  ---------------------- <form action="myForm">  ---------- SHOWCASE-3 ------------------------ -->

            <input type="text" id="fullname" name="fullname" placeholder="Full Name">
            <input type="text" id="email" name="email" placeholder="contact@email.com">
            <textarea name="subject" placeholder="Message"></textarea>

            <!--  -------------------------- SEND input'as  ----------- SHOWCASE-3 --------------------------- -->

            <a class="send_btn" href="#">
               <strong>
                  Send
               </strong>
            </a>

            <input type="hidden" name="_token" value="LtDNhgRSUUSB0cHwwiUCjwCX0SsGlyZXmzMVtZh6">

         </form>
      </div> <!-- ------------------- "showcase3-card" - pabaiga ----------------------- -->

      <!--  ------------------------------  ŽEMĖLAPIS  -------------------- SHOWCASE-3 --------------------- -->

      <div class="showcase3-card">
         <div class="mapouter">
            <div class="gmap_canvas">
               <iframe width="451" height="280" id="gmap_canvas"
                  src="https://maps.google.com/maps?q=lithuania%20vilnius%20zirmunu%2070&t=&z=15&ie=UTF8&iwloc=&output=embed"
                  frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
               </iframe>
               <a href="https://www.crocothemes.net">
               </a>
            </div> <!-- ------------ "gmap_canvas" - pabaiga --------------------- -->

            <style>
            .mapouter {
               text-align: right;
               height: 280px;
               width: 451px;
            }

            .gmap_canvas {
               overflow: hidden;
               background: none !important;
               height: 280px;
               width: 451px;
            }
            </style>
         </div>
         <!-- ----------- "mapouter" - pabaiga ------------------------------- -->

         <!-- ---------------------------  UŽRAŠAS PO ŽEMĖLAPIU  ---------- SHOWCASE-3 ------------ -->
         <div>
            <p>
               811 7th Avenue 53rd Street<br> New York, 10019, United States
            </p>
         </div>

      </div> <!-- -------------- "showcase3-card" - pabaiga ---------------------  -->
   </div> <!-- -------------- "row" - pabaiga ------------------------------------- -->
</section> <!-- --------- "showcase-3" - pabaiga ---------------------------------  -->

<!--  ------------------------------------------  Initialize Swiper  ----------- SHOWCASE-3 ----------- -->

<script>
var swiper = new Swiper('.swiper-container', {
   slidesPerView: 3,
   spaceBetween: 30,
   navigation: {
      nextEl: '.right-arrow',
      prevEl: '.left-arrow'
   },

   // <!--  ---------------------------  Sustatome BREAKPOINTS  ------------- SHOWCASE-3 ---------- -->

   breakpoints: {
      1150: {
         slidesPerView: 2,
         spaceBetween: 30,
      },
      640: {
         slidesPerView: 1,
         spaceBetween: 30
      }
   }
});
</script>

<!-- ----------------------------------  SHOWCASE-4 ------------------------------------------------------------ -->

<!-- -------  Footer-nav   4 užrašai su logotipu per vidurį --- : (home, about us, "logo", social, contact) -- -->

<section class="showcase4">
   <div class="footer-nav">

      <ul>
         <!--   ---------------------------------- HOME  ------------------------------------------------ -->
         <li>
            <!-- <a href="http://localhost/RED/public" img src="http://localhost/RED/public/figma3.html"> -->
            <a href="<?= get_permalink(get_page_by_path('p-c', OBJECT, 'page')) ?>">
               Home
            </a>
         </li>

         <!--   ---------------------------------- ABOUT US ------------------------------------------------ -->
         <li>
            <!-- <a href="http://localhost/RED/public/about-us" img src="http://localhost/RED/public/about.html"> -->
            <a href="<?= get_permalink(get_page_by_path('about us', OBJECT, 'page')) ?>">
               About Us
            </a>
         </li>

         <!--   ---------------------------------- LOGO "Pinterest" ---------------------------------------- -->
         <a href="#">
            <!-- <img class="logo" src="http://localhost/RED/public/img/Footer Logo.svg" alt="Logo"> -->
            <img class="icon" src="<?= get_theme_file_uri('img/Footer Logo.svg') ?>" alt="Logo Pinterest">
            <a href="<?= get_permalink(get_page_by_path('p-c', OBJECT, 'page')) ?>"></a>

            <!--   ---------------------------------- SOCIAL ------------------------------------------------ -->
            <li>
               <!-- <a href="http://localhost/RED/public/social" img src="http://localhost/RED/public/services.html"> -->
               <a href="<?= get_permalink(get_page_by_path('social', OBJECT, 'page')) ?>">
                  Social
               </a>
            </li>

            <!--   ---------------------------------- CONTACT  ------------------------------------------------ -->
            <li>
               <!-- <a href="http://localhost/RED/public/contact" img src="http://localhost/RED/public/contact.html"> -->
               <a href="<?= get_permalink(get_page_by_path('contact', OBJECT, 'page')) ?>">
                  Contact
               </a>
            </li>

      </ul>
   </div> <!-- -----------"footer-nav" - pabaiga ------------------------- -->

   <!-- -------------------------  FOOTERIO ICO'NOS  ----------------------------------------------------- -->

   <div class="icon">
      <a href="#">
         <img class="icon" src="<?= get_theme_file_uri('img/Facebook.png') ?>" alt="icon Facebook">
      </a>
      <a href="#">
         <img class="icon" src="<?= get_theme_file_uri('img/Twitter.png') ?>" alt="icon Twitter">
      </a>
      <a href="#">
         <img class="icon" src="<?= get_theme_file_uri('img/Instagram.png') ?>" alt="icon Instagram">
      </a>
      <a href="#">
         <img class="icon" src="<?= get_theme_file_uri('img/Pinterest.png') ?>" alt="icon Pinterest">
      </a>
   </div>
   <!-- ----------------------- "icon" - pabaiga ---------------------->

</section>
<!-- ----------------------"showcase4" - pabaiga ------------------------->






<?php get_footer();  ?>