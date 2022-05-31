<?php
/** config for home template **/

$title = get_the_title();
$content = get_the_content();

$arguments = ['post_type' => 'reviews', 'numberposts' => 4, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$listOfRieviews = get_posts($arguments);

// var_dump($listOfRieviews);
render('views/templates/home.php', ['title' => $title, 'content' => $content]);


?>


<ul>
    <?php foreach($listOfRieviews as $review): ?>
    <li><?php echo $review->post_title; ?></li>
    <?php endforeach ?>
</ul>