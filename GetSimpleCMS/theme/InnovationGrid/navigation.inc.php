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
		<?php get_i18n_component('feule_menuaside', $language, '', 3); ?>	<!-- 'FEULE' version -->
											<!-- 3rd parameter is '' or the name of the parent element -->
											<!-- 4th parameter is the max number of levels to be shown -->
		
	</div>
	
</nav>
