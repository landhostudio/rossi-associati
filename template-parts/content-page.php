<article class="page">
  <?php if (get_field('page_subtitle')): ?>
    <h2><?php the_field('page_subtitle'); ?></h2>
  <?php else: ?>
    <h2><?php the_title(); ?></h2>
  <?php endif; ?>
  <?php the_post_thumbnail(); ?>
  <?php the_content(); ?>
</article>
