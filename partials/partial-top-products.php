<section class="Top-Products">
    <div class="Top-Products__header">
        <div class="container">
            <h2>Top Selling</h2>
        </div>
    </div>
    <div class="Products l-island">
        <div class="container">
            <div class="row">
                <?php
                $args = array(
                'post_type' => 'product',
                'posts_per_page' => 3,
                'meta_key' => 'total_sales',
                'orderby' => 'meta_value_num',
                );
                $bestSelling = new WP_Query( $args );
                if ( $bestSelling->have_posts() ) {
                while ( $bestSelling->have_posts() ) : $bestSelling->the_post();
                $_product = wc_get_product( get_the_ID());
                $regular_price = $_product->get_regular_price();
                $sale_price = $_product->get_sale_price();
                ?>
                    <div class="col-md-4 Product">
                        <a href="<?php the_permalink(); ?>">
                        <div class="Product__img">
                            <img src="<?php the_post_thumbnail_url(); ?>">
                            <?php if ($sale_price): ?>
                                <img class="Product__sale-img" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sale.png">
                            <?php endif ?>
                        </div>
                        
                        <h3><?php the_title(); ?></h2>
                        <?php if ($sale_price): ?>
                            <h4>SALE - £<?php echo $sale_price; ?></h4>
                        <?php else : ?>
                            <h4>£<?php echo $regular_price; ?></h4>
                        <?php endif; ?>
                        
                        <a href="<?php the_permalink(); ?>" class="Button Button--blue">Read More</a>
                        </a>
                    </div>
                <?php
                endwhile;
                } else {
                echo __( 'No products found' );
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
    
</section>