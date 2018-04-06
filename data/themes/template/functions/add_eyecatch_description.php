<?php

/* 投稿画面の拡張 - アイキャッチ画像の捕捉文言 */
add_filter( 'admin_post_thumbnail_html', 'add_eyecatch_description');
function add_eyecatch_description( $content ) {
    return $content .= '<p>Image that is displayed on the top page should be specified here.</p>';
}