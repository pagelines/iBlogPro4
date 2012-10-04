
<?php if(function_exists('get_flickrRSS')):?>
<!--sidebox start -->
  <div id="dflickr" class="widget_flickrRSS widget">
	<div class="winner fix">
          <ul>
           	<?php get_flickrRSS(array(
						'num_items' => 6,
						'html' => '<li><a href="%flickr_page%" title="%title%"><img src="%image_square%" alt="%title%"/></a></li>'
					)); ?>
          </ul>
    </div>
  </div>
  <!--sidebox end -->
<?php endif; ?>