<?php
/*Template Name: Landing Page*/
get_header(); ?>
<!-- Slider area started -->
<?php if($jubayer_theme['slider-show-or-hide'] == 1): ?>
<div class="overlay" style="
background-color: <?php echo $jubayer_theme['banner-background']['background-color']; ?>;
background-image: url(<?php echo $jubayer_theme['banner-background']['background-image'] ?>);
background-repeat: <?php echo $jubayer_theme['banner-background']['background-repeat']; ?>;
background-position: <?php echo $jubayer_theme['banner-background']['background-position']; ?>;
background-size: <?php echo $jubayer_theme['banner-background']['background-size']; ?>;
background-attachment: <?php echo $jubayer_theme['banner-background']['background-attachment']; ?>;
">
    <div id="pageintro" class="hoc clear">

        <article>
            <h3 class="heading mb-5" style="color: <?php echo $jubayer_theme['banner-title-typography']['color']; ?>; 
                                  font-style: <?php echo $jubayer_theme['banner-title-typography']['font-style']; ?>; 
                                  font-family: <?php echo $jubayer_theme['banner-title-typography']['font-family']; ?>; 
                                  google: <?php echo $jubayer_theme['banner-title-typography']['google']; ?>; 
                                  font-size: <?php echo $jubayer_theme['banner-title-typography']['font-size']; ?>; 
                                  line-height: <?php echo $jubayer_theme['banner-title-typography']['line-height']; ?>;
                                  
             
            "><?php echo $jubayer_theme['banner-title']; ?></h3>
            <p class="my-5" style="color: <?php echo $jubayer_theme['banner-description-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['banner-description-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['banner-description-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['banner-description-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['banner-description-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['banner-description-typography']['line-height']; ?>;             
            "><?php echo $jubayer_theme['banner-description']; ?></p>
            <footer><a class="btn" style="background-color: <?php echo $jubayer_theme['banner-button-background-color'];?>;
             Color: <?php echo $jubayer_theme['banner-button-typography']['color']; ?>;
             font-style: <?php echo $jubayer_theme['banner-button-typography']['font-style']; ?>;
             font-family: <?php echo $jubayer_theme['banner-button-typography']['font-family']; ?>;
             font-Subsets: <?php echo $jubayer_theme['banner-button-typography']['Font Subsets']; ?>;
             font-size: <?php echo $jubayer_theme['banner-button-typography']['font-size']; ?>;
             line-height: <?php echo $jubayer_theme['banner-button-typography']['line-height']; ?>; 
             padding: 20px 18px;"
                    href="<?php echo $jubayer_theme['banner-button-link'] ?>"><?php echo $jubayer_theme['banner-button']; ?></a>
            </footer>
        </article>
    </div>
</div>
<?php endif; ?>

<!-- Slider area ended -->
</div>
<!-- End Top Background Image Wrapper -->

