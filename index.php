<?php get_header(); ?>  
<body <?php body_class(); ?>>
    <div class="container">
        <div class="row blog-index">
        <h1 class="blog-title">The Blog</h1>
        <p class="blog-intro">Tips, tricks, and articles about all things <span class="text-highlight" style="color: #fdbb0a">WordPress/WooCommerce</span>.</p>
        </div>
        <div class="row">
            <?php 
            $count = 0;
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                if ($count % 3 === 0) {
                    echo '<div class="row mx-auto">';
                }
                ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <?php if (has_post_thumbnail()): ?>
                            <div class="featured-image blog-index">
                                <?php the_post_thumbnail('large', array('class' => 'card-img-top img-fluid')); ?>
                            </div>
                        <?php endif; ?>
                        <div class="card-body">
                            <h2 class="card-title"><?php the_title(); ?></h2>
                            <p class="card-text"><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary"><p>Read More</p></a>
                        </div>
                    </div>
                </div>
                <?php
                $count++;
                if ($count % 3 === 0) {
                    echo '</div>';
                }
            endwhile; 
            if ($count % 3 !== 0) :
                echo '</div>';
            endif;
            else :
                echo '<div class="col-md-12">
                    <p>' . esc_html__( 'Sorry, no posts were found.', 'textdomain' ) . '</p>
                </div>';
            endif;
            ?>
        </div>
    </div>
<?php get_footer(); ?>
