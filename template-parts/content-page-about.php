<?php
/**
 * Template part for displaying page content in page-about.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BrighterIdeas
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<section class="container page-section">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
        <div class="row">
            <div class="owner">
                <?php 
                    $owner_image = get_field('image'); 
                    $name = get_field('name');
                    $title = get_field('title');
                ?>
                <img src="<?php print $owner_image['url']; ?>" alt="<?php print $name . ', ' . $title ?>">
                <h2 class="owner-title"><?php print $name; ?></h2>
                <h3 class="sub-title"><?php print $title; ?></h3>
			</div>
			<div class="entry-text">
				<?php
				print get_field('text');
				?>
			</div>
		</div>
	</section>
	<!-- Begin Quote/CTA -->
	<?php get_template_part('loop-templates/cta-banner'); ?>
	<!-- End Quote/CTA -->
</article><!-- #post-<?php the_ID(); ?> -->
