<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package web_design_experiments
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <!-- Font Awseome Icons -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/font-awesome.min.css">

  <!-- Bootstrap Core Css -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css">

  <!-- Custom Core Css -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/custom.css">

	<!-- Custom Core Css -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/lightbox.css">



  <!-- Google Fonts -->

	<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">


<?php wp_head(); ?>
<!--HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
 <script src="https://oss/maxcdn.com/html5shiv/3.7.2/html5shiv.min.js></script>
 <script src="https://oss/maxcdn.com/respond/1.4.2/respond.min.js"><script>
 <![endif]-->
 <!--[if lte IE 9]>
<script src="masonry.pkgd.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'web_design_exp' ); ?></a>


		<!--HEADER
		 	==========================================-->
		 	<header class="site-header" role="banner">


		      <!--MENU-->
		      <div id="mySidenav" class="sidenav">

					    		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

									<div class="container">
										<div class="row">
											<div class="col-md-12">
												<?php
												wp_nav_menu(array(
															'items_wrap' => '<ul id="menu" class="menu">%3$s</ul>',
															'theme_location' => 'primary',
															'container' => 'nav',
															'container_class' => 'navbar-collapse collapse',
															'menu_class' => 'nav navbar-nav '
															));
																?>


											  </div>
										 </div>



									</div>
		  	</div>

		  	<span id="main" onclick="openNav()"><i class="fa fa-bars fa-1x" aria-hidden="true"></i></span>



		   <!--/MENU-->


		 	</header>


	<div id="content" class="site-content">
