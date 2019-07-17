<?php /* Template Name: Emily */ ?>


   <div style="background-color:blue; padding-top:10px;" font-style="color:white;">

      <h1 style="color:azure; padding-left:4em; padding-top:20px;">Emily Porter</h1>

         <p style="color:azure; padding:20px;">
            I am passionate about seafood, but also about eating<br> 
            it responsibly, without depleting the vast culinary<br> 
            gift the ocean offers. That’s also the mission of our<br> 
            guest, Top Chef winner Hung Huynh. He brings us a favorite<br> 
            seafood dish with a nod to his native Vietnam – <br> 
            Grilled Shrimp and Lettuce Wraps. Then his Roasted<br> 
            Branzino for a pull out the stops culinary <br> 
            experience for fish lovers!
         </p>
            
        
        <a href="<?= get_permalink(get_page_by_path('p-c',OBJECT,'page')) ?>">

               <!-- Čia įkeliame nuotraukas, kada WP nurodome ne "url", bet "id", po to su "get" įdedame -->
               <!-- Kitaip negu per "kelią su 'url'", nurodome tiesiai WP nuskaityti 'id' numerį -->
         <?= wp_get_attachment_image(get_field('emily'))  ?> 




   </div>




