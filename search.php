<?php get_header(); ?>
<!-- blog posts -->
<div class="wrapper row3">
    <section class="hoc container clear">
        <div class="sectiontitle">

            <p class="nospace font-xs">Felis dictum viverra mauris dui</p>
            <p class="heading underline font-x2">Phasellus nunc erat cursus</p>
        </div>
        <div class="search_title">
            <?php
                printf(__('Search Results For: %s','wp_theme'), get_search_query());
            ?>
        </div>
         <?php?>
        <ul id="latest" class="nospace group">
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