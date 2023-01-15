<?php if( have_rows('left_cell_si') && (get_field('inquiry_form_si')) ): ?>
    <section id="inquiry" class="container-fluid">
        <div class="inquiry-container row">

        <!-- Start Inquiry Content Cell -->
        <?php while (have_rows('left_cell_si')) : the_row();?>
            <div class="left-cell content-cell col-xs-12 col-lg-6">
                <div class="left-content-container inquiry-content-container">
                    <!-- Section Tag -->
                    <?php if (get_sub_field('form_tag_si')): ?>
                        <div class="lcad-tag-wrap inquiry-tag">
                            <h4 class="lcad-tag lcad-tag-dk inquiry-tag"><?php the_sub_field('form_tag_si') ?></h4>
                        </div>
                    <?php endif; ?>
                    <!-- Section Title -->
                    <?php if (get_sub_field('form_title_si')): ?>
                        <div class="section-title-wrap inquiry-title-wrap title-wrap">
                            <?php the_sub_field('form_title_si') ?>
                        </div>
                    <?php endif; ?>
                    <!-- Section Content -->
                    <?php if (get_sub_field('form_content_si')): ?>
                        <div class="section-text inquiry-text">
                            <?php the_sub_field('form_content_si') ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
        <!-- End Inquiry Content Cell -->

        <!-- Start Inquiry Form Cell -->
        <?php if (get_field('inquiry_form_si')): ?>
            <div class="right-cell col-xs-12 col-lg-6">
                <div class="form-wrap">
                    <?php the_field('inquiry_form_si') ?>
                </div>
            </div>
        <?php endif; ?>
        <!-- End Inquiry Form Cell -->

        </div>
    </section>
<?php endif; ?>