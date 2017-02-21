<article class="page page--list">
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

      <div class="list__body">
        <?php if (have_rows('list')): ?>
          <nav class="list__nav">
            <?php
              $list_group_1_count = 0;
              while (have_rows('list')): the_row();
            ?>
              <ol>
                <?php if (get_sub_field('list_title')): ?>
                  <span class="list__element list__element--title"><?php the_sub_field('list_title'); ?></span>
                <?php endif; ?>

                <?php if (have_rows('list_group')): ?>
                  <?php
                    $list_group_2_count = 0;
                    while (have_rows('list_group')): the_row();
                  ?>
                    <li class="list__element<?php if (!$list_group_1_count && !$list_group_2_count): ?> list__element--active<?php endif; ?>">
                      <?php
                        $list_group_title = get_sub_field('list_group_title');
                        $list_remove_accents = remove_accents($list_group_title);
                        $list_ignore = array(" ", "’");
                      ?>
                      <a href="#<?php echo (str_replace($list_ignore, "-", strtolower($list_remove_accents))); ?>"><?php the_sub_field('list_group_title'); ?></a>
                    </li>
                  <?php
                    $list_group_2_count++;
                    endwhile;
                  ?>
                <?php endif; ?>
              </ol>
            <?php
              $list_group_1_count++;
              endwhile;
            ?>
          </nav>
        <?php endif; ?>

        <?php if (have_rows('list')): ?>
          <div class="list__items">
            <?php
              $list_group_3_count = 0;
              while (have_rows('list')): the_row();
            ?>

              <?php if (have_rows('list_group')): ?>
                <?php
                  $list_group_4_count = 0;
                  while (have_rows('list_group')): the_row();
                ?>
                  <?php
                    $list_group_title = get_sub_field('list_group_title');
                    $list_remove_accents = remove_accents($list_group_title);
                    $list_ignore = array(" ", "’");
                  ?>
                  <div class="list__item<?php if (!$list_group_3_count && !$list_group_4_count): ?> list__item--active<?php endif; ?>" id="<?php echo (str_replace($list_ignore, "-", strtolower($list_remove_accents))); ?>">

                    <?php if (get_sub_field('list_group_title')): ?>
                      <h4 class="hidden"><?php the_sub_field('list_group_title'); ?></h4>
                    <?php endif; ?>
                    
                    <?php if (get_sub_field('list_group_text')): ?>
                      <?php the_sub_field('list_group_text'); ?>
                    <?php endif; ?>
                  </div>
                <?php
                  $list_group_4_count++;
                  endwhile;
                ?>
              <?php endif; ?>
            <?php
              $list_group_3_count++;
              endwhile;
            ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</article>
