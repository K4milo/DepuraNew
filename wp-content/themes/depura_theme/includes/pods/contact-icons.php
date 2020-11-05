<?php
/**
 * Home cards component
 *
*/

$contact_items = get_field('contact_items');

if($contact_items) : ?>
  <section id="homeCards" class="featured-cards featured-cards--home">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 featured-icnos">
    <?php
    while( have_rows('contact_items') ) : the_row();

        $contact_items_icon = get_sub_field('contact_items_icon');
        $contact_items_description = get_sub_field('contact_items_description');
     ?>

        <img src="<?php echo $contact_items_icon ?>" alt="">
        <?php echo $contact_items_description ?>
        <?php
    endwhile; ?>
        </div>

          <div class="col-md-6">
            <div class="contacto__wrapper">
                <div class="formulario-contacto"><?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?></div>
            </div>
          </div>
      </div>
    </div>
  </section>
    <?php
endif;
