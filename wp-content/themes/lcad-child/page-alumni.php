<?php get_header(); ?>

<!-- ========================================================================= -->
<!-- START HERO SECTION -->
<!-- ========================================================================= -->

<section id="alumni-hero" class="container-fluid">
    <div class="hero-container row align-items-center">

        <!-- Start Content Container -->
        <?php while (have_rows('hero_content_pal')) : the_row();?>
            <div class="hero-content-container col-6">
                <!-- Title Wrap -->
                <?php if (get_sub_field('hero_header_pal')): ?>
                    <div class="hero-title-wrap">
                            <?php the_sub_field('hero_header_pal') ?>
                    </div>
                <?php endif ?>

                <!-- Content Wrap -->
                <div class="hero-text-wrap">
                    <?php if (get_sub_field('hero_text_pal')): ?>
                        <?php the_sub_field('hero_text_pal') ?>
                    <?php endif ?>
                </div>

                <!-- Button Wrap -->
                <?php if (get_sub_field('hero_button_text_pal') && get_sub_field('hero_button_link_pal')): ?>
                    <div class="hero-btn-wrap">
                        <a class="hero-btn" href="<?php the_sub_field('hero_button_link_pal') ?>"><?php the_sub_field('hero_button_text_pal') ?></a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
        <!-- End Content Container -->

        <!-- Start Image Container -->
        <div class="hero-image-container col-6">
            <?php $image = get_field('hero_image_pal'); ?>
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

<?php get_template_part('resources/partials/alumni', 'news'); ?>

<!-- ========================================================================= -->
<!-- END ALUMNI NEWS SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START STUDENT STORIES SECTION -->
<!-- ========================================================================= -->

<?php get_template_part('resources/partials/student', 'stories'); ?>

<!-- ========================================================================= -->
<!-- END STUDENT STORIES SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START INFO CARDS SECTION -->
<!-- ========================================================================= -->

<section id="info-cards" class="container-fluid">
    <div class="info-cards-container">

        <!-- Start Section Header -->
        <?php if( get_field('info_card_section_header_pal') ): ?>
            <div class="section-header-wrap">
                <h2 class="section-header"><?php the_field('info_card_section_header_pal') ?></h2>
            </div>
        <?php endif; ?>
        <!-- End Section Header -->

        <!-- Start Info Cards -->
        <?php if( have_rows('alumni_program_cards_pal') ): ?>
            <div class="card-cell info-card-container row">
                <?php while (have_rows('alumni_program_cards_pal')) : the_row(); ?>
                
                        <!-- Start Card -->
                        <div class="info-card container-fluid col-xs-12 col-lg-3 d-flex flex-column">
                                <!-- Card Image -->
                                <div class="card-image-wrap">
                                    <?php $image = get_sub_field('card_image_pal'); ?>
                                    <img class="card-image" src="<?php echo $image['sizes']['info-card']; ?>">
                                </div>

                                <!-- Card Content -->
                                <?php while (have_rows('card_content_pal')) : the_row();?>
                                    <div class="card-content d-flex flex-column flex-grow-1">
                                        <!-- Card Header -->
                                        <?php if( get_sub_field('header_pal') ): ?>
                                            <div class="card-title">
                                                <?php the_sub_field('header_pal') ?>
                                            </div>
                                        <?php endif; ?>
                                        <!-- Card Details -->
                                        <?php if( get_sub_field('text_pal') ): ?>
                                            <div class="card-details">
                                                <?php the_sub_field('text_pal') ?>
                                            </div>
                                        <?php endif; ?>
                                        <!-- Card Button -->
                                        <?php if( get_sub_field('button_text_pal') && get_sub_field('button_link_pal') ) : ?>
                                            <a href="<?php the_field('button_link_pal') ?>" class="card-link card-btn"><?php the_sub_field('button_text_pal') ?></a>
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
        <?php while (have_rows('program_details_pal')) : the_row();?>
            <div class="alumni-program-container col-7">
                <!-- Section Title -->
                <?php if (get_sub_field('header_pal')): ?>
                    <div class="program-title-wrap">
                        <h2 class="program-title"><?php the_sub_field('header_pal') ?></h2>
                    </div>
                <?php endif; ?>

                <!-- Section Content -->
                <?php if (get_sub_field('text_pal')): ?>
                    <div class="program-content-wrap">
                        <?php the_sub_field('text_pal') ?>
                    </div>
                <?php endif; ?>
                
                <!-- FAQ Container -->
                <div class="program-faq-container">
                    <!-- Title -->
                    <h3 class="faq-title"><?php the_sub_field('faq_header_pal') ?></h3>
                    
                    <!-- Start FAQ -->
                    <?php
                    // check if the repeater field has rows of data
                    if( have_rows('faq_pal') ):
                        $i = 1; // Set the increment variable
                    ?>

                        <!-- Start Accordion -->
                        <div class="faq-accordion row">

                            <?php
                            // loop through the rows of data for the tab header
                            while ( have_rows('faq_pal') ) : the_row();
                                $header = get_sub_field('question_pal');
                                $content = get_sub_field('answer_pal');
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
        <?php while (have_rows('program_perks_pal')) : the_row();?>
            <div class="alumni-perks-detail-container col-5">

                <!-- Start Title Container -->
                <?php if (get_sub_field('program_header_pal')): ?>
                    <div class="">
                        <h3 class=""><?php the_sub_field('program_header_pal') ?></h3>
                    </div>
                <?php endif; ?>
                <!-- End Title Container -->

                <!-- Start List Container -->
                <?php while (have_rows('perk_repeater_pal')) : the_row();?>
                    <div class="program-list-container">
                        <!-- List Title -->
                        <div class="list-title-wrap">
                            <h4 class="list-title"><?php the_sub_field('perk_title_pal') ?></h4>
                        </div>
                        <!-- List Detail -->
                        <?php while (have_rows('perk_list_pal')) : the_row();?>
                            <ul class="list-detail-wrap">
                                <li class="list-detail"><?php the_sub_field('perk_details_pal') ?></li>
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