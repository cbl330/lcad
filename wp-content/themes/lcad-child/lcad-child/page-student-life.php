<!-- ========================================================================= -->
<!-- START HERO SECTION -->
<!-- ========================================================================= -->

<section>
    <div>
        <div>

            <!-- Start Title Container -->
            <?php while (have_rows('hero_content')) : the_row();?>
            <div>
                <!-- Title Wrap -->
                <div>
                    <?php if (get_sub_field('hero_header')): ?>
                    <h1><?php the_sub_field('hero_header') ?></h1>
                    <?php endif ?>
                </div>
            </div>
            <?php endwhile ?>
            <!-- End Title Container -->


            <!-- Start Content Container -->
            <?php while (have_rows('hero_slider')) : the_row();?>
            <div>
            
                <!-- Title -->
                <?php if (get_sub_field('slide_caption')): ?>
                    <div>
                        <?php the_sub_field('slide_caption') ?>
                    </div>
                <?php endif; ?>

                <!-- Text -->
                <?php if (get_sub_field('slide_caption')): ?>
                    <div>
                        <?php the_sub_field('slide_caption') ?>
                    </div>
                <?php endif; ?>

                <!-- Button 1 Wrap -->
                <?php if (get_sub_field('button_text') && get_sub_field('button_link')): ?>
                    <div>
                        <a href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
                    </div>
                <?php endif; ?>

                <!-- Button 2 Wrap -->
                <?php if (get_sub_field('button_text') && get_sub_field('button_link')): ?>
                    <div>
                        <a href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
                    </div>
                <?php endif; ?>

            </div>
            <?php endwhile ?>
            <!-- End Content Container -->

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
    </div>
</section>

<!-- ========================================================================= -->
<!-- END HERO SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START STUDENT LIFE SECTION -->
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
                    <!-- Section Content -->
                    <?php if (get_sub_field('experience_paragraph')): ?>
                        <div>
                            <p><?php the_sub_field('experience_paragraph') ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile ?>
            <!-- End Section Header Container -->

            <!-- Start Flex Content Container -->
            <div>
                
            </div>
            <!-- End Flex Content Container -->

            <!-- Start Flex Image Container -->
            <?php while (have_rows('experience_content')) : the_row();?>
                <div>
                    <!-- Title -->
                    <?php if (get_sub_field('experience_header')): ?>
                        <div>
                            <h2><?php the_sub_field('experience_header') ?></h2>
                        </div>
                    <?php endif; ?>
                    <!-- Content -->
                    <?php if (get_sub_field('experience_paragraph')): ?>
                        <div>
                            <p><?php the_sub_field('experience_paragraph') ?></p>
                        </div>
                    <?php endif; ?>
                    <!-- Button -->
                    <div>
                        <?php the_sub_field('slide_caption') ?>
                    </div>
                </div>
            <?php endwhile ?>
            <!-- End Flex Image Container -->

        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- END STUDENT LIFE SECTION -->
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