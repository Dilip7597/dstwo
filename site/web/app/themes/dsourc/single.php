<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Dsourc
 */

get_header(); ?>

<div class="row">
	<div class="page-header page-header-xs section-dark" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/antoine-barres.jpg')">
        <div class="filter"></div>
		<div class="content-center">
			<div class="container">
				<div class="title-brand">
					<?php the_title( '<h1 class="entry-title presentation-title">', '</h1>' ); ?>
					<div class="fog-low">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fog-low.png" alt="">
					</div>
					<div class="fog-low right">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fog-low.png" alt="">
					</div>
				</div>
			</div>
		</div>
        <div class="moving-clouds" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/clouds.png'); ">

        </div>
	</div>
</div>

<div id="content" class="container site-content">
	
	<div class="row">
		<div class="col-md-9">

			<div id="primary" class="content-area">
				<main id="main" class="site-main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php
get_footer();
