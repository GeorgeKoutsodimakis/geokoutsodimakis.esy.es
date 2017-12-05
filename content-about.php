<?php
//Advanced Custom Fields
$quote =get_field('quote_msg');


 ?>

 <!--About
 ==========================================-->
 <section id="about" >
   <div class="container">

     <div class="row">
      <h1>About</h1>
     </div><!--row-->

     <div class="container">
       <div class="row ">
         <div class="col-sm-12">
             <?php echo $quote; ?>
         </div><!--col-->

       </div><!--row-->
     </div><!--container-->

      <div class="text-center">
        <a class="btn btn-default know-more" href="index.php/about">Get to know me</a>

      </div>
   </div><!--container-->
 </section><!--about-->
