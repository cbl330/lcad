<!-- <div id="general-faq" class="faq-container container-fluid">
    <div clas="faq-wrap row align-items-center">
        
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                    </button>
                </h2>

                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
</div> -->





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