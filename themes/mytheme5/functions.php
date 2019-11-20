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

	// 編集画面用のCSS
	add_theme_support( 'editor-styles' );
	add_editor_style( 'editor-style.css' );

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


// CSS
function mytheme_enqueue() {

	//Google Fonts
	wp_enqueue_style( 'mytheme-googlefonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,800', array(), null );

	//テーマのCSS
	wp_enqueue_style( 'mytheme-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ) );

}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue' );
