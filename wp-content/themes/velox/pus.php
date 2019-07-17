<?php /* Template Name: Antras Puslapis */ ?>


<!-- // užsikrauna pirmas -->

<?php     get_header();   ?>



<!--  -----------  Viršutinė navigacija su trimis nuorodų langeliais "Selection" ir 'VELOX' logotipu -----------------  -->

<header>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <!-- <div class="logo"><a href="#"><img src=  <?php
            // echo get_theme_file_uri('images/logo.png') 
            ?> alt=""/></a></div> -->
            <nav class="nav-collapse">
                  <ul>
                     <li class="menu-item active"><a href="#banner" data-scroll>Selection 1</a></li>
                     <li class="menu-item"><a href="#services" data-scroll>Selection 2</a></li>
                     <li class="menu-item"><a href="#brand" data-scroll>Selection 3</a></li>
                  </ul>
              </nav>
          </div>
      </div>
   </div>
</header>

 <!-- ----------  ("ANIMUOJA") Atsiranda, priartina užrašus ir mygtuką: "GET STARTED NOW"   ------------------------------ -->
      <!-- ---  "Velox One Page Template",  "Clean, Responsive, customizable one page template", ir  "Get Started Now"  -- -->

<section id="banner">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <h1 class="os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.3s">Velox One Page Template</h1>
               <p class="os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.5s">Clean, Responsive, customizable one page template </p>
            <a href="#" class="hvr-radial-out os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.7s">Get Started Now</a>
         </div>
      </div>
   </div>    
</section>

<!-- ---------------  Viršutinės mėlynos linijos animacija po užrašu "OUR SERVICES"  ---------- -->


<section id="services">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <h2 class="os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.3s"><?= get_field('antro_puslapio') ?></h2>
            <span class="line os-animation" data-os-animation="rollIn" data-os-animation-delay="0.5s"></span>
         </div>
      </div>

      <!-- ------------------------------------------  Etiketė: "LOGO DESIGN"  ---------------------------------- -->

      <div class="row">
         <div class="col-lg-3 col-sm-6 col-md-3">
            <article class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
               <span class="lnr lnr-pencil"></span>
                  <h3>Logo DESIGN</h3>
                  <div class="smallline"></div>
               <p><?= get_field('dar_antro_puslapio') ?></p>
            </article>
         </div>

      <!-- ----------------------------------------  Etiketė "WEB design"  ----------------------------------- -->


         <div class="col-lg-3 col-sm-6 col-md-3">
            <article class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.5s">
               <span class="lnr lnr-license"></span>
                  <h3>Web Design</h3>
                  <div class="smallline"></div>
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
            </article>
         </div>

      <!-- --------------------------------------  Etiketė "Branding"  --------------------------------------- -->


         <div class="col-lg-3 col-sm-6 col-md-3">
            <article class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.7s">
               <span class="lnr lnr-leaf"></span>
                  <h3>Branding</h3>
                  <div class="smallline"></div>
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
            </article>
         </div>

      <!-- -----------------------------------  Etiketė "Illustrations"  ------------------------------------ -->

         <div class="col-lg-3 col-sm-6 col-md-3">
            <article class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.9s">
               <span class="lnr lnr-leaf"></span>
                  <h3>illustrations</h3>
                  <div class="smallline"></div>
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
            </article>
         </div>
      </div>
   </div>   

</section>

<!-- ---------------  Apatinės mėlynos linijos animacija po užrašu "RECENT BRANDS WE'RE WORKED WITH"  ---------- -->

<section id="brand">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <h2 class="os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.3s">RECENT BRANDS WE’VE WORKED WITH</h2>
            <span class="line os-animation" data-os-animation="rollIn" data-os-animation-delay="0.5s"></span>
         </div>
      </div>

      <!-- -------------------------------------  Šeši kompanijų logotipai  ------------------------------------- -->

      <div class="row">
         <div class="col-lg-2 col-md-4 col-sm-4 os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.3s">
            <a href="#"><img src=" <?= get_theme_file_uri('images/c1.png') ?>" alt=""/></a>
         </div>
         <div class="col-lg-2 col-md-4 col-sm-4 os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.5s">
            <a href="#"><img src= <?= get_theme_file_uri('images/c2.png') ?> alt=""/></a>
         </div>
         <div class="col-lg-2 col-md-4 col-sm-4 os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.7s">
            <a href="#"><img src= <?= get_theme_file_uri('images/c3.png') ?> alt=""/></a>
         </div>
         <div class="col-lg-2 col-md-4 col-sm-4 os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.9s">
            <a href="#"><img src= <?= get_theme_file_uri('images/c4.png') ?> alt=""/></a>
         </div>
         <div class="col-lg-2 col-md-4 col-sm-4 os-animation" data-os-animation="zoomIn" data-os-animation-delay="1.1s">
            <a href="#"><img src= <?= get_theme_file_uri('images/c5.png') ?> alt=""/></a>
         </div>
         <div class="col-lg-2 col-md-4 col-sm-4 os-animation" data-os-animation="zoomIn" data-os-animation-delay="1.3s">
            <a href="#"><img src= <?= get_theme_file_uri('images/c6.png') ?> alt=""/></a>
         </div>
      </div>
   </div>

</section>






<?php   get_footer();  ?>



