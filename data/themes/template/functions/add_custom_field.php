<?php

// 個別のカスタムフィールドエリアを作成
add_action('admin_menu', 'add_pickup_meta_box');
function add_pickup_meta_box() {
  add_meta_box( 'pickup_meta_box', 'Only Pickup Field - Device direction and position.', 'pickup_custom_fields', 'post', 'advanced' );
}
function pickup_custom_fields() {
  global $post;
  $field_name = 'pickup_custom_field';
  $options = array('portrait_left','portrait_right','landscape_left','landscape_right');
  $n = count($options);
  $radio_field = get_post_meta($post->ID, $field_name, true);

  $cat_id = get_categoryid_by_slug('pickup');
  $hidden_field = '<div class="js-hidden-custom-field is-hide" data-category-id="'.$cat_id.'"></div>';
  echo $hidden_field;
  echo '<p>The Pickup category, eye-catching image is placed in the device that is placed automatically. Set the eye-catching image that has been tailored to it by selecting the position and orientation of the device.</p>';
  echo '<ul class="radio-pickup">';
  for ($i=0; $i<$n; $i++) {
    $option = $options[$i];
    echo '<li>';
    if ($option == $radio_field) {
      echo '<input type="radio" name="'.esc_html($field_name).'" value="'.esc_html($option).'" id="'.esc_html($option).'" checked><label for="'.esc_html($option).'">'.$option.'</label>';
    } else {
      echo '<input type="radio" name="'.esc_html($field_name).'" value="'.esc_html($option).'" id="'.esc_html($option).'" ><label for="'.esc_html($option).'">'.$option.'</label>';
    }
    echo '</li>';
  }
  echo '</ul>';
  echo '<p>For portrait layout: 640x1136<br />For Landscape layout: 1136x640</p>';
}

// カスタムフィールドの保存（新規・更新・削除）
add_action('save_post', 'save_pickup_custom_fields');
function save_pickup_custom_fields( $post_id ) {
  $field_name = 'pickup_custom_field';
  if(isset($_POST[$field_name])){
    $value = $_POST[$field_name] ? $_POST[$field_name]: null;
    $field_value = get_post_meta($post_id, $field_name, true);
    if($value) {
       update_post_meta($post_id, $field_name, $value);
    } else {
      delete_post_meta($post_id, $field_name, $field_value);
    }
  }
}