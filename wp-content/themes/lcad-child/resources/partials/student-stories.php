<section id="student-stories" class="container-fluid">
    <div class="student-stories-container row">
        
    
        <!-- Start Section Header -->
        <?php if (get_field('section_header_fss')): ?>
            <div class="stories-section-header row">
                <!-- Section Title -->
                <div class="section-title-wrap col-xs-12 col-md-8">
                    <h2 class="section-title"><?php the_field('section_header_fss') ?></h2>
                </div>
                <!-- Section Button -->
                <div class="section-btn col-xs-12 col-md-4">
                    <a class="view-more-btn" href="#">View More Stories</a>
                </div>
            </div>
        <?php endif; ?>
        <!-- End Section Header -->

        <!-- Start Left Cell -->
        <?php while (have_rows('featured_story_fss')) : the_row();?>
            <div class="featured-story-container col-xs-12 col-lg-6">
                <!-- Featured Story Image -->
                <?php if (get_sub_field('featured_story_image_fss')): ?>
                    <div class="featured-story-image-wrap">
                        <a href="<?php the_sub_field('featured_story_video_link_fss'); ?>" class="featured-story-video-link">
                            <?php $image = get_sub_field('featured_story_image_fss'); ?>
                            <img class="featured-story-image" src="<?php echo $image['sizes']['student-work-lg']; ?>">
                            <span class="featured-video-icon dashicons dashicons-controls-play"></span>
                        </a>
                    </div>
                <?php endif; ?>
                <!-- Featured Story Title -->
                <?php if (get_sub_field('featured_story_name_graphic_fss')): ?>
                    <a href="<?php the_sub_field('featured_story_link_fss'); ?>" class="featured-story-link">
                        <div class="featured-story-title-wrap">
                        <h3 class="featured-story-title">LCAD <span class="blue-text">+</span> <img src="<?php the_sub_field('featured_story_name_graphic_fss') ?>" alt="name-graphic" class="name-graphic"></h3>
                        </div>
                    </a>
                <?php endif; ?>
                <!-- Featured Story Sub Title -->
                <?php if (get_sub_field('featured_story_sub_title_fss')): ?>
                    <div class="featured-story-sub-wrap">
                        <h4 class="featured-story-sub"><?php the_sub_field('featured_story_sub_title_fss') ?></h4>
                    </div>
                <?php endif; ?>
                <!-- Featured Story Content -->
                <?php if (get_sub_field('featured_story_text_fss')): ?>
                    <div class="featured-story-content">
                        <?php the_sub_field('featured_story_text_fss') ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
        <!-- End Left Cell -->

        <!-- Start Right Cell -->
        <div class="student-story-container col-xs-12 col-lg-6 row">
            <?php while (have_rows('student_stories_fss')) : the_row();?>
                <div class="student-story-wrap row">
                    <!-- Start Story Content -->
                    <?php while (have_rows('student_content_fss')) : the_row();?>
                        <div class="story-content-wrap col-xs-12 col-md-8 order-2 order-md-1">
                            <!-- Story Title -->
                            <div class="story-title-wrap">
                                <a href="<?php the_sub_field('student_link_fss'); ?>" class="student-story-link">
                                    <h3 class="story-title">LCAD <span class="blue-text">+</span> <img src="<?php the_sub_field('name_graphic_fss') ?>" alt="name-graphic" class="name-graphic"></h3>
                                </a>
                            </div>
                            <!-- Story Sub Title -->
                            <div class="story-sub-title-wrap">
                                <h4 class="story-sub"><?php the_sub_field('sub_header_fss') ?></h4>
                            </div>
                            <!-- Story Content -->
                            <div class="story-text-wrap">
                                <?php the_sub_field('text_fss') ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <!-- End Story Content -->

                    <!-- Start Story Video -->
                    <?php if (get_sub_field('student_story_image_fss')): ?>
                        <div class="story-video-container col-xs-12 col-md-4 order-1 order-md-2">
                            <div class="story-video-wrap">
                                <a href="<?php get_sub_field('student_video_link_fss'); ?>" class="student-story-link">
                                    <?php //$image = get_sub_field('student_story_image_fss'); ?>
                                    <!-- <img class="student-story-image" src="<?php //echo $image['sizes']['student-work-sm']; ?>"> -->
                                    <img class="student-story-image" src="<?php the_sub_field('student_story_image_fss'); ?>">
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