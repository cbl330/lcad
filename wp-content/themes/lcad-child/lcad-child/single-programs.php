<?php get_header(); ?>

<!-- ========================================================================= -->
<!-- START HERO SECTION -->
<!-- ========================================================================= -->

<section id="program-hero" class="container-fluid">
    <div class="hero-container">

        <!-- Start Image Background -->
        <div class="section-background">
            <?php
                if ( has_post_thumbnail() ) :
                    the_post_thumbnail();
                endif;
            ?>
        </div>
        <!-- End Image Background -->

        <!-- Start Post Title -->
        <div class="page-tag">
            <h1 class="post-title"><?php the_title(); ?></h1>
        </div>
        <!-- End Post Title -->

        <!-- Start Info Cards -->
        <?php if( have_rows('information_cards') ): ?>
            <div class="slider-cell info-card-slider row">
                <?php while (have_rows('information_cards')) : the_row(); ?>
                
                        <!-- Start Slide -->
                        <div class="info-card-slide slide container-fluid col">
                            <a href="<?php the_field('card_link') ?>" class="card-link">
                                <!-- Slide Image -->
                                <div class="slide-image-wrap row">
                                    <?php $image = get_sub_field('card_image'); ?>
                                    <img class="slide-image" src="<?php echo $image['sizes']['info-card']; ?>">
                                </div>

                                <!-- Slide Content -->
                                <?php while (have_rows('card_content')) : the_row();?>
                                    <div class="slide-content row">
                                        <!-- Card Header -->
                                        <?php if( get_sub_field('card_header') ): ?>
                                            <div class="card-title">
                                                <?php the_sub_field('card_header') ?>
                                            </div>
                                        <?php endif; ?>
                                        <!-- Card Details -->
                                        <?php if( get_sub_field('card_details') ): ?>
                                            <div class="card-details">
                                            <?php the_sub_field('card_details') ?>
                                            </div>
                                        <?php endif; ?>
                                        <!-- Card Button -->
                                        <?php if( get_sub_field('card_button_text') ): ?>
                                            <div class="card-btn">
                                                <?php the_sub_field('card_button_text') ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile ?>
                            </a>
                        </div>
                        <!-- End Slide -->
                        <?php //reset_rows(); ?>
                <?php endwhile ?>
            </div>
        <?php endif; ?>

        <?php //reset_rows(); ?>
        <!-- End Info Cards -->

    </div>
</section>

<!-- ========================================================================= -->
<!-- END HERO SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START LOGO SECTION -->
<!-- ========================================================================= -->

<section id="logo-section" class="container-fluid">
    <div class="logo-container row">

        <!-- Start Section Header -->
        <div class="logo-header">
            <!-- Title -->
            <?php if (get_field('logo_section_header')) : ?>
                <div class="logo-title">
                    <?php the_field('logo_section_header'); ?>
                </div>
            <?php endif; ?>
            <!-- Sub Title -->
            <?php if (get_field('logo_section_header')) : ?>
                <div class="logo-sub-title">
                    <?php the_field('logo_section_sub_header'); ?>
                </div>
            <?php endif; ?>
        </div>
        <!-- End Section Header -->

        <!-- Start Logo Container -->
        <?php if( have_rows('logo_repeater') ): ?>
            <div class="logo-container row align-items-center">
                <?php while (have_rows('logo_repeater')) : the_row();?>
                    <!-- Logos -->
                    <div class="logo-wrap column-5">
                        <?php $image = get_sub_field('logo'); ?>
                        <img class="logo" src="<?php echo $image['sizes']['program-logo']; ?>">
                    </div>
                    <?php //reset_rows(); ?>
                <?php endwhile ?>

            </div>
        <?php endif; ?>

        <?php //reset_rows(); ?>
        <!-- End Logo Container -->

    </div>
    
</section>

<!-- ========================================================================= -->
<!-- END LOGO SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START STAFF DIRECTORY SECTION -->
<!-- ========================================================================= -->

<section id="staff-directory">
    <?php get_template_part('resources/partials/staff', 'directory'); ?>
</section>

<!-- ========================================================================= -->
<!-- END STAFF DIRECTORY SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START STUDENT WORK SECTION -->
<!-- ========================================================================= -->

<section id="student-work">
    <?php //get_template_part('resources/partials/student', 'work'); ?>
</section>

<!-- ========================================================================= -->
<!-- END STUDENT WORK SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START LCAD NEWS SECTION -->
<!-- ========================================================================= -->

<section id="recent-news">
    <?php get_template_part('resources/partials/recent', 'news'); ?>
</section>

<!-- ========================================================================= -->
<!-- END LCAD NEWS SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START FAQ SECTION -->
<!-- ========================================================================= -->

<section id="lcad-faq">

<?php


// *Repeater
// bootstrap_accordion_repeater
// *Sub-Fields
// accordion_header
// accordion_content

// check if the repeater field has rows of data
if( have_rows('faq_repeater') ):
	$i = 1; // Set the increment variable
	
	echo '<div id="accordion">';

 	// loop through the rows of data for the tab header
    while ( have_rows('faq_repeater') ) : the_row();
		
		$header = get_sub_field('question');
		$content = get_sub_field('answer');

	?>
		
        <div class="card">

            <div class="card-header" id="heading-<?php echo $i;?>">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-<?php echo $i;?>" aria-expanded="true" aria-controls="collapse-<?php echo $i;?>">
                    <?php echo $header; ?>
                </button>
                </h5>
            </div>
        
            <div id="collapse-<?php echo $i;?>" class="collapse" aria-labelledby="heading-<?php echo $i;?>" data-parent="#accordion">
                <div class="card-body">
                <?php echo $content; ?>
                </div>
            </div>
        </div>    
		
		
	<?php $i++; // Increment the increment variable
		
	endwhile; //End the loop 
	
	echo '</div>';

else :

    // no rows found
    echo 'Come back tomorrow';

endif;

// var_dump('faq_repeater');
// var_dump('faq_repeater');

?>

    <?php //get_template_part('resources/partials/general', 'faq'); ?>
</section>

<!-- ========================================================================= -->
<!-- END FAQ SECTION -->
<!-- ========================================================================= -->

<!-- ========================================================================= -->
<!-- START INQUIRY SECTION -->
<!-- ========================================================================= -->

<section id="recent-news">
    <?php //get_template_part('resources/partials/recent', 'news'); ?>
</section>

<!-- ========================================================================= -->
<!-- END INQUIRY SECTION -->
<!-- ========================================================================= -->

<?php get_footer(); ?>