<?php get_header(); ?>

<div class="bg-color">
    <section class="inner-page">

    <?php  while(have_posts()){
            the_post(); ?>

        <div class="about-page">
            
            <div class="about-page-item">

                <h1 class="bigTitle"><?php the_title(); ?></h1>
                <img src="<?php echo get_theme_file_uri('images/odedahay.jpg')?>" class="about-img">
                <?php the_content(); ?>

            </div>
            <div class="about-page-item border-line">
                
                <h3>Follow Me:</h3>
                <p>If you have any project that you want to get started, think you need my help with something or just fancy saying hey, then get in touch.</p>
                <?php get_template_part('template-parts/sidebar-social');?>
               
            </div>
        </div>
       
    <?php } ?>

    </section>
</div>


<?php get_footer(); ?>