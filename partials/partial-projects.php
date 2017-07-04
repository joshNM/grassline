<section class="Latest-projects l-island">
    <div class="container">
        <h2>Latest News</h2>
        <div class="row">
            <?php $articles = new WP_Query(['post_type' => 'post', 'posts_per_page' => 3]); ?>
            <?php while($articles->have_posts()) : $articles->the_post(); ?> 
            <div class="col-md-4">
                <div class="Project">
                    <?php if(has_post_thumbnail()) : ?>
                    <div class="Project__img">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                    </div>
                    <?php endif; ?>
                    <div class="Project__content">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="Button Button--blue">Read more</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
</section>