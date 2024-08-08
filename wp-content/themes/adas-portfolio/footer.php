<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Adas Portfolio
 */

?>
</div>

	<footer id="colophon" class="adas-portfolio-footer">
		<div class="adas-portfolio-footer__bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="adas-portfolio-footer__branding text-center">
							<p><?php esc_html_e('© All Rights Reserved', 'adas-portfolio'); ?> Theme By <a href="<?php echo esc_url('https://pencilwp.com/product/adas-pro'); ?>"><?php esc_html_e('PencilWp', 'adas-portfolio'); ?></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
</div><!-- End Page -->


<?php wp_footer(); ?>

</body>
</html>
