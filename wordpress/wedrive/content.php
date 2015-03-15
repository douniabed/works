<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_post_thumbnail(); ?>
	<div class="date">Le <?php echo get_the_date(); ?></div>
	<div class="infos">
		<h2 class="titre">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>
		<div class="content"><?php the_content(""); ?></div>
	</div>
	<?php the_category(); ?>
	<div class="social">
		<a class="social-fb"></a>
		<a class="social-tw"></a>
		<a class="social-pt"></a>
	</div>
</article>
