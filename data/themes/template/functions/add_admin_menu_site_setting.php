<?php

/* 投稿画面の拡張 - サイト設定を追加 */
add_action('admin_menu', 'add_admin_menu_site_setting');
function add_admin_menu_site_setting() {
    add_menu_page('サイト設定', 'サイト設定', 0, 'site_settings', 'create_custom_menu_page', '', 3);
}
function create_custom_menu_page() {
    require TEMPLATEPATH.'/admin/site_settings.php';
}
