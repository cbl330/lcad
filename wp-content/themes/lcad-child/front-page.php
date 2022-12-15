<?php get_header(); ?>

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
                    <?php endif ?>
                </div>

                <!-- Button Wrap -->
                <?php if (get_sub_field('button_text') && get_sub_field('button_link')): ?>
                    <div class="btn-wrap">
                        <a class="hero-btn btn btn-outline-light" href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile ?>
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

                <?php endwhile ?>
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
                                    <div class="slide-content content-wrap col-6">
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
                                        <!-- <div>
                                            <button type="button" class="slick-next">Next</button>
                                        </div> -->
                                    </div>
                                <?php endwhile ?>
                                <!-- End Content Wrap -->

                                <!-- Start Image Wrap -->
                                <div class="col-6">
                                    <?php $image = get_sub_field('experience_image'); ?>
                                    <img class="slide-image" src="<?php echo $image['sizes']['home-experience-slide']; ?>">
                                </div>
                                <!-- End Image Wrap -->

                            </div>
                        </div>
                        <!-- End Slide -->

                <?php endwhile ?>
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
                <div class="left-cell col-7">
                    <div class="left-content-container">
                        <!-- Section Tag -->
                        <?php if (get_sub_field('section_tag')): ?>
                            <div class="lcad-tag-wrap">
                                <h4 class="lcad-tag industry-pro-tag"><?php the_sub_field('section_tag') ?></h4>
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
            <?php endwhile ?>
            <!-- End Left Cell -->

            <!-- Start Right Cell -->
            <?php while (have_rows('content_right')) : the_row();?>
                <div class="right-cell col-5">
                    <div class="left-content-container">
                        <!-- Section Blurb -->
                        <?php if (get_sub_field('section_blurb')): ?>
                            <div class="blurb-wrap industry-pro-blurb">
                                <?php the_sub_field('section_blurb') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile ?>
            <!-- End Right Cell -->

    </div>

    <!-- Start Staff Slider -->
    <?php if( have_rows('experience_slider') ): ?>
        <div class="pro-slider-container pro-slider slider-cell row">
            <?php while (have_rows('professionals_slider')) : the_row();?>

                <div class="pro-card col-4">
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
                            <div class="card-button">
                                <a href="#">Read Full Bio</a>
                            </div>
                        </div>
                    <?php endwhile ?>
                    <!-- End Slider Caption -->
                </div>

            <?php endwhile ?>
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

                <?php endwhile ?>
            </div>
        <?php endif; ?>
        <!-- End Top Slider -->

        <div class="row">
        <!-- Start Scroll Content -->
            <?php if (get_field('scroll_list')): ?>
                <div class="scroll-text-wrap text-wrap row os__wrapper">
                    <div class="os__text-container">
                        <?php the_field('scroll_list') ?>
                    </div>
                </div>
            <?php endif; ?>
        <!-- End Scroll Content -->
        </div>

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

                <?php endwhile ?>
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

<section id="student-life" class="container-fluid">
    <div class="row">
        <!-- <div> -->

            <!-- Start Section Header Container -->
            <?php while (have_rows('content_repeater')) : the_row();?>
                <div>
                    <!-- Section Tag -->
                    <?php if (get_sub_field('student_life_tag')): ?>
                        <div>
                            <h4 class="lcad-tag"><?php the_sub_field('student_life_tag') ?></h4>
                        </div>
                    <?php endif; ?>
                    <!-- Section Title -->
                    <?php if (get_sub_field('student_life_header')): ?>
                        <div>
                            <h2><?php the_sub_field('student_life_header') ?></h2>
                        </div>
                    <?php endif; ?>
                    <!-- Section Content -->
                    <?php if (get_sub_field('student_life_text')): ?>
                        <div>
                            <p><?php the_sub_field('student_life_text') ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile ?>
            <!-- End Section Header Container -->

            <!-- Start Flex Content Container -->
            <?php while (have_rows('content_repeater')) : the_row();?>
                <div>
                    <!-- Title -->
                    <?php if (get_sub_field('block_header')): ?>
                        <div>
                            <h2><?php the_sub_field('block_header') ?></h2>
                        </div>
                    <?php endif; ?>
                    <!-- Content -->
                    <?php if (get_sub_field('block_text')): ?>
                        <div>
                            <p><?php the_sub_field('block_text') ?></p>
                        </div>
                    <?php endif; ?>
                    <!-- Button -->
                    <div>
                        <?php the_sub_field('slide_caption') ?>
                    </div>
                </div>
            <?php endwhile ?>
            <!-- End Flex Content Container -->

            <!-- Start Flex Image Container -->
            <?php while (have_rows('content_repeater')) : the_row();?>
                <div>
                    <!-- Image -->
                    <div>
                        <?php $image = get_sub_field('block_image'); ?>
                        <img src="<?php the_sub_field('block_image'); ?>"> 
                    </div>
                    <!-- Block Tag -->
                    <?php if (get_sub_field('block_tag')): ?>
                        <div>
                            <h2><?php the_sub_field('block_tag') ?></h2>
                        </div>
                    <?php endif; ?>
                    <!-- Block Link -->
                    <?php if (get_sub_field('block_link')): ?>
                        <div>
                            <p><?php the_sub_field('block_link') ?></p>
                        </div>
                    <?php endif; ?>
                    <!-- Button -->
                <?php if (get_sub_field('block_link')): ?>
                    <div>
                        <a href="<?php the_sub_field('block_link') ?>">Icon</a>
                    </div>
                <?php endif; ?>
                </div>
            <?php endwhile ?>
            <!-- End Flex Image Container -->

        <!-- </div> -->
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

<?php //if (get_field('enable_student_inquiry_form') == true): ?>
    <section id="inquiry">
        <?php //get_template_part('resources/partials/student', 'inquiry'); ?>

        <!-- Start Inquiry Content Cell -->
        <?php //while (have_rows('form_content')) : the_row();?>
            <div class="left-cell content-cell col-6">
                <div class="left-content-container inquiry-content-container">
                    <!-- Section Tag -->
                    <?php if (get_sub_field('form_tag')): ?>
                        <div class="lcad-tag-wrap inquiry-tag">
                            <h4 class="lcad-tag inquiry-tag"><?php the_sub_field('form_tag') ?></h4>
                        </div>
                    <?php endif; ?>
                    <!-- Section Title -->
                    <?php if (get_sub_field('form_title')): ?>
                        <div class="section-title-wrap title-wrap inquiry-title">
                            <?php the_sub_field('form_title') ?>
                        </div>
                    <?php endif; ?>
                    <!-- Section Content -->
                    <?php if (get_sub_field('form_text')): ?>
                        <div class="section-text inquiry-text text">
                            <?php the_sub_field('form_text') ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php //endwhile ?>
        <!-- End Inquiry Content Cell -->

        <!-- Start Inquiry Form Cell -->
        <?php //while (have_rows('section_form')) : the_row();?>
            <div>
                <?php the_field('inquiry_form') ?>
            </div>
        <?php //endwhile ?>
        <!-- End Inquiry Form Cell -->
    </section>
<?php //endif; ?>

<!-- ========================================================================= -->
<!-- END INQUIRY SECTION -->
<!-- ========================================================================= -->


<?php get_footer(); ?>