<?php if (has_post_thumbnail()) : ?>
  <section class="hero">
    <div class="hero__head">
      <h1><?php the_title(); ?></h1>
      <ul>
        <li><?php echo get_post_time('D, d M Y') ?></li>
        <li class="post__categories"><?php the_category(', ') ?></li>
      </ul>
    </div>
    <div class="hero__inner" style="background-image: url(
      <?php
          $image = wp_get_attachment_image_src(get_post_thumbnail_id(), array(100, 100));
          echo $image[0];
      ?>
      )">
    </div>
  </section>
<?php else: ?>
<?php endif; ?>
