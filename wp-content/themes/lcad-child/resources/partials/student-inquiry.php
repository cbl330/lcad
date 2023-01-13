<div>
    <div>

        <!-- Start Inquiry Content Cell -->
        <?php //while (have_rows('inquiry_content')) : the_row();?>
            <div class="left-cell content-cell col-6">
                <div class="left-content-container inquiry-content-container">
                    <!-- Section Tag -->
                    <?php if (get_sub_field('section_tag')): ?>
                        <div class="lcad-tag-wrap inquiry-tag">
                            <h4 class="lcad-tag inquiry-tag"><?php the_sub_field('inquiry_tag') ?></h4>
                        </div>
                    <?php endif; ?>
                    <!-- Section Title -->
                    <?php if (get_sub_field('inquiry_header')): ?>
                        <div class="section-title-wrap title-wrap inquiry-title">
                            <?php the_sub_field('inquiry_header') ?>
                        </div>
                    <?php endif; ?>
                    <!-- Section Content -->
                    <?php if (get_sub_field('inquiry_text')): ?>
                        <div class="section-text inquiry-text text">
                            <?php the_sub_field('inquiry_text') ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php //endwhile ?>
        <!-- End Inquiry Content Cell -->

        <!-- Start Inquiry Form Cell -->
        <?php //while (have_rows('section_form')) : the_row();?>
            <div>
                <?php the_sub_field('form') ?>
            </div>
        <?php //endwhile ?>
        <!-- End Inquiry Form Cell -->

    </div>
</div>