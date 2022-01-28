<?php get_header(); ?>

    <?php
    while (have_posts()) {
        the_post(); ?>
            
            <?php get_template_part('template-parts/content/content', 'single'); ?>

    <?php } ?>

<?php get_footer(); ?>