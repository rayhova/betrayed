<?php
/**
 Template Name: Home-Page Template
 *

 *
 * @package RGDeuce
 */

get_header(); ?>

	<div id="primary" class="content-area">
	<?php putRevSlider( "home" ) ?>
		<main id="main" class="site-main" role="main">

			<h1> Stories</h1>
			<div id ="home-blogs">
			<?php echo do_shortcode('[display-posts image_size="homethumb" wrapper="div" posts_per_page="20" order="DESC" orderby="date"]') ?>
			</div><!-- #home-blogs -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
