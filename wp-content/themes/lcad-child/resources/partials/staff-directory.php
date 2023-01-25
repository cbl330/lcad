<section id="staff-directory">
    <div id="lcad-staff" class="staff-directory-container container-fluid">
        <div clas="post-wrapper">

            <!-- Start Staff Directory Header -->
            <div class="section-header row">
                <div class="header-container row">
                    <!-- Section Title -->
                    <div class="lcad-title-wrap staff-title-wrap col">
                        <h2 class="lcad-title title"><?php the_title(); ?> Staff Directory</h2>
                    </div>
                    <!-- Filter -->
                    <!-- Search Bar -->
                </div>
            </div>
            <!-- End Staff Directory Header -->

            <!-- Start Staff Cards -->
            <div class="staff-container row">
                <?php
                    if( is_single('action-sports-design') ) { get_template_part( 'resources/components/staff-category/lcad', 'staff-action-sports-design' ); }
                    if( is_single('art-history') ) { get_template_part( 'resources/components/staff-category/lcad', 'staff-art-history' ); }
                    if( is_single('animation') ) { get_template_part( 'resources/components/staff-category/lcad', 'staff-animation' ); }
                    if( is_single('creative-writing') ) { get_template_part( 'resources/components/staff-category/lcad', 'staff-creative-writing' ); }
                    if( is_single('drawing-and-painting') ) { get_template_part( 'resources/components/staff-category/lcad', 'staff-drawing-and-painting' ); }
                    if( is_single('entertainment-design') ) { get_template_part( 'resources/components/staff-category/lcad', 'staff-entertainment-design' ); }
                    if( is_single('experimental-animation') ) { get_template_part( 'resources/components/staff-category/lcad', 'staff-experimental-animation' ); }
                    if( is_single('game-art') ) { get_template_part( 'resources/components/staff-category/lcad', 'staff-game-art' ); }
                    if( is_single('graphic-design-and-digital-media') ) { get_template_part( 'resources/components/staff-category/lcad', 'staff-graphic-design-and-digital-media' ); }
                    if( is_single('illustration') ) { get_template_part( 'resources/components/staff-category/lcad', 'staff-illustration' ); }
                    if( is_single('liberal-arts') ) { get_template_part( 'resources/components/staff-category/lcad', 'staff-liberal-arts' ); }
                    if( is_single('sculpture') ) { get_template_part( 'resources/components/staff-category/lcad', 'staff-sculpture' ); }
                ?>
            </div>
            <!-- End Staff Cards -->

            <!-- Start Pagination -->
            <div class="pagination">

            </div>
            <!-- End Pagination -->

        </div>
    </div>
</section>