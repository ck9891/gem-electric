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
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				print 'Website by <a href="http://cameronfarquharson.ca">Cameron Farquharson</a>';
				?>
		</div><!-- .site-info -->
		<div class="esa-number">
			<img src="<?php print get_template_directory_uri(); ?>/img/ECRA_ESA_Logo_Color.jpg" alt="ESA Number: 7012979">
		</div>
	</footer><!-- #colophon -->
	<?php get_template_part('loop-templates/preheader'); ?>
</div><!-- #page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
// $(document).ready(function (){
// 	$(window).on("scroll", function () {
// 		console.log();
// 		var scrollHeight = $(window).height();
// 		console.log('scroll height '+scrollHeight);
// 		var scrollPosition =  $(window).scrollTop();
// 		console.log('positon '+ scrollPosition);
// 		if ( scrollPosition >= scrollHeight) {
// 			// when scroll to bottom of the page
// 			$('.square-navigation').fadeOut('slow');
// 		}
// 		if (scrollPosition <= scrollHeight) {
// 			$( ".scroll-menu" ).removeClass('sticky-top');
// 			$('.square-navigation').fadeIn('slow');
// 		}
// 	});
// });
</script>
<?php wp_footer(); ?>

</body>
</html>
