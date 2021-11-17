<?php
/**
 * Home cards component
 *
*/

$featured_cards = get_field('featured_cards');

if($featured_cards) : ?>
  <section id="homeCards" class="featured-cards featured-cards--home">
    <div class="container-fluid">
      <div class="row">
    <?php
    while( have_rows('featured_cards') ) : the_row();

        $featured_cards_image = get_sub_field('featured_cards_image');
        $featured_cards_headline = get_sub_field('featured_cards_headline');
        $featured_cards_body = get_sub_field('featured_cards_body');
        $featured_cards_bottom = get_sub_field('featured_cards_bottom'); ?>

        <div class="col-md-6 featured-cards__item">
          <div class="featured-cards__caption">
            <h3 class="subtitle subtitle--1">
              <?php echo $featured_cards_headline; ?>
            </h3>
            <figure class="featured-cards__icon">
              <img src="<?php echo $featured_cards_image['url']; ?>"
                  alt="<?php echo $featured_cards_image['alt']; ?>"/>
            </figure>
            <div class="featured-cards__text">
              <?php echo $featured_cards_body; ?>
            </div>
            <div class="featured-cards__bottom">
              <span class="highlight">
                <span class="typewriter"><?php echo $featured_cards_bottom; ?></span>
              </span>
            </div>
          </div>
        </div>
        <?php
    endwhile; ?>
      </div>
    </div>
  </section>
    <?php
endif;
