<?php get_header(); ?>

<!-- ========================================================================= -->
<!-- START HERO SECTION -->
<!-- ========================================================================= -->

<section id="home-hero" class="container-fluid">
    <div class="hero-container row align-items-center">

        <!-- Start Content Cell -->
        <?php while (have_rows('hero_content_ph')) : the_row();?>
            <div class="content-cell">
                <!-- Title Wrap -->
                <?php if (get_sub_field('hero_header_ph')): ?>
                    <div class="hero-title-wrap title-wrap">
                        <?php the_sub_field('hero_header_ph') ?>
                    </div>
                <?php endif; ?>
                <!-- Button Wrap -->
                <?php if (get_sub_field('button_text_ph') && get_sub_field('button_link_ph')): ?>
                    <div class="btn-wrap">
                        <a class="hero-btn btn btn-outline-light" href="<?php the_sub_field('button_link_ph') ?>"><?php the_sub_field('button_text_ph') ?></a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
        <!-- End Content Cell -->

        <!-- Start Slider Cell -->
        <?php if( have_rows('hero_slider_ph') ): ?>
            <div class="slider-cell hero-slider">
                <?php while (have_rows('hero_slider_ph')) : the_row();?>
                
                        <!-- Start Slide -->
                        <div class="hero-slide slide container-fluid">
                            <!-- Slide Image -->
                            <div class="slide-image-wrap row">
                                <?php $image = get_sub_field('slide_image_ph'); ?>
                                <img class="slide-image" src="<?php echo $image['sizes']['home-hero-slide']; ?>">
                            </div>

                            <!-- Slide Caption -->
                            <?php if (get_sub_field('slide_caption_ph')): ?>
                                <div class="slide-caption row">
                                    <?php the_sub_field('slide_caption_ph') ?>
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

<section id="experience" class="container-fluid">
    <!-- <div class="experience-container"> -->

        <!-- Start Slider Cell -->
        <?php if( have_rows('experience_slider_ph') ): ?>
            <div class="slider-cell experience-slider slider">
                <?php while (have_rows('experience_slider_ph')) : the_row();?>
                
                        <!-- Start Slide -->
                        <div class="experience-slide slide container row align-items-center">
                            <div class="row align-items-center">

                                <!-- Start Content Wrap -->
                                <?php while (have_rows('experience_content_ph')) : the_row();?>
                                    <div class="slide-content content-wrap col-xs-12 col-lg-6">
                                        <!-- Slide Tag -->
                                        <?php if (get_sub_field('experience_tag_ph')): ?>
                                            <div class="slide-tag-wrap">
                                                <h4 class="slide-tag lcad-tag"><?php the_sub_field('experience_tag_ph') ?></h4>
                                            </div>
                                        <?php endif; ?>
                                        <!-- Slide Title -->
                                        <?php if (get_sub_field('experience_header_ph')): ?>
                                            <div class="slide-title-wrap">
                                                <?php the_sub_field('experience_header_ph') ?>
                                            </div>
                                        <?php endif; ?>
                                        <!-- Slide Content -->
                                        <?php if (get_sub_field('experience_paragraph_ph')): ?>
                                            <div>
                                                <?php the_sub_field('experience_paragraph_ph') ?>
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
                                <div class="slide-image-wrap col-xs-12 col-lg-6">
                                    <?php $image = get_sub_field('experience_image_ph'); ?>
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

<!-- ========================================================================= -->
<!-- END EXPERIENCE SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START INDUSTRY PRO SECTION -->
<!-- ========================================================================= -->

