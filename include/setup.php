<?php
function gt_theme_styles() {
    wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('template_css', get_template_directory_uri().'/assets/css/template.css');

    wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('script_js', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '', true);
}

function gt_after_setup() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    register_nav_menu('primary', __('Primary Menu'));
}

function gt_widgets() {
    register_sidebar(array(
      'name' => __('Sidebar Lateral'),
      'id' => 'gt_sidebar',
      'descripition' => __('Sidebar Lateral'),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widget_title">',
      'after_title' => '</h4>'
    ));
}