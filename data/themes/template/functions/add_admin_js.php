<?php

/* 管理画面js */
add_action('admin_head', 'add_admin_js');
function add_admin_js() {
  echo '<script type="text/javascript" src="'.get_bloginfo('template_directory').'/common/javascripts/scripts.min.js"></script>';
  echo '<script type="text/javascript" src="'.get_bloginfo('template_directory').'/admin/media-uploader.js"></script>';
}