<!-- introblocks area started -->
<div class="wrapper row3">
    <main class="hoc container clear">
        <!-- main body -->

        <section id="introblocks">
            <ul class="nospace group btmspace-80">


                <li class="one_third first">
                    <figure><a class="imgover" href="index.php"><img
                                src="<?php echo $jubayer_theme['first-into-images']['url']; ?>" alt=""></a>
                        <figcaption>
                            <h6 class="heading" style="color: <?php echo $jubayer_theme['first-into-title-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['first-into-title-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['first-into-title-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['first-into-title-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['first-into-title-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['first-into-title-typography']['line-height']; ?>;             
            "><?php echo $jubayer_theme['first-into-title']; ?></h6>
                            <div>
                                <p style="color: <?php echo $jubayer_theme['first-into-description-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['first-into-description-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['first-into-description-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['first-into-description-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['first-into-description-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['first-into-description-typography']['line-height']; ?>;             
            "><?php echo $jubayer_theme['first-into-description']; ?></p>
                            </div>
                        </figcaption>
                    </figure>
                </li>
                <li class="one_third">
                    <figure><a class="imgover" href="index.php"><img
                                src="<?php echo $jubayer_theme['second-into-images']['url']; ?>" alt=""></a>
                        <figcaption>
                            <h6 class="heading" style="color: <?php echo $jubayer_theme['second-into-title-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['second-into-title-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['second-into-title-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['second-into-title-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['second-into-title-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['second-into-title-typography']['line-height']; ?>;             
            "><?php echo $jubayer_theme['second-into-title']; ?></h6>
                            <div>
                                <p style="color: <?php echo $jubayer_theme['second-into-description-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['second-into-description-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['second-into-description-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['second-into-description-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['second-into-description-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['second-into-description-typography']['line-height']; ?>;             
            "><?php echo $jubayer_theme['second-into-description']; ?></p>
                            </div>
                        </figcaption>
                    </figure>
                </li>

                <li class="one_third">
                    <figure><a class="imgover" href="index.php"><img
                                src="<?php echo $jubayer_theme['third-into-images']['url']; ?>" alt=""></a>
                        <figcaption>
                            <h6 class="heading" style="color: <?php echo $jubayer_theme['third-into-title-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['third-into-title-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['third-into-title-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['third-into-title-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['third-into-title-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['third-into-title-typography']['line-height']; ?>;             
            "><?php echo $jubayer_theme['third-into-title']; ?></h6>
                            <div>
                                <p style="color: <?php echo $jubayer_theme['third-into-description-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['third-into-description-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['third-into-description-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['third-into-description-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['third-into-description-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['third-into-description-typography']['line-height']; ?>;             
            "><?php echo $jubayer_theme['third-into-description']; ?></p>
                            </div>
                        </figcaption>
                    </figure>
                </li>
            </ul>
        </section>
        <!-- ################################################################################################ -->
        <hr class="btmspace-80">
        <!-- ################################################################################################ -->
        <section class="group">
            <div class="one_half first"><img class="inspace-15 borderedbox"
                    src="<?php echo $jubayer_theme['Services-image']['url']; ?>" alt=""></div>
            <div class="one_half">
                <ul class="nospace group inspace-15">
                    <li class="one_half first btmspace-50">
                        <article>
                            <h6 class="heading" style="color: <?php echo $jubayer_theme['frist-srrvice-title-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['frist-srrvice-title-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['frist-srrvice-title-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['frist-srrvice-title-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['frist-srrvice-title-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['frist-srrvice-title-typography']['line-height']; ?>;           
            "><a href="#"><?php echo $jubayer_theme['frist-srrvice-title']; ?></a></h6>
                            <p class="nospace" style="color: <?php echo $jubayer_theme['frist-srrvice-description-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['frist-srrvice-description-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['frist-srrvice-description-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['frist-srrvice-description-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['frist-srrvice-description-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['frist-srrvice-description-typography']['line-height']; ?>;             
            "><?php echo $jubayer_theme['frist-srrvice-description']; ?> &hellip;</p>
                        </article>
                    </li>
                    <li class="one_half btmspace-50">
                        <article>
                            <h6 class="heading" style="color: <?php echo $jubayer_theme['second-srrvice-title-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['second-srrvice-title-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['second-srrvice-title-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['second-srrvice-title-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['second-srrvice-title-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['second-srrvice-title-typography']['line-height']; ?>;           
            "><a href="#"><?php echo $jubayer_theme['second-srrvice-title']; ?></a></h6>
                            <p class="nospace" style="color: <?php echo $jubayer_theme['second-srrvice-description-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['second-srrvice-description-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['second-srrvice-description-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['second-srrvice-description-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['second-srrvice-description-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['second-srrvice-description-typography']['line-height']; ?>;             
            "><?php echo $jubayer_theme['second-srrvice-description']; ?> &hellip;</p>
                        </article>
                    </li>
                    <li class="one_half first">
                        <article>
                            <h6 class="heading" style="color: <?php echo $jubayer_theme['third-srrvice-title-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['third-srrvice-title-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['third-srrvice-title-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['third-srrvice-title-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['third-srrvice-title-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['third-srrvice-title-typography']['line-height']; ?>;           
            "><a href="#"><?php echo $jubayer_theme['third-srrvice-title']; ?></a></h6>
                            <p class="nospace" style="color: <?php echo $jubayer_theme['third-srrvice-description-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['third-srrvice-description-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['third-srrvice-description-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['third-srrvice-description-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['third-srrvice-description-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['third-srrvice-description-typography']['line-height']; ?>;             
            "><?php echo $jubayer_theme['third-srrvice-description']; ?> &hellip;</p>
                        </article>
                    </li>
                    <li class="one_half">
                        <article>
                            <h6 class="heading" style="color: <?php echo $jubayer_theme['forth-srrvice-title-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['forth-srrvice-title-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['forth-srrvice-title-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['forth-srrvice-title-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['forth-srrvice-title-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['forth-srrvice-title-typography']['line-height']; ?>;           
            "><a href="#"><?php echo $jubayer_theme['forth-srrvice-title']; ?></a></h6>
                            <p class="nospace" style="color: <?php echo $jubayer_theme['forth-srrvice-description-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['forth-srrvice-description-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['forth-srrvice-description-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['forth-srrvice-description-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['forth-srrvice-description-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['forth-srrvice-description-typography']['line-height']; ?>;             
            "><?php echo $jubayer_theme['forth-srrvice-description']; ?> &hellip;</p>
                        </article>
                    </li>
                </ul>
            </div>
        </section>
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
    </main>
