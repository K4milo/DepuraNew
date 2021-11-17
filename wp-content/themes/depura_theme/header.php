<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=2.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="hfeed site">
    <header id="masthead" class="site-header py-0" role="banner">
      <nav class="site-header__nav navbar navbar-expand-lg navbar-default js-menu">
        <div class="container-fluid">
          <div class="header w-100 row mx-auto">
              <div class="navbar-header col-auto p-0">
                <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
                  <h1 class="brand-image">Depura Creatividad</h1>
                </a>
                <button class="navbar-toggler site-header__btn js-menu-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarTogglerMain"
                  aria-controls="navbarTogglerMain"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon">
                    <span class="material-icons">menu</span>
                  </span>
                </button>
              </div>
              <div class="collapse navbar-collapse col-3 col-md-auto p-0"
                  id="navbarTogglerMain">
                <div class="main-menu">
                  <div class="main-menu-item main-menu__left">
                    <?php
                        wp_nav_menu(
                            array (
                              'theme_location'    => 'navbar-left',
                              'menu_class'        => 'navbar-nav--left'
                            )
                        );?>
                  </div>
                </div>
            </div><!-- /.navbar-collapse -->
          </div>
        </div><!-- /.container -->
      </nav>
    </header><!-- #masthead -->
