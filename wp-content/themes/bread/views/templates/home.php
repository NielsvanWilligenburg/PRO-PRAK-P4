<?php
/** @var string $title */
/** @var string $content */
?>

<div class="home">

    <?php if($title): ?>
        <h1><?php echo $title; ?></h1>
    <?php endif; ?>

    <?php include(__DIR__. './navbar.php'); ?>

    
     <?php //if($content): ?>
        <?php //echo $content; ?>
        <?php //echo do_shortcode('[arandomnumber]'); ?>
    

</div>