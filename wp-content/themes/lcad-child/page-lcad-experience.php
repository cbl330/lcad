<!-- ========================================================================= -->
<!-- START HERO SECTION -->
<!-- ========================================================================= -->

<section id="lcad-experience-hero" class="container-fluid">
    <div class="lcad-experience-container row">
        <div>

            <!-- Start Content Container -->
            <?php while (have_rows('hero_content')) : the_row();?>
            <div>
                <!-- Breadcrumbs -->
                <div>
                    <?php if (get_sub_field('hero_header')): ?>
                    <h1><?php the_sub_field('hero_header') ?></h1>
                    <?php endif ?>
                </div>

                <!-- Title Wrap -->
                <div>
                    <?php if (get_sub_field('hero_header')): ?>
                    <h1><?php the_sub_field('hero_header') ?></h1>
                    <?php endif ?>
                </div>

            </div>
            <?php endwhile ?>
            <!-- End Content Container -->

        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- END HERO SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START STUDENT CARDS SECTION -->
<!-- ========================================================================= -->

<?php while (have_rows('experience_slider')) : the_row();?>
<section>
    <div>
        <div>

            <!-- Start Card Container -->
            <div>

                <!-- Start Image Container -->
                <div>
                    <?php $image = get_sub_field('experience_image'); ?>
                    <img src="<?php the_sub_field('experience_image'); ?>"> 
                </div>
                <!-- End Image Container -->

                <!-- Start Info Container -->
                <?php while (have_rows('experience_content')) : the_row();?>
                    <div>
                        <!-- Card Title/Name Graphic -->
                        <?php if (get_sub_field('experience_tag')): ?>
                            <div>
                                <h4><?php the_sub_field('experience_tag') ?></h4>
                            </div>
                        <?php endif; ?>
                        <!-- Subheader -->
                        <?php if (get_sub_field('experience_paragraph')): ?>
                            <div>
                                <p><?php the_sub_field('experience_paragraph') ?></p>
                            </div>
                        <?php endif; ?>
                        <!-- Text -->
                        <?php if (get_sub_field('experience_paragraph')): ?>
                            <div>
                                <p><?php the_sub_field('experience_paragraph') ?></p>
                            </div>
                        <?php endif; ?>
                        <!-- Button -->
                        <div>
                            <a href="#">Next <span></span></a>
                        </div>
                    </div>
                <?php endwhile ?>
                <!-- End Info Container -->

            </div>
            <!-- End Card Container -->

        </div>
    </div>
</section>
<?php endwhile ?>

<!-- ========================================================================= -->
<!-- END STUDENT CARDS SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START INQUIRY SECTION -->
<!-- ========================================================================= -->

<?php get_template_part('resources/partials/student', 'inquiry'); ?>

<!-- ========================================================================= -->
<!-- END INQUIRY SECTION -->
<!-- ========================================================================= -->