    <footer role="contentinfo" class="footer">
      <div class="container">
        <p>&copy; 2014 – <?php echo date('Y'); ?> <?php bloginfo('name'); ?> – <?php bloginfo('description'); ?>. <?php if (get_field('options_footer_copyright', option)): ?> <?php the_field('options_footer_copyright', option); ?><?php endif; ?><?php if (get_field('options_footer_privacy_text', option) && get_field('options_footer_privacy_url', option)): ?> <a href="<?php the_field('options_footer_privacy_url', option); ?>" target="_blank" rel="nofollow"><?php the_field('options_footer_privacy_text', option); ?></a><?php endif; ?></p>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
