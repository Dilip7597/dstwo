<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dsourc
 */

get_header(); ?>


		<div class="row">
			<div class="page-header section-dark" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/antoine-barres.jpg')">
		        <div class="filter"></div>
				<div class="content-center">
					<div class="container">
						<div class="title-brand">
							<h1 class="presentation-title">Ecommerce Specialist</h1>
						</div>
						<h2 class="presentation-subtitle text-center">Fast, Secure, Scalable ecommerce store by Wordpress and Magento.</h2>
					</div>
				</div>
		        <div class="moving-clouds" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/clouds.png'); ">

		        </div>
			</div>
		</div>

	<div id="content" class="container site-content">
	<div class="row"><!-- content > .row -->
			<div id="primary" class="content-area">
				<main id="main" class="site-main">

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>

					<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->
	</div><!-- content > .row -->
<?php
get_footer();

