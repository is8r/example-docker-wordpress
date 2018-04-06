<?php

/* next,backにクラスを追加 */
add_filter('previous_posts_link_attributes', 'add_previous_posts_link_attributes');
function add_previous_posts_link_attributes(){
  return 'class="back"';
}
add_filter('next_posts_link_attributes', 'add_next_posts_link_attributes');
function add_next_posts_link_attributes(){
  return 'class="next"';
}
