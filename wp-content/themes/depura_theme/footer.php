<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package depura
 */

?>
<footer class="main-footer">
  <div class="container">
    <div class="main-footer__top">
      <div class="row">
        <div class="col-md-6">
          <div class="main-footer__left">
            <?php dynamic_sidebar('footer-widget-area-left');?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="main-footer__right">
            <?php dynamic_sidebar('footer-widget-area-right');?>
          </div>
        </div>
      </div>
    </div>
    <div class="main-footer__bottom">
      <?php dynamic_sidebar('footer-widget-area-bottom');?>
    </div>
  </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
