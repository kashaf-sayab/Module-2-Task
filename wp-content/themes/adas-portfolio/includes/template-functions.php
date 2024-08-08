<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Adas Portfolio
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function adas_portfolio_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) && ! is_active_sidebar( 'sidebar-2' )  ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'adas_portfolio_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function adas_portfolio_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'adas_portfolio_pingback_header' );


// Define the function to check Elementor activation and usage
function adas_portfolio_active() {
    // Check if Elementor is active
    if (defined('ELEMENTOR_PATH')) {
        // Check if the current page is built with Elementor
        $post_id = get_queried_object_id();
        if (\Elementor\Plugin::$instance->db->is_built_with_elementor($post_id)) {
            return 'container-elementor';
        }
    }
}
// Hook the function to an appropriate action (e.g., init)
add_action('init', 'adas_portfolio_active');

// Post Excerpt Limit
function adas_portfolio_wpdocs_custom_excerpt_length( $length ) {
    $excerptlength = absint(get_theme_mod('adas_portfolio_post_excerpt',22));
    return $excerptlength;
}
add_filter( 'excerpt_length', 'adas_portfolio_wpdocs_custom_excerpt_length', 999 );


// Dashboard Notice
function adas_portfolio_display_dashboard_notice() {
    ?>
    <div class="notice notice-info is-dismissible" style="font-size:16px; padding:25px">
        <b>
            <?php 
            printf( esc_html__( 'Hello, %s 👋🏻 You are using the free version of Adas Portfolio.', 'adas-portfolio' ), esc_html( get_bloginfo( 'name' ) ) ); 
            ?>
        </b>
        <h3 style="margin:0; margin-top:15px;">
            <?php esc_html_e( 'Upgrade to the Pro Version 🚨 and unlock all Pro features with Elementor', 'adas-portfolio' ); ?>
        </h3>
        <p style="font-size:16px;">
            <?php esc_html_e( 'With our Pro version, you will get unlimited premium features, allowing you to build your portfolio or resume website in just 10 minutes! Enjoy custom Elementor widgets, 1-click website installation, premade demos, SEO optimization, and awesome theme options. Take your portfolio or resume website to the next level!', 'adas-portfolio' ); ?>
        </p>
        <p style="font-size:16px; color: #ef644c; font-weight: bold;">
            <?php esc_html_e( ' Don\'t miss out on these incredible features - upgrade to Pro now! ', 'adas-portfolio' ); ?>
        </p>
        <p style="margin:0;">
            <a href="<?php echo esc_url( 'https://pencilwp.com/product/adas-pro/' ); ?>" class="button button-primary" style="padding:5px 25px; font-size:16px;" target="_blank">
                <?php esc_html_e( 'Upgrade to Pro', 'adas-portfolio' ); ?>
            </a>
            <a href="<?php echo esc_url( 'https://demo.pencilwp.com/preview/adas-wp' ); ?>" class="button button-secondary" style="padding:5px 25px; font-size:16px;" target="_blank">
                <?php esc_html_e( 'View Pro Demo', 'adas-portfolio' ); ?>
            </a>
            <a href="<?php echo esc_url( 'https://pencilwp.com/docs/adas-free/' ); ?>" class="button button-secondary" style="padding:5px 25px; font-size:16px;" target="_blank">
                <?php esc_html_e( 'Free Version Docs', 'adas-portfolio' ); ?>
            </a>
        </p>
    </div>
    <?php
}
add_action( 'admin_notices', 'adas_portfolio_display_dashboard_notice' );




