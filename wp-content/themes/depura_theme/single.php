<?php get_header();?>

<div class="container">
  <div class="row">

    <div class="col-xs-12 col-md-12">
      <div id="content" role="main" class="col-md-12">
        <figure class="text-center">
          <?php the_post_thumbnail('large')?>
        </figure>
        <h3 class="headline headline--4">
          <?php the_title(); ?>
        </h3>
				<?php the_content(); ?>
      </div><!-- /#content -->
    </div>
  </div><!-- /.row -->

</div><!-- /.container -->
<div class="">
  <?php get_template_part('includes/loops/news', 'recommended'); ?>
</div>

<?php get_footer(); ?>
