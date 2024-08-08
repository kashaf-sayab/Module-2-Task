<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Adas Portfolio
 */
	
	
	if(have_posts()){
		$blog_row_resize = 'grid';
	} else {
		$blog_row_resize = 'no-grid';
	}
	
	
get_header();
?>

	<?php if(get_theme_mod('adas_portfolio_archive_bc', true)) : ?>
		<div class="adas-portfolio-bc">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<?php $adas_portfolio_bc_archive_title = get_theme_mod('adas_portfolio_bc_archive_title'); ?>
						<?php if(!empty ($adas_portfolio_bc_archive_title)) :?>
						<h2 class="bc-title"><?php echo esc_html($adas_portfolio_bc_archive_title)?></h2>
						<?php else :?>
						<h2 class="bc-title"><?php esc_html_e('Blog Archive','adas-portfolio')?></h2>
						<?php endif ;?>
						<div class="bc-list">
							<?php if (function_exists('bcn_display')) bcn_display(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	
	<section class="adas-portfolio-blog-section site-archive">
		<div class="container">
			<div class="row">
				<div class="<?php if(is_active_sidebar('sidebar')): ?> col-lg-9 adas-portfolio-main-area__with-side <?php else :?> col-12 <?php endif; ?>">
					<div class="row adas-portfolio-masonry mg-top-20">
						<?php if ( have_posts() ) : ?>
							<?php
								/* Start the Loop */
								while ( have_posts() ) :
								the_post();

								/*
								 * Include the Post-Type-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'archive' );

							endwhile;

							else :
							get_template_part( 'template-parts/content', 'none' );

							endif;
						?>
					</div>
					<div class="row">
						<div class="col-12">
							<!-- Start Pagination -->
							<div class="pagination-main">
								<?php if (function_exists("adas_portfolio_pagination"))
									{
										adas_portfolio_pagination();
									}  
								?>
							</div>
							<!-- End Pagination -->
						</div>
					</div>	
				</div>
				<?php if(is_active_sidebar('sidebar')): ?>
				<div class="col-lg-3 col-12 adas-portfolio-main-area__sidebar">
					<div class="adas-portfolio-sidebar__right">
						<?php get_sidebar(); ?>
					</div>
				</div>
				<?php endif;?>
			</div>
		</div>
	</section>

<?php
get_footer();
