<?php get_header(); ?>

	<div id="main">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="feature-img">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail(); ?>
				</a>
				</div>
			<?php endif; ?>
			<div class="post-title"><a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a></div>
			<div class="over"><hr></div>
			<div class="date"><?php the_time('j F, Y') ?></div>
			<div class="text"><p><?php the_content(__('περισσότερα &#8594;')); ?></p></div>
		<?php endwhile; ?>
			<div class="under"><hr></div>
			<div class="loop-nav">
				<div id="nav-next"><?php previous_posts_link( '&#8592; Νεότερες αναρτήσεις' ); ?></div>
				<div id="nav-previous"><?php next_posts_link( 'Παλαιότερες αναρτήσεις &#8594;' ); ?></div>
			</div>
		<?php else : ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>

	</div>

<?php get_footer(); ?>
