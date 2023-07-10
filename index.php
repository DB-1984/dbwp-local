<?php get_header(); ?>  
<body <?php body_class(); ?>>
<div class="row blog-index">
    <h1 class="blog-title">The Blog</h1>
    <p class="blog-intro">Tips, tricks, and articles about all things <span class="text-highlight">Wordpress/WooCommerce</span>.</p>
    <?php 
    $count = 0;
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        if ($count % 4 === 0) {
            echo '<div class="row">';
        }
        ?>
        <div class="col-md-3">
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
        <?php
        $count++;
        if ($count % 4 === 0) {
            echo '</div>';
        }
    endwhile; 
    if ($count % 4 !== 0) {
        echo '</div>';
    }
    else {
        echo '<div class="col-md-12">
            <p>' . esc_html__( 'Sorry, no posts were found.', 'textdomain' ) . '</p>
        </div>';
    }
   
    endif;
    ?>
</div>

<?php get_footer(); ?>
