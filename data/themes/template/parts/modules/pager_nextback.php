<?php if (get_next_post() || get_previous_post()):?>
  <section class="pager">
    <?php previous_post_link('%link');?>
    <?php if (get_next_post() && get_previous_post()):?>
    |
    <?php endif; ?>
    <?php next_post_link('%link'); ?>
  </section>
<?php endif; ?>
