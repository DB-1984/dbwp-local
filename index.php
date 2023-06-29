<?php get_header(); ?>  
<body <?php body_class(); ?>>
<div class="row blog-index">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                <div class="container">
                <div class="row">
                    <div class="col">
                    <?php if (has_post_thumbnail()): ?>
                        <div class="featured-image blog-index">
                        <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
                </div>
                    <h2 class="card-title"><?php the_title(); ?></h2>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary"><p>Read More</p></a>
                </div>
            </div>
        </div>
    <?php endwhile; else : ?>
        <div class="col-md-12">
            <p><?php esc_html_e( 'Sorry, no posts were found.', 'textdomain' ); ?></p>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>

