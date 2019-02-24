<?php
/*
Template Name: Committee
Template Post Type: page
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
// TODO(dsiddy): Check whether or not the Advanced Custom Fields plugin is installed and active.
$fields = get_fields();
?>
<main>
	<?php // TODO(dsiddy): Consider adding support for a featured image that can be used, e.g., as a background for the page header. ?>
	<header class="dsa-committee-header">
		<h1><?php the_title(); ?></h1>
		<ul>
			<li>
				<?php
				$next_meeting_datetime = date( 'c', $fields['next_meeting_time'] );
				$next_meeting_date = date( 'F j, Y', $fields['next_meeting_time'] );
				$next_meeting_time = date( 'g:i A', $fields['next_meeting_time'] );
				?>
				<h2><?php echo __( 'Next meeting:', 'spokanedsa' ); ?></h2>
				<div>
					<time datetime="<?php echo $next_meeting_datetime; ?>"><?php echo $next_meeting_date; ?> @ <?php echo $next_meeting_time; ?></time>
				</div>
			</li>
			<li>
				<?php
				$previous_meeting_minutes_link_basename = basename( parse_url( $fields['previous_meeting_minutes_link'], PHP_URL_PATH ) );

				$previous_meeting_minutes_link_text = $previous_meeting_minutes_link_basename ? $previous_meeting_minutes_link_basename : $fields['previous_meeting_minutes_link'];
				?>
				<h2><?php echo __( 'Previous meeting minutes:', 'spokanedsa' ); ?></h2>
				<div><a href="<?php echo $fields['previous_meeting_minutes_link']; ?>"><?php echo $previous_meeting_minutes_link_text; ?></a></div>
			</li>
			<li>
				<h2><?php echo __( 'Slack channel:', 'spokanedsa' ); ?></h2>
				<div><a href="<?php echo $fields['slack_channel_link']; ?>"><?php echo $fields['slack_channel_link']; ?></a></div>
			</li>
			<li>
				<h2><?php echo __( 'Contact email:', 'spokanedsa' ); ?></h2>
				<div><a href="mailto:<?php echo $fields['contact_email']; ?>"><?php echo $fields['contact_email']; ?></a></div>
			</li>
		</ul>
	</header>
	<div>
		<?php the_content(); ?>
	</div>
</main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
