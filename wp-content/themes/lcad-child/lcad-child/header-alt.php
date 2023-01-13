<?php do_action('wp_head'); ?>

<header class="bg-dark">
    <!-- Start Navbar -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">

            <!-- Start Navbar Logo -->
            <div class="navbar-logo">
                <?php 
                    // if ( function_exists( 'the_custom_logo' ) ) {
                    //     the_custom_logo();
                    // }
                ?>
            </div>
            <!-- End Navbar Logo -->

            <!-- Start Navbar Title -->
            <div class="navbar-title">
                <h6>Laguna College of Art <span class="lcad-accent">+</span> Design</h6>
            </div>
            <!-- End Navbar Title -->

            <!-- Start Navbar Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- End Navbar Toggle Button -->

            <!-- Start Navbar Button -->
            <div class="navbar-title">
                <a class="btn btn-primary" href="#">Schedule a Tour</a>
            </div>
            <!-- End Navbar Button -->
        
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Start Nav Toggle Content -->
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                
                <!-- Start Academics Menu Accordion -->
                <div class="accordion-item">
                    <!-- Accordion Title -->
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Academics
                        </button>
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
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Admissions
                        </button>
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
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Alumni & Student Life
                        </button>
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
        </div>
    </div>
    <!-- End Nav Toggle Content -->

</header>


<?php //wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'menu_class' => 'secondary-menu', 'menu' => 'menu-3', 'container' => '' ) ); ?>
<?php //wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?>