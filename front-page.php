<?php get_header(); ?>

    <div class="container">

    <?php  
        while(have_posts()){
            the_post(); ?>

            <p>
            <?=the_content();?>
            </p>

<?php
        }
    ?>
    </div>

<?php get_footer(); ?>
