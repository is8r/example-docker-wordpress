<?php

require_once locate_template('functions/util.php');

require_once locate_template('functions/add_eyecatch.php');

require_once locate_template('functions/create_pagenation.php');
require_once locate_template('functions/create_breadcrumb.php');

// require_once locate_template('functions/add_post_type.php');
// require_once locate_template('functions/change_radio_category_select.php');
// require_once locate_template('functions/add_admin_css.php');
// require_once locate_template('functions/add_admin_js.php');
// require_once locate_template('functions/add_admin_menu_site_setting.php');
// require_once locate_template('functions/add_custom_field.php');
// require_once locate_template('functions/add_custom_header.php');
// require_once locate_template('functions/add_pager_link_attributes.php');
// require_once locate_template('functions/add_eyecatch_description.php');
// require_once locate_template('functions/remove_metaboxes.php');
// require_once locate_template('functions/remove_admin_menus.php');
// require_once locate_template('functions/theme_custamizer.php');

//メニューから編集ボタンを非表示にする
add_action('admin_menu', 'remove_admin_menus');
function remove_admin_menus() {
  remove_menu_page( 'edit-comments.php' );
}
