<article class="page">
  <?php if (have_rows('page_gallery')): ?>
    <div class="carousel">
      <div class="carousel__container">
        <?php while (have_rows('page_gallery')) : the_row(); ?>
          <div class="carousel__cell">
            <?php echo wp_get_attachment_image(get_sub_field('page_gallery_image'), 'large', false, array()); ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  <?php elseif (has_post_thumbnail()): ?>
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
        <h2 class="page__title"><?php the_field('page_subtitle'); ?></h2>
      <?php else: ?>
        <h2 class="page__title"><?php the_title(); ?></h2>
      <?php endif; ?>

      <div class="page__content">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</article>
