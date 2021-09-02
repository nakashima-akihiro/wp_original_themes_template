<?php

/**
 * The template function
 *
 * @package original
 * @since 1.0.0
 */
date_default_timezone_set('Asia/Tokyo');

function load_assets()
{
  // キャッシュ対策のためデプロイ前に$versionの数値を変更する。
  $version = '1.0.0';
  /* google fonts Noto+Sans+JP  */
  // wp_enqueue_style('Noto+Sans+JP', 'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&display=swap', array(), $version, false);
  /* google fonts Roboto+Condensed  */
  // wp_enqueue_style('Roboto+Condensed', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap', array(), $version, false);
  /* common */
  wp_enqueue_style('my-style', get_template_directory_uri() . '/style.css', array(), $version, false);
  wp_enqueue_script('my-js', get_template_directory_uri() . '/js/common.js', array('jquery'), $version, true);
}
add_action('wp_enqueue_scripts', 'load_assets');
