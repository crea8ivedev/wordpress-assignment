<?php
/* Template Name: Homepage Template */
get_header();
?>
<section class="hero-banner-wrapper">
    <div class="hero-banner">
        <div class="container-custom">
            <div class="hero-banner__inner">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-12">
                        <div class="hero-banner__slider">
                            <div class="hero-banner__slider--main hero-banner__slider--loop">
                                <div class="swiper-wrapper">
                                    <?php 
									$slider = get_field('slider', 'option');
									foreach($slider as $slide){ ?>
                                    <div class="swiper-slide">
                                        <div class="hero-banner__slider--image">
                                            <img src="<?php echo $slide['slider_image']['url']; ?>" alt="slider-img">
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="hero-banner__content">
                            <div class="hero-banner__content--inner">
                                <div class="hero-banner__content--box">
                                    <?php $content_page_id = get_field('select_content_page', 'option');
							  		$post = get_post( $content_page_id ); ?>
                                    <div class="hero-banner__content--title wow fadeInUp" data-wow-delay="0.2s">
                                        <h4><?php echo $post->post_title; ?></h4>
                                    </div>
                                    <div class="hero-banner__content--desc wow fadeInUp" data-wow-delay="0.2s">
                                        <img src="<?php echo get_the_post_thumbnail_url( $post->ID ,'full'); ?>"
                                            alt="welcomenote-default-user">
                                        <p><?php echo $post->post_content; ?></p>
                                        <a href="<?php echo $post->guid; ?>">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Thumb Slider Start -->
<section class="thumb-slider-wrapper">
    <div class="thumb-slider">
        <div class="container-custom wow fadeInUp" data-wow-delay="0.2s">
            <div class="thumb-slider__grid">
                <!-- Swiper Arrow -->
                <div class="gold-swiper__arrow gold-swiper__arrow--prev">
                    <div class="swiper-gold-arrow">
                        <div class="gold-swiper-button-prev"><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/images/gold-left-arrow.png"
                                alt="arrow"></div>
                    </div>
                </div>
                <div class="thumb-slider__inner">
                    <div class="thumb-slider__main thumb-slider__main-loop">
                        <div class="swiper-wrapper">
                            <?php $video_slider = get_field('video_slider', 'option');
						foreach($video_slider as $slide){ ?>
                            <div class="swiper-slide">
                                <div class="thumb-slider__image">
                                    <div class="thumb-slider__image--inner">
                                        <img src="<?php echo $slide['video_thumbnail']['url']; ?>" alt="thumb-image">
                                        <div class="thumb-slider__playicon">
                                            <a href="<?php echo $slide['video_link']['url']; ?>" data-lity="">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube-play-icon.png"
                                                    alt="youtube-play-icon">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- Swiper Arrow -->
                <div class="gold-swiper__arrow gold-swiper__arrow--next">
                    <div class="swiper-gold-arrow">
                        <div class="gold-swiper-button-next"><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/images/gold-right-arrow.png"
                                alt="arrow"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Thumb Slider End -->


<!-- Column-Part Start -->
<section class="column-part-wrapper">
    <div class="column-part wow fadeInUp" data-wow-delay="0.2s">
        <div class="container-custom">
            <div class="column-part__inner">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-12">
                        <div class="column-part__left">
                            <div class="column-part__left--main">
                                <div class="post-grid wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="post-grid__inner">
                                        <div class="post-grid__title title-black-medium wow fadeInUp"
                                            data-wow-delay="0.2s">
                                            <h4><?php echo get_field('exhibition_heading', 'option'); ?></h4>
                                        </div>
                                        <div class="post-grid__gridbox">
                                            <div class="row">
                                                <?php
												$args = array(  
													'post_type' => 'exhibition',
													'post_status' => 'publish',
													'posts_per_page' => '-1', 
													'orderby' => 'date', 
													'order' => 'DESC', 
												);
												$loop = new WP_Query( $args ); 
												while ( $loop->have_posts() ) : $loop->the_post();

												$fea_img = get_stylesheet_directory_uri().'/images/logo.png';
												if(get_the_post_thumbnail_url()){
													$fea_img = get_the_post_thumbnail_url();
												}
												?>
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div class="post-grid__items">
                                                        <div class="post-grid__image">
                                                            <a href="<?php echo get_the_permalink(); ?>">
                                                                <img src="<?php echo $fea_img; ?>"
                                                                    alt="<?php echo get_the_title(); ?>">
                                                            </a>
                                                        </div>
                                                        <div class="post-grid__title">
                                                            <a
                                                                href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endwhile; wp_reset_postdata(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-grid wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-6 col-12">
                                            <div class="widget-grid__tweets">
                                                <div class="news-box__title title-black-medium wow fadeInUp"
                                                    data-wow-delay="0.2s">
                                                    <h4>Latest Tweets</h4>
                                                </div>
                                                <div class="widget-grid__tweets--main">
                                                    <p>Please add Tweeter Tweets here...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-12">
                                            <div class="widget-grid__facebook">
                                                <div class="news-box__title title-black-medium">
                                                    <h4>Follow us on Facebook</h4>
                                                </div>
                                                <div class="widget-grid__facebook--main">
                                                    <p>Please add Facebook Like box here...</p>
													<?php dynamic_sidebar( 'follow-fb' ); ?>
													
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="column-part__right">
                            <div class="column-part__right--main">
                                <div class="news-box">
                                    <div class="news-box__sticky-post wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="news-box__title title-black-medium wow fadeInUp"
                                            data-wow-delay="0.2s">
                                            <h4><?php echo get_field('sidebar_news_heading', 'option'); ?></h4>
                                        </div>
                                        <div class="news-box__sticky-post-inner">
                                            <?php
											$args = array(  
												'post_type' => 'post',
												'post_status' => 'publish',
												'posts_per_page' => '1', 
												'orderby'   => 'rand',
											);
											$loop = new WP_Query( $args ); 
											while ( $loop->have_posts() ) : $loop->the_post();
												$fea_img = get_stylesheet_directory_uri().'/images/logo.png';
												if(get_the_post_thumbnail_url()){
													$fea_img = get_the_post_thumbnail_url();
												}
											?>
                                            <div class="news-box__sticky-post-image">
                                                <img src="<?php echo $fea_img; ?>" alt="news-default">
                                            </div>
                                            <div class="news-box__sticky-post-details">
                                                <div class="news-box__sticky-post-title">
                                                    <h6><a
                                                            href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                                    </h6>
                                                </div>
                                                <div class="news-box__sticky-post-date">
                                                    <p><span><?php echo get_the_date(); ?></span></p>
                                                </div>
                                            </div>
                                            <?php endwhile; wp_reset_postdata(); ?>
                                        </div>
                                    </div>
                                    <div class="news-box__slider wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="news-box__slider--inner news-box__slider--loop">
                                            <div class="swiper-wrapper">
                                                <?php
												$args = array(  
													'post_type' => 'post',
													'post_status' => 'publish',
													'posts_per_page' => '-1', 
													'orderby' => 'date', 
													'order' => 'DESC', 
													
												);
												$loop = new WP_Query( $args ); 
												$counter=0;
												$totalNumber = $loop->found_posts; 												
												while ( $loop->have_posts() ) : $loop->the_post();
													$title = get_the_title();
													if ($counter % 6 == 0) {
														echo '<div class="swiper-slide">
														<div class="news-box__slider--item">
															<ul>';
													}
													echo '<li><a href="#">'.$title.'</a></li>';
													if ($counter % 6 == (6-1) || $counter == $totalNumber-1) {
														echo '</ul></div>  
														</div>';
													}
												++$counter;
												endwhile; wp_reset_postdata(); ?>
                                            </div>
                                        </div>
                                        <div class="news-box__slider--bottom">
                                            <div class="news-box__slider--bottom-arrow">
                                                <div class="news-box-swiper__arrow news-box-swiper__arrow--prev">
                                                    <div class="swiper-gold-arrow">
                                                        <div class="news-gold-swiper-button-prev news-box-arrow-items">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/yelllow-left-Arrow.png"
                                                                alt="arrow"></div>
                                                    </div>
                                                </div>
                                                <div class="news-box-swiper__arrow news-box-swiper__arrow--next">
                                                    <div class="swiper-gold-arrow">
                                                        <div class="news-gold-swiper-button-next news-box-arrow-items">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/yelllow-right-Arrow.png"
                                                                alt="arrow"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="news-box__slider--bottom-btn">
                                                <a href="#">More News</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-box__weather wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="news-box__weather--inner">
                                            <div class="news-box__title title-black-medium wow fadeInUp"
                                                data-wow-delay="0.2s">
                                                <h4>Weather</h4>
                                            </div>
                                            <div class="news-box__weather--main"
                                                style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/weather-forecast-screenshot.jpg');">
                                                <!-- <p>Please add weather widget here...</p>   -->
                                                <?php dynamic_sidebar( 'weather' ); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-box__date-time wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="news-box__date-time-inner">
                                            <div class="news-box__title title-black-medium wow fadeInUp"
                                                data-wow-delay="0.2s">
                                                <h4>Date and Time</h4>
                                            </div>
                                            <div class="news-box__date-time-main">
                                                <div class="news-box__date-time-main-container">
                                                    <div class="display-date">
                                                        <span id="day">day</span>,
                                                        <span id="daynum">00</span>
                                                        <span id="month">month</span>
                                                        <span id="year">0000</span>
                                                    </div>
                                                    <div class="display-time"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Column-Part End -->

<!-- Partner Slider Start -->
<section class="partner-slider-wrapper">
    <div class="partner-slider wow fadeInUp" data-wow-delay="0.2s">
        <div class="container-custom">
            <div class="partner-slider__title title-black-medium">
                <h4><?php echo get_field('partner_heading', 'option'); ?></h4>
            </div>
        </div>
        <div class="container-custom">
            <div class="partner-slider__main">
                <div class="partner-slider__grid">
                    <!-- Swiper Arrow -->
                    <div class="gold-swiper__arrow gold-swiper__arrow--prev">
                        <div class="swiper-gold-arrow">
                            <div class="partner-gold-swiper-button-prev"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/gold-left-arrow.png"
                                    alt="arrow"></div>
                        </div>
                    </div>
                    <div class="partner-slider__inner">
                        <div class="thumb-slider__main partner-slider__main-loop">
                            <div class="swiper-wrapper">
                                <?php
									$args = array(  
									'post_type' => 'partner',
									'post_status' => 'publish',
									'posts_per_page' => '-1', 
									'orderby'   => 'asc',
								);
								$loop = new WP_Query( $args ); 
								while ( $loop->have_posts() ) : $loop->the_post();					    
									$fea_img = get_the_post_thumbnail_url();
								?>
                                <div class="swiper-slide">
                                    <div class="partner-slider__image">
                                        <div class="partner-slider__image--inner">
                                            <img src="<?php echo $fea_img; ?>" alt="partner">
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
                    <!-- Swiper Arrow -->
                    <div class="gold-swiper__arrow gold-swiper__arrow--next">
                        <div class="swiper-gold-arrow">
                            <div class="partner-gold-swiper-button-next"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/gold-right-arrow.png"
                                    alt="arrow"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Partner Slider End -->

<?php 
get_footer();