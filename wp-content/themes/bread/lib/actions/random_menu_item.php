<?php

add_action('admin_menu', 'random_menu_page');

function random_menu_page(){
    add_menu_page('Wonder reviews', 'Wonder reviews!', 'manage_options', 'dough', 'page_render', 'dashicons-smiley');
}


function page_render(){
    echo '
    <h1></h1>
    <p></p>
    
    <br>
    
    <h2>Welkom bij Wonder reviews!</h2>
    <p></p>
    
    <img class="temp" src="'. get_stylesheet_directory_uri() . '' . '" style="width: 25%">
    ';
}