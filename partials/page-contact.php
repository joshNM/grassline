<section class="Contact-page l-island">
    <div class="container">
        <?php echo do_shortcode( '[breadcrumb]' );  ?>
        <div class="row">
            <div class="col-md-6">
                <?php while(have_posts()) : the_post()?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
                <ul>
                    <li style="color: #878787;">T: <?php the_field('telephone_number', 'option'); ?></li>
                    <li style="color: #878787;">E: <a style="color: #878787;" href="mailto;<?php the_field('email_address', 'option'); ?>"><?php the_field('email_address', 'option'); ?></a></li>
                </ul>
                <p><?php the_field('address', 'option'); ?></p>
                <ul>
                    <li style="font-size: 20px; margin-right: 7px; display: inline-block;"><a style="color: #878787;" href="<?php the_field('facebook_url', 'option'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li style="font-size: 20px; display: inline-block;"><a style="color: #878787;" href="<?php the_field('twitter_url', 'option'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" name="" placeholder="Name">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="" placeholder="Email">
                    </div>
                    <div class="col-sm-12">
                        <input type="text" name="" placeholder="Subject">
                    </div>
                    <div class="col-sm-12">
                        <textarea placeholder="Message"></textarea>
                    </div>
                    <div class="col-sm-12">
                        <input type="submit" class="Button" name="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="Contact-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2362.7980289210846!2d-1.613622683784243!3d53.686224980051634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bdf94d83b514b%3A0x2cf80d0fb0b96543!2sGrassline+Sports+Line+Marking+Liquids!5e0!3m2!1sen!2suk!4v1498055677340" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>