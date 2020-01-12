<?php
/************************************************
style.css/index.jsの読み込み
************************************************/
function yggdrasil_scripts() {
    wp_enqueue_style('my-reset-style', '/assets/css/reset.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('my-style', get_stylesheet_uri() , array(), '1.0.0','all' );
    wp_enqueue_script('my-script', get_template_directory_uri() . 'assets/js/index.js', array('jquery'), '1.0.0' , 'all' );
}
add_action('wp_enqueue_scripts','yggdrasil_scripts');
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
// lazysizes.js(lazyload)対応(参照：https://nelog.jp/lazy-load-plugin-for-jquery)※HTMLのPHP化の際に要見直し
function add_image_placeholders( $content ) {
    if ( is_feed() || is_preview() || ( function_exists( 'is_mobile' ) && is_mobile() ) )
        return $content;

    if ( false !== strpos( $content,'data-original' ) )
        return $content;
        
    $content = preg_replace(
        '#<img([^>]+?)src=[\'"]?([^\'"\s>]+)[\'"]?([^>]*)>#',
        sprintf('<img${1}src="%s" data-original="${2}"${3} data-lazy="true" /><noscript><img${1}src="${2}"${3} /></noscript>', get_template_directory_uri().'/img/noscript.jpg' ),//noscript時に置き換える画像
        $content );
}
add_filter('the_content','add_image_placeholders',99);
add_filter('post_thumbnail_html','add_image_placeholders',11);
add_filter('get_avatar','add_image_placeholders',11);

?>