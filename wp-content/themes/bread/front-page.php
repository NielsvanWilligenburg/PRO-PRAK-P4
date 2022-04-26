<?php
/** config for home template **/

$title = get_the_title();
$content = get_the_content();

render('views/templates/home.php', ['title' => $title, 'content' => $content]);