<?php

	// Filter component by date
	setlocale(LC_ALL,"es_ES");

	$month = $_POST['register_month'];
	$year = $_POST['register_year'];
	$cat = $_POST['register_cat'];
	$date = DateTime::createFromFormat('!m', $month);
	$monthName = strftime('%B', mktime(0, 0, 0, $month));
  $args = array (
  'post_type' => 'post',
  'posts_per_page' => 9,
  'paged'          => $paged,
  'category_name' => $cat,
);
?>

<section id="MainPost" class="section--secondary">
	<div class="container pod-news">
		<div id="postsWrapper" class="charges__list row">

			<?php
				// Filter component by date

				$query = new WP_Query( $args );


				if($query->have_posts()):

				while ( $query->have_posts() ) : $query->the_post();

					$def = '#d84e65';
					$color = get_field('color_item');
					$hover;

					if ($color) {
						$hover = get_field('color_item');
					} else {
						$hover = $def;
					}

			?>
				<article class="col-md-4">
					<figure class="pod-news--thumb">
						<a href="<?php the_permalink(); ?>"> <img src="<?php the_post_thumbnail_url('medium'); ?>" alt=""> </a>
					</figure>
          <div class="pod-news--caption">
            <h3>
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h3>
            <h4>
              <?php the_time('F j, Y'); ?>
            </h4>
          </div>
          <div class="">
            <?php the_excerpt(); ?>
          </div>
          <div class="">
            <a href="<?php the_permalink(); ?>">
              <p>Leer más</p>
            </a>
          </div>

				</article>
			<?php
				endwhile;
        endif;

				wp_reset_query();
			?>


		</div>
	</div>
</section>
