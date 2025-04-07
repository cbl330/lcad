<?php get_header(); ?>

<!-- ========================================================================= -->
<!-- START HERO SECTION -->
<!-- ========================================================================= -->

<section id="archive-header" class="student-life-archive-header container-fluid">
    <div class="archive-header-container student-life-page-container row">

        <!-- Start Hero Header -->
        <div class="hero-header-container row">
            <!-- Start Left Cell -->
            <div class="student-life-left-container left-container col-xs-12 col-lg-4">
                <!-- Title Wrap -->
                <?php if (get_field('hero_section_title_slp')): ?>
                    <div class="student-life-title-wrap title-wrap">
                        <?php the_field('hero_section_title_slp') ?>
                    </div>
                <?php endif ?>
            </div>
            <!-- End Left Cell -->

            <!-- Start Right Cell -->
            <?php while (have_rows('hero_section_content_slp')) : the_row();?>
                <div class="student-life-right-container right-container col-xs-12 col-lg-8">
                    
                    <!-- Start Text Wrap -->
                    <?php if (get_sub_field('hero_content_slp')): ?>
                        <div class="student-life-text-wrap text-wrap">
                            <?php the_sub_field('hero_content_slp') ?>
                        </div>
                    <?php endif ?>
                    <!-- End Text Wrap -->

                    <!-- Start Buttons Wrap -->
                    <?php if (get_sub_field('hero_button_1_text_slp') && get_sub_field('hero_button_1_link_slp') || get_sub_field('hero_button_2_text_slp') && get_sub_field('hero_button_2_link_slp')): ?>
                        <div class="hero-buttons-wrap">

                            <!-- Button Left -->
                            <?php if (get_sub_field('hero_button_1_text_slp') && get_sub_field('hero_button_1_link_slp')): ?>
                                <div class="hero-btn-wrap hero-btn-wrap-1">
                                    <a class="hero-btn btn-1" href="<?php the_sub_field('hero_button_1_link_slp') ?>"><?php the_sub_field('hero_button_1_text_slp') ?></a>
                                </div>
                            <?php endif; ?>
                    
                            <!-- Button Right -->
                            <?php if (get_sub_field('hero_button_2_text_slp') && get_sub_field('hero_button_2_link_slp')): ?>
                                <div class="hero-btn-wrap hero-btn-wrap-2">
                                    <a class="hero-btn btn-1" href="<?php the_sub_field('hero_button_2_link_slp') ?>"><?php the_sub_field('hero_button_2_text_slp') ?></a>
                                </div>
                            <?php endif; ?>

                        </div>
                    <?php endif; ?>
                    <!-- End Buttons Wrap -->

                </div>
            <?php endwhile ?>
            <!-- End Right Cell -->
        </div>
        <!-- End Hero Header -->

        <!-- Start Info Cards -->
        <?php if( have_rows('information_cards_slp') ): ?>
            <div class="card-cell info-card-container row">
                <?php while (have_rows('information_cards_slp')) : the_row(); ?>
                
                        <!-- Start Card -->
                        <div class="info-card container-fluid col-xs-12 col-lg-3 d-flex flex-column">
                            <!-- Card Image -->
                            <div class="card-image-wrap">
                                <?php $image = get_sub_field('card_image_slp'); ?>
                                <img class="card-image" src="<?php echo $image['sizes']['info-card']; ?>">
                            </div>

                            <!-- Card Content -->
                            <?php while (have_rows('card_content_slp')) : the_row();?>
                                <div class="card-content d-flex flex-column flex-grow-1">
                                    <!-- Card Header -->
                                    <?php if( get_sub_field('card_header_slp') ): ?>
                                        <div class="card-title">
                                            <?php the_sub_field('card_header_slp') ?>
                                        </div>
                                    <?php endif; ?>
                                    <!-- Card Details -->
                                    <?php if( get_sub_field('card_details_slp') ): ?>
                                        <div class="card-details">
                                            <?php the_sub_field('card_details_slp') ?>
                                        </div>
                                    <?php endif; ?>
                                    <!-- Card Button -->
                                    <?php if (get_sub_field('card_button_text_slp') && get_sub_field('card_link_slp')): ?>
                                        <a href="<?php the_field('card_link_slp') ?>" class="card-link card-btn"><?php the_sub_field('card_button_text_slp') ?></a>
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
<!-- END HERO SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START VALUES SECTION -->
<!-- ========================================================================= -->

