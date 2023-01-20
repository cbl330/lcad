<footer id="lcad-footer" class="text-white container-fluid">
    <div class="footer-container">

        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="left-cell col-xs-12 col-md-8">

                <!-- Start Logo Wrap -->
                <div class="logo-wrap">
                    <?php dynamic_sidebar( 'sidebar-footer-logo' ); ?>
                </div>
                <!-- End Logo Wrap -->

                <!-- Start Contact Wrap -->
                <div class="contact-wrap">
                    <?php dynamic_sidebar( 'sidebar-footer-contact' ); ?>                    
                </div>
                <!-- End Contact Wrap -->

                <!-- Start Social Wrap -->
                <div class="social-wrap">
                    <?php dynamic_sidebar( 'lcad-social-share' ); ?>
                </div>
                <!-- End Social Wrap -->

                <!-- Start Search Wrap -->
                <div class="search-wrap">
                    <?php dynamic_sidebar( 'sidebar-footer-search' ); ?>
                </div>
                <!-- End Search Wrap -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="right-cell col-xs-12 col-md-4 row">
                <div class="right-col col-6">
                    
                    <!-- Start Nav - General Wrap -->
                    <div class="general-nav-wrap nav-wrap">
                        <?php dynamic_sidebar( 'sidebar-footer-nav-general' ); ?>
                    </div>
                    <!-- End Nav - General Wrap -->
                    
                    <!-- Start Nav - Admissions Wrap -->
                    <div class="admissions-nav-wrap nav-wrap">
                        <?php dynamic_sidebar( 'sidebar-footer-nav-admission' ); ?>                    
                    </div>
                    <!-- End Nav - Admissions Wrap -->

                </div>

                <div class="left-col col-6">

                    <!-- Start Nav - Programs Wrap -->
                    <div class="programs-nav-wrap nav-wrap">
                        <?php dynamic_sidebar( 'sidebar-footer-nav-programs' ); ?>
                    </div>
                    <!-- End Nav - Programs Wrap -->
                    
                </div>
            </div>
            <!--Grid column-->

            <!-- Copyright -->
            <div class="bottom-row-container">
                <div class="copyright">
                    <p>Copyright &copy;<?php echo date('Y'); ?></p>
                    <p>Laguna College of Art and Design</p>
                </div>
                <?php dynamic_sidebar( 'sidebar-footer-bottom-row' ); ?>
            </div>
            <!-- Copyright -->

        </div>
        <!--Grid row-->

    </div>
</footer>

<!-- </div> -->
<!-- End of .container -->
<!-- </footer> -->

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<?php do_action('wp_footer'); ?>