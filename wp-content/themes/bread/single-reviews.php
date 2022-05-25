<?php

/** @var string $title */
/** @var string $content */

$title = get_the_title();
$content = get_the_content();
$score = get_field('score');
$image = get_field('image', get_post()->ID);
$url = get_field('url');
?>




<div class="card">
    <h1><?php echo $title ?></h1>
    
    <img src=<?php echo $image['url']; ?> alt="">
    <p><?php echo $content ?></p>
    <div class="line">
        <p><?php echo $score ?></p>
        <p><?php echo $url ?></p>
    </div>