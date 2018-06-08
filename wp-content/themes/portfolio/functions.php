<?php 
add_action('widgets_init', 'portfolio_init_sidebar');

add_action('init', 'portfolio_init_menu');


function portfolio_init_sidebar()
{
    register_sidebar(array(
        'name' => __('haut gauche', 'portfolio'),
        'id' => 'haut-gauche',
        'description' => __('region en haut à gauche', 'portfolio')
    ));
    register_sidebar(array(
        'name' => __('haut droit', 'portfolio'),
        'id' => 'haut-droit',
        'description' => __('region en haut à droite', 'portfolio')
    ));
    register_sidebar(array(
        'name' => __('entete', 'portfolio'),
        'id' => 'entete',
        'description' => __('region en entete', 'portfolio')
    ));
    register_sidebar(array(
        'name' => __('bas gauche', 'portfolio'),
        'id' => 'bas-gauche',
        'description' => __('region en bas à gauche', 'portfolio')
    ));
    register_sidebar(array(
        'name' => __('bas droit', 'portfolio'),
        'id' => 'bas-droit',
        'description' => __('region en bas à droite', 'portfolio')
    ));
}

function portfolio_init_menu()
{
    register_nav_menu('primary', __('Primary Menu', 'Portfolio'));
}