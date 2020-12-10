<?php
/**
 * Home cards component
 *
*/

$contact_items = get_field('contact_items');

if($contact_items) : ?>
  <section id="contactCards" class="">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-6 section--secondary">
          <div class="featured-icons">
            <header class="section__headline">
              <h3 class="subtitle subtitle--1 subtitle--purple">
                DATOS DE CONTACTO
              </h3>
            </header>
      <?php
      while( have_rows('contact_items') ) : the_row();

          $contact_items_icon = get_sub_field('contact_items_icon');
          $contact_items_description = get_sub_field('contact_items_description');
       ?>
       <div class="featured-icons__caption">
         <figure>
           <img src="<?php echo $contact_items_icon ?>" alt="">
         </figure>
         <div class="featured-icons__caption-info">
           <?php echo $contact_items_description ?>
         </div>
       </div>

          <?php
      endwhile; ?>
          </div>
        </div>

          <div class="col-md-6">
            <div class="featured-icons">
              <div class="contacto__wrapper">
                  <div class="formulario-contacto"><?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?></div>
              </div>
            </div>

          </div>
      </div>
    </div>
  </section>
    <?php
endif;
