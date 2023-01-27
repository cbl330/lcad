<?php get_header(); ?>

<!-- ========================================================================= -->
<!-- START HERO SECTION -->
<!-- ========================================================================= -->

<section id="alumni-hero" class="container-fluid">
    <div class="hero-container row align-items-center">

        <!-- Start Content Container -->
        <?php while (have_rows('hero_content')) : the_row();?>
        <div class="hero-content-container col-6">
            <!-- Title Wrap -->
            <?php if (get_sub_field('hero_header')): ?>
                <div class="hero-title-wrap">
                        <?php the_sub_field('hero_header') ?>
                </div>
            <?php endif ?>

            <!-- Content Wrap -->
            <div class="hero-text-wrap">
                <?php if (get_sub_field('hero_text')): ?>
                    <?php the_sub_field('hero_text') ?>
                <?php endif ?>
            </div>

            <!-- Button Wrap -->
            <?php if (get_sub_field('hero_button_text') && get_sub_field('hero_button_link')): ?>
                <div class="hero-btn-wrap">
                    <a class="hero-btn" href="<?php the_sub_field('hero_button_link') ?>"><?php the_sub_field('hero_button_text') ?></a>
                </div>
            <?php endif; ?>
        </div>
        <?php endwhile; ?>
        <!-- End Content Container -->

        <!-- Start Image Container -->
        <div class="hero-image-container col-6">
            <?php $image = get_field('hero_image'); ?>
            <img class="hero-image" src="<?php echo $image['sizes']['hero-image']; ?>">
        </div>
        <!-- End Image Container -->

    </div>
</section>

<!-- ========================================================================= -->
<!-- END HERO SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START ALUMNI NEWS SECTION -->
<!-- ========================================================================= -->

<?php get_template_part('resources/partials/recent', 'news'); ?>

<!-- ========================================================================= -->
<!-- END ALUMNI NEWS SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START STUDENT STORIES SECTION -->
<!-- ========================================================================= -->

<section id="student-stories" class="container-fluid">
    <div class="student-stories-container row">
        
        <!-- Start Section Header -->
        <?php if (get_field('section_header')): ?>
            <div class="stories-section-header row">
                <!-- Section Title -->
                <div class="section-title-wrap col-8">
                    <h2 class="section-title"><?php the_field('section_header') ?></h2>
                </div>
                <!-- Section Button -->
                <div class="section-btn col-4">
                    <a class="view-more-btn" href="#">View More Stories</a>
                </div>
            </div>
        <?php endif; ?>
        <!-- End Section Header -->

        <!-- Start Left Cell -->
        <?php while (have_rows('featured_story')) : the_row();?>
            <div class="featured-story-container col-8">
                <!-- Featured Story Image -->
                <?php if (get_sub_field('featured_story_image')): ?>
                    <div class="featured-story-image-wrap">
                        <a href="<?php get_sub_field('featured_story_video'); ?>" class="featured-story-video-link">
                            <?php $image = get_sub_field('featured_story_image'); ?>
                            <img class="featured-story-image" src="<?php echo $image['sizes']['student-work-lg']; ?>">
                            <span class="featured-video-icon dashicons dashicons-controls-play"></span>
                        </a>
                    </div>
                <?php endif; ?>
                <!-- Featured Story Title -->
                <?php if (get_sub_field('featured_story_name_graphic')): ?>
                    <a href="<?php get_sub_field('featured_story_link'); ?>" class="featured-story-link">
                        <div class="featured-story-title-wrap">
                        <h3 class="featured-story-title">LCAD <span class="blue-text">+</span> <img src="<?php the_sub_field('featured_story_name_graphic') ?>" alt="name-graphic" class="name-graphic"></h3>
                        </div>
                    </a>
                <?php endif; ?>
                <!-- Featured Story Sub Title -->
                <?php if (get_sub_field('featured_story_sub_title')): ?>
                    <div class="featured-story-sub-wrap">
                        <h4 class="featured-story-sub"><?php the_sub_field('featured_story_sub_title') ?></h4>
                    </div>
                <?php endif; ?>
                <!-- Featured Story Content -->
                <?php if (get_sub_field('featured_story_text')): ?>
                    <div class="featured-story-content">
                        <?php the_sub_field('featured_story_text') ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
        <!-- End Left Cell -->

        <!-- Start Right Cell -->
        <div class="student-story-container col-4 row">
            <?php while (have_rows('student_stories')) : the_row();?>
                <div class="student-story-wrap row">
                    <!-- Start Story Content -->
                    <?php while (have_rows('student_content')) : the_row();?>
                        <div class="story-content-wrap col-8">
                            <!-- Story Title -->
                            <div class="story-title-wrap">
                                <a href="<?php get_sub_field('student_link'); ?>" class="student-story-link">
                                    <h3 class="story-title">LCAD <span class="blue-text">+</span> <img src="<?php the_sub_field('name_graphic') ?>" alt="name-graphic" class="name-graphic"></h3>
                                </a>
                            </div>
                            <!-- Story Sub Title -->
                            <div class="story-sub-title-wrap">
                                <h4 class="story-sub"><?php the_sub_field('sub_header') ?></h4>
                            </div>
                            <!-- Story Content -->
                            <div class="story-text-wrap">
                                <?php the_sub_field('text') ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <!-- End Story Content -->

                    <!-- Start Story Video -->
                    <?php if (get_sub_field('student_story_image')): ?>
                        <div class="story-video-container col-4">
                            <div class="story-video-wrap">
                                <a href="<?php get_sub_field('student_video'); ?>" class="student-story-link">
                                    <?php $image = get_field('student_story_image'); ?>
                                    <img class="student-story-image" src="<?php echo $image['sizes']['student-work-sm']; ?>">
                                    <span class="video-icon dashicons dashicons-controls-play"></span>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- End Story Video -->
                </div>
            <?php endwhile; ?>
        </div>
        <!-- End Right Cell -->

    </div>
