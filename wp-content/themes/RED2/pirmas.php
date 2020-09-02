<?php /* Template Name: Pirmas Puslapis */ ?>

<!-- // užsikrauna pirmas -->

<?php get_header();   ?>

<header>

   <!-- ------------ 1. Pradeda "krautis iš čia iki "yeldo"------------------------------ -->

   <!-- ----------------------- Viršutinė navigacija su logo ---------------------------- -->

   <div class="container">
      <div class="row">
         <div class="col-lg-12">

            <!-- ------------------------- /  LOGO  / ----------------------------  -->

            <div class="logo">
               <a href="#">
                  <img src="{{asset('img/logo.png')}}" alt="Logo" />
               </a>
            </div>

            <!-- ------------------------- /  HOME  / ----------------------------  -->

            <nav class="nav-collapse">
               <ul>
                  <li class="menu-item active">
                     <a href="{{route('home')}}" img src="{{asset('figma3.html')}}" data-scroll>
                        Home
                     </a>
                  </li>

                  <!-- ------------------- /  ABOUT - US  / -----------------------  -->

                  <li class="menu-item">
                     <a href="{{route('about_us')}}" img src="{{asset('about.html')}}" data-scroll>
                        About Us
                     </a>
                  </li>

                  <!-- ----------------- /  SOCIAL  / -----------------------------  -->

                  <li class="menu-item">
                     <a href="{{route('social')}}" img src="{{asset('social.html')}}" data-scroll>
                        Social
                     </a>
                  </li>

                  <!-- ------------------ /  CONTACT  / ----------------------------  -->

                  <li class="menu-item">
                     <a href="{{route('contact')}}" img src="{{asset('contact.html')}}" data-scroll>
                        Contact
                     </a>
                  </li>

                  <!-- ----------------------------------------------------------------------- -->

               </ul>
            </nav>

         </div>
         <!--"col-lg-12"-->
      </div>
      <!--"row"-->
   </div>
   <!--"container"-->


   <!--  --------------------  UŽRAŠAS SINCE PER VIDURĮ IR APATINĖ ARROW  ------------------------- -->

   <div class="box8">
      <h1>
         Premium Quality & Tradition
      </h1>
      <p>SINCE 1978</p>
   </div>


   <!-- -------------------------  APATINIS "ARROW DOWN" SIMBOLIS  ------------------------------------ -->

   <a href="#">
      <img class="head-img" src="{{asset('img/head-arrow.png')}}" alt="arrow down">
   </a>

</header>

<!-- @yield('content')  -->
<!--  Kraunasi iš  yieldo iki čia, po to persikelia į "home" content  ------------------ -->


<!-- -------------------------  Footer-nav nesikrauna, tik po to, gale pasikrauna ....  ------------------ -->

<section class="showcase4">

   <div class="footer-nav">
      <ul>
         <li>
            <a href="{{route('home')}}" img src="{{asset('figma3.html')}}">
               Home
            </a>
         </li>

         <li>
            <a href="{{route('about_us')}}" img src="{{asset('about.html')}}">
               About Us
            </a>
         </li>

         <a href="#">
            <img class="logo" src="{{asset('img/Footer Logo.svg')}}" alt="Logo">
         </a>

         <li>
            <a href="{{route('social')}}" img src="{{asset('services.html')}}">
               Social
            </a>
         </li>

         <li>
            <a href="{{route('contact')}}" img src="{{asset('contact.html')}}">
               Contact
            </a>
         </li>

      </ul>
   </div> <!-- // "footer-nav" // -->


   <div class="icon">
      <a href="#">
         <img class="icon" src="img/Facebook.png" alt="icon">
      </a>
      <a href="#">
         <img class="icon" src="img/Twitter.png" alt="icon">
      </a>
      <a href="#">
         <img class="icon" src="img/Instagram.png" alt="icon">
      </a>
      <a href="#">
         <img class="icon" src="img/Pinterest.png" alt="icon">
      </a>
   </div>

</section> <!-- // "showcase4" // -->



<?php get_footer();  ?>