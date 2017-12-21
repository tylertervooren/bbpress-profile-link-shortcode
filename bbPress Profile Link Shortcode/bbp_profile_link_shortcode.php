<?php
/**
 * Plugin Name: bbPress profile link shortcode
 * Plugin URI: http://tylertervooren.com
 * Description: Allows you to disply the link to a bbPress member's profile using the shortcode [bbp_profile_link_shortcode]. That's it!
 * Version: 0.1
 * Author: Tyler Tervooren
 * Author URI: http://tylertervooren.com
 */

//Create bbpress forum profile link shortcode
function bbp_profile_link_shortcode() {
	
		$link = bbp_get_user_profile_url( bbp_get_current_user_id() ) ;
	
	return $link;	
}

add_shortcode( 'bbp_profile_link_shortcode', 'bbp_profile_link_shortcode' );

?>