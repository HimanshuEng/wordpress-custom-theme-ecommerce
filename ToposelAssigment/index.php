<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero  text-center mt-5">

    <h1><?php the_field('hero_heading'); ?></h1>
    <p style="text-align: start;"><?php the_field('hero_description'); ?></p>

    <a href="<?php the_field('hero_button_link'); ?>" class="shop-btn">
        <?php the_field('hero_button_text'); ?>
    </a>

    
<!-- Stats / Counters -->
<div class="stats">

    <div class="stats-row">
        <div class="stat-box">
            <h3><?php the_field('international_brands'); ?></h3>
            <p>International Brands</p>
        </div>

        <div class="stat-box">
            <h3><?php the_field('quality_products'); ?></h3>
            <p>High-Quality Products</p>
        </div>
    </div>

    <div class="stats-row center">
        <div class="stat-box">
            <h3><?php the_field('happy_customers'); ?></h3>
            <p>Happy Customers</p>
        </div>
    </div>

</div>

     <?php 
    $hero_image = get_field('hero_image');
    if($hero_image): ?>
        <div class="hero-image-wrapper">
           <img src="<?php echo esc_url($hero_image['url']); ?>" 
     alt="<?php echo esc_attr($hero_image['alt']); ?>">
        </div>
    <?php endif; ?>

</section>


<!-- Brand Logos (NO REPEATER VERSION) -->
<section class="brand-section text-center ">
    <?php 
    for($i = 1; $i <= 5; $i++) {
        $logo = get_field('brand_logo_' . $i);
        if($logo) {
            echo '<img src="'.$logo['url'].'" style="height:50px; margin:15px;">';
        }
    }
    ?>
</section>


<!-- New Arrivals -->
<section class="new-arrivals">

    <h3 class="section-title">NEW ARRIVALS</h3>

    <div class="product-grid">

        <?php
        $args = array(
            'post_type' => 'products',
            'posts_per_page' => 4
        );
        $query = new WP_Query($args);

        if($query->have_posts()) :
            while($query->have_posts()) : $query->the_post();
        ?>

            <div class="product-card">

                <?php if(has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php endif; ?>

                <h5 class="product-title"><?php the_title(); ?></h5>
<!-- Static Rating -->
<div class="product-rating">
    ★★★★★ <span class="rating-number">(4.5)</span>
</div>
                <div class="product-price">
                    <strong>$<?php the_field('price'); ?></strong>
                    <span class="old-price">
                        $<?php the_field('old_price'); ?>
                    </span>
                </div>

            </div>

        <?php
            endwhile;
            wp_reset_postdata();
        else:
            echo "<p>No products found</p>";
        endif;
        ?>

    </div>
 <!-- View All Button -->
    <div class="view-all-wrapper">
        <a href="<?php echo get_post_type_archive_link('products'); ?>" class="view-all-btn">
            View All
        </a>
    </div>
</section>

<?php get_footer(); ?>
