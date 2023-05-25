<!DOCTYPE html>

<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <title>DBWP.pro</title>
  </head>

    <header>

    <?php get_template_part('template-parts/overlay-search'); ?>

      <nav id="navbar_top" class="navbar navbar-expand-lg">
        <div class="container top-menu">
            <a class="navbar-brand" href="/">
              <div class="logo-vector"><p class="logo-font">]}</p>
                <!--img src="wp-content\themes\dbwp\assets\logo.svg" alt="DBWP" style="width:45px" height="auto"-->
              </div></a>
              <div class="toggle-menu" data-toggle-menu data-bs-toggle="collapse" data-bs-target="#main_nav">
                Toggle menu
                <span class="menu__bar"></span>
                <span class="menu__bar"></span>
                <span class="menu__bar"></span>
              </div>
          <div class="collapse navbar-collapse"  id="main_nav">
            <ul class="navbar-nav ms-auto">
             <li class="nav-item"><a class="nav-link" href="#"> About Us </a></li>
             <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
             <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
             <a class="mk-search-trigger mk-fullscreen-trigger" href="#">
            <div id="search-button"><i class="fa fa-search"></i></div>
            </a>
            </ul>
          </div> <!-- navbar-collapse.// -->
        </div> <!-- container-fluid.// -->
      </nav>
    </header>