</div>
<!-- introblocks area ended -->


<div class="bgded overlay" style="
background-color: <?php echo $jubayer_theme['portfolio-background']['background-color']; ?>;
background-image: url(<?php echo $jubayer_theme['portfolio-background']['background-image'] ?>);
background-repeat: <?php echo $jubayer_theme['portfolio-background']['background-repeat']; ?>;
background-position: <?php echo $jubayer_theme['portfolio-background']['background-position']; ?>;
background-size: <?php echo $jubayer_theme['portfolio-background']['background-size']; ?>;
background-attachment: <?php echo $jubayer_theme['portfolio-background']['background-attachment']; ?>;
">
    <figure class="hoc container clear imgroup">
        <!-- ################################################################################################ -->
        <figcaption class="sectiontitle">
            <p class="nospace font-xs mb-3" style="color: <?php echo $jubayer_theme['Portfolio-subtitle-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['Portfolio-subtitle-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['Portfolio-subtitle-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['Portfolio-subtitle-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['Portfolio-subtitle-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['Portfolio-subtitle-typography']['line-height']; ?>;             
            "><?php echo $jubayer_theme['Portfolio-subtitle']; ?></p>
            <p class="heading underline font-x2" style="color: <?php echo $jubayer_theme['portfolio-title-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['portfolio-title-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['portfolio-title-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['portfolio-title-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['portfolio-title-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['portfolio-title-typography']['line-height']; ?>;             
            "><?php echo $jubayer_theme['portfolio-title']; ?></p>
        </figcaption>
        <ul class="nospace group">

            <?php
				$imagespost = new WP_Query(array(
				'post_type' => 'cat-portfolio',
				'posts_per_page' => 6,
					));

                    if($imagespost->have_posts()):
                        while($imagespost->have_posts()): $imagespost->the_post(); ?>

            <li class="one_third"><a class="imgover" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></li>

            <?php endwhile; ?>
            <?php else: ?>
                <h2>OOPS! No Portfolio Items</h2>
            <?php endif; ?>


        </ul>
        <!-- ################################################################################################ -->
    </figure>
    <!-- ################################################################################################ -->
    </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
    <div class="hoc container clear">
        <!-- ################################################################################################ -->
        <div class="sectiontitle">
            <p class="nospace font-xs py-3" style="color: <?php echo $jubayer_theme['customar-testimonial-subtitle-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['customar-testimonial-subtitle-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['customar-testimonial-subtitle-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['customar-testimonial-subtitle-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['customar-testimonial-subtitle-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['customar-testimonial-subtitle-typography']['line-height']; ?>;             
            "><?php echo $jubayer_theme['customar-testimonial-subtitle']; ?></p>
            <p class="heading underline font-x2" style="color: <?php echo $jubayer_theme['customar-testimonial-title-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['customar-testimonial-title-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['customar-testimonial-title-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['customar-testimonial-title-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['customar-testimonial-title-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['customar-testimonial-title-typography']['line-height']; ?>;             
            "><?php echo $jubayer_theme['customar-testimonial-title']; ?></p>
        </div>
        <ul class="nospace group team">
            <li class="one_quarter first">
                <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
                    <figcaption><strong>A. Doe</strong> <em>Job Title Here</em></figcaption>
                </figure>
            </li>
            <li class="one_quarter">
                <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
                    <figcaption><strong>B. Doe</strong> <em>Job Title Here</em></figcaption>
                </figure>
            </li>
            <li class="one_quarter">
                <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
                    <figcaption><strong>C. Doe</strong> <em>Job Title Here</em></figcaption>
                </figure>
            </li>
            <li class="one_quarter">
                <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
                    <figcaption><strong>D. Doe</strong> <em>Job Title Here</em></figcaption>
                </figure>
            </li>
        </ul>
        <!-- ################################################################################################ -->
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
 <!-- <div class="wrapper row3">
    <figure class="hoc container clear clients">

        <figcaption class="sectiontitle">
            <p class="nospace font-xs py-3" style="color: <?php echo $jubayer_theme['ponser-subtitle-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['ponser-subtitle-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['ponser-subtitle-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['ponser-subtitle-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['ponser-subtitle-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['ponser-subtitle-typography']['line-height']; ?>;             
            "><?php echo $jubayer_theme['ponser-subtitle']; ?></p>
            <p class="heading underline font-x2" style="color: <?php echo $jubayer_theme['ponser-title-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['ponser-title-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['ponser-title-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['ponser-title-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['ponser-title-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['ponser-title-typography']['line-height']; ?>;             
            "><?php echo $jubayer_theme['ponser-title']; ?></p>
        </figcaption>
        <ul class="nospace group">
            <li class="one_quarter first"><a class="imgover" href="#"><img
                        src="<?php echo $jubayer_theme['ponser-image1']['url'];?>" alt=""></a>
            </li>
            <li class="one_quarter"><a class="imgover" href="#"><img
                        src="<?php echo $jubayer_theme['ponser-image2']['url'];?>" alt=""></a></li>
            <li class="one_quarter"><a class="imgover" href="#"><img
                        src="<?php echo $jubayer_theme['ponser-image3']['url'];?>" alt=""></a></li>
            <li class="one_quarter"><a class="imgover" href="#"><img
                        src="<?php echo $jubayer_theme['ponser-image4']['url'];?>" alt=""></a></li>
            <li class="one_quarter first"><a class="imgover" href="#"><img
                        src="<?php echo $jubayer_theme['ponser-image5']['url'];?>" alt=""></a>
            </li>
            <li class="one_quarter"><a class="imgover" href="#"><img
                        src="<?php echo $jubayer_theme['ponser-image6']['url'];?>" alt=""></a></li>
            <li class="one_quarter"><a class="imgover" href="#"><img
                        src="<?php echo $jubayer_theme['ponser-image7']['url'];?>" alt=""></a></li>
            <li class="one_quarter"><a class="imgover" href="#"><img
                        src="<?php echo $jubayer_theme['ponser-image8']['url'];?>" alt=""></a></li>
        </ul>
   
    </figure>
