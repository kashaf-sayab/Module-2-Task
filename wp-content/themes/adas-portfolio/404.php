<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Adas Portfolio
 */

get_header();
?>

	<!-- Error 404 -->
	<section class="adas-portfolio-404 not-found">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
					<div class="adas-portfolio-404__content">
						<h1 class="adas-portfolio-404__title">
							<span class="adas-portfolio-404__label">
								<span><i class="fa-regular fa-face-sad-tear"></i> <?php esc_html_e( '404', 'adas-portfolio' ); ?></span>
							</span>
						</h1>
						<div class="adas-portfolio-404__inner">
							<h4 class="adas-portfolio-404__inside"><?php esc_html_e( 'Page Not Found.', 'adas-portfolio' ); ?></h4>
							<p class="adas-portfolio-404__text"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'adas-portfolio' ); ?></p>
							<div class="adas-portfolio-404__button">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="adas-portfolio-btn adas-portfolio-btn__secondary"><i class="fas fa-home"></i> <?php esc_html_e( 'Go Home', 'adas-portfolio' ); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Error 404 -->

<?php
get_footer();