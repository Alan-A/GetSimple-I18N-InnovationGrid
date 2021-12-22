<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			template.php
* @Package:		GetSimple
* @Action:		InnovationGrid theme for GetSimple CMS
*
*****************************************************/

# Get this theme's settings based on what was entered within its plugin. 
# This function is in functions.php 
# Could this be deleted? 
$innov_settings = Innovation_Settings();

?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" > <!--<![endif]-->
<head>
	
	<meta charset="utf-8">

	<!-- Erreicht, dass die Webseite von Anfang an in „normaler“ Schriftgröße angezeigt wird 
		und dann vom Benutzer weiter gezoomt werden kann.
		Source:https://wiki.selfhtml.org/wiki/CSS/Tutorials/Einstieg/Media_Queries -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
	
	<meta name="robots" content="index, follow">

	<link href='//fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/stylesheets/innovationgrid_base.css">
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/stylesheets/innovationgrid_grid_aside-2r.css">
<!--<link rel="stylesheet" href="<?php get_theme_url(); ?>/stylesheets/innovationgrid_grid_aside-3r.css">-->
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/stylesheets/mobile-nav.css">
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/stylesheets/aa-de.css">
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/reset.css">
		
<!--<script src="pfad-zur-jquery/jquery-3.4.1.js" type="text/javascript"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script><!-- AA: i18n search tags -->	
	
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 
	
	<!--[if lt IE 7 ]>
    <script src="<?php get_theme_url(); ?>/js/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->

	<?php get_header(); ?>
	
</head> 
<body id="<?php get_page_slug(); ?>" >
	
	<div class="page">
		
		<!-- Include the header template -->
		<?php include('header.inc.php'); ?>
		
		<!-- Container to restrict width of  -->
		<div class="main-container">
			
			<!-- Include the navigation template - 'aside/menu-tree' menu -->
			<?php include('navigation.inc.php'); ?>
		
			<!-- page content -->
			<main>
			
				<article>
				
					<section>
					
						<!-- title and content -->
						<h1><?php get_page_title(); ?></h1>
						<?php get_page_content(); ?>
					
						<!-- page footer -->
						<div class="footer">
							<p>Published on: <time datetime="<?php get_page_date('Y-m-d'); ?>" pubdate><?php get_page_date('F jS, Y'); ?></time></p>
						</div>
				
					</section>
				
				</article>
			
			</main>
		
			<!-- include the 'tagcloud' & 'socialmedia' components -->
			<?php include('aside_tagcloud.inc.php'); ?>
				
			<!-- include the 'Front End User Area' component -->
			<?php include('aside_feule_userarea.inc.php'); ?>
		
		</div><!-- End .main-container -->
		
		<!-- include the footer template -->
		<?php include('footer.inc.php'); ?>
		
	</div><!-- End #page -->
	
	<script src="<?php get_theme_url(); ?>/js/aa-de.js"></script><!-- Custom Script -->
	
</body>
</html>