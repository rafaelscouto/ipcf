
<?php get_template_part("template-parts/sections/bottom-info"); ?>
<?php get_template_part("template-parts/sections/bottom-menus"); ?>
<footer id="footer">
  <div class="container">
    <div class="d-flex justify-content-between">
      <div class="footer-copyright">
        <?php
        $footer_copy = str_replace('[Y]', date('Y'), get_theme_mod('footer_copy'));
        echo '<p class="p-0 m-0">' . $footer_copy . '</p>';
        ?>
      </div>
      <?php
        $icon_instagram = get_theme_mod('footer_social_media_instagram_icon');
        $icon_facebook = get_theme_mod('footer_social_media_facebook_icon');
        $icon_youtube = get_theme_mod('footer_social_media_youtube_icon');
        $icon_twitter = get_theme_mod('footer_social_media_twitter_icon');

        $url_instagram = get_theme_mod('footer_social_media_instagram_url');
        $url_facebook = get_theme_mod('footer_social_media_facebook_url');
        $url_youtube = get_theme_mod('footer_social_media_youtube_url');
        $url_twitter = get_theme_mod('footer_social_media_twitter_url');
        ?>
        <div class="footer-social-media d-flex">
          <a href="<?php echo $url_instagram; ?>" class="btn" target="_blank"><?php echo $icon_instagram; ?></a>
          <a href="<?php echo $url_facebook; ?>" class="btn" target="_blank"><?php echo $icon_facebook; ?></a>
          <a href="<?php echo $url_twitter; ?>" class="btn" target="_blank"><?php echo $icon_twitter; ?></a>
          <a href="<?php echo $url_youtube; ?>" class="btn" target="_blank"><?php echo $icon_youtube; ?></a>
        </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>