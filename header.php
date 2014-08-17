<!doctype html>

<html lang="en">
<head>

	<meta charset="utf-8">

	<title><?php apply_filters('parent/head/title', wp_title('&raquo;', false)) ?></title>

	<?php if($site_desc = apply_filters('parent/head_description', '')): ?>
	<meta name="description" content="<?php echo $site_desc ?>">
	<?php endif; ?>

	<?php if($site_author = apply_filters('parent/head_author', '')): ?>
	<meta name="author" content="<?php echo $site_author ?>">
	<?php endif; ?>

  	<?php apply_filters('parent/head_html5shiv', '<!--[if lt IE 9]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  		<![endif]-->');
  	?>

	<?php wp_head() ?>

</head>

<body>

	<?php do_action('parent/wrapper/before'); ?>
	<div class="wrapper">
		<?php do_action('parent/wrapper/start'); ?>

		<?php do_action('parent/header/before'); ?>
		<header>
			<?php do_action('parent/header/start'); ?>
			<?php do_action('parent/header/end'); ?>
		</header>
		<?php do_action('parent/header/before'); ?>

		<?php do_action('parent/main/before'); ?>
		<div class="main">
			<?php do_action('parent/main/start') ?>