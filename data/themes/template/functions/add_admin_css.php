<?php

/* 管理画面css */
add_action('admin_head', 'add_admin_css');
function add_admin_css() {
  echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/common/stylesheets/admin.css" />';
}
