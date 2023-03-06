<?php

function merkushin_wp_ai_theme_setup() {
  // Enable post thumbnails
  add_theme_support( 'post-thumbnails' );

  // Register primary menu location
  register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'merkushin-wp-ai-theme' ),
  ) );
}
add_action( 'after_setup_theme', 'merkushin_wp_ai_theme_setup' );

function merkushin_wp_ai_theme_scripts() {
  // Enqueue TailwindCSS
  wp_enqueue_style( 'merkushin-wp-ai-theme-tailwindcss', get_stylesheet_directory_uri() . '/tailwind.min.css' );

  // Enqueue main stylesheet
  wp_enqueue_style( 'merkushin-wp-ai-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'merkushin_wp_ai_theme_scripts' );

