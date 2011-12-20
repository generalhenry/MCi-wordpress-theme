<?php get_header(); ?>

<div id="main" role="main">
<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<div class="post-sidebar">
			<div class="post-date">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<span class="post-month"><?php the_time('M'); ?></span>
					<span class="post-day"><?php the_time('j'); ?></span>
				</a>
			</div>
			<div class="edit-link">edit</div>
		</div>
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>

			<div class="entry">
				<?php the_content(); ?>
			</div>
		</div>

	<?php endwhile; ?>


<?php else : ?>

	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>
</div>
<?php get_footer(); ?>