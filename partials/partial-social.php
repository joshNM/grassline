<div class="Social l-island">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Company News</h2>
                <?php $newsItem = new WP_Query(['post_type' => 'post', 'posts_per_page' => 1]); ?>
                <?php while($newsItem->have_posts()) : $newsItem->the_post(); ?>
                <time><?php echo get_the_date(); ?></time>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt(); ?>
                <?php endwhile; wp_reset_query(); ?>

            </div>
            <div class="col-md-4">
                <h2>Twitter Updates</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
            </div>
            <div class="col-md-4">
                <h2>Facebook Updates</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
            </div>
        </div>
    </div>
</div>