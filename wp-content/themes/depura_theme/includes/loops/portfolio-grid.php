<?php

/**
 * Portfolio carousel
 */

$args = array(
  'post_type' => 'proyectos',
  'posts_per_page' => -1
);

$query = new WP_Query($args);

if ($query->have_posts() ) : ?>
<section class="projects projects--grid">
  <div class="container">
    <div class="row">
    <?php
    while($query->have_posts()):$query->the_post();
        $terms = wp_get_post_terms(get_the_ID(), 'tipo_proyecto');
        ?>
      <div class="col-md-4 projects__wrapper">
        <div class="projects__item projects__item--grid">
          <figure class="projects__image image-ar image-ar--11">
            <?php the_post_thumbnail('large')?>
          </figure>
          <div class="projects__caption">
            <a href="<?php the_permalink(); ?>">
              <h3 class="headline headline--3 headline--white">
                <?php the_title(); ?>
              </h3>
              <h4 class="body body--2 body--white"><?php echo $terms[0]->name ?></h4>
            </a>
          </div>
        </div>
      </div>
        <?php
    endwhile;
    ?>
    </div>
  </div>
</section>
    <?php
endif;
