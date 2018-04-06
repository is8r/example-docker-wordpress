<?php

/* 投稿画面の拡張 - いらない項目を隠す */
add_action('admin_menu','remove_metaboxes');
function remove_metaboxes() {
  remove_meta_box( 'postcustom','post','normal' ); // カスタムフィールド
  remove_meta_box( 'postexcerpt','post','normal' ); // 抜粋
  //remove_meta_box( 'categorydiv','post','normal' ); // カテゴリ
  remove_meta_box( 'commentstatusdiv','post','normal' ); // ディスカッション
  remove_meta_box( 'commentsdiv','post','normal' ); // コメント
  remove_meta_box( 'trackbacksdiv','post','normal' ); // トラックバック
  remove_meta_box( 'authordiv','post','normal' ); // 作成者
  remove_meta_box( 'slugdiv','post','normal' ); // スラッグ
  remove_meta_box( 'revisionsdiv','post','normal' ); // リビジョン
  remove_meta_box( 'tagsdiv-post_tag' , 'post' , 'side' ); // 投稿のタグ
}

