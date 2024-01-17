<?php 

function university_files(){
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
    // if you want to load another css file, just follow what's on top
    // if you want to load a js file, change wp_enqueue_style to wp_enqueue_script
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'university_files');
// needs 2 arguments
// wp let us give it instructions and tell it what to do by using this add action function.
// first argument is where we tell wordpress what type of instructions we are giving it depending on what we are trying to do
// second argument is what we want the function is named

function university_features(){
    register_nav_menu('headerMenuLocation', 'Header Menu Locatin');
    //create a menu where you can call in the location you want

    register_nav_menu('footerMenuOne', 'Footer Location one');
    register_nav_menu('footerMenuTwo', 'Footer Location two');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features')
?>