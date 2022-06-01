<?php

/** config for home template **/

/** @var string $title */
/** @var string $content */




$arguments = ['post_type' => 'reviews', 'numberposts' => 4, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$listOfRieviews = get_posts($arguments);

// var_dump($listOfRieviews);
render('views/templates/home.php', ['title' => $title, 'content' => $content]);


?>


<div class="row">
<?php foreach ($listOfRieviews as $review) : ?>
    <div class="card">
        <h1><?php echo $review->post_title; ?></h1>
        <img src=<?php echo get_field('image', $review->ID)['url'] ?> alt="">
        <p><?php echo $review->post_content; ?></p>
        <div class="line">
            <p><?php echo get_field('score', $review->ID) ?></p>
            <p><a href="<?php echo get_field('url', $review->ID) ?>">Klik hier</a></p>
        </div>
    </div>
<?php endforeach ?>
</div>