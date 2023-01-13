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

<div id="lcad-student-work" class="student-work-container container-fluid row">
    <!-- <div clas="post-container row align-items-center"> -->
        
        <!-- Start Left Cell -->
        <div class="left-cell featured-work col-6">
            <!-- Star Header -->
            <div class="featured-header row">
            <!-- Title -->
            <div class="featured-title-wrap title-wrap col">
                <h2 class="featured-title title">Student Work</h2>
            </div>
            <!-- Button -->
            <div class="view-more-wrap col">
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
                                <h3 class="title"><?php the_title(); ?></h3>
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
        <!-- End Left Cell -->

        <!-- Start Right Cell -->
        <div class="right-cell student-work-container col-6">
            <div class="student-work-wrap">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <?php if ($query->current_post>0): ?>  
                        <article class="student-work-post row">

                            <!-- Start Post Content -->
                            <header class="post-content-wrap col-8">
                                <!-- Post Category -->
                                <div class="entry-header">
                                    <li class="category"><?php the_category(); ?></li>
                                </div>
                                <!-- Post Title -->
                                <div class="entry-title">
                                    <h3 class="title"><?php the_title(); ?></h3>
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

                            <!-- Start Post Image -->
                            <div class="post-image-wrap col-4">
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
<!-- </div> -->