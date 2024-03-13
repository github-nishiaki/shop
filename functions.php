<?php
//アイキャッチ画像を使用可能にする
add_theme_support('post-thumbnails');
//カスタムメニュー機能を使用可能にする
add_theme_support('menus');
//カスタムメニューの「場所」を設定する
register_nav_menus(array(
    'global' => 'ヘッダーメニュー',
    'footer' => 'フッターメニュー',
));
//CSS/JSを読み込む
function add_files()
{
    //CSSを読み込む
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
    //JSを読み込む
    wp_enqueue_script('script', get_template_directory_uri() . '/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'add_files');
//ウィジェット機能を使用可能にする
function add_widget()
{
    register_sidebar(array(
        'id' => 'sidebar',
        'name' => 'サイドバー',
        'description' => 'サイドバーに表示されるウィジェットエリアです。',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
    ));
}
add_action('widgets_init', 'add_widget');

