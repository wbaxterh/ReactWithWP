<?php 
/**
* Plugin.
*
* @package reactplug
* @wordpress-plugin
*
* Plugin Name:     React With WP Plugin
* Description:     ReactJS plugin for Wordpress
* Author:          Wes Huber
* Author URL:      https://weshuber.com
* Version:         1.0
*/
function displayReactApp() { 
	$current_user = (array) wp_get_current_user()->roles;
	ob_start();
	?>
    <div id="my-react-app"></div>
	<?php return ob_get_clean();
}
// register shortcode
add_shortcode('displayReactApp', 'displayReactApp'); 

add_action('wp_enqueue_scripts', 'enq_react');
function enq_react(){

    wp_register_script('display-react',
	plugin_dir_url( __FILE__ ) . '/build/index.js',
	['wp-element'],
	rand(), // Change this to null for production
	true);
    $current_user = wp_get_current_user();
    $data = array( 
     'email' => $current_user->user_email,
     );
  wp_localize_script( 'display-react', 'object', $data ); //localize script to pass PHP data to JS
  wp_enqueue_script( 'display-react' );    
}
?>