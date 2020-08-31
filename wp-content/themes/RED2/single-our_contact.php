<?php     get_header();   ?>

<div style="background-color:blue; padding-top:10px;" font-style="color:white;">

   <!-- --------------------------------------------------------------------------------------------- -->
   <!-- ---------- Puslapis reikalingas supaprastinti funkcijas WP skaitymui ir redagavimui --------- -->
   <!-- ---------- Single "įdedame" nes, aprašome kiekvieną funkciją atskirai ir nereikia laikyti  -- -->
   <!-- ---------- VS Code meniu langelyje kaireje, viskas pereina i "sinle-our_team" --------------- -->
   <!-- ---------- PVZ : title, puslapyje bus atvaizduojamas 'žmogaus' vardas ar pavardė ------------ -->
   <!-- ------- Po to WP atsiranda langeliai, kuriuose galima bus įrašyti/užpildyti vardą ar aprašymą -->
   <!-- --------------------------------------------------------------------------------------------- -->

   <!-- --------------------------------------------------------------------------------------------- -->
   <!--                                        TITLE                                                  -->
   <!--                              Pavadinimo patalpinimas, <h1>                                    -->
   <!-- --------------------------------------------------------------------------------------------- -->

   <h1 style="color:azure; padding-left:4em; padding-top:15px;">
      <?= get_field('menu-item') ?>
   </h1>

   <!-- --------------------------------------------------------------------------------------------- -->
   <!--                                DESCRIPTION - DESC                                             -->
   <!--                            Paaiškinimo patalpinimas į WP                                      -->
   <!-- --------------------------------------------------------------------------------------------- -->

   <div style="color:azure; padding:20px;">
      <?= get_field('desc') ?>
   </div>

   <!-- --------------------------------------------------------------------------------------------- -->
   <!--                                       PHOTO                                                   -->
   <!--                  Perkeliame "our contact" img tiesiai į WP, nes susikūrėme nuorodą            -->
   <!--                  "single-our_contact", su nuoroda į 'photo'                                   -->
   <!-- --------------------------------------------------------------------------------------------- -->

   <a href="<?= get_permalink(get_page_by_path('p-c',OBJECT,'page')) ?>">

      <img src="<?= get_field('photo') ?>" alt="<?= get_field('alt') ?>">

   </a>

   <!-- --------------------------------------------------------------------------------------------- -->
   <!--                     Grįžimas į pagrindinį langą                                               -->
   <!--           "permalink" funkcija "duoda" matyti puslapį ne tik iš 'localhost'o'                 -->
   <!-- --------------------------------------------------------------------------------------------- -->

</div>

<?php     get_footer();   ?>