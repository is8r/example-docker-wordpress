<?php

// 管理画面サイドバーメニュー非表示
function remove_admin_menus () {
  // remove_menu_page('index.php'); // ダッシュボード
  // remove_menu_page('edit.php'); // 投稿
  // remove_menu_page('upload.php'); // メディア
  remove_menu_page('edit-comments.php'); // コメント
  // remove_menu_page('profile.php'); // プロフィール
  // remove_menu_page('tools.php'); // ツール
  remove_menu_page('edit.php?post_type=page'); // 固定ページ

  remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag'); // 投稿 -> タグ
  remove_submenu_page ('themes.php', 'custom-header'); // 外観 -> ヘッダー
}
add_action('admin_menu', 'remove_admin_menus', 102);