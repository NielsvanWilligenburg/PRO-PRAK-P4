<?php
/* Template Name: About us */

$title = get_the_title();
$content = get_the_content();

?>

<div class="aboutus">
    <h1><?php echo $title ?></h1>
    <p><?php echo $content ?></p>
</div>