<?php
// *Repeater
// bootstrap_accordion_repeater
// *Sub-Fields
// accordion_header
// accordion_content
?>
<section id="lcad-faq" class="container-fluid">
    <div class="faq-container">
    <!-- FAQ -->
    <?php if (have_rows('faq_repeater')): ?>
        <div id="faq" class="faq-container">
            <ul>
                <?php while (have_rows('faq_repeater')) : the_row(); ?>
                    <li>
                        <input type="checkbox" checked>
                        <i></i>
                        <?php if (get_sub_field('question')): ?>
                            <h2><?php the_sub_field('question') ?></h2>
                        <?php endif ?>
                        <?php if (get_sub_field('answer')): ?>
                            <?php the_sub_field('answer') ?>
                        <?php endif ?>
                    </li>
                <?php endwhile ?>
            </ul>
        </div>
    <?php endif ?>
    </div>
</section>
