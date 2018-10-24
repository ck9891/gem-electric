<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BrighterIdeas
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'brighter-ideas' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'brighter-ideas' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'brighter-ideas' ), 'brighter-ideas', '<a href="http://cameronfarquharson.ca">Cameron Farquharson</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function (){
	$('.scroll-menu').hide();
	$(window).on("scroll", function () {
		console.log();
		var scrollHeight = $(window).height();
		console.log('scroll height '+scrollHeight);
		var scrollPosition =  $(window).scrollTop();
		console.log('positon '+ scrollPosition);
		if ( scrollPosition >= scrollHeight) {
			// when scroll to bottom of the page
			$( ".scroll-menu" ).addClass('sticky-top');
			$( ".scroll-menu" ).fadeIn('slow');
			$('.square-navigation').fadeOut('slow');
		}
		if (scrollPosition <= scrollHeight) {
			$( ".scroll-menu" ).removeClass('sticky-top');
			$( ".scroll-menu" ).hide();
			$('.square-navigation').show();
		}
	});
});
</script>
<?php wp_footer(); ?>

</body>
</html>
