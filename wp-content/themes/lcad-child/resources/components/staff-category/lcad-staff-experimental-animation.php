<?php
    // $categoryName = 'sculpture';
    $categoryName = 'experimental-animation';
    
    $args = array(
        'post_type' => 'staff',
        'post_status' => 'publish',
        'category_name' => $categoryName,
        'posts_per_page' => 8,
    );

    $arr_posts = new WP_Query( $args );

    if ( $arr_posts->have_posts() ) :

        while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post();
?>

<article id="post-<?php the_ID(); ?>" class="lcad-staff staff-directory col-xs-12 col-md-6 col-lg-3" <?php post_class(); ?>>

    <div class="lcad-staff-container">
        <!-- Start Post Image -->
        <div class="post-image-wrap">
            <?php
                if ( has_post_thumbnail() ) :
                    the_post_thumbnail('staff-card');
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
                    <div class="staff-department department">
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
                    <div class="staff-email email">
                        <?php the_field('email'); ?>
                    </div>
                <?php endif; ?>
                <!-- Extension -->
                <?php if (get_field('extension')): ?>
                    <div class="staff-extension extension">
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