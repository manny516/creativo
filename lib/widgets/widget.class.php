<?php

/*
 * Author: Manny Idea
 * Text Domain: creatividad
 */
 

class creatividad_contactwidget extends WP_Widget 

{

	public function __construct() {

		parent::__construct('creatividad_contactwidget',esc_html__('Contact Widget','creatividad'),array('description'=>'Wraps whatever you type in with code.', 'class'=>'creatividad_contactwidget')

		);

	}

	

	/**

	 * 

	 * @param type $instance

	 */

	public function form($instance)

	{
		// these are the default widget values
		$default = array( 

			'title' => esc_html__('','creatividad'),

			'address'=> esc_html__('','creatividad'),
			
			'email_title' => esc_html__('','creatividad'),
			
			'email' => esc_html__('','creatividad'),
			
			'phone_title' => esc_html__('','creatividad'),
			
			'phone' => esc_html__('','creatividad'),

			);

		$instance = wp_parse_args( (array)$instance, $default );

		//this is the html for the fields in the wp dashboard
		echo "\r\n";

		echo "<p>";

		echo "<label for='".esc_attr($this->get_field_id('title'))."'>" . esc_html__('Title','creatividad') . ":</label> " ;

		echo "<input type='text' class='widefat' id='".esc_attr($this->get_field_id('title'))."' name='".esc_attr($this->get_field_name('title'))."' value='" . esc_attr($instance['title'] ) . "'placeholder='".esc_html_e('Enter Widget title', 'creatividad')."' />" ;

		echo "</p>";

		echo "<p>";

		echo "<label for='".esc_attr($this->get_field_id('address'))."'>" . esc_html__('Enter Street Address','creatividad') . ":</label> " ;

		echo "<input type='text' class='widefat' id='".esc_attr($this->get_field_id('address'))."' name='".esc_attr($this->get_field_name('address'))."' value='" . esc_attr( $instance['address'] ) . "' placeholder='".esc_html_e('Enter Street Address', 'creatividad')."' />" ;

		echo "</p>";
		
		
		echo "<p>";
		echo "<label for='".esc_attr($this->get_field_id('email_title'))."'>" . esc_html__('Enter Email Address','creatividad') . ":</label> " ;
		echo "<input type='text' class='widefat' id='".esc_attr($this->get_field_id('email'))."' name='".esc_attr($this->get_field_name('email'))."' value='" . esc_attr($instance['email'] ) . "' placeholder='".esc_html_e('Enter Email Address','creatividad')."' />" ;
		
		echo "</p>";
		
		
		echo "<p>";
		echo "<label for='".esc_attr($this->get_field_id('phone_title'))."'>" . esc_html__('Enter Contact Number','creatividad') . ":</label> " ;
		echo "<input type='text' class='widefat' id='".esc_attr($this->get_field_id('phone'))."' name='".esc_attr($this->get_field_name('phone'))."' value='" . esc_attr($instance['phone'] ) . "' placeholder='".esc_html_e('Phone Number','creatividad')."' />" ;
		
		echo "</p>";

	}

		

	/**

	 * 

	 * @param type $new_instance

	 * @param type $old_instance

	 * @return type

	 */

	public function update($new_instance, $old_instance) 

	{

		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);

		$instance['address'] = $new_instance['address'];
		
		$instance['email_title'] = $new_instance['email_title'];
		
		$instance['email'] = $new_instance['email'];
		
		$instance['phone_title'] = $new_instance['phone_title'];
		
		$instance['phone'] = $new_instance['phone'];
	
		return $instance;

	}

		

	/**

	 * Renders the actual widget

	 * 

	 * @global post $post

	 * @param array $args 

	 * @param type $instance

	 */

	public function widget($args, $instance) 

	{

		extract($args, EXTR_SKIP);
		
		//global WP theme-driven "before widget" code
		echo balanceTags($before_widget);
		
		// code before your user input
		echo '<div class="contact-us"><!--Your custom html code goes here!-->';
		echo "	<div class=\"contact-info\">";
		echo "		<h2>" .esc_html($instance['title']) . "</h2>";
		echo "	<span class=\"icons fa fa-map-marker\"> </span><p>" .esc_html($instance['address'])."</p>";
		echo "	</div>";
		echo "	<div class=\"contact-info\">";
		echo "	<br />";
		echo "	<span class=\"icons fa fa-envelope-o\"> </span> <p>".esc_html($instance['email'])."</p>";
		echo "	</div>";
		echo "	<div class=\"contact-info\">"; 
		echo "	<br />";
		echo "	<span class=\"icons fa fa-phone\"> </span> <p>".esc_html($instance['phone'])."</p>";
		echo "	</div>";
		// code after your user input
		echo '</div>';
			
		//global WP theme-driven "after widget" code
		echo balanceTags($after_widget);
	}

}




