<?php

/*
This is the markup that goes in the <head> tag via the wp_head filter.
Overwrite this template by copying it to the same location in your child
theme.
*/

?>

<meta charset="utf-8">

<title><?php echo apply_filters('template/head/title', '', '&raquo;') ?></title>

<?php if($site_desc = apply_filters('template/head/description', '')): ?>
<meta name="description" content="<?php echo $site_desc ?>">
<?php endif; ?>

<?php if($site_author = apply_filters('template/head/author', '')): ?>
<meta name="author" content="<?php echo $site_author ?>">
<?php endif; ?>

<?php apply_filters('template/head/html5shiv', '<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->');
?>