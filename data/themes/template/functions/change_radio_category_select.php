<?php

/* 投稿画面の拡張 - カテゴリ選択をラジオボタンに変更 */
add_action('admin_print_footer_scripts', 'change_radio_category_select', 21);
function change_radio_category_select() {
  echo '<script type="text/javascript">
    //<![CDATA[
    jQuery(document).ready(function($){
      $(".categorychecklist input[type=checkbox]").each(function(){
        $(this).replaceWith($(this).clone().attr("type","radio"));
      });
    });
    //]]>
    </script>';
}
