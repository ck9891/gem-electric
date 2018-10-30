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
		<!-- Begin Quote/CTA -->
	<?php get_template_part('loop-templates/cta-banner'); ?>
	<!-- End Quote/CTA -->
	<section class="container page-section">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
        <div class="row">
			<div class="entry-text">
				<?php
				print get_field('text');
				?>
			</div>
		</div>
	</section>
    <!-- Begin Home Services -->
<?php

//args
$args = array(
    'post_type' => 'service',
    'post_status' => 'publish',
    'posts_per_page' => -1,
);

// The Query
$query = new WP_Query( $args );
?>
<section class="page-section" id="services">
        <div class="services-header">
            <h2><i class="fas fa-cogs"></i>&ensp;What We Offer</h2>
        </div>
    <div class="container">
    <?php 
        if ( $query->have_posts() ) : 
            while ( $query->have_posts() ) : $query->the_post();
    ?>
        <div class="service">
        <?php if ( !empty( get_field('services_icon') ) ) : ?>
            <?php print get_field('services_icon'); ?>
        <?php endif; ?>
            <h3 class="service-header"><?php print get_the_title(); ?></h3>
            <p class="service-text">
                <?php
                    print get_the_content();
                ?>
            </p>
            <p class="services-expanded">
                <?php print get_field('services_expanded'); ?>
            </p>
        </div>
    <?php
        endwhile;
        endif;
    ?>
    </div>
</section>
<!-- End Home Services -->

</article><!-- #post-<?php the_ID(); ?> -->
