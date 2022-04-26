<?php

/**
* Template Name: Fortnite
**/

$title = get_the_title();
$content = get_the_content();

render('views/templates/fortnite.php', ['title' => $title, 'content' => $content]);

?>