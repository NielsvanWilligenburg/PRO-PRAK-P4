<?php

    $title = 'Reviews archief';

    $arguments = ['post_type' => 'reviews', 'numberposts' => 5, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
    $reviewsItemCollection = get_posts($arguments);

    var_dump($reviewsItemCollection);

?>