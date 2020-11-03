<?php

/**
 * Brand block
 */

$taxonomy_reference = 'clientes';
$args_tax_ref = array (
    'orderby' => 'id',
    'order' => 'ASC',
    'hide_empty' => false
);

$brands = get_terms($taxonomy_reference, $args_tax_ref);

if ($brands) : ?>
<section class="section--secondary clients">
  <div class="container">
    <header class="section__headline text-center">
      <h2 class="subtitle subtitle--1">Algunos de nuestros clientes</h2>
    </header>
    <ul class="clients__list">
      <?php
        foreach ($brands as $brand):
            $logo = get_field('taxonomy_image', $taxonomy_reference . '_' . $brand->term_id);
            ?>
      <li class="clients__item">
        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $brand->name; ?>">
      </li>
            <?php
        endforeach; ?>
    </ul>
    <div class="clients__bottom">
      <p class="body body--2 body--bd">y más de 40 empresas más.</p>
    </div>
  </div>
</section>
    <?php
endif;
