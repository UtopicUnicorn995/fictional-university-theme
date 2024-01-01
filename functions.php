<?php 

function university_files(){
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
    // if you want to load another css file, just follow what's on top
    // if you want to load a js file, change wp_enqueue_style to wp_enqueue_script
}

add_action('wp_enqueue_scripts', 'university_files');
// needs 2 arguments
// wp let us give it instructions and tell it what to do by using this add action function.
// first argument is where we tell wordpress what type of instructions we are giving it depending on what we are trying to do
// second argument is what we want the function is named
?>