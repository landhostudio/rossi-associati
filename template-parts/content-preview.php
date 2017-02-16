<article class="page__item">
  <a rel="bookmark" href="<?php the_permalink(); ?>">
    <h3><?php the_title(); ?></h3>
    <?php the_post_thumbnail('medium'); ?>
    <?php the_excerpt(); ?>
  </a>
</article>
