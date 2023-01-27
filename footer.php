<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
$admin_email = get_option( 'admin_email' );
?>
	
	</section>
	
	<footer class="footer">
		<div class="footer-columns">
			<div class="footer-logo">
				<img src="<?php bloginfo( 'template_url' ) ?>/img/logo-white.svg" class="logo-footer" />
			</div>
			<div class="footer-content">
				<?php 
				
				// the footer content
				the_field( 'footer_content', 'option' ); 

				?>
				<p class="copyright quiet no-mobile"><?php the_field( 'copyright', 'option' ); ?></p>
			</div>
			<div class="footer-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'nav-menu' ) ); ?>
			</div>
		</div>
		<?php
		// check if the nested repeater field has rows of data
		if ( have_rows( 'footer_social', 'option' ) ):
			
			print '<div class="social-icons">';

			// loop through the rows of data
			while ( have_rows( 'footer_social', 'option' ) ) : the_row();

				$name = get_sub_field('name');
				$network = get_sub_field('network');
				$link = get_sub_field('link');
				echo '<a href="' . $link . '" target="_blank"><img src="' . get_bloginfo( 'template_url' ) . '/img/social/' . $network . '.svg" class="social-icon" /></a>';

			endwhile;

			print '</div>';

		endif;
		?>
		<p class="copyright quiet mobile-only"><?php the_field( 'copyright', 'option' ); ?></p>
	</footer>

</div><!-- #container -->

<?php wp_footer(); ?>
</body>
</html>