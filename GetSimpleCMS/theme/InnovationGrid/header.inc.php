<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			header.inc.php
* @Package:		GetSimple
* @Action:		InnovationGrid theme for GetSimple CMS
*
*****************************************************/
?>

	<!-- site header -->
	<header>
		
		<!-- header bar -->
		<div class="header"><!-- Set to full page width. Contains background image info (not for breadcrumbs). --> 
			
			<div class="container"><!-- Contains width restrictions -->
				
				<!-- language menu (uses i18n language menu plugin) -->
				<!-- '$language' is inserted for use by scripts in components -->
				<?php 
					echo '<ul id="language-menu" class="language-menu '. $language .'">';
					get_i18n_lang_menu();
					echo '</ul>';
				?>
				
				<div class="left">
					
					<!-- logo/sitename -->
					<div class="sitename">
						<a href="<?php get_site_url(); ?>" id="logo" ><?php get_custom_field('logo_text'); ?></a>
					</div><!-- End .sitename -->
					
				</div><!-- End .left -->
				
				<div class="right">
					
					<!-- main navigation -->
					<nav class="main-nav">
						<ul class="main-nav-list"><!-- Used to access the li elements using JS -->
							<?php //get_navigation(get_page_slug(FALSE)); ?>
							<?php get_i18n_navigation(get_page_slug(FALSE)); ?><!-- AA i18n -->
						</ul>
					</nav><!-- End .main-nav -->
					
					<!-- i18n Search form -->
					<div class="search">
						<?php if ($language == 'en') {
							get_i18n_search_form(array('slug'=>'searchresults','showTags'=>'0')); 
						} ?><!-- AA: i18n -->
						<?php if ($language == 'de') {
							get_i18n_search_form(array('slug'=>'searchresults','showTags'=>'0')); 
						} ?><!-- AA: i18n -->
					</div>
				
					<!-- burger navigation -->
					<div class="section">
					<!--<h3>nav</h3>-->
						<?php //get_component('burgericon'); ?>	<!-- 'Standard' version -->
						<?php //get_component('burgermenu'); ?>	<!-- 'Standard' version -->
						<?php //get_component('feule_menuicon'); ?>					<!-- 'FEUE' version -->
						<?php //get_i18n_component('feule_menumobile', $language); ?>	<!-- 'FEUE' version -->
						<?php get_component('slidericon'); ?>					<!-- 'FEUE' version -->
						<?php get_i18n_component('slidermenu', $language); ?>	<!-- 'FEUE' version -->

					</div>
										
				</div><!-- End .right -->
			
			</div><!-- End .container -->
		
		</div><!-- End .header -->
		
		<!-- breadcrumb bar: only even when on homepage - to suppress see CSS -->
		<div class="breadcrumbs"><!-- Set to full page width. Contains background image info (not for header). -->
			
			<div class="container"><!-- Contains width restriction. -->

				<div class="wrapper">
				
					<a href="<?php get_site_url(); ?>">Home</a> &nbsp;&nbsp;&#149;&nbsp;&nbsp; 
					<?php Innovation_Parent_Link(get_parent(FALSE)); ?> <b><?php get_page_clean_title(); ?></b>
				
				</div><!-- End .wrapper -->
			
			</div><!-- End .container -->
			
		</div><!-- End .breadcrumbs -->
		
	</header>