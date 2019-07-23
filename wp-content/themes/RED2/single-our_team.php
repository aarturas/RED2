   <div style="background-color:blue; padding-top:10px;" font-style="color:white;">






        <!-- ----------------------- Užrašo patalpinimas, <h1> --------------------------- -->
      <h1 style="color:azure; padding-left:4em; padding-top:15px;">
      <?= get_field('title') ?>
      </h1>

      
      <div style="color:azure; padding:20px;">
         <?= get_field('desc') ?>
      </div>

      <!-- "permalink" funkcija "duoda" matyti puslapį ne tik iš 'localhost'o' -->
      <a href="<?= get_permalink(get_page_by_path('p-c',OBJECT,'page')) ?>">

      <!-- Perkeliame "our team" tiesiai į WP, nes susikūrėme nuorodą "single-our_team", su nuoroda į 'photo' -->
      <img src="<?= get_field('photo') ?>" alt="<?= get_field('alt') ?>">

           


    </div>