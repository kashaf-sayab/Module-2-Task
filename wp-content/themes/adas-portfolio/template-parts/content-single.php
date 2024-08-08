<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Adas Portfolio
 */
 
 if(get_post_meta($post->ID, 'adas_portfolio_blog_options', true)){
	$single_blog_meta = get_post_meta($post->ID, 'adas_portfolio_blog_options', true);
}else{
	$single_blog_meta = array();
}

if(array_key_exists('enable_featured_image', $single_blog_meta)){
	$enable_featured_image = $single_blog_meta['enable_featured_image'];
} else {
	$enable_featured_image = true;
}

if(array_key_exists('featured_image_upload', $single_blog_meta)){
	$featured_image_upload = $single_blog_meta['featured_image_upload'];
} else {
	$featured_image_upload = '';
}
if($featured_image_upload){
	$image_logo_src = wp_get_attachment_image_src($featured_image_upload['id'], 'full', false);
}


?>
	<div class="blog-content-main">
		<div class="blog-content-header">
			<h1 class="blog-heading"><?php the_title(); ?></h1>
			<div class="blog-meta">
				<ul class="list">
					<li><i class="fa fa-user"></i><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php 
					adas_portfolio_posted_by(); ?></a></li>
					<li><i class="fas fa-calendar"></i><?php echo esc_html(get_the_date());?> </li>
					<li><i class="fa fa-comments"></i><?php echo esc_html(get_comments_number());?> <?php esc_html_e('comments', 'adas-portfolio'); ?></li>
				</ul>
			</div>

		</div>
		<div class="blog-head">
			<?php if($enable_featured_image == true && empty($image_logo_src)) : ?>
				<div class="featured-img mb-30"><?php the_post_thumbnail('adas-portfolio-blog-single-thumb'); ?></div>
			<?php elseif( $enable_featured_image == true && !empty ($image_logo_src)) :?>
				<div class="featured-img mb-30"><img src="<?php echo esc_url($image_logo_src[0]); ?>" alt="<?php esc_attr_e('Featured Image','adas-portfolio');?>"></div>
			<?php endif;?>
			
		</div>
		<div class="blog-body">
			<?php the_content(); ?>
		</div>
	</div>