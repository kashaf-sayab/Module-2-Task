<?php 
/**
 * Template part for displaying Featured Slider Section
 *
 *@package Dreamy Portfolio
 */
    $sr_content_type   = dreamy_portfolio_get_option( 'sr_content_type' );
    $number_of_sr_items = dreamy_portfolio_get_option( 'number_of_sr_items' );
    $slider_layout = dreamy_portfolio_get_option( 'slider_layout_option' );
    $slider_column = dreamy_portfolio_get_option( 'number_of_sr_column' );
    $slider_category = dreamy_portfolio_get_option( 'slider_category' );
    $enable_content     = dreamy_portfolio_get_option( 'slider_content_enable' );
    $enable_title     = dreamy_portfolio_get_option( 'slider_title_enable' );
    $enable_category     = dreamy_portfolio_get_option( 'slider_category_enable' );
    $enable_posted_on     = dreamy_portfolio_get_option( 'slider_posted_on_enable' );
    $slider_speed   = dreamy_portfolio_get_option( 'slider_speed' );
    $slider_dot   = dreamy_portfolio_get_option( 'slider_dot' );
    $slider_arrow   = dreamy_portfolio_get_option( 'slider_arrow_enable' );
    $slider_autoplay  = dreamy_portfolio_get_option( 'slider_autoplay_enable' );
    $slider_infinite  = dreamy_portfolio_get_option( 'slider_infinite_enable' );
    $slider_fade  = dreamy_portfolio_get_option( 'slider_fade_enable' );
    $image_overlay   = dreamy_portfolio_get_option( 'disable_white_overlay' );
    $header_font_size = dreamy_portfolio_get_option( 'slider_font_size');
    $slider_background_color = dreamy_portfolio_get_option( 'slider_background_color');
    $slider_content_position = dreamy_portfolio_get_option( 'slider_content_position_option');
    $slider_social_text = dreamy_portfolio_get_option( 'slider_social_title_text');
    $slider_alt_btn_text = dreamy_portfolio_get_option( 'slider_alt_custom_btn_text');
    $slider_alt_btn_url = dreamy_portfolio_get_option( 'slider_alt_custom_btn_url');
    $slider_social_link  = dreamy_portfolio_get_option( 'slider_social_link' );
    $class ='';
    if (true == $slider_dot) {
       $class = 'true';
    } else{
        $class = 'false';
    }
    for( $j=1; $j<=3; $j++ ) :
        $featured_slider_page_posts[] = dreamy_portfolio_get_option( 'slider_page_'.$j );
        $slider_social_link   = dreamy_portfolio_get_option( 'slider_social_link' . $j );
    endfor;
    ?>
    <style>
        <?php if ($header_font_size != 0): ?>
            #features .entry-title{
                font-size:<?php echo esc_attr($header_font_size); ?>px;
            }
        <?php endif ?>
    </style>
