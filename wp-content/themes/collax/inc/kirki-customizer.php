<?php
/**
 * collax customizer
 *
 * @package collax
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Added Panels & Sections
 */
function collax_customizer_panels_sections( $wp_customize ) {

    //Add panel
    $wp_customize->add_panel( 'collax_customizer', [
        'priority' => 10,
        'title'    => esc_html__( 'Collax Customizer', 'collax' ),
    ] );

    /**
     * Customizer Section
     */
    $wp_customize->add_section( 'header_top_setting', [
        'title'       => esc_html__( 'Header Info Setting', 'collax' ),
        'description' => '',
        'priority'    => 10,
        'capability'  => 'edit_theme_options',
        'panel'       => 'collax_customizer',
    ] );

    $wp_customize->add_section( 'header_social', [
        'title'       => esc_html__( 'Header Social', 'collax' ),
        'description' => '',
        'priority'    => 11,
        'capability'  => 'edit_theme_options',
        'panel'       => 'collax_customizer',
    ] );

    $wp_customize->add_section( 'section_header_logo', [
        'title'       => esc_html__( 'Header Setting', 'collax' ),
        'description' => '',
        'priority'    => 12,
        'capability'  => 'edit_theme_options',
        'panel'       => 'collax_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'collax' ),
        'description' => '',
        'priority'    => 13,
        'capability'  => 'edit_theme_options',
        'panel'       => 'collax_customizer',
    ] );

    $wp_customize->add_section( 'header_side_setting', [
        'title'       => esc_html__( 'Side Info', 'collax' ),
        'description' => '',
        'priority'    => 14,
        'capability'  => 'edit_theme_options',
        'panel'       => 'collax_customizer',
    ] );

    $wp_customize->add_section( 'breadcrumb_setting', [
        'title'       => esc_html__( 'Breadcrumb Setting', 'collax' ),
        'description' => '',
        'priority'    => 15,
        'capability'  => 'edit_theme_options',
        'panel'       => 'collax_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'collax' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'collax_customizer',
    ] );

    $wp_customize->add_section( 'footer_setting', [
        'title'       => esc_html__( 'Footer Settings', 'collax' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'collax_customizer',
    ] );

    $wp_customize->add_section( 'footer_social', [
    'title'       => esc_html__( 'Footer Social', 'collax' ),
    'description' => '',
    'priority'    => 16,
    'capability'  => 'edit_theme_options',
    'panel'       => 'collax_customizer',
    ] );

    $wp_customize->add_section( 'color_setting', [
        'title'       => esc_html__( 'Color Setting', 'collax' ),
        'description' => '',
        'priority'    => 17,
        'capability'  => 'edit_theme_options',
        'panel'       => 'collax_customizer',
    ] );

    $wp_customize->add_section( '404_page', [
        'title'       => esc_html__( '404 Page', 'collax' ),
        'description' => '',
        'priority'    => 18,
        'capability'  => 'edit_theme_options',
        'panel'       => 'collax_customizer',
    ] );

    $wp_customize->add_section( 'typo_setting', [
        'title'       => esc_html__( 'Typography Setting', 'collax' ),
        'description' => '',
        'priority'    => 21,
        'capability'  => 'edit_theme_options',
        'panel'       => 'collax_customizer',
    ] );

    $wp_customize->add_section( 'slug_setting', [
        'title'       => esc_html__( 'Slug Settings', 'collax' ),
        'description' => '',
        'priority'    => 22,
        'capability'  => 'edit_theme_options',
        'panel'       => 'collax_customizer',
    ] );
}

add_action( 'customize_register', 'collax_customizer_panels_sections' );

function _header_top_fields( $fields ) {


    $fields[] = [
        'type'     => 'switch',
        'settings' => 'collax_preloader',
        'label'    => esc_html__( 'Preloader On/Off', 'collax' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];


    $fields[] = [
        'type'     => 'switch',
        'settings' => 'collax_backtotop',
        'label'    => esc_html__( 'Back To Top On/Off', 'collax' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'collax_header_right',
        'label'    => esc_html__( 'Header Right On/Off', 'collax' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'collax_search',
        'label'    => esc_html__( 'Header Search On/Off', 'collax' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'collax_header_lang',
        'label'    => esc_html__( 'language On/Off', 'collax' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];

    // my account hamburger
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'collax_header_account',
        'label'    => esc_html__( 'My Account On/Off', 'collax' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'description' => esc_html__( 'must install woocommerce before active my-account icon', 'collax' ),
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];

    // cart switch
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'collax_header_cart',
        'label'    => esc_html__( 'Woocommerce Cart On/Off', 'collax' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'description' => esc_html__( 'must install woocommerce before active cart icon', 'collax' ),
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];

    // button
    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_button_text',
        'label'    => esc_html__( 'Button Text', 'collax' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Get A Quote', 'collax' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'collax_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'link',
        'settings' => 'collax_button_link',
        'label'    => esc_html__( 'Button URL', 'collax' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '#', 'collax' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'collax_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];  

    // Login
    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_acc_button_text',
        'label'    => esc_html__( 'Login', 'collax' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Login', 'collax' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'collax_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_acc_button_link',
        'label'    => esc_html__( 'Login URL', 'collax' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '#', 'collax' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'collax_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_header_email',
        'label'    => esc_html__( 'Email Address', 'collax' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'infocollax.com', 'collax' ),
        'priority' => 10,
    ];

    return $fields;

}
add_filter( 'kirki/fields', '_header_top_fields' );

/*
Header Social
 */
function _header_social_fields( $fields ) {
    // header section social
    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_topbar_fb_url',
        'label'    => esc_html__( 'Facebook Url', 'collax' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'collax' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_topbar_twitter_url',
        'label'    => esc_html__( 'Twitter Url', 'collax' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'collax' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_topbar_linkedin_url',
        'label'    => esc_html__( 'Linkedin Url', 'collax' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'collax' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_topbar_instagram_url',
        'label'    => esc_html__( 'Instagram Url', 'collax' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'collax' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_topbar_youtube_url',
        'label'    => esc_html__( 'Youtube Url', 'collax' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'collax' ),
        'priority' => 10,
    ];


    return $fields;
}
add_filter( 'kirki/fields', '_header_social_fields' );

/*
Header Settings
 */
function _header_header_fields( $fields ) {
    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_header',
        'label'       => esc_html__( 'Select Header Style', 'collax' ),
        'section'     => 'section_header_logo',
        'placeholder' => esc_html__( 'Select an option...', 'collax' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'header-style-1'   => get_template_directory_uri() . '/inc/img/header/header-1.png',
            'header-style-2' => get_template_directory_uri() . '/inc/img/header/header-2.png',
            'header-style-3'  => get_template_directory_uri() . '/inc/img/header/header-3.png',
            'header-style-4'  => get_template_directory_uri() . '/inc/img/header/header-4.png',
            'header-style-5'  => get_template_directory_uri() . '/inc/img/header/header-5.png',
            'header-style-6'  => get_template_directory_uri() . '/inc/img/header/header-6.png',
            'header-style-7'  => get_template_directory_uri() . '/inc/img/header/header-7.png',
            'header-style-8'  => get_template_directory_uri() . '/inc/img/header/header-8.png',
        ],
        'default'     => 'header-style-1',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'logo',
        'label'       => esc_html__( 'Header Logo', 'collax' ),
        'description' => esc_html__( 'Upload Your Logo.', 'collax' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo-blue.png',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'seconday_logo',
        'label'       => esc_html__( 'Header Secondary Logo', 'collax' ),
        'description' => esc_html__( 'Header Logo Black', 'collax' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo-white.png',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'mobile_logo',
        'label'       => esc_html__( 'Header Mobile Logo', 'collax' ),
        'description' => esc_html__( 'Header Logo Mobile', 'collax' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'preloader_logo',
        'label'       => esc_html__( 'Preloader Logo', 'collax' ),
        'description' => esc_html__( 'Upload Preloader Logo.', 'collax' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo/favicon.png',
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_header_fields' );

/*
Header Side Info
 */
function _header_side_fields( $fields ) {
    // side info settings
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'collax_side_hide',
        'label'    => esc_html__( 'Side Info On/Off', 'collax' ),
        'section'  => 'header_side_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];  
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'collax_side_logo',
        'label'       => esc_html__( 'Logo Side', 'collax' ),
        'description' => esc_html__( 'Logo Side', 'collax' ),
        'section'     => 'header_side_setting',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'collax_extra_about_text',
        'label'    => esc_html__( 'Side Description Text', 'collax' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'But I must explain to you how all this mistaken idea of denouncing pleasure', 'collax' ),
        'priority' => 10,
    ];

    // contact
    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_contact_title',
        'label'    => esc_html__( 'Contact Title', 'collax' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'Contact Title', 'collax' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_extra_address',
        'label'    => esc_html__( 'Office Address', 'collax' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '12/A, Mirnada City Tower, NYC', 'collax' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_extra_phone',
        'label'    => esc_html__( 'Phone Number', 'collax' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '088889797697', 'collax' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_extra_email',
        'label'    => esc_html__( 'Email ID', 'collax' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'info@themepure.net', 'collax' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_subs_title',
        'label'    => esc_html__( 'Subscribe Title', 'collax' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'Update With Us', 'collax' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'collax_subs_shortcode',
        'label'    => esc_html__( 'Subscribe Shortcode', 'collax' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '[shortcode here]', 'collax' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_insta_title',
        'label'    => esc_html__( 'Instagram Title', 'collax' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'Chcek Instagram Posts', 'collax' ),
        'priority' => 10,
    ];

    // $fields[] = [
    //     'type'     => 'textarea',
    //     'settings' => 'collax_insta_shortcode',
    //     'label'    => esc_html__( 'Instagram Shortcode', 'collax' ),
    //     'section'  => 'header_side_setting',
    //     'default'  => esc_html__( '[instagram shortcode here]', 'collax' ),
    //     'priority' => 10,
    // ];
    
    // repeater start
    $fields[] = [
        'type'     => 'repeater',
        'label'    => esc_html__( 'Gallery Repeater', 'collax' ),
        'section'  => 'header_side_setting',
        'row_label'=> [
        'type'     => 'text',
        'value'    => esc_html__( 'Instagram Image', 'collax' ),
    ],
        
    'button_label' => esc_html__('Add new Gallery Item', 'collax' ),

    'settings'     => 'collax_side_gallery_items',
        'fields' => [
        'collax_g_image' => [
            'type'         => 'image',
            'label'        => esc_html__( 'Gallery Image', 'collax' ),
            'description'  => esc_attr__( 'Upload Gallery Image', 'collax' ),
            ]
        ]
    ];
    // repeater end
    return $fields;
}
add_filter( 'kirki/fields', '_header_side_fields' );

/*
_header_page_title_fields
 */
function _header_page_title_fields( $fields ) {
    // Breadcrumb Setting
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'breadcrumb_bg_img',
        'label'       => esc_html__( 'Breadcrumb Background Image', 'collax' ),
        'description' => esc_html__( 'Breadcrumb Background Image', 'collax' ),
        'section'     => 'breadcrumb_setting',
    ];
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'collax_breadcrumb_bg_color',
        'label'       => __( 'Breadcrumb BG Color', 'collax' ),
        'description' => esc_html__( 'This is a Breadcrumb bg color control.', 'collax' ),
        'section'     => 'breadcrumb_setting',
        'default'     => '#F7F8FD',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'breadcrumb_info_switch',
        'label'    => esc_html__( 'Breadcrumb Info switch', 'collax' ),
        'section'  => 'breadcrumb_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'breadcrumb_shape_switch',
        'label'    => esc_html__( 'Active Breadcrumb Shape', 'collax' ),
        'section'  => 'breadcrumb_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_page_title_fields' );

/*
Header Social
 */
function _header_blog_fields( $fields ) {
// Blog Setting
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'collax_blog_btn_switch',
        'label'    => esc_html__( 'Blog BTN On/Off', 'collax' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'collax_blog_cat',
        'label'    => esc_html__( 'Blog Category Meta On/Off', 'collax' ),
        'section'  => 'blog_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'collax_blog_author',
        'label'    => esc_html__( 'Blog Author Meta On/Off', 'collax' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'collax_blog_date',
        'label'    => esc_html__( 'Blog Date Meta On/Off', 'collax' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'collax_blog_comments',
        'label'    => esc_html__( 'Blog Comments Meta On/Off', 'collax' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'collax_singleblog_social',
        'label'    => esc_html__( 'Single Blog Social On/Off', 'collax' ),
        'section'  => 'blog_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_blog_btn',
        'label'    => esc_html__( 'Blog Button text', 'collax' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Read More', 'collax' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title',
        'label'    => esc_html__( 'Blog Title', 'collax' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog', 'collax' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title_details',
        'label'    => esc_html__( 'Blog Details Title', 'collax' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog Details', 'collax' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_blog_fields' );

/*
Footer
 */
function _header_footer_fields( $fields ) {
    // Footer Setting
    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_footer',
        'label'       => esc_html__( 'Choose Footer Style', 'collax' ),
        'section'     => 'footer_setting',
        'default'     => '5',
        'placeholder' => esc_html__( 'Select an option...', 'collax' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'footer-style-1' => get_template_directory_uri() . '/inc/img/footer/footer-1.png',
            'footer-style-2' => get_template_directory_uri() . '/inc/img/footer/footer-2.png',
            'footer-style-3' => get_template_directory_uri() . '/inc/img/footer/footer-3.png',
            'footer-style-4' => get_template_directory_uri() . '/inc/img/footer/footer-4.png',
            'footer-style-5' => get_template_directory_uri() . '/inc/img/footer/footer-5.png',
            'footer-style-6' => get_template_directory_uri() . '/inc/img/footer/footer-6.png',
            'footer-style-7' => get_template_directory_uri() . '/inc/img/footer/footer-7.png',
        ],
        'default'     => 'footer-style-1',
    ];

    $fields[] = [
        'type'        => 'select',
        'settings'    => 'footer_widget_number',
        'label'       => esc_html__( 'Widget Number', 'collax' ),
        'section'     => 'footer_setting',
        'default'     => '4',
        'placeholder' => esc_html__( 'Select an option...', 'collax' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            '4' => esc_html__( 'Widget Number 4', 'collax' ),
            '3' => esc_html__( 'Widget Number 3', 'collax' ),
            '2' => esc_html__( 'Widget Number 2', 'collax' ),
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'collax_footer_bg',
        'label'       => esc_html__( 'Footer Background Image.', 'collax' ),
        'description' => esc_html__( 'Footer Background Image.', 'collax' ),
        'section'     => 'footer_setting',
    ];

    // footer bg color 1
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'collax_footer_bg_color',
        'label'       => __( 'Footer BG Color', 'collax' ),
        'description' => esc_html__( 'This is a Footer bg color control.', 'collax' ),
        'section'     => 'footer_setting',
        'default'     => '#292930',
        'priority'    => 10,
        'active_callback' => function() {
            $choose_default_footer    = get_theme_mod( 'choose_default_footer', 'footer-style-1' );
        
            if ( 'footer-style-1' === $choose_default_footer || 'footer-style-2' === $choose_default_footer || 'footer-style-5' === $choose_default_footer ) {
                return true;
            }
            return false;
        },
    ];

    // footer bg color 2
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'collax_footer_bg_color2',
        'label'       => __( 'Footer BG Color', 'collax' ),
        'description' => esc_html__( 'This is a Footer bg color control.', 'collax' ),
        'section'     => 'footer_setting',
        'default'     => '#fff',
        'priority'    => 10,
        'active_callback' => function() {
            $choose_default_footer    = get_theme_mod( 'choose_default_footer', 'footer-style-1' );
        
            if ( 'footer-style-3' === $choose_default_footer || 'footer-style-4' === $choose_default_footer ) {
                return true;
            }
            return false;
        },
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_2_switch',
        'label'    => esc_html__( 'Footer Style 2 On/Off', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_3_switch',
        'label'    => esc_html__( 'Footer Style 3 On/Off', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'f3_animation',
        'label'    => esc_html__( 'Active Image Animation', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'footer_style_3_switch',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_4_switch',
        'label'    => esc_html__( 'Footer Style 4 On/Off', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_5_switch',
        'label'    => esc_html__( 'Footer Style 5 On/Off', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_5_switch',
        'label'    => esc_html__( 'Footer Style 5 On/Off', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_6_switch',
        'label'    => esc_html__( 'Footer Style 6 On/Off', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_7_switch',
        'label'    => esc_html__( 'Footer Style 7 On/Off', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'collax' ),
            'off' => esc_html__( 'Disable', 'collax' ),
        ],
    ];

    
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'collax_bottom_link',
        'label'    => esc_html__( 'Footer Bottom Link', 'collax' ),
        'section'  => 'footer_setting',
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-1',
            ],
        ],
    ];


    // footer style 2 start
    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_footer_title',
        'label'    => esc_html__( 'Footer Title', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => __('More than 10 years in the game', 'collax'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-2',
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'collax_footer_des',
        'label'    => esc_html__( 'Footer Description', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => __('At Collax we specialize in designing, building, shipping and scaling beautiful', 'collax'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-2',
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_fbutton_title',
        'label'    => esc_html__( 'Footer Button Title', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => __('Contact Us', 'collax'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-2',
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_fbutton_link',
        'label'    => esc_html__( 'Footer Button Link', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => __('#', 'collax'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-2',
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'image',
        'settings' => 'collax_flogo',
        'label'    => esc_html__( 'Upload Footer Logo', 'collax' ),
        'section'  => 'footer_setting',
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-2',
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'collax_bottom_link2',
        'label'    => esc_html__( 'Footer Bottom Link', 'collax' ),
        'section'  => 'footer_setting',
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-2',
            ],
        ],
    ];
    // footer style 2 end


    
    // footer style 3 start
    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_footer_title3',
        'label'    => esc_html__( 'Footer Title', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => __('More than 10 years in the game', 'collax'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-3',
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'collax_footer_des3',
        'label'    => esc_html__( 'Footer Description', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => __('At Collax we specialize in designing, building, shipping and scaling beautiful', 'collax'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-3',
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_fbutton_title3',
        'label'    => esc_html__( 'Footer Button Title', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => __('Contact Us', 'collax'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-3',
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_fbutton_link3',
        'label'    => esc_html__( 'Footer Button Link', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => __('#', 'collax'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-3',
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'image',
        'settings' => 'collax_flogo3',
        'label'    => esc_html__( 'Upload Footer Logo', 'collax' ),
        'section'  => 'footer_setting',
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-3',
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'collax_bottom_link3',
        'label'    => esc_html__( 'Footer Bottom Link', 'collax' ),
        'section'  => 'footer_setting',
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-3',
            ],
        ],
    ];
    // footer style 3 end

    
    // footer style 4 start

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'collax_bottom_link4',
        'label'    => esc_html__( 'Footer Bottom Link', 'collax' ),
        'section'  => 'footer_setting',
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-4',
            ],
        ],
    ];
    // footer style 4 end

    
    // footer style 5 start
    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_footer_title5',
        'label'    => esc_html__( 'Footer Title', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => __('More than 10 years in the game', 'collax'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-5',
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'collax_footer_des5',
        'label'    => esc_html__( 'Footer Description', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => __('At Collax we specialize in designing, building, shipping and scaling beautiful', 'collax'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-5',
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_fbutton_title5',
        'label'    => esc_html__( 'Footer Button Title', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => __('Contact Us', 'collax'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-5',
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_fbutton_link5',
        'label'    => esc_html__( 'Footer Button Link', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => __('#', 'collax'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-5',
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'image',
        'settings' => 'collax_flogo5',
        'label'    => esc_html__( 'Upload Footer Logo', 'collax' ),
        'section'  => 'footer_setting',
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-5',
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'collax_bottom_link5',
        'label'    => esc_html__( 'Footer Bottom Link', 'collax' ),
        'section'  => 'footer_setting',
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-5',
            ],
        ],
    ];
    // footer style 5 end

    // footer style 6 start
    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_footer_title6',
        'label'    => esc_html__( 'Footer Title', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => __('More than 10 years in the game', 'collax'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-6',
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_fbutton_title6',
        'label'    => esc_html__( 'Footer Button Title', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => __('Contact Us', 'collax'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-6',
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_fbutton_link6',
        'label'    => esc_html__( 'Footer Button Link', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => __('#', 'collax'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-6',
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'collax_bottom_link6',
        'label'    => esc_html__( 'Footer Bottom Link', 'collax' ),
        'section'  => 'footer_setting',
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-6',
            ],
        ],
    ];
    // footer style 6 end

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_copyright',
        'label'    => esc_html__( 'Copy Right', 'collax' ),
        'section'  => 'footer_setting',
        'default'  => esc_html__( 'Copyright &copy; 2023 Theme_Pure. All Rights Reserved', 'collax' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_footer_fields' );

/*
Footer Social
 */
function _footer_social_fields( $fields ) {
    // footer section social

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_footer_fb_url',
        'label'    => esc_html__( 'Facebook Url', 'collax' ),
        'section'  => 'footer_social',
        'default'  => esc_html__( '#', 'collax' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_footer_twitter_url',
        'label'    => esc_html__( 'Twitter Url', 'collax' ),
        'section'  => 'footer_social',
        'default'  => esc_html__( '#', 'collax' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_footer_behance_url',
        'label'    => esc_html__( 'Behance Url', 'collax' ),
        'section'  => 'footer_social',
        'default'  => esc_html__( '#', 'collax' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_footer_instagram_url',
        'label'    => esc_html__( 'Instagram Url', 'collax' ),
        'section'  => 'footer_social',
        'default'  => esc_html__( '#', 'collax' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_footer_youtube_url',
        'label'    => esc_html__( 'Youtube Url', 'collax' ),
        'section'  => 'footer_social',
        'default'  => esc_html__( '#', 'collax' ),
        'priority' => 10,
    ];


    return $fields;
}
add_filter( 'kirki/fields', '_footer_social_fields' );

// color
function collax_color_fields( $fields ) {
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'collax_color_option',
        'label'       => __( 'Theme Color', 'collax' ),
        'description' => esc_html__( 'This is a Primary color control.', 'collax' ),
        'section'     => 'color_setting',
        'default'     => '#5956E9',
        'priority'    => 10,
    ];
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'collax_color_option_secondary',
        'label'       => __( 'Primary Color', 'collax' ),
        'description' => esc_html__( 'This is a Secondary color control.', 'collax' ),
        'section'     => 'color_setting',
        'default'     => '#FFDC60',
        'priority'    => 10,
    ];
     // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'collax_color_option_2',
        'label'       => __( 'Theme Color 2', 'collax' ),
        'description' => esc_html__( 'This is theme color control 2.', 'collax' ),
        'section'     => 'color_setting',
        'default'     => '#82CEFD',
        'priority'    => 10,
    ];
     // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'collax_color_typo',
        'label'       => __( 'Body Color', 'collax' ),
        'description' => esc_html__( 'This is theme body color', 'collax' ),
        'section'     => 'color_setting',
        'default'     => '#8A90A2',
        'priority'    => 10,
    ];
     // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'collax_color_typo_2',
        'label'       => __( 'Black Color', 'collax' ),
        'description' => esc_html__( 'This is theme black color', 'collax' ),
        'section'     => 'color_setting',
        'default'     => '#292930',
        'priority'    => 10,
    ];

    return $fields;
}
add_filter( 'kirki/fields', 'collax_color_fields' );

// 404
function collax_404_fields( $fields ) {
    // 404 settings
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'collax_404_bg',
        'label'       => esc_html__( '404 Image.', 'collax' ),
        'description' => esc_html__( '404 Image.', 'collax' ),
        'section'     => '404_page',
        'default'     => get_template_directory_uri() . '/assets/img/contact/404.png',
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_error_title',
        'label'    => esc_html__( 'Not Found Title', 'collax' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Page not found', 'collax' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'collax_error_desc',
        'label'    => esc_html__( '404 Description Text', 'collax' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Oops! The page you are looking for does not exist. It might have been moved or deleted', 'collax' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_error_link_text',
        'label'    => esc_html__( '404 Link Text', 'collax' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Back To Home', 'collax' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', 'collax_404_fields' );

/**
 * Added Fields
 */
function collax_typo_fields( $fields ) {
    // typography settings
    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_body_setting',
        'label'       => esc_html__( 'Body Font', 'collax' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'body',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h_setting',
        'label'       => esc_html__( 'Heading h1 Fonts', 'collax' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h1',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h2_setting',
        'label'       => esc_html__( 'Heading h2 Fonts', 'collax' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h2',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h3_setting',
        'label'       => esc_html__( 'Heading h3 Fonts', 'collax' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h3',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h4_setting',
        'label'       => esc_html__( 'Heading h4 Fonts', 'collax' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h4',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h5_setting',
        'label'       => esc_html__( 'Heading h5 Fonts', 'collax' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h5',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h6_setting',
        'label'       => esc_html__( 'Heading h6 Fonts', 'collax' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h6',
            ],
        ],
    ];
    return $fields;
}

add_filter( 'kirki/fields', 'collax_typo_fields' );

/**
 * Added Fields
 */
function collax_slug_setting( $fields ) {
    // slug settings
    $fields[] = [
        'type'     => 'text',
        'settings' => 'collax_port_slug',
        'label'    => esc_html__( 'Portfolio Slug', 'collax' ),
        'section'  => 'slug_setting',
        'default'  => esc_html__( 'portfolio', 'collax' ),
        'priority' => 10,
    ];

    return $fields;
}

add_filter( 'kirki/fields', 'collax_slug_setting' );


/**
 * This is a short hand function for getting setting value from customizer
 *
 * @param string $name
 *
 * @return bool|string
 */
function collax_THEME_option( $name ) {
    $value = '';
    if ( class_exists( 'collax' ) ) {
        $value = Kirki::get_option( collax_get_theme(), $name );
    }

    return apply_filters( 'collax_THEME_option', $value, $name );
}

/**
 * Get config ID
 *
 * @return string
 */
function collax_get_theme() {
    return 'collax';
}