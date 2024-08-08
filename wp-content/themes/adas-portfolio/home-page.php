<?php
/**
 * Template Name: Adas HomePage
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
get_header();
?>

    <section class="adas-portfolio-main mg-top-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12 mg-top-30">
                    <?php
                        $adas_profile_thumbnail = get_theme_mod( 'adas_profile_thumbnail','' );
                        $adas_profile_video_url = get_theme_mod( 'adas_profile_video_url','B-ytMSuwbf8' );
                        $adas_profile_title = get_theme_mod( 'adas_profile_title','Adas Knight' );
                        $adas_profile_label = get_theme_mod( 'adas_profile_label','Full Stack Developer' );
                        $adas_profile_button = get_theme_mod( 'adas_profile_button','Download Cv' );
                        $adas_profile_button_link = get_theme_mod( 'adas_profile_button_link','#' );
                    ?>
                    <div class="adas-portfolio-hero-profiles">
                        <div class="about-img">
                        <img src="<?php echo esc_url( $adas_profile_thumbnail ); ?>" alt="<?php echo esc_html($adas_profile_title);?>">
                            <div class="about-img__pop"><a href="#" class="adas-portfolio-video-btn" data-video-id="<?php echo esc_attr($adas_profile_video_url);?>"><i class="fas fa-play"></i></a></div>
                        </div>
                        <div class="adas-portfolio-hero-contact">
                            <h3 class="adas-portfolio-hero-contact__title"><?php echo esc_html($adas_profile_title);?></h3>
                            <span class="adas-portfolio-hero-contact__label"><?php echo esc_html($adas_profile_label);?></span>
                        </div>
                        <div class="adas-portfolio-hero-social">
                            <ul>
                                <?php
                                 $defaults = [
                                    [
                                        'social_icon'   => 'fab fa-twitter',
                                        'social_url'    => '#',
                                    ],
                                    [
                                        'social_icon'   => 'fab fa-linkedin',
                                        'social_url'    => '#',
                                    ],
                                    [
                                        'social_icon'   => 'fab fa-github',
                                        'social_url'    => '#',
                                    ],
                                    [
                                        'social_icon'   => 'fab fa-dribbble',
                                        'social_url'    => '#',
                                    ],
                                ];
                                // Retrieve the repeater field settings
                                $adas_social_list = get_theme_mod( 'adas_social_list', $defaults ); 
                                 foreach ( $adas_social_list as $s_list ) : ?>
                                  <li><a href="<?php echo esc_url( $s_list['social_url'] ); ?>"><i class="<?php echo esc_attr( $s_list['social_icon'] ); ?>"></i></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="adas-portfolio-hero-buttons">
                            <a class="adas-portfolio-btn adas-portfolio-btn__secondary" href="<?php esc_url($adas_profile_button_link);?>">
                                <span class="button-text"><?php echo $adas_profile_button;?></span>
                                <span class="button-icon fas fa-download"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12  mg-top-30">
                    <?php if(get_theme_mod( 'adas_enable_hero','on' )) :  ?> 
                    <?php
                        $adas_hero_section_id = get_theme_mod( 'adas_hero_section_id','hero-section' ); 
                        $adas_hero_label = get_theme_mod( 'adas_hero_label','Available for Freelancing' );
                        $adas_hero_title = get_theme_mod( 'adas_hero_title','I\'m Product <b>Designer</b> & Making Digital Products' );
                        $adas_hero_text =  get_theme_mod( 'adas_hero_text','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Atqui eorum nihil est eius generis, ut sit in fine atque extrerno bonorum.' );              
                    ?>
                    <section class="adas-portfolio-hero-main" id="<?php echo esc_attr($adas_hero_section_id);?>">
                        <div class="creative-content">
                            <div class="creative-content__inner">
                                <div class="adas-portfolio-hero-label"><?php echo esc_html($adas_hero_label);?></div>
                                <h1><?php echo wp_kses_post($adas_hero_title);?></h1>
                                <p><?php echo esc_html($adas_hero_text);?></p>
                            </div>
                        </div>
                        <div class="adas-portfolio-hfunfact">
                            <?php
                                $defaults = [
                                [
                                    'funfact_icon'   => 'fa-solid fa-briefcase ',
                                    'funfact_title'   => '1550 +',
                                    'funfact_label'   => 'Project Complete',
                                ],
                                [
                                    'funfact_icon'   => 'fa-solid fa-briefcase ',
                                    'funfact_title'   => '19 +',
                                    'funfact_label'   => 'Ongoing Projects',
                                ],
                            ];
                            // Retrieve the repeater field settings
                            $adas_funfact_list = get_theme_mod( 'adas_funfact_list', $defaults ); 
                            foreach ( $adas_funfact_list as $s_list ) : ?>
                             <div class="adas-portfolio-hfunfact__single">
                                <div class="adas-portfolio-hfunfact__icon">
                                    <i class="<?php echo esc_attr( $s_list['funfact_icon'] ); ?>"></i>
                                </div>
                                <div class="adas-portfolio-hfunfact__content">
                                    <h4 class="adas-portfolio-hfunfact__number"><?php echo esc_html( $s_list['funfact_title'] ); ?></h4>
                                    <p class="adas-portfolio-hfunfact__text"><?php echo esc_html( $s_list['funfact_label'] ); ?></p>
                                </div>
                            </div>                           
                            <?php endforeach; ?>
                        </div>
                        
                        
                    </section>
                    <?php endif;?>

                    <?php if(get_theme_mod( 'adas_enable_service','on' )) :  ?>
                    <?php
                        $adas_service_section_id = get_theme_mod( 'adas_service_section_id','service-section' ); 
                        $adas_service_section_label = get_theme_mod( 'adas_service_section_label','What i do' );
                        $adas_service_section_title = get_theme_mod( 'adas_service_section_title','Creative' );
                        $adas_service_section_title2 = get_theme_mod( 'adas_service_section_title2','Services' );
                    ?>
                    <section class="adas-portfolio-hero-main adas-inner-section mg-top-30" id="<?php echo esc_attr($adas_service_section_id);?>">
                            
                        <div class="services-section">
                            <div class="title-section text-center  mg-btm-30">
                                <h1><span><?php echo esc_html($adas_service_section_title);?> </span><?php echo esc_html($adas_service_section_title2);?></h1>
                                <span class="title-bg"><?php echo esc_html($adas_service_section_label);?> </span>
                            </div>

                            <div class="row">
                                <?php
                                    $defaults = [
                                    [
                                        'service_icon'   => 'fa-solid fa-pen-ni ',
                                        'service_title'   => 'Product Design',
                                        'service_type'   => 'ad-style-1',
                                    ],
                                ];
                                $adas_portfolio_services = get_theme_mod( 'adas_portfolio_services', $defaults ); 
                                foreach ( $adas_portfolio_services as $adas_ps ) : ?>
                                    <div class="col-lg-4 col-md-6 col-12 mg-top-30  ">
                                        <div class="creative-services__single <?php echo esc_attr($adas_ps['service_type']);?>">
                                            <div class="creative-services__icon">
                                                <i class="<?php echo esc_attr($adas_ps['service_icon']);?>"></i>
                                            </div>
                                            <div class="creative-services__content">
                                                <h3 class="creative-services__title"><?php echo esc_html($adas_ps['service_title']);?></h3>
                                            </div>
                                        </div>
                                    </div>                 
                                <?php endforeach; ?>
                               
                            </div>
                        </div>

                    </section>
                    <?php endif?>

                    <?php if(get_theme_mod( 'adas_enable_portfolio','on' )) :  ?>
                    <?php
                        $adas_portfolio_section_id = get_theme_mod( 'adas_portfolio_section_id','portfolio-section' );
                        $adas_portfolio_section_label = get_theme_mod( 'adas_portfolio_section_label','Taks' );
                        $adas_portfolio_section_title = get_theme_mod( 'adas_portfolio_section_title','My' );
                        $adas_portfolio_section_title2 = get_theme_mod( 'adas_portfolio_section_title2','Portfolio' );
                    ?>
                    <section class="adas-portfolio-hero-main adas-inner-section mg-top-30" id="<?php echo esc_attr($adas_portfolio_section_id);?>">

                        <div class="portfolio-section">
                           
                            <div class="title-section text-center  mg-btm-30">
                                <h1><span><?php echo esc_html($adas_portfolio_section_title);?> </span><?php echo esc_html($adas_portfolio_section_title2);?></h1>
                                <span class="title-bg"><?php echo esc_html($adas_portfolio_section_label);?> </span>
                            </div>
                            <div class="row">

                                <?php
                                    $defaults = [
                                    [
                                        'portfolio_thumbnail'   => '',
                                        'portfolio_title'   => 'Blue Pineapple',
                                        'portfolio_category'   => 'UI Design',
                                        'portfolio_url'   => '#',
                                    ],
                                ];
                                $adas_portfolio_wlist = get_theme_mod( 'adas_portfolio_wlist', $defaults ); 
                                foreach ( $adas_portfolio_wlist as $adas_ps ) :
                                
                                 // Get the URL of the slider image
                                $adas_portfolio_image_url = isset( $adas_ps['portfolio_thumbnail'] ) ? esc_url( $adas_ps['portfolio_thumbnail'] ) : '';
                                
                                ?>
                                    <div class="col-lg-4 col-md-6 col-12 mg-top-30">
                                        <a class="adas-portfolio-single__img">
                                            <img decoding="async" src="<?php echo $adas_portfolio_image_url; ?>" alt="<?php echo esc_attr($adas_ps['portfolio_title']);?>">
                                            <div class="adas-portfolio-single__button"><i class="fas fa-arrow-right"></i></div>
                                        </a>
                                        <div class="adas-portfolio-project-single__content">
                                            <h3 class="adas-portfolio-project-single__title">
                                                <a href="<?php echo esc_url($adas_ps['portfolio_url']);?>"><?php echo esc_html($adas_ps['portfolio_title']);?></a>
                                            </h3>
                                            <span class="adas-portfolio-project-single__clabel"><?php echo esc_html($adas_ps['portfolio_category']);?></span>
                                        </div>
                                    </div>            
                                <?php endforeach; ?>
                                
                            </div>
                        </div>

                    </section>
                    <?php endif;?>

                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
