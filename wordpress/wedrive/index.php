<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="posts">
	<?php
			// Start the loop.
			while ( have_posts() ) {

				// On passe au post suivant
				the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content' );

			// End the loop.
			}

	?>
		<nav id="nav-posts">
			<?php previous_posts_link("Précédent"); ?>
			<?php next_posts_link("Suivant"); ?>
		</nav>
	</div>

<?php get_footer(); ?>
