<article class="page__item" itemscope itemtype="http://schema.org/CreativeWork">
  <a rel="bookmark" href="<?php the_permalink(); ?>">
    <h3 itemprop="headline"><?php the_title(); ?></h3>
    <?php the_post_thumbnail('medium'); ?>
    <div itemprop="text">
      <?php the_excerpt(); ?>
    </div>
  </a>
</article>