<div class="featured-slider-wrapper <?php echo esc_attr($slider_content_position); ?>" 
    data-slick='{"slidesToShow": <?php echo esc_attr( $slider_column) ?>,
     "slidesToScroll": 1, 
     "infinite": <?php if( true== $slider_infinite ){ echo 'true'; } else{ echo 'false'; } ?>, 
     "speed": <?php echo esc_attr( $slider_speed) ?>, 
     "dots": <?php echo esc_html($class) ?>, 
     "arrows":<?php if( true== $slider_arrow ){ echo 'true'; } else{ echo 'false'; } ?>, 
     "autoplay": <?php if( true== $slider_autoplay ){ echo 'true'; } else{ echo 'false'; } ?>, 
     "fade": <?php if( true== $slider_fade && $slider_column==1){ echo 'true'; } else{ echo 'false'; } ?> }'>
        <?php 
            $args = array (

            'post_type'     => 'page',
            'post_per_page' => 3,
            'post__in'      => $featured_slider_page_posts,
            'orderby'       =>'post__in',
        ); 
        $loop = new WP_Query($args);                        
        if ( $loop->have_posts() ) :
        $j=0;  
            while ($loop->have_posts()) : $loop->the_post(); $j++;?>

                <article class="slick-item" <?php if ('half-image-slider' != $slider_layout){ ?> style="background-image: url('<?php the_post_thumbnail_url( 'full');?>');" <?php } ?> >
                    <?php 
                        $class='';
                        if ('half-image-slider' != $slider_layout) { 
                            if (false == $image_overlay) { 
                                $class='image-overlay';
                            } else{-
                                $class='content-overlay';
                            }
                        } else{
                            $class='half-image-slider';
                        }
                    if (false == $image_overlay && 'half-image-slider' != $slider_layout)  {?>
                        <div class="overlay"></div>
                    <?php } ?>
                    <div class="wrapper slider-content">
                        <div class="<?php echo esc_attr($class); ?> featured-content-wrapper">
                            <header class="entry-header">
                                <?php if ($enable_title==true):
                                    $featured_slider_before_title = dreamy_portfolio_get_option( 'slider_title_meta_'.$j );
                                    $featured_slider_after_title = dreamy_portfolio_get_option( 'slider_after_title_'.$j );
                                 ?>
                                    <a href="<?php the_permalink();?>" >
                                        <h2 class="entry-title">
                                            <?php if (!empty($featured_slider_before_title)): ?>  
                                                <span><?php echo esc_html($featured_slider_before_title); ?></span>
                                            <?php endif ?>
                                            <?php the_title();?>
                                        </h2>
                                    </a>
                                    <?php if (!empty($featured_slider_after_title)): ?>
                                        <span class="slider-position"><?php echo esc_html($featured_slider_after_title) ?></span>
                                    <?php endif; ?>
                                <?php endif ?>
                            </header>
                            <?php if ( ($enable_content==true)): ?>
                                <div class="entry-content">
                                    <?php
                                        $excerpt = dreamy_portfolio_the_excerpt( 30 );
                                        echo wp_kses_post( wpautop( $excerpt ) );
                                    ?>
                                </div><!-- .entry-content -->
                            <?php endif; ?>
                            
                            <?php if ( ($enable_posted_on==true)) { ?>
                                <div class="entry-meta">                 
                                    <?php dreamy_portfolio_posted_on(); ?>
                                </div><!-- .entry-meta -->
                            <?php } ?>
                            <?php
                            $readmore_text   = dreamy_portfolio_get_option( 'slider_custom_btn_text_' . $j ); 
                            if ( ! empty( $readmore_text )|| ! empty( $slider_alt_btn_text ) ) { ?>
                                <div class="read-more">
                                    <?php if ( ! empty( $readmore_text ) ) : ?>
                                        <a href="<?php the_permalink();?>" class="btn btn-primary"><?php echo esc_html($readmore_text);?></a>
                                    <?php endif; ?>
                                    <?php if ( ! empty( $slider_alt_btn_text ) && ! empty( $slider_alt_btn_url ) ) : ?>
                                        <a href="<?php echo esc_url( $slider_alt_btn_url ); ?>" class=" btn-transparent"><?php echo esc_html( $slider_alt_btn_text); ?></a>
                                    <?php endif; ?>
                                </div><!-- .read-more -->
                            <?php } ?>
                            <?php if (!empty($slider_social_link)) { ?>
                                <div class="slider-soical">
                                   <ul class="social-icons">
                                        <?php if ( !empty($slider_social_text) ): ?>
                                            <li class="slider-social-text"><span><?php echo esc_html($slider_social_text); ?></span></li>
                                        <?php endif ?>
                                        <?php 
                                    for ($i=0; $i <=3 ; $i++) { 
                                      $show_social   = dreamy_portfolio_get_option( 'slider_social_link' . $i );
                                        if ( isset( $show_social ) ) { 
                                        ?>
                                            <li><a href=" <?php echo esc_url($show_social); ?>" target="_blank"></a></li>
                                        <?php }  }?> 
                                    </ul> 
                                </div>
                            <?php } ?>
                        </div><!-- .featured-content-wrapper -->
                        <?php if ('half-image-slider' == $slider_layout){ ?>
                            <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full');?>');">
                                <a href="<?php the_permalink();?>" class="post-thumbnail-link">
                                <div class="slider-box slider-lefttop-box"></div>
                                <div class="slider-box slider-righttop-box"></div>
                                <div class="slider-box slider-leftbottom-box"></div>
                                <div class="slider-box slider-rightbottom-box"></div>
                            </a>    
                            </div><!-- .featured-image -->
                        <?php } ?>
                    </div><!-- .wrapper -->
                </article><!-- .slick-item -->
            <?php endwhile;?>
        <?php endif; ?>
    <?php wp_reset_postdata();?>

</div><!-- .featured-slider-wrapper -->