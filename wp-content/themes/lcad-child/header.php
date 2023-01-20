<?php do_action('wp_head'); ?>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<header class="fixed-top">
    <!-- Start Navbar -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <!-- Start Navbar Logo -->
            <div class="navbar-logo">
                <?php 
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
                ?>
            </div>
            <!-- End Navbar Logo -->

            <!-- Start Navbar Title -->
            <div class="navbar-title d-none d-md-block">
                <h6 class="title">LAGUNA COLLEGE OF ART <span class="lcad-accent">+</span> DESIGN</h6>
            </div>
            <!-- End Navbar Title -->

            <div class="menu-nav-button">
                <!-- Start Navbar Toggle Button -->
                <div onclick="myFunction(this)" class="navbar-toggler d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="dashicons dashicons-menu-alt3"></span> -->
                    <div class="icon-wrapper">
                        <div class="bar-1"></div>
                        <div class="blue-line"></div>
                        <div class="bar-2"></div>
                    </div>
                    <span id="menu-button">MENU</span>
                </div>
                <!-- End Navbar Toggle Button -->

                <!-- Start Navbar Button -->
                <div class="navbar-title d-none d-md-block">
                    <!-- <a class="btn" href="#">SCHEDULE A TOUR</a> -->
                    <?php wp_nav_menu( array( 'theme_location' => 'header-btn', 'menu_class' => 'header-btn tour-btn', 'menu' => 'menu-8', 'container' => '' ) ); ?>
                </div>
                <!-- End Navbar Button -->
            </div>
        
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Start Nav Toggle Content -->
    <div class="collapse custom-menu" id="navbarToggleExternalContent">
        <div class="custom-items row">
            <div class="accordion-with-social col-12 col-md-6">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <!-- Start Academics Menu Accordion -->
                    <div class="accordion-item">
                        <!-- Accordion Title -->
                        <h2 class="accordion-header" id="flush-headingOne">
                            <div onclick="myParentElem(this)" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Academics
                                <span id="academics" class="academics-span dashicons dashicons-plus-alt2"></span>
                </div>
                        </h2>
                        <!-- Accordion Body -->
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <?php wp_nav_menu( array( 'theme_location' => 'academics-menu', 'menu_class' => 'academics-menu', 'menu' => 'menu-1', 'container' => '' ) ); ?>
                            </div>
                        </div>
                    </div>
                    <!-- End Academics Menu Accordion -->

                    <!-- Start Admissions Menu Accordion -->
                    <div class="accordion-item">
                        <!-- Accordion Title -->
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <div onclick="myParentElem(this)" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Admissions
                                <span id="admissions" class="admissions-span dashicons dashicons-plus-alt2"></span>
                            </div>
                        </h2>
                        <!-- Accordion Body -->
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <?php wp_nav_menu( array( 'theme_location' => 'admissions-menu', 'menu_class' => 'admissions-menu', 'menu' => 'menu-2', 'container' => '' ) ); ?>
                            </div>
                        </div>
                    </div>
                    <!-- End Admissions Menu Accordion -->

                    <!-- Start Alumni + Student Life Menu Accordion -->
                    <div class="accordion-item">
                        <!-- Accordion Title -->
                        <h2 class="accordion-header" id="flush-headingThree">
                            <div onclick="myParentElem(this)" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Alumni & Student Life
                                <span id="alumni" class="alumni-span dashicons dashicons-plus-alt2"></span>
                            </div>
                        </h2>
                        <!-- Accordion Body -->
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <?php wp_nav_menu( array( 'theme_location' => 'alumni-student-life-menu', 'menu_class' => 'alumni-student-life-menu', 'menu' => 'menu-3', 'container' => '' ) ); ?>
                            </div>
                        </div>
                    </div>
                    <!-- End Alumni + Student Life Menu Accordion -->
                </div>
                <!-- Start Social Share -->
                <?php if ( is_active_sidebar( 'lcad-social-share' ) ) : ?>
                    <div class="lcad-social social-share social-container row align-items-end">
                        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                            <?php dynamic_sidebar( 'lcad-social-share' ); ?>
                        </div><!-- #primary-sidebar -->
                    </div>
                <?php endif; ?>
                <!-- End Social Share -->
            </div>

            <!-- Start Quick Links -->
            <div id="quick-links-section" class=" col-12 col-md-6">
                <div class="inner-wrapper">
                    <div class="quick-links-title btn">
                        <h5>QUICK LINKS</h5>
                    </div>
                    <div id="line-spacer">

                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'quick-links', 'menu_class' => 'quick-links-menu', 'menu' => 'menu-4', 'container' => '' ) ); ?>
                </div>
            </div>
            <!-- End Quick Links -->
        </div>
    </div>
    <!-- End Nav Toggle Content -->

</header>



<?php //wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?>