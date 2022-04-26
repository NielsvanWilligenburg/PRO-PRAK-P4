<?php
/** @var string $title */
/** @var string $content */
?>

<div class="home">

    <?php if($title): ?>
        <h1><?php echo $title; ?></h1>
    <?php endif; ?>

    <?php if($content): ?>
        <?php echo $content; ?>
        <?php echo do_shortcode('[arandomnumber]'); ?>
    <?php endif; ?>

</div>
