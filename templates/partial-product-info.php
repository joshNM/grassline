<section class="Product-info l-island">

    <div class="Toggle">
        <div class="Toggle__title">
            <h2>Description</h2>
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
        <div class="Toggle__info">
            <?php the_content(); ?>
        </div>
    </div>
    <div class="Toggle">
        <div class="Toggle__title">
            <h2>Weight</h2>
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
        <div class="Toggle__info">
            <?php global $product; ?>
            <?php echo '<p>Product weight: ' . $product->weight . 'KG</p>'; ?>
        </div>
    </div>
    <div class="Toggle" id="reviews">
        <div class="Toggle__title">
            <h2>Reviews</h2>
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
        <div class="Toggle__info">
            <?php comments_template(); ?>
        </div>
    </div>
    <div class="Toggle">
        <div class="Toggle__title">
            <h2>Delivery</h2>
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
        <div class="Toggle__info">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
    <div class="Toggle">
        <div class="Toggle__title">
            <h2>T&Cs</h2>
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
        <div class="Toggle__info">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</section>