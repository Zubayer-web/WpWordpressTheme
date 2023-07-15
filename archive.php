<?php get_header(); ?>
<!-- blog posts -->
<div class="wrapper row3">
    <section class="hoc container clear">
        <div class="sectiontitle">
            <p class="nospace font-xs">Felis dictum viverra mauris dui</p>
            <p class="heading underline font-x2">Phasellus nunc erat cursus</p>
        </div>
        <ul id="latest" class="nospace group">

            <h3>
                <?php $post = $posts[0];  ?>
                <?php  if (is_category()) { ?>
                <?php _e('<p>Archive for the &middot;</p>', 'life-is-simple'); ?><h1><?php single_cat_title(); ?></h1>
                <?php _e('<p>&middot; Category...</p>', 'life-is-simple'); ?>
                <?php } elseif( is_tag() ) { ?>
                <?php _e('<p>Posts tagged &middot;</p>', 'life-is-simple'); ?><h1><?php single_tag_title(); ?></h1>
                <p>&middot;...</p>
                <?php } elseif (is_day()) { ?>
                <?php _e('<p>Archive for </p>', 'life-is-simple'); ?><h1><?php the_time('F jS, Y'); ?></h1>
                <p>...</p>
                <?php  } elseif (is_month()) { ?>
                <?php _e('<p>Archive for </p>', 'life-is-simple'); ?><h1><?php the_time('F, Y'); ?></h1>
                <p>...</p>
                <?php  } elseif (is_year()) { ?>
                <?php _e('<p>Archive for </p>', 'life-is-simple'); ?><h1><?php the_time('Y'); ?></h1>
                <p>...</p>
                <?php  } elseif (is_author()) { ?>
                <?php _e('<p>Archive for the author &middot;</p>', 'life-is-simple'); ?><h1>
                    <?php echo $curauth->display_name; ?></h1>
                <p>&middot;...</p>
                <?php  } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                <?php _e('<p>Blog archives...</p>', 'life-is-simple'); ?>
                <?php } ?>
            </h3>

            <!-- one or two anyone is used -->
            <!-- <?php
                // the_archive_title( '<div class="title">','</div>' );   
                // the_archive_description('<div class="description">','</div>' );
             ?> -->
            <?php 
            $mainpost = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            ));
            if($mainpost->have_posts()):
            while($mainpost->have_posts()) : $mainpost->the_post();
            ?>
            <li class="one_third spacing_custom">
                <article><a class="imgover" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    <ul class="nospace meta clear">
                        <li><i class="fas fa-user"></i> <a href="#"><?php the_author(); ?></a></li>
                        <li><i class="fas fa-comments"></i> <a
                                href="#"><?php comments_popup_link( "No Comment", "1 Comment", '% Comments', 'abir-class', 'Disable Comment' ) ?></a>
                        </li>
                    </ul>
                    <div class="excerpt clear">
                        <a href=""></a>
                        <h6 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                        <p class="heading"><a href="<?php the_permalink(); ?>"><?php the_category(' ') ?></a></p>
                        <time datetime="2045-04-05T08:15+00:00"><strong><?php the_time('M'); ?></strong>
                            <strong><?php the_time('j'); ?></strong></time>
                        <p><?php echo wp_trim_words( get_the_content(), 25, '</p>                        
                    </div>
                    <footer><a class="btn" href="'. get_the_permalink() .'">Read More</a></footer>' ); ?>
                </article>
            </li>
            <?php endwhile; ?>
            <?php else: ?>
            <h2>OOPS! No Posts</h2>
            <?php endif; ?>
        </ul>
    </section>
</div>
<?php get_footer(); ?>