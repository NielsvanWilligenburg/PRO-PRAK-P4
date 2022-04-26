<?php

/**
* Template Name: Assetto
**/

$title = get_the_title();
$content = get_the_content();

render('views/templates/assetto.php', ['title' => $title, 'content' => $content]);

?>