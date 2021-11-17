<?php
/**
 * Hero banner component
 *
*/

$hero_banner = get_field('hero_banner');

if($hero_banner) : ?>
  <section class="hero-banner hero-banner--home">
    <?php
    while( have_rows('hero_banner') ) : the_row();

        $hero_banner_image = get_sub_field('hero_banner_image');
        $hero_banner_headline = get_sub_field('hero_banner_headline');
        $hero_banner_body = get_sub_field('hero_banner_body');
        $hero_banner_video = get_sub_field('hero_banner_video'); ?>

    <div class="container-fluid">
      <div class="row hero-banner__image-bg"
            style="background-image: url(<?php echo $hero_banner_image['url']; ?>)">
        <?php
        if($hero_banner_video) : ?>
        <div class="hero-banner__video">
            <?php echo $hero_banner_video; ?>
        </div>
            <?php
        endif;
        ?>
        <div class="hero-banner__caption">
          <div class="hero-banner__icon-top">
            <img src="<?php bloginfo('template_url'); ?>/images/logo-icon.svg" alt="Icono de depura">
          </div>
          <h2 class="headline headline--1 headline--white">
            <span class="typewriter--hero"><?php echo $hero_banner_headline; ?></span><span class="headline--green">.</span>
          </h2>
          <div class="body body--white">
            <?php echo $hero_banner_body; ?>
          </div>
          <div class="hero-banner__icon-bottom">
            <a href="#homeCards" class="d-inline-block"><img src="<?php bloginfo('template_url'); ?>/images/scroll-down.svg" width="51" height="113" alt="Scroll down"></a>
          </div>
        </div>
      </div>
    </div>
        <?php
    endwhile; ?>
  </section>
    <?php
endif;
