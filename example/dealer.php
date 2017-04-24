<?php
use Barnebys\Protocol\Object;
use Barnebys\Protocol\Auction;
use Barnebys\Protocol\Price;

date_default_timezone_set('America/Los_Angeles');

require_once __DIR__ . '/../vendor/autoload.php';

$object = new Object();
$object ->setTitle('Rolex 1956')
        ->setDescription('A fine watch in mint condition.')
        ->setURL('http://test.com/lot/1234')
        ->setImage('http://test.com/lot/1234.jpg')
        ->setCategory('watches')
        ->setPrice(new Price(150, null, 'EUR'));

echo $object;