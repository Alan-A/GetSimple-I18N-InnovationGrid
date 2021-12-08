<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			sidebar1.inc.php
* @Package:		GetSimple
* @Action:		InnovationGrid theme for GetSimple CMS
*
*****************************************************/
?>

<aside id="news">
	
	<!-- wrap each sidebar section like this -->
	<div class="section">
		<?php //echo "Language is: ", $language;?>
		<?php 
			if ($language == 'de') { get_component('newsandblog_de'); };
			if ($language == 'en') { get_component('newsandblog_en'); };
		?>
	</div>
	
</aside>