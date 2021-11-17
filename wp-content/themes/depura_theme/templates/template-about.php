<?php

  /**
  *
  * Template name: About
  */

  get_header();
  get_template_part('includes/banners/hero', 'dark');
  get_template_part('includes/banners/content', 'small');
  get_template_part('includes/loops/taxonomy', 'charges');
  get_footer();
