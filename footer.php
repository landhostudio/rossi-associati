    <footer role="contentinfo" class="footer">
      <div class="container">
        <p>&copy; 2014 – <?php echo date('Y'); ?> <?php bloginfo('name'); ?> – <?php bloginfo('description'); ?>. <?php if (get_field('options_footer_copyright', option)): ?> <?php the_field('options_footer_copyright', option); ?><?php endif; ?><?php if (get_field('options_footer_privacy_text', option) && get_field('options_footer_privacy_url', option)): ?> <a href="<?php the_field('options_footer_privacy_url', option); ?>" target="_blank" rel="nofollow"><?php the_field('options_footer_privacy_text', option); ?></a><?php endif; ?></p>
      </div>
    </footer>

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
