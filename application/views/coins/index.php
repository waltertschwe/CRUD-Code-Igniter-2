<?php foreach ($coins as $coins_item): ?>

    <h2><?php echo $coins_item['type'] ?></h2>
    <div id="main">
        <?php echo $coins_item['description'] ?>
    </div>
    <p></p>

<?php endforeach ?>