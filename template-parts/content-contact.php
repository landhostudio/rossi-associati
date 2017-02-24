<article class="page page--contact" itemscope="itemscope" itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
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
        <h2 class="page__title" itemprop="headline"><?php the_field('page_subtitle'); ?></h2>
      <?php else: ?>
        <h2 class="page__title" itemprop="headline"><?php the_title(); ?></h2>
      <?php endif; ?>
    </div>

    <?php if (have_rows('contact_locations')): ?>
      <div class="contact__locations" itemscope itemtype="http://schema.org/LocalBusiness">
      <?php while (have_rows('contact_locations')): the_row(); ?>
        <div class="contact__location" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">

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
