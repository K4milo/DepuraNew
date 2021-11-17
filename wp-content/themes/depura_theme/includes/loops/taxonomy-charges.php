<?php

/**
 * Charges taxonomies
 */

$taxonomy_reference = 'division';
$args_tax_ref = array (
    'hide_empty' => false
);

$charges = get_terms($taxonomy_reference, $args_tax_ref);

if ($charges) : ?>
<section class="charges">
  <div class="container">
    <header class="charges__headline text-center">
      <h2 class="headline headline--3">Conoce el parche completo</h2>
    </header>
    <div class="charges__list row">
      <?php
        foreach ($charges as $charge):
            $image = get_field('taxonomy_image', $taxonomy_reference . '_' . $charge->term_id);
            ?>
      <div class="col-md-4">
        <div class="charges__item">
          <figure class="charges__image image-ar image-ar--11">
            <img src="<?php echo $image['url']; ?>"
                  alt="imagen de fondo para <?php echo $charge->name; ?>"/>
          </figure>
          <div class="charges__caption text-center">
            <a href="/division/<?php echo $charge->slug; ?>">
              <h3 class="subtitle subtitle--1 subtitle--white">
                <?php echo $charge->name; ?>
              </h3>
            </a>
          </div>
        </div>
      </div>
            <?php
        endforeach; ?>
    </div>
  </div>
</section>
    <?php
endif;
