<?php
// from http://design.sparklette.net/teaches/how-to-add-wordpress-pagination-without-a-plugin/
function pagination($pages = '', $range = 2)
{
  $showitems = ($range * 2)+1;
  global $paged;
  if(empty($paged)) $paged = 1;
  if($pages == '')
  {
     global $wp_query;
     $pages = $wp_query->max_num_pages;
     if(!$pages)
     {
       $pages = 1;
     }
  }

  $re = '';
  $re .= '<section class="pagination">';
  $re .= '<ul>';
  if(1 != $pages)
  {
    if ($paged > 1) {
      $re .= '<li class="next"><a href="'.get_pagenum_link($paged - 1).'">Newer</a></li>';
    } else {
      $re .= '<li class="next"><a href="'.get_pagenum_link($paged - 1).'" class="is-disable">Newer</a></li>';
    }

    for ($i=1; $i <= $pages; $i++)
    {
      if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
      {
        $re .= ($paged == $i)? '<li><a href="./" class="is-current">'.$i.'</a></li' : '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
      }
    }

    if ($paged < $pages) {
      $re .= '<li class="back"><a href="'.get_pagenum_link($paged + 1).'">Older</a></li>';
    } else {
      $re .= '<li class="back"><a href="'.get_pagenum_link($paged + 1).'" class="is-disable">Older</a></li>';
    }
  }
  $re .= '</ul>';
  $re .= '</section>';

  return $re;
}

if (function_exists("pagination")) {
  pagination($wp_query->max_num_pages);
}
?>