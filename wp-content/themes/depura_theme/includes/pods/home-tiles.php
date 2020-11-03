<?php
/**
 * Home tiles component
 *
*/

$focus_tiles = get_field('focus_tiles');

if($focus_tiles) : ?>
  <div class="focus-tiles focus-tiles--home">
    <div class="container">
      <div class="row">
        <header class="section__headline">
          <h3 class="d-inline-block
            subtitle subtitle--1 subtitle--green">Nuestros enfoques</h3>
        </header>
      </div>
      <div class="row">
    <?php
    while( have_rows('focus_tiles') ) : the_row();

          $focus_tiles_icon = get_sub_field('focus_tiles_icon');
          $focus_tiles_body = get_sub_field('focus_tiles_body');?>
        <div class="col-md-3 focus-tiles__item">
          <div class="focus-tiles__caption">
            <figure class="focus-tiles__icon">
              <img src="<?php echo $focus_tiles_icon['url']; ?>"
                  alt="<?php echo $focus_tiles_icon['alt']; ?>"/>
            </figure>
            <div class="focus-tiles__text">
              <?php echo $focus_tiles_body; ?>
            </div>
          </div>
        </div>
        <?php
    endwhile; ?>
      </div>
    </div>
  </div>
    <?php
endif;
