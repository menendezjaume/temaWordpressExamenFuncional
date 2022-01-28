<?php get_header(); ?>

    <?php  
        while(have_posts()){
            the_post(); ?>
            
            <h2>
            <?php the_title(); ?>
            </h2>

            <p>
            <?=the_content();?>
            </p>

            <?php
        }
    ?>

<?php get_footer(); ?>
