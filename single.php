<?php get_header(); ?>
<body <?php body_class(); ?>>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article>
                    <h1><?php the_title(); ?></h1>
                    <div class="post-meta">
                        <span><?php _e( 'Posted on', 'textdomain' ); ?> <?php the_date(); ?> <?php _e( 'by', 'textdomain' ); ?> <?php the_author(); ?></span>
                    </div>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
