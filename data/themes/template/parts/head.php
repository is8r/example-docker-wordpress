<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <meta http-equiv="Content-Script-Type" content="text/javascript">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="imagetoolbar" content="no">

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

  <title><?php wp_title('', true, 'right'); ?><?php if ( is_single() ) { ?>| <?php } ?><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="keywords" content="<?php bloginfo('description'); ?>">
  <link rel="canonical" href="<?php the_permalink(); ?>">

  <meta property="og:title" content="<?php wp_title('', true, 'right'); ?><?php if ( is_single() ) { ?>| <?php } ?><?php bloginfo('name'); ?>" />
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
  <?php if(is_home()): ?>
    <meta property="og:type" content="blog" />
  <?php else: ?>
    <meta property="og:type" content="article" />
  <?php endif; ?>
  <meta property="og:url" content="<?php the_permalink(); ?>" />
  <meta property="og:description" content="<?php bloginfo('description'); ?>" />
  <meta property="og:image" content="<?php bloginfo('template_url'); ?>/common/images/ogp.png" />
  <meta property="fb:app_id" content="526320574133364" />

  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
  <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/common/images/apple-touch-icon.png">

  <script src="<?php bloginfo('template_url'); ?>/common/javascripts/scripts.js" type="text/javascript"></script>

  <link href="<?php bloginfo('template_url'); ?>/common/stylesheets/styles.css" media="screen" rel="stylesheet" type="text/css" />

</head>
<body>
