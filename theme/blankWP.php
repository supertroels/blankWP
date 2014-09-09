<?php

/**
* 
*/
class blankWP{
	
	function __construct(){

		/* Attributes on elements */
		$elems = array('html', 'head', 'body', 'header', 'main', 'footer');
		foreach($elems as $elem){
			add_action('template/'.$elem.'/attributes', array($this, 'do_attributes'), 1);
			add_filter('template/'.$elem.'/get_attributes', array($this, 'filter_attributes'), 1, 2);
		}

		add_action('wp_head', array($this, 'get_head_template'), 1);
		add_action('init', array($this, 'disable_wp_head_actions'), 1);
		add_filter('template/head/title', array($this, 'get_page_title'), 10, 2);
	}

	function filter_attributes($attrs, $elem){
		switch ($elem) {
			case 'main':
				$attrs['id'] = 'main';
				break;
			case 'body':
				$attrs['class'] = 'dble';
				break;
		}

		return $attrs;

	}

	function do_attributes(){
		
		$filter = explode('/', current_filter());
		$elem 	= trim(strtolower($filter[1]));

		if($elem == 'body'){
			echo ' ';
			body_class();
		}

		if($attrs = apply_filters('template/'.$elem.'/get_attributes', $attrs, $elem)){

			$echo = '';
			foreach($attrs as $key => $attr){
				if($elem == 'body' and $key == 'class'){
					continue;
				}
				if(is_string($attr))
					$attr = explode(' ', $attr);

				$echo .= ' '.strtolower($key).'="'.implode(' ', array_filter(array_map('trim', $attr))).'"';
			}
		}
		echo $echo;
	}

	function get_head_template(){
		locate_template('global/head.php', true);
	}

	function disable_wp_head_actions(){
		if(apply_filters('template/head/show_rsd_link', false));
			remove_action('wp_head', 'rsd_link');
		
		if(apply_filters('template/head/show_wlvmanifest_link', false));
			remove_action('wp_head', 'wlwmanifest_link');

		if(apply_filters('template/head/show_wp_generator', false));
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