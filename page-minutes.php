<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php
	/*
	<ul>
		<?php $uploads = get_media_items(); ?>
		<?php foreach ( $uploads as $minutes ) : ?>
			<?php print_r($minutes); ?>
			<li><a href="<?php echo $minutes['link']; ?>"><?php echo $minutes['title']; ?></a></li>
		<?php endforeach; ?>
	</ul>
	*/
	?>
	<?php
	// TODO(dsiddy): Right now, I'm having to add links to the minutes manually. I'd prefer to tag uploads appropriately, then retrieve them programmatically.
	the_content();
	?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>