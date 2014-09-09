<?php

function get_content(){

	global $post;

	if(is_singular()){
		
		setup_postdata($post);

		$tmpls[] = 'content/'.get_post_type().'-'.$post->post_name.'.php';
		$tmpls[] = 'content/'.get_post_type().'-'.$post->ID.'.php';
		$tmpls[] = 'content/'.get_post_type().'.php';
		$tmpls[] = 'content/content.php';

	}
	else{
		if(is_tax()){
			$tax_id	 = get_query_var('tax');
			$tax  	 = get_taxonomy($tax_id);

			$tmpls[] = 'loop/tax-'.get_taxonomy().'-loop.php';
			$tmpls[] = 'loop/tax-loop.php';
		}
		elseif(is_tag()){

			$tag_slug	= get_query_var('tag');
			$tag 		= get_term_by('slug', $tag_slug, 'post_tag');

			$tmpls[] = 'loop/tax-loop-'.$tag->slug.'.php';
			$tmpls[] = 'loop/tax-loop-'.$tag->term_id.'.php';
			$tmpls[] = 'loop/tax-loop.php';

		}
		elseif(is_category()){

			$cat_id	 = get_query_var('cat');
			$cat  	 = get_category($cat_id);

			$tmpls[] = 'loop/cat-loop-'.$cat->slug.'.php';
			$tmpls[] = 'loop/cat-loop-'.$cat->term_id.'.php';
			$tmpls[] = 'loop/cat-loop.php';

		}
		elseif(is_post_type_archive() or is_home()){
			$pt 	 = get_post_type();
			$tmpls[] = 'loop/loop-'.$pt.'.php';
		}

		$tmpls[] = 'loop/loop.php';
	}

	locate_template($tmpls, true);

}

?>