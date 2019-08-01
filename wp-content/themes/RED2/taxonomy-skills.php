<?php     get_header();   ?>


<!-- Susikūriame naują "taxonomy-slill'sų" puslapį -->
<!-- Jis leis susikūrti atskirus "stalčiukus" our-team narių "skillsam" -->

<?= term_description(); ?>

   <div class="box10">
      <div class="row box-images">

         <?php
         while(have_posts()) {
                  the_post();
                  $post_id = get_the_ID();


                  $term_obj_list = get_the_terms( $post_id, 'skills' );
                  $terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));

                  ?>

               <!-- ----------- Dabar visi WP trijų žmonių info atvaizduojama per čia šį kodą: ---------------- -->
               <div class="col-lg-3 col-sm-12 col-md-6 box">
                  <div>


                     <span class="lnr lnr-pencil"></span>

                     <!-- Nurodome kelią "get_permalink" su "path" ir funkcijos viduje nurodome "kelią" -->
                     <a href="<?= get_permalink($post_id) ?>">

                        <!-- Įkeliame 'visas' nuotraukas -->
                        <img src="<?= get_field('photo') ?>" alt="<?= get_field('alt') ?>">
                     </a>

                     <h3><?= get_field('title') ?></h3>
                     
                     <div class="smallline"></div>
                     
                     <p><?= get_field('desc') ?></p>

                     <h6><?= $terms_string ?></h6>

                     
                     
                  </div>
               </div>

            <?php } ?>

      </div>
   </div>



   <?php     get_footer();   ?>