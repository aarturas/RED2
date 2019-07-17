<?php /* Template Name: Pirmas Puslapis_c */ ?>


<?php     get_header();   ?>



<!---------------------------------------- FOOTERIO NAVIGACIJA, PENKTA DALIS - kitoje dalyje: į "pagrindą"  ----------------------->


   <header>

      <!-- --------------------------- 1. Pradeda "krautis iš čia iki "yeldo"---------------------------------------------- -->

      <!-- ------------------------------------ Viršutinė navigacija su logo ---------------------------------------------- -->

      <div class="top-container">

               <div class="logo"><a href="#"><img src="http://localhost/RED/public/img/logo.png" alt=""/></a></div>
               <nav class="nav-collapse">
                  <ul>
                     <!-- <li class="menu-item active"><a href="http://localhost/RED/public" img src="http://localhost/RED/public/figma3.html" data-scroll>Home</li> -->
                     <li class="menu-item"><a href="<?= home_url('pirmas_c/') ?>">Home</a></li>
                     <li class="menu-item"><a href="<?= home_url('about-us/') ?>">About Us</a></li>
                     <li class="menu-item"><a href="<?= home_url('contact/') ?>">Contact</a></li>
                     <li class="menu-item"><a href="<?= get_permalink(480) ?>">Sara</a></li>
                  </ul>
               </nav>
 
      </div> <!--"container"-->


      <!--  --------------------  UŽRAŠAS SINCE PER VIDURĮ IR APATINĖ ARROW  ------------------------- -->

      <div class="box8">
         <h1>
               Premium Quality & Tradition
         </h1>
         <p>SINCE 1978</p>
      </div>
        

      <!-- -------------------------  APATINIS "ARROW DOWN" SIMBOLIS  ------------------------------------ -->

      <a href="#">
         <img class="head-img" src="http://localhost/RED/public/img/head-arrow.png" alt="arrow down">
      </a>

   </header>

   
   <!--  --------------------------------------------UŽRAŠAS "MEET OUR TEAM"   ------------------------------------->

   <section class="showcase">

      <div class="box6">
         <h2>
            Meet Our Team
         </h2>
      </div>

      <!-- ------------------------------------------------ LINIJA PO UŽRAŠU----------------------------------------- -->

      <!-- <img src="http://localhost/RED/public/img/section2-line.svg" alt="undeline"> -->
      <img src="<?= get_theme_file_uri('/img/section2-line.svg') ?>" alt="underline-septintas">




         <!-- --------------------------------------------- TRIJŲ ŽMONIŲ NUOTRAUKOS ------------------------------------ -->
         <div class="box10">
            <div class="row box-images">

               <!-- ------------------------------------------------- DENNIS KIM  ------------------------------------------------- -->
               
               <div class="col-lg-3 col-sm-6 col-md-3 box">
                  <article class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
                        <span class="lnr lnr-pencil"></span>
                              <!-- Nurodome kelią "get_permalink" su "path" ir funkcijos viduje nurodome "kelią" -->
                              <a href="<?= get_permalink(get_page_by_path('kim-page',OBJECT,'page')) ?>">
                                 <!-- Įkeliame 'visą' nuotrauką -->
                                 <img src="<?= get_field('kim') ?>" alt="Kim"> 
                              </a>
                           <h3>Denis Kim</h3>
                        <div class="smallline"></div>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
                  </article>
               </div>

               <!-- ------------------------------------------------- SARA McCOY  ------------------------------------------------- -->

               <div class="col-lg-3 col-sm-6 col-md-3 box">
                  <article class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
                        <span class="lnr lnr-pencil"></span>
                        <!-- Nurodome kelią su "path" ir funkcijos viduje nurodome "id" numerį -->
                        <a href="<?= get_permalink(480) ?>">
                                 <img src="<?= get_field('sara') ?>" alt="Sara">
                              </a>
                              <h3>Sara McCoy</h3>
                           <div class="smallline"></div>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
                  </article>
               </div>

               <!-- ------------------------------------------------- EMILY PORTER  ------------------------------------------------- -->

               <div class="col-lg-3 col-sm-6 col-md-3 box">
                  <article class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
                     <span class="lnr lnr-pencil"></span>
                           <!-- Su "get_permalink" nurodome kuriuo keliu pasirinktinai norime, kad rodytų 'img' failą -->
                           <!-- Šiuo atveju pasirenkame su nuotraukos "id" numeriu -->
                        <a href="<?= get_permalink(476) ?>">
                        <!-- Čia įkeliame nuotraukas, kada WP nurodome ne "url", bet "id", po to su "get" įdedame -->
                           <?= wp_get_attachment_image(get_field('emily'))  ?> 
                        </a>
                           <h3>Emily Porter</h3>
                        <div class="smallline"></div>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
                  </article>
               </div>
            </div>
         </div>
   </section>


   <!-- ----------------------------------------  SHOWCASE-2  ------  TREČIA DALIS ------------------------  -->

   <section class="showcase2">
      <div class="row slider">

         <!--  ----------------------------------- LEFT ARROW nuotrauka  -------------------------------------- -->

         <a href="#">
            <img class="left-arrow" src="http://localhost/RED/public/img/Left Arrow.png" alt="left arrow" style="height: 60px; width: 60px;">
         </a>


         <!--  ----------------- SWIPER-SLIDER IR ---- ŠEŠIOS NUOTRAUKĖLĖS EILĖJE  --------------------------- -->

         <div class="swiper-container">
            <div class="swiper-wrapper">

               <div class="swiper-slide">
                  <a href="#">
                     <div class="showcase2-card">
                        <img class="select" src="http://localhost/RED/public/img/Image 1.jpg" alt="pavesine">
                     </div>
                  </a>
               </div>

               <div class="swiper-slide">
                  <a href="#">
                     <div class="showcase2-card">
                        <img class="select"  src="http://localhost/RED/public/img/Image 2 Mouse Over.jpg" alt="fonas">
                     </div>
                  </a>
               </div>

               <div class="swiper-slide">
                  <a href="#">
                     <div class="showcase2-card">
                        <img class="select"  src="http://localhost/RED/public/img/Image 3.jpg" alt="gatve">
                     </div>
                  </a>
               </div>

               <div class="swiper-slide">
                  <a href="#">
                     <div class="showcase2-card">
                        <img class="select"  src="http://localhost/RED/public/img/Image 4.jpg" alt="centras">
                     </div>
                  </a>
               </div>

               <div class="swiper-slide">
                  <a href="#">
                     <div class="showcase2-card">
                        <img class="select"  src="http://localhost/RED/public/img/Image 4.jpg" alt="centras">
                     </div>
                  </a>
               </div>

            </div>
         </div>  <!-- // "swiper-container" // -->

         <!--  ---------------------------- RIGHT ARROW nuotrauka  --------------------------------------- -->

         <a href="#">
            <img class="right-arrow" src="http://localhost/RED/public/img/Right Arrow.png" alt="right arrow" style="height: 60px; width: 60px;">
         </a>

      </div>  <!-- // "row slider" // -->

      <!--  -------------  INSTAGRAM ICONA IR UŽRAŠAS "FOLLOW US ON INSTAGRAM"  ----------------------- -->

      <a href="#" class="wrapper btn">
         <i class="fab fa-instagram"></i>
            <p>
               FOLLOW US ON INSTAGRAM
            </p>
      </a>

   </section> <!-- // "showcase-2" // -->


   <!-- ---  SHOWCASE-3   ------------------------------  KETVIRTA DALIS  ----------------------------- -->

   <section class="showcase3">

      <a href="#">
         <h2>
            Contact Us
         </h2>
      </a>


      <!--  ------------------------- UNDELINE nuotrauka  ----------------------------------------------- -->

      <img img class="undeline" src="<?= get_theme_file_uri('/img\About Us Undderline.png') ?>" alt="undeline">

      <!-- -------------------------  VARDAS, EMAIL'AS, MESSAGE  --------------------------------------- -->

      <div class="row">
         <div class="showcase3-card">
            <form class="myForm">


               <!--  ---------------------- <form action="myForm">  ------------------------------------ -->

               <input type="text" id="fullname" name= "fullname" placeholder= "Full Name" >
               <input type="text" id="email" name="email" placeholder="contact@email.com">
               <textarea name="subject" placeholder="Message">
               </textarea>


               <!--  -------------------------- SEND input'as  -------------------------------------- -->

               <a class="send_btn" href="#">
                  <strong>
                     Send
                  </strong>
               </a>

               <input type="hidden" name="_token" value="LtDNhgRSUUSB0cHwwiUCjwCX0SsGlyZXmzMVtZh6">            </form>
         </div>

                  <!--  ------------------------------  ŽEMĖLAPIS  ---------------------------------------- -->

         <div class="showcase3-card">
            <div class="mapouter">
               <div class="gmap_canvas">
                  <iframe width="451" height="280" id="gmap_canvas" src="https://maps.google.com/maps?q=lithuania%20vilnius%20zirmunu%2070&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0">
                  </iframe>
                     <a href="https://www.crocothemes.net">
                     </a>
               </div> <!-- // "gmap_canvas" // -->

               <style>
                  .mapouter
                     {
                        text-align: right;
                        height: 280px;
                        width: 451px;
                     }
                  .gmap_canvas
                     {
                        overflow: hidden;
                        background: none !important;
                        height: 280px;
                        width: 451px;
                     }
               </style>
            </div> <!-- // "mapouter" // -->


            <!-- ---------------------------  UŽRAŠAS PO ŽEMĖLAPIU  ---------------------------- -->
            <div>
               <p>
                  811 7th Avenue 53rd Street<br> New York, 10019, United States
               </p>
            </div>

         </div> <!-- // "showcase3-card" // -->
      </div> <!-- --// "row" // -->
   </section> <!-- // "showcase-3" // -->


   <!--  ------------------------------------------  Initialize Swiper  ------------------------------- -->

   <script>

      var swiper = new Swiper('.swiper-container', 
      {
         slidesPerView: 3,
         spaceBetween: 30,
         navigation: 
            {
            nextEl: '.right-arrow',
            prevEl: '.left-arrow',
            },

            // <!--  ------------------------------------  Sustatome BREAKPOINTS  ------------------------------- -->

            breakpoints: 
         {
            1150: 
            {
               slidesPerView: 2,
               spaceBetween: 30,
            },
            640:  
            {
               slidesPerView: 1,
               spaceBetween: 30,
            }
         }
      });


   </script>


 <!--  Kraunasi iš  yieldo iki čia, po to persikelia į "home" content  ------------------ -->


   <!-- -------------------------  Footer-nav nesikrauna, tik po to, gale pasikrauna ....  ------------------ -->

   <section class="showcase4">

      <div class="footer-nav">
         <ul>
            <li>
               <a href="http://localhost/RED/public" img src="http://localhost/RED/public/figma3.html">
                  Home
               </a>
            </li>

            <li>
               <a href="http://localhost/RED/public/about-us" img src="http://localhost/RED/public/about.html">
                  About Us
               </a>
            </li>

            <a href="#">
               <img class="logo" src="http://localhost/RED/public/img/Footer Logo.svg" alt="Logo">
            </a>

            <li>
               <a href="http://localhost/RED/public/social" img src="http://localhost/RED/public/services.html">
                  Social
               </a>
            </li>
               
            <li>
               <a href="http://localhost/RED/public/contact" img src="http://localhost/RED/public/contact.html">
                  Contact
               </a>
            </li>
                  
         </ul>
      </div> <!-- // "footer-nav" // -->


      <!-- -------------------------  FOOTERIO ICO'NOS  ----------------------------------------------------- -->

      <div class="icon">
         <a href="#">
            <img class="icon" src="<?= get_theme_file_uri('img/Facebook.png') ?>" alt="icon">
         </a>
         <a href="#">
            <img class="icon" src="<?= get_theme_file_uri('img/Twitter.png') ?>" alt="icon">
         </a>
         <a href="#">
            <img class="icon" src="<?= get_theme_file_uri('img/Instagram.png') ?>" alt="icon">
         </a>
         <a href="#">
            <img class="icon" src="<?= get_theme_file_uri('img/Pinterest.png') ?>" alt="icon">
         </a>
      </div>

   </section> <!-- // "showcase4" // -->

   <?php get_footer();  ?>
