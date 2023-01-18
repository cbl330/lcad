<?php

// // //* Add landing body class to the head
// // add_filter( 'body_class', 'minimum_add_body_class' );
// // function minimum_add_body_class( $classes ) {

// // 	$classes[] = 'minimum-landing';
// // 	return $classes;

// // }

// //* Force full width content layout
// add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

// //* Remove navigation
// remove_action( 'genesis_after_header', 'genesis_do_nav', 15 );
// remove_action( 'genesis_footer', 'genesis_do_subnav', 7 );

// //* Remove site footer widgets
// remove_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );

// //* Remove site footer elements
// // remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
// // remove_action( 'genesis_footer', 'genesis_do_footer' );
// // remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

?>

<?php
//* Run the Genesis loop
// genesis();
?>


<?php
/* 
Template Name: Template Name Here
*/

//custom hooks below here...

// Just an example.
remove_action('genesis_loop', 'genesis_do_loop');
/**
 * Example function that replaces the default loop with a custom loop querying 'PostType' CPT.
 * Remove this function (along with the remove action hook) to show default page content.
 * Or feel free to update the $args to make it work for you.
*/
add_action('genesis_loop', 'gt_custom_loop');
function gt_custom_loop() { ?>

<!-- ========================================================================= -->
<!-- START HERO SECTION -->
<!-- ========================================================================= -->

<section id="home-hero" class="container-fluid">
    <div class="hero-container row align-items-center">

        <!-- Start Content Cell -->
        <?php while (have_rows('hero_content')) : the_row();?>
            <div class="content-cell">
                <!-- Title Wrap -->
                <div class="hero-title-wrap title-wrap">
                    <?php if (get_sub_field('hero_header')): ?>
                        <?php the_sub_field('hero_header') ?>
                    <?php endif; ?>
                </div>

                <!-- Button Wrap -->
                <?php if (get_sub_field('button_text') && get_sub_field('button_link')): ?>
                    <div class="btn-wrap">
                        <a class="hero-btn btn btn-outline-light" href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
        <!-- End Content Cell -->

        <!-- Start Slider Cell -->
        <?php if( have_rows('hero_slider') ): ?>
            <div class="slider-cell hero-slider">
                <?php while (have_rows('hero_slider')) : the_row();?>
                
                        <!-- Start Slide -->
                        <div class="hero-slide slide container-fluid">
                            <!-- Slide Image -->
                            <div class="slide-image-wrap row">
                                <?php $image = get_sub_field('slide_image'); ?>
                                <img class="slide-image" src="<?php echo $image['sizes']['home-hero-slide']; ?>">
                            </div>

                            <!-- Slide Caption -->
                            <?php if (get_sub_field('slide_caption')): ?>
                                <div class="slide-caption row">
                                    <?php the_sub_field('slide_caption') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- End Slide -->

                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <!-- End Slider Cell -->

    </div>
</section>

<!-- ========================================================================= -->
<!-- END HERO SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START EXPERIENCE SECTION -->
<!-- ========================================================================= -->

<?php //while (have_rows('experience_slider')) : the_row();?>
<section id="experience" class="container-fluid">
    <!-- <div class="experience-container"> -->

        <!-- Start Slider Cell -->
        <?php if( have_rows('experience_slider') ): ?>
            <div class="slider-cell experience-slider slider">
                <?php while (have_rows('experience_slider')) : the_row();?>
                
                        <!-- Start Slide -->
                        <div class="experience-slide slide container row align-items-center">
                            <div class="row align-items-center">

                                <!-- Start Content Wrap -->
                                <?php while (have_rows('experience_content')) : the_row();?>
                                    <div class="slide-content content-wrap col-md-6 col-xs-12">
                                        <!-- Slide Tag -->
                                        <?php if (get_sub_field('experience_tag')): ?>
                                            <div class="slide-tag-wrap">
                                                <h4 class="slide-tag lcad-tag"><?php the_sub_field('experience_tag') ?></h4>
                                            </div>
                                        <?php endif; ?>
                                        <!-- Slide Title -->
                                        <?php if (get_sub_field('experience_header')): ?>
                                            <div class="slide-title-wrap">
                                                <?php the_sub_field('experience_header') ?>
                                            </div>
                                        <?php endif; ?>
                                        <!-- Slide Content -->
                                        <?php if (get_sub_field('experience_paragraph')): ?>
                                            <div>
                                                <?php the_sub_field('experience_paragraph') ?>
                                            </div>
                                        <?php endif; ?>
                                        <!-- Slide Button -->
                                        <!-- <div class="slide-btn-wrap">
                                            <a type="button" class="next-btn">Next<span class="dashicons dashicons-arrow-right-alt"></span></a>
                                        </div> -->
                                    </div>
                                <?php endwhile; ?>
                                <!-- End Content Wrap -->

                                <!-- Start Image Wrap -->
                                <div class="slide-image-wrap col-md-6 col-xs-12">
                                    <?php $image = get_sub_field('experience_image'); ?>
                                    <img class="slide-image" src="<?php echo $image['sizes']['home-experience-slide']; ?>">
                                </div>
                                <!-- End Image Wrap -->

                            </div>
                        </div>
                        <!-- End Slide -->

                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <!-- End Slider Cell -->

    <!-- </div> -->
</section>
<?php //endwhile ?>

<!-- ========================================================================= -->
<!-- END EXPERIENCE SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START INDUSTRY PRO SECTION -->
<!-- ========================================================================= -->

<section id="industry-pro" class="container-fluid bg-light">
    <div class="industry-pro-container row">

            <!-- Start Left Cell -->
            <?php while (have_rows('content_left')) : the_row();?>
                <div class="left-cell col-md-7 col-xs-12">
                    <div class="left-content-container">
                        <!-- Section Tag -->
                        <?php if (get_sub_field('section_tag')): ?>
                            <div class="lcad-tag-wrap">
                                <h4 class="lcad-tag lcad-tag-dk industry-pro-tag"><?php the_sub_field('section_tag') ?></h4>
                            </div>
                        <?php endif; ?>
                        <!-- Section Title -->
                        <?php if (get_sub_field('section_header')): ?>
                            <div class="section-title-wrap title-wrap industry-pro-title">
                                <?php the_sub_field('section_header') ?>
                            </div>
                        <?php endif; ?>
                        <!-- Section Content -->
                        <?php if (get_sub_field('section_text')): ?>
                            <div class="section-text industry-pro-text text">
                                <?php the_sub_field('section_text') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
            <!-- End Left Cell -->

            <!-- Start Right Cell -->
            <?php while (have_rows('content_right')) : the_row();?>
                <div class="right-cell col-md-5 col-xs-12">
                    <div class="left-content-container">
                        <!-- Section Blurb -->
                        <?php if (get_sub_field('section_blurb')): ?>
                            <div class="blurb-wrap industry-pro-blurb">
                                <?php the_sub_field('section_blurb') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
            <!-- End Right Cell -->

    </div>

    <!-- Start Staff Slider -->
    <?php if( have_rows('experience_slider') ): ?>
        <div class="pro-slider-container pro-slider slider-cell row">
            <?php while (have_rows('professionals_slider')) : the_row();?>

                <div class="pro-card col-md-4 col-xs-12">
                    <!-- Start Slider Image -->
                    <div class="pro-image-wrap">
                        <?php $image = get_sub_field('professor_profile'); ?>
                        <img class="pro-image" src="<?php the_sub_field('professor_profile'); ?>"> 
                    </div>
                    <!-- End Slider Image -->

                    <!-- Start Slider Caption -->
                    <?php while (have_rows('professor_metadata')) : the_row();?>
                        <div class="pro-card-body">
                            <!-- Name -->
                            <div class="card-name">
                                <?php the_sub_field('professor_name') ?>
                            </div>
                            <!-- Department -->
                            <div class="card-department">
                                <?php the_sub_field('program_department') ?>
                            </div>
                            <!-- Professor Bio -->
                            <div class="card-bio">
                                <?php the_sub_field('professor_bio') ?>
                            </div>
                            <!-- Button -->
                            <div class="card-button-wrap">
                                <a class="card-btn" href="#">Read Full Bio</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <!-- End Slider Caption -->
                </div>

            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    <!-- End Staff Slider -->
    
</section>

<!-- ========================================================================= -->
<!-- END INDUSTRY PRO SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START CAROUSEL SECTION -->
<!-- ========================================================================= -->

<section id="carousel" class="container-fluid">
    <div class="carousel-container">

        <!-- Start Top Slider -->
        <?php if( have_rows('top_slider') ): ?>
            <div class="carousel-slider-container carousel-top-slider slider-cell row">
                <?php while (have_rows('top_slider')) : the_row();?>
                
                    <div class="carousel-slide top-slide slide col">
                        <!-- Start Slider Image -->
                        <div class="carousel-image-wrap carousel-top-image-wrap">
                            <?php $image = get_sub_field('slide_image'); ?>
                            <img class="carousel-image carousel-top-image" src="<?php echo $image['sizes']['home-carousel-slide']; ?>">
                        </div>
                        <!-- End Slider Image -->

                        <!-- Start Slider Caption -->
                        <?php if (get_sub_field('slide_content')): ?>
                            <div class="carousel-body carousel-top-body">
                                <div class="caption-wrap caption">
                                    <?php the_sub_field('slide_content') ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- End Slider Caption -->
                    </div>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <!-- End Top Slider -->

        <div class="row">
        <!-- Start Scroll Content -->
            <?php //if (get_field('scroll_list')): ?>
                <div class="scroll-text-wrap os__wrapper">
                    <div class="text-wrap os__text-container">
                        <?php //the_field('scroll_list') ?>

                        <p class="scroll-fade scroll-text os__text-item">LCAD is an all-inclusive environment in which</p>
                        <p class="scroll-fade scroll-text os__text-item"><img class="scroll-you" src="http://lcad.local/wp-content/uploads/2022/12/Group-10.png" alt="you" /> are recognized for your individuality</p>
                        <p class="scroll-fade scroll-text os__text-item">amongst students and faculty, as well as a</p>
                        <p class="scroll-fade scroll-text os__text-item">collaborative team. <img class="scroll-you" src="http://lcad.local/wp-content/uploads/2022/12/Group-75.png" alt="you" /> are celebrated</p>
                        <p class="scroll-fade scroll-text os__text-item">for your unique individuality and creative expression.</p>

                    </div>
                </div>
            <?php //endif; ?>
        <!-- End Scroll Content -->



        <!-- <div class="os__wrapper">
            <div class="os__text-container">
                <p class="os__text-item">LCAD is an all-inclusive environment in which 1</p>
                <p class="os__text-item">LCAD is an all-inclusive environment in which 2</p>
                <p class="os__text-item">LCAD is an all-inclusive environment in which 3</p>
                <p class="os__text-item">LCAD is an all-inclusive environment in which 4</p>
                <p class="os__text-item">You are recognized for your individuality</p>
            </div>
        </div> -->




        </div>

        <!-- <div class="os__wrapper">
            <div class="os__text-container">
                <p class="os__text-item">LCAD is an all-inclusive environment in which 1</p>
                <p class="os__text-item">LCAD is an all-inclusive environment in which 2</p>
                <p class="os__text-item">LCAD is an all-inclusive environment in which 3</p>
                <p class="os__text-item">LCAD is an all-inclusive environment in which 4</p>
                <p class="os__text-item">You are recognized for your individuality</p>
            </div>
        </div> -->

        <!-- Start Bottom Slider -->
        <?php if( have_rows('bottom_slider') ): ?>
            <div class="carousel-slider-container carousel-bottom-slider slider-cell row">
                <?php while (have_rows('top_slider')) : the_row();?>
                
                    <div class="carousel-slide bottom-slide slide col">
                        <!-- Start Slider Image -->
                        <div class="carousel-image-wrap carousel-bottom-image-wrap">
                            <?php $image = get_sub_field('slide_image'); ?>
                            <img class="carousel-image carousel-bottom-image" src="<?php echo $image['sizes']['home-carousel-slide']; ?>">
                        </div>
                        <!-- End Slider Image -->

                        <!-- Start Slider Caption -->
                        <?php if (get_sub_field('slide_content')): ?>
                            <div class="carousel-body carousel-bottom-body">
                                <div class="caption-wrap caption">
                                    <?php the_sub_field('slide_content') ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- End Slider Caption -->
                    </div>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <!-- End Bottom Slider -->

    </div>
</section>

<!-- ========================================================================= -->
<!-- END CAROUSEL SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START RECENT NEWS SECTION -->
<!-- ========================================================================= -->

<section id="recent-news">
    <?php get_template_part('resources/partials/recent', 'news'); ?>
</section>

<!-- ========================================================================= -->
<!-- END RECENT NEWS SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START STUDENT LIFE SECTION -->
<!-- ========================================================================= -->

<section id="student-life">
    <div class="student-life-container container-fluid post-container">
        <div class="row">
            <!-- Start Section Header Container -->
            <!-- ------------------------------ -->

            <div class="col-12 col-lg-6">
                <?php while (have_rows('section_header')) : the_row();?>
                    <div class="student-life-header header-block block-one block">
                        <!-- Section Tag -->
                        <?php if (get_sub_field('student_life_tag')): ?>
                            <div class="header-tag-wrap">
                                <h4 class="header-tag lcad-tag"><?php the_sub_field('student_life_tag') ?></h4>
                            </div>
                        <?php endif; ?>
                        <!-- Section Title -->
                        <?php if (get_sub_field('student_life_header')): ?>
                            <div class="header-title-wrap">
                                <h2 class="block-title title"><?php the_sub_field('student_life_header') ?></h2>
                            </div>
                        <?php endif; ?>
                        <!-- Section Content -->
                        <?php if (get_sub_field('student_life_text')): ?>
                            <div class="header-text-wrap text">
                                <?php the_sub_field('student_life_text') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>

                <!-- ---------------------------- -->
                <!-- End Section Header Container -->

                
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <!-- Start Image Block - Block 1 -->
                        <!-- --------------------------- -->

                        <?php while (have_rows('block_1')) : the_row();?>
                            <div class="block-container block-1-container block-1 block-image custom-block custom-bg custom-flex custom-radius" style="background-image:linear-gradient(to bottom, transparent 60%, black 100%),url(<?php the_sub_field('block_1_image'); ?>);">
                                <!-- Block Image -->
                                <!-- <div class="block-image-wrap block-1-image-wrap">
                                    <img class="block-image block-1-image" src="<?php the_sub_field('block_1_image'); ?>"> 
                                </div> -->
                                <!-- Block Tag -->
                                <?php if (get_sub_field('block_1_tag')): ?>
                                    <div class="block-tag-wrap block-1-tag-wrap custom-border">
                                        <h4 class="block-tag block-1-tag"><?php the_sub_field('block_1_tag') ?></h4>
                                    </div>
                                <?php endif; ?>
                                <!-- Block Button -->
                                <?php if (get_sub_field('block_1_link')): ?>
                                    <div class="block-btn-wrap block-1-btn-wrap">
                                        <a class="block-btn block-1-btn" href="<?php the_sub_field('block_1_link') ?>"><span class="dashicons dashicons-arrow-right-alt"></span></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                        
                        <!-- ------------------------- -->
                        <!-- End Image Block - Block 1 -->


                        <!-- Start Content Block - Block 2 -->
                        <!-- ----------------------------- -->

                        <?php while (have_rows('block_2')) : the_row();?>
                            <div class="block-container block-2-container block-2 block-content custom-block-2 custom-radius" style="background-color: #2BAAD3;">
                                <!-- Block Title -->
                                <?php if (get_sub_field('block_2_title')): ?>
                                    <div class="block-title-wrap block-2-title-wrap">
                                        <h2 class="block-title block-2-title"><?php the_sub_field('block_2_title') ?></h2>
                                    </div>
                                <?php endif; ?>
                                <!-- Block Content -->
                                <?php if (get_sub_field('block_2_text')): ?>
                                    <div class="block-text-wrap block-2-text-wrap">
                                        <?php the_sub_field('block_2_text') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>

                        <!-- --------------------------- -->
                        <!-- End Content Block - Block 2 -->


                        <!-- Start Image Block - Block 3 -->
                        <!-- --------------------------- -->

                        <?php while (have_rows('block_3')) : the_row();?>
                            <div class="block-container block-3-container block-3 block-image custom-block custom-bg custom-flex custom-radius" style="background-image:linear-gradient(to bottom, transparent 60%, black 100%),url(<?php the_sub_field('block_3_image'); ?>);">
                                <!-- Block Image -->
                                <!-- <div class="block-image-wrap block-3-image-wrap">
                                    <img class="block-image block-3-image" src="<?php the_sub_field('block_3_image'); ?>"> 
                                </div> -->
                                <!-- Block Tag -->
                                <?php if (get_sub_field('block_3_tag')): ?>
                                    <div class="block-tag-wrap block-3-tag-wrap custom-border">
                                        <h4 class="block-tag block-3-tag"><?php the_sub_field('block_3_tag') ?></h4>
                                    </div>
                                <?php endif; ?>
                                <!-- Block Button -->
                                <?php if (get_sub_field('block_3_link')): ?>
                                    <div class="block-btn-wrap block-3-btn-wrap">
                                        <a class="block-btn block-3-btn" href="<?php the_sub_field('block_3_link') ?>"><span class="dashicons dashicons-arrow-right-alt"></span></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                        
                        <!-- ------------------------- -->
                        <!-- End Image Block - Block 3 -->
                    </div>

                    <div class="col-12 col-lg-6">
                        <!-- Start Image Block - Block 4 -->
                        <!-- --------------------------- -->

                        <?php while (have_rows('block_4')) : the_row();?>
                            <div class="block-container block-4-container block-4 block-image custom-block-4 custom-bg custom-flex custom-radius" style="background-image:linear-gradient(to bottom, transparent 60%, black 100%),url(<?php the_sub_field('block_4_image'); ?>);">
                                <!-- Block Image -->
                                <!-- <div class="block-image-wrap block-4-image-wrap">
                                    <img class="block-image block-4-image" src="<?php the_sub_field('block_4_image'); ?>"> 
                                </div> -->
                                <!-- Block Tag -->
                                <?php if (get_sub_field('block_4_tag')): ?>
                                    <div class="block-tag-wrap block-4-tag-wrap custom-border">
                                        <h4 class="block-tag block-4-tag"><?php the_sub_field('block_4_tag') ?></h4>
                                    </div>
                                <?php endif; ?>
                                <!-- Block Button -->
                                <?php if (get_sub_field('block_4_link')): ?>
                                    <div class="block-btn-wrap block-4-btn-wrap">
                                        <a class="block-btn block-4-btn" href="<?php the_sub_field('block_4_link') ?>"><span class="dashicons dashicons-arrow-right-alt"></span></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                        
                        <!-- ------------------------- -->
                        <!-- End Image Block - Block 4 -->


                        <!-- Start Content Block - Block 5 -->
                        <!-- ----------------------------- -->

                        <?php while (have_rows('block_5')) : the_row();?>
                            <div class="block-container block-5-container block-5 block-content custom-block-5 custom-radius" style="background-color: #eee;">
                                <!-- Block Title -->
                                <?php if (get_sub_field('block_5_title')): ?>
                                    <div class="block-title-wrap block-5-title-wrap">
                                        <h2 class="block-title block-5-title"><?php the_sub_field('block_5_title') ?></h2>
                                    </div>
                                <?php endif; ?>
                                <!-- Block Content -->
                                <?php if (get_sub_field('block_5_text')): ?>
                                    <div class="block-text-wrap block-5-text-wrap">
                                        <?php the_sub_field('block_5_text') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>

                        <!-- --------------------------- -->
                        <!-- End Content Block - Block 5 -->
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <!-- Start Image Block - Block 6 -->
                <!-- --------------------------- -->

                <?php while (have_rows('block_6')) : the_row();?>
                    <div class="block-container block-6-container block-6 block-image custom-bg custom-flex custom-radius custom-block-6" style="background-image:linear-gradient(to bottom, transparent 60%, black 100%),url(<?php the_sub_field('block_6_image'); ?>);">
                        <!-- Block Image -->
                        <!-- <div class="block-image-wrap block-6-image-wrap">
                            <img class="block-image block-6-image" src="<?php the_sub_field('block_6_image'); ?>"> 
                        </div> -->
                        <!-- Block Tag -->
                        <?php if (get_sub_field('block_6_tag')): ?>
                            <div class="block-tag-wrap block-6-tag-wrap custom-border">
                                <h4 class="block-tag block-6-tag"><?php the_sub_field('block_6_tag') ?></h4>
                            </div>
                        <?php endif; ?>
                        <!-- Block Button -->
                        <?php if (get_sub_field('block_6_link')): ?>
                            <div class="block-btn-wrap block-6-btn-wrap">
                                <a class="block-btn block-6-btn" href="<?php the_sub_field('block_6_link') ?>"><span class="dashicons dashicons-arrow-right-alt"></span></a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
                
                <!-- ------------------------- -->
                <!-- End Image Block - Block 6 -->


                <!-- Start Content Block - Block 7 -->
                <!-- ----------------------------- -->

                <?php while (have_rows('block_7')) : the_row();?>
                    <div class="block-container block-7-container block-7 block-content custom-radius custom-block-7" style="background-color: #395590;">
                        <!-- Block Title -->
                        <?php if (get_sub_field('block_7_title')): ?>
                            <div class="block-title-wrap block-7-title-wrap">
                                <h2 class="block-title block-7-title"><?php the_sub_field('block_7_title') ?></h2>
                            </div>
                        <?php endif; ?>
                        <!-- Block Content -->
                        <?php if (get_sub_field('block_7_text')): ?>
                            <div class="block-text-wrap block-7-text-wrap">
                                <?php the_sub_field('block_7_text') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>

                <!-- --------------------------- -->
                <!-- End Content Block - Block 7 -->


                <!-- Start Image Block - Block 8 -->
                <!-- --------------------------- -->

                <?php while (have_rows('block_8')) : the_row();?>
                    <div class="block-container block-8-container block-8 block-image custom-bg custom-flex custom-radius custom-block-8" style="background-image:linear-gradient(to bottom, transparent 60%, black 100%),url(<?php the_sub_field('block_8_image'); ?>);">
                        <!-- Block Image -->
                        <!-- <div class="block-image-wrap block-8-image-wrap">
                            <img class="block-image block-8-image" src="<?php the_sub_field('block_8_image'); ?>"> 
                        </div> -->
                        <!-- Block Tag -->
                        <?php if (get_sub_field('block_8_tag')): ?>
                            <div class="block-tag-wrap block-8-tag-wrap custom-border">
                                <h4 class="block-tag block-8-tag"><?php the_sub_field('block_8_tag') ?></h4>
                            </div>
                        <?php endif; ?>
                        <!-- Block Button -->
                        <?php if (get_sub_field('block_8_link')): ?>
                            <div class="block-btn-wrap block-8-btn-wrap">
                                <a class="block-btn block-8-btn" href="<?php the_sub_field('block_8_link') ?>"><span class="dashicons dashicons-arrow-right-alt"></span></a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
                
                <!-- ------------------------- -->
                <!-- End Image Block - Block 8 -->
            </div>
        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- END STUDENT LIFE SECTION -->
<!-- ========================================================================= -->


<!-- ========================================================================= -->
<!-- START INSTAGRAM SECTION -->
<!-- ========================================================================= -->

<section id="instagram" class="container-fluid">
    <div class="instagram-container row">
        <!-- <div> -->

            <!-- Start Social Share -->
            <?php if ( is_active_sidebar( 'lcad-social-share' ) ) : ?>
                <div class="lcad-social social-share social-container row align-items-end">
                    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                        <?php dynamic_sidebar( 'lcad-social-share' ); ?>
                    </div><!-- #primary-sidebar -->
                </div>
            <?php endif; ?>
            <!-- End Social Share -->

            <!-- Start Instagram Section -->
            <div class="instagram-feed-container instagram-feed">
                <!-- Pull in instagram feed -->
                <?php echo do_shortcode("[instagram-feed feed=1]"); ?>
            </div>
            <!-- End Instagram Section -->

        <!-- </div> -->
    </div>
</section>

<!-- ========================================================================= -->
<!-- END INSTAGRAM SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START INQUIRY SECTION -->
<!-- ========================================================================= -->

<?php //get_template_part('resources/partials/student', 'inquiry'); ?>


<section id="inquiry" class="container-fluid">
    <div class="inquiry-container row">

        <!-- Start Inquiry Content Cell -->
        <?php while (have_rows('left_cell')) : the_row();?>
        <div class="left-cell content-cell col-md-6 col-xs-12">
            <div class="left-content-container inquiry-content-container">
                <!-- Section Tag -->
                <?php if (get_sub_field('form_tag_alt')): ?>
                    <div class="lcad-tag-wrap inquiry-tag">
                        <h4 class="lcad-tag lcad-tag-dk inquiry-tag"><?php the_sub_field('form_tag_alt') ?></h4>
                    </div>
                <?php endif; ?>
                <!-- Section Title -->
                <?php if (get_sub_field('form_title_alt')): ?>
                    <div class="section-title-wrap inquiry-title-wrap title-wrap">
                        <?php the_sub_field('form_title_alt') ?>
                    </div>
                <?php endif; ?>
                <!-- Section Content -->
                <?php if (get_sub_field('form_content_alt')): ?>
                    <div class="section-text inquiry-text">
                        <?php the_sub_field('form_content_alt') ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endwhile; ?>
    <!-- End Inquiry Content Cell -->

    <!-- Start Inquiry Form Cell -->
    <?php //while (have_rows('section_form')) : the_row();?>
        <div class="right-cell col-md-6 col-xs-12">
            <div class="form-wrap">
                <?php the_field('inquiry_form_alt') ?>
            </div>
        </div>
    <?php //endwhile ?>
    <!-- End Inquiry Form Cell -->

    </div>
</section>

<!-- ========================================================================= -->
<!-- END INQUIRY SECTION -->
<!-- ========================================================================= -->

<?php } ?>

<?php
genesis(); // <- everything important: make sure to include this. 