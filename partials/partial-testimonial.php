<section class="Testimonial">
    <div class="container">
        <!-- Swiper -->
        <div class="swiper-container swiper-testimonials">
            <div class="swiper-wrapper">
            <?php $testimonials = new WP_Query(['post_type' => 'testimonial', 'posts_per_page' => 3]); ?>
            <?php while($testimonials->have_posts()) : $testimonials->the_post(); ?> 
                <div class="swiper-slide">
                    <h2>"<?php echo get_the_content(); ?>"</h2>
                    <span><?php the_title(); ?></span>
                </div>
            <?php endwhile; ?>
            </div>
        </div>

    </div>
</section>