<?php
/*Template name: Left sidebar*/
get_header();
?>

<div class="wrapper row3">
    <main class="hoc container clear">
        <!-- main body -->
        <!--  main area started -->


        <?php get_template_part('left-sideber-page'); ?>




<!-- main area ended -->


<!-- right sideber started -->
<div class="content three_quarter">

    <?php 
                while(have_posts()):The_post();
                The_title();
                the_content();            
                endwhile;            
            ?>


</div>
<!-- right sideber ended -->
<!-- / main body -->
<div class="clear"></div>
</main>
</div>




<?php get_footer(); ?>