<?php


// require 'Classes/MultiImageUpload.php';
// $checkbox = new ImageInput('AldiBnbImages');

function setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'Header Menu');
}

add_action('after_setup_theme', 'setup');
