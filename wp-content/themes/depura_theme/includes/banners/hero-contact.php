

  <section class="hero-banner hero-banner--contact">

    <div class="container-fluid">
        <div class="hero-banner__caption">
          <div class="hero-banner__icon-top">
            <img src="<?php bloginfo('template_url'); ?>/images/logo-icon.svg" alt="Icono de depura">
          </div>
          <h2 class="headline headline--1 headline--white">
            <?php  the_field('contact_banner_headline') ?><span class="headline--green">.</span>
          </h2>
          <div class="body body--white">
            <?php the_field('hero_banner_contact') ?>
          </div>
        </div>
      </div>
    </div>
  </section>
