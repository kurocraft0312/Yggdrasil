<?php
/************************************************
機能削除
************************************************/
// jQueryの二重読み込み回避（wp_head()で自動に読み込まれる既存のjQueryを削除）
function wp_delete_local_jquery() {
    wp_deregister_script('jquery');
}
add_action( 'wp_enqueue_scripts','wp_delete_local_jquery' );
// WordPressのバージョン情報削除
remove_action('wp_head','wp_generator');
// WordPressの絵文字機能を削除
remove_action('wp_head','print_emoji_detection_script',7);
remove_action('wp_print_styles','print_emoji_styles',10);
// Windows Live Writerからの投稿機能を削除
remove_action('wp_head','wlwmanifest_link');
// 外部の投稿ツールからの投稿機能を削除
remove_action('wp_head','rsd_link');
/************************************************
機能追加
************************************************/


?>