/****************   Twitter feed Class ********************/


class creatividad_twitterwidget extends WP_Widget 

{

	public function __construct() {

		parent::__construct(

			'creatividad_twittertwidget', esc_html__('Twitter Widget','creatividad'),array('description'=>'Wraps whatever you type in with code.', 'class'=>'creatividad_twitterwidget')

		);

	}

	

	public function form($instance)

	{
		// these are the default widget values
		$default = array( 

			'title' => esc_html__('','creatividad'),
			
			'twitter_url_title'=> esc_html__('','creatividad'),

			'twitter_url'=> esc_html__('','creatividad'),
			
			'twitter_id_title'=> esc_html__('','creatividad'),
			
			'twitter_id' => esc_html__('','creatividad')

			);

		$instance = wp_parse_args( (array)$instance, $default );

		//this is the html for the fields in the wp dashboard
		echo "\r\n";

		echo "<p>";

		echo "<label for='".esc_attr($this->get_field_id('title'))."'>" . esc_html__('Title','creatividad') . ":</label> " ;

		echo "<input type='text' class='widefat' id='".esc_attr($this->get_field_id('title'))."' name='".esc_attr($this->get_field_name('title'))."' value='" . esc_attr($instance['title'] ) . "' placeholder='".esc_html_e('Enter Widget Title','creatividad')."' />" ;

		echo "</p>";

		echo "<p>";
		echo "<label for='".esc_attr($this->get_field_id('twitter_url_title'))."'>" . esc_html__('Enter Your Twitter URL ','creatividad') . ":</label> " ;
		echo "<input type='text' class='widefat' id='".esc_attr($this->get_field_id('twitter_url'))."' name='".esc_attr($this->get_field_name('twitter_url'))."' value='" . esc_attr( $instance['twitter_url'] ) . "' placeholder='".esc_html_e('Enter Your Twitter URL', 'creatividad')."' />" ;

		echo "</p>";
		
		
		echo "<p>";
		echo "<label for='".esc_attr($this->get_field_id('twitter_id_title'))."'>" . esc_html__('Enter Your ID Title','creatividad') . ":</label> " ;
		echo "<input type='text' class='widefat' id='".esc_attr($this->get_field_id('twitter_id'))."' name='".esc_attr($this->get_field_name('twitter_id'))."' value='" . esc_attr($instance['twitter_id'] ) . "'placeholder='".esc_html_e('Enter Twitter ID','creatividad')."' />" ;
	
		echo "</p>";
		

	}

		

	public function update($new_instance, $old_instance) 

	{

		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);

		$instance['twitter_url_title'] = $new_instance['twitter_url_title'];
		
		$instance['twitter_url'] = $new_instance['twitter_url'];
		
		$instance['twitter_id_title'] = $new_instance['twitter_id_title'];
		
		$instance['twitter_id'] = $new_instance['twitter_id'];
		

		return $instance;

	}

		

	public function widget($args, $instance) 

	{

		extract($args, EXTR_SKIP);
		
		//global WP theme-driven "before widget" code
		echo balanceTags($before_widget);
		
		// code before your user input
		
		$instance_title = esc_html($instance['title']);
		$instance_url = esc_html($instance['twitter_url']);
		$instance_id = esc_html($instance['twitter_id']);

		echo "<h2>" .$instance_title . "</h2>";
		echo "<a class=\"twitter-timeline\" href=\"{$instance_url}\" data-widget-id=\"{$instance_id}\" > </a> ";	
		
		
		echo balanceTags($after_widget);
	}

}





