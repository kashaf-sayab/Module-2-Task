<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Adas Portfolio
 */
	$idd = get_the_ID();

?>
<div class="col-lg-4 col-md-6 adas-portfolio-masonry-item">
	<article id="post-<?php echo $idd;?>" <?php post_class(); ?>>
		<div class="adas-portfolio-single-post">
			<?php if(has_post_thumbnail()) : ?>	
			<div class="adas-portfolio-single-post__head">
				<div class="adas-portfolio-single-post__comments"><i class="fa fa-comments"></i><?php echo esc_html(get_comments_number());?></div>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('adas-portfolio-blog-thumb'); ?></a>
				<?php if (!empty($adas_portfolio_categories)) :?>
				<div class="adas-portfolio-single-post__cat">
					<?php foreach ($adas_portfolio_categories as $adas_portfolio_category) :?>
						<a href="<?php echo esc_url(get_category_link($adas_portfolio_category->term_id));?>"><?php echo esc_html($adas_portfolio_category->name); ?></a>
					<?php endforeach;?>	
				</div>
				<?php endif;?>
			</div>
			<?php endif; ?>
			<div class="adas-portfolio-single-post__body">
				<h2 class="adas-portfolio-single-post__title">
				<?php if( is_sticky()) :?><span class="adas-portfolio-sticky"><i class="fa-regular fa-note-sticky"></i></span><?php endif;?>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<!-- Post Meta -->
				<ul class="adas-portfolio-post-meta">					
					<li><i class="fa fa-user"></i><a class="adas-portfolio-post-meta__author" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php 
					adas_portfolio_posted_by(); ?></a></li>
					<li><i class="fa fa-pencil"></i><?php adas_portfolio_posted_on(); ?></li>
				</ul>
				<div class="adas-portfolio-single-post__content"><?php the_excerpt();?></div>
				<div class="adas-portfolio-single-post__button">
					<a href="<?php the_permalink(); ?>" class="adas-portfolio-btn adas-portfolio-btn__secondary"><?php esc_html_e('View Article','adas-portfolio');?></a>
				</div>
			</div>
		</div>
	</article> <!-- #post-<?php the_ID(); ?> -->
</div>
