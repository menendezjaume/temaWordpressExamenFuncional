<?php

// Esta función hace...
function temazo_scripts()
{
    wp_enqueue_style("bootstrap_css", get_theme_file_uri("inc/css/bootstrap.min.css"), array(), "5.1", "all");
    wp_enqueue_style("blog_css", get_theme_file_uri("inc/css/blog.css"), array(), "1.0", "all");
    wp_enqueue_style("fonts_css", get_theme_file_uri("inc/css/fonts.css"), array(), "1.0", "all");
    
    wp_enqueue_style("style_css", get_theme_file_uri("style.css"), array(), "1.0", "all");
    wp_enqueue_script("bootstrap_js", get_theme_file_uri("inc/js/bootstrap.min.js"), array(), "5.1", true);
}

add_action("wp_enqueue_scripts", "temazo_scripts", 0);

function temazo_config()
{
    register_nav_menus(
        array(
            "temazo_menu_principal" => "Temazo menú principal",
            "temazo_footer_1" => "Temazo footer 1",
            "temazo_footer_2" => "Temazo footer 2",
        )
    );
}

add_action("after_setup_theme", "temazo_config", 0);

function register_navwalker()
{
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');
