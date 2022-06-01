<?php
/** config for home template **/

/** @var string $title */
/** @var string $content */

$title = get_the_title();
$content = get_the_content();
$score = get_field('score');
$image = get_field('image', get_post()->ID);
$url = get_field('url', $review->ID);

$arguments = ['post_type' => 'reviews', 'numberposts' => 4, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$listOfRieviews = get_posts($arguments);

// var_dump($listOfRieviews);
render('views/templates/home.php', ['title' => $title, 'content' => $content]);


?>


    <?php foreach($listOfRieviews as $review): ?>
        <div class="card">
    <h1><?php echo $title ?></h1>
    
    <img src=<?php echo $image['url']; ?> alt="">
    <p><?php echo $content ?></p>
    <div class="line">
        <p><?php echo $score ?></p>
        <p><?php echo $url ?></p>
    </div>
    <?php endforeach ?>