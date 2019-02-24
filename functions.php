<?php
function spokanedsa_enqueue_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'spokanedsa_enqueue_style' );

function spokanedsa_setup() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'spokanedsa_setup' );

function spokanedsa_customize_register( $wp_customize ) {
	$wp_customize->add_panel( 'social', array(
		'title'       => __( 'Social', 'spokanedsa' ),
		'description' => __( '', 'spokanedsa' ),
		'capability'  => 'edit_theme_options',
		'priority'    => 160,
	) );

	// TODO(dsiddy): Create a single setting and an associated custom control (<https://developer.wordpress.org/themes/customize-api/customizer-objects/#core-custom-controls>) that allows me to store an arbitrary number of links, customize their display order, et c.
	// $wp_customize->add_setting( 'social', array(
	// 	'type'              => 'theme_mod',
	// 	'capability'        => 'edit_theme_options',
	// 	'default'           => '',
	// 	'transport'         => 'refresh',
	// 	// TODO(dsiddy): Prevent injections and ensure that we have proper URLs.
	// 	// 'sanitize_callback' => '',
	// ) );

	foreach ( array(
		'twitter'       => array(
			'name' => 'Twitter',
		),
		'facebook'      => array(
			'name' => 'Facebook',
		),
		'google_groups' => array(
			'name' => 'Google Groups',
		),
		'hypothesis'    => array(
			'name' => 'Hypothesis',
		),
		'github'        => array(
			'name' => 'GitHub',
		),
	) as $social => $options ) {
		$wp_customize->add_section( 'social_' . $social, array(
			// TODO(dsiddy): I'm not supposed to pass variables for translation.
			'title'       => $options['name'],
			'description' => __( '', 'spokanedsa' ),
			'capability'  => 'edit_theme_options',
			'panel'       => 'social',
		) );

		$wp_customize->add_setting( 'social_' . $social . '_title', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'default'           => $options['name'],
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		$wp_customize->add_control( 'social_' . $social . '_title', array(
			'type'            => 'text',
			'section'         => 'social_' . $social,
			'label'           => __( 'Title', 'spokanedsa' ),
			'description'     => __( '', 'spokanedsa' ),
			'input_attrs'     => array(
				'placeholder' => __( 'Spokane DSA', 'spokanedsa' ),
			),
			// 'active_callback' => '',
		) );

		$wp_customize->add_setting( 'social_' . $social . '_link', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'esc_url_raw',
		) );

		$wp_customize->add_control( 'social_' . $social . '_link', array(
			'type'            => 'url',
			'section'         => 'social_' . $social,
			'label'           => __( 'Link', 'spokanedsa' ),
			'description'     => __( '', 'spokanedsa' ),
			'input_attrs'     => array(
				'placeholder' => 'https://www.dsaspokane.org',
			),
			// 'active_callback' => '',
		) );

		$wp_customize->add_setting( 'social_' . $social . '_icon', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'default'           => '',
			'transport'         => 'refresh',
			// TODO(dsiddy): Prevent injections and ensure that we have proper URLs.
			// 'sanitize_callback' => 'sanitize_mime_type',
		) );

		$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'social_' . $social . '_icon', array(
			'label'     => __( 'Icon', 'spokanedsa' ),
			'section'   => 'social_' . $social,
			'mime_type' => 'image',
		) ) );
	}

	$wp_customize->add_section( 'copyright', array(
		'title'       => __( 'Copyright', 'spokanedsa' ),
		'description' => __( '', 'spokanedsa' ),
		'capability'  => 'edit_theme_options',
	) );

	$wp_customize->add_setting( 'copyright', array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'default'           => sprintf( __( 'Copyright &copy; 2018%s %s &bull; All rights reserved.', 'spokanedsa' ), date('Y') === '2018' ? '' : ' &ndash; ' . date('Y'), get_bloginfo('name') ),
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );

	$wp_customize->add_control( 'copyright', array(
		'type'            => 'textarea',
		'section'         => 'copyright',
		'label'           => __( 'Copyright', 'spokanedsa' ),
		'description'     => __( '', 'spokanedsa' ),
		'input_attrs'     => array(
			'placeholder' => __( 'Copyright &copy; 2018 Spokane DSA. All rights reserved.', 'spokanedsa' ),
		),
		// 'active_callback' => '',
	) );
}
add_action( 'customize_register', 'spokanedsa_customize_register' );

function spokanedsa_register_menus() {
	register_nav_menus( array(
		'header_menu' => __( 'Header Menu', 'spokanedsa' ),
	) );
}
add_action( 'init', 'spokanedsa_register_menus' );
