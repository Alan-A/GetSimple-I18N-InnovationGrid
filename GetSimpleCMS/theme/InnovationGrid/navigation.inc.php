<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			sidebar.inc.php
* @Package:		GetSimple
* @Action:		InnovationGrid theme for GetSimple CMS
*
*****************************************************/
?>

<nav class="menu-tree">
	
	<!-- wrap each sidebar section like this -->
	<div class="section">
		
		<?php //get_i18n_component('sidebarnav'); ?>				<!-- 'Standard' version -->
		<?php get_i18n_component('feue_menuaside', $language); ?>	<!-- 'FEUE' version -->
		
	</div>
	
</nav>
