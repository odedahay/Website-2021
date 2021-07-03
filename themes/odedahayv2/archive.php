<?php get_header(); ?>

<div class="bg-color-right">
    <section class="inner-page">
  
    <h1 class="bigTitle"><?php echo get_the_archive_title(); ?></h1>
        <div class="portfolio-page">
            
            <div class="about-page-item">
            
                <?php while(have_posts()){
                    the_post(); ?>
                    
                    <div class="works-summary">
                    <div class="works-summary-item">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('worksList'); ?>
                        </a>
                            <!-- <img src="<?php //echo get_theme_file_uri('images/odedahay.jpg')?>" class=""> -->
                       </div>
                        <div class="works-summary-item">
                            <h2 class="portfolio-title-list portflio-btn">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
                            </h2>
                            <p class="post-date"><?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></P>
                            <p><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                            <p><a href="<?php the_permalink(); ?>" class="button front-btn">Read more</a></p>
                       </div>
                       
                    </div>

                <?php } echo paginate_links();
                ?>
            </div>

            <div class="about-page-item border-line">
                <?php get_sidebar(); ?>
                <div class="sidebar-left">
                    <?php get_template_part('template-parts/sidebar-social');?>
                </div>
            </div>
                
        </div>

    </section>

</div>

<?php get_footer(); ?>