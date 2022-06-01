<?php

$post = get_post();
$title = get_the_title();
$content = get_the_content();
$score = get_field('score');
$image = get_field('image', $post->ID);
$url = get_field('url');

$categories = get_the_terms($post, 'reviewCategory');

?>




<div class="card">
    <h1><?php echo $title ?></h1>
    
    <img src=<?php echo $image['url']; ?> alt="">
    <p><?php echo $content ?></p>
    <div class="line">
        <p><?php echo $score ?></p>
        <p><?php echo $url ?></p>
    </div>