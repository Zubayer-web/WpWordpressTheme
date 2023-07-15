<?php global $jubayer_theme; ?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
   
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php wp_head(); ?>
    <style>
       .overlay::after {
            color: inherit;
            background-color: <?php echo $jubayer_theme['banner-background-opacity']['color']; ?>;
            opacity: <?php echo $jubayer_theme['banner-background-opacity']['alpha']; ?>;
            z-index: -1;
        }
        .imgover:hover::before {
            background-color: <?php echo $jubayer_theme['first-into-opacity']['color'];?>;
            opacity: <?php echo $jubayer_theme['first-into-opacity']['alpha'];?>
        }
        .chw{
            max-width: <?php echo $jubayer_theme['opt_dimensions']['width'];?>;
            height: <?php echo $jubayer_theme['opt_dimensions']['height'];?>;
        }
        .spacing_custom:first-child{            
            margin-left: 0;
            clear: left;
        }
      
    </style>
</head>

<body id="top">
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- top bar area started -->
    <div class="wrapper" style="background-color: <?php echo $jubayer_theme['Topber-background-color']; ?>;">
        <div id="topbar" class="hoc clear" style="color: <?php echo $jubayer_theme['Topber-typography']['color']; ?>; 
               font-style: <?php echo $jubayer_theme['Topber-typography']['font-style']; ?>; 
               font-family: <?php echo $jubayer_theme['Topber-typography']['font-family']; ?>; 
               google: <?php echo $jubayer_theme['Topber-typography']['google']; ?>; 
               font-size: <?php echo $jubayer_theme['Topber-typography']['font-size']; ?>; 
               line-height: <?php echo $jubayer_theme['Topber-typography']['line-height']; ?>; 
        ">
            <div class="topber-area">
                <div class="topbar-frist">
                    <div class="">
                        <!-- ################################################################################################ -->
                        <ul class="nospace">
                            <li><i class="fas fa-phone rgtspace-5"></i> <?php echo $jubayer_theme['header-phone']; ?>
                            </li>
                            <li><i class="far fa-envelope rgtspace-5"></i><?php echo $jubayer_theme['header-email']; ?>
                            </li>
                        </ul>
                        <!-- ################################################################################################ -->
                    </div>

                </div>
                <div class="topber-meddile">
                    <nav id="mainav" class="clear">
                        <?php 
                            wp_nav_menu(array(
                                'theme_location' =>'top-Menu',  
                            ));  
                          ?>
                    </nav>
                </div>
                <?php if($jubayer_theme['Serach'] == 1){
                    echo '<div class="topber-last">
                    <div class="">                        
                        <ul class="nospace">                         
                            <li id="searchform">
                            <div>
                            <form action="'.home_url( "/" ).'" method="get">
                                <fieldset>
                                    <legend>Quick Search:</legend>
                                    <input type="search" name="s" value="'.get_search_query().'"
                                        placeholder="'.esc_attr_x( "search...", "placeholder", "wp_theme" ).'">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </fieldset>
                            </form>
                        </div>
                            </li>
                        </ul>
                    </div>
                </div>';
                } ?>   
                
            </div>
        </div>
    </div>


    <div class="bgded" style="background-image:url('images/demo/backgrounds/01.png');">
        <div class="bgded">

            <div class="wrapper"
                style="background-color: <?php echo $jubayer_theme['main-header-background-color']; ?>">
                <header id="header" class="hoc clear">
                    <div id="logo" class="fl_left">
                        <!-- ################################################################################################ -->
                        <?php if($jubayer_theme['logo-images']['url']):?>
                        <a href="index.php"><img src="<?php echo $jubayer_theme['logo-images']['url']; ?>"
                                alt="Logo"></a>
                        <?php endif; ?>

                        <h1><a href="index.html"><?php echo $jubayer_theme['logo-text']; ?></a></h1>
                        <!-- ################################################################################################ -->
                    </div>
                    <nav id="mainav" class="fl_right" style="color: <?php echo $jubayer_theme['main-header-typography']['color']; ?>; 
                            font-style: <?php echo $jubayer_theme['main-header-typography']['font-style']; ?>; 
                            font-family: <?php echo $jubayer_theme['main-header-typography']['font-family']; ?>; 
                            google: <?php echo $jubayer_theme['main-header-typography']['google']; ?>; 
                            font-size: <?php echo $jubayer_theme['main-header-typography']['font-size']; ?>; 
                            line-height: <?php echo $jubayer_theme['main-header-typography']['line-height']; ?>; ">

                        <?php 
                        wp_nav_menu(array(
                            'theme_location'=>'header_menu',  
                        ));  
                        ?>

                    </nav>
                </header>
            </div>