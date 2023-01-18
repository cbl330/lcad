<?php
/**
 * Team Member block
 *
 * @package      ClientName
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
**/

// $name = get_field( 'name' );
// $title = get_field( 'title' );
// $photo = get_field( 'photo' );
// $description = get_field( 'description' );


// echo '<div class="team-member">';
// 	echo '<div class="team-member--header">';
// 		if( !empty( $photo ) )
// 			echo wp_get_attachment_image( $photo['ID'], 'thumbnail', null, array( 'class' => 'team-member--avatar' ) );
// 		if( !empty( $name ) )
// 			echo '<h4>' . esc_html( $name ) . '</h4>';
// 		if( !empty( $title ) )
// 			echo '<h6 class="alt">' . esc_html( $title ) . '</h6>';
// 	echo '</div>';
// 	echo '<div class="team-member--content">' . apply_filters( 'ea_the_content', $description ) . '</div>';
// echo '</div>';

?>




<!-- ========================================================================= -->
<!-- START HERO SECTION -->
<!-- ========================================================================= -->

<section id="home-hero" class="container-fluid">
    <div class="hero-container row align-items-center">

        <!-- Start Content Cell -->
        <?php while (have_rows('hero_content_block')) : the_row();?>
            <div class="content-cell">
                <!-- Title Wrap -->
                <div class="hero-title-wrap title-wrap">
                    <?php if (get_sub_field('hero_header_block')): ?>
                        <?php the_sub_field('hero_header_block') ?>
                    <?php endif; ?>
                </div>

                <!-- Button Wrap -->
                <?php if (get_sub_field('button_text_block') && get_sub_field('button_link_block')): ?>
                    <div class="btn-wrap">
                        <a class="hero-btn btn btn-outline-light" href="<?php the_sub_field('button_link_block') ?>"><?php the_sub_field('button_text_block') ?></a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
        <!-- End Content Cell -->

        <!-- Start Slider Cell -->
        <?php if( have_rows('hero_slider_block') ): ?>
            <div class="slider-cell hero-slider">
                <?php while (have_rows('hero_slider_block')) : the_row();?>
                
                        <!-- Start Slide -->
                        <div class="hero-slide slide container-fluid">
                            <!-- Slide Image -->
                            <div class="slide-image-wrap row">
                                <?php $image = get_sub_field('slide_image_block'); ?>
                                <img class="slide-image" src="<?php echo $image['sizes']['home-hero-slide']; ?>">
                            </div>

                            <!-- Slide Caption -->
                            <?php if (get_sub_field('slide_caption_block')): ?>
                                <div class="slide-caption row">
                                    <?php the_sub_field('slide_caption_block') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- End Slide -->

                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <!-- End Slider Cell -->

    </div>
</section>

<!-- ========================================================================= -->
<!-- END HERO SECTION -->
<!-- ========================================================================= -->