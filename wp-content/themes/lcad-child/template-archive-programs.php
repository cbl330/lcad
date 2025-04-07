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

<!-- Start Archive Header -->
<section id="archive-header" class="container-fluid">
    <div class="archive-header-container row">

        <!-- Page Title -->
        <div class="archive-title-wrap programs-title-wrap title-wrap col-md-8 col-xs-12">
            <h1 class="archive-title programs-title title"><?php echo esc_html( get_the_title() ); ?></h1>
        </div>

    </div>
</section>
<!-- End Archive Header -->

<!-- Start Program Section -->
<main id="programs" class="container-fluid">
    <div class="content-container row">
        <?php if ($postsQuery->have_posts()) : ?>
            <?php while ($postsQuery->have_posts()) : $postsQuery->the_post(); ?>
        
                <article id="program-<?php the_ID(); ?>" class="programs-container post-container col-xs-12 col-md-6 col-lg-4 col-xl-3 card-group">
                    <div class="post card">

                        <!-- Post Image -->
                        <?php if ( has_post_thumbnail( get_the_ID() ) ) { ?>
                            <div class="post-image-wrap card-img-top">
                                <div class="post-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>

                        <div class="post-content-wrap card-body">
                            <!-- Post Title -->
                            <div class="post-title-wrap title-wrap">
                                <a class="permalink" href="<?php the_permalink(); ?>">
                                    <h3 class="post-title"><?php the_title(); ?></h3>
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

                            <!-- Post Degree Option - BFA-->
                            <?php if( have_rows('bfa_option') ): ?>
                                <?php while (have_rows('bfa_option')) : the_row();?>
                                
                                    <?php
                                        $options = get_sub_field('bfa_degree_option');
                                        if( $options ): 
                                    ?>

                                        <ul class="degree-option-wrap">
                                            <?php foreach( $options as $option ): ?>
                                                <a class="degree-option-link link" href="<?php the_sub_field('bfa_degree_option_link') ?>"><li class="degree-option-item"><?php echo $option; ?></li></a>
                                            <?php endforeach; ?>
                                        </ul>

                                    <?php endif; ?>

                                <?php endwhile; ?>
                            <?php endif; ?>

                            <!-- Post Degree Option - Minor-->
                            <?php if( have_rows('minor_option') ): ?>
                                <?php while (have_rows('minor_option')) : the_row();?>
                                
                                    <?php
                                        $options = get_sub_field('minor_degree_option');
                                        if( $options ): 
                                    ?>

                                        <ul class="degree-option-wrap">
                                            <?php foreach( $options as $option ): ?>
                                                <a class="degree-option-link link" href="<?php the_sub_field('minor_degree_option_link') ?>"><li class="degree-option-item"><?php echo $option; ?></li></a>
                                            <?php endforeach; ?>
                                        </ul>

                                    <?php endif; ?>

                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>

                    </div>
                </article>

            <?php endwhile ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</main>
<!-- End Program Section -->

<!-- Start Student Inquiry Section -->
<?php get_template_part('resources/partials/student', 'inquiry'); ?>
<!-- End Student Inquiry Section -->

<?php get_footer();