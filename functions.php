<?php 
// 投稿ページにサムネイルを追加する方法
add_theme_support('post-thumbnails');

// カスタムヘッダー
add_theme_support( 'custom-header' );

// カスタムメニュー
add_theme_support( 'menus' );

register_nav_menus( array(
    'global' => 'Global Menu',
    'footer-menu'  => 'Footer Menu',
  ));


?>

