<!-- ========================================================================= -->
<!-- START HERO SECTION -->
<!-- ========================================================================= -->

<section>
    <div>
        <div>

            <!-- Start Content Container -->
            <?php while (have_rows('hero_content')) : the_row();?>
            <div>
                <!-- Title Wrap -->
                <div>
                    <?php if (get_sub_field('hero_header')): ?>
                    <h1><?php the_sub_field('hero_header') ?></h1>
                    <?php endif ?>
                </div>

                <!-- Text Wrap -->
                <div>
                    <?php if (get_sub_field('hero_header')): ?>
                    <h1><?php the_sub_field('hero_header') ?></h1>
                    <?php endif ?>
                </div>

                <!-- Button Wrap -->
                <?php if (get_sub_field('button_text') && get_sub_field('button_link')): ?>
                    <div>
                        <a href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <?php endwhile ?>
            <!-- End Content Container -->


            <!-- Start Events Container -->
            <?php while (have_rows('hero_slider')) : the_row();?>
            <div>
            
                <!-- Title -->
                <?php if (get_sub_field('slide_caption')): ?>
                    <div>
                        <?php the_sub_field('slide_caption') ?>
                    </div>
                <?php endif; ?>

                <!-- Start Events List -->
                <?php while (have_rows('slider_repeater')) : the_row();?>
                <div>

                    <!-- Date -->
                    <?php if (get_sub_field('slide_caption')): ?>
                        <div>
                            <?php the_sub_field('slide_caption') ?>
                        </div>
                    <?php endif; ?>

                    <!-- Title -->
                    <?php if (get_sub_field('slide_caption')): ?>
                        <div>
                            <?php the_sub_field('slide_caption') ?>
                        </div>
                    <?php endif; ?>

                    <!-- Location -->
                    <?php if (get_sub_field('slide_caption')): ?>
                        <div>
                            <?php the_sub_field('slide_caption') ?>
                        </div>
                    <?php endif; ?>

                </div>
                <?php endwhile ?>
                <!-- End Events List -->

            </div>
            <?php endwhile ?>
            <!-- End Events Container -->

            <!-- Start Opening Container -->
            <?php while (have_rows('hero_slider')) : the_row();?>
            <div>
            
                <!-- Testimony -->
                <?php if (get_sub_field('slide_caption')): ?>
                    <div>
                        <?php the_sub_field('slide_caption') ?>
                    </div>
                <?php endif; ?>

                <!-- Author Blurb -->
                <?php if (get_sub_field('slide_caption')): ?>
                    <div>
                        <?php the_sub_field('slide_caption') ?>
                    </div>
                <?php endif; ?>

            </div>
            <?php endwhile ?>
            <!-- End Opening Container -->

            <!-- Start Explore LCAD Container -->
            <?php while (have_rows('hero_slider')) : the_row();?>
                <div>

                <!-- Tag -->
                <?php if (get_sub_field('slide_caption')): ?>
                    <div>
                        <?php the_sub_field('slide_caption') ?>
                    </div>
                <?php endif; ?>

                <!-- Start Events List -->
                <?php while (have_rows('slider_repeater')) : the_row();?>
                    <div>

                        <!-- Nav Title -->
                        <?php if (get_sub_field('slide_caption')): ?>
                            <div>
                                <?php the_sub_field('slide_caption') ?>
                            </div>
                        <?php endif; ?>

                    </div>
                <?php endwhile ?>
                <!-- End Events List -->

                </div>
            <?php endwhile ?>
            <!-- End Explore LCAD Container -->

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