</section>

<!-- ========================================================================= -->
<!-- END STUDENT STORIES SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START INFO CARDS SECTION -->
<!-- ========================================================================= -->
<section id="info-cards" class="container-fluid">
    <div class="info-cards-container">

        <!-- Start Info Cards -->
        <?php if( have_rows('alumni_program_cards') ): ?>
            <div class="card-cell info-card-container row">
                <?php while (have_rows('alumni_program_cards')) : the_row(); ?>
                
                        <!-- Start Card -->
                        <div class="info-card container-fluid col-xs-12 col-lg-3 d-flex flex-column">
                                <!-- Card Image -->
                                <div class="card-image-wrap">
                                    <?php $image = get_sub_field('card_image'); ?>
                                    <img class="card-image" src="<?php echo $image['sizes']['info-card']; ?>">
                                </div>

                                <!-- Card Content -->
                                <?php while (have_rows('card_content')) : the_row();?>
                                    <div class="card-content d-flex flex-column flex-grow-1">
                                        <!-- Card Header -->
                                        <?php if( get_sub_field('header') ): ?>
                                            <div class="card-title">
                                                <?php the_sub_field('header') ?>
                                            </div>
                                        <?php endif; ?>
                                        <!-- Card Details -->
                                        <?php if( get_sub_field('text') ): ?>
                                            <div class="card-details">
                                                <?php the_sub_field('text') ?>
                                            </div>
                                        <?php endif; ?>
                                        <!-- Card Button -->
                                        <?php if( get_sub_field('button_text') && get_sub_field('button_link') ) : ?>
                                            <a href="<?php the_field('button_link') ?>" class="card-link card-btn">
                                                <?php the_sub_field('button_text') ?>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile ?>
                        </div>
                        <!-- End Card -->
                        
                <?php endwhile ?>
            </div>
        <?php endif; ?>
        <!-- End Info Cards -->

    </div>
</section>

<!-- ========================================================================= -->
<!-- END INFO CARDS SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START ALUMNI DIRECTORY SECTION -->
<!-- ========================================================================= -->

<?php get_template_part('resources/partials/alumni', 'directory'); ?>

