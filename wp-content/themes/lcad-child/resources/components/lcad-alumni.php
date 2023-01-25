<?php
    $args = array(
        'post_type' => 'alumni',
        'post_status' => 'publish',
        'posts_per_page' => 8,
    );

    $arr_posts = new WP_Query( $args );

    if ( $arr_posts->have_posts() ) :

        while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post();
?>

<article id="post-<?php the_ID(); ?>" class="lcad-alumni alumni-directory col-xs-12 col-md-6 col-lg-3" <?php post_class(); ?>>

    <div class="lcad-alumni-container">
        <!-- Start Post Image -->
        <div class="post-image-wrap">
            <?php
                if ( has_post_thumbnail() ) :
                    the_post_thumbnail('alumni-card');
                endif;
            ?>
        </div>
        <!-- End Post Image -->

        <div class="post-content-container">
            <!-- Start Post Content - Visible -->
            <div class="post-content-wrap">
                <!-- Post Title -->
                <div class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </d>
                <!-- Department -->
                <?php if (get_field('degree_department')): ?>
                    <div class="alumni-department department">
                        <?php the_field('degree_department'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <!-- End Post Content - Visible -->

            <!-- Start Post Content - Hover -->
            <div class="post-content-wrap-hover">
                <!-- Office Hours -->
                <?php if (get_field('office_hours')): ?>
                    <div class="office-hours">
                        <?php the_field('office_hours'); ?>
                    </div>
                <?php endif; ?>
                <!-- Email -->
                <?php if (get_field('email')): ?>
                    <div class="alumni-email email">
                        <?php the_field('email'); ?>
                    </div>
                <?php endif; ?>
                <!-- Extension -->
                <?php if (get_field('extension')): ?>
                    <div class="alumni-extension extension">
                        EXT. <?php the_field('extension'); ?>
                    </div>
                <?php endif; ?>

            </div>
            <!-- End Post Content - Hover -->
        </div>

    </div>

</article>

<?php
    endwhile;
    endif;
?>