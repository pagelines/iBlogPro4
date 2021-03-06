
</div>
<?php get_template_part ('library/_morefoot'); ?>
<div  id="footer">
	<div class="effect">
		<div class="content">
			<?php if(pagelines('twitfooter') && pagelines('twittername') && VPRO):?>
				<div id="footer_topline"><?php get_template_part ('library/_twittermessages'); ?></div>
			<?php endif;?>
			<div id="fcolumns_container" class="fix">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Columns') ) : ?>
					<div class="fcol">
						<div class="fcol_pad">
							<?php if(pagelines('footer_logo') && VPRO):?>
								<a class="home" href="<?php echo get_option('home'); ?>/" title="<?php _e('Home',TDOMAIN);?>">
									<img src="<?php echo pagelines('footer_logo');?>" alt="<?php bloginfo('name');?>" />
								</a>
							<?php else:?>
								<h3 class="footer-site-title"><a class="home" href="<?php echo get_option('home'); ?>/" title="<?php _e('Home',TDOMAIN);?>"><?php bloginfo('name');?></a></h3>
							<?php endif;?>
						</div>
					</div>
					<div class="fcol">
						<div class="fcol_pad">
							<h3><?php _e('Pages',TDOMAIN);?></h3>
							<?php wp_nav_menu( array( 'container_class' => '', 'container' => null, 'menu_class' => 'footer_nav','theme_location' => 'footer_nav' ) ); ?>
						</div>
					</div>
					<div class="fcol">
						<div class="fcol_pad">
							<h3><?php _e('Stay In Touch',TDOMAIN);?></h3>
							<?php wp_nav_menu( array( 'container_class' => '', 'container' => null, 'menu_class' => 'footer_nav','theme_location' => 'footer_social' ) ); ?>

						</div>
					</div>
					<div class="fcol">
						<div class="fcol_pad">
							<h3><?php _e('More',TDOMAIN);?></h3>
							<?php if(pagelines('welcomemessage')):?><div class="welcomemessage"><?php echo pagelines('welcomemessage');?></div><?php endif;?>
						</div>
					</div>
					<div class="fcol">
						<div class="fcol_pad">
							<span class="terms">
								<?php e_pagelines('terms');?>
							</span>
						</div>
					</div>
				<?php endif; ?>
			</div>
	
		
			<div class="clear"></div>
		</div>		
	</div>


</div>
	<div class="clear"></div>
	<?php if(pagelines('no_credit') || !VDEV):?>
		<div id="cred" class="pagelines">
			<a class="plimage" target="_blank" href="<?php e_pagelines('partner_link', pagelines('credlink'));?>" title="<?php echo THEMENAME;?> by PageLines">
				<img src="<?php echo THEME_IMAGES.'/pagelines.png';?>" alt="<?php echo THEMENAME;?> by PageLines" />
			</a>
		</div>
	<?php endif;?>
 	<hr class="hidden" />

  </div><!--/wrapper -->

</div><!--/page -->

<!-- Footer Scripts Go Here -->
<?php if (pagelines('footerscripts')) echo pagelines('footerscripts');?>
<!-- End Footer scripts -->

<?php wp_footer(); ?>
</body>
</html>