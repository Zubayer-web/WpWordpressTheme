<?php
/*Template name: Right sideber*/
get_header();
?>

<div class="wrapper row3">
    <main class="hoc container clear">
        <!-- main body -->
        
        <!--  main area started -->
        <div class="content three_quarter first">
            <?php 
                while(have_posts()):The_post();
                    echo '<h2>'. The_title() .' </h2> 
                    <p>'. the_content() .'</p>
                     ';
                         
                endwhile;            
            ?>
        </div>
        <!-- main area ended -->


        <!-- right sideber started -->
        <?php get_sidebar(); ?>
        <!-- right sideber ended -->
        <!-- / main body -->
        <div class="clear"></div>
    </main>
</div>




<?php get_footer(); ?>