		<?php do_action('template/main/end') ?>
	</div>
	<?php do_action('template/main/before'); ?>

	<?php do_action('template/footer/before'); ?>
	<footer<?php do_action('template/footer/attributes'); ?>>
		<?php do_action('template/footer/begin'); ?>
		<?php do_action('template/footer/end'); ?>
	</footer>
	<?php do_action('template/footer/before'); ?>	
	<?php do_action('template/body/end'); ?>
	
	<?php wp_footer(); ?>

</body>

</html>