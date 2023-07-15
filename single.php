<?php get_header(); ?>
<?php while(have_posts()):the_post() ?>
<div class="video-container">
    <div class="row">
        <div class="col-12">
            <?php      
                echo'<img src="https://source.unsplash.com/1920x750/?business,blog" alt="">';         
            ?>
        </div>
    </div>
</div>
<div class="container_single mt-5">
    <div class="row">
        <div class="col-lg-8 tm-post-col">
            <div class="tm-post-full">
                <div class="mb-4">
                    <h2 class="pt-2 tm-color-primary tm-post-title"><?php the_title(); ?></h2>
                    <p class="tm-mb-40"><?php echo get_the_time('M j, Y') ." posted by ". get_author_name(); ?></p>
                    <?php if(the_excerpt()){
                        echo '<p class="mb-5 h4"> '. get_the_excerpt() .'</p>';
                    } 
                    ?>
                    <p>
                        <?php the_content(); ?>
                    </p>
                    <span class="d-block text-right tm-color-primary"><?php the_category(' '); ?></span>
                </div>

                <h2 class="tm-color-primary tm-post-title mb-4">Your comment</h2>
                <?php   if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif; 
                    ?>
            </div>
        </div>
        <div class="col-lg-4 ps-5">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>