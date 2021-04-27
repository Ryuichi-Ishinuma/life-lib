<?php
/**
* アイキャッチ画像を使用可能にする
*/
add_theme_support('post-thumbnails');

/**
* 管理画面にメニューを追加
*/
function register_menu() { 
    register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
    //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
      'global-nav' => 'グローバルナビゲーション',
      'footer-menu'  => 'Footer Menu',
    ) );
}
add_action( 'after_setup_theme', 'register_menu' );