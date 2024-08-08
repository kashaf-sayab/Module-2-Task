<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( ! function_exists( 'dreamy_portfolio_lite_enqueue_styles' ) ) :
    /**
     * Load assets.
     *
     * @since 1.0.0
     */
    function dreamy_portfolio_lite_enqueue_styles() {
        wp_enqueue_style( 'dreamy-portfolio-style-parent', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'dreamy-portfolio-lite-style', get_stylesheet_directory_uri() . '/style.css', array( 'dreamy-portfolio-style-parent' ), '1.0.0' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'dreamy_portfolio_lite_enqueue_styles', 99 );

// END ENQUEUE PARENT ACTION
if ( ! function_exists( 'dreamy_portfolio_lite_fonts_url' ) ) :

    function dreamy_portfolio_lite_fonts_url() {
    $fonts_url = '';
    $fonts     = array();
    $subsets   = 'latin,latin-ext';

    /* translators: If there are characters in your language that are not supported by Kaushan Script, translate this to 'off'. Do not translate into your own language. */
    if ( 'off' !== _x( 'on', 'Kaushan Script font: on or off', 'dreamy-portfolio-lite' ) ) {
        $fonts[] = 'Kaushan Script:300,400,500,600,700';
    }

    /* translators: If there are characters in your language that are not supported by Redressed, translate this to 'off'. Do not translate into your own language. */
    if ( 'off' !== _x( 'on', 'Redressed: on or off', 'dreamy-portfolio-lite' ) ) {
        $fonts[] = 'Redressed';
    }

    if ( $fonts ) {
        $fonts_url = add_query_arg( array(
            'family' => urlencode( implode( '|', $fonts ) ),
            'subset' => urlencode( $subsets ),
        ), 'https://fonts.googleapis.com/css' );
    }

    return esc_url_raw( $fonts_url );
}
endif;

if ( ! function_exists( 'dreamy_portfolio_lite_get_default_theme_options' ) ) :

    /**
     * Get default theme options.
     *
     * @since 1.0.0
     *
     * @return array Default theme options.
     */
function dreamy_portfolio_lite_get_default_theme_options() {

    $theme_data = wp_get_theme();
    $defaults = array();


    $defaults['show_header_contact_info']   = true;
    $defaults['disable_homepage_content_section']           = true;
    $defaults['header_email']               = __( 'info@sensationaltheme.com','dreamy-portfolio-lite' );
    $defaults['header_phone' ]              = __( '+1-541-754-3010','dreamy-portfolio-lite' );
    $defaults['header_location' ]           = __( 'London, UK','dreamy-portfolio-lite' );
    $defaults['show_header_social_links']   = true;
    $defaults['header_social_links']        = array();
    $defaults['disable_header_background_section'] = false;
    $defaults['show_header_search']     = true;


    $defaults['header_text_transform_options']  = 'none';
    $defaults['header_text_decoration_options']     = 'none';
    $defaults['header_font_style_options']  = 'none';
    $defaults['header_text_design']     = false;

    // Featured Slider Section
    $defaults['disable_featured-slider_section']    = false;
    $defaults['number_of_sr_items']         = 4;
    $defaults['number_of_sr_column']        = 1;
    $defaults['slider_layout_option']           = 'fullwidth-slider';
    $defaults['slider_content_position_option']         = 'left-position';
    $defaults['sr_content_type']            = 'sr_page';
    $defaults['slider_speed']               = 800;
    $defaults['disable_white_overlay']      = false;
    $defaults['slider_arrow_enable']        = true;
    $defaults['slider_fade_enable']         = true;
    $defaults['slider_autoplay_enable']     = true;
    $defaults['slider_infinite_enable']     = true;
    $defaults['slider_title_enable']        = true;
    $defaults['slider_category_enable']     = true;
    $defaults['slider_content_enable']      = true;
    $defaults['slider_posted_on_enable']        = false;
    $defaults['disable_blog_banner_section']        = false;
    $defaults['slider_social_title_text']           = esc_html__( 'Follow Me:', 'dreamy-portfolio-lite' );

    
    //Details Section   
    $defaults['disable_details_section']        = false;
    $defaults['background_details_section']     = get_template_directory_uri() .'/assets/images/default-header.jpg';
    $defaults['details_custom_title']           = esc_html__( 'I never dreamed about success, I worked for it.', 'dreamy-portfolio-lite' );
    $defaults['details_subtitle']               = esc_html__( 'About', 'dreamy-portfolio-lite' );
    $defaults['details_custom_description']     = esc_html__( 'Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.Business consulting excepteur sint occaecat cupidatat consulting', 'dreamy-portfolio-lite' );
    $defaults['details_button_label']           = esc_html__( 'Know More', 'dreamy-portfolio-lite' );
    $defaults['details_button_url']             = '#';
    $defaults['details_content_type']           = 'details_post';
    $defaults['details_content_enable']         = true;
    $defaults['about_details_content_enable']   = true;
    $defaults['details_excerpt_enable']         = false;
    $defaults['number_of_about_items']          = 4;
    $defaults['number_of_about_category_items'] = 4;

    // Our Service Section
    $defaults['disable_services_section']   = false;
    $defaults['services_title']             = esc_html__( 'Reasons to Choose My Services', 'dreamy-portfolio-lite' );
    $defaults['services_subtitle']          = esc_html__( 'Services', 'dreamy-portfolio-lite' );
    $defaults['number_of_services_column']  = 2;
    $defaults['number_of_services_items']   = 4;
    $defaults['services_content_type']      = 'services_page';
    $defaults['services_content_enable']    = true;
    $defaults['disable_services_icon']      = true;
    $defaults['disable_services_background']        = false;

    // Project Section
    $defaults['disable_project_section']    = false;
    $defaults['number_of_project_items']            = 5;
    $defaults['project_layout_option']          = 'default-project';
    $defaults['project_content_type']           = 'project_post';
    $defaults['project_title']              = esc_html__( 'Experience my effective portfolios', 'dreamy-portfolio-lite' );
    $defaults['project_viewall_text']               = esc_html__( 'View All Projects', 'dreamy-portfolio-lite' );
    $defaults['project_subtitle']           = esc_html__( 'Portfolio', 'dreamy-portfolio-lite' );
    $defaults['project_category_enable']        = true;
    $defaults['project_posted_on_enable']       = true;
    $defaults['project_arrow_enable']       = true;
    $defaults['project_dots_enable']        = true;
    $defaults['project_content_enable']     = true;


    // Testimonial Section
    $defaults['disable_testimonial_section']    = false;
    $defaults['number_of_testimonial_items']            = 5;
    $defaults['testimonial_layout_option']          = 'default-testimonial';
    $defaults['testimonial_content_type']           = 'testimonial_post';
    $defaults['testimonial_title']              = esc_html__( 'Our clients reviews.', 'dreamy-portfolio-lite' );
    $defaults['testimonial_viewall_text']               = esc_html__( 'View All Projects', 'dreamy-portfolio-lite' );
    $defaults['testimonial_subtitle']           = esc_html__( 'Testimonials', 'dreamy-portfolio-lite'  );
    $defaults['testimonial_category_enable']        = true;
    $defaults['testimonial_posted_on_enable']       = true;
    $defaults['testimonial_arrow_enable']       = true;
    $defaults['testimonial_dots_enable']        = true;
    $defaults['testimonial_content_enable']     = true;

    //Cta Section   
    $defaults['disable_cta_section']        = false;
    $defaults['background_cta_section']     = get_template_directory_uri() .'/assets/images/default-header.jpg';
    $defaults['cta_small_description']      = esc_html__( 'Need More Help?', 'dreamy-portfolio-lite' );
    $defaults['cta_description']            = esc_html__( 'A better way to hire our best help', 'dreamy-portfolio-lite' );
    $defaults['cta_button_label']           = esc_html__( 'Purchase Now', 'dreamy-portfolio-lite' );
    $defaults['cta_button_url']             = '#';
    $defaults['cta_alt_button_label']       = esc_html__( 'Contact Us', 'dreamy-portfolio-lite' );
    $defaults['cta_alt_button_url']         = '#';
    $defaults['cta_content_type']           = 'cta_post';
    $defaults['cta_content_enable']         = true;
    $defaults['cta_excerpt_enable']         = true;

    // Blog Section
    $defaults['disable_blog_section']       = false;
    $defaults['blog_title']                 = esc_html__( 'Latest Post', 'dreamy-portfolio-lite' ); 
    $defaults['blog_subtitle']          = esc_html__( 'Blog', 'dreamy-portfolio-lite'  );
    $defaults['blog_number']                = 3;
    $defaults['number_of_blog_column']      = 3;
    $defaults['blog_content_type']          = 'blog_category';
    $defaults['image_buttom']               = false;
    $defaults['blog_content_enable']                = true;
    $defaults['blog_category_enable']               = true;


    // Latest Posts Section
    $defaults['latest_posts_title']         = esc_html__( 'My Latest Blogs', 'dreamy-portfolio-lite' );
    $defaults['latest_section_posts_title']         = esc_html__( 'I love natural beauty, and I think it’s your best look, but I think makeup as an artist is so transformative.', 'dreamy-portfolio-lite' );
    $defaults['number_of_latest_posts_column']  = 2;
    $defaults['pagination_type']        = 'default';
    $defaults['latest_category_enable']     = true;
    $defaults['latest_author_enable']       = true;
    $defaults['latest_comment_enable']      = true;
    $defaults['latest_read_more_text_enable']       = true;
    $defaults['latest_posted_on_enable']        = true;
    $defaults['latest_video_enable']        = true;
    $defaults['blog_layout_content_type']       = 'blog-one';
    $defaults['archive_post_header_title_enable']       = true;
    $defaults['blog_post_header_title_enable']      = true;

    // Single Post Option
    $defaults['single_post_category_enable']        = true;
    $defaults['single_post_posted_on_enable']       = true;
    $defaults['single_post_video_enable']       = true;
    $defaults['single_post_comment_enable']     = true;
    $defaults['single_post_author_enable']      = true;
    $defaults['single_post_pagination_enable']      = true;
    $defaults['single_post_image_enable']       = true;
    $defaults['single_post_header_image_enable']        = true;
    $defaults['single_post_header_title_enable']        = true;
    $defaults['single_post_header_image_as_header_image_enable']        = true;

    // Single Post Option
    $defaults['single_page_video_enable']       = true;
    $defaults['single_page_image_enable']       = true;
    $defaults['single_page_header_image_enable']        = true;
    $defaults['single_page_header_title_enable']        = true;
    $defaults['single_page_header_image_as_header_image_enable']        = true;
    
    $defaults['theme_typography']           =  'default';
    $defaults['body_theme_typography']      =  'default';

    //General Section
    $defaults['latest_readmore_text']               = esc_html__('Read More','dreamy-portfolio-lite');
    $defaults['excerpt_length']             = 50;
    $defaults['layout_options_blog']            = 'right-sidebar';
    $defaults['layout_options_archive']         = 'right-sidebar';
    $defaults['layout_options_page']            = 'right-sidebar';  
    $defaults['layout_options_single']          = 'right-sidebar';  

    //Footer section 
    $defaults['scroll_top_visible']     = true;     
    $defaults['copyright_text']             = esc_html__( 'Copyright &copy; All rights reserved.', 'dreamy-portfolio-lite' );
    $defaults['powered_by_text']            = esc_html__( 'Dreamy Portfolio by Sensational Theme', 'dreamy-portfolio-lite' );


    return $defaults;
}
endif;
add_filter( 'dreamy_portfolio_filter_default_theme_options', 'dreamy_portfolio_lite_get_default_theme_options', 99 );


if ( ! function_exists( 'dreamy_portfolio_lite_customize_backend_styles' ) ) :
    /**
     * Load assets.
     *
     * @since 1.0.0
     */
    function dreamy_portfolio_lite_customize_backend_styles() {
        wp_enqueue_style( 'dreamy-portfolio-lite-style', get_stylesheet_directory_uri() . '/customizer-style.css' );
    }
endif;
add_action( 'customize_controls_enqueue_scripts', 'dreamy_portfolio_lite_customize_backend_styles', 99 );
