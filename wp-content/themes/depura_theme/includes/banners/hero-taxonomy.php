<?php
/**
 * Hero taxonomy banner
 *
 * @package Depura
*/

$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
$term_reference = get_query_var('taxonomy');
$banner_static = get_field('taxonomy_static_banner', $term_reference . '_' . $term->term_id);
$banner_animated = get_field('taxonomy_animated_banner', $term_reference . '_' . $term->term_id);

?>

<section class="hero-banner hero-banner--taxonomy">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="hero-banner__animation">
          <?php if($banner_animated ) : ?>
            <lottie-player
            src="<?php echo $banner_animated; ?>"
            background="transparent"  speed="1" loop autoplay></lottie-player>
          <?php elseif($banner_static ) : ?>
            <img src="<?php echo $banner_static['url']; ?>"
            alt="Animación <?php echo $term->name; ?>">
          <?php else: ?>
          <img src="<?php echo bloginfo('template_url'); ?>/images/dummy-taxonomy.png"
            alt="Animación <?php echo $term->name; ?>">
          <?php endif; ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="hero-banner__side-text">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
