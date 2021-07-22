<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			sidebar2.inc.php
* @Package:		GetSimple
* @Action:		InnovationGrid theme for GetSimple CMS
*
*****************************************************/
?>

<aside id="tags">
	
	<!-- wrap each sidebar section like this -->
	<div class="section">
		<?php //echo "Language is: ", $language;?>
		<?php 
			if ($language == 'de') { get_component('tagcloud_de'); };
			if ($language == 'en') { get_component('tagcloud_en'); };
		?>
	</div>
	
	<div class="section">
		<?php get_component('socialmedia');	?><!-- Commented out so as Component contains HTML comments -->
	</div>
	
</aside>