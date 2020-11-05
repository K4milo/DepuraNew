<?php
/**
 * Team members posts
 *
 * @package Depura
*/

$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
$args = array(
  'post_type' => 'equipo',
  'tax_query' => array(
      array(
          'taxonomy' => 'division',
          'field'    => 'slug',
          'terms'    => $term->slug,
      ),
  ),
);

$query = new WP_Query($args);

if ($query->have_posts()) : ?>

<section class="team-members">
  <div class="container">
    <div class="row justify-content-center">
      <?php
        while($query->have_posts()):$query->the_post();?>
      <div class="col-md-4">
        <div class="team-members__item">
          <figure class="team-members__image">
            <?php the_post_thumbnail('full'); ?>
          </figure>
          <div class="team-members__caption">
            <span class="highlight highlight--1">
              <span class="typewriter">"<?php the_field('member_alias') ?>"</span>
            </span>
            <h3 class="headline headline--4"><?php the_title(); ?></h3>
            <div class="body body--purple">
              <?php the_field('member_position');?>
            </div>
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
