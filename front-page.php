<?php get_header(); ?>  

<body <?php body_class(); ?>>

<!-- Main banner area -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row cover-content">
      <div class="col cover" data-aos="fade-right">
        <h1 class="display-4">Shape Your Digital Landscape</h1>
          <p class="cover">Wordpress development and technical support with no surprises.</p>
          <a href="#"><button type="button" class="btn btn-primary px-4 mx-auto cta">Get In Touch</button></a>
      </div>
      <div class="col cover-image" data-aos="fade-left">
          <img class="cover-image" src="wp-content\themes\dbwp\assets\cover-text-image.svg" height="auto"></a>
      </div>
    </div>
  </div>
  </div>
</div>

<?php get_template_part('template-parts/usp-section'); ?>
<?php get_template_part('template-parts/contact-form'); ?>

<?php get_footer(); ?>

