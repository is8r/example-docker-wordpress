<?php

//theme custamizer
function theme_customize_register($wp_customize) {
  $wp_customize->remove_section('static_front_page');

  //website sections

  $wp_customize->get_section('title_tagline')->title = __( 'Website settings' );
  theme_custamize_add_control('Keywords', 'keywords', 'title_tagline', 'Wordpress, Theme, Tulpe, Landing page', $wp_customize);
  theme_custamize_add_control('Copyright', 'copyright', 'title_tagline', '© Tulpe 2014, All rights reserved.', $wp_customize);
  theme_custamize_add_control('Google Anlytics ID', 'google_anlytics', 'title_tagline', '', $wp_customize);

  //download sections

  //$wp_customize->add_section( 'download_area', array(
  //  'title' => 'Download button settings',
  //  'priority' => 29,
  //) );
  theme_custamize_add_control('iTunes Download Link URL', 'download_apple', 'title_tagline', '', $wp_customize);
  theme_custamize_add_control('Google Play Download Link URL', 'download_android', 'title_tagline', '', $wp_customize);
  theme_custamize_add_control('Download Data Link URL', 'download_data', 'title_tagline', '', $wp_customize);

  //social account sections

  $wp_customize->add_section( 'social_acoounts', array(
    'title' => 'Social acoount settings',
    'priority' => 30,
  ) );
  theme_custamize_add_control('Twitter ID', 'twitter_id', 'social_acoounts', '', $wp_customize);
  theme_custamize_add_control('Facebook ID', 'facebook_id', 'social_acoounts', '', $wp_customize);
  theme_custamize_add_control('GitHub ID', 'github_id', 'social_acoounts', '', $wp_customize);
  theme_custamize_add_image_control('Facebook OGP Image', 'facebook_ogp', 'social_acoounts', '', $wp_customize);

  //colors setting
  $wp_customize->get_section('colors')->title = __( 'Colors settings' );
  $wp_customize->get_section('header_image')->title = __( 'Hero area image' );


}
add_action('customize_register', 'theme_customize_register');

//----------------------------------------------------------------------
// util

// Example:
// theme_custamize_add_color_control('Link color', 'xxxxxxxxxx', 'colors', '#0066ff', $wp_customize);
function theme_custamize_add_color_control($name, $id, $section, $default, $wp_customize) {
  $wp_customize->add_setting( $id, array( 'default' => $default, ) );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize,
      $id,
      array(
        'label' => __( $name, $id ),
        'section'  => $section,
        'settings' => $id,
      )
    )
  );
}

// Example:
// theme_custamize_add_image_control('Facebook OGP Image', 'facebook_ogp', 'social_acoounts', '', $wp_customize);
function theme_custamize_add_image_control($name, $id, $section, $default, $wp_customize) {
  $wp_customize->add_setting( $id, array( 'default' => $default, ) );
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      $id,
      array(
        'label' => __( $name, $id ),
        'section' => $section,
        'settings' => $id
      )
    )
  );
}

// Example:
// theme_custamize_add_control('Twitter ID', 'twitter_id', 'social_acoounts', '', $wp_customize);
function theme_custamize_add_control($name, $id, $section, $default, $wp_customize) {
  $wp_customize->add_setting( $id, array( 'default' => $default, ) );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      $id,
      array(
        'label' => __( $name, $id ),
        'section'  => $section,
        'settings' => $id,
      )
    )
  );
}
