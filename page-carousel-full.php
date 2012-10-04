<?php
if(VPRO) {
/*
	Template Name: Carousel Page - FullWidth
*/
	global $carousel_page;
	$carousel_page = true;
	
	get_header(); 

	get_template_part('pro/template_carousel');
	get_template_part('library/template_fullwidth');

	get_footer(); 

}
?>
