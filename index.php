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
			<h2 class="page_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<small><span class="post-author">by <?php the_author() ?></span></small>

			<div class="entry">
				<?php the_content(); ?>
			</div>
      
      <p class="postmetadata clear post-categories"><?php the_category(' ') ?></p>
  		<hr>
		</div>

	<?php endwhile; ?>
	
	<div class="navigation">
		<div class="alignleft"><?php next_posts_link('&laquo;' . __( 'Older Entries' , 'brand-new-day' ) ) ?></div>
		<div class="alignright"><?php previous_posts_link( __( 'Newer Entries' , 'brand-new-day' ) . ' &raquo;') ?></div>
	</div>


<?php else : ?>

	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>