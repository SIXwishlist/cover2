<?php
/**
 * The template for displaying header nav buttons.
 *
 * @package Cover2
 */

$has_sidebar = false;
if ( is_active_sidebar( 'sidebar-overlay' ) || has_nav_menu( 'top' ) || has_nav_menu( 'jetpack-social-menu' ) ) :
	$has_sidebar = true; ?>
	<button type="button" class="menu-toggle tcon tcon-menu--xcross" aria-label="toggle menu" aria-expanded="false">
	  <span class="tcon-menu__lines" aria-hidden="true"></span>
	  <span class="screen-reader-text"><?php echo _x( 'Toggle Menu', 'toggle menu overlay button', 'cover2' ); ?></span>
	</button>
<?php endif;

$search_button_class = '';
if ( $has_sidebar ) :
	$search_button_class = ' has-sidebar';
endif;
?>

<button type="button" class="search-toggle tcon tcon-search--xcross<?php echo $search_button_class; ?>" aria-label="toggle search" aria-expanded="false">
	<span class="tcon-search__item" aria-hidden="true"></span>
	<span class="screen-reader-text"><?php echo _x( 'Toggle Search', 'toggle search overlay button', 'cover2' ); ?></span>
</button>

<?php if ( is_object( $post ) && has_shortcode( $post->post_content, 'aesop_chapter' ) ) : ?>

<button type="button" class="chapter-toggle" aria-label="toggle chapter list" aria-expanded="false">
	<span class="screen-reader-text"></span>
</button>

<?php endif; ?>
