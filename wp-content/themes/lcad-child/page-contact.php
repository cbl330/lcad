<?php get_header(); ?>


<!-- ========================================================================= -->
<!-- START HERO SECTION -->
<!-- ========================================================================= -->

<section id="contact-hero" class="container-fluid">
    <div class="hero-container row">
        <!-- <div> -->

            <!-- Start Content Container -->
            <?php while (have_rows('hero_content')) : the_row();?>
                <div class="hero-content-container content-container col-md-12 col-lg-9">
                    <!-- Title Wrap -->
                    <div class="hero-title-wrap title-wrap">
                        <?php if (get_sub_field('hero_section_header')): ?>
                            <h1 class="hero-title title"><?php the_sub_field('hero_section_header') ?></h1>
                        <?php endif ?>
                    </div>

                    <!-- Text Wrap -->
                    <div class="hero-text-wrap text-wrap">
                        <?php if (get_sub_field('hero_section_text')): ?>
                            <?php the_sub_field('hero_section_text') ?>
                        <?php endif ?>
                    </div>

                </div>
            <?php endwhile ?>
            <!-- End Content Container -->

            <!-- Start Contact Info Container -->
            <?php while (have_rows('hero_contact')) : the_row();?>
                <div class="hero-info-container info-container col-md-12 col-lg-3 ms-auto">
                    
                    <!-- Address Wrap -->
                    <?php if (get_sub_field('lcad_address')): ?>
                        <div class="hero-address-wrap address-wrap row">
                            <div class="icon-wrap location-icon col-1">
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                            </div>
                            <div class="hero-address address col-11">
                                <?php the_sub_field('lcad_address') ?>
                            </div>
                        </div>
                    <?php endif ?>

                    <!-- Phone Wrap -->
                    <?php if (get_sub_field('lcad_phone')): ?>
                        <div class="hero-phone-wrap phone-wrap row">
                            <div class="icon-wrap phone-icon col-1">
                                <i class="fa-sharp fa-solid fa-phone"></i>
                            </div>
                            <div class="hero-phone phone col-11">
                                <?php the_sub_field('lcad_phone') ?>
                            </div>
                        </div>
                    <?php endif ?>

                    <!-- Email Wrap -->
                    <?php if (get_sub_field('lcad_email')): ?>
                        <div class="hero-email-wrap email-wrap row">
                            <div class="icon-wrap email-icon">
                                <i class="fa-sharp fa-solid fa-envelope"></i>
                            </div>
                            <div class="hero-email email col-11">
                                <?php the_sub_field('lcad_email') ?>
                            </div>
                        </div>
                    <?php endif ?>

                    <!-- Start Social Share -->
                    <?php if ( is_active_sidebar( 'lcad-social-share' ) ) : ?>
                        <div class="hero-social-wrap lcad-social social-share social-wrap row align-items-end">
                            <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                                <?php dynamic_sidebar( 'lcad-social-share' ); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            <?php endwhile ?>
            <!-- End Contact Info Container -->
            

        <!-- </div> -->
    </div>
</section>

<!-- ========================================================================= -->
<!-- END HERO SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START CONTACT CARDS SECTION -->
<!-- ========================================================================= -->

<?php if (get_field('contacts_repeater')): ?>
    <section id="contact-cards" class="container-fluid">
        <div class="contact-container row">
            <!-- <div clas="contact-wrapper"> -->

                <!-- Start Card -->
                <?php while (have_rows('contacts_repeater')) : the_row();?>
                    <!-- <div class="contact-card-container col-3 align-items-center"> -->
                    <div class="contact-card-container col-xs-12 col-md-4 col-lg-3">
                        <div class="contact-card row">

                            <!-- Start Department Wrap -->
                            <?php if (get_sub_field('contact_department')): ?>
                                <div class="contact-department-wrap department-wrap">
                                    <h3 class="contact-department department card-title"><?php the_sub_field('contact_department') ?></h3>
                                </div>
                            <?php endif; ?>
                            <!-- End Department Wrap -->

                            <!-- Start Image Wrap -->
                            <div class="contact-image-wrap image-wrap col-4">
                                <img class="contact-image" src="<?php the_sub_field('contact_image') ?>">
                            </div>
                            <!-- End Image Wrap -->

                            <!-- Start Info Wrap -->
                            <?php while (have_rows('contact_content')) : the_row();?>
                                <div class="contact-content-container content-container col-8">
                                    <!-- Name -->
                                    <?php if (get_sub_field('contact_name')): ?>
                                        <div class="contact-name-wrap name-wrap">
                                            <h4 class="contact-name name title"><?php the_sub_field('contact_name') ?></h4>
                                        </div>
                                    <?php endif; ?>
                                    <!-- Phone -->
                                    <?php if (get_sub_field('contact_phone')): ?>
                                        <div class="contact-phone-wrap phone-wrap phone">
                                            <?php the_sub_field('contact_phone') ?>
                                        </div>
                                    <?php endif; ?>
                                    <!-- Email -->
                                    <?php if (get_sub_field('contact_email')): ?>
                                        <div class="contact-email-wrap email-wrap email">
                                            <?php the_sub_field('contact_email') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile ?>
                            <!-- End Info Wrap -->

                            <!-- Start Button Wrap -->
                            <?php if (get_sub_field('contact_button_text') && get_sub_field('contact_button_link')): ?>
                                <div class="contact-button-wrap button-wrap">
                                    <a class="contact-btn btn" href="<?php the_sub_field('contact_button_link') ?>"><?php the_sub_field('contact_button_text') ?></a>
                                </div>
                            <?php endif; ?>
                            <!-- End Button Wrap -->

                        </div>
                    </div>
                <?php endwhile ?>
                <!-- End Card -->

            <!-- </div> -->
        </div>
    </section>
<?php endif; ?>

<!-- ========================================================================= -->
<!-- END CONTACT CARDS SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START FORM SECTION -->
<!-- ========================================================================= -->

<section id="contact-form" class="container-fluid">
    <div class="form-container">
        <!-- <div> -->
            <!-- Start Title Wrap -->
            <?php if (get_field('contact_form_header')): ?>
                <div class="form-title-wrap title-wrap">
                    <h2 class="form-title title"><?php the_field('contact_form_header') ?></h2>
                </div>
            <?php endif; ?>
            <!-- End Title Wrap -->
            
            <!-- Start Contact Form Wrap -->
            <?php if (get_field('contact_form')): ?>
            <div class="contact-form-wrap form-wrap">
                <?php the_field('contact_form') ?>
            </div>
            <?php endif; ?>
            <!-- End Contact Form Wrap -->
        <!-- </div> -->
    </div>
</section>

<!-- ========================================================================= -->
<!-- END FORM SECTION -->
<!-- ========================================================================= -->

<?php get_footer(); ?>