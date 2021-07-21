<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
/****************************************************
*
* @File: 			footer.inc.php
* @Package:		GetSimple
* @Action:		InnovationGrid theme for GetSimple CMS
*
*****************************************************/
?>

	<!-- site footer -->
	<footer><!-- Compare with header but doesn't do anything. -->
		
		<div class="footer"><!-- Set to full page width. Contains background image info. -->
		
			<?php get_footer(); ?>
		
			<!-- 
				Theme Credits
				Please consider keeping the links to the developer and GetSimple if you use this theme
			-->
	 		<div class="container"><!-- Flex Container -->
				<div class="left">
					<p>
						<a href="<?php get_site_url(); ?>./admin/" >Admin Login</a>
					</p>
					<p>
						&copy;&nbsp;<?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a>
					</p>
				</div>
				<div class="right">
				<!--<p>
						ResponsiveInnovation Theme by <a href="http://timbowgs.bplaced.net/" >Timbow's GS Site</a> 
					</p>-->
					<p>
						InnovationGrid Theme on <a href="https://github.com/Alan-A/InnovationGrid-Theme" >GitHub</a> 
					</p>
					<p>
						Innovation Theme by <a href="http://www.cagintranet.com" >Cagintranet</a>
					</p>
					<p>
						<?php get_site_credits(); ?>
					<p>
				</div><!-- End div .right -->
				
			</div><!-- End div .container -->
			
		</div><!-- End div .footer -->
			
	</footer>
