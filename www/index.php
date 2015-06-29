<?php

require __DIR__ . '/models/News.php';

$items = News::getAll();
var_dump($items);
echo 'good!';
