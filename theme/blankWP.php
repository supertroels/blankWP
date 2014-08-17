<?php

/**
* 
*/
class blankWP{
	
	function __construct(){

		add_action('init', array($this, 'disable_wp_head_actions'), 1);
		add_filter('template/head/title', array($this, 'get_page_title'), 10, 2);
		
	}

	function disable_wp_head_actions(){
		if(apply_filters('template/head/rsd_link', false));
			remove_action('wp_head', 'rsd_link');
		
		if(apply_filters('template/head/wlvmanifest_link', false));
			remove_action('wp_head', 'wlwmanifest_link');

		if(apply_filters('template/head/wp_generator', false));
			remove_action('wp_head', 'wp_generator');
	}

	function get_page_title($title, $sep = '&raquo;'){
		return get_bloginfo('title').wp_title($sep, false);
	}
}

$blankwp = new blankWP();

function blankwp(){
	global $blankwp;
	if($blankwp)
		return $blankwp;
}

?>