<?php

    if (!function_exists('import_style'))
    {
        function import_style()
        {
            wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css');
            wp_enqueue_style('boolean', get_template_directory_uri() . '/style.css');
        }

        add_action('wp_enqueue_scripts', 'import_style');
    }

?>
