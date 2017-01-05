<?php get_header(); ?>

<?php if (have_posts()): ?>
  <section class="news">
    <h2><?php esc_html_e('News', 'rossi-associati'); ?></h2>

    <?php while (have_posts()): the_post(); ?>
      <?php get_template_part('template-parts/content', 'preview'); ?>
    <?php endwhile; ?>
  </section>
<?php else: ?>
  <?php get_template_part('template-parts/content', 'none'); ?>
<?php endif; ?>

<?php get_footer(); ?>
