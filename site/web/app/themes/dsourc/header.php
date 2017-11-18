<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dsourc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="container-fluid site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dsourc' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container"><!-- header .container -->
			<div class="row fixed-top align-items-center"><!-- header .row -->
				<div class="col-md-3"> <!-- logo (site branding) .col-md-3 -->
					<div class="site-branding">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
						endif;

						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php
						endif; ?>
					</div><!-- .site-branding -->
				</div><!-- logo (site branding) .col-md-3 -->
				<div class="col-md-9"><!-- menu .col-md-9 -->
					<nav id="site-navigation" class="main-navigation navbar navbar-expand-md navbar-transparent ml-auto">
						<!-- <button class="menu-toggle" aria-controls="primary" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'dsourc' ); ?></button> -->

						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<?php
							wp_nav_menu( array(
								'theme_location'  => 'primary',
								'container_class' => 'collapse navbar-collapse',
								'container_id'    => 'navbarNavDropdown',
								'menu_class'      => 'navbar-nav ml-auto',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu',
								'walker'          => new WP_Bootstrap_Navwalker(),
							) );
						?>
					</nav><!-- #site-navigation -->
				</div><!-- menu .col-md-9 -->
			</div><!-- header .row -->
		</div><!-- header .container -->
	</header><!-- #masthead -->

	<!-- front-page landing full vh -->
	<?php if ( is_front_page() ) : ?>
		<div class="row">
			<div class="page-header section-dark" style="background-image: url('assets/img/antoine-barres.jpg')">
		        <div class="filter"></div>
				<div class="content-center">
					<div class="container">
						<div class="title-brand">
							<h1 class="presentation-title">Paper Kit 2</h1>
							<div class="fog-low">
								<img src="assets/img/fog-low.png" alt="">
							</div>
							<div class="fog-low right">
								<img src="assets/img/fog-low.png" alt="">
							</div>
						</div>

						<h2 class="presentation-subtitle text-center">Make your mark with a Free Bootstrap 4 UI Kit! </h2>
					</div>
				</div>
		        <div class="moving-clouds" style="background-image: url('assets/img/clouds.png'); ">

		        </div>
				<h6 class="category category-absolute">Designed and coded by
					<a href="https://www.creative-tim.com" target="_blank">
						<img src="assets/img/creative-tim-white-slim2.png" class="creative-tim-logo">
					</a>
				</h6>
			</div>
		</div>
	<?php endif; ?>
	<!-- front-page landing full vh -->

	<div id="content" class="container site-content">
