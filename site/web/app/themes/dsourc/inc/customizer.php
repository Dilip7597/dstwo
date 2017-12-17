<?php
/**
 * Dsourc Theme Customizer
 *
 * @package Dsourc
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function dsourc_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'dsourc_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'dsourc_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'dsourc_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function dsourc_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function dsourc_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function dsourc_customize_preview_js() {
	wp_enqueue_script( 'dsourc-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'dsourc_customize_preview_js' );

Kirki::add_config( 'dsourc_new', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

Kirki::add_panel( 'panel_id', array(
    'priority'    => 10,
    'title'       => esc_attr__( 'My Panel', 'dsourc' ),
    'description' => esc_attr__( 'My panel description', 'dsourc' ),
) );

Kirki::add_section( 'section_id', array(
    'title'          => esc_attr__( 'My Section', 'dsourc' ),
    'description'    => esc_attr__( 'My section description.', 'dsourc' ),
    'panel'          => 'panel_id',
    'priority'       => 160,
) );

Kirki::add_field( 'dsourc_new', array(
	'type'     => 'text',
	'settings' => 'my_setting',
	'label'    => __( 'Text Control', 'dsourc' ),
	'section'  => 'section_id',
	'default'  => esc_attr__( 'This is a defualt value', 'dsourc' ),
	'priority' => 10,
) );

Kirki::add_field( 'dsourc_new', array(
	'type'        => 'image',
	'settings'    => 'image_setting_url',
	'label'       => esc_attr__( 'Image Control (URL)', 'dsourc' ),
	'description' => esc_attr__( 'Description Here.', 'dsourc' ),
	'section'     => 'section_id',
	'default'     => '',
) );

