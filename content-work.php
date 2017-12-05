<div class="categories">
  <?php
        $args = array(
          'orderby' => 'name',
          'parent' => 0
        );

        $categories = get_categories( $args );
        foreach ( $categories as $category ) {
           echo '<ul class="list-inline"><li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></li></ul>';
         }
  ?>
</div><!--categories-->
