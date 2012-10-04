
<div id="feature">
	<div class="postwrap fix">
		<div class="hentry fix">
			<div id="cycle" class="fix">

						<?php foreach(pagelines('features') as $feature):?>
							<?php $feature_control = (isset($feature['page'])) ? $feature['page'] : ''; ?>
							<?php if((showfeature($feature_control, $post->ID) && !isset($feature['draft'])) && (!empty($feature['text']) || !empty($feature['media']))):?>
							<div id="<?php echo str_replace(' ', '_', $feature['name']);?>" class="fcontainer" <?php if(isset($feature['background'])):?>style="background:<?php echo $feature['background'];?>"<?php endif;?>>
									<div class="fcontent">
										<div class="fheading">
											<?php echo do_shortcode($feature['title']);?>
										</div>
										<div class="ftext">
											<?php echo do_shortcode($feature['text']);?>

											<?php if($feature['link']):?>
												<a class="featurelink" href="<?php echo $feature['link'];?>"><?php _e('More',TDOMAIN);?></a>
											<?php endif;?>
										</div>
									</div>
									<div class="fmedia">
										<?php echo do_shortcode($feature['media']);?>
									</div>
								<div class="clear"></div>
							</div>
							<?php endif;?>
						<?php endforeach;?>
			</div>
	
			
	
		</div>
		<div class="hl"></div>
		<div id="feature-footer" class="fix">
			
			<?php if(pagelines('timeout') != 0 && pagelines('feature_playpause')):?><span class="playpause pause"><span>&nbsp;</span></span><?php endif;?>
			<div id="featurenav" class="<?php if(pagelines('feature_nav_type') == 'thumbs') echo "thumb_nav";?>">
				
			</div>

		</div>
		<div class="clear"></div>
	</div>

</div>
<div class="clear"></div>


			