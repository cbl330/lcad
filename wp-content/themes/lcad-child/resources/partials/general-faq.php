<?php
// *Repeater
// bootstrap_accordion_repeater
// *Sub-Fields
// accordion_header
// accordion_content
?>
<section id="lcad-faq" class="container-fluid">
    <div class="faq-container">

        <!-- Start FAQ Header -->
        <?php while (have_rows('faq_header_sgfaq')) : the_row(); ?>
            <div class="faq-header-container">
                <!-- Title -->
                <?php if (get_field('faq_title_sgfaq')) : ?>
                    <div class="faq-title-wrap">
                        <h2 class="faq-title"><?php the_field('faq_title_sgfaq'); ?></h2>
                    </div>
                <?php endif; ?>
                <!-- Sub Title -->
                <?php if (get_field('faq_sub_title_sgfaq')) : ?>
                    <div class="faq-sub-wrap">
                        <h3 class="faq-sub-title"><?php the_field('faq_sub_title_sgfaq'); ?></h3>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
        <!-- End FAQ Header -->
    
        <!-- Start FAQ Container -->
        <?php if (have_rows('faq_repeater_sgfaq')): ?>
            <div id="faq" class="faq-container">
                <ul>
                    <?php while (have_rows('faq_repeater_sgfaq')) : the_row(); ?>
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <?php if (get_sub_field('question_sgfaq')): ?>
                                <h2><?php the_sub_field('question_sgfaq') ?></h2>
                            <?php endif ?>
                            <?php if (get_sub_field('answer_sgfaq')): ?>
                                <?php the_sub_field('answer_sgfaq') ?>
                            <?php endif ?>
                        </li>
                    <?php endwhile ?>
                </ul>
            </div>
        <?php endif ?>
        <!-- End FAQ Container -->

    </div>
</section>
