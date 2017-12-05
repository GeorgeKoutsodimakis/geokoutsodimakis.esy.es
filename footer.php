<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package web_design_experiments
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="container-fluid footer">
				<div class="row">
					<div class="text-center">
					<div class="col-md-3">
   						<i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
					</div>
				</div>
				<div class="text-center">
				<div class="col-md-3">
						<i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
				</div>
			</div>
			<div class="text-center">
			<div class="col-md-3">
					<i class="fa fa-codepen fa-3x" aria-hidden="true"></i>
			</div>
		</div>
		<div class="text-center">
		<div class="col-md-3">
				<i class="fa fa-github fa-3x" aria-hidden="true"></i>
		</div>
	</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<!--BOOTSTRAP CORE JAVASCRIPT
		PLACED AT THE  END OF THE DOCUMENT SO THE PAGES LOAD FASTER
=================================================================  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<!-- stats.js lib -->
<script src="<?php bloginfo('template_directory');?>/assets/js/particle.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/sidenav.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/lightbox.min.js"></script>





<?php wp_footer(); ?>

</body>
</html>
