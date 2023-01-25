<?php get_header(); ?>
<!-- ========================================================================= -->
<!-- START HERO SECTION -->
<!-- ========================================================================= -->
<style>
    /* body ::-webkit-scrollbar-track {
        background-color: red;
    } */
</style>
<section id="admissions-hero" class="container-fluid">
    <div class="hero-container row align-items-center">
        <div class="hero-section row">
            <!-- Start Content Container -->
            <?php while (have_rows('hero_content')) : the_row();?>
            <div class="hero-content col-12 col-md-6 col-lg-7">
                <!-- Title Wrap -->
                <div>
                    <?php if (get_sub_field('hero_header')): ?>
                        <?php the_sub_field('hero_header') ?>
                    <?php endif ?>
                </div>

                <!-- Text Wrap -->
                <div class="hero-details">
                    <?php if (get_sub_field('hero_details')): ?>
                    <?php the_sub_field('hero_details') ?>
                    <?php endif ?>
                </div>

                <!-- Button Wrap -->
                <?php if (get_sub_field('hero_button_text') && get_sub_field('hero_button_link')): ?>
                    <div class="hero-button">
                        <a href="<?php the_sub_field('hero_button_link') ?>"><?php the_sub_field('hero_button_text') ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <?php endwhile ?>
            <!-- Start Events -->
            <?php while (have_rows('important_dates')) : the_row();?>
            <div class="event-content col-12 col-md-6 col-lg-5">
                <h4 class="event-container-title">Important Dates</h4>
                    <div class="inner-event-content">
                        <!-- Title Wrap -->
                        <?php while (have_rows('important_dates_repeater')) : the_row();?>
                            <!-- Date & Location -->
                            <div class="date-location">
                                <div class="date">
                                    <?php if (get_sub_field('date')): ?>
                                        <?php the_sub_field('date') ?>
                                    <?php endif ?>
                                </div>
                                <div class="location">
                                    <?php if (get_sub_field('location')): ?>
                                        <?php the_sub_field('location') ?>
                                    <?php endif ?>
                                </div>
                            </div>
                            <!-- Event Title -->
                            <div class="event-title">
                                <h5>
                                    <?php if (get_sub_field('event_title') && get_sub_field('event_link')): ?>
                                        <a href="<?php the_sub_field('event_link') ?>"><?php the_sub_field('event_title') ?></a>
                                    <?php endif ?>
                                </h5>
                            </div>
                        <?php endwhile ?>
                    </div>
            </div>
            <?php endwhile ?>
            <!-- End Events -->
            
            <!-- End Content Container -->
        </div>

        <div class="testimony-section row">
            <!-- Start Opening Container -->
            <?php while (have_rows('featured_testimony')) : the_row();?>
            <div class="testimony-content col-12 col-md-6">
                <!-- Testimony -->
                <?php if (get_sub_field('testimony')): ?>
                    <div class="testimony">
                        <?php the_sub_field('testimony') ?>
                    </div>
                <?php endif; ?>

                <!-- Author Blurb -->
                <?php if (get_sub_field('testimony_details')): ?>
                    <div class="testimony-details">
                        <?php the_sub_field('testimony_details') ?>
                    </div>
                <?php endif; ?>

            </div>
            <?php endwhile ?>
            <!-- End Opening Container -->

            <!-- Start Explore LCAD Container -->
            <?php while (have_rows('explore_lcad')) : the_row();?>
            <div class="explore-container col-12 col-md-6">
                <div class="explore-inner">
                    <!-- Tag -->
                    <?php if (get_sub_field('section_tag')): ?>
                        <h5 class="section-tag btn">
                            <?php the_sub_field('section_tag') ?>
                    </h5>
                    <?php endif; ?>
                    <div id="line-spacer">

                    </div>
                    <!-- Start Explore LCAD List -->
                    <?php while (have_rows('explore_lcad_navigation')) : the_row();?>
                        <div class="nav-title">
                            <!-- Nav Title -->
                            <?php if (get_sub_field('navigation_title') && get_sub_field('navigation_link')): ?>
                                <div class="nav-link">
                                    <a href="<?php the_sub_field('navigation_link') ?>"><?php the_sub_field('navigation_title') ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile ?>
                    <!-- End Events List -->
                </div>
            </div>
            <?php endwhile ?>
            <!-- End Explore LCAD Container -->
        </div>

        <!-- Start Navigation Cards -->
        <?php while (have_rows('slider_repeater')) : the_row();?>
            <div>

                <!-- Start Card Image -->
                <div>
                    <?php $image = get_sub_field('slider_image'); ?>
                    <img src="<?php the_sub_field('slider_image'); ?>"> 
                </div>
                <!-- End Card Image -->

                <!-- Start Card Content -->
                <?php if (get_sub_field('slide_caption')): ?>
                    <!-- Title -->
                    <div>
                        <?php the_sub_field('slide_caption') ?>
                    </div>
                    <!-- Text -->
                    <div>
                        <?php the_sub_field('slide_caption') ?>
                    </div>
                    <!-- Button -->
                    <div>
                        <?php the_sub_field('slide_caption') ?>
                    </div>
                <?php endif; ?>
                <!-- End Slider Caption -->

            </div>
        <?php endwhile ?>
        <!-- End Navigation Cards -->
    </div>
</section>

<!-- ========================================================================= -->
<!-- END HERO SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START FAQ SECTION -->
<!-- ========================================================================= -->

<section>
    <div>
        <div>

            <!-- Start Section Header Container -->
            <?php while (have_rows('experience_content')) : the_row();?>
                <div>
                    <!-- Section Tag -->
                    <?php if (get_sub_field('experience_tag')): ?>
                        <div>
                            <h4><?php the_sub_field('experience_tag') ?></h4>
                        </div>
                    <?php endif; ?>
                    <!-- Section Title -->
                    <?php if (get_sub_field('experience_header')): ?>
                        <div>
                            <h2><?php the_sub_field('experience_header') ?></h2>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile ?>
            <!-- End Section Header Container -->

            <!-- Start Accordion Container -->
            <?php while (have_rows('experience_content')) : the_row();?>
                <div>
                    <!-- Accordion -->
                </div>
            <?php endwhile ?>
            <!-- End Accordion Container -->

        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- END FAQ SECTION -->
<!-- ========================================================================= -->

<?php get_footer(); ?>