<?php

add_action('admin_menu', 'random_menu_page');

function random_menu_page(){
    add_menu_page('Brood', 'Brood!', 'manage_options', 'dough', 'page_render', 'dashicons-smiley');
}


function page_render(){
    echo '
    <h1>Brood:</h1>
    <p>Brood is erg lekker</p>
    
    <br>
    
    <h2>Maar waarom Brood?</h2>
    <p>Het is erg knapperig en erg lekker, een banaan op je brood kan ook.</p>
    
    <img class="temp" src="'. get_stylesheet_directory_uri() . '/assets/img/brood.jpg' . '" style="width: 25%">
    ';
}