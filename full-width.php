<?php 
/*
Template name: Full width
*/
get_header(); 




while(have_posts()): the_post();

the_title();
the_content();

endwhile;


 get_footer(); 

