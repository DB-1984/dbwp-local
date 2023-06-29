<!DOCTYPE html>

<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <title>DBWP.pro</title>
  </head>

    <header>
      <nav id="navbar_top" class="navbar navbar-expand-lg">
        <div class="container top-menu">
            <a class="navbar-brand" href="/">
              <div class="logo-vector"><p class="logo-font">]}</p>
                <!--img src="wp-content\themes\dbwp\assets\logo.svg" alt="DBWP" style="width:45px" height="auto"-->
              </div>
            </a>
              <div class="toggle-menu" data-toggle-menu data-bs-toggle="collapse" data-bs-target="#main_nav">
                Toggle menu
                <span class="menu__bar"></span>
                <span class="menu__bar"></span>
                <span class="menu__bar"></span>
              </div>
          <div class="collapse navbar-collapse"  id="main_nav">
             <li class="nav-item"><a class="nav-link <?php if(is_single() || is_home() && !is_front_page()) : echo "active-link"; endif;?>" href="<?php echo site_url('/blog'); ?>"> Blog </a></li>
             <li class="nav-item"><a class="nav-link" href="#"> About</a></li>
             <li class="nav-item"><a class="nav-link" href="#"> <span class="plugin-span">Plugins</span></a></li>  
             <a class="mk-search-trigger mk-fullscreen-trigger">
            <div id="search-button"><i class="fa fa-search"></i></div>
            </a>
            </ul>
          </div> <!-- navbar-collapse.// -->
        </div> <!-- container-fluid.// -->
      </nav>
    </header>

    <?php get_template_part('template-parts/overlay-search'); ?>

