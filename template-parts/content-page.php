<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BrighterIdeas
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<section class="container">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			print get_field('text');
			?>
		</div>
	</section>
	<!-- Begin Quote/CTA -->
	<?php get_template_part('loop-templates/cta-banner'); ?>
	<!-- End Quote/CTA -->
</article><!-- #post-<?php the_ID(); ?> -->
