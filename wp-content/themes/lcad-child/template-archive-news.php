<?php
    /* Template Name: Recent News Archive */
    get_header();

    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
    $postsQuery = new WP_Query(
    array(
        'post_type'      => 'post',
        'category_name'  => 'lcad news',
        'orderby'        => 'date',
        'posts_per_page' => 12,
        'paged' => $paged
    ) ); 
?>

<section id="archive-header" class="container-fluid">
    <div class="archive-header-container row">
        
        <!-- Breadcrumbs -->
        <!-- <div class="news-breadcrumbs breadcrumbs"> -->
            <?php //the_breadcrumb(); ?>
        <!-- </div> -->

        <!-- Page Title -->
        <div class="news-title-wrap archive-title-wrap title-wrap col-8">
            <h1 class="news-title archive-title title"><?php echo esc_html( get_the_title() ); ?></h1>
        </div>

        <!-- Page Filter -->
        <div class="news-filter-wrap filter-wrap col-4">
            <h1 class="news-filter filter"><?php //echo esc_html( get_the_title() ); ?></h1>
        </div>

    </div>
</section>

<main id="news-main" class="container-fluid">
    <div class="content-container row">
        <?php if ($postsQuery->have_posts()) : ?>
            <?php while ($postsQuery->have_posts()) : $postsQuery->the_post(); ?>
        
                <article id="post-<?php the_ID(); ?>" class="recent-news-container post-container col-4">
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

                        <!-- Post Category -->
                        <div class="post-category-wrap category-wrap">
                            <?php
                                //get all the categories the post belongs to
                                $categories = wp_get_post_categories( get_the_ID() );
                                
                                //loop through them
                                foreach($categories as $c){
                                    $cat = get_category( $c );
                                    
                                    //get the name of the category
                                    $cat_id = get_cat_ID( $cat->name );
                                    
                                    //make a list item containing a link to the category
                                    echo '<li><a href="'.get_category_link($cat_id).'">'.$cat->name.'</a></li>';
                                }
                            ?>
                        </div>

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
                </article>

            <?php endwhile ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>

    <div class="lcad-pagination archive-pagination pagination">
        <?php lcad_pagination(); ?>
    </div>
</main>

<section id="inquiry-form" class="container-fluid">
    <!-- Inquiry Form -->
</section>

<?php get_footer();