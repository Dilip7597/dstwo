<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dsourc
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer footer section-dark">
	
		<div class="container">
			<div class="row">
				<nav class="footer-nav">
					<?php
						/*wp_nav_menu( array(
							'theme_location'  => 'footerbar',
						) );*/
					?>
					<ul>
						<li><a href="https://dsourc.com">Order Now</a></li>
						<li><a href="https://dsourc.com/services">Services</a></li>
						<li><a href="https://dsour.com/contact-us">Contact Us</a></li>
					</ul>
				</nav>
				<div class="credits ml-auto">
					<span class="copyright">
						© <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i>
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( ' by %1$s.', 'dsourc' ), '<a href="http://www.dsourc.com/">Dsourc</a>' );
						?>
					</span>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
