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

                <!-- Button Wrap -->
                <?php if (get_sub_field('button_text') && get_sub_field('button_link')): ?>
                    <div>
                        <a href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Social Icons -->
            <div>
                <!-- social icons -->
            </div>
            <?php endwhile ?>
            <!-- End Content Container -->


            <!-- Start Slider Container -->
            <?php while (have_rows('hero_slider')) : the_row();?>
            <div>
            
                    <!-- Start Slider Content -->
                    <?php while (have_rows('slider_repeater')) : the_row();?>
                    <div>

                        <!-- Slider Image -->
                        <div>
                            <?php $image = get_sub_field('slider_image'); ?>
                            <img src="<?php the_sub_field('slider_image'); ?>"> 
                        </div>

                    </div>
                    <?php endwhile ?>
                    <!-- End Slider Content -->

            </div>
            <?php endwhile ?>
            <!-- End Slider Container -->

        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- END HERO SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START LEARNING EXPERIENCE SECTION -->
<!-- ========================================================================= -->

<?php while (have_rows('experience_slider')) : the_row();?>
<section>
    <div>
        <div>

            <!-- Start Slider Container -->
            <div>

                <!-- Start Content Wrap -->
                <?php while (have_rows('experience_content')) : the_row();?>
                    <div>
                        <!-- Slide Tag -->
                        <?php if (get_sub_field('experience_tag')): ?>
                            <div>
                                <h4><?php the_sub_field('experience_tag') ?></h4>
                            </div>
                        <?php endif; ?>
                        <!-- Slide Title -->
                        <?php if (get_sub_field('experience_header')): ?>
                            <div>
                                <h2><?php the_sub_field('experience_header') ?></h2>
                            </div>
                        <?php endif; ?>
                        <!-- Slide Content -->
                        <?php if (get_sub_field('experience_paragraph')): ?>
                            <div>
                                <p><?php the_sub_field('experience_paragraph') ?></p>
                            </div>
                        <?php endif; ?>
                        <!-- Slide Button -->
                        <div>
                            <a href="#">Next <span></span></a>
                        </div>
                    </div>
                <?php endwhile ?>
                <!-- End Content Wrap -->

                <!-- Start Image Wrap -->
                <div>
                    <?php $image = get_sub_field('experience_image'); ?>
                    <img src="<?php the_sub_field('experience_image'); ?>"> 
                </div>
                <!-- End Image Wrap -->

            </div>
            <!-- Edn Slider Container -->

        </div>
    </div>
</section>
<?php endwhile ?>

<!-- ========================================================================= -->
<!-- END LEARNING EXPERIENCE SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START VALUE SECTION -->
<!-- ========================================================================= -->

<section>
    <div>
        <div>

            <!-- Start Image Block Cell -->
            <?php while (have_rows('slider_repeater')) : the_row();?>
                <div>

                    <!-- Start Image Container -->
                    <div>
                        <?php $image = get_sub_field('slider_image'); ?>
                        <img src="<?php the_sub_field('slider_image'); ?>"> 
                    </div>
                    <!-- End Image Container -->

                    <!-- Start Caption Container -->
                    <?php if (get_sub_field('slide_caption')): ?>
                        <!-- Title -->
                        <div>
                            <?php the_sub_field('slide_caption') ?>
                        </div>
                        <!-- Contnet -->
                        <div>
                            <?php the_sub_field('slide_caption') ?>
                        </div>
                    <?php endif; ?>
                    <!-- End Caption Container -->

                </div>
            <?php endwhile ?>
            <!-- End Image Block Cell -->

        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- END VALUE SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START LCAD HISTORY SECTION -->
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
<!-- END LCAD HISTORY SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START STAFF DIRECTORY SECTION -->
<!-- ========================================================================= -->

<section>
    <div>
        <div>

            <!-- Pull in template section for staff directory -->

        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- END STAFF DIRECTORY SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START CAMPUS SECTION -->
<!-- ========================================================================= -->

<section>
    <div>
        <div>
            

            <!-- Section Header Container -->
            <?php if (get_sub_field('experience_tag')): ?>
                <div>
                    <h4><?php the_sub_field('experience_tag') ?></h4>
                </div>
            <?php endif; ?>
            <!-- Section Header Container -->

            <!-- Start Campus DetailsCell -->
            <?php while (have_rows('experience_content')) : the_row();?>
                <div>
                    <!-- Campus Title -->
                    <?php if (get_sub_field('experience_header')): ?>
                        <div>
                            <h2><?php the_sub_field('experience_header') ?></h2>
                        </div>
                    <?php endif; ?>
                    <!-- Campus Image -->
                    <div>
                        <?php $image = get_sub_field('slider_image'); ?>
                        <img src="<?php the_sub_field('slider_image'); ?>"> 
                    </div>
                    <!-- Campus Content -->
                    <?php if (get_sub_field('experience_paragraph')): ?>
                        <div>
                            <p><?php the_sub_field('experience_paragraph') ?></p>
                        </div>
                    <?php endif; ?>
                    <!-- Button Wrap -->
                    <?php if (get_sub_field('button_text') && get_sub_field('button_link')): ?>
                        <div>
                            <a href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile ?>
            <!-- End Campus Details Cell -->

            <!-- Start Campus Navigation Container -->
            <?php while (have_rows('experience_content')) : the_row();?>
                <div>
                    <!-- Start Navigation Header Container -->
                    <div>
                    <!-- Campus Tag -->
                    <?php if (get_sub_field('experience_header')): ?>
                        <div>
                            <h3><?php the_sub_field('experience_header') ?></h3>
                        </div>
                    <?php endif; ?>
                    </div> 
                    <!-- End Navigation Header Container -->

                    <!-- Start Nav Menu Container -->
                    <div>
                        <!-- Pull in custom menu -->
                    </div>
                    <!-- End Nav Menu Container -->
                </div>
            <?php endwhile ?>
            <!-- End Campus Navigation Container -->

        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- END CAMPUS SECTION -->
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