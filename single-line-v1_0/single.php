<?php get_header(); ?>

	<div id="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="feature-img"><?php the_post_thumbnail( 'single-post-thumbnail' ); ?></div>
			<div class="post-title"><h2><?php the_title(); ?></h2></div>
			<div class="over"><hr></div>
			<div class="date"><?php the_time('j F, Y') ?></div>
			<div class="text"><p><?php the_content(__('περισσότερα &#8594;')); ?></p></div>
			<p><?php comments_template(); ?></p>
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div>
	
<?php get_footer(); ?>
