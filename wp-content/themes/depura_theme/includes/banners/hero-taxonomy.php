<?php
/**
 * Hero taxonomy banner
 *
 * @package Depura
*/

$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
?>

<section class="hero-banner hero-banner--taxonomy">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="hero-banner__animation">
          <img src="<?php echo bloginfo('template_url'); ?>/images/dummy-taxonomy.png"
            alt="Animación <?php echo $term->name; ?>">
        </div>
      </div>
      <div class="col-md-6">
        <div class="hero-banner__side-text">
          <h2 class="headline headline--3"><?php echo $term->name; ?></h2>
          <div class="body body--2 body--lt"><?php echo $term->description; ?></div>
        </div>
      </div>
    </div>
  </div>
</section>
