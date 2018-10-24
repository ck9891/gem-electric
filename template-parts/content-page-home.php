<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BrighterIdeas
 */

?>

<!-- Begin Home Content -->
<?php 
    $bg_image = get_the_post_thumbnail();
?>
<section class="background-image" id="homeContent">
    <?php 
     if ( isset($bg_image ) ) :
    ?>
        <?php print $bg_image; ?>
    <?php
     endif;
    ?>
    <div class="content text-centre">
    <?php
        the_content();
    ?>
    </div>
     <!-- Begin Nav Squares -->
    <nav id="site-navigation" class="main-navigation square-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'brighter-ideas' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
</section>
<!-- End Home Content -->
<section class="full-width" id="quote">
    <div class="quote-container">
        <p>This is a quote or call to action</p>
        <a href="#" class="btn cta">Call Me For a Quote</a>
    </div>
</section>
<!-- Begin Home Services -->
<?php
    $args = array(
        'post_type' => 'service',
          'post_status' => 'publish',
    );

// The Query
$query = new WP_Query( $args );
?>
<section class="page-section" id="servicesHome">
<?php 
    if ( $query->have_posts() ) : 
        while ( $query->have_posts() ) : $query->the_post();
?>
    <div class="service">
        <h3 class="service-header"><?php print get_the_title(); ?></h3>
        <p class="service-text">
            <?php
                print get_the_content();
            ?>
        </p>
    </div>
<?php
    endwhile;
    endif;
?>
</section>
<!-- End Home Services -->

<!-- #page-<?php the_ID(); ?> -->
