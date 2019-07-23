    <div style="background-color:blue; padding-top:10px;" font-style="color:white;">

      <h1 style="color:azure; padding-left:4em; padding-top:15px;">Dennis Kim</h1>

        <div style="color:azure; padding:20px;">
        <?= get_field('desc') ?>
      </div>



      <!-- "permalink" funkcija "duoda" matyti puslapi ne tik is 'localhost'o' -->
        <a href="<?= get_permalink(get_page_by_path('p-c',OBJECT,'page')) ?>">

            <!-- Perkeliame "our team" tiesiai i WP, nes susikureme nuoroda "single-our_team", su nuoroda i 'photo' -->
      nes WP 
            <img src="<?= get_field('photo') ?>" alt="Kim">

    </div>