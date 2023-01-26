<?php /* Template Name: Student Life */ get_header(); ?>
<section id="student-child-hero" class="container-fluid">
    <div class="student-child-container row">
        <!-- Side Nav -->
        <div class="sub-nav-container col-lg-4 d-none d-lg-block">
            <div class="inner-nav">
                <!-- Nav Title -->
                <div class="sub-nav-title">
                    <h4 class="btn">Student Life</h4>
                </div>
                <!-- Side White Line -->
                <div class="white-line"></div>
                <!-- Nav List -->
                <div class="sub-nav-repeater">
                    <?php wp_nav_menu( array( 'theme_location' => 'student-life-child-menu', 'menu_class' => 'student-life-child-menu', 'menu' => 'menu-5', 'container' => '' ) ); ?>
                </div>
            </div>
        </div>
        <div id="mySidenav" class="sidenav d-block d-lg-none">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="inner-nav">
                <!-- Nav Title -->
                <div class="sub-nav-title">
                    <h4 class="btn">Student Life</h4>
                </div>
                <!-- Side White Line -->
                <div class="white-line"></div>
                <!-- Nav List -->
                <div class="sub-nav-repeater">
                    <?php wp_nav_menu( array( 'theme_location' => 'student-life-child-menu', 'menu_class' => 'student-life-child-menu', 'menu' => 'menu-5', 'container' => '' ) ); ?>
                </div>
            </div>
        </div>
        <!-- End Side Nav -->
        <div class="details-container col-12 col-lg-8">
            
            <!-- Details Header -->
            <div class="details-header">
            <span class="d-block d-lg-none" style="font-size:2rem;margin-bottom: 5rem;cursor:pointer;" onclick="openNav()">&#9776; Student Life Links</span>
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
            <!-- Details Accordion -->
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
        </div>
    </div>
</section>

<?php get_footer(); ?>