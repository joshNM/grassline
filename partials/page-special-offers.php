<section class="Special-offers l-island">
    <div class="container">
        <?php echo do_shortcode( '[breadcrumb]' );  ?>
        <h1><?php the_title(); ?></h1>
        <ul class="Offers-wrap">
        <?php 
            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => -1,
                'meta_query'     => array(
                    'relation' => 'OR',
                    array( // Simple products type
                        'key'           => '_sale_price',
                        'value'         => 0,
                        'compare'       => '>',
                        'type'          => 'numeric'
                    ),
                    array( // Variable products type
                        'key'           => '_min_variation_sale_price',
                        'value'         => 0,
                        'compare'       => '>',
                        'type'          => 'numeric'
                    )
                )
            );
            $offerProducts = new WP_Query($args);
        ?>
        <?php while($offerProducts->have_posts()) : $offerProducts->the_post(); ?>
            <?php wc_get_template_part( 'content', 'product' ); ?>
        <?php endwhile; ?>
        <div style="clear: both;"></div>
        </ul>
    </div>
</section>