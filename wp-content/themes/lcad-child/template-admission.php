<?php /* Template Name: Admissions */ get_header(); ?>
<section id="admissions-child-hero" class="container-fluid">
    <div class="admissions-child-container row">
        <!-- Side Nav -->
        <div class="sub-nav-container col-lg-4 d-none d-lg-block">
            <div class="inner-nav">
                <!-- Nav Title -->
                <div class="sub-nav-title">
                    <h4 class="btn">Undergraduate Applicants</h4>
                </div>
                <!-- Side White Line -->
                <div class="white-line"></div>
                <!-- Nav List -->
                <div class="sub-nav-repeater">
                    <?php wp_nav_menu( array( 'theme_location' => 'admissions-child-menu', 'menu_class' => 'admissions-child-menu', 'menu' => 'menu-5', 'container' => '' ) ); ?>
                </div>
            </div>
        </div>
        <div id="mySidenav" class="sidenav d-block d-lg-none">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="inner-nav">
                <!-- Nav Title -->
                <div class="sub-nav-title">
                    <h4 class="btn">Undergraduate Applicants</h4>
                </div>
                <!-- Side White Line -->
                <div class="white-line"></div>
                <!-- Nav List -->
                <div class="sub-nav-repeater">
                    <?php wp_nav_menu( array( 'theme_location' => 'admissions-child-menu', 'menu_class' => 'admissions-child-menu', 'menu' => 'menu-5', 'container' => '' ) ); ?>
                </div>
            </div>
        </div>
        <!-- End Side Nav -->
        <div class="details-container col-12 col-lg-8">
            
            <!-- Details Header -->
            <div class="details-header">
            <span class="d-block d-lg-none" style="font-size:2rem;margin-bottom: 5rem;cursor:pointer;" onclick="openNav()">&#9776; Admissions Links</span>
                <?php if (get_field('details_header')): ?>
                    <h1><?php the_field('details_header') ?></h1>
                <?php endif ?>
            </div>
            <!-- Details Image -->
            <div class="details-image-wrapper">
                <?php if (get_field('details_image')): ?>
                    <div class="details-image" style="background-image: url('<?php the_field('details_image') ?>');"></div>
                <?php endif ?>
            </div>
            <!-- Details Content -->
            <div class="details-content">
                <?php if (get_field('details_content')): ?>
                    <?php the_field('details_content') ?>
                <?php endif ?>
            </div>
            <!-- Group Contents -->
            <?php if (have_rows('content_left') && have_rows('content_right')): ?>
                <div class="group-content-container">
                    <div class="inner-group-content row">
                        <!-- Left Group -->
                        <div class="left-group col-12 col-md-6">
                            <?php while (have_rows('content_left')): the_row(); ?>
                                <div class="left-column-title">
                                    <?php if (get_sub_field('section_title_left')): ?>
                                        <h4><span class="badge bg-navy"><?php the_sub_field('section_title_left'); ?></span></h4>
                                    <?php endif ?>
                                </div>
                                <div class="left-content">
                                    <?php while (have_rows('left_content_repeater')): the_row(); ?>
                                        <div class="content-group row">
                                            <?php if (get_sub_field('title')): ?>
                                                <span class="content-title col-6"><?php the_sub_field('title'); ?></span>
                                            <?php endif ?>
                                            <?php if (get_sub_field('text')): ?>
                                                <span class="content-text col-6"><?php the_sub_field('text'); ?></span>
                                            <?php endif ?>
                                        </div>
                                    <?php endwhile ?>
                                </div>
                            <?php endwhile ?>
                        </div>
                        <!-- Right Group -->
                        <div class="right-group col-12 col-md-6">
                            <?php while (have_rows('content_right')): the_row(); ?>
                                <div class="right-column-title">
                                    <?php if (get_sub_field('section_title_right')): ?>
                                        <h4><span class="badge bg-navy"><?php the_sub_field('section_title_right'); ?></span></h4>
                                    <?php endif ?>
                                </div>
                                <div class="right-content">
                                    <?php while (have_rows('right_content_repeater')): the_row(); ?>
                                        <div class="content-group row">
                                            <?php if (get_sub_field('title')): ?>
                                                <span class="content-title col-6"><?php the_sub_field('title'); ?></span>
                                            <?php endif ?>
                                            <?php if (get_sub_field('text')): ?>
                                                <span class="content-text col-6"><?php the_sub_field('text'); ?></span>
                                            <?php endif ?>
                                        </div>
                                    <?php endwhile ?>
                                </div>
                            <?php endwhile ?>
                        </div>
                    </div>
                </div>
            <?php endif ?>
            
            <!-- Details Accordion -->
            <?php if (have_rows('accordion_repeater')): ?>
                <div id="faq" class="details-accordion-container">
                    <ul>
                        <?php while (have_rows('accordion_repeater')) : the_row(); ?>
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <?php if (get_sub_field('accordion_title')): ?>
                                    <h2><?php the_sub_field('accordion_title') ?></h2>
                                <?php endif ?>
                                <?php if (get_sub_field('accordion_details')): ?>
                                    <?php the_sub_field('accordion_details') ?>
                                <?php endif ?>
                            </li>
                        <?php endwhile ?>
                    </ul>
                </div>
            <?php endif ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>