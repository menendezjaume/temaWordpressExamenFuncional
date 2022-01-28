</div>
</div>
</main>
</body>
<footer class="blog-footer">
    <div class="contariner">
        <div class="row">
            <div class="col-md-6"><?php echo get_bloginfo("description") ?> </div>
            <div class="col-md-3">
                <?php
                wp_nav_menu(
                    array('theme_location'  => 'temazo_footer_1',)
                );
                ?>
            </div>
            <div class="col-md-3">
                <?php
                wp_nav_menu(
                    array('theme_location'  => 'temazo_footer_2',)
                );
                ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</html>