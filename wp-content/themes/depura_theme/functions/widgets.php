<?php

function bst_widgets_init() {

  /*
  Sidebar (one widget area)
   */
  register_sidebar( array(
    'name'            => __( 'Sidebar', 'bst' ),
    'id'              => 'sidebar-widget-area',
    'description'     => __( 'The sidebar widget area', 'bst' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );

  /*
  Footer Left (three widget areas)
   */
  register_sidebar( array(
    'name'            => __( 'Footer Left', 'bst' ),
    'id'              => 'footer-widget-area-left',
    'description'     => __( 'The footer left widget area', 'bst' ),
    'before_widget'   => '<div class="%1$s %2$s main-footer__widget body body--1">',
    'after_widget'    => '</div>',
    'before_title'    => '<h4 class="headline headline--5 headline--green">',
    'after_title'     => '</h4>',
  ) );

   /*
  Footer Right (three widget areas)
   */
  register_sidebar( array(
    'name'            => __( 'Footer Right', 'bst' ),
    'id'              => 'footer-widget-area-right',
    'description'     => __( 'The footer right widget area', 'bst' ),
    'before_widget'   => '<div class="%1$s %2$s main-footer__widget body body--1">',
    'after_widget'    => '</div>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );

   /*
  Footer Bottom (three widget areas)
   */
  register_sidebar( array(
    'name'            => __( 'Footer bottom', 'bst' ),
    'id'              => 'footer-widget-area-bottom',
    'description'     => __( 'The footer bottom widget area', 'bst' ),
    'before_widget'   => '<div class="%1$s %2$s main-footer__widget body body--1">',
    'after_widget'    => '</div>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );


}
add_action( 'widgets_init', 'bst_widgets_init' );
