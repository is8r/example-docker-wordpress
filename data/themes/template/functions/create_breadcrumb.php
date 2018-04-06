<?php

// パンくずを作成
function create_breadcrumb($text, $url = ''){
  if ($url != '') {
    return '<li><a href="'.$url.'">'.$text.'</a></li>';
  } else {
    return '<li>'.$text.'</li>';
  }
}

function breadcrumb(){
  global $post;
  $str ='';
  if(!is_home()&&!is_admin()){
    $str.= '<section class="breadcrumb">';
    $str.= '<ul>';
    $str.= create_breadcrumb("Home", home_url());

    if(is_category()) {
      $cat = get_queried_object();
      if ($cat -> parent != 0) {
        $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
        foreach($ancestors as $ancestor){
          $str .= create_breadcrumb(get_cat_name($ancestor), get_category_link($ancestor));
        }
      }
      $str .= create_breadcrumb('Categories');
      $categoryname = single_cat_title('',false);
      $str .= create_breadcrumb($categoryname);
    } elseif(is_page()) {
      if($post -> post_parent != 0 ){
        $ancestors = array_reverse(get_post_ancestors( $post->ID ));
        foreach($ancestors as $ancestor){
          $str .= create_breadcrumb(get_the_title($ancestor), get_permalink($ancestor));
        }
      }
      $str .= create_breadcrumb(get_the_title());
    } elseif(is_tag()) {
      $str .= create_breadcrumb('Tags');
      $str .= create_breadcrumb(single_tag_title('', false));
    } elseif(is_archive()) {
      $str .= create_breadcrumb('Archives');
      $str .= create_breadcrumb(get_the_time('Y/m'));
    } elseif(is_single()) {
      $categories = get_the_category($post->ID);
      $cat = $categories[0];
      if($cat -> parent != 0){
        $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
        foreach($ancestors as $ancestor){
          $str .= create_breadcrumb(get_cat_name($ancestor), get_category_link($ancestor));
        }
      }
      $str .= create_breadcrumb($categories[0]->cat_name, get_category_link($categories[0]));
      $str .= create_breadcrumb(get_the_title());
    }

    $str.= '</ul>';
    $str.='</section>';
  }
  echo $str;
}
