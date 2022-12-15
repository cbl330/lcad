<div id="lcad-news" class="recent-news-container post-container container-fluid">
    <div clas="post-wrapper">

        <!-- Start Recent News Header -->
        <div class="section-header row">
            <!-- Section Tag -->
            <div class="lcad-tag-wrap recent-news-tag-wrap row">
                <h4 class="lcad-tag recent-news-tag">lcad updates</h4>
            </div>

            <div class="header-container row">
                <!-- Section Title -->
                <div class="lcad-title-wrap recent-news-title-wrap col">
                    <h2 class="lcad-title recent-news-title">Recent News</h2>
                </div>
                <!-- Button -->
                <div class="view-more-wrap col">
                    <a class="view-more-btn" href="#">View More News</a>
                </div>
            </div>
        </div>
        <!-- End Recent News Header -->

        <!-- Pull in recent news articles -->
        <div class="recent-news-container row">
            <?php get_template_part('resources/components/lcad', 'news'); ?>
        </div>

    </div>
</div>