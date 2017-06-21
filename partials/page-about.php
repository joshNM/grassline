<section class="About-pg l-island">
    <div class="container">
        <?php echo do_shortcode( '[breadcrumb]' );  ?>
        <h1><?php the_title(); ?></h1>
        <div class="row">
            <div class="col-md-6">
                <?php while(have_posts()) : the_post()?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2362.798028921086!2d-1.6136226841486987!3d53.686224980051605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bdf94d83b514b%3A0x2cf80d0fb0b96543!2sGrassline+Sports+Line+Marking+Liquids!5e0!3m2!1sen!2suk!4v1497447003352" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="About-pg__links coast-n">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="" class="About__link">
                        Our Approach >
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="" class="About__link">
                        Our Approach >
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="" class="About__link">
                        Our Approach >
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>