<section id="alumni-news" class="alumni-news-container post-container container-fluid">
    <div clas="post-wrapper">

        <!-- Start Recent Alumni Header -->
        <div class="section-header row">
            <!-- Section Tag -->
            <div class="lcad-tag-wrap recent-alumni-tag-wrap row">
                <h4 class="lcad-tag recent-alumni-tag">lcad updates</h4>
            </div>

            <div class="header-container row">
                <!-- Section Title -->
                <div class="lcad-title-wrap recent-alumni-title-wrap col-md-6 col-xs-12">
                    <h2 class="lcad-title recent-alumni-title">Alumni News</h2>
                </div>
                <!-- Button - Desktop -->
                <div class="view-more-wrap view-more-desktop-wrap col-md-6">
                    <a class="view-more-btn" href="#">View More News</a>
                </div>
            </div>
        </div>
        <!-- End Recent Alumni Header -->

        <!-- Pull in recent alumni articles -->
        <div class="recent-alumni-container row">
            <?php get_template_part('resources/components/lcad', 'alumni-news'); ?>
        </div>

        <!-- Button - Mobile -->
        <div class="view-more-wrap view-more-mobile-wrap col-12">
            <a class="view-more-btn" href="#">View More News</a>
        </div>

    </div>
</section>