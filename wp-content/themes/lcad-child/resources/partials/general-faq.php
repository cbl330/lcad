<?php
// *Repeater
// bootstrap_accordion_repeater
// *Sub-Fields
// accordion_header
// accordion_content

// check if the repeater field has rows of data
if( have_rows('faq_repeater') ):
	$i = 1; // Set the increment variable
?>
	
    <section id="lcad-faq" class="container-fluid">
        <div class="faq-container">

            <!-- Start Accordion -->
            <div id="accordion-general" class="accordion row">

                <?php
                // loop through the rows of data for the tab header
                while ( have_rows('faq_repeater') ) : the_row();
                    $header = get_sub_field('question');
                    $content = get_sub_field('answer');

                    if ( $i <= 5 ) {
                        $class = 'left-panel';
                        // $textAlign = 'flex-sm-end';
                        // $textOrder = 'flex-sm-first';
                        // $imageOrder = 'flex-sm-last';
                    } else {
                        $class = 'right-panel';
                        // $textAlign = 'flex-sm-start';
                        // $textOrder = 'flex-sm-last';
                        // $imageOrder = 'flex-sm-first';
                    }
                ?>
                
                <!-- Start Left Panel -->
                <div class="accordion-item col-6 <?php echo $class; ?>">

                    <h5 id="heading-<?php echo $i; ?>" class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $i; ?>">
                            <?php echo $header; ?>
                        </button>
                    </h5>
                
                    <div id="collapse-<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="heading-<?php echo $i; ?>" data-bs-parent="#accordion-general">
                        <div class="accordion-body">
                            <?php echo $content; ?>
                        </div>
                    </div>

                </div> 
                <!-- End Left Panel -->
                
                
                <?php
                    $i++; // Increment the increment variable
                    endwhile; //End the loop
                // endif;
                ?>

            </div>
            <!-- End Accordion -->

        </div>
    </section>
<?php endif; ?>