<?php
/**
 * The template for displaying the search and nav overlays.
 *
 * @package Cover2
 */

if ( is_active_sidebar( 'sidebar-overlay' ) || has_nav_menu( 'top' ) || has_nav_menu( 'jetpack-social-menu' ) ) : ?>

	<div class="overlay overlay--menu">
		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'top' ) ); ?>
			</nav><!-- #site-navigation -->
		<?php endif; ?>

		<?php cover2_social_menu(); ?>

		<?php if ( is_active_sidebar( 'sidebar-overlay' ) ) {
			get_sidebar();
		} ?>
	</div>

<?php endif; ?>

<div class="overlay overlay--search">
	<?php get_search_form(); ?>
</div>

<?php
// Featured Video Plus plugin compatibility
if ( function_exists( 'has_post_video' ) && has_post_video() ) { ?>

  <div class="overlay overlay--video">

		<button type="button" class="video-toggle video-stop tcon tcon-menu--xcross toggle-on" aria-label="toggle menu" aria-expanded="false">
		  <span class="tcon-menu__lines" aria-hidden="true"></span>
		  <span class="screen-reader-text"><?php echo _x( 'Toggle Menu', 'toggle menu overlay button', 'cover2' ); ?></span>
		</button>

    <?php
    $video_oembed = wp_oembed_get( get_the_post_video_url() );
    if ( '' != $video_oembed ) {
      echo $video_oembed;
    } else {
      echo '<video controls src="' . get_the_post_video_url() . '"><p>Your browser does not support native video playback.</p></video>';
    }
    ?>

  </div>

<?php } ?>
