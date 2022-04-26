<?php
/** @var string $title */
/** @var string $content */
?>

<div class="page--default">

    <?php if($title): ?>
        <h1><?php echo $title; ?></h1>
    <?php endif; ?>

    <?php if($content): ?>
        <div class="test">
        <?php echo $content; ?>
        </div>
    <?php endif; ?>

</div>
