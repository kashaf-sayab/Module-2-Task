<?php

Kirki::add_config( 'my_theme_config', array(
    'capability' => 'edit_theme_options',
    'option_type' => 'theme_mod',
) );


new \Kirki\Panel(
	'adas_portfolio_panel_id',
	[
		'priority'    => 1,
		'title'       => esc_html__( 'Adas: Theme Options', 'adas-portfolio' ),
		'description' => esc_html__( 'Theme Settings.', 'adas-portfolio' ),
	]
);


/* Topbar Settings */
new \Kirki\Section(
	'adas_portfolio_header',
	[
		'title'       => esc_html__( 'Header Settings', 'adas-portfolio' ),
		'description' => esc_html__( 'Customize Header Options.', 'adas-portfolio' ),
		'panel'       => 'adas_portfolio_panel_id',
		'priority'    => 160,
	]
);

/* Header Search Form */
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'enable_preloader',
		'label'       => esc_html__( 'Enable Preloader?', 'adas-portfolio' ),
		'section'     => 'adas_portfolio_header',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'adas-portfolio' ),
			'off' => esc_html__( 'Disable', 'adas-portfolio' ),
		],
		'priority' => 3,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'enable_dark_light_btn',
		'label'       => esc_html__( 'Enable Dark Night Button?', 'adas-portfolio' ),
		'section'     => 'adas_portfolio_header',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'adas-portfolio' ),
			'off' => esc_html__( 'Disable', 'adas-portfolio' ),
		],
		'priority' => 3,
	]
);


