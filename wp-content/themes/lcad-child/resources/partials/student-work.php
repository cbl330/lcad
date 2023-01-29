<?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'student work',
        'posts_per_page' => 4,
    );

    $query = new WP_Query( $args );
    $inc=1;
?>

<section id="lcad-student-work" class="container-fluid">
    <div class="lcad-student-work-container row d-flex align-items-center">

        <!-- Start Left Cell -->
        <div class="left-cell featured-student-work col-xs-12 col-lg-6">
            <div class="left-cell-wrap featured-work-wrap">

                <!-- Start Header -->
                <div class="featured-header row align-items-center">
                    <!-- Title -->
                    <div class="featured-title-wrap title-wrap col-xs-12 col-lg-8">
                        <h2 class="featured-title title">Student Work</h2>
                    </div>
                    <!-- Button -->
                    <div class="view-more-wrap col-xs-12 col-lg-4">
                        <a class="view-more-btn" href="#">View More Work</a>
                    </div>
                </div>
                <!-- End Header -->

                <!-- Start Featured Work Post -->
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <?php if ($query->current_post==0): ?>  
                        <article id="post-<?php the_ID(); ?>" class="student-work-featured featured-work featured-post" <?php post_class(); ?>>

                            <!-- Start Post Image -->
                            <div class="post-image-wrap">
                                <?php
                                    if ( has_post_thumbnail() ) :
                                        the_post_thumbnail('student-work-featured');
                                    endif;
                                ?>
                            </div>
                            <!-- End Post Image -->

                            <!-- Start Post Content -->
                            <header class="post-content-wrap">
                                <!-- Post Category -->
                                <div class="entry-header">
                                    <li class="category"><?php the_category(); ?></li>
                                </div>
                                <!-- Post Title -->
                                <div class="entry-title">
                                    <a class="post-link" href="<?php the_permalink(); ?>">
                                        <h3 class="title"><?php the_title(); ?></h3>
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
                            </header>
                            <!-- End Post Content -->

                        </article>
                    <?php endif; ?>
                <?php endwhile; ?>
                <!-- End Featured Work Post -->

            </div>
        </div>
        <!-- End Left Cell -->

        <!-- Start Right Cell -->
        <div class="right-cell student-work-container col-xs-12 col-lg-6">
            <div class="right-cell-wrap student-work-wrap">

                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <?php if ($query->current_post>0): ?>  
                        <article id="post-<?php the_ID(); ?>" class="student-work-post row">

                            <!-- Start Post Content -->
                            <header class="post-content-wrap col-xs-12 col-lg-8 order-2 order-lg-1">
                                <!-- Post Category -->
                                <div class="entry-header">
                                    <li class="category"><?php the_category(); ?></li>
                                </div>
                                <!-- Post Title -->
                                <div class="entry-title">
                                    <a class="post-link" href="<?php the_permalink(); ?>">
                                        <h3 class="title"><?php the_title(); ?></h3>
                                    </a>
                                </div>
                                <!-- Post Excerpt -->
                                <div class="post-excerpt-wrap excerpt-wrap">
                                    <?php 
                                        $content = get_the_content();
                                        echo substr($content, 0, 100);
                                        echo '...'; 
                                    ?>
                                </div>
                            </header>
                            <!-- End Post Content -->

                            <!-- Start Post Image -->
                            <div class="post-image-wrap col-xs-12 col-lg-4 order-1 order-lg-2">
                                <?php
                                    if ( has_post_thumbnail() ) :
                                        the_post_thumbnail('student-work-featured');
                                    endif;
                                ?>
                            </div>
                            <!-- End Post Image -->

                        </article>
                    <?php endif; ?>
                <?php endwhile; ?>
            
            </div>
        </div>
        <!-- End Right Cell -->

    </div>
</section>