</div>  -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
    <section id="testimonials" class="hoc container clear">
        <!-- ################################################################################################ -->
        <div class="sectiontitle">
            <p class="nospace font-xs py-3" style="color: <?php echo $jubayer_theme['team-mumber-subtitle-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['team-mumber-subtitle-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['team-mumber-subtitle-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['team-mumber-subtitle-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['team-mumber-subtitle-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['team-mumber-subtitle-typography']['line-height']; ?>;             
            "><?php echo $jubayer_theme['team-mumber-subtitle']; ?></p>
            <p class="heading underline font-x2" style="color: <?php echo $jubayer_theme['team-mumber-title-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['team-mumber-title-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['team-mumber-title-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['team-mumber-title-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['team-mumber-title-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['team-mumber-title-typography']['line-height']; ?>;             
            "><?php echo $jubayer_theme['team-mumber-title']; ?></p>
        </div>
        <article class="btmspace-80">
            <blockquote>Pellentesque ipsum pede malesuada non vulputate at euismod et lorem nullam tincidunt urna eget
                nisl eleifend vulputate sed vitae risus sed enim fermentum venenatis sed augue eros tempor sit amet.
            </blockquote>
            <figure class="clear"><img src="images/demo/60x60.png" alt="">
                <figcaption>
                    <h6 class="heading">John Doe</h6>
                    <em>CEO</em>
                </figcaption>
            </figure>
        </article>
        <footer class="center"><a class="btn" href="#"><?php echo $jubayer_theme['team-mumber-button']; ?></a></footer>
        <!-- ################################################################################################ -->
    </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
    <section class="hoc container clear">
        <!-- ################################################################################################ -->
        <div class="sectiontitle">
            <p class="nospace font-xs py-3" style="color: <?php echo $jubayer_theme['landing-blog-subtitle-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['landing-blog-subtitle-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['landing-blog-subtitle-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['landing-blog-subtitle-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['landing-blog-subtitle-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['landing-blog-subtitle-typography']['line-height']; ?>;             
            "><?php echo $jubayer_theme['landing-blog-subtitle']; ?></p>
            <p class="heading underline font-x2" style="color: <?php echo $jubayer_theme['landing-blog-title-typography']['color']; ?>; 
                    font-style: <?php echo $jubayer_theme['landing-blog-title-typography']['font-style']; ?>; 
                    font-family: <?php echo $jubayer_theme['landing-blog-title-typography']['font-family']; ?>; 
                    google: <?php echo $jubayer_theme['landing-blog-title-typography']['google']; ?>; 
                    font-size: <?php echo $jubayer_theme['landing-blog-title-typography']['font-size']; ?>; 
                    line-height: <?php echo $jubayer_theme['landing-blog-title-typography']['line-height']; ?>;             
            "><?php echo $jubayer_theme['landing-blog-title']; ?></p>
        </div>
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