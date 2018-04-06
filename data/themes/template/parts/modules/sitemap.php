<div class="row">
  <div class="col-xs-12 col-md-4">
    <section>
      <h3>SEARCH</h3>
      <div class="sidebar__searchbox">
        <form method="get" action="<?php bloginfo( 'url' ); ?>">
          <input name="s" id="s" type="text" />
        </form>
      </div>
    </section>
    <section>
      <h3>LINKS</h3>
      <ul class="sidebar__links">
        <li class="rss"><a href="/?feed=rss2" title="RSS">RSS</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Twitter</a></li>
      </ul>
    </section>
  </div>
  <div class="col-xs-12 col-md-4">
    <section>
      <h3>PAGES</h3>
      <ul class="sidebar__links">
        <?php wp_list_pages('title_li='); ?>
      </ul>
    </section>
    <section>
      <h3>CATEGORIES</h3>
      <ul class="sidebar__links">
        <?php wp_list_categories('show_count=0&title_li='); ?>
      </ul>
    </section>
    <section>
      <h3>TAGS</h3>
      <ul class="sidebar__links">
        <?php
        if(get_the_tag_list()) {
          echo get_the_tag_list('<li>','</li><li>','</li>');
        }
        ?>
      </ul>
    </section>
  </div>
  <div class="col-xs-12 col-md-4">
    <section>
      <h3>Archives</h3>
      <ul>
        <?php wp_get_archives(); ?>
        <?php //get_en_archives(); ?>
      </ul>
    </section>
    <section>
      <h3>RECENT POSTS</h3>
      <ul class="sidebar__links">
        <?php
          $recent_posts = wp_get_recent_posts();
          foreach( $recent_posts as $recent ){
            echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
          }
        ?>
      </ul>
    </section>
  </div>
</div>