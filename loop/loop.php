<?php if ( have_posts() ) : ?>
<div class="entries">
<?php while ( have_posts() ) : the_post(); ?>
<div class="entry entry-<?php echo get_post_type() ?>">
	<h3><?php the_title() ?></h3>
	<div class="content">
		<?php the_content() ?>
	</div>
</div>
<?php endwhile; ?>
</div>
<?php locate_template(array('loop/pagination.php', 'loop/pagination-'.get_post_type().'.php'), true); ?>
<?php else: ?>
<?php locate_template(array('loop/no-results.php', 'loop/no-results-'.get_post_type().'.php'), true); ?>
<?php endif; ?>
