<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dawn
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="footer-menu">
				<?php wp_nav_menu( array( 'primary-menu' => 'main-menu' ) ); ?>
			</div>
			<div class="footer-info">
				<p>
					&copy; <?php echo date("Y") ?> All Rights Reserved.
				</p>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
