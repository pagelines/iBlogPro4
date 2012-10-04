<div id="nav" class="fix">
	<ul class="fix homebutton">
		<li class="page_item navfirst">
		
			<a class="home" href="<?php echo get_option('home'); ?>/" title="<?php _e('Home',TDOMAIN);?>" style="background-image: url('<?php e_pagelines('nav_home_image', THEME_IMAGES.'/home-icon-trans.png');?>');">
				<?php _e('Home',TDOMAIN);?>	
			</a>
		</li>
	</ul>
	
	<?php function nav_fallback() {?>	
			<ul id="menu-main" class="mnav dropdown fix">
			  	<?php wp_list_pages( 'title_li=&sort_column=menu_order&depth=3'); ?>
			</ul><?php
		}
	
	if(function_exists( 'wp_nav_menu' )):?>
		<?php wp_nav_menu( array('theme_location'=>'primary', 'menu_class'  => 'mnav dropdown fix', 'container' => null, 'container_class' => '', 'depth' => 3, 'fallback_cb'=>'nav_fallback' ) ); ?>
	<?php else:?>
			<?php 
				nav_fallback();
			?>
	<?php endif;?>
	<?php if(!pagelines('hidesearch')):?>
		<?php get_template_part ('library/_searchform'); ?>
	<?php else:?>
		<style type="text/css">#nav ul#menu-main-nav,#nav ul.mnav{width:890px;}</style>
	<?php endif;?>
<div class="clear"></div>
</div><!-- /nav -->