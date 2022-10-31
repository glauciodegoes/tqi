<?php
// INCLUDES
require get_template_directory().'/include/setup.php';


// HOOKS
add_action('wp_enqueue_scripts', 'gt_theme_styles');
add_action('after_setup_theme', 'gt_after_setup');
add_action('widgets_init', 'gt_widgets');