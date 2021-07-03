<?php get_header(); ?>

<div class="bg-color">
    <section class="inner-page">

    <?php  while(have_posts()){
            the_post(); ?>

        <div class="about-page">
            
            <div class="about-page-item">

                <h1 class="bigTitle"><?php the_title(); ?></h1>
               
                <?php the_content(); ?>
                <?php get_template_part('template-parts/sidebar-social');?>
               

            </div>
            <div class="about-page-item border-line">
                
               
            </div>
        </div>
       
    <?php } ?>

    </section>
</div>


<?php get_footer(); ?>