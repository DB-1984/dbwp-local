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
                    <h1 class="post-h1"><?php the_title(); ?></h1>
                    <hr>
                    <div class="post-meta">
                        <span class="post-meta-heading"><?php _e( 'Posted on', 'textdomain' ); ?> <?php the_date(); ?> </span></br>
                        <span class="post-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 50, '...'); ?></span>
                    </div>
                  </div>
                <?php the_content(); ?>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>

<?php wp_enqueue_script('restAPItest', get_template_directory_uri() . '/src/modules/restAPItest.js', array(), '1.0', true); ?>

<button id="fetchButton">Fetch Posts</button>
<div id="postContainer"></div>

<?php get_footer(); ?>
