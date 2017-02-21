<?php get_header(); ?>

<?php if (have_posts()): ?>
  <section class="page page--news">
    
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
