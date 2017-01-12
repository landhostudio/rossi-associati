<article class="page page--contact">
  <?php if (has_post_thumbnail()): ?>
    <div class="page__cover">
      <div class="page__container">
        <div class="page__image">
          <?php the_post_thumbnail(); ?>
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
    </div>

    <?php if (have_rows('contact_locations')): ?>
      <div class="contact__locations">
      <?php while (have_rows('contact_locations')): the_row(); ?>
        <div class="contact__location">

          <?php if (get_sub_field('contact_locations_title')): ?>
            <h3><?php the_sub_field('contact_locations_title'); ?></h3>
          <?php endif; ?>

          <?php if (get_sub_field('contact_locations_text')): ?>
            <?php the_sub_field('contact_locations_text'); ?>
          <?php endif; ?>

        </div>
      <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</article>
