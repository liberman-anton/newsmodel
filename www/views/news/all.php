<?php foreach ($items as $item): ?>
    <h1><?php echo 'id ' . $item->id . ': ' . $item->title; ?></h1>
    <div><?php echo $item->text; ?></div>
<?php endforeach; ?>
