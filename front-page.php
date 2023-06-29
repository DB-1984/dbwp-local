<?php get_header(); ?>  

<body <?php body_class(); ?>>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-6 cover" data-aos="fade-right">
        <h1 class="display-4">Shape Your Digital Landscape</h1>
        <p class="cover">Wordpress development and technical support <span class="text-highlight">with no surprises</span>.</p>
        <a href="#contact-form-anchor"><button type="button" class="btn btn-primary px-4 mx-auto cta"><p>Get In Touch</p></button></a>      </div>
      <div class="col-md-6 d-flex cover-image" data-aos="fade-left">
        <img src="wp-content\themes\dbwp\assets\cover-text-image.svg" height="auto" class="img-fluid cover-image" alt="Image">
      </div>
    </div>
  </div>
</div>

<?php get_template_part('template-parts/usp-section'); ?>
<?php get_template_part('template-parts/contact-form'); ?>

<?php get_footer(); ?>

<!-- align-items-center justify-content-center justify-content-md-start"-->