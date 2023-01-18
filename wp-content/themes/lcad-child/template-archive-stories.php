<?php
    /* Template Name: Student Stories Archive */
    get_header();

    // Variables
    // $postImage = the_post_thumbnail();
    // $postCat = get_the_category();
    // $postTitle = the_title();
    // $postLink = the_permalink();

    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
    $postsQuery = new WP_Query(
    array(
        'post_type'      => 'student story',
        // 'category_name'  => 'lcad news',
        'orderby'        => 'date',
        // 'order'          => 'ASC',
        // 'order'          => 'DESC',
        // 'hide_empty'     => 1,
        // 'depth'          => 1,
        'posts_per_page' => -1,
        'paged' => $paged
    ) ); 
?>

<section id="archive-header" class="container-fluid">

    <div class="header-container">
        
        <!-- Breadcrumbs -->
        <!-- <div class="news-breadcrumbs breadcrumbs"> -->
            <?php //the_breadcrumb(); ?>
        <!-- </div> -->

        <!-- Page Title -->
        <div class="news-title-wrap title-wrap">
            <h1 class="news-title title"><?php echo esc_html( get_the_title() ); ?></h1>
        </div>

    </div>
</section>

<main id="stories-main" class="container-fluid">
    <div class="content-container row">
        <?php if ($postsQuery->have_posts()) : ?>
            <?php while ($postsQuery->have_posts()) : $postsQuery->the_post(); ?>
        
                <article id="post-<?php the_ID(); ?>" class="student-stories-container post-container col-4">
                    <div class="post">
                    
                        <!-- Post Video -->
                        <?php //if (get_field('student_video')): ?>
                            <div class="post-video-wrap">
                                <div class="post-video">
                                    <!-- <iframe width="450" height="275" src="//youtu.be/qpnKNr5WkV4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                    <img src="http://lcad.local/wp-content/uploads/2022/12/2549a9e291fa0ac3e4e3e4de6e47e73d1aa212a0.png" alt="placeholder">
                                </div>
                            </div>
                        <?php //endif; ?>

                        <div class="post-content-wrap">
                            <!-- Post Title -->
                            <div class="post-title-wrap title-wrap">
                                <a class="permalink" href="<?php the_permalink(); ?>">
                                    <h3 class="post-title title">LCAD + <img src="<?php the_field('student_name_graphic'); ?>" alt="placeholder"></h3>
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
                            <div class="post-btn-wrap">
                                <a class="post-btn" href="#">Donate Now</a>
                            </div>
                        </div>

                    </div>
                </article>

            <?php endwhile ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>

    <div class="lcad-pagination archive-pagination pagination">
        <?php lcad_pagination(); ?>
    </div>
</main>

<?php get_footer();