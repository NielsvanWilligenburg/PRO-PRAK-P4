<?php
/** @var string $title */
/** @var string $content */
?>

<div class="page--default">

    <?php if($title): ?>
    <?php endif; ?>

    <?php if($content): ?>
        <div class="test">
        <?php echo $content; ?>
        </div>
    <?php endif; ?>

</div>
