    <footer role="contentinfo" class="footer">
      <div class="container">
        <p>&copy; 2014 – <?php echo date('Y'); ?> <?php bloginfo('name'); ?> – <?php bloginfo('description'); ?>. <?php if (get_field('options_footer_copyright', option)): ?> <?php the_field('options_footer_copyright', option); ?><?php endif; ?><?php if (get_field('options_footer_privacy_text', option) && get_field('options_footer_privacy_url', option)): ?> <a href="<?php the_field('options_footer_privacy_url', option); ?>" target="_blank" rel="nofollow"><?php the_field('options_footer_privacy_text', option); ?></a><?php endif; ?></p>
      </div>
    </footer>

    <?php if (get_field('options_cookies_message', option)): ?>
      <div class="cookies">
        <div class="container">
          <div class="cookies__message">
            <p><?php the_field('options_cookies_message', option) ?></p>
          </div>
          <div class="cookies__buttons">

            <?php if (get_field('options_cookies_link_type', option)): ?>
              <a href="<?php the_field('options_cookies_link_external', option) ?>" class="button button--alternative" target="_blank" rel="nofollow"><?php esc_html_e('Approfondisci', 'rossi-associati'); ?></a>
            <?php else: ?>
              <a href="<?php the_field('options_cookies_link_intern', option) ?>" class="button button--alternative"><?php esc_html_e('Approfondisci', 'rossi-associati'); ?></a>
            <?php endif; ?>

            <button type="button" class="button button--accept"><?php esc_html_e('Accetta', 'rossi-associati'); ?></button>

          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php wp_footer(); ?>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-9111827-39', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
