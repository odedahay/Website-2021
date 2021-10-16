<?php get_header(); ?>

<section class="categories">
        <div class="category-item" style="background-image: url(<?php echo get_theme_file_uri('images/leisure.jpg');?>);">
            <div class="category-item-inner">
                <a href="#" class="category-item-link" id="open-leisure">
                    <div>
                        Leisure
                    </div>
                </a>
            </div>
        </div>
        <div class="category-item" style="background-image: url(<?php echo get_theme_file_uri('images/about-me1.jpg') ?>);">
            <div class="category-item-inner">
                <a href="<?php echo site_url('/about-me'); ?>" class="category-item-link">
                    <div>
                        About Me
                    </div>
                </a>
            </div>
        </div>

        <div class="category-item" style="background-image: url(<?php echo get_theme_file_uri('images/home-banner.jpg')?>);">
            <div class="category-item-inner">
                <a href="<?php echo site_url('/contact');?>" class="category-item-link">
                    <div>
                       Contact Me
                    </div>
                </a>
            </div>
        </div>
        <div
            class="category-item"
            style="background-image: url(<?php echo get_theme_file_uri('images/portfolio.jpg'); ?>);"
        >
            <div class="category-item-inner">
                <a href="<?php echo site_url('/old/web.html');?>" class="category-item-link">
                    <div>
                       My Works
                    </div>
                </a>
            </div>
        </div>
        <div
            class="category-item"
            style="background-image: url(<?php echo get_theme_file_uri('images/designs.jpg'); ?>);"
        >
            <div class="category-item-inner">
                <a href="<?php echo site_url('/works');?>" class="category-item-link">
                    <div>
                       Design Process
                    </div>
                </a>
            </div>
        </div>

    </section>
    <h2 class="featured-products-title">
       Latest Works
    </h2>

    <section class="featured-products">
        <?php
            $homepagePosts = new WP_Query(array(
                'post_per_page' => 3,
                'post_type' => 'post',
            ));

        while($homepagePosts->have_posts()){
            $homepagePosts->the_post(); ?>

            <div class="featured-product-item">

                <div style="background-image: url(<?php the_post_thumbnail_url();?>);"
                    class="featured-product-item-image">
                </div>
                <p class="title pt-15">
                <?php the_title(); ?>
                </p>
                <p class="pt-15">
                    <a href="<?php the_permalink(); ?>" class="button front-btn">
                        Read More
                    </a>
                </p>

            </div>

        <?php } wp_reset_postdata(); ?>


    </section>

    <h3 class="featured-products-subtitle">
        <a href="<?php echo site_url('/works'); ?>">View more</a>
    </h3>

    <section class="section-areas">
            <ul class="areas-container">
                <li class="area">

                </li>
            </ul>
    </section>

<?php get_footer();

?>
