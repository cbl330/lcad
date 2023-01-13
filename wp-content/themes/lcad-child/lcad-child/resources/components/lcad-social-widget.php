<?php
class BioFest_Social_Widget extends WP_Widget {

	public function __construct() {
		parent::__construct(
            'BioFest_Social_Widget',
			'BioFest Social Widget',
			array( 'description' => __( 'Add Social Media Links/Icons', 'biofest' ) )
		);
	}

	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		$twitter = $instance['twitter'];
		$facebook = $instance['facebook'];
		$linkedin = $instance['linkedin'];
		$pinterest = $instance['pinterest'];
        $instagram = $instance['instagram'];

		echo $before_widget;?>

		<div class="social-widget">
            <?php if($title):?><h4 class="widget-title"><?php echo $title;?></h4><?php endif;?>
            <ul class="list-inline">
                <?php if($facebook):?><li class="sm sm-1 facebook"><a href="<?php echo $facebook;?>"><i class="fab fa-facebook-square" aria-hidden="true"></i><span class="screen-reader-text">Facebook</span></a></li><?php endif;?>
                <?php if($twitter):?><li class="sm sm-2 twitter"><a href="<?php echo $twitter;?>"><i class="fab fa-twitter-square" aria-hidden="true"></i><span class="screen-reader-text">Twitter</span></a></li><?php endif;?>
                <?php if($linkedin):?><li class="sm sm-3 linkedin"><a href="<?php echo $linkedin;?>"><i class="fab fa-linkedin" aria-hidden="true"></i><span class="screen-reader-text">LinkedIn</span></a></li><?php endif;?>
                <?php if($pinterest):?><li class="sm sm-4 pinterest"><a href="<?php echo $pinterest;?>"><i class="fab fa-pinterest-square" aria-hidden="true"></i><span class="screen-reader-text">Pinterest</span></a></li><?php endif;?>
                <?php if($instagram):?><li class="sm sm-5 instagram"><a href="<?php echo $instagram;?>"><i class="fab fa-instagram" aria-hidden="true"></i><span class="screen-reader-text">Instagram</span></a></li><?php endif;?>
            </ul>
        </div>

		<?php echo $after_widget;
	}


	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['twitter'] = strip_tags($new_instance['twitter']);
		$instance['facebook'] = strip_tags($new_instance['facebook']);
		$instance['linkedin'] = strip_tags($new_instance['linkedin']);
		$instance['pinterest'] =  strip_tags($new_instance['pinterest']);
		$instance['instagram'] =  strip_tags($new_instance['instagram']);
		return $instance;
	}

	public function form( $instance ) {
		if(isset($instance['title']))
			$title = $instance['title'];
            $facebook = isset($instance['facebook']) ? $instance['facebook'] : '';
            $twitter = isset($instance['twitter']) ? $instance['twitter'] : '';
            $linkedin = isset($instance['linkedin']) ? $instance['linkedin'] : '';
            $pinterest = isset($instance['pinterest']) ? $instance['pinterest'] : '';
            $instagram = isset($instance['instagram']) ? $instance['instagram'] : '';
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e( 'Facebook:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e( 'Twitter:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" type="text" value="<?php echo esc_attr( $twitter ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php _e( 'Linkedin:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" type="text" value="<?php echo esc_attr( $linkedin ); ?>" />
		</p>		
        <p>                                                                                                                                                                       
            <label for="<?php echo $this->get_field_id( 'pinterest' ); ?>"><?php _e( 'Pinterest:' ); ?></label>                                                                 
            <input class="widefat" id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" type="text" value="<?php echo esc_attr( $pinterest); ?>" />
        </p>
        <p>                                                                                                                                                                       
            <label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e( 'Instagram:' ); ?></label>                                                                 
            <input class="widefat" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" type="text" value="<?php echo esc_attr( $instagram); ?>" />
        </p>
	<?php
	}

}

function BioFest_Social_Widget_Init()
{
	register_widget('BioFest_Social_Widget');
}
add_action( 'widgets_init', 'BioFest_Social_Widget_Init');