<section id="industry-pro" class="container-fluid bg-light">
    <div class="industry-pro-container row">

            <!-- Start Left Cell -->
            <?php while (have_rows('content_left_ph')) : the_row();?>
                <div class="left-cell col-lg-7 col-xs-12">
                    <div class="left-content-container">
                        <!-- Section Tag -->
                        <?php if (get_sub_field('section_tag_ph')): ?>
                            <div class="lcad-tag-wrap">
                                <h4 class="lcad-tag lcad-tag-dk industry-pro-tag"><?php the_sub_field('section_tag_ph') ?></h4>
                            </div>
                        <?php endif; ?>
                        <!-- Section Title -->
                        <?php if (get_sub_field('section_header_ph')): ?>
                            <div class="section-title-wrap title-wrap industry-pro-title">
                                <?php the_sub_field('section_header_ph') ?>
                            </div>
                        <?php endif; ?>
                        <!-- Section Content -->
                        <?php if (get_sub_field('section_text_ph')): ?>
                            <div class="section-text industry-pro-text text">
                                <?php the_sub_field('section_text_ph') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
            <!-- End Left Cell -->

            <!-- Start Right Cell -->
            <?php while (have_rows('content_right_ph')) : the_row();?>
                <div class="right-cell col-lg-5 col-xs-12">
                    <div class="left-content-container">
                        <!-- Section Blurb -->
                        <?php if (get_sub_field('section_blurb_ph')): ?>
                            <div class="blurb-wrap industry-pro-blurb">
                                <?php the_sub_field('section_blurb_ph') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
            <!-- End Right Cell -->

    </div>

    <!-- Start Staff Slider -->
    <?php if( have_rows('professionals_slider_ph') ): ?>
        <div class="pro-slider-container pro-slider slider-cell row">
            <?php while (have_rows('professionals_slider_ph')) : the_row();?>

                <div class="pro-card col-lg-4 col-xs-12">
                    <!-- Start Slider Image -->
                    <div class="pro-image-wrap">
                        <?php $image = get_sub_field('professor_profile_ph'); ?>
                        <img class="pro-image" src="<?php the_sub_field('professor_profile_ph'); ?>"> 
                    </div>
                    <!-- End Slider Image -->

                    <!-- Start Slider Caption -->
                    <?php while (have_rows('professor_metadata_ph')) : the_row();?>
                        <div class="pro-card-body">
                            <!-- Name -->
                            <div class="card-name">
                                <?php the_sub_field('professor_name_ph') ?>
                            </div>
                            <!-- Department -->
                            <div class="card-department">
                                <?php the_sub_field('program_department_ph') ?>
                            </div>
                            <!-- Professor Bio -->
                            <div class="card-bio">
                                <?php the_sub_field('professor_bio_ph') ?>
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
        <?php if( have_rows('top_slider_ph') ): ?>
            <div class="carousel-slider-container carousel-top-slider slider-cell row">
                <?php while (have_rows('top_slider_ph')) : the_row();?>
                
                    <div class="carousel-slide top-slide slide col">
                        <!-- Start Slider Image -->
                        <div class="carousel-image-wrap carousel-top-image-wrap">
                            <?php $image = get_sub_field('slide_image_ph'); ?>
                            <img class="carousel-image carousel-top-image" src="<?php echo $image['sizes']['home-carousel-slide']; ?>">
                        </div>
                        <!-- End Slider Image -->

                        <!-- Start Slider Caption -->
                        <?php if (get_sub_field('slide_content_ph')): ?>
                            <div class="carousel-body carousel-top-body">
                                <div class="caption-wrap caption">
                                    <?php the_sub_field('slide_content_ph') ?>
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
            <?php if (get_field('scroll_list_ph')): ?>
                <div class="scroll-text-wrap os__wrapper">
                    <div class="text-wrap os__text-container">
                        <?php the_field('scroll_list_ph') ?>

                        <!-- <p class="scroll-fade scroll-text os__text-item">LCAD is an all-inclusive environment in which</p>
                        <p class="scroll-fade scroll-text os__text-item"><img class="scroll-you" src="http://lcad.local/wp-content/uploads/2022/12/Group-10.png" alt="you" /> are recognized for your individuality</p>
                        <p class="scroll-fade scroll-text os__text-item">amongst students and faculty, as well as a</p>
                        <p class="scroll-fade scroll-text os__text-item">collaborative team. <img class="scroll-you" src="http://lcad.local/wp-content/uploads/2022/12/Group-75.png" alt="you" /> are celebrated</p>
                        <p class="scroll-fade scroll-text os__text-item">for your unique individuality and creative expression.</p> -->

                    </div>
                </div>
            <?php endif; ?>
        <!-- End Scroll Content -->
        </div>

        <!-- Start Bottom Slider -->
        <?php if( have_rows('bottom_slider_ph') ): ?>
            <div class="carousel-slider-container carousel-bottom-slider slider-cell row">
                <?php while (have_rows('bottom_slider_ph')) : the_row();?>
                
                    <div class="carousel-slide bottom-slide slide col">
                        <!-- Start Slider Image -->
                        <div class="carousel-image-wrap carousel-bottom-image-wrap">
                            <?php $image = get_sub_field('slide_image_ph'); ?>
                            <img class="carousel-image carousel-bottom-image" src="<?php echo $image['sizes']['home-carousel-slide']; ?>">
                        </div>
                        <!-- End Slider Image -->

                        <!-- Start Slider Caption -->
                        <?php if (get_sub_field('slide_content_ph')): ?>
                            <div class="carousel-body carousel-bottom-body">
                                <div class="caption-wrap caption">
                                    <?php the_sub_field('slide_content_ph') ?>
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

