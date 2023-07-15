<?php get_header(); ?>

<?php
echo '<div class="container hoc">';
while(have_posts()): the_post();

the_title();
the_content();

endwhile;
echo '</div>';
?>

<?php get_footer(); ?>