
 <!--portfolio
 ==========================================-->
 <section class="portfolio">
   <div class="container">

     <div class="row">
       <h1>Portfolio</h1>
      </div><!--row-->
      <!--<div class="row" id="ms-container">-->

      <div class="container but">
        <form action="" method="GET">
        <ul class="list-inline">
            <li><button type="submit" value="1" class="btn btn-info" name="all">All</button></li>
            <li><button type="submit" value="1" class="btn btn-info" name="webapp">WebApp</button></li>
            <li><button type="submit" value="1" class="btn btn-info" name="website">WebSite</button></li>
            <li><button type="submit" value="1" class="btn btn-info" name="flatdesign">FlatDesign</button></li>
          </ul>
        </form>
      </div>

 <div class="container" id="ms-container">

    <?php
    $button1 = $_GET['webapp'];
    $button2 = $_GET['website'];
    $button3 = $_GET['flatdesign'];
    $button4 = $_GET['all'];

    if ($button1) {
      echo do_shortcode('[ajax_load_more container_type="div" post_type="portfolio" posts_per_page="6" category="web-app" transition_container="false"]');
    }
    if ($button2) {
      echo do_shortcode('[ajax_load_more container_type="div" post_type="portfolio" posts_per_page="6" category="website" transition_container="false"]');
    }
    if ($button3) {
      echo do_shortcode('[ajax_load_more container_type="div" post_type="portfolio" posts_per_page="6" category="flat-design" transition_container="false"]');
    }
    if ($button4) {
      echo do_shortcode('[ajax_load_more container_type="div" post_type="portfolio" posts_per_page="6"  transition_container="false"]');
    } ?>
    </div>
</div>


 </section><!--about-->
