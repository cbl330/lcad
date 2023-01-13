<?php
    /* Template Name: Programs Archive */
    get_header();

    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
    $postsQuery = new WP_Query(
    array(
        'post_type'      => 'programs',
        'orderby'        => 'name',
        'order'          => 'ASC',
        'posts_per_page' => -1,
        'paged' => $paged
    ) ); 
?>

<section id="archive-header" class="container-fluid">

    <div class="header-container row">

        <!-- Page Title -->
        <div class="news-title-wrap title-wrap col-8">
            <h1 class="news-title title"><?php echo esc_html( get_the_title() ); ?></h1>
        </div>

    </div>
</section>

<main id="programs" class="container-fluid">
    <div class="content-container row">
        <?php if ($postsQuery->have_posts()) : ?>
            <?php while ($postsQuery->have_posts()) : $postsQuery->the_post(); ?>
        
                <article id="program-<?php the_ID(); ?>" class="programs-container post-container col-3">
                    <div class="post">

                        <!-- Post Image -->
                        <?php if ( has_post_thumbnail( get_the_ID() ) ) { ?>
                            <div class="post-image-wrap">
                                <div class="post-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>

                        <div class="post-content-wrap">
                            <!-- Post Title -->
                            <div class="post-title-wrap title-wrap">
                                <a class="permalink" href="<?php the_permalink(); ?>">
                                    <h3 class="post-title title"><?php the_title(); ?></h3>
                                </a>
                            </div>

                            <!-- Post Excerpt -->
                            <div class="post-excerpt-wrap excerpt-wrap">
                                <?php 
                                    $content = get_the_content();
                                    echo substr($content, 0, 180);
                                    echo '...'; 
                                ?>
                            </div>
                        </div>

                    </div>
                </article>

            <?php endwhile ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</main>

<?php get_footer();