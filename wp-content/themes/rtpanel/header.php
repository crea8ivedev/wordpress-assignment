<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RTPanel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

    <!-- Bootstrap css -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" media="screen" rel="stylesheet">
    <!-- Font CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/stylesheet.css">
    <!--font Awesome css -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/all.min.css">
    <!-- swiper css -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/swiper-bundle.min.css">
    <!-- Fancybox css -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery.fancybox.css">
    <!-- Wow CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.css">
    <!-- Lity CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.css"
        integrity="sha512-NDcw4w5Uk5nra1mdgmYYbghnm2azNRbxeI63fd3Zw72aYzFYdBGgODILLl1tHZezbC8Kep/Ep/civILr5nd1Qw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Main custom css -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" media="screen" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" media="screen" rel="stylesheet">

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="wrapper">
        <!-- Header Start -->
        <header>
            <div class="header">
                <div class="container-custom">
                    <div class="header__inner">
                        <div class="header__left">                            
							<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
							if(!empty($custom_logo_id)){ 
                                $image =  wp_get_attachment_image_src( $custom_logo_id , 'full' )  ;
                                $img_url = $image[0];                              
                            }
                            else{
                                $img_url = get_stylesheet_directory_uri().'/images/logo.png';
                            }?>
                            <div class="header__logo">
                                <a class="header__logo--img" href="<?php echo site_url(); ?>">
                                    <img src="<?php echo $img_url; ?>" alt="logo" />
                                </a>
                            </div>							
                        </div>
                        <div class="header__right">
                            <div class="header__menu">
                                <div>
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-2',
									)
								);
								?>                                    
                                </div>
                            </div>
                            <div class="header__search">
                                <div class="header__search--inner">
                                    <form action="https://www.google.com/search" target="_blank">
                                        <input name="q" placeholder="Site Search">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="toggle-menu">
                            <i class="far fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-navbar">
                <div class="header-navbar__inner">
                    <div class="container-custom">
                        <div class="header-navbar__menu">
                            <?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
								)
							);
							?>                            
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Mobile Menu start -->
        <div class="sidebar">
            <div class="sidebar__inner">
                <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                if(!empty($custom_logo_id)){ 
                    $image =  wp_get_attachment_image_src( $custom_logo_id , 'full' )  ;
                    $img_url = $image[0];                              
                }
                else{
                    $img_url = get_stylesheet_directory_uri().'/images/logo.png';
                }?>
                <div class="sidebar__logo">
                    <a href=""><img src="<?php echo $img_url; ?>" alt="logo"></a>
                </div>
                <div class="sidebar__menu">
                    <div class="sidebar__menu--inner">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-mobile',
							)
						);
						?>                        
                    </div>
                </div>
                <div class="sidebar__search">
                    <div class="sidebar__search--inner">
                        <form action="https://www.google.com/search" target="_blank">
                            <input name="q" placeholder="Site Search">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="close-sidebar"></div>
        <!-- Mobile Menu end -->