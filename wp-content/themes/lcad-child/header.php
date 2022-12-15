<?php do_action('wp_head'); ?>

<header class="bg-dark">
    <!-- Start Navbar -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">

            <div class="quick-links">
                <?php wp_nav_menu( array( 'theme_location' => 'quick-links', 'menu_class' => 'quick-links', 'menu' => 'menu-1', 'container' => '' ) ); ?>
            </div>
        
        </div>
    </nav>
    <!-- End Navbar -->

    

</header>


<?php //wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'menu_class' => 'secondary-menu', 'menu' => 'menu-3', 'container' => '' ) ); ?>
<?php //wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?>