<?php get_template_part('resources/partials/recent', 'news'); ?>

<!-- ========================================================================= -->
<!-- END RECENT NEWS SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START STUDENT LIFE SECTION -->
<!-- ========================================================================= -->

<section id="student-life-masonry">
    <div class="student-life-container container-fluid post-container">
        <div class="row">

            <!-- Start Section Header Container -->
            <!-- ------------------------------ -->
            <div class="col-12 col-lg-6">
                <?php while (have_rows('section_header_ph')) : the_row();?>
                    <div class="student-life-header header-block block-one block">
                        <!-- Section Tag -->
                        <?php if (get_sub_field('student_life_tag_ph')): ?>
                            <div class="header-tag-wrap">
                                <h4 class="header-tag lcad-tag"><?php the_sub_field('student_life_tag_ph') ?></h4>
                            </div>
                        <?php endif; ?>
                        <!-- Section Title -->
                        <?php if (get_sub_field('student_life_header_ph')): ?>
                            <div class="header-title-wrap">
                                <h2 class="block-title title"><?php the_sub_field('student_life_header_ph') ?></h2>
                            </div>
                        <?php endif; ?>
                        <!-- Section Content -->
                        <?php if (get_sub_field('student_life_text_ph')): ?>
                            <div class="header-text-wrap text">
                                <?php the_sub_field('student_life_text_ph') ?>
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
                        <?php while (have_rows('block_1_ph')) : the_row();?>
                            <div class="block-container block-1-container block-1 block-image custom-block custom-bg custom-flex custom-radius" style="background-image:linear-gradient(to bottom, transparent 60%, black 100%),url(<?php the_sub_field('block_1_image_ph'); ?>);">
                                <!-- Block Image -->
                                <!-- <div class="block-image-wrap block-1-image-wrap">
                                    <img class="block-image block-1-image" src="<?php //the_sub_field('block_1_image_ph'); ?>"> 
                                </div> -->
                                <!-- Block Tag -->
                                <?php if (get_sub_field('block_1_tag_ph')): ?>
                                    <div class="block-tag-wrap block-1-tag-wrap custom-border">
                                        <h4 class="block-tag block-1-tag"><?php the_sub_field('block_1_tag_ph') ?></h4>
                                    </div>
                                <?php endif; ?>
                                <!-- Block Button -->
                                <?php if (get_sub_field('block_1_link_ph')): ?>
                                    <div class="block-btn-wrap block-1-btn-wrap">
                                        <a class="block-btn block-1-btn" href="<?php the_sub_field('block_1_link_ph') ?>"><span class="dashicons dashicons-arrow-right-alt"></span></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                        <!-- ------------------------- -->
                        <!-- End Image Block - Block 1 -->


                        <!-- Start Content Block - Block 2 -->
                        <!-- ----------------------------- -->
                        <?php while (have_rows('block_2_ph')) : the_row();?>
                            <div class="block-container block-2-container block-2 block-content custom-block custom-block-2 custom-radius" style="background-color: #2BAAD3;">
                                <!-- Block Title -->
                                <?php if (get_sub_field('block_2_title_ph')): ?>
                                    <div class="block-title-wrap block-2-title-wrap">
                                        <h2 class="block-title block-2-title"><?php the_sub_field('block_2_title_ph') ?></h2>
                                    </div>
                                <?php endif; ?>
                                <!-- Block Content -->
                                <?php if (get_sub_field('block_2_text_ph')): ?>
                                    <div class="block-text-wrap block-2-text-wrap">
                                        <?php the_sub_field('block_2_text_ph') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                        <!-- --------------------------- -->
                        <!-- End Content Block - Block 2 -->


                        <!-- Start Content Block - Block 3 -->
                        <!-- --------------------------- -->
                        <?php while (have_rows('block_3_ph')) : the_row();?>
                            <div class="block-container block-3-container block-3 block-image custom-block custom-bg custom-flex custom-radius" style="background-image:linear-gradient(to bottom, transparent 60%, black 100%),url(<?php the_sub_field('block_3_image_ph'); ?>);">
                                <!-- Block Image -->
                                <!-- <div class="block-image-wrap block-3-image-wrap">
                                    <img class="block-image block-3-image" src="<?php the_sub_field('block_3_image_ph'); ?>"> 
                                </div> -->
                                <!-- Block Tag -->
                                <?php if (get_sub_field('block_3_tag_ph')): ?>
                                    <div class="block-tag-wrap block-3-tag-wrap custom-border">
                                        <h4 class="block-tag block-3-tag"><?php the_sub_field('block_3_tag_ph') ?></h4>
                                    </div>
                                <?php endif; ?>
                                <!-- Block Button -->
                                <?php if (get_sub_field('block_3_link_ph')): ?>
                                    <div class="block-btn-wrap block-3-btn-wrap">
                                        <a class="block-btn block-3-btn" href="<?php the_sub_field('block_3_link_ph') ?>"><span class="dashicons dashicons-arrow-right-alt"></span></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                        <!-- ------------------------- -->
                        <!-- End Content Block - Block 3 -->
                    </div>

                    <div class="col-12 col-lg-6">

                        <!-- Start Image Block - Block 4 -->
                        <!-- --------------------------- -->
                        <?php while (have_rows('block_4_ph')) : the_row();?>
                            <div class="block-container block-4-container block-4 block-image custom-block custom-block-4 custom-bg custom-flex custom-radius" style="background-image:linear-gradient(to bottom, transparent 60%, black 100%),url(<?php the_sub_field('block_4_image_ph'); ?>);">
                                <!-- Block Image -->
                                <!-- <div class="block-image-wrap block-4-image-wrap">
                                    <img class="block-image block-4-image" src="<?php //the_sub_field('block_4_image_ph'); ?>"> 
                                </div> -->
                                <!-- Block Tag -->
                                <?php if (get_sub_field('block_4_tag_ph')): ?>
                                    <div class="block-tag-wrap block-4-tag-wrap custom-border">
                                        <h4 class="block-tag block-4-tag"><?php the_sub_field('block_4_tag_ph') ?></h4>
                                    </div>
                                <?php endif; ?>
                                <!-- Block Button -->
                                <?php if (get_sub_field('block_4_link_ph')): ?>
                                    <div class="block-btn-wrap block-4-btn-wrap">
                                        <a class="block-btn block-4-btn" href="<?php the_sub_field('block_4_link_ph') ?>"><span class="dashicons dashicons-arrow-right-alt"></span></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>

                        <!-- ------------------------- -->
                        <!-- End Image Block - Block 4 -->


                        <!-- Start Content Block - Block 5 -->
                        <!-- ----------------------------- -->
                        <?php while (have_rows('block_5_ph')) : the_row();?>
                            <div class="block-container block-5-container block-5 block-content custom-block custom-block-5 custom-radius" style="background-color: #eee;">
                                <!-- Block Title -->
                                <?php if (get_sub_field('block_5_title_ph')): ?>
                                    <div class="block-title-wrap block-5-title-wrap">
                                        <h2 class="block-title block-5-title"><?php the_sub_field('block_5_title_ph') ?></h2>
                                    </div>
                                <?php endif; ?>
                                <!-- Block Content -->
                                <?php if (get_sub_field('block_5_text_ph')): ?>
                                    <div class="block-text-wrap block-5-text-wrap">
                                        <?php the_sub_field('block_5_text_ph') ?>
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
                <?php while (have_rows('block_6_ph')) : the_row();?>
                    <div class="block-container block-6-container block-6 custom-block block-image custom-bg custom-flex custom-radius custom-block-6" style="background-image:linear-gradient(to bottom, transparent 60%, black 100%),url(<?php the_sub_field('block_6_image_ph'); ?>);">
                        <!-- Block Image -->
                        <!-- <div class="block-image-wrap block-6-image-wrap">
                            <img class="block-image block-6-image" src="<?php //the_sub_field('block_6_image_ph'); ?>"> 
                        </div> -->
                        <!-- Block Tag -->
                        <?php if (get_sub_field('block_6_tag_ph')): ?>
                            <div class="block-tag-wrap block-6-tag-wrap custom-border">
                                <h4 class="block-tag block-6-tag"><?php the_sub_field('block_6_tag_ph') ?></h4>
                            </div>
                        <?php endif; ?>
                        <!-- Block Button -->
                        <?php if (get_sub_field('block_6_link_ph')): ?>
                            <div class="block-btn-wrap block-6-btn-wrap">
                                <a class="block-btn block-6-btn" href="<?php the_sub_field('block_6_link_ph') ?>"><span class="dashicons dashicons-arrow-right-alt"></span></a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
                <!-- ------------------------- -->
                <!-- End Image Block - Block 6 -->


                <!-- Start Content Block - Block 7 -->
                <!-- ----------------------------- -->
                <?php while (have_rows('block_7_ph')) : the_row();?>
                    <div class="block-container block-7-container block-7 custom-block block-content custom-radius custom-block-7" style="background-color: #395590;">
                        <!-- Block Title -->
                        <?php if (get_sub_field('block_7_title_ph')): ?>
                            <div class="block-title-wrap block-7-title-wrap">
                                <h2 class="block-title block-7-title"><?php the_sub_field('block_7_title_ph') ?></h2>
                            </div>
                        <?php endif; ?>
                        <!-- Block Content -->
                        <?php if (get_sub_field('block_7_text_ph')): ?>
                            <div class="block-text-wrap block-7-text-wrap">
                                <?php the_sub_field('block_7_text_ph') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
                <!-- --------------------------- -->
                <!-- End Content Block - Block 7 -->


                <!-- Start Image Block - Block 8 -->
                <!-- --------------------------- -->
                <?php while (have_rows('block_8_ph')) : the_row();?>
                    <div class="block-container block-8-container block-8 block-image custom-block custom-bg custom-flex custom-radius custom-block-8" style="background-image:linear-gradient(to bottom, transparent 60%, black 100%),url(<?php the_sub_field('block_8_image_ph'); ?>);">
                        <!-- Block Image -->
                        <!-- <div class="block-image-wrap block-8-image-wrap">
                            <img class="block-image block-8-image" src="<?php //the_sub_field('block_8_image_ph'); ?>"> 
                        </div> -->
                        <!-- Block Tag -->
                        <?php if (get_sub_field('block_8_tag_ph')): ?>
                            <div class="block-tag-wrap block-8-tag-wrap custom-border">
                                <h4 class="block-tag block-8-tag"><?php the_sub_field('block_8_tag_ph') ?></h4>
                            </div>
                        <?php endif; ?>
                        <!-- Block Button -->
                        <?php if (get_sub_field('block_8_link_ph')): ?>
                            <div class="block-btn-wrap block-8-btn-wrap">
                                <a class="block-btn block-8-btn" href="<?php the_sub_field('block_8_link_ph') ?>"><span class="dashicons dashicons-arrow-right-alt"></span></a>
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

<?php get_template_part('resources/partials/student', 'inquiry'); ?>

<!-- ========================================================================= -->
<!-- END INQUIRY SECTION -->
<!-- ========================================================================= -->

<?php get_footer(); ?>