<!-- ========================================================================= -->
<!-- END ALUMNI DIRECTORY SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START ALUMNI PROGRAM SECTION -->
<!-- ========================================================================= -->

<section id="alumni-perks" class="container-fluid">
    <div class="alumni-perks-container row">

        <!-- Start Left Cell -->
        <?php while (have_rows('program_details')) : the_row();?>
            <div class="alumni-program-container col-7">
                <!-- Section Title -->
                <?php if (get_sub_field('header')): ?>
                    <div class="program-title-wrap">
                        <h2 class="program-title"><?php the_sub_field('header') ?></h2>
                    </div>
                <?php endif; ?>

                <!-- Section Content -->
                <?php if (get_sub_field('text')): ?>
                    <div class="program-content-wrap">
                        <?php the_sub_field('text') ?>
                    </div>
                <?php endif; ?>
                
                <!-- FAQ Container -->
                <div class="program-faq-container">
                    <!-- Title -->
                    <h3 class="faq-title"><?php the_sub_field('faq_header') ?></h3>
                    
                    <!-- Start FAQ -->
                    <?php
                    // check if the repeater field has rows of data
                    if( have_rows('faq') ):
                        $i = 1; // Set the increment variable
                    ?>

                        <!-- Start Accordion -->
                        <div class="faq-accordion row">

                            <?php
                            // loop through the rows of data for the tab header
                            while ( have_rows('faq') ) : the_row();
                                $header = get_sub_field('question');
                                $content = get_sub_field('answer');
                            ?>
                            
                            <!-- Start Left Panel -->
                            <div class="accordion-item <?php echo $class; ?>">

                                <h5 id="heading-<?php echo $i; ?>" class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $i; ?>">
                                        <?php echo $header; ?>
                                    </button>
                                </h5>
                            
                                <div id="collapse-<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="heading-<?php echo $i; ?>" data-bs-parent="#accordion-general">
                                    <div class="accordion-body">
                                        <?php echo $content; ?>
                                    </div>
                                </div>

                            </div> 
                            <!-- End Left Panel -->
                            
                            
                            <?php
                                $i++; // Increment the increment variable
                                endwhile; //End the loop
                            // endif;
                            ?>

                        </div>
                        <!-- End Accordion -->

                    <?php endif; ?>
                    <!-- End FAQ -->

                </div>
            </div>
        <?php endwhile; ?>
        <!-- End Left Cell -->

        <!-- Start Right Cell -->
        <?php while (have_rows('program_perks')) : the_row();?>
            <div class="alumni-perks-detail-container col-5">

                <!-- Start Title Container -->
                <?php if (get_sub_field('program_header')): ?>
                    <div class="">
                        <h3 class=""><?php the_sub_field('program_header') ?></h3>
                    </div>
                <?php endif; ?>
                <!-- End Title Container -->

                <!-- Start List Container -->
                <?php while (have_rows('perk_repeater')) : the_row();?>
                    <div class="program-list-container">
                        <!-- List Title -->
                        <div class="list-title-wrap">
                            <h4 class="list-title"><?php the_sub_field('perk_title') ?></h4>
                        </div>
                        <!-- List Detail -->
                        <?php while (have_rows('perk_list')) : the_row();?>
                            <ul class="list-detail-wrap">
                                <li class="list-detail"><?php the_sub_field('perk_details') ?></li>
                            </ul>
                        <?php endwhile; ?>
                    </div>
                <?php endwhile; ?>
                <!-- End List Container -->

            </div>
        <?php endwhile; ?>
        <!-- End Right Cell -->

    </div>
</section>

<!-- ========================================================================= -->
<!-- END ALUMNI PROGRAM SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START INSTAGRAM/INQUIRY SECTION -->
<!-- ========================================================================= -->

<?php get_template_part('resources/partials/student', 'inquiry'); ?>

<!-- ========================================================================= -->
<!-- END INSTAGRAM/INQUIRY SECTION -->
<!-- ========================================================================= -->

<?php get_footer(); ?>