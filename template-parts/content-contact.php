<article class="contact">
  <?php if (get_field('page_subtitle')): ?>
    <h2><?php the_field('page_subtitle'); ?></h2>
  <?php else: ?>
    <h2><?php the_title(); ?></h2>
  <?php endif; ?>
  <?php the_post_thumbnail(); ?>
  <?php the_content(); ?>

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
  
</article>
