
<?php


?>

<!--quote
==========================================-->
<section id="latest" >

<div class="container ">

  <div class="row ">
      <h1> Latest Work</h1>
  </div><!--row-->


<?php $loop = new WP_Query(
               array(
                 'post_type' => 'portfolio',
                 'posts_per_page' => 4,
                 'orderby' => 'rand',
                 'order' => 'ASC'

                     ));
?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <?php
  $postid = get_the_ID();
  $portfolio_thumb = get_field('portfolio_thumb',$post_id);
  $portfolio_link = get_field('portfolio_link',$post_id);
  $portfolio_desc = get_field('portfolio_desc',$post_id);
 ?>

  <div class="row ">
  <div class=" col-md-3 col-sm-6 col-xs-12  ">
     <div class="text-center">
       <div class="hovereffect ">
         <img class="img-responsive"  src="<?php echo $portfolio_thumb['url'];?>"  alt="">
         <div class="overlay">
               <h2><?php echo  $portfolio_link; ?> </h2>
               <p> <?php echo $portfolio_desc; ?></p>
       </div>
       </div>
     </div>

 </div>

<?php endwhile;wp_reset_query(); ?>

    </div><!--row-->
   <div class="text-center">
     <a class="btn btn-default see-more" href="index.php/work/?all=1">See more</a>

   </div>

</div><!--container-->



</section><!--quote-->
