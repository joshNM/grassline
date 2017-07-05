<section class="Product-Categories l-island">
    <div class="container">
        <div class="row">
        <?php
          $taxonomy     = 'product_cat';
          $orderby      = 'menu_order';  
          $show_count   = 0;      // 1 for yes, 0 for no
          $pad_counts   = 0;      // 1 for yes, 0 for no
          $hierarchical = 1;      // 1 for yes, 0 for no  
          $title        = '';  
          $empty        = 0;
          $args = array(
                 'taxonomy'     => $taxonomy,
                 'orderby'      => $orderby,
                 'show_count'   => $show_count,
                 'pad_counts'   => $pad_counts,
                 'hierarchical' => $hierarchical,
                 'title_li'     => $title,
                 'hide_empty'   => $empty
          );
         $all_categories = get_categories( $args );
         foreach ($all_categories as $cat) :
            if($cat->category_parent == 0) :
                $category_id = $cat->term_id;   
                $thumbnail_id = get_woocommerce_term_meta( $category_id, 'thumbnail_id', true ); 
                $image = wp_get_attachment_url( $thumbnail_id );
        ?>
           <div class="col-sm-6 col-md-4">
                <div class="Category" style="background: url(<?php echo $image; ?>);background-size: cover;background-position: center top;">
                    <h2><a href="<?php echo get_term_link($cat->slug, 'product_cat'); ?>"><?php echo $cat->name ?></a></h2>
                </div>
            </div>
        <?php 
            endif;
        endforeach;
        ?>
        </div>
    </div>
</section>