<?php
$name =get_field('name');
$title= get_field('title');
$welcome_msg= get_field('welcome_msg');
$background=get_field('background');

?>

<!--Welcome
==========================================-->
<section class="home" id="particles-js">
<!-- particles.js container -->

<div class="container">
  <div class="row ">
    <div class="col-md-7 col-sm-12 title">
        <h1><?php echo $name; ?></h1>
        <h3><?php echo $title; ?></h3>
    </div><!--col-->

  </div><!--row-->
</div><!--container-->

<div class="bounce">
  <a href="#latest"> <i class="fa fa-angle-double-down"></i></a>
</div>

</section><!--home-->
