<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			navigation.inc.php
* @Package:		GetSimple
* @Action:		InnovationGrid theme for GetSimple CMS
*
*****************************************************/
?>

<nav class="menu-tree">
	
	<!-- wrap each sidebar section like this -->
	<div class="section">
		
		<?php //get_i18n_component('sidebarnav'); ?>					<!-- 'Standard' version -->
		<?php $slug = return_page_slug(); ?>
		<?php get_i18n_component('feule_menuaside', $language, '', 3, $slug); ?>	<!-- 'FEULE' version -->
											<!-- 3rd parameter is '' or the name of the parent element -->
											<!-- 4th parameter is the max number of levels to be shown -->
											<!-- 5th parameter is used to check if page is current/active -->
		
	</div>
	
</nav>
