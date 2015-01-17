<?php

/* * Plugin Name: Advertisement 
 * 
 *Plugin URI: http://dutchnews.ru/ 
 *Author URI: http://bwawwp.com 
 ** Description: This is a working folder of the plugin. 
 ** Author: Artem, Rotterdam
 *
 ** Version: 1.0.0 
 ** 
 ** License: GPLv2 */
		
function at_wp_footer($variableA) {
			$variableA = "I am still working on two plugins: APM and WP UF";
			echo $variableA;
	}
add_action ('wp_footer', 'at_wp_footer');



function at_load_scripts() {        
	if (is_admin()) {                
		wp_enqueue_script(                        
		'advertisement-plugin-admin',                        
		plugins_url('js/admin.js', __FILE__ ),                        
		array('jquery'),                        
		ADVERTISEMENT_VERSION                
		);        
	} else {                
		wp_enqueue_script(                        
		'advertisement-plugin-frontend',                        
		plugins_url('js/frontend.js', __FILE__ ),                        
		array('jquery'),                        
		ADVERTISEMENT_VERSION                
		);        
	} 
} 
add_action('init', 'at_load_scripts');



function at_load_styles() {        
	if (is_admin()) {                
		wp_enqueue_style(                        
		'advertisement-plugin-admin',                        
		plugins_url('css/admin.css', __FILE__ ),                        
		array(),                        
		ADVERTISEMENT_VERSION,                        
		'screen'                
		);        
	} else {                
		wp_enqueue_style(                        
		'advertisement-plugin-frontend',                        
		plugins_url('css/frontend.css', __FILE__ ),                        
		array(),                        
		ADVERTISEMENT_VERSION,                        
		'screen'                
		);        
	} 
} 

add_action('init', 'at_load_styles'); 
?>
