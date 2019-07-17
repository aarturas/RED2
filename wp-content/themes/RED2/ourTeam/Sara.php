<?php /* Template Name: Sara */ ?>


   <div style="background-color:blue; padding-top:10px;" font-style="color:white;">

      <h1 style="color:azure; padding-left:4em; padding-top:20px;">Sara McCoy</h1>

         <p style="color:azure; padding:20px;">
            Born in California and raised in Italy,<br>
            Francesca Consarino is now based in Brooklyn,<br>
            New York. She worked as a Producer and Production<br>
            Manager for six years but her true passion is in <br>
            directing and editing, which she has been working <br>
            in for the last two years. Her skills include directing,<br>
            editing, scriptwriting/ treatment writing, and working<br>
            as a camera operator.
         </p>
            
         <!-- ------------  Grįžimui  ------------------------------ -->

         <a href="http://localhost/wordpress/p-c/">


            <img style="padding-left:20px; padding-top:20px; max-width:30%; padding-bottom:20px;"
               img src="{{asset('img/Sara_McCoy.jpg')}}" alt="Sara">

               <!-- img src="{{asset('img/Sara_McCoy.jpg')}}" alt="Sara"> -->
               <img src="<?= get_field('Sara_McCoy') ?>" alt="Sara-a">
               <img src="<?= get_field('img/Sara_McCoy.jpg') ?>" alt="Sara-b">
               <img src="<?= get_field('Sara') ?>" alt="Sara-c">
               <img src="<?= get_field('http://localhost/wordpress/Sara') ?>" alt="Sara-d">


               <img src="<?= get_field('Sara') ?>" alt="Sara-pirmas">
               <img src="<?= get_field_object('Sara') ?>" alt="Sara-antras">
               <img src="<?= get_field_object('http://localhost/wordpress/Sara') ?>" alt="Sara-antras">

               <img src="http://localhost/wordpress/Sara" alt="Sara-trecias">
               <img src="<?php echo get_template_directory_uri('localhost/wordpress/p_c/Sara'); ?>/img/Sara.jpg" alt="Sara-ketvirtas">
               <img src="<?php get_field('localhost/wordpress/p_c/Sara'); ?>/img/Sara.jpg" alt="Sara-ketvirtas">

               <img src="/wp-content/themes/RED2/assets/img/Sara" alt="Sara-penktas"/>
               <img src="<?= get_theme_file_uri('/img/p_c/Sara.jpg') ?>" alt="Sara-sestas">
               <img src="<?= get_theme_file_uri('Sara') ?>" alt="Sara-septintas-a">
               <img src="<?= get_theme_file_uri('Sara-McCoy') ?>" alt="Sara-septintas-b">

               </a>

               <img src=" <?php echo wp_get_attachment_image('localhost/wordpress/p_c/Sara'); ?>/img/Sara_McCoy.jpg";>



         
        
   </div>


   
