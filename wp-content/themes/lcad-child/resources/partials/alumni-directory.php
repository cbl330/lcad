<section id="alumni-directory">
    <div id="lcad-alumni" class="alumni-directory-container container-fluid">
        <div clas="post-wrapper">

            <!-- Start alumni Directory Header -->
            <div class="section-header row">
                <div class="header-container row">
                    <!-- Section Title -->
                    <div class="lcad-title-wrap alumni-title-wrap col">
                        <h2 class="lcad-title title"><?php the_title(); ?> Alumni Directory</h2>
                    </div>
                    <!-- Filter -->
                    <!-- Search Bar -->
                </div>
            </div>
            <!-- End alumni Directory Header -->

            <!-- Start alumni Cards -->
            <div class="alumni-container row">
                <?php get_template_part( 'resources/components/lcad', 'alumni' ); ?>
            </div>
            <!-- End alumni Cards -->

            <!-- Start Pagination -->
            <div class="pagination">

            </div>
            <!-- End Pagination -->

        </div>
    </div>
</section>