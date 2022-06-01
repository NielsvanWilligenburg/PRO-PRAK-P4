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
    <div class="card">
    <h1><?php echo $title ?></h1>
    
    <img src=<?php echo $image['url']; ?> alt="">
    <p><?php echo $content ?></p>
    <div class="line">
        <p><?php echo $score ?></p>
        <p><a href="<?php echo get_field('url', $review->ID) ?>">Klik hier voor een website</a></p>
    </div>
    <?php endforeach ?>
</ul>