<?php get_template_part( '/parts/head' ); ?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <?php get_template_part( '/parts/header' ); ?>
      <?php get_template_part( '/parts/modules/breadcrumb' ); ?>
    </div>
  </div>

  <div class="mt50"></div>
  <div class="row">
    <div class="col-xs-12 col-md-9">
      <?php get_template_part( '/parts/loop/posts' ); ?>
      <?php get_template_part( '/parts/modules/pager' ); ?>
    </div>
    <div class="col-xs-12 col-md-3">
      <?php get_template_part( '/parts/modules/sidebar' ); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-md-12">
      <?php get_template_part( '/parts/footer' ); ?>
    </div>
  </div>
</div>

<?php get_template_part( '/parts/foot' ); ?>