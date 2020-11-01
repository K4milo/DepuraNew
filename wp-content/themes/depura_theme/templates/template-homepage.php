<?php

  /**
  *
  * Template name: Homepage
  */

  get_header();
  get_template_part('includes/banners/hero', 'home');
  get_template_part('includes/pods/home', 'cards');
  get_template_part('includes/pods/home', 'tiles');
  get_template_part('includes/loops/portfolio', 'carousel');
  get_template_part('includes/loops/news', 'related');
  get_template_part('includes/loops/taxonomy', 'brands');
  get_footer();
