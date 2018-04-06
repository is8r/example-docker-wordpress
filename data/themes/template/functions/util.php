<?php

/* 簡単にオプションを取得 */
function b($name) {
  echo bloginfo($name);
}
function m($name) {
  return get_theme_mod($name);
}
function em($name) {
  echo get_theme_mod($name);
}

/* カテゴリ名をテキストで取得 */
function get_the_category_text() {
  $cat = get_the_category();
  echo $cat[0]->cat_name;
}

/* slagからカテゴリIDを取得 */
function get_categoryid_by_slug($slag) {
  $cat = get_category_by_slug($slag);
  $cat_id = $cat->cat_ID;
  return $cat_id;
}

/* slagからカテゴリの記事数を取得 */
function get_category_items($slag) {
  $cat = get_category_by_slug($slag);
  $cat_id = $cat->cat_ID;
  return get_category($cat_id)->category_count;
}
function get_category_name_by_slug($slag) {
  $cat = get_category_by_slug($slag);
  return $cat->cat_name;
}

/* 最新記事のIDを取得 */
function get_the_latest_ID() {
  global $wpdb;
  $row = $wpdb->get_row("SELECT ID FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' ORDER BY post_date DESC");
  return !empty( $row ) ? $row->ID : '0';
}
function the_latest_ID() {
    echo get_the_latest_ID();
}

/* 記事の最初の画像を取得 */
function get_the_content_image() {
  $content = get_the_content();
  $content = preg_match("|(<img[^>]+>)|si", $content, $matches);
  echo $matches[0];
}

/* 記事のテキストのみ取得 */
function get_the_content_text() {
  $content = get_the_content();
  $content = preg_replace("|(<img[^>]+>)|si","",$content);
  echo $content;
}

/* 頭に追加文字がついたカテゴリページのタイトルを取得 */
function get_single_month_title_en ($add = "Archives: ") {
  $date = single_month_title('',false);
  $pos = strpos($date, '月');
  $re = mb_substr($date, $pos+1).'/'.mb_substr($date, 0, $pos+1);
  $re = str_replace( array("月"), '', $re );
  echo $add.$re;
}
function get_category_name($add = "Category: ") {
  $categoryname = single_cat_title('',false);
  echo $add.$categoryname;
}
function get_single_tag_title($add = "Tag: ") {
  $re = single_tag_title('', false);
  echo $add.$re;
}
function get_search_text($add = "Search: ") {
  global $wp_query;
  $total_results = $wp_query->found_posts;
  $re = get_search_query( false );
  echo $add.$re."(".$total_results.")";
}
function get_page_title() {
  if (is_category()) {
    return get_category_name();
  } elseif(is_tag()) {
    return get_single_tag_title();
  } elseif(is_archive()) {
    return get_single_month_title_en();
  } elseif(is_search()) {
    return get_search_text();
  } else {
    return false;
  }
}

/* 月別アーカイブを英語表記に */
function get_en_archives () {
  $re = wp_get_archives( array( 'show_post_count' => true, 'echo' => 0 ) );
  $re = str_replace( array("年"), '/', $re );
  echo str_replace( array("月"), '', $re );
}

/* サムネイルのパスだけを取得 */
function get_thumb_path() {
  $post_thumbnail_id = get_post_thumbnail_id( get_the_ID() );
  $image = wp_get_attachment_image_src( $post_thumbnail_id, 'post-thumbnail' );
  if ( $image ) {
    list($src, $width, $height) = $image;
    echo esc_attr( $src );
  }
  echo null;
}

/* 投稿タイプを追加
//カスタム投稿 topics
add_action( 'init', 'topics_post_type' );
function topics_post_type() {
  add_posttype('Topics', 'topics', 2, false, false);
}
*/
function add_posttype($name, $slag, $position, $use_categories, $use_eyecatch) {

  $supports = array('title', 'editor');
  if($use_eyecatch) {
    array_push($supports, 'thumbnail');
  }

  register_post_type( $slag,
    array(
      'labels' => array(
        'name' => __( $name ),
        'singular_name' => __( $name )
      ),
      'public' => true,
      'menu_position' => $position,
      'has_archive' => true,
      'supports' => $supports
    )
  );

  if($use_categories) {
    register_taxonomy(
      $slag.'_categories',
      $slag,
      array(
        'hierarchical' => true,
        'update_count_callback' => '_update_post_term_count',
        'label' => 'カテゴリー',
        'singular_label' => 'カテゴリー',
        'public' => true,
        'show_ui' => true
      )
    );
  }
}
