<?php
/** @var string $title */
/** @var string $content */
?>

<div class="fortnite">

    <?php if($title): ?>
        <h1 id><?php echo $title; ?></h1>
    <?php endif; ?>

    <?php if($content): ?>
        <?php echo $content; ?>
    <?php endif; ?>

</div>
