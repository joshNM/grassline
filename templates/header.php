<header class="Header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3">
               <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/header-logo.png" alt="Logo">
            </div>
            <div class="col-sm-12 col-md-9">
                <nav>
                    <?php
                    if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'List List--no-bullet']);
                    endif;
                    ?>
                </nav>
                <ul class="List">
                    <li><?php get_search_form(); ?></li>
                    <li><a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="Product-category-nav">
        <?php
        if (has_nav_menu('product_category')) :
        wp_nav_menu(['theme_location' => 'product_category', 'menu_class' => 'List List--no-bullet']);
        endif;
        ?>
    </div>

</header>
