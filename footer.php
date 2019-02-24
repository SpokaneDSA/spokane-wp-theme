		<footer id="dsa-page-footer">
			<ul class="dsa-social">
				<?php
				// TODO(dsiddy): Once the website is up and running, then, depending on how much traction it gains, consider making a motion to divest ourselves of third parties like Twitter, Facebook, and Google --- but particularly Facebook, since they can't seem to do anything right these days (and by 'right', I don't mean 'correctly', though there's that too).
				// TODO(dsiddy): If we have a shared Google Drive account, then consider linking to that as well. If we don't, then set up some sort of collaborative file sharing.
				?>

				<?php
				$socials = array_map( function( $social ) {
					return array(
						'title' => get_theme_mod( 'social_' . $social . '_title' ),
						'link'  => get_theme_mod( 'social_' . $social . '_link' ),
						'icon'  => get_theme_mod( 'social_' . $social . '_icon' ),
					);
				}, array(
					'twitter',
					'facebook',
					'google_groups',
					'hypothesis',
					'github',
				) );
				?>
				<?php foreach ( $socials as $social ) : ?>
					<li>
						<a href="<?php echo $social['link']; ?>">
						<?php if ( $social['icon'] ) : ?>
							<img src="<?php echo $social['icon']; ?>" alt="<?php echo $social['title']; ?>" />
						<?php
						else :
							echo $social['title'];
						endif;
						?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
			<div class="dsa-copyright">
				<?php echo get_theme_mod( 'copyright' ); ?>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>
