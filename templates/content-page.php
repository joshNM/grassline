<div class="Page l-island">
    <div class="container">
        <?php echo do_shortcode( '[breadcrumb]' );  ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div> 
</div>
