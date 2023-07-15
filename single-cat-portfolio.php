<?php
$portfolio_post = new WP_Query(array(
    'post_type'=>'cat-portfolio'
));


?>
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
                <!-- custom content started -->  
                <div class="title_comment_section">
                    <div class="title_section">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="comment_section">
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
                <div class="gellary_images_section">
                    <div class="row">

                    <?php  $files = get_post_meta( get_the_ID(), 'portfolio_gallery', true );



                            foreach ( (array) $files as $attachment_id => $attachment_url ) {

                                echo '<div class="col-md-6"><div class="custom-design">';
                                echo wp_get_attachment_image( $attachment_id, 'medium' );
                                echo '</div></div>';
                            }
                        
                        
                        ?>


                  
                    </div>
                </div>





                <!-- custom content ended -->
            </div>
        </div>
        <div class="col-lg-4 ps-5">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>