/* Profile Card */
new \Kirki\Section(
	'adas_portfolio_profile',
	[
		'title'       => esc_html__( 'Profile Settings', 'adas-portfolio' ),
		'description' => esc_html__( 'Settings for profile.', 'adas-portfolio' ),
		'panel'       => 'adas_portfolio_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'adas_profile_thumbnail',
		'label'       => esc_html__( 'Profile Image', 'adas-portfolio' ),
		'description' => esc_html__( 'Type Thumbnail Image.', 'adas-portfolio' ),
		'section'     => 'adas_portfolio_profile',
		'default'     => '',
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'adas_profile_video_url',
		'label'    => esc_html__( 'Youtube Video Link', 'adas-portfolio' ),
		'description'    => esc_html__( 'Just Type Video ID', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_profile',
		'default'  => 'B-ytMSuwbf8',
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'adas_profile_title',
		'label'    => esc_html__( 'Profile Title', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_profile',
		'default'  => esc_html__( 'Adas Knight', 'adas-portfolio' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'adas_profile_label',
		'label'    => esc_html__( 'Profile Label', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_profile',
		'default'  => esc_html__( 'Full Stack Developer', 'adas-portfolio' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Repeater(
	[
		'settings' => 'adas_social_list',
		'label'    => esc_html__( 'Social List', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_profile',
		'priority' => 10,
		'default'  => [
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
		],
		'fields'   => [
			'social_icon'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Social Icon Class', 'adas-portfolio' ),
				'description' => wp_kses_post( __( 'You can find the icon name from <a href="https://fontawesome.com/icons" target="_blank">Font Awesome</a>', 'adas-portfolio' ) ),
				'default'     => 'fab fa-x-twitter',
			],
			'social_url'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Social Link', 'adas-portfolio' ),
				'description' => esc_html__( 'Type Social Link', 'adas-portfolio' ),
				'default'     => '',
			],
		],
	]
);


new \Kirki\Field\Text(
	[
		'settings' => 'adas_profile_button',
		'label'    => esc_html__( 'Profile Button', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_profile',
		'default'  => esc_html__( 'Download Cv', 'adas-portfolio' ),
		'priority' => 10,
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'adas_profile_button_link',
		'label'    => esc_html__( 'Profile Button Link', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_profile',
		'default'  => esc_html__( '#', 'adas-portfolio' ),
		'priority' => 10,
	]
);




/* Hero Area */
new \Kirki\Section(
	'adas_portfolio_hero',
	[
		'title'       => esc_html__( 'Hero Area Settings', 'adas-portfolio' ),
		'description' => esc_html__( 'Settings for Hero Area.', 'adas-portfolio' ),
		'panel'       => 'adas_portfolio_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'adas_enable_hero',
		'label'       => esc_html__( 'Enable Hero?', 'adas-portfolio' ),
		'section'     => 'adas_portfolio_hero',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'adas-portfolio' ),
			'off' => esc_html__( 'Disable', 'adas-portfolio' ),
		],
		'priority' => 10,
	]
);


new \Kirki\Field\Text(
	[
		'settings' => 'adas_hero_label',
		'label'    => esc_html__( 'Hero Label', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_hero',
		'default'  => esc_html__( 'Available for Freelancing', 'adas-portfolio' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Textarea(
	[
		'settings' => 'adas_hero_title',
		'label'    => esc_html__( 'Hero Title', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_hero',
		'default'  => wp_kses_post( 'I\'m Product <b>Designer</b> & Making Digital Products', 'adas-portfolio' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Textarea(
	[
		'settings' => 'adas_hero_text',
		'label'    => esc_html__( 'Hero Text', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_hero',
		'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Atqui eorum nihil est eius generis, ut sit in fine atque extrerno bonorum.', 'adas-portfolio' ),
		'priority' => 10,
	]
);


new \Kirki\Field\Repeater(
	[
		'settings' => 'adas_funfact_list',
		'label'    => esc_html__( 'Funfact List', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_hero',
		'priority' => 10,
		'default'  => [
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
		],
		'fields'   => [
			'funfact_icon'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Funfact Icon Class', 'adas-portfolio' ),
				'description' => wp_kses_post( __( 'You can find the icon name from <a href="https://fontawesome.com/icons" target="_blank">Font Awesome</a>', 'adas-portfolio' ) ),
				'default'     => 'fa-solid fa-briefcase',
			],
			'funfact_title'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Funfact Title', 'adas-portfolio' ),
				'description' => esc_html__( 'Type funfact title', 'adas-portfolio' ),
				'default'     => '1550 +',
			],
			'funfact_label'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Funfact Label', 'adas-portfolio' ),
				'description' => esc_html__( 'Type funfact Label', 'adas-portfolio' ),
				'default'     => 'Project Complete',
			],
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'adas_hero_section_id',
		'label'    => esc_html__( 'Section ID', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_hero',
		'default'  => esc_html__( 'hero-section', 'adas-portfolio' ),
		'description' => esc_html__( 'Use section IDs to control the navigation menu and link them with your WordPress menu, enabling scrolling menu functionality', 'adas-portfolio' ),
		'priority' => 14,
	]
);


/* Service Area */
new \Kirki\Section(
	'adas_portfolio_service',
	[
		'title'       => esc_html__( 'Service Area Settings', 'adas-portfolio' ),
		'description' => esc_html__( 'Settings for Services.', 'adas-portfolio' ),
		'panel'       => 'adas_portfolio_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'adas_enable_service',
		'label'       => esc_html__( 'Enable Section?', 'adas-portfolio' ),
		'section'     => 'adas_portfolio_service',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'adas-portfolio' ),
			'off' => esc_html__( 'Disable', 'adas-portfolio' ),
		],
		'priority' => 10,
	]
);


new \Kirki\Field\Text(
	[
		'settings' => 'adas_service_section_label',
		'label'    => esc_html__( 'Service Section Label', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_service',
		'default'  => esc_html__( 'What i do', 'adas-portfolio' ),
		'priority' => 10,
	]
);


new \Kirki\Field\Text(
	[
		'settings' => 'adas_service_section_label',
		'label'    => esc_html__( 'Service Section Label', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_service',
		'default'  => esc_html__( 'What i do', 'adas-portfolio' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'adas_service_section_title',
		'label'    => esc_html__( 'Service Section Title', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_service',
		'default'  => esc_html__( 'Creative', 'adas-portfolio' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'adas_service_section_title2',
		'label'    => esc_html__( 'Service Section Title 2', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_service',
		'default'  => esc_html__( 'Services', 'adas-portfolio' ),
		'priority' => 10,
	]
);


new \Kirki\Field\Repeater(
	[
		'settings' => 'adas_portfolio_services',
		'label'    => esc_html__( 'Services List', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_service',
		'priority' => 10,
		'default'  => [
			[
				'service_icon'   => 'fa-solid fa-briefcase ',
				'service_title'   => 'Product Design',
				'service_type'   => 'ad-style-1',
			],
		],
		'fields'   => [
			'service_icon'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Service Icon Class', 'adas-portfolio' ),
				'description' => wp_kses_post( __( 'You can find the icon name from <a href="https://fontawesome.com/icons" target="_blank">Font Awesome</a>', 'adas-portfolio' ) ),
				'default'     => 'fa-solid fa-pen-ni',
			],
			'service_title'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Service Title', 'adas-portfolio' ),
				'description' => esc_html__( 'Type Service title', 'adas-portfolio' ),
				'default'     => 'Product Design',
			],
			'service_type'    => [
				'type'        => 'select',
				'label'       => esc_html__( 'Card Style', 'adas-portfolio' ),
				'description' => esc_html__( 'Type Service title', 'adas-portfolio' ),
				'default'     => 'ad-style-1',
				'choices'     => [
					'ad-style-1' => esc_html__( 'Service Default', 'adas-portfolio' ),
					'ad-style-2' => esc_html__( 'Service Primary', 'adas-portfolio' ),
					'ad-style-3' => esc_html__( 'Service Secondary', 'adas-portfolio' ),
				],
			],
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'adas_service_section_id',
		'label'    => esc_html__( 'Section ID', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_service',
		'default'  => esc_html__( 'service-section', 'adas-portfolio' ),
		'description' => esc_html__( 'Use section IDs to control the navigation menu and link them with your WordPress menu, enabling scrolling menu functionality', 'adas-portfolio' ),
		'priority' => 14,
	]
);



/* Portfolio Area */
new \Kirki\Section(
	'adas_portfolio_works',
	[
		'title'       => esc_html__( 'Portfolio Area Settings', 'adas-portfolio' ),
		'description' => esc_html__( 'Settings for Portfolio.', 'adas-portfolio' ),
		'panel'       => 'adas_portfolio_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'adas_enable_portfolio',
		'label'       => esc_html__( 'Enable Portfolio?', 'adas-portfolio' ),
		'section'     => 'adas_portfolio_works',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'adas-portfolio' ),
			'off' => esc_html__( 'Disable', 'adas-portfolio' ),
		],
		'priority' => 10,
	]
);


new \Kirki\Field\Text(
	[
		'settings' => 'adas_portfolio_section_label',
		'label'    => esc_html__( 'Section Label', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_works',
		'default'  => esc_html__( 'What i do', 'adas-portfolio' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'adas_portfolio_section_title',
		'label'    => esc_html__( 'Section Title', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_works',
		'default'  => esc_html__( 'Creative', 'adas-portfolio' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'adas_portfolio_section_title2',
		'label'    => esc_html__( 'Service Section Title 2', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_works',
		'default'  => esc_html__( 'Portfolio', 'adas-portfolio' ),
		'priority' => 10,
	]
);


new \Kirki\Field\Repeater(
	[
		'settings' => 'adas_portfolio_wlist',
		'label'    => esc_html__( 'Portfolio List', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_works',
		'priority' => 10,
		'default'  => [
			[
				'portfolio_thumbnail'   => '',
				'portfolio_title'   => 'Blue Pineapple',
				'portfolio_category'   => 'UI Design',
				'portfolio_url'   => '#',
			],
		],
		'fields'   => [
			'portfolio_thumbnail'    => [
				'type'        => 'image',
				'label'       => esc_html__( 'Thumnail Image', 'adas-portfolio' ),
				'description' => esc_html__( 'Type title here', 'adas-portfolio' ),
				'default'     => 'Product Design',
			],

			'portfolio_title'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Portfolio Title', 'adas-portfolio' ),
				'description' => esc_html__( 'Type title here', 'adas-portfolio' ),
				'default'     => 'Product Design',
			],
			'portfolio_category'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Portfolio Category', 'adas-portfolio' ),
				'description' => esc_html__( 'Type portfolio Category', 'adas-portfolio' ),
				'default'     => 'Development',
			],
			'portfolio_url'    => [
				'type'        => 'url',
				'label'       => esc_html__( 'Portfolio URL', 'adas-portfolio' ),
				'description' => esc_html__( 'Type URL here', 'adas-portfolio' ),
				'default'     => '#',
			],
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'adas_portfolio_section_id',
		'label'    => esc_html__( 'Section ID', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_works',
		'default'  => esc_html__( 'portfolio-section', 'adas-portfolio' ),
		'description' => esc_html__( 'Use section IDs to control the navigation menu and link them with your WordPress menu, enabling scrolling menu functionality', 'adas-portfolio' ),
		'priority' => 14,
	]
);



/* BreadCrumb */
new \Kirki\Section(
	'adas_portfolio_page_breadcrumb',
	[
		'title'       => esc_html__( 'Breadcrumbs', 'adas-portfolio' ),
		'description' => esc_html__( 'Breadcrumbs Settings.', 'adas-portfolio' ),
		'panel'       => 'adas_portfolio_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Checkbox(
	[
		'settings'    => 'adas_portfolio_page_bc',
		'label'       => esc_html__( 'Show page breadcrumb', 'adas-portfolio' ),
		'section'     => 'adas_portfolio_page_breadcrumb',
		'default'     => true,
	]
);

new \Kirki\Field\Checkbox(
	[
		'settings'    => 'adas_portfolio_archive_bc',
		'label'       => esc_html__( 'Show Archive breadcrumb', 'adas-portfolio' ),
		'section'     => 'adas_portfolio_page_breadcrumb',
		'default'     => true,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'adas_portfolio_bc_archive_title',
		'label'    => esc_html__( 'Archive Breadcrumb Title', 'adas-portfolio' ),
		'section'  => 'adas_portfolio_page_breadcrumb',
		'default'  => esc_html__( 'All Blogs', 'adas-portfolio' ),
		'priority' => 10,
	]
);


new \Kirki\Field\Checkbox(
	[
		'settings'    => 'adas_portfolio_search_bc',
		'label'       => esc_html__( 'Show Search breadcrumb', 'adas-portfolio' ),
		'section'     => 'adas_portfolio_page_breadcrumb',
		'default'     => true,
	]
);