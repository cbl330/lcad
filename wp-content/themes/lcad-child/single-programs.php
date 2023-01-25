<?php get_header(); ?>

<!-- ========================================================================= -->
<!-- START HERO SECTION -->
<!-- ========================================================================= -->

<section id="program-hero" class="container-fluid">
    <div class="hero-container">

        <!-- Start Image Background -->
        <div class="section-background">
            <?php
                if ( has_post_thumbnail() ) :
                    the_post_thumbnail();
                endif;
            ?>
        </div>
        <!-- End Image Background -->

        <!-- Start Post Title -->
        <div class="page-tag">
            <h1 class="post-title"><?php the_title(); ?></h1>
        </div>
        <!-- End Post Title -->

        <!-- Start Info Cards -->
        <?php if( have_rows('information_cards') ): ?>
            <div class="card-cell info-card-container row">
                <?php while (have_rows('information_cards')) : the_row(); ?>
                
                        <!-- Start Card -->
                        <div class="info-card container-fluid col-xs-12 col-lg-3 d-flex flex-column">
                            <!-- <a href="<?php //the_field('card_link') ?>" class="card-link"> -->
                                <!-- Card Image -->
                                <div class="card-image-wrap">
                                    <?php $image = get_sub_field('card_image'); ?>
                                    <img class="card-image" src="<?php echo $image['sizes']['info-card']; ?>">
                                </div>

                                <!-- Card Content -->
                                <?php while (have_rows('card_content')) : the_row();?>
                                    <div class="card-content d-flex flex-column flex-grow-1">
                                        <!-- Card Header -->
                                        <?php if( get_sub_field('card_header') ): ?>
                                            <div class="card-title">
                                                <?php the_sub_field('card_header') ?>
                                            </div>
                                        <?php endif; ?>
                                        <!-- Card Details -->
                                        <?php if( get_sub_field('card_details') ): ?>
                                            <div class="card-details">
                                                <?php the_sub_field('card_details') ?>
                                            </div>
                                        <?php endif; ?>
                                        <!-- Card Button -->
                                        <?php if( get_sub_field('card_button_text') ): ?>
                                            <a href="<?php the_field('card_link') ?>" class="card-link card-btn">
                                                <?php the_sub_field('card_button_text') ?>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile ?>
                            <!-- </a> -->
                        </div>
                        <!-- End Card -->
                <?php endwhile ?>
            </div>
        <?php endif; ?>

        <?php //reset_rows(); ?>
        <!-- End Info Cards -->

    </div>
</section>

<!-- ========================================================================= -->
<!-- END HERO SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START LOGO SECTION -->
<!-- ========================================================================= -->

<section id="logo-section" class="container-fluid">
    <div class="logo-container row">

        <!-- Start Section Header -->
        <div class="logo-header">
            <!-- Title -->
            <?php if (get_field('logo_section_header')) : ?>
                <h2 class="logo-title">
                    <?php the_field('logo_section_header'); ?>
                </h2>
            <?php endif; ?>
            <!-- Sub Title -->
            <?php if (get_field('logo_section_header')) : ?>
                <h3 class="logo-sub-title">
                    <?php the_field('logo_section_sub_header'); ?>
                </h3>
            <?php endif; ?>
        </div>
        <!-- End Section Header -->

        <!-- Start Logo Container -->
        <?php if( have_rows('logo_repeater') ): ?>
            <div class="logo-container row align-items-center">
                <?php while (have_rows('logo_repeater')) : the_row();?>
                    <!-- Logos -->
                    <div class="logo-wrap column">
                        <?php $image = get_sub_field('logo'); ?>
                        <img class="logo" src="<?php echo $image['sizes']['program-logo']; ?>">
                    </div>
                    <?php //reset_rows(); ?>
                <?php endwhile ?>

            </div>
        <?php endif; ?>

        <?php //reset_rows(); ?>
        <!-- End Logo Container -->

    </div>
    
</section>

<!-- ========================================================================= -->
<!-- END LOGO SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START STAFF DIRECTORY SECTION -->
<!-- ========================================================================= -->

<?php get_template_part('resources/partials/staff', 'directory'); ?>

<!-- ========================================================================= -->
<!-- END STAFF DIRECTORY SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START STUDENT WORK SECTION -->
<!-- ========================================================================= -->

<section id="student-work">
    <?php //get_template_part('resources/partials/student', 'work'); ?>
</section>

<!-- ========================================================================= -->
<!-- END STUDENT WORK SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START LCAD NEWS SECTION -->
<!-- ========================================================================= -->

<?php get_template_part('resources/partials/recent', 'news'); ?>

<!-- ========================================================================= -->
<!-- END LCAD NEWS SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START FAQ SECTION -->
<!-- ========================================================================= -->

<?php //get_template_part('resources/partials/general', 'faq'); ?>

<!-- ========================================================================= -->
<!-- END FAQ SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START INQUIRY SECTION -->
<!-- ========================================================================= -->

<?php get_template_part('resources/partials/student', 'inquiry'); ?>

<!-- ========================================================================= -->
<!-- END INQUIRY SECTION -->
<!-- ========================================================================= -->

<?php get_footer(); ?>