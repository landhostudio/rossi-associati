<article class="page page--single" itemscope itemtype="http://schema.org/CreativeWork">
  <?php if (has_post_thumbnail()): ?>
    <div class="page__cover">
      <div class="page__container">
        <div class="page__image">
          <?php the_post_thumbnail('large'); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="page__body">
    <div class="container">
      <?php if (get_field('page_subtitle')): ?>
        <h2 class="page__title" itemprop="headline"><?php the_field('page_subtitle'); ?></h2>
      <?php else: ?>
        <h2 class="page__title" itemprop="headline"><?php the_title(); ?></h2>
      <?php endif; ?>

      <div class="page__content" itemprop="description">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</article>
