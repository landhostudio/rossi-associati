<?php get_header(); ?>

<?php if (have_posts()): ?>
  <section class="page page--news">
    <div class="page__cover">
      <div class="page__container">
        <div class="page__image">
          <?php the_post_thumbnail(); ?>
        </div>
      </div>
    </div>

    <div class="page__body">
      <div class="container">
        <?php if (is_category()): ?>
          <h2 class="page__title"><?php single_cat_title(); ?></h2>
        <?php else: ?>
          <h2 class="page__title"><?php esc_html_e('News', 'rossi-associati'); ?></h2>
        <?php endif; ?>

        <div class="page__items">
          <?php while (have_posts()): the_post(); ?>
            <?php get_template_part('template-parts/content', 'preview'); ?>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>
<?php else: ?>
  <?php get_template_part('template-parts/content', 'none'); ?>
<?php endif; ?>

<?php get_footer(); ?>