<section id="student-life-values" class="container-fluid">
    <div class="values-container row">

        <!-- Start Section Header Container -->
        <!-- ------------------------------ -->
        <div class="values-header-container col-xs-12">
            <!-- Section Title -->
            <?php if (get_field('masonry_section_header_slp')): ?>
                <div class="header-title-wrap">
                    <h2 class="header-title title"><?php the_field('masonry_section_header_slp') ?></h2>
                </div>
            <?php endif; ?>
        </div>
        <!-- ---------------------------- -->
        <!-- End Section Header Container -->

        <!-- Start Masonry Block Container -->
        <!-- ------------------------------ --> 
        <div class="masonry-container">

            <!-- Start Masonry Row -->
            <div class="block-row row">
                <!-- Start Image Block - Block 1 -->
                <!-- --------------------------- -->
                <?php while (have_rows('masonry_block_1_slp')) : the_row();?>
                    <div class="block-container block-1 image-block block col-xs-12 col-lg-6">
                        <div class="block-wrap block-wrap-1" style="background-image:url(<?php the_sub_field('block_1_image_slp'); ?>);">
                            <!-- Block Image -->
                            <!-- <div class="block-image-wrap block-1-image-wrap">
                                <img class="block-image block-1-image" src="<?php //the_sub_field('block_1_image_slp'); ?>"> 
                            </div> -->
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- ------------------------- -->
                <!-- End Image Block - Block 1 -->


                <!-- Start Content Block - Block 2 -->
                <!-- ----------------------------- -->
                <?php //while (have_rows('masonry_block_2_slp')) : the_row();?>
                    <div class="block-container block-2 content-block block col-xs-12 col-lg-3">
                        <div class="block-wrap block-wrap-2">
                            <!-- Block Title -->
                            <?php //if (get_sub_field('block_2_header_slp')): ?>
                                <div class="block-title-wrap block-2-title-wrap">
                                    <?php //the_sub_field('block_2_header_slp') ?>
                                    <h3>Average of 1,200+ students enrolled yearly.</h3>
                                </div>
                            <?php //endif; ?>
                            <!-- Block Content -->
                            <?php //if (get_sub_field('block_2_text_slp')): ?>
                                <div class="block-text-wrap block-2-text-wrap">
                                    <?php //the_sub_field('block_2_text_slp') ?>
                                    <p>At LCAD, we pride ourselves in providing intimate, small classrooms so all students can be given enough opportunity and time to help grow their skills.</p>
                                </div>
                            <?php //endif; ?>
                        </div>
                    </div>
                <?php //endwhile; ?>
                <!-- --------------------------- -->
                <!-- End Content Block - Block 2 -->


                <!-- Start Image Block - Block 3 -->
                <!-- --------------------------- -->
                <?php while (have_rows('masonry_block_3_slp')) : the_row();?>
                <!-- <div class="block-container block-1-container block-1 block-image custom-block custom-bg custom-flex custom-radius" style="background-image:url(<?php //the_sub_field('block_1_image_ph'); ?>);"> -->
                    <div class="block-container block-3 image-block block col-xs-12 col-lg-3">
                        <div class="block-wrap block-wrap-3" style="background-image:url(<?php the_sub_field('block_3_image_slp'); ?>);">
                            <!-- Block Image -->
                            <!-- <div class="block-image-wrap block-3-image-wrap">
                                <img class="block-image block-3-image" src="<?php //the_sub_field('block_3_image_slp'); ?>"> 
                            </div> -->
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- ------------------------- -->
                <!-- End Image Block - Block 3 -->
            </div>
            <!-- Start Masonry Row -->
            
            
            <?php //================================================================================================== ?>           


            <!-- Start Masonry Row -->
            <div class="block-row row">
                <!-- Start Content Block - Block 4 -->
                <!-- ----------------------------- -->
                <?php while (have_rows('masonry_block_4_slp')) : the_row();?>
                    <div class="block-container block-4 content-block block col-xs-12 col-lg-3">
                        <div class="block-wrap block-wrap-4">
                            <!-- Block Title -->
                            <?php if (get_sub_field('block_4_header_slp')): ?>
                                <div class="block-title-wrap block-4-title-wrap">
                                    <?php the_sub_field('block_4_header_slp') ?>
                                </div>
                            <?php endif; ?>
                            <!-- Block Content -->
                            <?php if (get_sub_field('block_4_text_slp')): ?>
                                <div class="block-text-wrap block-4-text-wrap">
                                    <?php the_sub_field('block_4_text_slp') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- --------------------------- -->
                <!-- End Content Block - Block 4 -->


                <!-- Start Content Block - Block 5 -->
                <!-- ----------------------------- -->
                <?php while (have_rows('masonry_block_5_slp')) : the_row();?>
                    <div class="block-container block-5 content-block block col-xs-12 col-lg-3">
                        <div class="block-wrap block-wrap-5">
                            <!-- Block Title -->
                            <?php if (get_sub_field('block_5_header_slp')): ?>
                                <div class="block-title-wrap block-5-title-wrap">
                                    <?php the_sub_field('block_5_header_slp') ?>
                                </div>
                            <?php endif; ?>
                            <!-- Block Content -->
                            <?php if (get_sub_field('block_5_text_slp')): ?>
                                <div class="block-text-wrap block-5-text-wrap">
                                    <?php the_sub_field('block_5_text_slp') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- --------------------------- -->
                <!-- End Content Block - Block 5 -->


                <!-- Start Image Block - Block 6 -->
                <!-- --------------------------- -->
                <?php while (have_rows('masonry_block_6_slp')) : the_row();?>
                    <div class="block-container block-6 image-block block col-xs-12 col-lg-3">
                        <div class="block-wrap block-wrap-6" style="background-image:url(<?php the_sub_field('block_6_image_slp'); ?>);">
                            <!-- Block Image -->
                            <!-- <div class="block-image-wrap block-6-image-wrap">
                                <img class="block-image block-6-image" src="<?php //the_sub_field('block_6_image_slp'); ?>"> 
                            </div> -->
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- ------------------------- -->
                <!-- End Image Block - Block 6 -->

                
                <!-- Start Content Block - Block 7 -->
                <!-- ----------------------------- -->
                <?php while (have_rows('masonry_block_7_slp')) : the_row();?>
                    <div class="block-container block-7 content-block block col-xs-12 col-lg-3">
                        <div class="block-wrap block-wrap-7">
                            <!-- Block Title -->
                            <?php if (get_sub_field('block_7_header_slp')): ?>
                                <div class="block-title-wrap block-7-title-wrap">
                                    <?php the_sub_field('block_7_header_slp') ?>
                                </div>
                            <?php endif; ?>
                            <!-- Block Content -->
                            <?php if (get_sub_field('block_7_text_slp')): ?>
                                <div class="block-text-wrap block-7-text-wrap">
                                    <?php the_sub_field('block_7_text_slp') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- --------------------------- -->
                <!-- End Content Block - Block 7 -->
            </div>
            <!-- End Masonry Row -->

        </div>
        <!-- ------------------------------ -->
        <!-- End Masonry Block Container -->

    </div>
</section>

<!-- ========================================================================= -->
<!-- END VALUES SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START STUDENT WORKS SECTION -->
<!-- ========================================================================= -->

<?php get_template_part('resources/partials/student', 'work'); ?>

<!-- ========================================================================= -->
<!-- END STUDENT WORKS SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START STUDENT STORIES SECTION -->
<!-- ========================================================================= -->

<?php get_template_part('resources/partials/student', 'stories'); ?>

<!-- ========================================================================= -->
<!-- END STUDENT STORIES SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START INQUIRY SECTION -->
<!-- ========================================================================= -->

<?php get_template_part('resources/partials/student', 'inquiry'); ?>

<!-- ========================================================================= -->
<!-- END INQUIRY SECTION -->
<!-- ========================================================================= -->

<?php get_footer(); ?>