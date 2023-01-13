<div id="lcad-staff" class="staff-directory-container post-container container-fluid">
    <div clas="post-wrapper">

        <!-- Start Recent News Header -->
        <div class="section-header row">
            <div class="header-container row">
                <!-- Section Title -->
                <div class="lcad-title-wrap recent-news-title-wrap col">
                    <h2 class="lcad-title title"><?php the_title(); ?> Staff Directory</h2>
                </div>
                <!-- Filter -->
                <!-- Search Bar -->
            </div>
        </div>
        <!-- End Recent News Header -->

        <!-- Pull in recent news articles -->
        <div class="staff-container row">
            <?php get_template_part('resources/components/lcad', 'staff'); ?>
        </div>

    </div>
</div>