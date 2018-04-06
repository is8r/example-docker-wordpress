<?php get_template_part( '/parts/head' ); ?>

<?php get_template_part( '/parts/header' ); ?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <?php get_template_part( '/parts/loop/single' ); ?>

      <div class="mt50"></div>
      <?php get_template_part( '/parts/modules/breadcrumb' ); ?>
      <?php get_template_part( '/parts/footer' ); ?>
    </div>
  </div>
</div>

<?php get_template_part( '/parts/foot' ); ?>
