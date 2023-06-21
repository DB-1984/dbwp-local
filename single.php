<?php get_header(); ?>
<body <?php body_class(); ?>>

<div class="container">
  <div class="row">
    <div class="col">
      <?php if (has_post_thumbnail()): ?>
        <div class="featured-image">
          <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article>
                  <div class="single-title-meta">
                    <h1><?php the_title(); ?></h1>
                    <hr>
                    <div class="row post-meta">
                    <span class="author-img"><img src="/wp-content/uploads/2023/06/20230209_092133-01-01-1-scaled-e1687336850479.jpeg"></span>
                    <span class="post-meta-date"><?php _e( 'Posted on', 'textdomain' ); ?> <strong><?php the_date(); ?></strong> </span></br>
                        <span class="post-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></span>
                    </div>
                  </div>
                  <div class="row main-post-content">
                  <?php the_content(); ?>
                </div>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
