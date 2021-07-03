<?php get_header(); ?>

<div class="bg-color-right">
    <section class="inner-page">
        
        <div class="portfolio-page">
            <div class="about-page-item">
                <?php while(have_posts()){
                    the_post(); ?>

                    <h1 class="portfolio-title"><?php the_title(); ?></h1>
                    <p class="post-date"><?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></P>
                    <?php the_post_thumbnail('worksSingle');  ?>
                    <p>&nbsp;</P>
                        <?php the_content();
                    ?>


                <?php } ?>
            </div>

            <div class="about-page-item">
                <?php get_sidebar(); ?>
            </div>
                
        </div>
        
    </section>

</div>

<?php get_footer(); ?>