<?php
    
        function theme_support()
        {
            add_theme_support('title-tag');
        }

        function reg_styl()
        {
            wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css');
            wp_enqueue_style( 'bootstrap' );
            wp_register_script('js','https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js',[],false,true);
            wp_enqueue_script('js');
        }

        add_action('after_setup_theme','theme_support');
        add_action('wp_enqueue_scripts','reg_styl');