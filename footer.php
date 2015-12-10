<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RGDeuce
 */

?>
</div><!-- .primary-secondary-wrapper -->

</div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	<div id="top-footer"></div>
	<div id="footer">
	<div class="container">
<div class="footer-menu"><?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?></div>
		<div class="site-info">
			<div class="col-md-8">
Copyright The Betrayed Wives Club 2015 | Designed By <a href="http://rgdeucemedia.com" target="_blank">RGDeuce Media</a></div>
			
			<div class="col-md-3"> <div class="social-icons"><a href="https://www.facebook.com/thebetrayedwivesclub/" target="_blank"><i class="fa fa-facebook"></i></a>
<a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
<a href="https://www.google.com/plus" target="_blank"><i class="fa fa-google-plus"></i></a>
<a href="https://www.pinterest.com/thebwc/" target="_blank"><i class="fa fa-pinterest"></i></a>
<a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
</div> </div>
		</div><!-- .site-info -->
		</div><!-- .container -->
		</div><!-- #footer -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>