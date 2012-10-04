<?php
if(VPRO) {
/*
	Template Name: Carousel Page - Standard
*/
	
	global $carousel_page;
	$carousel_page = true;
	
	get_header(); 

	get_template_part('pro/template_carousel');
	get_template_part('library/template_page');

	get_footer(); 

}
?>
