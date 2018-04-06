<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <article class="post" id="post-<?php the_ID(); ?>">

    <?php if (has_post_thumbnail()) : ?>
      <section class="post__head is-hidden">
    <?php else : ?>
      <section class="post__head">
    <?php endif; ?>

      <h1><?php the_title(); ?></h1>
      <div class="post__info">
        <ul>
          <li><?php echo get_post_time('D, d M Y') ?></li>
          <li class="post__categories"><?php the_category(', ') ?></li>
        </ul>
      </div>
    </section>
    <section class="post__body body">
      <?php the_content(); ?>
    </section>
  </article>
  <?php endwhile; ?>
<?php else : ?>
  <article class="post">
    <section class="post__head is-center">
      <h1>Not Found</h1>
    </section>
  </article>
<?php endif; ?>
<?php wp_reset_query(); ?>
