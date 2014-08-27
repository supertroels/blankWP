<!doctype html>

<html<?php do_action('template/html/attributes'); ?>>

<head<?php do_action('template/head/attributes'); ?>>

	<?php wp_head() ?>

</head>

<body<?php do_action('template/body/attributes'); ?>>
	<?php do_action('template/body/begin'); ?>

	<?php do_action('template/header/before'); ?>
	<header<?php do_action('template/header/attributes'); ?>>
		<?php do_action('template/header/begin'); ?>
		<?php do_action('template/header/end'); ?>
	</header>
	<?php do_action('template/header/after'); ?>

	<?php do_action('template/main/before'); ?>
	<div<?php do_action('template/main/attributes'); ?>>
		<?php do_action('template/main/begin') ?>