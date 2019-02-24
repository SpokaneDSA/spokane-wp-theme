<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
// TODO(dsiddy): Check whether or not the Advanced Custom Fields plugin is installed and active.
$fields = get_fields();
?>
<main>
	<div id="dsa-home-sidebar">
		<div id="dsa-next-meeting">
			<?php // TODO(dsiddy): Add the ability for folks to export this information in ICS format so that they can easily add our meetings to their calendars. ?>
			<?php
			$next_meeting_datetime = date( 'c', $fields['next_meeting_time'] );
			$next_meeting_date = date( 'F j, Y', $fields['next_meeting_time'] );
			$next_meeting_time = date( 'g:i A', $fields['next_meeting_time'] );
			?>
			<h2><?php echo __( 'Next meeting:', 'spokanedsa' ); ?></h2>
			<div>
				<time datetime="<?php echo $next_meeting_datetime; ?>"><?php echo $next_meeting_date; ?> @ <?php echo $next_meeting_time; ?></time>
			</div>
			<div>
				<address>
					<?php echo $fields['next_meeting_location']; ?>
				</address>
			</div>
		</div>
		<div id="dsa-introduction">
			<?php the_content(); ?>
		</div>
	</div>
</main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
