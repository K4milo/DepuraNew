<?php get_header(); ?>

<div class="container">
  <div class="row projects__content">
    <div class="col-md-7">
      <div class="js-carousel--1 projects__slider">
        <?php
        while( have_rows('project_gallery') ) : the_row();
            $image = get_sub_field('project_gallery__image');
            ?>
          <figure class="project-carousel__item image-ar image-ar--32">
            <img src="<?php echo $image['url']; ?>"
              alt="<?php echo $image['alt']; ?>">
          </figure>
            <?php
        endwhile;
        ?>
      </div>
    </div>
    <div class="col-md-5">
      <h3 class="headline headline--3"><?php the_title(); ?></h3>
      <div class="project__content body body--1">
        <?php the_content(); ?>
      </div>
    </div>
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
