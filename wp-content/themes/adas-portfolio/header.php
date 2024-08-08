<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Adas Portfolio
 */
$enable_preloader = get_theme_mod( 'enable_preloader','on' );
$enable_dark_light_btn = get_theme_mod( 'enable_dark_light_btn','on' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>


<?php wp_body_open(); ?>


<!-- Start Page -->
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'adas-portfolio' ); ?></a>


	<?php if ($enable_preloader == true):?>
		<div class="adas-preloader">
		<svg class="adas-preloader__ip" viewBox="0 0 256 128" width="256px" height="128px" xmlns="http://www.w3.org/2000/svg">
			<defs>
				<linearGradient id="grad1" x1="0" y1="0" x2="1" y2="0">
					<stop class="color1" offset="0%"  />
					<stop class="color2" offset="33%" />
					<stop class="color3" offset="67%" />
					<stop class="color4" offset="100%" />
				</linearGradient>
				<linearGradient id="grad2" x1="1" y1="0" x2="0" y2="0">
					<stop class="color4"  offset="0%"  />
					<stop class="color1" offset="33%"  />
					<stop class="color2" offset="67%" />
					<stop class="color1" offset="100%"  />
				</linearGradient>
			</defs>
			<g fill="none" stroke-linecap="round" stroke-width="16">
				<g class="adas-preloader__track" stroke="#ddd">
					<path d="M8,64s0-56,60-56,60,112,120,112,60-56,60-56"/>
					<path d="M248,64s0-56-60-56-60,112-120,112S8,64,8,64"/>
				</g>
				<g stroke-dasharray="180 656">
					<path class="adas-preloader__worm1" stroke="url(#grad1)" stroke-dashoffset="0" d="M8,64s0-56,60-56,60,112,120,112,60-56,60-56"/>
					<path class="adas-preloader__worm2" stroke="url(#grad2)" stroke-dashoffset="358" d="M248,64s0-56-60-56-60,112-120,112S8,64,8,64"/>
				</g>
			</g>
		</svg>
	</div>
	<?php endif;?>

		<!-- Header -->
		<header id="masthead" class="adas-portfolio-header adas-portfolio-header site-header">

			<div class="adas-portfolio-header__inside">
				<?php if ( get_header_image() ) : ?>
				<div class="header-image">
					<img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">
				</div>
				<?php endif; ?>
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="adas-portfolio-header__middle">
								<div class="adas-portfolio-logo">
									<?php if( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
										the_custom_logo();
									}else { ?>
										<div class="text-logo">
											<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html(get_bloginfo('name'));?></a>
											<?php $adas_portfolio_title_description = get_bloginfo( 'description', 'display' ); ?>
											<p class="site-description"><?php echo esc_html($adas_portfolio_title_description); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
										</div>
									<?php } ?>
								</div>
								<div class="adas-portfolio-header__menu">
									<!-- Main Nav -->
									<nav id="site-navigation" class="adas-portfolio-header__nav navbar navbar-expand-lg" >
										<div class="navbar-collapse">
											<?php
											wp_nav_menu( array(
												'theme_location' => 'adas-primary',
												'menu_id'        => 'primary-menu',
												'menu_class'        => 'nav adas-portfolio-menu navbar-nav',
											) );
											?>
										</div>
									</nav>
									<!--/ End Main Nav -->
									<?php if ($enable_dark_light_btn == true):?>
									<div class="adas-portfolio-header__right">
										<div class="adas-portfolio-header__button pw-light-dark-mode pw-light-dark-mode-toggle">
											<a  class="adas-portfolio-header__button--icon" href="#"><i class="fas fa-light fa-moon"></i></a>
										</div>
									</div>
									<?php endif;?>
								</div>	

							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header -->

		<!-- Small Header -->
		<div class="adas-small-header">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- Logo -->
						<div class="adas-small-header__inner">
							<div class="adas-small-header__logo">
								<?php if( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
									the_custom_logo();
								}else { ?>
									<div class="text-logo">
										<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html(get_bloginfo('name'));?></a>
										<?php $adas_portfolio_title_description = get_bloginfo( 'description', 'display' ); ?>
										<p class="site-description"><?php echo esc_html($adas_portfolio_title_description); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
									</div>
								<?php } ?>
							</div>
							<div class="adas-portfolio-header__right">
								<?php if ($enable_dark_light_btn == true):?>
								<div class="adas-portfolio-header__button pw-light-dark-mode pw-light-dark-mode-toggle">
									<a href="#" class="adas-portfolio-header__button--icon"><i class="fas fa-light fa-sun"></i></a>
								</div>
								<?php endif;?>
								<div class="adas-portfolio-header__button adas-portfolio-header__menu">
									<a href="#" class="adas-portfolio-header__button--icon"  data-bs-toggle="modal" data-bs-target="#offcanvas-modal"><i class="fa fa-bars"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>						
			</div>
							
		</div>
		<!-- End Small Header -->

		<!-- Mobile Menu Modal -->
		<div class="modal offcanvas-modal fade adas-small-header__mobile" id="offcanvas-modal">
			<div class="modal-dialog offcanvas-dialog">
				<div class="modal-content">
					<div class="modal-header offcanvas-header">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="fas fa-remove"></i>
						</button>
					</div>
					<?php if(!empty($mobile_header_logo_src) ) :?>
					<div class="offcanvas-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo esc_url($mobile_header_logo_src[0]); ?>">
						</a>
					</div>
					<?php endif;?>
					<nav id="offcanvas-menu" class="offcanvas-menu">
						<!-- Main Nav -->
						<div class="navbar-collapse">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'adas-mobile',
								'menu_id'        => 'primary-menu',
								'menu_class'        => 'nav-menu menu navigation list-none',
							) );
							?>
						</div>
						<!--/ End Main Nav -->
					</nav>
				</div>
			</div>
		</div>
		<!-- End Mobile Menu Modal -->



		
		
	<div id="primary" class="adas-portfolio-section-main">