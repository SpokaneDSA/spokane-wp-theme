<?php get_header(); ?>
<main>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article>
		<header>
			<h1><?php the_title(); ?></h1>
			<div>by <?php the_author(); ?> &bull; <time datetime="<?php the_time( 'c' ); ?>"><?php the_date(); ?> @ <?php the_time(); ?></time></div>
		</header>
		<div>
			<?php the_excerpt(); ?>
		</div>
	</article>
	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
