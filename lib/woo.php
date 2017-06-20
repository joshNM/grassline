<?php  
// Archive page edits
// 0. Add banner to shop page
function add_banner_to_shop_page(){
        get_template_part('partials/partial', 'jumbotron');
}
add_action( 'woocommerce_before_main_content', 'add_banner_to_shop_page', 10 );
// 1. Add wrapper to archive page ============================================================
function woocommerce_output_content_before_wrapper() {
    $before = '<div class="Archive l-island"><div class="container">';
    echo $before;
}
function woocommerce_output_content_after_wrapper() {
    $after = '</div></div>';
    echo $after;
}
add_action( 'woocommerce_before_main_content', 'woocommerce_output_content_before_wrapper', 10 );
add_action( 'woocommerce_after_main_content', 'woocommerce_output_content_after_wrapper', 10 );
// ============================================================================================
// 2. Remove woocommerce default sidebar
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
// =============================================================================================
// 3. Add sidebar before shop loop
function add_filter_sidebar(){
    echo '<div class="row">';
    echo '<div class="col-md-4">';
    echo do_shortcode('[facetwp facet="paint_type"]');
    echo '</div>';
}
add_action( 'woocommerce_before_shop_loop', 'add_filter_sidebar', 10 );

// 4. Add col-md-8 to products wrapper ==========================================
function add_wrapper_to_products_before(){
    echo '<div class="col-md-8">';
}
function add_wrapper_to_products_after(){
    echo '<div></div>';
}
add_action( 'woocommerce_before_shop_loop', 'add_wrapper_to_products_before', 10 );
add_action( 'woocommerce_before_shop_loop', 'add_wrapper_to_products_after', 10 );
// ================================================================================





