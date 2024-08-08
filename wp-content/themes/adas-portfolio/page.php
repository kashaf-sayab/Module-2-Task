<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Adas Portfolio
 */

if (get_post_meta($post->ID, 'adas_portfolio_breadcrumb_options', true)) {
	$page_meta = get_post_meta($post->ID, 'adas_portfolio_breadcrumb_options', true);
} else {
	$page_meta = array();
}

if(array_key_exists('enable_breadcrumb', $page_meta)){
	$enable_breadcrumb = $page_meta['enable_breadcrumb'];
} else {
	$enable_breadcrumb = false;
}

if(array_key_exists('bc_custom_title', $page_meta)){
	$bc_custom_title = $page_meta['bc_custom_title'];
} else {
	$bc_custom_title = '';
}


get_header();
?>

	<?php if(get_theme_mod('adas_portfolio_page_bc', true) && !(is_front_page()) ) : ?>
	<div class="adas-portfolio-bc">
		<div class="container">
			<div class="row">
				<div class="col-12">
				<h2 class="bc-title"><?php the_title() ?></h2>
					<div class="bc-list">
						<?php if (function_exists('bcn_display')) bcn_display(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif;?>
	
	
	<section class="adas-portfolio-page site-page <?php echo adas_portfolio_active(); ?>">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="adas-portfolio-page__inners  mt-0">
						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();
