<?php

// カスタム投稿タイプを作成する
add_action('init', 'add_pickup_post_type');
function add_pickup_post_type() {
  $name = 'Pickup';
  $slug = 'pickup';
  $params = array(
    'labels' => array(
      'name' => $name,
      'singular_name' => $slug,
      'add_new' => '新規追加',
      'add_new_item' => $name.'を新規追加',
      'edit_item' => $name.'を編集する',
      'new_item' => 'New '.$name,
      'all_items' => $name.'s',
      'view_item' => $name.'の説明を見る',
      'search_items' => '検索する',
      'not_found' => $name.'が見つかりませんでした。',
      'not_found_in_trash' => 'ゴミ箱内に'.$name.'が見つかりませんでした。'
    ),
    'public' => true,
    'has_archive' => true,
    'supports' => array(
      'title',
      'editor',
      'custom-fields',
      'thumbnail'
    ),
    'taxonomies' => array($slug.'_category',$slug.'_tag')
  );
  register_post_type($slug, $params);
}
