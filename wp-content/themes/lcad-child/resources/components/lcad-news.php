<?php 
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'lcad news',
        'posts_per_page' => 6,
    );

    $arr_posts = new WP_Query( $args );

    if ( $arr_posts->have_posts() ) :

        while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post();
?>

<article id="post-<?php the_ID(); ?>" class="recent-news recent-post col-4" <?php post_class(); ?>>

    <?php
        // $postImage = get_the_post_thumbnail();
        // if ( has_post_thumbnail() ) :

        // echo $postImage['sizes']['blog-thumbnail'];

        // endif;
    ?>

    <!-- Start Post Image -->
    <div class="post-image-wrap">
        <?php
            if ( has_post_thumbnail() ) :
                the_post_thumbnail('blog-thumbnail');
            endif;
        ?>
    </div>
    <!-- End Post Image -->

    <!-- Start Post Content -->
    <div class="post-content-wrap">
        <!-- Post Title -->
        <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
        <!-- Post Button -->
        <div class="entry-content">
            <?php //the_excerpt(); ?>
            <a class="entry-btn" href="<?php the_permalink(); ?>">Read More</a>
        </div>
    </div>
    <!-- End Post Content -->

</article>

<?php
    endwhile;
    endif;
?>

<?php wp_reset_postdata(); ?>