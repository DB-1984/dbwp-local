<?php get_header(); ?>  
<body <?php body_class(); ?>>

<div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title"><?php the_title(); ?></h2>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
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

