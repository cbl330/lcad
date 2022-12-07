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

            </div>
            <?php endwhile ?>
            <!-- End Content Container -->

            <!-- Start Contact Info Container -->
            <?php while (have_rows('hero_content')) : the_row();?>
                <div>
                    <!-- Address Wrap -->
                    <div>
                        <?php if (get_sub_field('hero_header')): ?>
                        <h1><?php the_sub_field('hero_header') ?></h1>
                        <?php endif ?>
                    </div>

                    <!-- Phone Wrap -->
                    <div>
                        <?php if (get_sub_field('hero_header')): ?>
                        <h1><?php the_sub_field('hero_header') ?></h1>
                        <?php endif ?>
                    </div>

                    <!-- Social Wrap -->
                    <div>
                        <?php if (get_sub_field('hero_header')): ?>
                        <h1><?php the_sub_field('hero_header') ?></h1>
                        <?php endif ?>
                    </div>

                </div>
            <?php endwhile ?>
            <!-- End Contact Info Container -->
            

        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- END HERO SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START CONTACT CARDS SECTION -->
<!-- ========================================================================= -->

<?php while (have_rows('experience_slider')) : the_row();?>
<section>
    <div>
        <div>

            <!-- Start Card Container -->
            <div>

                <!-- Start Image Wrap -->
                <div>
                    <?php $image = get_sub_field('experience_image'); ?>
                    <img src="<?php the_sub_field('experience_image'); ?>"> 
                </div>
                <!-- End Image Wrap -->

                <!-- Start Info Wrap -->
                <?php while (have_rows('experience_content')) : the_row();?>
                    <div>
                        <!-- Card Title -->
                        <?php if (get_sub_field('experience_tag')): ?>
                            <div>
                                <h4><?php the_sub_field('experience_tag') ?></h4>
                            </div>
                        <?php endif; ?>
                        <!-- Name -->
                        <?php if (get_sub_field('experience_header')): ?>
                            <div>
                                <h2><?php the_sub_field('experience_header') ?></h2>
                            </div>
                        <?php endif; ?>
                        <!-- Phone -->
                        <?php if (get_sub_field('experience_paragraph')): ?>
                            <div>
                                <p><?php the_sub_field('experience_paragraph') ?></p>
                            </div>
                        <?php endif; ?>
                        <!-- Email -->
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
                <!-- End Info Wrap -->

                <!-- Start Button Wrap -->
                <div>
                    <?php the_sub_field('slide_caption') ?>
                </div>
                <!-- End Button Wrap -->

            </div>
            <!-- End Card Container -->

        </div>
    </div>
</section>
<?php endwhile ?>

<!-- ========================================================================= -->
<!-- END CONTACT CARDS SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START FORM SECTION -->
<!-- ========================================================================= -->

<section>
    <div>
        <div>

            <!-- Pull in template section for recent news -->

        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- END FORM SECTION -->
<!-- ========================================================================= -->