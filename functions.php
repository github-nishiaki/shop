<?php
//アイキャッチ画像を使用可能にする
add_action('init', function () {
    add_theme_support('post-thumbnails');
});
