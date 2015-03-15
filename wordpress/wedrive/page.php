<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */


get_header();
the_post();
?>

	<h1><?php the_title(); ?></h1>
	<div class="contenu"><?php the_content(); ?></div>

<?php get_footer(); ?>
