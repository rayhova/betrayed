<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RGDeuce
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
<div class="social-icons"><a href="https://www.facebook.com/thebetrayedwivesclub/" target="_blank"><i class="fa fa-facebook"></i></a>
<a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
<a href="https://www.google.com/plus" target="_blank"><i class="fa fa-google-plus"></i></a>
<a href="https://www.pinterest.com/thebwc/" target="_blank"><i class="fa fa-pinterest"></i></a>
<a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
</div>
<a href="/wp-login.php" class="login-button">Login</a>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
