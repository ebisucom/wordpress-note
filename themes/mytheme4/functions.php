<?php

// 基本設定
function mytheme_setup() {

	// ページのタイトルを出力
	add_theme_support( 'title-tag' );

	// HTML5対応
	add_theme_support( 'html5', array( 'style', 'script' ) );	

	// アイキャッチ画像
	add_theme_support( 'post-thumbnails' );

	// ナビゲーションメニュー
	register_nav_menus( array(
		'primary' => 'メイン',
	) );

}
add_action( 'after_setup_theme', 'mytheme_setup' );


// ウィジェット
function mytheme_widgets() {

	register_sidebar( array(
		'id' => 'sidebar-1',
		'name' => 'サイドメニュー',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	) );

}
add_action( 'widgets_init', 'mytheme_widgets' );

