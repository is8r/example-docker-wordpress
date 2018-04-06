<?php if (have_posts()) : ?>
  <ul class="posts">
    <?php while (have_posts()) : the_post(); ?>
      <li class="post" id="post-<?php the_ID(); ?>">
        <section class="post__head">
          <?php get_template_part( '/parts/modules/eyecatch' ); ?>
          <h3>
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h3>
          <div class="post__info">
            <ul>
              <li><?php echo get_post_time('D, d M Y') ?></li>
              <li class="post__categories"><?php the_category(', ') ?></li>
            </ul>
          </div>
        </section>
      </li>
    <?php endwhile; ?>
  </ul>
<?php else : ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
