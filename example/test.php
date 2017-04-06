<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Barnebys\Protocol\Object;

$object = new Object();
$object->setTitle('Rolex 1956')
    ->setDescription('A fine watch in mint condition.');

echo $object;