<article class="list">
  <h2><?php the_title(); ?></h2>
  <?php the_post_thumbnail(); ?>
  <?php the_content(); ?>

  <?php if (have_rows('list')): ?>
    <div class="list_items">
      <?php while (have_rows('list')): the_row(); ?>

        <div class="list__group">

          <?php if (get_sub_field('list_title')): ?>
            <h3><?php the_sub_field('list_title'); ?></h3>
          <?php endif; ?>
          
          <?php if (have_rows('list_group')): ?>
            <?php while (have_rows('list_group')): the_row(); ?>
              <div class="list__item">

                <?php if (get_sub_field('list_group_title')): ?>
                  <h4><?php the_sub_field('list_group_title'); ?></h4>
                <?php endif; ?>
                
                <?php if (get_sub_field('list_group_text')): ?>
                  <?php the_sub_field('list_group_text'); ?>
                <?php endif; ?>

              </div>
            <?php endwhile; ?>
          <?php endif; ?>

        </div>

      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</article>
