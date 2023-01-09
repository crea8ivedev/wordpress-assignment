<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RTPanel
 */

?>

<!-- footer start -->
<footer>
    <div class="footer">
        <div class="footer__inner">
            <div class="footer__top">
                <div class="container-custom">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-12">
                            <div class="footer__navmenu">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="footer__navmenu--items wow fadeInUp" data-wow-delay="0.2s">
                                            <?php dynamic_sidebar( 'footer-1' ); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="footer__navmenu--items wow fadeInUp" data-wow-delay="0.2s">
                                            <?php dynamic_sidebar( 'footer-2' ); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="footer__copyrights wow fadeInUp" data-wow-delay="0.2s">
                                <div class="footer__copyrights--inner">
                                    <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                                    if(!empty($custom_logo_id)){ 
                                        $image =  wp_get_attachment_image_src( $custom_logo_id , 'full' )  ;
                                        $img_url = $image[0];                              
                                    }
                                    else{
                                        $img_url = get_stylesheet_directory_uri().'/images/logo.png';
                                    }?>
                                    <div class="footer__copyrights--logo">
                                        <a href="<?php echo site_url(); ?>">
                                            <img src="<?php echo $img_url; ?>" alt="logo" />
                                        </a>
                                    </div>
                                    <div class="footer__copyrights--text">
                                        <p>Copyrigths © <?php echo date('Y'); ?>. All rights reserved. </p>
                                        <ul>
                                            <li>
                                                <?php echo do_shortcode('[rt-link url="#" title="Terms of Use"]'); ?>
                                            </li>
                                            <li>
                                                <?php echo do_shortcode('[rt-link url="#" title="Privacy Policy"]'); ?>
                                            </li>
                                            <li>
                                                <?php echo do_shortcode('[rt-link url="#" title="Designed by rtCamp"]'); ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="container-custom">
                    <div class="footer__noticebar">
                        <div class="footer__noticebar--inner wow fadeInUp" data-wow-delay="0.2s">
                            <p><?php echo get_field('cookie_text', 'option'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

<!-- Jquery Library File -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.6.1.min.js"></script>
<!-- Bootstrap js file -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
<!-- Swiper js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
<!-- Fancybox js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.fancybox.min.js"></script>
<!-- Wow js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/wow.min.js"></script>
<!-- Lity js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js"
    integrity="sha512-UU0D/t+4/SgJpOeBYkY+lG16MaNF8aqmermRIz8dlmQhOlBnw6iQrnt4Ijty513WB3w+q4JO75IX03lDj6qQNA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Main js file -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v15.0"
    nonce="wSwW5zvg"></script>

</html>