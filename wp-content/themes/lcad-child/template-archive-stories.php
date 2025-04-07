<?php
    /* Template Name: Student Stories Archive */
    get_header();

    // Variables
    // $postImage = the_post_thumbnail();
    // $postCat = get_the_category();
    // $postTitle = the_title();
    // $postLink = the_permalink();

    $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
    $postsQuery = new WP_Query(
    array(
        'post_type'      => 'student story',
        // 'category_name'  => 'lcad news',
        'orderby'        => 'date',
        // 'order'          => 'ASC',
        // 'order'          => 'DESC',
        // 'hide_empty'     => 1,
        // 'depth'          => 1,
        'posts_per_page' => 12,
        'paged' => $paged,
    ) ); 
?>

<section id="archive-header" class="lcad-experience-header container-fluid">
    <div class="lcad-experience-header-container archive-header-container">
        
        <!-- Breadcrumbs -->
        <div class="news-breadcrumbs breadcrumbs">
            <?php the_breadcrumb(); ?>
        </div>

        <!-- Page Title -->
        <div class="lcad-experience-title-wrap title-wrap">
            <h1 class="lcad-experience-title title"><?php echo esc_html( get_the_title() ); ?></h1>
        </div>

    </div>
</section>

<main id="stories-main" class="container-fluid">
    <div class="content-container row">
        <?php if ($postsQuery->have_posts()) : ?>
            <?php while ($postsQuery->have_posts()) : $postsQuery->the_post(); ?>
        
                <article id="post-<?php the_ID(); ?>" class="student-stories-container post-container col-xs-12 col-lg-4">
                    <div class="post d-flex flex-column">
                    
                        <!-- Post Video -->
                            <div class="post-video-wrap">
                                <div class="post-video">
                                    <a href="<?php the_sub_field('video_link_cptssp'); ?>" class="featured-story-video-link">
                                        <?php the_post_thumbnail('blog-thumbnail'); ?>
                                        <span class="featured-video-icon dashicons dashicons-controls-play"></span>
                                    </a>
                                </div>
                            </div>

                        <div class="post-content-wrap d-flex flex-column flex-grow-1">
                            <!-- Post Title -->
                            <div class="post-title-wrap title-wrap">
                                <a class="permalink" href="<?php the_permalink(); ?>">
                                    <h3 class="post-title title">LCAD <span class="blue-text">+</span> <img src="<?php the_field('name_graphic_cptssp'); ?>" alt="<?php the_title(); ?>"></h3>
                                </a>
                            </div>

                            <!-- Post Department -->
                            <div class="post-department-wrap department-wrap">
                                <h4 class="post-department department"><?php the_field('student_sub_header'); ?></h4>
                            </div>
                            
                            <!-- Post Details -->
                            <div class="post-excerpt-wrap excerpt-wrap">
                                <?php the_field('student_details'); ?>
                            </div>

                            <!-- Post Button -->
                            <!-- <div class="post-btn-wrap"> -->
                                <a class="post-btn" href="#">Donate Now</a>
                            <!-- </div> -->
                        </div>

                    </div>
                </article>

            <?php endwhile ?>

            <?php
                // Start Pagination
                $total_pages = $postsQuery->max_num_pages;
                
                if ($total_pages > 1) {
                    $current_page = max(1, get_query_var('paged'));
            ?>

            <div class="post-pagination center">
                <div class="pagination">
                    <?php
                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => '/page/%#%',
                            'current' => $current_page,
                            'total' => $total_pages,
                            'prev_text'    => __('« prev'),
                            'next_text'    => __('next »'),
                            // 'prev_text'    => '<span class="arrows dashicons dashicons-arrow-left-alt"></span>',
                            // 'next_text'    => '<span class="arrows dashicons dashicons-arrow-right-alt"></span>',
                        ));
                    }
                    ?>
                </div>
            </div>

            <?php //End Pagination ?>

            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>

    <!-- <div class="lcad-pagination archive-pagination pagination">

    </div> -->
</main>

<?php get_footer();