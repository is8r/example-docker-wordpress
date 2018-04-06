<?php if (has_post_thumbnail()) : ?>
  <section class="eyecatch">
    <img src="
    <?php
        $image = wp_get_attachment_image_src(get_post_thumbnail_id(), array(100, 100));
        echo $image[0];
    ?>
    " />
  </section>
<?php else: ?>
<?php endif; ?>
