<?php
/**************************************************
OGPタグ
**************************************************/
function yggdrasil_meta_ogp() {
    if( is_front_page() || is_home() || is_singular() ) {
        global $post;
        $ogp_title = '';
        $ogp_desc = '';
        $ogp_url = '';
        $ogp_img = '';
        $insert = '';

        if( is_singular() ) {
            setup_postdata($post);
            $ogp_title = $post -> post_title;
            $ogp_desc = mb_substr(get_the_excerpt(), 0 ,140);
            $ogp_url = get_permalink();
            wp_reset_postdata();
        } elseif( is_front_page() || is_home() ) {
            $ogp_title = get_bloginfo('name');
            $ogp_desc = get_bloginfo('description');
            $ogp_url = home_url();
        }
        if ( is_singular() && has_post_thumbnail() ) {
            $ps_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
            $ogp_img = $ps_thumb[0];
        } else {
            $ogp_img = 'TOP画像がないときに設定する画像';
        }
        $ogp_type = (is_front_page() || is_home() ) ? 'website' : 'article';
        
        $insert .= '<meta property="og:title" content="'.esc_attr($ogp_title).'" />' . "\n";
        $insert .= '<meta property="og:description" content="'.esc_attr($ogp_descr).'" />' . "\n";
        $insert .= '<meta property="og:url" content="'.esc_url($ogp_url).'" />' . "\n";
        $insert .= '<meta property="og:image" content="'.esc_url($ogp_img).'" />' . "\n";
        $insert .= '<meta property="og:type" content="'.$ogp_type.'" />' . "\n";
        $insert .= '<meta property="og:site_name" content="'.esc_attr(get_bloginfo('name')).'" />' . "\n";
        $insert .= '<meta property="og:locale" content="ja_JP" />' . "\n";
        $insert .= '<meta name="twitter:card" content="summary_large_image" />' . "\n";
        $insert .= '<meta name="twitter:site" content="@kurocraft7522" />' . "\n";
        $insert .= '<meta property="fb:app_id" content="ここにappIDを入力">' . "\n";
    
        echo $insert;
      }
    }
add_action('wp_head','yggdrasil_meta_ogp');
?>