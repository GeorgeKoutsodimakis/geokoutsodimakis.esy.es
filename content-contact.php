<?php
$contact_tel = get_field('contact_tel');
$contact_address	 = get_field('contact_address');
$city_country		 = get_field('city_country');
$contact_form = get_field('contact_form');
$email	 = get_field('email');
$github   = get_field('github');
$codepen  =get_field('codepen');
$linkedin =get_field('linkedin')
?>


<!-- CONTACT
================================ -->
<section class="contact">

<div class="container" >
  <div class="row">
     <h1>Contact</h1>
 </div>
<div class="row"  >
  <div class="col-sm-12" >

    <?php while (have_posts() ): the_post(); ?>

      <?php the_content(); ?>

    <?php endwhile; //endof loop ?>
  </div><!--col-->




</div><!--row--><!--content-->

</div><!--container-->

</section>
