<!-- ========================================================================= -->
<!-- START HERO SECTION -->
<!-- ========================================================================= -->

<section>
    <div>
        <div>

            <!-- Start Header Container -->
            <?php while (have_rows('hero_content')) : the_row();?>
                <div>
                    <!-- Title Wrap -->
                    <div>
                        <?php if (get_sub_field('hero_header')): ?>
                        <h1><?php the_sub_field('hero_header') ?></h1>
                        <?php endif ?>
                    </div>

                    <!-- Filter Wrap -->
                    <?php if (get_sub_field('button_text') && get_sub_field('button_link')): ?>
                        <div>
                            <a href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile ?>
            <!-- End Header Container -->


            <!-- Start Featured Post Container -->
            <?php while (have_rows('hero_slider')) : the_row();?>
            <div>
                        
                    <!-- Start Featured Post Image -->
                    <div>
                        <?php $image = get_sub_field('slider_image'); ?>
                        <img src="<?php the_sub_field('slider_image'); ?>"> 
                    </div>
                    <!-- End Featured Post Image -->
                    
                    <!-- Start Featured Post Content -->
                    <?php while (have_rows('slider_repeater')) : the_row();?>
                        <div>
                            <!-- FP Category -->
                            <?php if (get_sub_field('experience_tag')): ?>
                                <div>
                                    <h4><?php the_sub_field('experience_tag') ?></h4>
                                </div>
                            <?php endif; ?>
                            <!-- FP Title -->
                            <?php if (get_sub_field('experience_header')): ?>
                                <div>
                                    <h2><?php the_sub_field('experience_header') ?></h2>
                                </div>
                            <?php endif; ?>
                            <!-- FP Excerpt -->
                            <?php if (get_sub_field('experience_paragraph')): ?>
                                <div>
                                    <p><?php the_sub_field('experience_paragraph') ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile ?>
                    <!-- End Featured Post Content -->

            </div>
            <?php endwhile ?>
            <!-- End Featured Post Container -->

        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- END HERO SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START ALUMNI NEWS SECTION -->
<!-- ========================================================================= -->

<section>
    <div>
        <div>

            <!-- Pull in template section for alumni news -->

        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- END ALUMNI NEWS SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START STUDENT WORKS SECTION -->
<!-- ========================================================================= -->

<section>
    <div>
        <div>

            <!-- Start Left Cell -->
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
                    <!-- Section Content -->
                    <?php if (get_sub_field('experience_paragraph')): ?>
                        <div>
                            <p><?php the_sub_field('experience_paragraph') ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile ?>
            <!-- End Left Cell -->

            <!-- Start Right Cell -->
            <?php while (have_rows('experience_content')) : the_row();?>
                    <div>
                        <!-- Section Blurb -->
                        <?php if (get_sub_field('experience_paragraph')): ?>
                            <div>
                                <p><?php the_sub_field('experience_paragraph') ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile ?>
            <!-- End Right Cell -->

            <!-- Start Staff Slider -->
            <?php while (have_rows('slider_repeater')) : the_row();?>
                    <div>

                        <!-- Start Slider Image -->
                        <div>
                            <?php $image = get_sub_field('slider_image'); ?>
                            <img src="<?php the_sub_field('slider_image'); ?>"> 
                        </div>
                        <!-- End Slider Image -->

                        <!-- Start Slider Caption -->
                        <?php if (get_sub_field('slide_caption')): ?>
                            <!-- Name -->
                            <div>
                                <?php the_sub_field('slide_caption') ?>
                            </div>
                            <!-- Department -->
                            <div>
                                <?php the_sub_field('slide_caption') ?>
                            </div>
                            <!-- Professor Bio -->
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
            <!-- End Staff Slider -->

        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- END STUDENT WORKS SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START LCAD NEWS SECTION -->
<!-- ========================================================================= -->

<section>
    <div>
        <div>

            <!-- Pull in template section for alumni news -->

        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- END LCAD NEWS SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START STUDENT STORIES SECTION -->
<!-- ========================================================================= -->

<section>
    <div>
        <div>

            <!-- Start Left Cell -->
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
                    <!-- Section Content -->
                    <?php if (get_sub_field('experience_paragraph')): ?>
                        <div>
                            <p><?php the_sub_field('experience_paragraph') ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile ?>
            <!-- End Left Cell -->

            <!-- Start Right Cell -->
            <?php while (have_rows('experience_content')) : the_row();?>
                    <div>
                        <!-- Section Blurb -->
                        <?php if (get_sub_field('experience_paragraph')): ?>
                            <div>
                                <p><?php the_sub_field('experience_paragraph') ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile ?>
            <!-- End Right Cell -->

            <!-- Start Staff Slider -->
            <?php while (have_rows('slider_repeater')) : the_row();?>
                    <div>

                        <!-- Start Slider Image -->
                        <div>
                            <?php $image = get_sub_field('slider_image'); ?>
                            <img src="<?php the_sub_field('slider_image'); ?>"> 
                        </div>
                        <!-- End Slider Image -->

                        <!-- Start Slider Caption -->
                        <?php if (get_sub_field('slide_caption')): ?>
                            <!-- Name -->
                            <div>
                                <?php the_sub_field('slide_caption') ?>
                            </div>
                            <!-- Department -->
                            <div>
                                <?php the_sub_field('slide_caption') ?>
                            </div>
                            <!-- Professor Bio -->
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
            <!-- End Staff Slider -->

        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- END STUDENT STORIES SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START INQUIRY SECTION -->
<!-- ========================================================================= -->

<section>
    <div>
        <div>

            <!-- Start Student Inquiry Container -->
            <div>
                <!-- Pull in template section for student inquiry -->
            </div>
            <!-- End Student Inquiry Container -->

        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- END INQUIRY SECTION -->
<!-- ========================================================================= -->